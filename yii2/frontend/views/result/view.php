<?php

use yii\helpers\VarDumper;
use frontend\models\OlyAthletesInfoSearch;
use frontend\models\OlyPrizeInfoSearch;
?>

<div class="column_wrapper_aoyun2020" id="SUBD1623932029499749">
    <div class="djayh19637_ym_title">东京奥运会项目-----<?= $game['game_name_zh'] ?></div>
    <div class="ELMTjQ8LOu8smnMFXo6vXEgD210617" style="height: 25px;">
        <div class="vspace_jj"></div>
    </div>
    <div class="djayh19637_xmjihe_ind02" style="color: black">
        <?= $game['game_introduction'] ?> </div>
    <div class="ELMTjQ8LOu8smnMFXo6vXEgD210617" style="height: 5px;">
        <div class="vspace_jj"></div>
    </div>
    <script>
        var game_codes = []
    </script>
    <div class="djayh19637_xmjihe_ind02" style="color: black;">
        <div class="container" style="display: flex; justify-content: center;align-items: center;">
            <script>
                var type_ids = []

                function go() {
                    type_name = $('.select_box span div').text()
                    var type_id
                    $('#type li').each(function(index) {
                        if ($(this).text().trim() == type_name)
                            type_id = type_ids[index]
                    })
                    if (typeof type_id !== 'undefined') {
                        url = window.location.href.split('&type_id')
                        window.location.href = url[0] + '&type_id=' + type_id
                    }
                }
            </script>
            <div class="select_box" style="height: 60px; width: 300px;">
                <font>&#8250;</font>
                <span style="height: 60px; width: 300px">
                    <div style="height:60px; line-height: 60px; font-size: larger">
                <?php
                    if($type)
                        echo $type['type_name_zh'];
                    else
                        echo '赛事';
                ?>
                </div>
                </span>
                <ul id='type' style="height:200px;overflow-y:auto; overflow-x: hidden;  background: #f4e1ca; width: 300px; z-index: 9999">
                    <?php
                    if (is_array($types))
                        foreach ($types as $t) {
                            echo '<script>type_ids.push(' . $t['type_id'] . ')</script>';
                            echo '<li style="width: 300px"><div style="height:60px; line-height: 60px; font-size: larger;">' . $t['type_name_zh'] . '</div></li>';
                        }
                    ?>
                </ul>
            </div>
            <button type="submit" class="btn btn-primary" onclick="go()">查询</button>
        </div>
        <?php
        if (!$type)
            if (is_array($types))
                foreach ($types as $t) {
                    $html1 = <<<EOT
        <section class="Gridstyles__GridContainer-sc-1p7u4tu-0 fLQzGx styles__Wrapper-sc-54gbci-1 cFYMzv" style="width: 1160px; height:550px;">
            <section class="styles__Wrapper-sc-282810-0 ehIKiQ event-row active" data-row-id="award-row-1">
                <div class="styles__RowTitle-sc-282810-1 eNNLoF">
                    <h2 class="styles__Title-sc-282810-2 bPUjCF">{$t['type_name_zh']}</h2><button class="styles__RowToggle-sc-282810-3 eramNz">
                        <div data-cy="full-results-link-row-1" class="styles__InlineLink-sc-282810-7 eSfMNu"><a data-cy="next-link" class="" href="index.php?r=result/view&game={$game['game_code']}&type_id={$t['type_id']}">完整结果</a></div>
                    </button>
                </div>
EOT;
                    echo $html1;
                    $searchModel = new OlyPrizeInfoSearch();
                    $dataProvider = $searchModel->search(['type_id' => $t['type_id'], 'rank' => '3']);
                    $models = $dataProvider->getModels();
                    $code1 = explode('.', explode('/', $models[0]['team']['flag_path'])[2])[0];
                    $code2 = explode('.', explode('/', $models[1]['team']['flag_path'])[2])[0];
                    $code3 = explode('.', explode('/', $models[2]['team']['flag_path'])[2])[0];
                    $html2 = <<<EOT
            <div class="styles__Content-sc-282810-4 kBuua-D">
            <div data-cy="award-card-1-row-2" class="styles__Card-sc-282810-5 llaNtC">
                <div data-cy="team-award-card" class="styles__Wrapper-sc-1fimfo3-0 bDjXVe">
                    <div class="styles__MedalWrapper-sc-1k9e9fs-0 eGxkcO">
                        <div data-cy="medal" data-medal-id="" title="Gold" class="Medalstyles__Wrapper-sc-1tu6huk-0 kXFxTL"><img src="images/jiangjin.png" alt=""><span data-cy="medal-additional" class="Medalstyles__Medal-sc-1tu6huk-1 kWNxHu">金牌</span></div>
                    </div>
                    <div class="styles__CountryWrapper-sc-1fimfo3-1 forJNW">
                        <picture data-cy="picture-wrapper">
                            <img src="images/flag/{$code1}">
                        </picture>
                        <div data-cy="USA" class="styles__CountryName-sc-1fimfo3-2 faTisC">{$models[0]['team']['team_name_zh']}</div>
                    </div>
                </div>
            </div>
            <div data-cy="award-card-2-row-2" class="styles__Card-sc-282810-5 llaNtC">
                <div data-cy="team-award-card" class="styles__Wrapper-sc-1fimfo3-0 bDjXVe">
                    <div class="styles__MedalWrapper-sc-1k9e9fs-0 eGxkcO">
                        <div data-cy="medal" data-medal-id="" title="Silver" class="Medalstyles__Wrapper-sc-1tu6huk-0 kXFxTL"><img src="images/jiangyin.png" alt=""><span data-cy="medal-additional" class="Medalstyles__Medal-sc-1tu6huk-1 kWNxHu">银牌</span></div>
                    </div>
                    <div class="styles__CountryWrapper-sc-1fimfo3-1 forJNW">
                        <picture data-cy="picture-wrapper">
                        <img src="images/flag/{$code2}">
                        </picture>
                        <div data-cy="ROC" class="styles__CountryName-sc-1fimfo3-2 faTisC">{$models[1]['team']['team_name_zh']}</div>
                    </div>
                </div>
            </div>
            <div data-cy="award-card-3-row-2" class="styles__Card-sc-282810-5 llaNtC">
                <div data-cy="team-award-card" class="styles__Wrapper-sc-1fimfo3-0 bDjXVe">
                    <div class="styles__MedalWrapper-sc-1k9e9fs-0 eGxkcO">
                        <div data-cy="medal" data-medal-id="" title="Bronze" class="Medalstyles__Wrapper-sc-1tu6huk-0 kXFxTL"><img src="images/jiangtong.png" alt=""><span data-cy="medal-additional" class="Medalstyles__Medal-sc-1tu6huk-1 kWNxHu">铜牌</span></div>
                    </div>
                    <div class="styles__CountryWrapper-sc-1fimfo3-1 forJNW">
                        <picture data-cy="picture-wrapper">
                        <img src="images/flag/{$code3}">
                        </picture>
                        <div data-cy="CHN" class="styles__CountryName-sc-1fimfo3-2 faTisC">{$models[2]['team']['team_name_zh']}</div>
                    </div>
                </div>
            </div>
EOT;
                    echo $html2;
                    echo "</div></section></section>";
                }

        if ($type) {
            $searchModel = new OlyPrizeInfoSearch();
            $dataProvider = $searchModel->search(['type_id' => $type['type_id']]);
            $models = $dataProvider->getModels();
            // VarDumper::dump($models);
            $gold = "oyScw";
            $silver = "lfKhON";
            $bronze = "gOpEiF";
            $other = "ghnLFg";
            if ($models[0]['athlete_id'] == -1) {
                $html1_1 = <<<EOT
                        <div class="Tablestyles__Wrapper-xjyvs9-0 izYiZp">
            <div data-cy="table-header" class="Tablestyles__CommonGrid-xjyvs9-1 Tablestyles__Header-xjyvs9-2 fztkfu eSTPHF">
                <div data-cy="header-cell" class="styles__Wrapper-qcc2vw-1 dvlGAI">
                    <div class="styles__HeaderDesktop-qcc2vw-3 gHikWb">排名 </div>
                </div>
                <div data-cy="header-cell" class="styles__Wrapper-qcc2vw-1 bBcJNm">
                    <div class="styles__HeaderDesktop-qcc2vw-3 gHikWb" style="width:100px">国家/地区 </div>
                </div>
                <div data-cy="header-cell" class="styles__Wrapper-qcc2vw-1 bBcJNm"></div>
            </div>
            <div data-cy="table-content" class="Tablestyles__CommonGrid-xjyvs9-1 Tablestyles__Content-xjyvs9-3 jXajXq dzULeK">
EOT;
                echo $html1_1;
                foreach ($models as $model) {
                    switch ($model['rank']) {
                        case 1:
                            $class = $gold;
                            break;
                        case 2:
                            $class = $silver;
                            break;
                        case 3:
                            $class = $bronze;
                            break;
                        default:
                            $class = $other;
                            break;
                    }
                    if (!empty($model['team']['flag_path']))
                        $path = explode('/', $model['team']['flag_path'])[2];
                    else
                        $path = "";
                    $html1_2 = <<<EOT
                <div class="line"></div>
                <div data-cy="team-result-row" data-row-id="event-result-row-1" class="styles__Row-sc-rh9yz9-11 styles__TeamResultRowGrid-sc-11ihhd5-0 gpmzqo ciGTVt">
                    <div data-cy="medal-row-1" class="styles__MedalWrapper-sc-rh9yz9-0 ghRPpF">
                        <div data-cy="medal" data-medal-id="" title="Gold" class="Medalstyles__Wrapper-sc-1tu6huk-0 kXFxTL"><span data-cy="medal-main" class="Medalstyles__Medal-sc-1tu6huk-1 {$class}">{$model['rank']}</span></div>
                    </div>
                    <div data-cy="flag-row-1" class="styles__Flag-sc-rh9yz9-6 GAreb">
                        <picture data-cy="picture-wrapper">
                            <img src="images/flag/{$path}">
                        </picture>
                    </div>
                    <div data-cy="country-name-row-1" class="styles__Country-sc-rh9yz9-9 iqcElo"><span class="styles__CountryName-sc-rh9yz9-8 kWShpG">{$model['team']['team_name_zh']}</span> </div>
                    <div data-cy="team-members-row-1" class="styles__TeamMembers-sc-rh9yz9-10 vhhLt open">
                        <div class="styles__Wrapper-sc-12ivwwp-0 gFAVtc">
EOT;
                    echo $html1_2;
                    $searchModel1 = new OlyAthletesInfoSearch();
                    $dataProvider1 = $searchModel1->search(['group_id' => $model['group_id']]);
                    $athletes = $dataProvider1->getModels();
                    foreach ($athletes as $athlete) {
                        $html1_3 = <<<EOT
                    <a data-cy="team-member" class="styles__AthleteLink-sc-12ivwwp-1 eomCYY"><span>{$athlete['name_en']}</span></a>
EOT;
                        echo $html1_3;
                    }
                    echo "</div></div></div>";
                }
            } else {
                $html1_1 = <<<EOT
                        <div class="Tablestyles__Wrapper-xjyvs9-0 izYiZp">
            <div data-cy="table-header" class="Tablestyles__CommonGrid-xjyvs9-1 Tablestyles__Header-xjyvs9-2 fztkfu eSTPHF">
                <div data-cy="header-cell" class="styles__Wrapper-qcc2vw-1 dvlGAI">
                    <div class="styles__HeaderDesktop-qcc2vw-3 gHikWb">排名 </div>
                </div>
                <div data-cy="header-cell" class="styles__Wrapper-qcc2vw-1 bBcJNm">
                    <div class="styles__HeaderDesktop-qcc2vw-3 gHikWb" style="width:100px">国家/地区 </div>
                </div>
                <div data-cy="header-cell" class="styles__Wrapper-qcc2vw-1 bBcJNm">
                    <div class="styles__HeaderDesktop-qcc2vw-3 gHikWb" style="margin-left:150px">运动员 </div>
                </div>
            </div>
            <div data-cy="table-content" class="Tablestyles__CommonGrid-xjyvs9-1 Tablestyles__Content-xjyvs9-3 jXajXq dzULeK">
EOT;
                echo $html1_1;
                foreach ($models as $model) {
                    switch ($model['rank']) {
                        case 1:
                            $class = $gold;
                            break;
                        case 2:
                            $class = $silver;
                            break;
                        case 3:
                            $class = $bronze;
                            break;
                        default:
                            $class = $other;
                            break;
                    }
                    if (!empty($model['team']['flag_path']))
                        $path = explode('/', $model['team']['flag_path'])[2];
                    else
                        $path = "logo_color.svg";
                    $searchModel1 = new OlyAthletesInfoSearch();
                    $dataProvider1 = $searchModel1->search(['athlete_id' => $model['athlete_id']]);
                    $athlete = $dataProvider1->getModels();
                    $html1_2 = <<<EOT
                <div class="line"></div>
                <div data-cy="team-result-row" data-row-id="event-result-row-1" class="styles__Row-sc-rh9yz9-11 styles__TeamResultRowGrid-sc-11ihhd5-0 gpmzqo ciGTVt">
                    <div data-cy="medal-row-1" class="styles__MedalWrapper-sc-rh9yz9-0 ghRPpF">
                        <div data-cy="medal" data-medal-id="" title="Gold" class="Medalstyles__Wrapper-sc-1tu6huk-0 kXFxTL"><span data-cy="medal-main" class="Medalstyles__Medal-sc-1tu6huk-1 {$class}">{$model['rank']}</span></div>
                    </div>
                    <div data-cy="flag-row-1" class="styles__Flag-sc-rh9yz9-6 GAreb">
                        <picture data-cy="picture-wrapper">
                            <img src="images/flag/{$path}">
                        </picture>
                    </div>
                    <div data-cy="country-name-row-1" class="styles__Country-sc-rh9yz9-9 iqcElo"><span class="styles__CountryName-sc-rh9yz9-8 kWShpG">{$model['team']['team_name_zh']}</span> </div>
                    <div data-cy="country-name-row-1" class="styles__Country-sc-rh9yz9-9 iqcElo" style="margin-left:150px; width: 500px;"><span class="styles__CountryName-sc-rh9yz9-8 kWShpG" >{$athlete[0]['name_en']}</span> </div>
                    <div data-cy="team-members-row-1" class="styles__TeamMembers-sc-rh9yz9-10 vhhLt open">
EOT;
                    echo $html1_2;

                    echo "</div></div>";
                }
            }
        }
        ?>








    </div>
