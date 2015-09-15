<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 15.09.2015
 * Time: 13:49
 */
?>

<ul class="list-group well well-sm">
    <?php if($productList !== false) : ?>
    <?php foreach($productList as $list) {?>
        <li class="list-group-item" data-companyId="<?php echo $list['id']?>">
            <div class="row">
                <form class="form-inline form" method="POST">
                    <div class="form-group com-md-4">
                        <?php echo $list['productName']?>
                    </div>
                    <div class="form-group pull-right col-md-1">
                        <button id="chooseItem" type="submit" name="chooseItem" class=""><i class="glyphicon glyphicon-plus-sign text-success"></i></button>
                    </div>
                    <div class="form-group pull-right col-md-2">
                        <label for="QtyInput">Qty</label>
                        <input class="form-control input-sm" id="QtyInput" type="text" value="<?= $list['price'] ?>" name="qty" />
                    </div>
                    <div class="form-group pull-right col-md-2">
                        <label>
                            Taxable: <input type="checkbox" class="checkbox" name="Taxable" value="1"/>
                        </label>
                    </div>
                    <div class="form-group pull-right">
                        <label for="priceInput">Price $</label>
                        <input class="form-control input-sm" id="priceInput" type="text" value="<?= $list['price'] ?>" name="price" />
                    </div>
                </form>
            </div>
        </li>
    <?php } ?>
    <?php endif; ?>
</ul>