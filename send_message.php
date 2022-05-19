<?php
    session_start();

    $mes_content = $_POST['mes_content'];
    $mes_time = date("Y/m/d H:i:s",time()+8*60*60);
    $user_email = $_SESSION['user_email'];
    $lose_id = $_POST['lose_id'];
    $find_id = $_POST['find_id'];

    $link = mysqli_connect("localhost", "root", "12345678", "sa");

    $id_sql="select max(mes_id) from mes";
    $rs_id=mysqli_query($link, $id_sql);
    $record=mysqli_fetch_row($rs_id);

    $mes_id=$record[0]+1;

    $lose_sql = "select lose_id ,lose_status from lose ";
    $rs_lose = mysqli_query($link,$lose_sql);

    while($record_lose=mysqli_fetch_assoc($rs_lose) ){
        if($lose_id == $record_lose['lose_id'] && $record_lose['lose_status']=="即時刊登"){
            $sql = "INSERT INTO mes (mes_id,mes_content,mes_time,user_email,lose_id,find_id) VALUES ('$mes_id', '$mes_content', '$mes_time', '$user_email','$lose_id','0')";
            if(mysqli_query($link, $sql)){
                header("location:message.php");
            }
        }else if($find_id==0){
            ?>
            <script>
            alert("沒有此物品編號，請重新輸入");
            parent.location.href='message.php';</script>
            <?php
        }
    }
    
    $find_sql = "select find_id from find";
    $rs_find = mysqli_query($link,$find_sql);
    while($record_find=mysqli_fetch_assoc($rs_find)){
        if($find_id == $record_find['find_id']){
            $sql = "INSERT INTO mes (mes_id,mes_content,mes_time,user_email,lose_id,find_id) VALUES ('$mes_id', '$mes_content', '$mes_time', '$user_email','0','$find_id')";
            if(mysqli_query($link, $sql)){
                header("location:message_find.php");
            }
        }else if ($lose_id==0){
            ?>
            <script>
            alert("沒有此物品編號，請重新輸入");
            parent.location.href='message_find.php';</script>
            <?php
        }
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