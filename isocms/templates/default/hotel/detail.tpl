{assign var=title_hotel value=$clsHotel->getTitle($hotel_id,$oneItem)}
{assign var=hotel__id value=$hotel_id}
{assign var=intro_hotel value=$oneItem.intro}
{assign var=overview_hotel value=$oneItem.overview}
{assign var=bookingPolicy_hotel value=$clsHotel->getHotelBookingPolicy($hotel_id,oneItem)}
{assign var = getImageStar value = $clsHotel->getStarNumber($hotel_id)}
{assign var = roomFaciliti value = $clsHotel->getRoomFaci($hotel_id, $oneItem)}

{if $clsISO->getCheckActiveModulePackage($package_id,'member','default','default')}
    {assign var= ratingValue value= $clsReviews->getRateAvg($hotel_id,'hotel')}
    {assign var= bestRating value= $clsReviews->getBestRate($hotel_id,'hotel')}
    {assign var= ratingCount value= $clsReviews->getToTalReview($hotel_id,'hotel')}
{else}
    {assign var= ratingValue value= $clsReviews->getRateAvgNoLogin($hotel_id,'hotel')}
    {assign var= bestRating value= $clsReviews->getBestRate($hotel_id,'hotel')}
    {assign var= ratingCount value= $clsReviews->getToTalReviewNoLogin($hotel_id,'hotel')}
{/if}

{math equation=x*2 assign="rating_value_of_10" x=$ratingValue}
{assign var=textRateAvg value=$clsReviews->getTextRateAvg($hotel__id,'hotel')}
{literal}
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Hotel",
            "name": "{/literal}{$title_hotel}{literal}",
            "description": "{/literal}{$intro_hotel|html_entity_decode|replace:'"':'\"'|strip_tags}{literal}",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "{/literal}{$_LANG_ID}{literal}",
                "addressLocality": "",
                "addressRegion": "{/literal}{$district_name}{literal}",
                "postalCode": "",
                "streetAddress": "{/literal}{$clsHotel->getAddress($hotel_id,$oneItem)}{literal}"
            },
            "telephone": "{/literal}{$oneItem.phone}{literal}",
            "photo": [
            {/literal}
            {section name=i loop=$listImage}
                {literal}
                    "{/literal}{$DOMAIN_NAME}{$listImage[i].image}{literal}",
                    {/literal}{/section}{literal}
                    "{/literal}{$DOMAIN_NAME}{$oneItem.image}{literal}"
                ]
            }
        </script>
    {/literal}

    <link rel="stylesheet" href="{$URL_CSS}/detail_hotel.css?v={$upd_version}" as="style" />

