<!--End Step 1-->
<div class="row">
    <div id="orderStep2">
        <?php foreach($this->session->order['order_id'] as $item): ?>
            <div class="orders">
                <span> <?= $item ?> </span>
                <a href="#" data-id="<?= $item ?>" class="pull-right openBox">USPS shopping $</a>
                <div class="boxOptions">

                    <!-- BEGIN BOX ADD DELETE -->

                    <div class="row well">
                        <span class="pull-left">1</span>
                        <div class="clearfix"></div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6 pull-right">
                            <h2>Box Configuration</h2>
                            <button type="button" class="btn btn-success pull-right">Add Box</button>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12 boxForOrder">
                                    DEFAULT Selected BOX
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END BOX ADD DELETE -->

                    <!-- BEGIN SHIPMENT INFO and SHIP TO -->

                    <div class="row well">

                        <span class="pull-left">2</span>
                        <div class="clearfix"></div>

                        <!-- Begin shipment form -->
                        <div class="col-md-6">
                            <?php $this->load->view('admin/templates/order/shipment_form');?>
                        </div>
                        <!-- End shipment form -->

                        <!-- Begin Ship To info -->
                        <div class="col-md-6">
                            <div class="orderShipTo"></div>
                            <div class="calculate"><p>CALCULATE</p></div>
                        </div>
                        <!-- End Ship To info -->

                    </div>

                    <!-- END SHIPMENT INFO and SHIP TO -->
                </div>
            </div>
            <div class="clearfix"></div>
        <?php endforeach; ?>
    </div>
</div>