$(function() {

    let subtotal = $('#subtotal', this).attr('subtotal');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: "/get-province",
        cache: false,
        success: function(msg) {
            $('#province').html(msg);
        },
        error: function(data) {
            console.log(data);
        }
    })

    $('#province').on('change', function() {
        let province_id = $('#province').val();

        $.ajax({
            type: 'POST',
            url: "/get-city/" + province_id,
            data: {
                'province_id': province_id
            },
            cache: false,
            success: function(msg) {
                $('#regency').html(msg);
            },
            error: function(data) {
                console.log(data);
            }
        })
    })

    $('#regency').on('change', function() {
        let city_id = $('#regency').val();

        $.ajax({
            type: 'POST',
            url: "/get-courier",
            data: {
                'city_id': city_id
            },
            cache: false,
            success: function(msg) {
                $('#courier').html(msg);
            },
            error: function(data) {
                console.log(data);
            }
        })
    })

    $('#courier').on('change', function() {
        let city_id = $('#regency').val();
        let courier_id = $('#courier').val();
        let weight = $('#weight').val();

        $.ajax({
            type: 'POST',
            url: "/get-package",
            data: {
                'courier_id': courier_id,
                'city_id': city_id,
                'weight': weight,
            },
            cache: false,
            success: function(msg) {
                $('#package').html(msg);
            },
            error: function(data) {
                console.log(data);
            }
        })
    })

    $('#package').on('change', function() {
        let estimate = $('option:selected', this).attr('estimasi') + " Hari";
        let shipping = $('option:selected', this).attr('ongkir');

        // Change format rupiah
        let reverse_shipping = shipping.toString().split('').reverse().join(''),
            format_shipping = reverse_shipping.match(/\d{1,3}/g);
            format_shipping = format_shipping.join('.').split('').reverse().join('');

        let total = Number(shipping) + Number(subtotal);
        console.log(total);

        let reverse_total = total.toString().split('').reverse().join(''),
            format_total = reverse_total.match(/\d{1,3}/g);
            format_total = format_total.join('.').split('').reverse().join('');

        $.ajax({
            type: 'POST',
            url: "/get-estimate",
            data: {
                'estimate': estimate,
                'shipping': format_shipping,
                'total' : format_total
            },
            cache: false,
            success: function(msg) {
                $('#estimate').html(msg);
                $('input[name=estimate]').val(estimate);

                $('#shipping').html("Rp. " + format_shipping + ",00");
                $('input[name=shipping]').val(Number(shipping));

                $('#total').html("Rp. " + format_total + ",00");
                $('input[name=total]').val(total);
            },
            error: function(data) {
                console.log(data);
            }
        })
    })
});
