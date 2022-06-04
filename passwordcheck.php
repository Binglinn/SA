<?php
session_start();
//比對驗證碼

$link=mysqli_connect("localhost","root","12345678","sa");
$uservalidate=$_POST["validate"];
$user_password=$_POST["user_password"];
$user_email=$_SESSION["user_email"];



if($uservalidate==$_SESSION["validate"]){
    $sql = "UPDATE user SET user_password = '$user_password' where user_email='$user_email'";
    mysqli_query($link,$sql);
    echo "<script>alert('修改成功!');location.href='login.php';</script>";

}else{
    echo "<script>alert('修改失敗哭哭笑死孤兒!');location.href='newpassword.php';</script>";
}




?>