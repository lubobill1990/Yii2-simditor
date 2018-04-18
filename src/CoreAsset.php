<?php
/**
 * User: lubobill1990\yii2\widget
 * Date: 16-3-29
 * Time: 下午10:44
 */

namespace lubobill1990\yii2\widget;

use yii\web\AssetBundle;


class CoreAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../assets';

    public $uploader = false;

    public $css = [
        "styles/simditor.css",
        "styles/additional.css",
    ];

    public $js = [
        "scripts/simditor.min.js"
    ];

    public $depends = [
        'lubobill1990\yii2\widget\ModuleAsset',
        'lubobill1990\yii2\widget\HotkeysAsset',
    ];
}
