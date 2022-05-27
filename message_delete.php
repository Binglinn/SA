<?php
  // $method="delete";
  $lose_id = $_GET["lose_id"];
  $find_id = $_GET["find_id"];
  $mes_id=$_GET["mes_id"];

  $link=mysqli_connect("localhost","root","12345678","sa");

  if($lose_id!=""){
    $sql="delete from mes where mes_id='$mes_id' ";
    if(mysqli_query($link,$sql)){
        header("location:message.php?hidden_lose_id=$lose_id");
        }
    }

  if($find_id!=""){
    $sql="delete from mes where mes_id='$mes_id' ";  
    if(mysqli_query($link,$sql)){
        header("location:message_find.php?hidden_find_id=$find_id");
        }
    }
    ?>
