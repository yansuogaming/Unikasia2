<form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex full-height">
			<div class="col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						{if $currentstep=='name'}
							<h3 class="title_box">{$core->get_Lang('Name and Hotel Rating')}</h3>
							<div class="inpt_tour">
								<label for="title">{$core->get_Lang('Title')} <span class="required_red">*</span>
									{assign var= title_hotel value='title_hotel'}
									{assign var= help_first value=$title_hotel}
									{if $CHECKHELP eq 1}
										<button data-key="{$title_hotel}" data-label="{$core->get_Lang('Title')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									{/if}
								</label>
								<input class="input_text_form input-title required" data-table_id="{$pvalTable}" type="text" id="title" name="title" value="{$clsClassTable->getTitle($pvalTable)}" placeholder="{$core->get_Lang('New title')}" onClick="loadHelp(this)">
								<div class="text_help" hidden="">{$clsConfiguration->getValue($title_hotel)|html_entity_decode}</div>
							</div>
							<div class="inpt_tour">
								<label>{$core->get_Lang('Rating')} <span class="required_red">*</span>
									{assign var= rate_hotel value='rate_hotel'}
									{if $CHECKHELP eq 1}
										<button data-key="{$rate_hotel}" data-label="{$core->get_Lang('Rating')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									{/if}
								</label>
								<div class="fieldarea" onClick="loadHelp(this)">
									<label class="radio inline version-xs text_normal"><input type="radio" name="star_id" {if $oneItem.star_id eq '1' or $pvalTable eq '1'}checked="checked"{/if} value="1"> {$core->get_Lang('Un Rated')}</label> 
									{section name=star start=2 loop=7 step=1}
									<label class="radio inline version-xs text_normal"><input type="radio" name="star_id" {if $oneItem.star_id eq $smarty.section.star.index}checked="checked"{/if} value="{$smarty.section.star.index}">{$smarty.section.star.index} {$core->get_Lang('star')}</label>
									{/section}
									<div class="text_help" hidden="">{$clsConfiguration->getValue($star_cruise)|html_entity_decode}</div>
								</div>
							</div>
							<div class="inpt_tour">
								<label>{$core->get_Lang('Type hotel')}</label>
								<select name="type_hotel_id" id="type_hotel_id" class="form-control">
									{$clsISO->getSelectPropertyType('TypeHotel',$oneItem.list_TypeHotel)}
								</select>
							</div>
							<div class="inpt_tour">
								<label>{$core->get_Lang('Price from')}</label>
								<input type="number" name="price_avg" min="0" step="1" value="{$oneItem.price_avg}"> <span>USD / 1 room</span>
							</div>
