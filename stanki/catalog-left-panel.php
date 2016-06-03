<?php require('catalog-array.php');?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> <!-- List group -->

    <?php $i = 0;?>
    <?php foreach ($result as $value):?>
        <?php $i++;?>
        <div class="panel panel-default">
            <!-- TITLE -->
                <div class="panel-heading" >
                    <span><?php echo $value["title"];?></span>
                </div>
            <!--END TITLE -->
                <!-- BODY -->
                <div class="panel-body">
                    <?php foreach ($value["items"] as $item):?>
                        <div class="offer-item">
                            <a href="item.php"><span class="model"><?php echo $item["name"];?></span></a>&nbsp;&nbsp;<span><?php echo $item["description"];?></span>
                        </div>
                    <?php endforeach;?>
                </div>
            <!-- END BODY -->
        </div>
    <?php endforeach;?>


</div><!-- End of list group -->