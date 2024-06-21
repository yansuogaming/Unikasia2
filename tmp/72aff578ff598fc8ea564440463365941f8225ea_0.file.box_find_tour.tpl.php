<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:11:18
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_find_tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661398969b1511_07462092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72aff578ff598fc8ea564440463365941f8225ea' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_find_tour.tpl',
      1 => 1710556111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661398969b1511_07462092 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="avaiable__header">
	<h2 class="title_section color_fff"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price Table');?>
</h2>
	<form id="form__avaiable" class="form__avaiable d-flex" action="" method="post">
		<div class="number_travellers_box relative">
			<div class="number_travellers icon_user relative">
				<input type="text" readonly class="form-control pick_travellers" id="pick_travellers" value="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
 x 1">
			</div>
			<div id="check_number_travellers" class="check_number_travellers" style="display:none;">
				<ul class="check_number_travellers--ul list_style_none">
					<?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstVisitorType']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'] == $_smarty_tpl->tpl_vars['adult_type_id']->value) {?>
					<li class="inputTraveller" id="li_adult" data-tour_property_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
">
						<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>

							<span class="size14 d-block text_normal">(<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('12 years old and older');?>
)</span>
						</label>
						<div class="right__inputTraveller">
							<a class="unNum text_main disabled" _type="number_adults" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" href="javascript:void(0);"><i class="fa fa-minus" aria-hidden="true"></i></a>
							<input type="hidden" id="tour_visitor_adult_id" name="tour_visitor_adult_id" value="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"/>
							<input _type="number_adults" min-number="1" max-number="<?php echo $_smarty_tpl->tpl_vars['max_adult']->value;?>
" type="number" class="number_adults input_number find_select" tour_visitor_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" name="national_visitor<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" id="national_visitor<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" value="1" readonly/>
							<input type="hidden" name="people_price<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['price_adult']->value;?>
" id="people_price<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" departure_in="<?php echo $_smarty_tpl->tpl_vars['departure_in']->value;?>
" departure_in_2="<?php echo $_smarty_tpl->tpl_vars['departure_in_2']->value;?>
">
							<a class="upNum text_main" _type="number_adults" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i></a>
						</div>
					</li>
					<?php } elseif ($_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'] == $_smarty_tpl->tpl_vars['child_type_id']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['max_child']->value) {?>
					<li class="inputTraveller">
						<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>

							<?php if ($_smarty_tpl->tpl_vars['textSizeGroupChild']->value) {?><span class="size14 d-block text_normal">(<?php echo $_smarty_tpl->tpl_vars['textSizeGroupChild']->value;?>
)</span><?php }?>
						</label>
						<div class="right__inputTraveller">
							<a class="unNum text_main disabled" _type="number_child" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
 " href="javascript:void(0);"><i class="fa fa-minus" aria-hidden="true"></i></a>
							<input type="hidden" id="tour_visitor_child_id" name="tour_visitor_child_id" value="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"/>
							<input _type="number_child" min-number="0" max-number="<?php echo $_smarty_tpl->tpl_vars['max_child']->value;?>
" type="number" class="number_child input_number find_select" tour_visitor_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" name="national_visitor<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" id="national_visitor<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" value="0" readonly/>
							<a class="upNum text_main" _type="number_child" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
 " href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i></a>
						</div>
						<div class="box_group_child_infant" data-visitor_type="<?php echo $_smarty_tpl->tpl_vars['child_type_id']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['child_visitor_type']->value;?>
" id="box_group_child"></div>
					</li>
					<?php }?>
					<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['max_infant']->value) {?>
					<li class="inputTraveller">
						<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infants');?>

							<?php if ($_smarty_tpl->tpl_vars['textSizeGroupInfant']->value) {?><span class="size14 d-block text_normal">(<?php echo $_smarty_tpl->tpl_vars['textSizeGroupInfant']->value;?>
)</span><?php }?>
						</label>
						<div class="right__inputTraveller">
							<a class="unNum text_main disabled" _type="number_infants" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
 " href="javascript:void(0);"><i class="fa fa-minus" aria-hidden="true"></i></a>
							<input type="hidden" id="tour_visitor_infant_id" name="tour_visitor_infant_id" value="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
"/>
							<input _type="number_infants" min-number="0" max-number="<?php echo $_smarty_tpl->tpl_vars['max_infant']->value;?>
" type="number" class="number_infants input_number find_select" tour_visitor_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" name="national_visitor<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" id="national_visitor<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
" value="0" readonly/>

							<a class="upNum text_main" _type="number_infants" traveler_type_id="<?php echo $_smarty_tpl->tpl_vars['lstVisitorType']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_property_id'];?>
 " href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i></a>
						</div>
						<div class="box_group_child_infant" data-visitor_type="<?php echo $_smarty_tpl->tpl_vars['infant_type_id']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['infant_visitor_type']->value;?>
" id="box_group_infant"></div>
					</li>
					<?php }?>
				<?php }?>
				<?php
}
}
?>
				</ul>
			</div>
		</div>
		<div class="date_picker_group relative">
			<input name="departure_date" readonly id="departure_date" now_next_departure="<?php echo $_smarty_tpl->tpl_vars['now_next_departure']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['str_first_start_date']->value);?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check in');?>
" />
		</div>
		<div class="line line__check">
			<input type="hidden" name="tour_id" id="tour_id" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" />
			<input type="hidden" name="is_last_hour" id="is_last_hour" value="<?php echo $_smarty_tpl->tpl_vars['is_last_hour']->value;?>
" />
			<input type="hidden" name="tour_start_date" id="tour_start_date" value="<?php echo $_smarty_tpl->tpl_vars['tour_start_date']->value;?>
" />
			<input type="hidden" name="tour__class_check" id="tour__class_check" value="0" />
			<input type="hidden" name="number_adults" id="number_adults" value="1" />
			<input type="hidden" name="number_child" id="number_child" value="0" />
			<input type="hidden" name="number_infants" id="number_infants" value="0" />
			<input type="hidden" name="check_in_book" id="check_in_book" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText6($_smarty_tpl->tpl_vars['str_first_start_date']->value);?>
" />
			<input type="hidden" name="hidFind" value="hidAvaiable" />
			<input id="check_avaiable" name="check_avaiable" class="check_avaiable btn_yellow btn_main" type="button" value="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check');?>
"/>
		</div>
	</form>
</div>
<div id="TablePrice"></div><?php }
}
