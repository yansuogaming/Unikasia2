<?php
/* Smarty version 3.1.38, created on 2024-04-09 10:15:57
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/ajLoadFormItinerary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614b2edb61e36_33184568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae74157105343d9c4529850277ab5197e619a8e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/ajLoadFormItinerary.tpl',
      1 => 1711011938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614b2edb61e36_33184568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<form action="" method="post"  enctype="multipart/form-data" class="validate-form" id="frm_addCruideItinerary">
	<div class="box_head_cabin d-flex justify-content-between">
		<div class="d-flex">
			<a href="javscript:void(0);" class="back_list btn_back_list_itinerary"><i class="fa fa-angle-left"></i></a>
			<p class="title_add_cabin title_add_itinerary"><?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getDuration($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value);?>
</p>
		</div>
		<button id="submit_form" type="submit" class="btn_save_cruise_new btn_save_cruise_itinerary"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Continute');?>
</button>
	</div>
	<div class="box_body_cabin">
		<div class="row">
			<div class="col-md-12">
				<div class="inpt_tour">
					<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Number day');?>
</label>
					<div class="d-flex flex-wrap">
						<div class="d-flex align-items-center number_duration_days number_duration_days_new mr-5"> 
							<div class="box_duration_in"> 
								<input min-number="1" max-number="999" type="text" class="input_number numberonly find_select inp_number_day" name="number_day" id="duration_days" value="<?php echo $_smarty_tpl->tpl_vars['oneCruiseItinerary']->value['number_day'];?>
"> 
								<a class="unNum number_day">-</a> 
								<a class="upNum number_day">+</a> 
							</div> 
							<label for="duration_days"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Day');?>
</label> 
						</div>
						<div class="d-flex align-items-center number_duration_days number_duration_days_new mr-5"> 
							<div class="box_duration_in"> 
								<input min-number="0" max-number="999" type="text" class="input_number numberonly find_select inp_number_night" name="number_night" id="duration_days" value="<?php echo $_smarty_tpl->tpl_vars['oneCruiseItinerary']->value['number_night'];?>
"> 
								<a class="unNum number_night">-</a> 
								<a class="upNum number_night">+</a>
							</div> 
							<label for="duration_days"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Night');?>
</label> 
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value) {?>
				<div class="form-group inpt_tour">
					<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
</label>
										<div class="clear"><br /></div>
					<div class="form-inline select_location_map">
						<?php $_smarty_tpl->_assignInScope('SiteModActive_continent', $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'continent','default','default'));?>
						<?php $_smarty_tpl->_assignInScope('SiteModActive_country', $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default'));?>
						<?php $_smarty_tpl->_assignInScope('SiteActive_region', $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default'));?>
						<?php $_smarty_tpl->_assignInScope('SiteActive_city', $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'city','default','default'));?>
						<?php $_smarty_tpl->_assignInScope('SiteHasGroup_Tours', $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','group','default'));?>
												<?php if ($_smarty_tpl->tpl_vars['SiteModActive_continent']->value) {?>
							<div class="form-group w-150px mr-2">
								<select class="form-control slb_Chauluc_Id iso-selectbox" toId="slb_CountryID" name="chauluc_id" id="slb_Chauluc" data-width="100%">
									<?php echo $_smarty_tpl->tpl_vars['clsContinent']->value->makeSelectboxOption();?>

								</select>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['SiteModActive_country']->value) {?> 
								<div id="slb_country_Id_Container" class="form-group<?php if ($_smarty_tpl->tpl_vars['SiteModActive_continent']->value == '1') {?> hidden<?php }?> w-150px mr-2">
									<select id="slb_CountryID" class="form-control slb_Country_Id iso-selectbox" SiteActive_region="<?php echo $_smarty_tpl->tpl_vars['SiteActive_region']->value;?>
" SiteActive_city="<?php echo $_smarty_tpl->tpl_vars['SiteActive_city']->value;?>
" toId="<?php if ($_smarty_tpl->tpl_vars['SiteActive_region']->value) {?>slb_RegionID<?php } else { ?>slb_CityID<?php }?>" 
									name="country_id" data-width="100%">
									<?php if ($_smarty_tpl->tpl_vars['SiteModActive_continent']->value == '1') {?>
										<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select country');?>
</option>
									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->makeSelectboxOption(0,0);?>

									<?php }?>
									</select> 
								</div>
						<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['SiteActive_region']->value == '1') {?>
							<div id="slb_region_Id_Container" class="form-group w-150px<?php if ($_smarty_tpl->tpl_vars['SiteModActive_continent']->value == '1' && $_smarty_tpl->tpl_vars['SiteModActive_country']->value == '1') {?> hidden<?php }?> mr-2">
								<select id="slb_RegionID" class="form-control slb_Region_Id iso-selectbox" toId="slb_CityID" name="region_id" data-width="100%">
									<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectregion');?>
</option>
								</select> 
							</div>
						<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['SiteActive_city']->value == '1') {?>
						<div id="slb_city_Id_Container" class="form-group w-150px hidden mr-2">
							<select id="slb_CityID" class="form-control slb_City_Id iso-selectbox" toId="slb_placetogoID" name="city_id" data-width="100%">
								<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectcity');?>
</option>
							</select> 
						</div>
						<?php }?>
						<div id="slb_placetogoID_Container" class="form-group w-200px hidden mr-2">
							<select id="slb_placetogoID" class="form-control slb_placetogo_Id iso-selectbox" name="placetogo_id" data-width="100%">
								<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectplacetogo');?>
</option>
							</select>
						</div>
						<div class="form-group">
							<button class="btn btn-50 btn-main ajQuickAddDestination" type="button">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adddestination');?>

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
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value) {?>
			<div class="col-md-12">
				<div class="form-group inpt_tour">
					<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About');?>
</label>
					<div class="row-span">
						<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="intro" class="textarea_intro_editor" data-column="intro" id="textarea_intro_cruise_itinerary_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneCruiseItinerary']->value['intro'];?>
</textarea>
					</div>
				</div>
				<div class="form_option_tour">
					<div class="inpt_tour">
						<div class="hastable">
						<table class="table tbl-grid table-striped table_responsive table_itinerary_day" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th class="gridheader hiden_responsive" style="text-align:left; width:80px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Day');?>
</strong></th>
									<th class="gridheader name_responsive name_responsive4" colspan="2" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</strong></th>
									<th class="gridheader hiden_responsive" style="text-align:left; width:230px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meals');?>
</strong></th>
									<th class="gridheader hiden_responsive" style="text-align:center; width:100px"></th>
								</tr>
							</thead>
							<tbody id="tblCruiseItineraryDay" data-number_day="<?php echo $_smarty_tpl->tpl_vars['number_day']->value;?>
"></tbody>
						</table>
						</div>
						<a class="btn_additinerary clickToAddItineraryDay" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
" >+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add itinerary');?>
</a>
					</div>								
				</div>
			</div>
			<?php }?>
		</div>				
		<?php if ($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','service','default')) {?>
			<div class="form-group inpt_tour">
				<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('servicecruises');?>
</label>
				<div class="row-span">
					<div id="servicecruises" class="">				
						<div class="admin-toolbar-action" style="float: unset"> <a href="https://isocms.com/admin/?mod=cruise&act=service" target="_blank" style="text-decoration: underline"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change');?>
</a> </div>
						<div class="service_right mt20">
							<table class="tbl-grid" cellpadding="0" width="100%">
								<tr>
									<td class="gridheader"><input rel="fa_sv" id="all_check" type="checkbox" /></td>
									<td class="gridheader"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></td>
									<td class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</strong></td>
									<td class="gridheader" style="width:15%;text-align:right">
										<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('price');?>
 (<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
)</strong>
									</td>
								</tr>
								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstService']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
									<td class="index"><input class="fa_sv" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkContainer($_smarty_tpl->tpl_vars['oneCruiseItinerary']->value['listService'],$_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_service_id'])) {?>checked="checked"<?php }?> name="listService[]" value="<?php echo $_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_service_id'];?>
" /></td>
									<td class="index"> <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['clsCruiseService']->value->getTitle($_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_service_id']);?>
</td>
									<td style="text-align:right; white-space:nowrap">
										<strong class="format_price" style="font-size:13px">
											<?php echo $_smarty_tpl->tpl_vars['clsCruiseService']->value->getPrice($_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_service_id']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>

										</strong>
									</td>
								</tr>
								<?php
}
}
?>
							</table>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		<?php }?>
	</div>
	<div class="box_footer_cabin">
		<button type="button" class="btn_back_cabin"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</button>
		<input type="hidden" name="cabin_id" value="<?php echo $_smarty_tpl->tpl_vars['cabin_id']->value;?>
">
		<button id="submit_form" type="submit" class="btn_save_cruise_new btn_save_cruise_itinerary"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Continute');?>
</button>
	</div>
</form>
<?php echo '<script'; ?>
>
	var $cruise_itinerary_id = '<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
';
	var $cruise_id = '<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>	
	loadCruiseItineraryDay($cruise_itinerary_id);
	if($SiteHasDestinationCruises == '1'){loadListDestination($cruise_itinerary_id);}
	if($SiteHasDestinationCruises == '1') {
		setSelectBoxDestination();

		if($SiteModActive_continent == 0 && $SiteModActive_country == 1){
			loadCountry();
		}
		if($SiteModActive_continent == 0 && $SiteModActive_country == 0 && $SiteModActive_country == 0){
			loadCity();
		}
	}
<?php echo '</script'; ?>
>
<?php }
}
