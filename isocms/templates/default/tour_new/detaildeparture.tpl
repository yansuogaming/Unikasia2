{assign var=title_tour value=$clsTour->getTitle($tour_id)}
{assign var=oneItemCatTour value=$clsTourCategory->getOne($tourcat_id,'title,slug')}
{assign var=titleCatTour value=$oneItemCatTour.title}
{assign var=linkCatTour value=$clsTourCategory->getLink($tourcat_id,$oneItemCatTour)}

{if $clsISO->getCheckActiveModulePackage($package_id,'member','default','default')}
{assign var=getToTalReview value=$clsReviews->getToTalReview($tour_id,'tour')}
{assign var=getStarNew value=$clsReviews->getStarNew($tour_id,'tour')}
{assign var=getRateAvg value=$clsReviews->getRateAvg($tour_id,'tour')}
{else}
{assign var=getToTalReview value=$clsReviews->getToTalReviewNoLogin($tour_id,'tour')}
{assign var=getStarNew value=$clsReviews->getStarNewNoLogin($tour_id,'tour')}
{assign var=getRateAvg value=$clsReviews->getRateAvgNologin($tour_id,'tour')}
{/if}
{assign var = _Inclusion value = $clsTour->getInclusion($tour_id,$oneItem)}
{assign var = _Exclusion value = $clsTour->getExclusion($tour_id,$oneItem)}
{assign var = _ThingToCarry value = $clsTour->getThingToCarry($tour_id,$oneItem)}
{assign var = _CancellationPolicy value = $clsTour->getCancellationPolicy($tour_id,$oneItem)}
{assign var = _RefundPolicy value = $clsTour->getRefundPolicy($tour_id,$oneItem)}
{assign var = _ConfirmationPolicy value = $clsTour->getConfirmationPolicy($tour_id,$oneItem)}
{literal}
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Trip",
"name": "{/literal}{$title_tour}{literal}",
"description": "{/literal}{$clsTour->getTripOverview($tour_id,$oneItem)|html_entity_decode|replace:'"':'\"'|strip_tags:true}{literal}",
"itinerary": [
{/literal}
{if $lstItineraryTour}
    {section name = i loop=$lstItineraryTour}
    {assign var=tourItinerary_id value=$lstItineraryTour[i].tour_itinerary_id}											
    {assign var = title_itinerary value = $clsTourItinerary->getTitleItineraryNew($tourItinerary_id,$lstItineraryTour[i])}
    {assign var = content value=$lstItineraryTour[i].content|html_entity_decode|replace:'"':'\"'|strip_tags}
    {literal}
    {
        "@type": "City",
        "name": "{/literal}{$title_itinerary}{literal}",
        "description": "{/literal}{$content}{literal}",
        "url": ""
    }{/literal}{if !$smarty.section.i.last}{literal},{/literal}{/if}{literal}
    {/literal}
    {/section}
    {/if}
{literal}        
]
}
</script>
{/literal}
{if $deviceType eq 'phone'}
{$clsISO->getBlock('box_tour_detail_mobile',["tour_id"=>$tour_id])}
{else}
<div class="page_container page_tour">
	<nav class="breadcrumb-main  breadcrumb-cruise bg-default breadcrumb-more bg_fff">
		<div class="container">
			<ol class="breadcrumb hidden-xs mt0 bg_fff pd15_0" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$PCMS_URL}">
						<span itemprop="name" class="color_666">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
                {if $package_id!=1}
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="hidden-xs">
					<a itemprop="item" href="{$curl}" title="{$core->get_Lang('Tours')}">
						<span itemprop="name" class="color_666">{$core->get_Lang('Tours')}</span>
					</a>
					<meta itemprop="position" content="2" />
				</li>
                {else}
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="hidden-xs">
					<a itemprop="item" href="{$clsISO->getLink('search_tour')}" title="{$core->get_Lang('Tours')}">
						<span itemprop="name" class="color_666">{$core->get_Lang('Tours')}</span>
					</a>
					<meta itemprop="position" content="2" />
				</li>
                {/if}
                {if $titleCatTour}
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="hidden-xs">
					<a itemprop="item" href="{$linkCatTour}" title="{$titleCatTour}">
						<span itemprop="name" class="color_666">{$titleCatTour}</span>
					</a>
					<meta itemprop="position" content="3" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a itemprop="item" href="javascript:void(0);" title="{$title_tour}">
						<span itemprop="name" class="color_000">{$title_tour}</span>
					</a>
					<meta itemprop="position" content="4" />
				</li>
                {else}
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a itemprop="item" href="javascript:void(0);" title="{$title_tour}">
						<span itemprop="name" class="color_000">{$title_tour}</span>
					</a>
					<meta itemprop="position" content="3" />
				</li>
                {/if}
			</ol>
		</div>
	</nav>
	<main class="pageDetail TourDetail bg_fff">
		<div class="container">
            <div class="tour__header d-flex">
				<div class="tour__header--child">
					<h1 class="title">{$title_tour}</h1>
					{if $getToTalReview}
					<div class="tour_rate box_col">
						<label class="rate-2019 block mb05">{$getStarNew}</label>
						<span class="review_text color_666">{$getRateAvg}/5.0</span> <span class="total__reviews text_bold">{$getToTalReview} {$core->get_Lang('reviews')}</span>
					</div>
					{/if}
				</div>
                <div class="share_box_tour_detail share_box">
                    <span class="icon_share">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2801_1074)">
                        <path d="M15.2946 13.3333C14.9204 13.3347 14.5504 13.4117 14.2067 13.5597C13.863 13.7077 13.5528 13.9236 13.2946 14.1944L6.52238 10.8055C6.68897 10.3004 6.68897 9.75511 6.52238 9.24997L13.3057 5.79997C13.7916 6.31199 14.4505 6.62506 15.1543 6.67834C15.8582 6.73161 16.5567 6.52129 17.1141 6.08825C17.6715 5.6552 18.048 5.03037 18.1704 4.33521C18.2928 3.64004 18.1523 2.9242 17.7763 2.32682C17.4003 1.72945 16.8156 1.29321 16.1359 1.1029C15.4562 0.912587 14.73 0.981803 14.0985 1.29709C13.467 1.61238 12.9752 2.15121 12.7188 2.80887C12.4625 3.46652 12.4598 4.196 12.7113 4.85553L5.99461 8.2722C5.63185 7.82856 5.14077 7.50797 4.58867 7.35438C4.03657 7.20079 3.45048 7.22171 2.91073 7.41429C2.37099 7.60686 1.90402 7.96166 1.57384 8.43004C1.24365 8.89842 1.06641 9.45746 1.06641 10.0305C1.06641 10.6036 1.24365 11.1626 1.57384 11.631C1.90402 12.0994 2.37099 12.4542 2.91073 12.6468C3.45048 12.8393 4.03657 12.8603 4.58867 12.7067C5.14077 12.5531 5.63185 12.2325 5.99461 11.7889L12.6946 15.1611C12.5814 15.4651 12.5231 15.7867 12.5224 16.1111C12.5224 16.6605 12.6853 17.1975 12.9905 17.6543C13.2957 18.1111 13.7296 18.4672 14.2372 18.6774C14.7447 18.8877 15.3032 18.9427 15.8421 18.8355C16.3809 18.7283 16.8759 18.4637 17.2643 18.0753C17.6528 17.6868 17.9174 17.1918 18.0246 16.653C18.1317 16.1142 18.0767 15.5556 17.8665 15.0481C17.6562 14.5405 17.3002 14.1067 16.8434 13.8014C16.3866 13.4962 15.8496 13.3333 15.3002 13.3333H15.2946ZM15.2946 2.2222C15.6242 2.2222 15.9465 2.31994 16.2206 2.50308C16.4946 2.68621 16.7083 2.94651 16.8344 3.25106C16.9605 3.5556 16.9936 3.89071 16.9292 4.21401C16.8649 4.53731 16.7062 4.83429 16.4731 5.06737C16.24 5.30046 15.9431 5.4592 15.6198 5.5235C15.2965 5.58781 14.9613 5.55481 14.6568 5.42866C14.3523 5.30252 14.092 5.08889 13.9088 4.81481C13.7257 4.54073 13.6279 4.2185 13.6279 3.88886C13.6279 3.44683 13.8035 3.02291 14.1161 2.71035C14.4287 2.39779 14.8526 2.2222 15.2946 2.2222ZM3.88905 11.6666C3.55941 11.6666 3.23718 11.5689 2.9631 11.3858C2.68902 11.2026 2.4754 10.9423 2.34925 10.6378C2.2231 10.3332 2.1901 9.99812 2.25441 9.67482C2.31872 9.35152 2.47745 9.05455 2.71054 8.82146C2.94363 8.58837 3.2406 8.42964 3.5639 8.36533C3.8872 8.30102 4.22231 8.33403 4.52686 8.46017C4.8314 8.58632 5.0917 8.79994 5.27483 9.07402C5.45797 9.34811 5.55572 9.67034 5.55572 9.99997C5.55572 10.442 5.38012 10.8659 5.06756 11.1785C4.755 11.491 4.33108 11.6666 3.88905 11.6666ZM15.2946 17.7778C14.965 17.7778 14.6427 17.68 14.3687 17.4969C14.0946 17.3137 13.881 17.0534 13.7548 16.7489C13.6287 16.4443 13.5957 16.1092 13.66 15.7859C13.7243 15.4626 13.883 15.1657 14.1161 14.9326C14.3492 14.6995 14.6462 14.5408 14.9695 14.4764C15.2928 14.4121 15.6279 14.4451 15.9324 14.5713C16.237 14.6974 16.4973 14.9111 16.6804 15.1851C16.8635 15.4592 16.9613 15.7814 16.9613 16.1111C16.9613 16.5531 16.7857 16.977 16.4731 17.2896C16.1606 17.6022 15.7366 17.7778 15.2946 17.7778Z" fill="#687486"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2801_1074">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>

                    </span>
                    <script type="text/javascript" src="{$URL_JS}/jquery.sharer.js?v={$upd_version}"></script>
                    {$clsISO->getBlock('box_share',["link_share"=>$curl,"title_share"=>$title_tour,"description_share"=>$description_page])}
                </div>
			</div>
			
			<div class="tour__content">
				<div class="row">
					<div class="col-lg-8 col-xs-12">
                        <div class="gallery_box">
                            {$core->getBlock('jssorimageSlide2')}
                        </div>
						<div id="tabsk" class="box__menu tabskTour" style="position: sticky; top: 0">
							<ul class="clienttabs list_style_none d-flex">
								<li><a id="overview--link" href="javascript:void(0);">{$core->get_Lang('Overviewz')}</a></li>
								<li><i class="fa fa-circle" aria-hidden="true"></i></li>
								{if $getKeyInfo}
								<li><a id="key__infomation--link" href="javascript:void(0);">{$core->get_Lang('Key infomation')}</a></li>
								<li><i class="fa fa-circle" aria-hidden="true"></i></li>
								{/if}
								<li><a id="avaiable--link" href="javascript:void(0);">{$core->get_Lang('Price Table')}</a></li>
								<li><i class="fa fa-circle" aria-hidden="true"></i></li>
								{if $lstItineraryTour}
								<li><a id="itinerary--link" href="javascript:void(0);">{$core->get_Lang('Itinerary')}</a></li>
								<li><i class="fa fa-circle" aria-hidden="true"></i></li>
								{/if}
								{if $_Inclusion || $_Exclusion || $_ThingToCarry || $_CancellationPolicy || $_RefundPolicy || $_ConfirmationPolicy || $listCustomField[0].fieldvalue}
								<li><a id="important__noted--link" href="javascript:void(0);">{$core->get_Lang('Important noted')}</a></li>
								<li><i class="fa fa-circle" aria-hidden="true"></i></li>
								{/if}
								{if $clsISO->getCheckActiveModulePackage($package_id,'reviews','default','default','tour')}
								<li><a id="reviews--link" href="javascript:void(0);">{$core->get_Lang('Reviews')}</a></li>
								{/if}
							</ul>
						</div>
						<div class="list_tab tinymce_Content">
							<section id="overview" class="overview section__box">
								<h2 class="title_section">{$core->get_Lang('Overviewz')}</h2>
								<ul class="overview__list list__item list_style_none text_bold">
									{assign var=address value=$clsTour->getLCityAround2($tour_id)}
									{assign var=Depart_point value=$clsTour->getListDeparturePointLink($tour_id)}
									{assign var=getTripDuration value=$clsTour->getTripDuration2019($tour_id)}
									{if $getTripDuration}<li class="item itinerary">{$core->get_Lang('Itinerary')}: {$getTripDuration}</li>{/if}
									{if $Depart_point and $clsISO->getCheckActiveModulePackage($package_id,'tour','tour_departure_point','customize')}<li class="item departure_point">{$core->get_Lang('Depart from')}: {$Depart_point}</li>{/if}
									{if $address and $clsISO->getCheckActiveModulePackage($package_id,'tour','destination','customize')}<li class="item destintions">{$core->get_Lang('Destintions')}: {$address}</li>{/if}
								</ul>
								<div class="intro">
									{$clsTour->getTripOverview($tour_id,$oneItem)}
								</div>
							</section>
							{if $getKeyInfo}
							<section id="key__infomation" class="key__infomation section__box">
								<h2 class="title_section">{$core->get_Lang('Key infomation')}</h2>
								<div class="key__infomation--list">
									{$getKeyInfo}
								</div>
							</section>
							{/if}
							<section id="avaiable" class="avaiable section__box">
								{$clsISO->getBlock("box_find_tour")}
							</section>
							{if $lstItineraryTour}
							<section id="itinerary" class="itinerary section__box">
								<h2 class="title_section">{$core->get_Lang('Itinerary')}</h2>
								<div class="list_itinerary">
									{section name=i loop=$lstItineraryTour}
										{assign var=tourItinerary_id value=$lstItineraryTour[i].tour_itinerary_id}
										{assign var=_lstItineraryTransport value=$lstItineraryTour[i].lstItineraryTransport}
										{assign var=_ItineraryContent value=$lstItineraryTour[i].content}
										{assign var=_ItineraryImage value = $lstItineraryTour[i].image}
										<div  class="item_itinerary {if $smarty.section.i.first}itinerary__start{/if}">
											<div class="item_header collapsed d-flex align-items-start justify-content-between relative" data-bs-toggle="collapse" href="#collapse{$smarty.section.i.index}{$smarty.section.k.index}">
												<span class="title_day">
													{$clsTourItinerary->getTitleItineraryNew($tourItinerary_id,$lstItineraryTour[i])}
												</span>
												<span class="day_Itinerary">
													{$clsISO->converTimeToText5($list_itinerary.$tourItinerary_id)}
													<i class="fa fa-angle-down" aria-hidden="true"></i>
												</span>
											</div>
											<div class="item_content tinymce_Content collapse" id="collapse{$smarty.section.i.index}{$smarty.section.k.index}">
												{if $lstItineraryTour[i].is_show_image eq '1' and $_ItineraryImage ne ''}
													<div class="box_content_item d-flex flex-wrap">
														<div class="photo_itinerary">
															<img class="photo275 image img100" width="263" height="153" src="{$_ItineraryImage}"/>
														</div>
														<div class="intro_itinerary">
															{$_ItineraryContent|html_entity_decode}
														</div>
													</div>
												{else}
													{$_ItineraryContent|html_entity_decode}
												{/if}
											</div>
										</div>
									{/section}
								</div>
								<div class="clearfix"></div>
                                {if $clsTour->getFileProgram($tour_id)}
                                <div class="itnerary_file">
                                    <div class="icon">
										<img src="{$URL_IMAGES}/icon/icon_file.svg" />
									</div>
                                    <div class="text">
										<p class="bold p_text_1">{$core->get_Lang('Want to read it later')}?</p>
										<p class="bold p_text_2">{$core->get_Lang('Download this tour’s PDF brochure and start tour planning offline')}</p>
                                    </div>
                                    <div class="btn_download">
                                        <a class="btn_download_file" title="{$core->get_Lang('Download Brochure')}" download="{$clsTour->getFileProgram($tour_id)}" href="{$clsTour->getFileProgram($tour_id)}">{$core->get_Lang('Download Brochure')}</a></a>
                                    </div>
                                </div>
                                {/if}
							</section>
							{/if}
							{if $_Inclusion || $_Exclusion || $_ThingToCarry || $_CancellationPolicy || $_RefundPolicy || $_ConfirmationPolicy || $listCustomField[0].fieldvalue}
							<section id="important__noted--box pd0" class="important__noted section__box">
								<h2 class="title_section">{$core->get_Lang('Important noted')}</h2>
								<div class="important__noted--box pd0">
									{if $_Inclusion}
									<div class="box_col list_style_none">
										<h3 class="title title_inclusion">{$core->get_Lang('Trip Inclusion')}</h3>
										<div class="box__right">
											<div class="list-check plus">{$_Inclusion}</div>
										</div>
									</div>
									{/if}
									{if $_Exclusion}
									<div class="box_col list_style_none">
										<h3 class="title title_exclusion">{$core->get_Lang('Trip Exclusions')}</h3>
										<div class="box__right">
											<div class="list-check minus">{$_Exclusion}</div>
										</div>
									</div>
									{/if}
									{if $_ThingToCarry}
									<div class="box_col">
										<h3 class="title title_thing_to_carry">{$core->get_Lang('Thing To Carry')}</h3>
										<div class="box__right">
											<div class="list-dot">{$_ThingToCarry}</div>
										</div>
									</div>
									{/if}
									{if $_CancellationPolicy}
									<div class="box_col">
										<h3 class="title title_cancellationpolicy">{$core->get_Lang('Cancellation Policy')}</h3>
										<div class="box__right">
											<div class="list-dot">{$_CancellationPolicy}</div>
										</div>
									</div>
									{/if}
									{if $_RefundPolicy}
									<div class="box_col">
										<h3 class="title title_refundpolicy">{$core->get_Lang('Refund Policy')}</h3>
										<div class="box__right">
											<div class="list-dot">{$_RefundPolicy}</div>
										</div>
									</div>
									{/if}
									{if $_ConfirmationPolicy}
									<div class="box_col">
										<h3 class="title title_confirmationpolicy">{$core->get_Lang('Confirmation Policy')}</h3>
										<div class="box__right">
											<div class="list-dot">{$_ConfirmationPolicy}</div>
										</div>
									</div>
									{/if}
									{if $listCustomField[0].fieldvalue}
									<div class="box_col">
										{section name=i loop=$listCustomField}
										<h3 class="title title_customfield">{$listCustomField[i].fieldname}</h3>
										<div class="box__right">
											<div class="list-dot">{$listCustomField[i].fieldvalue|html_entity_decode}</div>
										</div>
										{/section}
									</div>
									{/if}
								</div>
							</section>
							{/if}
							{if $clsISO->getCheckActiveModulePackage($package_id,'reviews','default','default','tour')}
							<section id="reviews" class="reviews section__box bg_f7f7f7">
								<h2 class="title_section">{$core->get_Lang('Reviews')}</h2>
								{if $clsISO->getBrowser() ne 'phone'}
								<a class="btn_write_review btn_write_review_no_login fr" href="javascript:void(0);" title="{$core->get_Lang('Reviews')}">{$core->get_Lang('Reviews')}</a>
								{/if}
								{if $clsISO->getCheckActiveModulePackage($package_id,'member','default','default')}
                                {$clsISO->getBlock('review_Star',["tour_id"=>$tour_id,"getToTalReview"=>$getToTalReview])}
                                {else}
                                {$clsISO->getBlock('review_Star_No_Login',["tour_id"=>$tour_id,"getToTalReview"=>$getToTalReview])}
                                {/if}
							</section>
							{/if}
						</div>
					</div>
					<div class="col-lg-4 col-xs-12">
						<div class="price__Box sticky_fix">
							{assign var=getFlagText value=$clsPromotion->getFlagText($promotion_id)}
							{assign var=checkmem value=$clsTour->getCheckMemSet($tour_id)}
							{assign var=getPriceTourPromotion value=$clsTour->getTripPriceNewPro2020($tour_id,$now_day,$is_agent,'detail')}
							{assign var=getPriceTourPromotionnomem value=$clsTour->getTripPriceNewPro2020($tour_id,$now_day,$is_agent,'nomem')}
							{if $date_coutdown }
								{if $getFlagText}<div class="sale_off">{$getFlagText}</div>{/if}
								<div class="d-flex box__price box_shadow_pro {if empty($getFlagText)}border_top{/if}">
									<div class="price">
										{if $getPriceTourPromotion}
											{$core->get_Lang('Fromm')} {$getPriceTourPromotion} <span class="color_666 size16">{$core->get_Lang('per traveler')}</span>
										{/if}
									</div>
									<button class="btn_scroll btn_yellow btn_main">{$core->get_Lang('Choose departure date')}</button>

								</div>
								<div class="offerDate">
									<div class="d-flex offerDate__box">
										<div class="text_bold color_24b89c">{$core->get_Lang('Last minute deal')}</div>
										<div class="sale_clock">
											<ul class="clock lastHour" data-date="{$date_coutdown}"
												data-promotion_id="{$promotion_id}" style="float:left !important">
												<li><span class="days fw600 fs30">00</span>
													<p class="days_text ">{$core->get_Lang('Days')}</p></li>
												<li><span class="hours fw600 fs30">00</span>
													<p class="hours_text ">{$core->get_Lang('Hours')}</p></li>
												<li><span class="minutes fw600 fs30">00</span>
													<p class="minutes_text ">{$core->get_Lang('Mins')}</p></li>
												<li><span class="seconds fw600 fs30">00</span>
													<p class="seconds_text ">{$core->get_Lang('Secs')}</p></li>
											</ul>
										</div>
									</div>
									<p class="mt10">{$core->get_Lang('Latest departure date')}: {$first_start_date}</p>
								</div>
							{else}
								{if $getPriceTourPromotion }
									{if $getFlagText}<div class="sale_off">{$getFlagText}</div>{/if}
									<div class="d-flex box__price {if $getPriceTourPromotion }box_shadow_pro{else}box_shadow{/if} {if empty($getFlagText)}border_top{/if}">
										<div class="price">
											{$core->get_Lang('Fromm')} {$getPriceTourPromotion} <span class="color_666 size16">{$core->get_Lang('per traveler')}</span>
										</div>
										<button class="btn_scroll btn_yellow btn_main">{$core->get_Lang('Choose departure date')}</button>
									</div>
									{if $first_start_date}
										<div class="offerDate">
											<p>{$core->get_Lang('Latest departure date')}: {$first_start_date}</p>
										</div>
									{/if}
								{else}
									<div class="d-flex box__price box_shadow">
										<button class="btn_scroll btn_yellow btn_main margin_0_auto">{$core->get_Lang('Choose departure date')}</button>
									</div>
									{if $first_start_date}
										<div class="offerDate">
											<p>{$core->get_Lang('Latest departure date')}: {$first_start_date}</p>
										</div>
									{/if}
								{/if}
							{/if}
						</div>
						<div class="hotline">
							<a class="img_phone" title="Call now" href="tel:{$clsConfiguration->getValue('CompanyHotline')}">
								<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25 0C38.8071 0 50 11.1929 50 25C50 38.8071 38.8071 50 25 50C11.1929 50 0 38.8071 0 25C0 11.1929 11.1929 0 25 0ZM39.6777 36.566C40.035 36.2069 40.2355 35.721 40.2355 35.2146C40.2355 34.7081 40.035 34.2222 39.6777 33.8631L34.7841 28.9705C34.4249 28.6131 33.9388 28.4125 33.432 28.4125C32.9253 28.4125 32.4392 28.6131 32.08 28.9705L30.7502 30.3009C30.3086 30.7462 29.735 31.037 29.1148 31.1299C28.4946 31.2227 27.861 31.1128 27.3083 30.8164C23.8477 28.9835 21.0173 26.1534 19.184 22.6931C18.8875 22.1403 18.7774 21.5065 18.8702 20.8862C18.9629 20.2658 19.2535 19.6919 19.6986 19.25L21.031 17.9199C21.3882 17.5607 21.5887 17.0747 21.5887 16.5681C21.5887 16.0615 21.3882 15.5755 21.031 15.2163L16.1373 10.3242C15.7781 9.96678 15.292 9.76611 14.7852 9.76611C14.2785 9.76611 13.7923 9.96678 13.4331 10.3242C13.2309 10.5259 12.975 10.7695 12.7014 11.0273C12.0171 11.6741 11.1634 12.4791 10.8183 12.9852C9.00059 15.6452 9.87227 19.204 10.9194 21.7214C12.3027 25.0395 14.8521 28.655 18.1007 31.9013C21.3463 35.1472 24.9606 37.6969 28.2806 39.0802C30.7974 40.1288 34.3548 40.9983 37.0147 39.1811C37.5205 38.8356 38.3267 37.984 38.9722 37.2988C39.2311 37.0257 39.4749 36.7676 39.6777 36.566Z" fill="var(--main-bg-color)"/>
                                </svg>
							</a>
							<div class="infor_contact">
								<span> {$core->get_Lang('Hot line ')} 24/7</span>
								<a title="{$core->get_Lang('Call now')}" href="tel:{$clsConfiguration->getValue('CompanyHotline')}">{$clsConfiguration->getValue('CompanyHotline')}</a>
							</div>
						</div>
						{$core->getBlock('Lfaqscolbox')}
					</div>
				</div>
			</div>
			<div class="tour___foot"></div>
		</div>
		{$core->getBlock('box_service_ad')}
		<div class="container">
			{$core->getBlock('relatetour')}
		</div>
		<div class="cleafix mb30"></div>
	</main>
