<?php
/**
 * User: anxu
 * Date: 16-3-29
 * Time: 下午10:44
 */

namespace anxu;

use yii\web\AssetBundle;


class CoreAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/simditor';

    public $uploader = false;

    public $css = [
        "styles/simditor.css"
    ];

    public $js = [
        "lib/simditor.js"
    ];

    public $depends = [
        'anxu\ModuleAsset',
        'anxu\HotkeysAsset',
        'anxu\UploaderAsset',
    ];
}
