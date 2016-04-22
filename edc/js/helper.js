const SCREEN_WIDTH = 767;
const PLUS = '+';
const MINUS = '-';

function resize() {
    if(document.documentElement.clientWidth < SCREEN_WIDTH) {
        $('#catalog').insertAfter($('#content'));
    } else {
        $('#content').insertAfter($('#catalog'));
    }
}
if(document.documentElement.clientWidth < SCREEN_WIDTH) {resize();}
window.onresize = resize;

function collapseCatalogItem(e) {
    e = e || window.event;
    console.log(e.target);
    $target = (e.target.nodeName == "SPAN")
        ? $(e.target.parentNode)
        : $(e.target);

    if ($target.hasClass('active')) {
        $target.removeClass('active');
        $target.find('span.cursor').html(PLUS);
        $target.parent().find('div.catalog-content').addClass('hidden');
        e.preventDefault();
    } else {
        $target.addClass('active');
        $target.find('span.cursor').html(MINUS);
        $target.parent().find('div.catalog-content').removeClass('hidden');
        e.preventDefault();
    }
}

function collapse_item_panel_group(e) {
    e = e || window.event;

    $target = (e.target.nodeName == "SPAN")
        ? $(e.target.parentNode)
        : $(e.target);

    if ($target.hasClass('active')) {
        $('.panel-heading').removeClass('active');
        $('.panel-heading > span.cursor').html(PLUS);
        e.preventDefault();
    } else {
        $('.panel-heading').removeClass('active');
        $('.panel-heading > span.cursor').html(PLUS);
        $target.find('span.cursor').html(MINUS);
        $target.addClass('active');
        e.preventDefault();
    }
}

$('.catalog-title').click(collapseCatalogItem);
$('.panel-default > a').click(collapse_item_panel_group);