<!--TAB-PANEL-HEAD-->
<div style="z-index: 2;">
    <ul id="tab_panel" class="nav nav-tabs nav-justified">
        <li><a href="#kpo">КУЗНЕЧНО-ПРЕССОВОЕ ОБОРУДОВАНИЕ<span class="pull-right triangle">&#9660;</span></a></li>
        <li><a href="#mro">МЕТАЛЛОРЕЖУЩЕЕ ОБОРУДОВАНИЕ<span class="pull-right triangle">&#9660;</span></a></li>
    </ul>
</div>
<!--TAB-PANEL-HEAD-END-->


<!--TAB-PANEL-CONTENT-->
<div class="tab-content" style="margin-top:5px;">
    
    <div class="tab-pane" id="kpo"> <!-- New Tab panel-->
        <div class="tab_content">
            <div class="row">
                <ul>
                    <li><strike>Станки настольно-сверливые</strike></li>
                    <li><strike>Станки ножовочные для отрезки круглого проката</strike></li>
                    <li><strike>Станки поперечно-строгальные</strike></li>
                    <li><strike>Станки для гибки, резки и правки круглого проката и арматуры</strike></li>
                    <li><strike>Станки абразивно-отрезные</strike></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="tab-pane" id="mro" > <!-- New Tab panel-->
        <div class="tab_content">
            <div class="row">
                <ul>
                    <li>Станки настольно-сверливые</li>
                    <li>Станки ножовочные для отрезки круглого проката</li>
                    <li>Станки поперечно-строгальные</li>
                    <li>Станки для гибки, резки и правки круглого проката и арматуры</li>
                    <li>Станки абразивно-отрезные</li>
                </ul>
            </div>
        </div>
    </div>

</div><!-- End of tab panel-->
<!--TAB-PANEL-CONTENT-END-->


<script>
    if(screen.width > '768'){
        $('.triangle').addClass('hidden')
    }


    function init(e) {
        e = e || window.event;

        if(screen.width <= ' 767') {
            if($(e.target.parentNode).hasClass('active')){
                $(e.target.parentNode).removeClass('active');
                $(e.target.children).html('&#9660;');
                $($(e.target).attr('href')).removeClass('active');
                return false;
            }
        }
        //console.log($(e.target));

        $('.triangle').html('&#9660;');
        $('#tab_panel > li').removeClass('active');
        $(e.target.parentNode).addClass('active');

        $('.tab-content .tab-pane').removeClass('active');
        $($(e.target).attr('href')).addClass('active');

        if (screen.width <= '767') {
            if($(e.target.parentNode).hasClass('active')){
                $(e.target.children).html('&#9650;');
            }
            if ($('#tab_panel > .active')) {
                $('.tab-content').insertAfter($('#tab_panel > .active > a'));
            }
        }
        e.preventDefault();

    }

    if (screen.width > '767') {
        $('.triangle').addClass('hidden');
        $('#tab_panel>li').first().addClass('active');
        $('#kpo').addClass('active');
    }


    $("#tab_panel > li > a").click(init);
</script>