<section class="detail_hotel_body pageen stayBody computer">
    <div class="page_container page_detail_stay bg_fff">
        <nav class="breadcrumb-main  breadcrumb-cruise bg-default breadcrumb-more bg_fff">
            <div class="container">
                <ul class="breadcrumb hidden-xs mt0 bg_fff navbarHeads" itemscope
                    itemtype="https://schema.org/BreadcrumbList">
                    <li class="breadcrumb-nav-first">{$core->get_Lang('You are here')}</li>
                    <li class="breadcrumb-nav-list" style="margin-left: 24px;">
                        <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">
                                <span itemprop="name" class="breadcrumb-activeItem">{$core->get_Lang('Home')}</span></a>
                            <meta itemprop="position" content="1" />
                            <img style="margin-left: 8px;" src="{$URL_IMAGES}/hotel/arow.svg" alt="error">
                        </div>
                        <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="{$clsISO->getLink('hotel')}" title="{$core->get_Lang('Hotels')}">
                                <span itemprop="name" class="breadcrumb-activeItem">{$core->get_Lang('Hotels')}</span></a>
                            <meta itemprop="position" content="2" />
                            <img style="margin-left: 8px;" src="{$URL_IMAGES}/hotel/arow.svg" alt="error">
                        </div>

                        <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            {if $oneItem.country_id}
                                {assign var=title_country value=$clsCountryEx->getTitle($oneItem.country_id)}
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="{$clsCountryEx->getLink($oneItem.country_id,'Hotel')}"
                                title="{$title_country}">
                                <span itemprop="name" class="reb detail-hotel-contrys">{$title_country}</span></a>
                            <meta itemprop="position" content="3" />
                            <img style="margin-left: 8px;" src="{$URL_IMAGES}/hotel/arow.svg" alt="error">
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
                            <a itemprop="item" href="{$curl}" title="{$title_hotel}">
                                <span itemprop="name" class="reb detailHotesName">{$title_hotel}</span></a>
                            <meta itemprop="position" content="4" />
                        </li>
                    {else}
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
                            <a itemprop="item" href="{$curl}" title="{$title_hotel}">
                                <span itemprop="name" class="reb detailHotesName">{$title_hotel}</span></a>
                            <meta itemprop="position" content="3" />
                        </li>
                    {/if}
            </div>

            </li>
            </ul>
            <div class="navbarHeads-title">
				<div class="container">
                {if $oneItem.country_id}
                    {assign var=title_country value=$clsCountryEx->getTitle($oneItem.country_id)}
                    <h1 class="navbarHeads-li">
                        
                            <span itemprop="name" class="reb navbarHeads-nav">{$title_hotel}</span>
						<div class="border-icoshare submitted">
						 <div class="share_box">
							<i class="fa-regular fa-share-nodes fa-2xs"></i>                                
							 <script type="text/javascript" src="{$URL_JS}/jquery.sharer.js?v={$upd_version}"></script>
                                {assign var=link_share value=$curl}
                                {assign var=$title_share value=$title_blog}
                                {$core->getBlock('box_share')}
                            </div>
							</div>
                        <meta itemprop="position" content="4" />
                    </h1>
                {else}
                    <h1 class="navbarHeads-li">
                        <a href="{$curl}" title="{$title_hotel}">
                            <span itemprop="name" class="reb navbarHeads-nav">{$title_hotel}</span></a>
                        <meta itemprop="position" content="3" />
                    </h1>
                {/if}

                <div class="detailStartsHotels">
                    <div class="star_hotel">{$getImageStar}</div>
                </div>

                <div class="detailReviewsHotels">
                    {if !isset($ratingCount) || !$ratingCount}
                        <div class="reviews" style=""></div>
                    {else}
                        <div class="reviewsDetailHotels">
                            <div class="rate">{$ratingValue|number_format:1}</div>
                            <p>
                                {$textRateAvg}
                                <span>
                                    ({$ratingCount} {$core->get_Lang('reviews')})
                                </span>
                            </p>
                            <ul class="scroll-title">
                                <li><a class="ShowAllReviewDetailHotel" >{$core->get_Lang('Show all reviews')}</a></li>
                            </ul>
                        </div>
                    {/if}
                    

                    <div class="location_scorereview">
						 <div class="record_txt">
                    <div class="txt_score-review">
                <div class="border_score">
                    <p class="numb_scorestay">{$clsReviews->getReviews($hotel_id, 'avg_point')}</p>
                </div>
                <div class="txt_reviewsquality">
                <p class="txt_qualityreview">{$clsReviews->getReviews($hotel_id, 'txt_review')} <span class="txt_reviews">({$clsReviews->getReviews($hotel_id)} {$core->get_Lang('reviews')})</span></p>
					 <ul class="scroll-title">
                            <li><a class="ShowAllReviewDetailHotel" data-target=".scroll_reviews">{$core->get_Lang('Show all reviews')}</a></li>
                        </ul>
            </div>		
            </div>			 
            </div>
							<div class="txt_icolocation">
							<i class="fa-sharp fa-solid fa-location-dot" style="color: #9a9aa4;"></i>
							<p class="txt_location">{$clsHotel->getAddress($hotel_id,$arrHotel)}</p>
                            <a role="link" title="map" data-bs-toggle="modal" data-bs-target="#mapModal{$hotel_id}">{$core->get_Lang('Show map')}</a>

<!--
                              <div class="modal fade mapModal" id="mapModal{$hotel_id}" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">

                                   <div class="modal-dialog">

                                            <div class="modal-content">

                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                </div>

                                                <div class="modal-body">

                                                    <iframe src="https://maps.google.it/maps?q={$clsHotel->getAddressMapView($hotel_id,$oneItem)}&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
								
-->
								
								

								</div>
							
					
					</div>
					
					<div class="txt_numbt">
						<div class="txt_numbfromus">
						<p class="txt_fromnum">{$core->get_Lang('from')}</p>
						<p class="txt_txtus">{$core->get_Lang('US')} <span class="txt_numbus ms-1">${$clsHotel->getPriceAvg($hotel_id)}</span></p>
						</div>


						<div class="btn_contactus">
							<a href="{$PCMS_URL}contact-us.html" alt="contactus" title="contactus">
                               <button class="btn btn_viewtour">{$core->get_Lang('Contact')} <i
                                                        class="fa-regular fa-arrow-right" style="color: #ffffff;"></i>
                                  </button>
                                        </a>
							</div>
					</div>

                  </div>
