<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= (Yii::$app->user->isGuest) ? 'Guest' : Yii::$app->user->identity->email ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'API Documentation', 'icon' => 'book', 'url' => ['/docs']],
                    ['label' => 'Source', 'icon' => 'github', 'url' => ['/site/source']],
                    [
                        'label' => 'User',
                        'icon' => 'user',
                        'url' => '#',
                         'visible' => Yii::$app->user->isGuest,
                        'items' => [
                            ['label' => 'Sign In', 'icon' => 'sign-in', 'url' => ['site/login']],
                            ['label' => 'Register', 'icon' => 'user-plus', 'url' => ['user/create']],
                        ],
                    ],
                ],
            ]
        ) ?>
        
    </section>

</aside>
