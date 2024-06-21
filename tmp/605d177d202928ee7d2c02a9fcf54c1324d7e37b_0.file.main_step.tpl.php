<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:29:50
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/voucher/main_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613aafe132632_86132203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '605d177d202928ee7d2c02a9fcf54c1324d7e37b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/voucher/main_step.tpl',
      1 => 1710902615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613aafe132632_86132203 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						<?php if ($_smarty_tpl->tpl_vars['currentstep']->value == 'image') {?>
							<?php $_smarty_tpl->_assignInScope('image_detail', 'image_voucher');?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_image');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'generalinformation') {?>
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('generalinformation');?>
</h3>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('title_voucher', 'title_voucher');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['title_voucher']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['title_voucher']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<input class="input_text_form input-title required" data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" onClick="loadHelp(this)" >
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['title_voucher']->value));?>
</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCat_Voucher')) {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('category_voucher', 'category_voucher');?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['category_voucher']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<div class="fieldarea">
									<select class="glSlBox border_aaa required" name="iso-cat_id" style="width:250px" onClick="loadHelp(this)">
										<?php echo $_smarty_tpl->tpl_vars['clsVoucherCat']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['cat_id']);?>

									</select>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['category_voucher']->value));?>
</div>
								</div>
							</div>
							<?php }?>
							
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'highLight') {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('HighLight');?>

									<?php $_smarty_tpl->_assignInScope('highLight_voucher', 'highLight_voucher');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['highLight_voucher']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['highLight_voucher']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('HighLight');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label></br>
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-intro" class="textarea_intro_editor" data-column="iso-intro" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['intro'];?>
</textarea>
								
								<?php echo '<script'; ?>
>
								$(".showdate").datepicker({dateFormat: "dd/mm/yy"});
								<?php echo '</script'; ?>
>
								
							</div>	
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'detail_information') {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Detail Information');?>

									<?php $_smarty_tpl->_assignInScope('detail_information_voucher', 'detail_information_voucher');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['detail_information_voucher']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['detail_information_voucher']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Detail Information');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label></br>
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-content" class="textarea_intro_editor" data-column="iso-content" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</textarea>
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['detail_information_voucher']->value));?>
</div>
								
								<?php echo '<script'; ?>
>
								$(".showdate").datepicker({dateFormat: "dd/mm/yy"});
								<?php echo '</script'; ?>
>
								
							</div>	
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'conditions_apply') {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Conditions apply');?>

									<?php $_smarty_tpl->_assignInScope('conditions_apply_voucher', 'conditions_apply_voucher');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['conditions_apply_voucher']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['conditions_apply_voucher']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Conditions apply');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label></br>
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-location" class="textarea_intro_editor" data-column="iso-location" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['location'];?>
</textarea>
								
								<?php echo '<script'; ?>
>
								$(".showdate").datepicker({dateFormat: "dd/mm/yy"});
								<?php echo '</script'; ?>
>
								
							</div>	
						
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'destination') {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('infodestinationadmin');?>

									<?php $_smarty_tpl->_assignInScope('destination_voucher', 'destination_voucher');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['destination_voucher']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['destination_voucher']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('infodestinationadmin');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label></br>
								<div class="fieldarea">
                                    <div class="d-flex">
                                        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'continent','default','default') && $_smarty_tpl->tpl_vars['core']->value->checkAccess('continent')) {?>
                                        <select class="slb form-control-new mr5" name="chauluc_id" style="width:160px" id="slb_Chauluc" onClick="loadHelp(this)">
                                            <?php echo $_smarty_tpl->tpl_vars['clsContinent']->value->makeSelectboxOption();?>

                                        </select>
                                        <?php }?>
                                        <select class="slb form-control-new mr5" name="country_id" id="slb_Country" style="width:160px !important;">
                                            <option value="0">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectcountry');?>
 --</option>
                                        </select>
                                        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default')) {?>
                                        <select class="slb form-control-new mr5" id="slb_RegionID" name="region_id" style="width:160px !important;">
                                            <option value="0">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectregion');?>
 --</option>
                                        </select>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'city','default','default')) {?>
                                        <div id="slb_city_Id_Container" class="form-group mr5">
                                            <select class="slb form-control-new iso-selectbox" id="slb_CityID" name="city_id" style="width: auto">
                                                <option value="0">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectcity');?>
 --</option>
                                            </select>
                                        </div>
                                        <?php }?>	
                                        <button class="btn-add ajQuickAddDestination" onClick="addDestination(this)" type="button"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adddestination');?>
</button>	
                                    </div>
									
									
									<?php echo '<script'; ?>
