<?php
return array(
   "^product/([0-9]+)$" => "product/view/$1", //просмотр одного товара в actionView in ProductController

   "^category/([0-9]+)/page-([0-9]+)$" =>"catalog/category/$1/$2", //Постраничный просмотр actionCategory in CatalogController
   "^category/([0-9]+)$" => "catalog/category/$1", //Просмотр опр.Категории actionCategory in CatalogController

   "^catalog/page-([0-9]+)$" => "catalog/index/$1",
   "^catalog$" => "catalog/index", //Просмотр всего каталога в actionIndex in CatalogController

    "^cart/checkout$" => "cart/checkout",
    "^cart/delete/([0-9]+)$" => "cart/delete/$1",
    "^cart/addAjax/([0-9]+)/([0-9]+)$" => "cart/addAjax/$1/$2",

    "^contacts$" => "info/contacts",
    "^about$" => "info/about",
    "^stocks$" => "info/stocks",

   "^cart$" => "cart/index", //Просмотр корзины
   "^$" =>"mainPage/index", //Главная страница actionIndex in MainPageController
);
