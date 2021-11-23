<?php
use common\widgets\Alert;

?>


<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<?php $this->registerCsrfMetaTags();?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>Game Info</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="" type="image/x-icon" />
<link rel="apple-touch-icon" href="">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<!-- font family -->
<link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<!-- end font family -->
<link rel="stylesheet" href="css/3dslider.css" />
<script src="js/jquery-1.11.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="js/3dslider.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.15&key=ab9f0eb3008db971cfd71a9ec76c19e8"></script> 
</head>

<body class="game_info" data-spy="scroll" data-target=".header">
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loading-img.gif" alt="">
    </div>
    <!-- END LOADER -->
    <div id="top">
        <header>
            <div class="container">
                <div class="header-top">
                    <div class="row" style="display:flex">
                        <div class="col-md-6">
                            <div class="full">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo_color.svg" /><img
                                            src="images/logo_tokyo.png" height=100 width=100></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="align-items:center; display:inline-grid; margin-left: 182px;">
                            <div class="right_top_section" style="display: flex">
                                <!-- social icon -->
                                <ul class="social-icons pull-left">
                                    <li><a class="github" href="https://gitee.com/internet-work/InternetWork
"><i class="fa fa-github"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                                <!-- end social icon -->
                                <!-- button section -->
                                <?php
                                if (Yii::$app->user->isGuest) {
                                    echo '<ul class="login">
                                    <li class="login-modal">
                                        <a href="index.php?r=site/login" class="login"><i
                                                class="fa fa-user"></i>登录</a>
                                    </li>
                                    <li>
                                        <div class="cart-option">
                                            <a href="index.php?r=site/signup"><i class="fa
                                                    fa-address-card"
                                                    style="font-size:13px"></i>注册</a>
                                        </div>
                                    </li>
                                </ul>';
                                } else {
                                    echo '<ul class ="login" style="display: flex;align-items: center;">
                                    <li class="username"><font color="white">欢迎，<span>';
                                    echo Yii::$app->user->identity->username;
                                    echo '</span></font></li>
                                    <li>
                                        <div class="cart-option" onclick=logout("';
                                    echo Yii::$app->getRequest()->getCsrfToken();

                                    echo '")>
                                <a href="#"><i class="fa fa-sign-out" style="font-size:13px"></i>退出登录</a>
                            </div>
                            </li>
                            </ul>';
                                }
                            ?>
                                <!-- end button section -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="main-menu-section">
                                    <div class="menu">
                                        <nav class="navbar navbar-inverse">
                                            <div class="navbar-header">
                                                <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                    data-target=".js-navbar-collapse">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="#">Menu</a>
                                            </div>
                                            <div class="collapse navbar-collapse js-navbar-collapse">
                                                <ul class="nav navbar-nav" style="height: 50px">
                                                    <li class="active" style="height: 50px"><a
                                                            href="index.php?r=site/index"
                                                            style="line-height: 0px">主页</a></li>
                                                    <li style="height: 50px"><a href="index.php?r=site/about"
                                                            style="line-height: 0px">关于</a></li>
                                                    <li style="height: 50px"><a href="index.php?r=medal"
                                                            style="line-height: 0px">奖牌</a></li>
                                                    <li style="height: 50px"><a href="news.html"
                                                            style="line-height: 0px">News</a></li>
                                                    <li class="dropdown mega-dropdown" style="height: 50px">
                                                        <a href="match" class="dropdown-toggle" data-toggle="dropdown"
                                                            style="line-height: 0px">Match<span
                                                                class="caret"></span></a>
                                                        <ul class="dropdown-menu mega-dropdown-menu" style="top: 50px">
                                                            <li class="col-sm-8">
                                                                <ul>
                                                                    <li class="dropdown-header">Men Collection</li>
                                                                    <div id="menCollection" class="carousel slide"
                                                                        data-ride="carousel">
                                                                        <div class="carousel-inner">
                                                                            <div class="item active">
                                                                                <div class="banner-for-match"><a
                                                                                        href="#"><img
                                                                                            class="img-responsive"
                                                                                            src="images/match-banner1.jpg"
                                                                                            alt="#" /></a></div>
                                                                            </div>
                                                                            <!-- End Item -->
                                                                            <div class="item">
                                                                                <div class="banner-for-match"><a
                                                                                        href="#"><img
                                                                                            class="img-responsive"
                                                                                            src="images/match-banner1.jpg"
                                                                                            alt="#" /></a></div>
                                                                            </div>
                                                                            <!-- End Item -->
                                                                            <div class="item">
                                                                                <div class="banner-for-match"><a
                                                                                        href="#"><img
                                                                                            class="img-responsive"
                                                                                            src="images/match-banner1.jpg"
                                                                                            alt="#" /></a></div>
                                                                            </div>
                                                                            <!-- End Item -->
                                                                        </div>
                                                                        <!-- End Carousel Inner -->
                                                                        <!-- Controls -->
                                                                        <a class="left carousel-control"
                                                                            href="#menCollection" role="button"
                                                                            data-slide="prev">
                                                                            <span
                                                                                class="glyphicon glyphicon-chevron-left"
                                                                                aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="right carousel-control"
                                                                            href="#menCollection" role="button"
                                                                            data-slide="next">
                                                                            <span
                                                                                class="glyphicon glyphicon-chevron-right"
                                                                                aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.carousel -->
                                                                </ul>
                                                            </li>
                                                            <li class="col-sm-4">
                                                                <ul class="menu-inner">
                                                                    <li class="dropdown-header">Next Matchs</li>
                                                                    <li><a href="#">Contrary vs classical</a></li>
                                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                                    <li><a href="#">Contrary vs classical</a></li>
                                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                                    <li><a href="#">Contrary vs classical</a></li>
                                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                                    <li><a href="#">Contrary vs classical</a></li>
                                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li style="height: 50px"><a href="blog.html"
                                                            style="line-height: 0px">Blog</a></li>
                                                    <li style="height: 50px"><a href="contact.html"
                                                            style="line-height: 0px">contact</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.nav-collapse -->
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- First slide -->
                    <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t
                                            Derserve</span><br>to win!</h3>
                                    <p>If you use this site regularly and would like to help keep the site on the
                                        Internet,<br>
                                        please consider donating a small sum to help pay..
                                    </p>
                                    <button class="btn btn-primary btn-lg">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Second slide -->
                    <div class="item skyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t
                                            Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European
                                        Championships.</p>
                                    <button class="btn btn-primary btn-lg">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Third slide -->
                    <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t
                                            Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European
                                        Championships.</p>
                                    <button class="btn btn-primary btn-lg">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.carousel-inner -->
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- /.carousel -->
            <div class="news">
                <div class="container" style="width: fit-content;">
                    <div class="heading-slider" style="center">
                        <p class="headline"><img src="images/logo_color.svg" height=30 /></p>
                        <!--made by vipul mirajkar thevipulm.appspot.com-->
                        <h1>
                            <style text="text/css">a.typewrite:hover{color:white}</style>
                            <a class="typewrite" data-period="2000"
                                data-type='[ "2020东京奥运会 2021年7月23日-2021年8月8日 情同与共 United by Emotion 感動で、私たちはひとつになる"]'>
                                <span class="wrap"></span>
                            </a>
                        </h1 <span class="wrap"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:30px;">
        <?= Alert::widget() ?>
    </div>



    <?=$content?>

    <footer id="footer" class="footer" style="background: #0e55b6; margin-top: 30px">
         <div class="container" style="width:1400px">
            <div class="row">
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="https://www.nankai.edu.cn/"><img src="images/nankai.png" style="width: 300px" /></a>
                        </div>
                        <p style="font-size: larger">南开大学<a href="http://courseware.nkdbis.cn/#/step-1" style="color:white;">互联网数据库开发</a>课程设计</p>
                        <ul class="social-icons style-4 pull-left">
                           <li><a class="github" href="https://gitee.com/internet-work/InternetWork

"><i class="fa fa-github"></i></a></li>
                           <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                           <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3 style="border-bottom-color: white;">导航</h3>
                        <ul class="footer-menu">
                           <li><a href="index.php?r=site/index">主页</a></li>
                           <li><a href="index.php?r=site/about">关于</a></li>
                           <li><a href="index.php?r=medal">奖牌</a></li>
                           <li><a href="matche.html">Recent Matchs</a></li>
                           <li><a href="blog.html">Our Blog</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3 style="border-bottom-color: white;">联系我们</h3>
                        <ul class="address-list">
                           <li><i class="fa fa-map-marker"></i>天津海河教育园区同砚路38号 [300350]</li>
                           <li><i class="fa fa-github"></i><a href="https://github.com/shm0214" style="color:white;">shm0214</a></li>
                           <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i>shm190813@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full">
                     <div class="contact-footer" id="nkmap"></div> 
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom" style="border-top-color: white;background: #0e55b6;border-bottom-color: white;">
            <div class="container">
               <p>Copyright © 2021 Powered by <a href="https://www.yiiframework.com/" target="_blank">Yii2</a></p>
            </div>
         </div>
      </footer>
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>

<script>
    function logout(token) {
        console.log(token)
        $.ajax({
            url: "index.php?r=site/logout",
            type: 'POST',
            data: {
                '_csrf-frontend': token
            },
            success: function(result) {
                location.reload(true)
            },
            error: function(error) {
                console.log(error)
            }
        })
    }

    var map = new AMap.Map('nkmap', {
        resizeEnable: true, //是否监控地图容器尺寸变化
        zoom:15, //初始化地图层级
        center: [117.345894,38.988826] //初始化地图中心点
    });
</script>