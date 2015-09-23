<h1 class="text-center">Review Order</h1>
<ul>
    <?php foreach($this->cart->contents() as $item): ?>
        <li class="list-group-item" data-companyId="<?php echo $item['id']?>">
            <div class="row">
                <div class="col-md-2">
                    <?= $item['qty'] ?>
                </div>
                <div class="col-md-8">
                    <?= $item['name'] ?>
                </div>
                <div class="col-md-2">
                    <?= '$'.$item['price'] ?>
                </div>
            </div>
            <div class="row well">
                <div class="col-md-6 text-center">
                    <p>Discount: -$ <?= $this->cart->format_number($item['price']) ?></p>
                    <p>Tax: $ <?= $this->cart->format_number($item['tax']) ?></p>
                    <p>Shipping $ <?= $this->cart->format_number($item['shippingPrice']) ?></p>
                    <p>Shipping Discount $ <?= $this->cart->format_number($item['shippingDiscount']) ?></p>
                </div>
                <div class="col-md-6">
                    <p>Subtotal: $ <?= $this->cart->format_number($item['subtotal']) ?></p>
                    <p>Total: $ <?= $this->cart->format_number($item['subtotal'] + $item['shippingPrice']) ?></p>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>



<div class="col-md-10 col-md-offset-1">
    <div class="col-md-12">
        <h2>Notes</h2>
        <div class="col-md-12 white">
            SOME TEXT
        </div>
        <div class="row">
            <div class="col-md-5">
                <h2>Shipp To</h2>
                <div class="col-md-12 white">
                    <p><?= $sess['shipAddress1']?></p>
                    <p><?= $sess['shipAddress2'] ?></p>
                    <p><?= $sess['shipCity']?></p>
                    <p><?= $sess['shipState'] ?></p>
                    <p><?= $sess['shipZip']?></p>
                    <p><?= $sess['shipCountry'] ?></p>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <h2>Bill To</h2>
                <div class="col-md-12 white">
                    <p><?= $sess['contactFname']?></p>
                    <p><?= $sess['contactLname'] ?></p>
                    <p><?= $sess['contactEmail']?></p>
                    <p><?= $sess['contactTitle'] ?></p>
                    <p><?= $sess['contactPhone']?></p>
                    <p><?= $sess['contactExt'] ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h2>Shipping Detalis</h2>
                <div class="col-md-12 white">
                    <p><?= $sess['shipingEndDate']?></p>
                    <p><?= $sess['shipingCenter'] ?></p>
                    <p><?= $sess['shippingType']?></p>
                    <p><?= $sess['shipingStartDate'] ?></p>
                    <p><?= $sess['shipingEndDate']?></p>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <h2>Billing Detalis</h2>
                <div class="col-md-12 white">
                    <p><?= $sess['billingPONumber'] ?></p>
                    <p><?= $sess['billingPaymentTerms']?></p>
                    <p><?= $sess['billingPermentType'] ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h2>Payment Info</h2>
                <div class="col-md-12 white">
                    <p><?= $sess['paymentNameOnCard']?></p>
                    <p><?= $sess['paymentCardName'] ?></p>
                    <p><?= $sess['paymentSecurityCode']?></p>
                    <p><?= $sess['paymentBillingAddress'] ?></p>
                    <p><?= $sess['paymentCity']?></p>
                    <p><?= $sess['paymentState'] ?></p>
                    <p><?= $sess['paymentZip']?></p>
                    <p><?= $sess['paymentExpDate'] ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h2>Additional Info</h2>
                <div class="col-md-12 white">
                    <p><?= $sess['additionaSafesRep']?></p>
                    <p><?= $sess['additionalPaymentTerms'] ?></p>
                    <p><?= $sess['additionalPaymentType']?></p>
                    <p><?= $sess['additionalSalesTax'] ?></p>
                    <p><?= $sess['additionalProfileId']?></p>
                    <p><?= $sess['additionalB2BorB2C'] ?></p>
                    <p><?= $sess['additionalLeadSource']?></p>
                    <p><?= $sess['additionalResellerNumber'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>