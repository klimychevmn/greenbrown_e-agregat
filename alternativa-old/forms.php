<?php require("header.php"); ?>
<?php require("navigator.php"); ?>

<div class="container">
    <div class="forms">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">ФИО</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="ФИО" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">e-mail</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="e-mail" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Телефон" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Комментарий</label>
                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Password" disabled></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" disabled>Отправить</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php require("footer.php"); ?>

