<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:27:13
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_destination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614997115ab51_47119271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abbea03bf96cbb841aa953cd4a98948fb4ff6bd2' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_destination.tpl',
      1 => 1709261851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614997115ab51_47119271 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destination');?>

				<?php $_smarty_tpl->_assignInScope('destination_tour', 'destination_tour');?>
				<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
				<button data-key="<?php echo $_smarty_tpl->tpl_vars['destination_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destination');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
				<?php }?>
				</h3>
				<p class="intro_box mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introdestination');?>
</p>
				<div class="form_option_tour">
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'group','default') && $_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
					<div class="form-group inpt_tour">
						<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('tourgroup');?>
</label>
						<div class="fieldarea">
							<select name="tour_group_id" class="slb full iso-selectbox" id="slb_TourGroupDes" tp="multiple" style="width:260px;">
								<?php echo $_smarty_tpl->tpl_vars['clsTourGroup']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['tour_group_id']->value);?>

							</select>
						</div>
					</div>
					<?php }?>
					<div class="inpt_tour p-b-30">
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
						<hr class="clearfix" />
						<div class="mt-half">
							<ul class="list-group" id="lstDestination">
								<li><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Loading');?>
...</li>
							</ul>
							<div class="clearfix mt-half"></div>
							<span class="help-block text-blue">(<span class="requiredMask">*</span>) <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('infoless1destination');?>
</span>
						</div>
						<div class="map_location_des">
							<div class="p-b-30 clearfix">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_map_tour_new');?>

							</div>
							<div class="form-group">
								<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('MapZoom');?>
</label>
								<input type="text" class="form-control" width="255" name="iso-map_zoom" id="map_zoom_tour" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['map_zoom'];?>
" />
							</div>
						</div>
					</div>
				</div>
				<div class="btn_save_titile_trip_code">
					<a tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" prev_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu_j_index_prev']->value == '') {
if ($_smarty_tpl->tpl_vars['list_cat_menu_prev']->value == '') {
echo $_smarty_tpl->tpl_vars['child_cat_menu_j']->value;
}
if ($_smarty_tpl->tpl_vars['list_cat_menu_prev']->value != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_prev']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_prev']->value[$_smarty_tpl->tpl_vars['count_child_cat_menu_prev']->value];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu_j_index_prev']->value;
}?>" class="back_step"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>
					<a id="btn-save-img-file"  tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" status="skip" present_step="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_j']->value;?>
" next_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu_j_index_next']->value == '') {
if ($_smarty_tpl->tpl_vars['list_menu_tour_i_index_next']->value['cat_menu'] == '') {?>SaveAll<?php }
if ($_smarty_tpl->tpl_vars['list_menu_tour_i_index_next']->value['cat_menu'] != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_next']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_next']->value[0];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu_j_index_next']->value;
}?>" class="save_and_continue_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
				<div class="content_box">
					<p class="mb0"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['destination_tour']->value));?>
</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$().ready(function() {
		loadListDestination(tour_id);
		if ($SiteHasDestinationTours == 1) {
			//loadMaps(tour_id);
		}
	});
<?php echo '</script'; ?>
>



<?php }
}
