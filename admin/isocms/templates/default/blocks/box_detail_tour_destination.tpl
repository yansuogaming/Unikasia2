<div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box mb05">{$core->get_Lang('Destination')}
				{assign var= destination_tour value='destination_tour'}
				{if $CHECKHELP eq 1}
				<button data-key="{$destination_tour}" data-label="{$core->get_Lang('Destination')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
				{/if}
				</h3>
				<p class="intro_box mb20">{$core->get_Lang('introdestination')}</p>
				<div class="form_option_tour">
					{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'group','default') && $_LANG_ID eq 'vn'}
					<div class="form-group inpt_tour">
						<label class="col-form-label">{$core->get_Lang('tourgroup')}</label>
						<div class="fieldarea">
							<select name="tour_group_id" class="slb full iso-selectbox" id="slb_TourGroupDes" tp="multiple" style="width:260px;">
								{$clsTourGroup->makeSelectboxOption($tour_group_id)}
							</select>
						</div>
					</div>
					{/if}
					<div class="inpt_tour p-b-30">
						<div class="form-inline select_location_map">
							{assign var = SiteModActive_continent value = $clsISO->getCheckActiveModulePackage($package_id,'continent','default','default')}
							{assign var = SiteModActive_country value = $clsISO->getCheckActiveModulePackage($package_id,'country','default','default')}
							{assign var = SiteActive_region value = $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
							{assign var = SiteActive_city value = $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
							{assign var = SiteHasGroup_Tours value = $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','group','default')}
							{*{if $tour_group_id eq '2'}
								<input type="hidden" class="Hid_Country" name="country_id" value="4"/>
								{if $SiteActive_region eq '1'}
								<div id="slb_region_Id_Container" class="form-group w-150px mr-2">
									<select id="slb_RegionID" class="form-control slb_Region_Id iso-selectbox" toId="slb_CityID" name="region_id" data-width="100%">
										{$clsRegion->makeSelectboxOption(4)}
									</select> 
								</div>
								{/if} 
							{else}
								{if $SiteModActive_continent}
								<div class="form-group w-150px mr-2">
									<select class="form-control slb_Chauluc_Id iso-selectbox" toId="slb_CountryID" name="chauluc_id" id="slb_Chauluc" data-width="100%">
										{$clsContinent->makeSelectboxOption()}
									</select>
								</div>
								{/if}
								{if $SiteModActive_country} 
									<div id="slb_country_Id_Container" class="form-group{if $SiteModActive_continent eq '1'} hidden{/if} w-150px mr-2">
										<select id="slb_CountryID" class="form-control slb_Country_Id iso-selectbox" SiteActive_region="{$SiteActive_region}" SiteActive_city="{$SiteActive_city}" toId="{if $SiteActive_region}slb_RegionID{else}slb_CityID{/if}" 
										name="country_id" data-width="100%">
										{if $SiteModActive_continent eq '1'}
											<option value="0">{$core->get_Lang('Select country')}</option>
										{else}
											{$clsCountryEx->makeSelectboxOption(0,0)}
										{/if}
										</select> 
									</div>
								{/if} 
								{if $SiteActive_region eq '1'}
								<div id="slb_region_Id_Container" class="form-group w-150px{if $SiteModActive_continent eq '1' && $SiteModActive_country eq '1'} hidden{/if} mr-2">
									<select id="slb_RegionID" class="form-control slb_Region_Id iso-selectbox" toId="slb_CityID" name="region_id" data-width="100%">
										<option value="0">{$core->get_Lang('selectregion')}</option>
									</select> 
								</div>
								{/if} 
							{/if}*}
							{if $SiteModActive_continent}
								<div class="form-group w-150px mr-2">
									<select class="form-control slb_Chauluc_Id iso-selectbox" toId="slb_CountryID" name="chauluc_id" id="slb_Chauluc" data-width="100%">
										{$clsContinent->makeSelectboxOption()}
									</select>
								</div>
							{/if}
							{if $SiteModActive_country} 
									<div id="slb_country_Id_Container" class="form-group{if $SiteModActive_continent eq '1'} hidden{/if} w-150px mr-2">
										<select id="slb_CountryID" class="form-control slb_Country_Id iso-selectbox" SiteActive_region="{$SiteActive_region}" SiteActive_city="{$SiteActive_city}" toId="{if $SiteActive_region}slb_RegionID{else}slb_CityID{/if}" 
										name="country_id" data-width="100%">
										{if $SiteModActive_continent eq '1'}
											<option value="0">{$core->get_Lang('Select country')}</option>
										{else}
											{$clsCountryEx->makeSelectboxOption(0,0)}
										{/if}
										</select> 
									</div>
							{/if} 
							{if $SiteActive_region eq '1'}
								<div id="slb_region_Id_Container" class="form-group w-150px{if $SiteModActive_continent eq '1' && $SiteModActive_country eq '1'} hidden{/if} mr-2">
									<select id="slb_RegionID" class="form-control slb_Region_Id iso-selectbox" toId="slb_CityID" name="region_id" data-width="100%">
										<option value="0">{$core->get_Lang('selectregion')}</option>
									</select> 
								</div>
							{/if} 
							
							{if $SiteActive_city eq '1'}
							<div id="slb_city_Id_Container" class="form-group w-150px hidden mr-2">
								<select id="slb_CityID" class="form-control slb_City_Id iso-selectbox" toId="slb_placetogoID" name="city_id" data-width="100%">
									<option value="0">{$core->get_Lang('selectcity')}</option>
								</select> 
							</div>
							{/if}
							{*<div id="slb_placetogoID_Container" class="form-group w-200px hidden mr-2">
								<select id="slb_placetogoID" class="form-control slb_placetogo_Id iso-selectbox" name="placetogo_id" data-width="100%">
									<option value="0">{$core->get_Lang('selectplacetogo')}</option>
								</select>
							</div>*}
							<div class="form-group">
								<button class="btn btn-50 btn-main ajQuickAddDestination" type="button">
									{$core->get_Lang('adddestination')}
								</button>
							</div>
						</div>
						<hr class="clearfix" />
						<div class="mt-half">
							<ul class="list-group" id="lstDestination">
								<li>{$core->get_Lang('Loading')}...</li>
							</ul>
							<div class="clearfix mt-half"></div>
							<span class="help-block text-blue">(<span class="requiredMask">*</span>) {$core->get_Lang('infoless1destination')}</span>
						</div>
						<div class="map_location_des">
							<div class="p-b-30 clearfix">
								{$core->getBlock('Lbox_map_tour_new')}
							</div>
							<div class="form-group">
								<label class="col-form-label">{$core->get_Lang('MapZoom')}</label>
								<input type="text" class="form-control" width="255" name="iso-map_zoom" id="map_zoom_tour" value="{$oneItem.map_zoom}" />
							</div>
						</div>
					</div>
				</div>
				<div class="btn_save_titile_trip_code">
					<a tour_id="{$pvalTable}" cat_run="{$cat_run}" prev_step="{if $child_cat_menu_j_index_prev eq ''}{if $list_cat_menu_prev eq ''}{$child_cat_menu_j}{/if}{if $list_cat_menu_prev ne ''}{$list_cat_menu_prev}/{$child_cat_menu_prev[$count_child_cat_menu_prev]}{/if}{else}{$child_cat_menu_j_index_prev}{/if}" class="back_step">{$core->get_Lang('Back')}</a>
					<a id="btn-save-img-file"  tour_id="{$pvalTable}" cat_run="{$cat_run}" status="skip" present_step="{$child_cat_menu_j}" next_step="{if $child_cat_menu_j_index_next eq ''}{if $list_menu_tour_i_index_next.cat_menu eq ''}SaveAll{/if}{if $list_menu_tour_i_index_next.cat_menu ne ''}{$list_cat_menu_next}/{$child_cat_menu_next[0]}{/if}{else}{$child_cat_menu_j_index_next}{/if}" class="save_and_continue_tour">{$core->get_Lang('Save &amp; Continue')}</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> {$core->get_Lang('Instructions')}</p>
				<div class="content_box">
					<p class="mb0">{$clsConfiguration->getValue($destination_tour)|html_entity_decode}</p>
				</div>
			</div>
		</div>
	</div>
</div>
{literal}
<script type="text/javascript">
	$().ready(function() {
		loadListDestination(tour_id);
		if ($SiteHasDestinationTours == 1) {
			//loadMaps(tour_id);
		}
	});
</script>
{/literal}


