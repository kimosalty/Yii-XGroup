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

<div class="display-4 section-header">
    <h2>Publication</h2>
</div>

<?php foreach ($publications as $publication): ?>
    <br/>
    <div>
        <p>《<?= $publication->name ?>》 <?= $publication->place ?>, <?= $publication->time ?></p>
    </div>
    <ul>
        <?php foreach ($authors as $author): ?>
            <?php if ($publication->authorid == $author->id) { ?>
                <li>
                    论文作者：
                    <?= $author->nameone ?> <?= $author->nametwo ?> <?= $author->namethree ?> <?= $author->namefour ?>
                    <?= $author->namefive ?> <?= $author->namesix ?> <?= $author->nameseven ?> <?= $author->nameeight ?>
                </li>
            <?php } ?>
        <?php endforeach; ?>
        <li>PDF阅读链接：<a href="<?= $publication->pdf ?>"><?= $publication->name ?>.pdf</a></li>
    </ul>
    <br/>
<?php endforeach; ?>
<br/>
<div class="display-4 section-header">
    <h2>Project</h2>
</div>

<?php foreach ($projects as $project): ?>
    <br/>
    <h2>项目名称：<?= $project->name ?></h2>
    <ul>
        <li>项目目标：<?= $project->objective ?></h5></li>
        <li>项目介绍：</li>
        <div class="alert alert-secondary" role="alert">
            <p><?= $project->introduction ?></p>
        </div>
        <?php foreach ($participants as $participant): ?>
            <?php if ($project->participants == $participant->id) { ?>
                <li>
                    项目参与人：
                    <?= $participant->nameone ?> <?= $participant->nametwo ?> <?= $participant->namethree ?> <?= $participant->namefour ?>
                    <?= $participant->namefive ?> <?= $participant->namesix ?> <?= $participant->nameseven ?> <?= $participant->nameeight ?>
                </li>
            <?php } ?>
        <?php endforeach; ?>
        <li>合作单位：<?= $project->cooperator ?></li>
    </ul>
    <br/>
<?php endforeach; ?>
