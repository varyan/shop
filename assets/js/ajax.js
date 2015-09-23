/**
 * Created by Karen on 14.09.2015.
 */

$(document).ready(function() {

    $(document).on('click','#crr', function() {
        $.ajax({
            type: "POST",
            data: {value:$('#crr').data('name')} ,
            url: 'dashboard/create_company',
            success: function() {
                window.location.replace("company_page");
            }
        })
    });

     /**
     * ----------------------------------------------
     *  Working when admin want choose company
     * ----------------------------------------------
     * */
    $('#chooseCompany').keyup(function() {
        var a = ($('#chooseCompany').val()).trim();
        if (!a) {
            $('#companies').find('li:first').hide();
        } else {
            $('#waiting').show();
            $.ajax({
                type: "POST",
                data: {value:($('#chooseCompany').val()).trim()} ,
                url: 'dashboard/get_companies',
                dataType: 'html',
                success: function(response) {
                    $('#companies').html(response).show();
                    $('#waiting').hide();
                }
            })
        };
    });

});
