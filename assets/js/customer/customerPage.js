$(document).ready(function() {

    $(document).on('click','.customerPage', function(e) {
        var self = $(this);
        e.preventDefault();
        $.ajax({
            url: 'customer/customer_info_by_order',
            type: 'post',
            data: {id:self.data('id')},
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
    });

    $(document).on('click','#b2cCustomer, #b2bCustomer, #customers', function(e) {
        var self = $(this);
        e.preventDefault();
        $.ajax({
            url: 'customer/customer_info',
            type: 'post',
            data: {type:self.data('type')},
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
    });

    $(document).on('click','.customers', function(e) {
        var self = $(this);
        e.preventDefault();
        $.ajax({
            url: 'customer/customers_info',
            type: 'post',
            data: {companyId:self.data('id')},
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
    });


});