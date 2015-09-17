/**
 * Created by Karen on 15.09.2015.
 */

var step = 1;

$('#next').click(function() {

    step++;
    $('#back').show();
    switch(step) {
        case 1: {
            $('#step1').show();
            $('#step2').hide();
            $('#step3').hide();
            $('#submit').hide();
            break;
        }
        case 2: {
            $('#step1').hide();
            $('#step2').show();
            $('#step3').hide();
            $('#submit').hide();
            break;
        }
        case 3: {
            var sendData = $('#shopInfo').serialize();
            $.ajax({
                type: "post",
                data: sendData,
                url: 'http://localhost/shop/dashboard/processingForm',
                dataType: 'html',
                success: function(response) {
                    $('#processing').html('<p>'+ response +'</p>');
                }
            });

            $.ajax({
                type: "post",
                data: {value:'true'},
                url: 'http://localhost/shop/dashboard/reviewOrder',
                dataType: 'html',
                success: function(response) {
                    $('#step3').html(response);
                }
            });



            break;

        }

        case 4: {
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').show();
            $('#submit').show();
            $('#next').hide();
            break;
        }
    }
});

$('#back').click(function() {
    step--;
    $('#submit').hide();
    $('#next').show();
    switch(step) {
        case 3: {
            step--;
            $('#processing').html(" ");
            $('#step3').html(' ');
            $('#step1').hide();
            $('#step2').show();
            $('#step3').hide();
            break;
        }

        case 2: {
            $('#processing').html("");
            $('#step1').hide();
            $('#step2').show();
            $('#step3').hide();
            break;
        }
        case 1: {
            $('#step1').show();
            $('#step2').hide();
            $('#step3').hide();
            $('#back').hide();
            break;
        }
    }
});

$('#submit').click(function () {
    step = 1;
});

if (step == 1) {
    $('#back').hide();
};


/*OPEN FORMS*/
$('#step2').find('li').find('span').click(function() {
    $(this).parent().find('.openform').slideToggle();
    $(this).parent().find('span:first').attr('class', 'glyphicon glyphicon-arrow-down')
});




