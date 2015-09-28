<?php
    echo "<pre>";
    print_r($this->session->all_userdata());
    echo "</pre>";
?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="<?php echo base_url('dashboard/new_order') ?>" class="btn btn-success">New Order</a>
            <div class="nav-side-menu">
                <div class="menu-list">
                    <ul id="menu-content" class="menu-content collapse out">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Analitics
                            </a>
                        </li>

                        <li data-toggle="collapse" data-target="#menuItem1" class="collapsed">
                            <a href="#" id="customers" data-type="all" >Customers ></a>
                        </li>
                        <ul class="sub-menu collapse" id="menuItem1">
                            <li><a href="#" id="b2bCustomer" data-type="b2b" >B2B</a></li>
                            <li><a href="#" id="b2cCustomer" data-type="b2c" >B2C</a></li>
                            <li><a href="#" id="" >Email List</a></li>
                            <li><a href="#" id="" >Search By Zip Code</a></li>
                        </ul>

                        <li data-toggle="collapse" data-target="#menuItem2" class="collapsed">
                            <a href="#">Orders ></a>
                        </li>
                        <ul class="sub-menu collapse" id="menuItem2">
                            <li><p id="b2b" data-type="b2b"> B2B </p></li>
                            <li><p id="b2c" data-type="b2c"> B2C </p></li>
                        </ul>
                        <li>
                            <a href="#">
                                Invoices
                            </a>
                        </li>
                        <li>
                            <a href="#" id="products">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Inventory
                            </a>
                        </li>


                        <li data-toggle="collapse" data-target="#menuItem9" class="collapsed">
                            <a href="#">Shipping ></a>
                        </li>
                        <ul class="sub-menu collapse" id="menuItem9">
                            <li><a href='#' id="shipments" >Shipments</a></li>
                            <li><a href='#' id="boxes" >Boxes</a></li>
                        </ul>

                        <li>
                            <a href="#">
                                Email Templates
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--BEGIN MAIN CONTENT-->
        <div class="col-md-10 text-center">
            <div id="show_orders">

            </div>
        </div>
        <!--END MAIN CONTENT-->
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/index/indexScripts.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/customer/customerPage.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/boxes/boxesScripts.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/products/productScripts.js')?>"></script>