<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>swimming course</title>
    <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="blue">
                <img src="img/header-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="img/header-shepe-white.png" alt="">
            </div>
            <div class="container">
                <img class="shepe1" src="img/shepe1.png" alt="">
                <img class="shepe2" src="img/shepe2.png" alt="">
                <img class="shepe3" src="img/shepe2.png" alt="">
                <img class="shepe4" src="img/shepe2.png" alt="">
                <img class="shepe5" src="img/shepe1.png" alt="">
                <img class="shepe6" src="img/shepe2.png" alt="">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <h2><a href="#">Swim</a></h2>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                <?php if (isset($_SESSION['memid'])) { ?>
                                    <li class="active"><a href="#"><?php echo $_SESSION['name']; ?></a></li>
                                    <li class="active"><a href="table/lerncheck.php">เช็คชื่อ</a></li>
                                    <li class="active"><a href="table/full-screen-table showlern.php">ตารางเรียน</a></li>
                                    <li class="active"><a href="table/full-screen-table.php">แก้ไขข้อมูลสมาชิก</a></li>
                                    <li class="active"><a href="table/full-screen-table memnext.php">ขอเลื่อนนัด</a></li>
                                    <li class="active"><a href="table/full-screen-table textsend.php">ข้อความ</a></li>
                                    <li class="active"><a href="Login_v16/registeradmin.php">เพิ่มแอดมิน</a></li>
                                    <li class="active"><a href="Login_v16/addvideo.php">แก้ไขวีดีโอ</a></li>
                                    <li class="active"><a href="sendmsg.php">ส่งแจ้งเตือน</a></li>
                                    <li class="active"><a href="logout.php">ออกจากระบบ</a></li>
                                <?php } else { ?>
                                    <li><a href="Login_v16/register.php">สมัครสมาชิก</a></li>
                                    <li><a href="Login_v16/login.php">ล็อกอิน</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-text">
                            <h1>swimming course</h1>
                            <p>สอนว่ายน้ำ</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="another-text">
                            <h3>ข้อกำหนดในการเรียน</h3>
                            <p>การเรียนมีข้อกำหนดดังนี้</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="development">
            <div class="blue">
                <img src="img/development-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="img/development-shepe-white.png" alt="">
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 col-sm-4">
                        <div class="design-development one">
                        <i class="material-icons">lightbulb_outline</i>
                            <h2>1</h2>
                            <p>เด็กเล็กต้องมีผู้ปกครองมาด้วย</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="design-development two">
                            <i class="material-icons">lightbulb_outline</i>
                            <h2>2</h2>
                            <p>ตรงเวลา</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="design-development three">
                            <i class="material-icons">lightbulb_outline</i>
                            <h2>3</h2>
                            <p>รักการว่ายน้ำ</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="works">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="work-images">
                        <?php
    include('login_v16/connect.php');
    mysqli_set_charset($conn, "utf8");
    $query = "SELECT * FROM videos";
    $result = mysqli_query($conn, $query) or die($mysqli->error);
    while ($row = mysqli_fetch_array($result)) {
      $prevideos = $row["vdo"];
    }
                            echo "<iframe width='100%' height='100%' src='https://www.youtube.com/embed/NeXgKh_vWVk' frameborder='0' allowfullscreen></iframe>";
                        ?>
                            <div class="overlay-text">
                                <i class="material-icons">play_circle_filled</i>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="work-text-full">
                            <div class="work-text">
                                <h2>Preview</h2>
                                <p>Swimming Samshuck</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolia">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="port-text">
                            <h2>ภาพการสอน</h2>
                            <p>เราดูแลด้วยใจ</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-part">
                            <img src="img/swim1.jpg" alt="">
                        
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-part">
                            <img src="img/swim2.jpg" alt="">
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-part">
                            <img src="img/swim3.jpg" alt="">
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-part">
                            <img src="img/swim4.jpg" alt="">
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-part">
                            <img src="img/swim5.jpg" alt="">
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-part">
                            <img src="img/swim6.jpg" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <p> </p>

        <section class="our-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="team-text">
                            <h2>อารย์ผู้สอน</h2>
                            <p>อาจารย์แต่ละท่านมีความสามารถในการสอนอย่างดี</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="my-claint owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/pswim1.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3>อาจารย์มานพ สังข์แก้ว</h3>
                                    
                                    
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/pswim2.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3></h3>
                                    
                                    
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/pswim2.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3></h3>
                                    
                                    
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/pswim2.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3></h3>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
	if (isset($_POST['Submit'])) {
		date_default_timezone_set("Asia/Bangkok");
		$time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `send` (`namesend`, `lastnamesend`, `phonesend`, `timesend`, `textsend`) VALUES 
        ('". $_POST['namesend'] ."', '". $_POST['lastnamesend'] ."', '". $_POST['phonesend'] ."', '$time', '". $_POST['textsend'] ."')";
         $result = $conn->query($sql);
         if ($result) {
             echo '<script> alert("ส่งข้อความแล้ว") </script>';
         } else {
             echo '<script> alert("ส่งข้อความไม่สำเร็จ") </script>';
         }
	}
	?>
        <section class="contact">
            <div class="blue">
                <img src="img/contact-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="img/contact-shepe-white.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-text">
                            <h2>ติดต่อเรา</h2>
                            <p>สามารถติดต่อเราผ่านช่องทางนี้ได้โดยตรง</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="contact-form">
                            <form action="#" method="post">
                                <div class="first">
                                    <input type="text" name="namesend" placeholder="ชื่อ">
                                </div>
                                <div class="last">
                                    <input type="text" name="lastnamesend" placeholder="นามสกุล">
                                </div>
                                <div class="email">
                                    <input type="text" name="phonesend" placeholder="เบอร์โทรศัพท์">
                                </div>
                                <div class="message">
                                    <textarea type="text" name="textsend" placeholder="ข้อความ"></textarea>
                                </div>
                                <div class="checkbox-submit">
                                    <div class="checkbox">

                                    </div>
                                    <div class="submit">
                                        <input type="submit" name="Submit" value="SEND">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-icon">
                            <h2>Swim</h2>
                            <p><a href="#"><i aria-hidden="true" class="fa fa-facebook"> : Swimming Samshuck</i></a></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="footer-text">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>ข้อมูลติดต่อ</h3>
                                        <p><a href="#">Contact Us</a></p>
                                        <p><a href="#">Request A Demo</a></p>
                                        <p><a href="#">+12 323 323 323</a></p>
                                        <p><a href="#">support@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/active.js"></script>
</body>

</html>