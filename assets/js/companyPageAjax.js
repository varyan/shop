/**
 * Created by Karen on 14.09.2015.
 */



$(document).ready(function() {

    $('#chooseProduct').keyup(function() {
        $('#products').show();
        $.ajax({
            type: "POST",
            data: {value:$('#chooseProduct').val()} ,
            url: 'http://localhost/shop/dashboard/getProducts',
            dataType: 'json',
            success: function(response) {
                $('#products').html(response['message']);
            }
        })
    });

    $('#chooseProduct').blur(function() {
        /*$('#products').hide();*/
    });


    $(document).on('submit','.form', function(e) {
        e.preventDefault();
        $('#products').hide();
        $('#dataInfo').show();
        var sendData = $(this).serialize();
        Request('http://localhost/shop/dashboard/selectProduct',sendData);
    });



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

});


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
















