<div class="filter_left_search">
    {* <div class="filter_left_title">
        {$core->get_Lang('Filter')}
    </div> *}

    <form action="" method="post" id="search_hotel_left">
        <input type="hidden" name="search_hotel_left" value="search_hotel_left" />

        {if $act eq 'default'}

            {if $lstCountryHotel}
                <div class="find_Box">
                    <div class="box_body_filter_title">
                        {$core->get_Lang('Destinations')}
                    </div>
                    <div class="box_filter_body filter_destination">
                        <div class="filter_list_item">
                            {section name=i loop=$lstCountryHotel}
                                {assign var=check value=$clsISO->checkInArray($country_id,$lstCountryHotel[i].country_id)}
                                <div class="check_ipt checkSizeFilter">
                                    <input class="form-check-input checkCityDesTop" type="radio" name="country[]"
                                        id="country{$smarty.section.i.iteration}" value="{$lstCountryHotel[i].country_id}"
                                        {if $check} checked {/if}>
                                    <label class="form-check-label labelCheck" for="country{$smarty.section.i.iteration}"><a
                                            class="filter_link"
                                            href="{$clsCountryEx->getLink($lstCountryHotel[i].country_id,'Hotel',$lstCountryHotel[i])}"
                                            title="{$lstCountryHotel[i].title}"><label>{$lstCountryHotel[i].title}</label></a>
                                    </label>
                                </div>
                            {/section}
                        </div>
                        <span class="readmore">{$core->get_Lang('More')}</span>
                    </div>
                </div>
            {/if}
        {else}
            {if $lstCountryHotel}
                <div class="find_Box">
                    <div class="box_body_filter_title ">
                        {$core->get_Lang('Destinations')}
                    </div>
                    <div class="box_filter_body filter_destination">
                        <div class="filter_list_item">
                            {section name=i loop=$lstCountryHotel}
                                {assign var=check value=$clsISO->checkInArray($country_id,$lstCountryHotel[i].country_id)}
                                <div class="check_ipt checkSizeFilter">
                                    <input class="form-check-input checkCityDesTop" type="radio" name="country[]"
                                        id="country{$smarty.section.i.iteration}" value="{$lstCountryHotel[i].country_id}"
                                        {if $check} checked {/if}>
                                    <label class="form-check-label labelCheck" for="country{$smarty.section.i.iteration}"><a
                                            class="filter_link"
                                            href="{$clsCountryEx->getLink($lstCountryHotel[i].country_id,'Hotel',$lstCountryHotel[i])}"
                                            title="{$lstCountryHotel[i].title}"><label>{$lstCountryHotel[i].title}</label></a>
                                    </label>
                                </div>
                            {/section}
                        </div>
                        <span class="readmore">{$core->get_Lang('More')}</span>
                    </div>
                </div>
            {/if}

            {if $lstCity}
                <div class="find_Box">
                    <div class="box_body_filter_title">
                        {$core->get_Lang('Visit cities')}
                    </div>
                    <div class="box_filter_body filter_cities">
                        <div class="filter_list_item">
                            {section name=i loop=$lstCity}
                                {assign var=check value=$clsISO->checkInArray($city,$lstCity[i].city_id)}
                                <div class="check_ipt checkSizeFilter">
                                    <input type="checkbox" name="city[]" class="form-check-input typeSearch"
                                        value="{$lstCity[i].city_id}" {if $check} checked {/if}
                                        id="city{$smarty.section.i.iteration}">
                                    <label class="form-check-label labelCheck" for="city{$smarty.section.i.iteration}">
                                        {$lstCity[i].title} </label>
                                </div>
                            {/section}
                        </div>
                        <span class="readmore">{$core->get_Lang('More')}</span>
                    </div>
                </div>
            {/if}
        {/if}
        <div class="find_Box">
            <div class="box_body_filter_title">
                {$core->get_Lang('Price')}
            </div>
            <div class="box_filter_body">
                <div class="filter_list_item nsdt_filter-price-hotel">
                    {*<div class="nsdt_checkPriceHotel">
                        {section name=i loop=$lstPriceRange}
                            {assign var=check value=$clsISO->checkInArray($price_range,$lstPriceRange[i].hotel_price_range_id)}
                            {assign var=checkPriceRange value={$queryString}}
                            {assign var=starIdArray value=explode(',', $starIds)}

                            <div class="check_ipt">
                                <input type="checkbox" name="price_range[]" class="input_item typeSearch"
                                    value="{$lstPriceRange[i].hotel_price_range_id}"
                                    id="priceRange{$smarty.section.i.iteration}">
                                <label for="priceRange{$smarty.section.i.iteration}"
                                    class="labelCheck">{$lstPriceRange[i].max_rate}</label>
                            </div>
                        {/section}
                    </div>

                    {assign var=price_range_min value=$lstPriceRange[0].hotel_price_range_id}
                    {assign var=price_range_max value=$lstPriceRange[count($lstPriceRange)-1].hotel_price_range_id}
                    {section name=i loop=$lstPriceRange}
                        <div class="nsdt_getPriceHotel">
                            {$lstPriceRange[i].hotel_price_range_id}
                        </div>
                    {/section}
                    {section name=i loop=$PriceRange_title}
                        <div class="nsdt_getPriceHotelTitle" data-id="{$lstPriceRange[i].hotel_price_range_id}">
                            {$PriceRange_title[i]}
                        </div>
                    {/section}*}
                    <div class="price-hotel-items">
                       <input type="text" id="price_0" class="price-hotel-itemMin" name="min_price" value="${$min_price}">
                        <input type="text" id="price_1" class="price-hotel-itemMax" name="max_price" value="${$max_price}">
{*                        <div id="price_0" class="price-hotel-itemMin">$0</div>*}
{*                        <div id="price_1" class="price-hotel-itemMax">$500</div>*}
                    </div>
{*                    <div id="slider-price2" class="mb10"></div>*}
                    <div id = "slider-3"></div>
                </div>
            </div>
        </div>
		
        <div class="find_Box">
            <div class="box_body_filter_titleRank">
                {$core->get_Lang('Property rating')}
            </div>
            <div class="box_filter_body">
                <div class="filter_list_item">
                    {assign var=stars value=$clsISO->listStar(6)}
                    {section name=i loop=$stars}
                        {assign var=check value=$clsISO->checkInArray($star_id,$stars[i].star_id)}
                        <div class="check_ipt">
                            <input type="checkbox" name="star_id[]"
                                class="form-check-input input_item typeSearch checkRankHotel" value="{$stars[i].star_id}"
                                {if $check} checked {/if} id="star{$smarty.section.i.iteration}">
                            {if $stars[i].star_id == 1}
                                <label class="labelCheck" for="star{$smarty.section.i.iteration}">{$stars[i].title}</label>
                            {else}
                                <label class="labelCheck" for="star{$smarty.section.i.iteration}">{$stars[i].star_id} <img
                                        style="margin-left: 8px;" src="{$URL_IMAGES}/hotel/star.svg" alt="error"></label>
                            {/if}
                        </div>
                    {/section}
                </div>
            </div>
        </div>
        <div class="find_Box">
            <div class="box_body_filter_title">
                {$core->get_Lang('Property type')}
            </div>
            <div class="box_filter_body filter_property">
                <div class="filter_list_item">
                    {section name=i loop=$listTypeHotel}
                        {assign var=hotel_property_id value=$listTypeHotel[i].property_id}
                        {assign var=hotel_property_title value=$listTypeHotel[i].title}
                        {assign var=check value=$clsISO->checkInArray($type_hotel,$hotel_property_id)}
                        <div class="check_ipt checkSizeFilter">
                            <input type="checkbox" class="form-check-input input_item typeSearch checkTypeAccountHotel"
                                name="type_hotel[]" value="{$hotel_property_id}" {if $check} checked {/if}
                                id="typeHotel{$smarty.section.i.iteration}">
                            <label class="labelCheck"
                                for="typeHotel{$smarty.section.i.iteration}">{$hotel_property_title}</label>
                        </div>
                    {/section}

                </div>
                <span class="readmore">{$core->get_Lang('More')}</span>
            </div>
        </div>

        <button id="nsdt_btnSubmitFilterMobile">{$core->get_Lang('See results')}</button>
    </form>
