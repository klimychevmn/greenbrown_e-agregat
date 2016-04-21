<?php
require('header.php');
require('navigator.php');
?>

    <div class="wrapper content main">
        <div class="catalog" id="catalog">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="catalog.php#1">
                        <img src="img/catalog/catalog_1.jpg" alt="">
                        <div><p>ГАЗОПРОРШНЕВЫЕ ЭЛЕКТРОСТАНЦИИ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="catalog.php#2" class="active">
                        <img src="img/catalog/catalog_2.jpg" alt="">
                        <div><p>ДИЗЕЛЬ-ГЕНЕРАТОРЫ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="catalog.php#3">
                        <img src="img/catalog/catalog_3.jpg" alt="">
                        <div><p>ЭНЕРГЕТИЧЕСКИЕ КОМПЛЕКСЫ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="catalog.php#4">
                        <img src="img/catalog/catalog_4.jpg" alt="">
                        <div><p>ЭЛЕКТРОСТНЦИИ В КОНТРЕЙНЕРЕ</p></div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#5">
                        <img src="img/catalog/catalog_5.jpg" alt="">
                        <div><p>ПЕРЕДВЕЖНЫЕ ЭЛЕКТРОСТАНЦИИ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#6">
                        <img src="img/catalog/catalog_6.jpg" alt="">
                        <div><p>ЭЛЕКТРОСТАНЦИИ ПОД КАПОТОМ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#7">
                        <img src="img/catalog/catalog_7.jpg" alt="">
                        <div><p>СИЛОВЫЕ УСТАНОВКИ ЯСУ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#8">
                        <img src="img/catalog/catalog_8.jpg" alt="">
                        <div><p>КОМПЛЕКТУЮЩИЕ</p></div>
                    </a>
                </div>
            </div>
        </div>

        <div class="catalog-content" id="content">
            <div class="catalog-text">
                <h4>ДИЗЕЛЬ-ГЕНЕРАТОРЫ МОЩНОСТЬЮ ОТ 30 ДО 350 КВТ</h4>
                <div style="height: 300px;background-color: #2aabd2;margin-bottom: 20px"></div>
                <?php require('item-collapse.php')?>
            </div>

        </div>

    </div>

<?php require('footer.php'); ?>