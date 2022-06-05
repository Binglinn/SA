<!DOCTYPE html>
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

    
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<?php 
    session_start();
    $user_name = $_SESSION['user_name'];
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



   


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1"><b><font color="green">Personal</font></b></h1>
                <h4>個人專區</h4>
            </div>
        </div>
        <div align="center" class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
                
                <h3 >
                <a href="self-lose.php">
                <img src="./assets/img/pickup2.png" width="275" height="275" ></a>
                <br>
                <br>已發布拾獲貼文</h3>
            </div>

            <div class="col-12 col-md-4 p-5 mt-3">
           
                <h3 > <a href="self-find.php">
                    <img src="./assets/img/searching.png" width="275" height="275" ></a>
                <br> <br>已發布尋物貼文</h3>
            </div>

            <div class="col-12 col-md-4 p-5 mt-3">
                <h3> <a href="self-setting.php"> 
                    <img src="./assets/img/settings-2.png" width="265" height="272" ></a>
                 <br><br>設定</h3>
            </div>

            
        </div>


        
    </section>
    <!-- End Categories of The Month -->
    

   

   
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