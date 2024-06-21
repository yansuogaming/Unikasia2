<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:09:49
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tailor/customize.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c26d054cf9_24320159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ddbc75defb142cbeb6ac5c66d07b96b3037dd39' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tailor/customize.tpl',
      1 => 1710917524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c26d054cf9_24320159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="page_container">
	<div class="breadcrumb-main breadcrumb-<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
">
		<div class="container">
			<ol class="breadcrumb mt0 mb0" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
" itemprop="url">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
				<?php if ($_smarty_tpl->tpl_vars['tour_id']->value) {?>
				<?php $_smarty_tpl->_assignInScope('itemTour', $_smarty_tpl->tpl_vars['clsTour']->value->getOne($_smarty_tpl->tpl_vars['tour_id']->value,'title,slug,trip_code'));?>
				<?php $_smarty_tpl->_assignInScope('titleTour', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['itemTour']->value));?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['itemTour']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['titleTour']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['titleTour']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
				<?php }?>   
			</ol>
		</div>
	</div>
    <div id="contentPage" class="pageTailor">
        <div class="container">
          	<form method="post" action="" name="form_customize" id="form_customize" class="frmCrxBook form-horizontal">
				<div class="row">
					<div class="box_form_cutomize mx-auto">
						<h1 class="title_page"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Plan your special trips');?>
</h1> 
                        <?php $_smarty_tpl->_assignInScope('site_tailor_intro', ('site_tailor_intro_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                        <?php $_smarty_tpl->_assignInScope('intro_tailor', $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_tailor_intro']->value));?>
						<div class="intro_page">
                            <?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_tailor_intro']->value));?>

                        </div>
						
						<div class="box_form box_form_destination">
							<h2 class="title_box_form"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select destination');?>
</h2>
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryEx']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<div class="box_list_country">
									<div class="box_header d-flex flex-wrap justify-content-between align-items-center">
										<h2 class="title_country <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null) == 1) {?>check<?php }?>"><?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['lstCountryEx']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],$_smarty_tpl->tpl_vars['lstCountryEx']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</h2>
										<input class="chkitem" <?php if (in_array($_smarty_tpl->tpl_vars['lstCountryEx']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],$_smarty_tpl->tpl_vars['country_id']->value) || ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null) == 1 && !$_smarty_tpl->tpl_vars['country_id']->value)) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lstCountryEx']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
" type="checkbox" name="country_id[]" data-id="destination_<?php echo $_smarty_tpl->tpl_vars['lstCountryEx']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
" id="country_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
									</div>
									<div class="box_list_city" id="destination_<?php echo $_smarty_tpl->tpl_vars['lstCountryEx']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
"></div>								
								</div>
							<?php
}
}
?>	
							<div class="form-input form-group">									
								<div class="box_label">
									<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Destinations');?>
 <span class="text_lbl">(<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Separated by commas');?>
):</span></label>
								</div>
								<div class="box_input box_text_area">
									<textarea class="textarea form-control" rows="5" style="height:85px" name="other_des" placeholder="Vietnam,ThaiLand,..."><?php echo $_smarty_tpl->tpl_vars['other_des']->value;?>
</textarea>								
								</div>
							</div>						
						</div>
						<div class="box_form box_form_travel">
							<h2 class="title_box_form"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Information');?>
</h2>
							<div class="box_form_body">
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Start Date');?>
 <span class="text_lbl">(dd/mm/yyyy):</span></label>
									</div>
									<div class="box_input box_input_departure_date">
										<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
											<div class="clearfix"></div>
											<input class="dateTxt2 required form-control" name="date_begin_simple" type="text" value="<?php if ($_smarty_tpl->tpl_vars['date_begin_simple']->value != '') {
echo $_smarty_tpl->tpl_vars['date_begin_simple']->value;
} else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['now']->value,"%d/%m/%Y");
}?>" placeholder="dd/mm/yyyy" />
										<?php } else { ?>
											<div class="clearfix"></div>
											<input class="dateTxt2 required form-control" name="date_begin_simple" type="text" value="<?php if ($_smarty_tpl->tpl_vars['date_begin_simple']->value != '') {
echo $_smarty_tpl->tpl_vars['date_begin_simple']->value;
} else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['now']->value,"%m/%d/%Y");
}?>" placeholder="mm/dd/yyyy" />
										<?php }?>								
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Duration');?>
 <span class="text_lbl">(<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Calculated by day');?>
):</span></label>
									</div>
									<div class="box_input">
										<input type="text" name="duration" id="duration" class="duration" value="<?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Example: 7 Days');?>
