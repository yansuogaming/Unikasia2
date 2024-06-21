<!-- Cruise -->
<link rel="stylesheet" href="{$URL_CSS}/thanh_cruise.css?v={$upd_version}">
<link rel="preload" href="{$URL_CSS}/thanh_cruise.css?v={$upd_version}">


<!--
<section id="breadcrumb-cruises">
    <div class="container">
        <ul class="breadcrumb-nav" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li class="breadcrumb-nav-first">You are here:</li>
            <li class="breadcrumb-nav-list">
                <div itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"> <a itemprop="item"
                        href="https://unikasia.vietiso.com/" title="Home"> <span itemprop="name"
                            class="breadcrumb-activeItem">Home</span></a>
                    <meta itemprop="position" content="1"> <img style="margin-left: 8px;"
                        src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/arow.svg"
                        alt="error">
                </div>
                <div itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"> <a itemprop="item"
                        href="/cruises" title="cruises"> <span itemprop="name"
                            class="breadcrumb-activeItem">Cruises</span></a>
                    <meta itemprop="position" content="2"> <img style="margin-left: 8px;"
                        src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/arow.svg"
                        alt="error">
                </div>
                <div itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="active"> <a
                        itemprop="item" href="/cruises/vietnam" title="Vietnam"> <span itemprop="name"
                            class="breadcrumb-activeItem">Vietnam</span></a>
                    <meta itemprop="position" content="3">
                </div>
                <div itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="active"> <a
                        itemprop="item" href="/cruises/vietnam" title="Vietnam"> <span itemprop="name"
                            class="breadcrumb-item">Halong Bay cruises</span></a>
                    <meta itemprop="position" content="4">
                </div>
            </li>
        </ul>
    </div>
</section>
-->


<section class="page_container cruise_des">
<section class="listcruise_breadcrumb">
    <div class="breadcrumb_list">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="txt_youarehere">You are here:</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{PCMS_URL}" title="{$core->get_Lang('Home')}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{PCMS_URL}cruise" title="{$core->get_Lang('Cruise')}">Cruise</a></li>
                    <li class="breadcrumb-item"><a href="{PCMS_URL}cruise/vietnam" title="{$core->get_Lang('Vietnam')}">Vietnam</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Halong Bay cruises</li>
                </ol>
            </div>
        </div>
    </div>
</section>



