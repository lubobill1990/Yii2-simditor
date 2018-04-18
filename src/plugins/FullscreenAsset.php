<?php
/**
 * User: lubobill1990\yii2\widget
 * Date: 16-3-29
 * Time: 下午10:44
 */

namespace lubobill1990\yii2\widget\plugins;

use yii\web\AssetBundle;


class FullscreenAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../../assets/plugins/simditor-fullscreen';

    public $js = [
        "lib/simditor-fullscreen.js"
    ];

    public $css = [
        "styles/simditor-fullscreen.css"
    ];

    public $depends = [
        'lubobill1990\yii2\widget\CoreAsset',
    ];
}
