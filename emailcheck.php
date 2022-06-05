<?php
    session_start();
    $user_email=$_POST["user_email"];
    $user_name=$_POST["user_name"];
    $user_phone=$_POST["user_phone"];
    $user_password=$_POST["user_password"];
    $validate_register=$_POST['validate_register'];
    $validate=$_SESSION['validate'];


        $link=mysqli_connect("localhost","root","12345678","sa");
        if(!$link){
            echo "連接失敗" . mysqli_connect_error(); 
        }
        $sql_mail = "select * from user where user_email='$user_email'";
        $rs=mysqli_query($link,$sql_mail); 
        $record=mysqli_fetch_assoc($rs);
        $user_mail = $record['user_email'];

        if($validate_register != $validate){
             ?>
            <script>
                alert("驗證碼錯誤");
                history.go(-1);
            </script>
            <?php
         }else{
            $sql = "INSERT INTO user (user_email, user_name, user_phone, user_password, user_admin) VALUES ('$user_email','$user_name', '$user_phone','$user_password','user')";
            mysqli_query($link, $sql);
            ?>
            <script>
                alert("註冊成功，請登入");
                parent.location.href='login.php';
            </script>
            <?php 
    }

?>