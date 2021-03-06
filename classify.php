<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Product Listing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( document ).tooltip();
});
</script>
    <style>
    label {
    display: inline-block;
    width: 5em;
    }
</style>

</head>
<?php
    session_start();
      $link=mysqli_connect("localhost","root","","sa");
      if(!$link){
        echo "連結失敗".mysqli_connect_error();
      }
?>
<body>



    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                Lost & found
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                    <?php if($_SESSION["user_admin"]=="admin"){?>
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">即時刊登區</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">尋物啟事</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classify.php">遺失物分類</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">後臺管理</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">登出</a>
                        </li>
                    </ul>
                    <?php }elseif($_SESSION["user_admin"]=="user"){?>
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">即時刊登區</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="find.php">尋物啟事</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classify.php">遺失物分類</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="self.php">個人專區</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">登出</a>
                        </li>
                        </ul>
                    <?php }elseif($_SESSION["user_admin"]==""){?>
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">即時刊登區</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="find.php">尋物啟事</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classify.php">遺失物分類</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">登入</a>
                        </li>
                        </ul>
                        <?php }?>
                </div>
                <!-- <div class="text-end mt-2" >
                    <button type="submit" class="btn btn-success btn-lg px-3"  onclick="location.href='login.php'">登入</button> 
                </div> -->
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



 <!-- Start Content -->
 <div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">分類</h1>
            <ul class="list-unstyled templatemo-accordion">
                <div class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none"   href="classify.php?searchtxt=證件&classify_name=證件">
                        證件
                    </a>
                </div>
                <div class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="classify.php?searchtxt=皮夾&包包&classify_name=皮夾&包包">
                        皮夾&包包
                    </a> 
                 </div>
                <div class="pb-3">      
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="classify.php?searchtxt=3C產品&classify_name=3C產品">
                        3C產品
                    </a>     
                </div>
                 <div class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="classify.php?searchtxt=鑰匙&classify_name=鑰匙">
                        鑰匙
                    </a>                 
                </div>
                <div class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="classify.php?searchtxt=文具用品&classify_name=文具用品">
                        文具用品
                    </a> 
                </div>
                <div class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="classify.php?searchtxt=衣物&classify_name=物品">
                        衣物
                    </a> 
                </div>
                <div class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="classify.php?searchtxt=雨傘&classify_name=雨傘">
                        雨傘 
                    </a> 
                </div>
                <div class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" title="(手錶、眼鏡、飾品、水壺等等)" 
                    href="classify.php?searchtxt=其他&classify_name=其他">
                     其他
                    </a> 
                </div>
            </ul>
        </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="list-inline shop-top-menu pb-3 pt-1" >
                            <?php  $classify_name=$_GET["classify_name"]?>
                                <h3 class="h3" ><?php echo $classify_name?></h3>                           
                        
                        </ul>
                    </div>
                    <div class="col-md-4 pb-4" align=right>
                        <div width=50px>
                            <form action="classify.php" method="get">
                                <?php $searchtxt = $_GET["searchtxt"]; ?>
                                <div class="input-group-prepend">     
                                    <p align=margin-right><input type=text class="form-control" name="searchtxt" placeholder="搜尋關鍵字" ></p>
                                </div>
                            </form>
                        </div>
                    </div>

 

                <div class="row">
                   
                <?php
                if(isset($searchtxt))
                    {
                        $sql="select * from lose where(lose_name like '%$searchtxt%'  or lose_classify like '%$searchtxt%')and lose_status='分類'";          
                        
                    }     
                else
                {
                    $sql="select * from lose where lose_status='分類'";
                }

                $rs=mysqli_query($link,$sql);

                ?>


                    <?php
                        $data_nums = mysqli_num_rows($rs); //統計總比數
                        
                        $per = 9; //每頁顯示項目數量
                        $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
                        if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
                            $page=1; //則在此設定起始頁數
                        } else {
                            $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
                            
                        }
                        $start = ($page-1)*$per; //每一頁開始的資料序號
                    
                      
                        $item_list=[];
                    
                        
                        for($i=$start;$i<$start+$per && $i<$data_nums;$i++){
                            while($record=mysqli_fetch_row($rs)){
                                array_push($item_list,$record);}
                           
                            ?>
                            <div class='col-md-4'>
                                <div class='card mb-4 product-wap rounded-0'>
                                    <div class='card rounded-0' >
                                        <img class='card-img rounded-0 img-fluid'  style="width:500;height;50" src='assets/img/<?php echo $item_list[$i][7]?>'>
                                        
                                    </div>
                                    <div class='card-body'>
                                        <a href='shop-single.html' class='h3 text-decoration-none'> <?php echo $item_list[$i][3]?></a>
                                        <ul class='w-100 list-unstyled d-flex mb-0'>
                                            <li>拾獲日期：</li>
                                            <li><?php echo $item_list[$i][6]?></li>
                                        </ul>
                                        <ul class='w-100 list-unstyled d-flex mb-0'>
                                            <li>領取地點：</li>
                                            <li><?php echo $item_list[$i][8]?></li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                        } 
                    ?>
                </div>
                
            </div>


            


        <br>
        <p>
        <div class='col-md-12'>
            <ul class="pagination pagination-lg justify-content-end">
                <p class="page-item">
                <br>
                    <li><a class="page-link  rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href='?page=1'>首頁</a></li>
                    <?php
                        for( $i=1 ; $i<=$pages ; $i++ ) {
                            if ( $page-3 < $i && $i < $page+3 ) {
                                if($i==$page){
                                ?>
                                <li><a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="?page=<?php echo $i;?>" tabindex="-1" >
                                <?php echo $i.'&nbsp';?></a></li>
                                <?php
                                }
                                else{ ?>
                                    <li><a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="?page=<?php echo $i;?>" tabindex="-1" >
                                    <?php echo $i.'&nbsp';?></a></li>
                                <?php 
                                }
                            } 
                         }?>
                    <li><a class="page-link  rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="?page=<?php echo $pages?>">末頁</a></li>
                </p>
            </ul>
        </div>
        </p >
        <p align="right">
        <?php
            //分頁頁碼
            echo '共 ',$data_nums,' 筆-在 ',$page,' 頁-共 ',$pages,' 頁';
        ?>
        </p>
     </div>
    </div>
    </div>
    <!-- End Content -->
                        

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom  border-light logo">輔大失物招領專區</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            242新北市新莊區中正路510號<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;學務處生活輔導組  <a class="text-decoration-none" href="tel:02-29053100">02-29053100</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;進修部生活輔導組  <a class="text-decoration-none" href="tel:02- 29052246">02- 29052246</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;軍訓室  <a class="text-decoration-none" href="tel:02-29052885">02-29052885</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--footer 最下面那個深色框框-->
        <div class="w-100 bg-black py-3">
            <div class="container"> 
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    
</body>

</html>