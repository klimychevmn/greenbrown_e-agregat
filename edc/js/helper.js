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

$('.catalog-title').click(collapseCatalogItem);