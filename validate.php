<?php
session_start();
//產生、發送驗證碼
$user_email=$_GET["user_email"];
$_SESSION["user_email"]=$user_email;

validateEmail($user_email,$user_name,$user_phone,$user_password);
    function validateEmail($user_email,$user_name,$user_phone,$user_password) {
        $regex_gapp = "/^([0-9]{9}+@+[gapp]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";
        $regex_fjumail = "/^([0-9]{9}+@+[mail]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";
        $email_check=false;
        if(preg_match($regex_gapp, $user_email) || preg_match($regex_fjumail, $user_email) ){   
            $link=mysqli_connect("localhost","root","12345678","sa");
            $sql="select * from user where user_email='$user_email'";
            $rs=mysqli_query($link,$sql);
            $record=mysqli_fetch_assoc($rs);
            $user_name=$record["user_name"];
            
            $limit = 4;
            $validate=random_int(10 ** ($limit - 1), (10 ** $limit) - 1);
                $_SESSION["validate"]=$validate;
                $subject="系統驗證信";
                $body=$user_name."您好:<br>本信為輔仁大學失物招領系統修改密碼驗證信<br>以下為您的修改密碼驗證碼<br><strong><h1 style='color:red'>".$validate."<br></h1>請回到網頁輸入驗證碼進行密碼修改，如非本人操作請忽略。</strong><br><br>感謝你的合作，<br>輔大失物招領系統";
            
                header("location:sendEmail.php?name=$user_name&email=$user_email&subject=$subject&body=$body&method=forget");
            
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