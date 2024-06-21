{assign var= title_cruise value= $clsCruise->getTitle($cruise_id,$oneTable)}
{assign var= link_cruise value= $clsCruise->getLink($cruise_id,$oneTable)}

{if $clsISO->getCheckActiveModulePackage($package_id,'member','default','default')}
	{assign var= ratingValue value= $clsReviews->getRateAvg($cruise_id,'cruise')}
	{assign var= bestRating value= $clsReviews->getBestRate($cruise_id,'cruise')}
	{assign var= ratingCount value= $clsReviews->getToTalReview($cruise_id,'cruise')}
	{else}
	{assign var= ratingValue value= $clsReviews->getRateAvgNoLogin($cruise_id,'cruise')}
	{assign var= bestRating value= $clsReviews->getBestRate($cruise_id,'cruise')}
	{assign var= ratingCount value= $clsReviews->getToTalReviewNoLogin($cruise_id,'cruise')}
{/if}

{assign var=getAbout value=$clsCruise->getAbout($cruise_id,$oneTable)}
{assign var=itemCruiseCat value=$clsCruiseCat->getOne($cruise_cat_id,'title,slug')}
{assign var=title_cat value=$itemCruiseCat.title}
{assign var=link_cat value=$clsCruiseCat->getLink($cruise_cat_id,$itemCruiseCat)}
{assign var=CruiseFacilities value=$clsCruise->getCruiseFa($cruise_id,CruiseFacilities,$oneTable)}
{assign var=CruiseServices value=$clsCruise->getCruiseFa($cruise_id,CruiseServices,$oneTable)}
{assign var=CruiseFaActivities value=$clsCruise->getCruiseFa($cruise_id,CruiseFaActivities,$oneTable)}
{assign var=Inclusion value=$clsCruise->getInclusion($cruise_id,$oneTable)}
{assign var=Exclusion value=$clsCruise->getExclusion($cruise_id,$oneTable)}
{assign var=CruisePolicy value=$clsCruise->getCruisePolicy($cruise_id,$oneTable)}
{assign var=BookingPolicy value=$clsCruise->getCruiseBookingPolicy($cruise_id,$oneTable)}
{assign var=getCruiseChildPolicy value=$clsCruise->getCruiseChildPolicy($cruise_id,$oneTable)} 

{if $show eq 'Itinerary'}
	{assign var=table_map_id value=$cruise_itinerary_id}
	{assign var=checkPriceCruise value=$clsCruiseItinerary->getLTripPriceItinerary($cruise_itinerary_id,$now_month,'Value')}
	{assign var=address value=$clsCruiseItinerary->getAllCityAround($cruise_itinerary_id)}
{else}
	{assign var=table_map_id value=$cruise_id}
	{assign var=checkPriceCruise value=$clsCruise->getLTripPrice($cruise_id,$now_month,'Value')}
	{assign var=address value=$core->get_Lang('Departure Port')|cat:': '|cat:$clsCruise->getDeparturePort($cruise_id,$oneTable)}
{/if}
<div class="sticky_nav_tour_detail hidden1024" style="display:none">
	<nav class="navbar">
		<div class="container">
			<ul class="nav navbar-nav navbar-left menu_book_enquire">
				<li class="book_now_tour">
					<a id="book_cruise" class="book_now_tour" href="javascript:void(0);" title="{$core->get_Lang('Book Now')}">
						{$core->get_Lang('Book Now')}<span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav menu_sticky_tour {if $listCustomField}{else}full{/if}">
				{if $lstItineraryCruise}
				<li class="itinerary">
				<a href="#Crusie_detail_itinerary"  data-artt_id="#Crusie_detail_itinerary" class="go-to" title="{$core->get_Lang('Detailed itinerary')}"><span class="icon"></span> {$core->get_Lang('Detailed itinerary')}</a></li>
				{/if}
				{if $CruiseFacilities or $CruiseServices or $CruiseFaActivities}
				<li class="service">
				<a href="#Cruise_facilities_service" data-artt_id="#Cruise_facilities_service" class="go-to" title="{$core->get_Lang('Facilities &amp; Service')}"><span class="icon"></span> {$core->get_Lang('Facilities &amp; Service')}</a></li>
				{/if}
				{if $Inclusion or $Exclusion or $CruisePolicy or $BookingPolicy}
				<li class="note">
				<a href="#Cruise_include_option" data-artt_id="#Cruise_include_option" class="go-to" title="{$core->get_Lang('Notes &amp; Policy')}"><span class="icon"></span> {$core->get_Lang('Notes &amp; Policy')}</a></li> 
				{/if}
				{if $listCustomField}
				<li class="useful">
				<a href="#useful_infomation" data-artt_id="#useful_infomation" class="go-to" title="{$core->get_Lang('Useful Information')}"><span class="icon"></span> {$core->get_Lang('Useful Information')}</a></li>
				{/if}
				
				{if $lstReview}
				<li class="tes">
				<a href="#Box_list_reviews"  data-artt_id="#Box_list_reviews" class="go-to" title="{$core->get_Lang('Testimonials')}"><span class="icon"></span> {$core->get_Lang('Testimonials')}</a></li> 
				{/if}
				<li class="enquire">
					<a class="enquire_tour" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#formEnquireModal" title="{$core->get_Lang('Enquire')}"><span class="icon"></span> 
						{$core->get_Lang('Enquire Now')}
					</a>
				</li>
				<li class="hotline">
					<a class="enquire_tour" href="tel:+{$clsConfiguration->getValue('CompanyHotline')}" title="tel:+{$clsConfiguration->getValue('CompanyHotline')}"><span class="icon"></span> 
						{$clsConfiguration->getValue('CompanyHotline')}
					</a>
				</li>
			</ul> 
		</div>
	</nav>	