</div>
                </div>
    </div>
    </nav>

    <div id="contentPage" class="content hotelPageDetail mt05">
        <div class="hotelDetail">
            <div class="container">
                <section class="section_box_image_top">
                    <div class="row">
                        <div class="col-lg-8">
							{section name=i loop=1 start=0}
                            <div class="big_image" data-fancybox="gallery-hotel" href="{$listImage[i].image}">
                                <img class="img_big" alt="{$clsHotelImage->getTitle($listImage[i].hotel_image_id,$listImage[i])}"
                                    src="{$clsHotelImage->getImage($listImage[i].hotel_image_id,841,420)}" />
                            </div>
							{/section}


                        </div>
                        <div class="col-lg-4">
                            <div class="list_image_small">
                                {section name=i loop=$listImage start=1}
                                    <div class="small_image" data-fancybox="gallery-hotel" href="{$listImage[i].image}" {if $smarty.section.i.index gt 4}hidden{/if}>
                                        <img class="img_small"
                                            alt="{$clsHotelImage->getTitle($listImage[i].hotel_image_id,$listImage[i])}"
                                            src="{$clsHotelImage->getImage($listImage[i].hotel_image_id,202,202)}" />

										{if $countlistImage > 5}
									<div class="view_all">
										+{$remaining}
										<i class="fa-solid fa-folder-image" style="margin-left: 8px"></i>
									</div>
								{/if}
                                    </div>
                                {/section}



                            </div>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="col-lg-8">
                        <section class="hotel_detail_main">
                            <div class="scroll-nav">
                                <ul class="scroll-title container">
                                    <li><a class="nav-link" data-target=".scroll_overview">{$core->get_Lang('Overview')}</a></li>
                                    <li><a class="nav-link" data-target=".scroll_accommodation">{$core->get_Lang('Accommodation')}</a></li>
                                    <li><a class="nav-link" data-target=".scroll_addons">{$core->get_Lang('Add-ons')}</a></li>
                                    <li><a class="nav-link" data-target=".scroll_inclusion">{$core->get_Lang('Inclusion')}</a></li>
                                    <li><a class="nav-link" data-target=".scroll_thing">{$core->get_Lang('Things to know')}</a></li>
                                    <li><a class="nav-link" data-target=".scroll_reviews">{$core->get_Lang('Reviews')}</a></li>

									<div class="txt_numbt">
						<div class="txt_numbfromus">
						<p class="txt_fromnum">{$core->get_Lang('from')}</p>
						<p class="txt_txtus">{$core->get_Lang('US')} <span class="txt_numbus">${$clsHotel->getPriceAvg($hotel_id)}</span></p>
						</div>
						<div class="btn_contactus">
							<a href="{$PCMS_URL}contact-us.html" alt="contactus" title="contactus">
                               <button class="btn btn_viewtour">{$core->get_Lang('Contact')} <i
                                                        class="fa-regular fa-arrow-right" style="color: #ffffff;"></i>
                                  </button>
                                        </a>
							</div>
					</div>
                                </ul>


                            </div>
                            <div id="Overview" class="scroll_overview">
                                {if !isset($overview_hotel) || !$overview_hotel}
                                {else}
                                    <div class="nav-content">
                                        <h2 class="nav-content-title title_overview">{$core->get_Lang('Overview')}</h2>

                                <div class="list_facilities">

                                    {section name=i loop=$listHotelFacilitiesFavorite}


                                    <div class="facilities_item align-items-center">

                                        <img width="16" height="16" src="{$listHotelFacilitiesFavorite[i].image}" onerror="this.src='{$URL_IMAGES}/hotel/detail/ico_nightclub.png'"/>



                                        <div class="facilities_name">

                                            {$clsProperty->getTitle($listHotelFacilitiesFavorite[i].property_id)}

                                        </div>

                                    </div>

                                    {/section}

										</div>

										 <div class="overview-content">{$overview_hotel|html_entity_decode}</div>
										<div class="btn_viewmoreless">{$core->get_Lang('View more')}</div>
                                    </div>


										</div>
								{/if}
                        </section>

                    </div>
                    <div class="col-lg-4">
                        <section class="box_right_info_hotel sticky_fix">
                            <div class="box_info_right_top">
								<h3 class="txt_bestprice">{$core->get_Lang('Best price for you')}</h3>
									<div class="price_from_text">
                                        <div class="from_text">
                                            {$core->get_Lang('Avg price package')}
                                        </div>
                                        <div class="val_price">
                                           <p class="txt_prival">US <h3 class="numb_prival">{if $clsHotel->getPriceAvg($hotel_id)}
                            ${$clsHotel->getPriceAvg($hotel_id)}
                        {else}
                            {$core->get_Lang('Contact us')}
                        {/if}</h3></p>
                                        </div>
								<p class="txt_pricepax">Price includes package</p>
                                </div>
							<div class="btn_contactus">
								 <input type="hidden" name="hotel_id" value="{$hotel_id}">
                                    <input type="hidden" name="ContactHotel" value="ContactHotel">
							<a href="{$PCMS_URL}contact-us.html" alt="contactus" title="contactus">
                               <button class="btn btn_contactprice">{$core->get_Lang('Contact')} <i
                                                        class="fa-regular fa-arrow-right" style="color: #ffffff;"></i>
                                  </button>
                                        </a>
							</div>
                            </div>
                           
                        </section>
                    </div>
                </div>

                <div id="Accommodation" class="scroll_accommodation">
                    {if !isset($oneItem) || !$oneItem}
                    {else}
                        <div class="nav-content">
                            <div class="nav-content-title tabs2">
                                <h2 class="tabs2-title title-au">{$core->get_Lang('Accommodation')}</h2>
                            </div>
                            <div class="Accommodation-txt">
                                {$oneItem.booking_policy|unescape}
                            </div>
							
