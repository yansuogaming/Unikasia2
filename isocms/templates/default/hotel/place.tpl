<div class="page_container">

    <div class="banner">

        <div class="banner_img_hotel">

        {if $show eq 'City'}

            <img src="{$clsCity->getImageBannerHotel($city_id,1920,600,$oneItem)}" class="img100"

                alt="{$core->get_Lang('Hotels in')} {$TD}" />

        {else}

            {if !isset($clsCountryEx->getImageBannerHotel($country_id,1920,500,$oneItem)) || !$clsCountryEx->getImageBannerHotel($country_id,1920,500,$oneItem)}

                <img src="{$URL_IMAGES}/hotel/no-image.png" alt="error" class="img100" />

            {else}

                <img src="{$clsCountryEx->getImageBannerHotel($country_id,1920,600)}" class="img100"

                    alt="{$core->get_Lang('Hotels in')} {$TD}" />

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

                        <h2 class="result_searchs" data-bs-title="{$core->get_Lang('Show Sort & filter')}"

                            data-bs-custom-class="custom-tooltip" data-bs-toggle="offcanvas" href="#nsdt_show_filter"

                            data-bs-toggle="tooltip" data-bs-placement="top">{$core->get_Lang('Sort & filter')}</h2>

                        <div class="offcanvas offcanvas-start" tabindex="-1" id="nsdt_show_filter"

                            aria-labelledby="offcanvasExampleLabel">

                            <div class="offcanvas-header">

                                <button type="button" class="btn-close btn-close-filter bi bi-chevron-left"

                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>

                                <h2 class="filter-title-mobile">{$core->get_Lang('Sort & filter')}</h2>



                            </div>

                            <div class="offcanvas-body">

                                {* {$core->getBlock('filter_left_search_hotel')} *}

                            </div>

                        </div>

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

                            <h2 class="recentlyViewed">{$core->get_Lang('Recently viewed')}</h2>

                            <div class="clicked-details"></div>

                            <button class="btnShowViewed">{$core->get_Lang('More')}</button>

                            <button class="btnNoneViewed">{$core->get_Lang('Collapse all')}</button>

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





<script type="text/javascript">

    var $_View_more = '{$core->get_Lang("View more")}';

    var $_Less_more = '{$core->get_Lang("Less more")}';

    var $Loading = '{$core->get_Lang("Loading")}';

    var selectmonth='{$core->get_Lang("select month")}';

    var $_Expand_all = '{$core->get_Lang("Expand all")}';

    var $_Collapse_all = '{$core->get_Lang("Collapse all")}';

    var $_LANG_ID = '{$_LANG_ID}';

</script>



{literal}

    <script>

        $(".btn-close").click(function(){

            $(this).closest('.mapModal').remove();

        });



        function toggleShorted(_this, e){

        	e.preventDefault();

        	if(!$(_this).hasClass('clicked')){

        		$(_this).parent('.short_content')

        				.css('height','auto')

        				.removeClass('shorted')

        				.addClass('lessmore');

        		$(_this).addClass('clicked').text($_Less_more);

        	} else {

        		var max_height = $(_this).attr('max_height');

        		$(_this).parent('.short_content')

        				.css('height',max_height)

        				.addClass('shorted')

        				.removeClass('lessmore');

        		$(_this).removeClass('clicked').text($_View_more);

        	}

        	return false;

        }

        $(function(){

            if($('.short_content').length){

                $('.short_content').each((_i, _elem) => {

                    var _max_height = $(_elem).data('height'),

                        _origin_height = $(_elem).outerHeight(false);

                    if(parseInt(_max_height) < _origin_height){

                        $(_elem)

                            .height(_max_height)

                            .addClass('shorted')

                            .append('<a class="more" max_height="'+_max_height+'" onClick="toggleShorted(this,event)">'+$_View_more+'</a>');

                    }

                });

            }

        });



        const textContainer = document.querySelector('.intro_top');

        const toggleBtn = document.querySelector('.toggle-btn');



        if (textContainer.scrollHeight > textContainer.offsetHeight) {

            toggleBtn.style.display = 'block';

            toggleBtn.addEventListener('click', () => {

                textContainer.classList.toggle('show-all');

                toggleBtn.innerHTML = textContainer.classList.contains('show-all') ? 'View Less <i class="fa-solid fa-angle-up"></i>' : 'View More <i class="fa-solid fa-angle-down"></i>';            });

        }

    </script>

{/literal}

<script src="{$URL_JS}/jquery.countdown.min.js?v={$upd_version}"></script>

<script src="{$URL_JS}/jquery-confirm.min.js?v={$upd_version}"></script>