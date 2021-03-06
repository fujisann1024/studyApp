<?php
// バリデーション参考http://life-collections.com/dev/programming/php_validation_check
require_once("../Common/Smarty.php");
require_once("../Form/RegistForm.php");
require_once("../DAO/ConnectDAO.php");
require_once("../DAO/MasterStaffsDAO.php");
require_once("../Common/Validation.php");
error_reporting(E_ALL & ~E_NOTICE);

$smarty = getSmarty();           //スマーティインスタンスを取得
$registForm = new RegistForm();  //フォームインスタンスの生成
$connectDAO = new ConnectDAO();  //DAOインスタンスを生成
$masterStaffsDAO = new MasterStaffsDAO();
$validation = new Validation();//Validationインスタンスを生成

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

//内容の型が正しいか

if(empty($registForm->staffNameError) && !$validation->isMultiByteChar($registForm->staffName)){
    $registForm->staffNameError = "名前は全角で入力して下さい";
}

if(empty($registForm->ageError) && !$validation->isNumeric($registForm->age)){
    $registForm->ageError = "年齢は半角数字で入力して下さい";
}

if(empty($registForm->addressError) && !$validation->isMultiByteChar($registForm->address)){
    $registForm->addressError = "住所は全角で入力して下さい";
}

//指定の範囲内か

if(empty($registForm->staffNameError) && strlen($registForm->staffName) >= 100){
    $registForm->staffNameError = "名前が長すぎます";
}

if(empty($registForm->ageError) && 120 < $registForm->age){   
        $registForm->ageError = "正しく年齢を入力して下さい";
}

if(empty($registForm->addressError) && $registForm->address >= 100 ){
    $registForm->staffNameError = "正しく住所を入力して下さい";
}


if(empty($registForm->passwordError) && $registForm->password <= 8 ){
    $registForm->passwordError = "パスワードは8文字以上で入力して下さい";
}

if(empty($registForm->passwordError) && $registForm->password > 255 ){
    $registForm->passwordError = "パスワードが長すぎます";
}

//指定のフォーマットで入力されているか

if(empty($registForm->tellphneError) && !$validation->isPhoneNumber($registForm->tellphone) ){
    $registForm->tellphoneError = "指定のフォーマットで入力して下さい";
}

if(empty($registForm->postalCodeError) && !$validation->isPostCode($registForm->postalCode) ){
    $registForm->postalCodeError = "指定のフォーマットで入力して下さい";
}

if(empty($registForm->loginIdError) && !$validation->isMailAddress($registForm->loginId) ){
    $registForm->loginIdError = "指定のフォーマットで入力して下さい";
}

//パスワードと確認用のパスワードが一致しているか

if(empty($registForm->passwordError) && !($registForm->password === $registForm->confilmPassword) ){
    $registForm->confilmPasswordError = "確認用のパスワードと不一致です";
}

$db = $connectDAO->getDB();

//データベースからlogin_idをキーにしてログインＩＤと名前を取りだす
$getInfo = $masterStaffsDAO->getLoginDates($db,$registForm->loginId);

if(empty($registForm->loginIdError) && !$getInfo){
    $loginIdError = "こちらのログインＩＤは既に使われております";
}

if(empty($registForm->staffNameError) &&
   empty($registForm->ageError) &&
   empty($registForm->genderError) &&
   empty($registForm->addressError) &&
   empty($registForm->tellphoneError) &&
   empty($registForm->postalCodeError) &&
   empty($registForm->loginIdError) &&
   empty($registForm->passwordError) &&
   empty($registForm->confilmPasswordError)
   ){
    $smarty->display("check.tpl");
}else{
    $smarty->display("regist.tpl");
}

