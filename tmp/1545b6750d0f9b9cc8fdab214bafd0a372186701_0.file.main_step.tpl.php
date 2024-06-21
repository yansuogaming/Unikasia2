<?php
/* Smarty version 3.1.38, created on 2024-04-11 09:31:54
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/main_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66174b9af1d2e3_47634103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1545b6750d0f9b9cc8fdab214bafd0a372186701' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/main_step.tpl',
      1 => 1706070978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66174b9af1d2e3_47634103 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						<?php if ($_smarty_tpl->tpl_vars['currentstep']->value == 'image') {?>
						<?php $_smarty_tpl->_assignInScope('image_detail', 'image_category_country');?>
						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_detail_image',array("image_detail"=>"image_category_country"));?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'generalinformation') {?>
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('generalinformation');?>
</h3>
							<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCat_Tours') == 1) {?>
								<div class="inpt_tour">
									<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('travel_styles_category_country', 'travel_styles_category_country');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['travel_styles_category_country']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['travel_styles_category_country']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
									</label>
									<div class="fieldarea">
										<select name="cat_id" class="glSlBox required">
											 <?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->makeSelectboxOptionCountry($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value['cat_id']);?>

										</select>
										<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['travel_styles_category_country']->value));?>
</div>
									</div>
								</div>
							<?php }?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destination');?>
 <span class="required_red">*</span>
								<?php $_smarty_tpl->_assignInScope('destination_category_country', 'destination_category_country');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['destination_category_country']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['destination_category_country']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</label>
								<div class="fieldarea">
									<select class="slb full glSlBox" name="iso-country_id" id="slb_Country">
										<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['country_id']);?>

									</select>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['destination_category_country']->value));?>
</div>
								</div>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'longText') {?>
						<div class="inpt_tour">
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>
 
								<?php $_smarty_tpl->_assignInScope('longText_category_country', 'longText_category_country');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['longText_category_country']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['longText_category_country']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-content" class="textarea_intro_editor" data-column="iso-content" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</textarea>
							
							<?php echo '<script'; ?>
>
							$(".showdate").datepicker({dateFormat: "dd/mm/yy"});
							<?php echo '</script'; ?>
>
							
						</div>						
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'banner') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_category_country_banner');?>
	
						<?php }?>
						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['key'];?>
" data-prevstep="<?php echo $_smarty_tpl->tpl_vars['prevstep']->value;?>
" class="back_step js_save_back_main_step"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>

							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" data-next_step="<?php echo $_smarty_tpl->tpl_vars['nextstep']->value;?>
" class="js_save_continue_main_step"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col_instruction">
				<div class="instruction_fill_data_box">
					<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
					<div class="content_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['help_first']->value));?>
</div>
				</div>
			</div>
		</div>
	</div>
</form>

<?php echo '<script'; ?>
>
if($('.textarea_intro_editor').length > 0){
	$('.textarea_intro_editor').each(function(){
		var $_this = $(this);
		var $editorID = $_this.attr('id');
		$('#'+$editorID).isoTextArea();
	});
}
	$('.toggle-row').click(function(){
		$(this).closest('tr').toggleClass('open_tr');
	});
<?php echo '</script'; ?>
>
<?php }
}
