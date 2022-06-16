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

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
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
                        </li>
                        </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Start Content Page -->
 
<script>
function getEmail(){
    var email=document.getElementById("user_email").value;//取值到一個變數
    var location="validate2.php?user_email="+email;//取一個網址到變數且將email傳值
    window.location.href=location;//執行跳頁
}
</script>
<?php 
    $user_email=$_GET["email"];//將user_email傳到發送驗證碼後
?>
    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
                <form class="col-md-9 m-auto" method="POST" action="emailcheck.php"> 
                    <label style="color:green;height:65px"><h1>註冊</h1></label>
                    <div class="row col-md-15">
                        <div class="form-group col-md-6 mb-3">    
                            <?php $check = $_GET['check'];
                            if($check != 'true'){?>
                                 <input type=text class="form-control" name="user_email" id="user_email" placeholder="帳號 (學校信箱)" value="<?php echo $user_email?>" required > 
                            <?php }
                            else{?>
                                <input type=text class="form-control" name="user_email" id="user_email" placeholder="帳號 (學校信箱)" value="<?php echo $user_email?>" required readonly > 
                             <?php } ?>
                        </div>
                            <div class="form-group col-3 mb-3">  
                                <?php if($check != 'true' ){?>
                                    <button type="button" class="btn btn-success" onclick="getEmail()">發送驗證碼</button>
                                    <?php } ?>
                                <?php if($check =='true'){ ?>
                                    <button type="button" class="btn btn-success" onclick="getEmail()">再次發送</button>
                                <?php }?>
                            </div>
                    </div>
                    <?php 
                    if($check=='true'){?>
                        <div class="row col-md-15">
                            <div class="form-group col-md-6 mb-3">
                                <input type=text class="form-control mt-1" name="validate_register" placeholder="驗證碼" required>
                            </div>
                        </div>
                        <div class="row col-md-15">
                            <div class="form-group col-md-6 mb-3">
                                <input type=text class="form-control mt-1" name="user_name" placeholder="姓名" required>
                            </div>
                        </div>
                        <div class="row col-md-15">
                            <div class="form-group col-md-6 mb-3">
                                <input type=text class="form-control mt-1" name="user_phone" placeholder="電話" required>
                            </div>
                        </div>
                        <div class="row col-md-15">
                            <div class="form-group col-md-6 mb-3">
                                <input type=password class="form-control mt-1" name="user_password" placeholder="密碼" required>
                            </div>
                        </div>
                    <?php } ?>
                    <a href="login.php">已有帳號？按此登入</a>
                    <?php if($check=='true'){ ?>
                        <div class="col text-end mt-2">
                            <button type="submit" class="btn btn-success btn-lg px-3">註冊</button>
                        </div>
                    <?php } ?>
                </form>
           
        </div>
    </div>
    <!-- End Contact -->


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