<div id="contacts" class="tab-pane fade">
    <div class="row">
        <div class="col-md-1">
            <button class="btn btn-success" data-companyId="<?=$contactInfo[0]['companyId'] ?>">Add Contact</button>
        </div>
    </div>
    <?php foreach($contactInfo as $item):?>
        <div class="col-md-6 text-left">
            <h3>Contact Info</h3>
            <?php
            echo "<pre>";
            print_r($item);
            echo "</pre>";
            ?>
        </div>
    <?php endforeach; ?>

</div>