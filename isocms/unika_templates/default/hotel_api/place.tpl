<div class="page_container">
    <div class="banner">
    	{if $show eq 'City'}
			<img src="{$clsCity->getImageBannerHotel($city_id,1600,500)}" class="img100" alt="{$core->get_Lang('Hotels in')} {$TD}" />
		{else}
			<img src="{$clsCountryEx->getImageBannerHotel($country_id,1600,500)}" class="img100" alt="{$core->get_Lang('Hotels in')} {$TD}" />
		{/if}	
       {$core->getBlock('find_hotel')}
    </div>
    <nav class="breadcrumb-main breadcrumb-cruise bg-default breadcrumb-more bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="http://schema.org/BreadcrumbList">
               <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				   <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">
					   <span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
               <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				   <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{$clsISO->getLink('hotel')}" title="{$core->get_Lang('Hotels')}">
					   <span itemprop="name" class="reb">{$core->get_Lang('Hotels')}</span></a>
					<meta itemprop="position" content="2" />
				</li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active">
					<a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{$curl}" title="{$TD} {$core->get_Lang('Hotels')}">
						<span itemprop="name" class="reb">{$TD} {$core->get_Lang('Hotels')}</span></a>
					<meta itemprop="position" content="3" />
				</li>
            </ol>
        </div>
    </nav>
    <div id="contentPage" class="hotelPlacePage pdt40">
        <div class="container">
        	<div class="row">
				<div class="col-md-9 floatRight992">
                    <article class="contentDestination">
                        <h1 class="size32 mt0 mb20">{$core->get_Lang('Hotels in')} {$TD}</h1>
                        <div class="intro14_3 mb40">{$HOTEL_INTRO}</div>
                        <div class="contentTabRL">
                            <div class="hotelBox" id="listHolderView">
                                <div class="row">
                                    {assign var=totalHotel value=$listHotelPlace|@count}
                                    {section name=i loop=$listHotelPlace}
                                    {assign var = link value = $clsHotel->getLink($listHotelPlace[i].hotel_id)}
                                    {assign var = title value = $clsHotel->getTitle($listHotelPlace[i].hotel_id)}
                                    <article class="box col-xs-6 col-sm-4 col-md-4">
                                        <div class="cityHotel hotelItem">
                                            <div class="post-thumb">
                                                <a class="photo" href="{$link}" title="{$title}">
                                                    <img class="img-responsive lazy img100" src="{$URL_IMAGES}/pixel.png" data-src="{$clsHotel->getImage($listHotelPlace[i].hotel_id,552,368)}" alt="{$title}" />
                                                </a>
                                                <span style="cursor:pointer" class="{if $profile_id eq ''}exitLogin{else}addWishlist{/if} heart-o inline-block text-center btnwl" title="{$core->get_Lang('Saved to wishlist')}" data-clsTable="Hotel" data-data="{$listHotelPlace[i].hotel_id}" id="addwishlistHotel{$listHotelPlace[i].hotel_id}">{$clsHotel->getOneField('wishlist_num',$listHotelPlace[i].hotel_id)}</span>
                                                <div class="figure">
                                                    <a href="{$link}" class="cityHotel viewdetail">{$core->get_Lang('View Detail')}</a>
                                                    <p class="price">{$core->get_Lang('From')}: <span class="price-Inc">{$clsHotel->getPrice($listHotelPlace[i].hotel_id)}</span></p>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <h3 class="title"><a href="{$link}" title="{$title}">{$title}</a> <img class="star" height="13" src="{$clsHotel->getImageStar($listHotelPlace[i].star_id)}" alt="star" /></h3>
                                                <p class="address"><i class="fa fa-map-marker"></i> {$clsHotel->getAddress($listHotelPlace[i].hotel_id)}</p>
                                                <p class="text" style="display:none">{$clsHotel->getIntro($listHotelPlace[i].hotel_id)|strip_tags|truncate:80}</p>
                                            </div>
                                        </div>
                                    </article>	
                                    {/section}
                                </div>
								{if $totalPage gt '1'} 
								<div id="exploreWorldLoadMore" class="mb20">
									<div id="load_more_collections">
									<div class="loader"></div>
									<a href="javascript:void(0);" rel="nofollow" data-page="1" class="btn_orance_border show-loader" id="show-more">{$core->get_Lang('LOAD MORE COLLECTIONS')}</a></div>
								</div>                                                  
								{/if}
                            </div>

                       </div>
                    </article>
                </div>
                <aside class="col-md-3 mb30 leftTour">
                    {if $listGuideCat || $listBlogPlace}
                    <div class="destinationLink">
                        <h3 class="h3_18_Bold_007f75 mb10">{$TD}</h3>
                        <ul class="sidebarLeft">
                            {if $listBlogPlace}
                            {if $show eq 'City'}
                             <li><a href="{$clsCity->getLink($city_id,'Blog')}" title="{$core->get_Lang('Blogs')}">{$core->get_Lang('Blogs')}</a></li>
                            {elseif $show eq 'Country'}
                            <li ><a  href="{$clsCountryEx->getLink($country_id,'Blog')}" title="{$core->get_Lang('Blogs')}">{$core->get_Lang('Blogs')}</a></li>
                            {else}
                             <li ><a  href="{$clsRegion->getLink($country_id,$region_id,'Blog')}" title="{$core->get_Lang('Blogs')}">{$core->get_Lang('Blogs')}</a></li>
                            {/if}
                            {/if}
                            {if $show eq 'Region'}
                                {section name=i loop=$listGuideCat}
                                {if $clsGuide->countGuideByRegion($country_id, $region_id, $listGuideCat[i].guidecat_id) gt 0}
                                <li {if $guidecat_id eq $listGuideCat[i].guidecat_id}class="active"{/if}><a href="{$clsGuideCat->getLinkRegion($country_id,$region_id,$listGuideCat[i].guidecat_id)}" title="{$clsGuideCat->getTitle($listGuideCat[i].guidecat_id)}">{$clsGuideCat->getTitle($listGuideCat[i].guidecat_id)}</a></li>
                                {/if}
                                {/section}
                            {else}
                                {section name=i loop=$listGuideCat}
                                {if $clsGuide->countGuideGlobal($country_id, $city_id, $listGuideCat[i].guidecat_id) gt 0}
                                <li {if $guidecat_id eq $listGuideCat[i].guidecat_id}class="active"{/if}><a href="{$clsGuideCat->getLink($country_id,$city_id,$listGuideCat[i].guidecat_id)}" title="{$clsGuideCat->getTitle($listGuideCat[i].guidecat_id)}">{$clsGuideCat->getTitle($listGuideCat[i].guidecat_id)}</a></li>
                                {/if}
                                {/section}
                        	{/if}
                        </ul>
                    </div>
                    {/if}
                </aside>
            </div>
        </div>
        <div id="destinationAZ" class="pd50_0 bg_fff">
            <div class="container">
                <div class="row"> 
					{if $lstRegionByCountry}
					<div class="destinationAZ">
						{if $show eq 'City'}
						<h2 class="pane-title mb20">{$core->get_Lang('A-Z Hotels of Other Destinations')}</h2>
						{else}
						<h2 class="pane-title mb20">{$core->get_Lang('A-Z Hotels of Destinations')} {$TD}</h2>
						{/if}
						<div class="listDestinationByRegion listDestination">
						{section name=i loop=$lstRegionByCountry}
						{assign var = lstCityHotelRegion value = $clsCity->getListCityHotelByRegion($lstRegionByCountry[i].region_id)}
						{if $lstCityHotelRegion}
						<h3 class="title"><a href="{$clsRegion->getLink($country_id,$lstRegionByCountry[i].region_id,'Hotel')}" title="{$lstRegionByCountry[i].title}">{$lstRegionByCountry[i].title}</a></h3>
						<div class="CityRegionItem {if $smarty.section.i.last}cleafix{/if}">
						{section name=j loop=$lstCityHotelRegion}
						<div class="col-md-2 col-sm-4 col-xs-6"><a href="{$clsCity->getLink($lstCityHotelRegion[j].city_id,'Hotel')}">{$clsCity->getTitle($lstCityHotelRegion[j].city_id)}</a></div>
						{/section}
						</div>
						{/if}
						{if $smarty.section.i.last}
						{if $lstCityRegionOther}
						<h3 class="title"><span>{$core->get_Lang('Other City')}</span></h3>
						<div class="CityRegionItem">
							{section name=k loop=$lstCityRegionOther}
							<li class="col-md-2 col-sm-4 col-xs-6"><a href="{$clsCity->getLink($lstCityRegionOther[k].city_id,'Hotel')}">{$clsCity->getTitle($lstCityRegionOther[k].city_id)}</a></li>
							{/section}
						</div>
						{/if}
						{/if}
						{/section}
						</div>
					</div>
					
					{else}
					<div class="destinationAZ">
                        {if $show eq 'City'}
                        <h2 class="pane-title mb20">{$core->get_Lang('A-Z Hotels of Other Destinations')}</h2>
                        {else}
                        <h2 class="pane-title mb20">{$core->get_Lang('A-Z Hotels of Destinations')} {$TD}</h2>
                        {/if}
                        {if $show eq 'Region'}
                        <div class="listDestinationByRegion listDestination">
                        {section name=i loop=$letter}
                        {assign var = lstCityAZ value = $clsISO->getItemByAlphabetCityHotel($country_id,0,$letter[i],$region_id)}
                        {if $lstCityAZ}
						<h3 class="title"><span>{$letter[i]}</span></h3>
                        <div class="CityRegionItem" id="SiteBlogContainer">
                            {section name=j loop=$lstCityAZ}
							{assign var=title_city value=$clsCity->getTitle($lstCityAZ[j].city_id)}
                            <li class="col-md-2 col-sm-4 col-xs-6"><a href="{$clsCity->getLink($lstCityAZ[j].city_id,'Hotel')}" title="{$title_city}">{$title_city}</a></li>
                            {/section}
                        </div>
                        {/if}
                        {/section}
                        </div>
                        {else}
                        <div class="listDestinationByRegion listDestination">
                        {section name=i loop=$letter}
                        {assign var = lstCityAZ value = $clsISO->getItemByAlphabetCityHotel($country_id,$city_id,$letter[i])}
                        {if $lstCityAZ}
						<h3 class="title"><span>{$letter[i]}</span></h3>
                        <div class="CityRegionItem" id="SiteBlogContainer">
                            
                            {section name=j loop=$lstCityAZ}
                                {if $clsHotel->countHotelGlobal($country_id,$lstCityAZ[j].city_id) gt 0}
                                <div class="col-md-2 col-sm-4 col-xs-6"><a href="{$clsCity->getLink($lstCityAZ[j].city_id,'Hotel')}">{$clsCity->getTitle($lstCityAZ[j].city_id)}</a></div>
                                {/if}
                            {/section}
                        </div>
                        {/if}
                        {/section}
                        </div>
                        {/if}
                    </div>
					{/if}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	var totalRecord='{$totalRecord}';
	var $pageLastest = 1;
	var country_id='{$country_id}';
	var show='{$show}';
</script>
{literal}
<script>
$(function(){
	$(document).on('click', "#show-more", function(ev) {
		var $_this = $(this);
		$_this.find('.ajax-loader').show();
		$pageLastest++;
		$.ajax({  
			type:'POST',
			url:path_ajax_script+'/index.php?mod=hotel&act=ajLoadMoreHotel&lang='+LANG_ID, 
			data:{
				"page":$pageLastest,
				"country_id":country_id,
				"show":show,
			},
			dataType:'html',
			success:function(html){
				$_this.find('.ajax-loader').hide();
				$('#listHolderView .row').append( html );
				setwidthLeft();
			}
		});
		setInterval(function(){	
            loadPageFixHotel();	
        },100);	
	});
});
function loadPageFixHotel($number_per_page){
	var $number_show = $('#listHolderView .box:visible').size();
	if($number_show >= totalRecord){
		$('#exploreWorldLoadMore').remove();
	}
}
</script>

{/literal}