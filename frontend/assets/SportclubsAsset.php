<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SportclubsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/partner.css',
        'css/social.css',
    ];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        //'Zelenin\yii\SemanticUI\assets\SemanticUICSSAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
