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
            <h2 class="title text-center">Наши контакты</h2>
            <div class="well">
                <div>Телефон: +7-999-199-26-72 (<small>принимаем звонки в любое время</small>)</div>
                <div>E-mail:  anythingrus@mail.ru</div>
                <a href="https://vk.com/public126187640">Наша группа вконтакте</a>
                <div >Местонахождение: г.Чебоксары, Россия.</div>
            </div>
        </div>

    </div>
</div>
</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>
