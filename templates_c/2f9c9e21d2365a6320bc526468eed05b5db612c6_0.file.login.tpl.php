<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-19 10:37:15
  from 'C:\Apache\Apache24\vhost\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fddd7db719d25_94084571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f9c9e21d2365a6320bc526468eed05b5db612c6' => 
    array (
      0 => 'C:\\Apache\\Apache24\\vhost\\templates\\login.tpl',
      1 => 1608374232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fddd7db719d25_94084571 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name = "description" content="TestApplication">
    <meta name = "keyword" content="Test,Application,テスト,アプリ">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Style-Type" content="text/javascript">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta name = "auther" content="">
    <meta name = "generator"　content = "">
    <meta name="viewport" content="width=device-width,user-scalable=0">
    <title>ログイン画面</title>
     <link rel = "stylesheets" href = "css/base.css">
</head>
<body>
    <div id = wrapper>
        <header>
            <h1>TestApplication</h1>
        </header>
        <div id = "container">
            <form action="../Controller/login.php" method="post">

                <label for = "loginId">ログインID(メールアドレス)</label><br>
                <input id = "loginId" type = "text" name = "loginId" value = "<?php echo $_smarty_tpl->tpl_vars['loginForm']->value->loginId;?>
"><br>
                <div><?php echo $_smarty_tpl->tpl_vars['loginForm']->value->loginIdError;?>
</div>

                <label for = "password">パスワード</label><br>
                <input id = "password" type = "password" name = "password" value = "<?php echo $_smarty_tpl->tpl_vars['loginForm']->value->password;?>
"><br>
                <div><?php echo $_smarty_tpl->tpl_vars['loginForm']->value->passwordError;?>
</div>

                <input id = "btn" type = "submit" value = "ログイン">
            </form>
        </div>
    </div>
</body>
</html>

<?php }
}
