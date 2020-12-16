<?php
require_once("C:/Apache/Apache24/smarty/libs/Smarty.class.php");

//スマーティーインスタンスを返す関数
function getSmarty(){
    $smarty = new Smarty();

    $smarty->template_dir = 'C:/Apache/Apache24/vhost/templates/';
    $smarty->compile_dir  = 'C:/Apache/Apache24/vhost/templates_c/';
    $smarty->config_dir   = 'C:/Apache/Apache24/vhost/configs/';
    $smarty->cache_dir    = 'C:/Apache/Apache24/vhost/cache/';

    return $smarty;
}