<div class="des_header_description">
    <div class="des_header_bg">{$info_country.title}</div>
    <div class="des_header_intro">
        <h1 class="des_header_title">{$info_country.header_title}</h1>
        <div class="des_header_info">
            {$clsCountry->getHeaderDescription($id_country)}
        </div>
        <a href="#" title="Create your trip to Vietnam" class="des_header_link">
            Create your trip to Vietnam <i class="fa-sharp fa-regular fa-arrow-right"></i>
        </a>
    </div>
</div>
<div class="des_header_background_image">
    <img src="
    {if $url_banner}
        {$clsCountry->getBannerDescription($id_country, 1920, 600)}
    {else}
        https://unikasia.vietiso.com/isocms/templates/default/skin/images/destination/bg_des.png
    {/if}
    " width="1920" height="600" alt="{$info_country.title}">
</div>

{literal}
<style>
    .destination_place_body .bground_header {
        /* background: linear-gradient(rgba(24, 28, 26, 0.4), rgba(24, 28, 26, 0.4)),
            url("https://unikasia.vietiso.com/isocms/templates/default/skin/images/destination/bg_des.png");
        background-repeat: no-repeat;
        background-size: cover; */
        position: relative;
    }

    .des_header_background_image {
        position: absolute;
        top: 0;
        left: 0;
        filter: brightness(65%);
        width: 100%;
        z-index: 1;
    }

    .des_header_background_image img {
        width: 100%;
    }

    .des_header_description {
        display: flex;
        flex-direction: column;
        text-align: center;
        color: #fff;
        padding-top: 20px;
        padding-bottom: 139px;
        position: relative;
        z-index: 2;
        user-select: none;
    }

    .des_header_bg {
        color: rgba(255, 255, 255, 0.15);
        font-family: Inter;
        font-size: 261px;
        font-style: normal;
        font-weight: 900;
        line-height: normal;
        letter-spacing: -2.61px;
        text-transform: uppercase;
    }

    .des_header_intro {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translateX(-50%);
    }

    .des_header_intro h1 {
        color: var(--Neutral-6, #FFF);
        text-align: center;
        font-family: "SF Pro Display";
        font-size: 48px;
        font-style: normal;
        font-weight: 600;
        line-height: 64px;
        text-transform: uppercase;
    }

    .des_header_info {
        color: var(--Neutral-5, #F0F0F0);
        text-align: center;
        font-family: "SF Pro Display";
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: 28px;
        margin-top: 4px;
        margin-bottom: 48px;
    }

    .des_header_link {
        display: inline-flex;
        padding: 12px 20px;
        justify-content: center;
        align-items: center;
        gap: 8px;
        border-radius: 8px;
        background: var(--Primary, #FFA718);
        color: #fff !important;
        transition: ease-in-out all 0.3s;
    }

    .des_header_link:hover {
        background: #E88F00;
    }

    .des_header_link .fa-arrow-right {
        margin-left: 8px;
    }
</style>
{/literal}