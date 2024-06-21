<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:40:35
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/_ajax.departure_date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66149c9353d223_99192196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f7025eced3e03fac634be8b316ce7bd5577c8c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/_ajax.departure_date.tpl',
      1 => 1709694215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66149c9353d223_99192196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="modal-dialog modal-lg">
	<div class="modal-content version-xs">
		<div class="modal-header px-30 version-xs">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</h4>
		</div>
		<form method="post" id="frmIssue" class="frmform" enctype="multipart/form-data">
			<div class="modal-body px-30 version-xs">
				<div class="form-group">
					<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Types of Ruler');?>
<span class="text-red">*</span></label>
					<div class="clearfix"></div>
					<select class="form-control iso-selectbox" onChange="handler_ruler_type(this, event)" name="ruler_type" data-width="80%">
						<!--<option value="3">Lặp lại hàng tuần vào những ngày đã chọn</option> -->
						<option<?php if ($_smarty_tpl->tpl_vars['hs']->value == '1') {?> disabled<?php }?> value="1"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['ruler_type'] == '1') {?> selected<?php }?>>Khởi hành vào khoảng ngày đã chọn</option>
						<option value="2"<?php if ($_smarty_tpl->tpl_vars['openFrom']->value == 'calendar' || $_smarty_tpl->tpl_vars['oneItem']->value['ruler_type'] == '2') {?> selected<?php }?>>Khởi hành vào ngày nhất định</option>  
					</select>
									</div>
				<div class="ruler-controls hcDateRange form-group<?php if ($_smarty_tpl->tpl_vars['openFrom']->value == 'calendar') {?> hidden<?php }?>">
					<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Date Range');?>
</label>
					<div class="form-row">
						<div class="col-xs-12 col-md-3">
							<input type="text" class="form-control datepicker1<?php if ($_smarty_tpl->tpl_vars['openFrom']->value != 'calendar') {?> required<?php }?> w-100" name="start_date" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Start Date');?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['start_date']);?>
" autocomplete="off" readonly />
						</div>
						<div class="col-xs-12 col-md-3">
							<input type="text" class="form-control datepicker1<?php if ($_smarty_tpl->tpl_vars['openFrom']->value != 'calendar') {?> required<?php }?>  w-100" name="due_date" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('End Date');?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['end_date']);?>
" autocomplete="off" readonly />
						</div>
					</div>
				</div>
				<div class="ruler-controls hcOneDay form-group<?php if ($_smarty_tpl->tpl_vars['openFrom']->value != 'calendar') {?> hidden<?php }?>">
					<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Day');?>
</label>
					<div class="form-row">
						<div class="col-xs-12 col-md-3">
							<input type="text" class="form-control datepicker1<?php if ($_smarty_tpl->tpl_vars['openFrom']->value == 'calendar') {?> required<?php }?> w-100" name="date_id" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['date_id']);?>
" placeholder="dd/mm/yy" autocomplete="off" readonly />
						</div>
					</div>
				</div>
				<div class="ruler-controls hcOneDay form-group">
					<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Active');?>
</label> 
					<input type="hidden" value="0" name="is_active">
					<input <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_active'] == 1) {?> checked<?php }?> type="checkbox" class="cm-toggle" value="1" name="is_active">
				</div>
				<div class="ruler-controls hcOneDay form-group">
					<label class="col-form-label text-bold">Là tour giờ chót</label> <input type="hidden" value="0" name="is_last_hour"><input <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_last_hour'] == 1) {?> checked<?php }?> type="checkbox" class="cm-toggle is_last_hour" value="1" name="is_last_hour">
				</div>
				<div id="is_last_hour_html" class="ruler-controls hcOneDay form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Open sale date');?>
</label>
							<div class="form-row">
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control w-100" name="open_sale_date" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['open_sale_date']);?>
" placeholder="dd/mm/yy" />
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close sale date');?>
</label>
							<div class="form-row">
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control w-100" name="close_sale_date" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['close_sale_date']);?>
" placeholder="dd/mm/yy" />
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="ruler-controls hcDateRange form-group<?php if ($_smarty_tpl->tpl_vars['openFrom']->value == 'calendar') {?> hidden<?php }?> day_range">
					<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Day Influencing');?>
</label>
					<span class="help-block text-muted">Chọn (những) ngày áp dụng quy tắc sẵn có này.</span>
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
					<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type Of Departures');?>
</label>
					<div class="clearfix"></div>
					<select class="form-control selectpicker" name="departure_type" data-width="80%">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listType']->value, '_Item', false, '_Key');
