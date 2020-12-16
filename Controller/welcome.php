<?php
require_once("Common/Smarty.php");
require_once("Form/LoginForm.php");
require_once("Form/RegistForm.php");

$smarty = getSmarty();

//インスタンスを生成
$loginForm = new LoginForm("","","","");
$registForm = new RegistForm("","","","","","","","","","","","");

$query = $_GET["member"];

switch($query){
    case "login":
        $smarty->assing("loginForm",$loginForm);
        $smarty->display("login.tpl");
    break;

    case "regist":
        $smarty->assing("registForm",$registForm);
        $smarty->display("regist.tpl");
    break;
}
?>