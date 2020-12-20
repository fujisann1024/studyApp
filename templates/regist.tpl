
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
            <form action = "../Controller/regist.php" method="post">
            
                <label for = "staff_name">社員名</label><br>
                <input id = "staff_name" type = "text" name = "staff_name" value = "{$registForm->staffName|escape:'html'}"><br>
                <div class = "error">{$registForm->staffNameError}</div>

                <label for = "age">年齢</label><br>
                <input id = "age" type = "text" name = "age" value = "{$registForm->age|escape:'html'}"><br>
                <div class = "error">{$registForm->ageError}</div>

                <label for = "man">男</label>
                <input id = "man" type = "radio" name = "gender" value = "男">
                <label for = "woman">女</label>
                <input id = "woman" type = "radio" name = "gender" value = "女"><br>
                <div class = "error">{$registForm->genderError}</div>

                <label for = "address">住所</label><br>
                <input id = "address" type = "text" name = "address" value = "{$registForm->address|escape:'html'}"><br>
                <div class = "error">{$registForm->addressError}</div>

                <label for = "tellphone">電話番号</label><br>
                <input id = "tellphone" type = "text" name = "tellphone" value = "{$registForm->tellphone|escape:'html'}"><br>
                <div class = "error">{$registForm->tellphoneError}</div>

                <label for = "postalCode">郵便番号</label><br>
                <input id = "postalCode" type = "text" name = "postal_code" value = "{$registForm->postalCode|escape:'html'}"><br>
                <div class = "error">{$registForm->postalCodeError}</div>

                <label for = "loginId">ログインID(メールアドレス)</label><br>
                <input id = "loginId" type = "text" name = "login_id" value = "{$registForm->loginId|escape:'html'}"><br>
                <div class = "error">{$registForm->loginIdError}</div>

                <label for = "password">パスワード</label><br>
                <input id = "password" type = "password" name = "password" value = "{$registForm->password|escape:'html'}"><br>
                <div class = "error">{$registForm->passwordError}</div>

                <label for = "confilmPassword">パスワード(確認)</label><br>
                <input id = "confilmPassword" type = "password" name = "confilm_password" value = "{$registForm->confilmPassword|escape:'html'}"><br>
                <div class = "error">{$registForm->confilmPasswordError}</div>
                
                <input id = "btn" type = "submit" value = "確認">
            </form>
        </div>
    </div>
</body>
</html>

