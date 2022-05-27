<?php 
    session_start();
    $user_name = $_SESSION['user_name'];
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
    
    <!-- jq -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready(function () {

        $('#管理帳號').DataTable();
        });
    </script>

    <?php
        $link=mysqli_connect("localhost","root","12345678","sa");
        $sql="select user_email,user_name,user_phone from user where user_admin='user'";
        $rs=mysqli_query($link,$sql);
        
        if(!$link){
          echo "連結失敗".mysqli_connect_error();
        }
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

    <div >
      <br>
      <!-- row -->
      <div style="width:100%;">
        <table id="管理帳號" class="table table-hover display" cellspacing="0" width="100%">
          <thead>
            <tr style="text-align: center;">
              <th>帳號</th>
              <th>姓名</th>
              <th>連絡電話</th>
            </tr>
          </thead>
          <tbody align="center" >
          <?php
            while($record=mysqli_fetch_row($rs)){
                echo "<tr>";
                for($i=0;$i<count($record);$i++){
                    echo "<td>$record[$i]</td>";
                }
                echo"</tr>";
            } 
           ?>
        </table>
      </div>

    </div>
</body>