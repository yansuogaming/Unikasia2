<div class="page_container page{$mod}{$act}">
    <!--
    <div class="banner">
        <img src="{$clsConfiguration->getImage('site_hotel_banner',1920,400)}" width="1920" height="400" class="img100"
            alt="{$core->get_Lang('Hotels')}" />
        {$core->getBlock('box_form_search_hotel')}
    </div>
    -->
    <nav class="breadcrumb-main breadcrumb-cruise bg-default breadcrumb-more bg_fff">
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
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div id="contentPage" class="hotelPlacePage pdt40">
        <div class="container">
            {* <h1>{$core->get_Lang('Hotels')}</h1> *}

            {assign var=site_hotel_intro value=site_hotel_intro_|cat:$_LANG_ID}
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="result_search filterDev">{$core->get_Lang('Sort & filter')}</h2>
                    <h2 class="result_search btnFilterMobile" data-bs-toggle="modal" data-bs-target="#filter_search">
                        {$core->get_Lang('Sort & filter')}
                    </h2>
                    <div class="modal fade" id="filter_search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="filter_left">
                                    <div class="modal-header">
                                        <h2>
                                            <button type="button" class="close" data-bs-dismiss="modal">
                                                <span aria-hidden="true">X</span>
                                                <span class="sr-only">{$core->get_Lang('Close')}</span>
                                            </button> {$core->get_Lang('Sort & filter')}
                                        </h2>
                                    </div>
                                    <div class="modal-body">
                                        {$core->getBlock('filter_left_search_hotel')}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <h2 class="result_searchss">{$core->get_Lang('Find')}: {$totalRecord}
                            {$core->get_Lang('accommodations')}</h2>
                        {* <div class="intro_top short_content content-hotelss-txt" data-height="150">
                            {$clsConfiguration->getValue($site_hotel_intro)|html_entity_decode}
                        </div> *}
                        {assign var=totalHotel value=$listHotel|@count}
                        <div class="box-hotel-style">
                            {section name=i loop=$listHotel}
                            {assign var = hotel_id value = $listHotel[i].hotel_id}
                            {assign var = arrHotel value = $listHotel[i]}
                            {$clsISO->getBlock('box_hotel_item',["hotel_id"=>$hotel_id,"arrHotel"=>$arrHotel])}
                            {/section}
                        </div>
                        {if $totalPage gt '1'}
                        <div class="pagination pager">
                            {if $currentPage > 1}
                            <li class="pagin-prev">
                                <a class="pagin-prev-link" href="{$prevLink}" aria-label="Previous">
                                    <img src="{$URL_IMAGES}/hotel/prevPage.svg" alt="error" />

                                </a>
                            </li>
                            {/if}

                            {assign var="prevPage" value=null}
                            {foreach from=$paginationLinks item=page}
                            {if $page.page == 1 or $page.page == $totalPage or
                            ($page.page >= $currentPage - 2 and $page.page <= $currentPage + 2)} {if $prevPage !==null and $page.page !=$prevPage + 1} <li class="page-item">
                                <span class="hideTextPaging">...</span>
                                </li>
                                {/if}
                                <li class="page-item {if $page.is_current}active{/if}">
                                    <a class="page-item-link" href="{$page.url}">{$page.page}</a>
                                </li>
                                {assign var="prevPage" value=$page.page}
                                {/if}
                                {/foreach}

                                {if $currentPage < $totalPage} <li class="pagin-next">
                                    <a class="pagin-next-link" href="{$nextLink}" aria-label="Next">
                                        <img src="{$URL_IMAGES}/hotel/nextPage.svg" alt="error" />
                                    </a>
                                    </li>
                                    {/if}
                        </div>

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
{$core->getBlock('customer_review')}
{$core->getBlock('top_attraction')}
{$core->getBlock('also_like')}

</div>

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
        /* 155.556% */
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
    var url = window.location.href;
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


    document.addEventListener("DOMContentLoaded", function() {
        const revVierContainer = document.querySelector('.revVier');
        const mapModalElement = revVierContainer.querySelector('.mapModal');

        if (mapModalElement) {
            mapModalElement.remove();
        } else {
            console.warn("Không tìm thấy phần tử modal mapModal bên trong revVier.");
        }
    });

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