<div class="border-accomm">
    <div class="row">
        <div class="col-md-4">
            {section name=i loop=$lstHotelProperty max=3}
            <div class="column-content">
                <h4>{$lstHotelProperty[i].title}</h4>
                {$clsProperty->getTitleByCatId($lstHotelProperty[i].hotel_property_id, $hotel_id, "FE")}
            </div>
			{/section}
        </div>
        <div class="col-md-4">
            {section name=i loop=$lstHotelProperty start=3 max=2}
            <div class="column-content">
                <h4>{$lstHotelProperty[i].title}</h4>
                {$clsProperty->getTitleByCatId($lstHotelProperty[i].hotel_property_id, $hotel_id, "FE")}
            </div>
			{/section}
        </div>
        <div class="col-md-4">
            {section name=i loop=$lstHotelProperty start=5}
                <div class="column-content">
                    <h4>{$lstHotelProperty[i].title}</h4>
                    {$clsProperty->getTitleByCatId($lstHotelProperty[i].hotel_property_id, $hotel_id, "FE")}
                </div>
            {/section}
        </div>
    </div>
</div>

                        </div>
                    {/if}

                </div>
            </div>
        </div>
    </div>

    <div id="Add-ons" class="scroll_addons">
        <div class="prix">
			<div class="container">
            <div class="prix-title">
                <h2 class="title-prix">{$core->get_Lang('Add-ons')}</h2>
                <p>{$core->get_Lang('We suggest you some')}</p>
                     <section class="sec_relate_box">
                    <div class="content">
						<div class="top-row">
							{section name = i loop=$lstTour}
						<div class="item_content">
								<div class="list_extensions d-flex flex-direction-column">
									<div class="item_extensions d-flex justify-content-between align-items-start">
                                <div class="div_img img_extensions">
                                    <img src="{$clsTour->getImage($lstTour[i].tour_id,243,168,$arrTour)}" alt="Image">
                                </div>
                                <div class="content_extensions d-flex justify-content-start align-items-start gap-16 flex-direction-column">
                                    <a href="{$clsTour->getLink($lstTour[i].tour_id)}" class="title_extentions ellipsis_2 SF-Pro-Medium">
										<p class="title_addon">
                                        {$lstTour[i].title}</p>
                                    </a>
                                    <div class="money">
                                        <span class="txt_money_from">{$core->get_Lang('Form')}</span>
                                        <span class="txt_money_text">{$core->get_Lang('US')}</span>
										<span class="under_numbprice">${$lstTour[i].min_price}</span>
                                        <span class="txt_money_number">${$clsTour->getPriceAfterDiscount($lstTour[i].tour_id)}</span>
                                    </div>
                                </div>
                            </div>
								</div>
							</div>
							{/section}
							
							<button class="view-more-btn" style="display: none;">{$core->get_Lang('View more')}</button> 
    						<button class="view-less-btn" style="display: none;">{$core->get_Lang('View less')}</button>
							</div>

						 

						</div>
                   </section>

                
            </div>
        </div>
    </div>
		</div>
    <div id="Inclusion" class="scroll_inclusion">
        <div class="prix">
			<div class="container">
            {if !isset($oneItem.other_policy) || !$oneItem.other_policy}
            {else}
                <div class="demander-title">
                    <h2 class="txt_inclus">{$core->get_Lang('Inclusion')}</h2>
                    <div class="Inclusion-txt">
                        {$oneItem.other_policy|html_entity_decode}

                    </div>
                </div>
            {/if}
        </div>
    </div>
		</div>
		</div>
    <div id="Things" class="scroll_thing">
        <div class="Things">
			<div class="container">
            <h2 class="Things-prix">{$core->get_Lang('Things to know')}</h2>

            <div class="nav-content">
                <div class="nav-content-title tabs2">
                    {assign var=_CheckInRoom value=$clsHotel->getCheckInRoom($hotel_id,$oneItem)}
					
                    {assign var=_CheckOutRoom value=$clsHotel->getCheckOutRoom($hotel_id,$oneItem)}
					
                    {assign var=_BookingPolicy value=$clsHotel->getBookingPolicy($hotel_id,$oneItem)}
					
                    {assign var=_ChildPolicy value=$clsHotel->getChildPolicy($hotel_id,$oneItem)}
					
                    {assign var=_CancellationPolicy value=$clsHotel->getCancellationPolicy($hotel_id,$oneItem)}
					
					{assign var=_ExcludesPolicy value=$clsHotel->getExcludesPolicy($hotel_id,$oneItem)}
					
                    {assign var=_OtherPolicy value=$clsHotel->getOtherPolicy($hotel_id,$oneItem)}
					{if $_CheckInRoom || $_BookingPolicy || $_ChildPolicy || $_CancellationPolicy || $_OtherPolicy ||$listCustomField}
                   
                        <section class="sec_info_hotel">
                            <div class="important_note_box">
                                {if $_CheckInRoom}
                                    <div class="important_note_item">
                                        <h3 class="note_title check_in">
											<i class="fa-solid fa-arrow-right-to-bracket fa-xl" style="color: #004ea8; margin-right:8px"></i>
                                            {$core->get_Lang('Check-in')}</h3>
                                        <div class="box_right">
                                            <p class="box_right_content">{$_CheckInRoom}
                                            </p>
                                        </div>
                                    </div>
                                {/if}
								
								   {if $_CheckOutRoom}
                                    <div class="important_note_item">
                                        <h3 class="note_title check_out">
											<i class="fa-solid fa-arrow-left-from-bracket fa-xl" style="color: #004ea8; margin-right:8px"></i>
                                            {$core->get_Lang('Check-out')}</h3>
                                        <div class="box_right">
                                            <p class="box_right_content">{$_CheckOutRoom}
                                            </p>
                                        </div>
                                    </div>
                                {/if}
								
								

                                {if $_ExcludesPolicy ne ''}
                                    <div class="important_note_item">
                                        <h3 class="note_title booking_policy">
											<i class="fa-solid fa-circle-info fa-xl" style="color: #004ea8; margin-right:8px"></i>
                                            {$core->get_Lang('Excludes')}</h3>
                                        <div class="box_right">
                                            <p class="box_right_content">{$_ExcludesPolicy}</p>
                                        </div>
                                    </div>
                                {/if}
								
								{if $_CancellationPolicy ne ''}
                                    <div class="important_note_item">
                                        <h3 class="note_title cancel_prepay">
											<i class="fa-solid fa-circle-info fa-xl" style="color: #004ea8; margin-right:8px"></i>
                                            {$core->get_Lang('Cancel reservation/ Prepay')}</h3>
                                        <div class="box_right">
                                            <p class="box_right_content">{$_CancellationPolicy}</p>
                                        </div>
                                    </div>
                                {/if}

                                {if $_ChildPolicy ne ''}
                                    <div class="important_note_item">
                                        <h3 class="note_title bed">
											<img src="{$URL_IMAGES}/hotel/detail/icon_baby.png" style="margin-right: 8px"/>
                                            {$core->get_Lang('Children and beds')}
                                        </h3>
                                        <div class="box_right">
                                            <p class="box_right_content">{$_ChildPolicy}</p>
                                        </div>
                                    </div>
                                {/if}

                                
