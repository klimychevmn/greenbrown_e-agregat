const SCREEN_WIDTH = 767;
const TRIANGLE_UP = '&#9650;';
const TRIANGLE_DOWN = '&#9660;';


if (document.documentElement.clientWidth > SCREEN_WIDTH) {
    $('#catalog_main .triangle').addClass('hidden');
    $('#catalog_for_item .triangle').addClass('hidden');
} else {
    if($('#catalog_main li .active')){
        $('.tab-content').insertAfter($('#catalog_main .active a'));
    }
    $('#catalog_for_item li').addClass('hidden');
    if($('#catalog_for_item li .active')){
        $('#catalog_for_item .active').removeClass('hidden');
    }

    $('.my_jumbotron > h2').parent().insertBefore($('#itemCarousel'));
    $('.item_price').insertAfter($('.g_chrter'));
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

$('.panel-default > a').click(collapse_click);
