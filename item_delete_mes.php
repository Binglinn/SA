
<?php
  session_start();
  $lose_id = $_GET["lose_id"];
  $find_id = $_GET["find_id"];
  

    if($lose_id!="" or  $find_id!=""){ ?>
        <script> 
            var sure=confirm( '確定刪除?'); 
            if(sure){
                alert( '成功刪除 ');
                parent.location.href='item_delete.php?find_id=<?php echo $find_id ?>&lose_id=<?php echo $lose_id ?>';
            } 
            else {
                alert( '已取消動作');
                history.go(-1);
            }
        </script>
    <?php }
	?>


