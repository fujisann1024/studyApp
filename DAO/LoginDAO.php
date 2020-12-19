<?php
require_once("ConnectDAO.php");
class LoginDAO{
    public function getStaffDates(object $db,string $loginId){
        try{
            //prepare～用意する
            //SQL文の準備
            //名前付きプレースホルダーの利用～?(疑問符プレースホルダー)だと数が増えた時に把握しにくい
            $pdo = $db->prepare(
           "SELECT password,miss_count,miss_flag,miss_time
            FROM master_staffs
            WHERE login_id = :login_id"
            );

            //名前付きプレースホルダーに値をセット
            $pdo->bindValue(":login_id",$loginId);

            //execute～実行
            //SQL文を実行する
            $pdo->execute();

            //fetch～取ってくる
            //PDO::FETCH_ASSOC～結果をカラムをキーとした連想配列を返す
            $loginDates = $pdo->fetch(PDO::FETCH_ASSOC);
                       
        }catch(PDOException $e){
            $db->errorMsg($e);
        }finally{
            //データベースを切断する
            $db = null;            
        }
        return $loginDates;
    }

}

// $connectDAO = new ConnectDAO();
// $db = $connectDAO->getDB();
// var_dump($db);
// $loginDAO = new LoginDAO();
// $loginDates = $loginDAO->getStaffDates($db,"kato@email.com");
// var_dump($loginDates);
?>