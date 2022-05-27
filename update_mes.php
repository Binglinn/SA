<?php
$lose_status = $_GET['lose_status'];
$lose_id = $_GET['lose_id'];
$office = $_GET['office'];

$link=mysqli_connect("localhost","root","12345678","sa");

if($lose_status=='已領回'){
    $sql="update lose set lose_status = '$lose_status' where lose_id = '$lose_id' ";
    if(mysqli_query($link, $sql)){
        header("location:classify.php?searchtxt=已領回&classify_name=已領回");
    
    }
}



if($lose_status=='分類'){
    $sql="update lose set lose_status = '$lose_status', lose_office = '$office' where lose_id = '$lose_id' ";
    if(mysqli_query($link, $sql)){
        header("location:classify.php");
    
    }

}
?>