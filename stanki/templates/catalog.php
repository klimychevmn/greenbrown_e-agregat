<?php require('header.php'); ?>
<?php require('navigate.php'); ?>


    <div class="content">
        <div>

            <div class="row" style="padding-top: 30px">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div style="height: 500px">
                        kfjhkasjfhkasjhfkjashfkjhskfjhaskjfhkjahsf
                        kfjhkasjfhkasjhfkjashfkjhskfjhaskjfhkjahsf
                        kfjhkasjfhkasjhfkjashfkjhskfjhaskjfhkjahsf
                        kfjhkasjfhkasjhfkjashfkjhskfjhaskjfhkjahsf
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <form style="background-color: #868686;text-align: center">
                        <div>ФОРМА ЗАКАЗА</div>
                        <div><input type="text" placeholder="Контактное лицо"></div>
                        <div><input type="text" placeholder="Организация"></div>
                        <div><input type="text" placeholder="Телефон"></div>
                        <div><input type="text" placeholder="Электронная почта"></div>
                        <div><textarea name="" id="" cols="22" rows="6" placeholder="Запрос"></textarea></div>
                        <div>
                            <button type="submit"
                                    style="background-color: #d9251d;border-radius: 25px;padding:10px 20px; border: none">
                                ОТПРАВИТЬ ЗАКАЗ
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="tab_panel row">
                <?php require('tab-panel.php'); ?>
            </div>

        </div>
    </div>

<?php require('footer.php'); ?>