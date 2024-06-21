<form action="" method="post" enctype="multipart/form-data" class="validate-form" id="frm_addCruideItinerary">
	<div class="box_head_cabin d-flex justify-content-between">
		<div class="d-flex">
			<a href="javscript:void(0);" class="back_list btn_back_list_itinerary"><i class="fa fa-angle-left"></i></a>
			<p class="title_add_cabin title_add_itinerary">{$clsCruiseItinerary->getDuration($cruise_itinerary_id)}</p>
		</div>
		<button id="submit_form" type="submit" class="btn_save_cruise_new btn_save_cruise_itinerary">{$core->get_Lang('Continute')}</button>
	</div>
	<div class="box_body_cabin">
		<div class="row">
			<div class="col-md-12">
				<div class="inpt_tour">
					<label for="title">{$core->get_Lang('Number day')}</label>
					<div class="d-flex flex-wrap">
						<div class="d-flex align-items-center number_duration_days number_duration_days_new mr-5">
							<div class="box_duration_in">
								<input min-number="1" max-number="999" type="text" class="input_number numberonly find_select inp_number_day" name="number_day" id="duration_days" value="{$oneCruiseItinerary.number_day}">
								<a class="unNum number_day">-</a>
								<a class="upNum number_day">+</a>
							</div>
							<label for="duration_days">{$core->get_Lang('Day')}</label>
						</div>
						<div class="d-flex align-items-center number_duration_days number_duration_days_new mr-5">
							<div class="box_duration_in">
								<input min-number="0" max-number="999" type="text" class="input_number numberonly find_select inp_number_night" name="number_night" id="duration_days" value="{$oneCruiseItinerary.number_night}">
								<a class="unNum number_night">-</a>
								<a class="upNum number_night">+</a>
							</div>
							<label for="duration_days">{$core->get_Lang('Night')}</label>
						</div>
					</div>
				</div>
				{if $cruise_itinerary_id}
				<div class="inpt_tour">
					<label>{$core->get_Lang('Price Itinerary')}</label>
					<div class="input-group" style="max-width: 300px;">
						<input class="form-control price-In price_itinerary" name="price_itinerary" value="{$oneCruiseItinerary.price_itinerary}" type="text" style="text-align: right;">
						<span class="input-group-addon">USD</span>
					</div>
				</div>
				<div class="form-group inpt_tour">
					<label for="title">{$core->get_Lang('Destinations')}</label>
					{*<div class="row-span">
						{if $clsISO->getCheckActiveModulePackage($package_id,'continent','default ','default')}
						<select class="slb slb_50 span20 mr5 fl chosen-select" name="chauluc_id" id="slb_Chauluc" style="width:150px !important;">
							{$clsContinent->makeSelectboxOption()}
						</select>
						{/if}
						{if $clsISO->getCheckActiveModulePackage($package_id,'country','default ','default')}
						<select class="slb slb_50 mr5 fl chosen-select" name="country_id" id="slb_Country" style="width:150px !important;">
							<option value="0">-- {$core->get_Lang('selectcountry')} --</option>
						</select>
						{/if}
						{if $clsISO->getCheckActiveModulePackage($package_id,'region','default ','default')}
						<select class="slb slb_50 mr5 fl chosen-select" id="slb_RegionID" name="region_id" style="width:150px !important;">
							<option value="0">-- {$core->get_Lang('selectregion')} --</option>
						</select>
						{/if}
						<select class="slb slb_50 mr10 fl chosen-select" id="slb_CityID" name="city_id" style="width:150px !important">
							<option value="0">-- {$core->get_Lang('selectcity')} --</option>
						</select>
						<select class="slb slb_50 mr10 fl chosen-select" id="slb_placetogoID" name="placetogo_id" style="width:150px !important;">
							<option value="0">{$core->get_Lang('selectplacetogo')}</option>
						</select>
						<button class="fl btn-add ajQuickAddDestination" type="button">{$core->get_Lang('adddestination')}</button>
					</div>*}
					<div class="clear"><br /></div>
					<div class="form-inline select_location_map">
						{assign var = SiteModActive_continent value = $clsISO->getCheckActiveModulePackage($package_id,'continent','default','default')}
						{assign var = SiteModActive_country value = $clsISO->getCheckActiveModulePackage($package_id,'country','default','default')}
						{assign var = SiteActive_region value = $clsISO->getCheckActiveModulePackage($package_id,'region','default','default')}
						{assign var = SiteActive_city value = $clsISO->getCheckActiveModulePackage($package_id,'city','default','default')}
						{assign var = SiteHasGroup_Tours value = $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','group','default')}
						{*{if $tour_group_id eq '2'}
						<input type="hidden" class="Hid_Country" name="country_id" value="4" />
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
							<select id="slb_CountryID" class="form-control slb_Country_Id iso-selectbox" SiteActive_region="{$SiteActive_region}" SiteActive_city="{$SiteActive_city}" toId="{if $SiteActive_region}slb_RegionID{else}slb_CityID{/if}" name="country_id" data-width="100%">
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
							<select id="slb_CountryID" class="form-control slb_Country_Id iso-selectbox" SiteActive_region="{$SiteActive_region}" SiteActive_city="{$SiteActive_city}" toId="{if $SiteActive_region}slb_RegionID{else}slb_CityID{/if}" name="country_id" data-width="100%">
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
						<div id="slb_placetogoID_Container" class="form-group w-200px hidden mr-2">
							<select id="slb_placetogoID" class="form-control slb_placetogo_Id iso-selectbox" name="placetogo_id" data-width="100%">
								<option value="0">{$core->get_Lang('selectplacetogo')}</option>
							</select>
						</div>
						<div class="form-group">
							<button class="btn btn-50 btn-main ajQuickAddDestination" type="button">
								{$core->get_Lang('adddestination')}
							</button>
						</div>
					</div>
					<div class="row-span">
						<div style="padding-left:10px">
							<ul class="list-group" id="lstDestination"></ul>
							<div class="clearfix mt10"></div>
						</div>
					</div>
				</div>
				{/if}
			</div>
			{if $cruise_itinerary_id}
			<div class="col-md-12">
				<div class="form-group inpt_tour hidden">
					<label for="title">{$core->get_Lang('About')}</label>
					<div class="row-span">
						<textarea style="width:100%" table_id="{$pvalTable}" name="intro" class="textarea_intro_editor" data-column="intro" id="textarea_intro_cruise_itinerary_editor_overview_{$now}" cols="255" rows="2">{$oneCruiseItinerary.intro}</textarea>
					</div>
				</div>
				<div class="form_option_tour">
					<div class="inpt_tour">
						<div class="hastable">
							<table class="table tbl-grid table-striped table_responsive table_itinerary_day" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th class="gridheader hiden_responsive" style="text-align:left; width:80px"><strong>{$core->get_Lang('Day')}</strong></th>
										<th class="gridheader name_responsive name_responsive4" colspan="2" style="text-align:left"><strong>{$core->get_Lang('Title')}</strong></th>

										<th class="gridheader hiden_responsive" style="text-align:center; width:100px"></th>
									</tr>
								</thead>
								<tbody id="tblCruiseItineraryDay" data-number_day="{$number_day}"></tbody>
							</table>
						</div>
						<a class="btn_additinerary clickToAddItineraryDay" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add itinerary')}</a>
					</div>
				</div>
			</div>
			{/if}
		</div>
		{if $cruise_itinerary_id}
		{if $clsISO->getCheckActiveModulePackage($package_id,'cruise','service','default')}
		<div class="form-group inpt_tour">
			<label for="title">{$core->get_Lang('servicecruises')}</label>
			<div class="row-span">
				<div id="servicecruises" class="">
					<div class="admin-toolbar-action" style="float: unset"> <a href="https://isocms.com/admin/?mod=cruise&act=service" target="_blank" style="text-decoration: underline">{$core->get_Lang('Change')}</a> </div>
					<div class="service_right mt20">
						<table class="tbl-grid" cellpadding="0" width="100%">
							<tr>
								<td class="gridheader"><input rel="fa_sv" id="all_check" type="checkbox" /></td>
								<td class="gridheader"><strong>{$core->get_Lang('index')}</strong></td>
								<td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></td>
								<td class="gridheader" style="width:15%;text-align:right">
									<strong>{$core->get_Lang('price')} ({$clsISO->getRate()})</strong>
								</td>
							</tr>
							{section name=i loop=$lstService}
							<tr class="{cycle values=" row1,row2"}">
								<td class="index"><input class="fa_sv" type="checkbox" {if $clsISO->checkContainer($oneCruiseItinerary.listService,$lstService[i].cruise_service_id)}checked="checked"{/if} name="listService[]" value="{$lstService[i].cruise_service_id}" /></td>
								<td class="index"> {$smarty.section.i.index+1}</td>
								<td>{$clsCruiseService->getTitle($lstService[i].cruise_service_id)}</td>
								<td style="text-align:right; white-space:nowrap">
									<strong class="format_price" style="font-size:13px">
										{$clsCruiseService->getPrice($lstService[i].cruise_service_id)} {$clsISO->getRate()}
									</strong>
								</td>
							</tr>
							{/section}
						</table>
					</div>
				</div>
			</div>
		</div>
		{/if}
		{/if}
	</div>
	<div class="box_footer_cabin">
		<button type="button" class="btn_back_cabin">{$core->get_Lang('Back')}</button>
		<input type="hidden" name="cabin_id" value="{$cabin_id}">
		<button id="submit_form" type="submit" class="btn_save_cruise_new btn_save_cruise_itinerary">{$core->get_Lang('Continute')}</button>
	</div>
</form>
<script>
	var $cruise_itinerary_id = '{$cruise_itinerary_id}';
	var $cruise_id = '{$cruise_id}';
</script>
{literal}
<script>
	loadCruiseItineraryDay($cruise_itinerary_id);
	if ($SiteHasDestinationCruises == '1') {
		loadListDestination($cruise_itinerary_id);
	}
	if ($SiteHasDestinationCruises == '1') {
		setSelectBoxDestination();

		if ($SiteModActive_continent == 0 && $SiteModActive_country == 1) {
			loadCountry();
		}
		if ($SiteModActive_continent == 0 && $SiteModActive_country == 0 && $SiteModActive_country == 0) {
			loadCity();
		}
	}
</script>
{/literal}