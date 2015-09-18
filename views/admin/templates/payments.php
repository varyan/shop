<li class="list-group-item">
    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
    <span>Payment Info</span>
    <div class="openform col-md-12">
        <div class="row well-lg">
            <div id="paymentInfo" class="col-md-5 white">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="paymentNameOnCard">* Name On Card</label>
                        <div class="col-md-5">
                            <input id="paymentNameOnCard" name="paymentNameOnCard" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('paymentNameOnCard'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="paymentCardName">* Card Name</label>
                        <div class="col-md-5">
                            <input id="paymentCardName" name="paymentCardName" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('paymentCardName'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="paymentSecurityCode">* Security Code</label>
                        <div class="col-md-2">
                            <input id="paymentSecurityCode" name="paymentSecurityCode" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('paymentSecurityCode'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="paymentBillingAddress">* Billing Addres</label>
                        <div class="col-md-5">
                            <input id="paymentBillingAddress" name="paymentBillingAddress" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('paymentBillingAddress'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="paymentCity">* City</label>
                        <div class="col-md-5">
                            <input id="paymentCity" name="paymentCity" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('paymentCity'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="paymentState">* State</label>
                        <div class="col-md-5">
                            <input id="paymentState" name="paymentState" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('paymentState'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="paymentZip">* Zip</label>
                        <div class="col-md-5">
                            <input id="paymentZip" name="paymentZip" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('paymentZip'); ?></p>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="paymentExpDate">* Expiration Date</label>
                        <div class="col-md-5">
                            <input type="date" id="paymentExpDate" name="paymentExpDate" class="form-control"/>
                            <p><?php echo form_error('paymentExpDate'); ?></p>
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