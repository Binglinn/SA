<?php
    session_start();
    unset($_SESSION['user_admin']);
    unset($_SESSION['user_email']);
    header("location:index.php");
?>