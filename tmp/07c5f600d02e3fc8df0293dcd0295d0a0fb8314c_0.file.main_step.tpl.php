<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:22:40
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/main_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613a95028adb5_77843359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07c5f600d02e3fc8df0293dcd0295d0a0fb8314c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/main_step.tpl',
      1 => 1711435536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613a95028adb5_77843359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 <?php if ($_smarty_tpl->tpl_vars['currentstep']->value == '') {?>col-md-12<?php } else { ?>col-md-9<?php }?>">
				<div class="fill_data_box">
					<div class="form_title_and_table_code" <?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
>
						<?php if ($_smarty_tpl->tpl_vars['currentstep']->value == 'image') {?>
						<?php $_smarty_tpl->_assignInScope('image_detail', 'image_cruise');?>
						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_detail_image',array("image_detail"=>$_smarty_tpl->tpl_vars['image_detail']->value));?>

						<div class="form-group">
							<label class="col-form-label" for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('File download program cruise');?>

							<?php $_smarty_tpl->_assignInScope('file_tour', 'file_tour');?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['file_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image represent tour');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</label>
							<p class="help-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chosse File in the warehouse data');?>
</p>
							<img class="isoman_img_pop" id="isoman_show_file_programmes" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_pdf.png" width="30px" height="30px" />
							<input type="hidden" id="isoman_hidden_file_programme" name="isoman_url_file_programme"  value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['file_programme'];?>
" >
							<input class="text_32 border_aaa bold" type="text" id="isoman_url_file_programme" name="file_programme" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['file_programme'];?>
" style="width:100%; max-width:300px; float:left" onClick="loadHelp(this)"><a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="file_programme" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['file_programme'];?>
" isoman_name="file_programme"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open" /></a>
							<em style="padding-left:10px; padding-top:3px; display:inline-block">File chương trình tour</em>
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['file_tour']->value));?>
</div>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'basic') {?>
						<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Basic');?>
</h3>						
						<div class="inpt_tour">
                            <label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Type');?>
</label>
							<div class="box_cruise_type">
                                 <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['cruise_type'] == 1) {?>
								<div class="boxCheckbox boxCheckboxCruise"> 
									<input type="radio" class="" name="cruise_type" value="1" checked> 
									<label class="checkmark"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Cabin");?>
</label> 
								</div>
                                <?php } else { ?>
								<div class="boxCheckbox boxCheckboxCruise"> 
									<input type="radio" class="" name="cruise_type" value="0" checked> 
									<label class="checkmark"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("CruisePrivate");?>
</label> 
								</div>
                                <?php }?>
							</div>
						</div>
						<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Of Cruise');?>
 <span class="required_red">*</span>
							<?php $_smarty_tpl->_assignInScope('name_cruise', 'name_cruise');?>
							<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['name_cruise']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['name_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</label>
							<input class="input_text_form input-title required" data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['name_cruise']->value));?>
</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="inpt_tour">
									<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise code');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('code_cruise', 'code_cruise');?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['code_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Code');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
									</label>
									<div class="fieldarea">
										<input class="input_text_form required" data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="cruise_code" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('cruise_code',$_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" onClick="loadHelp(this)" />
										<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['code_cruise']->value));?>
</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="inpt_tour">
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'cat','default')) {?>
										<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Class');?>
 <span class="required_red">*</span>
										<?php $_smarty_tpl->_assignInScope('class_cruise', 'class_cruise');?>
										<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['class_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Class');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										<?php }?>
										</label>
										<div class="fieldarea">
											<select class="required" name="cruise_cat_id" style="width:100%" onClick="loadHelp(this)">
												<?php echo $_smarty_tpl->tpl_vars['clsCruiseCat']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['cruise_cat_id'],0,0,'--',0,0);?>
 
											</select>
											<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['class_cruise']->value));?>
</div>
										</div>
									<?php }?>
								</div>
							</div>
						</div>						
						<div class="inpt_tour pdb30" style="border-bottom:1px dashed #0000004d">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rank cruise');?>
 <span class="required_red">*</span>
								<?php $_smarty_tpl->_assignInScope('star_cruise', 'star_cruise');?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['star_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Star');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</label>
							<div class="fieldarea" onClick="loadHelp(this)">
								<div class="boxCheckbox">
									<input type="radio" class="check_box_itinerary" name="star_number" value="0" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['star_number'] == 0) {?>checked="checked"<?php }?>>
									<p class="text-itinerary checkmark"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Un Rated');?>
