<div class="row">
    <div class="col-md-3">
        <img src="<?= base_url('assets/images/product images/noimage.png') ?>" class="img-responsive" alt="No Image"/>
    </div>
    <div class="col-md-8">
        <div class="row">
            <button class="btn btn-success pull-right" form="add-product">Save</button>
        </div>
        <div class="row">
            <!-- tabs left -->
            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#a" data-toggle="tab" >Attributes</a></li>
                    <li><a href="#b" data-toggle="tab">Images</a></li>
                    <li><a href="#c" data-toggle="tab">Price Levels</a></li>
                    <li><a href="#d" data-toggle="tab">Categories</a></li>
                </ul>
                <form action="" name="add_image" id="add_image" enctype="multipart/form-data" method="post"></form>
                <form action="" method="post" name="add_product" id="add-product" class="form-horizontal" >
                    <div class="tab-content">
                        <?php $this->load->view('admin/templates/products/item/a'); ?>
                        <?php $this->load->view('admin/templates/products/item/b'); ?>
                        <?php $this->load->view('admin/templates/products/item/c'); ?>
                        <?php $this->load->view('admin/templates/products/item/d'); ?>
                    </div>
                </form>
            </div>
            <!-- /tabs -->
        </div>
    </div>
</div>