{assign var=getLink value=$clsTour->getLink($tour_id,$oneTopTour)}
{assign var=getTitle value=$clsTour->getTitle($tour_id,$oneTopTour)}
{if $is_mod_member}
{assign var=getToTalReview value=$clsReviews->getToTalReview($tour_id,'tour')}
{assign var=getRateAvg value=$clsReviews->getRateAvg($tour_id,'tour')}
{assign var=getStarNew value=$clsReviews->getStarNew($tour_id,'tour')}
{else}
{assign var=getToTalReview value=$clsReviews->getToTalReviewNoLogin($tour_id,'tour')}
{assign var=getRateAvg value=$clsReviews->getRateAvgNoLogin($tour_id,'tour')}
{assign var=getStarNew value=$clsReviews->getStarNewNoLogin($tour_id,'tour')}
{/if}

{assign var=getPriceTourPromotion value=$clsTour->getTripPriceNewPro2020($tour_id,$now_day,$is_agent)}
{assign var=percent_promotion value=$clsISO->getPromotion($tour_id,'Tour',$now_day,$now_day,'info_promotion')}
{assign var=close_sale_date value=$clsTour->getTourStartDate($tour_id,$now,'close_sale_date')}
{assign var=Depart_point value=$clsTour->getListDeparturePointLink($tour_id,$oneTopTour)}
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 box">
	<div class="itemTrip {$deviceType}">
		<a href="{$getLink}" title="{$getTitle}">
			<div class="image relative">
				<img src="{$clsConfiguration->getImage('default_image_pixel',3,2)}" data-src="{$clsTour->getImage($tour_id,455,305,$oneTopTour)}" width="455" height="305" alt="{$getTitle}" class="{if $mod eq 'home' || $act eq 'detaildeparture'}owl-lazy{else}lazy{/if} img100">
				{if $percent_promotion.discount_value}
					<span class="percent_promotion">
						{if $percent_promotion.discount_type eq 1}
							{if $_LANG_ID eq 'vn'}
								-{$percent_promotion.discount_value}{$clsISO->getShortRateText()}
							{else}
								-{$clsISO->getShortRateText()}{$percent_promotion.discount_value}
							{/if}
						{else}
							-{$percent_promotion.discount_value}%
						{/if}
					</span>
				{/if}
				{if $close_sale_date}
				<div class="clock_last_hour" data-date="{$close_sale_date|date_format:'%m/%d/%Y %k:%M:%S'}"></div>
				{/if}
			</div>
			<div class="body body_tour">
				<h3 class="body__title limit_2line">{$getTitle}</h3>
				<div class="body_info_tour">
					<div class="body_review">
						<p class="review_rate"><label class="rate-2019 block">{$getStarNew}</label></p>
						<p class="box_review_count"> 
						<span class="rate_avg"> {$getRateAvg}/5.0 | </span>
						<span class="review_count"> {$getToTalReview} {$core->get_Lang('reviews')}</span></p>
					</div>
					<div class="body_duration">
						<span class="duration"><i class="fa fa-clock-o" aria-hidden="true"></i>{$clsTour->getTripDuration2020($tour_id,'',$oneTopTour)}</span>
						{if $Depart_point and $is_tour_departure_point}
							<span class="start_tour">{$core->get_Lang('Depart')}: {$Depart_point}</span>
						{/if}
					</div>
					<div class="body_price">
					{if $getPriceTourPromotion}
						{$getPriceTourPromotion}
					{else}
						<p class="size18 color_fb1111 text-bold mb0">{$core->get_Lang('Contact')}</p>
					{/if}
					</div>
				</div>
			</div>
		</a>
	</div>
</div>