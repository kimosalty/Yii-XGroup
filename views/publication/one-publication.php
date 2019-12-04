<?php
use app\assets\AppAsset;
use yii\helpers\Html;

/* @var $publications */
/* @var $authors */
/* @var $projects */
/* @var $participants */
AppAsset::addCss($this, Yii::$app->request->baseUrl . "/css/paper_details_1.css");
AppAsset::addCss($this, Yii::$app->request->baseUrl . "/css/paper_details_2.css");
$request = Yii::$app->request;
$paperName = $request->get("var2");
?>
<?php foreach ($publications as $publication): ?>
<?php if ($publication->name==$paperName) { ?>
<h1><?= $publication->name ?></h1>
<h1><?= $publication->place ?></h1>
<img src="<?= $publication->img ?>" class="img-fluid">
<h1><?= $publication->abstract ?></h1>
<h1>PDF阅读链接：<a class="font-italic" href="<?= $publication->pdf ?>" ><?= $publication->name ?>.pdf</a></h1>
<h1><?= $publication->acknowledgement ?></h1>
<?php } ?>
<?php endforeach; ?>