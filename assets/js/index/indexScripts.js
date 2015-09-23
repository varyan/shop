$(document).ready(function (){
    /**
     * ----------------------------------------------
     * SHOW B2B OR B2C Orders
     * ----------------------------------------------
     * */

    $(document).on('click','#b2c', function() {
        $.ajax({
            url: 'main/show_orders/b2c',
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
    });

    $(document).on('click','#b2b', function() {
        $.ajax({
            url: 'main/show_orders/b2b',
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
    });

});