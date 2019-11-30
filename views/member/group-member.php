<?php

use yii\helpers\Html;
use app\assets\AppAsset;

/* @var $peoples */
?>

<section id="team" class="wow fadeInUp">
    <div class="section-header">
        <h2>Our Team</h2>
    </div>

    <div class="section-header2">
        <h2>博士研究生</h2>
    </div>
    <div class="row">
        <?php foreach ($peoples as $people): ?>
            <?php if ($people->title == "博士研究生") { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic">
                            <?php if ($people->img == null) { ?>
                                <?= Html::img('img/team1.jpg', []) ?>
                            <?php } else { ?>
                                <?= Html::img($people->img, []) ?>
                            <?php } ?>
                        </div>
                        <div class="details">
                            <h4><?= $people->leader ?></h4>
                            <span>研究方向：<?= $people->keywords ?></span>
                            <span>邮箱：<?= $people->mail ?></span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href="../web/index.php?r=publication/publicationview"><i
                                            class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php endforeach; ?>
    </div>

    <div class="section-header2">
        <h2>硕士研究生</h2>
    </div>
    <div class="row">
        <?php foreach ($peoples as $people): ?>
            <?php if ($people->title == "硕士研究生") { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic">
                            <?php if ($people->img == null) { ?>
                                <?= Html::img('img/team1.jpg', []) ?>
                            <?php } else { ?>
                                <?= Html::img($people->img, []) ?>
                            <?php } ?>
                        </div>
                        <div class="details">
                            <h4><?= $people->leader ?></h4>
                            <span>研究方向：<?= $people->keywords ?></span>
                            <span>邮箱：<?= $people->mail ?></span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href="../web/index.php?r=publication/publicationview"><i
                                            class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php endforeach; ?>
    </div>

    <div class="section-header2">
        <h2>本科生</h2>
    </div>
    <div class="row">
        <?php foreach ($peoples as $people): ?>
            <?php if ($people->title == "本科生") { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic">
                            <?php if ($people->img == null) { ?>
                                <?= Html::img('img/team1.jpg', []) ?>
                            <?php } else { ?>
                                <?= Html::img($people->img, []) ?>
                            <?php } ?>
                        </div>
                        <div class="details">
                            <h4><?= $people->leader ?></h4>
                            <span>研究方向：<?= $people->keywords ?></span>
                            <span>邮箱：<?= $people->mail ?></span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href="../web/index.php?r=publication/publicationview"><i
                                            class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php endforeach; ?>
    </div>
</section>