>loadCountry();<?php echo '</script'; ?>
>
									
								</div>
								<div class="clear"><br></div>
								<div class="row-span">
									<div style="padding-left:10px">
										<ul class="list-group" id="lstDestination" style="width:500px;"></ul>
										<div class="clearfix mt10"></div>
										<span class="notice" style="padding:0;color:#0565c9">(<span class="requiredMask">*</span> ) <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('infoless1destination');?>
</span>
									</div>
								</div>
								<?php echo '<script'; ?>
>
									loadListDestination(<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
);
								<?php echo '</script'; ?>
>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'photoGallery') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_voucher_image-gallery');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'configPrice') {?>
							<h3 class="title_box mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Config Price');?>
</h3>
							<div class="tabbox">
								<form method="post" action="">
								<div class="row">
									<div class="col-xs-12">
										<div class="ui-card mt-half">
											<header class="ui-card__header">
												<h4 class="ui-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price');?>

												</h4>
											</header>
											<div class="ui-card__section">
												<div class="ui-type-container">
													<div class="form-group">
														<div class="row">
															<div class="col-md-9">
																<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price');?>

																<?php $_smarty_tpl->_assignInScope('title_price_voucher', 'title_price_voucher');?>
																<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['title_price_voucher']->value);?>
																<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
																<button data-key="<?php echo $_smarty_tpl->tpl_vars['title_price_voucher']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
																<?php }?>
																</label>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">₫</span>
                                                                            <input type="text" class="form-control require numberonly price-In" required="true" name="price" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price'];?>
" onClick="loadHelp(this)" />
                                                                            <div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['title_price_voucher']->value));?>
</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <select class="form-control" name="unit">
                                                                                <?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('Unit',$_smarty_tpl->tpl_vars['oneItem']->value['unit']);?>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
																
															</div>
                                                            <?php if (1 == 2) {?>
															<div class="col-md-6 col-md-12">
																<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('PriceInput');?>

																<?php $_smarty_tpl->_assignInScope('title_price_input_voucher', 'title_price_input_voucher');?>
																<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
																<button data-key="<?php echo $_smarty_tpl->tpl_vars['title_price_input_voucher']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('PriceInput');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
																<?php }?>
																</label>
																<div class="input-group">
																	<span class="input-group-addon">₫</span>
																	<input type="text" class="form-control price-In numberonly" name="price_input" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price_input'];?>
" onClick="loadHelp(this)" />
																	<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['title_price_input_voucher']->value));?>
</div>
																</div>
															</div>
                                                            <?php }?>
														</div>
													</div>
                                                    <div class="form-group">
														
														<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=property&type=Unit" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Manage Unit');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Manage Unit');?>
</a>
														<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['mass_voucher']->value));?>
</div>
													</div>
													<?php if (1 == 2) {?>
                                                    <div class="form-group">
														<div class="custom-checkbox-wrapper core-checkbox-custom">
															<label class="">
																<input<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['taxable'] == '1') {?> checked<?php }?> name="taxable" value="1" type="checkbox">
																<span class="custom-checkbox custom-icon"></span>
															</label> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price_Included_VAT');?>

														</div>
													</div>
                                                    <?php }?>
												</div>
											</div>
										</div>
                                        
										<div class="ui-card mt-half">
											<header class="ui-card__header">
												<h4 class="ui-heading">Kho hàng</h4>
											</header>
											<div class="ui-card__section">
												<div class="ui-type-container">
													
                                                    <?php if (1 == 2) {?>
                                                    <div class="form-group">
														<div class="row">
															<div class="col-md-6 col-md-12">
																<label class="col-form-label">Mã Voucher / SKU
																<?php $_smarty_tpl->_assignInScope('code_voucher', 'code_voucher');?>
																<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
																<button data-key="<?php echo $_smarty_tpl->tpl_vars['code_voucher']->value;?>
" data-label="Mã Voucher / SKU" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
																<?php }?>
																</label>
																<input type="text" class="form-control require" required name="iso-code" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['code'];?>
" onClick="loadHelp(this)" />
																<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['code_voucher']->value));?>
</div>
															</div>
															<div class="col-md-6 col-md-12">
																<label class="col-form-label">Mã vạch / Barcode (ISBN, UPC, v.v...)
																<?php $_smarty_tpl->_assignInScope('barcode_voucher', 'barcode_voucher');?>
																<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
																<button data-key="<?php echo $_smarty_tpl->tpl_vars['barcode_voucher']->value;?>
" data-label="Mã vạch / Barcode (ISBN, UPC, v.v...)" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
																<?php }?>
																</label>
																<input type="text" class="form-control" name="iso-barcode" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['barcode'];?>
