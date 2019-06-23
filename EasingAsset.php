<?php
namespace derekisbusy\bootstrap4;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/easing';
    
    public $js = [
        'js/popper.min.js',
    ];
}