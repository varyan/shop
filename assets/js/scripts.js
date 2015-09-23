/**
 * Created by Karen on 15.09.2015.
 */

var step = 1;
/**
 * ----------------------------------------------
 *  Actions for #next button click
 * ----------------------------------------------
 * */
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
                url: 'dashboard/processing_form',
                dataType: 'json',
                success: function(response) {
                    $('#processing').html('<p>'+ response['message'] +'</p>');
                }
            });

            break;
        }

        case 4: {
            $.ajax({
                type: "post",
                data: {value:'true'},
                url: 'dashboard/review_order',
                dataType: 'html',
                success: function(response) {
                    $('#step3').html(response);
                }
            });
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').show();
            $('#submit').show();
            $('#next').hide();
            break;
        }
    }
});

/**
 * ----------------------------------------------
 *  Actions for #back button click
 * ----------------------------------------------
 * */
$('#back').click(function() {
    step--;
    $('#submit').hide();
    $('#next').show();
    switch(step) {
        case 4: {
            step--;
            $('#step3').show();
            $('#step4').hide();
            break;
        }

        case 3: {
            step--;
            $('#processing').html(" ");
            $('#step3').html(' ').hide();
            $('#step1').hide();
            $('#step2').show();
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


/**
 * ----------------------------------------------
 *  Other Actions
 * ----------------------------------------------
 * */
var submit = true
 $('#submit').click(function (e) {
     if (submit == true) {
         e.preventDefault();
         step++ ;
         $("#step3").hide();
         $("#step4").show();
         $('#submit').hide();
     };

     submit = false;
});

$('#done').click(function() {
    $('#submit').trigger('click');
});

if (step == 1) {
    $('#back').hide();
};


/**
 * ----------------------------------------------
 *  Open Forms
 * ----------------------------------------------
 * */
 $('#step2').find('li').find('span').click(function() {
    $(this).parent().find('.openform').slideToggle();
    $(this).parent().find('span:first').toggleClass('glyphicon-arrow-down');
});




