<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" align="center">
        <!-- <img src="<?= $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span  class="brand-text font-weight-light">网站后端</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">
                <?php if(!Yii::$app->user->isGuest){
                    echo Yii::$app->user->identity->username;
                }
                ?>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            if( Yii::$app->user->isGuest){
                echo \hail812\adminlte\widgets\Menu::widget([
                    'items' => [
                        ['label' => 'Login', 'iconClassAdded' => 'text-danger', 'url' => ['site/login'], 'icon' => 'sign-in-alt'],
                    ],
                ]);
            }else{
                echo \hail812\adminlte\widgets\Menu::widget([
                    'items' => [
                        ['label' => 'Yii2 PROVIDED', 'header' => true,'visible' => !YII_ENV_TEST],
                        ['label' => 'Gii', 'iconClassAdded' => 'text-danger', 'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank','visible' => !YII_ENV_TEST],
                        ['label' => 'Debug', 'iconClassAdded' => 'text-danger', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank','visible' => !YII_ENV_TEST],
                        ['label' => '作业展示', 'header' => true],
                        ['label' => '团队作业', 'icon' => 'people-carry','url' => ['site/teamwork']],
                        ['label' => '个人作业','icon' => 'id-badge', 'url' => ['site/personwork']],
                        ['label' => '高级管理', 'header' => true,'visible' =>Yii::$app->user->can('super'),],
                        ['label' => '团队成员','visible' =>Yii::$app->user->can('super'), 'iconClassAdded' => 'text-warning', 'icon' => 'users-cog','url' => ['per-member-info/index']],
                        ['label' => '权限管理','visible' =>Yii::$app->user->can('super'), 'iconClassAdded' => 'text-warning', 'icon' => 'key','url' => ['auth-assignment/index']],
                        ['label' => '信息发布与管理', 'header' => true,'visible' =>Yii::$app->user->can('managePost')],
                        ['label' => '新闻发布管理','visible' =>Yii::$app->user->can('managePost'), 'iconClassAdded' => 'text-info', 'icon' => 'newspaper','url' => ['oly-news/index']],
                        ['label' => '评论管理','visible' => Yii::$app->user->can('managePost'), 'iconClassAdded' => 'text-info', 'icon' => 'comments','url' => ['oly-newscomment/index']],
                        ['label' => '联系信息','visible' => Yii::$app->user->can('managePost'), 'iconClassAdded' => 'text-info', 'icon' => 'image','url' => ['oly-contact-form/index']],
                        ['label' => '图片上传','visible' => Yii::$app->user->can('managePost'), 'iconClassAdded' => 'text-info', 'icon' => 'image','url' => ['site/upload']],
                    ],
                ]);
            }
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>