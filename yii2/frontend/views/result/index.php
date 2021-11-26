<?php

use frontend\models\OlyGameInfoSearch;
?>


<div class="column_wrapper_aoyun2020" id="SUBD1623932029499749">
    <div class="djayh19637_ym_title">东京奥运会项目</div>
    <div class="ELMTjQ8LOu8smnMFXo6vXEgD210617" style="height: 25px;">
        <div class="vspace_jj"></div>
    </div>
    <div class="djayh19637_xmjihe_ind02" style="color: black">
        东京奥运会共设33个大项339个小项，其中33个大项包含28种原有项目，加上5种新项目，分别是<a href="index.php?r=result/view&game=karate">空手道</a>、<a href="index.php?r=result/view&game=skateboarding">滑板</a>、<a href="index.php?r=result/view&game=sport_climbing">运动攀登</a>、<a href="index.php?r=result/view&game=surfing">冲浪</a>以及<a href="index.php?r=result/view&game=baseball_softball">棒垒球</a>。空手道和棒垒球只会在本届出现，下届将会取消，其余三项则保留，被取消的项目将由霹雳舞取代以吸引年轻观众。 </div>
    <div class="ELMTjQ8LOu8smnMFXo6vXEgD210617" style="height: 5px;">
        <div class="vspace_jj"></div>
    </div>
    <div class="djayh19637_xmjihe_ind02">

        <?php
        $searchModel = new OlyGameInfoSearch();
        $dataProvider = $searchModel->search(['page' => '0', 'pageSize' => '60']);
        $models = $dataProvider->getModels();
        foreach ($models as $model) {
            $html = <<<EOT
                                    <div class="icon no_icon"> <a href="index.php?r=result/view&game={$model['game_code']}">
                                        <div class="img"> <img src="images/icon/{$model['game_code']}.png" style="height: 70px;"> </div>
                                        <p>{$model['game_name_zh']}</p>
                                    </a></div>
EOT;
            echo $html;
        }
        ?>

        <div class="clear"></div>

    </div>
</div>


