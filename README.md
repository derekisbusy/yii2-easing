Yii2 Easing
===========
Easing.js assets for Yii2 projects

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist derekisbusy/yii2-easing:dev-master
```

or add

```
"derekisbusy/yii2-easing": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it by adding it to your view  :

```php
use \derekisbusy\popper\PopperAsset;

PopperAsset::register($this);
```

or by adding it to another assets dependencies list :

```php
  public $depends = [
    'derekisbusy\popper\PopperAsset'
  ];
```

Documentation
-------------

 * [JQuery Easing](https://jqueryui.com/easing/)
 * [Yii2 assets](https://www.yiiframework.com/doc/guide/2.0/en/structure-assets)
