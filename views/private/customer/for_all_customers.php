<?php foreach($customers as $customer): ?>
    <div class="pull-left">
        <a href="#" class="customers" data-id="<?= $customer['companyId'] ?>">Company Name: <?= $customer['companyName'] ?></a>
    </div>
    <div class="clearfix"></div>
<?php endforeach; ?>
<?php
    echo "<pre>";
    print_r($customers);
    echo "</pre>";
?>

