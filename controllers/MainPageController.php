<?php

class MainPageController
{
  public function actionIndex()
  {
    $categoryList = array();
    $categoryList = CategoryModel::getCategory();

    $productList = array();
    $productList = ProductModel::getPopulars(6); // в скобках указать количество отоброжаемых товаров

    require_once(ROOT.'/views/main_page/indexView.php');

    return true;

  }

}
