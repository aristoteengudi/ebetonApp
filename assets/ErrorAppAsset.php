<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'asset/css/bootstrap.min.css',
        'asset/css/metismenu.min.css',
        'asset/css/icons.css',
        'asset/css/style.css',
    ];
    public $js = [
        'asset/js/jquery.min.js',
        'asset/pages/dashboard.js',
        'asset/js/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
