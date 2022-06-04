<!DOCTYPE html>
<?php 
    session_start();
    $user_name = $_SESSION['user_name'];
?>
<html lang="en">

<head>
    <title>輔大遺失物管理系統</title>
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
    <script src="https://kit.fontawesome.com/c288ca735f.js" crossorigin="anonymous"></script>

    <style>
        .flip{margin:0px;padding:5px;text-align:center;cursor:pointer;font-family:'Arial';}
        .panel{margin:0px;padding:5px;text-align:center;display:none;font-family:'Arial';text-align:left;}
    </style>
        <?php
        session_start();
        $user_email=$_SESSION["user_email"];
        ?>
        <?php
        $link=mysqli_connect("localhost","root","12345678","sa");

        if(!$link){
            echo "連接失敗" . mysqli_connect_error(); 
        }
    
        $sql_find= "SELECT * FROM find where  user_email='$user_email' order by find_postTime desc";

        $rs_find = mysqli_query($link, $sql_find);
       
        ?>
    
   
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

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
                      
                    <br>
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto nav-link" style="float:right;" > 
                            <img src="./assets/img/girl.png" width="26" height="26"  >&nbsp;嗨！管理者
                        </ul>
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
                            <a class="nav-link" href="management.php">後臺管理</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">登出</a>
                        </li>
                    </ul>

                    <?php }elseif($_SESSION["user_admin"]=="user"){?>

                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto nav-link" style="float:right;" > 
                            <img src="./assets/img/girl.png" width="26" height="26"  >&nbsp;
                            <?php echo '嗨！' ,$user_name;?>
                        </ul>

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
   
    <section class="bg-light"> 
        <div class="container py-5">
            <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1"><b><font color="green">Published find</font></b></h1>
                <h5>已發布尋物貼文</h5>
            </div>
            </div>
            <?php
                        $data_nums = mysqli_num_rows($rs_find); //統計總比數
                        
                        $per = 8; //每頁顯示項目數量
                        $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
                        if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
                            $page=1; //則在此設定起始頁數
                        } else {
                            $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
                            
                        }
                        $start = ($page-1)*$per; //每一頁開始的資料序號
                    
                      
                        $item_list=[];
                           
                ?> 
            <div class="row">
                <?php 
               for($i=$start;$i<$start+$per && $i<$data_nums;$i++){
                   
                while($record=mysqli_fetch_assoc($rs_find)){
                    
                     
                    array_push($item_list,$record);}?>
                    
                    
                <div class="col-12 col-md-3 mb-4">
                    <div class="card h-100">           
                            <img src="assets/img/<?php echo $item_list[$i]["find_picture"]?>" class="card-img-top" onerror="javascript:this.src='assets/img/no_img.jpeg'">
                        <div class="card-body">
                            <div class="flip" >
                                <span class="1"><?php echo $item_list[$i]["find_name"]?></span>
                                <div><font color="#D5D8DC"><i class="fa fa-chevron-down" aria-hidden="true"></i></font></div>
                            </div>
                            <div class="panel">
                            物品編號：<?php echo $item_list[$i]["find_id"]?><br>
                            遺失地點：<?php echo $item_list[$i]["find_place"]?><br>
                            聯絡資訊：<?php echo $item_list[$i]["find_contact"]?><br>
                            物品描述：<?php echo $item_list[$i]["find_describe"]?><br>
                               
                            </div>
                        </div>
                        <div  class="card-footer" style="background-color:white">
                            <center>
                                <a href=self_find_update.php?find_id=<?php echo $item_list[$i]["find_id"]?>><font color="green"><i class="fa-solid fa-screwdriver-wrench"></i>修改</font></a>&nbsp;&nbsp;&nbsp;
                                <a href=item_delete_mes.php?find_id=<?php echo $item_list[$i]["find_id"]?>><font color="green"><i class="fa-solid fa-trash"></i>刪除</font></a>
                            </center>
                        </div>
                    </div>    
                </div>
                <?php }?>
            </div>
        </div>
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
            
            <div align="right"><?php echo '共 ',$data_nums,' 筆-在 ',$page,' 頁-共 ',$pages,' 頁';?></div>
        </div>
        
    </section>
    
   
                    <script>
                    $(function(){
                    $(".flip").click(function(){
                    $(".panel").slideToggle("slow");
                   
                    });});
                    
                    
                    </script>  

    <!-- Start Banner Hero -->
    
    <!-- End Banner Hero -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom  border-light logo">輔大失物招領專區</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            242新北市新莊區中正路510號<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;學務處生活輔導組  <a class="text-decoration-none" href="tel:02-29053100">02-29053100</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;進修部生活輔導組  <a class="text-decoration-none" href="tel:02-29052246">02-29052246</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;軍訓室  <a class="text-decoration-none" href="tel:02-29052885">02-29052885</a>
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