<h2> Company Name: <?= $companyInfo['info']['companyInfo'][0]['companyName']  ?> </h2>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#feed">Feeds</a></li>
    <li><a data-toggle="tab" href="#info">Info</a></li>
    <li><a data-toggle="tab" href="#sales">Sales</a></li>
    <li><a data-toggle="tab" href="#contacts">Contacts</a></li>
    <li><a data-toggle="tab" href="#orders">Orders</a></li>
    <li><a data-toggle="tab" href="#invoices">Invoices</a></li>
    <li><a data-toggle="tab" href="#addresses">Addreses</a></li>
    <li><a data-toggle="tab" href="#creditCards">Credit Cards</a></li>
    <li><a data-toggle="tab" href="#payments">Payments</a></li>
    <li><a data-toggle="tab" href="#credits">Credit</a></li>
    <li><a data-toggle="tab" href="#returns">Returns</a></li>
</ul>

<div class="tab-content">
    <?php $this->load->view('admin/templates/customer/feed' ); ?>
    <?php $this->load->view('admin/templates/customer/info', array('info' => $companyInfo['info'])); ?>
    <?php $this->load->view('admin/templates/customer/sales'); ?>
    <?php $this->load->view('admin/templates/customer/contacts', array('contactInfo' => $companyInfo['contactInfo'])); ?>
    <?php $this->load->view('admin/templates/customer/orders',array('orderInfo' => $companyInfo['orderInfo'])); ?>
    <?php $this->load->view('admin/templates/customer/invoices'); ?>
    <?php $this->load->view('admin/templates/customer/addresses'); ?>
    <?php $this->load->view('admin/templates/customer/creditCards'); ?>
    <?php $this->load->view('admin/templates/customer/payments'); ?>
    <?php $this->load->view('admin/templates/customer/credits'); ?>
    <?php $this->load->view('admin/templates/customer/returns'); ?>
    <div class="clearfix"></div>
</div>
