<?php
    session_start();
    $lose_status = "即時刊登";
    $lose_office = "NULL";
    $lose_classify = $_POST["classify"];
    $lose_name = $_POST["name"];
    $lose_describe = $_POST["describe"];
    $lose_place = $_POST["place"];
    $lose_date = $_POST["date"];
    $lose_time = date("Y/m/d H:i:s",time()+8*60*60);
    $user_email = $_SESSION["user_email"];
    

    $link=mysqli_connect("localhost","root","12345678","sa");
    
    
    $id_sql="select max(lose_id) from lose";
    $rs_id=mysqli_query($link, $id_sql);
    $record=mysqli_fetch_row($rs_id);

    $lose_id=$record[0]+1; 

   
            
    //上傳檔案
    $upload_dir= $_FILES['image']['name'];
    $upload_file = $_FILES['image']['tmp_name'];
    move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/'.$_FILES['image']['name']);

    $sql = "insert into lose (lose_id,lose_classify,lose_name,lose_describe,lose_place,lose_date,lose_time,lose_picture,lose_status,lose_office,user_email) values ('$lose_id','$lose_classify','$lose_name','$lose_describe','$lose_place','$lose_date','$lose_time','$upload_dir','$lose_status','$lose_office','$user_email')";
   
    if(mysqli_query($link, $sql)){
        header("location:index.php");
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