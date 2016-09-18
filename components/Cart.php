<?php

class Cart{

   public static function addProduct($id,$count)
    {

        $id = intval($id);
        $count = intval($count);

        $productsInCart = array();

        if(isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }

        if(array_key_exists($id,$productsInCart)){
            $productsInCart[$id] += $count;
        }else{
            $productsInCart[$id] = $count;
        }

        $_SESSION['products'] = $productsInCart;

        return self::countItems();

    }

    /**
     * Удаляет товар с указанным id из корзины
     * @param integer $id <p>id товара</p>
     */
    public static function deleteProduct($id)
    {
        // Получаем массив с идентификаторами и количеством товаров в корзине
        if (isset($_SESSION['products'][$id])) {
            // Удаляем из массива элемент с указанным id
            unset($_SESSION['products'][$id]);
            // Записываем массив товаров с удаленным элементом в сессию
        }
    }

    public static function countItems()
  {

    if(isset ($_SESSION['products'])){
        $count = 0;
        foreach ($_SESSION['products'] as $id=>$quantity ){
            $count += $quantity;
        }
        return $count;
    }else{
        return 0;
    }

  }

  public static function getProducts()
  {
      if (isset($_SESSION['products'])) {
          return$_SESSION['products'];
      }
      return false;
  }

  public static function getTotalPrice($products)
  {

      $productsInCart = self::getProducts();

      $total = 0;

      if($productsInCart) {
          foreach ($products as $item){
              $total += $item['price'] * $productsInCart[$item['id']];
          }
      }

      return $total;

  }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

}