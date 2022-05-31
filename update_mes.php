<?php
$lose_status = $_GET['lose_status'];
$lose_id = $_GET['lose_id'];
$office = $_GET['office'];
$lose_postTime = date("Y/m/d H:i:s",time()+8*60*60);

$link=mysqli_connect("localhost","root","12345678","sa");

if($lose_status=='已領回'){
    $sql="update lose set lose_status = '$lose_status', lose_postTime = '$lose_postTime' where lose_id = '$lose_id' ";
    if(mysqli_query($link, $sql)){
        header("location:classify.php?searchtxt=已領回&classify_name=已領回");
    }
}



if($lose_status=='分類'){
    $sql="update lose set lose_status = '$lose_status', lose_office = '$office', lose_postTime = '$lose_postTime' where lose_id = '$lose_id' ";
    if(mysqli_query($link, $sql)){
        header("location:classify.php");
    }

}
?>