</p>
								</div>
								<?php
$_smarty_tpl->tpl_vars['__smarty_section_star'] = new Smarty_Variable(array());
if (true) {
for ($__section_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] = 1; $__section_star_0_iteration <= 6; $__section_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']++){
?>
								<div class="boxCheckbox">
									<input type="radio" class="check_box_itinerary" name="star_number" value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] : null);?>
" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['star_number'] == (isset($_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] : null)) {?>checked="checked"<?php }?>>
									<p class="text-itinerary checkmark"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] : null);?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('star');?>
</p>
								</div>
								<?php
}
}
?>
                           		<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['star_cruise']->value));?>
</div>
                            </div>
						</div>
						<div class="row">
							<div class="col-md-4">								
								<div class="inpt_tour">
									<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Material');?>

										<?php $_smarty_tpl->_assignInScope('material_cruise', 'material_cruise');?>
										<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['material_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Material');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										<?php }?>
								   </label>
									<div class="fieldarea">
										<select class="" name="iso-material" id="material" style="width:100%" onClick="loadHelp(this)">
											<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('select');?>
</option>
											<?php echo $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getSelectByProperty('CruiseMaterial',$_smarty_tpl->tpl_vars['oneItem']->value['material'],0,'');?>

										</select>
										<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['material_cruise']->value));?>
</div>	
									</div>
								</div>
							</div>
							<div class="col-md-4">	
								<div class="inpt_tour">
									<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Build');?>

										<?php $_smarty_tpl->_assignInScope('build_cruise', 'build_cruise');?>
										<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['build_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Build');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										<?php }?>
								   </label>
									<div class="fieldarea">
										<input class="text_32 span100" id="build" name="iso-build" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('build',$_smarty_tpl->tpl_vars['pvalTable']->value);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ex: 2017');?>
" maxlength="255" type="number" onClick="loadHelp(this)" /> 	
										<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['build_cruise']->value));?>
</div>								
									</div>
								</div>
							</div>
							<div class="col-md-4">	
								<div class="inpt_tour">
									<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No. of Cabins');?>

										<?php $_smarty_tpl->_assignInScope('no_of_cabins_cruise', 'no_of_cabins_cruise');?>
										<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['no_of_cabins_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No. of Cabins');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										<?php }?>
									</label>
									<div class="fieldarea">
										<input class="text_32 span100" id="total_cabin" name="total_cabin" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('total_cabin',$_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="number" min="0" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ex: 10');?>
"  onClick="loadHelp(this)"/>
										<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['no_of_cabins_cruise']->value));?>
</div>							
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="inpt_tour">
									<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure Port');?>

										<?php $_smarty_tpl->_assignInScope('departure_port_cruise', 'departure_port_cruise');?>
										<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['departure_port_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure Port');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
										<?php }?>
								   </label>
									<div class="fieldarea">
										<input class="text_32 span100" id="departure_port" name="iso-departure_port" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('departure_port',$_smarty_tpl->tpl_vars['pvalTable']->value);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Block 25, Tuan Chau Island, Halong, Vietnam');?>
"  type="text" onClick="loadHelp(this)"/>
										<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['departure_port_cruise']->value));?>
</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="inpt_tour pdt30" style="border-top:1px dashed #0000004d">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviewcruise');?>

                           		<?php $_smarty_tpl->_assignInScope('review_cruise', 'review_cruise');?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['review_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviewcruise');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
                           	</label>
                           	<div class="row">
								<div class="col-md-4">
									<div class="row-span"> 
										<div class="span100 mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise quality');?>
</div> 
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="cruise_quality" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsCruise']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'cruise_quality'));?>
"  maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span"> 
										<div class="span100 mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Food/Drink');?>
</div> 
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="food_drink" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsCruise']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'food_drink'));?>
"  maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span"> 
										<div class="span100 mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin quality');?>
</div> 
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="cabin_quality" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsCruise']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'cabin_quality'));?>
"  maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span"> 
										<div class="span100 mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Staff quality');?>
</div> 
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="staff_quality" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsCruise']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'staff_quality'));?>
"  maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span"> 
										<div class="span100 mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Entertainment');?>
