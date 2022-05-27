
    <?php 
        $lose_status = $_GET['lose_status'];
        $lose_id = $_GET['lose_id'];

        if($lose_status=='已領回'){ ?>
            <script> 
                var sure=confirm( '遺失物已領回? '); 
                if(sure){
                    alert( '加入已領回專區 ');
                    parent.location.href='update_mes.php?lose_status=<?php echo $lose_status ?>&lose_id=<?php echo $lose_id ?>';
                } 
                else {
                    alert( '已取消動作');
                    history.go(-1);
                }
            </script>
        <?php }

        if($lose_status=='分類'){?>
            <script>
                var office = prompt("請輸入所在處室：( 野聲樓YP104 / 進修部ES201 / 軍訓室 )");
                if(office){
                    alert("已加入分類，領取地點為：" + office);
                    location.href='update_mes.php?lose_status=<?php echo $lose_status ?>&lose_id=<?php echo $lose_id ?>&office='+office;
                }
                else{
                    alert( '已取消動作');
                    history.go(-1);
                }
            </script>
        <?php }
		?>

        
            

        

        
        
