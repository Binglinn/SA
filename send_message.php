<?php
    session_start();

    $mes_content = $_POST['mes_content'];
    $mes_time = date("Y/m/d H:i:s",time()+8*60*60);
    $user_email = $_SESSION['user_email'];
    $user_name = $_SESSION['user_name'];
    $lose_id = $_POST['lose_id'];

    $link = mysqli_connect("localhost", "root", "12345678", "sa");

    $id_sql="select max(mes_id) from mes";
    $rs_id=mysqli_query($link, $id_sql);
    $record=mysqli_fetch_row($rs_id);

    $mes_id=$record[0]+1;

    $lose_sql = "select lose_id,lose_name from lose";
    $rs_lose = mysqli_query($link,$lose_sql);
    while($record_lose=mysqli_fetch_assoc($rs_lose)){
        if($lose_id == $record_lose['lose_id']){
            $sql = "INSERT INTO mes (mes_id,mes_content,mes_time,user_email,lose_id,lose_name,user_name) VALUES ('$mes_id', '$mes_content', '$mes_time', '$user_email','$lose_id','$record_lose[lose_name]','$user_name')";
            if(mysqli_query($link, $sql)){
                header("location:message.php");
            }
        }else{
            ?>
            <script>
            alert("沒有此物品編號，請重新輸入");
            parent.location.href='message.php';</script>
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