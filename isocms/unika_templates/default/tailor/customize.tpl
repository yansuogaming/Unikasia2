
<div class="page_container">
	<div class="breadcrumb-main breadcrumb-{$mod}">
		<div class="container">
			<ol class="breadcrumb mt0 mb0" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$PCMS_URL}">
						<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$curl}" title="{$core->get_Lang('Tailor made tour')}" itemprop="url">
						<span itemprop="name" class="reb">{$core->get_Lang('Tailor made tour')}</span></a>
					<meta itemprop="position" content="2" />
				</li>
				{if $tour_id}
				{assign var=itemTour value=$clsTour->getOne($tour_id,'title,slug,trip_code')}
				{assign var=titleTour value=$clsTour->getTitle($tour_id,$itemTour)}
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="{$clsTour->getLink($tour_id,$itemTour)}" title="{$titleTour}">
						<span itemprop="name" class="reb">{$titleTour}</span></a>
					<meta itemprop="position" content="3" />
				</li>
				{/if}   
			</ol>
		</div>
	</div>
    <div id="contentPage" class="pageTailor">
        <div class="container">
          	<form method="post" action="" name="form_customize" id="form_customize" class="frmCrxBook form-horizontal">
				<div class="row">
					<div class="box_form_cutomize mx-auto">
						<h1 class="title_page">{$core->get_Lang('Plan your special trips')}</h1> 
                        {assign var=site_tailor_intro value=site_tailor_intro_|cat:$_LANG_ID}
                        {assign var=intro_tailor value=$clsConfiguration->getValue($site_tailor_intro)}
						<div class="intro_page">
                            {$clsConfiguration->getValue($site_tailor_intro)|html_entity_decode}
                        </div>
						
						<div class="box_form box_form_destination">
							<h2 class="title_box_form">{$core->get_Lang('Select destination')}</h2>
							{section name=i loop=$lstCountryEx}
								<div class="box_list_country">
									<div class="box_header d-flex flex-wrap justify-content-between align-items-center">
										<h2 class="title_country {if $smarty.section.i.iteration eq 1}check{/if}">{$clsCountryEx->getTitle($lstCountryEx[i].country_id,$lstCountryEx[i])}</h2>
										<input class="chkitem" {if in_array($lstCountryEx[i].country_id, $country_id) || ($smarty.section.i.iteration eq 1 && !$country_id)}checked="checked"{/if} value="{$lstCountryEx[i].country_id}" type="checkbox" name="country_id[]" data-id="destination_{$lstCountryEx[i].country_id}" id="country_{$smarty.section.i.iteration}">
									</div>
									<div class="box_list_city" id="destination_{$lstCountryEx[i].country_id}"></div>								
								</div>
							{/section}	
							<div class="form-input form-group">									
								<div class="box_label">
									<label for="" class="lbl_box_input">{$core->get_Lang('Other Destinations')} <span class="text_lbl">({$core->get_Lang('Separated by commas')}):</span></label>
								</div>
								<div class="box_input box_text_area">
									<textarea class="textarea form-control" rows="5" style="height:85px" name="other_des" placeholder="Vietnam,ThaiLand,...">{$other_des}</textarea>								
								</div>
							</div>						
						</div>
						<div class="box_form box_form_travel">
							<h2 class="title_box_form">{$core->get_Lang('Tour Information')}</h2>
							<div class="box_form_body">
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Start Date')} <span class="text_lbl">(dd/mm/yyyy):</span></label>
									</div>
									<div class="box_input box_input_departure_date">
										{if $_LANG_ID eq 'vn'}
											<div class="clearfix"></div>
											<input class="dateTxt2 required form-control" name="date_begin_simple" type="text" value="{if $date_begin_simple ne ''}{$date_begin_simple}{else}{$now|date_format:"%d/%m/%Y"}{/if}" placeholder="dd/mm/yyyy" />
										{else}
											<div class="clearfix"></div>
											<input class="dateTxt2 required form-control" name="date_begin_simple" type="text" value="{if $date_begin_simple ne ''}{$date_begin_simple}{else}{$now|date_format:"%m/%d/%Y"}{/if}" placeholder="mm/dd/yyyy" />
										{/if}								
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Tour Duration')} <span class="text_lbl">({$core->get_Lang('Calculated by day')}):</span></label>
									</div>
									<div class="box_input">
										<input type="text" name="duration" id="duration" class="duration" value="{$duration}" autocomplete="off" placeholder="{$core->get_Lang('Example: 7 Days')}">							
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Number')}:</label>
									</div>
									<div class="box_input box_input_number_traveller">
										<input type="text" name="number_travellers" class="number_travellers" id="pick_travellers" placeholder="{$core->get_Lang('Adults')}" value="{$number_travellers}" readonly>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
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
																	<input min-number="1" max-number="{$max_adult}" type="number" class="ui-spinner-input number_adults input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="adult_simple" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="{$number_adult}" readonly/>
																	<input type="hidden" name="people_price{$lstVisitorType[i].tour_property_id}" value="{$price_adult}" id="people_price{$lstVisitorType[i].tour_property_id}" departure_in="{$departure_in}" departure_in_2="{$departure_in_2}">
																	<button class="ui-spinner-button ui-spinner-up upNum" type="button" _type="number_adults" traveler_type_id="{$lstVisitorType[i].tour_property_id}">+</button>
																</span>
															</div>
														</li>
													{elseif $lstVisitorType[i].tour_property_id eq $child_type_id}
														<li class="inputTraveller">
															<div class="right__inputTraveller">
																<label>{$core->get_Lang('Children')}</label>
																<span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																	<button class="ui-spinner-button ui-spinner-down unNum" type="button" _type="number_child" traveler_type_id="{$lstVisitorType[i].tour_property_id} ">-</button>
																	<input type="hidden" id="tour_visitor_child_id" name="tour_visitor_child_id" value="{$lstVisitorType[i].tour_property_id}"/>
																	<input min-number="0" max-number="{$max_child}" type="number" class="ui-spinner-input number_child input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="children_simple" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="{$number_child}" readonly/>
																	<button class="ui-spinner-button ui-spinner-up upNum" type="button" _type="number_child" traveler_type_id="{$lstVisitorType[i].tour_property_id} " >+</button>
																</span>
															</div>
															<div class="box_age_child" id="box_age_child">
																{if $children}
																	{section name=j loop=$children}
																		<div class="item_age_child">{$clsISO->getSelectAgeChildTailor($children[j])}</div>
																	{/section}
																{/if}
															</div>
															<div class="txt_children">{$core->get_Lang("To find a property that suits your whole group at the exact same price, we need to know the children's ages at check-out")}</div>
														</li>
													{else}
														<li class="inputTraveller">
															<div class="right__inputTraveller">
																<label>{$core->get_Lang('Infants')}</label>
																<span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																	<button class="ui-spinner-button ui-spinner-down unNum" type="button" _type="number_infants" traveler_type_id="{$lstVisitorType[i].tour_property_id} ">-</button>
																	<input type="hidden" id="tour_visitor_infant_id" name="tour_visitor_infant_id" value="{$lstVisitorType[i].tour_property_id}"/>
																	<input min-number="0" max-number="{$max_infant}" type="number" class="ui-spinner-input number_infants input_number find_select" tour_visitor_type_id="{$lstVisitorType[i].tour_property_id}" name="baby_simple" id="national_visitor{$lstVisitorType[i].tour_property_id}" value="{if $baby_simple}{$baby_simple}{else}0{/if}" readonly/>
																	<button class="ui-spinner-button ui-spinner-up upNum" type="button" _type="number_infants" traveler_type_id="{$lstVisitorType[i].tour_property_id} " >+</button>
																</span>
															</div>
														</li>
													{/if}
												{/section}									
												<li class="inputTraveller" id="li_room" data-tour_property_id="6">
													<div class="right__inputTraveller">
														<label>{$core->get_Lang('Room')}</label>
														<span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
															<button class="ui-spinner-button ui-spinner-down unNum" _type="number_room" type="button">-</button>
															<input type="number" class="spinnerExample ui-spinner-input number_room" name="number_room" value="{if $number_room}{$number_room}{else}0{/if}" min="0" aria-valuemin="1" aria-valuenow="1" autocomplete="off" role="spinbutton" readonly>
															<button class="ui-spinner-button ui-spinner-up upNum" _type="number_room" type="button">+</button>
														</span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Budget per person')} <span class="text_lbl">({$core->get_Lang('excluding international flights')}):</span></label>
									</div>
									<div class="box_input">
										<input type="text" name="budget" id="budget" class="budget" value="{$budget}" autocomplete="off" placeholder="{$core->get_Lang('Example: 2.000$')}">							
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">								
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Transport')}:</label>
									</div>
									<div class="box_input">
										<select class="form-control travelby" name="travelby">
											{$clsTailorProperty->getSelectByProperty('_TRANSPORT',$travelby,'Transport')}
										</select>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">								
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Prefered Guide Language')}:</label>
									</div>
									<div class="box_input">
										<select class="form-control language" name="language">
											{$clsTailorProperty->getSelectByProperty('_LANGUAGE',$language,'Language')}
										</select>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-start">								
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Select Meals')}:</label>
									</div>
									<div class="box_meal">
										<div class="box_input">
											<select class="form-control" name="breakfast">
												{$clsTailorProperty->getSelectByProperty('_BREAKFAST',$breakfast,'Breakfast')}
											</select>
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</div>
										<div class="box_input">
											<select class="form-control" name="lunch">
												{$clsTailorProperty->getSelectByProperty('_LUNCH',$lunch,'Lunch')}
											</select>
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</div>
										<div class="box_input">
											<select class="form-control" name="dinner">
												{$clsTailorProperty->getSelectByProperty('_DINNER',$dinner,'Dinner')}
											</select>
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								{if $lstTourGuide}
									<div class="form-input form-group d-flex flex-wrap align-items-center">
										<div class="box_label text-right">
											<label for="" class="lbl_box_input">{$core->get_Lang('Tour Guide')}:</label>
										</div>									
										<div class="box_input box_input_tour_guide">
											<select type="text" class="form-control" name="tour_guide_id">
												<option value="" disabled {if !$tour_guide_id }selected{/if} hidden>-- {$core->get_Lang('Please select')} --</option>
												{if $lstTourGuide}
													{section name=i loop=$lstTourGuide}
														<option value="{$lstTourGuide[i].tour_property_id}" {if $tour_guide_id eq $lstTourGuide[i].tour_property_id}selected{/if}>{$lstTourGuide[i].title}</option>
													{/section}
												{/if}
											</select>
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</div>
									</div>
								{/if}
								<div class="form-input form-group form_accommodations d-flex flex-wrap align-items-start">											
									<div class="box_label text-right">
										<label for="" class="lbl_box_input lbl_box_input_accommodations">{$core->get_Lang('Hotel Requirements')}:</label>
									</div>
									{assign var=list_hotel_class value=$clsTailorProperty->getListByProperty('_HOTEL_CLASS')}
									<div class="box_checkbox box_hotel box_input">
										{section name=i loop=$list_hotel_class}
											<div class="boxCheckbox">
												<input type="radio" class="check_box_itinerary" name="hotelclass" value="{$list_hotel_class[i].tailor_property_id}" {if $hotelclass eq $list_hotel_class[i].tailor_property_id}checked{/if}>
												<p class="checkmark">{$list_hotel_class[i].title}</p>
											</div>
										{/section}
									</div>
								</div>
							</div>
						</div>
						<div class="box_form box_form_special">
							<h2 class="title_box_form">{$core->get_Lang('Your Special Requirements')}</h2>
							<div class="box_form_body">
								<div class="form-input form-group d-flex flex-wrap align-items-center">	
									<div class="box_textarea">
										<textarea class="" cols="255" rows="5" placeholder="{$core->get_Lang('At any time, you should be looking at your bucket list, desired accommodations, special food requirements, accommodations, etc')}..." name="request_1">{$request_1}</textarea>
									</div>
								</div>							
							</div>							
						</div>
						<div class="box_form body_information">
							<h2 class="title_box_form">{$core->get_Lang('Your Travel Information’s')}</h2>
							<div class="box_form_body">
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Title')}*:</label>
									</div>
									<div class="box_input">
										<select class="form-control required" name="title">
											<option value="">{$core->get_Lang('-- Please Select --')}</option>
											{$clsISO->makeSelectTitle($title)}
										</select>
										{if $errMsgTitle}<label for="title" generated="true" class="error">{$errMsgTitle}!</label>{/if}
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Full name')}*:</label>
									</div>
									<div class="box_input">
										<input type="text" class="form-control required" value="{$name}" name="name" placeholder="{$core->get_Lang('Enter your name')}"/>
										{if $errMsgFullname}<label for="name" generated="true" class="error">{$errMsgFullname}!</label>{/if}
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="country_id" class="lbl_box_input">{$core->get_Lang('Country')}*:</label>
									</div>
									<div class="box_input">
										<select name="country__id" id="country_id" class="form-control required">
											<option value="">-- {$core->get_Lang('Select')} -- </option>
											{section name=i loop=$lstCountryRegion}
											<option {if $country__id eq $lstCountryRegion[i].country_id}selected="selected"{/if} value="{$lstCountryRegion[i].country_id}">{$lstCountryRegion[i].title}</option>
											{/section}
										</select>
										{if $errMsgCountry}<label for="country_id" generated="true" class="error">{$errMsgCountry}!</label>{/if}
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</div>
								</div>								
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Email')}*:</label>
									</div>
									<div class="box_input">
										<input class="form-control" id="email" name="email" placeholder="{$core->get_Lang('Enter your confirm email')}" type="text" value="{$email}" />
										{if $errMsgEmail}<label for="email" generated="true" class="error">{$errMsgEmail}!</label>{/if}
									</div>
								</div>							
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Phone number')}*:</label>
									</div>
									<div class="box_input">
										<input class="form-control" id="phone" name="phone" placeholder="{$core->get_Lang('Enter your phone number')}" type="text" value="{$phone}" />
										{if $errMsgPhone}<label for="phone" generated="true" class="error">{$errMsgPhone}!</label>{/if}
									</div>
								</div>						
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input">{$core->get_Lang('Contact')}*:</label>
									</div>
									<div class="box_input">
										<select name="please" id="please" class="form-control required">
											<option value="">{$core->get_Lang('Select')}</option>
											<option {if $please eq 1}selected="selected"{/if} value="1">{$core->get_Lang('Send me more details via email')}</option>
											<option {if $please eq 2}selected="selected"{/if} value="2">{$core->get_Lang('Call me if possible')}</option>
										</select>
										{if $errMsgContact}<label for="please" generated="true" class="error">{$errMsgContact}!</label>{/if}
									</div>
								</div>
							</div>
						</div>
						<div class="center">
							<div class="text_note text-center text-muted mb20">
                                {assign var=site_tailor_idea value=site_tailor_idea_|cat:$_LANG_ID}
                                {$clsConfiguration->getValue($site_tailor_idea)|html_entity_decode}
                            </div>
							<div class="form-group mb24_mb text-center relative">
								<div class="g-recaptcha" data-sitekey="{$clsISO->getVar('reCAPTCHA_KEY')}"></div>
								{if $errMsgCaptcha}
								<label for="" class="error">{$errMsgCaptcha}</label>
								{/if}
							</div>
							<div class="d-flex justify-content-center">
								<input type="hidden" name="plantrip" value="plantrip" />
								<input type="hidden" name="type" id="tabtype" value="{if $type eq ''}1{else}{$type}{/if}" />
								<input type="hidden" name="tour_id" value="{$tour_id}" />
								<input type="hidden" id="lst_country_id" name="lst_country_id" value="{if $lst_country_id ne ''}{$lst_country_id}{else}{$lstCountryEx[0].country_id}{/if}" />
								<input type="hidden" id="lst_city_id" name="lst_city_id" value="{$lst_city_id}" />
								<button class="btn-book" name="submit" type="submit">{$core->get_Lang('Request a quote')}</button>
							</div>
						</div>
					</div>
				</div>
			</form>
        </div>
    </div>
