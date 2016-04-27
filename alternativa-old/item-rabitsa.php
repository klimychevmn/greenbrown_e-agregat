<?php require("header.php");?>
<?php require("navigator.php");?>

<div class="container">
    <div class="item-rabitsa">
        <h3 class="text-center">Сетка рабица</h3>

        <div id="itemCarousel" class="carousel slide">

            <ol class="carousel-indicators">
                <li data-target="#mCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mCarousel" data-slide-to="1"></li>
                <li data-target="#mCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/rabitsa/Рабица%20(ОЦ)20140708_104631.jpg"  alt="First slide">
                </div>
                <div class="item">
                    <img src="img/rabitsa/Рабица%20(ПНД)20150422_082040.jpg"  alt="Second slide">
                </div>
                <div class="item">
                    <img src="img/rabitsa/Рабица%20ОЦ%20(1,2х10м)20140708_104828.jpg"  alt="Second slide">
                </div>
            </div>
            <a class="left carousel-control" href="#itemCarousel" data-slide="prev"><span
                    class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#itemCarousel" data-slide="next"><span
                    class="glyphicon glyphicon-chevron-right"></span></a>
            <div class="clear"></div>
        </div>

    </div>
</div>



<?php require("footer.php");?>

