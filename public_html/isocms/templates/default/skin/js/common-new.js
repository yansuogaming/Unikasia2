$(document).ready(function () {
    if ($('#carousel_home_news').length) {
        $('#carousel_home_news').owlCarousel({
            loop: true,
            margin: 33,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                }
            }
        });
    }
    $('#explore_travel_styles_carousel').owlCarousel({
        loop: true,
        margin: 15,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('#home_customer_reivews').owlCarousel({
        loop: true,
        margin: 36,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"], // Sử dụng các biểu tượng mũi tên của Font Awesome
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });
    $('#tour_alsoLike_owl').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        items: 4
    })
    //  JS New Header
    $(function () {
        let hoverTimeout;
        $('.unika_destination_hover').hover(
            function () {
                // Clear any existing timeout to prevent unexpected behavior
                clearTimeout(hoverTimeout);
                // Set a timeout to delay the hover actions by 1 second (1000 milliseconds)
                hoverTimeout = setTimeout(() => {
                    let data_class = $(this).attr('data-class');
                    $('.unika_img_country').removeClass('active');
                    $(`.${data_class}`).addClass('active');;
                }, 100); // 1 second delay
            },
            function () {
                // Clear the timeout if the user stops hovering before the delay is over
                clearTimeout(hoverTimeout);
            }
        );
        $('.unika_dropdown_cruises').hover(
            function () {
                // Clear any existing timeout to prevent unexpected behavior
                clearTimeout(hoverTimeout);
                // Set a timeout to delay the hover actions by 1 second (1000 milliseconds)
                hoverTimeout = setTimeout(() => {
                    $('.unika_dropdown_cruises, .unika_hover_item').removeClass('active');
                    $(this).addClass('active');
                    $('.unika_cruises_hover').removeClass('active');
                    $(this).find('.unika_cruises_hover').addClass('active');
                    let img = $(this).attr('data-img');
                    $('.unika_cruises_img img').attr('src', img);
                }, 100); // 1 second delay
            },
            function () {
                // Clear the timeout if the user stops hovering before the delay is over
                clearTimeout(hoverTimeout);
            }
        );
        $('.unika_hover_item').hover(
            function () {
                // Clear any existing timeout to prevent unexpected behavior
                clearTimeout(hoverTimeout);
                // Set a timeout to delay the hover actions by 1 second (1000 milliseconds)
                hoverTimeout = setTimeout(() => {
                    $('.unika_hover_item').removeClass('active');
                    let img = $(this).attr('data-img');
                    $('.unika_cruises_img img').attr('src', img);
                }, 100); // 1 second delay
            },
            function () {
                // Clear the timeout if the user stops hovering before the delay is over
                clearTimeout(hoverTimeout);
            }
        );
        // Các trang ko có menu trong
        if ((mod === 'guide' && act === 'detail') || (mod === 'guide' && act === 'tag') || (mod === 'hotel' && act === 'detail') || (mod === 'blog' && act === 'detail') || (mod === 'tour' && act === 'detaildeparture') || (mod === 'about' && act === 'success') || (mod === 'tour_new' && act === 'contact') || (mod === 'destination' && act === 'attraction') || (mod === 'cruise' && act === 'detail')) {
            if ($('.unika_header').hasClass('unika_header_2')) {
                $('.unika_header').removeClass('unika_header_2');
            }
        }
        $(window).scroll(function () {
            let isScrolled = $(this).scrollTop() > 0;
            let unika_header = $('.unika_header');
            if (unika_header.hasClass('unika_true')) {
                if ((mod === 'guide' && act === 'detail') || (mod === 'guide' && act === 'tag') || (mod === 'destination' && act === 'place') || (mod === 'tour' && act === 'cat') || (mod === 'guide' && act === 'cat') || (mod === 'tour' && act === 'detaildeparture') || (mod === 'destination' && act === 'attraction') || (mod === 'cruise' && act === 'detail')) {
                    //
                } else {
                    if (isScrolled) {
                        unika_header.removeClass('unika_header_2');
                    } else {
                        unika_header.addClass('unika_header_2');
                    }
                }
            }
            if ((mod === 'destination' && act === 'place') || (mod === 'tour' && act === 'cat') || (mod === 'guide' && act === 'cat')) {
                let isScrolled2 = $(this).scrollTop() >= 615;
                $('.des_tailor_top').toggleClass('des_tailor_top_sticky', isScrolled2);
                $('.des_tailor_top').css('top', isScrolled2 ? '0px' : '');
                var elemTop = $('.bg-footer').offset().top;
                var elemBottom = elemTop + $('.bg-footer').height();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                if (elemBottom <= viewportBottom && elemTop >= viewportTop) {
                    unika_header.removeClass('unika_header_2');
                    unika_header.addClass('fixed');
                    $('.des_tailor_top').css('top', isScrolled ? '138px' : '');
                } else {
                    unika_header.addClass('unika_header_2');
                    unika_header.removeClass('fixed');
                }
            } else {
                if (isScrolled) {
                    unika_header.addClass('fixed');
                } else {
                    unika_header.removeClass('fixed');
                }
            }
        })
        $(document)
            .on('click', '.unika_btn_close_menu ', function () {
                $('.unika_menu_navbar').collapse('hide');
            })
    })
    // JS New Footer
    $(document).on('click', '.unika_footer_title', function () {
        let screenWidth = $(window).width();
        if (screenWidth <= 991) {
            let list_link = $(this).parents('.unika_footer_item').find('.unika_footer_list_link');
            if (list_link.hasClass('active')) {
                list_link.removeClass('active');
            } else {
                list_link.addClass('active');
            }
        }
    });
    // JS Click Detail
    
    // var clickedDetails = JSON.parse(sessionStorage.getItem('clickedDetails')) || [];
    // var maxItemsToShow = 4;
    // function updateClickedDetails() {
    //     var clickedDetailsContainer = $(".clicked-details");
    //     clickedDetailsContainer.empty();
    //     var reversedClickedDetails = clickedDetails.slice().reverse();
    //     if (clickedDetails.length > 0) {
    //         $(".recentlyViewed").show();
    //     } else {
    //         $(".recentlyViewed").hide();
    //     }
    //     $.each(reversedClickedDetails.slice(0, maxItemsToShow), function (index, detail) {
    //         var detailElement = $(detail);
    //         var wrapperDiv = $("<div>").addClass("revVier");
    //         detailElement.wrapAll(wrapperDiv);
    //         clickedDetailsContainer.append(detailElement.parent());
    //     });
    // }
    // $(".box_hotel_item").click(function () {
    //     var clickedDetail = $(this).html();
    //     if (clickedDetails.indexOf(clickedDetail) === -1) {
    //         clickedDetails.push(clickedDetail);
    //         updateClickedDetails();
    //         sessionStorage.setItem('clickedDetails', JSON.stringify(clickedDetails));
    //         // Kiểm tra và hiển thị nút "Xem thêm" khi có hơn 3 phần tử
    //         if (clickedDetails.length > 4) {
    //             $(".btnShowViewed").show();
    //             $('.clicked-details').toggleClass("mbReviews", false);
    //         } else {
    //             $('.clicked-details').toggleClass("mbReviews", true);
    //         }
    //     }
    // });
    // $(".btnShowViewed").click(function () {
    //     maxItemsToShow = clickedDetails.length;
    //     updateClickedDetails();
    //     updateShowMoreButton();
    // });
    // $(".btnNoneViewed").click(function () {
    //     maxItemsToShow = 3;
    //     updateClickedDetails();
    //     updateShowMoreButton();
    // });
    // function updateShowMoreButton() {
    //     var btnShowViewed = $(".btnShowViewed");
    //     var btnNoneViewed = $(".btnNoneViewed");
    //     if (clickedDetails.length <= 3) {
    //         btnShowViewed.hide();
    //         btnNoneViewed.hide();
    //     } else {
    //         if (maxItemsToShow === 3) {
    //             btnShowViewed.show();
    //             btnNoneViewed.hide();
    //         } else {
    //             btnShowViewed.hide();
    //             btnNoneViewed.show();
    //         }
    //     }
    // }
    // if (clickedDetails.length <= 3) {
    //     $(".btnShowViewed").hide();
    // }
    // updateClickedDetails();
    // updateShowMoreButton();
});