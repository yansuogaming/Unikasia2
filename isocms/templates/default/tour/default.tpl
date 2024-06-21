{literal}
<style>
    .destination_ul li {
        margin: 0 0 5px;
    }
    .destination_ul li .d-flex .title_place {
        font-size: 14px;
        font-weight: 600;
        display: flex;
        flex-direction: column;
    }
    .destination_ul li .d-flex span.label_place {
        display: flex;
        flex-direction: column;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 5px;
        width: auto;
        min-width: 65px;
        text-align: center;
        margin-left: auto;
        font-size: 14px;
    }
    .destination_ul li .d-flex span.label_place .text {
        color: #EBA743;
    }
</style>
{/literal}

<main id="nah_list_tour">
    <section class="banner_tour">
        <img src="{$clsConfiguration->getValue('site_tour_banner')}" alt="">
        <h2 class="title_tour_h2 text-uppercase">
            {$clsCountry->getTitle($country_id)} TOURS PACKAGES
        </h2>
    </section>
    <section id="breadcrumb-tour">
        <div class="container ps-0">
            <div class="d-flex">
                <span class="Vietnam txt_youarehere">You are here: </span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="/">Home</a></li>
                    {if $country_id}
                    <li class="breadcrumb-item active" aria-current="page"><a href="{$clsCountry->getLink($country_id)}">{$clsCountry->getTitle($country_id)}</a></li>
                    {/if}
                    <li class="breadcrumb-item" aria-current="page">Tours packages</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="tour-packages">
        <div class="container">
            <div class="row">
                <div class="col-3 ps-lg-0">
                    <p class="sort-filter">Sort & filter</p>
                    <form action="" method="post">
                        <div class="destination">
                            <p class="txt_destination">Destinations</p>
                            <div class="filter-radio">
                                {section name=i loop=$lstCountry}
                                    <div class="form-check">
                                        <input class="form-check-input custom-control-input typeSearch" type="radio"
                                               name="country_id" id="radio-{$lstCountry[i].title}" value="{$lstCountry[i].country_id}"
                                        {if $lstCountry[i].country_id == $country_id} checked{/if}>
                                        <label class="form-check-label custom-control-label" for="radio-{$lstCountry[i].title}">
                                            {$lstCountry[i].title} </label>
                                    </div>
                                {/section}
                            </div>
                        </div>
                        {if $lstRegion}
                        <div class="regions">
                            <p class="txt_regions">Regions</p>
                            <div class="filter-check">
                                {section name=i loop=$lstRegion}
                                <div class="form-check show">
                                    <input class="form-check-input typeSearch" name="region[]" value="{$lstRegion[i].region_id}" type="checkbox" id="region_{$lstRegion[i].title}"
                                           {if $clsISO->checkInArray($region,$lstRegion[i].region_id)}checked{/if}>
                                    <label class="form-check-label" for="region_{$lstRegion[i].title}">{$lstRegion[i].title}</label>
                                </div>
                                {/section}
                            </div>
                        </div>
                        {/if}
                        <div class="duration">
                            <p class="txt_duration">Duration</p>
                            <div class="filter-check">
                                {section name=i loop=4 start=1}
                                <div class="form-check show">
                                    <input class="form-check-input typeSearch" name="duration[]" value="{$smarty.section.i.index}" type="checkbox" id="{$smarty.section.i.index}-weeks"
                                           {if $clsISO->checkInArray($duration,$smarty.section.i.index)}checked{/if}>
                                    <label class="form-check-label" for="{$smarty.section.i.index}-weeks">{$smarty.section.i.index} {if $smarty.section.i.index lt 2}week{else}weeks{/if}</label>
                                </div>
                                {/section}
                                <div class="form-check show">
                                    <input class="form-check-input typeSearch" name="duration[]" value="4" type="checkbox" id="gt-three-week"
                                           {if $clsISO->checkInArray($duration,4)}checked{/if}>
                                    <label class="form-check-label" for="gt-three-week">> 3 weeks</label>
                                </div>
                            </div>
                        </div>
                        <div class="travel-styles filter_view_more">
                            <p class="txt_travel_styles">Travel styles</p>
                            <div class="filter-check">
                                {section name=i loop=$lstTourCat}
                                <div class="form-check show">
                                    <input class="form-check-input typeSearch" name="travel_style[]" value="{$lstTourCat[i].tourcat_id}"
                                           type="checkbox" id="travel_style_{$lstTourCat[i].tourcat_id}"
                                           {if $clsISO->checkInArray($travel_style,$lstTourCat[i].tourcat_id)}checked{/if}>
                                    <label class="form-check-label" for="travel_style_{$lstTourCat[i].tourcat_id}">{$lstTourCat[i].title}</label>
                                </div>
                                {/section}
                            </div>
                            <p class="view_more">View more</p>
                        </div>
                        <div class="departure-time filter_view_more">
                            <p class="txt_departure_time">Departure time</p>
                            <div class="filter-check">
                                {section name=i loop=$lstMonth}
                                    <div class="form-check show">
                                    <input class="form-check-input typeSearch" name="departure_time[]" value="{$lstMonth[i].month_id}" type="checkbox" id="month_{$lstMonth[i].month_id}"
                                           {if $clsISO->checkInArray($departure_time,$lstMonth[i].month_id)}checked{/if}>
                                    <label class="form-check-label" for="month_{$lstMonth[i].month_id}">{$lstMonth[i].title}</label>
                                </div>
                                {/section}
                            </div>
                            <p class="view_more">View more</p>
                        </div>
                        <input type="hidden" name="filter" value="filter">
                    </form>
                </div>
                <div class="col-9 pe-lg-0 list-tour-right">
                    <div class="content-top">
                        <div class="txt_content">{$clsConfiguration->getValue(site_tour_intro_|cat:$_LANG_ID)|html_entity_decode}</div>
                    </div>
                    <h2 class="count-tour">{$totalRecord} {$clsCountry->getTitle($country_id)} tour packages</h2>
                    <div class="recommend">
                        <span><img class="me-2" src="/uploads//AdminButton/icon/route.png" alt="route"> {$core->get_Lang('70+ Tour packages with 20K+ bookings')}</span>
                    </div>
                    <div class="list-tour">
                        {section name=i loop=$lstTour}
                            <div class="list-tour-item">
                                <div class="img_tour">
                                    <a target="_blank" class="photo img-tour-parent" href="{$clsTour->getLink($lstTour[i].tour_id)}">
                                        <img class="img-tour"
                                             src="{$lstTour[i].image}"
                                             alt="{$lstTour[i].title}"
                                             onerror="this.src='{$URL_IMAGES}/none_image.png'">
                                    </a>
                                </div>
                                <div class="item-center">
                                    <h3><a class="txt_title_tour txt-hover-home" href="{$clsTour->getLink($lstTour[i].tour_id)}" target="_blank">{$lstTour[i].title}</a></h3>
                                    <div class="reviews">
                                        <span class="rate_number">{$clsReviews->getReviews($lstTour[i].tour_id, 'avg_point')}</span>
                                        <span class="text_score">{$clsReviews->getReviews($lstTour[i].tour_id, 'txt_review')}</span>
                                        <span class="txt_review"> - {$clsReviews->getReviews($lstTour[i].tour_id)} reviews</span>
                                    </div>
                                    <div class="txt_quot d-flex align-items-start">
                                        <img class="me-2" src="{$URL_IMAGES}/tour/quot.svg" alt=""><div>{$clsISO->limit_textIso($lstTour[i].overview|html_entity_decode, 20)}</div>
                                    </div>
                                    <div class="txt_place" style="cursor: pointer">
                                        <img class="me-2" src="{$URL_IMAGES}/tour/location.svg" alt="">Place: {$clsTourDestination->getByCountry($lstTour[i].tour_id, 'city')}
                                        {if $clsTourDestination->getByCountry($lstTour[i].tour_id, 'other_city')}
                                            <button type="button" class="tooltips_tour" data-bs-toggle="tooltip" title="{$clsTourDestination->getByCountry($lstTour[i].tour_id, 'other_city')}">+{$clsTourDestination->getByCountry($lstTour[i].tour_id)}</button>
                                        {/if}
                                    </div>
                                    <div class="txt_place">
                                        <img class="me-2" src="{$URL_IMAGES}/tour/fluent.svg" alt="">Start/finish: {$clsTourDestination->getByCountry($lstTour[i].tour_id, "startFinish")}
                                    </div>
                                    <div class="txt_place">
                                        <img class="me-2" src="{$URL_IMAGES}/tour/park.svg" alt="">Travel style: {$clsTour->getListCatName($lstTour[i].tour_id)}
                                    </div>
                                </div>
                                <div class="box-view-tour">
                                    <div class="prices text-right">
                                        <p class="day">
                                            {if $lstTour[i].duration_custom}
                                                {$lstTour[i].duration_custom}
                                            {else}
                                                {$lstTour[i].number_day} {if $lstTour[i].number_day lt 2}DAY {else} DAYS {/if}
                                            {/if}
                                        </p>
                                        <p class="from">From <span class="text-decoration-line-through">${$lstTour[i].min_price}</span></p>
                                        <p class="us">US ${$clsTour->getPriceAfterDiscount($lstTour[i].tour_id)}</p>
                                    </div>
                                    <div class="btn-view-tour mt-auto">
                                        <a class="btn-hover-home" href="{$clsTour->getLink($lstTour[i].tour_id)}"><span>View tour</span><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        {/section}
                    </div>
                    <div class="tour-pagination d-flex justify-content-center mt-5">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                {$page_view}
                            </ul>
                        </nav>
                    </div>
                    {if $lstTourRecent}
                    <div class="recently-view">
                        <h2 class="recently-view-title">{$core->get_Lang('Recently viewed')}</h2>
                        <div class="related_tours owl-carousel" id="related_tours">
                            {section name=i loop=$lstTourRecent}
                                <div class="list_viewtour">
                                    <div class="img_toursrelated">
                                        <a href="{$clsTour->getLink($lstTourRecent[i].tour_id)}"><img
                                                    src="{$lstTourRecent[i].image}"
                                                    alt="{$lstTourRecent[i].title}" class="img-fluid"> </a>
                                    </div>
                                    <div class="txt_des_tour">
                                        <h3>
                                            <a class="txth_relatedtour txt-hover-home" href="{$clsTour->getLink($lstTourRecent[i].tour_id)}" alt="tour" title="tour">{$lstTourRecent[i].title}</a>
                                        </h3>
                                        <div class="d-flex align-items-center score_reviewtour"><span class="border_score">{$clsReviews->getReviews($lstTourRecent[i].tour_id, 'avg_point')}</span>
                                            <span class="txt_score">{$clsReviews->getReviews($lstTourRecent[i].tour_id, 'txt_review')} </span> <span class="txt_reviewstour">- {$clsReviews->getReviews($lstTour[i].tour_id)} views</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa-light fa-location-dot" style="color: #43485c;" aria-hidden="true"></i>
                                            <span class="txt_placetours">Place: {$clsTourDestination->getByCountry($lstTourRecent[i].tour_id, 'city')}</span>
                                            {if $clsTourDestination->getByCountry($lstTourRecent[i].tour_id, 'other_city')}
                                                <button type="button" class="tooltips_tour" data-bs-toggle="tooltip" title="{$clsTourDestination->getByCountry($lstTourRecent[i].tour_id, 'other_city')}">
                                                    +{$clsTourDestination->getByCountry($lstTourRecent[i].tour_id)}
                                                </button>
                                            {/if}
                                        </div>
                                        <div class="intro_recent_view_tour">{$lstTourRecent[i].overview|html_entity_decode}</div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="from_price"><p class="from_txtp">From</p> <span
                                                        class="txt_price">US
												<h3 class="txt_numbprice"> ${$lstTourRecent[i].min_price}</h3> </span></div>
                                            <a href="{$clsTour->getLink($lstTourRecent[i].tour_id)}" alt="tour" title="tour">
                                                <button class="btn btn_viewtour btn-hover-home">View Tour <i
                                                            class="fa-regular fa-arrow-right" style="color: #ffffff;"
                                                            aria-hidden="true"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            {/section}
                        </div>
                    </div>
                    {/if}
                </div>
            </div>
        </div>
    </section>
    <section class="tailor-made mt-5" style="background-image: url({$clsConfiguration->getValue('BannerListTour')})">
        <div class="container tailorMadeCenter px-0">
            <div class="row">
                <div class="col-9 txt_tailor_left">
                    <h2 class="tailor-made_title">{$clsConfiguration->getValue('TitleListTour_'|cat:$_LANG_ID)}</h2>
                    <div class="content">{$clsConfiguration->getValue('ShortTextListTour_'|cat:$_LANG_ID)|html_entity_decode}</div>
                </div>
                <div class="col-3 center-div"><a class="btn-tailor btn-hover-home" href="{$clsTour->getLink2('', 1)}" target="_blank"><span>TAILOR MADE TOUR</span><i class="ms-2 fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    {$core->getBlock("customer_review")}
    {$core->getBlock("top_attraction")}
    {$core->getBlock('also_like')}
