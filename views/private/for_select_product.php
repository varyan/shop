<li class="list-group-item" data-companyId="<?php echo $product['id']?>">
    <div class="row">
        <button type="button"  data-productRowId="<?= $this->session->row_id ?>" name="deleteProduct" class="deleteProduct">
            <i class="glyphicon glyphicon-remove text-warning"></i>
        </button>
        <form class="form-inline form" method="POST" action="">
            <div class="form-group com-md-4">
                <?php echo $product['productName']?>
            </div>
            <div class="form-group pull-right col-md-1">
                <button id="chooseItem1" type="submit" name="chooseItem1" class="">Edit</button>
            </div>
            <div class="form-group pull-right col-md-1">
                $ <?= $product['price'] ?>
            </div>
            <div class="form-group pull-right col-md-2">
                <label for="QtyInput1">Qty</label>
                <input class="form-control input-sm" id="QtyInput1" type="text" value="<?= 1/*$product['qty']*/ ?>" name="qty" />
            </div>
            <div class="form-group pull-right">
                Unit Price $: <?= $product['price'] ?>
            </div>
        </form>
    </div>
</li>

