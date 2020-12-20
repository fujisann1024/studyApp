<?php
require_once("../Common/Smarty.php");
require_once("../Form/LoginForm.php");
require_once("../DAO/MasterStaffsDAO.php");
require_once("../DAO/ConnectDAO.php");

$smarty = getSmarty();              //Smartyインスタンスを取得

$loginForm = new LoginForm();       //フォームインスタンスを生成
$masterStaffsDAO = new MasterStaffsDAO();         //DAOインスタンスを生成
$connectDAO = new ConnectDAO();

$db = $connectDAO->getDB();         //PDOインスタンスを獲得

$loginDates = [];

//フォームから送られてきた内容をインスタンスのプロパティに格納しアサインする
$loginForm->loginId = $_POST["loginId"];
$loginForm->password = $_POST["password"];
$smarty->assign("loginForm",$loginForm);

//入力フォームチェック
if(!isset($loginForm->loginId) || $loginForm->loginId === ""){
    $loginForm->loginIdError = "ログインIDを入力して下さい";
}

if(!isset($loginForm->password) || $loginForm->password === ""){
    $loginForm->passwordError = "パスワードを入力して下さい";
}

if(empty($loginForm->passwordError)){
    $loginDates = $masterStaffsDAO->getStaffDates($db,$loginForm->loginId);

    if(!$loginDates){
        $loginForm->passwordError = "ログインＩＤかパスワードが間違っています";
    }
}

if(empty($loginForm->passwordError) && $loginDates["miss_flag"]){
    $loginForm->passwordError = "アカウントがロックされています";
}

//  直近のパスワード間違い時間から24時間以上経過していたらミス回数と間違い時間をリセットする
$diffHour = 0; //時間差を宣言
if(isset($loginDates["miss_time"])){
    $today = time();
    $missTime = strtotime($loginDates["miss_time"]);
    $diffTime = $today - $missTime;
    $diffHour = floor($diffTime / 60 / 60);
}


if(empty($loginForm->passwordError) && $diffHour >= 24){
    try{

        $resetMiss = $db->prepare(
            "UPDATE master_staffs
             SET miss_count = :miss_count,
                 miss_time = null
             WHERE login_id = :login_id"
        );
        //トランザクション処理
        $db->beginTransaction();
        try{
            $resetMiss->bindValue(":miss_count",0,PDO::PARAM_INT);
            $resetMiss->bindValue(":login_id",$loginForm->loginId,PDO::PARAM_STR);
            $resetMiss->execute();
            $db->commit();
        }catch(PDOException $e){
            $db->rollback();
            throw $e;
        }
    }catch(PDOException $e){
        $connectDAO->errorMsg($e);
    }
}

if(empty($loginForm->passwordError) && $loginDates["password"] !== $loginForm->password){
    
    try{
        //ミス回数を1増やし、ミス時間を登録する
        $setMiss = $db->prepare(
            "UPDATE master_staffs
             SET miss_count = miss_count + 1,
                 miss_time = :miss_time
             WHERE login_id = :login_id"
        );
        //トランザクション処理
        $db->beginTransaction();
        try{
            $setMiss->bindValue(":miss_time",date("Y-m-d H:i:d"),PDO::PARAM_STR);
            $setMiss->bindValue(":login_id",$loginForm->loginId,PDO::PARAM_STR);
            $setMiss->execute();
            $db->commit();
        }catch(PDOException $e){
            $db->rollback();
            throw $e;
        }
        $loginForm->passwordError = "ログインＩＤかパスワードが間違っています";
        
        //ミス回数が2回になってたらミスフラグを有効にする
        if($loginDates["miss_count"] === 2){
            $setAccountRock = $db->prepare(
                "UPDATE master_staffs
                 SET miss_flag = :miss_flag
                 WHERE login_id = :login_id"
            );
            //トランザクション処理
            $db->beginTransaction();
            try{
                $setAccountRock->bindValue(":miss_flag",TRUE);
                $setAccountRock->bindValue(":login_id",$loginForm->loginId,PDO::PARAM_STR);
                $setAccountRock->execute();
                $db->commit();
            }catch(PDOException $e){
                $db->rollback();
                throw $e;
            }
            $loginForm->passwordError = "アカウントをロックしました";
        }
    }catch(PDOException $e){
        $connectDAO->errorMsg($e);
    }
    
    
}

//エラーチェックをすべて通過したら
if(empty($loginForm->loginIdError) && empty($loginForm->passwordError)){
    try{

        $setLogin = $db->prepare(
            "UPDATE master_staffs
             SET miss_count = :miss_count,
                 miss_time = null,
                 login_time = :login_time
             WHERE login_id = :login_id"
        );
        //トランザクション処理
        $db->beginTransaction();
        try{
            $setLogin->bindValue(":miss_count",0,PDO::PARAM_INT);
            $setLogin->bindValue(":login_time",date("Y-m-d H:i:d"),PDO::PARAM_STR);
            $setLogin->execute();
            $db->commit();
        }catch(PDOException $e){
            $db->rollback();
            throw $e;
        }
    }catch(PDOException $e){
        $connectDAO->errorMsg($e);
    }finally{
        //データベースを切断する
        $db = null;            
    }
    $smarty->display("check.tpl");
}else{
    $db = null;
    $smarty->display("login.tpl");
}
