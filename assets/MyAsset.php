<?php


namespace app\assets;


use yii\web\AssetBundle;

class MyAsset extends AssetBundle
{
   public $basePath = '@webroot';
   public $baseUrl = '@web';
   public $css = [
      'css/style.css'
   ];

   public $js = [
      'js/main.js'
   ];
}