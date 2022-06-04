<?php
session_start();
//產生、發送驗證碼
$user_email=$_GET["user_email"];

$limit = 4;
$validate=random_int(10 ** ($limit - 1), (10 ** $limit) - 1);
    $_SESSION["validate"]=$validate;
    $subject="系統驗證信";
    $body="使用者您好:<br/>以下為您的註冊驗證信為<br><strong><h1 style='color:red'>".$validate."<br></h1>請回到網頁輸入驗證碼進行註冊";

    header("location:sendEmail.php?name=$user_name&email=$user_email&subject=$subject&body=$body");

?>