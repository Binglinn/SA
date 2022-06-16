<?php
session_start();
//產生、發送驗證碼
$user_email=$_GET["user_email"];
$_SESSION["user_email"]=$user_email;

$link=mysqli_connect("localhost","root","12345678","sa");
if(!$link){
    echo "連接失敗" . mysqli_connect_error(); 
}
$sql_mail = "select * from user where user_email='$user_email'";
$rs=mysqli_query($link,$sql_mail); 
$record=mysqli_fetch_assoc($rs);
$user_mail = $record['user_email'];

if($user_email == $user_mail){   
    $limit = 4;//驗證碼4碼
    $validate=random_int(10 ** ($limit - 1), (10 ** $limit) - 1);//產生隨機數
    $_SESSION["validate"]=$validate;
    $subject="系統驗證信";//信件標題
    $body=$user_name."您好:<br>本信為輔仁大學失物招領系統修改密碼驗證信<br>以下為您的修改密碼驗證碼<br><strong><h1 style='color:red'>".$validate."<br></h1>請回到網頁輸入驗證碼進行密碼修改，如非本人操作請忽略。</strong><br><br>感謝你的合作，<br>輔大失物招領系統";
    //信件內文
    header("location:sendEmail.php?name=$user_name&email=$user_email&subject=$subject&body=$body&method=forget");   
}else{
    ?>
    <script>
        alert("無此帳號");
        history.go(-1);;
    </script>
    <?php
    }
?>