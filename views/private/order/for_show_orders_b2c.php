<form action="<?= base_url('order/order_process')?>" method="get" >
    <input type="submit" name="submit" value="Process Order"/>
    <?php foreach($orders as $item) :?>
        <div class="row well">
            <a class="customerPage" href="<?= base_url('customer/customer_info') ?>" data-id="<?= $item['orderId'] ?>">Order:# <?= $item['orderId'] ?> </a>
            <input type="checkbox" name="order_id[]" value="<?= $item['orderId'] ?>"/>
            <span>Order Number: #<?= $item['orderId'] ?></span>
        </div>
    <?php endforeach; ?>
</form>