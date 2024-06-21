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
{$core->getBlock('box_tour_detail_mobile')}
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
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="hidden-xs">
					<a itemprop="item" href="{$curl}" title="{$core->get_Lang('Tour')}">
						<span itemprop="name" class="color_666">{$core->get_Lang('Tour')}</span>
					</a>
					<meta itemprop="position" content="2" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="hidden-xs">
					<a itemprop="item" href="{$linkCatTour}" title="{$titleCatTour}">
						<span itemprop="name" class="color_666">{$titleCatTour}</span>
					</a>
					<meta itemprop="position" content="3" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active hidden">
					<a itemprop="item" href="javascript:void(0);" title="{$title_tour}">
						<span itemprop="name" class="color_000">{$title_tour}</span>
					</a>
					<meta itemprop="position" content="4" />
				</li>
			</ol>
		</div>
	</nav>
	<main class="pageDetail TourDetail bg_fff">
		<div class="container">
			<div class="tour__header">
				<div class="tour__header--child">
					<h1 class="title">{$title_tour}</h1>
					{if $getToTalReview}
					<div class="tour_rate box_col">
						<label class="rate-2019 block mb05">{$getStarNew}</label>
						<span class="review_text color_666">{$getRateAvg}/5.0</span> <span class="total__reviews text_bold">{$getToTalReview} {$core->get_Lang('reviews')}</span>
					</div>
					{/if}
				</div>
				{$core->getBlock('slider_DetailTour')}
			</div>
			<div class="tour__content">
				<div class="row">
					<div class="col-lg-8 col-xs-12">
						<div id="tabsk" class="box__menu tabskTour" style="position: sticky; top: 0">
							<ul class="clienttabs list_style_none d-flex">
								<li><a id="overview--link" href="javascript:void(0);">{$core->get_Lang('Overviewz')}</a></li>
								<li><i class="fa fa-circle" aria-hidden="true"></i></li>
								{if $getKeyInfo}
								<li><a id="key__infomation--link" href="javascript:void(0);">{$core->get_Lang('Key infomation')}</a></li>
								<li><i class="fa fa-circle" aria-hidden="true"></i></li>
								{/if}
								<li><a id="avaiable--link" href="javascript:void(0);">{$core->get_Lang('Available')}</a></li>
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
						<div class="list_tab">
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
								<div class="avaiable__header">
									<h2 class="title_section color_fff">{$core->get_Lang('Available')}</h2>
									<form id="form__avaiable" class="form__avaiable d-flex" action="" method="post">
										<div class="number_travellers_box relative">
											<div class="number_travellers icon_user relative">
												<input type="text" readonly class="form-control pick_travellers" id="pick_travellers" value="{$core->get_Lang('Adults')} x 1">
											</div>
											<div id="check_number_travellers" class="check_number_travellers" style="display:none;">
												<ul class="check_number_travellers--ul list_style_none">
													{section name=i loop=$lstVisitorType}
													{if $lstVisitorType[i].tour_property_id eq $adult_type_id}
													<li class="inputTraveller" id="li_adult" data-tour_property_id="{$lstVisitorType[i].tour_property_id}">
														<label>{$core->get_Lang('Adults')}
															<span class="size14 d-block text_normal">({$core->get_Lang('12 years old and older')})</span>
														</label>
														<div class="right__inputTraveller">
															<a class="unNum text_main" _type="number_adults" traveler_type_id="{$lstVisitorType[i].tour_property_id}" href="javascript:void(0);"><i class="fa fa-minus" aria-hidden="true"></i></a>
															<input type="hidden" id="tour_visitor_adult_id" name="tour_visitor_adult_id" value="{$lstVisitorType[i].tour_property_id}"/>
															<input min-number="1" max-number="{$max_adult}" type="number" class="number_adults input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="national_visitor{$lstVisitorType[i].tour_property_id}" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="1"/>
															<input type="hidden" name="people_price{$lstVisitorType[i].tour_property_id}" value="{$price_adult}" id="people_price{$lstVisitorType[i].tour_property_id}" departure_in="{$departure_in}" departure_in_2="{$departure_in_2}">
															<a class="upNum text_main" _type="number_adults" traveler_type_id="{$lstVisitorType[i].tour_property_id}" href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i></a>
														</div>
													</li>
													{elseif $lstVisitorType[i].tour_property_id eq $child_type_id}
													{if $max_child}
													<li class="inputTraveller">
														<label>{$core->get_Lang('Children')}
															<span class="size14 d-block text_normal">({$core->get_Lang('From 6 years old to 11 years old')})</span>
														</label>
														<div class="right__inputTraveller">
															<a class="unNum text_main" _type="number_child" traveler_type_id="{$lstVisitorType[i].tour_property_id} " href="javascript:void(0);"><i class="fa fa-minus" aria-hidden="true"></i></a>
															<input type="hidden" id="tour_visitor_child_id" name="tour_visitor_child_id" value="{$lstVisitorType[i].tour_property_id}"/>
															<input min-number="0" max-number="{$max_child}" type="number" class="number_child input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="national_visitor{$lstVisitorType[i].tour_property_id}" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="0"/>
															<a class="upNum text_main" _type="number_child" traveler_type_id="{$lstVisitorType[i].tour_property_id} " href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i></a>
														</div>
													</li>
													{/if}
													{else}
													{if $max_infant}
													<li class="inputTraveller">
														<label>{$core->get_Lang('Infants')}
															<span class="size14 d-block text_normal">({$core->get_Lang('From 0 years old to 5 years old')})</span>
														</label>
														<div class="right__inputTraveller">
															<a class="unNum text_main" _type="number_infants" traveler_type_id="{$lstVisitorType[i].tour_property_id} " href="javascript:void(0);"><i class="fa fa-minus" aria-hidden="true"></i></a>
															<input type="hidden" id="tour_visitor_infant_id" name="tour_visitor_infant_id" value="{$lstVisitorType[i].tour_property_id}"/>
															<input min-number="0" max-number="{$max_infant}" type="number" class="number_infants input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="national_visitor{$lstVisitorType[i].tour_property_id}" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="0"/>

															<a class="upNum text_main" _type="number_infants" traveler_type_id="{$lstVisitorType[i].tour_property_id} " href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i></a>
														</div>
													</li>
													{/if}
												{/if}
												{/section}
												</ul>
											</div>
										</div>
										<div class="date_picker_group relative">
											<input name="departure_date" readonly id="departure_date" now_next_departure="{$now_next_departure}" type="text" value="{$clsISO->converTimeToText5($str_first_start_date)}" class="form-control" placeholder="{$core->get_Lang('Check in')}" />
										</div>
										<div class="line line__check">
											<input type="hidden" name="tour_id" id="tour_id" value="{$tour_id}" />
											<input type="hidden" name="is_last_hour" id="is_last_hour" value="{$is_last_hour}" />
											<input type="hidden" name="tour_start_date" id="tour_start_date" value="{$tour_start_date}" />
											<input type="hidden" name="tour__class_check" id="tour__class_check" value="0" />
											<input type="hidden" name="number_adults" id="number_adults" value="1" />
											<input type="hidden" name="number_child" id="number_child" value="0" />
											<input type="hidden" name="number_infants" id="number_infants" value="0" />
											<input type="hidden" name="check_in_book" id="check_in_book" value="{$clsISO->converTimeToText6($str_first_start_date)}" />
											<input type="hidden" name="hidFind" value="hidAvaiable" />
											<input id="check_avaiable" name="check_avaiable" class="check_avaiable btn_yellow btn_main" type="button" value="{$core->get_Lang('Check')}"/>
										</div>
									</form>
								</div>
								<div id="TablePrice"></div>
							</section>
							{if $lstItineraryTour}
							<section id="itinerary" class="itinerary section__box">
								<h2 class="title_section">{$core->get_Lang('Itinerary')}</h2>
								<div class="itineraty__box d-flex">
									<div class="box__left">
										<ul class="mt-nav-tabs nav-stacked list_style_none" role="tablist">
											{section name=i loop=$lstItineraryTour}
											<li role="presentation">
												<a class="nav-link {if $smarty.section.i.first}active{/if}" id="tab{$smarty.section.i.iteration}"  data-bs-toggle="tab" data-bs-target="#tab{$smarty.section.i.iteration}-pane" role="tab" aria-controls="tab{$smarty.section.i.iteration}-pane" aria-selected="true">
													{if count($lstItineraryTour) ne '1'}
													{$core->get_Lang('Day')} {$smarty.section.i.iteration}
													{else}
													{$core->get_Lang('Full day')}
													{/if}
												</a>
											</li>
											{/section}
										</ul>
									</div>
									<div class="box__right">
										<div class="tab-content"><!-- overview tab content -->
											{section name=i loop=$lstItineraryTour}
											{assign var=tourItinerary_id value=$lstItineraryTour[i].tour_itinerary_id}
											{assign var=lst_transport_id value=$lstItineraryTour[i].transport}
											{assign var=lstItineraryTransport value=$clsTransport->getAll("is_trash=0 and is_online=1 and transport_id in ($lst_transport_id) order by order_no ASC",'transport_id,image,title')}
											{assign var=_ItineraryContent value=$lstItineraryTour[i].content}
											{assign var=_ItineraryImage value=$clsTourItinerary->getImageUrl($tourItinerary_id,$lstItineraryTour[i])}
											<div class="tab-pane fade {if $smarty.section.i.first}show active{/if}" id="tab{$smarty.section.i.iteration}-pane" role="tabpanel" aria-labelledby="tab{$smarty.section.i.iteration}" tabindex="0">
												<h3 class="title_Itinerary relative">
													<span class="title">
														{$clsTourItinerary->getTitleItineraryNew($tourItinerary_id,$lstItineraryTour[i])}
													</span>
													<span itinerary_id="{$lstItineraryTour[i].tour_itinerary_id}" class="day_Itinerary color_999 size16">
														{$clsISO->converTimeToText5($list_itinerary.$tourItinerary_id)}
													</span>
												</h3>
												<div class="detail tinymce_Content">
													{if $lstItineraryTransport && $clsISO->getCheckActiveModulePackage($package_id,'property','transport','default')}
													<div class="mb10">
														<span class="icon-transport-tour">
															{section name=k loop=$lstItineraryTransport|@count}
															<span title="{$clsTransport->getTitle($lstItineraryTransport[k].transport_id,$lstItineraryTransport[k])}">
																	<img src="{$clsTransport->getImageUrl($lstItineraryTransport[k].transport_id,$lstItineraryTransport[k])}" width="30" height="30" alt="{$clsTransport->getTitle($lstItineraryTransport[k].transport_id,$lstItineraryTransport[k])}"/>
															</span>
															{/section}
														</span>
													</div>
													{/if}
													{if $lstItineraryTour[i].is_show_image eq '1' and $_ItineraryImage ne ''}
													<div class="photo">
														<img class="photo275 image full-width height-auto"
															 src="{$_ItineraryImage}"/>
													</div>
													<div class="introItinerary">
														{$_ItineraryContent|html_entity_decode}
													</div>
													{else}
														{$_ItineraryContent|html_entity_decode}
													{/if}
													{if $clsISO->getCheckActiveModulePackage($package_id,'tour','hotel','customize') and $clsISO->getCheckActiveModulePackage($package_id,'hotel','default','default')}
													{assign var=listHotel value=$clsHotel->getListByItinerary($tour_id,$tourItinerary_id)}
													{if $listHotel[0].hotel_id ne ''}
													<div class="cleafix"></div>
													<div class="HotelTourAcc mtl0 d-flex">
														<span>{$core->get_Lang('Hotels')}:</span>
														<ul class="inline-block">
															{section name=h loop=$listHotel}
															{assign var=_HotelName value=$clsHotel->getTitle($listHotel[h].hotel_id)}
															{assign var=star_id value=$clsHotel->getOneField('star_id',$listHotel[h].hotel_id)}
															<li>
																<h4 class="mb5 size16">
																	<a target="_blank"
																	   href="{$clsHotel->getLink($listHotel[h].hotel_id)}"
																	   title="{$_HotelName}">{$_HotelName}</a>
																	{if $clsHotel->getImageStar($star_id) ne ''}
																		<img src="{$clsHotel->getImageStar($star_id)}"
																			 alt="{$_HotelName}"/>
																	{/if}
																</h4>
															</li>
															{/section}
														</ul>
													</div>
													{/if}
													{/if}
												</div>
											</div>
											{/section}
										</div>
									</div>
								</div>
                                {if $clsTour->getFileProgram($tour_id)}
                                <div class="itnerary_file">
                                    <div class="icon"><img src="{$URL_IMAGES}/icon/icon_file.svg" /></div>
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
							<section id="important__noted" class="important__noted section__box">
								<h2 class="title_section">{$core->get_Lang('Important noted')}</h2>
								<ul class="important__noted--box pd0">
									{if $_Inclusion}
									<li class="box_col list_style_none">
										<h3 class="title">{$core->get_Lang('Trip Inclusion')}</h3>
										<div class="box__right">
											<div class="list-check plus">{$_Inclusion}</div>
										</div>
									</li>
									{/if}
									{if $_Exclusion}
									<li class="box_col list_style_none">
										<h3 class="title">{$core->get_Lang('Trip Exclusions')}</h3>
										<div class="box__right">
											<div class="list-check minus">{$_Exclusion}</div>
										</div>
									</li>
									{/if}
									{if $_ThingToCarry}
									<li class="box_col">
										<h3 class="title">{$core->get_Lang('Thing To Carry')}</h3>
										<div class="box__right">
											<div class="list-dot">{$_ThingToCarry}</div>
										</div>
									</li>
									{/if}
									{if $_CancellationPolicy}
									<li class="box_col">
										<h3 class="title">{$core->get_Lang('Cancellation Policy')}</h3>
										<div class="box__right">
											<div class="list-dot">{$_CancellationPolicy}</div>
										</div>
									</li>
									{/if}
									{if $_RefundPolicy}
									<li class="box_col">
										<h3 class="title">{$core->get_Lang('Refund Policy')}</h3>
										<div class="box__right">
											<div class="list-dot">{$_RefundPolicy}</div>
										</div>
									</li>
									{/if}
									{if $_ConfirmationPolicy}
									<li class="box_col">
										<h3 class="title">{$core->get_Lang('Confirmation Policy')}</h3>
										<div class="box__right">
											<div class="list-dot">{$_ConfirmationPolicy}</div>
										</div>
									</li>
									{/if}
									{if $listCustomField[0].fieldvalue}
									<li class="box_col">
										{section name=i loop=$listCustomField}
										<h3 class="title">{$listCustomField[i].fieldname}</h3>
										<div class="box__right">
											<div class="list-dot">{$listCustomField[i].fieldvalue|html_entity_decode}</div>
										</div>
										{/section}
									</li>
									{/if}
								</ul>
							</section>
							{/if}
							{if $clsISO->getCheckActiveModulePackage($package_id,'reviews','default','default','tour')}
							<section id="reviews" class="reviews section__box bg_f7f7f7">
								<h2 class="title_section">{$core->get_Lang('Reviews')}</h2>
								{if $clsISO->getBrowser() ne 'phone'}
								<a class="btn_write_review btn_write_review_no_login fr" href="javascript:void(0);" title="{$core->get_Lang('Reviews')}">{$core->get_Lang('Reviews')}</a>
								{/if}
								{if $clsISO->getCheckActiveModulePackage($package_id,'member','default','default')}
								{$core->getBlock('review_Star')}
								{else}
								{$core->getBlock('review_Star_No_Login')}
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
									<div class="hotline">
										<a class="img_phone" title="Call now" href="tel:{$clsConfiguration->getValue('CompanyHotline')}">
											<img src="{$URL_IMAGES}/icon/telephone.png" alt="">
										</a>
										<div class="infor_contact">
											<span> {$core->get_Lang('Hot line ')} 24/7</span>
											<a title="{$core->get_Lang('Call now')}" href="tel:{$clsConfiguration->getValue('CompanyHotline')}">{$clsConfiguration->getValue('CompanyHotline')}</a>
										</div>
									</div>
								{/if}
							{/if}
						</div>
						{$core->getBlock('Lfaqscolbox')}
					</div>
				</div>
			</div>
			<div class="tour___foot"></div>
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
</script>
{$date_range_js_update}
<script src="{$URL_JS}/jquery.countdown.min.js?v={$upd_version}"></script>
<script src="{$URL_JS}/jquery-confirm.min.js?v={$upd_version}"></script>
{literal}
	<script>
		$(function(){
			$('input[readonly]').on('focus', function(ev) {
				$(this).trigger('blur');
			});

			var datet = date_range;
			var tips = ['', ''];
			var arrayable = list_start_date;
			$('#departure_date').datepicker({
				dateFormat: 'DD, dd/mm/yy',
				minDate: "+1d",
				maxDate: "+1Y",
				prevText: "Trước",
				nextText: "Sau",
				currentText: "Hôm nay",
				firstDay:1,
				monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
				dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
				beforeShowDay: function (date) {

					var datestring = jQuery.datepicker.formatDate('dd/mm/yy', date);
					var hindex = $.inArray(datestring, datet);

					var aindex = $.inArray(datestring, arrayable);
					var CheckArray = $.inArray(datet, arrayable);
					setTimeout(function(){
						if($check_tour_promotion == 1){
							appendPromotion();
						}
						if($check_tour_start_date==1){
							appendSeat();
						}
					}, 10);
					if(arrayable[0] != ''){
						if (aindex == -1) return [false, 'disable_day', Departure_date_invalid];
						if (CheckArray != -1){
							return [false, 'disable_day', Departure_date_invalid];
						}else {
							if (hindex > -1) {
								return [true, 'highlight', tips[hindex]];
							}
						}
						return [true];
					}else {
						if (hindex > -1) {
							return [true, 'highlight', tips[hindex]];
						}
						return [aindex == -1]
					}
				},
				onSelect: function(date) {
					loadTextDayCheckIn($(this).val());
					loadTextDayItinerary($(this).val(),$tour_id);
					var date = $(this).datepicker('getDate');
					var fomatDate= $.datepicker.formatDate("DD, dd/mm/yy", date);
					$('input[name=check_in_book]').val(fomatDate);
					$('#departure_date').attr('now_next_departure',fomatDate);
				}
			});
			function appendPromotion() {
				var parElem = $("#ui-datepicker-div");
				if(!$('.note_promotion', parElem).length){
					parElem.append("<div class='note_promotion inline-block size14'><span class='color_fb1111'>%</span> <span>{/literal}{$core->get_Lang('Promotions')}{literal} </span></div>");
				}
			}
			function appendSeat() {
				var parElem = $("#ui-datepicker-div");
				if(!$('.note_seat', parElem).length){
					parElem.append("<div class='note_seat inline-block size14'><span class='note_seat_child'></span> <span>{/literal}{$core->get_Lang('Available')}{literal}</span></div>");
				}
				if(!$('.note_seat_disable', parElem).length){
					parElem.append("<div class='note_seat_disable inline-block size14'><span class='note_seat_disable_child'></span> <span>{/literal}{$core->get_Lang('Not Available')}{literal}</span></div>");
				}
			}
		});

		$(function(){
			var $ww = $(window).width();
			var $price__BoxAZ = $('.price__Box').offset().top + 50;
			
			$(document).scroll(function(){
				if($price__BoxAZ <= $(this).scrollTop()) {
					$(".btn_box").addClass('fixed');
				} else {
					$(".btn_box").removeClass('fixed');
				}
			});

			$(document).on("click",".repick_travellers",function() {
			  $('#pick_travellers').trigger('click');
			});
			$(document).on("click",".trigger_contact",function() {
				$('.contact_now').trigger('click');
			});
			$('#pick_travellers').click(function(){
				var  $_this=$(this);
				if($_this.hasClass('open')){
					$('#check_number_travellers').hide();
					$_this.closest('.number_travellers').removeClass('open');
					$_this.removeClass('open');
				}else{
					$('#check_number_travellers').show();
					$_this.closest('.number_travellers').addClass('open');
					$_this.addClass('open');
				}
			});
			$(".btn_scroll ").click(function() {
				$('html, body').animate({
					scrollTop: $("#avaiable").offset().top - 111
				}, 600);
			});
			$('.upNum').click(function() {
				var number_person = $(this).val();
				var departure_date = $("input[name=departure_date]").val();
				var traveler_type_id = $(this).attr('traveler_type_id');
				var val = parseInt($("#national_visitor"+traveler_type_id).val());
				var max_number = parseInt($("#national_visitor"+traveler_type_id).attr('max-number'));
				var _type=$(this).attr('_type');
				val = val + 1;
				if (val > max_number) {
					$.alert({
						title: Warning,
						type: 'red',
						typeAnimated: true,
						content: Input_data_is_invalid,
					});
					val = max_number;
				}
				$("#national_visitor"+traveler_type_id).val(val);
				$('#'+_type).val(val);				
				if(_type == 'number_adults'){
					$tour_id=$('#tour_id').val(),
					GetMaxChildInfant($tour_id,val);					
				}
				getNumberPerson();
				return false;
			});
			$('.unNum').click(function() {
				var number_person = $(this).val();
				var departure_date = $("input[name=departure_date]").val();
				var traveler_type_id = $(this).attr('traveler_type_id');
				var val = parseInt($("#national_visitor"+traveler_type_id).val());
				var min_number = parseInt($("#national_visitor"+traveler_type_id).attr('min-number'));
				var _type=$(this).attr('_type');
				val = val - 1;
				if (val < min_number) {
					$.alert({
						title: Warning,
						type: 'red',
						typeAnimated: true,
						content: Input_data_is_invalid,
					});
					val = min_number;
				}
				$("#national_visitor"+traveler_type_id).val(val);
				$('#'+_type).val(val);
				if(_type == 'number_adults'){
					$tour_id=$('#tour_id').val(),
					GetMaxChildInfant($tour_id,val);					
				}
				getNumberPerson();
				return false;
			});
			$('#check_avaiable').click(function () {
				var $_this=$(this),
					$tour_id=$('#tour_id').val(),
					$number_adults=$('#number_adults').val(),
					$number_child=$('#number_child').val(),
					$number_infants=$('#number_infants').val(),
					$check_in_book=$('#check_in_book').val(),
					$departure_date=$('#departure_date').attr('now_next_departure');
				loadTablePrice($tour_id,$number_adults,$number_child,$number_infants,$check_in_book);
				$('#check_number_travellers').hide();
			});
		});
		$(document).on("change",".input_number",function(){
			var number_person = $(this).val();
			var max_person =$(this).attr('max-number');
			var departure_date = $("input[name=departure_date]").val();
			var tour_visitor_type_id = $(this).attr('tour_visitor_type_id');
			if(!isNaN(parseInt(number_person))){
				if(parseInt(number_person) >= 0 && parseInt(number_person) <= max_person){
					/*GetTourPriceByNumberGroup(type,tour_id,number_person,$("#tourclass").val(),departure_date,tour_visitor_type_id);*/
					$(this).val(parseInt(number_person));
					
					if($(this).hasClass('number_adults')){
						$tour_id=$('#tour_id').val(),
						GetMaxChildInfant($tour_id,parseInt(number_person));					
					}
				}else{
					$.alert({
						title: Warning,
						type: 'red',
						typeAnimated: true,
						content: Input_data_is_invalid,
					});
					$(this).val(1);
				}
			}else{
				$.alert({
					title: Warning,
					type: 'red',
					typeAnimated: true,
					content: Input_data_is_invalid,
				});

				$(this).val(1);
			}
			getNumberPerson();
		});
		$(document).on("change",".select--tour__class",function () {
			var $tour__class= $(this).val();
			$('#tour__class_check').val($tour__class);
			$('#check_avaiable').trigger('click');
		});

		$(document).on("change",".select_addon",function () {
			var adata = [];
			var $total_price_z= $('#grand_total').attr('grand_total');
			var $deposit = $('#deposit').val();
			var check_in_book = $('#check_in_book').val();
			var tour_id = $('#tour_id').val();
			$('.select_addon').each(function () {
				var $number_addon= $(this).val(),
					$addonservice_id=$(this).attr('addonservice_id');
				if($(this).val()>0){
					var data = {
						'number_addon':$number_addon,
						'addonservice_id':$addonservice_id,
					};
					adata.push(data);
				}
			});
			$.ajax({
				type: 'POST',
				url: path_ajax_script+'/index.php?mod='+mod+'&act=loadSelectAddon&lang='+LANG_ID,
				data: {'addons':adata,'total_price_z':$total_price_z,'deposit':$deposit,'check_in_book':check_in_book,'tour_id':tour_id},
				dataType: 'json',
				success: function (res) {
					$('#box__price__addon').html(res.html);
					$('#grand_total').html(res.grand_total);
					$('#price_deposit').val(res.price_deposit);
					$('#total_price_z').val(res.grand_total_z);
					$('#total_addon').val(res.total_addons);
				}
			});
		});
		$(document).mouseup(function(e) {
			var container = $("#check_number_travellers");
			var jconfirm_box = $(".jconfirm-open");
			var pick_travellers  = $("#pick_travellers");
			if (!container.is(e.target) && container.has(e.target).length === 0 && !jconfirm_box.is(e.target) && jconfirm_box.has(e.target).length === 0 && !pick_travellers.is(e.target) && pick_travellers.has(e.target).length === 0)
			{
				container.hide();
				$('.number_travellers').removeClass('open');
				$('.pick_travellers').removeClass('open');
			}
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
			},800);
		}
		$("#tabsk > ul li a").click(function (e) {
			e.preventDefault();
			goToByScroll($(this).attr("id"));
		});
		function getNumberPerson(){
			var $totalAdult = 0;
			$('.number_adults').each(function() {
				$totalAdult += parseInt($(this).val());
			});
			var $totalChild = 0;
			$('.number_child').each(function() {
				$totalChild += parseInt($(this).val());
			});
			var $totalInfants = 0;
			$('.number_infants').each(function() {
				$totalInfants += parseInt($(this).val());
			});
			if($totalChild==0 && $totalInfants==0) {
				$('#pick_travellers').val( Adults + ' x ' +$totalAdult);
			}else if($totalChild==0 && $totalInfants!=0){
				$('#pick_travellers').val( Adults + ' x ' +$totalAdult+', ' +Infants+' x '+$totalInfants);
			}else if($totalChild!=0 && $totalInfants==0){
				$('#pick_travellers').val( Adults + ' x ' +$totalAdult+', ' +Children+' x '+$totalChild);
			}else {
				$('#pick_travellers').val( Adults + ' x ' +$totalAdult+', ' +Children+' x '+$totalChild+', ' +Infants+' x '+$totalInfants);
			}
		}

		function loadTextDayCheckIn(date){
			$.ajax({
				'type': 'POST',
				'url' : path_ajax_script+'/index.php?mod='+mod+'&act=loadTextDay&lang='+LANG_ID,
				'data' : {"date":date},
				'dataType': 'html',
				'success':function(html){
					$("#departure_date").val(html);
					/*$("#departure_date").html(html);*/
				}
			});
		}
		function loadTextDayItinerary(date,tour_id){
			$.ajax({
				type: 'POST',
				url : path_ajax_script+'/index.php?mod='+mod+'&act=loadTextDayItinerary&lang='+LANG_ID,
				data : {"date":date,"tour_id":tour_id},
				dataType: 'json',
				success:function(res){
					$('.day_Itinerary').each(function () {
						var $itinerary_id=$(this).attr('itinerary_id');
						$(this).html(res.list_itinerary[$itinerary_id]);
					});
				}
			});
		}
		function loadTablePrice($tour_id,$number_adults,$number_child,$number_infants,$check_in_book){
            $('#TablePrice').html('<div class="lazy_loading"><img src="{/literal}{$URL_IMAGES}/icon/lazy_load_100.svg{literal}" alt=""></div>');
			var $_adata = {
				'tour_id': $tour_id,
				'number_adults': $number_adults,
				'number_child' : $number_child,
				'number_infants': $number_infants,
				'check_in_book' : $check_in_book,
			};
			$.ajax({
				type: 'POST',
				url: path_ajax_script+'/index.php?mod='+mod+'&act=loadTablePrice&lang='+LANG_ID,
				data : $('#form__avaiable').serialize(),
				dataType:'html',
				success: function(html){
					$('#TablePrice').html(html);
				}
			});
		}
		$tour_id=$('#tour_id').val(),
		GetMaxChildInfant($tour_id,1);
		function GetMaxChildInfant($tour_id,$number_adults){
			var tour_property_id = $('#li_adult').data('tour_property_id');
			$.ajax({
				type: 'POST',
				url: path_ajax_script+'/index.php?mod=tour_new&act=ajGetMaxChildInfant',
				data : {"tour_id":$tour_id,"number_adults":$number_adults,"tour_property_id":tour_property_id},
				dataType:'json',
				success: function(json){
					$(".number_child.input_number").attr('max-number',json.max_child);
					$(".number_child.input_number,.number_infants.input_number").val(0);
					getNumberPerson();
				}
			});
		}
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
