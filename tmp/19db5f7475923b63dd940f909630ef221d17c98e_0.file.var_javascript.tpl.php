<?php
/* Smarty version 3.1.38, created on 2024-05-06 09:36:01
  from '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/blocks/var_javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66384211ddf776_75456015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19db5f7475923b63dd940f909630ef221d17c98e' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/blocks/var_javascript.tpl',
      1 => 1714822399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66384211ddf776_75456015 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	var DOMAIN_NAME='<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
';
	var extLang='<?php echo $_smarty_tpl->tpl_vars['extLang']->value;?>
';
	var path_ajax_script = '<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
';
	var URL_JS = "<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
"; 
	var PCMS_DIR = "<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
";
	var URL_IMAGES = "<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
";
	var REQUEST_URI = "<?php echo $_smarty_tpl->tpl_vars['REQUEST_URI']->value;?>
"; 
	var type= "<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
";
	var LANG_ID = "<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
";
	var mod= "<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
";
	var act= "<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
";
	var crm_date_format="dd/mm/yy";
	var crm_datepicker_format = {
		changeMonth: true,
		changeYear: true,
		showButtonPanel: true,
		dateFormat :crm_date_format,
		yearRange: "-100:+100"
	}
	var checkfiltertour= "<?php echo $_smarty_tpl->tpl_vars['check']->value;?>
";
	var pvalTable="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
";
	var start_date_error = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("start date error");?>
';
	var end_date_error = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("end date error");?>
';
	var promotion_code_error = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("promotion code error");?>
';
	var error = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("error");?>
';
	var confirm_update_status = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("confirm_update_status");?>
';
	var confim_delete = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("confirm_delete");?>
';
	var confirm_delete = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("confirm_delete");?>
';
	var confirm_cloning = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("confirm_cloning");?>
';
	var confirm_reset = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("confirm_reset");?>
';
	var user_group_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("user_group_required");?>
';
	var username_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("username_required");?>
';
	var field_valid = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("field_not_valid");?>
';
	var field_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("field_required");?>
';
	var field_is_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("field_required");?>
';
	var field_is_link = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("field_link");?>
';
	var title_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("title_required");?>
';
	var password_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("password_required");?>
';
	var confirm_password_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("confirm_password_required");?>
';
	var confirm_password_in_valid = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("confirm_password_in_valid");?>
';
	var confirm_replication = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("confirm_replication");?>
';
	var full_name_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("full_name_required");?>
';
	var insert_success = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("insert_success");?>
';
	var upload_success = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("upload_success");?>
';
	var insert_error = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("insert_error");?>
';
	var upload_error = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("upload_error");?>
';
	var insert_error_exist = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("insert_error_exist");?>
';
	var exist_error = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("exist_error");?>
';
	var update_success = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("update_success");?>
';
	var update_error = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("update_error");?>
';
	var delete_success = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("delete_success");?>
';
	var delete_error = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("delete_error");?>
';
    var number_day_invalid = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("number_day_invalid");?>
';
	var number_day_exist = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("number_day_exist");?>
';
	var title_itinerary_exist = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("title_itinerary_exist");?>
';
	var reset_success = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("reset_success");?>
';
	var user_name_invalid = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("user_name_invalid");?>
';
	var password_invalid = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("password_invalid");?>
';
	var loading = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('loading');?>
";
	var Select = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select');?>
";
	var save = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
";
	var Table_of_Contents = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Table of Contents");?>
';	
	var txtPublic = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Public");?>
';
	var txtPrivate = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Private");?>
';
	var Closing_date_must_sell_before_departure_of_tour = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Closing date must sell before departure of tour');?>
";
	var The_opening_date_must_be_before_the_departure_of_the_tour = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The opening date must be before the departure of the tour');?>
";
	var The_date_of_sale_must_be_after_the_opening_date = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The date of sale must be after the opening date');?>
";
	
	var No_matching_results = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No matching results');?>
";
	var Showing = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Showing');?>
";
	var entries = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('entries');?>
";
	var First = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('First');?>
";
	var Last = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Last');?>
";
	var Previous = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Previous');?>
";
	var Next = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Next');?>
";
	var Processing = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Processing');?>
";
	var Search = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>
";
	var Show = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Show');?>
";
	var No_matching_records_found = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No matching records found');?>
";
	var activate_to_sort_column_ascending = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('activate to sort column ascending');?>
";
	var activate_to_sort_column_descending = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('activate to sort column descending');?>
";
	var to = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('to');?>
";
	var of = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('of');?>
";
	var from = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('from');?>
";
	var filtered = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('filtered');?>
";
	var total = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('total');?>
";
	var No_data_available_in_table = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data available in table');?>
";
	var All = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All');?>
";
	
	var country = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
";
	var regions = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('regions');?>
";
	var cities = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cities');?>
";
	var area = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Area');?>
";
	var attractions = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('attractions');?>
";
	var continents = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Continent');?>
";
	var Select = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Select");?>
';
	
	var $Hotel_Region = "";
	var $SiteHasCat_Tours = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour','category','default');?>
";
	var $SiteHasType_Tours = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasType_Tours');?>
";
	var $SiteHasGroup_Tours = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour','group','default');?>
";
	var $SiteHasCruisesCategory = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','cat','default');?>
";
	var $SiteHasCategoryGroup_Tours = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCategoryGroup_Tours');?>
";
	var $SiteHasDeparturePoint_Tours = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','tour_departure_point','customize');?>
";
	var $SiteHasHotel_Tours = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour','hotel','customize');?>
";
	
	var $SiteModActive_country = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'country','default','default');?>
";
    var $SiteModActive_continent = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'continent','default','default');?>
";
    var $SiteActive_region = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default');?>
";
    var $SiteActive_city = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'city','default','default');?>
";
    var $SiteHasPriceTableTours = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasPriceTableTours');?>
";
    var $SitePriceTableType_Tours = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("SitePriceTableType_Tours");?>
';
    var $SiteHasStartDate_Tours = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','store','default','REVQQVJUVVJFLVZpZXRJU08=');?>
";
    var $SiteHasExtensionTours = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','tour_related','customize');?>
";
    var $SiteHasGalleryImagesTours = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','tour_gallery','customize');?>
";
    var $SiteHasDestinationTours = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','destination','customize');?>
";
    var $SiteHasItineraryTours = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour','itinerary','customize');?>
";
    var $SiteHasStore_Tours = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasStore_Tours');?>
";
    var $SiteHasCustomContentField_Tours = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("SiteHasCustomContentField_Tours");?>
';
    var $check_mod_continent = "<?php echo $_smarty_tpl->tpl_vars['core']->value->checkAccess('continent');?>
";
    var $check_mod_country = "<?php echo $_smarty_tpl->tpl_vars['core']->value->checkAccess('country');?>
";
	
	var $SiteActive_destination = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteActive_destination');?>
";
	var $SiteHasDestinationCruises = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasDestinationCruises');?>
";
	var $SiteHasGalleryImagesCruises = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','cruise_photo_gallery','customize');?>
";
	var $SiteHasCruisesCabin = "<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','edit_cabin','default');?>
";
	var $SiteHasCustomField_Cruise = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("SiteHasCustomField_Cruise");?>
';
	var $SiteHasPriceSetup_Cruise = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasPriceSetup_Cruise');?>
";
	var $SiteHasStartDate_Cruise = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasStartDate_Cruise');?>
";
	var $SiteHasCruisesProperty = "<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCruisesProperty');?>
";
	
	var $SiteHasCat_Voucher = 1;
	var $SiteHasType_Voucher = 1;
	var $SiteHasGroup_Voucher = 1;
	var $SiteHasCategoryGroup_Voucher = 1;
	var $SiteHasDeparturePoint_Voucher = 1;
	var $SiteHasHotel_Voucher = 1;
	var $SiteHasCat_Combo = 0;
	var $SiteHasType_Combo = 0;
	var $SiteHasGroup_Combo = 0;
	var $SiteHasCategoryGroup_Combo = 0;
	var $SiteHasDeparturePoint_Combo = 0;
	var $SiteHasHotel_Combo = 0;
	
	
    var alertMsgPreview = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('is Private');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('If you want to see it, please turn it on to Public');?>
";
	<?php echo '</script'; ?>
><?php }
}
