<?php
    session_start();
    if($_SESSION["user_admin"]=="admin"){
         $lose_status = "分類";
         $lose_office = $_POST["office"];
    } else{
        $lose_status = "即時刊登";
        $lose_office = "";
    }
    $lose_classify = $_POST["classify"];
    $lose_name = $_POST["name"];
    $lose_describe = $_POST["describe"];
    $lose_place = $_POST["place"];
    $lose_date = $_POST["date"];
    $lose_postTime = date("Y/m/d H:i:s",time()+8*60*60);
    $user_email = $_SESSION['user_email'];
    
    $link=mysqli_connect("localhost","root","12345678","sa");
    $id_sql="select max(lose_id) from lose";
    $rs_id=mysqli_query($link, $id_sql);
    $record=mysqli_fetch_row($rs_id);
    $lose_id=$record[0]+1;//當物品加1，lose_id+1

    //上傳照片
    $upload_dir= $_FILES['image']['name'];

    //偵測照片長寬比
    getimagesize();
    list($width, $height) = getimagesize("assets/img/$upload_dir");
    
    if($width != $height ) { ?>
       <script>
            alert("圖片長寬須為1：1");
            history.go(-1);
        </script>
    <?php }
    else{
        $upload_file = $_FILES['image']['tmp_name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/'.$_FILES['image']['name']);//上傳照片至assets/img此資料夾
        $sql = "insert into lose (lose_id,lose_classify,lose_name,lose_describe,lose_place,lose_date,lose_postTime,lose_picture,lose_status,lose_office,user_email) values ('$lose_id','$lose_classify','$lose_name','$lose_describe','$lose_place','$lose_date','$lose_postTime','$upload_dir','$lose_status','$lose_office','$user_email')";
    }

    if(mysqli_query($link, $sql)){
        if($lose_status=="分類"){
            header("location:classify.php");
        }
        else{
            header("location:index.php");
        }
    }else{
        echo $sql;
    } 
?>