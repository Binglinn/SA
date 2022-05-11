<?php
    session_start();

    $mes_content = $_POST['mes_content'];
    $mes_time = date("Y/m/d H:i:s",time()+8*60*60);
    $user_email = $_SESSION['user_email'];
    $lose_id = $_POST['lose_id'];

    $link = mysqli_connect("localhost", "root", "12345678", "sa");

    $id_sql="select max(mes_id) from mes";
    $rs_id=mysqli_query($link, $id_sql);
    $record=mysqli_fetch_row($rs_id);

    $mes_id=$record[0]+1;

    if(!$link){
        echo "連接失敗" . mysqli_connect_error(); 
    }
    mysqli_query($link, "set names utf8");
    $sql = "INSERT INTO mes (mes_id,mes_content,mes_time,user_email,lose_id) VALUES ('$mes_id', '$mes_content', '$mes_time', '$user_email','$lose_id')";

    if(mysqli_query($link, $sql)){
        header("location:message.php");
    }else{
        echo $sql;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><button>回首頁</button></a>
</body>
</html>