</div>
<script>
    $(function() {
        var s_title = $(".select_box span");
        var s_select = $(".select_box li");
        s_title.click(function(e) {
            $(this).addClass("span_aa");
            $(this).next("ul").show();
            e.stopPropagation();
        });
        s_select.click(function() {
            var s_text = $(this).html();
            var s_title_2 = $(this).parent('ul').prev("span");
            s_title_2.html(s_text).removeClass("span_aa");
            $(this).parent('ul').hide();
        });
        $(document).click(function() {
            s_title.removeClass("span_aa");
            $(".select_box ul").hide();
        });
    });
</script>
<style>
    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .select_box {
        width: 200px;
        height: 36px;
        border: 1px solid #df7d18;
        position: relative;
        float: left;
        margin-right: 50px;
    }

    .select_box span {
        display: inline-block;
        width: 200px;
        height: 36px;
        line-height: 36px;
        cursor: pointer;
        text-indent: 10px;
    }

    .select_box .span_aa {
        color: #C36;
    }

    .select_box ul {
        width: 200px;
        position: absolute;
        top: 36px;
        left: -1px;
        border: 1px solid #df7d18;
        display: none;
        background: #fff;
    }

    .select_box li {
        cursor: pointer;
        line-height: 36px;
        text-indent: 10px;
    }

    .select_box li:hover {
        background: #df7d18;
        color: #fff;
    }

    .select_box font {
        position: absolute;
        right: 10px;
        font-size: 26px;
        font-family: "微软雅黑";
        color: #df7d18;
        transform: rotate(90deg);
    }
