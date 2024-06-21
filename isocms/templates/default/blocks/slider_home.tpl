<div id="wrapper">
    {if $clsConfiguration->getValue('video_teaser_page')}
    <div id="video-teaser" class="video-teaser video-container">
        <div class="filter"></div>
        <video autoplay="" loop="" muted="" class="fillWidth">
            <source src="{$clsConfiguration->getValue('video_teaser_page')}" type="video/mp4">
            Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
    </div>
    {else}
    <div id="slider-area" class="owl-carousel">
            {section name=i loop=$listSlide}
                <div class="slider-area-child">
                    <img src="{$clsSlide->getImage($listSlide[i].slide_id, 1920, 791)}" alt="{$listSlide[i].slug}" onerror="this.src='{$URL_IMAGES}/none_image.png'">
                    <div class="overlay"></div>
                    <div class="txt_header_center">
                        <h2 class="txt_h2">{$listSlide[i].title}</h2>
                        <div class="text_pp">{$listSlide[i].text|html_entity_decode}</div>
                        <div class="btn_follows text-center">
                            <a href="{$listSlide[i].link}" class="btn btn-follows btn-hover-home"
                               target="_blank">{$listSlide[i].btn_slide}<i class="fa fa-long-arrow-right"
                                                                           style="color: #ffffff; margin-left: 8px;"></i></a>
                        </div>
                    </div>
                </div>
            {/section}
    </div>
    {/if}
</div>