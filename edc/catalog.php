<?php
    require('header.php');
    require('navigator.php');
?>

    <div class="wrapper content main">
        <div class="catalog" id="catalog">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#1">
                        <img src="img/catalog/catalog_1.jpg" alt="">
                        <div><p>ГАЗОПРОРШНЕВЫЕ ЭЛЕКТРОСТАНЦИИ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#2" class="active">
                        <img src="img/catalog/catalog_2.jpg" alt="">
                        <div><p>ДИЗЕЛЬ-ГЕНЕРАТОРЫ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#3">
                        <img src="img/catalog/catalog_3.jpg" alt="">
                        <div><p>ЭНЕРГЕТИЧЕСКИЕ КОМПЛЕКСЫ</p></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 catalog_item">
                    <a href="#4">
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
                <div>
                    <p>
                        Стационарно-открытые дизельные электростанции (дизель-генераторы) мощностью 30-350
                        кВТ, оборудованные системой управления первой степени автоматизации.
                    </p>
                    <p>Первая степень автоматизации обеспечивает: </p>
                    <ul>
                        <li><p>запуск станции по команде оператора с лицевой панели шкафа;</p></li>
                        <li><p>подключение и отключение нагрузки оператором;</p></li>
                        <li><p>измерение основных параметров двигателя: давление масла, температуры охлаждающей жидкости,
                            уровня топлива в баке, напряжение батареи и зарядного генератора, частоту вращения вала
                            генератора, время наработки станции;</p>
                        </li>
                        <li><p>измерение основных параметров генератора: напряжение, частота и сила тока;</p></li>
                        <li><p>включение аварийной сигнализации и отсновку электроктрогенератора по параметрам: перегрев
                            охлаждающей жидкости, падение давления масла, низкий уровень топлива, неисправность
                            зарядного генератора, перегрузке по току в цепях нагрузки, коротком замыкании в цепях нагрузки, выход
                            параметров генератора за данные пределы установки.
                            </p>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="catalog-item">
                    <div class="catalog-title">ДИЗЕЛЬНЫЙ ГЕНЕРАТОР 30 КВТ
                        <span class="pull-right cursor">+</span>
                    </div>
                    <div class="catalog-content hidden">
                        <p>
                            Равным образом сложившаяся структура организации играет важную роль в формировании
                            дальнейших
                            направлений развития. Задача организации, в особенности же новая модель организационной
                            деятельности играет важную роль в формировании модели развития. Идейные соображения высшего
                            порядка, а также консультация с широким активом представляет собой интересный эксперимент
                            проверки форм развития. С другой стороны реализация намеченных плановых заданий позволяет
                            оценить значение существенных финансовых и административных условий. Идейные соображения
                            высшего порядка, а также реализация намеченных плановых заданий позволяет выполнять важные
                            задания по разработке новых предложений.
                        </p>
                        <p>
                            Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности
                            требуют определения и уточнения соответствующий условий активизации. С другой стороны начало
                            повседневной работы по формированию позиции представляет собой интересный эксперимент
                            проверки направлений прогрессивного развития.
                        </p>
                    </div>
            </div>

            <?php for($i=0;$i<3;$i++):?>
                <div class="catalog-table-item">

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 cell-1">
                        <img src="img/catalog-item.jpg" alt="">
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 cell-2"><a href="item.php">АД30С-Т400-1Р</a></div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 cell-3" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-1">Мощность,<br>кВт (кВА)</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-2">30 (37.5)</div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 cell-4">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-1">Дизельный <br> двигатель</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-2">Д246.1 <br> (ОАО "ММЗ")</div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 cell-5">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-1">Генератор <br> синхронный</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-2">БГ-30, БГО-30 <br> (ООО "БАРАЧИНСКИЙ ЭМЗ", РОССИЯ)</div>
                    </div>

                </div>
            <?php endfor;?>

            <div class="catalog-item">
                <div class="catalog-title active">ДИЗЕЛЬНЫЙ ГЕНЕРАТОР 40 КВТ
                    <span class="pull-right cursor">-</span>
                </div>
                <div class="catalog-content">
                    <p>
                        Дизельный генератор 50 кВт обладают мощностью 50 кВт и частотой 50 Гц. Эти установки отличаются
                        высоким качеством выробатываемой электроэнергии, легкостью и неприхотливостью в обращении, очень
                        удобным управлением, и простотой обслуживания. Они предназначенные для производства трехфазного
                        электрического тока 400В. Создаются эти установки компанией ООО ПКФ "Энергодизельцентр" с
                        использованием двигателей ММЗ.
                    </p>
                    <p>Преимущества: </p>
                    <ul>
                        <li><p>Мобильность</p></li>
                        <li><p>Отечественные генераторы дешевле зарубежных</p></li>
                        <li><p>На русские генераторы легче доставть запчасти и комплектующие</p></li>
                        <li><p>Они просты в работе и обслуживании</p></li>
                        <li><p>Они экономны</p></li>
                    </ul>
                    <p>
                        Дизельный генератор 50 кВт запускаются вручную, но работают в автоматизированном режиме и не
                        нуждаются в постоянном присутствии оператора, что дает возможность использовать установку в
                        качестве полноценной резервной системы при черезвычайных ситуациях на социальных и промышленных
                        объектах.
                    </p>
                </div>
            </div>

            <?php for($i=0;$i<2;$i++):?>
                <div class="catalog-table-item">

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 cell-1">
                        <img src="img/catalog-item.jpg" alt="">
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 cell-2"><a href="item.php">АД30С-Т400-1Р</a></div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 cell-3" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-1">Мощность,<br>кВт (кВА)</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-2">30 (37.5)</div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 cell-4">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-1">Дизельный <br> двигатель</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-2">Д246.1 <br> (ОАО "ММЗ")</div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 cell-5">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-1">Генератор <br> синхронный</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row-2">БГ-30, БГО-30 <br> (ООО "БАРАЧИНСКИЙ ЭМЗ", РОССИЯ)</div>
                    </div>

                </div>
            <?php endfor;?>

        </div>

    </div>

<?php require('footer.php'); ?>