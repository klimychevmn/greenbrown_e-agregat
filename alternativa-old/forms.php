<?php require("header.php"); ?>
<?php require("navigator.php"); ?>

<div class="my_container">
    <div class="forms">
        <form id="form" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">ФИО</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="ФИО" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Интересующий вопрос</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="comment" placeholder="Интересующий вопрос" required=""></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">e-mail</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="e-mail" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" placeholder="Телефон" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </div>
        </form>
        <div class="modal fade" id="myModalBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <!-- Заголовок модального окна -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title">Уведомление об отправлении информации</h4>
                        </div>
                    <!-- Основное содержимое модального окна -->
                        <div class="modal-body">
                            
                        </div>
                    <!-- Футер модального окна -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


<?php require("footer.php"); ?>

