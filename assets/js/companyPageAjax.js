/**
 * Created by Karen on 14.09.2015.
 */



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
            data: {value:$('#chooseProduct').val()} ,
            url: 'http://localhost/shop/dashboard/getProducts',
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
        Request('http://localhost/shop/dashboard/selectProduct',sendData);
    });

    /**
     * ----------------------------------------------
     *  Set Qty from selected products
     * ----------------------------------------------
     * */
    $(document).on('keyup','#QtyInput1', function() {
            $.ajax({
                url: 'http://localhost/shop/dashboard/setQty',
                type: "post",
                data: {value:$(this).val()},
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
            url: 'http://localhost/shop/dashboard/setOtherParams',
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
            url: 'http://localhost/shop/dashboard/showCompanyInfo',
            type: "post",
            data: {
                companyName:$('#companyName').val(),
                companyPhone:$('#companyPhone').val()
            },
            dataType: 'html',
            success: function(response) {
                $('#ship1').html(response);
            }
        });
    });

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
    });
}
















