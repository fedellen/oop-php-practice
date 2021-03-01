<?php 

  /** Import classes with autoload */
  function autoLoader($class) {
    $path = "./classes/".$class.".class.php";
    include_once $path;
  }
  spl_autoload_register('autoLoader');