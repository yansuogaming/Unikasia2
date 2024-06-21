<div class="wapper_content">
	<div class="cruise-banner"> 
		<img width="100%" src="{$clsConfiguration->getImage(site_cruise_banner,1600,416)}" alt="{$core->get_Lang('Halong Bay Cruises')}">
		<div class="tc_find_trip_tour hidden-xs">
			{$core->getBlock('find_a_cruise')}
		</div>
	</div>
	<div class="box_cruise_header_page">
		<div class="container">
			<div class="home_header text-center">
				<img alt="icon_circle" src="{$URL_IMAGES}/new_origin/circle_green_small.png" width="44px" height="44px"/>
				<h1 class="title_page_cruise">{$core->get_Lang('Halong Bay Cruises')}</h1>
				{assign var=site_cruise_intro value=site_cruise_intro_|cat:$_LANG_ID}
				{assign var=intro_page value=$clsConfiguration->getValue($site_cruise_intro)|html_entity_decode}
				<div class="intro_box intro_cruise_short">
					{$clsISO->limit_textIso($intro_page,100)}
					{if $intro_page|count_words gt 100}
						<a class="more_intro_c" href="javascript:void(0);" title="{$core->get_Lang('Read More')}">{$core->get_Lang('Read More')}</a>
					{/if}
				</div>
				<div class="intro_box intro_cruise_full" style="display:none;">
					{$intro_page}
					<a class="less_intro_c" href="javascript:void(0);" title="{$core->get_Lang('Read More')}">{$core->get_Lang('Less')}</a>
				</div>
			</div>
		</div>
	</div>
	<div class="box_cruise_best_ha_long">
		<div class="container">
			<div class="home_header text-center">
				<img alt="icon_circle" src="{$URL_IMAGES}/new_origin/circle_green_small.png" width="44px" height="44px"/>
				<h3 class="title_page_cruise">{$core->get_Lang('Best Halong Bay Cruises Deals')}</h3>
				<div class="intro_box">
					{assign var=site_best_halong_deal_intro value=site_best_halong_deal_intro_|cat:$_LANG_ID}
                    {$clsConfiguration->getValue($site_best_halong_deal_intro)|html_entity_decode}
				</div>
			</div>
			<div class="entry_cruise_best mt30">
				<div class="owl-carousel owl-theme owl_slide_cruise_best">
					{section name=i loop=$lstCruiseTopBest}
					{assign var=_cruise_id value=$lstCruiseTopBest[i].target_id}
					{assign var=_cruise_itinerary_id value=$lstCruiseTopBest[i].cruise_itinerary_id}
					{assign var=_title value=$clsCruiseItinerary->getTitleDay($_cruise_itinerary_id)}
					{assign var=_link value=$clsCruiseItinerary->getLinkPromotion($_cruise_itinerary_id)}
					<div class="it_cruise_best">
						<div class="it_entry_thumb_cb">
							<a href="{$_link}" title="{$_title}">
								<img alt="{$_title}" src="{$clsCruise->getImage($_cruise_id,380,250)}" width="100%" height="auto" />
							</a>
							<div class="entry_box_title clearfix">
								<h3><a href="{$_link}" title="{$_title}">{$_title}</a></h3>
							</div>
                            {if $lstCruiseTopBest[i].price_text}
                                <div class="owl-tag">{$lstCruiseTopBest[i].price_text}
                                    <div class="owl-triangular"></div>
                                </div>
                            {/if}
							{*<div class="entry_logo_best">
								<p>{$core->get_Lang('Best')}</p>
								<p>{$core->get_Lang('Deals')}</p>
							</div>*}
						</div>
						<div class="it_entry_cruise_body">
							<div class="it_entry_header clearfix">
								<div class="num_day pull-left">
									<p class="number">
										{$clsCruiseItinerary->getOneField('number_day',$_cruise_itinerary_id)}
									</p>
									<span class="day">{$core->get_Lang('Days')}</span>
								</div>
								<div class="city_around pull-left">
									{$clsCruise->getAllCityAround($_cruise_id)}
								</div>
							</div>
							<div class="it_entry_meta mt10">
								<label class="rate-circle">
									{$clsReviews->getStarNew($_cruise_id,'cruise')} 
								</label>
								<span class="rate_avg">
									{$clsReviews->getRateAVG($_cruise_id,'cruise')}	
								</span>
								<span class="text_review">
									{$clsReviews->getTextRateAVG($_cruise_id,'cruise')} 
								</span>
								{assign var=getToTalReview value = $clsReviews->getToTalReview($_cruise_id,'cruise')}
								{if $getToTalReview gt 0}
								{$getToTalReview} {$core->get_Lang('reviews')}
								{/if}
							</div>
							<div class="it_entry_intro">
								{$clsCruise->getAbout($_cruise_id)|strip_tags|truncate:90}
							</div>
							<div class="it_entry_price_view clearfix mt10">
								<div class="see_detail pull-left">
									<a class="color_333" href="{$_link}" title="{$core->get_Lang('See Detail')}"> 
										{$core->get_Lang('See Detail')}	
									</a>
								</div>	
								<div class="price__box pull-right">
									{$clsCruiseItinerary->getLTripPriceItinerary($_cruise_itinerary_id,$now_month)}
								</div>
							</div>
						</div>
					</div>
					{/section}
				</div>
			</div>
		</div>
	</div>
	<div class="box_cruise_category">
		<div class="container">
			<div class="home_header text-center">
				<img alt="icon_circle" src="{$URL_IMAGES}/new_origin/circle_green_small.png" width="44px" height="44px"/>
				<h3 class="title_page_cruise">{$core->get_Lang("Overnight Cruise Halong Signature's")}</h3>
			</div> 
			<div class="entry_category_tour_body mt30">
				{section name=i loop=$lstCruiseCat}
				{assign var = _cruiseCat_id value = $lstCruiseCat[i].cruise_cat_id}
				{assign var = _title value = $lstCruiseCat[i].title} 
				{assign var = _link value = $clsCruiseCat->getLink($_cruiseCat_id,$lstCruiseCat[i])}
					{if $smarty.section.i.index eq 0 || $smarty.section.i.index eq 5}
						<div class="col-md-8 col-sm-8">
							<div class="row">
								<div class="it_cate_tour ">
									<a href="{$_link}" title="{$_title}">
										<img  class="img-responsive full-width" alt="{$_title}" src="{$clsCruiseCat->getImageBanner($_cruiseCat_id,760,385,$lstCruiseCat[i])}" width="100%" height="auto"/>	
									</a>
									<div class="box_background_title bottom">
										<h3><a href="{$_link}" title="{$_title}">{$_title}</a></h3>
									</div>
								</div>
							</div>	
						</div>	
					{else}
						{if $smarty.section.i.index eq 1 || $smarty.section.i.index eq 3}
						<div class="col-md-4 col-sm-4 small_tour">
							<div class="row">
						{/if}
						<div class="it_cate_tour ">
							<a href="{$_link}" title="{$_title}">
								<img class="img-responsive hidden768" alt="{$_title}" src="{$clsCruiseCat->getImageBanner($_cruiseCat_id,380,193,$lstCruiseCat[i])}" width="100%" height="auto"/>	
								<img style="display:none" class="img-responsive block768" alt="{$_title}" src="{$clsCruiseCat->getImageBanner($_cruiseCat_id,720,366,$lstCruiseCat[i])}" width="100%" height="auto"/>	
							</a>
							<div class="box_background_title top">
								<h3><a href="{$_link}" title="{$_title}">{$_title}</a></h3>
							</div>
						</div>
						{if $smarty.section.i.index eq 2 || $smarty.section.i.index eq 4 || $smarty.section.i.last}
							</div>
						</div>
						{/if}
					{/if}
				{/section}
				<div class="clearfix"></div>
				<div class="box_load_tour_cat"></div>
				<div class="clearfix"></div> 
				{if $TotalPageTourCat gt $currentPage}
					<div class="text-center mt30">
						<a href="javascript:void(0);" page="{$currentPage+1}" totalPage="{$TotalPageTourCat}" class="load_more_tour_cat">	
							{$core->get_Lang('Load More Tours')} 
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
		</div>
	</div>
	{if $lstCruiseTopPromotion}
	<div class="box_recommend_cruises">
		<div class="container">
			<div class="home_header text-center">
				<img alt="icon_circle" src="{$URL_IMAGES}/new_origin/circle_green_small.png" width="44px" height="44px"/>
				<h3 class="title_page_cruise">{$core->get_Lang('Recommended Cruise Halong Bay')}</h3>
				<div class="intro_box">
					{assign var=site_recommended_cruise_intro value=site_recommended_cruise_intro_|cat:$_LANG_ID}
                    {$clsConfiguration->getValue($site_recommended_cruise_intro)|html_entity_decode}
				</div>
			</div>
			<div class="entry_cruise_recomend">
				{section name=i loop=$lstCruiseTopPromotion}
				{assign var=_cruise_id value = $lstCruiseTopPromotion[i].cruise_id}
				{assign var=oneCruise value = $clsCruise->getOne($_cruise_id,'slug,title,image')}
				{assign var=_link value = $clsCruise->getLink($_cruise_id,'',$oneCruise)}
				{assign var=_title value = $oneCruise.title}
					<div class="it_related_tour col-md-4 col-sm-6 mt30">
						<div class="it__entry_thumb">
							<a href="{$_link}" title="{$_title}">
								<img class="img-responsive" alt="{$_title}" src="{$clsCruise->getImage($_cruise_id,380,250,$oneCruise)}" width="100%" height="auto"/>	
							</a>
						</div>
						<div class="it__entry_body">
							<h3 class="title"><a href="{$_link}" title="{$_title}">{$_title}</a></h3>
							<div class="price__box">
								{$clsCruise->getLTripPrice($_cruise_id,$now_month,'list')}
							</div>
							<p>
								<label class="rate-circle">
									{$clsReviews->getStarNew($_cruise_id,'cruise')} 
								</label>
								{assign var=getToTalReview value = $clsReviews->getToTalReview($_cruise_id,'cruise')}
								{if $getToTalReview gt 0}
								{$getToTalReview} {$core->get_Lang('reviews')}
								{/if}
							</p>
							{assign var=cityAround value=$clsCruise->getAllCityAround($_cruise_id)}
							{if $cityAround ne ''}
								<p class="city_des">
									<span class="icon_entry_map"></span>
									<span class="color_666">{$core->get_Lang('Cruise line')}: {$cityAround}</span>	
								</p>
							{/if}
						</div>
					</div>
				{/section}
				<div class="clearfix"></div>
				<div class="box_load_cruise_halong"></div>
				<div class="clearfix"></div> 
				{if $TotalPageCruisePromotion gt $currentPage}
					<div class="text-center box_btn_click_more mt30">
						<a href="javascript:void(0);" page="{$currentPage+1}" totalPage="{$TotalPageCruisePromotion}" cruise_store="RECOMMED" class="load_more_cruise_promo">	
							{$core->get_Lang('Load More')}   
						</a>
					</div>
					<div class="pre_loader">
						<div class="preloader-item">
							<div class="preloader">
								<div class="preloader__line_5"></div>
							</div>
						</div>  
					</div>
				{/if}
			</div>
		</div>
	</div>
	{/if}
	{$core->getBlock('origin_place_to_go_HaLong')}  
	{$core->getBlock('testimonialsHome')}
	{$core->getBlock('Lbox_blogHaLong')} 
</div>
{literal} 
<script type="text/javascript">
	$(document).on('click', '.more_intro_c,.less_intro_c',function(ev){
		$_this = $(this);
		$_parent = $_this.closest('.home_header');
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
</script> 
{/literal} 