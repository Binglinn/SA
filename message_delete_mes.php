<?php
    session_start();
    $lose_id = $_GET["lose_id"];
    $find_id = $_GET["find_id"];
    $mes_id = $_GET["mes_id"];
    $lose_name = $_GET["lose_name"];
    $find_name = $_GET["find_name"];
    $post_name = $_GET["post_name"];

if($lose_id!="" or  $find_id!=""){ ?>
    <script> 
        var sure=confirm('確定刪除留言?'); 
        if(sure){
            alert('成功刪除留言');
            parent.location.href='message_delete.php?find_id=<?php echo $find_id ?>&find_name=<?php echo $find_name ?>&lose_id=<?php echo $lose_id ?>&lose_name=<?php echo $lose_name ?>&mes_id=<?php echo $mes_id?>&post_name=<?php echo $post_name ?>';
        } 
        else {
            alert('已取消動作');
            history.go(-1); 
        }
    </script>
<?php }
?>


