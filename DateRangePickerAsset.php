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

use kartik\base\AssetBundle;

/**
 * DateRangePicker bundle for \kartik\daterange\DateRangePicker.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class DateRangePickerAsset extends AssetBundle
{
    public $depends = [
        '\kartik\daterange\MomentAsset',
        'yii\web\JqueryAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/daterangepicker', 'css/daterangepicker-kv']);
        $this->setupAssets('js', ['js/daterangepicker']);
        parent::init();
    }
}
