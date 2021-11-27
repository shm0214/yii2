<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the news home of the frontend web.
 */
?>

<body class="game_info" data-spy="scroll" data-target=".header">
    <!-- END LOADER -->
    <section id="contant" class="contant main-heading team">

        <?php

        use frontend\models\OlyNewsSearch;

        $searchModel = new OlyNewsSearch();
        $dataProvider = $searchModel->search([]);
        $models = $dataProvider->getModels();
        foreach ($models as $model) {
            $html = <<<EOT
                                    <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="feature-post small-blog">
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="{$model['news_cover']}" class="img-responsive" alt="#" />
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="feature-cont">
                                <div class="post-heading">
                                    <h3>{$model['news_title']}</h3>
                                    <div class="post-info">
                                 <h5>{$model['news_time']}</h5>
                           </div>
                                    <p>{$model['news_abstract']}</p>
                                    <div class="full">
                                        <a class="btn" href="index.php?r=news/view&id={$model['news_id']}">查看</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
EOT;
            echo $html;
        }
        ?>
    </section>
</body>


<script>
    $(document).ready(function() {
        document.querySelector('.heading-slider').scrollIntoView();
    })
</script>