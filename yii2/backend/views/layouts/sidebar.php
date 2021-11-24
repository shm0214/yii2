<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">网站后端</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Yii2 PROVIDED', 'header' => true,'visible' => !YII_ENV_TEST],
                    ['label' => 'Login', 'iconClassAdded' => 'text-info', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank','visible' => !YII_ENV_TEST],
                    ['label' => 'Debug', 'iconClassAdded' => 'text-danger', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank','visible' => !YII_ENV_TEST],
                    ['label' => '作业展示', 'header' => true],
                    ['label' => '团队作业', 'icon' => 'people-carry','url' => ['site/teamwork']],
                    ['label' => '个人作业','icon' => 'id-badge', 'url' => ['site/personwork']],
                    ['label' => 'TEAM', 'header' => true],
                    ['label' => '团队成员', 'iconClassAdded' => 'text-warning', 'icon' => 'users-cog','url' => ['per-member-info/index']],
                    ['label' => 'POST', 'header' => true],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>