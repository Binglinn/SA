<?php
    session_start();
    
    $find_name = $_POST["name"];
    $find_describe = $_POST["describe"];
    $find_place = $_POST["place"];
    $find_contact=$_POST["contact"];
    $user_email = $_SESSION["user_email"];
    

    $link=mysqli_connect("localhost","root","12345678","sa");
    
    
    $id_sql="select max(find_id) from find";
    $rs_id=mysqli_query($link, $id_sql);
    $record=mysqli_fetch_row($rs_id);

    $find_id=$record[0]+1; 

   
            
    //上傳檔案
    $upload_dir= $_FILES['image']['name'];
    $upload_file = $_FILES['image']['tmp_name'];
    move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/'.$_FILES['image']['name']);

    $sql = "insert into find (find_id,find_name,find_describe,find_place,find_picture,find_contact,user_email) values ('$find_id','$find_name','$find_describe','$find_place','$upload_dir','$find_contact','$user_email')";
   
    if(mysqli_query($link, $sql)){
        header("location:find.php");
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
    <a href="find.php"><button>回首頁</button></a>
</body>
</html>