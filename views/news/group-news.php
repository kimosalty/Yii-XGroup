<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

?>
<div class="container-fluid">
    <h1>News</h1>
    <div class="col-md-9">
        <div class="col-md-11">
            <ul>
                <?php foreach ($news as $newss): ?>
                    <li>
                        <h3><a style="color: #0b0b0b"
                               href="<?php echo Url::to(['news/one-news', 'id' => $newss->id]) ?>"> <?= Html::encode("{$newss->name}") ?> </a>
                        </h3>
                        <h5 class="lead"> <?= "({$newss->date})" ?><br><?= mb_substr("{$newss->content}", 0, 40) ?>……<a
                                    href="<?php echo Url::to(['news/one-news', 'id' => $newss->id]) ?>"> <small>阅读全文</small>
                            </a></h5>
                        <img src=<?= $newss->image ?> class="img-responsive center-block"/> </a>
                    </li>
                    <div class="divider">
                        <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color="#6f5499"
                            size="3"/>
                    </div>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

    <div class="col-md-3">
        <form class="form-inline" method="post"
              action="<?php echo Url::to(['news/group-news']) ?>">
            <div class="form-group">
                <label>
                    <input name="key" style="width: 60%" class="form-control" value="<?php echo Yii::$app->request->get('key')?>"/>
                    <button type="submit" class="btn btn-default">Search</button>
                </label>
            </div>
        </form>
        <br/>
        <h4 class="lead offset-2">Recent News</h4>
        <ul class="offset-1">
            <?php foreach ($news as $newss): ?>
                <li>
                    <h5><a style="color: #0b0b0b"
                           href="<?php echo Url::to(['news/one-news', 'id' => $newss->id]) ?>"> <?= Html::encode("{$newss->name}") ?> </a>
                    </h5>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>

