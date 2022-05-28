<?php
    session_start();
    $user_name = $_SESSION['user_name'];
    $lose_id = $_GET["lose_id"];
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
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1"><b><font color="green">Update</font></b></h1>
                        <p>修改分類物品資訊</p>
                </div>
            </div>
        </div>
    </section>

    <?php
        $link = mysqli_connect("localhost", "root", "12345678", "sa");
        if(!$link){
            echo "連接失敗" . mysqli_connect_error(); 
        }
        mysqli_query($link, "set names utf8");
        $sql = "SELECT * FROM lose WHERE lose_id = $lose_id";
        $result = mysqli_query($link, $sql);
        while($record=mysqli_fetch_assoc($result)){
    ?>

    <div class="container py-5">
        <p><center>*為必填</center></p>
        <form class="col-md-9 m-auto" action="classify_update2.php" method="post" enctype="multipart/form-data" >
            <div class="mb-3">
                <label>*物品名稱</label>
                <input type="text" class="form-control mt-1" name="name" value=<?php echo $record["lose_name"] ?> required="required">
            </div>
            <div class="mb-3">
                <label>*拾獲地點</label>
                <input type="text" class="form-control mt-1" name="place" value=<?php echo $record["lose_place"] ?> required="required">
            </div>
            <div class="mb-3">
                <label>*拾獲日期</label>
                <input type="date" class="form-control mt-1" name="date" value=<?php echo $record["lose_date"] ?> required="required">
            </div>
            <div class="mb-3">
                <label>*分類</label><br>
                <select class="form-control mt-1" name="classify" required="required">
                    <option></option>
                    <?php if($record["lose_classify"] == "證件"){?>
                        <option value="證件" selected>證件</option>
                    <?php } else{?>
                        <option value="證件" >證件</option>
                    <?php } ?>
                    <?php if($record["lose_classify"] == "皮夾&包包"){?>
                        <option value="皮夾&包包" selected>皮夾&包包</option>
                    <?php } else{?>
                        <option value="皮夾&包包">皮夾&包包</option>
                    <?php } ?>
                    <?php if($record["lose_classify"] == "3C產品"){?>
                        <option value="3C產品" selected>3C產品</option>
                    <?php } else{?>
                        <option value="3C產品">3C產品</option>
                    <?php } ?>
                    <?php if($record["lose_classify"] == "鑰匙"){?>
                        <option value="鑰匙" selected>鑰匙</option>
                    <?php } else{?>
                        <option value="鑰匙">鑰匙</option>
                    <?php } ?>
                    <?php if($record["lose_classify"] == "文具用品"){?>
                        <option value="文具用品" selected>文具用品</option>
                    <?php } else{?>
                        <option value="文具用品">文具用品</option>
                    <?php } ?>
                    <?php if($record["lose_classify"] == "衣物"){?>
                        <option value="衣物" selected>衣物</option>
                    <?php } else{?>
                        <option value="衣物">衣物</option>
                    <?php } ?>
                    <?php if($record["lose_classify"] == "雨傘"){?>
                        <option value="雨傘" selected>雨傘</option>
                    <?php } else{?>
                        <option value="雨傘">雨傘</option>
                    <?php } ?>
                    <?php if($record["lose_classify"] == "其他"){?>
                        <option value="其他" selected>其他</option>
                    <?php } else{?>
                        <option value="其他">其他</option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label>圖片上傳(僅支援1：1大小圖片；且若不更改圖片，無須上傳任何圖片)</label>
                <input type="file" class="form-control mt-1" name="image" accept=".jpg, .jepg, .png">
            </div>
            <div class="mb-3">
                <label>*物品描述</label>
                <textarea class="form-control mt-1"  name="describe" rows="5" required="required"><?php echo $record["lose_describe"] ?></textarea>
            </div>
            <div class="mb-3">
                <label>*領取處室</label>
                <select class="form-control mt-1" name="office" required="required" >
                    <option></option>
                    <?php if($record["lose_office"] == "野聲樓YP104"){?>
                        <option value="野聲樓YP104" selected>野聲樓YP104</option>
                    <?php } else{?>
                        <option value="野聲樓YP104">野聲樓YP104</option>
                    <?php } ?>
                    <?php if($record["lose_office"] == "進修部ES201"){?>
                        <option value="進修部ES201" selected>進修部ES201</option>
                    <?php } else{?>
                        <option value="進修部ES201">進修部ES201</option>
                    <?php } ?>
                    <?php if($record["lose_office"] == "軍訓室"){?>
                        <option value="軍訓室" selected>軍訓室</option>
                    <?php } else{?>
                        <option value="軍訓室">軍訓室</option>
                    <?php } ?>                                
                </select>
            </div>
            <input type="hidden" name="lose_id" value="<?php echo $record["lose_id"] ?>"
            <div class="row">
                <div class="col text-end mt-2" >
                <center><input type="submit" class="btn btn-success btn-lg px-3" value="確認送出"></center>                
            </div>
            </div>
        </form>
    </div>
    <?php } ?>

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