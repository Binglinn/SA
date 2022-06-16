<?php
  // $method="delete";
  session_start();
  $lose_id = $_GET["lose_id"];
 
  $link=mysqli_connect("localhost","root","12345678","sa");
  $sql="delete from lose where lose_id='$lose_id' ";

    if(mysqli_query($link,$sql)){
      $sql_mes="delete from mes where lose_id='$lose_id'";
        if(mysqli_query($link,$sql_mes)){
        header("location:classify.php");
      }
    }
?>