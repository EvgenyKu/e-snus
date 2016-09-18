<?php
class User{

    public static function checkName($name)
    {
    if (strlen($name) >= 2) {
    return true;
    }
    return false;
    }
    /**
    * Проверяет телефон: не меньше, чем 10 символов
    * @param string $phone <p>Телефон</p>
    * @return boolean <p>Результат выполнения метода</p>
    */
    public static function checkPhone($phone)
    {
    if (strlen($phone) >= 10) {
    return true;
    }
    return false;
    }

}