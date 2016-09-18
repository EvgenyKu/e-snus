<?php

class CatalogController
{

  public function actionIndex($page = 1)
  {
    $count = 12;//сколько товаров отображать на 1 странице каталога

    $categoryList = array();
    $categoryList = CategoryModel::getCategory();

    $productList = array();
    $productList = ProductModel::getProducts($count,$page); // в скобках указать количество отоброжаемых товаров

    $total = ProductModel::getTotalProducts();
    $pagination = new Pagination($total,$page,$count,'page-');

    require_once(ROOT.'/views/catalog/catalogView.php');

    return true;

  }

  public function actionCategory($categoryId,$page = 1)
  {

    $categoryList = array();
    $categoryList = CategoryModel::getCategory();


    $categoryName = CategoryModel::getCategoryNameById($categoryId);
    $categoryProducts = array();
    $categoryProducts = ProductModel::getProductsById($categoryId,$page);

    $total = ProductModel::getTotalProductsInCategory($categoryId);

    $pagination = new Pagination($total,$page,ProductModel::SHOW_BY_DEFAULT,'page-');

    require_once (ROOT.'/views/catalog/categoryView.php');

    return true;

  }

}