<div id="contentPage" class="cruisesPlacePage pdt40">
    <div class="container">
        <div class="nsdt_row_content">
            <div class="list-hotel-item">
                <div class="filter-hotel-item">
                    <h2 class="result_search">Sort &amp; filter</h2>
                    <h2 class="result_searchs" data-bs-title="Show Sort &amp; filter"
                        data-bs-custom-class="custom-tooltip" data-bs-toggle="offcanvas" href="#nsdt_show_filter"
                        data-bs-placement="top">Sort &amp; filter</h2>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="nsdt_show_filter"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header"> <button type="button"
                                class="btn-close btn-close-filter bi bi-chevron-left" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            <h2 class="filter-title-mobile">Sort &amp; filter</h2>
                        </div>
                        <div class="offcanvas-body"> </div>
                    </div>
                    <div class="modal fade" id="filter_search" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="filter_left">
                                    <div class="modal-header">
                                        <h2> <button type="button" class="close" data-bs-dismiss="modal"> <span
                                                    aria-hidden="true">X</span> <span class="sr-only">Close</span>
                                            </button> Search
                                        </h2>
                                    </div>
                                    <div class="filter_cruise">
                                        <div class="filter_left_search">
                                            <form action="" method="post" id="search_hotel_left"> <input type="hidden"
                                                    name="search_hotel_left" value="search_hotel_left">
                                                <div class="find_Box">
                                                    <div class="box_body_filter_title ">
                                                        Destinations
                                                    </div>
                                                    <div class="box_filter_body filter_destination">
                                                        <div class="filter_list_item">
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    class="form-check-input checkCityDesTop"
                                                                    type="radio" name="country[]" id="country1"
                                                                    value="1" checked=""> <label
                                                                    class="form-check-label labelCheck"
                                                                    for="country1"><a class="filter_link"
                                                                        href="/cruises/vietnam"
                                                                        title="Vietnam"><label>Vietnam</label></a>
                                                                </label> </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    class="form-check-input checkCityDesTop"
                                                                    type="radio" name="country[]" id="country2"
                                                                    value="3"> <label
                                                                    class="form-check-label labelCheck"
                                                                    for="country2"><a class="filter_link"
                                                                        href="/cruises/cambodia"
                                                                        title="Cambodia"><label>Cambodia</label></a>
                                                                </label> </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    class="form-check-input checkCityDesTop"
                                                                    type="radio" name="country[]" id="country3"
                                                                    value="7"> <label
                                                                    class="form-check-label labelCheck"
                                                                    for="country3"><a class="filter_link"
                                                                        href="/cruises/thailan"
                                                                        title="ThaiLan"><label>ThaiLan</label></a>
                                                                </label> </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    class="form-check-input checkCityDesTop"
                                                                    type="radio" name="country[]" id="country3"
                                                                    value="7"> <label
                                                                    class="form-check-label labelCheck"
                                                                    for="country3"><a class="filter_link"
                                                                        href="/cruises/thailan"
                                                                        title="ThaiLan"><label>Laos</label></a>
                                                                </label> </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    class="form-check-input checkCityDesTop"
                                                                    type="radio" name="country[]" id="country3"
                                                                    value="7"> <label
                                                                    class="form-check-label labelCheck"
                                                                    for="country3"><a class="filter_link"
                                                                        href="/cruises/thailan"
                                                                        title="ThaiLan"><label>Myanmar</label></a>
                                                                </label> </div>
                                                        </div> <span class="readmore" style="display: none;">More</span>
                                                    </div>
                                                </div>
                                                <div class="find_Box">
                                                    <div class="box_body_filter_title">
                                                        Duration
                                                    </div>
                                                    <div class="box_filter_body filter_cities">
                                                        <div class="filter_list_item">
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox" name="city[]"
                                                                    class="form-check-input typeSearch" value="383"
                                                                    id="city1"> <label
                                                                    class="form-check-label labelCheck" for="city1">
                                                                    2 day </label> </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox" name="city[]"
                                                                    class="form-check-input typeSearch" value="392"
                                                                    id="city2"> <label
                                                                    class="form-check-label labelCheck" for="city2">
                                                                    3 day </label> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="find_Box">
                                                    <div class="box_body_filter_title">
                                                        Price
                                                    </div>
                                                    <div class="box_filter_body">
                                                        <div class="filter_list_item nsdt_filter-price-hotel">
                                                            <div class="nsdt_checkPriceHotel">
                                                                <div class="check_ipt"> <input type="checkbox"
                                                                        name="price_range[]"
                                                                        class="input_item typeSearch" value="1"
                                                                        id="priceRange1"> <label for="priceRange1"
                                                                        class="labelCheck">50</label> </div>
                                                                <div class="check_ipt"> <input type="checkbox"
                                                                        name="price_range[]"
                                                                        class="input_item typeSearch" value="2"
                                                                        id="priceRange2"> <label for="priceRange2"
                                                                        class="labelCheck">100</label> </div>
                                                                <div class="check_ipt"> <input type="checkbox"
                                                                        name="price_range[]"
                                                                        class="input_item typeSearch" value="3"
                                                                        id="priceRange3"> <label for="priceRange3"
                                                                        class="labelCheck">200</label> </div>
                                                                <div class="check_ipt"> <input type="checkbox"
                                                                        name="price_range[]"
                                                                        class="input_item typeSearch" value="4"
                                                                        id="priceRange4"> <label for="priceRange4"
                                                                        class="labelCheck">400</label> </div>
                                                                <div class="check_ipt"> <input type="checkbox"
                                                                        name="price_range[]"
                                                                        class="input_item typeSearch" value="5"
                                                                        id="priceRange5"> <label for="priceRange5"
                                                                        class="labelCheck">600</label> </div>
                                                                <div class="check_ipt"> <input type="checkbox"
                                                                        name="price_range[]"
                                                                        class="input_item typeSearch" value="6"
                                                                        id="priceRange6"> <label for="priceRange6"
                                                                        class="labelCheck">1000000</label> </div>
                                                                <div class="check_ipt"> <input type="checkbox"
                                                                        name="price_range[]"
                                                                        class="input_item typeSearch" value="7"
                                                                        id="priceRange7"> <label for="priceRange7"
                                                                        class="labelCheck">1000000</label> </div>
                                                            </div>
                                                            <div class="nsdt_getPriceHotel">
                                                                1
                                                            </div>
                                                            <div class="nsdt_getPriceHotel">
                                                                2
                                                            </div>
                                                            <div class="nsdt_getPriceHotel">
                                                                3
                                                            </div>
                                                            <div class="nsdt_getPriceHotel">
                                                                4
                                                            </div>
                                                            <div class="nsdt_getPriceHotel">
                                                                5
                                                            </div>
                                                            <div class="nsdt_getPriceHotel">
                                                                6
                                                            </div>
                                                            <div class="nsdt_getPriceHotel">
                                                                7
                                                            </div>
                                                            <div class="nsdt_getPriceHotelTitle" data-id="1"> </div>
                                                            <div class="nsdt_getPriceHotelTitle" data-id="2">
                                                                50
                                                            </div>
                                                            <div class="nsdt_getPriceHotelTitle" data-id="3">
                                                                100
                                                            </div>
                                                            <div class="nsdt_getPriceHotelTitle" data-id="4">
                                                                200
                                                            </div>
                                                            <div class="nsdt_getPriceHotelTitle" data-id="5">
                                                                400
                                                            </div>
                                                            <div class="nsdt_getPriceHotelTitle" data-id="6">
                                                                600
                                                            </div>
                                                            <div class="nsdt_getPriceHotelTitle" data-id="7">
                                                                1000000
                                                            </div>
                                                            <div class="price-hotel-items">
                                                                <div id="price_0" class="price-hotel-itemMin">0</div>
                                                                <div id="price_1" class="price-hotel-itemMax">$1000000
                                                                </div>
                                                            </div>
                                                            <div id="slider-price2"
                                                                class="mb10 ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                                    style="left: 0%; width: 100%;"></div><span
                                                                    tabindex="0"
                                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                                    style="left: 0%;"></span><span tabindex="0"
                                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                                    style="left: 100%;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="find_Box">
                                                    <div class="box_body_filter_titleRank">
                                                        Property rating
                                                    </div>
                                                    <div class="box_filter_body">
                                                        <div class="filter_list_item">
                                                            <div class="check_ipt"> <input type="checkbox"
                                                                    name="star_id[]"
                                                                    class="form-check-input input_item typeSearch checkRankHotel"
                                                                    value="6" id="star1"> <label class="labelCheck"
                                                                    for="star1">6 <img style="margin-left: 8px;"
                                                                        src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/star.svg"
                                                                        alt="error"></label> </div>
                                                            <div class="check_ipt"> <input type="checkbox"
                                                                    name="star_id[]"
                                                                    class="form-check-input input_item typeSearch checkRankHotel"
                                                                    value="5" id="star2"> <label class="labelCheck"
                                                                    for="star2">5 <img style="margin-left: 8px;"
                                                                        src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/star.svg"
                                                                        alt="error"></label> </div>
                                                            <div class="check_ipt"> <input type="checkbox"
                                                                    name="star_id[]"
                                                                    class="form-check-input input_item typeSearch checkRankHotel"
                                                                    value="4" id="star3"> <label class="labelCheck"
                                                                    for="star3">4 <img style="margin-left: 8px;"
                                                                        src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/star.svg"
                                                                        alt="error"></label> </div>
                                                            <div class="check_ipt"> <input type="checkbox"
                                                                    name="star_id[]"
                                                                    class="form-check-input input_item typeSearch checkRankHotel"
                                                                    value="3" id="star4"> <label class="labelCheck"
                                                                    for="star4">3 <img style="margin-left: 8px;"
                                                                        src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/star.svg"
                                                                        alt="error"></label> </div>
                                                            <div class="check_ipt"> <input type="checkbox"
                                                                    name="star_id[]"
                                                                    class="form-check-input input_item typeSearch checkRankHotel"
                                                                    value="2" id="star5"> <label class="labelCheck"
                                                                    for="star5">2 <img style="margin-left: 8px;"
                                                                        src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/star.svg"
                                                                        alt="error"></label> </div>
                                                            <div class="check_ipt"> <input type="checkbox"
                                                                    name="star_id[]"
                                                                    class="form-check-input input_item typeSearch checkRankHotel"
                                                                    value="1" id="star6"> <label class="labelCheck"
                                                                    for="star6">No rank</label> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="find_Box">
                                                    <div class="box_body_filter_title">
                                                        Cruises type
                                                    </div>
                                                    <div class="box_filter_body filter_cruises">
                                                        <div class="filter_list_item">
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="879" id="typeHotel1">
                                                                <label class="labelCheck" for="typeHotel1">Bai Tu Long
                                                                    Bay Cruises</label>
                                                            </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="880" id="typeHotel2">
                                                                <label class="labelCheck" for="typeHotel2">Lan Ha Bay
                                                                    Cruises</label>
                                                            </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="881" id="typeHotel3">
                                                                <label class="labelCheck" for="typeHotel3">Luxury
                                                                    Cruises Halong</label>
                                                            </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="882" id="typeHotel4">
                                                                <label class="labelCheck" for="typeHotel4">Halong Bay
                                                                    Classic Cruises</label>
                                                            </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="883" id="typeHotel5">
                                                                <label class="labelCheck" for="typeHotel5">Private
                                                                    Cruises</label>
                                                            </div>
                                                        </div>
                                                        <span class="readmore">View more</span>
                                                    </div>
                                                </div>
                                                <div class="find_Box">
                                                    <div class="box_body_filter_title">
                                                        Number of cabins
                                                    </div>
                                                    <div class="box_filter_body filter_Number">
                                                        <div class="filter_list_item">
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="879" id="typeHotel1">
                                                                <label class="labelCheck" for="typeHotel1">1 - 5
                                                                    cabins</label>
                                                            </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="880" id="typeHotel2">
                                                                <label class="labelCheck" for="typeHotel2">6 - 10
                                                                    cabins</label>
                                                            </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="881" id="typeHotel3">
                                                                <label class="labelCheck" for="typeHotel3">11 - 20
                                                                    cabins</label>
                                                            </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="882" id="typeHotel4">
                                                                <label class="labelCheck" for="typeHotel4">21 - 30
                                                                    cabins</label>
                                                            </div>
                                                            <div class="check_ipt checkSizeFilter"> <input
                                                                    type="checkbox"
                                                                    class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                                                    name="type_hotel[]" value="883" id="typeHotel5">
                                                                <label class="labelCheck" for="typeHotel5">31+
                                                                    cabins</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button id="nsdt_btnSubmitFilterMobile">See results</button>
                                            </form>
                                        </div>
                                    </div>
                                    <script>
                                        var max_price_value = '7';
                                        var min_price_value = '1';
                                        var min_price_search = '';
                                        var max_price_search = '';
                                        var price_range_title_min = '&lt; &#036;50';
                                        var price_range_title_max = 'Dưới 1000000';
                                        var price_range = [];
                                        var PriceRange_title = {};
                                        $('.nsdt_getPriceHotel').each(function (index, element) {
                                            price_range.push(parseFloat($(element).text().trim()));
                                        });

                                        $('.nsdt_getPriceHotelTitle').each(function (index, element) {
                                            var id = $(element).data('id');
                                            var title = $(element).text().trim();
                                            PriceRange_title[id] = title;
                                        });

                                        $(".typeSearch").click(function () {
                                            $(this).blur();
                                        });
                                    </script>
                                    <script>
                                        $(".filter_cities").find(".checkSizeFilter:gt(4)").hide();
                                        $(".filter_property").find(".checkSizeFilter:gt(4)").hide();
                                        $(".filter_destination").find(".checkSizeFilter:gt(4)").hide();
                                        if ($(".filter_destination .checkSizeFilter").length < 5) $(".filter_destination .readmore").hide();
                                        if ($(".filter_cities .checkSizeFilter").length < 5) $(".filter_cities .readmore").hide();
                                        if ($(".filter_property .checkSizeFilter").length < 5) $(".filter_property .readmore").hide();

                                        $(document).on("click", ".readmore", function () {
                                            var $_this = $(this);
                                            if (!$_this.hasClass("less")) {
                                                $_this.addClass("less");
                                                $_this.closest(".find_Box").find(".filter_list_item").removeClass("short");
                                                $_this.closest(".find_Box").find(".checkSizeFilter").show();
                                                $_this.html('Less');
                                            } else {
                                                $_this.removeClass("less");
                                                $_this.closest(".find_Box").find(".filter_list_item").addClass("short");
                                                $_this.closest(".find_Box").find(".checkSizeFilter:gt(4)").hide();
                                                $_this.html('More');
                                            }
                                        });

                                        $('input[name="country[]"]').on('click', function () {
                                            window.location.href = $(this).siblings('label').find('a.filter_link').attr('href');
                                        });
                                        $(function () {
                                            var minPrice = Math.min.apply(null, price_range);
                                            var maxPrice = Math.max.apply(null, price_range);

                                            function updateSliderTitles(ui) {
                                                var id0 = ui.values[0];
                                                var id1 = ui.values[1];
                                                $("#price_0").html("$" + PriceRange_title[id0]);
                                                $("#price_1").html("$" + PriceRange_title[id1]);
                                            }

                                            $("#slider-price2").slider({
                                                range: true,
                                                min: parseInt(min_price_value),
                                                max: parseInt(max_price_value),
                                                values: [parseInt(min_price_value), parseInt(max_price_value)],
                                                slide: function (event, ui) {
                                                    updateSliderTitles(ui);
                                                },
                                                stop: function (event, ui) {
                                                    minPrice = ui.values[0];
                                                    maxPrice = ui.values[1];
                                                    if (minPrice >= maxPrice) {
                                                        minPrice = maxPrice - 1;
                                                        $("#slider-price2").slider("values", [minPrice, maxPrice]);
                                                    }

                                                    if (maxPrice <= minPrice) {
                                                        maxPrice = minPrice + 1;
                                                        $("#slider-price2").slider("values", [minPrice, maxPrice]);
                                                    }

                                                    $("#price_0").text("$" + PriceRange_title[minPrice]);
                                                    $("#price_1").text("$" + PriceRange_title[maxPrice]);


                                                    $("input[name='price_range[]']").each(function () {
                                                        var price = parseInt($(this).val());
                                                        if (price >= minPrice && price <= maxPrice) {
                                                            $(this).prop("checked", true);
                                                        } else {
                                                            $(this).prop("checked", false);
                                                        }
                                                    });
                                                    $('#search_hotel_left').submit();
                                                }
                                            });


                                            function updatePriceElements() {
                                                var minPrice = Math.min.apply(null, price_range);
                                                var maxPrice = Math.max.apply(null, price_range);
                                                $("#slider-price2").slider("values", [minPrice, maxPrice]);

                                                $("#price_0").html("$" + PriceRange_title[minPrice]);
                                                $("#price_1").html("$" + PriceRange_title[maxPrice]);
                                            }

                                            updateSliderTitles({ values: [0, 1] });
                                            updatePriceElements();

                                            if (minPrice < 2) {
                                                document.getElementById("price_0").innerHTML = 0;
                                            } else if (minPrice >= 2 && minPrice <= 6) {
                                                $("#price_0").html(PriceRange_title[minPrice]);
                                                $("#price_0").text($("#slider-price2").slider("values", 0));
                                            } else {
                                                document.getElementById("price_0").innerHTML = minPrice;
                                            }


                                        });
                                        $("#price_0").text($("#slider-price2").slider("values", 0));
                                        $("#price_1").text($("#price-range2").slider("values", 1));


                                        $(function () {
                                            var valueMin = $('#value_min').text();
                                            var valueMax = $('#value_max').text();
                                            $('.price-hotel-itemMin').text(valueMin);
                                            $('.price-hotel-itemMax').text(valueMax);


                                            $('.filter_list_item').each(function (index, elm) {
                                                var $_this = $(elm);
                                                var number_list = $(elm).find(".checkSizeFilter").length;
                                                if (number_list > 5) {
                                                    $(elm).addClass("short");
                                                    $_this.closest(".find_Box").find(".readmore").show();
                                                    $_this.find(".checkSizeFilter:gt(4)").hide();
                                                } else {
                                                    $(elm).removeClass("short");
                                                    $_this.closest(".find_Box").find(".readmore").hide();
                                                }
                                            });
                                        });

                                        $(function () {
                                            $('.checkCityDesTop').click(function () {
                                                var url = $(this).next('label').find('a.filter_link').attr('href');
                                                window.location.href = url;
                                            });
                                        });


                                        $(function () {
                                            function debounce(func, delay) {
                                                let debounceTimer;
                                                return function () {
                                                    const context = this;
                                                    const args = arguments;
                                                    clearTimeout(debounceTimer);
                                                    debounceTimer = setTimeout(() => func.apply(context, args), delay);
                                                };
                                            }

                                            $('#checkCityDesTop').click(function () {
                                                $('#search_hotel_left').submit();
                                            });

                                            $('#search_hotel_left .typeSearch').change(function () {
                                                $(this).closest('form').submit();
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-hotel-list">
                    <h2 class="head-title-hotel">Halong Bay Cruises: <span>595 cruises found</span></h2>
                    
                        <blockquote>
                            <p style="padding-bottom: 32px;">100% customizable Halong Bay Cruises. Idea to compose your
                                trip as you wish</p>
                        </blockquote>
                    <div class="box-hotel-style">
                        <div class="box_hotel_item 3">
                            <div class="img_hotel"> <a class="photo" href=""
                                    title="Scarlet Pearl Boat Cruise Halong Bay Hotel &amp; Spa"> <img
                                        class="img-responsive img100" src="{$URL_IMAGES}/Group 48178 (3).png"
                                        alt="Scarlet Pearl Boat Cruise Halong Bay Hotel &amp; Spa"> </a> </div>
                            <div class="box_item_body">
                                <div class="box_left_body">
                                    <h3 class="box_body_title"> <a class="text-decoration-none  txt-hover-home" href=""
                                            title="Scarlet Pearl Boat Cruise Halong Bay Hotel &amp; Spa">Scarlet Pearl
                                            Boat Cruise Halong Bay &amp;
                                            Spa</a> <label class="rate-1 rate-2023 mb0" style="width:100px"> <span
                                                style="width: 100%;"></span> </label> <img class="star" height="19"
                                            src="{$URL_IMAGES}/Frame 626159.png" alt="star" style="width: auto"> </h3>
                                    <div class="address">
                                        <div class="box_body_adress"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                                alt="error">
                                            <b>Place to visit:</b>
                                            <p>Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area - Halong
                                                International Cruise Port - Hanoi</p>
                                        </div>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/house-door 1.png" alt="error">
                                        <p>Cabin: 23</p>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/membrane 1.png" alt="error">
                                        <p>Material: Wooden junk</p>
                                    </div>
                                    <div class="box_body-check">
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>Breakfast included</p>
                                        </div>
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>No prepayment needed – pay at the property</p>
                                        </div>
                                    </div>
                                    <div class="box_body-service">
                                        Highlights
                                        <img src="{$URL_IMAGES}/maximize 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/family 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/bed 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/elevator 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/air-conditioner 1.png" alt="error">
                                        <div data-bs-title="More" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            class="box_body-service-item">
                                            +6
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_view_detail phone"><a class="bg_main" href="" title="View Detail">View
                                        Detail <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="box_right-body_mobile">
                                <div class="box_right_body">
                                    <div class="review" style="">
                                        <p>No review
                                            <span>
                                                (0 review)
                                            </span>
                                        </p>
                                        <div class="rate">0.0</div>
                                    </div>
                                    <div class="box_price">
                                        <div class="price_from_text">Avg price per night</div>
                                        <div class="div_price text-end">US
                                            <span>
                                                <p class="price">299 $</p>
                                            </span>
                                        </div>
                                        <div class="box_right-price"> </div>
                                        <div class="btn_view_detail no_phone"><a class=" btn-hover-home" href=""
                                                title="View Detail">Explore <img style="margin-left: 8px;"
                                                    src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                                                    alt="error"> </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade mapModal" id="mapModal486" tabindex="-1"
                                aria-labelledby="mapModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"> <button type="button" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button> </div>
                                        <div class="modal-body"> <iframe
                                                src="https://maps.google.it/maps?q=91 Tran Nhan Tong Street, Cam Chau, Hoi An, Vietnam&amp;output=embed"
                                                width="600" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_hotel_item 3">
                            <div class="img_hotel"> <a class="photo" href="/h484-citadines-pearl-hoi-an.html"
                                    title="Scarlet Pearl Boat Cruise Halong Bay">
                                    <img class="img-responsive img100" src="{$URL_IMAGES}/Group 48178 (4).png"
                                        alt="Scarlet Pearl Boat Cruise Halong Bay"> </a> </div>
                            <div class="box_item_body">
                                <div class="box_left_body">
                                    <h3 class="box_body_title"> <a class="text-decoration-none  txt-hover-home"
                                            href="/h484-citadines-pearl-hoi-an.html"
                                            title="Scarlet Pearl Boat Cruise Halong Bay">Scarlet Pearl Boat Cruise
                                            Halong Bay</a> <label class="rate-1 rate-2023 mb0" style="width:80px"> <span
                                                style="width: 100%;"></span> </label> <img class="star" height="19"
                                            src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/star/find-004-star.png"
                                            alt="star" style="width: auto"> </h3>
                                    <div class="address">
                                        <div class="box_body_adress"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                                alt="error">
                                            <b>Place to visit:</b>
                                            <p>Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area - Halong
                                                International Cruise Port - Hanoi</p>
                                        </div>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/house-door 1.png" alt="error">
                                        <p>Cabin: 23</p>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/membrane 1.png" alt="error">
                                        <p>Material: Wooden junk</p>
                                    </div>
                                    <div class="box_body-check">
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>Breakfast included</p>
                                        </div>
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>No prepayment needed – pay at the property</p>
                                        </div>
                                    </div>
                                    <div class="box_body-service">
                                        Highlights
                                        <img src="{$URL_IMAGES}/maximize 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/family 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/bed 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/elevator 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/air-conditioner 1.png" alt="error">
                                        <div data-bs-title="More" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            class="box_body-service-item">
                                            +6
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_view_detail phone"><a class="bg_main"
                                        href="/h484-citadines-pearl-hoi-an.html" title="View Detail">View Detail <i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="box_right-body_mobile">
                                <div class="box_right_body">
                                    <div class="review" style="">
                                        <p>No review
                                            <span>
                                                (0 review)
                                            </span>
                                        </p>
                                        <div class="rate">0.0</div>
                                    </div>
                                    <div class="box_price">
                                        <div class="price_from_text">Avg price per night</div>
                                        <div class="div_price text-end">US
                                            <span>
                                                <p class="price">15 $</p>
                                            </span>
                                        </div>
                                        <div class="box_right-price"> </div>
                                        <div class="btn_view_detail no_phone"><a class=" btn-hover-home"
                                                href="/h484-citadines-pearl-hoi-an.html" title="View Detail">Explore
                                                <img style="margin-left: 8px;"
                                                    src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                                                    alt="error"> </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade mapModal" id="mapModal484" tabindex="-1"
                                aria-labelledby="mapModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"> <button type="button" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button> </div>
                                        <div class="modal-body"> <iframe
                                                src="https://maps.google.it/maps?q= An bang Beach Cam An ward, Cam An, Hoi An, Viet Nam &amp;output=embed"
                                                width="600" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_hotel_item 3">
                            <div class="img_hotel"> <a class="photo" href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                    title="Hanoi La Siesta Hotel Trendy"> <img class="img-responsive img100"
                                        src="{$URL_IMAGES}/Group 48178 (5).png" alt="Hanoi La Siesta Hotel Trendy"> </a>
                            </div>
                            <div class="box_item_body">
                                <div class="box_left_body">
                                    <h3 class="box_body_title"> <a class="text-decoration-none  txt-hover-home"
                                            href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                            title="Hanoi La Siesta Hotel Trendy">Hanoi La Siesta Hotel Trendy</a> <label
                                            class="rate-1 rate-2023 mb0" style="width:80px"> <span
                                                style="width: 100%;"></span> </label> <img class="star" height="19"
                                            src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/star/find-004-star.png"
                                            alt="star" style="width: auto"> </h3>
                                    <div class="address">
                                        <div class="box_body_adress"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                                alt="error">
                                            <b>Place to visit:</b>
                                            <p>Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area - Halong
                                                International Cruise Port - Hanoi</p>
                                        </div>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/house-door 1.png" alt="error">
                                        <p>Cabin: 23</p>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/membrane 1.png" alt="error">
                                        <p>Material: Wooden junk</p>
                                    </div>
                                    <div class="box_body-check">
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>Breakfast included</p>
                                        </div>
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>No prepayment needed – pay at the property</p>
                                        </div>
                                    </div>
                                    <div class="box_body-service">
                                        Highlights
                                        <img src="{$URL_IMAGES}/maximize 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/family 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/bed 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/elevator 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/air-conditioner 1.png" alt="error">
                                        <div data-bs-title="More" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            class="box_body-service-item">
                                            +6
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_view_detail phone"><a class="bg_main"
                                        href="/h483-hanoi-la-siesta-hotel-trendy.html" title="View Detail">View Detail
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="box_right-body_mobile">
                                <div class="box_right_body">
                                    <div class="review" style="">
                                        <p>No review
                                            <span>
                                                (0 review)
                                            </span>
                                        </p>
                                        <div class="rate">0.0</div>
                                    </div>
                                    <div class="box_price">
                                        <div class="price_from_text">Avg price per night</div>
                                        <div class="div_price text-end">US
                                            <span>
                                                <p class="price">70 $</p>
                                            </span>
                                        </div>
                                        <div class="box_right-price"> </div>
                                        <div class="btn_view_detail no_phone"><a class=" btn-hover-home"
                                                href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                                title="View Detail">Explore <img style="margin-left: 8px;"
                                                    src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                                                    alt="error"> </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade mapModal" id="mapModal483" tabindex="-1"
                                aria-labelledby="mapModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"> <button type="button" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button> </div>
                                        <div class="modal-body"> <iframe
                                                src="https://maps.google.it/maps?q=12 Nguyen Quang Bich, Hoan Kiem, Hoan Kiem, Hanoi, Vietnam&amp;output=embed"
                                                width="600" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_hotel_item 3">
                            <div class="img_hotel"> <a class="photo" href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                    title="Hanoi La Siesta Hotel Trendy"> <img class="img-responsive img100"
                                        src="{$URL_IMAGES}/Group 48178 (2).png" alt="Hanoi La Siesta Hotel Trendy"> </a>
                            </div>
                            <div class="box_item_body">
                                <div class="box_left_body">
                                    <h3 class="box_body_title"> <a class="text-decoration-none  txt-hover-home"
                                            href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                            title="Hanoi La Siesta Hotel Trendy">Hanoi La Siesta Hotel Trendy</a> <label
                                            class="rate-1 rate-2023 mb0" style="width:80px"> <span
                                                style="width: 100%;"></span> </label> <img class="star" height="19"
                                            src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/star/find-004-star.png"
                                            alt="star" style="width: auto"> </h3>
                                    <div class="address">
                                        <div class="box_body_adress"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                                alt="error">
                                            <b>Place to visit:</b>
                                            <p>Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area - Halong
                                                International Cruise Port - Hanoi</p>
                                        </div>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/house-door 1.png" alt="error">
                                        <p>Cabin: 23</p>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/membrane 1.png" alt="error">
                                        <p>Material: Wooden junk</p>
                                    </div>
                                    <div class="box_body-check">
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>Breakfast included</p>
                                        </div>
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>No prepayment needed – pay at the property</p>
                                        </div>
                                    </div>
                                    <div class="box_body-service">
                                        Highlights
                                        <img src="{$URL_IMAGES}/maximize 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/family 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/bed 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/elevator 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/air-conditioner 1.png" alt="error">
                                        <div data-bs-title="More" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            class="box_body-service-item">
                                            +6
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_view_detail phone"><a class="bg_main"
                                        href="/h483-hanoi-la-siesta-hotel-trendy.html" title="View Detail">View Detail
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="box_right-body_mobile">
                                <div class="box_right_body">
                                    <div class="review" style="">
                                        <p>No review
                                            <span>
                                                (0 review)
                                            </span>
                                        </p>
                                        <div class="rate">0.0</div>
                                    </div>
                                    <div class="box_price">
                                        <div class="price_from_text">Avg price per night</div>
                                        <div class="div_price text-end">US
                                            <span>
                                                <p class="price">70 $</p>
                                            </span>
                                        </div>
                                        <div class="box_right-price"> </div>
                                        <div class="btn_view_detail no_phone"><a class=" btn-hover-home"
                                                href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                                title="View Detail">Explore <img style="margin-left: 8px;"
                                                    src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                                                    alt="error"> </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade mapModal" id="mapModal483" tabindex="-1"
                                aria-labelledby="mapModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"> <button type="button" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button> </div>
                                        <div class="modal-body"> <iframe
                                                src="https://maps.google.it/maps?q=12 Nguyen Quang Bich, Hoan Kiem, Hoan Kiem, Hanoi, Vietnam&amp;output=embed"
                                                width="600" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_hotel_item 3">
                            <div class="img_hotel"> <a class="photo" href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                    title="Hanoi La Siesta Hotel Trendy"> <img class="img-responsive img100"
                                        src="{$URL_IMAGES}/Group 48178 (2).png" alt="Hanoi La Siesta Hotel Trendy"> </a>
                            </div>
                            <div class="box_item_body">
                                <div class="box_left_body">
                                    <h3 class="box_body_title"> <a class="text-decoration-none  txt-hover-home"
                                            href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                            title="Hanoi La Siesta Hotel Trendy">Hanoi La Siesta Hotel Trendy</a> <label
                                            class="rate-1 rate-2023 mb0" style="width:80px"> <span
                                                style="width: 100%;"></span> </label> <img class="star" height="19"
                                            src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/star/find-004-star.png"
                                            alt="star" style="width: auto"> </h3>
                                    <div class="address">
                                        <div class="box_body_adress"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                                alt="error">
                                            <b>Place to visit:</b>
                                            <p>Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area - Halong
                                                International Cruise Port - Hanoi</p>
                                        </div>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/house-door 1.png" alt="error">
                                        <p>Cabin: 23</p>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/membrane 1.png" alt="error">
                                        <p>Material: Wooden junk</p>
                                    </div>
                                    <div class="box_body-check">
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>Breakfast included</p>
                                        </div>
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>No prepayment needed – pay at the property</p>
                                        </div>
                                    </div>
                                    <div class="box_body-service">
                                        Highlights
                                        <img src="{$URL_IMAGES}/maximize 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/family 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/bed 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/elevator 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/air-conditioner 1.png" alt="error">
                                        <div data-bs-title="More" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            class="box_body-service-item">
                                            +6
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_view_detail phone"><a class="bg_main"
                                        href="/h483-hanoi-la-siesta-hotel-trendy.html" title="View Detail">View Detail
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="box_right-body_mobile">
                                <div class="box_right_body">
                                    <div class="review" style="">
                                        <p>No review
                                            <span>
                                                (0 review)
                                            </span>
                                        </p>
                                        <div class="rate">0.0</div>
                                    </div>
                                    <div class="box_price">
                                        <div class="price_from_text">Avg price per night</div>
                                        <div class="div_price text-end">US
                                            <span>
                                                <p class="price">70 $</p>
                                            </span>
                                        </div>
                                        <div class="box_right-price"> </div>
                                        <div class="btn_view_detail no_phone"><a class=" btn-hover-home"
                                                href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                                title="View Detail">Explore <img style="margin-left: 8px;"
                                                    src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                                                    alt="error"> </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade mapModal" id="mapModal483" tabindex="-1"
                                aria-labelledby="mapModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"> <button type="button" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button> </div>
                                        <div class="modal-body"> <iframe
                                                src="https://maps.google.it/maps?q=12 Nguyen Quang Bich, Hoan Kiem, Hoan Kiem, Hanoi, Vietnam&amp;output=embed"
                                                width="600" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_hotel_item 3">
                            <div class="img_hotel"> <a class="photo" href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                    title="Hanoi La Siesta Hotel Trendy"> <img class="img-responsive img100"
                                        src="{$URL_IMAGES}/Group 48178 (2).png" alt="Hanoi La Siesta Hotel Trendy"> </a>
                            </div>
                            <div class="box_item_body">
                                <div class="box_left_body">
                                    <h3 class="box_body_title"> <a class="text-decoration-none  txt-hover-home"
                                            href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                            title="Hanoi La Siesta Hotel Trendy">Hanoi La Siesta Hotel Trendy</a> <label
                                            class="rate-1 rate-2023 mb0" style="width:80px"> <span
                                                style="width: 100%;"></span> </label> <img class="star" height="19"
                                            src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/star/find-004-star.png"
                                            alt="star" style="width: auto"> </h3>
                                    <div class="address">
                                        <div class="box_body_adress"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                                alt="error">
                                            <b>Place to visit:</b>
                                            <p>Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area - Halong
                                                International Cruise Port - Hanoi</p>
                                        </div>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/house-door 1.png" alt="error">
                                        <p>Cabin: 23</p>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/membrane 1.png" alt="error">
                                        <p>Material: Wooden junk</p>
                                    </div>
                                    <div class="box_body-check">
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>Breakfast included</p>
                                        </div>
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>No prepayment needed – pay at the property</p>
                                        </div>
                                    </div>
                                    <div class="box_body-service">
                                        Highlights
                                        <img src="{$URL_IMAGES}/maximize 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/family 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/bed 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/elevator 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/air-conditioner 1.png" alt="error">
                                        <div data-bs-title="More" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            class="box_body-service-item">
                                            +6
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_view_detail phone"><a class="bg_main"
                                        href="/h483-hanoi-la-siesta-hotel-trendy.html" title="View Detail">View Detail
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="box_right-body_mobile">
                                <div class="box_right_body">
                                    <div class="review" style="">
                                        <p>No review
                                            <span>
                                                (0 review)
                                            </span>
                                        </p>
                                        <div class="rate">0.0</div>
                                    </div>
                                    <div class="box_price">
                                        <div class="price_from_text">Avg price per night</div>
                                        <div class="div_price text-end">US
                                            <span>
                                                <p class="price">70 $</p>
                                            </span>
                                        </div>
                                        <div class="box_right-price"> </div>
                                        <div class="btn_view_detail no_phone"><a class=" btn-hover-home"
                                                href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                                title="View Detail">Explore <img style="margin-left: 8px;"
                                                    src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                                                    alt="error"> </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade mapModal" id="mapModal483" tabindex="-1"
                                aria-labelledby="mapModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"> <button type="button" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button> </div>
                                        <div class="modal-body"> <iframe
                                                src="https://maps.google.it/maps?q=12 Nguyen Quang Bich, Hoan Kiem, Hoan Kiem, Hanoi, Vietnam&amp;output=embed"
                                                width="600" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_hotel_item 3">
                            <div class="img_hotel"> <a class="photo" href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                    title="Hanoi La Siesta Hotel Trendy"> <img class="img-responsive img100"
                                        src="{$URL_IMAGES}/Group 48178 (2).png" alt="Hanoi La Siesta Hotel Trendy"> </a>
                            </div>
                            <div class="box_item_body">
                                <div class="box_left_body">
                                    <h3 class="box_body_title"> <a class="text-decoration-none  txt-hover-home"
                                            href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                            title="Hanoi La Siesta Hotel Trendy">Hanoi La Siesta Hotel Trendy</a> <label
                                            class="rate-1 rate-2023 mb0" style="width:80px"> <span
                                                style="width: 100%;"></span> </label> <img class="star" height="19"
                                            src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/star/find-004-star.png"
                                            alt="star" style="width: auto"> </h3>
                                    <div class="address">
                                        <div class="box_body_adress"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                                alt="error">
                                            <b>Place to visit:</b>
                                            <p>Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area - Halong
                                                International Cruise Port - Hanoi</p>
                                        </div>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/house-door 1.png" alt="error">
                                        <p>Cabin: 23</p>
                                    </div>
                                    <div class="box_body-hotel"> <img src="{$URL_IMAGES}/membrane 1.png" alt="error">
                                        <p>Material: Wooden junk</p>
                                    </div>
                                    <div class="box_body-check">
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>Breakfast included</p>
                                        </div>
                                        <div class="box_body-meal"> <img
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                                alt="error">
                                            <p>No prepayment needed – pay at the property</p>
                                        </div>
                                    </div>
                                    <div class="box_body-service">
                                        Highlights
                                        <img src="{$URL_IMAGES}/maximize 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/family 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/bed 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/elevator 1.png" alt="error">
                                        <img src="{$URL_IMAGES}/air-conditioner 1.png" alt="error">
                                        <div data-bs-title="More" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            class="box_body-service-item">
                                            +6
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_view_detail phone"><a class="bg_main"
                                        href="/h483-hanoi-la-siesta-hotel-trendy.html" title="View Detail">View Detail
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="box_right-body_mobile">
                                <div class="box_right_body">
                                    <div class="review" style="">
                                        <p>No review
                                            <span>
                                                (0 review)
                                            </span>
                                        </p>
                                        <div class="rate">0.0</div>
                                    </div>
                                    <div class="box_price">
                                        <div class="price_from_text">Avg price per night</div>
                                        <div class="div_price text-end">US
                                            <span>
                                                <p class="price">70 $</p>
                                            </span>
                                        </div>
                                        <div class="box_right-price"> </div>
                                        <div class="btn_view_detail no_phone"><a class=" btn-hover-home"
                                                href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                                title="View Detail">Explore <img style="margin-left: 8px;"
                                                    src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                                                    alt="error"> </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade mapModal" id="mapModal483" tabindex="-1"
                                aria-labelledby="mapModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"> <button type="button" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button> </div>
                                        <div class="modal-body"> <iframe
                                                src="https://maps.google.it/maps?q=12 Nguyen Quang Bich, Hoan Kiem, Hoan Kiem, Hanoi, Vietnam&amp;output=embed"
                                                width="600" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_hotel_item 3">
                        <div class="img_hotel"> <a class="photo" href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                title="Hanoi La Siesta Hotel Trendy"> <img class="img-responsive img100"
                                    src="{$URL_IMAGES}/Group 48178 (2).png" alt="Hanoi La Siesta Hotel Trendy"> </a>
                        </div>
                        <div class="box_item_body">
                            <div class="box_left_body">
                                <h3 class="box_body_title"> <a class="text-decoration-none  txt-hover-home"
                                        href="/h483-hanoi-la-siesta-hotel-trendy.html"
                                        title="Hanoi La Siesta Hotel Trendy">Hanoi La Siesta Hotel Trendy</a> <label
                                        class="rate-1 rate-2023 mb0" style="width:80px"> <span
                                            style="width: 100%;"></span> </label> <img class="star" height="19"
                                        src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/star/find-004-star.png"
                                        alt="star" style="width: auto"> </h3>
                                <div class="address">
                                    <div class="box_body_adress"> <img
                                            src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                            alt="error">
                                        <b>Place to visit:</b>
                                        <p>Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area - Halong
                                            International Cruise Port - Hanoi</p>
                                    </div>
                                </div>
                                <div class="box_body-hotel"> <img src="{$URL_IMAGES}/house-door 1.png" alt="error">
                                    <p>Cabin: 23</p>
                                </div>
                                <div class="box_body-hotel"> <img src="{$URL_IMAGES}/membrane 1.png" alt="error">
                                    <p>Material: Wooden junk</p>
                                </div>
                                <div class="box_body-check">
                                    <div class="box_body-meal"> <img
                                            src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                            alt="error">
                                        <p>Breakfast included</p>
                                    </div>
                                    <div class="box_body-meal"> <img
                                            src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/iconCheck.svg"
                                            alt="error">
                                        <p>No prepayment needed – pay at the property</p>
                                    </div>
                                </div>
                                <div class="box_body-service">
                                    Highlights
                                    <img src="{$URL_IMAGES}/maximize 1.png" alt="error">
                                    <img src="{$URL_IMAGES}/family 1.png" alt="error">
                                    <img src="{$URL_IMAGES}/bed 1.png" alt="error">
                                    <img src="{$URL_IMAGES}/elevator 1.png" alt="error">
                                    <img src="{$URL_IMAGES}/air-conditioner 1.png" alt="error">
                                    <div data-bs-title="More" data-bs-custom-class="custom-tooltip"
                                        data-bs-toggle="tooltip" data-bs-placement="top" class="box_body-service-item">
                                        +6
                                    </div>
                                </div>
                            </div>
                            <div class="btn_view_detail phone"><a class="bg_main"
                                    href="/h483-hanoi-la-siesta-hotel-trendy.html" title="View Detail">View Detail
                                    <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="box_right-body_mobile">
                            <div class="box_right_body">
                                <div class="review" style="">
                                    <p>No review
                                        <span>
                                            (0 review)
                                        </span>
                                    </p>
                                    <div class="rate">0.0</div>
                                </div>
                                <div class="box_price">
                                    <div class="price_from_text">Avg price per night</div>
                                    <div class="div_price text-end">US
                                        <span>
                                            <p class="price">70 $</p>
                                        </span>
                                    </div>
                                    <div class="box_right-price"> </div>
                                    <div class="btn_view_detail no_phone"><a class=" btn-hover-home"
                                            href="/h483-hanoi-la-siesta-hotel-trendy.html" title="View Detail">Explore
                                            <img style="margin-left: 8px;"
                                                src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                                                alt="error"> </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade mapModal" id="mapModal483" tabindex="-1" aria-labelledby="mapModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header"> <button type="button" class="btn-close"
                                            data-bs-dismiss="modal" aria-label="Close"></button> </div>
                                    <div class="modal-body"> <iframe
                                            src="https://maps.google.it/maps?q=12 Nguyen Quang Bich, Hoan Kiem, Hoan Kiem, Hanoi, Vietnam&amp;output=embed"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination pager">
                        <a class="prev disabled page" href="javascript:void(0);">
                            <i class="fa fa-angle-left perPages" aria-hidden="true"></i>
                        </a>
                        <a class="page current">1</a>
                        <a class="page" href="/cruises/vietnam&amp;page=2" title="2">2</a>
                        <a class="page" href="/cruises/vietnam&amp;page=3" title="3">3</a>
                        <a class="page" href="/cruises/vietnam&amp;page=4" title="4">4</a>
                        <a class="page disabled" href="javascript:void();">...</a>
                        <a class="page" href="/cruises/vietnam&amp;page=12" title="12">12</a>
                        <a class="page" href="/cruises/vietnam&amp;page=13" title="13">13</a>
                        <a class="next page" href="/cruises/vietnam&amp;page=2" title="2"><i
                                class="fa fa-angle-right nextPages" aria-hidden="true"></i></a>
                    </div>
                    <h2 class="recentlyViewed" style="display: none;">Recently viewed</h2>
                    <div class="recentlyViewd-full">
                        <div class="owl-item active" style="width: 246px; margin-right: 32px;">
                            <div class="des_list_hotel_item item">
                                <a href="/h486-shining-riverside-hotel-spa.html"
                                    title="Shining Riverside Hotel &amp; Spa">
                                    <div class="des_list_hotel_item_image"> <img
                                            src="/files/thumb/296/200/uploads/content/2023-07-18-11-00-07-64b60e47c7657526888424.jpg"
                                            width="296" height="200" alt="Shining Riverside Hotel &amp; Spa"> </div>
                                </a>
                                <div class="des_list_hotel_item_intro">
                                    <div class="des_list_hotel_item_title">
                                        <h3>
                                            <a href="/h486-shining-riverside-hotel-spa.html"
                                                title="Shining Riverside Hotel &amp; Spa">Shining Riverside Hotel &amp;
                                                Spa
                                            </a>
                                        </h3>
                                        <div class="des_list_hotel_item_star">
                                            <img src="{$URL_IMAGES}/Frame 626159 (1).png">
                                        </div>
                                    </div>
                                    <div class="des_list_hotel_item_place">
                                        <img src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                            alt="error">
                                        <b> Place to visit:</b> Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area -
                                        Halong International Cruise Port - Hanoi
                                    </div>
                                    <div class="des_list_hotel_item_rate">
                                        <span class="des_rate_number">4.5</span>
                                        <span class="des_rate_text">Very good</span>
                                        <span class="des_rate_total">(9
                                            reviews)</span>
                                    </div>
                                    <div class="des_list_hotel_item_price">
                                        <span class="des_price_title">Avg price per night</span>
                                        <span class="des_price_show_text">US</span>
                                        <span class="des_price_show_number">$650</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 246px; margin-right: 32px;">
                            <div class="des_list_hotel_item item"> <a href="/h484-citadines-pearl-hoi-an.html"
                                    title="Citadines Pearl Hoi An">
                                    <div class="des_list_hotel_item_image"> <img
                                            src="/files/thumb/296/200/uploads/content/2023-07-18-11-14-58-64b611c2b2d00259634547.jpg"
                                            width="296" height="200" alt="Citadines Pearl Hoi An"> </div>
                                </a>
                                <div class="des_list_hotel_item_intro">
                                    <div class="des_list_hotel_item_title">
                                        <h3>
                                            <a href="/h484-citadines-pearl-hoi-an.html"
                                                title="Citadines Pearl Hoi An">Citadines Pearl Hoi An
                                            </a>
                                        </h3>
                                        <div class="des_list_hotel_item_star">
                                            <img src="{$URL_IMAGES}/Frame 626159 (1).png">
                                        </div>
                                    </div>
                                    <div class="des_list_hotel_item_place">
                                        <img src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/address.svg"
                                            alt="error">
                                        <b> Place to visit:</b> Hanoi - Lan Ha Bay - Dark & Light Cave - Ao Ech Area -
                                        Halong International Cruise Port - Hanoi
                                    </div>
                                    <div class="des_list_hotel_item_rate"> <span class="des_rate_number">4.5</span>
                                        <span class="des_rate_text">Very good</span> <span class="des_rate_total">(9
                                            reviews)</span>
                                    </div>
                                    <div class="des_list_hotel_item_price"> <span class="des_price_title">Avg price per
                                            night</span> <span class="des_price_show_text">US</span> <span
                                            class="des_price_show_number">$650</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="customersay">
    <div class="container">
        <div class="customerSayTitle">
            <h2 class="txtwhatsay txt_underline">Re<span style="text-decoration: underline;">views</span>
            </h2>
        </div>
        <div class="customer_cards owl-carousel owl-theme owl-loaded owl-drag" id="home_customer_reivews">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-4584px, 0px, 0px); transition: all 0.25s ease 0s; width: 7258px;">
                    <div class="owl-item" style="width: 346px; margin-right: 36px;">
                        <div class="customer_card item">
                            <div class="customer_card_container overflow-hidden"><img class="customer_card_thumb"
                                    src="/uploads/content/2024-05-17-10-17-24-6646cc4441835547394289.jpg"
                                    onerror="this.src='https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png'"
                                    alt=""></div>
                            <div class="customer_review">
                                <div class="customer_stars">
                                    <i class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" aria-hidden="true"></i>
                                </div>
                                <h3 class="customer_review_h3 txt-hover-home">10 Days Vietnam</h3>
                                <div class="content">Right from the start, I must commend this travel agency for their
                                    exceptional attention to detail. We embarked to a 10-day trip to Cambodia and every
                                    single request and preference we provided was meticulously considered and
                                    incorporated...</div>
                                <a class="more_review" data-fancybox="" data-src="#modalViewMore0"
                                    href="javascript:;">View more</a>
                                <div class="customer_avt"> <img src="{URL_IMAGES}/Ellipse 19.png" alt="avatar"
                                        onerror="this.src='https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png'">
                                    <div class="customer_name">
                                        <p class="fw-bold">Fritz</p> <span>10 Feb, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none;" id="modalViewMore0">
                                <h2 class="mb-3">10 Days Vietnam</h2>
                                <div>
                                    <p>Right from the start, I must commend this travel agency for their exceptional
                                        attention to detail. We embarked to a 10-day trip to Cambodia and every single
                                        request and preference we provided was meticulously considered and
                                        incorporated...</p>
                                    <p>Sow Fung &amp; Laurence.</p>
                                    <p><img src="/uploads/VietISO/Ảnh-chụp-Màn-hình-2023-07-17-lúc-11.35.21.png"
                                            alt=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 346px; margin-right: 36px;">
                        <div class="customer_card item">
                            <div class="customer_card_container overflow-hidden"><img class="customer_card_thumb"
                                    src="/uploads/content/2024-05-11-12-14-26-663efeb29abfb560760217.jpg"
                                    onerror="this.src='https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png'"
                                    alt=""></div>
                            <div class="customer_review">
                                <div class="customer_stars"> <i class="fa-solid fa-star" aria-hidden="true"></i> <i
                                        class="fa-solid fa-star" aria-hidden="true"></i> <i class="fa-solid fa-star"
                                        aria-hidden="true"></i> <i class="fa-solid fa-star" aria-hidden="true"></i> <i
                                        class="fa-solid fa-star" aria-hidden="true"></i> </div>
                                <h3 class="customer_review_h3 txt-hover-home">Amazing!</h3>
                                <div class="content">Right from the start, I must commend this travel agency for their
                                    exceptional attention to detail. We embarked to a 10-day trip to Cambodia and every
                                    single request and preference we provided was meticulously considered and
                                    incorporated...</div> <a class="more_review" data-fancybox=""
                                    data-src="#modalViewMore1" href="javascript:;">View more</a>
                                <div class="customer_avt"> <img src="{URL_IMAGES}/Ellipse 19 (2).png" alt="avatar"
                                        onerror="this.src='https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png'">
                                    <div class="customer_name">
                                        <p class="fw-bold">Fritz</p> <span>10 Feb, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none;" id="modalViewMore1">
                                <h2 class="mb-3">Amazing!</h2>
                                <div>
                                    <p> Right from the start, I must commend this travel agency for their exceptional
                                        attention to detail. We embarked to a 10-day trip to Cambodia and every single
                                        request and preference we provided was meticulously considered and
                                        incorporated...</p>
                                    <p> </p>
                                    <p> Helle as well as Martin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 346px; margin-right: 36px;">
                        <div class="customer_card item">
                            <div class="customer_card_container overflow-hidden"><img class="customer_card_thumb"
                                    src="/uploads/content/2024-05-11-12-15-01-663efed5922d5364163395.jpg"
                                    onerror="this.src='https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png'"
                                    alt=""></div>
                            <div class="customer_review">
                                <div class="customer_stars"> <i class="fa-solid fa-star" aria-hidden="true"></i> <i
                                        class="fa-solid fa-star" aria-hidden="true"></i> <i class="fa-solid fa-star"
                                        aria-hidden="true"></i> <i class="fa-solid fa-star" aria-hidden="true"></i> <i
                                        class="fa-solid fa-star" aria-hidden="true"></i> </div>
                                <h3 class="customer_review_h3 txt-hover-home">Wonderful by Hanoi
                                    Voyagesnam</h3>
                                <div class="content">Right from the start, I must commend this travel agency for their
                                    exceptional attention to detail. We embarked to a 10-day trip to Cambodia and every
                                    single request and preference we provided was meticulously considered and
                                    incorporated...
                                </div> <a class="more_review" data-fancybox="" data-src="#modalViewMore2"
                                    href="javascript:;">View more</a>
                                <div class="customer_avt"> <img src="{URL_IMAGES}/Ellipse 19 (1).png" alt="avatar"
                                        onerror="this.src='https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png'">
                                    <div class="customer_name">
                                        <p class="fw-bold">Fritz</p> <span>10 Feb, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none;" id="modalViewMore2">
                                <h2 class="mb-3">Wonderful trip organized by Hanoi Voyagesnam</h2>
                                <div>
                                    <p> Right from the start, I must commend this travel agency for their exceptional
                                        attention to detail. We embarked to a 10-day trip to Cambodia and every single
                                        request and preference we provided was meticulously considered and
                                        incorporated...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 346px; margin-right: 36px;">
                        <div class="customer_card item">
                            <div class="customer_card_container overflow-hidden"><img class="customer_card_thumb"
                                    src="/uploads//content/2023-07-27-11-22-11-3b3ee9e881125363b1620df36a3b6fa9.jpg"
                                    onerror="this.src='https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png'"
                                    alt=""></div>
                            <div class="customer_review">
                                <div class="customer_stars"> <i class="fa-solid fa-star" aria-hidden="true"></i> <i
                                        class="fa-solid fa-star" aria-hidden="true"></i> <i class="fa-solid fa-star"
                                        aria-hidden="true"></i> <i class="fa-solid fa-star" aria-hidden="true"></i> <i
                                        class="fa-solid fa-star" aria-hidden="true"></i> </div>
                                <h3 class="customer_review_h3 txt-hover-home">Wonderful time in Hanoi and Halong Bay
                                </h3>
                                <div class="content">Dear PhuRichard McClintock, a Latin professor at Hampden-Sydney
                                    College in Virginia, looked up one of the more obscure Latin words, consectetur,
                                    from a Lorem Ipsum passage, and going through the cites of the word in classical
                                    literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                    1.10.32 and 1.10.33 of "de ...</div> <a class="more_review" data-fancybox=""
                                    data-src="#modalViewMore4" href="javascript:;">View more</a>
                                <div class="customer_avt"> <img
                                        src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png"
                                        alt="avatar"
                                        onerror="this.src='https://unikasia.vietiso.com/isocms/templates/default/skin/images/none_image.png'">
                                    <div class="customer_name">
                                        <p class="fw-bold"> Chin Choo</p> <span>15 Jul, 2015</span>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none;" id="modalViewMore4">
                                <h2 class="mb-3">Wonderful time in Hanoi and Halong Bay</h2>
                                <div>
                                    <p>Dear Phu</p>
                                    <p><span>Richard McClintock, a Latin professor at Hampden-Sydney College in
                                            Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                            Lorem Ipsum passage, and going through the cites of the word in classical
                                            literature, discovered the undoubtable source. Lorem Ipsum comes from
                                            sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                                            Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a
                                            treatise on the theory of ethics, very popular during the Renaissance. The
                                            first line of Lorem Ipsum, </span></p>
                                    <p> Regards</p>
                                    <p> Chin Choo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i></button><button type="button"
                    role="presentation" class="owl-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</section>
<div class="readyToStart">
    <h2 class="readyToStart-title">SO, READY TO START?</h2>
    <div class="txt-readyToStart">
        <p class="readyToStart-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam recusandae
            molestias eligendi natus maxime quia id hic a, voluptatem, doloribus voluptatum quibusdam neque aut
            consequuntur consequatur optio. Ab, accusantium, iste.</p>
    </div>
    <div class="btn-readyToStart"> <button class="readyToStart-btn"><a href="#" class="btn readyToStart-btn">LET’S PLAN
                YOUR TRIP
                <img src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                    alt="error"></a></button> </div>
</div>
</section>