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
            <h2 class="title text-center">Наши Акции</h2>
            <div class="well">
                <h2 class="title text-center">КУПИ 10 БАНОК СНЮСА И ПОЛУЧИ 2 БАНКИ В ПОДАРОК!</h2>
				<pre>
В акции участвуют товары:
				
Islay Whisky Portion Snus 
Jakobsson´s Dynamite Extra Strong Portion Snus 
Jakobsson´s Melon Mini Strong Portion Snus 
Jakobsson´s Melon Strong Portion Snus 
Odens 29 Extreme Portion Snus 
Odens 59 Extra Strong 
Odens 69 White Dry 
Odens 79 Extreme Portion Snus 
Odens Cold Extra Strong Portion Snus 
Odens Cold Extreme Portion Snus 
Odens Cold Extreme White Dry Portion Snus 
Odens Double Extreme Mint Snus 
Odens Double Mint Extreme White Dry Portion Snus 
Odens Kola Extreme Portion Snus 
Odens Pure Extreme Wintergreen Portion 
Offroad Eucalyptus White Mini Portion 
Offroad Frosted WHITE Dry Portion Snus 
Phantom Classic Portion Snus 
Olde Ving 99 Portion Snu 
Siberia Extremely Strong White Dry Portion 
Thunder Cool Mint White Dry Frosted Ultra Strong Portion Snus 
Thunder White Dry Frosted Ultra Strong Portion Snus 
Thunder Original Extra Strong is a portion snus 
Thunder White Frosted Portion Snus 
Thunder Frosted Mint Nasal Snuff
				</pre>
                
            </div>
        </div>

    </div>
</div>
</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>
