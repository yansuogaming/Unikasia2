<div class="page_container wapper_content page_cruise_cat">
	<div class="cruise-banner"> 
		{if $deviceType == 'computer'}
			<img class="img100" src="{$clsCruiseCat->getImageBanner($cat_id,1920,400,$oneCat)}" width="1920" height="400" alt="{$title_cat}" />
		{else}
			<img class="img100" src="{$clsCruiseCat->getImageBanner($cat_id,480,320,$oneCat)}" width="480" height="320" alt="{$title_cat}" />
		{/if}
	</div>
	<nav class="breadcrumb-main cruise hidden-xs">
        <div class="container">
            <ol class="breadcrumb mt0" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$PCMS_URL}{$extLang}" title="{$core->get_Lang('Home')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$curl}" title="{$core->get_Lang('Other product')}"> 
						<span itemprop="name" class="reb">{$core->get_Lang('Other product')}</span> 
					</a> 
					<meta itemprop="position" content="2" />
				</li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$curl}" title="{$title_cat}"> 
						<span itemprop="name" class="reb">{$title_cat}</span> 
					</a> 
					<meta itemprop="position" content="3" />
				</li>
            </ol> 
        </div>
    </nav><!--end breadcrumb-main --> 
	<div class="box_cruise_header_page">
		<div class="container">
			<div class="box_top_cruise_cat text-center">
				<h1 class="title_page_cruise">{$title_cat}</h1>
				{if $intro_More}
				<div class="intro_cruise_short">
					{$intro_More}
				</div>          
				{/if}
			</div>			
			<div class="box_filter_cruise">
				<label for="" class="lbl_filter">{$core->get_Lang('Filter')}:</label>
				<form action="" method="post" id="form_filter_cruise">
					<input type="hidden" value="filter_cruise" name="filter_cruise">
					<div class="box_form">
						<div class="form_input">
							<select class="slb" name="place">
								<option value="">{$core->get_Lang('Start from')}</option>
								{$clsCruiseItinerary->getSelectTripAround($place)}
							</select>
							<i class="fa fa-angle-down" aria-hidden="true"></i>
						</div>
						<div class="form_input">
							<select class="slb" name="star_number">
								<option value="">{$core->get_Lang('Star rating')}</option>
								{$clsISO->makeSelectNumberStart(5,$star_number)}
							</select>
							<i class="fa fa-angle-down" aria-hidden="true"></i>
						</div> 
						<div class="form_input">
							<select class="find_select" name="price_range_ID" id="price_range_ID"> 
								<option value="">{$core->get_Lang('Price')}</option>
								{$clsCruisePriceRange->getSelectPriceRange($price_range_ID)}
							</select>
							<i class="fa fa-angle-down" aria-hidden="true"></i>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div><!--end box_cruise_header_page-->
	<section class="section_list_cruise">
		<div class="container">
			<div class="list_cruise">
				
			</div>
		</div>
	</section>
	{if $listCruise}
	<section class="box_recommend_cruises">
		<div class="container">
			<div class="entry_cruise_recomend">
				<div class="row">
					{section name=i loop=$listCruise}
					{assign var=cruise_item_id value = $listCruise[i].cruise_id}
					{assign var=arrCruise value = $listCruise[i]}
					<div class="col-lg-4 col-md-6 col-sm-6 mt30">
						{$clsISO->getBlock('box_item_cruise',["cruise_item_id"=>$cruise_item_id,"arrCruise"=>$arrCruise])}
					</div>	
					{/section}
				</div>
			</div>
			<div class="clearfix"></div>
			{if $TotalPageCruisePromotion gt $currentPagePromo}
			<div class="text-center box_btn_click_more mt30">
				<a href="javascript:void(0);" data-page="{$currentPagePromo+1}" data-cruise_store="RECOMMED" data-cruise_cat_id="{$cat_id}" data-totalpage="{$TotalPageCruisePromotion}" class="load_more_cruise_promo">	
					{$core->get_Lang('Load More')} 
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
	</section><!--end box_recommend_cruises-->
	{/if}
	{$core->getBlock('testimonialsNew')}
</div>
{literal}
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "{/literal}{$title_cat}{literal}",
  "url": "{/literal}{$link_cat}{literal}",
  "description": "{/literal}{$global_description_page|strip_tags}{literal}",
 "image": "{/literal}{$DOMAIN_NAME}{$clsCruiseCat->getImage($cat_id,225,150,$oneCat)}{literal}",
  "aggregateRating": {
    "@type": "AggregateRating",
	"ratingValue": "{/literal}{if $clsReviews->getRateAvg($cat_id,$mod) gt 0}{$clsReviews->getRateAvg($cat_id,$mod)}{else}5{/if}{literal}",
    "bestRating": "{/literal}{if $clsReviews->getBestRate($cat_id,$mod) gt 0}{$clsReviews->getBestRate($cat_id,$mod)}{else}5{/if}{literal}",
    "ratingCount": "{/literal}{if $clsReviews->getToTalReview($cat_id,$mod) gt 0}{$clsReviews->getToTalReview($cat_id,$mod)}{else}1{/if}{literal}"
  }
}
</script>
{/literal}
{literal} 
<script>
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
<script src="{$URL_JS}/jquerycruise.js?v={$upd_version}"></script>