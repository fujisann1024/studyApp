<?php
class Validation{
    //全角だったらtrueを返す
    public function isMultiByteChar($formDate){
        //strlen
        //引数が半角->1byte = 1×文字数、引数が全角->2byte以上 = 2×文字数
        if(strlen($formDate) == mb_strlen($formDate,'UTF-8')){
            //戻り値が一致すればfalse=>全角でない
            return false;
        }
        return true;
    }

    //半角数字だったらtrueを返す
    public function isNumeric($formDate){
        if(!preg_match("/^[0-9]+$/",$formDate)){
            return false;
        }
        return true;
    }

    function isMailAddress($formDate) {
        # First, we check that there's one @ symbol, and that the lengths are right
        if (!preg_match("/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/",
            $formDate)) {
           
            return false;
        }
        return true;
    }
}

$validation = new Validation();
// $judge1 = $validation->isMultiByteChar("あああ");//true
// $judge2 = $validation->isMultiByteChar("aaa");//false
// $b =$validation->isNumeric("1"); true
// $c = $validation->isNumeric("１"); false
$e = $validation->isMailAddress("fujiｓｓｓ11@gmail.com");
var_dump($e);


?>