</style>

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

    /*!sc*/

    .fLQzGx {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    /*!sc*/
    @media (min-width:48em) {
        .fLQzGx {
            padding-left: calc((100% - 728px) / 2);
            padding-right: calc((100% - 728px) / 2);
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .fLQzGx {
            padding-left: calc((100% - 952px) / 2);
            padding-right: calc((100% - 952px) / 2);
        }
    }

    /*!sc*/
    @media (min-width:78.75em) {
        .fLQzGx {
            padding-left: calc((100% - 1220px) / 2);
            padding-right: calc((100% - 1220px) / 2);
        }
    }

    /*!sc*/

    .cFYMzv {
        box-sizing: border-box;
        padding-bottom: 3.95rem;
        padding-top: 2rem;
        width: 100%;
    }

    /*!sc*/
    @media (min-width:48em) {
        .cFYMzv {
            padding-bottom: 12.6rem;
            width: auto;
        }
    }

    /*!sc*/
    .cFYMzv .event-row {
        border-top: 0.1rem solid #e5e5e5;
    }

    /*!sc*/
    .cFYMzv .event-row.active {
        margin-bottom: 0;
    }

    /*!sc*/
    .cFYMzv .event-row:last-of-type {
        border-bottom: 0.1rem solid #e5e5e5;
    }

    /*!sc*/
    @media (min-width:62em) {
        .cFYMzv .event-row.active {
            margin-bottom: 6.4rem;
            padding-bottom: 2.4rem;
        }
    }

    /*!sc*/
    data-styled.g491[id="styles__Wrapper-sc-54gbci-1"] {
        content: "cFYMzv,"
    }

    /*!sc*/

    .ehIKiQ {
        background-color: #FFFFFF;
        padding: 2.4rem 1.6rem;
    }

    /*!sc*/
    .ehIKiQ.active {
        background-color: #f2f2f2;
        padding-bottom: 4rem;
    }

    /*!sc*/
    @media (min-width:36em) {
        .ehIKiQ {
            padding: 2.4rem 11rem;
        }

        .ehIKiQ.active {
            padding-bottom: 4rem;
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .ehIKiQ {
            padding: 4rem 2rem;
        }
    }

    /*!sc*/
    data-styled.g472[id="styles__Wrapper-sc-282810-0"] {
        content: "ehIKiQ,"
    }

    .eNNLoF {
        background-color: #f2f2f2;
        position: relative;
        width: 100%;
    }

    /*!sc*/
    @media (min-width:48em) {
        .eNNLoF {
            margin: 0 auto;
            max-width: 54.8rem;
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .eNNLoF {
            margin-bottom: 3rem;
            max-width: 124rem;
        }
    }

    /*!sc*/
    data-styled.g473[id="styles__RowTitle-sc-282810-1"] {
        content: "eNNLoF,"
    }

    /*!sc*/

    .eramNz {
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background: transparent;
        border: 0;
        cursor: pointer;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        height: 100%;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        left: 0;
        outline: none;
        position: absolute;
        right: 0;
        text-align: right;
        top: 0;
        width: 100%;
    }

    /*!sc*/
    .eramNz svg {
        height: 2.1rem;
        width: 2.2rem;
    }

    /*!sc*/
    data-styled.g475[id="styles__RowToggle-sc-282810-3"] {
        content: "eramNz,"
    }

    /*!sc*/

    .eSfMNu {
        display: none;
    }

    /*!sc*/
    @media (min-width:62em) {
        .eSfMNu {
            --link-margin: 4rem;
            --links-margin: 2.4rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 0;
            max-height: 0;
            overflow: hidden;
        }

        .active .styles__InlineLink-sc-282810-7 {
            max-height: 100%;
        }

        .eSfMNu a {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0.3rem;
            box-sizing: border-box;
            color: #FFFFFF;
            display: block;
            font-size: 1.6rem;
            line-height: 2.4rem;
            padding: 0.8rem 1.6rem;
            text-align: center;
            -webkit-transition: 0.3s ease-in-out opacity;
            transition: 0.3s ease-in-out opacity;
            width: 100%;
        }

        .eSfMNu a:hover {
            opacity: 0.94;
        }

        .active .styles__InlineLink-sc-282810-7 {
            margin-right: var(--link-margin);
        }

        html[dir='rtl'] .active .styles__InlineLink-sc-282810-7,
        div[dir='rtl'] .active .eSfMNu {
            margin-left: var(--link-margin);
            margin-right: 0;
        }

        .eSfMNu a {
            background-color: #771A2A;
        }
    }

    /*!sc*/
    data-styled.g479[id="styles__InlineLink-sc-282810-7"] {
        content: "eSfMNu,"
    }

    /*!sc*/

    .kBuua-D {
        max-height: 0;
        overflow: hidden;
    }

    /*!sc*/
    .active .styles__Content-sc-282810-4 {
        max-height: 100%;
    }

    /*!sc*/
    @media (min-width:48em) {
        .kBuua-D {
            margin: 0 auto;
            max-width: 54.8rem;
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .kBuua-D {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            max-width: 124rem;
        }
    }

    /*!sc*/
    data-styled.g476[id="styles__Content-sc-282810-4"] {
        content: "kBuua-D,"
    }

    /*!sc*/

    .llaNtC {
        padding: 1.6rem 0 0;
    }

    /*!sc*/
    @media (min-width:62em) {
        .llaNtC {
            margin: 0 0.7rem;
            width: 100%;
        }

        .llaNtC:first-of-type {
            margin-left: 0;
        }

        html[dir='rtl'] .styles__Card-sc-282810-5:first-of-type,
        div[dir='rtl'] .llaNtC:first-of-type {
            margin-left: 0.7rem;
            margin-right: 0;
        }

        .llaNtC:last-of-type: {
            margin-right: 0;
        }

        html[dir='rtl'] .styles__Card-sc-282810-5:last-of-type:,
        div[dir='rtl'] .llaNtC:last-of-type: {
            margin-left: 0;
            margin-right: 0.7rem;
        }

        .llaNtC .four-items.athlete-image-1,
        .llaNtC .four-items.athlete-image-2 {
            height: 11rem;
            width: 11rem;
        }

        .llaNtC .four-items.athlete-image-1 img,
        .llaNtC .four-items.athlete-image-2 img {
            font-size: 7.5rem;
            height: 11rem;
            width: 11rem;
        }

        .llaNtC .four-items.athlete-image-1 i,
        .llaNtC .four-items.athlete-image-2 i {
            font-size: 7.5rem;
            height: 11rem;
            width: 11rem;
        }
    }

    /*!sc*/
    data-styled.g477[id="styles__Card-sc-282810-5"] {
        content: "llaNtC,"
    }

    /*!sc*/

    .bDjXVe {
        background-color: #FFFFFF;
        font-weight: 400;
        height: 100%;
        width: 100%;
    }

    /*!sc*/
    @media (min-width:62em) {
        .bDjXVe {
            margin: auto;
            max-width: 39rem;
        }
    }

    /*!sc*/
    data-styled.g480[id="styles__Wrapper-sc-1fimfo3-0"] {
        content: "bDjXVe,"
    }

    /*!sc*/

    .eGxkcO {
        --desktop-size: 2rem;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding: 1.6rem 1.6rem 2.2rem 1.6rem;
    }

    /*!sc*/
    @media (min-width:62em) {
        .eGxkcO {
            padding: 1.6rem 2rem 4rem 2rem;
        }
    }

    /*!sc*/
    .eGxkcO [data-cy='data-medal'] {
        color: #000000;
    }

    /*!sc*/
    .eGxkcO [data-cy='medal-main'] {
        height: var(--desktop-size);
        width: var(--desktop-size);
    }

    /*!sc*/
    .eGxkcO [data-cy='medal-additional'] {
        font-size: var(--desktop-size);
        line-height: 3.2rem;
    }

    /*!sc*/
    html[dir='rtl'] .styles__MedalWrapper-sc-1k9e9fs-0 [data-cy='medal-additional'],
    div[dir='rtl'] .eGxkcO [data-cy='medal-additional'] {
        margin-left: 0;
        margin-right: 0.8rem;
    }

    /*!sc*/
    data-styled.g465[id="styles__MedalWrapper-sc-1k9e9fs-0"] {
        content: "eGxkcO,"
    }

    /*!sc*/
    .kXFxTL {
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    /*!sc*/
    data-styled.g187[id="Medalstyles__Wrapper-sc-1tu6huk-0"] {
        content: "kXFxTL,"
    }

    /*!sc*/

    .forJNW {
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding: 0 0 3.4rem 1.6rem;
        text-align: center;
    }

    /*!sc*/
    html[dir='rtl'] .styles__CountryWrapper-sc-1fimfo3-1,
    div[dir='rtl'] .forJNW {
        padding: 0 1.6rem 3.4rem 0;
    }

    /*!sc*/
    @media (min-width:48em) {
        .forJNW {
            display: block;
            padding: 0;
        }
    }

    /*!sc*/
    .forJNW img {
        border: 0.1rem solid #f2f2f2;
        border-radius: 100%;
        height: 10rem;
        width: 10rem;
    }

    /*!sc*/
    @media (min-width:48em) {
        .forJNW img {
            height: 17rem;
            width: 17rem;
        }
    }

    /*!sc*/
    data-styled.g481[id="styles__CountryWrapper-sc-1fimfo3-1"] {
        content: "forJNW,"
    }

    /*!sc*/

    .faTisC {
        color: #000000;
        font-size: 1.8rem;
        line-height: 2.8rem;
        padding: 1.6rem;
    }

    /*!sc*/
    @media (min-width:48em) {
        .faTisC {
            font-size: 2rem;
            line-height: 3.2rem;
            padding: 2.2rem 2rem;
        }
    }

    /*!sc*/
    data-styled.g482[id="styles__CountryName-sc-1fimfo3-2"] {
        content: "faTisC,"
    }

    /*!sc*/
    .kXFxTL {
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    /*!sc*/
    data-styled.g187[id="Medalstyles__Wrapper-sc-1tu6huk-0"] {
        content: "kXFxTL,"
    }

    /*!sc*/
    .izYiZp {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%;
    }

    /*!sc*/
    data-styled.g225[id="Tablestyles__Wrapper-xjyvs9-0"] {
        content: "izYiZp,"
    }

    /*!sc*/
    .eSTPHF {
        padding: 1.5rem 0;
    }

    /*!sc*/
    data-styled.g227[id="Tablestyles__Header-xjyvs9-2"] {
        content: "eSTPHF,"
    }

    /*!sc*/
    .fztkfu {
        -webkit-column-gap: 0.5rem;
        column-gap: 0.5rem;
        display: grid;
        place-items: center flex-start;
    }

    /*!sc*/
    .fztkfu .line {
        background: #dddddd;
        grid-column: 1 / -1;
        height: 1px;
        justify-self: stretch;
    }

    /*!sc*/
    @media (min-width:48em) {
        .fztkfu {
            grid-template: auto / [medal] 1.15fr [flag] 0.6fr [athlete] 2.75fr [results] 1fr [notes] 1fr [arrow] 0.25fr;
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .fztkfu {
            grid-template: auto / [medal] 0.7fr [flag] 0.3fr [athlete] 3fr [results] 1fr [notes] 1fr [arrow] 0.1fr;
        }
    }

    /*!sc*/
    .fztkfu .mobile-hidden {
        display: none;
    }

    /*!sc*/
    @media (min-width:48em) {
        .fztkfu .mobile-hidden {
            display: initial;
        }
    }

    /*!sc*/
    @media (min-width:48em) {
        .fztkfu .tablet-hidden {
            display: none;
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .fztkfu .tablet-hidden {
            display: initial;
        }
    }

    /*!sc*/
    .jXajXq {
        -webkit-column-gap: 0.5rem;
        column-gap: 0.5rem;
        display: grid;
        place-items: center flex-start;
    }

    /*!sc*/
    .jXajXq .line {
        background: #dddddd;
        grid-column: 1 / -1;
        height: 1px;
        justify-self: stretch;
    }

    /*!sc*/
    @media (min-width:48em) {}

    /*!sc*/
    @media (min-width:62em) {}

    /*!sc*/
    .jXajXq .mobile-hidden {
        display: none;
    }

    /*!sc*/
    @media (min-width:48em) {
        .jXajXq .mobile-hidden {
            display: initial;
        }
    }

    /*!sc*/
    @media (min-width:48em) {
        .jXajXq .tablet-hidden {
            display: none;
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .jXajXq .tablet-hidden {
            display: initial;
        }
    }

    /*!sc*/
    data-styled.g226[id="Tablestyles__CommonGrid-xjyvs9-1"] {
        content: "fztkfu,jXajXq,"
    }

    /*!sc*/
    .dvlGAI {
        color: #969696;
        cursor: pointer;
        pointer-events: none;
    }

    /*!sc*/
    .dvlGAI span,
    .dvlGAI div {
        font-size: 1.4rem;
        line-height: 2.2rem;
    }

    /*!sc*/
    @media (min-width:48em) {

        .dvlGAI span,
        .dvlGAI div {
            font-size: 1.4rem;
            line-height: 2.2rem;
        }
    }

    /*!sc*/
    .dvlGAI.start-alignment {
        justify-self: flex-start;
    }

    /*!sc*/
    .dvlGAI.center-alignment {
        justify-self: center;
    }

    /*!sc*/
    @media (min-width:48em) {
        .dvlGAI {
            padding-left: 2.4rem;
            pointer-events: auto;
        }

        .dvlGAI:hover .styles__Tooltip-qcc2vw-0 {
            background-color: #FFFFFF;
            border: 0.1rem solid #E5E5E5;
            border-radius: 2.4rem;
            bottom: -1rem;
            bottom: -2.5rem;
            color: #b4b4b4;
            display: block;
            font-size: 1.4rem;
            left: -6rem;
            line-height: 2.2rem;
            padding: 0.2rem 0.8rem;
            position: absolute;
            right: -12rem;
            right: 0;
            z-index: 1;
        }
    }

    /*!sc*/
    .bBcJNm {
        color: #969696;
        cursor: pointer;
        pointer-events: none;
    }

    /*!sc*/
    .bBcJNm span,
    .bBcJNm div {
        font-size: 1.4rem;
        line-height: 2.2rem;
    }

    /*!sc*/
    @media (min-width:48em) {

        .bBcJNm span,
        .bBcJNm div {
            font-size: 1.4rem;
            line-height: 2.2rem;
        }
    }

    /*!sc*/
    .bBcJNm.start-alignment {
        justify-self: flex-start;
    }

    /*!sc*/
    .bBcJNm.center-alignment {
        justify-self: center;
    }

    /*!sc*/
    @media (min-width:48em) {
        .bBcJNm {
            padding-left: 0;
            pointer-events: auto;
        }

        .bBcJNm:hover .styles__Tooltip-qcc2vw-0 {
            background-color: #FFFFFF;
            border: 0.1rem solid #E5E5E5;
            border-radius: 2.4rem;
            bottom: -1rem;
            bottom: -2.5rem;
            color: #b4b4b4;
            display: block;
            font-size: 1.4rem;
            left: -6rem;
            line-height: 2.2rem;
            padding: 0.2rem 0.8rem;
            position: absolute;
            right: -12rem;
            right: 0;
            z-index: 1;
        }
    }

    /*!sc*/
    data-styled.g221[id="styles__Wrapper-qcc2vw-1"] {
        content: "dvlGAI,bBcJNm,"
    }

    /*!sc*/
    .gHikWb {
        display: none;
        position: relative;
    }

    /*!sc*/
    @media (min-width:48em) {
        .gHikWb {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    /*!sc*/
    data-styled.g223[id="styles__HeaderDesktop-qcc2vw-3"] {
        content: "gHikWb,"
    }

    /*!sc*/
    .bBcJNm {
        color: #969696;
        cursor: pointer;
        pointer-events: none;
    }

    /*!sc*/
    .bBcJNm span,
    .bBcJNm div {
        font-size: 1.4rem;
        line-height: 2.2rem;
    }

    /*!sc*/
    @media (min-width:48em) {

        .bBcJNm span,
        .bBcJNm div {
            font-size: 1.4rem;
            line-height: 2.2rem;
        }
    }

    /*!sc*/
    .bBcJNm.start-alignment {
        justify-self: flex-start;
    }

    /*!sc*/
    .bBcJNm.center-alignment {
        justify-self: center;
    }

    /*!sc*/
    @media (min-width:48em) {
        .bBcJNm {
            padding-left: 0;
            pointer-events: auto;
        }

        .bBcJNm:hover .styles__Tooltip-qcc2vw-0 {
            background-color: #FFFFFF;
            border: 0.1rem solid #E5E5E5;
            border-radius: 2.4rem;
            bottom: -1rem;
            bottom: -2.5rem;
            color: #b4b4b4;
            display: block;
            font-size: 1.4rem;
            left: -6rem;
            line-height: 2.2rem;
            padding: 0.2rem 0.8rem;
            position: absolute;
            right: -12rem;
            right: 0;
            z-index: 1;
        }
    }

    /*!sc*/
    data-styled.g221[id="styles__Wrapper-qcc2vw-1"] {
        content: "dvlGAI,bBcJNm,"
    }

    /*!sc*/
    .jXajXq {
        -webkit-column-gap: 0.5rem;
        column-gap: 0.5rem;
        display: grid;
        place-items: center flex-start;
    }

    /*!sc*/
    .jXajXq .line {
        background: #dddddd;
        grid-column: 1 / -1;
        height: 1px;
        justify-self: stretch;
    }

    /*!sc*/
    @media (min-width:48em) {}

    /*!sc*/
    @media (min-width:62em) {}

    /*!sc*/
    .jXajXq .mobile-hidden {
        display: none;
    }

    /*!sc*/
    @media (min-width:48em) {
        .jXajXq .mobile-hidden {
            display: initial;
        }
    }

    /*!sc*/
    @media (min-width:48em) {
        .jXajXq .tablet-hidden {
            display: none;
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .jXajXq .tablet-hidden {
            display: initial;
        }
    }

    /*!sc*/
    data-styled.g226[id="Tablestyles__CommonGrid-xjyvs9-1"] {
        content: "fztkfu,jXajXq,"
    }

    /*!sc*/
    .dzULeK {
        row-gap: 1.5rem;
    }

    /*!sc*/
    data-styled.g228[id="Tablestyles__Content-xjyvs9-3"] {
        content: "dzULeK,"
    }

    /*!sc*/
    .gpmzqo {
        -webkit-column-gap: 0.5rem;
        column-gap: 0.5rem;
        display: grid;
        padding: 0.5rem 0;
        place-items: center flex-start;
        width: 100%;
    }

    /*!sc*/
    .gpmzqo>.styles__IconWrapper-sc-rh9yz9-7 {
        display: none;
    }

    /*!sc*/
    @media (min-width:48em) {
        .gpmzqo>.styles__IconWrapper-sc-rh9yz9-7 {
            display: block;
        }
    }

    /*!sc*/
    @media (min-width:48em) {
        .gpmzqo {
            font-size: 2rem;
            line-height: 3.2rem;
            padding: 0;
        }
    }

    /*!sc*/
    data-styled.g446[id="styles__Row-sc-rh9yz9-11"] {
        content: "gpmzqo,"
    }

    /*!sc*/
    .ciGTVt {
        grid-template: 'medal flag athlete arrow''members members members .''. results results results''. notes notes notes'auto / 0.4fr 0.3fr 1.5fr 0.1fr;
    }

    /*!sc*/
    @media (min-width:48em) {
        .ciGTVt {
            grid-template: 'medal flag athlete results notes arrow''. members members members . .'auto / 1.15fr 0.3fr 2.75fr 1fr 1fr 0.3fr;
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .ciGTVt {
            grid-template: 'medal flag athlete results notes arrow''. members members members . .'auto / 0.7fr 0.3fr 3fr 1fr 1fr 0.1fr;
        }
    }

    /*!sc*/
    data-styled.g449[id="styles__TeamResultRowGrid-sc-11ihhd5-0"] {
        content: "ciGTVt,"
    }

    /*!sc*/
    .ghRPpF {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        grid-area: medal;
        place-self: flex-start;
    }

    /*!sc*/
    .ghRPpF div {
        margin-right: auto;
    }

    /*!sc*/
    @media (min-width:48em) {
        .ghRPpF {
            padding-left: 2.4rem;
            place-self: auto;
        }
    }

    /*!sc*/
    data-styled.g435[id="styles__MedalWrapper-sc-rh9yz9-0"] {
        content: "ghRPpF,"
    }

    /*!sc*/
    .kXFxTL {
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    /*!sc*/
    data-styled.g229[id="Medalstyles__Wrapper-sc-1tu6huk-0"] {
        content: "kXFxTL,"
    }

    /*!sc*/
    .oyScw {
        --square-size: 4rem;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #FCC861;
        border-radius: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        font-size: 1.8rem;
        height: var(--square-size);
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        line-height: 2.8rem;
        margin-left: 0;
        min-width: var(--square-size);
        padding-top: 0;
        text-transform: capitalize;
    }

    /*!sc*/
    .lfKhON {
        --square-size: 4rem;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #E5E5E5;
        border-radius: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        font-size: 1.8rem;
        height: var(--square-size);
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        line-height: 2.8rem;
        margin-left: 0;
        min-width: var(--square-size);
        padding-top: 0;
        text-transform: capitalize;
    }

    /*!sc*/
    .gOpEiF {
        --square-size: 4rem;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #DCB386;
        border-radius: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        font-size: 1.8rem;
        height: var(--square-size);
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        line-height: 2.8rem;
        margin-left: 0;
        min-width: var(--square-size);
        padding-top: 0;
        text-transform: capitalize;
    }

    /*!sc*/
    .ghnLFg {
        --square-size: 4rem;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: transparent;
        border-radius: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        font-size: 1.8rem;
        height: var(--square-size);
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        line-height: 2.8rem;
        margin-left: 0;
        min-width: var(--square-size);
        padding-top: 0;
        text-transform: capitalize;
    }

    /*!sc*/
    data-styled.g230[id="Medalstyles__Medal-sc-1tu6huk-1"] {
        content: "oyScw,lfKhON,gOpEiF,ghnLFg,"
    }

    /*!sc*/
    .GAreb {
        -webkit-align-self: normal;
        -ms-flex-item-align: normal;
        align-self: normal;
        grid-area: flag;
        height: 3.2rem;
        margin-right: 1.5rem;
        padding-bottom: 1rem;
    }

    /*!sc*/
    html[dir='rtl'] .styles__Flag-sc-rh9yz9-6,
    div[dir='rtl'] .GAreb {
        margin-left: 1.5rem;
        margin-right: 0;
    }

    /*!sc*/
    .GAreb img {
        border: 0.2rem solid #f2f2f2;
        border-radius: 0.2rem;
        height: 3.2rem;
        width: 4.8rem;
    }

    /*!sc*/
    @media (min-width:48em) {
        .GAreb {
            padding-bottom: 0;
        }
    }

    /*!sc*/
    data-styled.g441[id="styles__Flag-sc-rh9yz9-6"] {
        content: "GAreb,"
    }

    /*!sc*/
    .iqcElo {
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        font-size: 2.2rem;
        grid-area: athlete;
        line-height: 3.2rem;
        padding-bottom: 1rem;
    }

    /*!sc*/
    .iqcElo>.styles__IconWrapper-sc-rh9yz9-7 {
        margin-left: 0.8rem;
    }

    /*!sc*/
    html[dir='rtl'] .styles__Country-sc-rh9yz9-9>.styles__IconWrapper-sc-rh9yz9-7,
    div[dir='rtl'] .iqcElo>.styles__IconWrapper-sc-rh9yz9-7 {
        margin-left: 0;
        margin-right: 0.8rem;
    }

    /*!sc*/
    @media (min-width:48em) {
        .iqcElo {
            line-height: 4rem;
            padding-bottom: 0;
        }

        .iqcElo>.styles__IconWrapper-sc-rh9yz9-7 {
            display: none;
        }
    }

    /*!sc*/
    data-styled.g444[id="styles__Country-sc-rh9yz9-9"] {
        content: "iqcElo,"
    }

    /*!sc*/
    .jPvlGz {
        cursor: pointer;
        grid-area: arrow;
    }

    /*!sc*/
    .jPvlGz i {
        background: unset;
        font-size: 1.8rem;
        padding: 0;
    }

    /*!sc*/
    data-styled.g442[id="styles__IconWrapper-sc-rh9yz9-7"] {
        content: "jPvlGz,"
    }

    /*!sc*/
    .eYkHMB .icon-arrow-down:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-arrow-down-filled:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-arrow-left:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-arrow-right:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-arrow-up:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-arrow-up-filled:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-athletes_placeholder:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-avatar:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-caret-down:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-caret-up:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-chevron-down:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-chevron-left-solid:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-chevron-right-solid:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-circle-arrow-down:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-circle-arrow-left:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-circle-arrow-right:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-circle-arrow-up:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-close-button:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-danger:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-email:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-epg:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-facebook:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-favorite:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-featured-circle:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-file-generic:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-file-pdf:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-fullscreen:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-google:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-instagram:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-photogallery-icon:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-play-button:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-quotes:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-search:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-share:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-summer:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-thumbnails:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-twitter:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-wechat:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-winter:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-yog:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-z-podcast-icon:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-zz-account-bell:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-zz-account-tv:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-zz-logout:before {
        content: '';
    }

    /*!sc*/
    .eYkHMB .icon-zzz-download:before {
        content: '';
    }

    /*!sc*/
    data-styled.g3[id="Iconstyles__IconDefinitions-sc-1x3fvd7-1"] {
        content: "eYkHMB,"
    }

    /*!sc*/
    .bmwsgp {
        background: #F0F0F0;
        border: none;
        border-radius: 50%;
        box-sizing: content-box;
        color: #818181;
        display: inline-block;
        height: 26px;
        line-height: 1;
        padding: 0.8rem;
        position: relative;
        vertical-align: middle;
        width: 26px;
    }

    /*!sc*/
    .bmwsgp:before {
        display: table;
        font-family: font-icons;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        left: 50%;
        line-height: 1;
        position: absolute;
        -webkit-text-decoration: none;
        text-decoration: none;
        text-transform: none;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    /*!sc*/
    data-styled.g2[id="Iconstyles__Icon-sc-1x3fvd7-0"] {
        content: "bmwsgp,"
    }

    /*!sc*/
    .vhhLt {
        display: none;
        grid-area: members;
        padding: 0 1.5rem;
        width: 100%;
    }

    /*!sc*/
    .vhhLt.open {
        display: block;
    }

    /*!sc*/
    .vhhLt a {
        padding: 1.2rem 0;
    }

    /*!sc*/
    @media (min-width:48em) {
        .vhhLt {
            padding: 4.5rem 4.5rem 4.5rem 0;
        }

        .vhhLt a {
            padding: 0.7rem 1.6rem;
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .vhhLt {
            padding: 4.5rem;
        }
    }

    /*!sc*/
    data-styled.g445[id="styles__TeamMembers-sc-rh9yz9-10"] {
        content: "vhhLt,"
    }

    /*!sc*/
    .gFAVtc {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    /*!sc*/
    @media (min-width:48em) {
        .gFAVtc {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /*!sc*/
    @media (min-width:62em) {
        .gFAVtc {
            -webkit-column-gap: 1rem;
            column-gap: 1rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /*!sc*/
    data-styled.g432[id="styles__Wrapper-sc-12ivwwp-0"] {
        content: "gFAVtc,"
    }

    /*!sc*/
    .hlOKsf {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        display: none;
        grid-area: results;
        padding: 1.5rem 0 0 0;
        place-self: flex-start;
    }

    /*!sc*/
    .hlOKsf>span {
        margin-left: 0;
    }

    /*!sc*/
    @media (min-width:48em) {
        .hlOKsf {
            display: initial;
            font-size: 2rem;
            padding: 0;
            place-self: auto;
        }
    }

    /*!sc*/
    data-styled.g437[id="styles__ResultInfoWrapper-sc-rh9yz9-2"] {
        content: "hlOKsf,"
    }

    /*!sc*/
    .gfSesa {
        display: none;
        margin-left: 6.4rem;
    }

    /*!sc*/
    .gfSesa>span:first-child {
        color: #5a5a5a;
        margin-right: 0.8rem;
    }

    /*!sc*/
    html[dir='rtl'] .styles__Info-sc-cjoz4h-0>span:first-child,
    div[dir='rtl'] .gfSesa>span:first-child {
        margin-left: 0.8rem;
        margin-right: 0;
    }

    /*!sc*/
    .gfSesa:first-of-type {
        margin-top: 4rem;
    }

    /*!sc*/
    .gfSesa:nth-of-type(2) {
        margin-top: 2.4rem;
    }

    /*!sc*/
    @media (min-width:48em) {
        .gfSesa {
            display: initial;
            margin-left: 0;
        }

        .gfSesa:first-of-type {
            margin-top: 0;
        }

        .gfSesa:nth-of-type(2) {
            margin-top: 0;
        }

        .gfSesa>span:first-child {
            display: none;
            margin-left: 0;
        }
    }

    /*!sc*/
    data-styled.g431[id="styles__Info-sc-cjoz4h-0"] {
        content: "gfSesa,"
    }

    /*!sc*/
    .crtfsv {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        display: none;
        grid-area: notes;
        padding: 1.5rem 0 0 0;
        place-self: flex-start;
    }

    /*!sc*/
    .crtfsv>span {
        margin-left: 0;
    }

    /*!sc*/
    @media (min-width:48em) {
        .crtfsv {
            display: initial;
            font-size: 2rem;
            padding: 0;
            place-self: auto;
        }
    }

    /*!sc*/
    data-styled.g438[id="styles__NotesInfoWrapper-sc-rh9yz9-3"] {
        content: "crtfsv,"
    }

    /*!sc*/

    .eomCYY {
        width: 300px;
    }
</style>
<script>
    $(document).ready(function() {
        document.querySelector('.djayh19637_ym_title').scrollIntoView();
    })
</script>