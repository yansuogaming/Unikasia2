<?php
/* Smarty version 3.1.38, created on 2024-04-12 09:11:26
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_hotel_facilities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6618984e5d9727_90455049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7da0e43383d535ecc50cb7b25708e773362869ff' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_hotel_facilities.tpl',
      1 => 1697513774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6618984e5d9727_90455049 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="inpt_tour">
	<label class="mb30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Facilities Favorite');?>

		<?php $_smarty_tpl->_assignInScope('facilities_hotel', 'facilities_hotel');?>
		<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['facilities_hotel']->value);?>
		<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
		<button data-key="<?php echo $_smarty_tpl->tpl_vars['facilities_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Facilities Favorite');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
		<?php }?>
	</label>
	<div class="facilities_box">
		<div class="row" onClick="loadHelp(this)">
			<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listHotelFacilitiesFavorite']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php if ($_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['listHotelFacilitiesFavorite']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'])) {?>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="facilities_item" hotel_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><input type="checkbox" name="list_HotelFacilities[]" <?php if ($_smarty_tpl->tpl_vars['clsHotel']->value->checkProperty('HotelFacilities',$_smarty_tpl->tpl_vars['pvalTable']->value,$_smarty_tpl->tpl_vars['listHotelFacilitiesFavorite']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'])) {?>checked <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['listHotelFacilitiesFavorite']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
"/> <span class="text"><?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['listHotelFacilitiesFavorite']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
</span></div>
			</div>
			<?php }?>
			<?php
}
}
?>
			<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['facilities_hotel']->value));?>
</div>
		</div>
	</div>
</div>

<div class="inpt_tour">
	<label class="mb30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Facilities');?>

		<?php $_smarty_tpl->_assignInScope('other_facilities_hotel', 'other_facilities_hotel');?>
		<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
		<button data-key="<?php echo $_smarty_tpl->tpl_vars['other_facilities_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Facilities');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
		<?php }?>
	</label>
	<div class="facilities_other_box">
		<div class="facilities_box">
			<div class="row" onClick="loadHelp(this)">
				<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listHotelFacilitiesOther']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php if ($_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['listHotelFacilitiesOther']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'])) {?>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="facilities_item" hotel_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><input type="checkbox" name="list_HotelFacilities[]" <?php if ($_smarty_tpl->tpl_vars['clsHotel']->value->checkProperty('HotelFacilities',$_smarty_tpl->tpl_vars['pvalTable']->value,$_smarty_tpl->tpl_vars['listHotelFacilitiesOther']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'])) {?>checked <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['listHotelFacilitiesOther']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
"/> <span class="text"><?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['listHotelFacilitiesOther']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
</span></div>
				</div>
				<?php }?>
				<?php
}
}
?>
			</div>
			<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['other_facilities_hotel']->value));?>
</div>
		</div>
	</div>
</div><?php }
}
