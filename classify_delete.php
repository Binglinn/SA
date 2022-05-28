<?php
  // $method="delete";
  session_start();
  $lose_id = $_GET["lose_id"];
 
  $link=mysqli_connect("localhost","root","12345678","sa");
  $sql="delete from lose where lose_id='$lose_id' ";

    if(mysqli_query($link,$sql)){
        header("location:classify.php");
        }
    
?>