<!--
							<div class="inpt_tour">
							<label for="title">{$core->get_Lang('reviewhotel')}
                           		{assign var= review_hotel value='review_hotel'}
								{if $CHECKHELP eq 1}
								<button data-key="{$review_hotel}" data-label="{$core->get_Lang('reviewcruise')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
                           </label>
                            <div class="fieldarea" onClick="loadHelp(this)">
                            	<div class="text_help" hidden="">{$clsConfiguration->getValue($review_hotel)|html_entity_decode}</div>
								<div style="width: 100%; margin-right: 20px; float: left;">
									<div class="bold" style="margin:0 0 1.33em">{$core->get_Lang('Score breakdown')}</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Staff')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="staff" value="{$clsISO->formatNumberToEasyRead($clsReviewsHotel->getValueByField($pvalTable,'staff'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Amenities')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="amenities" value="{$clsISO->formatNumberToEasyRead($clsReviewsHotel->getValueByField($pvalTable,'amenities'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Clean')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="clean" value="{$clsISO->formatNumberToEasyRead($clsReviewsHotel->getValueByField($pvalTable,'clean'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Place')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="place" value="{$clsISO->formatNumberToEasyRead($clsReviewsHotel->getValueByField($pvalTable,'place'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Food/Drink')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="food_drink" value="{$clsISO->formatNumberToEasyRead($clsReviewsHotel->getValueByField($pvalTable,'food_drink'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Worthy')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="worthy" value="{$clsISO->formatNumberToEasyRead($clsReviewsHotel->getValueByField($pvalTable,'worthy'))}"  maxlength="255" type="text" /> %</div>
									</div>
								</div>
							</div>
						</div>
-->
						{elseif $currentstep=='location'}
							<h3 class="title_box">{$core->get_Lang('Location')}</h3>
							<div class="inpt_tour">
								<label for="title">{$core->get_Lang('Location')} <span class="required_red">*</span>
									{assign var= location_hotel value='location_hotel'}
									{assign var= help_first value=$location_hotel}
									{if $CHECKHELP eq 1}
										<button data-key="{$location_hotel}" data-label="{$core->get_Lang('Location')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									{/if}
								</label>
								<div class="fieldarea" onClick="loadHelp(this)">
									<div class="text_help" hidden="">{$clsConfiguration->getValue($location_hotel)|html_entity_decode}</div>
                                    <div class="d-flex" style="gap:5px">
                                     {if $clsISO->getCheckActiveModulePackage($package_id,'continent','default','default') && $core->checkAccess('continent')}
                                        <select class="slb required" style="font-size:14px;width:150px !important; height: 50px" name="iso-continent_id" continent_id="{$continent_id}">
                                            {$clsContinent->makeSelectboxOption($oneItem.continent_id)}
                                        </select>
                                        <select class="slb required" name="iso-country_id" id="slb_Country" style="font-size:14px;min-width:150px; height: 50px">
                                            <option value="0">-- {$core->get_Lang('selectcountry')} --</option>
                                        </select>
                                        {literal}
                                        <script type="text/javascript">
                                        $(function(){
                                            loadCountry(continent_id,country_id);
                                        });
                                        </script>
                                        {/literal}
                                        {else}
                                        <select class="slb required" name="iso-country_id" id="slb_Country" style="font-size:14px;min-width:150px; height: 50px">
                                            {$clsCountry->makeSelectboxOption($oneItem.country_id)}
                                        </select>
                                        {/if}
                                        {if $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
                                        <select class="slb required" name="iso-region_id" id="slb_Region" style="font-size:14px;min-width:150px; height: 50px">
                                            {$clsRegion->makeSelectboxOption($oneItem.country_id,$oneItem.region_id)}
                                        </select>
                                        {/if}
										{if $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
                                        <select class="slb required" name="iso-city_id" id="slb_City" style="font-size:14px;min-width:150px; height: 50px">
										{$clsCity->makeSelectboxOption($oneItem.city_id,$oneItem.country_id)}
                                        </select>
										{/if}
                                        <!-- <div id="slb_city_Id_Container" class="form-group">
										{if $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
                                            <select class="slb iso-selectbox required" name="iso-city_id" id="slb_City" {$oneItem.country_id} style="font-size:14px;min-width:120px">
                                                {$clsCity->makeSelectboxOption($oneItem.city_id,$oneItem.country_id)}
                                            </select>
											{/if}

                                        </div> -->
                                    </div>
								</div>
							</div>
							<div class="inpt_tour">
								<label for="title">{$core->get_Lang('Address')} <span class="required_red">*</span>
									{assign var= address_hotel value='address_hotel'}
									{if $CHECKHELP eq 1}
										<button data-key="{$address_hotel}" data-label="{$core->get_Lang('Address')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									{/if}
								</label>
								<input class="text mr10 required" name="iso-address" value="{$clsClassTable->getAddress($pvalTable)}" maxlength="255" type="text" style="width:auto; min-width:100%; max-width:500px;" onClick="loadHelp(this)" />
								<div class="text_help" hidden="">{$clsConfiguration->getValue($address_hotel)|html_entity_decode}</div>
							</div>
						{elseif $currentstep=='image'}
							{$core->getBlock('box_detail_image')}
						{elseif $currentstep=='gallery'}
							{$core->getBlock('box_detail_image-gallery')}
						{elseif $currentstep=='seo'}
							{$core->getBlock('box_detail_seotool')}
						{elseif $currentstep=='overview'}
							<h3 class="title_box mb05">{$core->get_Lang('Overview hotel')}
								{assign var= overview_hotel value='overview_hotel'}
								{assign var= help_first value=$overview_hotel}
								{if $CHECKHELP eq 1}
									<button data-key="{$overview_hotel}" data-label="{$core->get_Lang('Overview hotel')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('introoverviewhotel')}</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" class="textarea_intro_editor" data-column="{$currentstep}" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.overview}</textarea>
							</div>
						{elseif $currentstep=='checkin'}
							<h3 class="title_box mb05">{$core->get_Lang('Check-in/ Check-out')}
								{assign var= check_in_out_hotel value='check_in_out_hotel'}
								{assign var= help_first value=$check_in_out_hotel}
								{if $CHECKHELP eq 1}
									<button data-key="{$check_in_out_hotel}" data-label="{$core->get_Lang('Check-in/ Check-out')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('introcheckinhotel')}</p>
						
							<div class="inpt_tour">
							  <label class="full-width">{$core->get_Lang('Time check in')}</label>
							  <div class="form-group pick_duration" style="width: 100%">
								<input type="text" value="{$clsClassTable->getTimeCheckInOut($pvalTable,'hour_in')}" min="0" max="24" class="input_number find_select" name="hour_in">
							  </div>
							  <label class="label_duration" style="display: none;">{$core->get_Lang('Minute')}</label>  
							</div>
						
								<div class="inpt_tour">
								<label  class="full-width">{$core->get_Lang('Time check out')}</label>
														
								<div class="form-group pick_duration" style="width: 100%">
							<input type="text" value="{$clsClassTable->getTimeCheckInOut($pvalTable,'hour_out')}" min="0" max="24" class="input_number find_select" name="hour_out">
						  </div>
						  <label class="label_duration" style="display: none;">{$core->get_Lang('Minute')}</label>  
						</div>
						
						

						{literal}
<!--
							<script>
								$(document).ready(function() {
									$('.minus').click(function () {
										var $input = $(this).parent().find('input');
										var step=parseInt($(this).data('step'));
										var count = parseInt($input.val()) - step;
										count = count < 1 ? 0 : count;
										count = count<10?'0'+count:count;
										$input.val(count);
										$input.change();
										return false;
									});
									$('.plus').click(function () {
										var $input = $(this).parent().find('input');
										var step=parseInt($(this).data('step'));
										var count = parseInt($input.val()) + step;
										count = count > 60 ? 60 : count;
										count = count<10?'0'+count:count;
										$input.val(count);
										$input.change();
										return false;
									});
								});
							</script>
-->
							<style>
								input[type=number]::-webkit-inner-spin-button,
								input[type=number]::-webkit-outer-spin-button {
									-webkit-appearance: none;
								}
							</style>
						{/literal}
						{elseif $currentstep=='booking_policy'}
							<h3 class="title_box mb05">{$core->get_Lang('Accommodation')}
								{assign var= booking_policy_hotel value='booking_policy_hotel'}
								{assign var= help_first value=$booking_policy_hotel}
								{if $CHECKHELP eq 1}
									<button data-key="{$booking_policy_hotel}" data-label="{$core->get_Lang('Booking Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('introhotelaccommodationpolicy')}</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" class="textarea_intro_editor" data-column="{$currentstep}" id="textarea_intro_editor_booking_policy_{$now}" cols="255" rows="2">{$oneItem.booking_policy}</textarea>
							</div>
						{elseif $currentstep=='child_policy'}
							<h3 class="title_box mb05">{$core->get_Lang('Children and bed')}
								{assign var= child_policy_hotel value='child_policy_hotel'}
								{assign var= help_first value=$child_policy_hotel}
								{if $CHECKHELP eq 1}
									<button data-key="{$child_policy_hotel}" data-label="{$core->get_Lang('Children and bed policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('introchildpolicyhotel')}</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" class="textarea_intro_editor" data-column="{$currentstep}" id="textarea_intro_editor_child_policy_{$now}" cols="255" rows="2">{$oneItem.child_policy}</textarea>
							</div>
						{elseif $currentstep=='cancellation_policy'}
							<h3 class="title_box mb05">{$core->get_Lang('Cancellation')}
								{assign var= cancellation_policy_hotel value='cancellation_policy_hotel'}
								{assign var= help_first value=$cancellation_policy_hotel}
								{if $CHECKHELP eq 1}
									<button data-key="{$cancellation_policy_hotel}" data-label="{$core->get_Lang('Cancellation Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('introcancellationpolicyhotel')}</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" class="textarea_intro_editor" data-column="{$currentstep}" id="textarea_intro_editor_cancellation_policy_{$now}" cols="255" rows="2">{$oneItem.cancellation_policy}</textarea>
							</div>
						
							{elseif $currentstep=='exclude_policy'}
							<h3 class="title_box mb05">{$core->get_Lang('Excludes')}
								{assign var= exclude_policy_hotel value='exclude_policy_hotel'}
								{assign var= help_first value=$exclude_policy_hotel}
								{if $CHECKHELP eq 1}
									<button data-key="{$exclude_policy_hotel}" data-label="{$core->get_Lang('Excludes Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('introhotelexcludespolicy')}</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" class="textarea_intro_editor" data-column="{$currentstep}" id="textarea_intro_editor_exclude_policy_{$now}" cols="255" rows="2">{$oneItem.exclude_policy}</textarea>
							</div>
						
						{elseif $currentstep=='other_policy'}
							<h3 class="title_box mb05">{$core->get_Lang('Inclusion')}
								{assign var= other_policy_hotel value='other_policy_hotel'}
								{assign var= help_first value=$other_policy_hotel}
								{if $CHECKHELP eq 1}
									<button data-key="{$other_policy_hotel}" data-label="{$core->get_Lang('Other Rule')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('introinclusionpolicyhotel')}</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" class="textarea_intro_editor" data-column="{$currentstep}" id="textarea_intro_editor_other_policy_{$now}" cols="255" rows="2">{$oneItem.other_policy}</textarea>
							</div>
						{elseif $currentstep=='room'}
							<h3 class="title_box mb05">{$core->get_Lang('List Room')}
								{assign var= list_room_hotel value='list_room_hotel'}
								{assign var= help_first value=$list_room_hotel}
								{if $CHECKHELP eq 1}
									<button data-key="{$list_room_hotel}" data-label="{$core->get_Lang('List Room')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('introhotelroom')}</p>
							<div class="inpt_tour">
								{$core->getBlock('box_detail_hotel_room')}
							</div>
							<script type="text/javascript" src="{$URL_JS}/repeater.js?v={$upd_version}"></script>
						
						{elseif $currentstep=='room_facilities'}
							<h3 class="title_box mb05">{$core->get_Lang('Room facilities')}</h3>
							<p class="intro_box mb40">{$core->get_Lang('introroomfacilities')}</p>
							<div class="inpt_tour">
								{$core->getBlock('box_detail_room_facilities')}
							</div>
						{elseif $currentstep=='hotel_facilities'}
							<h3 class="title_box mb05">{$core->get_Lang('Hotel facilities')}</h3>
							<p class="intro_box mb40">{$core->get_Lang('introhotelfacilities')}</p>
							<div class="inpt_tour">
								{$core->getBlock('box_detail_hotel_facilities')}
							</div>
						{elseif $currentstep=='add_on'}
							<h3 class="title_box mb05">{$core->get_Lang('Add On')}</h3>
							<div class="inpt_tour">
								{$core->getBlock('box_detail_hote_add_on')}
							</div>
						{else}
						{/if}

						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$arrStep[$step].key}" data-prevstep="{$prevstep}" class="back_step js_save_back">{$core->get_Lang('Back')}</a>

							<a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$currentstep}" data-next_step="{$nextstep}" class="js_save_continue">{$core->get_Lang('Save &amp; Continue')}</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col_instruction">
				<div class="instruction_fill_data_box">
					<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> {$core->get_Lang('Instructions')}</p>
					<div class="content_box">{$clsConfiguration->getValue($help_first)|html_entity_decode}</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script>
	var errorExistRoomName = "{$core->get_Lang('Room Name exist')}";
	var list_check_target = {$list_check_target};
</script>
{literal}
	<script>
		if($('.textarea_intro_editor').length > 0){
			$('.textarea_intro_editor').each(function(){
				var $_this = $(this);
				var $editorID = $_this.attr('id');
				$('#'+$editorID).isoTextAreaFull();
			});
		}		
		$.each( list_check_target, function( i, val ) {
			if(val.status == 1){
				$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_success");
			}else{
				$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_caution");
			}
		});


	</script>
{/literal}