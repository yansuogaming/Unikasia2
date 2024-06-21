<div class="txt_blogvn">
    <div class="container">
		{if !$country_id}
		 <h1 class="txt_h1 text-uppercase">{$clsConfiguration->getValue('header_blogalltitle')|@html_entity_decode}</h1>
		<div class="text_pp">{$clsConfiguration->getValue('header_blogall_description')|@html_entity_decode}</div>
		{else}
        <h1 class="txt_h1 text-uppercase">{$clsCountryEx->getBlogTitle($country_id)}</h1>
		<div class="text_pp">{$clsCountryEx->getBlogDescription($country_id)|@html_entity_decode}</div>
		{/if}
		
		
    </div>
</div>

<div class="des_header_background_image">
    {if !$country_id}
        <img src="{$clsConfiguration->getImage('site_blog_banner', 1920, 600)}" width="1920" height="600" alt="{$clsCountryEx->getBlogTitle($country_id)}">
    {else}
        <img src="{$clsCountryEx->getBlogImage($country_id, 1920, 600)}" width="1920" height="600" alt="{$clsCountryEx->getBlogTitle($country_id)}">
    {/if}
</div>

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