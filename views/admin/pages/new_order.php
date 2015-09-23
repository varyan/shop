<!-- --------------END HEAD TAG -------------- -->

<div class="container">
    <header>
        <div class="row">
            <div class="col-md-3">
                <a class="btn btn-default" href="<?= base_url('index')?>" role="button">Cancel</a>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- -------------- BEGIN SOME TEXT FOR CHOOSING THE COMPANY -------------- -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="text-center">Which Company is this order for </h2>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center">When you type a company name we will find the company if it already exists or create a new one if it doesn't</p>
            </div>
        </div>
        <!-- -------------- END SOME TEXT FOR CHOOSING THE COMPANY -------------- -->
    </header>

    <!-- -------------- BEGIN INPUT COMPANIE NAME -------------- -->
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="row">
                <div class="col-md-10">
                    <input id="chooseCompany" type="text" class="form-control" />
                </div>
                <div class="col-md-2">
                    <img id="waiting" class="img-responsive" src="<?= base_url('assets/images/ajax-loader.gif') ?>" alt="Loading..."/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- -------------- END INPUT COMPANIE NAME -------------- -->


    <!-- -------------- BEGIN SHOW COMPANIES -------------- -->
    <div class="row">
        <div id="companies" class="col-md-4 col-md-offset-4">
            
        </div>
    </div>
    <!-- -------------- END SHOW COMPANIES -------------- -->
</div>
    <!-- -------------- END CONTAINER-------------- -->
<script type="text/javascript" src="<?php echo base_url('assets/js/ajax.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/customer/customerPage.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/scripts.js')?>"></script>