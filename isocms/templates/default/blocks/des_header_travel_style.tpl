<div class="trvs_header">
    <h1 class="trvs_header_title">{$clsCategory_Country->getBannerTitle($trvs_id)}</h1>
    <div class="trvs_header_description">
        {$clsCategory_Country->getBannerDescription($trvs_id)}
    </div>
    <a href="{$clsTour->getLink2(0, 1)}" title="Create your trip" class="trvs_header_link">
        Create your trip <i class="fa-sharp fa-regular fa-arrow-right" aria-hidden="true"></i>
    </a>
</div>
<div class="trvs_header_background_image">
    <img src="
    {if $url_banner}
        {$clsCategory_Country->getBannerImage2($trvs_id, 1920, 600)}
    {else}
        https://unikasia.vietiso.com/isocms/templates/default/skin/images/destination/bg_trvs.png
    {/if}
    " width="1924" height="792" alt="Travel Style">
</div>
{literal}
<style>
    /* .destination_travel_style_body .bground_header {
        background: linear-gradient(rgba(24, 28, 26, 0.4), rgba(24, 28, 26, 0.4)),
            url("https://unikasia.vietiso.com/isocms/templates/default/skin/images/destination/bg_trvs.png");
        background-repeat: no-repeat;
        background-size: cover;
    } */

    .trvs_header_background_image {
        position: absolute;
        top: 0;
        left: 0;
        filter: brightness(65%);
        width: 100%;
        /* z-index: 1; */
    }

    .trvs_header_title p {
        color: var(--Neutral-6, #FFF);
        text-align: center;
        font-family: Reey;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: 52px;
    }

    .trvs_header_title {
        color: var(--Neutral-6, #FFF);
        text-align: center;
        font-family: Reey;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: 52px;
    }

    .trvs_header_description {
        color: var(--Neutral-5, #F0F0F0);
        text-align: center;
        font-family: "SF Pro Display";
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: 28px;
        margin-top: 22px;
        margin-bottom: 40px;
    }

    .trvs_header_description p {
        margin-bottom: 0;
    }

    .trvs_header_link {
        display: table;
        margin: 0 auto;
        padding: 12px 20px;
        justify-content: center;
        align-items: center;
        gap: 8px;
        border-radius: 8px;
        background: var(--Primary, #FFA718);
        color: #fff !important;
        transition: ease-in-out all 0.3s;
    }

    .trvs_header_link:hover {
        background: #E88F00;
    }

    .trvs_header_link .fa-arrow-right {
        margin-left: 8px;
    }

    .trvs_header {
        padding-top: 162px;
        padding-bottom: 240px;
        position: relative;
        z-index: 1;
    }

    .des_page_container {
        margin-top: unset;
    }
</style>
{/literal}