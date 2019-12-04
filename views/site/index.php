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
                <div class="news-all">
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
                                <h2><a>
                                        <strong><?= $item->name ?></strong>
                                    </a></h2>
                                <div class="publication-abstract">
                                    We propose a novel framework to jointly learn the affinity graph and low-rank tensor
                                    decomposition for multi-view clustering.
                                </div>
                                <div class="publication-authors">
                                    <span><a href="#">Xingyu Xie</a></span>,
                                    <span><a href="#">Liqiang Nie</a></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="https://zero-lab-pku.github.io/publication/lixia/aaai20_unified_graph_and_low-rank_tensor_learning_for_multi-view_clustering/featured_hudc590d6e4661510a4c3fd73aef75fe52_123673_150x0_resize_q90_lanczos.jpg"/>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


                <div class="publication-item">
                    <div class="row">
                        <div class="col-md-9">
                            <h2><a>
                                    <strong>Unified Graph and Low-rank Tensor Learning for Multi-view
                                        Clustering.</strong>
                                </a></h2>
                            <div class="publication-abstract">
                                We propose a novel framework to jointly learn the affinity graph and low-rank tensor
                                decomposition for multi-view clustering.
                            </div>
                            <div class="publication-authors">
                                <span><a href="#">Xingyu Xie</a></span>,
                                <span><a href="#">Liqiang Nie</a></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="https://zero-lab-pku.github.io/publication/lixia/aaai20_unified_graph_and_low-rank_tensor_learning_for_multi-view_clustering/featured_hudc590d6e4661510a4c3fd73aef75fe52_123673_150x0_resize_q90_lanczos.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>