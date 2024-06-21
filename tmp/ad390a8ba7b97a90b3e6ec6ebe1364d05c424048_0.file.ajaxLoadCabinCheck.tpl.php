<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:48:34
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/ajaxLoadCabinCheck.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613af6295acb9_08893524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad390a8ba7b97a90b3e6ec6ebe1364d05c424048' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/ajaxLoadCabinCheck.tpl',
      1 => 1711963597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613af6295acb9_08893524 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_item_check_cabin">
    <?php if ($_smarty_tpl->tpl_vars['cruise_type']->value) {?>
	<p class="txt_cabin"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
 <?php echo $_smarty_tpl->tpl_vars['index_cabin']->value;?>
</p>
    <?php }?>
	<div class="item_check_cabin">
		<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bed type');?>
</label>
		<div class="box_left_check box_left_check_bed_type d-flex flex-wrap">
			<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstGroupSize']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_0_iteration === 1);
?>
				<div class="boxCheckbox boxCheckboxGroupSize"> 
					<input type="radio" class="check_box_itinerary" data-is_extra_bed="<?php echo $_smarty_tpl->tpl_vars['lstGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_extra_bed'];?>
" data-max_adult="<?php echo $_smarty_tpl->tpl_vars['lstGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_adult'];?>
" data-max_child="<?php echo $_smarty_tpl->tpl_vars['lstGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_child'];?>
" name="group_size[<?php echo $_smarty_tpl->tpl_vars['index_cabin']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['lstGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>checked<?php }?>> 
					<p class="text-itinerary checkmark"><?php echo $_smarty_tpl->tpl_vars['lstGroupSize']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</p> 
				</div>
			<?php
}
}
?>
		</div>
	</div>
	<div class="item_check_cabin">
		<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
</label>
		<div class="box_left_check d-flex flex-wrap">
			<div class="right__inputTraveller">
				<a class="unNum text_main disabled" _type="number_adults" href="javascript:void(0);"></a>
				<input min-number="1" max-number="<?php echo $_smarty_tpl->tpl_vars['lstGroupSize']->value[0]['number_adult'];?>
" type="number" class="ui-spinner-input number_adults input_number find_select" id="national_visitor_adult" name="number_adult" value="1" readonly/>
				<a class="upNum text_main" _type="number_adults" href="javascript:void(0);"></a>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['CheckCruisePriceChild']->value) {?>
	<div class="item_check_cabin item_check_cabin_children <?php if ($_smarty_tpl->tpl_vars['lstGroupSize']->value[0]['number_child'] == 0) {?>hidden<?php }?>" id="item_check_cabin_children_<?php echo $_smarty_tpl->tpl_vars['index_cabin']->value;?>
">
		<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
</label>
		<div class="box_left_check d-flex flex-wrap">
			<div class="right__inputTraveller">
				<a class="unNum text_main disabled" _type="number_child" href="javascript:void(0);"></a>
				<input min-number="0" max-number="<?php echo $_smarty_tpl->tpl_vars['lstGroupSize']->value[0]['number_child'];?>
" id="national_visitor_child" type="number" class="ui-spinner-input number_child input_number find_select" name="number_child" value="0" readonly/>
				<a class="upNum text_main" _type="number_child" href="javascript:void(0);"></a>
			</div>
			<div class="box_group_child" id="box_group_child">

			</div>
		</div>
	</div>
	<?php }?>
    <div class="item_check_cabin item_check_extra_bed <?php if ($_smarty_tpl->tpl_vars['lstGroupSize']->value[0]['is_extra_bed'] == 0) {?>hidden<?php }?>" id="item_check_cabin_children_<?php echo $_smarty_tpl->tpl_vars['index_cabin']->value;?>
">
		<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra Bed');?>
</label>
        <div class="box_left_check d-flex flex-wrap">
			<input type="checkbox" class="is_extra_bed" name="is_extra_bed[<?php echo $_smarty_tpl->tpl_vars['index_cabin']->value;?>
]" value="1" />
		</div>
    </div>	
</div>	<?php }
}
