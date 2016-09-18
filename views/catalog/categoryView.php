<?php
include ROOT.'/views/layouts/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Бренды</h2>
                        <div class="panel-group category-products">

                          <!--ВЫВОД КАТЕГОРИЙ КАТАЛОГА-->
                          <?php foreach($categoryList as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a href="/category/<?php echo $categoryItem['id']?>"
                                        class="<?php if($categoryId == $categoryItem['id']) echo 'active'; ?>">

                                        <?php echo $categoryItem['name']?>
                                      </a>
                                    </h4>
                                </div>
                            </div>
                          <?php endforeach; ?>

                        </div>

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center"> <?php echo $categoryName['name']; ?></h2>

                    <?php foreach($categoryProducts as $productItem): ?>
                        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="/product/<?php echo $productItem['id'] ?>">
                                      <img src="<?php echo $productItem['image']; ?>" alt="<?php echo $productItem['name'] ?>" />
                                         </a>
                                        <h2><?php echo $productItem['price']; ?> руб.</h2>
                                        <p>
                                          <a href="/product/<?php echo $productItem['id'] ?>">
                                            <?php echo $productItem['name'] ?>
                                          </a>
                                        </p>
                                        <a href="#" data-id="<?php echo $productItem['id']; ?>"
                                           class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину
                                        </a>
                                    </div>
                                    <?php if($productItem['is_new']): ?>
                                    <img src="/template/images/home/new.png" class="new" alt="new product"/>
                                  <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!--Постраничная навгиция-->
                      <div class="pagination col-xs-12">
                        <?php echo $pagination->get(); ?>
                      </div>
                    </div><!--features_items-->



                </div>
            </div>
        </div>
    </section>

<?php include ROOT.'/views/layouts/footer.php'; ?>
