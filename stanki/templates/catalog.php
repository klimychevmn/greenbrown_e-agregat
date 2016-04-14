<?php
    require('header.php');
    require('navigate.php');
?>


    <div class="content">
        <div>

            <div class="row my_row">

                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <?php require('catalog-left-panel.php');?>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <form class="catalog_form">
                        <h4>ФОРМА ЗАКАЗА</h4>
                        <input type="text" placeholder="Контактное лицо">
                        <input type="text" placeholder="Организация">
                        <input type="text" placeholder="Телефон">
                        <input type="text" placeholder="Электронная почта">
                        <textarea name="" id="" cols="22" rows="6" placeholder="Запрос"></textarea>
                        <button type="submit">ОТПРАВИТЬ ЗАКАЗ</button>
                    </form>
                </div>

            </div>

            <div class="tab_panel row my_row">
                <?php require('tab-panel.php'); ?>
            </div>

        </div>
    </div>

<?php require('footer.php'); ?>