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