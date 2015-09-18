<li class="list-group-item">
    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
    <span>Shipping and Billing Detalis</span>
    <div class="openform col-md-12">
        <div class="row well-lg">
            <div id="shipingDetalis" class="col-md-5 white">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Shipping Detalis</legend>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="shipingCenter">* Shipping Center</label>
                        <div class="col-md-5">
                            <select id="shipingCenter" name="shipingCenter" class="form-control">
                                <option value="1">Option one</option>
                                <option value="2">Option two</option>
                            </select>
                            <p><?php echo form_error('shipingCenter'); ?></p>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="shippingType">* Service Type</label>
                        <div class="col-md-5">
                            <select id="shippingType" name="shippingType" class="form-control">
                                <option value="1">Option one</option>
                                <option value="2">Option two</option>
                            </select>
                            <p><?php echo form_error('shippingType'); ?></p>
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
                        <label class="col-md-4 control-label" for="billingPermentType">* Payment Type</label>
                        <div class="col-md-5">
                            <select id="billingPermentType" name="billingPermentType" class="form-control">
                                <option value="VISA">VISA</option>
                                <option value="MASER">MASER</option>
                            </select>
                            <p><?php echo form_error('billingPermentType'); ?></p>
                        </div>
                    </div>

                </fieldset>
            </div>
        </div>
    </div>
</li>