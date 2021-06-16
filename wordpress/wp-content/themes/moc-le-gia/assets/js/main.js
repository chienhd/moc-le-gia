$('span.toggle-sub-menu').click(function () {
    let next = $(this).next('.sub-menu').hasClass('sub-menu-active');
    if (!next) {
        $(this).next('.sub-menu').addClass('sub-menu-active');
    } else {
        $(this).next('.sub-menu').removeClass('sub-menu-active');
    }
    $(this).find('.fa').toggle();
})
$(".footer_widget_title").click(function () {
    $(this).next().slideToggle('active');
});
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
    navText: [
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/prev_banner.png'>", 
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/next_banner.png'>"
    ]
});


$('.home-carousel-news').owlCarousel({
    responsive: {
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
    navText: [
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/prev_banner.png'>", 
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/next_banner.png'>"
    ]
});

$('.home-video__top_start-video').click(function () {
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
        576: {
            items: 3
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
    padding: 20,
    smartSpeed: 450,
    autoHeight: false,
    loop: true,
    autoplay: false,
    nav: true,
    dots: false,
    navText: [
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/prev_banner.png'>", 
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/next_banner.png'>"
    ]
});

$('.home-partner-carousel').owlCarousel({
    responsive: {
        0: {
            items: 3
        },
        992: {
            items: 5,
        }
    },
    margin: 15,
    padding: 20,
    smartSpeed: 450,
    autoHeight: true,
    loop: true,
    autoplay: false,
    nav: false,
    dots: false,
});


$(document).ready(function () {
    $('.tab_chitiet #tabs_list ul li').on('click', function ($event) {
        $('.tab_chitiet #tabs_list ul li').removeClass('active');
        $($event.currentTarget).addClass('active');
        let tabShowed = $($event.target).attr('aria-label');
        $('.tab_chitiet .tab_content_container .content_tab').css('display', 'none');
        $('.tab_chitiet .tab_content_container .content_tab' + tabShowed).css('display', 'block');
    })
});

$('.product-carousel').owlCarousel({
    center: true,
    items: 2,
    loop: true,
    
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1,
            margin: 10,
        },
        576: {
            items: 2,
            margin: 10,
        },
        768: {
            items: 2,
            margin: 15,
        },
        992: {
            items: 2,
            margin: 20,
        },
        1024: {
            items: 2,
            margin: 30,
        }
    },
    // navText: [
    //     "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/prev_banner.png'>", 
    //     "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/next_banner.png'>"
    // ]
});

document.addEventListener("DOMContentLoaded", function(event) { 
    Chocolat(document.querySelectorAll('.chocolat-parent .chocolat-image'), {
        loop: true,
        imageSize: 'contain',
        allowZoom: true,
    }) 
})

/*category product*/

$('.box_item .title_widget .name-cts').click(function () {
    if ($(this).closest('.box_item').hasClass('active') == true) {
        $(this).closest('.box_item').removeClass('active');
        $(this).find('i').removeClass('fa-minus-square-o').addClass('fa-plus-square-o');
    } else {
        $(this).closest('.box_item').addClass('active');
        $(this).find('i').removeClass('fa-plus-square-o').addClass('fa-minus-square-o');
    }
})


$('.box_item_child .title').click(function () {
    if ($(this).closest('.box_item_child').hasClass('active') == true) {
        $(this).closest('.box_item_child').removeClass('active');
    } else {
        $(this).closest('.box_item_child').addClass('active');
    }
})

$('.show-room__slider').owlCarousel({
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 3
        },
        768: {
            items: 5
        },
    },
    margin: 25,
    padding: 20,
    smartSpeed: 450,
    autoHeight: true,
    loop: true,
    autoplay: false,
    nav: true,
    dots: false,
    navText: [
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/prev_banner.png'>", 
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/next_banner.png'>"
    ]
});