</div>
<script type="text/javascript">
    var city_list = '{$city_list}';
    var $Loading = '{$core->get_Lang("Loading")}';
    var selectmonth='{$core->get_Lang("select month")}';
    var Input_data_is_invalid='{$core->get_Lang("Input data is invalid")}';
    var $_LANG_ID = '{$_LANG_ID}';
    var Adults='{$core->get_Lang("Adults")}';
    var Children='{$core->get_Lang("Children")}';
    var Infants='{$core->get_Lang("Infants")}';
    var Room='{$core->get_Lang("Room")}';
    var Departure_date_invalid='{$core->get_Lang("Departure date is invalid")}';
	var Please_choose_departure_date='{$core->get_Lang("Please choose departure date")}';
	var Warning='{$core->get_Lang("Warning")}';
    var list_start_date=['{$list_start_date}'];
    var $check_tour_promotion='{$check_tour_promotion}';
	var $check_tour_start_date='{$check_tour_start_date}';
	var getSelectAgeChild = `{$clsISO->getSelectAgeChildTailor()}`;
	var error_gender = `{$core->get_Lang('Title is required')}`;
	var error_full_name = `{$core->get_Lang('Full name is required')}`;
	var error_email_required = `{$core->get_Lang('Email is required')}`;
	var error_email_valid = `{$core->get_Lang('Email is valid')}`;
	var error_secondary_email_required = `{$core->get_Lang('Secondary email is required')}`;
	var error_secondary_email_valid = `{$core->get_Lang('Secondary email is valid')}`;	
	var error_phone = `{$core->get_Lang('Phone number is required')}`;
	var error_country = `{$core->get_Lang('Nationality is required')}`;
	var error_please = `{$core->get_Lang('Contact is required')}`;