</div> 
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="entertainment" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsCruise']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'entertainment'));?>
"  maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row-span"> 
										<div class="span100 mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Worthy');?>
</div> 
										<div class="fieldarea span100 relative"><input class="text full fontLarge price-In" name="worth_the_money" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsCruise']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'worth_the_money'));?>
"  maxlength="255" type="text" /><span class="percent">%</span></div>
									</div>
								</div>
                           	</div>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'cabin') {?>
							<div class="box_list_cabin">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>

									<?php $_smarty_tpl->_assignInScope('cabin_cruise', 'cabin_cruise');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['cabin_cruise']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['cabin_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</h3>
								<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Introduce the cabin services you will provide to customers');?>
</p>
								<div class="form_option_tour">
									<div class="inpt_tour">
										<div class="hastable">
										<table class="table tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th class="gridheader name_responsive name_responsive4" colspan="2" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:100px"></th>
												</tr>
											</thead>
											<tbody id="SortAble">
												<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCabin']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
												<?php $_smarty_tpl->_assignInScope('title_cabin', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id']));?>
												<tr style="cursor:move" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
" id="order_cabin-<?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id'];?>
">
													<td class="text-left" style="width:70px;"><img src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getImage($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id'],68,52);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id']);?>
"  width="," height="52"/></td>
													<td class="text-left name_service">
														<div class="box_name_services"> 
															<p class="txt_name_services">
															<a href="javascript:void()" class="edit_cabin" data-cabin_id="<?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id'];?>
" data-cruise_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cabin']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_cabin']->value;?>
</a></p> 
															<p class="txt_info">
																<?php $_smarty_tpl->_assignInScope('check_first', 1);?>
																<?php if ($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cabin_size'] > 0) {?>
																	<?php $_smarty_tpl->_assignInScope('check_first', 0);?>
																	<span><?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cabin_size'];?>
m<sup>2</sup></span> 
																<?php }?>
																<?php if ($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bed_size'] != '') {?>
																	<?php if ($_smarty_tpl->tpl_vars['check_first']->value == 0) {?>| <?php }?>
																	<span><?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bed_size'];?>
</span> 
																	<?php $_smarty_tpl->_assignInScope('check_first', 0);?>
																<?php }?>
																<?php if ($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['extra_bed'] == 1) {?>
																	<?php if ($_smarty_tpl->tpl_vars['check_first']->value == 0) {?>| <?php }?>
																	<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra bed available');?>
</span> 
																<?php }?>
															</p> 
														</div>	
														<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
													</td>
													<td class="block_responsive"  data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" style="text-align:center">
														<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseCabin" pkey="cruise_cabin_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
														<?php if ($_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id']) == '1') {?>
														<i class="fa fa-check-circle green"></i>
														<?php } else { ?>
														<i class="fa fa-minus-circle red"></i>
														<?php }?>
														</a>
													</td>
													<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
														<div class="btn-group-ico">
																														<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="javascript:void()" class="edit_cabin" data-cabin_id="<?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id'];?>
" data-cruise_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><i class="ico ico-edit"></i></a>
															<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=delete_cruise_cabin&cruise_cabin_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id']);?>
&cruise_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><i class="ico ico-remove"></i></a>
														</div>
													</td>
												</tr>
											<?php
}
}
?>
											</tbody>
										</table>
										</div>
																				<a class="btn_additinerary addCabin" data-cruise_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
" >+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
</a>
										
											<?php echo '<script'; ?>
 type="text/javascript">
												$("#SortAble").sortable({
													opacity: 0.8,
													cursor: 'move',
													start: function(){
														vietiso_loading(1);
													},
													stop: function(){
														vietiso_loading(0);
													},
													update: function(){
														var recordPerPage = 1000;
														var currentPage = 1;
														var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage;
														$.post(path_ajax_script+"/index.php?mod=cruise&act=ajUpdPosSortCruiseCabin", order,

														function(html){
															vietiso_loading(0);
															loadMainFormStep(table_id, "cabin");
														});
													}
												});
											<?php echo '</script'; ?>
