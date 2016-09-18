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
                <h2 class="title text-center">О нас</h2>
                <div class="well">
                    <h4 class="text-center">Как мы работаем и как сделать заказ снюса?</h4>
                    <p>Мы занимаемся продажей Шведского снюса с бесплатной доставкой в Россию и страны СНГ из Европы.</p>
					<p>После того, как Вы нажмете кнопку «Заказать» и заполните форму для обратной связи мы свяжемся с Вами в течении 8 часов для подтверждения заказа и уточнения данных для доставки (ФИО, адрес, почтовый индекс).</p>
                    <p>Доставка (бесплатная) осуществляется по почте после оплаты заказа на номер QIWI-кошелька: 9003327973 или на карту Сбербанка: 4276750018596451 (Получатель - Концов Дмитрий Михайлович, г. Чебоксары).</p>
                    <p>Мы гарантируем доставку в Россию в течении 9-16 дней (в зависимости от региона) с момента получения платежа.</p>
                    <p>Внимание! По городу Чебоксары и г. Новочебоксарск возможна курьерская доставка с оплатой заказа при получении (доставка по г. Чебоксары – 150 руб., г. Новочебоксарск – 250 руб.).</p>
                </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include ROOT.'/views/layouts/footer.php'; ?>
