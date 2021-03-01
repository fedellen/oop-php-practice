<?php 

  /** Import classes with autoload */
  function autoLoader($class) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    // $path;
    if(strpos($url, 'includes') !== false) {
      $path = '../classes/';
    } else {
      $path = 'classes/';
    }
    $extension = '.class.php';

    require_once $path . $class . $extension;
  }
  spl_autoload_register('autoLoader');