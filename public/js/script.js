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

// $('.img-product img').mouseenter(function () {
//     $('.img-product').addClass('active-hover');

//     $('.img-product').mouseleave(function () {
//         $('.img-product').removeClass('active-hover');
//     });

// });

// $('body').on('mouseenter', '.active-hover', function () {
//     $('.btn-view').css({
//         'display': 'block'
//     });
// });

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
            alert(response.msg);
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
                alert(res.msg);
            }
        });
    }
});