">							
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Number');?>
:</label>
									</div>
									<div class="box_input box_input_number_traveller">
										<input type="text" name="number_travellers" class="number_travellers" id="pick_travellers" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
" value="<?php echo $_smarty_tpl->tpl_vars['number_travellers']->value;?>
" readonly>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
										<div id="check_number_travellers" class="check_number_travellers">
											<ul class="check_number_travellers--ul list_style_none">
												<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstVisitorType']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<?php if ($_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'] == $_smarty_tpl->tpl_vars['adult_type_id']->value) {?>
														<li class="inputTraveller" id="li_adult" data-tour_property_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">
															<div class="right__inputTraveller">
																<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
</label>
																<span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																	<button class="ui-spinner-button ui-spinner-down unNum" type="button" _type="number_adults" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">-</button>
																	<input type="hidden" id="tour_visitor_adult_id" name="tour_visitor_adult_id" value="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"/>
																	<input min-number="1" max-number="<?php echo $_smarty_tpl->tpl_vars['max_adult']->value;?>
" type="number" class="ui-spinner-input number_adults input_number find_select" tour_visitor_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" name="adult_simple" id="national_visitor<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
" readonly/>
																	<input type="hidden" name="people_price<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['price_adult']->value;?>
" id="people_price<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" departure_in="<?php echo $_smarty_tpl->tpl_vars['departure_in']->value;?>
" departure_in_2="<?php echo $_smarty_tpl->tpl_vars['departure_in_2']->value;?>
">
																	<button class="ui-spinner-button ui-spinner-up upNum" type="button" _type="number_adults" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">+</button>
																</span>
															</div>
														</li>
													<?php } elseif ($_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'] == $_smarty_tpl->tpl_vars['child_type_id']->value) {?>
														<li class="inputTraveller">
															<div class="right__inputTraveller">
																<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
</label>
																<span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																	<button class="ui-spinner-button ui-spinner-down unNum" type="button" _type="number_child" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
 ">-</button>
																	<input type="hidden" id="tour_visitor_child_id" name="tour_visitor_child_id" value="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"/>
																	<input min-number="0" max-number="<?php echo $_smarty_tpl->tpl_vars['max_child']->value;?>
" type="number" class="ui-spinner-input number_child input_number find_select" tour_visitor_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" name="children_simple" id="national_visitor<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
" readonly/>
																	<button class="ui-spinner-button ui-spinner-up upNum" type="button" _type="number_child" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
 " >+</button>
																</span>
															</div>
															<div class="box_age_child" id="box_age_child">
																<?php if ($_smarty_tpl->tpl_vars['children']->value) {?>
																	<?php
$__section_j_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['children']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_2_total = $__section_j_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_2_total !== 0) {
for ($__section_j_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_2_iteration <= $__section_j_2_total; $__section_j_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
																		<div class="item_age_child"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectAgeChildTailor($_smarty_tpl->tpl_vars['children']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>
</div>
																	<?php
}
}
?>
																<?php }?>
															</div>
															<div class="txt_children"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("To find a property that suits your whole group at the exact same price, we need to know the children's ages at check-out");?>
</div>
														</li>
													<?php } else { ?>
														<li class="inputTraveller">
															<div class="right__inputTraveller">
																<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infants');?>
</label>
																<span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
																	<button class="ui-spinner-button ui-spinner-down unNum" type="button" _type="number_infants" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
 ">-</button>
																	<input type="hidden" id="tour_visitor_infant_id" name="tour_visitor_infant_id" value="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"/>
																	<input min-number="0" max-number="<?php echo $_smarty_tpl->tpl_vars['max_infant']->value;?>
" type="number" class="ui-spinner-input number_infants input_number find_select" tour_visitor_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" name="baby_simple" id="national_visitor<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" value="<?php if ($_smarty_tpl->tpl_vars['baby_simple']->value) {
echo $_smarty_tpl->tpl_vars['baby_simple']->value;
} else { ?>0<?php }?>" readonly/>
																	<button class="ui-spinner-button ui-spinner-up upNum" type="button" _type="number_infants" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
 " >+</button>
																</span>
															</div>
														</li>
													<?php }?>
												<?php
}
}
?>									
												<li class="inputTraveller" id="li_room" data-tour_property_id="6">
													<div class="right__inputTraveller">
														<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Room');?>
