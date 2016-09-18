<?php include ROOT . '/views/layouts/header.php'; ?>

<section xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="row">
                        <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Бренды</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-5 col-sm-offset-0">
                            <div class="view-product">
                                <img src="<?php echo $product['image']?>" alt="<?php echo $product['name'];?>" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <?php if($product['is_new']): ?>
                                <img src="/template/images/product-details/new.jpg" class="newarrival" alt="new product" />
                                <?php endif; ?>
                                <h2><?php echo $product['name'];?></h2>
                                <span>
                                    <span><?php echo $product['price'];?>руб.</span>
                                    <label>Количество:</label>
                                    <input  id="count" type="text" value="1" />
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart cart"><i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                    <br><br>
                                    <p><b>Порционность:</b> <?php echo $product['pouches']?></p>
                                    <p><b>Содержание никотина мг/г:</b> <?php echo $product['nicotine'] ?></p>
                                    <p><b>Вес однго мешочка:</b> <?php echo  $product['wp']?></p>

                                </span>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Описание товара</h5>
                            <?php echo $product['description'];?>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
