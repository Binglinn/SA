<?php
    session_start();

    $mes_content = $_POST['mes_content'];
    $mes_time = date("Y/m/d H:i:s",time()+8*60*60);
    $user_email = $_SESSION['user_email'];
    $find_id = $_POST['find_id'];


    $link = mysqli_connect("localhost", "root", "12345678", "sa");

    $id_sql="select max(mes_id) from mes_find";
    $rs_id=mysqli_query($link, $id_sql);
    $record=mysqli_fetch_row($rs_id);

    $mes_id=$record[0]+1;

    $find_sql = "select find_id,find_name from find";
    $rs_find = mysqli_query($link,$find_sql);
    while($record_find=mysqli_fetch_assoc($rs_find)){
        if($find_id == $record_find['find_id']){
            $sql = "INSERT INTO mes_find (mes_id,mes_content,mes_time,user_email,find_id,find_name) VALUES ('$mes_id', '$mes_content', '$mes_time','$user_email','$find_id','$record_find[find_name]')";
            if(mysqli_query($link, $sql)){
                header("location:message_find.php");
            }
        }else{
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