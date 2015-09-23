<ul class="list-group col-md-10" >
    <?php if ($indexCompany): ?>
        <li class="list-group-item" id="comp">
            <?php echo $indexCompany[0]['name']?>
            <button class="pull-right" data-name='<?php echo $indexCompany[0]['name'] ?>' id="crr">Create Company</button>
        </li>
    <?php else : ?>
        <?php foreach($companyList as $list): ?>
            <li class="list-group-item" data-companyId="<?= $list['companyId']?>">
                <?= $list['companyName']?>
                <a class="pull-right" href="<?= base_url("dashboard/open_company_page/".$list['companyId']) ?>" > Select</a>
            </li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>