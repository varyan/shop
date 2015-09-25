<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addModal">Add Box</button>
<div class="clearfix"></div>

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

<?php foreach($boxes as $box): ?>
    <div class="row well well-sm">
        <div class="col-md-3">
            <i class="glyphicon glyphicon-inbox"></i>
            <a href="#" data-edit="<?= $box['boxId'] ?>" data-toggle="modal" data-target="#editModal" class="editBox"><?= $box['boxName'] ?></a>
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



<!-- Modal -->
<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Box</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="#" name="saveBox" id="saveBox">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxLength">Length</label>
                            <div class="col-md-2">
                                <input id="boxLength" name="boxLength" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxWidth">Width</label>
                            <div class="col-md-2">
                                <input id="boxWidth" name="boxWidth" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxHeight">Height</label>
                            <div class="col-md-2">
                                <input id="boxHeight" name="boxHeight" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxName">Box Name</label>
                            <div class="col-md-4">
                                <input id="boxName" name="boxName" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxWeight">Weight</label>
                            <div class="col-md-2">
                                <input id="boxWeight" name="boxWeight" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxInventory">Inventory</label>
                            <div class="col-md-2">
                                <input id="boxInventory" name="boxInventory" type="text" class="form-control input-md">

                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button id="boxSubmit" name="boxSubmit" class="btn btn-success" form="saveBox">Save</button>
            </div>
        </div>
    </div>
</div>

<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Box</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="#" name="editBox" id="editBox">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxLength">Length</label>
                            <div class="col-md-2">
                                <input id="boxLength" name="boxLength" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxWidth">Width</label>
                            <div class="col-md-2">
                                <input id="boxWidth" name="boxWidth" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxHeight">Height</label>
                            <div class="col-md-2">
                                <input id="boxHeight" name="boxHeight" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxName">Box Name</label>
                            <div class="col-md-4">
                                <input id="boxName" name="boxName" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxWeight">Weight</label>
                            <div class="col-md-2">
                                <input id="boxWeight" name="boxWeight" type="text" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="boxInventory">Inventory</label>
                            <div class="col-md-2">
                                <input id="boxInventory" name="boxInventory" type="text" class="form-control input-md">

                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button id="editBoxSubmit" name="editBoxSubmit" type="submit" class="btn btn-success" form="editBox" >Save</button>
            </div>
        </div>
    </div>
</div>