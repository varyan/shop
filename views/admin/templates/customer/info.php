<div id="info" class="tab-pane fade">

    <div class="col-md-6 text-left">
        <h3>Customer Info</h3>
        <?php
            echo "<pre>";
            print_r($info['companyInfo']);
            echo "</pre>";
        ?>
    </div>
    <div class="col-md-6 text-left">
        <h3>Additional Info</h3>
        <?php
        echo "<pre>";
        print_r($info['additionalInfo']);
        echo "</pre>";
        ?>
    </div>
</div>