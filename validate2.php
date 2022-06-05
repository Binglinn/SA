<?php
session_start();
//產生、發送驗證碼
$user_email=$_GET["user_email"];


$link=mysqli_connect("localhost","root","12345678","sa");
if(!$link){
    echo "連接失敗" . mysqli_connect_error(); 
}
$sql_mail = "select * from user where user_email='$user_email'";
$rs=mysqli_query($link,$sql_mail); 
$record=mysqli_fetch_assoc($rs);
$user_mail = $record['user_email'];
echo $user_mail;

    validateEmail($user_email,$user_name,$user_phone,$user_password,$user_mail);
    function validateEmail($user_email,$user_name,$user_phone,$user_password,$user_mail) {
        $regex_gapp = "/^([0-9]{9}+@+[gapp]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";
        $regex_fjumail = "/^([0-9]{9}+@+[mail]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";
        $email_check=false;
        if((preg_match($regex_gapp, $user_email) && $user_email != $user_mail )|| (preg_match($regex_fjumail, $user_email) && $user_email != $user_mail )){   
            $limit = 4;
            $validate=random_int(10 ** ($limit - 1), (10 ** $limit) - 1);
                $_SESSION["validate"]=$validate;
                $subject="系統驗證信";
                $body="使用者您好:<br>本信為輔仁大學失物招領系統註冊驗證信<br>以下為您的註冊驗證碼<br><strong><h1 style='color:red'>".$validate."<br></h1>請回到網頁輸入驗證碼進行註冊，如非本人操作請忽略。</strong><br><br>感謝您的合作，<br>輔大失物招領系統";
            
                header("location:sendEmail.php?name=$user_name&email=$user_email&subject=$subject&body=$body&check=true");
        }
        elseif($user_email == $user_mail){
            ?>
            <script>
                alert("帳號重複");          
                history.go(-1);
            </script>
            <?php
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