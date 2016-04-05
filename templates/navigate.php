<!-- NAVBAR
================================================== -->
<body>
<div id="wrapper">
    <div class="navbar-wrapper">
        <div class="container">
            <div style="position:absolute;margin-top:-40px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div style="font-size: 140%; float: left; margin-right: 15px; margin-top:-10px;text-align: center;">Компания<br>"Электроагрегат" </div>
                        <span style="font-size: 140%;">Пишите: p-d-s@bk.ru, 2473dea@gmail.com</span>
                        <span style="font-size: 140%;display: table; margin: 0 15px;float: left;">Звоните: +7 (4852) 98-99-95, 8-903-827-24-73, 8-920-101-17-87</span>
                </div>
            </div>
            <div class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="" rel="nofollow">Главная</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" rel="nofollow" class="dropdown-toggle" data-toggle="dropdown">Каталог <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a  href="/catalog/dizel/" rel="nofollow">Дизельные электростанции</a>
                                    <li>
                                        <a  href="/catalog/gazoporshnevie/" rel="nofollow">Газопоршневые электростанции</a>
                                    <li>
                                        <a  href="/catalog/sudovye_electrostanciy/" rel="nofollow">Судовые электростанции</a>
                                    <li>
                                        <a  href="/catalog/powerunits/" rel="nofollow">Силовые и насосные установки</a>
                                    <li>
                                        <a  href="/catalog/ispolneniy/" rel="nofollow">Исполнения</a>
                                    <li>
                                        <a  href="/catalog/zapasnie_chasti/" rel="nofollow">Запасные части</a>
                                </ul>



                            <li class="dropdown">
                                <a href="#" rel="nofollow" class="dropdown-toggle" data-toggle="dropdown">Прайсы <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a  href="/price/pricedgu/" rel="nofollow">Прайс-лист ДГУ</a>
                                    <li>
                                        <a  href="/price/price_egp/" rel="nofollow">Прайс лист ЭГП</a>
                                    <li>
                                        <a  href="/price/ymz_price/" rel="nofollow">Прайс лист ЯМЗ</a>
                                    <li>
                                        <a  href="/price/dvigateli_ymz/" rel="nofollow">Двигатели производства ЯМЗ</a>
                                </ul>

                            <li class="dropdown">
                                <a href="#" rel="nofollow" class="dropdown-toggle" data-toggle="dropdown">Контакты <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a  href="/contact/" rel="nofollow">Контакты</a>
                                    <li>
                                        <a  href="/contact/question/" rel="nofollow">Задать вопрос</a>
                                </ul>

                            <li><a data-toggle="modal" href="#modContact" rel="nofollow">Задать вопрос</a></li>
                            <!--<li><a class="pop" data-content="+7(4852)98-99-95<br> 8-903-827-24-73 8-920-101-17-87" data-placement="bottom" data-toggle="popover" data-container="body">Телефоны</a></li>-->
                            <li>
                                <a  href="/indoor/sklad/" rel="nofollow"><div class="btn catalogBtn">Остатки на складе</div></a>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Задать вопрос</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" action="/contact/question/?" method="post">
                        <input type="hidden" value="post" name="action">
                        <input type="hidden" value="9" name="id">
                        <input type="hidden" value="1:2:3:5" name="ids">
                        <div class="form-group">
                            <label for="form_fields1" class="col-lg-4 control-label">Ваши Ф.И.О.</label>
                            <div class="col-lg-8">
                                <input id="form_fields1" class="form-control" type="text" value="" name="form_fields1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_fields2" class="col-lg-4 control-label">Номер телефона:</label>
                            <div class="col-lg-8">
                                <input id="form_fields2" class="form-control" type="text" value="" name="form_fields2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_fields3" class="col-lg-4 control-label">E-mail:</label>
                            <div class="col-lg-8">
                                <input id="form_fields3" class="form-control" type="text" value="" name="form_fields3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_fields5" class="col-lg-4 control-label">Текст сообщения:</label>
                            <div class="col-lg-8">
                                <textarea id="form_fields5" class="form-control" name="form_fields5" rows="3"></textarea>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <button type="button" class="submitForm btn btn-primary">Отправить</button>
                </div>
                </form>
                <script src="js/forms.js" type="text/javascript"></script>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
