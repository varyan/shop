$(document).ready(function() {

    /**
     * ----------------------------------------------
     *  Open product list
     * ----------------------------------------------
     * */
    $('#chooseProduct').keyup(function() {
        $('#products').show();
        $.ajax({
            type: "POST",
            data: {value:($('#chooseProduct').val()).trim()} ,
            url: 'client/Client_cart/get_products',
            dataType: 'html',
            success: function(response) {
                $('#products').html(response);
            }
        })
    });

    /**
     * ----------------------------------------------
     *  select from product list and show in selected products
     * ----------------------------------------------
     * */
    $(document).on('submit','.form', function(e) {

        e.preventDefault();
        $('#products').hide();
        $('#dataInfo').show();
        var sendData = $(this).serialize();
        Request('client/Client_cart/select_product',sendData);
    });

    /**
     * ----------------------------------------------
     *  Set Qty from selected products
     * ----------------------------------------------
     * */
    $(document).on('keyup','#QtyInput1', function() {
            $.ajax({
                url: 'client/Client_cart/set_qty',
                type: "post",
                data: {value:($(this).val()).trim},
                success: function() {
                }
            });
        }
    );

    /**
     * ----------------------------------------------
     *  Set Cart info for current selected product
     * ----------------------------------------------
     * */
    $('#cartForm input, #cartForm select').on('click keyup', function () {
        var form = $('#cartForm').serialize();
        $.ajax({
            url: 'client/Client_cart/set_other_params',
            type: "post",
            data: form,
            dataType: 'html',
            success: function(response) {
                $('#shipInfo').html('($' + response +')');
                $('.total').html(response);
            }
        })
    });

    /**
     * ----------------------------------------------
     *  Show company info in Ship To form
     * ----------------------------------------------
     * */
    $(document).on('keyup','#shopInfo', function() {
        $.ajax({
            url: 'dashboard/show_company_info',
            type: "post",
            data: {
                companyName:$('#companyName').val(),
                companyPhone:$('#companyPhone').val(),
                companyContact:$('#contactLname').val(),
                companyEmail:$('#contactEmail').val()
            },
            dataType: 'json',
            success: function(response) {
                /*$('#ship1').html(response);*/
                $("#shipCompanyName").val(response['response']['companyName']);
                $("#shipContactName").val(response['response']['companyContact']);
                $("#shipCompanyPhone").val(response['response']['companyPhone']);
                $("#shipEmail").val(response['response']['companyEmail']);
            }
        });
    });

    /**
     * ----------------------------------------------
     *  Delete product from cart
     * ----------------------------------------------
     * */
    $(document).on('click','.deleteProduct', function() {
            var self = $(this);
            $.ajax({
                url: 'client/client_cart/delete_product',
                type: 'post',
                data: {productId:$(this).data('productrowid')},
                success: function() {
                    self.closest('li').remove();
                }
            });
        }
    );

});

/**
 * ----------------------------------------------
 *  AJAX FUNCTION
 * ----------------------------------------------
 * */
function Request(url,data){
    $.ajax({
        url:url,
        data:data,
        type:"POST",
        dataType: 'html',
        success: function (response) {
            $('#selectedProducts').append(response);
        }
    })
}
















