<li class="list-group-item">
    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
    <span>Ship To</span>
    <div class="openform col-md-12">
        <div class="row well-lg">
            <div id="ship1" class="col-md-5 white">
                <fieldset>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="shipCompanyName"> Company Name</label>
                        <div class="col-md-5">
                            <input id="shipCompanyName" name="shipCompanyName" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('shipCompanyName'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="shipContactName"> Contact Name</label>
                        <div class="col-md-5">
                            <input id="shipContactName" name="shipContactName" type="text" class="form-control input-md">
                            <p><?php echo form_error('shipContactName'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="shipCompanyPhone">Phone Number</label>
                        <div class="col-md-5">
                            <input id="shipCompanyPhone" name="shipCompanyPhone" type="text" class="form-control input-md">
                            <p><?php echo form_error('shipCompanyPhone'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="shipEmail">Email</label>
                        <div class="col-md-5">
                            <input id="shipEmail" name="shipEmail" type="text" class="form-control input-md" >
                            <p><?php echo form_error('shipEmail'); ?></p>
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
                            <p><?php echo form_error('shipAddress1'); ?></p>
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
                            <p><?php echo form_error('shipCity'); ?></p>
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
                            <p><?php echo form_error('shipState'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="shipZip">* Zip</label>
                        <div class="col-md-5">
                            <input id="shipZip" name="shipZip" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('shipZip'); ?></p>
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