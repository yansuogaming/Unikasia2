$(document).ready(function () {
    setWidthHeightElement();
    loadTotalServiceCart();
    setClockLastHourTour();
    $(window).resize(function () {
        setWidthHeightElement();
    });
    moreLessClick(
        ".clickSeemore",
        ".More",
        ".Less",
        ".semoreClick",
        ".LessClick"
    );
    moreLessClick(
        ".clicSeemore",
        ".More",
        ".Less",
        ".semoreClick",
        ".LessClick"
    );
    if ($(".slider__home").length > 0) {
        var $owl = $(".slider__home");
        $owl.owlCarousel({
            loop: true,
            nav: true,
            lazyLoad: true,
            dots: false,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 3000,
            responsiveClass: true,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                1200: {
                    items: 1,
                    nav: false,
                },
            },
        });
    }
    if ($(".qc__box--slider").length > 0) {
        var $owl = $(".qc__box--slider");
        $owl.owlCarousel({
            loop: false,
            nav: false,
            animateOut: "slideOutDown",
            animateIn: "flipInX",
            navText: "",
            lazyLoad: true,
            dots: true,
            margin: 0,
            autoplay: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                1200: {
                    items: 1,
                },
            },
        });
    }
    if ($(".photo-slider").length > 0) {
        var $owl = $(".photo-slider");
        $owl.owlCarousel({
            lazyLoad: false,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            navText: "",
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                },
                1200: {
                    items: 1,
                    nav: true,
                },
            },
        });
    }
    if ($(".owl_carousel_4_item").length > 0) {
        var $owl = $(".owl_carousel_4_item");
        $owl.owlCarousel({
            loop: false,
            nav: true,
            lazyLoad: true,
            dots: false,
            navText: "",
            margin: 30,
            autoplay: false,
            responsiveClass: true,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
            responsive: {
                0: {
                    items: 1.3,
                    margin: 0,
                    loop: false,
                },
                580: {
                    items: 2,
                    margin: 15,
                },
                767: {
                    items: 2,
                    margin: 30,
                },
                991: {
                    items: 3,
                    margin: 20,
                },
                1023: {
                    items: 3,
                    margin: 30,
                },
                1200: {
                    items: 4,
                    margin: 30,
                },
            },
        });
    }
    if ($(".owl_carousel_3_item").length > 0) {
        var $owl = $(".owl_carousel_3_item");
        $owl.owlCarousel({
            loop: false,
            nav: true,
            lazyLoad: true,
            dots: false,
            navText: "",
            margin: 30,
            autoplay: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                },
                600: {
                    items: 2,
                    margin: 20,
                },
                767: {
                    items: 2,
                    margin: 30,
                },
                991: {
                    items: 3,
                    margin: 20,
                },
                1023: {
                    items: 3,
                    margin: 30,
                },
            },
        });
    }
    if ($(".carousel--one__item").length > 0) {
        var $owl = $(".carousel--one__item");
        var _type = $owl.attr("_type"),
            _nav = false,
            _loop = true,
            _dots = false;
        if (_type == "detail__tour") {
            _nav = true;
        }
        $owl.owlCarousel({
            loop: _loop,
            nav: _nav,
            navText: "",
            lazyLoad: true,
            dots: _dots,
            margin: 0,
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
        });
    }
    $(".numberCatTour").click(function () {
        if ($(this).hasClass("open")) {
            $(".listTravelStyle2").hide();
            $(this).removeClass("open");
        } else {
            $(".listTravelStyle2").show();
            $(this).addClass("open");
        }
    });
    $(".lazy").lazy({
        effect: "fadeIn",
        effectTime: 20,
        threshold: 0,
    });
    if ($("#listCountryDes").length > 0) {
        var $owl = $("#listCountryDes");
        $owl.owlCarousel({
            loop: false,
            nav: true,
            lazyLoad: true,
            dots: false,
            margin: 30,
            autoplay: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1.2,
                    margin: 20,
                    nav: false,
                },
                601: {
                    items: 1.5,
                    margin: 20,
                },
                720: {
                    items: 2,
                    margin: 20,
                },
                767: {
                    items: 2.5,
                    margin: 20,
                },
                991: {
                    items: 3,
                    margin: 20,
                },
                1200: {
                    items: 4,
                },
            },
        });
    }
    if ($("#TopBlogHome").length > 0) {
        var $owl = $("#TopBlogHome");
        $owl.owlCarousel({
            loop: false,
            nav: true,
            lazyLoad: true,
            dots: false,
            margin: 30,
            autoplay: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                600: {
                    items: 2,
                    nav: false,
                    margin: 20,
                },
                800: {
                    items: 3,
                    nav: false,
                    margin: 20,
                },
                1200: {
                    items: 4,
                    nav: false,
                },
            },
        });
    }
    if ($("#whyWithUs").length > 0) {
        var owl = $("#whyWithUs");
        owl.owlCarousel({
            loop: true,
            items: 3,
            dots: false,
            nav: false,
            navText: "",
            margin: 15,
            autoplay: true,
            autoplayTimeout: 4000,
            lazyLoad: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                481: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
            },
        });
    }
    if ($(".owl_slide_3item_container_width").length > 0) {
        var $owl = $(".owl_slide_3item_container_width");
        $owl.owlCarousel({
            loop: false,
            nav: false,
            dots: true,
            margin: 30,
            autoplay: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                720: {
                    items: 2,
                    margin: 15,
                },
                992: {
                    items: 2,
                    margin: 20,
                },
                1200: {
                    items: 3,
                    mouseDrag: false,
                },
            },
        });
    }
    if ($("#jcarousel-related-slides").length > 0) {
        var $owl = $("#jcarousel-related-slides");
        $owl.owlCarousel({
            loop: false,
            margin: 30,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                600: {
                    items: 2,
                    nav: false,
                },
                1200: {
                    items: 3,
                    nav: false,
                },
            },
        });
        $("#next_1").click(function () {
            $("#jcarousel-related-slides .owl-next").trigger("click");
        });
        $("#prev_1").click(function () {
            $("#jcarousel-related-slides .owl-prev").trigger("click");
        });
    }
    $(".H_Box_title").click(function () {
        $(this).find(".body-down").toggleClass("fa-minus");
        $(this).next().slideToggle();
    });
    if ($("#ht_jcarousel-related-slides").length > 0) {
        var $owl = $("#ht_jcarousel-related-slides");
        $owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 30,
            responsiveClass: true,
        });
        $("#next_1").click(function () {
            $("#jcarousel-related-slides .owl-next").trigger("click");
        });
        $("#prev_1").click(function () {
            $("#jcarousel-related-slides .owl-prev").trigger("click");
        });
    }
    if ($(".owl_slider_room_hotels").length > 0) {
        var $owl = $(".owl_slider_room_hotels");
        $owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            nav: true,
            navText: [
                "<span class='fa fa-angle-left'></span>",
                "<span class='fa fa-angle-right'></span>",
            ],
            dots: true,
            lazyLoad: true,
        });
    }
    if ($(".owl_slide_testimonial").length > 0) {
        var $owl = $(".owl_slide_testimonial");
        $owl.owlCarousel({
            items: 3,
            loop: true,
            nav: true,
            dots: false,
            lazyLoad: true,
            responsiveClass: true,
            navText: [
                "previous<span class='fa fa-angle-left'></span>",
                "next<span class='fa fa-angle-right'></span>",
            ],
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    dots: true,
                    nav: false,
                },
                600: {
                    items: 2,
                    margin: 20,
                    dots: true,
                },
                992: {
                    items: 3,
                    margin: 30,
                },
            },
        });
    }
    if ($(".owl_slide_testimonial_cruise").length > 0) {
        var $owl = $(".owl_slide_testimonial_cruise");
        $owl.owlCarousel({
            items: 3,
            loop: true,
            nav: true,
            dots: false,
            lazyLoad: true,
            responsiveClass: true,
            navText: [
                "<span class='fa fa-angle-left'></span>",
                "<span class='fa fa-angle-right'></span>",
            ],
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    dots: true,
                    nav: false,
                    dotsData: ["Text dot"],
                },
                600: {
                    items: 2,
                    margin: 20,
                    dots: true,
                    nav: false,
                    dotsData: ["Text dot"],
                },
                992: {
                    items: 3,
                    margin: 30,
                },
            },
        });
    }
    if ($(".box_list_reviews").length > 0) {
        var $owl = $(".box_list_reviews");
        $owl.owlCarousel({
            items: 3,
            loop: false,
            nav: true,
            dots: false,
            lazyLoad: true,
            responsiveClass: true,
            navText: [
                "<span class='fa fa-angle-left'></span>",
                "<span class='fa fa-angle-right'></span>",
            ],
            responsive: {
                0: {
                    items: 1,
                    dots: true,
                    dotsData: true,
                    nav: false,
                },
                600: {
                    items: 2,
                    margin: 20,
                    dots: true,
                    dotsData: true,
                    nav: false,
                },
                992: {
                    items: 3,
                    margin: 30,
                },
            },
        });
    }
    if ($(".nav-pills.owl-carousel").length > 0) {
        var $owl = $(".nav-pills.owl-carousel");
        $owl.owlCarousel({
            items: 3,
            loop: true,
            nav: false,
            dots: false,
            autoWidth: true,
        });
    }
    if ($(".slider_PlaceToGo_box .placeItem").length > 1) {
        var $owl = $(".slider_PlaceToGo_box");
        $owl.owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            autoplay: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                500: {
                    items: 2,
                    nav: false,
                    margin: 20,
                },
                1200: {
                    items: 3,
                    nav: true,
                    margin: 30,
                },
            },
        });
        $("#next_1").click(function () {
            $(".slider_PlaceToGo_box .owl-next").trigger("click");
        });
        $("#prev_1").click(function () {
            $(".slider_PlaceToGo_box .owl-prev").trigger("click");
        });
    }
    $(".countdown-timer").each(function () {
        var $_this = $(this);
        var $_date = $_this.data("date");
        $_this
            .countdown($_date, function (event) {
                var $this = $(this).html(event.strftime("%D ngày %H:%M:%S"));
            })
            .on("finish.countdown", function (event) {});
    });
    if ($("#tabsk a.current").length == 0) {
        $("#tabsk a:first").addClass("current");
    }
    $("#tabsk a").each(function (index) {
        $(this).attr("data", index);
    });
    $("#lstTabs .contentTab").each(function (index) {
        $(this).attr("id", "tab-" + index);
    });
    $("#lstTabs .contentTab:not(:first)").hide();
    $("#tabsk a").click(function () {
        var _this = $(this);
        $("#tabsk a.current").removeClass("current");
        _this.addClass("current");
        var cu_id = _this.attr("data");
        $("#lstTabs .contentTab:visible").hide();
        $("#tab-" + cu_id).show();
        return false;
    });
    $(".moreH").click(function () {
        if ($(this).hasClass("ex")) {
            $("#box_1").hide();
            $("#box_2").show();
        } else {
            $("#box_1").show();
            $("#box_2").hide();
        }
    });
    $(document).on(
        "click",
        ".attractive_tour--content #show-more",
        function (ev) {
            var $_this = $(this);
            var _type = $_this.attr("_type");
            _Action = "ajLoadMoreTopTourPromotion";
            if (_type == "TopTrip") {
                _Action = "ajLoadMoreTopTourHomePage";
            }
            $_this.find(".ajax-loader").show();

            $pageLastest++;
            $.ajax({
                type: "POST",
                url:
                    path_ajax_script +
                    "/index.php?mod=home&act=" +
                    _Action +
                    "&lang=" +
                    LANG_ID,
                data: {
                    page: $pageLastest,
                },
                dataType: "html",
                success: function (html) {
                    $_this.find(".ajax-loader").hide();
                    $(".list_tours").append(html);
                    $(".lazy").lazy({
                        effect: "fadeIn",
                        effectTime: 20,
                        threshold: 0,
                    });
                },
            });
            setInterval(function () {
                loadPageShowMore();
            }, 100);
        }
    );
    $(document).on(
        "click",
        ".attractive_tour--content #show-more-top-tour",
        function (ev) {
            var $_this = $(this);
            var _type = $_this.attr("_type");
            _Action = "ajLoadMoreTopTourPromotion";
            if (_type == "TopTrip") {
                _Action = "ajLoadMoreTopTourHomePage";
            }
            $_this.find(".ajax-loader").show();

            $pageLastest++;
            $.ajax({
                type: "POST",
                url:
                    path_ajax_script +
                    "/index.php?mod=homepro&act=" +
                    _Action +
                    "&lang=" +
                    LANG_ID,
                data: {
                    page: $pageLastest,
                },
                dataType: "html",
                success: function (html) {
                    $_this.find(".ajax-loader").hide();
                    $(".list_tours").append(html);
                    $(".lazy").lazy({
                        effect: "fadeIn",
                        effectTime: 20,
                        threshold: 0,
                    });
                    setClockLastHourTour();
                },
            });
            setInterval(function () {
                loadPageShowMore();
            }, 100);
        }
    );
    $(document).on(
        "click",
        ".attractive_tour--content #show-more-tour-professional",
        function (ev) {
            var $_this = $(this);
            var _type = $_this.attr("_type");
            _Action = "ajLoadMoreTopTourPromotion";
            if (_type == "TopTrip") {
                _Action = "ajLoadMoreTopTourHomePage";
            }
            $_this.find(".ajax-loader").show();

            $pageLastest++;
            $.ajax({
                type: "POST",
                url:
                    path_ajax_script +
                    "/index.php?mod=homepackage&act=" +
                    _Action +
                    "&lang=" +
                    LANG_ID,
                data: {
                    width: width,
                    page: $pageLastest,
                },
                dataType: "html",
                success: function (html) {
                    $_this.find(".ajax-loader").hide();
                    $(".list_tours").append(html);
                    $(".lazy").lazy({
                        effect: "fadeIn",
                        effectTime: 20,
                        threshold: 0,
                    });
                    setWidthHeightElement();
                    setClockLastHourTour();
                },
            });
            setInterval(function () {
                loadPageShowMore();
            }, 100);
        }
    );
    $(document).on("click", ".btn_write_review_not_login", function () {
        if (loggedIn != 1) {
            window.location.href =
                path_ajax_script + "tai-khoan/dang-nhap/r=" + REQUEST_URI;
        }
        return false;
    });
    $(".btn_write_review_login").click(function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $("#writeTourReview").hide(500);
        } else {
            $(this).addClass("active");
            $("#writeTourReview").show(500);
        }
    });
    $(".btn_write_review_no_login").click(function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $("#writeTourReview").hide(500);
        } else {
            $(this).addClass("active");
            $("#writeTourReview").show(500);
        }
    });
    $(document).on("click", ".exitLogin", function () {
        if (loggedIn != 1) {
            window.location.href =
                path_ajax_script + "tai-khoan/dang-nhap/r=" + REQUEST_URI;
            //alert(path_ajax_script + 'tai-khoan/dang-nhap/r='+REQUEST_URI);
        }
        return false;
    });
    $(document).on("click", ".exitLoginHome", function () {
        if (loggedIn != 1) {
            window.location.href = path_ajax_script + "tai-khoan/dang-nhap/r=";
        }
        return false;
    });
    $(".addWishlist").click(function () {
        var $_this = $(this);
        $.ajax({
            type: "POST",
            url: path_ajax_script + "/index.php?mod=home&act=ajUpdateWishlist",
            data: {
                clsTable: $_this.data("clsTable"),
                target_id: $_this.data("data"),
            },
            dataType: "html",
            success: function (html) {
                if (html.indexOf("_EXIST") >= 0) {
                    alert("You already save this list wishlist");
                } else {
                    loadTotalWishlist(
                        $_this.data("data"),
                        $_this.data("clsTable")
                    );
                }
            },
        });
    });
    $(".DeleteWishlist").click(function () {
        var $_this = $(this);
        $.ajax({
            type: "POST",
            url: path_ajax_script + "/index.php?mod=home&act=ajDeleteWishlist",
            data: {
                clsTable: $_this.attr("clsTable"),
                target_id: $_this.attr("id"),
            },
            dataType: "html",
            success: function (html) {
                if (html.indexOf("_SUCCESS") >= 0) {
                    location.href = "/account/my-wishlist.html";
                } else {
                    location.href = "/account/my-wishlist.html";
                }
            },
        });
    });
    init_carousel = function (b, a) {
        if (a == "" || a == undefined) {
            a = 1;
        }
        $(b).owlCarousel({
            lazyLoad: false,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            navText: [
                '<i class="glyphicon glyphicon-menu-left"></i>',
                '<i class="glyphicon glyphicon glyphicon-menu-right"></i>',
            ],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                },
                768: {
                    items: a,
                    nav: true,
                },
            },
        });
    };
    /*////Why-Faq/////*/
    $(".gotoFAQ").click(function () {
        var s = $(this),
            i = $("#FAQ-BOX-" + s.attr("rel")).offset().top;
        $("body,html").animate(
            {
                scrollTop: i,
            },
            500
        );
    }),
        $(".clickFAQ").click(function () {
            $(this).hasClass("current") ||
                ($(".list-group-FAQs .current").removeClass("current"),
                $(this).addClass("current"),
                $(".fa-minus-circle")
                    .removeClass("fa-minus-circle")
                    .addClass("fa-plus-circle"),
                $(this)
                    .find("i")
                    .removeClass("fa-plus-circle")
                    .addClass("fa-minus-circle"),
                $(".list-group-FAQs dd:visible").slideUp(),
                $(this).next("dd").slideDown());
        });
});
function setClockLastHourTour() {
    $(".clock_last_hour").each(function () {
        var $_this = $(this);
        var $_date = $_this.data("date");
        var $tour_start_date_id = $_this.data("tour_start_date_id");
        $_this
            .countdown($_date, function (event) {
                var format = "%H:%M:%S";
                if (event.offset.totalDays > 0) {
                    format = "%D ngày " + format;
                }
                $_this.html(event.strftime("Còn " + format));
            })
            .on("finish.countdown", function () {});
    });
}
function loadTotalServiceCart() {
    $.ajax({
        type: "POST",
        url:
            path_ajax_script +
            "/index.php?mod=cart&act=ajaxGetTotalServiceCart&lang=" +
            LANG_ID,
        dataType: "html",
        success: function (html) {
            if (html > 0) {
                $("#number_cart").show().html(html);
                $("#number_cart_mobile").show().html(html);
            } else {
                $("#number_cart").hide();
                $("#number_cart_mobile").hide();
            }
        },
    });
}
function ClickHref(_url) {
    window.location.href = _url;
}
function loadTotalWishlist(target_id, clsTable) {
    var adata = { target_id: target_id, clsTable: clsTable };
    $.ajax({
        type: "POST",
        url: path_ajax_script + "/index.php?mod=home&act=ajaxLoadTotalWishlist",
        data: adata,
        dataType: "html",
        success: function (html) {
            $("#addwishlist" + clsTable + target_id).html(html);
        },
    });
}
function setWidthHeightElement() {
    var $ww = $(window).width();
    var $wc = $(".container").width();
    var $wlf = ($ww - $wc) / 2;
    var $wtopleft = $wlf + $("#logo").width();
    var $wtopright = $ww - $wtopleft;
    var $wblog = $ww / 2 - $wlf;
    var $setHeightLeft = $(".colleft_setHeight").height();
    var $w_imgtourHome = $(".TripItem .image").width();
    $("#header .bordertopLeft").width($wtopleft);
    $("#header .bordertopRight").width($wtopright);
    $(".lastterOffer .owl-carousel .owl-item.active").width($ww - $wlf - 10);
    $("#container_5 #sticky-wrapper").css({ right: $wlf });
    var $h_imgtourHome = $(".TripItem .image").height($w_imgtourHome / 1.5);
    var $destinationHeight = $(".listDestination").height();
    var $sidebarLeft = $(".sidebarLeft").height();
    if ($destinationHeight == 0) {
        $(".AZDestinationGuide").remove();
        $("#destinationAZ").remove();
    }
    if ($sidebarLeft == 0) {
        $(".destinationLink").remove();
    }
    if ($ww >= 1140) {
        $(".removeblock1140").remove();
    }
    if ($ww < 1140) {
        $(".removehidden1140").remove();
    }
    if ($ww <= 768) {
        $(".768left").remove();
        $(".lfillterDesTop").remove();
    }
    if ($ww > 768) {
        $(".lfillterMobile").remove();
    }
}
function Room_info(ht_formatTextStandard_ht_id, click_id) {
    $("." + click_id)
        .find(".fa-less")
        .toggleClass("fa-angle-double-left");
    $("." + ht_formatTextStandard_ht_id).slideToggle();
}
function loadPageShowMore($number_per_page) {
    var $number_show = $(".list_tours .box:visible").size();
    if ($number_show >= totalRecord) {
        $(".attractive_tour--content .view_more").remove();
    }
}
function owl1ItemFullWidth(
    $owl_set_class,
    $loop = true,
    $autoplay,
    $nav = true,
    dots = false,
    $lazyLoad = true
) {
    var $owl = $($owl_set_class);
    $owl.owlCarousel({
        items: 1,
        loop: $loop,
        autoplay: $autoplay,
        nav: $nav,
        dots: $dots,
        lazyLoad: $lazyLoad,
    });
}
function owl2ItemFullWidth(
    $owl_set_class,
    $loop = true,
    $autoplay,
    $nav = true,
    dots = false,
    $lazyLoad = true
) {
    var $owl = $($owl_set_class);
    $owl.owlCarousel({
        loop: $loop,
        autoplay: $autoplay,
        nav: $nav,
        dots: $dots,
        lazyLoad: $lazyLoad,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
                margin: 10,
            },
            1024: {
                items: 2,
                margin: 20,
            },
            1200: {
                items: 2,
                margin: 30,
            },
        },
    });
}
function owl2ItemFullContainer(
    $owl_set_class,
    $loop = true,
    $autoplay,
    $nav = true,
    dots = false,
    $lazyLoad = true
) {
    var $owl = $($owl_set_class);
    $owl.owlCarousel({
        loop: $loop,
        autoplay: $autoplay,
        nav: $nav,
        dots: $dots,
        lazyLoad: $lazyLoad,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
                margin: 10,
            },
            1024: {
                items: 2,
                margin: 20,
            },
            1200: {
                items: 2,
                margin: 30,
            },
        },
    });
}
function owl3ItemFullContainer(
    $owl_set_class,
    $loop = true,
    $autoplay,
    $nav = true,
    dots = false,
    $lazyLoad = true
) {
    var $owl = $($owl_set_class);
    $owl.owlCarousel({
        loop: $loop,
        autoplay: $autoplay,
        nav: $nav,
        dots: $dots,
        lazyLoad: $lazyLoad,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            654: {
                items: 2,
                margin: 15,
            },
            992: {
                items: 2,
                margin: 20,
            },
            1200: {
                items: 3,
                margin: 30,
            },
        },
    });
}
function owl4ItemFullContainer(
    $owl_set_class,
    $loop = true,
    $autoplay,
    $nav = true,
    dots = false,
    $lazyLoad = true
) {
    var $owl = $($owl_set_class);
    $owl.owlCarousel({
        loop: $loop,
        autoplay: $autoplay,
        nav: $nav,
        dots: $dots,
        lazyLoad: $lazyLoad,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
                margin: 10,
            },
            768: {
                items: 2,
                margin: 20,
            },
            992: {
                items: 3,
                margin: 30,
            },
            1024: {
                items: 4,
                margin: 20,
            },
            1140: {
                items: 4,
                margin: 30,
            },
            1200: {
                items: 4,
            },
        },
    });
}
function moreLessSetHeight(
    $closest_class,
    $parent_class,
    $more_click_class,
    $less_click_class
) {
    $($more_click_class).on("click", function () {
        $(this)
            .closest($closest_class)
            .find($parent_class)
            .css("height", "auto");
        $(this).closest($closest_class).find($less_click_class).show();
        $(this).hide();
    });
    $($less_click_class).on("click", function () {
        $(this).closest($closest_class).find($parent_class).removeAttr("style");
        $(this).closest($closest_class).find($more_click_class).show();
        $(this).hide();
    });
}
function moreLessClick(
    $closest_class,
    $more_class,
    $less_class,
    $more_click_class,
    $less_click_class
) {
    $(document).on("click", $more_click_class, function () {
        $(this).closest($closest_class).find($more_class).hide();
        $(this).closest($closest_class).find($less_class).show();
    });
    $(document).on("click", $less_click_class, function () {
        $(this).closest($closest_class).find($less_class).hide();
        $(this).closest($closest_class).find($more_class).show();
    });
}
function moreLessSetHeightNew($closest_class, $parent_class, $more, $less) {
    $($more).on("click", function () {
        var $_this = $(this);
        if (!$_this.hasClass($less)) {
            $_this.addClass($less);
            $_this
                .closest($closest_class)
                .find($parent_class)
                .css("height", "auto");
            $_this.html("Ẩn");
        } else {
            $_this.removeClass($less);
            $_this
                .closest($closest_class)
                .find($parent_class)
                .css("height", "155px");
            $_this.html("Xem thêm");
        }
    });
}
