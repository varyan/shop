<div id="orders" class="tab-pane fade">
    <div class="row">
        <div class="col-md-1">
            <a class="btn btn-success" data-companyId="<?=$contactInfo[0]['companyId'] ?>" href="#">Add Order</a>
        </div>
    </div>
    <form action="<?= base_url('order/order_process')?>" method="get" >
        <input type="submit" name="submit" value="Process Order" class="btn btn-success"/>
    <?php foreach($orderInfo as $item):?>
        <div class="col-md-6 text-left">
            <div class="row well">
                <a class="customerPage" href="<?= base_url('customer/customer_info') ?>" data-id="<?= $item['orderId'] ?>">Order:# <?= $item['orderId'] ?> </a>
                <input type="checkbox" name="order_id[]" value="<?= $item['orderId'] ?>"/>
                <span>Order Number: #<?= $item['orderId'] ?></span>
            </div>
            <?php
            echo "<pre>";
            print_r($item);
            echo "</pre>";
            ?>
        </div>
    <?php endforeach; ?>
    </form>
</div>