<?php
use PHPMailer\PHPMailer\PHPMailer;


if(isset($_GET['name']) && isset($_GET['email'])){
   
    $name = $_GET['name'];
    $email = $_GET['email'];
    $subject = $_GET['subject'];
    $body = $_GET['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    
    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "409402049@gapp.fju.edu.tw";
    $mail->Password = 'brian001002003';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress($email);
    $mail->Subject = $subject;
    $mail->Body = $body;
   
    if($mail->send()){
        echo "<script>alert('寄信成功!');location.href='newpassword.php'</script>";
    }
    else
    {
        echo "<script>alert('寄信失敗!');location.href='forget.php'</script>";
    }
   
}

?>