<?php
    session_start();
    $find_id = $_SESSION['find_id'];
    $find_name = $_POST['name'];
    $find_describe = $_POST['describe'];
    $find_place = $_POST['place'];
    $find_contact = $_POST['contact'];

    $link = mysqli_connect("localhost", "root", "12345678", "sa");

    if(!$link){
        echo "連接失敗" . mysqli_connect_error(); 
    }
    mysqli_query($link, "set names utf8");

         
    //上傳檔案
    $upload_dir = $_FILES['image']['name'];
    $sql_origin="select find_picture from find where find_id=$find_id";
    $rs_origin=mysqli_query($link,$sql_origin);
    $record_origin=mysqli_fetch_assoc($rs_origin);

    if(empty($upload_dir)){
        $upload_dir=$record_origin['find_picture'];
    }
    getimagesize();
    list($width, $height, $type, $attr) = getimagesize("assets/img/$upload_dir");
    
    if($width != $height ) { ?>
       <script>
            alert("圖片長寬須為1：1");
            history.go(-1);
        </script>
    <?php }

     else{
        $upload_file = $_FILES['image']['tmp_name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/'.$_FILES['image']['name']);
        $sql = "UPDATE find SET find_name='$find_name',find_describe='$find_describe',find_place='$find_place',find_contact='$find_contact',find_picture='$upload_dir' where find_id = '$find_id'";
    }


    if(mysqli_query($link,$sql)){
        ?>
        <script>
            alert("修改成功");
            parent.location.href='self-find.php';
        </script>
        <?php
     }
     else{
        echo $sql; 
     }
?>