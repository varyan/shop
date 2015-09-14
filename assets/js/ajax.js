/**
 * Created by Karen on 14.09.2015.
 */



$(document).ready(function() {

    $('#chooseCompany').change(function() {
        $('#waiting').show();
        alert('karen');
        $.ajax({
            type: "POST",
            data: 'kar',
            url: 'http://localhost/shop/dashboard/getCompanies',
            dataType: 'html',
            success: function(response) {
                $('#companies').html(response).show();
                $('#waiting').hide();
            }
        })
    });

});
