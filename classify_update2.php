<?php
    session_start();
    $lose_id = $_POST['lose_id'];
    $lose_name = $_POST['name'];
    $lose_place = $_POST['place'];
    $lose_date = $_POST['date'];
    $lose_classify = $_POST['classify'];
    $lose_describe = $_POST['describe'];
    $lose_office = $_POST['office'];

    $link = mysqli_connect("localhost", "root", "12345678", "sa");

    if(!$link){
        echo "連接失敗" . mysqli_connect_error(); 
    }
    mysqli_query($link, "set names utf8");

         
    //上傳檔案
    $upload_dir= $_FILES['image']['name'];
    getimagesize();
    list($width, $height, $type, $attr) = getimagesize("assets/img/$upload_dir");
    
    if($width != $height ) { ?>
       <script>
            alert("圖片長寬須為1：1！");
            history.go(-1);
        </script>
    <?php }

     else{
        $upload_file = $_FILES['image']['tmp_name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/'.$_FILES['image']['name']);
        $sql = "UPDATE lose SET lose_classify='$lose_classify',lose_name='$lose_name',lose_describe='$lose_describe',lose_place='$lose_place',lose_date='$lose_date',lose_picture='$upload_dir',lose_office='$lose_office' where lose_id = '$lose_id'";
    }


    if(mysqli_query($link,$sql)){
        ?>
        <script>
            alert("修改成功！");
            history.go(-2);
        </script>
        <?php
     }
     else{
        echo $sql; 
     }
?>