>
										
									</div>								
								</div>
							</div>
														
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'itinerary') {?>
							<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('itinerary');?>

							<?php $_smarty_tpl->_assignInScope('itinerary_cruise', 'itinerary_cruise');?>
							<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['itinerary_cruise']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['itinerary_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('itinerary');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('infoaddcruiseitinerary');?>
</p>
							<div class="form_option_tour">
								<div class="inpt_tour">
									<div class="hastable">
										<table class="tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th class="gridheader name_responsive name_responsive1" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Days');?>
</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:160px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meals');?>
</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:70px"></th>
												</tr>
											</thead>
											<tbody id="SortAble">
												<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCruiseItinerary']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
												<tr style="cursor:move" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
" id="order_<?php echo $_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id'];?>
">
													<td class="text-left name_service">
														<div class="box_name_services"> 
															<p class="txt_name_services">
															<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="javascript:void()" class="edit_itinerary" data-cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id'];?>
" data-cruise_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><strong style="font-size:15px;"><?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getDuration($_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']);?>
</strong></a></p> 
															<p class="txt_info">
																<?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getAllCityAround($_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id'],0,", ");?>

															</p> 
														</div>	
														<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
													</td>
													<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meals');?>
" style="text-align:center">
														<?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getListMealItineraryDay($_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']);?>

													</td>
													<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" style="text-align:center">
														<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseItinerary" pkey="cruise_itinerary_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
															<?php if ($_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']) == '1') {?>
															<i class="fa fa-check-circle green"></i>
															<?php } else { ?>
															<i class="fa fa-minus-circle red"></i>
															<?php }?>
														</a>
													</td>
													<td class="block_responsive" align="center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
														<div class="btn-group-ico">
																														<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="javascript:void()" class="edit_itinerary" data-cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id'];?>
" data-cruise_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><i class="ico ico-edit"></i></a>
															<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=delete_cruise_itinerary&cruise_itinerary_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']);?>
&cruise_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><i class="ico ico-remove"></i></a>
														</div>
													</td>
												</tr>
											<?php
}
}
?>
											</tbody>
										</table>
									</div>
									                                    <a class="btn_additinerary addItinerary" data-cruise_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
" >+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
</a>
                                    
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        $("#SortAble").sortable({
                                            opacity: 0.8,
                                            cursor: 'move',
                                            start: function(){
                                                vietiso_loading(1);
                                            },
                                            stop: function(){
                                                vietiso_loading(0);
                                            },
                                            update: function(){
                                                var recordPerPage = 1000;
                                                var currentPage = 1;
                                                var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage;
                                                $.post(path_ajax_script+"/index.php?mod=cruise&act=ajUpdPosSortItineraryCruise", order,

                                                function(html){
                                                    vietiso_loading(0);
                                                    loadMainFormStep(table_id, "itinerary");
                                                });
                                            }
                                        });
                                    <?php echo '</script'; ?>
>
                                    
								</div>
							</div>						
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'faservice') {?>
							
                            <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','property','default','CruiseFacilities')) {?>
								<div class="service_left" style="margin-top:0px">
									<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Facilities');?>

									<?php $_smarty_tpl->_assignInScope('facilities_cruise', 'facilities_cruise');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['facilities_cruise']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['facilities_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Facilities');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
									</h3>
								</div>
								<div class="service_right ml10">
                                    <?php if ($_smarty_tpl->tpl_vars['lstCruiseFa']->value) {?>
									<div class="checkall" style="margin-bottom:10px">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check/Uncheck All');?>
 <input type="checkbox" rel="fa_ge" id="all_check" style="height:16px">
									</div>
									<ul class="list_style_none margin_0" id="list-general" onClick="loadHelp(this)">
										<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCruiseFa']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<li><label><input class="fa_ge" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['oneItem']->value['listCruiseFacilities'],$_smarty_tpl->tpl_vars['lstCruiseFa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'])) {?>checked="checked"<?php }?> name="listCruiseFacilities[]" value="<?php echo $_smarty_tpl->tpl_vars['lstCruiseFa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" style="height:16px"> <?php echo $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getTitle($_smarty_tpl->tpl_vars['lstCruiseFa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id']);?>
</label></li>
										<?php
}
}
?>
										<li><a class="color_f00" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=property&type=CruiseFacilities" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New');?>
"><i class="fa fa-plus-circle" aria-hidden="true"></i> <label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New');?>
</label></a></li>
									</ul>
                                    <?php }?>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['facilities_cruise']->value));?>
