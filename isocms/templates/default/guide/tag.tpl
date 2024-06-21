<section class="page_container trvgtag_page_container">
    {$core->getBlock('des_nav_breadcrumb')}
    <div class="trvgtag_listtag_guide">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="trvgtag_listtag_guide_title">
                        <h2>Guide listing by tag: #{$guidetag_slug}</h2>
                    </div>
                    {if $listGuide ne ''}
                    <div class="trvgtag_listtag_guide_content">
                        {foreach from=$listGuide key=key item=item}
                        {assign var="GuideID" value=$item.guide_id}
                        {assign var="GuideTitle" value=$clsGuide->getTitle($GuideID)}
                        {assign var="GuideLink" value=$clsGuide->getLink2($GuideID)}
                        <div class="trvgtag_listtag_guide_content_item">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                                    <div class="trvgtag_listtag_guide_item_image">
                                        <a href="{$GuideLink}" title="{$GuideTitle}">
                                            <img src="{$clsGuide->getImage($GuideID, 405, 237)}" alt="{$GuideTitle}" width="405" height="237">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                                    <div class="trvgtag_listtag_guide_item_intro">
                                        <div class="trvgtag_listtag_guide_item_title">
                                            <h3><a href="{$GuideLink}" title="{$GuideTitle}">{$GuideTitle}</a></h3>
                                        </div>
                                        <div class="trvgtag_listtag_guide_item_category">
                                            <div class="trvgtag_listtag_guide_item_category_left">
                                                <i class="fa-regular fa-clock" aria-hidden="true"></i>
                                                <span>{$clsGuide->getPublishDate($GuideID)}</span>
                                            </div>
                                            <div class="trvgtag_listtag_guide_item_category_right">
                                                <i class="fa-sharp fa-light fa-folder-open"></i>
                                                <span>{$clsGuideCat->getTitle($item['cat_id'])}</span>
                                            </div>
                                        </div>
                                        <div class="trvgtag_listtag_guide_item_description">
                                            {$clsGuide->getIntro($GuideID)}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/foreach}
                    </div>
                    <div class="des_travel_guide_paginate">
                        {$page_view}
                    </div>
                    {else}
                    <p style="margin-bottom: 50px;">{$core->get_Lang('No data')}</p>
                    {/if}
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
            </div>
        </div>
    </div>
</section>