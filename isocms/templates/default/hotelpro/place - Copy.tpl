{$core->getBlock('box_travel')} 
<div class="page_container mb50">
    <div class="banner" style="background-image:url('{$clsConfiguration->getValue('site_hotel_banner')}'); background-position:50% 50%; background-size:cover">
        <div class="contentBanner">
            <h1>{$core->get_Lang('Hotels')} in {$clsCity->getTitle($city_id)}</h1><br/>
            {assign var=site_intro_hotel_banner value=site_intro_hotel_banner_|cat:$_LANG_ID}
            {if $clsConfiguration->getValue($site_intro_hotel_banner) ne ''}
            <div class="intro14_f"> 
				{$clsConfiguration->getValue($site_intro_hotel_banner)}
           </div>
           {/if}
        </div>
       {$core->getBlock('find_hotel')}
    </div>
    <div class="container">
    	<div id="breadcrumb" class="mb40">
            <div class="breadcrumb">
                <ul itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="name"><a href="/" title="" itemprop="url">{$core->get_Lang('Home')}</a></li>
                    <li><span>›</span></li>
                    <li itemprop="name"><a href="{$clsISO->getLink('hotel')}" title="{$core->get_Lang('Destinations')}" itemprop="url">{$core->get_Lang('Hotels & Resort')}</a></li>
                    <li><span>› </span></li>
                    <li itemprop="name"><a href="{$curl}" title="{$clsCity->getTitle($city_id)}" itemprop="url">{$clsCity->getTitle($city_id)} {$core->get_Lang('Hotels')}</a></li>
                </ul>
            </div>
        </div>
        <div class="contentPage">
        	<div class="row">
                <div class="col-md-3 hidden-xs hidden-sm mb30">
                    <div class="destinationLink mb40">
                        <h3 class="h3_18_Bold_007f75 mb10">{$core->get_Lang('Destinations')}</h3>
                        <ul>
                            {section name=i loop=$listTopCity}
                            {assign var=title value=$clsCity->getTitle($listTopCity[i].city_id)}
                            <li class="{if $city_id eq ($listTopCity[i].city_id)}active{/if}"><a href="{$clsCity->getLink($listTopCity[i].city_id)}" title="{$title}">{$title}</a></li>
                            {/section}
                        </ul>
                    </div>
                    {$core->getBlock('download')}
                    {$core->getBlock('company')}
                </div>
                <div class="col-md-9 mb50">
                    <div class="contentDestination">   
                        <h2 class="h2_24_Bold_010101 mb20">{$core->get_Lang('Hotels')} in {$clsCity->getTitle($city_id)}</h2>
                        <div class="intro14_3 mb40">{$clsCity->getIntro($city_id,'Hotel')}</div>
                        {$core->getBlock('destinationTab')}
                        <div class="tabs_contentRL mb20" id="lstTabsRL" style="border:0 !important">
                            <div class="contentTabRL">
                                <div class="hotelBox" id="listHolderView">
                                    <div class="row">
                                    	{assign var=totalHotel value=$listHotelCity|@count}
                                    	{section name=i loop=$listHotelCity}
                                        {assign var = link value = $clsHotel->getLink($listHotelCity[i].hotel_id)}
                                        {assign var = title value = $clsHotel->getTitle($listHotelCity[i].hotel_id)}
                                        <div class="box col-sm-6 col-md-4" {if $smarty.section.i.iteration gt '9'} style="display:none;"{/if}>
                                            <div class="cityHotel hotelItem">
                                                <div class="post-thumb">
                                                    <a class="photo" href="{$link}" title="{$title}">
                                                        <img class="img-responsive" src="{$clsHotel->getImage($listHotelCity[i].hotel_id,600,400)}" alt="{$title}" title="{$title}" width="100%" align="top">
                                                    </a>
                                                    <div class="figure">
                                                        <a href="{$link}" class="cityHotel viewdetail">{$core->get_Lang('View Detail')}</a>
                                                        <p class="price">{$core->get_Lang('From')}: <span class="price-Inc">{$clsHotel->getPrice($listHotel[i].hotel_id)}</span></p>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <h3 class="title"><a href="{$link}" title="{$title}">{$title}</a></h3>
                                                    <p class="star"><img src="{$clsHotel->getImageStar($listHotelCity[i].star_id)}" /></p>
                                                    <p class="address"><span>{$core->get_Lang('Address')}: </span>{$clsHotel->getAddress($listHotelCity[i].hotel_id)}</p>
                                                    <p class="text">{$clsHotel->getIntro($listHotelCity[i].hotel_id)|strip_tags|truncate:80}</p>
                                                </div>
                                            </div>
                                        </div>
                                        {/section}
                                        {if $totalHotel gt '9'}
                                            <div class="cleafix"></div>
                                             <div class="wrap">
                                                    <a href="javascript:void(0);" rel="nofollow" page="1" class="show-more" id="show-more">{$core->get_Lang('Show more trips')}<img src="{$URL_IMAGES}/loadtrip.png" class="load" alt="load" width="16px" height="16px"/></a>
                                             </div>                                                
                                        {/if}
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3 hidden-md hidden-lg">
                    <div class="destinationLink mb40 ">
                        <h3 class="h3_18_Bold_007f75 mb10">{$core->get_Lang('Destinations')}</h3>
                        <ul>
                            {section name=i loop=$listTopCity}
                            {assign var=title value=$clsCity->getTitle($listTopCity[i].city_id)}
                            {assign var=link value=$clsCity->getLink($listTopCity[i].city_id)}
                            <li class="{if $city_id eq ($listTopCity[i].city_id)}active{/if}"><a href="{$link}" title="{$title}">{$title}</a></li>
                            {/section}
                        </ul>
                    </div>
                    {$core->getBlock('download')}
                </div>
            </div>
        </div>
    </div>
    {$core->getBlock('blog')}
</div>
{$core->getBlock('getspecial')}

{literal}
<script type="text/javascript">
$(function(){	
    var $number_per_page = 6;	
    var $page =1;	
    var timer = '';
    $('#show-more').click(function(){
        var $_this = $(this);	
        clearTimeout(timer);	
        $page = $page+1;	
        timer = setTimeout(function(){	
            var $start = ($page-1)*$number_per_page;	
            var $end = $start + $number_per_page;	
            for(var i = $start; i < $end; i++){	
                $('.box').eq(i).show();	
            }	
        },500);
        /* Hide load more */	
        setInterval(function(){	
            loadPageFix();	
        },100);	
    });	
}); 
</script>
{/literal}
