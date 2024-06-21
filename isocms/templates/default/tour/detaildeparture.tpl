<script src="{$URL_JS}/jquery-confirm.min.js"></script>
{assign var=maxStars value=5}
<main>
    <section class="listtourdetail_breadcrumb">
        <div class="breadcrumb_list">
            <div class="container">
                <div class="breadcrumb">
                    <h2 class="txt_youarehere">You are here:</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{PCMS_URL}" title="{$core->get_Lang('Home')}">Home</a></li>
                        {if $clsCountry->getTitle($country_id)}
                        <li class="breadcrumb-item"><a href="{$clsCountry->getLink($country_id, 'tour')}"
                                                       title="{$core->get_Lang('Vietnam')}">{$clsCountry->getTitle($country_id)}</a>
                        </li>
                        {/if}
                        {if $clsTourCat->getTitle($travel_style_id)}
                        <li class="breadcrumb-item"><a href="{$clsTourCat->getLink($travel_style_id,'','home')}"
                                                       title="{$core->get_Lang('Honeymoon')}">{$clsTourCat->getTitle($travel_style_id)}</a></li>
                        {/if}
                        <li class="breadcrumb-item active" aria-current="page">{$clsTour->getTitle($tour_id)}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="txtimg_intro_detailtour">
        <div class="container">
            <div class="txt-share-detailtour">
                <h2 class="txt_detailhotel">{$clsTour->getTitle($tour_id)}</h2>
                <div class="txt_numbpricetour">
                    <p class="txt_numbtour">From US <span class="under_numbprice">${$oneItem.min_price}</span> <span
                                class="number_pricetour">${$clsTour->getPriceAfterDiscount($tour_id)}</span> /pax </p>
                </div>
            </div>

            <div class="d-flex align-items-center score_reviewtour">
                <span class="border_score">{$clsReviews->getReviews($tour_id, 'avg_point')}</span>
                <span class="txt_score">{$clsReviews->getReviews($tour_id, 'txt_review')} </span> <span class="txt_reviewstour"> - {$clsReviews->getReviews($tour_id)} reviews</span>
            </div>

            <div class="img_detailtour">
                <div class="row">
                    <div class="col-md-8">
                        <div class="image_tourdetail">
                            <div id="gallery_detail_tour" class="owl-carousel">
                                {section name=i loop=$lstTourImage}
                                <img class="img_tourdetail" data-fancybox="gallery_detail_tour" src="{$clsTourImage->getImage($lstTourImage[i].tour_image_id, 841, 552)}">
                                {/section}
                            </div>
                            {if $lstTourImage}<div class="image-counter" data-fancybox="gallery_detail_tour" href="{$lstTourImage[0].image}">+{$lstTourImage|count} <i class="fas fa-image"></i></div>{/if}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border-locationinfo">
                            <div class="location-info">
                                <p class="txt_location">
                                    <i class="fa-light fa-location-dot" style="color: #111d37;"></i>
                                    Form {$clsTourDestination->getByCountry($tour_id, "startFinish_detail")}
                                </p>
                                <p class="txt_location">
                                    <i class="fa-regular fa-clock-three" style="color: #111d37;"></i>
                                    <span class="bold_txtlocation">Duration:</span>
                                    {if $oneItem.duration_custom}
                                        {$oneItem.duration_custom}
                                    {else}
                                        {$oneItem.number_day} {if $oneItem.number_day lt 2}day {else} days {/if}
                                    {/if}
                                </p>
                                <p class="txt_location">
                                    <i class="fa-light fa-location-dot" style="color: #111d37;"></i>
                                    <span class="bold_txtlocation">Place:</span> {$clsTourDestination->getByCountry($tour_id, 'all_city')}
                                </p>
                                <p class="txt_location">
                                    <i class="fa-solid fa-bell-concierge" style="color: #000111;"></i>
                                    <span class="bold_txtlocation">Meals:</span> {$clsTourItinerary->getGoodMeal($tour_id)}
                                </p>
                                <p class="txt_location">
                                    <i class="fa-light fa-users" style="color: #111d37;"></i>
                                    <span class="bold_txtlocation">Group size:</span> {$clsTourOption->getMinMaxGroupSizeAdult($tour_id)}
                                </p>
                                <p class="txt_location">
                                    <i class="fa-regular fa-circle-dot" style="color: #111d37;"></i>
                                    <span class="bold_txtlocation">Operated in:</span> {$clsTourProperty->getListTourProperty($oneItem.list_tour_guide_id)}
                                </p>
                            </div>
                            <div class="txt_button_excluing">
                                <p class="excluding_explore">Excluding international flights</p>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="d-flex flex-column flex-sm-row justify-content-center" style="gap: 16px; width: 100%">
                                        <button class="btn btn-request-book btn-hover-home">Request a quote</button>
                                        <button class="btn btn-request-book btn-hover-home">Book it now</button>
                                    </div>
                                    {if $oneItem.file_programme}
                                    <button type="button" class="btn btn-download" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Download itinerary
                                    </button>
                                    {/if}
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="list_class_tour">
        <div class="">
            <div class="class-tour">
                <div class="top-section container">
                    <ul class="nav list_nav">
                        <li class="nav-item"><a class="nav-link active" data-target=".section_overview">Overview</a></li>
                        <li class="nav-item"><a class="nav-link" data-target=".section_itinerary">Itinerary</a></li>
                        <li class="nav-item"><a class="nav-link" data-target=".section_inclusion">Inclusion</a></li>
                        <li class="nav-item"><a class="nav-link" data-target=".section_price">Price</a></li>
                        <li class="nav-item"><a class="nav-link" data-target=".section_review_tour">Reviews</a></li>
                        <li class="nav-item"><a class="nav-link" data-target=".des_list_faq">Q&As</a></li>
                    </ul>

                    <div class="price_button">
                        <div class="txt_numbpricetour">
                            <p class="txt_numbtour">From US <span class="under_numbprice">${$oneItem.min_price}</span> <span
                                        class="number_pricetour">${$clsTour->getPriceAfterDiscount($tour_id)}</span> /pax </p>
                            <button class="btn btn-inquirenow btn-hover-home">Book Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="list_tourdetails">
        <div class="love-trip">
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane active section_overview" id="overview">
                        <div class="txt_lovetrip d-flex">
                            <div class="txt_triplove_parent">
                                <h2 class="txt_triplove">You will love this trip</h2>
                            </div>
                            <div class="list_willlove">
                                {$oneItem.love_trip|html_entity_decode}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane section_itinerary" id="itinerary">
            <div class="container">
                <h2 class="txt_mapiti">Trip map &amp itinerary</h2>
                <div class="detail_tours">
                    <div class="detail_mapitine">
                        <div class="img_maps_parent"><img class="img_maps"
                             src="{$URL_IMAGES}/tour/img_maps.png"></div>
                        <div class="daytour">
                            <div class="txtdaybyday">
                                <h2 class="txt_daytours">Day by day itinerary</h2>
                                <button class="btn btn-expand">Expand all</button>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <ul class="timeline">
                                    {section name=i loop=$lstTourItinerary}
                                        <li>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{$lstTourItinerary[i].tour_itinerary_id}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{$lstTourItinerary[i].tour_itinerary_id}">
                                                        Day {$lstTourItinerary[i].day}: {$lstTourItinerary[i].title}
                                                    </button>
                                                </h2>
                                                <div id="collapse{$lstTourItinerary[i].tour_itinerary_id}"
                                                     class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        {$lstTourItinerary[i].content|html_entity_decode}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    {/section}
                                </ul>
                            </div>
                        </div>
                        <div class="contact_travelling">
                            <div class="contact-info">
                                <div class="avatar">
                                    <img src="{URL_IMAGES}/tour/avatar_travel_rounded.png" alt="Avatar">
                                </div>
                                <div class="details">
                                    <h3 class="txt_trevllingous">"{$core->get_Lang('TRAVELING IS OUR PASSION')}"</h3>
                                    <p class="txt_destravel">{$core->get_Lang('Let us help you plan an unforgettable trip!')}</p>
                                    <p class="whatapps"><i class="fa-solid fa-phone"></i> Whatapps: 0983033966</p>
                                </div>
                                <a href="{$clsTour->getLink2(0,1)}" class="btn btn-tailor btn-hover-home">Tailor Made Tour</a>
                            </div>
                        </div>
                        <form id="form__avaiable" class="form__avaiable" action="" method="post">
                        <div class="price_tour section_price">
                            <h2 class="txt_price">{$core->get_Lang('Price')}</h2>
                            <p class="txt_pricedes">{$core->get_Lang('Select departure date and number of guests')}</p>
                            <div class="select_pricetour">
                                <div class="box_input">
                                    <i class="fa-regular fa-clock icon"></i>
                                    <input type="text" id="departure_date" class="number_travellers" value="{$format_time_now}">
                                </div>
                                
                                <div class="box_input">
                                    <i class="fa-regular fa-user icon"></i>
                                    <input type="text" name="number_travellers" class="number_travellers" id="pick_travellers" readonly>
                                    <div id="check_number_travellers" class="check_number_travellers">
                                        <ul class="check_number_travellers--ul list_style_none">
                                            {section name=i loop=$lstVisitorType}
                                                {if $lstVisitorType[i].tour_property_id eq $adult_type_id}
                                                    <li class="inputTraveller" id="li_adult" data-tour_property_id="{$lstVisitorType[i].tour_property_id}">
                                                        <div class="right__inputTraveller">
                                                            <label>{$core->get_Lang('Adults')}</label>
                                                            <span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																		<button class="ui-spinner-button ui-spinner-down unNum" type="button" _type="number_adults" traveler_type_id="{$lstVisitorType[i].tour_property_id}">-</button>
																		<input type="hidden" id="tour_visitor_adult_id" name="tour_visitor_adult_id" value="{$lstVisitorType[i].tour_property_id}"/>
																		<input min-number="1" max-number="{$max_adult}" type="number" class="ui-spinner-input number_adults input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="national_visitor{$lstVisitorType[i].tour_property_id}" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="1" readonly/>
                                                                        <input type="hidden" name="people_price{$lstVisitorType[i].tour_property_id}" value="{$price_adult}" id="people_price{$lstVisitorType[i].tour_property_id}" departure_in="{$departure_in}" departure_in_2="{$departure_in_2}">
																		<button class="ui-spinner-button ui-spinner-up upNum" type="button" _type="number_adults" traveler_type_id="{$lstVisitorType[i].tour_property_id}">+</button>
																	</span>
                                                        </div>
                                                    </li>
                                                {elseif $lstVisitorType[i].tour_property_id eq $child_type_id}
                                                    {if $max_child}
                                                        <li class="inputTraveller" {$max_child}>
                                                            <div class="box_age" {$max_child}>
                                                                <div class="right__inputTraveller">
                                                                    <label>{$core->get_Lang('Children')}</label>
                                                                    <span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																					<button class="ui-spinner-button ui-spinner-down unNumChild" type="button" _type="number_child" traveler_type_id="{$lstVisitorType[i].tour_property_id}" visitor_age_child_id="{$list_age_child[j].tour_option_id}">-</button>
																					<input min-number="0" abc max-number="{$max_child}" type="number" class="ui-spinner-input number_child input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="national_visitor{$lstVisitorType[i].tour_property_id}_{$list_age_child[j].tour_option_id}" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="0" visitor_age_child_id="{$list_age_child[j].tour_option_id}" readonly/>
																					<button class="ui-spinner-button ui-spinner-up upNumChild" type="button" _type="number_child" traveler_type_id="{$lstVisitorType[i].tour_property_id} "  visitor_age_child_id="{$list_age_child[j].tour_option_id}">+</button>
																				</span>
                                                                    <input type="hidden" id="tour_visitor_child_id" name="tour_visitor_child_id" value="{$lstVisitorType[i].tour_property_id}"/>
                                                                    <input type="hidden" id="max_child" name="max_child" value="{$max_child}"/>
                                                                </div>
                                                                <div class="box_age_child" id="box_age_child"></div>
                                                            </div>
                                                            {*{section name=j loop=$list_age_child}
                                                                <div class="box_age" {$max_child}>
                                                                    <div class="right__inputTraveller">
                                                                        <label>{$core->get_Lang('Children')} ({$list_age_child[j].title})</label>
                                                                        <span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																					<button class="ui-spinner-button ui-spinner-down unNumChild" type="button" _type="number_child" traveler_type_id="{$lstVisitorType[i].tour_property_id}" visitor_age_child_id="{$list_age_child[j].tour_option_id}">-</button>
																					<input min-number="0" abc max-number="{$max_child}" type="number" class="ui-spinner-input number_child input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="national_visitor{$lstVisitorType[i].tour_property_id}_{$list_age_child[j].tour_option_id}" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="0" visitor_age_child_id="{$list_age_child[j].tour_option_id}" readonly/>
																					<button class="ui-spinner-button ui-spinner-up upNumChild" type="button" _type="number_child" traveler_type_id="{$lstVisitorType[i].tour_property_id} "  visitor_age_child_id="{$list_age_child[j].tour_option_id}">+</button>
																				</span>
                                                                    </div>
                                                                </div>
                                                            {/section}*}
                                                        </li>
                                                    {/if}
                                                {else}
                                                    {if $max_infant}
                                                        <li class="inputTraveller">
                                                            <div class="right__inputTraveller">
                                                                <label>{$core->get_Lang('Infants')}</label>
                                                                <span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																		<button class="ui-spinner-button ui-spinner-down unNum" type="button" _type="number_infants" traveler_type_id="{$lstVisitorType[i].tour_property_id} ">-</button>
																		<input type="hidden" id="tour_visitor_infant_id" name="tour_visitor_infant_id" value="{$lstVisitorType[i].tour_property_id}"/>
																		<input min-number="0" max-number="{$max_infant}" type="number" class="ui-spinner-input number_infants input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="national_visitor{$lstVisitorType[i].tour_property_id}" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="0" readonly/>
																		<button class="ui-spinner-button ui-spinner-up upNum" type="button" _type="number_infants" traveler_type_id="{$lstVisitorType[i].tour_property_id} " >+</button>
																	</span>
                                                            </div>
                                                            <div class="box_age_infants" id="box_age_infants"></div>
                                                        </li>
                                                    {/if}
                                                {/if}
                                            {/section}
                                            {if $lstRoom && (($oneParent && $oneParent.tourcat_id ne '480' && $oneParent.tourcat_id ne '489') || ($tourcat_id ne '480' && $tourcat_id ne '489'))}
                                                <li class="inputTraveller" id="li_room" data-tour_property_id="6">
                                                    <div class="right__inputTraveller">
                                                        <label>{$core->get_Lang('Room')}</label>
                                                    </div>
                                                    {section name=i loop=$lstRoom}
                                                        <div class="right__inputTraveller right__inputRoom mt-2">
                                                            <label class="title_room">{$lstRoom[i].title}</label>
                                                            <span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																		<button class="ui-spinner-button ui-spinner-down unNum" _type="number_room" type="button">-</button>
																		<input type="number" class="spinnerExample ui-spinner-input number_room" name="number_room[]" value="0" min="0" aria-valuemin="1" aria-valuenow="1" autocomplete="off" role="spinbutton" readonly>
																		<input type="hidden" name="room_id[]" value="{$lstRoom[i].tour_property_id}">
																		<button class="ui-spinner-button ui-spinner-up upNum" _type="number_room" type="button">+</button>
																	</span>
                                                        </div>
                                                    {/section}
                                                </li>
                                            {/if}
                                        </ul>
                                    </div>
                                </div>
                                <input type="hidden" name="tour_id" id="tour_id" value="{$tour_id}" />
                                <input type="hidden" name="is_last_hour" id="is_last_hour" value="{$is_last_hour}" />
                                <input type="hidden" name="tour_start_date" id="tour_start_date" value="{$tour_start_date}" />
                                <input type="hidden" name="tour__class_check" id="tour__class_check" value="0" />
                                <input type="hidden" name="number_adults" id="number_adults" value="1" />
                                <input type="hidden" name="number_child" id="number_child" value="0" />
                                <input type="hidden" name="number_infants" id="number_infants" value="0" />
                                <input type="hidden" name="list_age_child" id="list_age_child" value="" />
                                <input type="hidden" name="check_in_book" id="check_in_book" value="{$str_first_start_date}" />
                                <input type="hidden" name="hidFind" value="hidAvaiable" />
                                <button id="check_avaiable" class="check-btnn btn-hover-home btn_book_tour">Check Availability</button>
                            </div>
                        </div>
                        </form>
                        <div id="TablePrice"></div>
                        <div class="infor_pricetour d-none">
                            <div class="container">
                                <div class="txt_inf_locationtime">
                                    <h3 class="txt_infprice">{$clsTour->getTitle($tour_id)}</h3>
                                    <div class="location_daytime">
                                        <p class="txt_location"><i class="fa-regular fa-location-dot"
                                                                   style="color: #004ea8;"></i>Ha Noi
                                            <span style="color:#D3DCE1"> |</span> <span class="txt_timedays"><i
                                                        class="fa-solid fa-clock-three" style="color: #434b5c;"></i>10 Days 9 Nights</span>
                                        </p>
                                    </div>
                                    <hr style="opacity: 0.1; background: #111D37">
                                    <div class="type_price">
                                        <div class="txt_price_type">
                                            <p class="txt_typeprice">Customer Type</p>
                                            <p class="txt_typeprice">Price</p>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-md-4">2 Adults</div>
                                            <div class="col-md-4 text-center">x US $1250</div>
                                            <div class="col-md-4 text-end">US <span class="bold_txtprice">$1250</span>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-md-4">1 Children (0-16age)</div>
                                            <div class="col-md-4 text-center">x US $900</div>
                                            <div class="col-md-4 text-end">US <span class="bold_txtprice">$900</span>
                                            </div>
                                        </div>

                                        <hr style="opacity: 0.1; background: #111D37;">
                                        <div class="price_total">
                                            <p class="txt_typeprice">Total price:</p>
                                            <p class="txt_monpr">US <span class="numb_pr">$3400</span></p>
                                        </div>
                                        <div class="txt_policy">
                                            <p class="txt_regard">
                                                Regarding cancellation conditions, please read our policy.  <a href="#"
                                                                                                               style="color: #3F6DF6">Booking
                                                    Policy</a></p>
                                            <p class="txt_regard">You can reserve now & pay later with this tour
                                                option.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg_btnbook">
                                <div class="numbtxtbook">
                                    <div class="price-wrapper"><h3 class="txt_numbus">US</h3>
                                        <h2 class="txt_numbus2">$3400</h2>
                                    </div>
                                    <p class="txt_desus">All taxes and fees included</p>
                                </div>
                                <button class="btn txt_booking">Booking now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="bg_inclusion section_inclusion" id="inclusion">
        <div class="container">
            <h2 class="txt_inclusions">Inclusions</h2>
            <div class="bg_inexclues">
                <div class="included">
                    <h3 class="txt_inborder">Included</h3>
                    {$oneItem.inclusion|html_entity_decode}
                </div>
                <div class="excluded">
                    <h3 class="txt_exborder">Excluded</h3>
                    {$oneItem.exclusion|html_entity_decode}
                </div>
            </div>
            <div class="booking_policy">
                <div class="row">
                    <div class="col-3"><h3 class="title_booking_policy">BOOKING POLICY</h3></div>
                    <div class="col-9">{$oneItem.confirmation_policy|html_entity_decode}</div>
                </div>
            </div>
        </div>
    </section>

    <section id="review_tour" class="section_review_tour">
        <div class="title_review_parent"><h2 class="title_review_tour">{$core->get_Lang('Review')}</h2></div>
        <div class="reviews_box_top">
            <div class="row review-evaluation">
                <div class="col-lg-4 measure-evaluation">
                    <div class="box_score">
                        <div class="semi-donut margin" style="--percentage : {($clsReviews->getReviews($oneItem.tour_id, 'avg_point') / 5) * 100}; --fill: #FFBA55 ;"></div>
                        <div class="score_text">
                            <h3 class="point_rate">{$clsReviews->getReviews($oneItem.tour_id, 'avg_point')}</h3>
                            <div class="txt_score">{$clsReviews->getReviews($oneItem.tour_id, 'txt_review')}</div>
                            <div class="number_review">
                                ({$clsReviews->getReviews($oneItem.tour_id)} {$core->get_Lang('Reviews')})
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="progress_parent">
                        {section name=i loop=$reviewProgress}
                        <div class="progress_child">
                            <div class="txt_content">{$reviewProgress[i].reviews}</div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                     aria-valuemin="0" aria-valuemax="100" style="width:{$reviewProgress[i].count_percent}%">
                                </div>
                            </div>
                            <div class="count_review">{$reviewProgress[i].count}</div>
                        </div>
                        {/section}
                        <a class="btn_write_review_tour fr" href="javascript:void(0);" title="{$core->get_Lang('Write a review')}">{$core->get_Lang('Write reviews')}</a>
                    </div>
                </div>
            </div>
            {$core->getBlock('review_tour')}
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
    </section>
    {$core->getBlock('des_list_faq')}

    {if $lstRelateTour}
    <section id="maybe_interested">
        <div class="maybe_you_interest container">
            <h2 class="txtInterested">{$core->get_Lang('May be you are interested')}</h2>
            <div class="recently-view">
                <div class="related_tours owl-carousel" id="maybe_interested_owl">
                    {section name=i loop=$lstRelateTour}
                        <div class="list_viewtour">
                            <div class="img_toursrelated">
                                <a href="{$clsTour->getLink($lstRelateTour[i].tour_id)}"><img
                                            src="{$lstRelateTour[i].image}"
                                            alt="{$lstRelateTour[i].title}" class="img-fluid"> </a>
                            </div>
                            <div class="txt_des_tour">
                                <h3>
                                    <a class="txth_relatedtour txt-hover-home"
                                       href="{$clsTour->getLink($lstRelateTour[i].tour_id)}" alt="tour"
                                       title="tour">{$lstRelateTour[i].title}</a>
                                </h3>
                                <div class="d-flex align-items-center score_reviewtour"><span class="border_score">{$clsReviews->getReviews($lstTourRecent[i].tour_id, 'avg_point')}</span>
                                    <span class="txt_score">{$clsReviews->getReviews($lstTourRecent[i].tour_id, 'txt_review')} </span> <span class="txt_reviewstour">- {$clsReviews->getReviews($lstTourRecent[i].tour_id)} views</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa-light fa-location-dot" style="color: #43485c;"
                                       aria-hidden="true"></i>
                                    <span class="txt_placetours">Place: {$clsTourDestination->getByCountry($lstRelateTour[i].tour_id, 'city')}</span>
                                    {if $clsTourDestination->getByCountry($lstRelateTour[i].tour_id, 'other_city')}
                                        <button type="button" class="tooltips_tour" data-bs-toggle="tooltip"
                                                title="{$clsTourDestination->getByCountry($lstRelateTour[i].tour_id, 'other_city')}">
                                            +{$clsTourDestination->getByCountry($lstRelateTour[i].tour_id)}
                                        </button>
                                    {/if}
                                </div>
                                <div class="intro_recent_view_tour">{$lstRelateTour[i].overview|html_entity_decode}</div>
                                <div class="d-flex justify-content-between align-items-center" style="margin-top: 20px">
                                    <div class="from_price"><p class="from_txtp">From <span class="text-decoration-line-through">${$lstRelateTour[i].min_price}</span></p> <span
                                                class="txt_price">US
                                            <h3 class="txt_numbprice"> ${$clsTour->getPriceAfterDiscount($lstRelateTour[i].tour_id)}</h3> </span>
                                    </div>
                                    <a href="{$clsTour->getLink($lstRelateTour[i].tour_id)}" alt="tour"
                                       title="tour">
                                        <button class="btn btn_viewtour btn-hover-home">View Tour <i
                                                    class="fa-regular fa-arrow-right" style="color: #ffffff;"
                                                    aria-hidden="true"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    {/section}
                </div>
            </div>
        </div>
    </section>
    {/if}

    <section id="recently-view" class="container">
        {if $lstTourRecent}
            <div class="recently-view">
                <h2 class="recently-view-title">{$core->get_Lang('Recently viewed')}</h2>
                <div class="related_tours owl-carousel" id="related_tours_detail">
                    {section name=i loop=$lstTourRecent}
                        <div class="list_viewtour">
                            <div class="img_toursrelated">
                                <a href="{$clsTour->getLink($lstTourRecent[i].tour_id)}"><img
                                            src="{$lstTourRecent[i].image}"
                                            alt="{$lstTourRecent[i].title}" class="img-fluid"> </a>
                            </div>
                            <div class="txt_des_tour">
                                <h3>
                                    <a class="txth_relatedtour txt-hover-home" href="{$clsTour->getLink($lstTourRecent[i].tour_id)}" alt="tour" title="tour">{$lstTourRecent[i].title}</a>
                                </h3>
                                <div class="d-flex align-items-center score_reviewtour"><span class="border_score">{$clsReviews->getReviews($lstTourRecent[i].tour_id, 'avg_point')}</span>
                                    <span class="txt_score">{$clsReviews->getReviews($lstTourRecent[i].tour_id, 'txt_review')} </span> <span class="txt_reviewstour">- {$clsReviews->getReviews($lstTourRecent[i].tour_id)} views</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa-light fa-location-dot" style="color: #43485c;" aria-hidden="true"></i>
                                    <span class="txt_placetours">Place: {$clsTourDestination->getByCountry($lstTourRecent[i].tour_id, 'city')}</span>
                                    {if $clsTourDestination->getByCountry($lstTourRecent[i].tour_id, 'other_city')}
                                        <button type="button" class="tooltips_tour" data-bs-toggle="tooltip" title="{$clsTourDestination->getByCountry($lstTourRecent[i].tour_id, 'other_city')}">
                                            +{$clsTourDestination->getByCountry($lstTourRecent[i].tour_id)}
                                        </button>
                                    {/if}
                                </div>
                                <div class="intro_recent_view_tour">{$lstTourRecent[i].overview|html_entity_decode}</div>
                                <div class="d-flex justify-content-between align-items-center" style="margin-top: 40px">
                                    <div class="from_price"><p class="from_txtp">From <span class="text-decoration-line-through">${$lstTourRecent[i].min_price}</span></p> <span
                                                class="txt_price">US
												<h3 class="txt_numbprice"> ${$clsTour->getPriceAfterDiscount($lstTourRecent[i].tour_id)}</h3> </span></div>
                                    <a href="{$clsTour->getLink($lstTourRecent[i].tour_id)}" alt="tour" title="tour">
                                        <button class="btn btn_viewtour btn-hover-home">View Tour <i
                                                    class="fa-regular fa-arrow-right" style="color: #ffffff;"
                                                    aria-hidden="true"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    {/section}
                </div>
            </div>
        {/if}
    </section>

    {$core->getBlock("why_choose_us")}
    <section class="framevideotxt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 position-relative">
                    <a class="position-relative" href="{$clsConfiguration->getValue('LinkVideoPerfect_'|cat:$_LANG_ID)}"
                       data-fancybox="gallery">
                        <img class="videoplaypic" src="{$clsConfiguration->getValue('ThumbnailYoutube_'|cat:$_LANG_ID)}"
                             alt="videopic" width="588"
                             height="330">
                        <div class="icon-play">
                            <i class="fa-solid fa-play" id="icon"></i>
                            <span class="wave_1"></span>
                            <span class="wave_2"></span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center txt_readylets">
                    <h2 class="txtready">{$clsConfiguration->getValue('TitleVideoPerfect_'|cat:$_LANG_ID)|html_entity_decode}</h2>
                    <div class="txtcomt">{$clsConfiguration->getValue('IntroVideoPerfect_'|cat:$_LANG_ID)|html_entity_decode}</div>
                    <a href="/customised" class="btn readyToStart-btn">{$core->get_Lang('LET’S PLAN YOUR TRIP')}
                        <img class="ms-2"
                             src="https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/ArrowRight.svg"
                             alt="error">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal Download Itinerary -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Download Brochure</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                        <input type="hidden" class="form-control" name="tour_id" value="{$tour_id}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button  id="download_brochure" type="button" class="btn btn-warning">Download brochure</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    var $tour_id = '{$tour_id}';
    var $Loading = '{$core->get_Lang("Loading")}';
    var selectmonth='{$core->get_Lang("select month")}';
    var Input_data_is_invalid='{$core->get_Lang("Input data is invalid")}';
    var $_Expand_all = '{$core->get_Lang("Expand all")}';
    var $_Collapse_all = '{$core->get_Lang("Collapse all")}';
    var $_View_more = '{$core->get_Lang("View more")}';
    var $_Less_more = '{$core->get_Lang("Less more")}';
    var $_LANG_ID = '{$_LANG_ID}';
    var Adults='{$core->get_Lang("Adults")}';
    var Adult='{$core->get_Lang("Adult")}';
    var Children='{$core->get_Lang("Children")}';
    var Infants='{$core->get_Lang("Infants")}';
    var Room='{$core->get_Lang("Room")}';
    var Departure_date_invalid='{$core->get_Lang("Departure date is invalid")}';
    var Please_choose_departure_date='{$core->get_Lang("Please choose departure date")}';
    var Please_select_children='{$core->get_Lang("Please select children")}';
    var Please_select_infants='{$core->get_Lang("Please select infants")}';
    var Warning='{$core->get_Lang("Warning")}';
    var list_start_date=['{$list_start_date}'];
    var $check_tour_promotion='{$check_tour_promotion}';
    var $check_tour_start_date='{$check_tour_start_date}';
    var getSelectAgeChild = `{$getSelectChild}`;
    var getSelectInfant 	= `{$getSelectInfant}`;
