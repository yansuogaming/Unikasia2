{assign var=title_guide value=$clsGuideCat->getTitle($guidecat_id)}
<div class="page_container">
    <nav class="breadcrumb-main  breadcrumb-cruise bg-default breadcrumb-more bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="{$PCMS_URL}">
					   <span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="{$curl}" title="{$core->get_Lang('Destinations')}">
					   <span itemprop="name" class="reb">{$core->get_Lang('Destinations')}</span></a>
					<meta itemprop="position" content="2" />
				</li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="{$clsGuideCat->getLink($country_id,$city_id,$guidecat_id)}" title="{$title_guide}">
					   <span itemprop="name" class="reb">{$title_guide}</span></a>
					<meta itemprop="position" content="3" />
				</li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
                  <a itemprop="item" title="{$title_guide}">
                    <span itemprop="name" class="reb">{$clsGuide->getTitle($guide_id)}</span>
                  </a>
				   <meta itemprop="position" content="4" />
               </li>
            </ol>
        </div>
    </nav>
    <div class="container pdt40">
        <div class="row">
            <div class="col-lg-9 mb991_30">
                <article class="guideDetail bg_fff">
					<h1 class="pane-title text-left mb10">{$clsGuide->getTitle($guide_id)}</h1>
					<div class="post_meta mb10">
							{$core->get_Lang('Post on')} : {$clsISO->converTimeToText($clsGuide->getOneField('publish_date',$guide_id))}
							<div class="sharethis-buttons mt0">
						<div class="sharethis-wrapper">
							<div class="addthis_toolbox addthis_default_style" addthis:media="{$DOMAIN_NAME}{$clsGuide->getImage($guide_id,400,300)}" addthis:url="{$DOMAIN_NAME}{$clsGuide->getLink($guide_id)}" addthis:title="{$clsGuide->getTitle($guide_id)}">
								<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
								<a class="addthis_button_tweet"></a>
								<a class="addthis_button_pinterest_pinit"></a>
								<a class="addthis_counter addthis_pill_style"></a>
							</div>
							<script  src="//s7.addthis.com/js/300/addthis_widget.js#pubid=thiembv"></script>
						</div>
					</div>
					</div>
					<div class="intro14_2 mb50">
							<div class="intro15_2 mb10">{$clsGuide->getIntro($guide_id)}</div>
							{$clsGuide->getContent($guide_id)}
					</div>
					<div class="comment_box mtm">
							<div class="fb-comments" data-href="{$PCMS_URL}{$clsGuide->getLink($guide_id)}" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
					</div>
                </article>			
            </div>
            <aside class="col-lg-3">
                {$core->getBlock('right_guide')}
            </aside>
        </div>
        <section class="Relateds-guide mt30 mb30">
            {if $lstRelated[0].guide_id}
            <h2 class="pane-title text-left mb10">{$core->get_Lang('See more')}</h2>                 
            <div class="jcarousel-box owl-carousel" id="jcarousel-guide-Relateds"> 
                    {section name=i loop=$lstRelated}
                    {assign var=link value=$clsGuide->getLink($lstRelated[i].guide_id)} 
                    {assign var=title value=$clsGuide->getTitle($lstRelated[i].guide_id)}
                    <div class="h_traveltip_item_fisrt">
                        <a class="h_image" href="{$link}" title="{$title}">
                            <img class="full-width height-auto" src="{$clsGuide->getImage($lstRelated[i].guide_id,462,308)}" alt="{$title}" />
                        </a>
                        <div class="desc pd10">
                          <div class="name"><a href="{$link}" target="_blank">{$title}</a></div>
                        </div>
                    </div>
                 {/section}   
            </div>                
            {/if}
		</section>
    </div>
</div>
{literal}
<script >
$(function(){
    if($('#jcarousel-guide-Relateds').length > 0){
        var $owl = $('#jcarousel-guide-Relateds');
        $owl.owlCarousel({
            loop:true,
            margin:25,
            responsiveClass:true,
            autoplay:true,
            responsive:{
                0:{
                items:1,
                nav:false
                },
                500:{
                items:2,
                nav:false
                },
                900:{
                items:3,
                nav:false
                },
                1200:{
                items:4,
                nav:false
                }
            }
            });
            $('#next_1').click(function(){
            $('#jcarousel-tours-slides .owl-next').trigger('click');
            });
            $('#prev_1').click(function(){
            $('#jcarousel-tours-slides .owl-prev').trigger('click');
        });
    }
});
</script>
{/literal}


