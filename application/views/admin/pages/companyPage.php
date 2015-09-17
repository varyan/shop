<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 14.09.2015
 * Time: 10:29
 */
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
                <a class="btn btn-default" href="#" role="button">Cancel</a>
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
        <div id="step1">
            <!-- -------------- BEGIN SEARCH PRODUCTS -------------- -->
            <div class="row">
                <p class="total">TOTAL 0.00</p>
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-search" ></span>
                    </div>
                    <input type="text" class="form-control" id="chooseProduct" />
                </div>
                <div id="products" class="col-md-12">
                    <!--show product list using ajax-->
                </div>
            </div>
            <!-- -------------- END SEARCH PRODUCTS -------------- -->

            <!-- -------------- BEGIN SHOW SELETED PRODUCTS -------------- -->
            <div class="row">
                <div id="selectedProducts" class="col-md-12">
                    <ul class="list-group">

                    </ul>
                </div>
            </div>
            <!-- -------------- END SHOW SELETED PRODUCTS -------------- -->


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
                        <div id="dataInfo">
                            <form class="form-horizontal" method="post" id="cartForm">
                                <fieldset>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="totalDiscount">Total Discount</label>
                                        <div class="col-md-4">
                                            <input id="totalDiscount" name="totalDiscount" type="text" placeholder="" class="form-control input-md">

                                        </div>
                                    </div>

                                    <!-- Multiple Radios (inline) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="radios">Total Discount Type</label>
                                        <div class="col-md-4">
                                            <label class="radio-inline" for="radios-0">
                                                <input type="radio" name="totalDiscountType" id="radios-0" value="money" checked="checked">
                                                $
                                            </label>
                                            <label class="radio-inline" for="radios-1">
                                                <input type="radio" name="totalDiscountType" id="radios-1" value="precent">
                                                %
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tax">Tax ()</label>
                                        <div class="col-md-4">
                                            <select id="tax" name="tax" class="form-control">
                                                <option value="0">Non Tax</option>
                                                <option value="2">Option two</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="shippingPrice">Shipping</label>
                                        <div class="col-md-4">
                                            <input id="shippingPrice" name="shippingPrice" type="text" placeholder="" class="form-control input-md">
                                            <p id="shipInfo"> () </p>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="shippingDiscount">Shipping Discount</label>
                                        <div class="col-md-4">
                                            <input id="shippingDiscount" name="shippingDiscount" type="text" placeholder="" class="form-control input-md">
                                        </div>
                                    </div>

                                    <!-- Multiple Radios (inline) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="shippingDiscountType">Shipping Discount Type</label>
                                        <div class="col-md-4">
                                            <label class="radio-inline" for="shippingDiscountType-0">
                                                <input type="radio" name="shippingDiscountType" id="shippingDiscountType-0" value="money" checked="checked">
                                                $
                                            </label>
                                            <label class="radio-inline" for="shippingDiscountType-1">
                                                <input type="radio" name="shippingDiscountType" id="shippingDiscountType-1" value="precent">
                                                %
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5"><hr/></div>
                    <div class="col-md-2 text-center">
                        <p><span class="text-muted text-uppercase">Total </span></p>
                        <p class="total">0.00</p>
                    </div>
                    <div class="col-md-5"><hr/></div>
                </div>
            </div>
            <!-- -------------- END SHOW PRODUCTS -------------- -->
        </div>
        <!-- -------------- END STEP 1 -------------- -->


        <!-- -------------- BEGIN STEP 2 -------------- -->
        <div id="step2" class="row">
            <h1 class="text-center">Company & Order Info</h1>
            <div class="col-md-12">
                <div id="processing">
                    <!-- PRINT SOME INFO ABOUT PROCESSING FORM-->
                </div>
                <form class="form-horizontal" id="shopInfo" action="<?= base_url('dashboard/createOrder') ?>" method="post">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <span>Company and Order Info</span>
                            <div class="openform col-md-12">
                                <div class="row well">
                                    <div id="companyInfo" class="col-md-6 white">
                                        <fieldset>

                                            <!-- Form Name -->
                                            <legend>Company Info</legend>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="companyName">Company Name</label>
                                                <div class="col-md-5">
                                                    <input id="companyName" name="companyName" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="companyPhone">Phone Number</label>
                                                <div class="col-md-5">
                                                    <input id="companyPhone" name="companyPhone" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="companyExt">Ext</label>
                                                <div class="col-md-2">
                                                    <input id="companyExt" name="companyExt" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="companyFax">Fax Number</label>
                                                <div class="col-md-5">
                                                    <input id="companyFax" name="companyFax" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="companyCustomer">Customer Type</label>
                                                <div class="col-md-5">
                                                    <select id="companyCustomer" name="companyCustomer" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="companyNotes">Notes</label>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" id="companyNotes" name="companyNotes"></textarea>
                                                </div>
                                            </div>

                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="companyAdminNotes">Admin Notes</label>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" id="companyAdminNotes" name="companyAdminNotes"></textarea>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                    <div id="contactInfo" class="col-md-5 col-md-offset-1 white">
                                        <fieldset>

                                            <!-- Form Name -->
                                            <legend>Contact Info</legend>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="contactFname">First Name</label>
                                                <div class="col-md-5">
                                                    <input id="contactFname" name="contactFname" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="contactLname">Last Name</label>
                                                <div class="col-md-5">
                                                    <input id="contactLname" name="contactLname" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="contactEmail">Email</label>
                                                <div class="col-md-5">
                                                    <input id="contactEmail" name="contactEmail" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="contactTitle">Title</label>
                                                <div class="col-md-5">
                                                    <input id="contactTitle" name="contactTitle" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="contactPhone">Phone Number</label>
                                                <div class="col-md-5">
                                                    <input id="contactPhone" name="contactPhone" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="contactExt">Ext</label>
                                                <div class="col-md-5">
                                                    <input id="contactExt" name="contactExt" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Multiple Checkboxes -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="contactPrimary">Primary Contact</label>
                                                <div class="col-md-4">
                                                    <div class="checkbox">
                                                        <label for="contactPrimary-0">
                                                            <input type="checkbox" name="contactPrimary" id="contactPrimary-0" value="1">
                                                            One
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Multiple Checkboxes -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="contactPayable">Accounts Payable</label>
                                                <div class="col-md-4">
                                                    <div class="checkbox">
                                                        <label for="contactPayable-0">
                                                            <input type="checkbox" name="contactPayable" id="contactPayable-0" value="1">
                                                            One
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <span>Ship To</span>
                            <div class="openform col-md-12">
                                <div class="row well">
                                    <div id="ship1" class="col-md-5 white">
                                        <fieldset>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipCompanyName">Company Name</label>
                                                <div class="col-md-5">
                                                    <input id="shipCompanyName" name="shipCompanyName" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipContactName">Contact Name</label>
                                                <div class="col-md-5">
                                                    <input id="shipContactName" name="shipContactName" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipPhone">Phone Number</label>
                                                <div class="col-md-5">
                                                    <input id="shipPhone" name="shipPhone" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipEmail">Email</label>
                                                <div class="col-md-5">
                                                    <input id="shipEmail" name="shipEmail" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                    <div id="ship2" class="col-md-5 col-md-offset-1 white">
                                        <fieldset>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipAddress1">* Address 1</label>
                                                <div class="col-md-5">
                                                    <input id="shipAddress1" name="shipAddress1" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipAddress2">Address 2</label>
                                                <div class="col-md-5">
                                                    <input id="shipAddress2" name="shipAddress2" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipCity">* City</label>
                                                <div class="col-md-5">
                                                    <input id="shipCity" name="shipCity" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipState">* State</label>
                                                <div class="col-md-5">
                                                    <select id="shipState" name="shipState" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <!--<label class="col-md-4 control-label" for="shipZip">* Zip</label>-->
                                                <div class="col-md-5">
                                                    <input id="shipZip" name="shipZip" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipCountry">Country</label>
                                                <div class="col-md-5">
                                                    <select id="shipCountry" name="shipCountry" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <span>Bill To</span>
                            <div class="openform col-md-12"></div>
                        </li>

                        <li class="list-group-item">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <span>Shipping and Billing Detalis</span>
                            <div class="openform col-md-12">
                                <div class="row well">
                                    <div id="shipingDetalis" class="col-md-5 white">
                                        <fieldset>
                                            <!-- Form Name -->
                                            <legend>Shipping Detalis</legend>
                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipingCenter">Shipping Center</label>
                                                <div class="col-md-5">
                                                    <select id="shipingCenter" name="shipingCenter" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shippingType">Service Type</label>
                                                <div class="col-md-5">
                                                    <select id="shippingType" name="shippingType" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipingStartDate">Start Ship Date</label>
                                                <div class="col-md-5">
                                                    <input id="shipingStartDate" name="shipingStartDate" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="shipingEndDate">Ship End Date</label>
                                                <div class="col-md-5">
                                                    <input id="shipingEndDate" name="shipingEndDate" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                    <div id="billingDetalis" class="col-md-5 col-md-offset-1 white">
                                        <fieldset>

                                            <!-- Form Name -->
                                            <legend>Billing Detalis</legend>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="billingPONumber">PO Number</label>
                                                <div class="col-md-5">
                                                    <input id="billingPONumber" name="billingPONumber" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="billingPaymentTerms">Payment Terms</label>
                                                <div class="col-md-5">
                                                    <select id="billingPaymentTerms" name="billingPaymentTerms" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="billingPermentType">Payment Type</label>
                                                <div class="col-md-5">
                                                    <select id="billingPermentType" name="billingPermentType" class="form-control">
                                                        <option value="1">VISA</option>
                                                        <option value="2">MASER</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <span>Payment Info</span>
                            <div class="openform col-md-12">
                                <div class="row well">
                                    <div id="paymentInfo" class="col-md-5 white">
                                        <fieldset>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paymentNameOnCard">Name On Card</label>
                                                <div class="col-md-5">
                                                    <input id="paymentNameOnCard" name="paymentNameOnCard" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paymentCardName">Card Name</label>
                                                <div class="col-md-5">
                                                    <input id="paymentCardName" name="paymentCardName" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paymentSecurityCode">Security Code</label>
                                                <div class="col-md-2">
                                                    <input id="paymentSecurityCode" name="paymentSecurityCode" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paymentBillingAddress">Billing Addres</label>
                                                <div class="col-md-5">
                                                    <input id="paymentBillingAddress" name="paymentBillingAddress" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paymentCity">City</label>
                                                <div class="col-md-5">
                                                    <input id="paymentCity" name="paymentCity" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paymentState">State</label>
                                                <div class="col-md-5">
                                                    <input id="paymentState" name="paymentState" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paymentZip">Zip</label>
                                                <div class="col-md-5">
                                                    <input id="paymentZip" name="paymentZip" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paymentExpDate">Expiration Date</label>
                                                <div class="col-md-2">
                                                    <select id="paymentExpDate" name="paymentExpDate" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Multiple Checkboxes -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="paymentDefaultCard">Default Credit Card</label>
                                                <div class="col-md-4">
                                                    <div class="checkbox">
                                                        <label for="paymentDefaultCard-0">
                                                            <input type="checkbox" name="paymentDefaultCard" id="paymentDefaultCard-0" value="1">
                                                            Option one
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <span>Additional Info</span>
                            <div class="openform col-md-12">
                                <div class="row well">
                                    <div id="additionalInfo" class="col-md-5 white">
                                        <fieldset>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="additionaSafesRep">Safes Rep</label>
                                                <div class="col-md-5">
                                                    <select id="additionaSafesRep" name="additionaSafesRep" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="additionalPaymentTerms">Payment Terms</label>
                                                <div class="col-md-5">
                                                    <select id="additionalPaymentTerms" name="additionalPaymentTerms" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="additionalPaymentType">Payment Type</label>
                                                <div class="col-md-5">
                                                    <select id="additionalPaymentType" name="additionalPaymentType" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="additionalSalesTax">Sales Tax</label>
                                                <div class="col-md-5">
                                                    <select id="additionalSalesTax" name="additionalSalesTax" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="additionalProfileId">Authorize.net Profile ID</label>
                                                <div class="col-md-4">
                                                    <input id="additionalProfileId" name="additionalProfileId" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="additionalB2BorB2C">B2B or B2C</label>
                                                <div class="col-md-5">
                                                    <select id="additionalB2BorB2C" name="additionalB2BorB2C" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="additionalLeadSource">Lead Source</label>
                                                <div class="col-md-5">
                                                    <select id="additionalLeadSource" name="additionalLeadSource" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="additionalResellerNumber">Reseller Number</label>
                                                <div class="col-md-5">
                                                    <input id="additionalResellerNumber" name="additionalResellerNumber" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
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












