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
    'vendor/animate.min.css',
    'vendor/jquery-scrollbar/jquery.scrollbar.css',
    'styles/main.min.css',
  ];

  public $js = [
    'vendor/popper.min.js',
    'vendor/bootstrap.min.js',
    'vendor/jquery-scrollLock.min.js',
    'vendor/jquery-scrollbar/jquery.scrollbar.min.js',
    'scripts/main.min.js',
  ];
}
