<?php
class ProductModel
{

const SHOW_BY_DEFAULT = 9;

  public static function getProducts($count = self::SHOW_BY_DEFAULT,$page = 1)
  {
    $count = intval($count);
    $page = intval($page);
    $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

    $db = Db::getConnection();

    $result = $db->query("SELECT id,name,price,image,is_new FROM goods WHERE availability = 1 ORDER BY id ASC LIMIT $count OFFSET $offset");

    foreach($result as $row){
      $productList[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'price' => $row['price'],
        'image' => $row['image'],
        'is_new' => $row['is_new']
      );
    }
    return $productList;


  }

  public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM goods WHERE id= $id");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

  public static function getProductsByIds($idsArray)
  {

    $db = Db::getConnection();

    $idsString = implode(',',$idsArray);

    $result = $db->query("SELECT * FROM goods WHERE availability = 1 AND id IN ($idsString)");
    $result->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($result as $row){
        $products[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price']
        );
    }

    return $products;
  }

  public static function getProductsById($categoryId=false,$page)
  {
    $categoryId = intval($categoryId);

    if($categoryId){
      $page = intval($page);
      $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

      $db = Db::getConnection();
      $result = $db->query("SELECT id,name,price,image,is_new FROM goods"
         ." WHERE availability = 1 AND category_id = $categoryId"
         ." ORDER BY id ASC LIMIT ".self::SHOW_BY_DEFAULT
         ." OFFSET $offset");

      foreach($result as $row){
        $productList[] = array(
          'id' => $row['id'],
          'name' => $row['name'],
          'price' => $row['price'],
          'image' => $row['image'],
          'is_new' => $row['is_new']
        );
      }
      return $productList;
    }

  }

  public static function getPopulars($count = self::SHOW_BY_DEFAULT){
      $count = intval($count);


      $db = Db::getConnection();

      $result = $db->query("SELECT id,name,price,image,is_new FROM goods WHERE availability = 1 AND  is_popular = 1 ORDER BY id ASC LIMIT $count");

      foreach($result as $row){
          $productList[] = array(
              'id' => $row['id'],
              'name' => $row['name'],
              'price' => $row['price'],
              'image' => $row['image'],
              'is_new' => $row['is_new']
          );
      }
      return $productList;
  }

  public static function getTotalProductsInCategory($categoryId)
  {

    $db = Db::getConnection();

    $result = $db->query("SELECT count(id) AS count from goods WHERE availability = 1 AND category_id = $categoryId");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $row = $result->fetch();

    return $row['count'];
  }

  public static function getTotalProducts()
  {

    $db = Db::getConnection();

    $result = $db->query("SELECT count(id) AS count from goods WHERE availability = 1");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $row = $result->fetch();

    return $row['count'];
  }

}
