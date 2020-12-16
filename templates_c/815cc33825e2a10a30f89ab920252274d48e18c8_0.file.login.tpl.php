<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-16 15:31:20
  from 'C:\Apache\Apache24\vhost\View\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fda28486fb816_80159791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815cc33825e2a10a30f89ab920252274d48e18c8' => 
    array (
      0 => 'C:\\Apache\\Apache24\\vhost\\View\\templates\\login.tpl',
      1 => 1608132647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fda28486fb816_80159791 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- 文書型の定義を宣言する-->
<!DOCTYPE html>
<!-- htmlタグ ～ html文書だということを宣言-->
<html>
<!-- headタグ～ヘッダ情報を記述-->
<head>
    <!-- 文字コードの指定-->
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <!--検索エンジンに関係-->
    <!--　文書の説明-->
    <meta name = "description" content="TestApplication">
    <!--キーワードの指定-->
    <meta name = "keyword" content="Test,Application,テスト,アプリ">
    <!--直接タグにスタイル属性など書き込む際、読み込みの誤作動を起こさないようにする-->
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Style-Type" content="text/javascript">
    <!--キャッシュの制御と有効期限の指定-->
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <!--文書の作者を表記-->
    <meta name = "auther" content="">
    <!--文書を作成したエディタを表記-->
    <meta name = "generator"　content = "">
    <meta name="viewport" content="width=device-width,user-scalable=0">

    <!--ブラウザのツールバーに表示-->
    <title>ようこそ</title>
     <link rel = "stylesheets" href = "css/base.css">
</head>
<!-- bodyタグ～ブラウザ上に表示される文書を記述-->
<body>
    <div id = wrapper>
        <header>

        </header>
        <div id = "container">
            <form>
                <label for = "loginId">ログインID(メールアドレス)</label><br>
                <input id = "loginId" type = "text" name = "loginId" value = ""><br>

                <label for = "password">パスワード</label><br>
                <input id = "password" type = "password" name = "password" value = ""><br>
                
                <input id = "btn" type = "submit" value = "ログイン">
            </form>
        </div>
    </div>
</body>
</html>

<?php }
}
