{assign var = link value = $clsHotel->getLink($hotel_id,$arrHotel)}
{assign var = title value = $clsHotel->getTitle($hotel_id,$arrHotel)}
<!--{assign var = getImageStar value = $clsHotel->getHotelStar($hotel_id,$arrHotel)}-->

{assign var = getImageStar value = $clsHotel->getStarNumber($hotel_id)}

{if $clsISO->getCheckActiveModulePackage($package_id,'member','default','default')}
    {assign var= ratingValue value= $clsReviews->getRateAvg($hotel_id,'hotel','10')}
{else}
    {assign var= ratingValue value= $clsReviews->getRateAvgNoLogin($hotel_id,'hotel','10')}
{/if}
{assign var=textRateAvg value=$clsReviews->getTextRateAvg($hotel_id,'hotel')}
<div class="relate_slide_item">
    <div class="relate_slide_image">
        <a href="{$link}" title="{$title}">
            <img class="img-responsive img100" id="imgAddOn" src="{$clsHotel->getImage($hotel_id,296,200,$arrHotel)}" alt="{$title}" onerror="this.src='{$URL_IMAGES}/none_image.png'"/>
        </a>
    </div>
    <div class="relate_slide_item_body">
        <h3 class="relate_slide_item_title">
            <a href="{$link}" title="{$title}">{$title}</a>
        </h3>
        <div class="detailStartsHotels">
                    <div class="star_hotel">{$getImageStar}</div>
                </div>
            <div class="box_body-hotel">
                <img src="{$URL_IMAGES}/hotel/iconHome.svg" alt="error">
                <p style="margin: 0">{$clsHotel->getTypeHotel($hotel_id)}</p>
            </div>
		 <div class="address">
                <div class="box_body_adress">
                    <img src="{$URL_IMAGES}/hotel/address.svg" alt="error">
                    <p>{$clsHotel->getAddress($hotel_id,$arrHotel)}</p>
                </div>
            </div>
		       <div class="txt_score-review">
                <div class="border_score">
                    <p class="numb_scorestay">{$clsReviews->getReviews($hotel_id, 'avg_point')}</p>
                </div>
                <div class="txt_reviewsquality">
                <p class="txt_qualityreview">{$clsReviews->getReviews($hotel_id, 'txt_review')} 
				<span class="txt_reviews">({$clsReviews->getReviews($hotel_id)} {$core->get_Lang('reviews')})</span></p>
            </div>
		</div>
         <div class="des_list_hotel_item_price">
                                    <span class="des_price_title">Avg price per night</span>
                                    <span class="des_price_show_text">US</span>
                                    <span class="des_price_show_number">${$clsHotel->getPriceAvg($hotel_id)}</span>
                                </div>
    </div>
</div>

