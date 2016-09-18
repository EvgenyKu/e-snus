    <?php include ROOT.'/views/layouts/header.php'; ?>
<div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <a href="/stocks">
                          <div class="stock">
                              <div class="col-sm-2 col-sm-offset-2 stock">
                            <img src="/template/images/home/super.jpg" alt="акция снюс">
                              </div>
                              <div class="col-sm-7 stock">
                          
                            <h5>КУПИ 10 БАНОК СНЮСА И ПОЛУЧИ 2 БАНКИ В ПОДАРОК!</h5>
                                <p>*В акции участвуют не все товары(кликните,чтобы просмотреть участвующие товары).</p>
                                </div>
                           </div>
                            </a>
                        </div>
                            
                        </div>
                    </div>
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
                                          <a href="/category/<?php echo $categoryItem['id']?>">
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
                            <h2 class="title text-center">Популярное</h2>

                        <?php foreach($productList as $productItem): ?>
                            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/product/<?php echo $productItem['id'] ?>" >
                                          <img src="<?php echo $productItem['image']; ?>" alt="<?php echo $productItem['name'] ?>" />
                                            </a>
                                            <h2><?php echo $productItem['price']; ?> руб.</h2>
                                            <p>
                                              <a href="/product/<?php echo $productItem['id'] ?>" >
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

                        </div><!--features_items-->

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">мы в социальных сетях</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                          <div class="col-sm-12">
                                            <script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>
                                            <!-- VK Widget -->
                                            <div id="vk_groups"></div>
                                            <script type="text/javascript">
                                            VK.Widgets.Group("vk_groups", {redesign: 1, mode: 4, wide: 1, width: "832", height: "325", color1: 'FFFFFF', color2: '000000', color3: '#FE980F'}, 126187640);
                                            </script>
                                          </div>
                                    </div>
                                    <!--Вторая карусель
                                    <div class="item">

                                    </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a> -->
                            </div>
                        </div><!--/recommended_items-->

                    </div>
                </div>
            </div>
        </section>

    <?php include ROOT.'/views/layouts/footer.php'; ?>
