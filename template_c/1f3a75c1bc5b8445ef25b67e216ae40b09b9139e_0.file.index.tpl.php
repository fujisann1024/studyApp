<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 12:26:04
  from 'C:\Apache\Apache24\vhost\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcb7c5cb2f509_94597223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f3a75c1bc5b8445ef25b67e216ae40b09b9139e' => 
    array (
      0 => 'C:\\Apache\\Apache24\\vhost\\smarty\\templates\\index.tpl',
      1 => 1607170952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcb7c5cb2f509_94597223 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width,user-scalable=0">
    <title>Smarty</title>
    <style>
        body{
            margin: 0;
        }
    </style>
</head>
<body>
    <div id = "wrapper">
        <header>
            <h1>Smartyで表示しています</h1>
        </header>

        <div id = "container">
            <section>
                <div id = "message">
                    <p>サーバーからのメッセージ</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
                </div>
            </section>
        </div>
    </div>
</body>
</html><?php }
}
