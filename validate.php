<?php
session_start();
//產生、發送驗證碼
$user_email=$_GET["user_email"];
$_SESSION["user_email"]=$user_email;

$link=mysqli_connect("localhost","root","12345678","sa");
$sql="select * from user where user_email='$user_email'";
$rs=mysqli_query($link,$sql);
$record=mysqli_fetch_assoc($rs);
$user_name=$record["user_name"];

$limit = 4;
$validate=random_int(10 ** ($limit - 1), (10 ** $limit) - 1);
    $_SESSION["validate"]=$validate;
    $subject="系統驗證信";
    $body=$user_name."您好:<br/>以下為您的修改密碼驗證信為<br><strong><h1 style='color:red'>".$validate."<br></h1>請回到網頁輸入驗證碼進行密碼修改";

    header("location:sendEmail.php?name=$user_name&email=$user_email&subject=$subject&body=$body");

?>