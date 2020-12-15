<?php
class LoginForm{
    //プロパティ
    public string $loginId;
    public string $password;
    public string $loginIdError;
    public string $passwordError;

    //コンストラクタ
    function __construct(
        string $loginId, string $password,
        string $loginIdError, string $passwordError
    ){
        $this->loginId = $loginId;
        $this->password = $password;
        $this->loginIdError = $loginIdError;
        $this->passwordError = $passwordError;
    }
    
}
?>