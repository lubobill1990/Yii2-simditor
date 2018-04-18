<?php
/**
 * User: lubobill1990\yii2\widget
 * Date: 16-4-4
 * Time: 上午1:01
 */

namespace lubobill1990\yii2\widget;

use yii\web\AssetBundle;

class ModuleAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../assets';

    public $js = [
        'scripts/simple-module.min.js',
    ];
}
