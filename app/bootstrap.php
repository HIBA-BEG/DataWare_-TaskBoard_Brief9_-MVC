<?php
  // Load Config
  require_once 'config/config.php';
  // Load Helpers
  require_once 'helpers/url_helper.php';
  require_once 'helpers/session_helper.php';

  // instead of requiring the library dyal kulla class manually kandiru had autoload

  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });
  
