<?php

class Router
{
  private $routes;

  public function __construct()
  {
    $routesPath = ROOT.'/config/routes.php';
    $this->routes = include($routesPath);
  }

  private function getURI()
  { //Возвращает строку запроса
    if(!empty($_SERVER['REQUEST_URI'])){
        return trim($_SERVER['REQUEST_URI'],'/');
    }
  }

  public function run()
  {
    //Получаем строку запроса
    $uri = $this->getURI();

    //Проверка запроса с массивом routes.php
    foreach ($this->routes as $uriPattern => $path) {
      if (preg_match("~$uriPattern~",$uri)){
        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
        $segments = explode('/',$internalRoute);



        $controllerName = ucfirst(array_shift($segments)).'Controller';
        $actionName = 'action'.ucfirst(array_shift($segments));

        $parameters = $segments;


        //Подключение файлов контроллера
        $controllerFile = ROOT.'/controllers/'.$controllerName .'.php';
          if (file_exists($controllerFile)) {
            include_once($controllerFile);
          }else {
            header("Location:404.php");
          }
          // Создать объект, вызвать метод (т.е. action)
          $controllerObject = new $controllerName;

          $result = call_user_func_array(array($controllerObject, $actionName), $parameters);


                if ($result != null) {
                    break;
                }
      }
    }

  }

}
