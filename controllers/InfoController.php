<?php

class InfoController{

    public function actionAbout(){
        $categoryList = array();
        $categoryList = CategoryModel::getCategory();
        require_once (ROOT.'/views/about/aboutView.php');

    }

    public function actionContacts(){
        $categoryList = array();
        $categoryList = CategoryModel::getCategory();
        require_once (ROOT.'/views/contacts/contactsView.php');

    }
    
    public function  actionStocks(){
        $categoryList = array();
        $categoryList = CategoryModel::getCategory();
        require_once (ROOT.'/views/stocks/stocksView.php');
    }

}