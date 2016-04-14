<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> <!-- List group -->

    <!-- Start -->
    <div class="panel panel-default">
        <!-- TITLE -->
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
            aria-expanded="false" aria-controls="collapseOne">
            <div class="panel-heading" role="tab" id="headingOne">
                МОЛОТ КОВОЧНЫЙ ПНЕВМАТИЧЕСКИЙ
                <span class="pull-right triangle">&#9660;</span>
            </div>
        </a>
        <!--END TITLE -->
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <!-- BODY -->
            <div class="panel-body">
                <div class="offer-item">ТЕКСТ</div>
                <div class="offer-item">TEXT</div>
            </div>
        </div>
        <!-- END BODY -->
    </div>
    <!-- End -->

    <!-- Start -->
    <div class="panel panel-default">
        <!-- TITLE -->
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
           aria-expanded="false" aria-controls="collapseTwo">
            <div class="panel-heading" role="tab" id="headingTwo">
                ПРЕСС-НОЖНИЦЫ КОМБИНИРОВАННЫЕ
                <span class="pull-right triangle">&#9660;</span>
            </div>
        </a>
        <!--END TITLE -->
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <!-- BODY -->
            <div class="panel-body">
                <div class="offer-item">
                    <a>
                        <span>СМЖ652 </span> Для резки круга, уголка, полосы, швуллера,
                        пробивки отверстий
                    </a>
                </div>
                <div class="offer-item">
                    <a>
                        <span>HB5221 </span> Для резки круга, уголка, полосы, швуллера,
                        пробивки отверстий
                    </a>
                </div>
                <div class="offer-item">
                    <a>
                        <span>HB5222 </span> Для резки круга, уголка, полосы, швуллера,
                        пробивки отверстий
                    </a>
                </div>
                <div class="offer-item">
                    <a>
                        <span>HB5223 </span> Для резки круга, уголка, полосы, швуллера,
                        пробивки отверстий
                    </a>
                </div>
                <div class="offer-item">
                    <a>
                        <span>HB5224 </span> Для резки круга, уголка, полосы, швуллера,
                        пробивки отверстий
                    </a>
                </div>
            </div>
        </div>
        <!-- END BODY -->
    </div>
    <!-- End -->

    <!-- Start -->
    <div class="panel panel-default">
        <!-- TITLE -->
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
           aria-expanded="false" aria-controls="collapseThree">
            <div class="panel-heading" role="tab" id="headingThree">
                МАШИНА ТРУБОГИБОЧНАЯ ДОРНАЯ
                <span class="pull-right triangle">&#9660;</span>
            </div>
        </a>
        <!--END TITLE -->
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <!-- BODY -->
            <div class="panel-body">
                <div class="offer-item">ТЕКСТ</div>
                <div class="offer-item">TEXT</div>
            </div>
        </div>
        <!-- END BODY -->
    </div>
    <!-- End -->

    <!-- Start -->
    <div class="panel panel-default">
        <!-- TITLE -->
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
           aria-expanded="false" aria-controls="collapseFour">
            <div class="panel-heading" role="tab" id="headingFour">
                МАШИНА ЛИСТОГИБОЧНАЯ ТРЁХВАЛКОВАЯ
                <span class="pull-right triangle">&#9660;</span>
            </div>
        </a>
        <!--END TITLE -->
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <!-- BODY -->
            <div class="panel-body">
                <div class="offer-item">ТЕКСТ</div>
                <div class="offer-item">TEXT</div>
            </div>
        </div>
        <!-- END BODY -->
    </div>
    <!-- End -->

    <!-- Start -->
    <div class="panel panel-default">
        <!-- TITLE -->
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
           aria-expanded="false" aria-controls="collapseFive">
            <div class="panel-heading" role="tab" id="headingFive">
                НОЖНИЦЫ ГИЛЬОТИННЫЕ ПНЕВМАТИЧЕСКИЕ
                <span class="pull-right triangle">&#9660;</span>
            </div>
        </a>
        <!--END TITLE -->
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <!-- BODY -->
            <div class="panel-body">
                <div class="offer-item">ТЕКСТ</div>
                <div class="offer-item">TEXT</div>
            </div>
        </div>
        <!-- END BODY -->
    </div>
    <!-- End -->


</div><!-- End of list group -->

<script>
    function collapse_click(e) {
        e = e || window.event;

        if ($(e.target).hasClass('active')) {
            $(e.target).removeClass('active');
            $('.panel-heading > span').html(TRIANGLE_UP);
            e.preventDefault();
        } else {
            $('.panel-heading').removeClass('active');
            $('.panel-heading > span').html(TRIANGLE_UP);
            $(e.target.children).html(TRIANGLE_DOWN);
            $(e.target).addClass('active');
            e.preventDefault();
        }
    }

    $('.panel-default > a').click(collapse_click);
</script>