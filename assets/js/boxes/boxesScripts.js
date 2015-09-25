$(document).ready(function () {
    /**
     * ----------------------------------------------
     * SHOW boxes
     * ----------------------------------------------
     * */
    $(document).on('click', '#boxes', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'boxes/show_boxes',
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
    })

    /**
     * ----------------------------------------------
     * Delete Box
     * ----------------------------------------------
     * */
    $(document).on('click', '.deleteBox', function() {
        var self = $(this);
        $.ajax({
            url: 'boxes/delete_box',
            type: 'post',
            data: {boxId:self.data('boxid')},
            success: function() {
                self.closest('.row').remove();
            }
        });
    });

    /**
     * ----------------------------------------------
     * Add Box
     * ----------------------------------------------
     * */
    $(document).on('submit', '#saveBox', function(e) {

        e.preventDefault();

        $.ajax({
            url: 'boxes/add_box',
            type: 'post',
            data: $('#saveBox').serialize(),
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
        $('#addModal').modal('hide');
    });

    /**
     * ----------------------------------------------
     * Set Box Params
     * ----------------------------------------------
     * */
    var boxId;
    $(document).on('click', '.editBox', function(e) {

        e.preventDefault();

        var self = $(this);
        boxId = self.data('edit');
        $.ajax({
            url: 'boxes/get_current_box',
            type: 'post',
            data: {boxId:self.data('edit')},
            dataType: 'json',
            success: function(response) {
                $('#editBox').find('#boxLength').val(response['response']['boxLength']);
                $('#editBox').find('#boxWidth').val(response['response']['boxWidth']);
                $('#editBox').find('#boxHeight').val(response['response']['boxHeight']);
                $('#editBox').find('#boxName').val(response['response']['boxName']);
                $('#editBox').find('#boxWeight').val(response['response']['boxWeight']);
                $('#editBox').find('#boxInventory').val(response['response']['boxWidth']);
            }
        });
    })


    /**
     * ----------------------------------------------
     * Edit Box
     * ----------------------------------------------
     * */
    $(document).on('submit', '#editBox', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'boxes/edit_box/'+boxId,
            type: 'post',
            data: $('#editBox').serialize(),
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
                $('#editModal').modal('hide');
            }
        });
    });

    $(document).on('click', '#editBox', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'boxes/edit_box/'+boxId,
            type: 'post',
            data: $('#editBox').serialize(),
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
                $('#editModal').modal('hide');
            }
        });
    });
});

















