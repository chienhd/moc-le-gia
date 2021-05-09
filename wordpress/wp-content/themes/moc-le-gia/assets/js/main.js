$('span.toggle-sub-menu').click(function () {
    let next = $(this).next('.sub-menu').hasClass('sub-menu-active');
    if (!next) {
        $(this).next('.sub-menu').addClass('sub-menu-active');
    } else {
        $(this).next('.sub-menu').removeClass('sub-menu-active');
    }
    $(this).find('.fa').toggle();
})

$('#btn-toggle-menu').click(function () {
    let isOpen = $('#masthead').hasClass('open');
    if (!isOpen) {
        $('#masthead').addClass('open');
        $('#bs-primary-navbar-collapse').addClass('open');
        $('.close-menu').addClass('open');
    } else {
        $('#masthead').removeClass('open');
        $('#bs-primary-navbar-collapse').removeClass('open');
        $('.close-menu').removeClass('open');
    }

})
$(document).mouseup(function (e) {
    let container = $("#bs-primary-navbar-collapse");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.removeClass('open');
        $('.close-menu').removeClass('open');
    }
});

$('.primary-carousel').owlCarousel({
    items: 1,
    margin: 0,
    stagePadding: 0,
    smartSpeed: 450,
    autoHeight: false,
    loop: true,
    autoplay: true,
    nav: true,
    navText: ["<img src='/wp-content/themes/moc-le-gia/assets/images/icon/prev_banner.png'>", "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/next_banner.png'>"]
});



$('.home-carousel-news').owlCarousel({
     responsive:{
        0: {
            items: 1,
        },
        576: {
            items: 2,
        },
    },
    margin: 20,
    stagePadding: 10,
    smartSpeed: 450,
    autoHeight: false,
    loop: true,
    autoplay: false,
    nav: true,
    dots: false,
    navText: ["<img src='/wp-content/themes/moc-le-gia/assets/images/icon/prev_banner.png'>", "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/next_banner.png'>"]
});

$('.home-video__top_start-video').click(function() {
    $(this).hide();
    $(this).next('iframe').css({'z-index': 2,})
    let src = $(this).next('iframe').attr('src');
    $(this).next('iframe').attr('src', src + '?autoplay=1');
})

$('.home-carousel-client').owlCarousel({
    responsive: {
        0: {
           items: 1
        },
        768: {
           items: 3,
        },
        992: {
           items: 5,
        }
    },
    center: true,
    margin: 0,
    padding: 10,
    smartSpeed: 450,
    autoHeight: false,
    loop: true,
    autoplay: false,
    nav: true,
    dots: false,
    navText: ["<img src='/wp-content/themes/moc-le-gia/assets/images/icon/prev_banner.png'>", "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/next_banner.png'>"]
});
