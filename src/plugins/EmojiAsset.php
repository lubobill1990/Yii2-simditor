<?php
/**
 * User: lubobill1990\yii2\widget
 * Date: 16-3-29
 * Time: 下午10:44
 */

namespace lubobill1990\yii2\widget\plugins;

use yii\web\AssetBundle;


class EmojiAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../../assets/plugins/simditor-emoji';

    public $js = [
        "lib/simditor-emoji.js"
    ];

    public $css=[
        "styles/simditor-emoji.css"
    ];

    public $depends = [
        'lubobill1990\yii2\widget\CoreAsset',
    ];
}
