<?php

use app\commands\Utils;
use yii\bootstrap\Carousel;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $banners */
/* @var $news */
/* @var $publications */
/* @var $projects */

$this->title = 'X-Group Home';
//?>

<?= Carousel::widget([
    'items' => $banners,
    'options' => ['class' => 'carousel'],
    'controls' => ['', '']
]); ?>
<style>
    .wrap, .wrap > .container {
        width: 100%;
        max-width: 100%;
        padding: 0 !important;
    }

</style>
<section id="news" class="home-section news-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 section-heading">
                <h1>Latest News</h1>
            </div>
            <div class="col-md-8">
                <?php foreach ($news as $item): ?>
                    <div class="news-item">
                        <i class="far fa-newspaper news-item-icon"></i>
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
                <h1>Recent Publications</h1>
            </div>
            <div class="col-md-8">

                <?php foreach ($publications as $item): ?>
                    <div class="publication-item">
                        <div class="row">
                            <div class="col-md-9">
                                <h2>
                                    <a href="<?= Url::to(['publication/one-publication', 'var2' => $item['name']]) ?>">
                                        <strong><?= $item['name'] ?></strong>
                                    </a>
                                </h2>
                                <div class="publication-journal">
                                    <?= $item['place'] ?>&nbsp;
                                    <?= date_format(date_create($item['time']), "M d, Y.") ?>
                                </div>
                                <div class="publication-abstract">
                                    <?= Utils::fix_str_length($item['abstract'], 100) ?>
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
                                <?php if ($item['pdf']) { ?>
                                    <?= \yii\bootstrap\BaseHtml::a('PDF', $item['pdf'], [
                                        'class' => 'btn btn-outline-primary btn-sm',
                                        'target' => '_blank'
                                    ]) ?>
                                <?php } ?>
                            </div>
                            <div class="col-md-3">
                                <img class="col-sm-12 publication-img" src="<?= $item['img'] ?>" alt="Head Image"/>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="read-more">
                    <a href="<?= Url::to(['publication/group-publication']) ?>">Read More <i
                                class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="projects" class="home-section projects-section">

    <div class="container">
        <div class="row">
            <div class="col-md-4 section-heading">
                <h1>Highlight Projects</h1>
            </div>
            <div class="col-lg-8 center-block">
                <?php foreach ($projects as $project): ?>
                    <div class="col-md-6 project-item">
                        <div class="row">
                            <img class="col-sm-12 center-block" src="<?= $project->img ?>"
                                 alt="publication head image"/>
                        </div>
                        <h2 class="project-name text-center"><a href="<?= $project->github ?>"
                                                                target="_blank"><?= $project->name ?> </a></h2>
                        <div class="project-intro"><?= Utils::fix_str_length($project->introduction, 100) ?></div>
                        <div class="project-detail pull-right">Please see
                            <a class="detail-link underline" href="<?= $project->github ?>" target="_blank">here</a> for
                            details.
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix"></div>
                <div class="read-more pull-right">
                    <a href="<?= Url::to(['publication/group-publication']) ?>">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="home-section contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 section-heading">
                <h1>Contact</h1>
            </div>
            <div class="col-md-8 contact-wrapper">
                <div class="row">
                    <i class="fas fa-envelope fa-2x"></i>&nbsp;&nbsp;
                    <?= \yii\helpers\BaseHtml::a('xj.max.guo@gmail.com',
                        'mailto:xj.max.guo@gmail.com', []) ?>
                </div>
                <br/>
                <div class="row">
                    <i class="fas fa-map-marker fa-2x"></i>&nbsp;&nbsp;&nbsp;
                    <?= \yii\helpers\BaseHtml::a('TJU, Jinnan, Tianjin, China',
                        'https://goo.gl/maps/YsYgUehU8yjsc3kNA', []) ?>
                </div>

            </div>
        </div>
    </div>
</section>
