<?php

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

/* @var $peoples */
AppAsset::addCss($this, Yii::$app->request->baseUrl . "/css/lxp_peopleview.css");
?>


    <div class="container-fluid">
        <h1 class="pb-3 mb-4 text-dark font-italic font-weight-bold" style="text-align: center; margin-top: 40px">
            OUR TEAM
        </h1>

        <h2 class="pb-3 mb-4 text-dark font-weight-bold" style="text-indent: 1em" >
            导师
        </h2>
        <div class="row center-block" style="margin:0 auto">
            <?php foreach ($peoples as $people): ?>
                <?php if ($people->title=="导师") { ?>
                    <div class="col-md-3 col-sm-6 mb-2 ">
                        <div class="our-team">
                            <div class="pic">
                                <?php if ($people->img==null) { ?>
                                    <img src="img/team1.jpg">
                                <?php }else { ?>
                                    <img src="<?= $people->img ?>">
                                <?php } ?>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><?= $people->leader ?></h3>
                                <span>方向：<?= $people->keywords ?></span>
                                <p>邮箱：<?= $people->mail ?></p>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="<?php echo Url::to(['home/index']) ?>">个人主页</a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::to(['publication/group-publication','var' => $people->leader]) ?>">论文/项目</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
        <h2 class="pb-3 mb-4 text-dark font-weight-bold" style="text-indent: 1em" >
            博士研究生
        </h2>
        <div class="row center-block" style="margin:0 auto">
            <?php foreach ($peoples as $people): ?>
                <?php if ($people->title=="博士研究生") { ?>
                    <div class="col-md-3 col-sm-6 mb-2 ">
                        <div class="our-team">
                            <div class="pic">
                                <?php if ($people->img==null) { ?>
                                    <img src="img/team1.jpg">
                                <?php }else { ?>
                                    <img src="<?= $people->img ?>">
                                <?php } ?>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><?= $people->leader ?></h3>
                                <span>方向：<?= $people->keywords ?></span>
                                <p>邮箱：<?= $people->mail ?></p>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="">个人主页</a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::to(['publication/group-publication','var' => $people->leader]) ?>">论文/项目</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
        <h2 class="pb-3 mb-4 text-dark font-weight-bold" style="margin-top: 20px; text-indent: 1em">
            硕士研究生
        </h2>
        <div class="row center-block" style="margin:0 auto">
            <?php foreach ($peoples as $people): ?>
                <?php if ($people->title=="硕士研究生") { ?>
                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="our-team">
                            <div class="pic">
                                <?php if ($people->img==null) { ?>
                                    <img src="img/team1.jpg">
                                <?php }else { ?>
                                    <img src="<?= $people->img ?>">
                                <?php } ?>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><?= $people->leader ?></h3>
                                <span>方向：<?= $people->keywords ?></span>
                                <p>邮箱：<?= $people->mail ?></p>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="">个人主页</a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::to(['publication/group-publication','var' => $people->leader]) ?>">论文/项目</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
        <h2 class="pb-3 mb-4 text-dark font-weight-bold" style="margin-top: 20px; text-indent: 1em">
            本科生
        </h2>
        <div class="row center-block" style="margin:0 auto">
            <?php foreach ($peoples as $people): ?>
                <?php if ($people->title=="本科生") { ?>
                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="our-team">
                            <div class="pic">
                                <?php if ($people->img==null) { ?>
                                    <img src="img/team1.jpg">
                                <?php }else { ?>
                                    <img src="<?= $people->img ?>">
                                <?php } ?>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><?= $people->leader ?></h3>
                                <span>方向：<?= $people->keywords ?></span>
                                <p>邮箱：<?= $people->mail ?></p>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="">个人主页</a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::to(['publication/group-publication','var' => $people->leader]) ?>">论文/项目</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>



