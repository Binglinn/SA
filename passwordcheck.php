<?php
session_start();
//比對驗證碼

$link=mysqli_connect("localhost","root","12345678","sa");
$uservalidate=$_POST["validate"];
$user_password=$_POST["user_password"]; 
$user_password2=$_POST["user_password2"];
$user_email=$_SESSION["user_email"];

if($user_password != $user_password2){
    ?>
    <script>
        alert("確認密碼有誤");
        history.go(-1);
    </script>
    <?php
}elseif($uservalidate != $_SESSION["validate"]){
    ?>
    <script>
        alert("驗證碼有誤");
        history.go(-1);
    </script>
    <?php
}else{
    ?>
    <script>
        alert("修改成功");
        location.href="login.php";
    </script>
    <?php
}



?>