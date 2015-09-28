<div class="tab-pane active" id="a">
    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productSkuNumber">SKU Number</label>
            <div class="col-md-5">
                <input id="productSkuNumber" name="productSkuNumber" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productName">Name</label>
            <div class="col-md-5">
                <input id="productName" name="productName" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productContents">Contents</label>
            <div class="col-md-5">
                <input id="productContents" name="productContents" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productDescription">Description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="productDescription" name="productDescription"></textarea>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productBarcode">Barcode</label>
            <div class="col-md-5">
                <input id="productBarcode" name="productBarcode" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productWeight">Weight</label>
            <div class="col-md-2">
                <input id="productWeight" name="productWeight" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productEnableInventory">Enable Inventory</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="productEnableInventory-0">
                        <input type="radio" name="productEnableInventory" id="productEnableInventory-0" value="1" checked="checked">
                        Yes
                    </label>
                </div>
                <div class="radio">
                    <label for="productEnableInventory-1">
                        <input type="radio" name="productEnableInventory" id="productEnableInventory-1" value="0">
                        No
                    </label>
                </div>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productQty">Inventory Count</label>
            <div class="col-md-5">
                <input id="productQty" name="productQty" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productTaxable">Taxable</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="productTaxable-0">
                        <input type="radio" name="productTaxable" id="productTaxable-0" value="1" checked="checked">
                        Yes
                    </label>
                </div>
                <div class="radio">
                    <label for="productTaxable-1">
                        <input type="radio" name="productTaxable" id="productTaxable-1" value="0">
                        No
                    </label>
                </div>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productVisibility">Visibility</label>
            <div class="col-md-4">
                <select id="productVisibility" name="productVisibility" class="form-control">
                    <option value="Visible">Visible</option>
                    <option value="Hidden">Hidden</option>
                    <option value="Inavctive">Inavctive</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productPosition">Position</label>
            <div class="col-md-2">
                <input id="productPosition" name="productPosition" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

    </fieldset>

</div>