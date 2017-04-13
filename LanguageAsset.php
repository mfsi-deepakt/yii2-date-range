<?php

/**
<<<<<<< HEAD
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2016
 * @package yii2-date-range
 * @version 1.6.7
=======
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2017
 * @package yii2-date-range
 * @version 1.6.8
>>>>>>> d75e44406856fc9cabc06d2b9efb98b60323c2c4
 */

namespace kartik\daterange;

use yii\web\View;
use kartik\base\AssetBundle;

/**
 * Language Asset bundle for \kartik\daterange\DateRangePicker.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class LanguageAsset extends AssetBundle
{
    public $jsOptions = ['position' => View::POS_HEAD];
    public $depends = ['\kartik\daterange\MomentAsset'];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        parent::init();
    }
}
