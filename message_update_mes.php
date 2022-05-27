<?php
    $mes_content = $_POST['mes_content'];
    $mes_id = $_POST['mes_id'];

    $link = mysqli_connect("localhost", "root", "12345678", "sa");

    if(!$link){
        echo "連接失敗" . mysqli_connect_error(); 
    }

    mysqli_query($link, "set names utf8");

        $sql = "UPDATE mes SET mes_content = '$mes_content' where mes_id = '$mes_id'";

    $result = mysqli_query($link, $sql);

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

