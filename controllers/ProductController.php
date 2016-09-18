<?php

class ProductController
{

  public function actionView($productId)
    {

        $categories = array();
        $categories = CategoryModel::getCategory();

        $product = array();
        $product = ProductModel::getProductById($productId);

        require_once(ROOT.'/views/product/productView.php');

        return true;
    }


}
