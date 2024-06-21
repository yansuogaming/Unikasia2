<main id="main" class="page_container bg_fff">
    {$core->getBlock('slider_home')}
    {if $listWhyHome}
    <section class="section_box why {if $deviceType eq 'phone'}mt50{/if} bg_fff">
        <div class="container">
		   <div class="owl-carousel slideWhy" id="whyWithUs">
				{section name=i loop=$listWhyHome}
				{assign var=title value=$clsWhy->getTitle($listWhyHome[i].why_id,$listWhyHome[i])}
				<div class=" item__why box_col"> 
					<div class="item__why--icon">
						<img src="{$URL_IMAGES}/pixel.png" data-src="{$clsWhy->getIcon($listWhyHome[i].why_id,$listWhyHome[i])}" alt="{$title}" width="80" height="80" class="owl-lazy img100">
					</div>
					<div class="item__why--artice">
						<h2 class="title size20 mb10">{$title}</h2>
						<div class="intro limit_2line">
							{$clsWhy->getIntro($listWhyHome[i].why_id,$listWhyHome[i])}
						</div>
					</div>
				</div>
				{/section}
			</div>
        </div>
    </section>
    {/if}
    {if $listAdsHome}
	<section class="qc__box home_box">
		<div class="container">
			<div class="qc__box--slider owl_carousel_1_item owl-carousel">
				{section name=i loop=$listAdsHome}
                {assign var=title value=$clsAds->getTitle($listAdsHome[i].ads_id)}
                {assign var=link_ads value=$clsAds->getLink($listAdsHome[i].ads_id)}
                {if $deviceType eq 'phone'}
                    {assign var=image_ads value=$clsAds->getImage($listAdsHome[i].ads_id,480,320)}
                    {else}
                    {assign var=image_ads value=$clsAds->getImage($listAdsHome[i].ads_id,1280,292)}
                {/if}
                <div class="qc__box--item">
                    <a {if $link_ads} href="{$link_ads}" {else}role="link"{/if} title="{$title}">
						{if $deviceType eq 'phone'}
							<img data-src="{$image_ads}" alt="{$title}" width="480" height="320" class="owl-lazy img100">
						{else}
							<img data-src="{$image_ads}" alt="{$title}" width="1280" height="292" class="owl-lazy img100">
						{/if}
                    </a>
                </div>
				{/section}
			</div>
		</div>
	</section>
	{/if}
	{$core->getBlock('Lbox_toptourHomePage')}
	{$core->getBlock('Lbox_cattourHomePage')}
    {$core->getBlock('Lbox_countrydestination')}
    
    {$core->getBlock('testimonialsHome')}
    {$core->getBlock('Lbox_blogHomePage')}
    <section class="section_box tour_for_ask">
        <div class="container-fuild bgc-F5F5F5">
		   <div class="container">
				<div class="row">
				<div class="col-xl-12">
					<div class="box_tour">
						<div class="box-left">
							<h3 class="title_tour_for_ask">{$core->get_Lang('Self-sufficient travel')}, {$core->get_Lang('Book')} {$PAGE_NAME}</h3>
							<p class="text_tour_for_ask">{$core->get_Lang('Millions of people have chosen isoCMS to travel in their own way. How about you')}?</p>
							<a href="{$clsISO->getLink('tailor')}" title="{$core->get_Lang('Tailor made tour')}" class="link_tour_for_ask">{$core->get_Lang('Tailor made tour')}</a>
						</div>
						<div class="box-right">
							<img width="653" height="335" src="{$URL_IMAGES}/img_isocms/banner_tour_for_ask.png" alt="{$core->get_Lang('Self-sufficient travel')}, {$core->get_Lang('Book')} {$PAGE_NAME}" class="img_banner_tour img100">
						</div>
					</div>
				</div>
			   </div>
		   </div>
        </div>
    </section>
    {$core->getBlock('partnerpro')}
    {$core->getBlock('Press_news')}
    {$core->getBlock('subscribeHomepro')}
</main>
