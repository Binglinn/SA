<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Login</title>
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
                    <?php if($_SESSION["user_admin"]=="admin"){?>
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">???????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classify.php">???????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">??????</a>
                        </li>
                    </ul>
                    <?php }elseif($_SESSION["user_admin"]=="user"){?>
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">???????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="find.php">????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classify.php">???????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="self.php">????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">??????</a>
                        </li>
                        </ul>
                    <?php }elseif($_SESSION["user_admin"]==""){?>
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">???????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="find.php">????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classify.php">???????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">??????</a>
                        </li>
                        </ul>
                        <?php }?>
                </div>
                
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


    <!-- Start Content Page -->
 


    <!-- Start Contact -->
    <div class="container py-5" >
        <div class="row py-5">
            <form action="logincheck.php"  class="col-md-9 m-auto" method="post" role="form">           
                <label  style="color: green;" for="inputname" ><h1>??????</h1></label>
                <input type=hidden name="method" >
            
                    <div for="user_email" class="form-group col-md-6 mb-3">
                        <input  type="text" class="form-control mt-1" id="user_email" name="user_email" placeholder="??????">
                    </div>
                    <div for="user_password"  class="form-group col-md-6 mb-3">
                        <input type="password" class="form-control mt-1" id="user_password" name="user_password" placeholder="??????">
                    </div>
                        <a href="./register.php" >???????????????</a>
                        <br>
                
                    <div class="col text-end mt-1">
                        <button type="submit" class="btn btn-success btn-lg px-3">??????</button>
                    </div>                
            </form>
        </div>
    </div>
    <!-- End Contact -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom  border-light logo">????????????????????????</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            242???????????????????????????510???<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;????????????????????????  <a class="text-decoration-none" href="tel:02-29053100">02-29053100</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;????????????????????????  <a class="text-decoration-none" href="tel:02- 29052246">02- 29052246</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?????????  <a class="text-decoration-none" href="tel:02-29052885">02-29052885</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!--footer ???????????????????????????-->
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