<!--
                                {if $_OtherPolicy ne ''}
                                    <div class="important_note_item">
                                        <h3 class="note_title other_regulation">
                                            {$core->get_Lang('Other regulations')}</h3>
                                        <div class="box_right">
                                            <p class="box_right_content">{$_OtherPolicy}</p>
                                        </div>
                                    </div>
                                {/if}
-->

                                {if $listCustomField}
                                    {section name=i loop=$listCustomField}
                                        {if $listCustomField[i].fieldvalue ne ''}
                                            <div class="important_note_item">
                                                <h3 class="note_title">{$listCustomField[i].fieldname}</h3>
                                                <div class="box_right">
                                                    <p class="box_right_content">
                                                        {$listCustomField[i].fieldvalue|html_entity_decode}</p>
                                                </div>
                                            </div>
                                        {/if}
                                    {/section}
                                {/if}
                            </div>
                        </section>
                    {/if}
                </div>
                <div class="nav-content-data">

                </div>
            </div>
        </div>
    </div>
		</div>
    <div id="Reviews" class="scroll_reviews">
        <div class="Reviews">
			<div class="container">
            <div class="Reviews-title">
                <h2 class="txt_reviews_ct">{$core->get_Lang('Reviews')}</h2>
                <div class="Reviews-content_txt">
                    <div class="reviews_box_top">
                        <div class="row review-evaluation">
                            <div class="col-lg-3 measure-evaluation">
                                <div class="box_score">

                                    <div class="semi-donut margin cirle_semi" style="--percentage : {($clsReviews->getReviews($oneItem.hotel_id, 'avg_point') / 5) * 100}; --fill: #FFBA55 ;">
                                    </div>
                                    <div class="score_text">
                                        <h3>{$clsReviews->getReviews($oneItem.hotel_id, 'avg_point')}</h3>
                                        <p class="txt_score">{$clsReviews->getReviews($oneItem.hotel_id, 'txt_review')}</p>
                                        <p class="number_review">
                                            ({$clsReviews->getReviews($hotel_id)} {$core->get_Lang('reviews')})
                                        </p>
                                    </div>
                                </div>
                            </div>
							
                            <div class="col-lg-7 measure-evaluation-txt">
								{section name=i loop=$reviewProgress}
                                <div class="box_rate_score">
                                    <label for="" class="lbl_rate_score">{$reviewProgress[i].reviews}</label>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="progress">
                                             <div class="progress-bar" role="progressbar"
                                     aria-valuemin="0" aria-valuemax="100" style="width:{$reviewProgress[i].count_percent}%">
                                </div>
                                        </div>
                                        <span>{$reviewProgress[i].count}</span>
                                    </div>
                                </div>
                                {/section}

                                <a class="view_all_review btn_write_review btn_write_review_login Write-reviews"
                                    href="javascript:void(0);"
                                    title="{$core->get_Lang('Reviews')}">{$core->get_Lang('Write reviews')}</a>
                            </div>
                        </div>
                    </div>
                    <div class="box_write_review">
                        <div class="clearfix mb20"></div>
									{$core->getBlock('review_stay_No_Login')}
                    </div>
       				 <div class="list_reviews">

           					 {if $lstReviews}

           					 {section name=i loop=$lstReviews}

                				<div class="review">

                   				 <div class="person_review">

                        {assign var=numStars value=$lstReviews[i].rates}

                        <div class="avatar_custom" style="background-color:

                        {php}

                                $bg_colors = ['#F5F5F5', '#E0F7FA', '#FFF8E1', '#E8F5E9', '#FCE4EC', '#FFFDE7', '#F3E5F5'];

                                echo $bg_colors[array_rand($bg_colors)];

                        {/php}">{strtoupper(substr($lstReviews[i].fullname, 0, 2))}</div>

                        <div class="name_reviewer">

                            <p class="name">{$lstReviews[i].fullname}</p>

                            <p class="time_review">{$lstReviews[i].review_date|date_format:"%d %b, %Y"}</p>

                        </div>

                    </div>

                    <div class="stars_review">

                        {assign var=numStars value=$lstReviews[i].rates}

                        {assign var=remainingStars value=$maxStars - $numStars}

                        {section name=j loop=$numStars}

                            <i class="fa-solid fa-star"></i>

                        {/section}

                        {section name=k loop=$remainingStars}

                            <i class="fa-regular fa-star"></i>

                        {/section}

                    </div>

                    <p class="title_review">{$lstReviews[i].title}</p>

                    <p class="content_review">{$lstReviews[i].content}</p>

                    <p class="view_more_review">View more</p>

                </div>

            {/section}
						 




		 

            {else}

                <div>Not reviews yet</div>

            {/if}

        </div>
					
					
                </div>
            </div>

        </div>
    </div>
		</div>

    {$core->getBlock('box_service_ad')}

    {if $lstHotelRelated}
        <section class="sec_relate_box">
            <div class="headBox">
				<div class="container">
                <h2 class="sec_relate_title text-left">{$core->get_Lang('Maybe you are interested')}</h2>
            </div>
            <div class="container">
                <div class="sec_relate_box-slide owl-carousel_overview owl-carousel">
                    {section name=i loop=$lstHotelRelated}
                        {assign var=hotel_id value = $lstHotelRelated[i].hotel_id}
                        {assign var=arrHotel value = $lstHotelRelated[i]}
                        {$clsISO->getBlock('hotelRelateBox',["hotel_id"=>$hotel_id,"arrHotel"=>$arrHotel])}
                    {/section}
                </div>
            </div>
        </section>
    {/if}
    </div>
		</div>


