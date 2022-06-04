<?php
session_start();
//產生、發送驗證碼
$user_email=$_GET["user_email"];

    validateEmail($user_email,$user_name,$user_phone,$user_password);
    function validateEmail($user_email,$user_name,$user_phone,$user_password) {
        $regex_gapp = "/^([0-9]{9}+@+[gapp]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";
        $regex_fjumail = "/^([0-9]{9}+@+[mail]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";
        $email_check=false;
        if(preg_match($regex_gapp, $user_email) || preg_match($regex_fjumail, $user_email) ){   
            $limit = 4;
            $validate=random_int(10 ** ($limit - 1), (10 ** $limit) - 1);
                $_SESSION["validate"]=$validate;
                $subject="系統驗證信";
                $body="使用者您好:<br/>以下為您的註冊驗證信為<br><strong><h1 style='color:red'>".$validate."<br></h1>請回到網頁輸入驗證碼進行註冊";
            
                header("location:sendEmail.php?name=$user_name&email=$user_email&subject=$subject&body=$body");
            
            
        }
        else{
            ?>
            <script>
                alert("帳號格式錯誤");
                history.go(-1);;
            </script>
            <?php
            }
        }

        ?>