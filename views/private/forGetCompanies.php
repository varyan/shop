<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 14.09.2015
 * Time: 22:18
 */

?>
<ul class="list-group col-md-10" >












    <?php if ($indexCompany) { ?>
        <li class="list-group-item" id="comp">
            <?php echo $indexCompany[0]['name']?>
            <a class="pull-right" href="<?= base_url('dashboard/createCompany/'.$indexCompany[0]['name']) ?>">Create Company</a>
        </li>
    <?php } else { ?>
    <?php foreach($companyList as $list) {?>
        <li class="list-group-item" data-companyId="<?= $list['id']?>">
            <?= $list['companyName']?>
            <a class="pull-right" href="<?= base_url("dashboard/OpenCompanyPage/".$list['id']) ?>" > Select</a>
        </li>
    <?php } ?>
    <?php } ?>
</ul>