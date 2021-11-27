<section id="contant" class="contant main-heading" style="padding-bottom:0;margin-bottom:-1px;position:relative;z-index:1;">
    <div class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="full">
                            <h3>关于我们</h3>
                            <p>我们是来自南开大学计算机学院2019级的本科生，该项目是互联网数据库开发的课程设计。其中用到的一些图片、文字以及模版来自网络，这里仅供学习使用。如果侵权，请及时联系我们删除。
                            </p>
                            <p>我们的队伍名称是，我们的成员为:</p>
                            <ul class="icon-list">
                                <?php
                                foreach ($models as $model) {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> {$model['name']}({$model['sid']})</li>";
                                }
                                ?>
                            </ul>
                            <p>如果您有任何问题，欢迎<a href="index.php?r=site/contact">与我们联系</a></p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <img class="img-responsive" src="images/8e0c7fed-ecaa-472e-9b7c-bad2d50df59f.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-section" style="background:url(images/8e0c7fed-ecaa-472e-9b7c-bad2d50df59f.jpg);background-size:100% 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-main">
                        <h2>介绍</h2>
                    </div>
                    <div class="testimonial-slider">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">
                                <?php
                                $id = 0;
                                foreach ($models as $model) {
                                    if ($id == 0)
                                        echo " <div class=\"item active\">";
                                    else
                                        echo " <div class=\"item\">";
                                    $html = <<<EOT
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p>{$model['introduction']}</p>
                                                <small>{$model['name']}({$model['sid']})</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
EOT;
                                    echo $html;
                                    $id += 1;
                                }
                                ?>
                            </div>
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <?php
                                $id = 0;
                                foreach ($models as $model) {
                                    echo "<li data-target=\"#quote-carousel\" data-slide-to=\"{$id}\" ";
                                    if ($id == 0)
                                        echo "class=\"active\"";
                                    echo "></li>";
                                    $id += 1;
                                }
                                ?>
                            </ol>
                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        document.querySelector('.aboutus').scrollIntoView();
    })
</script>