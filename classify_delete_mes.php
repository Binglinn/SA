<?php
  session_start();
  $lose_id = $_GET["lose_id"];

    if($lose_id!="" ){ ?>
        <script> 
            var sure=confirm( '確定刪除?'); 
            if(sure){
                alert( '成功刪除 ');
                parent.location.href='classify_delete.php?lose_id=<?php echo $lose_id ?>';
            } 
            else {
                alert( '已取消動作');
                history.go(-1);
            }
        </script>
    <?php }
	?>