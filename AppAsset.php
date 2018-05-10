<?php
/**
 * @author Evgeniy Bobrov <yujin1st@gmail.com>
 * @link http://yujin1st.ru
 */

namespace yujin1st\materialtheme;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
  public $sourcePath = '@yujin1st/materialtheme/assets';

  public $css = [
    'bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css',
    'bower_components/animate.css/animate.min.css',
    'bower_components/jquery.scrollbar/jquery.scrollbar.css',
    'css/app.css',
  ];

  public $js = [
    'bower_components/popper.js/dist/umd/popper.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    'bower_components/jquery.scrollbar/jquery.scrollbar.min.js',
    'bower_components/jquery-scrollLock/jquery-scrollLock.min.js',
    'js/app.min.js',
  ];

  public $depends = [
    // 'yii\bootstrap\BootstrapPluginAsset',
    // 'yii\web\YiiAsset',
  ];
}
