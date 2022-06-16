<?php
  // $method="delete";
  session_start();
  $lose_id = $_GET["lose_id"];
  $find_id = $_GET["find_id"];
 
  $link=mysqli_connect("localhost","root","12345678","sa");
 
  if($lose_id!="" AND $_SESSION['user_admin']=="admin"){
    $sql="delete from lose where lose_id='$lose_id' ";
    if(mysqli_query($link,$sql)){
      $sql_mes="delete from mes where lose_id='$lose_id'";
        if(mysqli_query($link,$sql_mes)){
        header("location:index.php");
        }
    }
  }
  if($lose_id!="" AND $_SESSION['user_admin']=="user"){
    $sql="delete from lose where lose_id='$lose_id' ";
    if(mysqli_query($link,$sql)){
      $sql_mes="delete from mes where lose_id='$lose_id'";
      if(mysqli_query($link,$sql_mes)){
        header("location:self-lose.php");
      }
    }
  }

  if($find_id!="" AND $_SESSION['user_admin']=="admin"){
    $sql="delete from find where find_id='$find_id' ";  
    if(mysqli_query($link,$sql)){
      $sql_mes="delete from mes where find_id = '$find_id'";
      if(mysqli_query($link,$sql_mes)){
        header("location:find.php");
      }
    }
  }
    
  if($find_id!="" AND $_SESSION['user_admin']=="user"){
    $sql="delete from find where find_id='$find_id' ";  
    if(mysqli_query($link,$sql)){
      $sql_mes="delete from mes where find_id = '$find_id' "; 
      if(mysqli_query($link,$sql_mes)){
        header("location:self-find.php");
      }
        
    }
  }
?>
