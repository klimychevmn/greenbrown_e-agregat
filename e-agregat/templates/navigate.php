<!-- NAVBAR
================================================== -->
<body>
<div id="wrapper">
    <div class="navbar-wrapper">
        <div class="container" >
            <div style="position:absolute;margin-top:-70px;margin-left: 2%" class="row row_navbar">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <a href="main.php"><img src="../img/logo.gif" alt="Электрогрегат"></a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <img src="../img/header/message.gif" alt="Сообщение">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-content">
                    <span>p-d-s@bk.ru,<br> 2473dea@gmail.com</span>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <img src="../img/header/phone.jpg" alt="Телефон">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-content">
                    <span>Обращайтесь по всем вопросам: <br> +7 (4852) 98-99-95, 8-903-827-24-73, 8-920-101-17-87</span>
                </div>
            </div>
            <div class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header navmobile">
                        <div style="float: left; margin-left: -35%">
                            <a href="main.php" ><img src="../img/logo.gif" alt="Электрогрегат"></a>
                        </div>
                        <div style="float: right">

                            <button type="button" class="navbarBtn_mob navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="float: right">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#" style="float: right"><img src="../img/header.mobile/phone_mob.jpg" alt="Телефон" class="navbarBtn_mob"></a>
                            <a href="#" style="float: right"><img src="../img/header.mobile/message_mob.jpg" alt="Сообщение" class="navbar_img navbarBtn_mob"></a>
                        </div>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="main.php" rel="nofollow">ГЛАВНАЯ</a>
                            </li>
                            <li class="dropdown">
                                <a href="catalog.php">КАТАЛОГ </a>
                            </li>

                            <li>
                                <a href="#" rel="nofollow" class="dropdown-toggle" data-toggle="dropdown">ПРАЙСЫ</a>
                            </li>

                            <li>
                                <a href="#" rel="nofollow" class="dropdown-toggle" data-toggle="dropdown">КОНТАКТЫ</a>
                            </li>

                            <li>
                                <a data-toggle="modal" href="#modContact" rel="nofollow">ЗАДАТЬ ВОПРОС</a>
                            </li>
                            <!--<li><a class="pop" data-content="+7(4852)98-99-95<br> 8-903-827-24-73 8-920-101-17-87" data-placement="bottom" data-toggle="popover" data-container="body">Телефоны</a></li>-->
                            <li>
                                <a href="/indoor/sklad/" rel="nofollow" style="margin-top: -5%">
                                    <div class="btn catalogBtn_nav">ОСТАТКИ НА СКЛАДЕ</div>
                                </a>
                            <li
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
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
                                <textarea id="form_fields5" class="form-control" name="form_fields5"
                                          rows="3"></textarea>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <button type="button" class="submitForm btn btn-primary">Отправить</button>
                </div>
                </form>
                <script src="../js/forms.js" type="text/javascript"></script>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
