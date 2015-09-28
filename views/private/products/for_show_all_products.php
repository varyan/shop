<p>Here must be shown all products</p>
<div class="row">
    <button class="btn btn-success pull-right" type="button" id="addProduct">Add Product</button>
    <div class="clearfix"></div>
</div>

<?php if($products):?>
    <?php foreach($products as $item):?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-left">
                <a href='#' data-id="<?= $item['productId'] ?>"><?= $item['productName'] ?></a>
            </div>
            <div class="col-md-2 text-left">
                <p> Price $<?= $item['productPrice'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
