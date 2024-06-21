<div class="page_container wapper_content">
	<div class="cruise-banner"> 
		<img class="img100" src="{$clsCruiseCat->getImageBanner($cat_id,1920,400,$oneCat)}" width="1920" height="400" alt="{$title_cat}" />
		<div class="tc_find_trip_tour hidden-xs" style="display:none">
		</div>
		{*{$core->getBlock('find_cruise_home_2019')}
	</div>
	<nav class="breadcrumb-main cruise hidden-xs bg_fff">
        <div class="container">
            <ol class="breadcrumb mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$PCMS_URL}{$extLang}" title="{$core->get_Lang('Home')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
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
			<div class="home_header text-center">
				<h1 class="title_page_cruise mb20">{$title_cat}</h1>
				{if $intro_More}
				<div class="intro_cruise_short">
				{$intro_More}
				</div>
				<a class="seemore seeclick text_center" href="javascript:void(0);" title="{$core->get_Lang('Tìm hiểu thêm')}" style="display: none">{$core->get_Lang('Tìm hiểu thêm')}</a>
               	<a class="seeless seeclick text_center" href="javascript:void(0);" title="{$core->get_Lang('Thu gọn')}" style="display: none">{$core->get_Lang('Thu gọn')}</a>
               
				{/if}
				{literal}
               <script>
				$('.home_header .intro_cruise_short').each(function(){
					var $_this = $(this);
					if($_this.height()>95){
						$_this.css("height","95px");
						$_this.closest(".home_header").find(".seemore").show();
					}else{
						$_this.closest(".home_header").find(".seeless").hide();
					}
				});
               </script>
               <script>
				$('.seemore').on('click',function () {
				   var $this= $(this);
				   $this.closest('.home_header').find('.intro_cruise_short').css('height','100%');
				   $this.closest('.home_header').find('.seeless').show();
				   $this.hide();
				});
				$('.seeless').on('click',function () {
				   var $this= $(this);
				   $this.closest('.home_header').find('.intro_cruise_short').css('height','95px');
				   $this.closest('.home_header').find('.seemore').show();
				   $this.hide();
				});
				</script>
               {/literal}
			</div>
		</div>
	</div><!--end box_cruise_header_page-->
	{if $lstCruiseTopPromotion}
	<section class="box_recommend_cruises">
		<div class="container">
			<div class="home_header text-center">
				<h2 class="title_page_cruise">{$core->get_Lang('Recommended')} {$title_cat}</h2>
			</div>
			<div class="entry_cruise_recomend">
				<div class="row">
					{section name=i loop=$lstCruiseTopPromotion}
					{assign var=cruise_item_id value = $lstCruiseTopPromotion[i].cruise_id}
					{assign var=arrCruise value = $clsCruise->getOne($lstCruiseTopPromotion[i].cruise_id,'cruise_id,title,slug,star_number,about,image')}
					<div class="col-lg-4 col-md-6 col-sm-6 mt30">
						{$core->getBlock('box_item_cruise_list')}
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
	{if $listCruiseOther}
	<section class="box_recommend_cruises other_cruise">
		<div class="container">
			<div class="home_header text-center">
				<h2 class="title_page_cruise">{$core->get_Lang('Others')} {$title_cat}</h2>  
			</div>
			<div class="entry_cruise_recomend">
				<div class="row">
					{section name=i loop=$listCruiseOther}
					{assign var=cruise_item_id value = $listCruiseOther[i].cruise_id}
					{assign var=arrCruise value = $clsCruise->getOne($listCruiseOther[i].cruise_id,'title,slug,star_number,about')}
					<div class="col-lg-4 col-md-6 col-sm-6 mt30">
						{$core->getBlock('box_item_cruise_list')}
					</div>
					{/section}
				</div>
			</div>
			<div class="clearfix"></div>
			{if $TotalPageCruiseOrther gt $currentPageOther}
			<div class="text-center box_btn_click_more mt30">
				<a href="javascript:void(0);" data-page="{$currentPageOther+1}" data-totalpage="{$TotalPageCruiseOrther}" data-cruise_cat_id="{$cat_id}" data-cruise_store="OTHER" class="load_more_cruise_other">	
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