</main>
{literal}
<script>
    $(document).ready(function(){
        $('.typeSearch').change(function() {
            $(this).closest('form').submit();
        });

        $(".travel-styles").find(".form-check:gt(4)").hide();
        $(".departure-time").find(".form-check:gt(4)").hide();
        if ($(".travel-styles .form-check ").length <= 5) $(".travel-styles .view_more").hide();
        if ($(".departure-time .form-check ").length <= 5) $(".departure-time .view_more").hide();

        $(document).on("click", ".view_more", function() {
            const $_this = $(this);
            if (!$_this.hasClass("less")) {
                $_this.addClass("less");
                $_this.closest(".filter_view_more").find(".filter-check").removeClass("short");
                $_this.closest(".filter_view_more").find(".form-check").show();
                $_this.html('View less');
            } else {
                $_this.removeClass("less");
                $_this.closest(".filter_view_more").find(".filter-check").addClass("short");
                $_this.closest(".filter_view_more").find(".form-check:gt(4)").hide();
                $_this.html('View more');
            }
        });
        let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        const $owl = $('#related_tours');
        const itemCount = $owl.children().length;

        $owl.owlCarousel({
            items: 3,
            loop: itemCount > 3,
            margin: 16,
            nav: false,
            autoplay: itemCount > 3,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false
        });
    });
</script>
{/literal}