<?php
class LoginForm{
    //プロパティ
    public string $loginId;
    public string $password;

    public string $loginIdError;
    public string $passwordError;

    function __construct($loginId,$password,$loginIdError,$passwordError){
        $this->loginId = $loginId;
        $this->password = $password;
        $this->loginIdError = $loginIdError;
        $this->passwordError = $passwordError;
    }
 
}
?>