$_smarty_tpl->tpl_vars['_Item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_Key']->value => $_smarty_tpl->tpl_vars['_Item']->value) {
$_smarty_tpl->tpl_vars['_Item']->do_else = false;
?>
						<option<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['departure_type'] == $_smarty_tpl->tpl_vars['_Key']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_Key']->value;?>
" data-content="<div class='option'><div class='text'><b><?php echo $_smarty_tpl->tpl_vars['_Item']->value['title'];?>
</b> 
						- <?php echo $_smarty_tpl->tpl_vars['_Item']->value['subtitle'];?>
</div></div>"><?php echo $_smarty_tpl->tpl_vars['_Item']->value['title'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="form-group">
					<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price');?>
<span class="text-red">*</span></label>
					<div class="clearfix"></div>
					<div class="d-flex">
						<label class="radio-inline version-xs mr-4">
							<input type="radio" value="0" name="price_type" onChange="handler_price_type(this,event)"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['price_type'] == '0') {?> checked="checked"<?php }?> value="0" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Default');?>

						</label>
						<label class="radio-inline version-xs">
							<input type="radio" value="1" name="price_type" onChange="handler_price_type(this,event)"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['price_type'] == '1') {?> checked="checked"<?php }?> value="1" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change');?>

						</label>
					</div>
					<div class="hc-PriceTable<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['price_type'] == '0') {?> hidden<?php }?> mt-3">
						<?php echo $_smarty_tpl->tpl_vars['htmlPriceTable']->value;?>

					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-4">
						<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Numberofseats');?>
</label>
						<span class="help-block mt-0 text-muted"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Để trống nếu không giới hạn chỗ');?>
</span>
						<input type="text" class="form-control numberonly allotment w-150px" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['allotment'];?>
" name="allotment" maxlength="255" />
					</div>
					<div class="col-xs-12 col-md-4">
						<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
(%)</label>
						<span class="help-block mt-0 text-muted"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Số tiền phải thanh toán khi đặt');?>
</span> 
						<input type="number" class="form-control price-In numberonly w-150px" min="0" max="100" value="<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['deposit']) {
echo $_smarty_tpl->tpl_vars['oneItem']->value['deposit'];
} else { ?>0<?php }?>" autocomplete="off" name="deposit" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment Due Date');?>
</label>
					<div class="clearfix"></div>
					<select class="form-control selectpicker" name="time_for_payment" data-width="80%">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listPaymentDue']->value, '_Item', false, '_Key');
$_smarty_tpl->tpl_vars['_Item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_Key']->value => $_smarty_tpl->tpl_vars['_Item']->value) {
$_smarty_tpl->tpl_vars['_Item']->do_else = false;
?>
						<option<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['time_for_payment'] == $_smarty_tpl->tpl_vars['_Key']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_Key']->value;?>
" data-content="<div class='option'><div class='text'><b><?php echo $_smarty_tpl->tpl_vars['_Item']->value['title'];?>
</b> - <?php echo $_smarty_tpl->tpl_vars['_Item']->value['subtitle'];?>
</div></div>"><?php echo $_smarty_tpl->tpl_vars['_Item']->value['title'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="modal-footer px-30 version-xs">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</span>
				</button>
				<button type="button" class="btn btn-primary" onClick="pop_save_departure_date(this,event)" tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" openFrom="<?php echo $_smarty_tpl->tpl_vars['openFrom']->value;?>
" tour_start_date_id="<?php echo $_smarty_tpl->tpl_vars['tour_start_date_id']->value;?>
">
					<i class="icon-ok icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</span>
				</button>
			</div>
		</form>
	</div>
</div>
<?php echo '<script'; ?>
>
var is_last_hour='<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['is_last_hour'];?>
';
var date_id='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_id'],"%d-%m-%Y");?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
loadIsLastHourHtml(is_last_hour);
$_document.on('click','.cm-toggle.is_last_hour',function(){
	loadIsLastHourHtml($(this).is(':checked'));
});
function loadIsLastHourHtml(is_last_hour){
	if(is_last_hour==1){
	   $('#is_last_hour_html').show();
	}else{
		$('#is_last_hour_html').hide();
	}
}
	datePickerOpenSale(date_id);
	datePickerCloseSale(new Date(),date_id);
	
$('input[name="date_id"]').change(function(){
	var value = $(this).val();
	$('input[name="open_sale_date"]').datepicker('destroy');
	$('input[name="close_sale_date"]').datepicker('destroy');
	datePickerOpenSale(value);
	datePickerCloseSale(new Date(),value);
});
$('input[name="open_sale_date"]').change(function(){
	var max_date = $('input[name="date_id"]').val();
	datePickerOpenSale($(this).val());
	$('input[name="close_sale_date"]').datepicker('destroy');
	datePickerCloseSale($(this).val(),max_date);
});
$('.datepicker1').datepicker({
	dateFormat: "dd/mm/yy",
	minDate: new Date()
});
function datePickerOpenSale(maxDate=0) {
    $('input[name="open_sale_date"]').datepicker({
        dateFormat: "dd/mm/yy",
		minDate: new Date(),
		maxDate: maxDate
    });
}
function datePickerCloseSale(minDate=0,maxDate=0) {
    $('input[name="close_sale_date"]').datepicker({
        dateFormat: "dd/mm/yy",
        minDate: minDate,
		maxDate: maxDate
    });
}
<?php echo '</script'; ?>
>
<?php }
}
