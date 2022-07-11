$(document).ready(function() {

    $('.addToCartBtn').click(function(e) {
        e.preventDefault();

        var products_id = $(this).closest('.product-data').find('.product-id').val();
        var products_qty = $(this).closest('.product-data').find('.input-counter__text').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'products_id': products_id,
                'products_qty': products_qty
            },
            success: function(response) {
                swal(response.status).then(function() {
                    location.reload();
                });
            }
        })
    })
})
