<?php

use app\assets\AppAsset;
use yii\helpers\Html;

/* @var $publications */
/* @var $authors */
/* @var $projects */
/* @var $participants */
AppAsset::addCss($this, Yii::$app->request->baseUrl . "/css/paper_details_1.css");
AppAsset::addCss($this, Yii::$app->request->baseUrl . "/css/paper_details_2.css");

?>
<div class="container-fluid">
    <h1 class="pb-3 mb-4 text-dark border-bottom font-italic" style="text-align: center">
        PUBLICATION
    </h1>
    <div class="col-md-12">
        <?php foreach ($publications as $publication): ?>
            <div class="card card-body mb-2">
                <div>
                    <p>《<?= $publication->name ?>》 <?= $publication->place ?>, <?= $publication->time ?></p>
                </div>
                <ul>
                    <?php foreach ($authors as $author): ?>
                        <?php if ($publication->authorid==$author->id) { ?>
                            <li>
                                论文作者：
                                <?= $author->nameone ?> <?= $author->nametwo ?> <?= $author->namethree ?> <?= $author->namefour ?>
                                <?= $author->namefive ?> <?= $author->namesix ?> <?= $author->nameseven ?> <?= $author->nameeight ?>
                            </li>
                        <?php } ?>
                    <?php endforeach; ?>

                    <li>论文概要：</li>
                    <div class="alert alert-secondary text-center" role="alert">
                        <img src="img/paperimg.png" class="img-fluid">
                        <p>论文论文内容内容论文论文内容内容论文论文内容内容论文论文内容内容论文论文内容内容
                            论文论文内容内容论文论文内容内容论文论文内容内容论文论文内容内容论文论文内容内容
                            论文论文内容内容论文论文内容内容论文论文内容内容论文论文内容内容论文论文内容内容</p>
                    </div>
                    <li>PDF阅读链接：<a class="font-italic" href="<?= $publication->pdf ?>" ><?= $publication->name ?>.pdf</a></li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>


    <h1 class="pb-3 mb-4 text-dark border-bottom font-italic" style="text-align: center">
        PROJECT
    </h1>
    <div class="col-md-12">
        <?php foreach ($projects as $project): ?>
            <div class="card card-body mb-2">
                <h2>项目名称：<?= $project->name ?></h2>
                <ul>
                    <li>项目目标：<?= $project->objective ?></h5></li>
                    <li>项目介绍：</li>
                    <div class="alert alert-secondary" role="alert">
                        <p><?= $project->introduction ?></p>
                    </div>
                    <?php foreach ($participants as $participant): ?>
                        <?php if ($project->participants==$participant->id) { ?>
                            <li>
                                项目参与人：
                                <?= $participant->nameone ?> <?= $participant->nametwo ?> <?= $participant->namethree ?> <?= $participant->namefour ?>
                                <?= $participant->namefive ?> <?= $participant->namesix ?> <?= $participant->nameseven ?> <?= $participant->nameeight ?>
                            </li>
                        <?php } ?>
                    <?php endforeach; ?>
                    <li>合作单位：<?= $project->cooperator ?></li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>



