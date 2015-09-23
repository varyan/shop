<!-- -------------- END HEADER LAYOUT -------------- -->

<div class="container">
    <header>
        <div class="row">
            <div class="col-md-3">
                <button id="orderBack" class="btn btn-default" type="button">Back</button>
                <a class="btn btn-default" href="<?= base_url('index') ?>" role="button" id="orderCancel">Cancel</a>
            </div>
            <div class="col-md-3 pull-right">
                <button id="orderNext" class="btn btn-success pull-right" type="button">Next</button>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- -------------- BEGIN SOME TEXT FOR CHOOSING THE COMPANY -------------- -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="text-center"> PROCESSING </h2>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center">
                    Some other info
                </p>
            </div>
        </div>
        <!-- -------------- END SOME TEXT FOR CHOOSING THE COMPANY -------------- -->
    </header>

    <!-- -------------- BEGIN STEPS -------------- -->

    <?php $this->load->view('admin/templates/order/order_step1') ?>

    <?php $this->load->view('admin/templates/order/order_step2') ?>

    <?php $this->load->view('admin/templates/order/order_step3') ?>

    <?php $this->load->view('admin/templates/order/order_step4') ?>

    <?php $this->load->view('admin/templates/order/order_step5') ?>

    <!-- -------------- END STEPS -------------- -->

</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/order/orderPageScripts.js')?>"></script>
