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
    <h1 class="pb-3 mb-4 text-dark font-italic font-weight-bold" style="text-align: center; margin-top: 40px">
        NEWS
    </h1>
    <div class="col-md-9 border-right">
        <div class="col-md-11">
            <ul>
                <li>
                    <h2 class="text-dark font-weight-bold"><a
                                style="color: #0b0b0b"> <?= Html::encode("{$newss->name}") ?>  </a></h2>
                    <h4 class="font-weight-light"><?= "({$newss->date})" ?></h4>
                    <h4 class="text-dark " style="text-indent: 2em; line-height: 20px"><?= "{$newss->content}" ?> </h4>
                    <img src="<?= $newss->image ?>" class="img-responsive center-block img-fluid" alt="新闻插图"
                         width="100%">
                </li>
                <h1 class="pb-3 mb-4 text-dark border-bottom font-italic" style="text-align: center"></h1>
            </ul>
        </div>

    </div>

    <div class="col-md-3 text-dark">

        <h2 class="pb-3 mb-4 font-weight-bold font-weight-bold">Recent News</h2>
        <ul class="">
            <?php foreach ($news as $newss): ?>
                <li>
                    <h5><a style="color: #0b0b0b"
                           href="<?php echo Url::to(['news/one-news', 'id' => $newss->id]) ?>"> <?= Html::encode("{$newss->name}") ?> </a>
                    </h5>
                </li>
            <?php endforeach; ?>
        </ul>

        <form class="form-inline" method="post"
              action="<?php echo Url::to(['news/group-news']) ?>">
            <div class="form-group">
                <label>
                    <input name="key" style="width: 60%; height: auto" class="form-control"
                           value="<?php echo Yii::$app->request->get('key') ?>"/>
                    &nbsp;
                    &nbsp;
                    <button type="submit" class="btn btn-default" style="line-height: 1.5rem;">Search</button>
                </label>
            </div>
        </form>
    </div>

</div>