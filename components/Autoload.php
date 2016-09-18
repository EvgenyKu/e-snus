<?php
  function autoload ($ClassName)
  {
    $arrayPaths = array(
      '/models/',
      '/components/'
    );

    foreach($arrayPaths as $path){
      $path = ROOT.$path.$ClassName.'.php';
      if(is_file($path)){
          include $path;
      }
    }

  }
