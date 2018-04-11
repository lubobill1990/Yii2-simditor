<?php
/**
 * User: lubobill1990\yii2\widget
 * Date: 16-4-4
 * Time: 上午1:01
 */

namespace lubobill1990\yii2\widget;

use yii\web\AssetBundle;

class UploaderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/simple-uploader';

    public $js = [
        'lib/uploader.js',
    ];

    public $depends = [
        'lubobill1990\yii2\widget\ModuleAsset',
    ];
}
