<?php
//
///* @var $this \yii\web\View */
///* @var $content string */
//
$this->title = 'homepage';

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<?php $this->beginPage() ?>
<head>
    <title>Home Page</title>
</head>
<div class="ace-wrapper">
    <header id="ace-header" class="ace-container-shift ace-logo-in ace-head-boxed ace-nav-right">
        <div class="ace-head-inner">
            <div class="ace-head-container ace-container">
                <div class="ace-head-row">
                    <div id="ace-head-col1" class="ace-head-col text-left">
                        <a id="ace-logo" class="ace-logo" href="./?r=site">
                            <img src="img/uploads/brand/logo.svg" alt="ace resume"><span>.X-Group</span>
                        </a>
                    </div>

                    <div id="ace-head-col2" class="ace-head-col text-right">
                        <div class="ace-nav-container ace-container hidden-sm hidden-xs">
                            <nav id="ace-main-nav">
                                <ul class="clear-list">
                                    <li><a href="index.html">About</a></li>
                                    <li><a href="portfolio.html">Publications</a>
                                    <li><a href="testimonials.html">Project</a></li>
                                    <li><a href="search.html">X-Group</a></li>
                                    <li><a href="category.html">Story</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div id="ace-head-col3" class="ace-head-col text-right">
                        <button id="ace-sidebar-btn" class="btn btn-icon btn-light btn-shade">
                            <span class="ace-icon ace-icon-side-bar-icon"></span>
                        </button>
                    </div>
                </div>
            </div><!-- .ace-container -->
        </div><!-- .ace-head-inner -->
    </header><!-- #ace-header -->

    <div id="ace-content" class="ace-container-shift">
        <div class="ace-container">
            <div class="ace-paper-stock">
                <main class="ace-paper clearfix">
                    <div class="ace-paper-cont clear-mrg">

                        <!-- START: PAGE CONTENT -->
                        <div class="padd-box clear-mrg">
                            <section class="section brd-btm">
                                <div class="row">
                                    <h2 class="title-lg text-upper">About Me</h2>
                                    <div class="col-sm-4 clear-mrg text-box">
                                        <article id="ace-card" class="ace-card bg-profile">
                                            <div class="ace-card-inner text-center">
                                                <img class="avatar avatar-195"
                                                     src="<?php
                                                     $var = substr($staffs[0]['Image'], strpos($staffs[0]['Image'], '/')+1);
                                                     echo  Url::to("@web/{$var}"   ); ?>" width="195"
                                                     height="195" alt="">
                                                <h1> <?php echo $staffs[0]['Name'] ?> </h1>
                                                <p class="text-muted">Florist | Decorator</p>
                                            </div>

                                            <footer class="ace-card-footer">
                                                <a class="btn btn-lg btn-block btn-thin"
                                                   href="mailto:xj.max.guo@gmail.com"><?php echo $staffs[0]['Email'] ?></a>
                                            </footer>
                                        </article><!-- #ace-card -->

                                    </div>

                                    <div class="col-sm-8 clear-mrg text-box">
                                        <!--                                        --><?php //foreach ($staffs as $staff): ?>
                                        <!--                                            <li>-->
                                        <!--                                                --><?php //=Html::encode("{$staff->Profile}")?>
                                        <!--                                            </li>-->
                                        <!--                                        --><?php //endforeach; ?>

                                        <!--                                        profile由下面这段代码读出-->
                                        <?php echo $staffs[0]['Profile'] ?>

                                        <p class="text-right">
                                            <img src="./img/uploads/signature.png" alt="">
                                        </p>
                                    </div>


                                </div>
                            </section><!-- .section -->


                            <section class="section brd-btm">
                                <div class="row">
                                    <div class="col-sm-12 clear-mrg">
                                        <h2 class="title-thin text-muted">Awards/Honors</h2>

                                        <ul class="icon-list icon-list-col4 clearfix">
                                            <?php foreach ($honors as $honor): ?>
                                                <li>
                                                    <span class="ace-icon ace-icon-blog"></span><?= Html::encode("{$honor->describe}") ?>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </div>
                                </div>
                            </section><!-- .section -->

                            <section class="section brd-btm">
                                <div class="row">
                                    <div class="col-sm-12 clear-mrg">
                                        <h2 class="title-thin text-muted">Grants</h2>

                                        <ul class="icon-list icon-list-col3 clearfix">
                                            <?php foreach ($projects as $project): ?>
                                                <li>
                                                    <span class="ace-icon ace-icon-blog"></span><?= Html::encode("{$project->name}") ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </section><!-- .section -->


                            <section class="section">

                                <div class="row">
                                    <div class="col-sm-12 clear-mrg">
                                        <h2 class="title-thin text-muted">Talks/Presentations</h2>

                                        <ul class="icon-list icon-list-col3 clearfix">
                                            <?php foreach ($papers as $paper): ?>
                                                <li>
                                                    <span class="ace-icon ace-icon-blog"></span><?= Html::encode("{$paper->issue}") ?>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </div>
                                </div>
                            </section><!-- .section -->
                        </div><!-- .padd-box -->
                        <!-- END: PAGE CONTENT -->

                    </div><!-- .ace-paper-cont -->
                </main><!-- .ace-paper -->
            </div><!-- .ace-paper-stock -->

        </div><!-- .ace-container -->
    </div><!-- #ace-content -->

    <div id="ace-sidebar">
        <button id="ace-sidebar-close" class="btn btn-icon btn-light btn-shade">
            <span class="ace-icon ace-icon-close"></span>
        </button>

        <div id="ace-sidebar-inner">
            <nav id="ace-main-nav-sm" class="visible-xs visible-sm text-center">
                <ul class="clear-list">
                    <li><a href="index.html">About</a></li>
                    <li><a href="portfolio.html">Publications</a>
                    <li><a href="testimonials.html">Project</a></li>
                    <li><a href="search.html">X-Group</a></li>
                    <li><a href="category.html">Story</a></li>


                </ul>
            </nav><!-- #ace-main-nav-sm -->

        </div><!-- #ace-sidebar-inner -->
    </div><!-- #ace-sidebar -->


    <footer id="ace-footer" class="ace-container-shift">
        <div class="ace-container">
            <div class="ace-footer-cont clear-mrg">
                <p class="text-center">Copyright &copy; 2019 X-Group.<a target="_blank" href=" "></a></p>
            </div>
        </div>
    </footer>

    <svg id="ace-bg-shape-1" class="hidden-sm hidden-xs" height="519" width="758">
        <polygon points="0,455,693,352,173,0,92,0,0,71"
                 style="fill:#d2d2d2;stroke:purple;stroke-width:0; opacity: 0.5"/>
    </svg>
</div>
<?= Html::cssFile('@web/css/index.css') ?>
<?= Html::cssFile('@web/css/style.css') ?>
<?= Html::cssFile('@web/fonts/icomoon/style.css') ?>
<?= Html::cssFile('@web/js/plugins/highlight/solarized-light.css') ?>
<?= Html::jsFile('@web/js/vendor/jquery-1.12.4.min.js') ?>
<?= Html::jsFile('@web/js/plugins/highlight/highlight.pack.js') ?>
<?= Html::jsFile('@web/js/plugins/jquery.mCustomScrollbar.min.js') ?>
<?= Html::jsFile('@web/js/plugins/isotope.pkgd.min.js') ?>
<?= Html::jsFile('@web/js/plugins/progressbar.min.js') ?>
<?= Html::jsFile('@web/js/plugins/slick.min.js') ?>
<?= Html::jsFile('@web/js/options.js') ?>
<?= Html::jsFile('@web/js/main.js') ?>
<?= Html::jsFile('@web/js/vendor/modernizr-3.3.1.min.js') ?>

