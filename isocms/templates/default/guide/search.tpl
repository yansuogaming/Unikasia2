<section class="page_container trvg_page_container">
    {$core->getBlock('des_nav_breadcrumb')}
    {$core->getBlock('des_tailor_made_travel')}
    <div class="guide_search_result mb20">
        <div class="container">
            <h2 class="guide_search_title">{$core->get_Lang('Total search results:')} {$totalRecord}</h2>
        </div>
    </div>
    <div class="des_tailor_detail_travel_guide">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-9">
                    <div class="des_travel_guide_list">
                        <div class="row">
                            {if $list_guide}
                            {foreach from=$list_guide key=key item=item}
                            {assign var="guide_id" value=$item.guide_id}
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="des_travel_guide_item">
                                    <div class="des_travel_guide_image">
                                        <img src="{$clsGuide->getImage($guide_id, 292, 219)}" alt="{$clsGuide->getTitle($guide_id)}" width="292" height="219">
                                        <a href="{$clsGuide->getLink2($guide_id)}" class="des_travel_guide_link" title="{$clsGuide->getTitle($guide_id)}">
                                            SEE DETAILS <i class="fa-sharp fa-regular fa-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="des_travel_guide_intro">
                                        <div class="des_travel_guide_title">
                                            <h3><a href="{$clsGuide->getLink2($guide_id)}" title="{$clsGuide->getTitle($guide_id)}">{$clsGuide->getTitle($guide_id)}</a></h3>
                                        </div>
                                        <div class="des_travel_guide_place">
                                            <i class="fa-sharp fa-light fa-location-dot"></i> {$clsGuide->getPlaceGuide($guide_id)}
                                        </div>
                                        <div class="des_travel_guide_description">
                                            {$clsGuide->getIntro($guide_id)}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/foreach}
                            {/if}
                        </div>
                    </div>
                    {if $page_view}
                    <div class="des_travel_guide_paginate">
                        {$page_view}
                    </div>
                    {/if}
                </div>
                <div class="col-12 col-sm-12 col-md-3">
                    {$core->getBlock('des_travel_guide_side')}
                </div>
            </div>
        </div>
    </div>
    {$core->getBlock('why_choose_us')}
    {$core->getBlock('customer_review')}
    {$core->getBlock('also_like')}
</section>