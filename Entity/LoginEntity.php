<?php

class LoginEntity{
    public int $staff_id;
    public string $staff_name;
    public string $login_id;
    public string $password;
    public int $miss_count;
    public bool $miss_flag;
    public string $miss_time;
    public string $login_time;

    //コンストラクタ
    function __construct(string $password,string $miss_count,bool $miss_flag,$miss_time){
        $this->password = $password;
        $this->miss_count = $miss_count;
        $this->miss_flag = $miss_flag;
        $this->miss_time = $miss_time;
    }
}
?>