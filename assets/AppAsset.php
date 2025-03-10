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
        'asset/css/bootstrap.min.css',
        'asset/css/metisMenu.min.css',
        'asset/css/icons.css',
        'asset/css/style.css',
    ];
    public $js = [
        #'asset/js/jquery.min.js',
        'asset/js/bootstrap.bundle.min.js',
        'asset/js/metisMenu.min.js',
        'asset/js/jquery.slimscroll.js',
        'asset/js/waves.min.js',
        #'asset/pages/dashboard.js',
        'asset/js/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
