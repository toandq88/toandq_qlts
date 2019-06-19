<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'toandq/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'toandq/bower_components/font-awesome/css/font-awesome.min.css',
        'toandq/bower_components/Ionicons/css/ionicons.min.css',
        'toandq/dist/css/AdminLTE.min.css',
        'toandq/dist/css/skins/skin-blue.min.css',
        'toandq/dist/css/skins/_all-skins.min.css',
    ];
    public $js = [
        'toandq/dist/js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
