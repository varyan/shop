/**
 * Created by Karen on 14.09.2015.
 */



$(document).ready(function() {

    /**
     * ----------------------------------------------
     *  Working when admin want choose company
     * ----------------------------------------------
     * */
    $('#chooseCompany').keyup(function() {
        var a = $('#chooseCompany').val();
        if (!a) {
            $('#companies').find('li:first').hide();
        } else {
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
        };
    });

});
