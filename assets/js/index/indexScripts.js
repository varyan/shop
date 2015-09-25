$(document).ready(function (){
    /**
     * ----------------------------------------------
     * SHOW B2B OR B2C Orders
     * ----------------------------------------------
     * */

    $(document).on('click','#b2c, #b2b', function() {
        var self = $(this);
        $.ajax({
            url: 'main/show_orders',
            type: 'post',
            data: {type:self.data('type')},
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
    });

});