</div>

</div>
<script>
    var max_price_value = '{$price_range_max}';
    /* var min_price_value = '{$price_range_min}';
      var min_price_search = '{$min_price_search}';
    var max_price_search = '{$max_price_search}';
    var price_range_title_min = '{$lstPriceRange[0].title}';
    var price_range_title_max = '{$lstPriceRange[count($lstPriceRange)-1].title}';*/
    var price_range = [];
    var PriceRange_title = {};

    var min_price = '{$min_price}'
    var max_price = '{$max_price}'
    $('.nsdt_getPriceHotel').each(function(index, element) {
        price_range.push(parseFloat($(element).text().trim()));
    });

    $('.nsdt_getPriceHotelTitle').each(function(index, element) {
        var id = $(element).data('id');
        var title = $(element).text().trim();
        PriceRange_title[id] = title;
    });

    $('#search_hotel_left .typeSearch').change(function() {
        $(this).closest('form').submit();
    });
</script>

{literal}
    <script>
        $(function() {
            if (min_price === '') min_price = 0
            $( "#slider-3" ).slider({
                range:true,
                min: 0,
                max: parseInt(max_price_value),
                values: [parseInt(min_price), parseInt(max_price)],
                slide: function( event, ui ) {
                    $("#price_0").val("$" + ui.values[ 0 ]);
                    $("#price_1").val("$" + ui.values[ 1 ]);
                },
                stop: function(event, ui) {
                    $("#price_0").val("$" + $( "#slider-3" ).slider( "values", 0 ));
                    $("#price_1").val("$" + $( "#slider-3" ).slider( "values", 1 ) );
                    $('#search_hotel_left').submit();
                }
            });
        });

        $(".filter_cities").find(".checkSizeFilter:gt(4)").hide();
        $(".filter_property").find(".checkSizeFilter:gt(4)").hide();
        $(".filter_destination").find(".checkSizeFilter:gt(4)").hide();
        if ($(".filter_destination .checkSizeFilter").length <= 5) $(".filter_destination .readmore").hide();
        if ($(".filter_cities .checkSizeFilter").length <= 5) $(".filter_cities .readmore").hide();
        if ($(".filter_property .checkSizeFilter").length <= 5) $(".filter_property .readmore").hide();
        
        $(document).on("click", ".readmore", function() {
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

        $('input[name="country[]"]').on('click', function() {
            window.location.href = $(this).siblings('label').find('a.filter_link').attr('href');
        });
/*        $(function() {
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
                slide: function(event, ui) {
                    updateSliderTitles(ui);
                },
                stop: function(event, ui) {
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

                    $("input[name='price_range[]']").each(function() {
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
                let minPrice = (min_price_search.length !== 0) ? min_price_search : Math.min.apply(null, price_range);
                let maxPrice = (max_price_search.length !== 0) ? max_price_search : Math.max.apply(null, price_range);
                $("#slider-price2").slider("values", [minPrice, maxPrice]);

                $("#price_0").html("$" + ((PriceRange_title[minPrice] > 0) ? PriceRange_title[minPrice] : "0"));
                $("#price_1").html("$" + PriceRange_title[maxPrice]);
            }

            updateSliderTitles({ values: [0, 1] });
            updatePriceElements();
        });
        $("#price_0").text($("#slider-price2").slider("values", 0));
        $("#price_1").text($("#price-range2").slider("values", 1));*/


        $(function() {
            var valueMin = $('#value_min').text();
            var valueMax = $('#value_max').text();
            $('.price-hotel-itemMin').text(valueMin);
            $('.price-hotel-itemMax').text(valueMax);


            $('.filter_list_item').each(function(index, elm) {
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

        $(function() {
            $('.checkCityDesTop').click(function() {
                var url = $(this).next('label').find('a.filter_link').attr('href');
                window.location.href = url;
            });
        });

        $(function() {
            function debounce(func, delay) {
                let debounceTimer;
                return function() {
                    const context = this;
                    const args = arguments;
                    clearTimeout(debounceTimer);
                    debounceTimer = setTimeout(() => func.apply(context, args), delay);
                };
            }

            $('#checkCityDesTop').click(function() {
                $('#search_hotel_left').submit();
            });
        });

    </script>
{/literal}