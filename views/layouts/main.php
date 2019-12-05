<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\bootstrap\Dropdown;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="body">
<?php $this->beginBody() ?>
<div id="header">
    <div id="logo" class="pull-left">
        <h1><a href="/?r=site/index" class="scrollto"><span>X-Group</span></a></h1>
    </div>
    <?php
    NavBar::begin(['options' => [
        'class' => 'navbar-fixed-top',
        'id' => 'nav-menu-container'
    ]]);
    echo Menu::widget([
        'options' => ['class' => 'nav-menu'],
        'encodeLabels' => false,
        'activateParents' => true,
        'items' => [
            ['label' => 'Home', 'url' => ['/site#body']],
//            ['label' => 'Homepage', 'url' => ['/home/index'], /*'linkOptions' => ['target' => '_blank']*/],
            ['label' => 'News', 'url' => ['/news/group-news']],
            ['label' => 'Members', 'url' => ['/member/group-member']],
            ['label' => 'Highlights', 'url' => ['/site#projects']],
            ['label' => 'Publications & Projects', 'url' => ['/publication/group-publication']],
            ['label' => 'Contact', 'url' => ['/site#contact']],
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']]
                : ['label' => 'Management',
                'template' => '<a href="#" >{label} &nbsp;<i class="fa fa-caret-down"></i></a>',
                'items' => [
                    ['label' => 'Group Staff', 'url' => '/?r=staff',
                        'template' => '<a href="{url}" >{label}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i></a>',
                        'items' => [
                            ['label' => 'Staff Honors', 'url' => '/?r=honor'],
                            ['label' => 'Staff Papers', 'url' => '/?r=paper'],
                            ['label' => 'Staff Project', 'url' => '/?r=staff-project']]],
                    ['label' => 'Group Index', 'url' => '/?r=group-index',
                        'template' => '<a href="{url}" >{label}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i></a>',
                        'items' => [
                            ['label' => 'Index Banners', 'url' => '/?r=banner']
                        ]],
                    ['label' => 'Group Members', 'url' => '/?r=member',
                        'template' => '<a href="{url}" >{label}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i></a>',
                        'items' => [
                            ['label' => 'Member Projects', 'url' => '/?r=project'],
                            ['label' => 'Project Participants', 'url' => '/?r=participant'],
                            ['label' => 'Member Publication', 'url' => '/?r=publication'],
                            ['label' => 'Publication Authors', 'url' => '/?r=author']
                        ]],
                    ['label' => 'Group News', 'url' => '/?r=news'],

                ]]
        ],

    ]);
    echo Yii::$app->user->isGuest ? '' : Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link nav-menu-logout', 'data' => [
                'confirm' => 'Are you sure to logout? '
            ]]
        )
        . Html::endForm();

    NavBar::end();
    ?>

</div>
<div class="wrap">
    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Copyright <?= date('Y') ?> X-Group TJU </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
