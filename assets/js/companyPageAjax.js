/**
 * Created by Karen on 14.09.2015.
 */



$(document).ready(function() {

    $('#chooseProduct').keyup(function() {
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


    $(document).on('submit','.form', function(e) {
        e.preventDefault();
        var sendData = $(this).serialize();
        Request('dashboard/showProductInfo',sendData);
    });


    $('#next').click(function() {
        $('#step1').hide();
        $('#step2').show();
    });


    $('#step2').find('li').click(function() {
        $(this).find('.openform').slideToggle();
        $(this).find('span').attr('class', 'glyphicon glyphicon-arrow-down')
    })




});


function Request(url,data){
    $.ajax({
        url:url,
        data:data,
        type:"POST",
        success: function (response) {
            console.log(response);
        }
    });
}
















