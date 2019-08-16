<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    /**
     * basePath
     */
    public $basePath = '@webroot';
    
     /**
     * baseUrl
     */
    public $baseUrl = '@web';
    
     /**
     * CSS file
     */    
    public $css = [
        'css/site.css',
    ];
    
    /**
     * JS file
     */ 
    public $js = [
    ];
    
     /**
     * pathes to assets
     */ 
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