</label>
														<span class="ui-spinner ui-corner-all ui-widget ui-widget-content">
															<button class="ui-spinner-button ui-spinner-down unNum" _type="number_room" type="button">-</button>
															<input type="number" class="spinnerExample ui-spinner-input number_room" name="number_room" value="<?php if ($_smarty_tpl->tpl_vars['number_room']->value) {
echo $_smarty_tpl->tpl_vars['number_room']->value;
} else { ?>0<?php }?>" min="0" aria-valuemin="1" aria-valuenow="1" autocomplete="off" role="spinbutton" readonly>
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
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Budget per person');?>
 <span class="text_lbl">(<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('excluding international flights');?>
):</span></label>
									</div>
									<div class="box_input">
										<input type="text" name="budget" id="budget" class="budget" value="<?php echo $_smarty_tpl->tpl_vars['budget']->value;?>
" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Example: 2.000$');?>
">							
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">								
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Transport');?>
:</label>
									</div>
									<div class="box_input">
										<select class="form-control travelby" name="travelby">
											<?php echo $_smarty_tpl->tpl_vars['clsTailorProperty']->value->getSelectByProperty('_TRANSPORT',$_smarty_tpl->tpl_vars['travelby']->value,'Transport');?>

										</select>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">								
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Prefered Guide Language');?>
:</label>
									</div>
									<div class="box_input">
										<select class="form-control language" name="language">
											<?php echo $_smarty_tpl->tpl_vars['clsTailorProperty']->value->getSelectByProperty('_LANGUAGE',$_smarty_tpl->tpl_vars['language']->value,'Language');?>

										</select>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-start">								
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Meals');?>
:</label>
									</div>
									<div class="box_meal">
										<div class="box_input">
											<select class="form-control" name="breakfast">
												<?php echo $_smarty_tpl->tpl_vars['clsTailorProperty']->value->getSelectByProperty('_BREAKFAST',$_smarty_tpl->tpl_vars['breakfast']->value,'Breakfast');?>

											</select>
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</div>
										<div class="box_input">
											<select class="form-control" name="lunch">
												<?php echo $_smarty_tpl->tpl_vars['clsTailorProperty']->value->getSelectByProperty('_LUNCH',$_smarty_tpl->tpl_vars['lunch']->value,'Lunch');?>

											</select>
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</div>
										<div class="box_input">
											<select class="form-control" name="dinner">
												<?php echo $_smarty_tpl->tpl_vars['clsTailorProperty']->value->getSelectByProperty('_DINNER',$_smarty_tpl->tpl_vars['dinner']->value,'Dinner');?>

											</select>
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['lstTourGuide']->value) {?>
									<div class="form-input form-group d-flex flex-wrap align-items-center">
										<div class="box_label text-right">
											<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Guide');?>
:</label>
										</div>									
										<div class="box_input box_input_tour_guide">
											<select type="text" class="form-control" name="tour_guide_id">
												<option value="" disabled <?php if (!$_smarty_tpl->tpl_vars['tour_guide_id']->value) {?>selected<?php }?> hidden>-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please select');?>
 --</option>
												<?php if ($_smarty_tpl->tpl_vars['lstTourGuide']->value) {?>
													<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTourGuide']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_3_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['lstTourGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['tour_guide_id']->value == $_smarty_tpl->tpl_vars['lstTourGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lstTourGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</option>
													<?php
}
}
?>
												<?php }?>
											</select>
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</div>
									</div>
								<?php }?>
								<div class="form-input form-group form_accommodations d-flex flex-wrap align-items-start">											
									<div class="box_label text-right">
										<label for="" class="lbl_box_input lbl_box_input_accommodations"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel Requirements');?>
