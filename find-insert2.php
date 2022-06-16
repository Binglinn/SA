<?php
    session_start();
    
    $find_name = $_POST["name"];
    $find_describe = $_POST["describe"];
    $find_place = $_POST["place"];
    $find_postTime = date("Y/m/d H:i:s",time()+8*60*60);
    $find_contact=$_POST["contact"];
    $user_email = $_SESSION["user_email"];
    
    $link=mysqli_connect("localhost","root","12345678","sa");
    
    $id_sql="select max(find_id) from find";
    $rs_id=mysqli_query($link, $id_sql);
    $record=mysqli_fetch_row($rs_id);

    $find_id=$record[0]+1; //物品+1，find_id+1
   
    //上傳照片
    $upload_dir= $_FILES['image']['name'];

    //偵測照片長寬比
    getimagesize();
    list($width, $height, $type, $attr) = getimagesize("assets/img/$upload_dir");
    
    if($width != $height ) { ?>
       <script>
            alert("圖片長寬須為1：1");
            history.go(-1);
        </script>
    <?php 
    }

     else{
        $upload_file = $_FILES['image']['tmp_name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/'.$_FILES['image']['name']);//上傳照片至assets/img此資料夾
        $sql = "insert into find (find_id,find_name,find_describe,find_place,find_postTime,find_picture,find_contact,user_email) values ('$find_id','$find_name','$find_describe','$find_place','$find_postTime','$upload_dir','$find_contact','$user_email')";
    }

    if(mysqli_query($link, $sql)){
        header("location:find.php");
    }else{
        echo $sql;
    }
   
?>

