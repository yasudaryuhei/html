<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>セッション生成</h1>
<?php
// session_start();
// $_SESSION["date"] = "TEST中";
// echo "セッションID：" . session_id() . "<br>";
// echo "状況 : (".$_SESSION["date"].")<br><br>";

// 空チェック　関数
function NullCheck($data)
{
if(!$data){
return "入力して下さい。";
}else{
return $data;
}
}
// メールアドレスの確認
function EmailCheck($data)
{
if(!$data){
return "入力して下さい。";
}else{
if(!preg_match('/^[a-z0-9._+^~-]+@[a-z0-9.-]+$/i', $data)){
return "正しいメールアドレスを入力し下さい。";
}
return $data;
}
}
// 電話番号の確認
function PhoneCheck($data)
{
if(!$data){
return "入力して下さい。";
}else{
if(!preg_match('/^\d{2,4}-\d{3,4}-\d{4}$|^\d{10,11}$/', $data)){
return "正しい電話番号を入力し下さい。";
}
return $data;
}
}

$formdata_name = NullCheck($_REQUEST['name']);
$formdata_company_name = NullCheck($_REQUEST['company_name']);
$formdata_email = EmailCheck($_REQUEST['email']);
$formdata_phonenumber = PhoneCheck($_REQUEST['phonenumber']);
$formdata_content = NullCheck($_REQUEST['content']);
$formdata_contact_detail = NullCheck($_REQUEST['contact_detail']);

echo "formdata_name:".$formdata_name."<br>";
echo "formdata_company_name:".$formdata_company_name."<br>";
echo "formdata_email:".$formdata_email."<br>";
echo "formdata_phonenumber:".$formdata_phonenumber."<br>";
echo "formdata_content:".$formdata_content."<br>";
echo "formdata_contact_detail:".$formdata_contact_detail."<br>";
?>
<a href="./php8-1.php">別のページ</a>
</body>
</html>