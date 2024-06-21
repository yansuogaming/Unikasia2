<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:36:36
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_price-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66149ba40e0a48_95537514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2439b7d19c51a7fa13f50cdac19c6a22e4899ce' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_price-table.tpl',
      1 => 1701163461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66149ba40e0a48_95537514 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
			<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['yield_id'] && 0) {?>
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price table');?>

					<a href="javascript:void(0)" class="btn btn-success refreshYieldEstimate" tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sync price');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('refresh');?>
</a>
				</h3>
				<div class="box-filter py-2">
					<select id="YieldEstimateTourOp_<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" class="FilterYieldEstimate YieldEstimateTourOp" tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
">
						<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TimeApply');?>
</option>
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['yieldOp']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_0_iteration === 1);
?>
						<option <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['yieldOp']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['yield_op_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['yieldOp']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['start_date']);?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('to');?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['yieldOp']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['due_date']);?>
</option>
						<?php
}
}
?>
					</select>
					<?php $_smarty_tpl->_assignInScope('lstCurrency', $_smarty_tpl->tpl_vars['clsVietISOSDK']->value->getProperty('_CRM_CURRENCY'));?>
					<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Currency');?>
</strong>:
					<select tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" class="FilterYieldEstimate yieldCurrency" id="Nett_CRM_CURRENCY_<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstCurrency']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['property_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getDefaultCurrency() == $_smarty_tpl->tpl_vars['item']->value['property_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
										<input type="text" style="width:120px; display: inline-block" value="1" class="form-control FilterYieldEstimate yieldRate" tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" id="Nett_CRM_Rate_<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" readonly /> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>

				</div>
				<div id="holderTourEstimate_<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" style="overflow-x: auto"></div>
				
				<?php echo '<script'; ?>
 type="text/javascript">
					$().ready(function() {
						FilterYieldEstimate(<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
);
					});
				<?php echo '</script'; ?>
>
				
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour','store','default','REVQQVJUVVJFLVZpZXRJU08=')) {?>
					<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price table');?>

						<?php $_smarty_tpl->_assignInScope('price_table_tour', 'price_table_tour');?>
						<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['price_table_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price table');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
						<?php }?>
					</h3>
					<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price_Table_Notes');?>
</p>
					<div class="form_option_tour">
						<div class="inpt_tour p-b-30">
							<div class="form-group">
								<div id="TourPriceGroupNoDeparture">
									Loading...
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
</strong></label>
								<div class="col-xs-12 col-md-2">
									<div class="input-group">
										<input type="text" class="form-control fontLarge deposit_tour_group" tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['deposit'];?>
"/>
										<span class="input-group-addon">%</span>
									</div>
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
" status="" present_step="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_j']->value;?>
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
					
						<?php echo '<script'; ?>
 type="text/javascript">
							$(document).ready(function(){
								loadTourPriceGroupNoDeparture();
							});
							$(document).on('change', '.deposit_tour_group', function(ev){
								var $_this = $(this);
								$.ajax({
									type: "POST",
									url: path_ajax_script+"/?mod="+mod+"&act=ajLoadTourPriceGroup&lang="+LANG_ID,
									data:{
										'tour_id':$_this.attr("tour_id"),
										"deposit":$_this.val(),
										'tp' : 'Save_Deposit'
									},
									dataType: "html",
									success: function(html){
										var htm = html.split('|||');
										$_this.val(htm[1]);
										vietiso_loading(2);
									}
								});
							});
						<?php echo '</script'; ?>
>
					
				<?php } else { ?>
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price table');?>
</h3>
				<div class="form_option_tour">
					<div class="inpt_tour p-b-30">
						<div id="TourPriceGroupNoDeparture"></div>
						<div class="row-span">
							<div class="fieldlabel" style="width:100px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
</div>
							<div class="fieldarea" style="width:auto; float:left">
								<input type="text" class="text fontLarge deposit_tour_group" tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['deposit'];?>
"/>(%)
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
" status="" present_step="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_j']->value;?>
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
				
					<?php echo '<script'; ?>
 type="text/javascript">
						$(".chosen-select").chosen({
							max_selected_options: 10,
							width: '100%'
						});

						$(document).ready(function(){
							loadTourPriceGroupNoDeparture();
						});
						$(document).on('change', '.deposit_tour_group', function(ev){
							var $_this = $(this);
							$.ajax({
								type: "POST",
								url: path_ajax_script+"/?mod="+mod+"&act=ajLoadTourPriceGroup&lang="+LANG_ID,
								data:{
									'tour_id':$_this.attr("tour_id"),
									"deposit":$_this.val(),
									'tp' : 'Save_Deposit'
								},
								dataType: "html",
								success: function(html){
									var htm = html.split('|||');
									$_this.val(htm[1]);
									vietiso_loading(2);
								}
							});
						});
					<?php echo '</script'; ?>
>
				
			<?php }
echo '<script'; ?>
>
    var is_depart = <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour','store','default','REVQQVJUVVJFLVZpZXRJU08=');?>
;
    var is_check_depart = <?php echo $_smarty_tpl->tpl_vars['clsTourStore']->value->checkExist($_smarty_tpl->tpl_vars['pvalTable']->value,'DEPARTURE');?>
;
<?php echo '</script'; ?>
>
<?php }?>
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
				<div class="content_box">
					<p class="mb0"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['price_table_tour']->value));?>
</p>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
