<?php

/**
 * Implement Prestashop Nova Template on Yii2
 * @since v.0.0.1
 * @author sheillendra <suryana869@gmail.com>
 */

namespace sheillendra\guide\assets;

use yii\web\AssetBundle;

class GuideAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/guide/assets/template';
    public $css = [
        'css/style.css'
    ];
    public $js = [
        
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'sheillendra\jeasyui\assets\FontAwesomeAsset'
    ];
}