:</label>
									</div>
									<?php $_smarty_tpl->_assignInScope('list_hotel_class', $_smarty_tpl->tpl_vars['clsTailorProperty']->value->getListByProperty('_HOTEL_CLASS'));?>
									<div class="box_checkbox box_hotel box_input">
										<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_hotel_class']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_4_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<div class="boxCheckbox">
												<input type="radio" class="check_box_itinerary" name="hotelclass" value="<?php echo $_smarty_tpl->tpl_vars['list_hotel_class']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tailor_property_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['hotelclass']->value == $_smarty_tpl->tpl_vars['list_hotel_class']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tailor_property_id']) {?>checked<?php }?>>
												<p class="checkmark"><?php echo $_smarty_tpl->tpl_vars['list_hotel_class']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</p>
											</div>
										<?php
}
}
?>
									</div>
								</div>
							</div>
						</div>
						<div class="box_form box_form_special">
							<h2 class="title_box_form"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your Special Requirements');?>
</h2>
							<div class="box_form_body">
								<div class="form-input form-group d-flex flex-wrap align-items-center">	
									<div class="box_textarea">
										<textarea class="" cols="255" rows="5" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('At any time, you should be looking at your bucket list, desired accommodations, special food requirements, accommodations, etc');?>
..." name="request_1"><?php echo $_smarty_tpl->tpl_vars['request_1']->value;?>
</textarea>
									</div>
								</div>							
							</div>							
						</div>
						<div class="box_form body_information">
							<h2 class="title_box_form"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your Travel Information’s');?>
</h2>
							<div class="box_form_body">
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
*:</label>
									</div>
									<div class="box_input">
										<select class="form-control required" name="title">
											<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('-- Please Select --');?>
</option>
											<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectTitle($_smarty_tpl->tpl_vars['title']->value);?>

										</select>
										<?php if ($_smarty_tpl->tpl_vars['errMsgTitle']->value) {?><label for="title" generated="true" class="error"><?php echo $_smarty_tpl->tpl_vars['errMsgTitle']->value;?>
!</label><?php }?>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full name');?>
*:</label>
									</div>
									<div class="box_input">
										<input type="text" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="name" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter your name');?>
"/>
										<?php if ($_smarty_tpl->tpl_vars['errMsgFullname']->value) {?><label for="name" generated="true" class="error"><?php echo $_smarty_tpl->tpl_vars['errMsgFullname']->value;?>
!</label><?php }?>
									</div>
								</div>
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="country_id" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Country');?>
*:</label>
									</div>
									<div class="box_input">
										<select name="country__id" id="country_id" class="form-control required">
											<option value="">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select');?>
 -- </option>
											<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_5_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<option <?php if ($_smarty_tpl->tpl_vars['country__id']->value == $_smarty_tpl->tpl_vars['lstCountryRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lstCountryRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lstCountryRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</option>
											<?php
}
}
?>
										</select>
										<?php if ($_smarty_tpl->tpl_vars['errMsgCountry']->value) {?><label for="country_id" generated="true" class="error"><?php echo $_smarty_tpl->tpl_vars['errMsgCountry']->value;?>
!</label><?php }?>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</div>
								</div>								
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
*:</label>
									</div>
									<div class="box_input">
										<input class="form-control" id="email" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter your confirm email');?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
										<?php if ($_smarty_tpl->tpl_vars['errMsgEmail']->value) {?><label for="email" generated="true" class="error"><?php echo $_smarty_tpl->tpl_vars['errMsgEmail']->value;?>
!</label><?php }?>
									</div>
								</div>							
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone number');?>
*:</label>
									</div>
									<div class="box_input">
										<input class="form-control" id="phone" name="phone" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter your phone number');?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" />
										<?php if ($_smarty_tpl->tpl_vars['errMsgPhone']->value) {?><label for="phone" generated="true" class="error"><?php echo $_smarty_tpl->tpl_vars['errMsgPhone']->value;?>
!</label><?php }?>
									</div>
								</div>						
								<div class="form-input form-group d-flex flex-wrap align-items-center">									
									<div class="box_label text-right">
										<label for="" class="lbl_box_input"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
*:</label>
									</div>
									<div class="box_input">
										<select name="please" id="please" class="form-control required">
											<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select');?>
</option>
											<option <?php if ($_smarty_tpl->tpl_vars['please']->value == 1) {?>selected="selected"<?php }?> value="1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Send me more details via email');?>
</option>
											<option <?php if ($_smarty_tpl->tpl_vars['please']->value == 2) {?>selected="selected"<?php }?> value="2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Call me if possible');?>
