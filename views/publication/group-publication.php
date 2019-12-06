<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $publications */
/* @var $authors */
/* @var $projects */
/* @var $participants */
AppAsset::addCss($this, Yii::$app->request->baseUrl . "/css/paper_details_1.css");
AppAsset::addCss($this, Yii::$app->request->baseUrl . "/css/paper_details_2.css");
$request = Yii::$app->request;
$tempName = $request->get("var");

?>
<div class="container-fluid">
    <h1 class="pb-3 mb-4 text-dark font-italic font-weight-bold" style="text-align: center; margin-top: 40px">
        PUBLICATION
    </h1>
    <div class="col-md-12">
        <?php foreach ($authors as $author): ?>
        <?php if ($tempName==$author->nameone || $tempName==$author->nametwo || $tempName==$author->namethree || $tempName==$author->namefour
         || $tempName==$author->namefive || $tempName==$author->namesix || $tempName==$author->nameseven || $tempName==$author->nameeight) { ?>
        <?php foreach ($publications as $publication): ?>
        <?php if ($publication->authorid==$author->id) { ?>
            <div class="card card-body mb-2" style="margin:0 auto">
                <div>
                    <p><a href="<?php echo Url::to(['publication/one-publication','var2' => $publication->name]) ?>">《<?= $publication->name ?>》</a> <?= $publication->place ?>, <?= $publication->time ?></p>
                </div>
                <ul>
                    <li>
                        论文作者：
                        <?= $author->nameone ?> <?= $author->nametwo ?> <?= $author->namethree ?> <?= $author->namefour ?>
                        <?= $author->namefive ?> <?= $author->namesix ?> <?= $author->nameseven ?> <?= $author->nameeight ?>
                    </li>
                    <li>论文概要：</li>
                    <div class="alert alert-secondary text-center" role="alert" style="background-color: #DCDAD8; margin:0 auto">
                        <img src="<?= $publication->img ?>" class="img-fluid" style="margin-bottom: 5px">
                        <p style="width: 90%; text-indent: 2em;margin:0 auto;line-height: 30px;"><?= $publication->abstract ?></p>
                    </div>
                </ul>
            </div>
        <?php } ?>
        <?php endforeach; ?>
        <?php } ?>
        <?php endforeach; ?>
    </div>
    <h1 class="pb-3 mb-4 text-dark font-italic font-weight-bold" style="text-align: center; margin-top: 40px">
        PROJECT
    </h1>
    <div class="col-md-12" id="project-list">
        <?php foreach ($participants as $participant): ?>
        <?php if ($tempName==$participant->nameone || $tempName==$participant->nametwo || $tempName==$participant->namethree || $tempName==$participant->namefour
        || $tempName==$participant->namefive || $tempName==$participant->namesix || $tempName==$participant->nameseven || $tempName==$participant->nameeight) { ?>
        <?php foreach ($projects as $project): ?>
        <?php if ($project->participants==$participant->id) { ?>
            <div class="card card-body mb-2">
                <h2>项目名称：<?= $project->name ?></h2>
                <ul>
                    <li>项目目标：<?= $project->objective ?></h5></li>
                    <li>项目介绍：</li>
                    <div class="alert alert-secondary" role="alert" style="background-color: #DCDAD8; margin:0 auto">
                        <img src="<?= $project->img ?>" class="img-fluid" style="margin-bottom: 5px">
                        <p style="width: 90%; text-indent: 2em;margin:0 auto;line-height: 30px;"><?= $project->introduction ?></p>
                    </div>
                    <li>
                        项目参与人：
                        <?= $participant->nameone ?> <?= $participant->nametwo ?> <?= $participant->namethree ?> <?= $participant->namefour ?>
                        <?= $participant->namefive ?> <?= $participant->namesix ?> <?= $participant->nameseven ?> <?= $participant->nameeight ?>
                    </li>
                    <li>合作单位：<?= $project->cooperator ?></li>
                    <li>Github：<a href="<?= $project->github ?>"><?= $project->github ?></a></li>
                </ul>
            </div>
        <?php } ?>
        <?php endforeach; ?>
        <?php } ?>
        <?php endforeach; ?>
    </div>
</div>



