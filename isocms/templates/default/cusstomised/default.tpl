<div class="page_container page{$mod}{$act}">
    <div class="banner">
        <img src="{$clsConfiguration->getImage('site_hotel_banner',1920,400)}" width="1920" height="400" class="img100"
            alt="{$core->get_Lang('Hotels')}" />
        {$core->getBlock('box_form_search_hotel')}
    </div>
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
                    <div class="modal fade" id="filter_search" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <div class="intro_top short_content content-hotelss-txt" data-height="150">
                            {$clsConfiguration->getValue($site_hotel_intro)|html_entity_decode}
                        </div>
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
                                {$page_view}
                            </div>
                        {/if}

                        <h2 class="recentlyViewed">{$core->get_Lang('Recently viewed')}</h2>
                        <div class="clicked-details"></div>
                        <button class="btnShowViewed">{$core->get_Lang('More')}</button>
                        <button class="btnNoneViewed">{$core->get_Lang('Collapse all')}</button>
                    </div>
                </div>

            </div>
            <div class="reviewViewed">
                {$core->getBlock('customer_review')}
            </div>
        </div>
    </div>
</div>

<div class="attractions">
    {$core->getBlock('top_attraction')}
</div>
<div class="alsoLike">
    {$core->getBlock('alsoLike_hotel')}
</div>


</div>
<script type="text/javascript">
    var url = window.location.href;
    var $_View_more = '{$core->get_Lang("View more")}';
    var $_Less_more = '{$core->get_Lang("Less more")}';
    var $Loading = '{$core->get_Lang("Loading")}';
    var selectmonth='{$core->get_Lang("select month")}';
    var $_Expand_all = '{$core->get_Lang("Expand all")}';
    var $_Collapse_all = '{$core->get_Lang("Collapse all")}';
    var $_LANG_ID = '{$_LANG_ID}';
</script>

<script src="{$URL_JS}/jquery.countdown.min.js?v={$upd_version}"></script>
<script src="{$URL_JS}/jquery-confirm.min.js?v={$upd_version}"></script>