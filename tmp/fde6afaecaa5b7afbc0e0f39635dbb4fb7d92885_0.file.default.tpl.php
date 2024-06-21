<?php
/* Smarty version 3.1.38, created on 2024-04-11 08:47:39
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/billing/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6617413be69cd3_12884797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde6afaecaa5b7afbc0e0f39635dbb4fb7d92885' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/billing/default.tpl',
      1 => 1698295947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617413be69cd3_12884797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
 : </strong>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&clsTable=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['clsTable']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Billing');?>
</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
</div>
<div class="page_container page_billing_history">
	<div class="page-title d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Billing Management');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Billing Management');?>
 trong hệ thống isoCMS">i</div>
			</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Here you can find all the important figures regarding your revenue and fees');?>
</p>
		</div>
    </div>
	<div class="container-fluid">
		<div class="filter_box">
			<form id="forums" method="post" class="filterForm" action="">
				<div class="form-group form-keyword">
					<input class="form-control" type="text" name="bill_code" value="<?php echo $_smarty_tpl->tpl_vars['bill_code']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('code');?>
..." />
				</div>
				<div class="form-group form-country">
					<select name="status" class="form-control" data-width="100%">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</option>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value == '0') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Waiting Payment');?>
</option>
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value == '1') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Completly payment');?>
</option>
					</select>
				</div>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
					<input type="hidden" name="filter" value="filter" />
				</div>
				<div class="group_buttons fr">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-success btnNew">
						<i class="icon-folder-open icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['totalItem']->value;?>
)</span>
					</a>
					<a href="javascript:void(0)" class="btn btn-success btn-export btnNew">
						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/v2/excel.png" style="vertical-align:middle"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Export');?>

					</a>
				</div>
			</form>	
		</div>
		
		<div class="dateExport dateExport2" style="display:none">
			<form class="form-export" method="post" action="">
				<div class="form-group inline-block">
					<div class="span50 fl">
						<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="from_date">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From');?>
 <span class="color_r">*</span>
						</label>
						<div class="col-md-9 col-sm-8 col-xs-8">
							<input name="from_date" autocomplete="off" maxlength="10" id="from_date" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatTimeDate($_smarty_tpl->tpl_vars['now_day']->value);?>
" size="15" class="full-width text_32 border_aaa" placeholder="dd/mm/yyyy">
						</div>
					</div>
					<div class="span50 fr">
						<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="to_date">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('To');?>
 <span class="color_r">*</span>
						</label>
						<div class="col-md-9 col-sm-8 col-xs-8">
							<input name="to_date" autocomplete="off" maxlength="10" id="to_date" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatTimeDate($_smarty_tpl->tpl_vars['now_next']->value);?>
" size="15" class="full-width text_32 border_aaa" placeholder="dd/mm/yyyy">
						</div>
					</div>
				</div>
				<button type="submit" class="buttonExport" id="button_export"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Export');?>
</button>
				<input type="hidden" name="Export" value="Export" />
			</form>
		</div>
		<div class="hastable">
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('statistical');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('records');?>
/<strong><?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('page');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youareonpagenumber');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</strong></td>
						<td width="50%" align="right">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('gotopage');?>
:
							<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<option <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</option>
								<?php
}
}
?>
							</select>
						</td>
					</tr>
				</table>
			</div>
			<div class="table_list_booking">
				<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
					<thead><tr>
						<th class="gridheader hiden767" style="width:40px"><strong>No.</strong></th>
						<th class="gridheader name_responsive full-w767" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Code');?>
</strong></th>
						<th class="gridheader hiden767" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking code');?>
</strong></th>
						<th class="gridheader text-left hiden767" style="min-width:150px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Customer's Contact");?>
</strong></th>
						<th class="gridheader hiden767" style="white-space:nowrap"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Billing Method');?>
</strong></th>
						<th class="gridheader hiden767" style="white-space:nowrap"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Pay Now');?>
</strong></th>
						<th class="gridheader hiden767" style="white-space:nowrap"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</strong></th>
						<th class="gridheader hiden767" style="width:10%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment term');?>
</strong></th>
						<th class="gridheader hiden767" style="width:10%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bill type');?>
</strong></th>
						<th class="gridheader hiden767" style="width:6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Action');?>
</strong></th>
					</tr></thead>
					<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

					<tr class="row_custom <?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
						<td class="index hiden767"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</td>
						<td class="name_service title_td1"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bill_code'];?>
<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button></td>
						<td class="block_responsive td_overflow" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking code');?>
"><?php echo $_smarty_tpl->tpl_vars['clsBooking']->value->getOneField('booking_code',$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</td>
						<?php $_smarty_tpl->_assignInScope('txt_customer_contact', $_smarty_tpl->tpl_vars['core']->value->get_Lang("Customer's Contact"));?>
						<td class="block_responsive td_overflow" data-title="<?php echo $_smarty_tpl->tpl_vars['txt_customer_contact']->value;?>
" style="white-space:nowrap">
							<strong><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_name'];?>
 </strong>
							<br />
							<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_email'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_email'];?>
</a>
							<br/>
							<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_phone'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['customer_phone'];?>
</a>
						</td>
						
						<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Billing Method');?>
">
							<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '1') {?>
								<?php $_smarty_tpl->_assignInScope('SitePay_CashName', ('SitePay_CashName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
								<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashName']->value);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '2') {?>
								<?php $_smarty_tpl->_assignInScope('SitePay_BankName', ('SitePay_BankName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
								<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_BankName']->value);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '3') {?>
								<?php $_smarty_tpl->_assignInScope('ONEPAY_Name', ('ONEPAY_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
								<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Name']->value);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '4') {?>
								<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
								<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '5') {?>
								<?php $_smarty_tpl->_assignInScope('Paypal_Name', ('Paypal_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
								<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Paypal_Name']->value);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '6') {?>
								<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
								<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method'] == '7') {?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('QR code');?>

							<?php }?>
						</td>
						<td class="fieldNumber block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Pay Now');?>
"><?php echo number_format($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bill_money'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
						<td class="fieldNumber block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
">
						<p class="status_payment <?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 1) {?>complete_payment<?php } else { ?>waiting_payment<?php }?>">
							<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 1) {?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Completly payment');?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Waiting Payment');?>
											
							<?php }?>
							</p>
						</td>
						<td class=" block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment term');?>
"><?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_term'] > 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_term'],"%d/%m/%Y");
}?></td>
						<td class="fieldNumber block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bill type');?>
">
							<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bill_type'] == 'PAYMENT') {?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment');?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cashback');?>
											
							<?php }?>
						</td>
						<td class=" block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Action');?>
" style="vertical-align: top; text-align: right; white-space: nowrap"> 
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
									<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=booking&act=edit&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
">
										<i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View');?>
</a></li>
									<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bill_type'] == 'PAYMENT') {?>
									<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=booking&act=downloadPDF&billing_id=<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id'];?>
">
										<i class="icon-print"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Print');?>
</a></li>
									<?php }?>
								</ul>
							</div>
						</td>
					</tr>
					<?php
}
}
?>
				</table>
			</div>
			<div class="clearfix"></div>
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('statistical');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('records');?>
/<strong><?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('page');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youareonpagenumber');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</strong></td>
						<td width="50%" align="right">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('gotopage');?>
:
							<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
								<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_2_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<option <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</option>
								<?php
}
}
?>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
$('#from_date').datepicker({
	dateFormat: "dd/mm/yy", 
 
	maxDate: "+1Y",
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showOtherMonths: true,
	onSelect: function(dateStr) { 
		var date = $(this).datepicker('getDate'); 
		if(date){ 
			date.setDate(date.getDate() + 30); 
		} 
		$('#to_date').datepicker('option').datepicker('setDate', date); 
	},
	onClose: function(dateText, inst) {
		$('#to_date').focus();
	}
});
$("#to_date").datepicker( {
	dateFormat: "dd/mm/yy",
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showOtherMonths: true
});	
});
<?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery-ui.css?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery-ui.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
