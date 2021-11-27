<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the main layout of the frontend web.
 */

use common\widgets\Alert;

?>


<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<?php $this->registerCsrfMetaTags(); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>2020东京奥运会</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="images/logo_color.svg" type="image/x-icon" />
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
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- end font family -->
<link rel="stylesheet" href="css/3dslider.css" />
<script src="js/jquery-1.11.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="js/3dslider.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.15&key=ab9f0eb3008db971cfd71a9ec76c19e8">
</script>
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
                                    <a href="index.html"><img src="images/logo_color.svg" /><img src="images/logo_tokyo.png" height=100 width=100></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="align-items:center; display:inline-grid; margin-left: 182px;">
                            <div class="right_top_section" style="display: flex">
                                <!-- social icon -->
                                <ul class="social-icons pull-left">
                                    <li><a class="github" href="https://gitee.com/internet-work/InternetWork
"><i class="fa fa-github"></i></a></li>
                                    <li><a class="twitter" href="https://twitter.com/Tokyo2020jp"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="https://www.youtube.com/c/tokyo2020"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="pinterest" href="https://weibo.com/tokyo2020official?is_hot=1"><i class="fa fa-weibo"></i></a></li>
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
                                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="#">Menu</a>
                                            </div>
                                            <div class="collapse navbar-collapse js-navbar-collapse">
                                                <ul class="nav navbar-nav" style="height: 50px">
                                                    <li class="active" style="height: 50px"><a href="index.php?r=site/index" style="line-height: 0px">主页</a></li>
                                                    <li style="height: 50px"><a href="index.php?r=result" style="line-height: 0px">比赛结果</a></li>
                                                    <li class="dropdown mega-dropdown" style="height: 50px">
                                                        <a href="index.php?r=site/medal" class="dropdown-toggle" data-toggle="dropdown" style="line-height: 0px" onclick="window.location.href='index.php?r=site/medal'">奖牌榜<span class="caret"></span></a>
                                                        <ul class="dropdown-menu mega-dropdown-menu" style="top: 50px; background: #0e55b6; width: 58%;margin-left: 100px; height: 250px">
                                                            <div class="top_paiM" style="margin-left: 10px">
                                                                <h5><span id='not' class="title" data-spm-anchor-id="0.P1MICI5m5UJV.EalId75omwTo.i0">奖牌榜<a id="country" href="index.php?r=site/medal"><img src="images/topicon.png" /></a></span></h5>
                                                                <span id='not' class="line" style="margin-top:10px"></span>
                                                                <table>
                                                                    <tbody id="jpb">
                                                                        <tr class="paiM_title">
                                                                            <th>名次</th>
                                                                            <th class="country">国家/地区</th>
                                                                            <th>
                                                                                <img src="images/jiangjin.png" alt="">
                                                                            </th>
                                                                            <th>
                                                                                <img src="images/jiangyin.png" alt="">
                                                                            </th>
                                                                            <th>
                                                                                <img src="images/jiangtong.png" alt="">
                                                                            </th>
                                                                            <th>总</th>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td class="country"><a id="country" href="//2020.cctv.com/medal_list/details/index.shtml?spm=0.P1MICI5m5UJV.EalId75omwTo.2&amp;countryid=USA"><i class="flag"><img src="images/flag/US.png"></i> 美国</a></td>
                                                                            <td>39</td>
                                                                            <td>41</td>
                                                                            <td>33</td>
                                                                            <td>113</td>
                                                                        </tr>
                                                                        <tr class="paiM_high">
                                                                            <td>2</td>
                                                                            <td class="country"><a id="country" href="//2020.cctv.com/medal_list/details/index.shtml?countryid=CHN"><i class="flag"><img src="images/flag/CN.png" alt=""></i> 中国</a></td>
                                                                            <td>38</td>
                                                                            <td>32</td>
                                                                            <td>18</td>
                                                                            <td>88</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td class="country"><a id="country" href="//2020.cctv.com/medal_list/details/index.shtml?countryid=JPN"><i class="flag"><img src="images/flag/JP.png" alt=""></i> 日本</a></td>
                                                                            <td>27</td>
                                                                            <td>14</td>
                                                                            <td>17</td>
                                                                            <td>58</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td class="country"><a id="country" href="//2020.cctv.com/medal_list/details/index.shtml?countryid=GBR"><i class="flag"><img src="images/flag/GB.png" alt=""></i> 英国</a></td>
                                                                            <td>22</td>
                                                                            <td>21</td>
                                                                            <td>22</td>
                                                                            <td>65</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td class="country"><a id="country" href="//2020.cctv.com/medal_list/details/index.shtml?countryid=ROC"><i class="flag"><img src="images/flag/ROC.png" alt=""></i> ROC</a></td>
                                                                            <td>17</td>
                                                                            <td>7</td>
                                                                            <td>22</td>
                                                                            <td>46</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                        </ul>
                                                    </li>
                                                    <li style="height: 50px"><a href="index.php?r=news" style="line-height: 0px">新闻</a></li>
                                                    <li style="height: 50px"><a href="index.php?r=site/about" style="line-height: 0px">关于</a></li>
                                                    <li style="height: 50px"><a href="index.php?r=site/contact" style="line-height: 0px">联系我们</a></li>
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
                    <div class="item active slider3" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3 style="line-height:1.2">2020 东京奥运会<br> <span class="color-yellow">2021.7.23-2021.8.8</span><br>情同与共</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Second slide -->
                    <div class="item slider2" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3 style="line-height:1.2">2020 东京奥运会<br> <span class="color-yellow">2021.7.23-2021.8.8</span><br>情同与共</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Third slide -->
                    <div class="item slider1" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3 style="line-height:1.2">2020 东京奥运会<br> <span class="color-yellow">2021.7.23-2021.8.8</span><br>情同与共</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.carousel-inner -->
            </div>
            <!-- /.carousel -->
            <div class="news">
                <div class="container" style="width: fit-content;">
                    <div class="heading-slider" style="center">
                        <p class="headline"><img src="images/logo_color.svg" height=30 /></p>
                        <!--made by vipul mirajkar thevipulm.appspot.com-->
                        <h1>
                            <style text="text/css">
                                a.typewrite:hover {
                                    color: white
                                }
                            </style>
                            <a class="typewrite" data-period="2000" data-type='[ "2020东京奥运会 2021年7月23日-2021年8月8日 情同与共 United by Emotion 感動で、私たちはひとつになる"]'>
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



    <?= $content ?>

    <footer id="footer" class="footer" style="background: #0e55b6; margin-top: 30px">
        <div class="container" style="width:1400px">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="https://www.nankai.edu.cn/"><img src="images/nankai.png" style="width: 300px" /></a>
                            </div>
                            <p style="font-size: larger;color:white">南开大学<a href="http://courseware.nkdbis.cn/#/step-1" style="color:white;">互联网数据库开发</a>课程设计</p>
                            <ul class="social-icons style-4 pull-left">
                                <li><a class="github" href="https://gitee.com/internet-work/InternetWork
"><i class="fa fa-github"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/Tokyo2020jp"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="https://www.youtube.com/c/tokyo2020"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="pinterest" href="https://weibo.com/tokyo2020official?is_hot=1"><i class="fa fa-weibo"></i></a></li>
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
                                <li><a href="index.php?r=result">比赛结果</a></li>
                                <li><a href="index.php?r=site/medal">奖牌榜</a></li>
                                <li><a href="index.php?r=news">新闻</a></li>
                                <li><a href="index.php?r=site/about">关于</a></li>
                                <li><a href="index.php?r=site/contact">联系我们</a></li>
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
                                <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i>shm190813@gmail.com
                                </li>
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
                <p style="color: white">Copyright © 2021 Powered by <a href="https://www.yiiframework.com/" target="_blank">Yii2</a></p>
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
        zoom: 15, //初始化地图层级
        center: [117.345894, 38.988826] //初始化地图中心点
    });

    $('.carousel').carousel({
        interval: 2000
    })
</script>