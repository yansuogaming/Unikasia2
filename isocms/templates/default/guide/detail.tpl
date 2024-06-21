<section class="page_container trvgd_page_container">
    {$core->getBlock('des_nav_breadcrumb')}
    <div class="trvgd_main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-9">
                    <div class="trvgd_content">
                        {$clsGuide->getContent($guide_id)}
                    </div>
                    <div class="trvgd_action">
                        <div class="txt_ico_share_star">
                            <div class="txt_ico_share">
                                <div class="share-content">
                                    <span class="txtshare">{$core->get_Lang('Share')}</span>
                                    <div class="social-icon-share-blog">
                                        <div class="sharethis-inline-share-buttons" data-image="{$DOMAIN_NAME}{$clsISO->getPageImageShare($guide_id,'Guide',$one)}" data-url="{$DOMAIN_NAME}{$curl}" data-title="{$guide_title}"></div>
                                        <script type="text/javascript" src="{$URL_JS}/jquery.sharer.js?v={$up_version}"></script>
                                        {assign var=link_share value=$curl}
                                        {assign var=title_share value=$guide_title}
                                        {$clsISO->getBlock('box_share',["link_share"=>$link_share,"title_share"=>$title_share])}
                                    </div>
                                </div>
                            </div>
                            <div class="rating-and-votes">
                                {assign var=fileAj value='saveRating'}
                                {assign var=typeAj value='guide'}
                                {assign var=table_id value=$guide_id}

                                {if $percentRateAVG}
                                {assign var=percentAVG value=$percentRateAVG}
                                {else}
                                {assign var=percentAVG value='0'}
                                {/if}
                                {include file='../blocks/rate_star.tpl'}
                                <!-- {$core->getBlock('rate_star')} -->
                            </div>
                        </div>
                    </div>
                    <div class="trvgd_tags">
                        <span class="trvgd_txttag">{$core->get_Lang('Tags:')}</span>
                        {assign var="listTagGuide" value=$clsGuide->getListTag($guide_id,$one)}
                        {if $listTagGuide ne ''}
                        <ul class="trvgd_list_tags">
                            {$listTagGuide}
                        </ul>
                        {/if}
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3">
                    {$core->getBlock('des_travel_guide_side')}
                </div>
            </div>
        </div>
    </div>
    <div class="trvgd_similar">
        {if $lstRelated}
        <div class="container">
            <div class="trvgd_similar_title">
                <h2>{$core->get_Lang('Similar travel guide')}</h2>
            </div>
            <div class="trvgd_similar_content">
                <div class="owl-carousel owl-theme trvgd_similar_travel_guide">
                    {foreach from=$lstRelated key=key item=item}
                    {assign var=link value=$clsGuide->getLink2($item.guide_id)}
                    {assign var=title value=$clsGuide->getTitle($item.guide_id)}
                    {assign var=intro value=$clsGuide->getIntro($item.guide_id)}
                    {assign var=image value=$clsGuide->getImage($item.guide_id, 292, 216)}
                    {assign var=place value=$clsGuide->getPlaceGuide($item.guide_id)}
                    <div class="item" data-merge="1">
                        <div class="trvgd_similar_item">
                            <div class="trvgd_similar_item_image">
                                <a href="{$link}" title="{$title}">
                                    <img src="{$image}" alt="{$title}" width="292" height="216" loading="lazy" />
                                </a>
                            </div>
                            <div class="trvgd_similar_item_intro">
                                <div class="trvgd_similar_item_title">
                                    <h3><a href="{$link}" title="{$title}">{$title}</a></h3>
                                </div>
                                <div class="trvgd_similar_item_place">
                                    <i class="fa-sharp fa-light fa-location-dot"></i> {$place}
                                </div>
                                <div class="trvgd_similar_item_description">
                                    {$intro}
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
        {/if}
    </div>
    {if $arr_recent_view}
    <div class="trvgd_recent_view">
        <div class="container">
            <div class="trvgd_recent_view_title">
                <h2>{$core->get_Lang('Recently viewed')}</h2>
            </div>
            <div class="trvgd_recent_view_content">
                <div class="row">
                    {foreach from=$arr_recent_view key=key item=item}
                    {assign var="guideID" value=$item}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="trvgd_similar_item">
                            <div class="trvgd_similar_item_image">
                                <a href="{$clsGuide->getLink2($guideID)}" title="{$clsGuide->getTitle($guideID)}">
                                    <img src="{$clsGuide->getImage($guideID, 292, 216)}" alt="{$clsGuide->getTitle($guideID)}" width="292" height="216" loading="lazy" />
                                </a>
                            </div>
                            <div class="trvgd_similar_item_intro">
                                <div class="trvgd_similar_item_title">
                                    <h3><a href="{$clsGuide->getLink2($guideID)}" title="{$clsGuide->getTitle($guideID)}">{$clsGuide->getTitle($guideID)}</a></h3>
                                </div>
                                <div class="trvgd_similar_item_place">
                                    <i class="fa-sharp fa-light fa-location-dot"></i> {$clsGuide->getPlaceGuide($guideID)}
                                </div>
                                <div class="trvgd_similar_item_description">
                                    {$clsGuide->getIntro($guideID)}
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    {/if}
</section>

{literal}
<script>
    if ($('.trvgd_similar_travel_guide').length > 0) {
        var $owl = $('.trvgd_similar_travel_guide');
        $owl.owlCarousel({
            lazyLoad: true,
            loop: false,
            margin: 36,
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
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    }
</script>
{/literal}