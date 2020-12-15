<?php
require_once("../Common/Smarty.php");

$smarty = getSmarty();

$query = $_GET["member"];

switch($query){
    case "login":
        $smarty->display("login.tpl");
    break;

    case "regist":
        $smarty->display("regist.tpl");
    break;
}
?>