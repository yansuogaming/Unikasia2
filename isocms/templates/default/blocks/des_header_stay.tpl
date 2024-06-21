<div class="des_header_background_image">
    {if !$country_id}
        <img src="{$clsConfiguration->getImage('site_blog_banner', 1920, 600)}" width="1920" height="600" alt="{$clsCountryEx->getBlogTitle($country_id)}">
    {else}
        <img src="{$clsCountryEx->getBlogImage($country_id, 1920, 600)}" width="1920" height="600" alt="{$clsCountryEx->getBlogTitle($country_id)}">
    {/if}
</div>

<!--
    <div class="banner">
        <div class="banner_img_hotel">
        {if $show eq 'City'}
            <img src="{$clsCity->getImageBannerHotel($city_id,1920,600,$oneItem)}" class="img100"
                alt="{$core->get_Lang('Hotels in')} {$TD}" />
        {else}
            {if !isset($clsCountryEx->getImageBannerHotel($country_id,1920,500,$oneItem)) || !$clsCountryEx->getImageBannerHotel($country_id,1920,500,$oneItem)}
                <img src="{$URL_IMAGES}/hotel/no-image.png" alt="error" class="img100" />
            {else}
                <img src="{$clsCountryEx->getImageBannerHotel($country_id,1920,600)}" class="img100"
                    alt="{$core->get_Lang('Hotels in')} {$TD}" />
            {/if}

        {/if}
        </div>
        {$core->getBlock('box_form_search_hotel')}
    </div>
-->

<style>
	
	.des_header_background_image{
		width: 100%;
		position: absolute;
		top: 0;
		left: 0;
		background-size: cover;
        background-position: center;
	}
	
	    .bground_header {
/*        background-image: url("https://unikasia.vietiso.com/isocms/templates/default/skin/images/blog/bground_blog.png");*/
        
        height: 600px;
        /* padding: 0px 0 30px 0; */
        position: relative;
    }

    .des_header_background_image:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(24, 28, 26, 0.48) 0%, rgba(24, 28, 26, 0.00) 100%);
    }
	    .txt_blogvn {
        position: absolute;
        left: 0;
        right: 0;
        top: 305px;
        z-index: 2;
        transform: translate(0%, -56%);
    }

    .txt_h1 {
        color: #FFF;
/*        text-align: center;*/
        font-size: 48px;
        font-style: normal;
        font-weight: 600;
        line-height: 64px; /* 133.333% */
        /*    margin-top: 127px;*/
    }
	
</style>