{assign var = link value = $clsHotel->getLink($hotel_id,$arrHotel)}
{assign var = title value = $clsHotel->getTitle($hotel_id,$arrHotel)}
{assign var = getImageStar value = $clsHotel->getHotelStar($hotel_id,$arrHotel)}
{assign var= hotelFacility value= $clsHotel->getListHotelFacility($hotel_id,$arrHotel)}

{if $clsISO->getCheckActiveModulePackage($package_id,'member','default','default')}
    {assign var= ratingValue value= $clsReviews->getRateAvg($hotel_id,'hotel','10')}
    {assign var= bestRating value= $clsReviews->getBestRate($hotel_id,'hotel')}
    {assign var= ratingCount value= $clsReviews->getToTalReview($hotel_id,'hotel')}
{else}
    {assign var= ratingValue value= $clsReviews->getRateAvgNoLogin($hotel_id,'hotel','10')}
    {assign var= bestRating value= $clsReviews->getBestRate($hotel_id,'hotel')}
    {assign var= ratingCount value= $clsReviews->getToTalReviewNoLogin($hotel_id,'hotel')}
{/if}
{assign var=textRateAvg value=$clsReviews->getTextRateAvg($hotel_id,'hotel')}

<div class="box_hotel_item {$package_id}">
    <div class="img_hotel">
        <a class="photo" href="{$link}" title="{$title}">
            <img class="img-responsive img100" src="{$clsHotel->getImage($hotel_id,277,181,$arrHotel)}"
                alt="{$title}" />
        </a>
    </div>
    <div class="box_item_body">
        <div class="box_left_body">
            <h3 class="box_body_title">
                <a href="{$link}" title="{$title}">{$title}</a>
                {$clsHotel->getStarNew($hotel_id,$arrHotel)}
                {if $getImageStar != null}<img class="star" height="19" src="{$getImageStar}" alt="star"
                    style="width: auto" />{/if}
            </h3>
            <div class="box_body-hotel">
                <img src="{$URL_IMAGES}/hotel/iconHome.svg" alt="error">
                <p>{$core->get_Lang('Apartments')}</p>

            </div>
            <div class="address">
                <div class="box_body_adress">
                    <img src="{$URL_IMAGES}/hotel/address.svg" alt="error">
                    <p>{$clsHotel->getAddress($hotel_id,$arrHotel)}</p>
                </div>
                <a role="link" title="map" data-bs-toggle="modal"
                    data-bs-target="#mapModal{$hotel_id}">{$core->get_Lang('Show map')}</a>
            </div>
            <div class="box_body-check">
                <div class="box_body-meal">
                    <img src="{$URL_IMAGES}/hotel/iconCheck.svg" alt="error">
                    <p>{$core->get_Lang('Breakfast included')}</p>
                </div>
                <div class="box_body-meal">
                    <img src="{$URL_IMAGES}/hotel/iconCheck.svg" alt="error">
                    <p>{$core->get_Lang('No prepayment')}</p>
                </div>
            </div>
            <div class="box_body-service">
                {if isset($hotelFacility) && $hotelFacility}
                    {section name=i loop=$hotelFacility}
                        {if $clsProperty->getImage($hotelFacility[i]) && $smarty.section.i.index lt 5}
                            <img data-bs-title="{$clsProperty->getTitle($hotelFacility[i])}" data-bs-custom-class="custom-tooltip"
                                data-bs-toggle="tooltip" data-bs-placement="top" src="{$clsProperty->getImage($hotelFacility[i])}"
                                alt="{$clsProperty->getTitle($hotelFacility[i])}" />
                        {/if}
                    {/section}
                    {if $hotelFacility|@count > 5}
                        <div data-bs-title="{$core->get_Lang('More')}" data-bs-custom-class="custom-tooltip"
                            data-bs-toggle="tooltip" data-bs-placement="top" class="box_body-service-item">
                            +{$hotelFacility|@count-5}</div>
                    {/if}
                {/if}

            </div>
        </div>


        <div class="btn_view_detail phone"><a class="bg_main" href="{$link}"
                title="{$core->get_Lang('View Detail')}">{$core->get_Lang('View Detail')} <i class="fa fa-angle-right"
                    aria-hidden="true"></i></a></div>
    </div>
    <div class="box_right-body_mobile">
        <div class="box_right_body">
            {if !isset($ratingCount) || !$ratingCount}
                <div class="review" style=""></div>
            {else}
                <div class="review">
                    <p>{$textRateAvg}
                        <span>

                            ({$ratingCount} {$core->get_Lang('reviews')})

                        </span>
                    </p>
                    <div class="rate">{$ratingValue|number_format:1}</div>
                </div>
            {/if}
            <div class="box_price">
                <div class="price_from_text">{$core->get_Lang('Avg price per night')}</div>
                <div class="div_price text-end">{$core->get_Lang('US')}
                    <span>{$clsHotel->getPriceOnPromotion($hotel_id)}</span>
                </div>
                <div class="box_right-price">
                </div>
                <div class="btn_view_detail no_phone"><a href="{$link}"
                        title="{$core->get_Lang('View Detail')}">{$core->get_Lang('View Detail')} <img
                            style="margin-left: 8px;" src="{$URL_IMAGES}/hotel/ArrowRight.svg" alt="error">
                    </a></div>
            </div>

        </div>
    </div>


    <div class="modal fade mapModal" id="mapModal{$hotel_id}" tabindex="-1" aria-labelledby="mapModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe
                        src="https://maps.google.it/maps?q={$clsHotel->getAddressMapView($hotel_id,$arrHotel)}&output=embed"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

</div>