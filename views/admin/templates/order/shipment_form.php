<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Shipment Info</legend>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentCarier">Carier</label>
            <div class="col-md-5">
                <select id="shipmentCarier" name="shipmentCarier" class="form-control">
                    <option value="Option one">Option one</option>
                    <option value="Option two">Option two</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentServiceType">Shipment Service Type</label>
            <div class="col-md-5">
                <select id="shipmentServiceType" name="shipmentServiceType" class="form-control">
                    <option value="Option one">Option one</option>
                    <option value="Option two">Option two</option>
                </select>
            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentRate">Flate Rate Shipping</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="shipmentRate-0">
                        <input type="checkbox" name="shipmentRate" id="shipmentRate-0" value="1">
                        Option one
                    </label>
                </div>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentPrice">Shipping Price</label>
            <div class="col-md-5">
                <input id="shipmentPrice" name="shipmentPrice" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentDiscount">Discount</label>
            <div class="col-md-5">
                <input id="shipmentDiscount" name="shipmentDiscount" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentDiscountType">Discount Type</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="shipmentDiscountType-0">
                        <input type="checkbox" name="shipmentDiscountType" id="shipmentDiscountType-0" value="1">
                        $
                    </label>
                </div>
                <div class="checkbox">
                    <label for="shipmentDiscountType-1">
                        <input type="checkbox" name="shipmentDiscountType" id="shipmentDiscountType-1" value="2">
                        %
                    </label>
                </div>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentValue">Declared Value</label>
            <div class="col-md-5">
                <input id="shipmentValue" name="shipmentValue" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentDate">Date Shipment</label>
            <div class="col-md-5">
                <input id="shipmentDate" name="shipmentDate" type="date" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentResidental">Residental</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="shipmentResidental-0">
                        <input type="checkbox" name="shipmentResidental" id="shipmentResidental-0" value="1">
                        Option one
                    </label>
                </div>
            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="shipmentValidation">Skip Validation</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="shipmentValidation-0">
                        <input type="checkbox" name="shipmentValidation" id="shipmentValidation-0" value="1">
                        Option one
                    </label>
                </div>
            </div>
        </div>
        <input type="text" class="aaa" name="order_id" value="karen" style="display: none"/>

    </fieldset>
</form>