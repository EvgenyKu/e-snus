<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
			<!--
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Бренды</h2>
                        <div class="panel-group category-products">
                            <?php foreach ($categories as $categoryItem): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/<?php echo $categoryItem['id']; ?>">
                                                <?php echo $categoryItem['name']; ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
				-->

                <div class="col-sm-8 padding-right col-sm-offset-2">
                    <div class="features_items">
                        <h2 class="title text-center">Корзина</h2>

                                

                                    <?php if ($result): ?>
                                        <p><h3>Заказ оформлен. Мы Вам перезвоним.</h3></p>
                                    <?php else: ?>

                                    <p><h4 class="text-center">Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?> Руб. </h4></p><br/>

                                    <?php if (!$result): ?>

                                    <?php if (isset($errors) && is_array($errors)): ?>
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li> - <?php echo $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <p><h5 class="text-center">Для оформления заказа заполните форму.</h5></p>
                                       <p><h5 class="text-center"> Мы свяжемся с вами в ближайшее время.</h5></p>

                                    <div class="login-form">
                                        <form action="#" method="post">

                                            <p>Ваша имя</p>
                                            <input type="text" name="userName" placeholder="Введите ваше имя" value=""/>

                                            <p>Номер телефона</p>
                                            <input type="text" name="userPhone" placeholder="Введите номер" value=""/>

                                            <p>Ссылку ВК или E-mail</p>
                                            <input type="text" name="userVk" placeholder="Введите Ссылку ВК" value=""/>

                                            <p>Комментарий к заказу</p>
                                            <input type="text" name="userComment" placeholder="Сообщение" value=""/>

                                            <br/>
                                            <br/>
                                            <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                        </form>
                                    </div>
                                

                            <?php endif; ?>

                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>