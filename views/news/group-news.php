<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<div class="container-fluid">
    <h1 class="pb-3 mb-4 text-dark border-bottom font-italic" style="text-align: center">
        NEWS
    </h1>
    <div class="col-md-9">
        <div class="col-md-12">
            <ul>
                <?php foreach ($news as $newss): ?>
                    <li>
                        <h3><a style="color: #0b0b0b"
                               href="<?php echo Url::to(['news/one-news', 'id' => $newss->id]) ?>"> <?= Html::encode("{$newss->name}") ?> </a>
                        </h3>
                        <h5 class="lead"> <?= "({$newss->date})" ?><br><?= mb_substr("{$newss->content}", 0, 40) ?>……<a
                                    href="<?php echo Url::to(['news/one-news', 'id' => $newss->id]) ?>"> <small>阅读全文</small>
                            </a></h5>
                        <img src="<?= $newss->image ?>" class="img-responsive" alt="img" />

                    </li>
                    <h1 class="pb-3 mb-4 text-dark border-bottom font-italic" style="text-align: center"></h1>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
    <div class="col-md-3 text-dark border-left font-italic">

        <h2 class="pb-3 mb-4">Recent News</h2>
        <ul class="">
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