<section class="recently_hotel">
	<div class="txt_recentlyhotel">
		<div class="container">
                        <h2 class="recentlyViewed">{$core->get_Lang('Recently viewed')}</h2>
                        <div class="recentlyViewed-dev">
                            <div class="clicked-details">
							<div class="sec_relate_box-slide owl-carousel_overview owl-carousel">
							</div>
                        </div>
			</div>


                        <div class="recentlyViewed-mobile">
                                <div class="clicked-details">
								<div class="sec_relate_box-slide owl-carousel_overview owl-carousel">
                                </div>
                            </div>
                        </div>

                        <button class="btnShowViewed">{$core->get_Lang('More')}</button>

                        <button class="btnNoneViewed">{$core->get_Lang('Collapse all')}</button>


                    </div>
		</div>

</section>


    {$core->getBlock('customer_review')}
    {$core->getBlock('also_like')}

</section>



    <script>
		
		if ($('.unika_header').hasClass('unika_header_2')) {
                $('.unika_header').removeClass('unika_header_2');
            }
		
		            window.onscroll = function() {

                if (window.scrollY >= 630) {

                    $('.class-tour').addClass('list_nav_fixed');

                    $(".unika_true").removeClass('unika_header');

                } else {

                    $('.class-tour').removeClass('list_nav_fixed');

                }

            }

