<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the contact of the frontend web.
 */

?>

<section id="contant" class="contant main-heading team">
    <div class="row">
        <div class="container">
            <div class="contact">
                <div class="col-md-12">
                    <div class="full">
                        <div class="contact-footer" id="nkmap1"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="kode-section-title">
                            <h3>联系信息</h3>
                        </div>
                        <div class="kode-forminfo">
                            <p>南开大学津南校区计算机学院</p>
                            <ul class="kode-form-list">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <p><strong>地址</strong> 天津海河教育园区同砚路38号 [300350]</p>
                                </li>
                                <li>
                                    <i class="fa fa-github"></i>
                                    <p><strong>用户:</strong> <a href="https://github.com/shm0214" style="color:black;">shm0214</a></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <p><strong>电子邮箱:</strong> shm190813@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-us">
                        <form class="comments-form" id="contactform">
                            <ul>
                                <li><input type="text" id="name" name="name" class="required" placeholder="姓名"></li>
                                <li><input type="text" id="email" name="email" class="required email" placeholder="电子邮箱"></li>
                                <li><input type="text" name="address" id="address" placeholder="地址"></li>
                                <li><textarea name="message" id="message" placeholder="信息"></textarea></li>
                            </ul>
                        </form>
                        <input class="thbg-color" type="submit" value="send" onclick="send()">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        document.querySelector('#nkmap1').scrollIntoView();
    })

    var map = new AMap.Map('nkmap1', {
        resizeEnable: true, //是否监控地图容器尺寸变化
        zoom: 15, //初始化地图层级
        center: [117.345894, 38.988826] //初始化地图中心点
    });

    function send() {
        data = {}
        data['OlyContactForm[username]'] = $('#contactform #name').val()
        if (!data['OlyContactForm[username]']) {
            alert("您还未输入用户名")
            return;
        }
        data['OlyContactForm[email]'] = $('#contactform #email').val()
        if (!data['OlyContactForm[email]']) {
            alert("您还未输入邮箱")
            return;
        }
        data['OlyContactForm[address]'] = $('#contactform #address').val()
        data['OlyContactForm[message]'] = $('textarea').val()
        if (!data['OlyContactForm[message]']) {
            alert("您还未输入任何内容")
            return;
        }
        data['_csrf-frontend'] = '<?= Yii::$app->getRequest()->getCsrfToken(); ?>';
        $.ajax({
            type: "POST",
            url: "index.php?r=site/create-contact",
            data: data,
            success: function() {
                alert("提交成功")
                location.reload()
            }
        })
    }
</script>