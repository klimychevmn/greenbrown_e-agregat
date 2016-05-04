$("#form").submit(function() { 
    var form_data = $(this).serialize(); 
        $.ajax({
            type: "POST",
            url: "sendformsinfo.php",
            data: form_data,
            success: function() {
                $('#form')[0].reset();
                $('#myModalBox .modal-body').html("Ваше сообщение отправлено!");
                $("#myModalBox").modal('show');
            },
            error: function(){
                $('#form')[0].reset();
                $('#myModalBox .modal-body').html("Возникла ошибка при отправке.<br> Попробуйте еще раз!");
                $("#myModalBox").modal('show');}    
            });
    return false;
});


function fake_alert(){
    alert("Извините, но я пока не могу дать Вам, то, что Вы просите! Sorry! :(");
    return false;
}

//$('.item .price a').click(fake_alert);
