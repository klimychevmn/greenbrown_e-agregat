<?php require('catalog-array.php');?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> <!-- List group -->

    <?php $i = 0;?>
    <?php foreach ($result as $value):?>
        <?php $i++;?>
        <div class="panel panel-default">
            <!-- TITLE -->
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>"
               aria-expanded="false" aria-controls="collapse<?php echo $i;?>">
                <div class="panel-heading" role="tab" id="heading<?php echo $i;?>">
                    <span><?php echo $value["title"];?></span>
                    <span class="pull-right triangle">&#9660;</span>
                </div>
            </a>
            <!--END TITLE -->
            <div id="collapse<?php echo $i;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i;?>">
                <!-- BODY -->
                <div class="panel-body">
                    <?php foreach ($value["items"] as $item):?>
                        <div class="offer-item"><a href="item.php"><span><?php echo $item["name"];?></span>&nbsp;<?php echo $item["description"];?></a></div>
                    <?php endforeach;?>
                </div>
            </div>
            <!-- END BODY -->
        </div>
    <?php endforeach;?>


</div><!-- End of list group -->