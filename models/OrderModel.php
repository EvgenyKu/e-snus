<?php

class OrderModel
{
    /**
    * Сохранение заказа
    * @param string $userName <p>Имя</p>
    * @param string $userPhone <p>Телефон</p>
    * @param string $userComment <p>Комментарий</p>
    * @param integer $userId <p>id пользователя</p>
    * @param array $products <p>Массив с товарами</p>
    * @return boolean <p>Результат выполнения метода</p>
    */
    public static function save($userName,$userVk, $userPhone, $userComment, $products)
    {
    // Соединение с БД
    $db = Db::getConnection();
    // Текст запроса к БД
    $sql = 'INSERT INTO goods_order (user_name,user_vk, user_phone, user_comment, products) '
    . 'VALUES (:user_name,:user_vk, :user_phone, :user_comment, :products)';
    $products = json_encode($products);
    $result = $db->prepare($sql);
    $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
    $result->bindParam(':user_vk',$userVk,PDO::PARAM_STR);
    $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
    $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
    $result->bindParam(':products', $products, PDO::PARAM_STR);
    return $result->execute();
    }
}