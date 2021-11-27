<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the medal of the frontend web.
 */


use frontend\models\OlyMedalInfoSearch;
?>

<html>
<div class="column_wrapper_aoyun2020" style="width: 1220px; margin: 0 auto;">
    <div class="Olympic_19626_gameData_ind01" style="padding: 30px; border-radius: 10px; position: relative;">
        <div class="aoyunhui_19621_zjp_ind01" style="height: 4875px;">
            <div class="info_title"><span>奖牌榜</span></div>

            <div class="box">
                <table cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th width="120">排名</th>
                            <th name="th1" width="434">国家/地区</th>
                            <th name="th2" width="149"><img src="images/prize01.png" alt="">金牌<em class="fa fa-arrow-circle-o-up" onclick="sortTable(2, 0)" style="cursor: pointer;"></em><em class="fa fa-arrow-circle-o-down" onclick="sortTable(2, 1)" style="cursor: pointer;"></em></th>
                            <th name="th3" width="149"><img src="images/prize02.png" alt="">银牌<em class="fa fa-arrow-circle-o-up" onclick="sortTable(3, 0)" style="cursor: pointer;"></em><em class="fa fa-arrow-circle-o-down" onclick="sortTable(3, 1)" style="cursor: pointer;"></em></th>
                            <th name="th4" width="149"><img src="images/prize03.png" alt="">铜牌<em class="fa fa-arrow-circle-o-up" onclick="sortTable(4, 0)" style="cursor: pointer;"></em><em class="fa fa-arrow-circle-o-down" onclick="sortTable(4, 1)" style="cursor: pointer;"></em></th>
                            <th name="th5" class="lastcell" width="150">总数<em class="fa fa-arrow-circle-o-up" onclick="sortTable(5, 0)" style="cursor: pointer;"></em><em class="fa fa-arrow-circle-o-down" onclick="sortTable(5, 1)" style="cursor: pointer;"></em></th>
                        </tr>
                    </thead>
                    <tbody id="medal_list1">
                        <?php
                        $searchModel = new OlyMedalInfoSearch();
                        $dataProvider = $searchModel->search(['page' => '0', 'pageSize' => '100']);
                        $models = $dataProvider->getModels();
                        $rank = 1;
                        foreach ($models as $model) {
                            $flag_path = substr($model['flag_path'], 5);
                            $html = <<<EOT
                                <tr class="white" style="display: table-row;">
                            <td name="td0">{$rank}</td>
                            <td name="td1" class="country"><a href="" target="_blank">
                                <i class="flag"><img src="images/{$flag_path}"
                                            alt="" style="margin-top: 8.5px;"></i>{$model['team_name_zh']}</a></td>
                            <td name="td2">{$model['gold']}</td>
                            <td name="td3">{$model['silver']}</td>
                            <td name="td4">{$model['bronze']}</td>
                            <td name="td5">{$model['total']}</td>
                        </tr>
EOT;
                            $rank += 1;
                            echo $html;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="more"><i style="display: none;"></i>
            </div>
        </div>

    </div>
</div>

</html>


<style>
    .Olympic_19626_gameData_ind01 {
        background: url("images/generic_after.png") no-repeat top right #f4e1ca;
    }

    .Olympic_19626_gameData_ind01.gameData_title {
        color: #b11c33;
        margin-bottom: 30px;
    }

    .Olympic_19626_gameData_ind01.gameData_title h1 {
        font-size: 21px;
    }

    .Olympic_19626_gameData_ind01.gameData_title span {
        float: right;
        font-size: 17px;
        position: relative;
        bottom: 24px;
        font-weight: bold;
    }

    /**出场名单**/
    .Olympic_19626_gameData_con01 {}

    .Olympic_19626_gameData_con01 table {
        background: #f8eee2;
    }

    .Olympic_19626_gameData_con01 table thead {}

    .Olympic_19626_gameData_con01 table thead tr {
        background: #b11c33;
        font-weight: normal;
        font-family: "Microsoft YaHei";
        font-size: 15px;
        width: 1160px;
        display: block;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }

    .Olympic_19626_gameData_con01 table thead tr th {
        border-right: 1px solid #ffffff;
        height: 55px;
        text-align: center;
        color: #e1c4a8;
    }

    .Olympic_19626_gameData_con01 table thead tr th:last-child {
        border-right: none;
    }

    .Olympic_19626_gameData_con01 table tbody tr:nth-child(odd) {
        background: #f8eee2;
    }

    .Olympic_19626_gameData_con01 table tbody tr:nth-child(even) {
        background: #f3e1c9;
    }

    .Olympic_19626_gameData_con01 table tbody tr td {
        height: 50px;
        text-align: center;
        font-family: "Microsoft YaHei";
        font-size: 15px;
        color: #333333;
        border-right: 1px solid #e1c4a8;
        border-bottom: 1px solid #e1c4a8;
    }

    .Olympic_19626_gameData_con01 table tbody tr td:last-child {
        border-right: none;
    }

    .Olympic_19626_gameData_con01 table tbody tr td a {
        color: #333333;
    }

    .Olympic_19626_gameData_con01 table tbody tr td a:hover {
        text-decoration: none;
        color: #b11c33;
    }

    .Olympic_19626_gameData_con01 table tbody tr td i {
        position: relative;
        bottom: 6px;
        padding-left: 8px;
    }

    .Olympic_19626_gameData_con01.scrollbox {
        border: 2px solid #b11c33;
    }

    .aoyunhui_19621_zjp_ind01 table thead tr {
        height: 60px;
        background-color: #b11c33;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr td a:hover {
        color: #b11c33;
    }

    @-ms-keyframes play {
        0% {
            -ms-transform: rotate(0deg);
        }

        100% {
            -ms-transform: rotate(360deg);
        }
    }

    .aoyunhui_19621_zjp_ind01 .more.cur i {

        animation-play-state: running;
        -webkit-animation: play 1.5s linear infinite;
        -moz-animation: play 1.5s linear infinite;
        -ms-animation: play 1.5s linear infinite;
        -o-animation: play 1.5s linear infinite;
        animation: play 1.5s linear infinite;
    }

    .aoyunhui_19621_zjp_ind01 {
        clear: both;
        zoom: 1;
        position: relative;
        z-index: 9;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr td a {
        color: #333333;
    }

    @-o-keyframes play {
        0% {
            -o-transform: rotate(0deg);
        }

        100% {
            -o-transform: rotate(360deg);
        }
    }

    .aoyunhui_19621_zjp_ind01 .day {
        background: #e5a96e;
        border: 3px solid #b11c33;
    }

    .aoyunhui_19621_zjp_ind01 .more i {
        animation-play-state: paused;
        margin-right: 10px;
        float: left;
        height: 20px;
        width: 20px;
        display: inline-block;
        background: url(//p2.img.cctvpic.com/photoAlbum/templet/common/DEPA1623986351537702/Olympic_19621_loading.png) no-repeat left center;
    }

    .aoyunhui_19621_zjp_ind01 table thead tr th {
        color: #f4e1ca;
        font-size: 17px;
        font-weight: bold;
        line-height: 60px;
        border-right: 1px solid #b11c33;
    }

    @-moz-keyframes play {
        0% {
            -moz-transform: rotate(0deg);
        }

        100% {
            -moz-transform: rotate(360deg);
        }
    }

    @-webkit-keyframes play {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    .aoyunhui_19621_zjp_ind01 .time p {
        font-size: 13px;
        color: #a3a3a3;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr td .flag img {
        width: 100%;
        border: 0px;
    }

    .aoyunhui_19621_zjp_ind01 table thead tr img {
        vertical-align: middle;
        padding-right: 6px;
        margin-top: -4px;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr td.country {
        text-align: left;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr:last-child td {
        border-bottom: none;
    }

    .aoyunhui_19621_zjp_ind01 .more {
        font-size: 16px;
        line-height: 20px;
        height: 20px;
        width: 120px;
        margin: 0 auto;
        color: #666666;
        cursor: pointer;
        margin-top: 40px;
    }

    .aoyunhui_19621_zjp_ind01 table tbody .white {
        background-color: #f8eee2;
    }

    .aoyunhui_19621_zjp_ind01 .info_title span {
        height: 100%;
        display: inline-block;
        padding-left: 78px;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr th {
        line-height: 24px;
        background-color: #91cfff;
        border-bottom: 1px solid #b5b5b5;
        border-right: 1px solid #edf7ff;
        border-top: 1px solid #edf7ff;
        font-size: 17px;
        font-weight: normal;
        color: #333333;
    }

    @keyframes play {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .aoyunhui_19621_zjp_ind01 .info_title {
        line-height: 44px;
        font-weight: bold;
        height: 44px;
        color: #333333;
        font-size: 19px;
        text-align: left;
        background: url(//p2.img.cctvpic.com/photoAlbum/templet/common/DEPA1623986351537702/Olympic_19621_jpb_title.png) no-repeat left center;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr td:not(:first-child):hover {
        background-color: #e1c4a8;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr td .flag {
        width: 50px;
        display: inline-block;
        height: 50px;
        vertical-align: middle;
        margin-right: 10px;
        margin-left: 10px;
    }

    .aoyunhui_19621_zjp_ind01 .empty_con01 {
        display: none;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr td {
        border-bottom: 1px solid #e1c4a8;
        border-right: 1px solid #e1c4a8;
        font-size: 15px;
        line-height: 24px;
        color: #333333;
    }

    .aoyunhui_19621_zjp_ind01 .time {
        margin-top: 30px;
        line-height: 15px;
    }

    .aoyunhui_19621_zjp_ind01 .empty_con01 h1 {
        color: #c5bdb3;
        font-size: 27px;
        text-align: center;
        line-height: 432px;
        background-color: #f8eee2;
    }

    .aoyunhui_19621_zjp_ind01 table tbody .gray {
        background-color: #f4e1ca;
    }

    .vspace_jj {
        height: 10px;
        font-size: 0px;
        line-height: 0px;
        width: 99%;
        clear: both;
    }

    .aoyunhui_19621_zjp_ind01 table thead tr th {
        border: none;
        text-align: center;
    }

    .aoyunhui_19621_zjp_ind01 table thead tr th.lastcell {
        border: none;
    }

    .aoyunhui_19621_zjp_ind01 .more p {}

    .aoyunhui_19621_zjp_ind01 table {
        text-align: center;
    }

    .aoyunhui_19621_zjp_ind01 .box {
        border: 2px solid #b11c33;
        border-radius: 5px;
        width: 1156px;
        margin-top: 15px;
        background-color: #b11c33;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr {
        height: 50px;
        display: none;
    }

    .aoyunhui_19621_zjp_ind01 table tbody tr .lastcell {
        border-right: 0;
    }
</style>

<script>
    function sortNumberAsc(a, b) {
        return a - b
    }

    function sortNumberDesc(a, b) {
        return b - a
    }

    function sortTable(id, flag) {
        // var td0s = document.getElementsByName("td0");
        var td1s = document.getElementsByName("td1");
        var td2s = document.getElementsByName("td2");
        var td3s = document.getElementsByName("td3");
        var td4s = document.getElementsByName("td4");
        var td5s = document.getElementsByName("td5");
        // var tdArray0 = [];
        var tdArray1 = [];
        var tdArray2 = [];
        var tdArray3 = [];
        var tdArray4 = [];
        var tdArray5 = [];
        // for (var i = 0; i < td0s.length; i++) {
        //     tdArray0.push(td0s[i].innerHTML);
        // }
        for (var i = 0; i < td1s.length; i++) {
            tdArray1.push(td1s[i].innerHTML);
        }
        for (var i = 0; i < td2s.length; i++) {
            tdArray2.push(td2s[i].innerHTML);
        }
        for (var i = 0; i < td3s.length; i++) {
            tdArray3.push(td3s[i].innerHTML);
        }
        for (var i = 0; i < td4s.length; i++) {
            tdArray4.push(td4s[i].innerHTML);
        }
        for (var i = 0; i < td5s.length; i++) {
            tdArray5.push(td5s[i].innerHTML);
        }
        var tds = document.getElementsByName("td" + id);
        console.log(tds)
        var columnArray = [];
        for (var i = 0; i < tds.length; i++) {
            columnArray.push(tds[i].innerHTML);
        }
        var originArray = [];
        for (var i = 0; i < columnArray.length; i++) {
            originArray.push(columnArray[i]);
        }
        if (flag == 0) {
            columnArray.sort(sortNumberAsc); //排序后的新值
        } else {
            columnArray.sort(sortNumberDesc); //排序后的新值
        }

        for (var i = 0; i < columnArray.length; i++) {
            for (var j = 0; j < originArray.length; j++) {
                if (originArray[j] == columnArray[i]) {
                    // document.getElementsByName("td0")[i].innerHTML = tdArray0[j];
                    document.getElementsByName("td1")[i].innerHTML = tdArray1[j];
                    document.getElementsByName("td2")[i].innerHTML = tdArray2[j];
                    document.getElementsByName("td3")[i].innerHTML = tdArray3[j];
                    document.getElementsByName("td4")[i].innerHTML = tdArray4[j];
                    document.getElementsByName("td5")[i].innerHTML = tdArray5[j];
                    originArray[j] = null;
                    break;
                }
            }
        }
    }


    $(document).ready(function() {
        document.querySelector('.info_title').scrollIntoView();
    })
</script>