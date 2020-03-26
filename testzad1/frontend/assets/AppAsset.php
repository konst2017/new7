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
      
    

   
    "bootstrap.css" ,
   "menu.css" ,
   "styleshet02.css" ,
 "layout.css" ,
    
    
    ];
    public $js = [
	
	
        'jscript.js',
		'js/jquery.js',
		'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
