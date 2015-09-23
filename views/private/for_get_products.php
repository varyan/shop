<ul class="list-group well well-sm">
    <?php if($productList !== false) : ?>
        <?php foreach($productList as $list) {?>
            <li class="list-group-item" data-companyId="<?php echo $list['productId']?>">
                <div class="row">
                    <form class="form-inline form" method="POST" action="" >
                        <div class="form-group com-md-4">
                            <?php echo $list['productName']?>
                            <input name="id" type="text" value="<?php echo $list['productId'] ?>" style="display: none" />
                            <input name="productName" type="text" value="<?php echo $list['productName'] ?>" style="display: none" />
                        </div>
                        <div class="form-group pull-right col-md-1">
                            <button id="chooseItem" type="submit" name="chooseItem" class=""><i class="glyphicon glyphicon-plus-sign text-success"></i></button>
                        </div>
                        <div class="form-group pull-right col-md-2">
                            <label for="QtyInput">Qty</label>
                            <input class="form-control input-sm" id="QtyInput" type="text" value="<?= 1 /*$list['qty']*/ ?>" name="qty" />
                        </div>
                        <div class="form-group pull-right col-md-2">
                            <label>
                                Taxable: <input type="checkbox" class="checkbox" name="taxable" value="1"/>
                            </label>
                        </div>
                        <div class="form-group pull-right">
                            <label for="priceInput">Price $</label>
                            <input class="form-control input-sm" id="priceInput" type="text" value="<?= $list['productPrice'] ?>" name="price" />
                        </div>
                    </form>
                </div>
            </li>
        <?php } ?>
    <?php endif; ?>
</ul>