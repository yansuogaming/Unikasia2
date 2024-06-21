<div class="trvg_header">
    <h1 class="trvg_header_title">
        {if $show eq 'GuideCat'}
        {$clsGuideCat->getTitle($guidecat_id)}
        {/if}
    </h1>
    {if $show eq 'GuideCatCountry' || $show eq 'SearchGuide'}
    <div class="common_banner_intro">{$clsCountry->getIntroBannerCommon($country_id)}</div>
    {/if}
    <a href="{$clsTour->getLink2(0, 1)}" title="Create your trip" class="trvg_header_link">
        Create your trip <i class="fa-sharp fa-regular fa-arrow-right" aria-hidden="true"></i>
    </a>
</div>
<div class="trvg_header_background_image">
    <img src="
    {if $show eq 'GuideCatCountry' || $show eq 'SearchGuide'}
        {$clsCountry->getImageBannerCommon($country_id, 1920, 600)}
    {elseif $show eq 'GuideCat'}
        {$clsGuideCatStore->getImage($guidecat_store_id, 1920, 600)}
    {/if}
    " width="1920" height="600" alt="Travel Guide">
</div>
{literal}
<style>
    /* .destination_travel_guide_body .bground_header {
        background: linear-gradient(rgba(24, 28, 26, 0.4), rgba(24, 28, 26, 0.4)),
            url("https://unikasia.vietiso.com/isocms/templates/default/skin/images/destination/bg_trvg.png");
        background-repeat: no-repeat;
        background-size: cover;
    } */
    .trvg_header_background_image {
        position: absolute;
        top: 0;
        left: 0;
        filter: brightness(65%);
        width: 100%;
        /* z-index: 1; */
    }

    .trvg_header {
        padding-top: 130px;
        padding-bottom: 192px;
        position: relative;
        z-index: 1;
    }

    .trvg_header_title {
        color: var(--Neutral-6, #FFF);
        text-align: center;
        font-family: "SF Pro Display";
        font-size: 48px;
        font-style: normal;
        font-weight: 600;
        line-height: 64px;
        text-transform: uppercase;
    }

    .trvg_header_link .fa-arrow-right {
        margin-left: 8px;
    }

    .trvg_header_link {
        padding: 12px 20px;
        justify-content: center;
        align-items: center;
        gap: 8px;
        border-radius: 8px;
        background: var(--Primary, #FFA718);
        display: table;
        margin: 0 auto;
        margin-top: 48px;
        color: #fff !important;
        transition: ease-in-out all 0.3s;
    }

    .trvg_header_link:hover {
        background: #E88F00;
    }

    .common_banner_intro {
        color: var(--Neutral-5, #F0F0F0);
        text-align: center;
        font-family: "SF Pro Display";
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: 28px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .common_banner_intro p {
        margin-bottom: unset;
    }

    @media (min-width: 991px) {
        .common_banner_intro {
            max-width: 600px;
            margin: 0 auto;
        }
    }

    @media (max-width: 990px) {
        .common_banner_intro {
            max-width: unset;
            margin: 0 20px;
        }
    }
</style>
{/literal}