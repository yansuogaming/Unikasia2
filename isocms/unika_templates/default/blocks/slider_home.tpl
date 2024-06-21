{if $clsConfiguration->getValue('Video_Teaser_Home') and $clsConfiguration->getValue('video_teaser_page') ne ''}
<section id="slider" class="relative section_box">
    <div id="video-teaser" class="video-teaser video-container">
        <div class="filter"></div>
        <video autoplay muted loop class="fillWidth"><source src="{$clsConfiguration->getValue('video_teaser_page')}" type="video/mp4">
            {$core->get_Lang('Your browser does not support the video tag. I suggest you upgrade your browser.')}
        </video>
    </div>
</section>
{else}
    {if $listSlide}
    <section id="slider" class="relative section_box">
        <div class="slider__home owl-carousel">
            {section name=i loop=$listSlide}
                {assign var = slide_title value = $clsSlide->getTitle($listSlide[i].slide_id,$listSlide[i])}
                {assign var = slide_text value = $clsSlide->getIntro($listSlide[i].slide_id,$listSlide[i])}
                {if $clsISO->getBrowser() eq 'phone'}
                    <div class="item__slider">
                        <a role="link" href="{$clsSlide->getUrl($listSlide[i].slide_id,$listSlide[i])}" title="{$slide_title}">
                            <img data-src="{$clsSlide->getImage($listSlide[i].slide_id,480,320,$listSlide[i])}" alt="{$slide_title}" width="480" height="320" class="img100 owl-lazy">
                        </a>
                    </div>
                {else}
                    <div class="item_slider {$clsISO->getBrowser()}">
                        <div class="slide_image">
                            <img data-src="{$clsSlide->getImage($listSlide[i].slide_id,1920,791,$listSlide[i])}" alt="{$slide_title}" width="1600" height="460" class="img100 owl-lazy">
                        </div>
                        <div class="slide_text">
                            <div class="container">
                                <p class="text_1">Leader in the concept of “ tailor-made “ travel</p>
                                <p class="text_2">Who knows Asia better than us? We are his children, we live there!</p>
                                <a class="slide_cta_link" title="" href="/">
                                    Suivez nous 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
  <path d="M15.75 7.72559L0.75 7.72559" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                </a>
                            </div>
                        </div>
                    </div>
                {/if}
            {/section}
        </div>
        {if 1==2}
		{if $mod eq 'ticket_air'}
		<div class="box_search_home {$deviceType}">
		{$core->getBlock('find_ticket_air')}
		</div>
		{else}
        <div class="box_search_home {$deviceType}">
            {$core->getBlock('find_trip_details')}
        </div>
		{/if}
		{/if}
    </section>
    {/if}
{/if}
