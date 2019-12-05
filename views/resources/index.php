<?php
/* @var $this yii\web\View */
//use app\widgets\Alert;
//use yii\bootstrap\Dropdown;
use yii\helpers\Html;
use yii\helpers\Url;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
//use app\assets\AppAsset;
//use yii\widgets\Menu;
//AppAsset::register($this);

?>
<div class="index-container">

    <div class="index-left">
        <div class="nav" id="nav">
            <div class="avatar-name">
                <div class="avatar ">
                    <a href="/?r=site/index"><img src=" <?php echo  Url::to('@web/img/微信图片_20191205162849.jpg');?> "></a>
                </div>
                <div class="name">
                    <a href="/?r=site/index">
                        <i> X-Group</i>
                    </a>
                </div>
            </div>
            <div class="contents" id="nav-content">
                <ul>
                    <li>
                        <a href="<?php echo \yii\helpers\Url::toRoute('resources/dataset')?>">
                            <i class="iconfont icon-fanhui"></i>
                            <span>Dataset</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo \yii\helpers\Url::toRoute('resources/meeting')?>">
                            <i class="iconfont icon-shouye1"></i>
                            <span>Meeting</span>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>


    <div class="index-middle">

        <h1>dataset available</h1>
        <div class="post-container">
            <div class="post-content">
            <div class="post-content">
                <?php foreach ($datasets as $dataset): ?>
                    <li>
                        <span class="attr"> <a href="<?php echo $dataset->url?>" target="_blank" rel="noopener"><?= Html::encode("{$dataset->dataset_name}") ?> </a> &nbsp; &nbsp;</span>
                        <span class="attr">describe: <?= Html::encode("{$dataset->describe}") ?></span>
                    </li>
                    </ol>
                <?php endforeach; ?>
            </div>
        </div>
    </div>



</div>
</div>
<?= Html::cssFile('@web/css/aircloud.css') ?>

