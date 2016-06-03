const SCREEN_WIDTH = 767;
const TRIANGLE_UP = '&#9650;';
const TRIANGLE_DOWN = '&#9660;';


function resize() {
    if(document.documentElement.clientWidth < SCREEN_WIDTH) {
        $('#top').removeClass('navbar-fixed-top');

        $('.item-param-title span').removeClass('hidden');
        $('.item-param-content').addClass('hidden');

        $('.item-param-title').click(collapseParam);

    } else {
        $('#top').addClass('navbar-fixed-top');

        $('.item-param-title span').addClass('hidden');
        $('.item-param-content').removeClass('hidden');
    
    }
}
if(document.documentElement.clientWidth < SCREEN_WIDTH) {resize();}
window.onresize = resize;


if (document.documentElement.clientWidth < SCREEN_WIDTH) {
    /*footer*/
    $('.foot img').parent().insertBefore($('.foot .wrapper span').first());
    $('.foot .wrapper span').removeClass('text-right');
    /* карусель перемещаем выше */
    $('.carousel').insertBefore($('.item-title'));
} else {
    $('#tab_panel .triangle').addClass('hidden');
    $('#tab_panel>li').first().addClass('active');
    $('#kpo').addClass('active');
}

$('.panel-default > a').click(collapse_click);
$("#tab_panel > li > a").click(init);
$('.offer-item').click(catalogClick);   


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

function collapseParam(e) {
    e = e || window.event;
    $target = (e.target.nodeName == "SPAN")
        ? $(e.target.parentNode)
        : $(e.target);

    if ($target.hasClass('active')) {
        $target.removeClass('active');
        $target.find('span.triangle').html(TRIANGLE_DOWN);
        $('.item-param-content').addClass('hidden');
        e.preventDefault();
    } else {
        $target.addClass('active');
        $target.find('span.triangle').html(TRIANGLE_UP);
        $('.item-param-content').removeClass('hidden');
        e.preventDefault();
    }
}

function catalogClick(){
    // console.log(this);
    var href = $(this).find('a').attr('href');
    if(href){
        window.location.href = href;
    } else {
        alert("Извините, но переход невозможен, так как отсутствует ссылка на товар.");
    }
}