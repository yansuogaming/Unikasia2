<div class="des_list_travel_style">
    <div class="container">
        <div class="des_travel_style_title">
            <h2>
                {if $mod eq 'tour' && $act eq 'cat'}
                {$clsCountry->getTitle($country_id)}
                {$clsConfiguration->getValue('TrvsTravelCountryTitle')|html_entity_decode}
                {else}
                {$clsConfiguration->getOutTeam('TravelStyleTitle')}
                {/if}
            </h2>
            <div class="des_travel_style_description">
                {if $mod eq 'tour' && $act eq 'cat'}
                {$clsConfiguration->getValue('TrvsTravelCountryDescription')|html_entity_decode}
                {else}
                {$clsConfiguration->getOutTeam('TravelStyleDescription')}
                {/if}
            </div>
        </div>
        <div class="des_travel_style_content">
            <div class="container">
                <div class="owl-carousel owl-theme des_list_travel_style_carousel">
                    {if $list_travel_style}
                    {foreach from=$list_travel_style key=key item=item}
                    {assign var=category_country_id value=$item.category_country_id}
                    <div class="des_travel_style_item item">
                        <a href="{$clsCategory_Country->getLink2($category_country_id)}" title="{$clsCategory_Country->getTitle($item.category_country_id)}">
                            <div class="des_travel_style_item_image">
                                <img src="{$clsCategory_Country->getImageVertical($category_country_id, 294, 462)}" width="294" height="462" alt="{$clsCategory_Country->getTitle($item.category_country_id)}">
                            </div>
                            <div class="des_travel_style_item_intro">
                                <div class="des_travel_style_item_title">
                                    <h3><a href="{$clsCategory_Country->getLink2($category_country_id)}" title="{$clsCategory_Country->getTitle($item.category_country_id)}">{$clsTourCategory->getTitle($item.cat_id)}</a></h3>
                                </div>
                                <div class="des_travel_style_item_description">
                                    {$clsCategory_Country->getContent($category_country_id)}
                                </div>
                            </div>
                        </a>
                    </div>
                    {/foreach}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>

{literal}
<style>
    .des_list_travel_style_carousel .owl-item {
        margin-right: unset;
        height: unset;
        min-width: unset;
    }
</style>
{/literal}

{literal}
<script>
    $(document).ready(function() {
        if ($('.des_list_travel_style_carousel').length > 0) {
            var $owl = $('.des_list_travel_style_carousel');
            $owl.owlCarousel({
                lazyLoad: true,
                loop: false,
                margin: 34,
                nav: true,
                navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
                dots: false,
                // autoplay: false,
                // autoplayTimeout:3000,	
                // animateOut: 'fadeOut',
                // animateIn: 'fadeIn',
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                },
                autoplayHoverPause: true,
                animateOut: 'slideOutUp',
                animateIn: 'slideInUp'
            });
        }


    });
</script>
{/literal}