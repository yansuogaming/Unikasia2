<section id="nah_also_like">
    <div class="alsoLike">
        <div class="alsoLike-title-parent">
            <h2 class="alsoLike-title">
                {if ($mod eq 'tour' && $act eq 'cat' || ($mod eq 'guide' && $act eq 'cat'))}
                {$clsConfiguration->getValue('TrvsCountryTitle')|html_entity_decode}
                {else}
                {$core->get_Lang('also like')}
                {/if}
            </h2>
        </div>
        <div class="alsoLike-slide owl-carousel" id="tour_alsoLike_owl">
            {section name=i loop=$lstCountry}
            <div class="alsoLike-item item">
                <a href="{$clsCountry->getLink($lstCountry[i].country_id)}" class="text-decoration-none">
                    <img class="alsoLike_img" src="{$clsCountry->getImageSub($lstCountry[i].country_id, 480, 698)}" width="480" height="698" alt="{$clsCountry->getTitle($lstCountry[i].country_id)}">
                </a>
                <h3 class="alsoLike_item_title"><a href="{$clsCountry->getLink($lstCountry[i].country_id)}" class="text-light text-decoration-none">{$clsCountry->getTitle($lstCountry[i].country_id)}</a></h3>
            </div>
            {/section}
        </div>
    </div>

    <div class="readyToStart">
        <h2 class="readyToStart-title">{$core->get_Lang('READY TO START')}</h2>
        <div class="txt-readyToStart">
            <p class="readyToStart-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam recusandae molestias eligendi natus maxime quia id hic a, voluptatem, doloribus voluptatum quibusdam neque aut consequuntur consequatur optio. Ab, accusantium, iste.</p>
        </div>
        <div class="btn-readyToStart">
            <button class="readyToStart-btn"><a href="{$clsTour->getLink2('', 1)}" class="btn readyToStart-btn">{$core->get_Lang('PLAN YOUR TRIP')}
                    <img src="{$URL_IMAGES}/hotel/ArrowRight.svg" alt="error"></a></button>
        </div>
    </div>
</section>