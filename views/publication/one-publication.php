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
        <div id="wrapper">

            <div id="journal"><?= $publication->place ?></div>
            <div id="title">
                <a href="" class="nounderline"><?= $publication->name ?></a>
            </div>

            <a href="" class="nounderline"><img src="<?= $publication->img ?>" id="teaser" class="img-fluid"></a>
        </div>
        <div id="content">
            <h1><a id="abstract" href="">Abstract</a></h1>
            <p><?= $publication->abstract ?></p>
        </div>
        <h1><a id="downloads" href="">Downloads</a></h1>
        <ul>
            <li>
                <a href="<?= $publication->pdf ?>"><?= $publication->name ?>.pdf</a>
            </li>
        </ul>

        <h1><a id="acks" href="">Acknowledgements</a></h1>
        <p><?= $publication->acknowledgement ?></p>

    <?php } ?>
<?php endforeach; ?>