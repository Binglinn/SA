<?php
    session_start();
    $user_email=$_POST["user_email"];
    $user_name=$_POST["user_name"];
    $user_phone=$_POST["user_phone"];
    $user_password=$_POST["user_password"];
    $validate_register=$_POST['validate_register'];
    $validate=$_SESSION['validate'];

    validateEmail($user_email,$user_name,$user_phone,$user_password);
    function validateEmail($user_email,$user_name,$user_phone,$user_password) {
        $regex_gapp = "/^([0-9]{9}+@+[gapp]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";
        $regex_fjumail = "/^([0-9]{9}+@+[mail]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";
        $email_check=false;
        if(preg_match($regex_gapp, $user_email) || preg_match($regex_fjumail, $user_email) ){   
            $email_check=true;   
        }
        else{
            ?>
            <script>
                alert("帳號格式錯誤");
                history.go(-1);
            </script>
            <?php
        }
    }
        $link=mysqli_connect("localhost","root","12345678","sa");
        if(!$link){
            echo "連接失敗" . mysqli_connect_error(); 
        }
        $sql_mail = "select * from user where user_email='$user_email'";
        $rs=mysqli_query($link,$sql_mail); 
        $record=mysqli_fetch_assoc($rs);
        $user_mail = $record['user_email'];

        if($user_email == $user_mail){
             ?>
             <script>
                 alert("帳號重複!");
                 history.go(-1);
             </script>
             <?php 
         }elseif($validate_register != $validate){
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
                alert("註冊成功，請登入！");
                parent.location.href='login.php';
            </script>
            <?php 
    }



    
?>