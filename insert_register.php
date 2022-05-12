<?php
    session_start();
    $user_email=$_POST["user_email"];
    $user_name=$_POST["user_name"];
    $user_phone=$_POST["user_phone"];
    $user_password=$_POST["user_password"];
    $link=mysqli_connect("localhost","root","12345678","sa");
    if(!$link){
        echo "連接失敗" . mysqli_connect_error(); 
    }

   
    
    $sql = "INSERT INTO user (user_email, user_name, user_phone, user_password, user_admin) VALUES ('$user_email','$user_name', '$user_phone','$user_password','user')";      
    if(mysqli_query($link,$sql)){                
         header("location:login.php?");
     }
    

?>
