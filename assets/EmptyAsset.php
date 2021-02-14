<?php

namespace yii\installer\assets;

class EmptyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@installer/media';
    public $css = [
        'css/empty.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
