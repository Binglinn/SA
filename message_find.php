<?php 
    session_start();
    $user_name = $_SESSION['user_name'];
    $hidden_find_id = $_GET['hidden_find_id'];
    $find_name = $_GET['find_name'];
    $post_name = $_GET['user_name'];
?>
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
    <script src="https://kit.fontawesome.com/c288ca735f.js" crossorigin="anonymous"></script>

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
            </div>
        </div>
    </nav>
    <br>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4 pb-4" align=right>
                <div width=50px>
                    <?php $searchtxt = $hidden_find_id ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        session_start();
        $link = mysqli_connect("localhost", "root", "12345678", "sa"); 
        if(!$link){
            echo "連接失敗" . mysqli_connect_error(); 
        }
        mysqli_query($link, "set names utf8");
        if(isset($hidden_find_id))
            {
                $sql="select mes.mes_id, mes.find_id, find.find_name, mes.mes_content, mes.mes_time, user.user_email, user.user_name from mes,find,user where mes.find_id like '$searchtxt' AND user.user_email=mes.user_email AND find.find_id = mes.find_id ORDER BY mes_time desc";   
            }
        $result=mysqli_query($link,$sql)

        ?>
    <br>
    <center><h4>物品編號：<?php echo $hidden_find_id ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;物品名稱：<?php echo $find_name ?></h4></center><br>
    <div style="margin-left:100px;margin-right:100px;">
    <table class="table" style="text-align:center;">
    <?php
    echo "
            <th>留言者</th>
            <th>留言</th>
            <th style=width:150px>留言時間</th>"
            ?>
            <?php if($_SESSION["user_admin"]=="user" or $_SESSION["user_admin"]=="admin"){?>
                <th>功能</th>
            <?php }else{ ?>
                <th></th>
            <?php } ?>
    <!-- //一次取得一筆(列)資料，並存入record[] -->
    <?php
    while($record=mysqli_fetch_assoc($result)){
        if(($_SESSION["user_admin"]=="user" AND $_SESSION["user_email"]=="$record[user_email]")){  
            if($post_name==$record["user_name"]){
                echo "<tr>
                <td style=text-align:center;line-height:50px;>$record[user_name]&nbsp(發文者)</td>
                <td style=text-align:center;line-height:50px;>$record[mes_content]</td>
                <td>$record[mes_time]</td>
                <td style=width:400px;style=text-align:center;line-height:50px;>
                    <a href='message_find_update.php?mes_id=$record[mes_id]&find_id=$record[find_id]'>"?><i class="fa-solid fa-screwdriver-wrench" style="color:gray"></i><?php echo "</a>&nbsp&nbsp
                    <a href='message_delete_mes.php?mes_id=$record[mes_id]&find_id=$record[find_id]&find_name=$record[find_name]&post_name=$post_name'>"?><i class="fa-solid fa-trash"  style="color:gray"></i><?php echo "</a>
                </td>
                </tr>";
            }else{
                echo "<tr>
                <td style=text-align:center;line-height:50px;>$record[user_name]</td>
                <td style=text-align:center;line-height:50px;>$record[mes_content]</td>
                <td>$record[mes_time]</td>
                <td style=width:400px;style=text-align:center;line-height:50px;>
                    <a href='message_find_update.php?mes_id=$record[mes_id]&find_id=$record[find_id]'>"?><i class="fa-solid fa-screwdriver-wrench" style="color:gray"></i><?php echo "</a>&nbsp&nbsp
                    <a href='message_delete_mes.php?mes_id=$record[mes_id]&find_id=$record[find_id]&find_name=$record[find_name]&post_name=$post_name'>"?><i class="fa-solid fa-trash"  style="color:gray"></i><?php echo "</a>
                </td>
                </tr>";
            }
        }
        elseif($_SESSION["user_admin"]=="user" AND $_SESSION["user_email"]!="$record[user_email]" OR $_SESSION["user_admin"]==""){
            if($post_name==$record["user_name"]){
                echo "<tr>
                <td style=text-align:center;line-height:50px;>$record[user_name]&nbsp(發文者)</td>
                <td style=text-align:center;line-height:50px;>$record[mes_content]</td>
                <td>$record[mes_time]</td>
                <td style=text-align:center;line-height:50px;></td>
                </tr>";
            }else{ 
                echo "<tr>
                <td style=text-align:center;line-height:50px;>$record[user_name]</td>
                <td style=text-align:center;line-height:50px;>$record[mes_content]</td>
                <td>$record[mes_time]</td>
                <td style=text-align:center;line-height:50px;></td>
                </tr>";
            }
        }
        elseif($_SESSION["user_admin"]=="admin"){
            if($post_name==$record["user_name"]){
                echo "<tr>
                <td style=text-align:center;line-height:50px;>$record[user_name]&nbsp(發文者)</td>
                <td style=text-align:center;line-height:50px;>$record[mes_content]</td>
                <td>$record[mes_time]</td>
                <td style=width:400px;style=text-align:center;line-height:50px;><a href='message_delete_mes.php?mes_id=$record[mes_id]&find_id=$record[find_id]&find_name=$record[find_name]&post_name=$post_name'>"?><i class="fa-solid fa-trash"  style="color:gray"></i><?php echo "</a></td>
                </tr>";
            }else{
                echo "<tr>
                <td style=text-align:center;line-height:50px;>$record[user_name]</td>
                <td style=text-align:center;line-height:50px;>$record[mes_content]</td>
                <td>$record[mes_time]</td>
                <td style=width:400px;style=text-align:center;line-height:50px;><a href='message_delete_mes.php?mes_id=$record[mes_id]&find_id=$record[find_id]&find_name=$record[find_name]&post_name=$post_name'>"?><i class="fa-solid fa-trash"  style="color:gray"></i><?php echo "</a></td>
                </tr>";
            }      
        }
    }
    ?>
    </table>
    </div>
    <?php
    if($_SESSION['user_admin']=="user"){?>
        <form action="add_message_find.php" method="get">
            <input type="hidden"class="form-control mt-1" name="hidden_find_id" value="<?php echo $hidden_find_id ?>"><br>
            <center><input type="submit" class="btn btn-success btn-lg px-3" value="新增留言"></button></center>
        </form>
    <?php } ?>
    <br><br>

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