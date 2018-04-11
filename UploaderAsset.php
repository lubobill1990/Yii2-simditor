<?php
/**
 * User: anxu
 * Date: 16-4-4
 * Time: 上午1:01
 */

namespace anxu;

use yii\web\AssetBundle;

class UploaderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/simple-uploader';

    public $js = [
        'lib/uploader.js',
    ];
}
