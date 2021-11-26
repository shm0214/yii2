<body class="game_info" data-spy="scroll" data-target=".header">
    <!-- END LOADER -->
    <section id="content" class="contant main-heading team">
        <div class="head-line clearfix">
            <h1>
                <span class="title">
                    <?= $model['news_title'] ?>
                </span>
                <span class="btn-audio"></span>
            </h1>
            <span class="date"><?= $model['news_time'] ?></span>
        </div>

        <div class="main clearfix">
            <div class="main-left">
                <?= $model['news_content'] ?>
            </div>
        </div>

        <div class="container1">
            <div class="comment-send">
                <div id="commentForm">
                    <textarea class="comment-send-input" name="comment" cols="80" rows="5" placeholder="请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论。"></textarea>
                    <input class="comment-send-button" type="submit" value="发表评论" onclick="comment()">
                </div>
            </div>
            <?php

            use backend\models\OlyNewscommentSearch;
            use yii\helpers\VarDumper;

            $searchModel = new OlyNewscommentSearch();
            $dataProvider = $searchModel->search(['news_id' => $model['news_id']]);
            $models = $dataProvider->getModels();
            $cnt = 1;
            foreach ($models as $model) {
                $html = <<<EOT
            <div class="comment-list" id="commentList">
                <div class="comment">
                    <div class="comment-content">
                        <p class="comment-content-name" style="font-size:larger;">{$model['cmtUser']['username']}</p>
                        <p class="comment-content-article" style="font-size:20px;">{$model['cmt_content']}</p>
                        <p class="comment-content-footer" style="font-size:small;">
                            <span class="comment-content-footer-id">#{$cnt}</span>
                            <span class="comment-content-footer-timestamp">{$model['cmt_date']}</span>
                        </p>
                    </div>
                    <div class="cls"></div>
                </div>
            </div>
EOT;
                echo $html;
                $cnt += 1;
            }
            ?>
        </div>
    </section>
    <?php
    $user_id = -1;
    if (!Yii::$app->user->isGuest)
        $user_id = Yii::$app->user->getId();
    ?>
</body>
<script>
    $(document).ready(function() {
        document.querySelector('.heading-slider').scrollIntoView();
    })
</script>

<style>
    .main .main-left {
        width: 860px;
    }

    .main .main-right {
        width: 300px;
        padding-top: 20px;
    }

    .main #detail {
        font-size: 18px;
        line-height: 2em;
        padding-top: 20px;
    }

    .main #detail p {
        margin-bottom: 20px;
    }

    .main #detail p img {
        max-width: 90%;
        height: auto !important;
        margin: auto;
        display: block;
    }

    .clearfix {
        display: block
    }

    .clearfix:after {
        content: '';
        overflow: hidden;
        width: 100%;
        height: 0;
        font-size: 0;
        display: block;
        clear: both
    }

    .main .main-left {
        width: 1000px;
        margin: auto;
    }

    section#content p {
        float: left;
        width: 100%;
        line-height: 24px;
        font-size: 18px;
        text-align: left;
        font-weight: 300;
        font-family: "Poppins", sans-serif;
    }


    .cls {
        clear: both;
    }

    .container1 {
        width: 1000px;
        min-height: 10px;
        margin: 50px auto;
        /* border: 1px solid #dfdfdf; */
    }

    .comment {
        min-height: 60px;
        /* border: 1px solid red; */
    }

    .comment-content {
        float: right;
        width: 1000px;
        padding-top: 15px;
        border-top: 1px solid #dfdfdf;
    }

    .comment-bottom>.comment-content {
        border-bottom: 1px solid #dfdfdf;
    }

    .comment-content-name {
        color: #6d757a;
        font-size: 12px;
        margin-bottom: 5px;
    }

    .comment-content-article {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .comment-content-footer {
        color: #6d757a;
        font-size: 12px;
        margin-bottom: 15px;
    }

    .comment-content-footer span {
        margin-right: 10px;
    }

    .comment-send {
        position: relative;
        margin-bottom: 30px;
        height: 120px;
    }

    .comment-send-input {
        outline: none;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        transition: all 0.3s;
        position: absolute;
        top: 15px;
        left: 0px;
        resize: none;
        width: 800px;
        height: 100px;
        padding: 10px;
        border-radius: 4px;
        background: #f4f5f7;
        border: 1px solid #e5e9ef;
    }

    .comment-send-input:hover,
    .comment-send-input:active {
        background: #fff;
        color: #555;
    }

    .comment-send-button {
        border: none;
        cursor: pointer;
        user-select: none;
        -moz-user-select: none;
        transition: all 0.3s;
        position: absolute;
        top: 15px;
        right: 0px;
        width: 180px;
        height: 100px;
        border-radius: 4px;
        background: #1aa2d4;
        color: #fff;
        font-size: 14px;
        text-align: center;
    }

    .comment-send-button:hover {
        background: #1eb6e3;
    }
</style>


<script>
    /**
     * 获取当前时间 格式：yyyy-MM-dd HH:MM:SS
     */
    function getCurrentTime() {
        var date = new Date(); //当前时间
        var month = zeroFill(date.getMonth() + 1); //月
        var day = zeroFill(date.getDate()); //日
        var hour = zeroFill(date.getHours()); //时
        var minute = zeroFill(date.getMinutes()); //分
        var second = zeroFill(date.getSeconds()); //秒

        //当前时间
        var curTime = date.getFullYear() + "-" + month + "-" + day +
            " " + hour + ":" + minute + ":" + second;

        return curTime;
    }

    /**
     * 补零
     */
    function zeroFill(i) {
        if (i >= 0 && i <= 9) {
            return "0" + i;
        } else {
            return i;
        }
    }

    //获取url中的参数
    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg); //匹配目标参数
        if (r != null) return unescape(r[2]);
        return null; //返回参数值
    }

    function comment() {
        data = {}
        data['OlyNewscomment[cmt_date]'] = getCurrentTime();
        data['OlyNewscomment[cmt_content]'] = $('textarea').val()
        if (!data['OlyNewscomment[cmt_content]']) {
            alert("您还未输入任何内容")
            return;
        }
        data['OlyNewscomment[cmt_newsid]'] = getUrlParam('id')
        data['OlyNewscomment[cmt_trashed]'] = 0
        data['OlyNewscomment[cmt_userid]'] = <?php echo $user_id; ?>;
        data['_csrf-frontend'] = '<?= Yii::$app->getRequest()->getCsrfToken(); ?>';
        if (data['OlyNewscomment[cmt_userid]'] == -1) {
            alert("请先登录再评论")
            return;
        }
        $.ajax({
            type: "POST",
            url: "index.php?r=news/create-comment&id=" + data['OlyNewscomment[cmt_newsid]'],
            data: data,
            success: function() {
                location.reload();
            }
        })
    }
</script>