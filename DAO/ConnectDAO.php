<?php
class ConnectDAO{

    public function getDB(){
        $dsn = "pgsql:dbname=AppDB host=localhost port=5432";
        $user = "postgres";
        $pass = "rootroot";
        $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  //エラーが起きたら例外を投げてくれる
            PDO::ATTR_EMULATE_PREPARES => false        
            //エミュレーションをＯＦＦにする
            //executeされる前にエラーが発生したら例外を投げる
            //エミュレーションＯＮ
            //実行速度が速い
            //SQLをexecuteメソッド上に複数記述できる
        ];

        try{
            $db = new PDO($dsn,$user,$pass,$option);
            return $db;
        }catch(PDOException $e){
            $this->errorMsg($e);
        }finally{
            $db = null;
        }

    }

    public function errorMsg(object $e){
        $errorMsg = "{$e->getMessage()}\n{$e->getFile()}\n{$e->getLine()}";
         print $errorMsg;
         die();
    }
}

// $db = new BaseDAO();
// var_dump($db);
?>