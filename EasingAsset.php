<?php
namespace derekisbusy\easing;

use yii\web\AssetBundle;

class EasingAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/easing';
    
    public $js = [
        'js/easing.min.js',
    ];
}