<?php
    session_start();
?>
<!DOCTYPE html> 

<html lang="en">

<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
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
                <!-- <div class="text-end mt-2" >
                    <button type="submit" class="btn btn-success btn-lg px-3"  onclick="location.href='login.php'">??????</button> 
                </div> -->
            </div>

        </div>
    </nav>
    <br>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4 pb-4" align=right>
                <div width=50px>
                    <form action="message.php" method="get">
                        <?php $searchtxt = $_GET["searchtxt"]; ?>
                        <div class="input-group-prepend">     
                            <p align=margin-right><input type=text class="form-control" name="searchtxt" placeholder="??????????????????" ></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
 
        session_start();
        $link = mysqli_connect("localhost", "root", "", "sa");
        if(!$link){
            echo "????????????" . mysqli_connect_error(); 
        }

        mysqli_query($link, "set names utf8");

        $date = date("Y-m-d",strtotime("-7 day"));
        if(isset($searchtxt))
            {
                $sql="select * from mes where lose_id like '%$searchtxt%' AND mes_time>'$date' ORDER BY mes_time desc";   
            }
            else{
                $sql = "SELECT * FROM mes WHERE mes_time>'$date' ORDER BY mes_time desc";
            }
        $result=mysqli_query($link,$sql);

        ?>
    <br>
    <table class="table" style="text-align:center;">
    <?php
    echo "
            <th>????????????</th>
            <th>????????????</th>
            <th>??????</th>
            <th>????????????</th>
            <th>?????????</th>";

    //??????????????????(???)??????????????????record[]
    while($record=mysqli_fetch_row($result)){
        echo "<tr>
                  <td>$record[4]</td>
                  <td>$record[5]</td>
                  <td>$record[1]</td>
                  <td>$record[2]</td>
                  <td>$record[3]</td>
              </tr>";
    }
    ?>
    </table>

    <?php if($_SESSION["user_admin"]=="user"){?>
        <center><a href="add_message.php"><button class="btn btn-success btn-lg px-3">????????????</button></a></center>
    <?php } ?>
    <br><br>

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