<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-17 16:26:59
  from 'C:\Apache\Apache24\vhost\templates\regist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdb86d313ebb6_92029378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43a768de2fa2cab7f640c25288e99cedb2a43a49' => 
    array (
      0 => 'C:\\Apache\\Apache24\\vhost\\templates\\regist.tpl',
      1 => 1608222407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdb86d313ebb6_92029378 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name = "description" content="TestApplication">
    <meta name = "keyword" content="Test,Application,テスト,アプリ">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Style-Type" content="text/javascript">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name = "auther" content="">
    <meta name = "generator"　content = "">
    <meta name="viewport" content="width=device-width,user-scalable=0">
    <title>新規会員登録画面</title>
    <link rel = "stylesheets" href = "css/base.css">
</head>
<body>
    <div id = wrapper>
        <header>
            <h1>TestApplication</h1>
        </header>
        <div id = "container">
            <form>
            
                <label for = "staff_name">社員名</label><br>
                <input id = "staff_name" type = "text" name = "staff_name" value = "<?php echo $_smarty_tpl->tpl_vars['registForm']->value->staffName;?>
"><br>
                <div class = "error"><?php echo $_smarty_tpl->tpl_vars['registForm']->value->staffNameError;?>
</div>

                <label for = "age">年齢</label><br>
                <input id = "age" type = "text" name = "age" value = "<?php echo $_smarty_tpl->tpl_vars['registForm']->value->age;?>
"><br>
                <div class = "error"><?php echo $_smarty_tpl->tpl_vars['registForm']->value->ageError;?>
</div>

                <label for = "man">男</label>
                <input id = "man" type = "radio" name = "gender">
                <label for = "woman">女</label>
                <input id = "woman" type = "radio" name = "gender"><br>
                <div class = "error"><?php echo $_smarty_tpl->tpl_vars['registForm']->value->genderError;?>
</div>

                <label for = "address">住所</label><br>
                <input id = "address" type = "text" name = "address" value = "<?php echo $_smarty_tpl->tpl_vars['registForm']->value->address;?>
"><br>
                <div class = "error"><?php echo $_smarty_tpl->tpl_vars['registForm']->value->addressError;?>
</div>

                <label for = "tellphone">電話番号</label><br>
                <input id = "tellphone" type = "text" name = "tellphone" value = "<?php echo $_smarty_tpl->tpl_vars['registForm']->value->tellphone;?>
"><br>
                <div class = "error"><?php echo $_smarty_tpl->tpl_vars['registForm']->value->tellphoneError;?>
</div>

                <label for = "postalCode">郵便番号</label><br>
                <input id = "postalCode" type = "text" name = "postalCode" value = "<?php echo $_smarty_tpl->tpl_vars['registForm']->value->postalCode;?>
"><br>
                <div class = "error"><?php echo $_smarty_tpl->tpl_vars['registForm']->value->postalCodeError;?>
</div>

                <label for = "loginId">ログインID(メールアドレス)</label><br>
                <input id = "loginId" type = "text" name = "loginId" value = "<?php echo $_smarty_tpl->tpl_vars['registForm']->value->loginId;?>
"><br>
                <div class = "error"><?php echo $_smarty_tpl->tpl_vars['registForm']->value->loginIdError;?>
</div>

                <label for = "password">パスワード</label><br>
                <input id = "password" type = "password" name = "password" value = "<?php echo $_smarty_tpl->tpl_vars['registForm']->value->password;?>
"><br>
                <div class = "error"><?php echo $_smarty_tpl->tpl_vars['registForm']->value->passwordError;?>
</div>

                <label for = "confilm_password">パスワード(確認)</label><br>
                <input id = "confilm_password" type = "password" name = "password" value = ""><br>
                <div class = "error"><?php echo $_smarty_tpl->tpl_vars['registForm']->value->passwordError;?>
</div>
                
                <input id = "btn" type = "submit" value = "確認">
            </form>
        </div>
    </div>
</body>
</html>

<?php }
}