<style>
    .column_wrapper_aoyun2020 {
        width: 1220px;
        margin: 0 auto;
    }

    .column_wrapper {
        width: 1220px;
        margin: 0 auto;
    }

    .dah19621_ind01 {
        width: 100%;
        height: 59px;
    }

    .dah19621_ind01 .top_nav {
        width: 1220px;
        margin: 0 auto;
        font-size: 0;
        position: relative;
        z-index: 9;
    }

    .dah19621_ind01 .top_nav .nav_left {
        float: left;
        vertical-align: top;
    }

    .dah19621_ind01 .top_nav .nav_left li {
        float: left;
        margin-left: 15px;
        cursor: pointer;
        position: relative;
    }

    .dah19621_ind01 .top_nav .nav_left li a {
        font-size: 16px;
        line-height: 59px;
        color: #333;
    }

    .dah19621_ind01 .top_nav .nav_left li a.navhover {
        color: #8a0b1c;
    }

    .dah19621_ind01 .top_nav .nav_left li .nav_icon {
        display: inline-block;
        width: 12px;
        height: 7px;
        background: url(//p5.img.cctvpic.com/photoAlbum/templet/common/DEPA1623930813137640/top1.png) no-repeat;
        margin-left: 5px;
    }

    .dah19621_ind01 .top_nav .nav_left li .nav_icon.nav_high {
        background: url(//p5.img.cctvpic.com/photoAlbum/templet/common/DEPA1623930813137640/top2.png) no-repeat;
    }

    .dah19621_ind01 .top_nav .nav_box {
        width: 127px;
        background: #f0dcc2;
        position: absolute;
        top: 59px;
        left: -20px;
        z-index: 1;
        display: none;
    }

    .dah19621_ind01 .top_nav .nav_box ul {
        padding: 13px 0;
        vertical-align: top;
    }

    .dah19621_ind01 .top_nav .nav_box ul li {
        height: 39px;
        margin: 0 20px;
    }

    .dah19621_ind01 .top_nav .nav_box ul li a {
        background: url(//p5.img.cctvpic.com/photoAlbum/templet/common/DEPA1623930813137640/nav_list_bg.png) no-repeat left center;
        font-size: 14px;
        line-height: 39px;
        color: #333;
        padding-left: 17px;
    }

    .dah19621_ind01 .top_nav .nav_box ul li a:hover {
        color: #8a0b1c;
        background-image: url(//p5.img.cctvpic.com/photoAlbum/templet/common/DEPA1623930813137640/nav_list_bg_hover.png);
    }

    .dah19621_ind01 .nav_right {
        font-size: 0;
        float: right;
        display: inline-block;
        margin-top: 15px;
        height: 28px;
        vertical-align: top;
    }

    .dah19621_ind01 .nav_right a {
        display: inline-block;
        text-align: center;
        height: 26px;
        line-height: 26px;
        font-size: 14px;
        color: #fff;
        border: 1px solid #fff;
        border-radius: 0 10px 0 10px;
        margin: 0 5px;
        overflow: hidden;
        padding: 0 10px;
    }

    .dah19621_ind01 .nav_right a:hover {
        border-radius: 0 10px 0 10px;
        color: #8a0b1c;
        border: 1px solid transparent;
        background: -webkit-linear-gradient(to right, #c3894f, #e0af78);
        background: -o-linear-gradient(to right, #c3894f, #e0af78);
        background: -moz-linear-gradient(to right, #c3894f, #e0af78);
        background: linear-gradient(to right, #c3894f, #e0af78);
        filter: progid:DXImageTransform.Microsoft.Gradient(startColorStr='#c3894f', endColorStr='#e0af78', gradientType='1');

    }


    .dah19621_ind02 {
        width: 100%;
        height: 352px;
        position: relative;
    }

    .dah19621_ind02 .topTitle_con {
        position: relative;
        width: 1220px;
        margin: 0 auto;
        height: 100%;
    }

    .dah19621_ind02 .topTitle_log {
        position: absolute;
        top: 130px;
        left: 35px;
        position: relative;
    }

    .dah19621_ind02 .topTitle_ti {
        position: absolute;
        top: 54px;
        left: 240px;
        background: url(//p5.img.cctvpic.com/photoAlbum/templet/common/DEPA1623930813137640/banner_gg_bg.png) no-repeat;
        width: 106px;
        height: 34px;
        padding: 6px 81px 25px 10px;
    }

    .dah19621_ind02 .top_paiM {
        width: 270px;
        position: absolute;
        bottom: 37px;
        right: 75px;
    }

    .dah19621_ind02 .top_paiM h5 {
        text-align: center;
        font-size: 0;
    }

    .dah19621_ind02 .top_paiM h5 .gg {
        height: 21px;
        display: inline-block;
        vertical-align: middle;
    }

    .dah19621_ind02 .top_paiM h5 .title {
        color: #fff;
        font-size: 22px;
        vertical-align: middle;
        margin: 0 6px;
    }

    .dah19621_ind02 .top_paiM h5 .more {
        display: inline-block;
        width: 17px;
        height: 17px;
    }

    .dah19621_ind02 .top_paiM h5 .more a {
        background: url(//p5.img.cctvpic.com/photoAlbum/templet/common/DEPA1623930813137640/topicon.png) no-repeat center center;
        display: inline-block;
        width: 17px;
        height: 17px;
    }

    .dah19621_ind02 .line {
        display: inline-block;
        width: 100%;
        height: 1px;
        background: #fff;
        position: absolute;
        top: 70px;
        left: 0;
    }

    .dah19621_ind02 .paiM_title {
        height: 40px;
        line-height: 40px;
    }

    .dah19621_ind02 .top_paiM h5 a {
        vertical-align: middle;
    }

    .dah19621_ind02 .top_paiM table {
        width: 270px;
        font-size: 15px;
    }

    .dah19621_ind02 .top_paiM table th {
        text-align: center;
        color: #fff;
    }

    .dah19621_ind02 .top_paiM table td {
        text-align: center;
    }

    .dah19621_ind02 .top_paiM table td a {
        color: #fff;
        height: 26px;
        line-height: 26px;
        text-align: center;
    }

    .dah19621_ind02 .top_paiM table tr.paiM_high td a {
        color: #f5d740;
    }

    .dah19621_ind02 .top_djs {
        position: absolute;
        bottom: 4px;
        left: 330px;
        background: url(//p5.img.cctvpic.com/photoAlbum/templet/common/DEPA1623930813137640/djsbg.png) no-repeat;
        width: 373px;
        height: 112px;
    }

    .dah19621_ind02 .djs_con {
        width: 200px;
        margin-left: 85px;
        margin-top: 35px;
    }

    .dah19621_ind02 .djs_con h5 {
        color: #b2102c;
        font-size: 15px;
        border-bottom: 1px solid #b2102c;
        margin-top: 10px;
        text-align: center;
    }

    .dah19621_ind02 .djs_con p {
        font-size: 0px;
        height: 45px;
        line-height: 45px;
        color: #b2102c;
        text-align: center;
    }

    .dah19621_ind02 .djs_con p span {
        display: inline-block;
        width: 22px;
        height: 22px;
        line-height: 22px;
        text-align: center;
        background: #b2102c;
        border: 1px solid #8b091e;
        border-radius: 5px;
        color: #e3ceb3;
        font-weight: bold;
        vertical-align: middle;
        font-size: 15px;
    }

    .dah19621_ind02 .djs_con p em {
        display: inline-block;
        line-height: 45px;
        color: #b2102c;
        margin: 0 5px;
        font-size: 16px;
        vertical-align: middle;
    }

    .dah19621_ind02 .top_zjs {
        position: absolute;
        top: 260px;
        left: 330px;
        background: url(//p5.img.cctvpic.com/photoAlbum/templet/common/DEPA1623930813137640/djsbg.png) no-repeat;
        width: 373px;
        height: 112px;
        display: none;
    }

    .dah19621_ind02 .top_zjs .djs_con h5 {
        color: #b2102c;
        font-size: 21px;
        font-weight: bold;
        border-bottom: 0;
    }

    .dah19621_ind02 .top_zjs .djs_con p {
        font-size: 16px;
    }

    .dah19621_ind02 .top_zjs .djs_con p span {
        margin: 0 5px;
    }

    .djayh19637_xmjihe_ind02 {
        margin: 0 auto;
        background: #f4e1ca;
        padding: 30px 32px;
        overflow: hidden;
        border-radius: 10px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
    }

    .djayh19637_xmjihe_ind02 .icon {
        width: 148px;
        height: 89px;
        margin-right: 20px;
        margin-bottom: 20px;
        background-color: #f8eee2;
        border-radius: 6px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        -ms-border-radius: 6px;
        -o-border-radius: 6px;
        position: relative;
        float: left;
    }

    .djayh19637_xmjihe_ind02 .icon:nth-child(7n) {
        margin-right: 0;
    }

    .djayh19637_xmjihe_ind02 .icon .img {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
        width: 148px;
        height: 69px;
    }

    .djayh19637_xmjihe_ind02 .icon .img img {
        border: 2px solid #fff;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
    }

    .djayh19637_xmjihe_ind02 .icon p {
        text-align: center;
        color: #333333;
        font-size: 15px;
        height: 24px;
        line-height: 24px;
        margin-top: -11px;
    }

    .djayh19637_xmjihe_ind02 .icon .btn {
        position: absolute;
        right: 0;
        top: 0;
        background: #b11c33;
        color: #f8eee2;
        font-size: 13px;
        font-weight: bold;
        display: inline-block;
        width: 38px;
        text-align: center;
        height: 20px;
        line-height: 20px;
        display: none;
        border-radius: 0px 6px 0px 6px;
        -webkit-border-radius: 0px 6px 0px 6px;
        -moz-border-radius: 0px 6px 0px 6px;
        -ms-border-radius: 0px 6px 0px 6px;
        -o-border-radius: 0px 6px 0px 6px;
    }

    .djayh19637_xmjihe_ind02 .icon:hover {
        background-color: #e5a96e;
    }

    .djayh19637_xmjihe_ind02 .icon a {
        text-decoration: none;
    }

    .djayh19637_ym_title {
        background: url(images/big_title.png) no-repeat center center;
        height: 88px;
        line-height: 88px;
        text-align: center;
        font-size: 30px;
        color: #c6243c;
        font-weight: bold;
    }
</style>

<script>
    $(document).ready(function() {
        document.querySelector('.djayh19637_ym_title').scrollIntoView();
    })
</script>