<li class="list-group-item">
    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
    <span>Company and Order Info</span>
    <div class="openform col-md-12">
        <div class="row well-lg">
            <div id="companyInfo" class="col-md-6 white">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Company Info</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="companyName">* Company Name</label>
                        <div class="col-md-5">
                            <input id="companyName" name="companyName" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('companyName'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="companyPhone">* Phone Number</label>
                        <div class="col-md-5">
                            <input id="companyPhone" name="companyPhone" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('companyPhone'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="companyExt">* Ext</label>
                        <div class="col-md-2">
                            <input id="companyExt" name="companyExt" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('companyExt'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="companyFax">* Fax Number</label>
                        <div class="col-md-5">
                            <input id="companyFax" name="companyFax" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('companyFax'); ?></p>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="companyCustomer">* Customer Type</label>
                        <div class="col-md-5">
                            <select id="companyCustomer" name="companyCustomer" class="form-control">
                                <option value="1">Option one</option>
                                <option value="2">Option two</option>
                                <option value="3">Option three</option>
                            </select>
                            <p><?php echo form_error('companyCustomer'); ?></p>
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
                        <label class="col-md-4 control-label" for="contactFname">* First Name</label>
                        <div class="col-md-5">
                            <input id="contactFname" name="contactFname" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('contactFname'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contactLname">* Last Name</label>
                        <div class="col-md-5">
                            <input id="contactLname" name="contactLname" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('contactLname'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contactEmail">* Email</label>
                        <div class="col-md-5">
                            <input id="contactEmail" name="contactEmail" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('contactEmail'); ?></p>
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
                        <label class="col-md-4 control-label" for="contactPhone">* Phone Number</label>
                        <div class="col-md-5">
                            <input id="contactPhone" name="contactPhone" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('contactPhone'); ?></p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contactExt">* Ext</label>
                        <div class="col-md-5">
                            <input id="contactExt" name="contactExt" type="text" placeholder="" class="form-control input-md">
                            <p><?php echo form_error('contactExt'); ?></p>
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