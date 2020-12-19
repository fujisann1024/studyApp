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
                <input id = "loginId" type = "text" name = "loginId" value = "{$loginForm->loginId}"><br>
                <div>{$loginForm->loginIdError}</div>

                <label for = "password">パスワード</label><br>
                <input id = "password" type = "password" name = "password" value = "{$loginForm->password}"><br>
                <div>{$loginForm->passwordError}</div>

                <input id = "btn" type = "submit" value = "ログイン">
            </form>
        </div>
    </div>
</body>
</html>