</div>  
<div class="page_container bg_fff">
	<nav class="breadcrumb-main breadcrumb_page bg_f6f8f9 mb0 hidden-xs">
        <div class="container">
			<ol class="breadcrumb mt0 bg_f6f8f9" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$PCMS_URL}">
						<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$link_cat}" title="{$title_cat}">
						<span itemprop="name" class="reb">{$title_cat}</span>
					</a>
					<meta itemprop="position" content="2" />
				</li>
				{if $show eq 'Itinerary'}
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a itemprop="item" href="javascript:void(0);" title="{$clsCruiseItinerary->getTitleDay($cruise_itinerary_id)}">
						<span itemprop="name" class="reb">{$clsCruiseItinerary->getTitleDay($cruise_itinerary_id)}</span>  
					</a>
					<meta itemprop="position" content="3" />
				</li>
				{else}
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a itemprop="item" href="javascript:void(0);" title="{$title_cruise}">
						<span itemprop="name" class="reb">{$title_cruise}</span>  
					</a>
					<meta itemprop="position" content="3" />
				</li>
				{/if}
			</ol>
		</div>
	</nav><!--end breadcrumb-main-->
	<div id="content" class="pageCruiseDetail entry_crusie_detail">
		<div class="container">
			<article class="info_header clearfix">
				<div class="infor_all pull-left">
					{if $show eq 'Itinerary'}
					<h1>{$clsCruiseItinerary->getTitleDay($cruise_itinerary_id)} {$clsCruise->getStarNew($cruise_id,$oneTable)}</h1>
					{else}
					<h1>{$title_cruise} {$clsCruise->getStarNew($cruise_id,$oneTable)}</h1>
					{/if}
				</div><!--end info_all-->
			</article><!--end info_header-->
			<section class="box_gallery mt20">  
				<div class="cruiseImage">
					<div class="row">
						<div class="col-lg-8">
							<div class="cruise-slider">
								{assign var=getFlagText value=$clsPromotion->getFlagText($promotion_id)}
								{if $getFlagText ne ''}
								<div class="owl-tag">
									{$getFlagText}
									<div class="owl-triangular"></div>
								</div>
								{/if}
								<div class="owl-carousel photo-slider">
									<div class="img_item">
										<img class="img100" alt="{$title_cruise}" src="{$clsCruise->getImage($cruise_id,850,569,$oneTable)}"/>
									</div>
									{section name=i loop=$lstImage}
									<div class="img_item">
										<img class="img100" alt="{$clsCruiseImage->getTitle($lstImage[i].cruise_image_id)}" src="{$clsCruiseImage->getImage($lstImage[i].cruise_image_id,850,569)}"/>
									</div>
									{/section}
								</div>
								{section name=v loop=$lstVideoCruise}
								<a class="venobox_video" data-gall="gall-video" data-autoplay="false" data-vbtype="video" href="{$clsCruiseVideo->getLinkVideo($lstVideoCruise[v].cruise_video_id)}">{if $smarty.section.v.first}<i class="fa fa-video-camera" aria-hidden="true"></i>{$core->get_Lang('Click to watch the video')}{/if}</a>
								{/section}
							</div>
						</div>
						{if $lstImage}
						<div class="col-lg-4">
							<ul class="pull-left margin-left-5 photo-details hidden-xs hidden991">
								{section name=i loop=$lstImage max=2}
								<li> <img class="btn-img img100" data-pos="{$smarty.section.i.iteration}" alt="{$clsCruiseImage->getTitle($lstImage[i].cruise_image_id)}" src="{$clsCruiseImage->getImage($lstImage[i].cruise_image_id,375,250)}"> </li>
								{/section}
							</ul>
						</div>
						{/if}
					</div>
					{if $lstImage}
					<div class="photoSeeAll">
						{section name=i loop=$lstImage}
						<a class="photo venobox" data-gall="myGallery" href="{$clsCruiseImage->getImage($lstImage[i].cruise_image_id,750,500)}" title="{$clsCruiseImage->getTitle($lstImage[i].cruise_image_id)}">{if $smarty.section.i.first}<i class="fa fa-camera" aria-hidden="true"></i> {$core->get_Lang('See all')} {$lstImage|@count}  {$core->get_Lang('Photos')}{/if}</a>
						{/section}
					</div>
					{/if}
					{literal}
					<script>
					$(document).ready(function(){
						var owl = $('.cruise-slider .owl-carousel');
						owl.on('changed.owl.carousel', function(e) {
						var pos = e.relatedTarget.normalize(e.item.index, true);
						$('.photo-details li').removeClass('active');
							if(pos > 0) {
								$('.photo-details li').each(function( index ) {
									if(pos - 1 == index) {
									$(this).addClass('active');
									}
								});
							}
						});
						$('.photo-details .btn-img').click(function(){
							var position = $(this).attr('data-pos');
							owl.trigger('to.owl.carousel', position);
							$('.photo-details li').removeClass('active');
							$(this).parent().addClass('active');
						})
					});
					</script> 
					{/literal}
					{literal}
					<script>
					$(function(){
						$('.venobox').venobox({
						framewidth: '750px',    
						border: '5px',       
						bgcolor: '#fff', 
						numeratio: true,       
						infinigall: true    
						});
						$('.venobox_video').venobox({    
						border: '5px',       
						bgcolor: '#fff', 
						numeratio: true,       
						infinigall: true    
						});
					});
					</script>
					{/literal}
				</div>
				{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'itinerary','default')}
				<div class="clearfix"></div>
				<div class="row-search mt20">
					{$core->getBlock('find_cruise')}
				</div>
				{/if}
			</section><!--end box_gallery-->	
			{if $getAbout}
			<section class="cruise_detail_box about_cruise">
				<h2 class="title_cruise_box_detail">{$core->get_Lang('Cruise Introduct')}</h2>
				<div class="intro_about">
					{$getAbout}
				</div>
			</section>
			{/if}
			<section class="cruise_detail_box cabin_box special_packages_cabin" id="blockCheckRate">
			</section>
			{if $lstItineraryCruise}
			<section id="Crusie_detail_itinerary" class="cruise_itinerary cruise_detail_box">
				<h2 class="title_cruise_box_detail">{$core->get_Lang('Full Itinerary')}</h2>
				<div class="wapper_itinerary">
					{section name=i loop=$lstItineraryCruise}
					{assign var= _cruise_itinerary_id value= $lstItineraryCruise[i].cruise_itinerary_id}
					{assign var=lstDayItinerary value = $clsCruiseItineraryDay->getAll("is_trash=0 and cruise_itinerary_id='$_cruise_itinerary_id' order by day ASC")}
					
					{if $lstDayItinerary}
					<div class="item-itinerary mt30"> 
						{assign var=number_day value=$lstItineraryCruise[i].number_day}
						{assign var=des_itinerary value=$clsCruiseDestination->getDesIti($cruise_id,$_cruise_itinerary_id)}
						{if $number_day gt '1'}
						<h3>{$title_cruise} {$lstItineraryCruise[i].number_day} {$core->get_Lang('days')}</h3>
							{if $des_itinerary}
								<p class="destination_cruise_iti"><i class="fa fa-map-marker c2a color_main size16"></i> {$core->get_Lang('Destination')}: {$des_itinerary}</i></p>
							{/if}
						{else}
						<h3>{$title_cruise} {$lstItineraryCruise[i].number_day} {$core->get_Lang('day')}</h3>
							{if $des_itinerary}
								<p class="destination_cruise_iti"><i class="fa fa-map-marker c2a color_main size16"></i> {$core->get_Lang('Destination')}: {$des_itinerary}</i></p>
							{/if}
						{/if}
						{assign var=Highlight value=$clsCruiseItinerary->getHighlight($_cruise_itinerary_id)}
						{if $Highlight}
						<h4 class="size15 slideToggle">{$core->get_Lang('Highlight')}</h4>
						<div class="it-body">
							{$Highlight}
						</div>
						{/if}
						{section name=k loop=$number_day}
						{assign var=lst_transport_id value=$clsCruiseItineraryDay->getOneField("transport",$lstDayItinerary[k].cruise_itinerary_day_id)}
						{assign var=lstItineraryTransport value=$clsTransport->getAll("is_trash=0 and is_online=1 and transport_id in ($lst_transport_id) order by order_no ASC")}
						<h4 class="size15 slideToggle">
						{$clsCruiseItineraryDay->getDay($lstDayItinerary[k].cruise_itinerary_day_id)}: {$clsCruiseItineraryDay->getTitle($lstDayItinerary[k].cruise_itinerary_day_id)}
						</h4>
						<div class="it-body">
							{if $clsCruiseItineraryDay->checkShowImage($lstDayItinerary[k].cruise_itinerary_day_id)}
							<div class="row">
								<div class="col-md-5 col-sm-6 mb15_767">
								<img class="img100" src="{$clsCruiseItineraryDay->getImage($lstDayItinerary[k].cruise_itinerary_day_id,696,464)}" alt="{$clsCruiseItineraryDay->getTitle($lstDayItinerary[k].cruise_itinerary_day_id)}" />
								</div>
								<div class="col-md-7 col-sm-6">
									{$clsCruiseItineraryDay->getContent($lstDayItinerary[k].cruise_itinerary_day_id)} 
								</div>
							</div>
							{else}
							{$clsCruiseItineraryDay->getContent($lstDayItinerary[k].cruise_itinerary_day_id)} 
							{/if}
						</div>
						{/section}
					</div>	
					{/if}
					{/section}
				</div>
			</section>	
			{/if}
			{if $listThingAbout}
			<section class="cruise_detail_box thing_most_about parent_cruise_box mt60">
				<h2 class="title_cruise_box_detail">{$core->get_Lang('We make differences')}</h2>
				<div class="thingAbout">
					<ul class="listThingAbout">
						{section name=i loop=$listThingAbout}
						<li class="thingAboutItem">{$clsCruiseProperty->getTitle($listThingAbout[i].cruise_property_id)}</li>
						{/section}
					</ul>
				</div>
			</section><!--end most_about -->
			{/if}
			{assign var=important_note value=$clsCruise->getImprotantNote($cruise_id,$oneTable)}
			{if $important_note }
			<div class="clearfix"></div>
			<section class="cruise_detail_box important_note parent_cruise_box mt60">
				<h2 class="title_cruise_box_detail">{$core->get_Lang('Important notes')}</h2>
				<div class="size16 intro_cruise">
					{$clsISO->limit_textIso($important_note,65)}
					{if $important_note|count_words gt 65}
						<a class="more_intro_c" href="javascript:void(0);" title="{$core->get_Lang('Read More')}">{$core->get_Lang('Read More')}</a>
					{/if}
				</div>
				<div class="size15 intro_cruise_full" style="display:none;">
					{$important_note}
					<a class="less_intro_c" href="javascript:void(0);" title="{$core->get_Lang('Read More')}">{$core->get_Lang('Less')}</a>
				</div>
			</section><!--end important_note-->
			{/if}
			<div class="clearfix"></div>
			{if $CruiseFacilities  or $CruiseServices or $CruiseFaActivities}
			<section id="Cruise_facilities_service" class="cruise_detail_box cruise_facilities_service"> 
				<h2 class="title_cruise_box_detail">{$core->get_Lang('Facilities &amp; Service')}</h2>
				<div class="entry_cruise_fs_body">
					{if $CruiseFacilities}
					<div class="form-group mb20">
						<div class="cruise_fs_header">
							<h3><span class="icon_cd_new icon_faci"></span> {$core->get_Lang('General of Facilities')}</h3>
						</div>
						<div class="cruise_fs_body facilities">
							{$CruiseFacilities} 
						</div>
					</div>
					{/if}
					{if $CruiseServices}
					<div class="form-group mb20">
						<div class="cruise_fs_header">
							<h3><span class="icon_cd_new icon_addon"></span> {$core->get_Lang('AddOn Service')}</h3>
						</div>
						<div class="cruise_fs_body facilities">
							{$CruiseServices} 
						</div>
					</div>
					{/if}
					{if $CruiseFaActivities}
					<div class="form-group mb20">
						<div class="cruise_fs_header">
							<h3><span class="icon_cd_new icon_activity"></span> {$core->get_Lang('Activities on Board')}</h3>
						</div>
						<div class="cruise_fs_body facilities">
							{$CruiseFaActivities} 
						</div>
					</div>
					{/if}
				</div><!--end entry_cruise_fs_body--> 
			</section><!--end cruise_facilities_service--> 
			{/if}

			{if $Inclusion or $Exclusion or $CruisePolicy or $BookingPolicy or $getCruiseChildPolicy}
			<section id="Cruise_include_option" class="cruise_detail_box cruise_include_option mt60">
				<h2 class="title_cruise_box_detail">{$core->get_Lang('Cruise Inclusions &amp; Options')}</h2>
				<div class="entry_cruise_fs_body">
					{if $Inclusion}
					<div class="form-group mb20">
						<div class="cruise_fs_header">
							<h3><span class="icon_cd icon_inclusion"></span> {$core->get_Lang('Inclusions')}</h3>
						</div>
						<div class="cruise_fs_body inclusion">
							{$Inclusion} 
						</div>
					</div>
					{/if}
					{if $Exclusion}
					<div class="form-group mb20">
						<div class="cruise_fs_header">
							<h3><span class="icon_cd icon_exclusions"></span> {$core->get_Lang('Exclusions')}</h3>
						</div>
						<div class="cruise_fs_body">
							{$Exclusion} 
						</div>
					</div>
					{/if}
					{if $CruisePolicy}
					<div class="form-group mb20">
						<div class="cruise_fs_header">
							<h3><span class="icon_cd icon_policy"></span> {$core->get_Lang('Booking Cruise Policy')}</h3>
						</div>
						<div class="cruise_fs_body">
							{$CruisePolicy} 
						</div>
					</div>
					{/if}
					{if $BookingPolicy}
					<div class="form-group mb20">
						<div class="cruise_fs_header">
							<h3><span class="icon_cd_new icon_policy2"></span> {$core->get_Lang('Booking Policy')}</h3>
						</div>
						<div class="cruise_fs_body">
							{$BookingPolicy} 
						</div>
					</div>
					{/if}
					{if $getCruiseChildPolicy}
					<div class="form-group">
						<div class="cruise_fs_header">
							<h3><span class="icon_cd icon_policy"></span> {$core->get_Lang('Child Policy')}</h3>
						</div>
						<div class="cruise_fs_body">
							{$getCruiseChildPolicy} 
						</div>
					</div>
					{/if}
				</div><!--end entry_cruise_fs_body--> 
			</section><!--end cruise_include_option-->	
			{/if}
			{if $listCustomField}
			<section id="useful_infomation" class="useful_infomation cruise_detail_box mt50">
				<h2 class="title_cruise_box_detail">{$core->get_Lang('Useful Information')}</h2>
				<div class="entry_cruise_fs_body mt10"> 
					{section name=i loop=$listCustomField}
					<div class="form-group">
						<div class="cruise_fs_header mb20">
							<h3><span class="icon_cd icon_custom"></span>{$listCustomField[i].fieldname}</h3>
						</div>
						<div class="cruise_fs_body">
							{$listCustomField[i].fieldvalue|html_entity_decode}
						</div>
					</div>
					{/section}
				</div>
			</section>
			{/if}
			{if $clsISO->getCheckActiveModulePackage($package_id,'reviews','default','default','cruise')}
			<div id="Box_list_reviews" class="review_cruise_box cruise_detail_box mt50">
				<h2 class="title_cruise_box_detail">{$core->get_Lang('Customer reviews')} ({$ratingCount}) 
					{if $clsISO->getCheckActiveModulePackage($package_id,'member','default','default') && $ratingCount}
					<a href="javascript:void(0);" class="btn-showReivew">{$core->get_Lang('Show review')}</a>

					{literal}
					<script>
					$(document).on("click",".btn-showReivew",function(){
						if(!$(this).hasClass('btn-hideReivew')){
							$(this).addClass('btn-hideReivew').text("{/literal}{$core->get_Lang('Hide review')}{literal}");
						}else{
							$(this).removeClass('btn-hideReivew').text("{/literal}{$core->get_Lang('Show review')}{literal}");	
						}
						$(".list_cd_reviews_hide").toggle();	
					});
					</script>
					{/literal}
					{/if}
				</h2>
				{if $lstReview}
				<div class="cd-review hidden992 mt30">
					<div class="review-score">
						<span class="num_reviews">{$ratingValue}</span>
						<div class="txt_reviews">
							<p class="txt">{$clsReviews->getTextRateAvg($cruise_id)}</p>
							<p class="base_on">
								{$core->get_Lang('Based on')}  {$ratingCount} {$core->get_Lang('reviews')} 
							</p>
						</div>
					</div>
					{section name=i loop=$lstReview max=1}
					<div class="reviews-text">
						<div class="content">
							"{$clsReviews->getContent($lstReview[i].reviews_id,400,true,$lstReview[i])|strip_tags|truncate:95}
						</div>
						<p class="name">
							---- {$clsReviews->getFullName($lstReview[i].reviews_id,$lstReview[i])}
							{$clsReviews->getCountry($lstReview[i].reviews_id,$lstReview[i])}
						</p>
					</div> 
					{/section}
				</div><!--end cd-review-->
				{else}
				<div class="clearfix mb30"></div>
				{/if}
				<article class="entry_cruise_reviews_content">
					<div class="cd_review_top clearfix mb20">
						<div class="cd_box_rate_num">
							<span class="rate-number">{$ratingValue}</span>
							<p class="txt">{$clsReviews->getTextRateAvg($cruise_id)}</p>
							<p class="base_on">{$core->get_Lang('Based on')} <b>{$ratingCount}</b> {$core->get_Lang('reviews')}</p>
						</div>
						<div class="cd_box_rvtr">
							<div class="travel-score_cruise clearfix">
								<div class="row">
									<div class="col-md-6">
										<h3>{$core->get_Lang('Score breakdown')}</h3>
										<div class="row mb15 mt15 relative_767">
											<div class="col-md-3 col-sm-3 col-xs-8">
												{$core->get_Lang('Cruise quality')}
											</div>
											<div class="col-md-8 col-sm-8 col-xs-12"> 
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="9.3" aria-valuemin="0" aria-valuemax="100" style="width: {$clsReviewsCruise->getValueByField($cruise_id,'cruise_quality')}%"></div>
												</div>
											</div>
											<div class="col-md-1 col-sm-1 col-xs-4 absolute_767 text-right_767">
												{$clsReviewsCruise->getValueByField($cruise_id,'cruise_quality')/10}
											</div>
										</div>
										<div class="row mb15 relative_767">
											<div class="col-md-3 col-sm-3 col-xs-8">
												{$core->get_Lang('Food/Drink')}
											</div>
											<div class="col-md-8 col-sm-8 col-xs-12"> 
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="9.3" aria-valuemin="0" aria-valuemax="100" style="width: {$clsReviewsCruise->getValueByField($cruise_id,'food_drink')}%"></div>
												</div>
											</div>
											<div class="col-md-1 col-sm-1 col-xs-4 absolute_767 text-right_767">
												{$clsReviewsCruise->getValueByField($cruise_id,'food_drink')/10}
											</div>
										</div>
										<div class="row mb15 relative_767">
											<div class="col-md-3 col-sm-3 col-xs-8">
												{$core->get_Lang('Cabin quality')}
											</div>
											<div class="col-md-8 col-sm-8 col-xs-12"> 
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="9.3" aria-valuemin="0" aria-valuemax="100" style="width: {$clsReviewsCruise->getValueByField($cruise_id,'cabin_quality')}%"></div>
												</div>
											</div>
											<div class="col-md-1 col-sm-1 col-xs-4 absolute_767 text-right_767">
												{$clsReviewsCruise->getValueByField($cruise_id,'cabin_quality')/10}
											</div>
										</div>
										<div class="row mb15 relative_767">
											<div class="col-md-3 col-sm-3 col-xs-8">
												{$core->get_Lang('Staff quality')}
											</div>
											<div class="col-md-8 col-sm-8 col-xs-12"> 
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="9.3" aria-valuemin="0" aria-valuemax="100" style="width: {$clsReviewsCruise->getValueByField($cruise_id,'staff_quality')}%"></div>
												</div>
											</div>
											<div class="col-md-1 col-sm-1 col-xs-4 absolute_767 text-right_767">
												{$clsReviewsCruise->getValueByField($cruise_id,'staff_quality')/10}
											</div>
										</div>
										<div class="row mb15 relative_767">
											<div class="col-md-3 col-sm-3 col-xs-8">
												{$core->get_Lang('Entertainment')}
											</div>
											<div class="col-md-8 col-sm-8 col-xs-12"> 
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="9.3" aria-valuemin="0" aria-valuemax="100" style="width: {$clsReviewsCruise->getValueByField($cruise_id,'entertainment')}%"></div>
												</div>
											</div>
											<div class="col-md-1 col-sm-1 col-xs-4 absolute_767 text-right_767">
												{$clsReviewsCruise->getValueByField($cruise_id,'entertainment')/10} 
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<h3>{$core->get_Lang('Traveler rating')}</h3> 
										<div class="box_text_score">
											<div class="row">
												<div class="col-md-9 col-xs-9">{$core->get_Lang('Excellent')}</div>
												<div class="col-md-3 col-xs-3 text-right">{$clsReviews->getTotalReviewByRate(5,$cruise_id,'cruise')}</div>
											</div>
										</div>
										<div class="box_text_score">
											<div class="row">
												<div class="col-md-9 col-xs-9">{$core->get_Lang('Very good')}</div>
												<div class="col-md-3 col-xs-3 text-right">{$clsReviews->getTotalReviewByRate(4,$cruise_id,'cruise')}</div>
											</div>
										</div>
										<div class="box_text_score">
											<div class="row">
												<div class="col-md-9 col-xs-9">{$core->get_Lang('Good')}</div>
												<div class="col-md-3 col-xs-3 text-right">{$clsReviews->getTotalReviewByRate(3,$cruise_id,'cruise')}</div>
											</div>
										</div>
										<div class="box_text_score">
											<div class="row">
												<div class="col-md-9 col-xs-9">{$core->get_Lang('Average')}</div>
												<div class="col-md-3 col-xs-3 text-right">{$clsReviews->getTotalReviewByRate(2,$cruise_id,'cruise')}</div>
											</div>
										</div>
										<div class="box_text_score">
											<div class="row">
												<div class="col-md-9 col-xs-9">{$core->get_Lang('Poor')}</div>
												<div class="col-md-3 col-xs-3 text-right">{$clsReviews->getTotalReviewByRate(1,$cruise_id,'cruise')}</div>
											</div>
										</div>
									</div>
								</div>
								<p class="text-itatic mb0 pl15">{$core->get_Lang('Comments are provided by customers who have previously taken this cruise trip')}</p>
							</div><!--end travel-score_cruise-->
						</div><!--end cd_box_rvtr-->
					</div><!--end cd_review_top-->
					
					<a class="btn_write_review btn_write_review_login fr" href="javascript:void(0);" title="{$core->get_Lang('Write a review')}">{$core->get_Lang('Write a review')}</a>
					<div class="clearfix mb20"></div>
					{if $clsISO->getCheckActiveModulePackage($package_id,'member','default','default')}
						{$core->getBlock('review_Star')}
						<div class="cleafix mb20"></div>
						<div class="list_cd_reviews list_cd_reviews_hide review-list" style="display:none;">
						{section name=i loop=$lstReview}
						{assign var=reviews_content value=$clsReviews->getContent($lstReview[i].reviews_id,400,true,$lstReview[i])}
						<li id="Reviews{$lstReview[i].reviews_id}" class="box item boder_bottom" {if $smarty.section.i.iteration gt '5'} style="display:none"{/if}>
							<div class="member">
								<div class="image"><img alt="{$clsProfile->getFullname($lstReview[i].profile_id)}" src="{$clsProfile->getImageAvatar($lstReview[i].profile_id,53,53)}" width="53px" height="53px" />
								</div>
								<div class="name">{$clsProfile->getFullname($lstReview[i].profile_id)}</div>
							</div>
							<div class="body">
								<p class="inline-block full-width">
								<span class="rate inline-block fl full-width_450"><label class="rate-1 text_left">{$clsReviews->getRatesStar($lstReview[i].reviews_id,$lstReview[i])}</label> &nbsp;<span class="btn_rate color_999">{$clsReviews->getNewRates($lstReview[i].reviews_id,$lstReview[i])}</span></span>
								<time class="inline-block fr color_999 full-width_450" datetime="{$clsISO->formatDateSecond($lstReview[i].reg_date)}" title="{$clsISO->formatDateSecond($lstReview[i].reg_date)}">{$core->get_Lang('Written on')} {$clsISO->formatDateMText($lstReview[i].reg_date)}</time>
								</p>
								<div class="cus-desc">
									<div class="review-content">				
									 {$clsReviews->getContent($lstReview[i].reviews_id,400,true,$lstReview[i])|html_entity_decode}
									</div>	
									<ul class="review_image">
									{$clsImage->getListImage($lstReview[i].reviews_id,'_REVIEW')}
									</ul>	                     
								</div>
							</div>
						</li>
						{/section}  
						<div class="box_load_reviews"></div>
						{if $totalPage >$currentPage}
							<div class="text-center box_btn_click_more mt30">
								<a href="javascript:void(0);" page="{$currentPage+1}" totalPage="{$totalPage}" type_review="Hotel" table_id="{$cruise_id}" class="load_more_cruise_reviews">
									{$core->get_Lang('Load More Reviews')} 
								</a>
							</div>
							<div class="text-center pre_loader">
								<div class="preloader-item">
									<div class="preloader">
										<div class="preloader__line_5"></div>
									</div>
								</div> 
							</div>
						{/if}
					</div>
					{else}
						{$core->getBlock('review_Star_No_Login')}
					{/if}
				</article><!--end entry_cruise_reviews_content-->	
			</div><!--end review_cruise_box-->
			<div class="clearfix mt20"></div>
			{/if}
			{$core->getBlock('relateCruise')}
			<div class="clearfix"></div>
			{$core->getBlock('viewed_cruises')} 
		</div>
	</div><!--end entry_crusie_detail-->
	<div class="clearfix mb30"></div>
