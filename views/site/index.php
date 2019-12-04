<?php

use yii\bootstrap\Carousel;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $banners */
/* @var $news */
/* @var $publications */

$this->title = 'X-Group Home';
//?>

<?= Carousel::widget([
    'items' => $banners,
    'options' => ['class' => 'carousel'],
    'controls' => ['', '']
]); ?>

<section id="news" class="home-section news-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 section-heading">
                <h1>News</h1>
            </div>
            <div class="col-md-8">

                <?php foreach ($news as $item): ?>
                    <div class="news-item">
                        <i class="fa fa-newspaper-o news-item-icon"></i>
                        <a href="<?= Url::to(['news/one-news', 'id' => $item->id]) ?>"><?= $item->name ?> </a>
                        <span class="date"><?= date_format(date_create($item->date), "M d, Y.") ?></span>
                    </div>
                <?php endforeach; ?>
                <div class="read-more">
                    <a href="<?= Url::to(['news/group-news']) ?>">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="publications" class="home-section publication-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 section-heading">
                <h1>Publications</h1>
            </div>
            <div class="col-md-8">

                <?php foreach ($publications as $item): ?>
                    <div class="publication-item">
                        <div class="row">
                            <div class="col-md-9">
                                <h2>
                                    <a href="<?= Url::to(['publication/one-publication', 'var2' => $item['name']]) ?>">
                                        <strong><?= $item['name'] ?></strong>
                                    </a></h2>
                                <div class="publication-abstract">
                                    <?= $item['abstract'] ?>
                                </div>
                                <div class="publication-authors">
                                    <?php $i = 0; ?>
                                    <?php foreach ($item['author'] as $key => $author): ?>
                                        <span><a href="#">
                                                <?php
                                                if ($i > 1 && $author != '')
                                                    echo ', ';
                                                if ($key != 'id')
                                                    echo $author;
                                                $i++; ?>
                                            </a></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img class="col-sm-12 publication-img" src="<?= $item['img'] ?>" alt="Head Image"/>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="read-more">
                    <a href="<?= Url::to(['publication/group-publication']) ?>">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>