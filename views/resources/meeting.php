<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
    <div class="index-container">

        <div class="index-left">
            <div class="nav" id="nav">
                <div class="avatar-name">
                    <div class="avatar ">
                        <a href="/?r=site/index"><img src="<?php echo  Url::to('@web/img/微信图片_20191205162849.jpg');?>"></a>
                    </div>
                    <div class="name">
                        <a href="/?r=site/index">
                            <i>X-Group</i>
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
                            <a href="">
                                <i class="iconfont icon-shouye1"></i>
                                <span>Meeting</span>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>




        <div class="index-middle">
            <h1>meeting material</h1>
                <div class="post-container">
                    <div class="post-content">
                        <?php foreach ($meetings as $meeting): ?>
                            <li>
                                <span class="attr"><?php echo date('Y-m-d', strtotime($meeting->time)) ?> &nbsp; &nbsp; </span>
                                <span class="attr">speaker:&nbsp;  <?php echo $meeting->speaker ?> &nbsp; &nbsp;</span>
                                <span class="attr"><a href="<?php echo $meeting->url?>" target="_blank" rel="noopener"><?= Html::encode("{$meeting->title}") ?></a></span>
                            </li>
                            </ol>
                        <?php endforeach; ?>
                    </div>
                </div>
        </div>
    </div>
<?= Html::cssFile('@web/css/aircloud.css') ?>