</div>
								</div>
								<div class="clearfix mb20"></div>
							<?php }?>
							
                            <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','property','default','CruiseServices')) {?>
								<div class="service_left">
									<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Services');?>

									<?php $_smarty_tpl->_assignInScope('services_cruise', 'services_cruise');?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['services_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Services');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
									</h3>
								</div>
								<div class="service_right ml10">
                                    <?php if ($_smarty_tpl->tpl_vars['lstCruiseService']->value) {?>
									<div class="checkall" style="margin-bottom:10px">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check/Uncheck All');?>
 <input type="checkbox" rel="fa_cs" id="all_check" style="height:16px">
									</div>
									<ul class="list_style_none margin_0" id="list-general" onClick="loadHelp(this)">
										<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCruiseService']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<li><label><input class="fa_cs" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['oneItem']->value['listCruiseServices'],$_smarty_tpl->tpl_vars['lstCruiseService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'])) {?>checked="checked"<?php }?> name="listCruiseServices[]" value="<?php echo $_smarty_tpl->tpl_vars['lstCruiseService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" style="height:16px"> <?php echo $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getTitle($_smarty_tpl->tpl_vars['lstCruiseService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id']);?>
</label></li>
										<?php
}
}
?>
										<li><a class="color_f00" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=property&type=CruiseServices" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New');?>
"><i class="fa fa-plus-circle" aria-hidden="true"></i> <label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New');?>
</label></a></li>
									</ul>
                                    <?php }?>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['services_cruise']->value));?>
</div>
								</div>
								<div class="clearfix mb20"></div>
							<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'cruise','property','default','CruiseFaActivities')) {?>
							
								<div class="service_left">
									<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Activities on Board');?>

									<?php $_smarty_tpl->_assignInScope('activities_on_board_cruise', 'activities_on_board_cruise');?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['activities_on_board_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Activities on Board');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
									</h3>
								</div>
								<div class="service_right ml10">
                                     <?php if ($_smarty_tpl->tpl_vars['lstCruiseFaActivities']->value) {?>
									<div class="checkall" style="margin-bottom:10px">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check/Uncheck All');?>
 <input type="checkbox" rel="fa_ac" id="all_check" style="height:16px">
									</div>
                                   
									<ul class="list_style_none margin_0" id="list-general" onClick="loadHelp(this)">
										<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCruiseFaActivities']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<li><label><input class="fa_ac" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['oneItem']->value['listCruiseFaActivities'],$_smarty_tpl->tpl_vars['lstCruiseFaActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'])) {?>checked="checked"<?php }?> name="listCruiseFaActivities[]" value="<?php echo $_smarty_tpl->tpl_vars['lstCruiseFaActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" style="height:16px"> <?php echo $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getTitle($_smarty_tpl->tpl_vars['lstCruiseFaActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id']);?>
</label></li>
										<?php
}
}
?>
										<li><a class="color_f00" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=property&type=CruiseFaActivities" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New');?>
"><i class="fa fa-plus-circle" aria-hidden="true"></i> <label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New');?>
</label></a></li>
									</ul>
                                    <?php }?>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['activities_on_board_cruise']->value));?>