</div><!--wapper_content-->
<script>
	var $cruise_id = '{$cruise_id}'
</script>
{literal}
<script>
function generic_social_share(url){
	window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
	return true;
}
</script>
{/literal}
{literal}
<script>
$(document).ready(function(){
	$('.venobox').venobox(); 
	$('.venobox_video').venobox(); 

	$(document).on('click', '.more_intro_c,.less_intro_c',function(ev){
		$_this = $(this);
		$_parent = $_this.closest('.parent_cruise_box');
		$_type = 'more';
		if($_this.hasClass('less_intro_c')){
			$_type = 'less';
		}
		if($_type == 'more'){
			$_parent.find('.intro_cruise_short').hide();
			$_parent.find('.intro_cruise_full').show();
		}else{
			$_parent.find('.intro_cruise_full').hide();  
			$_parent.find('.intro_cruise_short').show();
		}
		ev.stopImmediatePropagation();
		return false;
	});
	$(document).on('click', '.cruise_fs_header',function(ev){
		$_this = $(this);
		$_this.next().slideToggle(300);
		ev.stopImmediatePropagation();
		return false;
	});
	$('#book_cruise').click(function() {
		$('html, body').animate({
			scrollTop: $('.search_box_cruise_detail').offset().top - 10
			}, 1200, function(){
		 });
	});
}); 
</script> 
{/literal}
<script>
	var map_la = '{$map_la}';
	var map_lo = '{$map_lo}';
	var cruise_id = '{$cruise_id}';
	var cruise_itinerary_id = '{$cruise_itinerary_id}';
