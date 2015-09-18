<div id="step2" class="row">
    <h1 class="text-center">Company & Order Info</h1>
    <div class="col-md-12">
        <div id="processing">
            <!-- PRINT SOME INFO ABOUT PROCESSING FORM-->
        </div>
        <form class="form-horizontal" id="shopInfo" action="<?= base_url('dashboard/createOrder') ?>" method="post">
            <ul class="list-group">
                <!--BEGIN Company and Order fieldset-->
                <?php $this->load->view('admin/templates/company_and_order'); ?>
                <!--End Company and Order fieldset-->

                <!--BEGIN Ship To fieldset-->
                <?php $this->load->view('admin/templates/ship_to'); ?>
                <!--End Ship To fieldset-->

                <!--BEGIN Bill To fieldset-->
                <?php $this->load->view('admin/templates/bill_to'); ?>
                <!--End Bill To fieldset-->

                <!--BEGIN Shipping and Billing Detalis fieldset-->
                <?php $this->load->view('admin/templates/shipping_and_billing'); ?>
                <!--End Shipping and Billing Detalis fieldset-->

                <!--BEGIN Payment Info fieldset-->
                <?php $this->load->view('admin/templates/payments'); ?>
                <!--End Payment Info fieldset-->

                <!--BEGIN Additional Info fieldset-->
                <?php $this->load->view('admin/templates/additional'); ?>
                <!--End Additional Info fieldset-->
            </ul>
        </form>
    </div>
</div>