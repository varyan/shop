$(document).ready(function() {

    $(document).on('click','.customerPage', function(e) {
        var self = $(this);
        e.preventDefault();
        $.ajax({
            url: 'customer/customer_info',
            type: 'post',
            data: {id:self.data('id')},
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
                console.log(response);
            }
        });
    });

});