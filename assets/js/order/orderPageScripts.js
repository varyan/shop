$(document).ready(function() {

        /**
         * ----------------------------------------------
         *  MAIN CONTROLLER FOR STEPS
         * ----------------------------------------------
         * */
        var step = 1;

        if (step == 1) {
            $('#orderNext').hide();
        }

        $('#orderNext').click(function () {
            step++;

            switch(step) {
                case 1: {
                    break;
                }
                case 2: {
                    $(this).show();
                    $('#orderBack').show();
                    $('#orderStep2').show();
                    $('#orderStep1').hide();
                    break;
                }
                case 3: {
                    $('#orderStep2').hide();
                    $('#orderStep3').show();
                    break;
                }
                case 4: {
                    $('#orderStep3').hide();
                    $('#orderStep4').show();
                    break;
                }
                case 5: {
                    $(this).hide();
                    $('#orderStep4').hide();
                    $('#orderStep5').show();
                    break;
                }
                default: {
                    break;
                }
            }
        });

        $('#orderBack').click(function () {
            step--;

            switch(step) {
                case 4: {
                    $('#orderNext').show();
                    $('#orderStep5').hide();
                    $('#orderStep4').show();
                    break;
                }
                case 3: {
                    $('#orderStep4').hide();
                    $('#orderStep3').show();
                    break;
                }
                case 2: {

                    $('#orderStep3').hide();
                    $('#orderStep2').show();
                    break;
                }
                case 1: {
                    $('#orderNext').hide();
                    $('#orderStep2').hide();
                    $('#orderStep1').show();
                    $(this).hide();
                    break;
                }
                default: {
                    break;
                }
            }
        });

        $(document).on('click','.openBox', function(e) {
            var self = $(this);
            e.preventDefault();
            $(this).next('.boxOptions').show();
            $.ajax({
                url: 'order/get_ship_info',
                type: 'post',
                data: {id:$(this).data('id')},
                dataType: 'html',
                success: function(response) {
                    self.next('.boxOptions').find('.orderShipTo').html('<h3>Ship To</h3>');
                    self.next('.boxOptions').find('.orderShipTo').append(response);
                }
            });
            self.next('.boxOptions').find('.aaa').attr('value',self.data('id'));
        });

        $('#forStep2').click(function() {
            $("#orderNext").trigger("click");

        });


    }
);