" onClick="loadHelp(this)" />
																<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['barcode_voucher']->value));?>
</div>
															</div>
														</div>
													</div>
                                                     <?php }?>
													<div class="form-group">
														<div class="row">
															<div class="col-md-6 col-md-12">
																<label class="col-form-label">Quản lý kho
																<?php $_smarty_tpl->_assignInScope('warehouse_voucher', 'warehouse_voucher');?>
																<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
																<button data-key="<?php echo $_smarty_tpl->tpl_vars['warehouse_voucher']->value;?>
" data-label="Quản lý kho" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
																<?php }?>
																</label>
																<select class="form-control" onChange="setInventory(this)" name="is_inventory" onClick="loadHelp(this)">
																	<option<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_inventory'] == '0') {?> selected<?php }?> value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('NoStockManagement');?>
</option>
																	<option<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_inventory'] == '1') {?> selected<?php }?> value="1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AllowStockManagement');?>
</option>
																</select>
																<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['warehouse_voucher']->value));?>
</div>
															</div>
															<div class="col-md-6 col-md-12 stock-quantity-section<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_inventory'] != '1') {?> hidden<?php }?>">
																<label class="col-form-label">Số lượng
																<?php $_smarty_tpl->_assignInScope('amount_voucher', 'amount_voucher');?>
																<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
																<button data-key="<?php echo $_smarty_tpl->tpl_vars['amount_voucher']->value;?>
" data-label="Số lượng" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
																<?php }?>
																</label>
																<input type="number" min="0" class="form-control numberonly" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTotalQuantityInStock($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" name="quantity" onClick="loadHelp(this)" />
																<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['amount_voucher']->value));?>
</div>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="custom-checkbox-wrapper core-checkbox-custom">
															<label class="">
																<input<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['continue_order'] == '1') {?> checked<?php }?> name="continue_order" value="1" type="checkbox"> 
																<span class="custom-checkbox custom-icon"></span>
															</label> Cho phép tiếp tục đặt hàng khi hết hàng
														</div>
													</div>
												</div>
											</div>
										</div>
                                        <?php if (1 == 2) {?>
										<div class="ui-card mt-half">
											<header class="ui-card__header">
												<h4 class="ui-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Transfer');?>
</h4>
											</header>
											<div class="ui-card__section">
												<div class="ui-type-container">
													<div class="form-group">
														<div class="custom-checkbox-wrapper core-checkbox-custom">
															<label class="">
																<input onChange="setTransfer(this)" name="is_shipping"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_shipping'] == '1') {?> checked<?php }?> value="1" type="checkbox"> 
																<span class="custom-checkbox custom-icon"></span>
															</label> Sản phẩm yêu cầu vận chuyển
														</div>
													</div>
												</div>
											</div>
											<div class="ui-card__section transfer-section<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_shipping'] != '1') {?> hidden<?php }?>">
												<div class="ui-type-container" onClick="loadHelp(this)">
													<div class="ui-stack ui-stack--wrap ui-stack--vertical ui-stack--spacing-tight">
														<h3 class="ui-subheading">Khối lượng
														<?php $_smarty_tpl->_assignInScope('mass_voucher', 'mass_voucher');?>
														<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
														<button data-key="<?php echo $_smarty_tpl->tpl_vars['mass_voucher']->value;?>
" data-label="Khối lượng" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
														<?php }?>
														</h3>
														<p class="type--subdued">Được dùng để tính phí vận chuyển ở trang thanh toán</p>
													</div>
													<div class="form-group">
														<div class="input-group double-input mb10">
															<input type="text" class="form-control numberonly" name="iso-weight" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['weight'];?>
" />
															<select class="form-control" name="unit">
																<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('Unit',$_smarty_tpl->tpl_vars['oneItem']->value['unit']);?>

															</select>
														</div>
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=property&type=Unit" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Manage Unit');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Manage Unit');?>
</a>
														<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['mass_voucher']->value));?>
</div>
													</div>
												</div>
											</div>
										</div>
                                       <?php }?>
									</div>
								</div>
								</form>
							</div>							
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'seo') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_voucher_seotool');?>
				
						<?php }?>
						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['key'];?>
" data-prevstep="<?php echo $_smarty_tpl->tpl_vars['prevstep']->value;?>
" class="back_step js_save_back"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>

							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" data-next_step="<?php echo $_smarty_tpl->tpl_vars['nextstep']->value;?>
" class="js_save_continue"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
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
	var voucher_id = $voucher_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
	var list_check_target = <?php echo $_smarty_tpl->tpl_vars['list_check_target']->value;?>
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
