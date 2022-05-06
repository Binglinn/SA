<?php
session_start();
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];

$link=mysqli_connect("localhost","root","12345678","sa");

$sql="select * from user where user_email= '$user_email' and user_password='$user_password'";


$result=mysqli_query($link,$sql);


if($record = mysqli_fetch_assoc($result)){
    if($record["user_admin"]=='admin'){
        $_SESSION["user_admin"]="admin";
        header('location:shop.html');
    }
    else if($record["user_admin"] == 'user'){
        $_SESSION["user_admin"]="user";
        header('location:index.php');
    }
}else{
    ?>
    <script>
    alert("帳號密碼錯誤");
    parent.location.href='login.php';</script>
    <?php
}
    


?>