</script>

{literal}
<style type="text/css">
    .form-horizontal .checkbox{min-height: 22px !important}
</style>
<script type="text/javascript">	
    function getCheckBoxValueByClass(classname) {
        var names = [];
        $('.' + classname + ':checked').each(function () {
            names.push(this.value);
        });
        return names;
    }
    function loadDestination(el) {
		var country_id = $(el).val();
		var box_city = $(el).data('id');
        var adata = {
            'country_id': country_id,
			'list_city_id': $('#lst_city_id').val()
        };
        $.ajax({
            type: "POST",
            url: path_ajax_script + '/index.php?mod=tailor&act=getCityDestination&lang='+LANG_ID,
            data: adata,
            dataType: "html",
            success: function (html) {
				$('#'+box_city).html(html);
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
		var value = $totalAdult + ' ' +Adults;
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
	$(document).click(function (e){	
		var container1 = $("#check_number_travellers");
		var container2 = $("#check_tour_guide");
		if (!container1.is(e.target) && container1.has(e.target).length === 0 && !$('#pick_travellers').is(e.target) ){
			container1.hide();
		}
		if (!container2.is(e.target) && container2.has(e.target).length === 0 && !$('.tour_guide').is(e.target) ){
			container2.hide();
		}
	});
    $().ready(function () {
		$("#form_customize").validate({
			rules:	{
				'name':{
					required: true
				},
				'email':{
					required: true,
					email: true
				},
				'phone':{
					required: true,
				},
				'country__id':{
					required: true,
				},
				'please':{
					required: true,
				}
			},
			messages:{
				'name':{
					required: error_full_name
				},
				'email':{
					required: error_email_required,
					email: error_email_valid
				},
				'phone':{
					required: error_phone,
				},
				'country__id':{
					required: error_country,
				},
				'please':{
					required: error_please,
				}
			}
		});
		
        /* Init Func */
		$('input.chkitem').each(function(index,elm){
			if($(elm).is(":checked")){
				loadDestination($(elm));	
			}			
		});
		
		
        $('input[class=chkitem]').on('change', function () {
			if($(this).is(':checked')){
				$(this).closest('.box_header').find('.title_country').addClass('check');					
            	var $lst_country_id = getCheckBoxValueByClass('chkitem');
            	$('#lst_country_id').val($lst_country_id.join());
				loadDestination($(this));
				var $lst_city_id = getCheckBoxValueByClass('chkid_city');
				$('#lst_city_id').val($lst_city_id.join());
			}else{
				$(this).closest('.box_header').find('.title_country').removeClass('check');
				var box_city = $(this).data('id');
				$("#"+box_city).html('');
				var $lst_city_id = getCheckBoxValueByClass('chkid_city');
				$('#lst_city_id').val($lst_city_id.join());
			}            
            return false;
        });
		
		$(document).on('change','input[class=chkid_city]',function () {
            var $lst_city_id = getCheckBoxValueByClass('chkid_city');
            $('#lst_city_id').val($lst_city_id.join());
            return false;
        });
        /*$('input[class=chkid_city]').on('change', function () {
            var $lst_city_id = getCheckBoxValueByClass('chkid_city');
            $('#lst_city_id').val($lst_city_id.join());
            return false;
        });*/
		
	$('input[name="number_travellers"]').click(function(){
		$("#check_number_travellers").toggle();
		$("#check_tour_guide").hide();
	});
	$('input[name="tour_guide"]').click(function(){
		$("#check_tour_guide").toggle();
		$("#check_number_travellers").hide();
	});
	
	$('input[name="tour_guide_id"]').click(function(){
		var title = $(this).data('title');
		$('input[name="tour_guide"]').val(title);
	});
	$('.number_adults').on('focusout',function(){
		var value = $(this).val();
		if(parseInt(value) < 1 || value == ''){
			$(this).val(1);
		}
		getNumberPerson();
	});
	$('.number_child').on('focusout',function(){
		var value = $(this).val();
		if(parseInt(value) < 0 || value == ''){
			value = 0;
			$(this).val(0);
		}
		$('#box_age_child').html('');
		for(var i=0; i<value; i++){
			$('#box_age_child').append(`<div class="item_age_child">`+getSelectAgeChild+`</div>`);
		}
		getNumberPerson();
	});
		
	$('.number_infants,.number_room').on('focusout',function(){
		var value = $(this).val();
		if(parseInt(value) < 0 || value == ''){
			$(this).val(0);
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
		$("#national_visitor"+traveler_type_id).val(val);
		$('#'+_type).val(val);	
		if(_type == 'number_child'){
			$('#box_age_child').html('');
			for(var i=0; i<val; i++){
				$('#box_age_child').append(`<div class="item_age_child">`+getSelectAgeChild+`</div>`);
			}
		}
		if(_type == 'number_room'){
			var value = $('input[name="number_room"]').val();
			$('input[name="number_room"]').val(parseInt(value) + 1);
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

		if(_type == 'number_child'){
			$('#box_age_child').html('');
			for(var i=0; i<val; i++){
				$('#box_age_child').append(`<div class="item_age_child">`+getSelectAgeChild+`</div>`);
			}
		}

		if(_type == 'number_room'){
			var value = $('input[name="number_room"]').val();
			if(parseInt(value) > 0){
				$('input[name="number_room"]').val(parseInt(value) - 1);	
			}				
		}
		getNumberPerson();
		return false;
	});
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
	});
		
		
		/*===========*/
        if ($('#clienttabs li').length > 0) {
            $('#clienttabs li').each(function (index) {
                $(this).attr('id', 'customize_tabbox_' + (index + 1));
            });
            $('.customize_tabbox').each(function (index) {
                $(this).attr('id', 'customize_tabbox_' + (index + 1) + '_content');
            });
            $('#clienttabs li').live('click', function () {
                var $_this = $(this);
                var $cu = $_this.attr('id');
                var $s = $cu.split('_');
                $('.customize_tabbox:visible').hide();
                $('#' + $cu + '_content').show();
                $('#tabtype').val($s[2]);
                $('#clienttabs li a.current').removeClass('current');
                $_this.find('a').addClass('current');
                return false;
            });
        }
        $('#form_customize').validate();
        /* Replace Text */
        if ($('textarea[name=request_1]').length > 0) {
            var request_1 = $('textarea[name=request_1]').val();
            if (request_1 != '') {
                request_1 = request_1.replace(/<br\s?\/?>/g, "\n");
                $('textarea[name=request_1]').val(request_1);
            }
        }
        if ($('textarea[name=request_2]').length > 0) {
            var request_2 = $('textarea[name=request_2]').val();
            if (request_2 != '') {
                request_2 = request_2.replace(/<br\s?\/?>/g, "\n");
                $('textarea[name=request_2]').val(request_2);
            }
        }
        if ($('textarea[name=other_des]').length > 0) {
            var other_des = $('textarea[name=other_des]').val();
            if (other_des != '') {
                other_des = other_des.replace(/<br\s?\/?>/g, "\n");
                $('textarea[name=other_des]').val(other_des);
            }
        }
        /* End Replace Text */
        $('input[name=date_begin]').datepicker({
			
            dateFormat: dateFormat,
            minDate: new Date(),
            onSelect: function (dateStr) {
                var date = $(this).datepicker('getDate');
                if (date) {
                    date.setDate(date.getDate() + 1);
                }
                $('input[name=date_end]').datepicker('option', {minDate: date}).datepicker('setDate', date);
            }
        });
        $('input[name=date_end]').datepicker({
            dateFormat: dateFormat,
            minDate: new Date()
        });
        $('input[name=date_begin_simple]').datepicker({
			
            dateFormat: dateFormat,
            minDate: new Date(),
            onSelect: function (dateStr) {
                var date = $(this).datepicker('getDate');
                if (date) {
                    date.setDate(date.getDate() + 1);
                }
                $('input[name=date_end_simple]').datepicker('option', {minDate: date}).datepicker('setDate', date);
            }
        });
        $('input[name=date_end_simple]').datepicker({
            dateFormat: dateFormat,
            minDate: new Date()
        });
		
       
    });
</script>
{/literal}
<script type="text/javascript" src="{$URL_JS}/jquery.validate.js?v={$upd_version}"></script>