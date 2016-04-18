const SCREEN_WIDTH = 767;
const TRIANGLE_UP = '&#9650;';
const TRIANGLE_DOWN = '&#9660;';


if (document.documentElement.clientWidth > SCREEN_WIDTH) {
    $('#menu .triangle').addClass('hidden');
    $('ul#menu>li').first().addClass('active');
    $('#diz_stan').addClass('active');
} else {
    $('.my_jumbotron > h2').parent().insertBefore($('.item_big'));
    $('.item_price').insertAfter($('.g_chrter'));
}

/* catalog.php */
function catalog_click(e) {
    e = e || window.event;

    if (document.documentElement.clientWidth < SCREEN_WIDTH) {
        if ($(e.target.parentNode).hasClass('active')) {
            $(e.target.parentNode).removeClass('active');
            $(e.target.children).html(TRIANGLE_DOWN);
            $($(e.target).attr('href')).removeClass('active');
            return false;
        }
    }

    $('#menu .triangle').html(TRIANGLE_DOWN);
    $('#menu > li').removeClass('active');
    $(e.target.parentNode).addClass('active');

    $('.tab-content .tab-pane').removeClass('active');
    $($(e.target).attr('href')).addClass('active');

    if (document.documentElement.clientWidth < SCREEN_WIDTH) {
        if ($(e.target.parentNode).hasClass('active')) {
            $(e.target.children).html(TRIANGLE_UP);
        }
        if ($('#menu > .active')) {
            $('.tab-content').insertAfter($('#menu > .active > a'));
        }
    }
    e.preventDefault();

}

/* item.php */
function collapse_click(e) {
    e = e || window.event;

    if ($(e.target).hasClass('active')) {
        $(e.target).removeClass('active');
        $('.panel-heading > span').html(TRIANGLE_DOWN);
        e.preventDefault();
    } else {
        $('.panel-heading').removeClass('active');
        $('.panel-heading > span').html(TRIANGLE_DOWN);
        $(e.target.children).html(TRIANGLE_UP);
        $(e.target).addClass('active');
        e.preventDefault();
    }

}

$("#menu > li > a").click(catalog_click);
$('.panel-default > a').click(collapse_click);
