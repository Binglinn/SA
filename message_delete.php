<?php
  // $method="delete";
  $lose_id = $_GET["lose_id"];
  $find_id = $_GET["find_id"];
  $mes_id=$_GET["mes_id"];
  $lose_name = $_GET["lose_name"];
  $find_name = $_GET["find_name"];

  $link=mysqli_connect("localhost","root","12345678","sa");

  if($lose_id!=""){
    $sql="delete from mes where mes_id='$mes_id' ";
    if(mysqli_query($link,$sql)){
        header("location:message.php?hidden_lose_id=$lose_id&lose_name=$lose_name");
        }
    }

  if($find_id!=""){
    $sql="delete from mes where mes_id='$mes_id' ";  
    if(mysqli_query($link,$sql)){
        header("location:message_find.php?hidden_find_id=$find_id&find_name=$find_name");
        }
    }
    ?>
