<?php
/* Smarty version 3.1.38, created on 2023-10-27 14:24:27
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/var_javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_653b65ab15aa87_81411630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7e900e8d22da42bad521603c666e6d05ade51d4' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/var_javascript.tpl',
      1 => 1680324894,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 20,
),true)) {
function content_653b65ab15aa87_81411630 (Smarty_Internal_Template $_smarty_tpl) {
?><script type="text/javascript">
	var DOMAIN_NAME='https://isocms.com';
	var extLang='';
	var path_ajax_script = 'https://isocms.com/admin';
	var URL_JS = "https://isocms.com/admin/isocms/templates/default/skin/js"; 
	var PCMS_DIR = "";
	var URL_IMAGES = "https://isocms.com/admin/isocms/templates/default/skin/images";
	var REQUEST_URI = "/admin/ticket/"; 
	var type= "ticket";
	var LANG_ID = "vn";
	var mod= "ticket";
	var act= "home";
	var checkfiltertour= "";
	var pvalTable="";
	var start_date_error = 'start date error';
	var end_date_error = 'end date error';
	var promotion_code_error = 'promotion code error';
	var error = 'error';
	var confim_delete = 'Bạn muốn xóa mục đã chọn ?';
	var confirm_delete = 'Bạn muốn xóa mục đã chọn ?';
	var confirm_cloning = 'confirm_cloning';
	var confirm_reset = 'confirm_reset';
	var user_group_required = 'user_group_required';
	var username_required = 'username_required';
	var field_required = 'field_required';
	var field_is_required = 'field_required';
	var field_is_link = 'field_link';
	var title_required = 'title_required';
	var password_required = 'password_required';
	var confirm_password_required = 'confirm_password_required';
	var confirm_password_in_valid = 'confirm_password_in_valid';
	var confirm_replication = 'confirm_replication';
	var full_name_required = 'full_name_required';
	var insert_success = 'insert_success';
	var upload_success = 'upload_success';
	var insert_error = 'insert_error';
	var upload_error = 'upload_error';
	var insert_error_exist = 'insert_error_exist';
	var exist_error = 'exist_error';
	var update_success = 'update_success';
	var update_error = 'update_error';
	var delete_success = 'delete_success';
	var delete_error = 'delete_error';
    var number_day_invalid = 'number_day_invalid';
	var number_day_exist = 'number_day_exist';
	var title_itinerary_exist = 'title_itinerary_exist';
	var reset_success = 'reset_success';
	var user_name_invalid = 'user_name_invalid';
	var password_invalid = 'password_invalid';
	var loading = "loading";
	var Select = "Lựa chọn";
	var save = "Cập nhật";
	var Table_of_Contents = 'Mục lục';
	var Closing_date_must_sell_before_departure_of_tour = "Closing date must sell before departure of tour";
	var The_opening_date_must_be_before_the_departure_of_the_tour = "The opening date must be before the departure of the tour";
	var The_date_of_sale_must_be_after_the_opening_date = "The date of sale must be after the opening date";
	
	var No_matching_results = "No matching results";
	var Showing = "Hiển thị";
	var entries = "bản ghi";
	var First = "First";
	var Last = "Last";
	var Previous = "Trước";
	var Next = "Sau";
	var Processing = "Processing";
	var Search = "Tìm kiếm";
	var Show = "Hiển thị";
	var No_matching_records_found = "Không tìm thấy kết quả";
	var activate_to_sort_column_ascending = "kích hoạt để sắp xếp cột tăng dần";
	var activate_to_sort_column_descending = "kích hoạt để sắp xếp cột giảm dần";
	var to = "đến";
	var of = "của";
	var from = "từ";
	var filtered = "được lọc";
	var total = "Tất cả";
	var No_data_available_in_table = "không có dữ liệu trong bảng";
	var All = "Tất cả";
	
	var country = "Quốc gia";
	var regions = "Vùng miền";
	var cities = "Thành phố";
	var area = "Vùng miền";
	var attractions = "attractions";
	var continents = "continents";
	var Select = 'Lựa chọn';
	
	var $Hotel_Region = "";
	var $SiteHasCat_Tours = "1";
	var $SiteHasType_Tours = "1";
	var $SiteHasGroup_Tours = "1";
	var $SiteHasCruisesCategory = "1";
	var $SiteHasCategoryGroup_Tours = "1";
	var $SiteHasDeparturePoint_Tours = "1";
	var $SiteHasHotel_Tours = "1";
	
	var $SiteModActive_country = "1";
    var $SiteModActive_continent = "1";
    var $SiteActive_region = "1";
    var $SiteActive_city = "1";
    var $SiteHasPriceTableTours = "1";
    var $SitePriceTableType_Tours = '1';
    var $SiteHasStartDate_Tours = "1";
    var $SiteHasExtensionTours = "1";
    var $SiteHasGalleryImagesTours = "1";
    var $SiteHasDestinationTours = "1";
    var $SiteHasItineraryTours = "1";
    var $SiteHasStore_Tours = "1";
    var $SiteHasCustomContentField_Tours = '1';
    var $check_mod_continent = "1";
    var $check_mod_country = "1";
	
	var $SiteActive_destination = "1";
	var $SiteHasDestinationCruises = "1";
	var $SiteHasGalleryImagesCruises = "1";
	var $SiteHasCruisesCabin = "1";
	var $SiteHasCustomField_Cruise = '1';
	var $SiteHasPriceSetup_Cruise = "1";
	var $SiteHasStartDate_Cruise = "1";
	var $SiteHasCruisesProperty = "1";
	
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
	</script><?php }
}
