$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// run preloader
$(document).ready(function () {
    $('.preloader').fadeOut();
    $('body').css({
        'overflow': 'unset'
    });
});

// make cookie cart
$('body').on('click', '#buy', function (e) {
    e.preventDefault();

    const url = $(this).attr('href'),
        id = $(this).data('id');

    $.ajax({
        url: url,
        method: 'post',
        data: {
            id: id
        },
        success: function (response) {
            $('#cart').html(response.cart);
            Toast.fire({
                type: 'success',
                title: 'Added to cart'
            })
        }
    });
});

// canceled cart
$('body').on('click', '.remove-cart', function (e) {
    e.preventDefault();

    const url = $(this).attr('href'),
        id = $(this).data('id'),
        alert = window.confirm('Cancel this product?');

    if (alert) {
        $.ajax({
            url: url,
            method: 'post',
            data: {
                id: id
            },
            success: function (res) {
                location.reload();
                $('#cart').html(res.cart);
                Toast.fire({
                    type: 'success',
                    title: 'Canceled'
                })
            }
        });
    }
});
