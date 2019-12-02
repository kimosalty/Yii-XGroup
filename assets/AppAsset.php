<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'lib/bootstrap/css/bootstrap.min.css',
        'lib/font-awesome/css/font-awesome.css',
        'css/index.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    //定义按需加载JS方法，注意加载顺序在最后
    public static function addScript($view, $js_path)
    {
        $view->registerJsFile($js_path, [AppAsset::className(), 'depends' => 'app\assets\AppAsset']);
    }

    public static function addCss($view, $css_path)
    {
        $view->registerCssFile($css_path, [AppAsset::className(), 'depends' => 'app\assets\AppAsset']);
    }
}
