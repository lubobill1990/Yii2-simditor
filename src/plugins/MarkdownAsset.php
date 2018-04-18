<?php
/**
 * User: lubobill1990\yii2\widget
 * Date: 16-3-29
 * Time: 下午10:44
 */

namespace lubobill1990\yii2\widget\plugins;

use yii\web\AssetBundle;


class MarkdownAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../../assets/plugins/simditor-markdown';

    public $js = [
        "lib/simditor-markdown.js"
    ];

    public $css = [
        "lib/simditor-markdown.css"
    ];

    public $depends = [
        'lubobill1990\yii2\widget\CoreAsset',
    ];
}
