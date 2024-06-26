<div class="page_container">

    <div class="banner">

        <div class="banner_img_hotel">

            {if $show eq 'City'}

            <img src="{$clsCity->getImageBannerHotel($city_id,1920,600,$oneItem)}" class="img100" alt="{$core->get_Lang('Hotels in')} {$TD}" width="600" />

            {else}

            {if !isset($clsCountryEx->getImageBannerHotel($country_id,1920,500,$oneItem)) || !$clsCountryEx->getImageBannerHotel($country_id,1920,500,$oneItem)}

            <img src="{$URL_IMAGES}/hotel/no-image.png" alt="error" class="img100" width="600" />

            {else}

            <img src="{$clsCountryEx->getImageBannerHotel($country_id,1920,600)}" class="img100" alt="{$core->get_Lang('Hotels in')} {$TD}" width="600" />

            {/if}

            {/if}

            <div class="overlay_banner_hotel"></div>

        </div>

        {$core->getBlock('box_form_search_hotel')}

    </div>

    <section id="breadcrumb-hotel">

        <div class="container">

            <ul class="breadcrumb-nav" itemscope itemtype="https://schema.org/BreadcrumbList">

                <li class="breadcrumb-nav-first">{$core->get_Lang('You are here')}</li>

                <li class="breadcrumb-nav-list">

                    <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                        <a itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">

                            <span itemprop="name" class="breadcrumb-activeItem">{$core->get_Lang('Home')}</span></a>

                        <meta itemprop="position" content="1" />

                        <img style="margin-left: 8px;" src="{$URL_IMAGES}/hotel/arow.svg" alt="error">

                    </div>

                    <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                        <a itemprop="item" href="{$clsISO->getLink('hotel')}" title="{$core->get_Lang('Hotels')}">

                            <span itemprop="name" class="breadcrumb-activeItem">{$core->get_Lang('Hotels')}</span></a>

                        <meta itemprop="position" content="2" />

                        <img style="margin-left: 8px;" src="{$URL_IMAGES}/hotel/arow.svg" alt="error">

                    </div>

                    <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">

                        <a itemprop="item" href="{$curl}" title="{$TD}">

                            <span itemprop="name" class="breadcrumb-item">{$clsCountryEx->getTitle($country_id)}</span></a>

                        <meta itemprop="position" content="3" />

                    </div>

                </li>

            </ul>

        </div>

    </section>

    <div id="contentPage" class="hotelPlacePage pdt40">

        <div class="container">

            <div class="nsdt_row_content">

                <div class="list-hotel-item">

                    <div class="filter-hotel-item">

                        <h2 class="result_search">{$core->get_Lang('Sort & filter')}</h2>

                        <h2 class="result_searchs" data-bs-title="{$core->get_Lang('Show Sort & filter')}" data-bs-custom-class="custom-tooltip" data-bs-toggle="offcanvas" href="#nsdt_show_filter" data-bs-toggle="tooltip" data-bs-placement="top">{$core->get_Lang('Sort & filter')}</h2>

                        <div class="offcanvas offcanvas-start" tabindex="-1" id="nsdt_show_filter" aria-labelledby="offcanvasExampleLabel">

                            <div class="offcanvas-header">

                                <button type="button" class="btn-close btn-close-filter bi bi-chevron-left" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                                <h2 class="filter-title-mobile">{$core->get_Lang('Sort & filter')}</h2>



                            </div>

                            <div class="offcanvas-body">

                                {* {$core->getBlock('filter_left_search_hotel')} *}

                            </div>

                        </div>

                        <div class="modal fade" id="filter_search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                            <div class="modal-dialog">

                                <div class="modal-content">

                                    <div class="filter_left">

                                        <div class="modal-header">

                                            <h2>

                                                <button type="button" class="close" data-bs-dismiss="modal">

                                                    <span aria-hidden="true">X</span>

                                                    <span class="sr-only">{$core->get_Lang('Close')}</span>

                                                </button> {$core->get_Lang('Search')}

                                            </h2>

                                        </div>

                                        <div class="modal-body">

                                            {$core->getBlock('filter_left_search_hotel')}

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="item-hotel-list">

                            <h2 class="head-title-hotel">{$clsCountryEx->getTitle($country_id)}: <span>{$core->get_Lang('Find')} {$totalRecord}

                                    {$core->get_Lang('accommodations')}</span></h2>

                            <div class="intro_top short_content content-hotelss-txt" data-height="100">

                                {$core->get_Lang("100% customizable {$clsCountryEx->getTitle($country_id)} stay. Idea to compose your trip as you wish")}

                            </div>



                            <div class="box-hotel-style">

                                {section name=i loop=$listHotelPlace}

                                {assign var = hotel_id value = $listHotelPlace[i].hotel_id}

                                {assign var = arrHotel value = $listHotelPlace[i]}

                                {$clsISO->getBlock('box_hotel_item',["hotel_id"=>$hotel_id,"arrHotel"=>$arrHotel])}

                                {/section}

                            </div>

                            {if $totalPage gt '1'}

                            <div class="pagination pager">{$page_view}</div>

                            {/if}

                            <section class="recently_hotel">
                                {if $lstHotelRecent}
                                <div class="txt_recentlyhotel">
                                    <h2 class="recentlyViewed" style="display:block;">{$core->get_Lang('Recently viewed')}</h2>
                                    <div class="sec_recently_box-slide owl-carousel_overview6 owl-carousel">
                                        {section name=i loop=$lstHotelRecent}
                                        <div class="recently_hotel">
                                            <div class="img_hotel">
                                                <a class="photo" href="{$clsHotel->getLink($lstHotelRecent[i].hotel_id)}">
                                                    <img class="img-responsive img100" src="{$lstHotelRecent[i].image}" alt="{$lstHotelRecent[i].title}" />
                                                </a>
                                            </div>
                                            <div class="box_item_body">
                                                <div class="box_left_body">
                                                    <h3 class="box_body_title">
                                                        <a class="text-decoration-none txt-hover-home" href="{$clsHotel->getLink($lstHotelRecent[i].hotel_id)}" title="{$lstHotelRecent[i].title}">{$lstHotelRecent[i].title}</a>
                                                        <div class="star_hotel">
                                                            {$clsHotel->getStarNumber($lstHotelRecent[i].hotel_id)}
                                                        </div>
                                                    </h3>
                                                    <div class="box_body-hotel">
                                                        <img src="{$URL_IMAGES}/hotel/iconHome.svg" alt="error">
                                                        <p style="margin: 0">{$clsHotel->getTypeHotel($lstHotelRecent[i].hotel_id)}</p>

                                                    </div>
                                                    <div class="address">
                                                        <div class="box_body_adress">
                                                            <img src="{$URL_IMAGES}/hotel/address.svg" alt="error">
                                                            <p>{$clsHotel->getAddress($lstHotelRecent[i].hotel_id)}</p>
                                                        </div>
                                                    </div>
                                                    <div class="txt_score-review">
                                                        <div class="border_score">
                                                            <p class="numb_scorestay">{$clsReviews->getReviews($lstHotelRecent[i].hotel_id, 'avg_point', 'hotel')}</p>
                                                        </div>
                                                        <div class="txt_reviewsquality">
                                                            <p class="txt_qualityreview">{$clsReviews->getReviews($lstHotelRecent[i].hotel_id, 'txt_review', 'hotel')}
                                                                <span class="txt_reviews">({$clsReviews->getReviews($lstHotelRecent[i].hotel_id, '', 'hotel')} {$core->get_Lang('reviews')})</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="des_list_hotel_item_price">
                                                        <span class="des_price_title">Avg price per night</span>
                                                        <span class="des_price_show_text">US</span>
                                                        <span class="des_price_show_number">${$clsHotel->getPriceAvg($lstHotelRecent[i].hotel_id)}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {/section}
                                    </div>

                                </div>
                                {/if}

                            </section>



                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>