</script>
{$date_range_js_update}
{literal}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('.nav-link');

            links.forEach(link => {
                link.addEventListener('click', (event) => {
                    $('.nav-link').removeClass('active');
                    $(event.currentTarget).addClass('active');
                    const targetClass = event.currentTarget.getAttribute('data-target');
                    const targetElement = document.querySelector(targetClass);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            })
            window.onscroll = function() {
                if (window.scrollY >= 630) {
                    $('.class-tour').addClass('list_nav_fixed');
                    $(".unika_true").removeClass('unika_header');
                } else {
                    $('.class-tour').removeClass('list_nav_fixed');
                }
            }

            $('.btn-expand').click(function() {
                const $accordionCollapse = $(".accordion-collapse.collapse");
                $accordionCollapse.addClass('show');
                if ($(this).hasClass('expand')) {
                    $(this).removeClass('expand').text('Expand all');
                    $accordionCollapse.removeClass('show');
                    $(".accordion-button").addClass('collapsed')
                } else {
                    $(this).addClass('expand').text('Collapse all');
                    $accordionCollapse.addClass('show');
                    $(".accordion-button").removeClass('collapsed')
                }
            });
        });
        $(document).ready(function() {
            Fancybox.bind('#gallery_detail_tour .img_tourdetail', {
                groupAll: true,
            });
            Fancybox.bind("[data-fancybox]", {

            });
            $('#maybe_interest').owlCarousel({
                loop: true,
                margin: 32,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
            $('#gallery_detail_tour').owlCarousel({
                loop: false,
                margin: 10,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: false,
                autoplay: true,
                items: 1
            })
            $('.btn_write_review_tour').click(function () {
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    $('#writeTourReview').hide(500);
                } else {
                    $(this).addClass('active');
                    $('#writeTourReview').show(500);
                }
            });

            $('#gallery_detail_tour .owl-prev').hide();
            $('#gallery_detail_tour').on('translated.owl.carousel', function(event) {
                let carousel = $(this);
                let items = carousel.find('.owl-item');
                let currentIndex = event.item.index;
                if (currentIndex === 0) {
                    carousel.find('.owl-prev').hide();
                } else {
                    carousel.find('.owl-prev').show();
                }

                if (currentIndex === items.length - 1) {
                    carousel.find('.owl-next').hide();
                } else {
                    carousel.find('.owl-next').show();
                }
            });

            const itemCount = $('#related_tours_detail').children().length;
            $('#related_tours_detail').owlCarousel({
                items: 4,
                loop: false,
                margin: 32,
                nav: false,
                autoplay: itemCount > 4,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                dots: false
            });

            const itemCount_maybe = $('#maybe_interested_owl').children().length;
            $('#maybe_interested_owl').owlCarousel({
                items: 4,
                loop: false,
                margin: 32,
                nav: false,
                autoplay: itemCount_maybe > 4,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                dots: false
            });

            let numberMonth = 2;
            if ($( document ).width() <= 767){
                numberMonth = 1;
            }
            $(function(){
                $( "#departure_date" ).datepicker({
                    dateFormat: 'M dd, yy',
                    minDate: "+1d",
                    maxDate: "+1Y",
                    numberOfMonths: numberMonth,
                    firstDay:1,
                });
            });
            $('input[name="number_travellers"]').click(function(event){
                event.stopPropagation();
                $("#check_number_travellers").toggle();
            });

            $(document).click(function(event) {
                var target = $(event.target);
                if (!target.closest('input[name="number_travellers"]').length &&
                    !target.closest('#check_number_travellers').length) {
                    $("#check_number_travellers").hide();
                }
            });
            $("#download_brochure").click(function(event) {
                event.preventDefault();
                let $_this = $(this).closest('form');
                let adata = {};

                adata["email"] = $_this.find("input[name='email']").val();
                if (adata["email"] == '') {
                    alert("Please enter your email");
                    return;
                }
                adata["tour_id"] = $_this.find("input[name='tour_id']").val();
                $.ajax({
                    type: "POST",
                    url: path_ajax_script + "/index.php?mod=tour&act=sendMail",
                    data: adata,
                    dataType: "html",
                    beforeSend: function (xhr) {
                        $('#download_brochure').text("Processing...").prop('disabled', true);
                    },
                    success: function(res) {
                        $('#download_brochure').text("Download Brochure").prop('disabled', false);
                        alert("Successfully! Please check email!");
                    },
                    error: function() {
                        console.error("Fail");
                    }
                });
            });
            $('.review').each(function() {
                var moreText = $(this).find('.content_review');
                var toggleButton = $(this).find('.view_more_review');

                if (moreText[0].scrollHeight <= 72) {
                    toggleButton.hide();
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
        })
        $(function(){
            $(".highlight").click(function() {
                $(this).toggleClass("active");
                $(this).parent().children('.high_light_content').toggle();
            });
            $('input[readonly]').on('focus', function(ev) {
                $(this).trigger('blur');
            });
            $('input[name="tour_guide_id"]').click(function(){
                var title = $(this).data('title');
                $('input[name="tour_guide"]').val(title);
            });
            $('.number_adults').on('focusout',function(){
                var value = $(this).val();
                var max_number = $(this).attr('max-number');
                if(parseInt(value) < 1 || value == ''){
                    $(this).val(1);
                }
                if(value > parseInt(max_number)){
                    value = max_number;
                    $(this).val(max_number);
                }
                getNumberPerson();
                $tour_id=$('#tour_id').val()
                GetMaxChildInfant($tour_id,value);
            });

            $('.number_infants,.number_room').on('focusout',function(){
                var value = $(this).val();
                var max_number = $(this).attr('max-number');
                if(parseInt(value) < 0 || value == ''){
                    $(this).val(0);
                }
                if(value > parseInt(max_number)){
                    value = max_number;
                    $(this).val(max_number);
                }
                getNumberPerson();
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
                    $.confirm({
                        title: Warning,
                        type: 'red',
                        typeAnimated: true,
                        content: Input_data_is_invalid,
                        buttons: {
                            ok: function () {
                                $(".btn_request").click();
                            },
                            cancel: function(){}
                        }
                    });
                    val = max_number;
                }
                $("#national_visitor"+traveler_type_id).val(val);
                $('#'+_type).val(val);
                if(_type == 'number_adults'){
                    $tour_id=$('#tour_id').val();
                    GetMaxChildInfant($tour_id,val);
                }
                if(_type == 'number_child'){
                    $number_child = $('#box_age_child').find(".item_age_child").length;
                    for(var i=$number_child; i<val; i++){
                        $('#box_age_child').append(`<div class="item_age_child">`+getSelectAgeChild+`</div>`);
                    }
                }
                if(_type == 'number_infants'){
                    $number_infants = $('#box_age_infants').find(".item_age_infants").length;
                    for(var i=$number_infants; i<val; i++){
                        $('#box_age_infants').append(`<div class="item_age_infants">`+getSelectInfant+`</div>`);
                    }
                }
                if(_type == 'number_room'){
                    var input_room = $(this).closest(".right__inputTraveller").find('input[name="number_room[]"]');
                    var value = input_room.val();
                    input_room.val(parseInt(value) + 1);
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
                    $tour_id=$('#tour_id').val();
                    GetMaxChildInfant($tour_id,val);
                }

                if(_type == 'number_child'){
                    $('#box_age_child').find(".item_age_child").each(function(index,element){
                        if(index >= val){
                            $(element).remove();
                        }
                    });
                }
                if(_type == 'number_infants'){
                    $('#box_age_infants').find(".item_age_infants").each(function(index,element){
                        if(index >= val){
                            $(element).remove();
                        }
                    });
                }

                if(_type == 'number_room'){
                    var input_room = $(this).closest(".right__inputTraveller").find('input[name="number_room[]"]');
                    var value = input_room.val();
                    if(parseInt(value) > 0){
                        input_room.val(parseInt(value) - 1);
                    }
                }
                getNumberPerson();
                return false;
            });
            const max_number = parseInt($("#max_child").val());
            $('.upNumChild').click(function() {
                var number_person = $(this).val();
                var departure_date = $("input[name=departure_date]").val();
                var traveler_type_id = $(this).attr('traveler_type_id');
                var input_number_child = $(this).parent().find('.number_child');
                var val = parseInt(input_number_child.val());

                var _type=$(this).attr('_type');
                var visitor_age_child_id = $(this).attr("visitor_age_child_id");
                val = val + 1;
                var total_number = 0;
                $(".number_child").each(function(index,elm){
                    let number = parseInt($(elm).val());
                    total_number += number;
                });
                if (total_number >= max_number) {
                    $.confirm({
                        title: Warning,
                        type: 'red',
                        typeAnimated: true,
                        content: Input_data_is_invalid,
                        buttons: {
                            ok: function () {
                                $(".btn_request").click();
                            },
                            cancel: function(){}
                        }
                    });
                    val = val - 1;
                }else{
                    $('#'+_type).val(total_number+1);
                }
                input_number_child.val(val);
                let list_age_child = "";
                $(".number_child").each(function(index,elm){
                    let number = parseInt($(elm).val());
                    let visitor_age_child = $(elm).attr("visitor_age_child_id");

                    if(number > 0){
                        list_age_child += ((list_age_child != '')?",":"")+visitor_age_child;
                    }
                });
                $("#list_age_child").val(list_age_child);
                $number_child = $(this).closest(".box_age").find(".item_age_child").length;
                for(var i=$number_child; i<val; i++){
                    getAgeChild($(this),visitor_age_child_id);
                }
                getNumberPerson();
                return false;
            });
            $('.unNumChild').click(function() {
                var number_person = $(this).val();
                var departure_date = $("input[name=departure_date]").val();
                var traveler_type_id = $(this).attr('traveler_type_id');
                var input_number_child = $(this).parent().find('.number_child');
                var val = parseInt(input_number_child.val());
                var min_number = 0;
                var _type=$(this).attr('_type');
                val = val - 1;
                var total_number = 0;
                $(".number_child").each(function(index,elm){
                    total_number += parseInt($(elm).val());
                });
                if (val < min_number) {
                    $.alert({
                        title: Warning,
                        type: 'red',
                        typeAnimated: true,
                        content: Input_data_is_invalid,
                    });
                    val = min_number;
                }else{
                    $('#'+_type).val(total_number-1);
                }
                input_number_child.val(val);
                let list_age_child = "";
                $(".number_child").each(function(index,elm){
                    let number = parseInt($(elm).val());
                    let visitor_age_child = $(elm).attr("visitor_age_child_id");
                    console.log(number);
                    if(number > 0){
                        list_age_child += ((list_age_child != '')?",":"")+visitor_age_child;
                    }
                });
                $("#list_age_child").val(list_age_child);
                $(this).closest(".box_age").find(".item_age_child").each(function(index,element){
                    if(index >= val){
                        $(element).remove();
                    }
                });
                getNumberPerson();
                return false;
            });

            var datet = date_range;
            var tips = ['', ''];
            var arrayable = list_start_date;
            var numberMonth = 2;
            if ($( document ).width() <= 767){
                numberMonth = 1;
            }
            $('#departure_date').datepicker({
                dateFormat: 'M dd, yy',
                minDate: "+1d",
                maxDate: "+1Y",
                numberOfMonths: numberMonth,
                firstDay:1,
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
                    var fomatDate= $.datepicker.formatDate("M dd, yy", date);
                    $('input[name=check_in_book]').val(fomatDate);
                    $('#departure_date').attr('now_next_departure',fomatDate);
                }
            });

            $('.btn_book_tour').click(function (event) {
                event.preventDefault()
                var $_this=$(this),
                    $tour_id=$('#tour_id').val(),
                    $number_adults=$('#number_adults').val(),
                    $number_child=$('#number_child').val(),
                    $number_infants=$('#number_infants').val(),
                    $check_in_book=$('#check_in_book').val(),
                    $departure_date=$('#departure_date').val();
                var check = 0;
                if(parseInt($number_child) > 0){
                    $('.box_age_child').find('.slt_item_age_child').each(function(index,elm){
                        if($(elm).val() == ''){
                            alert(Please_select_children)
                            ++check;
                            $(elm).addClass('error');
                        }else{
                            $(elm).removeClass('error');
                        }
                    });
                }
                if(parseInt($number_infants) > 0){
                    $('.box_age_infants').find('.slt_item_age_child').each(function(index,elm){
                        if($(elm).val() == ''){
                            alert(Please_select_infants)
                            ++check;
                            $(elm).addClass('error');
                        }else{
                            $(elm).removeClass('error');
                        }
                    });
                }
                if(check > 0){
                    $("#check_number_travellers").show();
                    return false;
                }
                loadTablePrice($tour_id,$number_adults,$number_child,$number_infants,$check_in_book);
                $('#check_number_travellers').hide();
            });

            function getAgeChild(elm,visitor_age_id) {
                $.ajax({
                    'type': 'POST',
                    'url' : path_ajax_script+'/index.php?mod='+mod+'&act=loadSelectAgeChild&lang='+LANG_ID,
                    'data' : {"visitor_age_id":visitor_age_id},
                    'dataType': 'html',
                    'success':function(html_select){
                        $(elm).closest(".box_age").find('.box_age_child').append(`<div class="item_age_child">`+getSelectAgeChild+`</div>`);
                    }
                });
                return "";
            }
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
            function loadTextDayCheckIn(date){
                $.ajax({
                    'type': 'POST',
                    'url' : path_ajax_script+'/index.php?mod='+mod+'&act=loadTextDay&lang='+LANG_ID,
                    'data' : {"date":date},
                    'dataType': 'html',
                    'success':function(html){
                        /*$("#departure_date").val(html);*/
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
                var $totalRoom = 0;
                $('.number_room').each(function() {
                    $totalRoom += parseInt($(this).val());
                });
                if($totalAdult > 1){
                    var value = $totalAdult+' '+Adults ;
                }else{
                    var value = $totalAdult+' '+Adult ;
                }
                if($totalChild > 0){
                    value += ', ' +$totalChild+' '+Children;
                }
                if($totalInfants > 0){
                    value += ', ' +$totalInfants+' '+Infants;
                }
                if($totalRoom > 0){
                    value += ', ' +$totalRoom+' '+Room;
                }
                $('#pick_travellers').val(value);
            }

            GetMaxChildInfant($('#tour_id').val(),1);
            function GetMaxChildInfant($tour_id,$number_adults){
                var tour_property_id = $('#li_adult').data('tour_property_id');
                $.ajax({
                    type: 'POST',
                    url: path_ajax_script+'/index.php?mod=tour_new&act=ajGetMaxChildInfant&lang_id='+$_LANG_ID,
                    data : {"tour_id":$tour_id,"number_adults":$number_adults,"tour_property_id":tour_property_id},
                    dataType:'json',
                    success: function(json){
                        /*$(".number_child.input_number").attr('max-number',json.max_child);*/
                        $("#max_child").val(json.max_child);
                        $(".number_infants.input_number").attr('max-number',json.max_infant);
                        /*$(".number_child.input_number,.number_infants.input_number").val(0);
                        $("#box_age_child").html('');*/
                        getNumberPerson();
                    }
                });
            }
            function loadTablePrice($tour_id,$number_adults,$number_child,$number_infants,$check_in_book){
                $('#TablePrice').html('<div class="lazy_loading text-center"><img src="{/literal}{$URL_IMAGES}/icon/lazy_load_100.svg{literal}" alt=""></div>');
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
        })
    </script>
{/literal}