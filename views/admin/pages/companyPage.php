<?php
/*$sess = ($this->session);
echo "<pre>";
print_r($this->cart->contents());
echo "</pre>";*/
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>"/>
</head>
<body>
<!-- --------------END HEAD TAG -------------- -->

<div class="container">
    <header>
        <div class="row">
            <div class="col-md-3">
                <button id="back" class="btn btn-default" type="button">Back</button>
                <a class="btn btn-default" href="<?= base_url('dashboard/cancel') ?>" role="button">Cancel</a>
            </div>
            <div class="col-md-3 pull-right">
                <button id="next" class="btn btn-success pull-right" type="button">Next</button>
                <button id="submit" type="submit" class="btn btn-success pull-right" form="shopInfo">Submit</button>
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

    <div id="steps">

        <!-- -------------- BEGIN STEP 1 -------------- -->
        <?php $this->load->view('admin/templates/step1'); ?>
        <!-- -------------- END STEP 1 -------------- -->


        <!-- -------------- BEGIN STEP 2 -------------- -->
        <?php $this->load->view('admin/templates/step2'); ?>
        <!-- -------------- END STEP 2 -------------- -->

        <!-- -------------- BEGIN STEP 3 -------------- -->
        <div class="row">
            <div id="step3"></div>
        </div>
        <!-- -------------- END STEP 3 -------------- -->
    </div>
</div>
<!-- -------------- END CONTAINER-------------- -->

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/companyPageAjax.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/scripts.js')?>"></script>

</body>
</html>












