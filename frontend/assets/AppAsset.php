<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/social.css',
        'css/cosmo.css',
        'css/site.css'
    ];
    public $js = [
        'js/main.js',
        'js/maps.js',
        'js/analytics.js',
        'js/modal.js',
        'js/showcase.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
