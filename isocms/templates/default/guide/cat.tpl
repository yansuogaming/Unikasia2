<section class="page_container trvg_page_container">
	{$core->getBlock('des_nav_breadcrumb')}
	{$core->getBlock('des_tailor_made_travel')}
	<div class="des_tailor_detail_travel_guide">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-9">
					<div class="des_travel_guide_list">
						{if $trvg_intro}
						<div class="des_tailor_detail_travel_guide_description">
							{$trvg_intro}
						</div>
						{/if}
						<div class="row">
							{if $listGuide}
							{foreach from=$listGuide key=key item=item}
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

					{if $arr_recent_view}
					<div class="des_travel_guide_recent_view">
						<div class="des_travel_guide_recent_view_title">
							<h2>{$core->get_Lang('Recently viewed')}</h2>
						</div>
						<div class="des_travel_guide_recent_view_content">
							<div class="owl-carousel owl-theme trvg_list_guidecat_carousel">
								{foreach from=$arr_recent_view key=key item=item}
								{assign var="guideID" value=$item}
								<div class="item des_travel_guide_item" data-merge="1">
									<div class="des_travel_guide_image">
										<img src="{$clsGuide->getImage($guideID, 292, 219)}" alt="{$clsGuide->getTitle($guideID)}" width="292" height="219">
										<a href="{$clsGuide->getLink2($guideID)}" class="des_travel_guide_link" title="{$clsGuide->getTitle($guideID)}">
											SEE DETAILS <i class="fa-sharp fa-regular fa-arrow-right" aria-hidden="true"></i>
										</a>
									</div>
									<div class="des_travel_guide_intro">
										<div class="des_travel_guide_title">
											<h3><a href="{$clsGuide->getLink2($guideID)}" title="{$clsGuide->getTitle($guideID)}">{$clsGuide->getTitle($guideID)}</a></h3>
										</div>
										<div class="des_travel_guide_place">
											<i class="fa-sharp fa-light fa-location-dot"></i> {$clsGuide->getPlaceGuide($guideID)}
										</div>
										<div class="des_travel_guide_description">
											{$clsGuide->getIntro($guideID)}
										</div>
									</div>
								</div>
								{/foreach}
							</div>
						</div>
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

{literal}
<script>
	if ($('.trvg_list_guidecat_carousel').length > 0) {
		var $owl = $('.trvg_list_guidecat_carousel');
		$owl.owlCarousel({
			lazyLoad: true,
			loop: false,
			margin: 37,
			nav: false,
			navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
			dots: false,
			// autoplay: false,
			// autoplayTimeout:3000,	
			// animateOut: 'fadeOut',
			// animateIn: 'fadeIn',
			merge: true,
			autoHeight: true,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1.3,
					nav: false,
				},
				600: {
					items: 3
				},
				1000: {
					items: 3
				}
			}
		});
	}
</script>
{/literal}