<main id="main" class="page_container ">
    {$core->getBlock('slider_homepro')}
    {if $listWhyHome}
    <section class="section_box why">
        <div class="container">
           <div class="owl-carousel slideWhy" id="whyWithUs">
                {section name=i loop=$listWhyHome}
                {assign var=title value=$listWhyHome[i].title}
                <div class=" item__why box_col">
                    <div class="item__why--icon">
                        <img src="{$URL_IMAGES}/pixel.png" data-src="{$clsWhy->getIcon($listWhyHome[i].why_id,$listWhyHome[i])}" width="55" height="55" alt="{$listWhyHome[i].title}" class="owl-lazy img100">
                    </div>
                    <div class="item__why--artice">
                        <p class="title size20 mb10">{$listWhyHome[i].title}</p>
                        <div class="intro limit_2line">
                            {$listWhyHome[i].intro|html_entity_decode|strip_tags}
                        </div>
                    </div>
                </div>
                {/section}
            </div>
        </div>
    </section>
    {/if}
	{if $package_id==1}
	{$core->getBlock('Lbox_topTourpro')}
	{else}
 	{$core->getBlock('Lbox_topTourprofessional')}
    {$core->getBlock('Lbox_TopDestination')}
    {$core->getBlock('Lbox_Tour_Inbound')}
    {$core->getBlock('Lbox_Tour_Outbound')}
    {$core->getBlock('box_services_other')}
	{/if}
    {$core->getBlock('testimonialsHomepro')}
    {$core->getBlock('Lbox_blogHomePagepro')}
    <section class="section_box tour_for_ask">
        <div class="container-fuild bgc-F5F5F5">
		   <div class="container">
				<div class="row">
				<div class="col-xl-12">
					<div class="box_tour">
						<div class="box-left">
							<h3 class="title_tour_for_ask">{$core->get_Lang('Self-sufficient travel')}, {$core->get_Lang(' Book isoCMS')}</h3>
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
   {*<iframe src="https://www.tripadvisor.com/WidgetEmbed-cdspropertydetail?locationId=8009540&amp;partnerId=D6282B2F6A53462795614F9FCD066B22&amp;display=true" width="100%" style="height: 85em" frameborder="0"></iframe>*}
</main>