var otherPolicy = '{$oneItem.other_policy|unescape}';

    if (otherPolicy.length > 0) {
        $('.Inclusion-txt li').prepend('<img class="Inclusion-icon" src="/isocms/templates/default/skin/images/hotel/checkInclus.svg" alt="error">');
    }
		
	if (otherPolicy.length > 0) {
        $('.Inclusion-txt p').prepend('<img class="Inclusion-icon" src="/isocms/templates/default/skin/images/hotel/checkInclus.svg" alt="error">');
    }
		
		
    if (otherPolicy.length > 0) {
    $('.Inclusion-txt .description').each(function() {
        if (!$(this).hasClass('description--house-rule')) {
            $(this).prepend('<img class="Inclusion-icon" src="/isocms/templates/default/skin/images/hotel/checkInclus.svg" alt="error">');
        }
    });
}
    if (otherPolicy.length > 0) {
        $('.Inclusion-txt span').prepend('<img class="Inclusion-icon" src="/isocms/templates/default/skin/images/hotel/checkInclus.svg" alt="error">');
    }

		document.addEventListener('DOMContentLoaded', function () {
    const topRow = document.querySelector('.top-row');
    const items = topRow.querySelectorAll('.item_content');
    const viewMoreBtn = topRow.querySelector('.view-more-btn');
    const viewLessBtn = topRow.querySelector('.view-less-btn');
    const itemsToShow = 4;

    function toggleItems() {
        for (let i = itemsToShow; i < items.length; i++) {
            items[i].style.display = items[i].style.display === 'none' ? 'block' : 'none';
        }

        viewMoreBtn.style.display = viewMoreBtn.style.display === 'none' ? 'block' : 'none';
        viewLessBtn.style.display = viewLessBtn.style.display === 'none' ? 'block' : 'none';
    }

    if (items.length > itemsToShow) {
        viewMoreBtn.style.display = 'block'; 

        for (let i = itemsToShow; i < items.length; i++) {
            items[i].style.display = 'none';
        }
    }

    viewMoreBtn.addEventListener('click', toggleItems);
    viewLessBtn.addEventListener('click', toggleItems);
});

		
    </script>


    {literal}
        <script>
            $(".read_more_review").click(function() {
                var item_review_clone = $(this).closest('.review_item').clone();
                $("#mdReview").find('.box_content').html(item_review_clone);
                $("#mdReview").find(".content_review_short,.read_more_review").hide();
                $("#mdReview").find(".content_review_full").show();
                var bg_color = $(this).closest('.review_item').find('.avatar').css('background-color');
                $("#mdReview").find(".avatar").css('background-color', bg_color);
            });
            Fancybox.bind("[data-fancybox]", {

            });
            $('.list_customer_review_items').owlCarousel({
                loop: false,
                margin: 30,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        margin: 20,
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1025: {
                        items: 3
                    }
                }
            });

            $('.related_slides').owlCarousel({
                loop: false,
                margin: 30,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        margin: 20,
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    992: {
                        items: 4
                    },
                    1025: {
                        items: 4
                    }
                }
            });

    $(window).scroll(function() {
        if ($(this).scrollTop() >= 500) {
            $('.scroll-nav').addClass('scroll-nav_sticky');
//			$("#header_fixed").removeClass('nah_header_sticky');
			$('#header_fixed').hide();

			
			
        } else {
            $('.scroll-nav').removeClass('scroll-nav_sticky');
			$('#header_fixed').show();

			

        }
    });
			
			var link = document.querySelector('link[href="vietisocms.css"]');


  			if (link) {
				link.parentNode.removeChild(link);
			  }



			$(document).ready(function() {
  $('.scroll-title a').on('click', function(event) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định

    var targetId = $(this).attr('href').substring(1); // Lấy ID mục tiêu (loại bỏ dấu #)
    var $targetElement = $('#' + targetId);

    if ($targetElement.length) {
      var targetOffset = $targetElement.offset().top;
      var headerHeight = $('.header').outerHeight() || 0; // Điều chỉnh nếu có header
      targetOffset -= headerHeight;

      $('html, body').animate({
        scrollTop: targetOffset
      }, 800); // Thời gian cuộn (milliseconds)
    }

    // Loại bỏ #overview khỏi URL (nếu có)
    if (window.location.hash) {
        history.replaceState("", document.title, window.location.pathname + window.location.search);
    }
  });

  // Xử lý trường hợp người dùng nhấp vào liên kết từ một trang khác
  if (window.location.hash) {
    var initialTargetId = window.location.hash.substring(1);
    var $initialTargetElement = $('#' + initialTargetId);

    if ($initialTargetElement.length) {
      var initialTargetOffset = $initialTargetElement.offset().top;
      var headerHeight = $('.header').outerHeight() || 0; 
      initialTargetOffset -= headerHeight;

      $('html, body').animate({
        scrollTop: initialTargetOffset
      }, 0); // Cuộn ngay lập tức (không có animation)

      history.replaceState("", document.title, window.location.pathname + window.location.search);
    }
  }
});

const links = document.querySelectorAll('.nav-link');

