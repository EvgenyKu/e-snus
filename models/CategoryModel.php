<?php
class CategoryModel
{
  public static function getCategory()
  {

    $db = Db::getConnection();
    $result = $db->query("SELECT id,name FROM category ORDER BY sort_order ASC");
    foreach($result as $row){
      $categoryList[] = array(
        'id' => $row['id'],
        'name' => $row['name']
      );
    }
    return $categoryList;

  }

  public static function getCategoryNameById($id)
  {

    $db = Db::getConnection();

    $result = $db->query("SELECT name FROM category WHERE id = $id");

    $result->setFetchMode(PDO::FETCH_ASSOC);

    return $result->fetch();

  }


}
