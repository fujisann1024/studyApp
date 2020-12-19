<?php
require_once("../Common/Smarty.php");
require_once("../Form/LoginForm.php");
require_once("../DAO/LoginDAO.php");
require_once("../DAO/ConnectDAO.php");

$smarty = getSmarty();              //Smartyインスタンスを取得

$loginForm = new LoginForm();       //フォームインスタンスを生成
$loginDAO = new LoginDAO();         //DAOインスタンスを生成
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
    $loginForm->$passwordError = "パスワードを入力して下さい";
}

if(empty($loginForm->passwordError)){
    $loginDates = $loginDAO->getStaffDates($loginForm->loginId);

    if(!$loginDates){
        $loginForm->passwordError = "ログインＩＤかパスワードが間違っています";
    }
}

if(empty($loginForm->passwordError) && $loginDates["miss_flag"]){
    $loginForm->passwordError = "アカウントがロックされています";
}

if(empty($loginForm->passwordError) && $loginDates["password"] !== $loginForm->password){
    
    try{
        //ミス回数を1増やし、ミス時間を登録する
        $pdo = $db->prepare(
            "UPDATE master_staffs
             SET miss_count = miss_count + 1,
                 miss_time = :miss_time"
        );
        //トランザクション処理
        $db->beginTransaction();
        try{
            $pdo->bindValue(":miss_time",date("Y-m-d H:i:d"),PDO::PARAM_STR);
            $pdo->execute();
            $pdo->commit();
        }catch(PDOException $e){
            $pdo->rollback();
            throw $e;
        }
    }catch(PDOException $e){
        $connectDAO->errorMsg($e);
    }finally{
        //データベースを切断する
        $db = null;            
    }
    $loginForm->passwordError = "ログインＩＤかパスワードが間違っています";
    
}

//エラーチェックをすべて通過したら
if(empty($loginForm->loginIdError) && empty($loginForm->passwordError)){
    try{
        $db = $connectDAO->getDB();

        $pdo = $db->prepare(
            "UPDATE master_staffs
             SET miss_count = :miss_count,
                 miss_time = null,
                 login_time = :login_time"
        );
        //トランザクション処理
        $db->beginTransaction();
        try{
            $pdo->bindValue(":miss_count",0,PDO::PARAM_INT);
            $pdo->bindValue(":login_time",date("Y-m-d H:i:d"),PDO::PARAM_STR);
            $pdo->execute();
            $pdo->commit();
        }catch(PDOException $e){
            $pdo->rollback();
            throw $e;
        }
    }catch(PDOException $e){
        $connectDAO->errorMsg($e);
    }finally{
        //データベースを切断する
        $db = null;            
    }
    
}