links.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent default link behavior (jumping to #)

        $('.nav-link').removeClass('active');
        $(event.currentTarget).addClass('active');

        const targetClass = event.currentTarget.getAttribute('data-target');
        const targetElement = document.querySelector(targetClass);
        
        if (targetElement) {
            const offset = 80; // Adjust this value for the desired offset
            const scrollPosition = targetElement.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({
                top: scrollPosition, 
                behavior: 'smooth'
            });
        }
    });
});

			document.addEventListener('DOMContentLoaded', function() {
    // Chọn tất cả các liên kết có data-target=".scroll_reviews"
    const links = document.querySelectorAll('[data-target=".scroll_reviews"]');
    const reviewsNavLink = document.querySelector('.nav-link[data-target=".scroll_reviews"]'); // Lấy liên kết Reviews
    const overviewNavLink = document.querySelector('.nav-link[data-target=".scroll_overview"]'); // Lấy liên kết Overview

    links.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();

            // Xử lý cho các liên kết trong menu (nếu cần)
            if (link.classList.contains('nav-link')) {
                // Xóa class 'active' khỏi tất cả các liên kết trong menu
                document.querySelectorAll('.nav-link').forEach(navLink => navLink.classList.remove('active'));

                // Thêm class 'active' vào liên kết được click
                link.classList.add('active');
            }

            // Thêm class 'active' cho liên kết Reviews khi click vào "Show all reviews"
            if (!link.classList.contains('nav-link')) {
                reviewsNavLink.classList.add('active');

                // Ẩn class 'active' của liên kết Overview
                overviewNavLink.classList.remove('active');
            }

            // Cuộn đến phần tử đích
            const targetElement = document.querySelector('.scroll_reviews');
            if (targetElement) {
                const targetRect = targetElement.getBoundingClientRect();
                window.scrollTo({
                    top: targetRect.top + window.pageYOffset - 250,
                    behavior: 'smooth'
                });
            }
        });
    });
});
			
			// Lấy tất cả các liên kết trong thanh trượt
const navLinks = document.querySelectorAll('.scroll-nav a.nav-link');

navLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault(); // Ngăn hành vi mặc định của liên kết

        const targetId = link.getAttribute('data-target');
        const targetElement = document.querySelector(targetId);

        // Lấy vị trí của phần tử mục tiêu
        const targetRect = targetElement.getBoundingClientRect();

        // Cuộn phần tử cha (scroll-nav) để targetElement hiển thị ở vị trí mong muốn
        window.scrollTo({
            top: targetRect.top + window.pageYOffset - 230, // Điều chỉnh vị trí cuộn
            behavior: 'smooth' // Cuộn mượt mà
        });
    });
});

			
			
			$(window).scroll(function() {
  requestAnimationFrame(function() {
    if ($(window).scrollTop() === 0) {
      $('.unika_header').removeClass('unika_header_2 !important');
    } 
  });
});
			
var prevScrollpos = window.pageYOffset;
$(window).scroll(function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    $('.unika_header').addClass('fixed'); // Thêm lại lớp 'fixed' khi cuộn lên
  } else {
    $('.unika_header').removeClass('fixed'); // Loại bỏ lớp 'fixed' khi cuộn xuống
  }
  prevScrollpos = currentScrollPos;
});
			
            $('.review').each(function() {

                var moreText = $(this).find('.content_review');

                var toggleButton = $(this).find('.view_more_review');



                if (moreText[0].scrollHeight <= 72) {

                    toggleButton.hide(); // Hide the button if content height is less than or equal to 50px

                }

            });

            $('.view_more_review').click(function() {

                var moreText = $(this).prev('.content_review');



                if (moreText.hasClass('expanded')) {

                    moreText.removeClass('expanded');

                    $(this).text('View More');

                    moreText.css({'max-height': '72px'});

                } else {

                    moreText.addClass('expanded');

                    $(this).text('View Less');

                    moreText.css({'max-height': moreText[0].scrollHeight + 'px', '-webkit-line-clamp': 'unset'});

                }

            });


			
			window.addEventListener('load', function() {
  const overviewContent = document.querySelector('.overview-content');
  const viewMoreLessBtn = document.querySelector('.btn_viewmoreless');

  const lineHeight = parseFloat(getComputedStyle(overviewContent).lineHeight);
  const maxLines = 6;


  overviewContent.style.maxHeight = (lineHeight * maxLines) + 'px';
  viewMoreLessBtn.textContent = 'View more';
  viewMoreLessBtn.style.display = 'block';

  viewMoreLessBtn.addEventListener('click', function() {
    if (overviewContent.style.maxHeight !== 'none') { 
      overviewContent.style.maxHeight = 'none';
      viewMoreLessBtn.textContent = 'View less';
    } else {
      overviewContent.style.maxHeight = (lineHeight * maxLines) + 'px';
      viewMoreLessBtn.textContent = 'View more';
    }
  });
});
			
			// Chờ cho đến khi tài liệu HTML được tải đầy đủ
document.addEventListener('DOMContentLoaded', function() {
  // Chọn tất cả các phần tử có lớp 'modal-backdrop'
  const modalBackdrops = document.querySelectorAll('.modal-backdrop');

  // Nếu có nhiều hơn 1 phần tử, giữ lại phần tử đầu tiên và xóa các phần tử còn lại
  if (modalBackdrops.length > 1) {
    for (let i = 1; i < modalBackdrops.length; i++) {
      modalBackdrops[i].remove();
    }
  }
});


        </script>
    {/literal}