</option>
										</select>
										<?php if ($_smarty_tpl->tpl_vars['errMsgContact']->value) {?><label for="please" generated="true" class="error"><?php echo $_smarty_tpl->tpl_vars['errMsgContact']->value;?>
!</label><?php }?>
									</div>
								</div>
							</div>
						</div>
						<div class="center">
							<div class="text_note text-center text-muted mb20">
                                <?php $_smarty_tpl->_assignInScope('site_tailor_idea', ('site_tailor_idea_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                                <?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_tailor_idea']->value));?>

                            </div>
							<div class="form-group mb24_mb text-center relative">
								<div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('reCAPTCHA_KEY');?>
"></div>
								<?php if ($_smarty_tpl->tpl_vars['errMsgCaptcha']->value) {?>
								<label for="" class="error"><?php echo $_smarty_tpl->tpl_vars['errMsgCaptcha']->value;?>
</label>
								<?php }?>
							</div>
							<div class="d-flex justify-content-center">
								<input type="hidden" name="plantrip" value="plantrip" />
								<input type="hidden" name="type" id="tabtype" value="<?php if ($_smarty_tpl->tpl_vars['type']->value == '') {?>1<?php } else {
echo $_smarty_tpl->tpl_vars['type']->value;
}?>" />
								<input type="hidden" name="tour_id" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" />
								<input type="hidden" id="lst_country_id" name="lst_country_id" value="<?php if ($_smarty_tpl->tpl_vars['lst_country_id']->value != '') {
echo $_smarty_tpl->tpl_vars['lst_country_id']->value;
} else {
echo $_smarty_tpl->tpl_vars['lstCountryEx']->value[0]['country_id'];
}?>" />
								<input type="hidden" id="lst_city_id" name="lst_city_id" value="<?php echo $_smarty_tpl->tpl_vars['lst_city_id']->value;?>
" />
								<button class="btn-book" name="submit" type="submit"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Request a quote');?>
</button>
							</div>
						</div>
					</div>
				</div>
			</form>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var city_list = '<?php echo $_smarty_tpl->tpl_vars['city_list']->value;?>
';
    var $Loading = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Loading");?>
';
    var selectmonth='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("select month");?>
';
    var Input_data_is_invalid='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Input data is invalid");?>
';
    var $_LANG_ID = '<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
';
    var Adults='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Adults");?>
';
    var Children='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Children");?>
';
    var Infants='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Infants");?>
';
    var Room='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Room");?>
';
    var Departure_date_invalid='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Departure date is invalid");?>
';
	var Please_choose_departure_date='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Please choose departure date");?>
';
	var Warning='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Warning");?>
';
    var list_start_date=['<?php echo $_smarty_tpl->tpl_vars['list_start_date']->value;?>
'];
    var $check_tour_promotion='<?php echo $_smarty_tpl->tpl_vars['check_tour_promotion']->value;?>
';
	var $check_tour_start_date='<?php echo $_smarty_tpl->tpl_vars['check_tour_start_date']->value;?>
';
	var getSelectAgeChild = `<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectAgeChildTailor();?>
`;
	var error_gender = `<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title is required');?>
`;
	var error_full_name = `<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full name is required');?>
`;
	var error_email_required = `<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email is required');?>
`;
	var error_email_valid = `<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email is valid');?>
`;
	var error_secondary_email_required = `<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Secondary email is required');?>
`;
	var error_secondary_email_valid = `<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Secondary email is valid');?>
`;	
	var error_phone = `<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone number is required');?>
`;
	var error_country = `<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Nationality is required');?>
`;
	var error_please = `<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact is required');?>
`;
<?php echo '</script'; ?>
>


<style type="text/css">
    .form-horizontal .checkbox{min-height: 22px !important}
</style>
<?php echo '<script'; ?>
 type="text/javascript">	
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
                request_1 = request_1.replace(/<br\s?\/<?php echo '?>'; ?>
/g, "\n");
                $('textarea[name=request_1]').val(request_1);
            }
        }
        if ($('textarea[name=request_2]').length > 0) {
            var request_2 = $('textarea[name=request_2]').val();
            if (request_2 != '') {
                request_2 = request_2.replace(/<br\s?\/<?php echo '?>'; ?>
/g, "\n");
                $('textarea[name=request_2]').val(request_2);
            }
        }
        if ($('textarea[name=other_des]').length > 0) {
            var other_des = $('textarea[name=other_des]').val();
            if (other_des != '') {
                other_des = other_des.replace(/<br\s?\/<?php echo '?>'; ?>
/g, "\n");
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
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.validate.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
