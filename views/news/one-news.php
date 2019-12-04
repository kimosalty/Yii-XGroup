<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\News;
use yii\helpers\Url;

?>

<?php
if (isset($_POST["sub"])) {
    $temp = $_POST["data"];
} else {
    $request = Yii::$app->request;
    $temp = $request->get("id");
}
$newss = News::findOne($temp);
?>
<div class="container-fluid">
    <h1 class="pb-3 mb-4 text-dark border-bottom font-italic" style="text-align: center">
        NEWS
    </h1>
    <div class="col-md-9">
        <div class="col-md-11">
            <ul>
                <li>
                    <h3><a style="color: #0b0b0b"> <?= Html::encode("{$newss->name}") ?>  </a></h3>
                    <h5 class="lead"> <?= "({$newss->date})" ?></h5>
                    <h4><?= "{$newss->content}" ?> </h4>
                    <img href=<?= "{$newss->href}" ?> src=<?= $newss->image ?> class="img-responsive center-block" alt="新闻插图">
                </li>
                <h1 class="pb-3 mb-4 text-dark border-bottom font-italic" style="text-align: center"></h1>
            </ul>
        </div>

    </div>

    <div class="col-md-3 text-dark border-left font-italic">
        <h2 class="pb-3 mb-4">Recent News</h2>
        <ul>
            <?php foreach ($news as $newss): ?>
                <li>
                    <h5><a style="color: #0b0b0b"
                           href="<?php echo Url::to(['news/one-news', 'id' => $newss->id]) ?>"> <?= Html::encode("{$newss->name}") ?> </a>
                    </h5>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>

</div>
