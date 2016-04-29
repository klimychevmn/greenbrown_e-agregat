    $("#form").submit(function() { 
            var form_data = $(this).serialize(); 
                $.ajax({
                    type: "POST",
                    url: "formsender.php",
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




function scrolling(href) {
    href = typeof(href) == "string" ? href : $(this).attr("href");

    var fromTop = $('.navbar').height();

    if(href.indexOf("#") == 0) {
        var $target = $(href);

        if($target.length) {
            $('html, body').animate({ scrollTop: $target.offset().top - fromTop });
            if(history && "pushState" in history) {
                history.pushState({}, document.title, window.location.pathname + href);
                return false;
            }
        }
    }
}

scrolling(window.location.hash);
$("body").on("click", ".navbar li a", scrolling);