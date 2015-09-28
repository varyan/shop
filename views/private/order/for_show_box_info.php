<?php
    print_r($boxInfo);
?>

<div class="row">
    <div class="col-md-3">
        <p>Name</p>
    </div>
    <div class="col-md-3">
        <p>Dimensions</p>
    </div>
    <div class="col-md-2">
        <p>Weight</p>
    </div>
    <div class="col-md-2">
        <p>Inventory</p>
    </div>
    <div class="col-md-1">
        <p>Delete</p>
    </div>
</div>
<?php foreach($boxInfo as $box): ?>
    <div class="row well well-sm">
        <div class="col-md-3">
            <i class="glyphicon glyphicon-inbox"></i>
            <p><?= $box['boxName'] ?></p>
        </div>
        <div class="col-md-3">
            <p><?= $box['boxLength']." in x ".$box['boxWidth']." in x ".$box['boxHeight'] ?></p>
        </div>
        <div class="col-md-2">
            <p><?= $box['boxWeight']." lbs" ?></p>
        </div>
        <div class="col-md-2">
            <p><?= $box['boxInventory'] ?></p>
        </div>
        <div class="col-md-1">
            <button type="button" data-boxid="<?= $box['boxId'] ?>" name="deleteBox" class="deleteBox btn btn-danger">
                <i class="glyphicon glyphicon-remove text-danger"></i>
            </button>
        </div>
    </div>
<?php endforeach; ?>