$('.slide_camnhan').owlCarousel({
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 3
        },
        768: {
            items: 3
        },
    },
    margin: 20,
    padding: 20,
    smartSpeed: 450,
    autoHeight: true,
    loop: true,
    autoplay: false,
    nav: true,
    dots: false,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ]
});

$('.home-interior-knowledge__slider').owlCarousel({
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 2
        },
        768: {
            margin: 20,
            items: 2,
        },
        992: {
            margin: 25,
            items: 3,
        },
    },
    nav: true,
    margin: 20,
    padding: 20,
    smartSpeed: 450,
    autoHeight: true,
    loop: true,
    autoplay: false,
    dots: false,
    navText: [
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/prev_banner.png'>", 
        "<img src='/wp-content/themes/moc-le-gia/assets/images/icon/next_banner.png'>"
    ]
});

$('.download-attachment').click(function(e) {
    e.preventDefault();  //stop the browser from following
    var url = $(this).data('url');
    var a = document.createElement('a');
    a.href = url;
    a.download = url;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
})

$('.open-quick-view').click(function(e) {
    e.preventDefault();
    let $this = $(this);
    let product_id = $this.attr('data-id');
    $.ajax({
        type : "post", //Phương thức truyền post hoặc get
        dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
        url : woocommerce_params.ajax_url, //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
        data : {
            action: "get_single_product", //Tên action
            product_id: product_id
        },
        beforeSend: function(){
            //Làm gì đó trước khi gửi dữ liệu vào xử lý
        },
        content: this,
        success: function(response, textStatus, jqXHR) {
            if(response.success) {
                let htmlData = response.data;

                $('#append-quick-view-product').html("").html($(htmlData));
                $('.woocommerce-product-gallery').css('opacity', 1);
                $('.wpgs-thumb').addClass('owl-carousel owl-theme owl-loaded owl-drag');
                $('.wpgs-image').addClass('owl-carousel owl-theme owl-loaded owl-drag');
                var sync1 = $('.wpgs-image'),
                sync2 = $('.wpgs-thumb'),
                duration = 300,
                thumbs = 4;

                // Sync nav
                sync1.on('click', '.owl-next', function () {
                    sync2.trigger('next.owl.carousel')
                });
                sync1.on('click', '.owl-prev', function () {
                    sync2.trigger('prev.owl.carousel')
                });

                // Start Carousel
                sync1.owlCarousel({
                    center: true,
                    loop: true,
                    items: 1,
                    margin: 5,
                    padding: 0,
                    smartSpeed: 500,
                    lazyLoad: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    dots: false,
                    nav: true,
                    navText: [
                        '<span class="slick-prev slick-arrow" aria-label="prev" style=""></span>',
                        '<span class="slick-next slick-arrow" aria-label="Next" style=""></span>'
                    ]
                }).on('dragged.owl.carousel', function (e) {
                    if (e.relatedTarget._drag.direction == 'left') {
                        sync2.trigger('next.owl.carousel')
                    } else {
                        sync2.trigger('prev.owl.carousel')
                    }
                });

                sync2.owlCarousel({
                    loop: true,
                    items: thumbs,
                    margin: 2,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    smartSpeed: 500,
                    nav: false,
                    dots: false,
                    responsive: {
                        0: {
                            items: 3
                        },
                        768: {
                            items: 4
                        }
                    }
                }).on('click', '.owl-item', function () {
                    var i = $(this).index() - (thumbs + 1);
                    sync2.trigger('to.owl.carousel', [i, duration, true]);
                    sync1.trigger('to.owl.carousel', [i, duration, true]);
                });

                $('.woocommerce-product-gallery__lightbox').css({'display': 'block', 'opacity': 1})
                
                $('.wpgs-wrapper').css("opacity", "1");
                $('.wpgs-wrapper').fadeIn();

                $('#modal-quickview-product').modal('show');
            } else {
                console.log(response);
            }

        },
        error: function( jqXHR, textStatus, errorThrown ){
            console.log(jqXHR);
        }
    })
    return false;
})