<?php
namespace derekisbusy\easing;

use yii\web\AssetBundle;

class EasingAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/yii2-easing/src';
    
    public $js = [
        YII_ENV_DEV ? 'js/easing.js' : 'js/easing.min.js',
    ];
}