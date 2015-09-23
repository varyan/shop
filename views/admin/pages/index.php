<?php
    echo "<pre>";
    print_r($this->session->all_userdata());
    echo "</pre>";
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
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
                            <a href="#">Customers ></a>
                        </li>
                        <ul class="sub-menu collapse" id="menuItem1">
                            <li><p id="b2b" >B2B</p></li>
                            <li><p id="b2c" >B2C</p></li>
                            <li><p id="b2b" >Email List</p></li>
                            <li><p id="b2b" >Search By Zip Code</p></li>
                        </ul>

                        <li data-toggle="collapse" data-target="#menuItem2" class="collapsed">
                            <a href="#">Orders ></a>
                        </li>
                        <ul class="sub-menu collapse" id="menuItem2">
                            <li><p id="b2b" >B2B</p></li>
                            <li><p id="b2c" >B2C</p></li>
                        </ul>
                        <li>
                            <a href="#">
                                Invoices
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Inventory
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Shipping
                            </a>
                        </li>
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
        <div class="col-md-7 text-center">
            <div id="show_orders">

            </div>
        </div>
        <!--END MAIN CONTENT-->
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/index/indexScripts.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/customer/customerPage.js')?>"></script>