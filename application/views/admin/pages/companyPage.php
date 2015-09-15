<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 14.09.2015
 * Time: 10:29
 */
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
                <a class="btn btn-default" href="#" role="button">Cancel</a>
            </div>
            <div class="col-md-3 pull-right">
                <button id="next" class="btn btn-success pull-right" type="button">Next</button>
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
        <div id="step1">
            <!-- -------------- BEGIN SEARCH PRODUCTS -------------- -->
            <div class="row">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-search" ></span>
                    </div>
                    <input type="text" class="form-control" id="chooseProduct" />
                </div>
            </div>
            <!-- -------------- END SEARCH PRODUCTS -------------- -->

            <!-- -------------- BEGIN SHOW PRODUCTS -------------- -->
            <div class="row">
                <div id="products" class="col-md-12">

                </div>
                <div id="selectedProducts" class="col-md-12">

                </div>
            </div>
            <!-- -------------- END SHOW PRODUCTS -------------- -->


            <!-- -------------- BEGIN SHOW PRODUCTS -------------- -->
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5"><hr/></div>
                    <div class="col-md-2 text-center">
                        <p><span class="text-muted text-uppercase">SubTotal </span></p>
                        <p id="subtotal">0.00</p>
                    </div>
                    <div class="col-md-5"><hr/></div>
                    <div class="col-md-4 col-md-offset-4">
                        <div id="dataView">

                        </div>
                    </div>
                    <div class="col-md-5"><hr/></div>
                    <div class="col-md-2 text-center">
                        <p><span class="text-muted text-uppercase">Total </span></p>
                        <p id="total">0.00</p>
                    </div>
                    <div class="col-md-5"><hr/></div>
                </div>
            </div>
            <!-- -------------- END SHOW PRODUCTS -------------- -->
        </div>


        <!-- -------------- BEGIN SHOW FORMS -------------- -->
        <div id="step2" class="row">
            <h1 class="text-center">Company & Order Info</h1>
            <div class="col-md-8 col-md-offset-2">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                        Company and Order Info
                        <div class="openform">
                            SOME FORM FOR THIS LAYER
                        </div>
                    </li>
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                        Ship To
                        <div class="openform">
                            dvsddfbdfbdfbfd
                        </div>
                    </li>
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                        Bill To
                        <div class="openform">
                            dvsddfbdfbdfbfd
                        </div>
                    </li>
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                        Shipping and Billing Detalis
                        <div class="openform">
                            dvsddfbdfbdfbfd
                        </div>
                    </li>
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                        Payment Info
                        <div class="openform">
                            dvsddfbdfbdfbfd
                        </div>
                    </li>
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                        Additional Info
                        <div class="openform">
                            dvsddfbdfbdfbfd
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- -------------- END SHOW FORMS -------------- -->
    </div>
</div>
<!-- -------------- END CONTAINER-------------- -->

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/companyPageAjax.js')?>"></script>

</body>
</html>