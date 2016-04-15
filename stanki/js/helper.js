const SCREEN_WIDTH = 767;
const TRIANGLE_UP = '&#9650;';
const TRIANGLE_DOWN = '&#9660;';


    if (document.documentElement.clientWidth < SCREEN_WIDTH) {
        $('.under_tab-panel_text').insertBefore($('#tab_panel').parent());
        $('.foot img').parent().insertBefore($('.foot .wrapper span').first());
        $('.foot .wrapper span').removeClass('text-right');

        $('.item-param-title span').removeClass('hidden');
        $('.carousel').insertBefore($('.item-title'));
        $('.item-param-content').addClass('hidden');

        function collapseParam(e) {
            e = e || window.event;
            if ($(e.target).hasClass('active')) {
                $(e.target).removeClass('active');
                $(e.target.children).html(TRIANGLE_DOWN);
                $('.item-param-content').addClass('hidden');
                e.preventDefault();
            } else {
                $(e.target).addClass('active');
                $(e.target.children).html(TRIANGLE_UP);
                $('.item-param-content').removeClass('hidden');
                e.preventDefault();
            }
        }

        $('.item-param-title').click(collapseParam);

    } else {
        $('#tab_panel .triangle').addClass('hidden');
        $('#tab_panel>li').first().addClass('active');
        $('#kpo').addClass('active');

    }

    $('.panel-default > a').click(collapse_click);
    $("#tab_panel > li > a").click(init);
    


function init(e) {
    e = e || window.event;

    if (document.documentElement.clientWidth < SCREEN_WIDTH) {
        if ($(e.target.parentNode).hasClass('active')) {
            $(e.target.parentNode).removeClass('active');
            $(e.target.children).html(TRIANGLE_DOWN);
            $($(e.target).attr('href')).removeClass('active');
            return false;
        }
    }

    $('.triangle').html(TRIANGLE_DOWN);
    $('#tab_panel > li').removeClass('active');
    $(e.target.parentNode).addClass('active');

    $('.tab-content .tab-pane').removeClass('active');
    $($(e.target).attr('href')).addClass('active');

    if (document.documentElement.clientWidth < SCREEN_WIDTH) {
        if ($(e.target.parentNode).hasClass('active')) {
            $(e.target.children).html(TRIANGLE_UP);
        }
        if ($('#tab_panel > .active')) {
            $('.tab-content').insertAfter($('#tab_panel > .active > a'));
        }
    }
    e.preventDefault();

}

function collapse_click(e) {
    e = e || window.event;

    $target = (e.target.nodeName == "SPAN")
        ? $(e.target.parentNode)
        : $(e.target);

    if ($target.hasClass('active')) {
        $('.panel-heading').removeClass('active');
        $('.panel-heading > span.triangle').html(TRIANGLE_DOWN);
        e.preventDefault();
    } else {
        $('.panel-heading').removeClass('active');
        $('.panel-heading > span.triangle').html(TRIANGLE_DOWN);
        $target.find('span.triangle').html(TRIANGLE_UP);
        $target.addClass('active');
        e.preventDefault();
    }
}
