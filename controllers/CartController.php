<?php

class CartController
{

  public function actionAddAjax($id,$count = 1)
  {
    echo Cart::addProduct($id,$count);
    return true;
  }

    public function  actionDelete($id)
    {

        Cart::deleteProduct($id);

        header("Location: /cart");

    }

  public function actionIndex()
  {
      $categories = array();
      $categories = CategoryModel::getCategory();

      $productsInCart = Cart::getProducts();

      if($productsInCart){
          $productsIds = array_keys($productsInCart);
          $products = ProductModel::getProductsByIds($productsIds);

          $totalPrice = Cart::getTotalPrice($products);
      }

      require_once (ROOT.'/views/cart/cartView.php');
      return true;
  }


    public function actionCheckout()
    {
        // Получием данные из корзины
        $productsInCart = Cart::getProducts();
        // Если товаров нет, отправляем пользователи искать товары на главную
        if ($productsInCart == false) {
            header("Location: /");
        }
        // Список категорий для левого меню
        $categories = CategoryModel::getCategory();
        // Находим общую стоимость
        $productsIds = array_keys($productsInCart);
        $products = ProductModel::getProductsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);
        // Количество товаров
        $totalQuantity = Cart::countItems();

        // Статус успешного оформления заказа
        $result = false;
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userVk = $_POST['userVk'];
            $userComment = $_POST['userComment'];

            // Флаг ошибок
            $errors = false;
            // Валидация полей
            if (!User::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Сохраняем заказ в базе данных
                $result = OrderModel::save($userName,$userVk, $userPhone, $userComment, $productsInCart);
                if ($result) {
                    // Если заказ успешно сохранен
                    // Оповещаем администратора о новом заказе по почте
                    $adminEmail = 'zhen-kok@yandex.ru';
                    $subject = 'Возможно новый заказ от'.$userName;

                    $body_message = 'От господина: '.$userName."\n";
                    $body_message .= 'E-mail или ссылка ВК: '.$userVk."\n";
                    $body_message .= 'Номер : '.$userPhone."\n";
                    $body_message .= 'Комментарий'.$userComment."\n";
                    $body_message .= 'Товар: '.json_encode($productsInCart);


                    mail($adminEmail, $subject, $body_message);
                    // Очищаем корзину
                    Cart::clear();
                }
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/cart/checkoutView.php');
        return true;
    }

    }
