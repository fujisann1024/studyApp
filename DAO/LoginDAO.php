<?php
class LoginDAO extends BaseDAO{
    public function getStaffDates($loginId){
        try{
            $db = getDB();

            $db->prepare(
           "SELECT password,miss__count,miss_flag,miss_time
            FROM master_staffs
            WHERE login_id = :login_id"
            );



        }catch(PDOException $e){
            $errorMsg = "{$e->getMessage()}\n{$e->getFile()}\n{$e->getLine()}";
            print $errorMsg;
            die();
        }finally{

        }
    }
}
?>