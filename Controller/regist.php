<?php
// バリデーション参考http://life-collections.com/dev/programming/php_validation_check
require_once("../Common/Smarty.php");
require_once("../Form/RegistForm.php");
require_once("../DAO/ConnectDAO.php");
require_once("../DAO/MasterStaffsDAO.php");
error_reporting(E_ALL & ~E_NOTICE);

$smarty = getSmarty();           //スマーティインスタンスを取得
$registForm = new RegistForm();  //フォームインスタンスの生成
$connectDAO = new ConnectDAO();  //DAOインスタンスを生成
$masterStaffsDAO = new MasterStaffsDAO();

$registForm->staffName =$_POST["staff_name"];
$registForm->age =$_POST["age"];
$registForm->gender =$_POST["gender"];
$registForm->address =$_POST["address"];
$registForm->tellphone =$_POST["tellphone"];
$registForm->postalCode =$_POST["postal_code"];
$registForm->loginId =$_POST["login_id"];
$registForm->password =$_POST["password"];
$registForm->confilmPassword =$_POST["confilm_password"];

$smarty->assign("registForm",$registForm);

//【1】フォームチェック～null or emptyかどうか
if(!isset($registForm->staffName) || $registForm->staffName === ""){
    $registForm->staffNameError = "名前を入力して下さい";
}

if(!isset($registForm->age) || $registForm->age === ""){
    $registForm->ageError = "年齢を入力して下さい";
}

if(!isset($registForm->gender) || $registForm->gender === ""){
    $registForm->genderError = "性別を選択して下さい";
}

if(!isset($registForm->address) || $registForm->address === ""){
    $registForm->addressError = "住所を入力して下さい";
}

if(!isset($registForm->tellphone) || $registForm->tellphone === ""){
    $registForm->tellphoneError = "電話番号を入力して下さい";
}

if(!isset($registForm->postalCode) || $registForm->postalCode === ""){
    $registForm->postalCodeError = "郵便番号を入力して下さい";
}

if(!isset($registForm->loginId) || $registForm->loginId === ""){
    $registForm->loginIdError = "ログインＩＤを入力して下さい";
}

if(!isset($registForm->password) || $registForm->password === ""){
    $registForm->passwordError = "パスワードを入力して下さい";
}

if(!isset($registForm->confilmPassword) || $registForm->confilmPassword === ""){
    $registForm->confilmPasswordError = "確認用のパスワードを入力して下さい";
}

$smarty->display("regist.tpl");