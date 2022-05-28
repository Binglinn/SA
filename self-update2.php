<?php
        session_start();
        $user_email = $_SESSION['user_email'];

        $link = mysqli_connect("localhost", "root", "12345678", "sa");
        if(!$link){
            echo "連接失敗" . mysqli_connect_error(); 
        }
        mysqli_query($link, "set names utf8");

        if($_POST["change"]=="user_name"){
            $update_name=$_POST["user_name"];
            $sql_name="update user set user_name = '$update_name' where user_email='$user_email'";
            if(mysqli_query($link,$sql_name)){
                header("location:self-setting.php?new_name=$update_name");
            }
        }
        elseif($_POST["change"]=="phone"){
            $update_phone=$_POST["phone"];
            $sql_phone="update user set user_phone = '$update_phone' where user_email='$user_email'";
            if(mysqli_query($link,$sql_phone)){
                header("location:self-setting.php");
            }
        }
        elseif($_POST["change"]=="password"){

            $old_password=$_POST["old_password"];
            $update_password=$_POST["new_password"];
            $check_pssword=$_POST["check_password"];
            
            if($_POST["hidden_password"]==$old_password && $update_password==$check_pssword){
                $sql_pw="update user set user_password = '$update_password' where user_email='$user_email'";
                if(mysqli_query($link,$sql_pw)){
                    header("location:self-setting.php");
                }
            }else{
                ?>
                <script>
                    alert("舊密碼錯誤 或 確認密碼有誤");
                    history.go(-1);;
                </script>
            <?php
            }

            
        }
       
?>