</div>
<script>
    var $tour_id = '{$tour_id}';
    var $Loading = '{$core->get_Lang("Loading")}';
    var selectmonth='{$core->get_Lang("select month")}';
    var Input_data_is_invalid='{$core->get_Lang("Input data is invalid")}';
    var Input_data_is_required='{$core->get_Lang("Select data is required")}';
    var $_Expand_all = '{$core->get_Lang("Expand all")}';
    var $_Collapse_all = '{$core->get_Lang("Collapse all")}';
    var $_LANG_ID = '{$_LANG_ID}';
    var Adults='{$core->get_Lang("Adults")}';
    var Children='{$core->get_Lang("Children")}';
    var Infants='{$core->get_Lang("Infants")}';
    var Departure_date_invalid='{$core->get_Lang("Departure date is invalid")}';
	var Please_choose_departure_date='{$core->get_Lang("Please choose departure date")}';
	var Warning='{$core->get_Lang("Warning")}';
    var list_start_date=['{$list_start_date}'];
    var $check_tour_promotion='{$check_tour_promotion}';
	var $check_tour_start_date='{$check_tour_start_date}';
	 
	var getSelectChild 	= `{$getSelectChild}`; 
	var getSelectInfant 	= `{$getSelectInfant}`; 
</script>
{$date_range_js_update}
<script src="{$URL_JS}/jquery.countdown.min.js?v={$upd_version}"></script>
<script src="{$URL_JS}/jquery-confirm.min.js?v={$upd_version}"></script>
{literal}
	<script>			
		$(document).on("click",".trigger_contact",function() {
			$('.contact_now').trigger('click');
		});
		$('.clock').each(function () {
			var $_this = $(this);
			var $_date = $_this.data('date');
			var $promotion_id = $_this.data('promotion_id');
			$_this.countdown($_date, function (event) {
				var $this = $(this).html(event.strftime(''
						+ '<li><span class="days">%D</span><p class="days_text">' + Days + '</p></li>'
						+ '<li><span class="hours">%H</span><p class="hours_text">' + Hours + '</p></li>'
						+ '<li><span class="minutes">%M</span><p class="minutes_text">' + Minutes + '</p></li>'
						+ '<li><span class="seconds">%S</span><p class="seconds_text">' + Seconds + '</p></li>'
				));
			});
		});
		function goToByScroll(id) {
			id = id.replace("--link", "");
			$('html,body').animate({
				scrollTop: $("#" + id).offset().top - 120
			},100);
		}
		$("#tabsk > ul li a").click(function (e) {
			e.preventDefault();
			goToByScroll($(this).attr("id"));
		});
	</script>
{/literal}
{if $getToTalReview gt 0}
{literal}
	<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "{/literal}{$title_tour}{literal}",
  "url": "{/literal}{$DOMAIN_NAME}{$clsTour->getLink($tour_id)}{literal}",
  "description": "{/literal}{$clsTour->getTripOverview($tour_id)|strip_tags}{literal}",
 "image": "{/literal}{$DOMAIN_NAME}{$clsTour->getImage($tour_id,300,200)}{literal}",
  "brand": {
    "@type": "Thing",
    "name": "Tour"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
	"ratingValue": "{/literal}{$getRateAvg}{literal}",
    "bestRating": "{/literal}{$clsReviews->getBestRate($tour_id,$mod)}{literal}",
    "ratingCount": "{/literal}{$getToTalReview}{literal}"
  }
}
</script>
{/literal}
{/if}
{/if}
<script src="{$URL_JS}/jquery.tourdetail.js?v={$upd_version}"></script>