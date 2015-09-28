/**
 *
 */

$(document).ready(function() {

    $(document).on('click', '#products', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'products/get_all_products',
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });

    });

    /**
     * Add product step 0
     */
    $(document).on('click', '#addProduct', function() {
        $('#show_orders').html('<img src="assets/images/ajax-loader.gif" />');
        $.ajax({
            url: 'products/add_product',
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
    });

    /**
     * Add product step 1
     */
    $(document).on('click', '.selectProductType', function(e) {
        e.preventDefault();
        var self = $(this);
        $('#show_orders').html('<img src="assets/images/ajax-loader.gif" />');
        $.ajax({
            url: 'products/add_product1',
            type: 'post',
            data: {type:self.data('type')},
            dataType: 'html',
            success: function(response) {
                $('#show_orders').html(response);
            }
        });
    });

    /**
     * Add product step 2
     */
    $(document).on('submit', '#add-product', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'products/add_product2',
            type: 'post',
            data: $('#add-product').serialize(),
            dataType: 'json',
            success: function(response) {
                $(document).find('#add_image').trigger('submit');
                console.log(response['response']);
            }
        });
    });

    $(document).on('submit', '#add_image', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'products/add_product2',
            type: 'post',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            dataType: 'json',
            success: function(response) {
                console.log(response['response']);
            }
        });
    });



});

/*



$(document).ready(function() {

    $("#uploadImage").on('submit', function(event){
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'http://localhost/test.local/user/uploadImage',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            dataType: 'json',
            success: function(response) {
                alert(response.message);
                $('#gallery').append(' <div class="col-md-3"><img class="img-responsive uploadedImage" src="'+ response.src +'" alt=""/></div>');
            }
        });
    });

    $(":file").on('change', function () {

        var reader = new FileReader();
        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    });

});*/