{$core->getBlock('customer_review')}
{$core->getBlock('top_attraction')}
{$core->getBlock('also_like')}


<style>
    .recently_hotel .owl-carousel .owl-item .box_left_body img {
        width: unset;
    }

    .recently_hotel .recentlyViewed {
        color: var(--Neutral-1, #111D37);
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 36px;
        /* 150% */
        position: sticky;
        display: block !important;
    }

    .recently_hotel .img_hotel {
        /* max-width: 200px; */
        overflow: hidden;
        border-radius: 8px;
    }


    .recently_hotel .img_hotel img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    /* .box_body_title {
        margin-top: 12px;
    } */

    .box_body_title a {
        color: #111D37;
        font-size: 18px;
        font-style: normal;
        font-weight: 600;
        line-height: 28px;
    }

    .box_body_adress p {
        color: #434B5C;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        margin-bottom: 0;
    }

    .address .box_body_adress {
        display: flex;
        align-items: flex-start;
        gap: 0 6px;
    }

    .txt_score-review {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
        /* margin-top: 12px; */
    }

    .border_score {
        position: relative;
        width: 32px;
        height: 32px;
        flex-shrink: 0;
        border-radius: 8px 8px 8px 0px;
        background: var(--Accent-2, #004EA8);
        margin-right: 10px;
    }

    .numb_scorestay {
        color: #FFF;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 24px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .txt_reviewsquality {
        display: flex;
        align-items: center;
    }

    .txt_qualityreview {
        margin: 0;
        color: #111D37;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
    }

    .txt_qualityreview .txt_reviews {
        color: #959AA4;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 16px;
    }

    .owl-prev.disabled,
    .owl-next.disabled {
        display: none !important;
    }

    .img_hotel .img-responsive:hover {
        object-fit: cover;
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>


<script type="text/javascript">
    var $_View_more = '{$core->get_Lang("View more")}';

    var $_Less_more = '{$core->get_Lang("Less more")}';

    var $Loading = '{$core->get_Lang("Loading")}';

    var selectmonth = '{$core->get_Lang("select month")}';

    var $_Expand_all = '{$core->get_Lang("Expand all")}';

    var $_Collapse_all = '{$core->get_Lang("Collapse all")}';

    var $_LANG_ID = '{$_LANG_ID}';
</script>



{literal}

<script>
    $(".btn-close").click(function() {
        $(this).closest('.mapModal').remove();
    });

    $(".box_body-check").each(function() {
        $(this).find("li:lt(2)").show();
        $(this).find("li:gt(1)").hide();
    });

    $(document).on('click', '.box_body-service-item', function() {
            let unika_icon_more = $(this).parents('.box_body-service').find('.hotel_icon_more');
            if (unika_icon_more.hasClass('active')) {
                unika_icon_more.removeClass('active');
            } else {
                unika_icon_more.addClass('active');
            }
        })
        .on('click', function(event) {
            if (!$(event.target).closest('.hotel_icon_more').length && !$(event.target).closest('.box_body-service-item').length) {
                $('.hotel_icon_more').removeClass('active');
            }
        })

    function toggleShorted(_this, e) {

        e.preventDefault();

        if (!$(_this).hasClass('clicked')) {

            $(_this).parent('.short_content')

                .css('height', 'auto')

                .removeClass('shorted')

                .addClass('lessmore');

            $(_this).addClass('clicked').text($_Less_more);

        } else {

            var max_height = $(_this).attr('max_height');

            $(_this).parent('.short_content')

                .css('height', max_height)

                .addClass('shorted')

                .removeClass('lessmore');

            $(_this).removeClass('clicked').text($_View_more);

        }

        return false;

    }

    $(function() {

        if ($('.short_content').length) {

            $('.short_content').each((_i, _elem) => {

                var _max_height = $(_elem).data('height'),

                    _origin_height = $(_elem).outerHeight(false);

                if (parseInt(_max_height) < _origin_height) {

                    $(_elem)

                        .height(_max_height)

                        .addClass('shorted')

                        .append('<a class="more" max_height="' + _max_height + '" onClick="toggleShorted(this,event)">' + $_View_more + '</a>');

                }

            });

        }

    });

    const textContainer = document.querySelector('.intro_top');

    const toggleBtn = document.querySelector('.toggle-btn');

    if (textContainer.scrollHeight > (textContainer.offsetHeight + 45)) {

        toggleBtn.style.display = 'block';

        toggleBtn.addEventListener('click', () => {

            textContainer.classList.toggle('show-all');

            toggleBtn.innerHTML = textContainer.classList.contains('show-all') ? 'View Less <i class="fa-solid fa-angle-up"></i>' : 'View More <i class="fa-solid fa-angle-down"></i>';
        });

    }

    $('.owl-carousel_overview6').owlCarousel({

        items: 3,
        margin: 32,

        loop: false,

        nav: true,

        dots: false,

        smartSpeed: 1000,

        navText: ["<i class='fa fa-chevron-left fa-2xl'></i>", "<i class='fa fa-chevron-right fa-2xl'></i>"],

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

    })
</script>

{/literal}

<script src="{$URL_JS}/jquery.countdown.min.js?v={$upd_version}"></script>

<script src="{$URL_JS}/jquery-confirm.min.js?v={$upd_version}"></script>