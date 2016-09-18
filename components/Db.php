<?php


class Db
{

  public static function getConnection()
  {
    $params = include(ROOT.'/config/db_params.php');
    $db = new PDO("mysql:host={$params['host']};dbname={$params['dbname']}",$params['user'],$params['password']);
    /*включения вывода ошибок*/ $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Задаем кодировку
    $db->exec("set names utf8");

    return $db;

  }

}
