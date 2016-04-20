<?php
    require('header.php');
    require('navigator.php');
?>

    <div class="wrapper content main">
        <div class="catalog">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#1">
                        <img src="img/catalog/catalog_1.jpg" alt="" >
                        <div><p>ГАЗОПРОРШНЕВЫЕ ЭЛЕКТРОСТАНЦИИ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#2" class="active">
                        <img src="img/catalog/catalog_2.jpg" alt="" >
                        <div><p>ДИЗЕЛЬ-ГЕНЕРАТОРЫ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#3">
                        <img src="img/catalog/catalog_3.jpg" alt="" >
                        <div><p>ЭНЕРГЕТИЧЕСКИЕ КОМПЛЕКСЫ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#4">
                        <img src="img/catalog/catalog_4.jpg" alt="" >
                        <div><p>ЭЛЕКТРОСТНЦИИ В КОНТРЕЙНЕРЕ</p></div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#5">
                        <img src="img/catalog/catalog_5.jpg" alt="" >
                        <div><p>ПЕРЕДВЕЖНЫЕ ЭЛЕКТРОСТАНЦИИ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#6">
                        <img src="img/catalog/catalog_6.jpg" alt="" >
                        <div><p>ЭЛЕКТРОСТАНЦИИ ПОД КАПОТОМ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#7">
                        <img src="img/catalog/catalog_7.jpg" alt="" >
                        <div><p>СИЛОВЫЕ УСТАНОВКИ ЯСУ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#8">
                        <img src="img/catalog/catalog_8.jpg" alt="" >
                        <div><p>КОМПЛЕКТУЮЩИЕ</p></div>
                    </a>
                </div>
            </div>
        </div>

        <div class="catalog-content">
            <div class="catalog-text">
                <h4>ДИЗЕЛЬ-ГЕНЕРАТОРЫ МОЩНОСТЬЮ ОТ 30 ДО 350 КВТ</h4>
                <div>
                    <p>
                        Стационарно-открытые дизельные электростанции (дизель-генераторы) мощностью 30-350
                        кВТ, оборудованные системой управления первой степени автоматизации.
                    </p>
                    <p>Первая степень автоматизации обеспечивает: </p>
                    <ul>
                        <li>запуск станции по команде оператора с лицевой панели шкафа;</li>
                        <li>подключение и отключение нагрузки оператором;</li>
                        <li>измерение основных параметров двигателя: давление масла, температуры охлаждающей жидкости,
                            уровня топлива в баке, напряжение батареи и зарядного генератора, частоту вращения вала
                            генератора, время наработки станции;
                        </li>
                        <li>измерение основных параметров генератора: напряжение, частота и сила тока;</li>
                        <li>включение аварийной сигнализации и отсновку электроктрогенератора по параметрам: перегрев
                            охлаждающей жидкости, падение давления масла, низкий уровень топлива, неисправность зарядного
                            генератора, перегрузке по току в цепях нагрузки, коротком замыкании в цепях нагрузки, выход
                            параметров генератора за данные пределы установки.
                        </li>
                    </ul>

                </div>
            </div>
            <div class="catalog-item" >
                <div
                    style="margin: 5px -20px;padding:10px;background-color: #7bba2d; color:#ffffff;font-weight: 600;font-size: 16px">
                    <span>ДИЗЕЛЬНЫЙ ГЕНЕРАТОР 30 КВТ </span>
                    <span class="pull-right" style="font-size: 30px">+</span>
                </div>
                <?php require('template-table-catalog.php'); ?>
                <?php require('template-table-catalog.php'); ?>
                <!-- START  TEST VERSION OF TABLE -->
                <div class="col-lg-2" style="border: 1px solid #000000;background-color: #4cae4c;padding: 0px">1</div>
                <div class="col-lg-2" style="border: 1px solid #000000;background-color: #4cae4c;padding: 0px">2</div>
                <div class="col-lg-8" style="border: 1px solid #000000;background-color: #4cae4c;padding: 0px">
                    <div class="col-lg-3" style="border: 1px solid #cccccc;background-color: #2aabd2;padding: 0px">3
                    </div>
                    <div class="col-lg-3" style="border: 1px solid #cccccc;background-color: #2aabd2;padding: 0px">3
                    </div>
                    <div class="col-lg-6" style="border: 1px solid #cccccc;background-color: #2aabd2;padding: 0px">3
                    </div>
                </div>
                <!-- END TEST VERSION OF TABLE -->
                <div style="margin-bottom: 100px"></div>
            </div>
            <div class="catalog-item">
                <div style="margin: 5px -20px;padding:10px;background-color: #7bba2d; color:#ffffff;font-weight: 600;font-size: 16px">
                    <span >ДИЗЕЛЬНЫЙ ГЕНЕРАТОР 40 КВТ </span>
                    <span class="pull-right" style="font-size: 30px">+</span>
                </div>
                <?php require('template-table-catalog.php');?>
                <?php require('template-table-catalog.php');?>
            </div>

        </div>
    </div>

<?php require('footer.php'); ?>