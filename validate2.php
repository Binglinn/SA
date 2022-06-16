<?php
session_start();
$user_email=$_GET["user_email"];//取使用者輸入的信箱

$link=mysqli_connect("localhost","root","12345678","sa");
if(!$link){
    echo "連接失敗" . mysqli_connect_error(); 
}
$sql_mail = "select * from user where user_email='$user_email'";
$rs=mysqli_query($link,$sql_mail); 
$record=mysqli_fetch_assoc($rs);
$user_mail = $record['user_email'];//資料庫的信箱

    validateEmail($user_email,$user_name,$user_phone,$user_password,$user_mail);
    function validateEmail($user_email,$user_name,$user_phone,$user_password,$user_mail) {
        $regex_gapp = "/^([0-9]{9}+@+[gapp]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";//偵測信箱格式
        $regex_fjumail = "/^([0-9]{9}+@+[mail]+(\.)+[fju]+(\.)+[edu]+(\.)+[tw]{2})$/";//偵測信箱格式
        $email_check=false;
        if((preg_match($regex_gapp, $user_email) && $user_email != $user_mail )|| (preg_match($regex_fjumail, $user_email) && $user_email != $user_mail )){  
            //preg_match($regex_gapp, $user_email) -> user_email是否符合regex_gapp設的格式
            $limit = 4; //驗證碼4碼
            $validate=random_int(10 ** ($limit - 1), (10 ** $limit) - 1);//產生隨機驗證碼
                $_SESSION["validate"]=$validate;
                $subject="系統驗證信";
                //信件標題
                $body="使用者您好:<br>本信為輔仁大學失物招領系統註冊驗證信<br>以下為您的註冊驗證碼<br><strong><h1 style='color:red'>".$validate."<br></h1>請回到網頁輸入驗證碼進行註冊，如非本人操作請忽略。</strong><br><br>感謝您的合作，<br>輔大失物招領系統";
                //信件內文
                header("location:sendEmail.php?name=$user_name&email=$user_email&subject=$subject&body=$body&check=true");
        }
        elseif($user_email == ''){
            ?>
            <script>
                alert("請輸入帳號");          
                history.go(-1);
            </script>
            <?php
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