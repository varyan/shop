/**
 * Created by Karen on 14.09.2015.
 */



$(document).ready(function() {

    $('#chooseCompany').keyup(function() {
        $('#waiting').show();
        $.ajax({
            type: "POST",
            data: {value:$('#chooseCompany').val()} ,
            url: 'http://localhost/shop/dashboard/getCompanies',
            dataType: 'html',
            success: function(response) {
                $('#companies').html(response).show();
                $('#waiting').hide();
            }
        })
    });

});
