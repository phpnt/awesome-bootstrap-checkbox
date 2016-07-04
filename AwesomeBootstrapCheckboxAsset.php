<?php

/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 01.07.2016
 * Time: 14:24
 */

namespace phpnt\awesomeBootstrapCheckbox;

use yii\web\AssetBundle;

class AwesomeBootstrapCheckboxAsset extends AssetBundle
{
    public $sourcePath = '@bower/awesome-bootstrap-checkbox';

    public $css = [
        'awesome-bootstrap-checkbox.css',
    ];

    public $depends = [
        'phpnt\fontAwesome\FontAwesomeAsset'
    ];
}