<?php
session_start();
$user_email=$_POST['user_email'];
$_SESSION['user_email'] = $user_email;
$user_password=$_POST['user_password'];

$link=mysqli_connect("localhost","root","12345678","sa");

$sql="select * from user where user_email= '$user_email' and user_password='$user_password'";

$result=mysqli_query($link,$sql);

if($record = mysqli_fetch_assoc($result)){
    $_SESSION['user_name']= $record['user_name'];//將user_name放入session在每頁header判斷時使用
    if($record["user_admin"]=='admin'){//將user_admin放入session在每頁header判斷時使用
        $_SESSION["user_admin"]="admin";
        header('location:index.php');
    }
    else if($record["user_admin"] == 'user'){
        $_SESSION["user_admin"]="user";
        header('location:index.php');
    }
}else{
    ?>
    <script>
        alert("帳號密碼錯誤");
        history.go(-1);
    </script>
    <?php
}
?>
