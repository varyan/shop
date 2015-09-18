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