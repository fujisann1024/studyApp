
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
                <input id = "staff_name" type = "text" name = "staff_name" value = ""><br>

                <label for = "age">年齢</label><br>
                <input id = "age" type = "text" name = "age" value = ""><br>

                <label for = "man">男</label><br>
                <input id = "man" type = "radio" name = "gender" value = ""><br>
                <label for = "woman">女</label><br>
                <input id = "woman" type = "radio" name = "gender" value = ""><br>

                <label for = "address">住所</label><br>
                <input id = "address" type = "text" name = "address" value = ""><br>

                <label for = "loginId">ログインID(メールアドレス)</label><br>
                <input id = "loginId" type = "text" name = "loginId" value = ""><br>

                <label for = "password">パスワード</label><br>
                <input id = "password" type = "password" name = "password" value = ""><br>

                <label for = "confilm_password">パスワード(確認)</label><br>
                <input id = "confilm_password" type = "password" name = "password" value = ""><br>
                
                <input id = "btn" type = "submit" value = "確認">
            </form>
        </div>
    </div>
</body>
</html>

