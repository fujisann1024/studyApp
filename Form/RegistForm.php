<?php
class RgistForm{
    public string $staff_name;
    public int $age;
    public string $gender;
    public string $address;
    public string $loginId;
    public string $password;

    //エラーメッセージ
    public string $staff_nameError;
    public int $ageError;
    public string $genderError;
    public string $addressError;
    public string $loginIdError;
    public string $passwordError;

    function __construct($staff_name,$age,$gender,$address,$loginId,$password,
    $staff_nameError,$ageError,$genderError,$addressError,$loginIdError,$passwordError){
        $this->staff_name = $staff_name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->loginId = $loginId;
        $this->password = $password;
        $this->staff_nameError = $staff_nameError;
        $this->ageError = $ageError;
        $this->genderError = $genderError;
        $this->addressError = $addressError;
        $this->loginIdError = $loginIdError;
        $this->passwordError = $passwordError;

    }
}

?>