<section class="page_container des_page_container">
    {$core->getBlock('des_nav_breadcrumb')}
    {$core->getBlock('des_tailor_made_travel')}
    {$core->getBlock('explore_our_trips')}
    {$core->getBlock('des_list_travel_style')}
    <div class="des_list_hotel">
        <div class="container">
            <div class="des_list_hotel_title">
                <h2>{$clsConfiguration->getOutTeam('HotelTitle')}</h2>
                <div class="des_list_hotel_description">
                    {$clsConfiguration->getOutTeam('HotelDescription')}
                </div>
            </div>
            <div class="des_list_hotel_content">
                <div class="container">
                    <div class="owl-carousel owl-theme des_list_hotel_carousel">
                        {if $list_hotel_country}
                        {foreach from=$list_hotel_country key=key item=item}
                        {assign var=hotel_id value=$item.hotel_id}
                        <div class="des_list_hotel_item item">
                            <a href="{$clsHotel->getLink($hotel_id)}" title="{$clsHotel->getTitle($hotel_id)}">
                                <div class="des_list_hotel_item_image">
                                    <img src="{$clsHotel->getImage($hotel_id, 296, 200)}" width="296" height="200" alt="{$clsHotel->getTitle($hotel_id)}">
                                </div>
                            </a>
                            <div class="des_list_hotel_item_intro">
                                <div class="des_list_hotel_item_title">
                                    <h3><a href="{$clsHotel->getLink($hotel_id)}" title="{$clsHotel->getTitle($hotel_id)}">{$clsHotel->getTitle($hotel_id)}</a></h3>
                                    <div class="des_list_hotel_item_star">
                                        {section name=i start=0 loop=$item.star_id step=1}
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        {/section}
                                    </div>
                                </div>
                                <div class="des_list_hotel_item_type">
                                    <i class="fa-light fa-house"></i> {$clsHotel->getTypeHotel($hotel_id)}
                                </div>
                                <div class="des_list_hotel_item_place">
                                    <i class="fa-light fa-location-dot"></i> {$clsHotel->getAddress($hotel_id)}
                                </div>
                                <div class="des_list_hotel_item_rate">
                                    <span class="des_rate_number">4.5</span>
                                    <span class="des_rate_text">Very good</span>
                                    <span class="des_rate_total">(9 reviews)</span>
                                </div>
                                <div class="des_list_hotel_item_price">
                                    <span class="des_price_title">Avg price per night</span>
                                    <span class="des_price_show_text">US</span>
                                    <span class="des_price_show_number">${$item.price_avg}</span>
                                </div>
                            </div>
                        </div>
                        {/foreach}
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="des_our_team">
        <div class="container">
            <div class="des_our_team_title">
                <h2>{$clsConfiguration->getOutTeam('OurTeamTitle')}</h2>
                <div class="des_our_team_description">
                    {$clsConfiguration->getOutTeam('OurTeamDescription')}
                </div>
            </div>
            <div class="des_our_team_content">
                <div class="des_our_team_content_img">
                    <img src="{$clsConfiguration->getImage('OurTeamBanner', 1047, 403)}" width="1047" height="403" alt="Our Team">
                </div>
                <div class="des_our_team_list">
                    <div class="row">
                        {section name=i loop=4 start=1}
                        {assign var=key value=$smarty.section.i.index}
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="des_our_team_item">
                                <div class="des_our_team_item_img">
                                    <img src="{$clsConfiguration->getImage('OurTeamStepIcon_'|cat:$key, 48, 48)}" width="48" height="48" alt="{$clsConfiguration->getOutTeam('OurTeamStepTitle_'|cat:$key)}">
                                </div>
                                <div class="des_our_team_item_info">
                                    <h3>{$clsConfiguration->getOutTeam('OurTeamStepTitle_'|cat:$key)}</h3>
                                    <div class="des_our_team_item_description">
                                        {$clsConfiguration->getOutTeam('OutTeamStepDescription_'|cat:$key)}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/section}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {*{$core->getBlock('customer_review')}*}
    <div class="des_gallery">
        <div class="container-fluid">
            <div class="des_gallery_title">
                <h2>{$clsCountry->getTitle($country_id)} {$clsConfiguration->getOutTeam('GalleryTitle')}</h2>
            </div>
            <div class="des_gallery_content">
                <div class="owl-carousel owl-theme des_gallery_list">
                    {if $gallery_country}
                    {foreach from=$gallery_country key=key item=item}
                    {assign var=country_image_id value=$item.country_image_id}
                    <div class="item des_grow" data-merge="1">
                        <div class="des_gallery_item">
                            <a data-fancybox="gallery" href="{$item.image}">
                                <img src="{$clsCountryImage->getImage($country_image_id, 480, 403)}" width="480" height="403" alt="{$clsCountryImage->getTitle($country_image_id)}" class="img100" title="{$clsCountryImage->getTitle($country_image_id)}">
                            </a>
                        </div>
                    </div>
                    {/foreach}
                    {/if}
                </div>
            </div>
        </div>
    </div>
    {$core->getBlock('top_attraction')}
    {$core->getBlock('des_list_faq')}
    {$core->getBlock('update_news')}
    {$core->getBlock('also_like')}
</section>

<script>
    var country_id = "{$country_id}";
    var city_id = "{$city_id}";
</script>

<script>
    Fancybox.bind("[data-fancybox]", {});
</script>

{literal}
<script>
    if ($('.des_gallery_list').length > 0) {
        var $owl = $('.des_gallery_list');
        $owl.owlCarousel({
            lazyLoad: true,
            loop: false,
            margin: 0,
            nav: true,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            dots: false,
            // autoplay: false,
            // autoplayTimeout:3000,	
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            merge: true,
            autoHeight: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1.3,
                    nav: false,
                    margin: 15,
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }

    if ($('.des_list_hotel_carousel').length > 0) {
        var $owl = $('.des_list_hotel_carousel');
        $owl.owlCarousel({
            lazyLoad: true,
            loop: false,
            margin: 32,
            nav: true,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            dots: false,
            // autoplay: false,
            // autoplayTimeout:3000,	
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            merge: true,
            autoHeight: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1.3,
                    nav: false,
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }
</script>
{/literal}