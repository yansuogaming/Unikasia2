<div class="cru_header">
    <h1 class="cru_header_title">{$clsCruiseCatCountry->getBannerTitle($cruise_cat_country_id)}</h1>
    <div class="cru_header_description">
        {$clsCruiseCatCountry->getBannerIntro($cruise_cat_country_id)}
    </div>
</div>
<div class="cru_header_background_image">
    <img src="{$clsCruiseCatCountry->getBannerImageHorizontal($cruise_cat_country_id, 1920, 600)}" width="1920" height="600" alt="{$clsCruiseCatCountry->getBannerTitle($cruise_cat_country_id)}">
</div>
{literal}
<style>
    .cru_header_background_image {
        position: absolute;
        top: 0;
        left: 0;
        filter: brightness(65%);
        width: 100%;
        /* z-index: 1; */
    }

    .cru_header_title {
        color: #FFF;
        text-align: center;
        font-family: "SF Pro Display";
        font-size: 48px;
        font-style: normal;
        font-weight: 600;
        line-height: 64px;
    }

    .cru_header_title p,
    .cru_header_description p {
        margin-bottom: unset;
    }

    .cru_header_description {
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

    .cru_header_description p {
        margin-bottom: 0;
    }

    .cru_header {
        padding-top: 127px;
        padding-bottom: 182px;
        position: relative;
        z-index: 1;
    }
</style>
{/literal}