</script>

{literal}
<script>
$().ready(function(){
	$('.click_show_map').click(function(){
		var $_this = $(this);
		if(!$_this.hasClass('clicked')){
			$_this.addClass('clicked');
			var table_map_id = $_this.attr('table_map_id');
			var type_show_map = $_this.attr('type_show_map');
			$.post('/index.php?mod=cruise&act=map',{'table_map_id':table_map_id,'type_show_map':type_show_map}, function(html){
				$_this.removeClass('clicked');
				makepopup('90%','90%',html,'OpenMap_'+table_map_id);
				initialize('map_canvas_'+table_map_id,9);
			});
		}
		return false;
	});
});
function initialize($_container, $zoom){
	var map = new google.maps.Map(document.getElementById($_container), {
		zoom:$zoom,
		scrollwheel: false,
		center: new google.maps.LatLng(map_la,map_lo),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	var infowindow = new google.maps.InfoWindow();
	var marker, i, _array = new Array();
	var maker_icon = new google.maps.MarkerImage('/isocms/templates/default/skin/images/google_map/gIcon'+(i+1)+'.png', new google.maps.Size(32,32));
	for(i = 0; i < locations.length; i++) {
		_array[i] = new google.maps.LatLng(locations[i][1],locations[i][2]);
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1],locations[i][2]),
			map: map,
			icon: '/isocms/templates/default/skin/images/google_map/gIcon'+(i+1)+'.png'
		});
		google.maps.event.addListener(marker,"click",(function(marker, i){
			return function() {
			  infowindow.setContent(locations[i][0]);
			  infowindow.open(map, marker);
			}
		})(marker, i));
	}
	var flightPath = new google.maps.Polyline({
		path: _array,
		geodesic: true,
		strokeColor: '#fF6000',
		strokeOpacity: 0.8,
		strokeWeight: 4
	});
	flightPath.setMap(map);
}
</script>
{/literal}
{assign var=num_day_price value=$clsCruiseItinerary->getOneField('number_day',$cruise_id)}
{assign var=priceDay value=$clsCruise->getTripPriceDay($cruise_id,$now_month,$num_day_price,$oneTable)}
{assign var=price value=$clsCruise->getLTripPrice($cruise_id,$now_month,$num_day_price)|strip_tags}
{literal}
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Product",
		"aggregateRating": {
			"@type": "AggregateRating",
			"ratingValue": "{/literal}{$ratingValue}{literal}",
			"bestRating": "{/literal}{$bestRating}{literal}",
			"reviewCount": "{/literal}{$ratingCount}{literal}"
		},
		"description": "{/literal}{$getAbout|strip_tags}{literal}",
		"name": "{/literal}{$title_cruise}{literal}",
		"image": "{/literal}{$DOMAIN_NAME}{$clsCruise->getImage($cruise_id,700,500,$oneTable)}{literal}",
		"offers": {
			"@type": "Offer",
			"priceCurrency": "{/literal}{$clsProperty->getTitle($clsConfiguration->getValue('Currency'))}{literal}",
			"price": "{/literal}{if $priceDay gt '0' and $price gt '0'}{$price}{elseif $priceDay gt '0' and $price eq '0'}{$priceDay}{elseif $priceDay eq '0' and $price gt '0'}{$price}{/if}{literal}",
			"itemCondition": "new"
		},
		"review": {/literal}{$jsonReview}{literal}
	}
	
</script>
{/literal}
<script src="{$URL_JS}/jquerycruise.js?v={$upd_version}"></script>