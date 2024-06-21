{assign var = link value = $clsHotel->getLink($hotel_id,$arrHotel)}
{assign var = title value = $clsHotel->getTitle($hotel_id,$arrHotel)}
{assign var = getImageStar value = $clsHotel->getHotelStar($hotel_id,$arrHotel)}
<div class="alsoLike">
    <div class="alsoLike-head">
        <h2 class="alsoLike-title">{$core->get_Lang('also like')}</h2>
    </div>
    <div class="alsoLike-slide owl-carousel_overview5 owl-carousel">
        {section name=i loop=$lstHotel}
            <div class="alsoLike-items">
                {assign var = getImageStar value = $clsHotel->getHotelStar($lstHotel[i].hotel_id)}
                <a class="photo" href="{$clsCountryEx->getLink($lstHotel[i].country_id,'Hotel',$lstCountryHotel[i])}" title="{$lstHotel[i].title}">
                    <img class="img-responsive img100" id="slide-items"
                        src="{$clsHotel->getImage($lstHotel[i].hotel_id, 481, 698)}" alt="{$lstHotel[i].title}" />
                    <h3 class="alsoLike-content_title">
                        <a title="{$lstHotel[i].country_id}"
                            href="{$clsCountryEx->getLink($lstHotel[i].country_id,'Hotel',$lstCountryHotel[i])}">{$country_title[intval($lstHotel[i].country_id)]}</a>
                    </h3>
                </a>
            </div>
        {/section}
    </div>
</div>

<div class="readyToStart">
    <h2 class="readyToStart-title">{$clsConfiguration->getValue('TitleVideoPerfect_'|cat:$_LANG_ID)|@html_entity_decode}</h2>
    <div class="txt-readyToStart">
        {$clsConfiguration->getValue('IntroVideoPerfect_'|cat:$_LANG_ID)|@html_entity_decode}
    </div>
    <div class="btn-readyToStart">
        <button class="readyToStart-btn">
            <a href="#" title="#">
                {$core->get_Lang('PLAN YOUR TRIP')}
                <img src="{$URL_IMAGES}/hotel/ArrowRight.svg" alt="error">
            </a>
        </button>
    </div>
</div>