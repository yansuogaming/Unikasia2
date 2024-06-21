<?php
/* Smarty version 3.1.38, created on 2024-04-09 09:52:19
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/discount/_ajax.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614ad63804fa4_82252320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53017cbfefbbbd1e0dfb20a28d08c26c488aab61' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/discount/_ajax.form.tpl',
      1 => 1692332196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614ad63804fa4_82252320 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['template']->value == '_add') {?>
<div class="modal-dialog modal-xs" role="document">
	<div class="modal-content version-xs">
		<div class="modal-header version-xs">
			<h4 class="modal-title d-inline-block"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?>
				<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit Discount');?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew Discount');?>

			<?php }?></h4>
			<button type="button" class="close close_pop" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form method="post">
			<div class="modal-body version-xs">
				<div class="row flex-row">
					<div class="col-xs-12 col-md-7 left_pop">
						<div class="form-group mb-4">
							<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount Name');?>
 <span class="text-red">*</span></label>
							<input type="text" class="form-control required fontLarge" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" name="title" maxlength="255" placeholder="" />
						</div>
						<div class="form-group mb-4">
							<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Code');?>
 <span class="text-red">*</span></label>
							<div class="input-group">
								<input type="text" class="form-control ipn__discount_code required"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> readonly<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['code'];?>
" name="code" maxlength="255" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Code');?>
" />
								<div class="input-group-btn">
									<button type="button" onClick="generateCode(this)"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> disabled<?php }?> discount_id="<?php echo $_smarty_tpl->tpl_vars['discount_id']->value;?>
" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('refresh',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Generate Code'));?>
</button>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount Type');?>
 <span class="text-red">*</span></label>
							<span class="help-block">Bạn có thể chọn giữa loại chiết khấu theo tỷ lệ phần trăm hoặc phí cố định.</span>
							<div class="clearfix"></div>
							<div class="d-flex">
								<div class="btn-group mr-4" data-toggle="buttons">
									<button class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['more_information']->value['discount_type'] == 2) {?>active<?php }?>">
										<input type="radio" checked="checked" value="2" suffix="%" onchange="handler_discount_change(this)" name="discount_type" <?php if ($_smarty_tpl->tpl_vars['more_information']->value['discount_type'] == 2) {?>checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Percent');?>

									</button>
									<button class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['more_information']->value['discount_type'] == 1) {?>active<?php }?>">
										<input type="radio" suffix="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
" onchange="handler_discount_change(this)" value="1" name="discount_type" <?php if ($_smarty_tpl->tpl_vars['more_information']->value['discount_type'] == 1) {?>checked<?php }?>> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Value');?>

									</button>
								</div>
								<div class="input-group">
									<input type="text" class="form-control required numberonly w-150px" min="0" max="100" placeholder="0.00" name="discount_value" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['discount_value'];?>
">
									<span class="input-group-addon discount-suffix"><?php if ($_smarty_tpl->tpl_vars['more_information']->value['discount_type'] == 2) {?>%<?php } else {
echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();
}?></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Date');?>
 <span class="text-red">*</span></label>
							<div class="input-date-picker">
								<i class="ico ico-calendar"></i>
								<input type="text" class="from_date required" name="booking_date_from" readonly placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From date');?>
" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['booking_date_from']);
}?>">
								<span class="input-picker-separator">--</span>
								<input type="text" class="to_date required" name="booking_date_to" readonly placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('To date');?>
" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['booking_date_to']);
}?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Date');?>
 <span class="text-red">*</span></label>
							<div class="input-date-picker">
								<i class="ico ico-calendar"></i>
								<input type="text" class="from_date required" readonly name="travel_date_from" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From date');?>
" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['travel_date_from']);
}?>">
								<span class="input-picker-separator">--</span>
								<input type="text" class="to_date required" readonly name="travel_date_to" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('To date');?>
" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['travel_date_to']);
}?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Du lịch các ngày trong tuần');?>
</label>
							<div class="clearfix"></div>
							<label class="checkbox-inline">
								<input type="checkbox" name="is_alldays"<?php if ($_smarty_tpl->tpl_vars['more_information']->value['is_alldays']) {?> checked<?php }?> value="1" />
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All days');?>

							</label>
							<span class="help-block text-muted">Chọn ngày du lịch mà mã khuyến mãi này áp dụng cho.</span>
							<div class="vs-checkbox">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDay']->value, '_Item', false, '_Key');
$_smarty_tpl->tpl_vars['_Item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_Key']->value => $_smarty_tpl->tpl_vars['_Item']->value) {
$_smarty_tpl->tpl_vars['_Item']->do_else = false;
?>
								<input type="checkbox" id="weekday-<?php echo $_smarty_tpl->tpl_vars['_Key']->value;?>
" name="weekdays[]"<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['_Key']->value,$_smarty_tpl->tpl_vars['weekdays_arr']->value)) {?>checked <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_Key']->value;?>
" class="weekday">
								<label for="weekday-<?php echo $_smarty_tpl->tpl_vars['_Key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['_Item']->value);?>
</label>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Setting');?>
</label>
							<div class="clearfix"></div>
							<label class="checkbox-inline mb-2">
								<input type="checkbox" name="use_addon_service" value="1"<?php if ($_smarty_tpl->tpl_vars['more_information']->value['use_addon_service']) {?> checked<?php }?> />
								Áp dụng chiết khấu cho các dịch vụ bổ sung
							</label>
							<div class="clearfix"></div>
							<label class="checkbox-inline mb-2">
								<input type="checkbox" name="use_extra_bed" value="1"<?php if ($_smarty_tpl->tpl_vars['more_information']->value['use_extra_bed']) {?> checked<?php }?>/>
								Áp dụng chiết khấu cho các extra bed
							</label>
							<div class="clearfix"></div>
							<label class="checkbox-inline">
								<input type="checkbox" name="allow_usage_limit"<?php if ($_smarty_tpl->tpl_vars['more_information']->value['allow_usage_limit']) {?> checked<?php }?> value="1" />
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Usage Limits');?>

							</label>
							<div id="usage_limit" class="form-group pl-4 <?php if ($_smarty_tpl->tpl_vars['more_information']->value['allow_usage_limit'] == '0') {?> hidden<?php }?>">
								<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Number of uses");?>
:</label>
								<input type="number" class="form-control numberonly w-200px" name="usage_limit" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['usage_limit'];?>
" />
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-5 right_pop">
						<div class="p-4">
							<p class="text">
								Tại đây, bạn có thể chọn xem mã khuyến mãi áp dụng cho tất cả các sản phẩm của bạn hoặc các sản phẩm đã chọn. Nếu bạn chọn các sản phẩm đã chọn, bạn sẽ có thể chọn từ danh sách những sản phẩm sẽ được bao gồm.
							</p>
							<div class="form-group">
								<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Setting');?>
 <span class="text-red">*</span></label>
								<div class="clearfix"></div>
								<label class="radio-inline">
									<input type="radio" discount_id="<?php echo $_smarty_tpl->tpl_vars['discount_id']->value;?>
" name="product_type"<?php if ($_smarty_tpl->tpl_vars['more_information']->value['product_type'] == 'all') {?> checked<?php }?> value="all" />
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All Products');?>

								</label>
								<div class="clearfix"></div>
								<label class="radio-inline">
									<input type="radio" discount_id="<?php echo $_smarty_tpl->tpl_vars['discount_id']->value;?>
" name="product_type"<?php if ($_smarty_tpl->tpl_vars['more_information']->value['product_type'] == 'product') {?> checked<?php }?> value="product" />
									<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Selected Products');?>

								</label>
							</div>
							<div class="form-group holder_product_group<?php if ($_smarty_tpl->tpl_vars['more_information']->value['product_type'] == 'all') {?> hidden<?php }?>">
								<label class="col-form-label">1.<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group product');?>
</label>
								<select class="form-control iso-selectbox" onchange="handler_filter_objects(this)" name="product_group" discount_id="<?php echo $_smarty_tpl->tpl_vars['discount_id']->value;?>
" data-width="100%" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Group product');?>
">
									<option value="tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
</option>
									<option value="hotel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel');?>
</option>
									<option value="cruise"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</option>
									<option value="combo"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Combo');?>
</option>
									<option value="voucher"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</option>
								</select>
							</div>
							<div id="holder_filters_<?php echo $_smarty_tpl->tpl_vars['discount_id']->value;?>
" class="holder_filters holder_product_group<?php if ($_smarty_tpl->tpl_vars['more_information']->value['product_type'] == 'all') {?> hidden<?php }?>">
								<div class="loading text-center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Loading');?>
...</div>
							</div>
							<div class="form-group holder_product_group<?php if ($_smarty_tpl->tpl_vars['more_information']->value['product_type'] == 'all') {?> hidden<?php }?>">
								<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Selected Products');?>
 (<span id="total_items">0</span>)</label>
								<div id="holder_products_discount" class="holder_products_discount">
									<div class="loading text-center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Loading');?>
...</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer version-xs">
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
				<button type="button" class="btn btn-success" onClick="pop_save_discount(this,event)" discount_id="<?php echo $_smarty_tpl->tpl_vars['discount_id']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>

				</button>
			</div>
		</form>
	</div>
</div>
<?php } else { ?>
<div class="modal-dialog<?php if ($_smarty_tpl->tpl_vars['type']->value == 'voucher') {?> modal-standard<?php }?>" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Tìm kiếm sản phẩm</h5>
			<button type="button" class="close close_pop" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb5">
				<div class="input-group-addon"><i class="fa fa-search"></i></div>
				<input type="text" class="form-control form-input-search" discount_id="<?php echo $_smarty_tpl->tpl_vars['discount_id']->value;?>
" _type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="Tìm kiếm sản phẩm" />
			</div> 
			<?php if ($_smarty_tpl->tpl_vars['type']->value == 'voucher') {?>
			<table id="dg" class="easyui-datagrid" url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=discount&act=load_list_voucher_search&lang=<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
" 
			fitColumns="true" singleSelect="false" showHeader="true" pagination="true" style="width:100%; height:400px">
				<thead><tr>
					<th data-options="field:'ck',width:50,align:'center',checkbox:'true'"></th>
					<th data-options="field:'image',width:40,align:'center'">H.ảnh</th>
					<th data-options="field:'code',width:120">Mã sản phẩm</th>
					<th data-options="field:'name',width:250">Tên sản phẩm</th>
				</tr></thead>
			</table>
			<?php } else { ?>
			<table class="easyui-datagrid" id="dg" url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=discount&act=load_list_category_search" 
			fitColumns="true" singleSelect="false" showHeader="true" pagination="true" style="width:100%; height:400px">
				<thead><tr>
					<th data-options="field:'ck',width:40,align:'center',checkbox:'true'"></th>
					<th data-options="field:'name',width:250">Tên danh mục</th>
					<th data-options="field:'qty',width:100,align:'left'">SL. sản phẩm</th>
				</tr></thead>
			</table>
			<?php }?>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
			<button type="button" class="btn btn-success" onClick="add_choice_discount(this)" discount_id="<?php echo $_smarty_tpl->tpl_vars['discount_id']->value;?>
" _type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Update');?>
</button>
		</div>
	</div>
</div>
<?php }
}
}
