<?php
class BaseDAO{

    public function getDB(){
        $dsn = "pgsql:dbname=AppDB host=localhost port=5432";
        $user = "postgres";
        $pass = "tehepero";
        $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        try{
            $db = new PDO($dsn,$user,$pass,$option);
            return $db;
        }catch(PDOException $e){
            $errorMsg = "{$e->getMessage()}\n{$e->getFile()}\n{$e->getLine()}";
            print $errorMsg;
            die();
        }finally{
            $db = null;
        }

    }
}
?>