<?php
  session_start();
  $lose_id = $_GET["lose_id"];
  $find_id = $_GET["find_id"];
  $mes_id = $_GET["mes_id"];
  

if($lose_id!="" or  $find_id!=""){ ?>
    <script> 
        var sure=confirm( '確定刪除留言?'); 
        if(sure){
            alert( '成功刪除留言 ');
            parent.location.href='message_delete.php?find_id=<?php echo $find_id ?>&lose_id=<?php echo $lose_id ?>&mes_id=<?php echo $mes_id?>';
        } 
        else {
            alert( '已取消動作');
            history.go(-1);
        }
    </script>
<?php }
?>