</div>
								</div>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'libraryimage') {?>
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'cruise_photo_gallery','customize')) {?>
						   		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_cruise_image-gallery');?>

							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'video') {?>
							<h3 class="title_box mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Video');?>

							<?php $_smarty_tpl->_assignInScope('video_cruise', 'video_cruise');?>
							<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['video_cruise']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['video_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Video');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</h3>
							<p class="intro_box mb40"></p>
							<div class="form_option_tour">
								<div class="inpt_tour">
									<div class="hastable">
										<?php if (!$_smarty_tpl->tpl_vars['listCruiseVideo']->value) {?>
										<div class="contingency_table" style="display: none;">
											<p class="title_contingency_table">Contingency table</p> 
											<a style="vertical-align:middle" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=edit_cruise_video&cruise_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" id="clickToAddItinerary_contingency" class="iso-button-primary fl">+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
</a>
											<table class="tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
												<thead>
													<tr>
														<th class="gridheader" style="width:60px;text-align:center; "><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
														<th class="gridheader name_responsive name_responsive1" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</strong></th>
														<th class="gridheader hiden_responsive" style="text-align:center; width:70px"></th>
													</tr>
												</thead>
												<tbody id="tblTourItinerary_contingency" class="ui-sortable" style=""> 
													<tr class="ui-sortable-handle" style="">
														<td colspan="12">
															<div class="message" style="text-align:center">Không tìm thấy thông tin nào, vui lòng <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=edit_itinerary&cruise_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="btn_additinerary" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
">+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<?php } else { ?>
										<table class="full-width tbl-grid table_responsive" cellspacing="0">
											<thead>
												<tr>
													<th class="gridheader hiden767" style="width:60px;text-align:center; "><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
													<th class="gridheader name_responsive name_responsive1" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:70px"></th>
												</tr>
											</thead>
											<tbody id="SortAble">
												<?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCruiseVideo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
												<tr style="cursor:move" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>" id="order-<?php echo $_smarty_tpl->tpl_vars['listCruiseVideo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_video_id'];?>
">
													<td class="index hiden767"><?php echo $_smarty_tpl->tpl_vars['listCruiseVideo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_video_id'];?>
</td>
													<td class="text-left name_service name_itineerary">
														<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=edit_cruise_video&cruise_video_id=<?php echo $_smarty_tpl->tpl_vars['listCruiseVideo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_video_id'];?>
&cruise_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
">
														   <strong style="font-size:16px;"><?php echo $_smarty_tpl->tpl_vars['clsCruiseVideo']->value->getTitle($_smarty_tpl->tpl_vars['listCruiseVideo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_video_id']);?>
</strong>
														</a>
														<?php if ($_smarty_tpl->tpl_vars['listCruiseVideo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span style="color:#ccc;">[In Trash]</span><?php }?>
														<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
													</td>
													<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" style="vertical-align: middle; width: 40px; text-align: right; white-space: nowrap;">
														<div class="btn-group-ico">
															<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=edit_cruise_video&cruise_video_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listCruiseVideo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_video_id']);?>
&cruise_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><i class="ico ico-edit"></i></a>
															<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=delete_cruise_video&cruise_video_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listCruiseVideo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_video_id']);?>
&cruise_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><i class="ico ico-remove"></i></a>
														</div>
													</td>
												</tr>
											<?php
}
}
?>
											</tbody>
											
										</table>
										<?php }?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=cruise&act=edit_cruise_video&cruise_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="btn_additinerary" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
">+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
</a>
                                        
                                        
                                        
                                        
                                        
									</div>
								</div>
							</div>	
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'pricechild') {?>
							<div class="box_list_cabin">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price children');?>

									<?php $_smarty_tpl->_assignInScope('cabin_cruise', 'cabin_cruise');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['cabin_cruise']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['cabin_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</h3>
								<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child prices apply based on adult prices');?>
</p>
								<div class="form_option_tour">
									<div class="inpt_tour">
										<div class="hastable">
										<table class="table tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th class="gridheader name_responsive name_responsive4" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child group');?>
</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:left; width:200px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price children');?>
</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:100px"></th>
												</tr>
											</thead>
											<tbody id="ListCruisePriceChildren">
												
											</tbody>
										</table>
										</div>
										<a class="btn_additinerary addPriceChild" data-cruise_price_child_id="0" data-cruise_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add new');?>
" >+ <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('price children');?>
</a>
									</div>								
								</div>
							</div>
														
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'seo') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_cruise_seotool');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'about') {?>
							<div class="service_left" style="margin-top:0px">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About');?>

								<?php $_smarty_tpl->_assignInScope('about_cruise', 'about_cruise');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['about_cruise']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['about_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-about" class="textarea_intro_editor" data-column="iso-<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['about'];?>
</textarea>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'thingAbout') {?>
							<div class="service_left" style="margin-top:0px">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Things about');?>

								<?php $_smarty_tpl->_assignInScope('thing_about_cruise', 'thing_about_cruise');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['thing_about_cruise']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['thing_about_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Things about');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?></h3>
							</div>
							<div class="inpt_tour">
								<?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstThingAbout']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<label class="col-sm-6 col-md-6 inline mb5" style="font-size:0.9em;display:inline-block"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['clsISO']->value->makeArrayBySlash($_smarty_tpl->tpl_vars['oneItem']->value['listThingAbout']),$_smarty_tpl->tpl_vars['lstThingAbout']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'])) {?>checked="checked"<?php }?> name="listThingAbout[]" value="<?php echo $_smarty_tpl->tpl_vars['lstThingAbout']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" style="height:16px"> &nbsp;<?php echo $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getTitle($_smarty_tpl->tpl_vars['lstThingAbout']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id']);?>
</label>
								<?php
}
}
?>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'importantNotes') {?>
							<div class="service_left" style="margin-top:0px">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Important Notes');?>

								<?php $_smarty_tpl->_assignInScope('important_notes_cruise', 'important_notes_cruise');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['important_notes_cruise']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['important_notes_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Important Notes');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-important_notes" class="textarea_intro_editor" data-column="iso-important_notes" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['important_notes'];?>
</textarea>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'inclusions') {?>
							<div class="service_left" style="margin-top:0px">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Inclusions');?>

								<?php $_smarty_tpl->_assignInScope('inclusions_cruise', 'inclusions_cruise');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['inclusions_cruise']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['inclusions_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Inclusions');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-inclusion" class="textarea_intro_editor" data-column="iso-inclusion" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['inclusion'];?>
</textarea>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'exclusions') {?>
							<div class="service_left" style="margin-top:0px">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Exclusions');?>

								<?php $_smarty_tpl->_assignInScope('exclusions_cruise', 'exclusions_cruise');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['exclusions_cruise']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['exclusions_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Exclusions');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-exclusion" class="textarea_intro_editor" data-column="iso-exclusion" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['exclusion'];?>
</textarea>
							</div>	
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'cruisePolicy') {?>
							<div class="service_left" style="margin-top:0px">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Policy');?>

								<?php $_smarty_tpl->_assignInScope('cruise_policy_cruise', 'cruise_policy_cruise');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['cruise_policy_cruise']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['cruise_policy_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Policy');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-cruise_policy" class="textarea_intro_editor" data-column="iso-cruise_policy" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['cruise_policy'];?>
</textarea>
							</div>	
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'bookingPolicy') {?>
							<div class="service_left" style="margin-top:0px">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Policy');?>

								<?php $_smarty_tpl->_assignInScope('booking_policy_cruise', 'booking_policy_cruise');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['booking_policy_cruise']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['booking_policy_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Policy');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-booking_policy" class="textarea_intro_editor" data-column="iso-booking_policy" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['booking_policy'];?>
</textarea>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'childPolicy') {?>
							<div class="service_left" style="margin-top:0px">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child Policy');?>

								<?php $_smarty_tpl->_assignInScope('child_policy_cruise', 'child_policy_cruise');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['child_policy_cruise']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['child_policy_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child Policy');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-child_policy" class="textarea_intro_editor" data-column="iso-child_policy" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['child_policy'];?>
</textarea>
							</div>		
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == ('itineraryday-').($_smarty_tpl->tpl_vars['step_id']->value)) {?>
							<div class="service_left" style="margin-top:0px">
								<h3 class="title_box mb10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Config Price');?>
: <?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getDuration($_smarty_tpl->tpl_vars['step_id']->value);?>

								<?php $_smarty_tpl->_assignInScope('config_price_cruise', 'config_price_cruise');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['config_price_cruise']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['config_price_cruise']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Policy');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
								</h3>
								<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Set the price for your cruise');?>
</p>
							</div>
							<div class="inpt_tour" id="tblCruisePrice">
							</div>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_cruise_overview');?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['currentstep']->value != '') {?>
						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['key'];?>
" data-prevstep="<?php echo $_smarty_tpl->tpl_vars['prevstep']->value;?>
" data-step_id="<?php echo $_smarty_tpl->tpl_vars['prevstep_id']->value;?>
" class="back_step js_save_back"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>

							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" data-next_step="<?php echo $_smarty_tpl->tpl_vars['nextstep']->value;?>
" data-step_id="<?php echo $_smarty_tpl->tpl_vars['nextstep_id']->value;?>
" class="js_save_continue"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col_instruction" <?php if ($_smarty_tpl->tpl_vars['currentstep']->value == '') {?>style="display:none"<?php }?>>
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
 type="text/javascript">
	var list_check_target = <?php echo $_smarty_tpl->tpl_vars['list_check_target']->value;?>
;
	var pvalTable_ovv = <?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
;
<?php echo '</script'; ?>
>

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
	$.each( list_check_target, function( i, val ) {
		if(val.status == 1){
			$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_success");
		}else{
			$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_caution");
		}
	});
	
<?php echo '</script'; ?>
>
<?php }
}
