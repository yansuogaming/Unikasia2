<?php
/* Smarty version 3.1.38, created on 2024-04-16 07:18:17
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/bill.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661dc3c93ce9d8_62770538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '472592e0b10c954ebc1663bc87815d8454b37e55' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/bill.tpl',
      1 => 1698295970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661dc3c93ce9d8_62770538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),));
?>
	

	<style>
		@page {
			size: A4;
			margin: 20px;
		}
		@media print {
			page-break-inside:avoid;
			.bill {
				width: 100% !important;font-style: normal;line-height: normal;
				font-family: "Times New Roman";
			}
			body{
				-webkit-print-color-adjust:exact;
			}
			.info_bill td * {
				margin-top: 0 !important;
				margin-bottom: 0 !important;
			}
			.box_infoBooking{background:unset}
			
		}
		@media screen{
			.bill{
				font-family: Segoe UI;
			}
		}
		.bill {width: 100% !important;font-style: normal;line-height: normal;display: inline-table}
		.bg_comp{width: 380px;height: 310px;position: absolute;right: 0;top:0}
		.bg_comp:after {content: "";width: 0;height: 0;position: absolute;left: 0;top: 0;border-top: 310px solid #F7FDFD;border-bottom: 0px solid #F7FDFD;border-left: 380px solid #FFF}
		.info_bill .box_time td {padding: 0}
		.info_bill .box_time td:not(:last-child) {padding-right: 50px}
		.box_customer td {vertical-align: top;padding: 0}
		.box_head_bill{width: 100%;float: left}
		.info_bill{width: 55%;padding: 34px 0px 30px;float: left}
		.info_bill h1{color: #000;font-size: 36px;font-weight: 600;margin:0px;margin-bottom: 10px}
		.info_bill .title_bill{color: #000;font-size: 18px;font-style: normal;font-weight: 400;line-height: normal;text-transform: uppercase;margin:0px}
		.info_bill .box_time{margin-top: 37px;clear: both}
		.info_bill .box_time .time{margin-bottom: 10px}
		.info_bill .box_time .time:not(:last-child) {margin-right: 50px}
		.info_bill .box_time .time label{color: #666;font-size: 14px;font-weight: 400;line-height: normal;margin-bottom:4px}
		.info_bill .box_time .time p{color: #000;font-size: 18px;font-weight: 600;line-height: normal;margin: 0px}
		.info_bill .box_customer{margin-top: 30px;clear: both}
		.info_bill .box_customer label{color: #666;font-size: 14px;font-weight: 400;margin-right: 20px}
		.info_bill .box_customer .customer{width: 272px}
		.info_bill .box_customer .customer p{color: #000;font-size: 16px;font-weight: 400;padding-bottom: 5px;border-bottom: 1px dashed #00000033;margin:0px;margin-bottom: 8px;}
		.info_bill .box_customer .customer .ip_cus {width: 100%;border: 0px;padding: 0;padding-bottom: 5px;border-bottom: 1px dashed #00000033;color: #000;font-size: 16px}
		.info_bill .box_customer .customer .ip_cus:not(:first-child) {padding-top: 8px}
		.info_bill .box_customer .customer .name{font-weight:600}
		.box_company{width: 45%;height: 287px;padding: 40px 0px;text-align: right;position: relative;float: right}
		.box_company .box_info_company{width: 206px;float: right;color: #333;text-align: right;font-size: 12px;font-weight: 400}
		.box_company .box_info_company img{margin-bottom: 19px}
		.box_company .box_info_company p {margin: 0}
		.box_company .box_info_company p:not(:last-child){margin-bottom: 3px}
		.box_infoBooking{width: 100%;padding: 0px 30px;clear:both}
		.box_infoBooking .table_booking{width: 100%;clear: both}
		.box_infoBooking .table_booking>thead>tr>th{color: #000;font-size:12px;font-weight: 400;text-transform: uppercase;padding: 10px 0px}
		.box_infoBooking .table_booking>thead>tr>th:first-child{width: 50%;padding: 10px 20px;text-align: left}
		.box_infoBooking .table_booking>thead>tr>th:nth-child(2){width: 10%;padding: 10px 0px;text-align: center}
		.box_infoBooking .table_booking>thead>tr>th:nth-child(3){width: 20%;padding: 10px;text-align: right}
		.box_infoBooking .table_booking>thead>tr>th:last-child{width: 20%;padding: 10px 20px;text-align: right}
		.box_infoBooking .table_booking>tbody>tr>td:last-child{padding:0}
		.box_infoBooking .table_booking .table_booking_child{width: 100%;border-radius: 5px;border: 1px solid #D9D9D9;margin-bottom: 10px;border-collapse: collapse}
		.box_infoBooking .table_booking .table_booking_child>thead tr th{padding: 13px 20px;background: #F7F7F7;border-radius: 5px 5px 5px 0px;text-align: left}
		.box_infoBooking .table_booking .table_booking_child>thead tr th .title_product{color: #000;font-size: 14px;font-weight: 600;margin:0px;margin-bottom: 5px;line-height: normal}
		.box_infoBooking .table_booking .table_booking_child>thead tr th .duration_product{color: #000;font-size: 12px;font-weight: 400;line-height: 18px;margin: 0px}
		.box_infoBooking .table_booking .table_booking_child>tbody tr td{color: #1C1C1C;font-size: 14px!important;font-weight: 400;line-height: 21px;text-align: left}
		.box_infoBooking .table_booking .table_booking_child>tbody tr td:nth-child(1){width:50%;padding: 10px 20px;text-align: left}
		.box_infoBooking .table_booking .table_booking_child>tbody tr td:nth-child(2){width:10%;padding: 0px 10px;text-align:center}
		.box_infoBooking .table_booking .table_booking_child>tbody tr td:nth-child(3){width:20%;padding: 10px;text-align:right}
		.box_infoBooking .table_booking .table_booking_child>tbody tr td:last-child{width:20%;padding: 10px 20px 10px 10px;text-align:right}
		.box_infoBooking .table_booking .table_booking_child>tbody tr.tr_promotion td:first-child {width: 60%;text-align:left;padding: 10px 20px;}
		.box_infoBooking .table_booking .table_booking_child>tbody tr.tr_promotion td:nth-child(2),.box_infoBooking .table_booking .table_booking_child>tbody tr.tr_promotion td:nth-child(3){width:20%;text-align:right}
		.box_infoBooking .table_booking .table_booking_child .tr_promotion{background: #CFF4E0}
		.box_infoBooking .table_booking .table_booking_child .tr_promotion p {margin: 0px}
		.table_price_bill {width: 100%}
		.table_price_bill td {vertical-align: top}
		.table_price_bill .text_price_bill{color: #666;font-size: 14px!important;font-weight: 400;line-height: 21px;vertical-align: top;padding: 6px 0px}
		.table_price_bill .lbl_total_price{width: 20%;text-align: right;color: #1C1C1C;font-size: 14px !important;font-weight: 400;line-height: 21px;padding: 6px 10px}
		.table_price_bill .price_bill{width: 20%;text-align: right;color: #1C1C1C;font-size: 14px !important;line-height: 21px;padding: 6px 10px;font-weight: 600}
		.table_price_bill .price_collect{font-size: 20px !important;}
		.table_price_bill .price_final_payment{color: #F00}
		.box_text_bottom{width: 100%;margin: 40px auto 25px;padding: 14px 20px;padding-left: 70px;border-radius: 3px;    background: #f583211a url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJcSURBVHgBzZftbdswEIbvSDdAECdVN2AzgbuBs0G9QTNB7N+FGzpGB+gE9QZxJ4i7gTpBuEGExOkHUPJ6lGSXrhXZslTEL2CIoig+Ot7xjgZ4JmF48zhWb7nrkpsdaE6xBRqdDM20EHynlTqQeMvNhHgwNCQBoHg+5YDOjodmtuhvLRsIfX8lS2dtbRoDP4xVVwDeoANeTZgFH5SJTY/89aiFd9CgFlaiFC/DfgHPpFbZw7lWHZR4DdWUsD8HoT+LVGoxSYgIKOEWVPhFIndbmUotzr/6DfwH7aePvX7w/oYK+sk+fqVNsmlcKfieM5mDasF1wL/5lTpvfzAT2BX8wkLsWjiBipKWZuE9B2gsHH3bGnyojeHLOdRUe2jWAnQ/g4sLRyRFmmPX5SA50asVJ9T38ekFJxKdp2LDFWoQVqhSsJTQlYCfix9y8GnVK4I/jk8vKYNydOMUgTo8zzUXjGWFKgVby9VEUo+jozATHQfVJoRCBjXIle5Q35qiClUKzvfjFLbUAurbPnn+yvtRsOVudWxjwRVayr79xF3+YHHzoFUXXZYLSPw1ohHwv8vLfuwzfOThguH+ys9HYcWqDV73abr34beFCaTB5UWjo6HR4Xu1wE9B8/ObtzQqgtYCbwFVT0FrgXnS/q7QncHzj8qfuyPn6Msu0BUw5YEwJ3oNG+Scnxz80dSk7/DZrAo0ezXXIruAXz7IJlwDChq035v4/kq9k5imUsMfHOHyjLUd1GuZufwe48Lf4yXgoMFu4Wib/rWJrYOpkHSBgIphhlNTTM593VT890J/ALhFMI4WxL66AAAAAElFTkSuQmCC) no-repeat;background-position:20px}
		.box_text_bottom img{position: absolute;left: 20px;top: calc(50% - 15px)}
		.box_text_bottom .text{color: #333;font-size: 14px;font-weight: 400;line-height: normal;margin: 0px}
		.price_pay {font-weight: 600}
		.price_subsist {color: #F00}
	</style>
	
	<div class="bill">
		<div class="box_infoBooking">			
			<div class="box_head_bill">
			<div class="bg_comp"></div>
				<div class="info_bill">
					<h1>#<?php echo $_smarty_tpl->tpl_vars['max_id']->value;?>
</h1>
					<p class="title_bill"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bill');?>
</p>
					<div class="box_time">
						<table>
							<tr>
								<td>
									<div class="time">
										<label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Release date');?>
</label>
										<p><?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
</p>
									</div>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['payment_term']->value > 0) {?>
								<td>									
									<div class="time">
										<label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payments term');?>
</label>
										<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['payment_term']->value,"%d.%m.%Y");?>
</p>
									</div>
								</td>
								<?php }?>
								<td>	
									<div class="time">
										<label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Code');?>
</label>
										<p><?php echo $_smarty_tpl->tpl_vars['bill_code']->value;?>
</p>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<div class="box_customer">
						<table>
							<tr>
								<td><label for=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Recipient');?>
</label></td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['checkEdit']->value) {?>
										<div class="customer" id="info_customer">
											<input type="text" class="ip_cus name" value="<?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>
" name="name_customer">
											<input type="email" class="ip_cus email" value="<?php echo $_smarty_tpl->tpl_vars['customer_email']->value;?>
" name="email_customer">
											<input type="text" class="ip_cus phone" value="<?php echo $_smarty_tpl->tpl_vars['customer_phone']->value;?>
" name="phone_customer">
										</div>
									<?php } else { ?>
										<div class="customer">
											<p class="name"><?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>
</p>
											<p><?php echo $_smarty_tpl->tpl_vars['customer_email']->value;?>
</p>
											<p><?php echo $_smarty_tpl->tpl_vars['customer_phone']->value;?>
</p>
										</div>
									<?php }?>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="box_company">
					<div class="box_info_company">
						<img src="https://isocms.com/admin/isocms/templates/default/skin/images/logo_bill.png" alt="">
						<?php $_smarty_tpl->_assignInScope('address', ('CompanyAddress_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<p><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['address']->value);?>
</p>
						<p><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
</p>
						<p><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
</p>
					</div>
				</div>
			</div>
			<table class="table_booking">
				<thead>
					<tr>
						<th><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Service");?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Quantily');?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Unit price');?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total price');?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($_smarty_tpl->tpl_vars['tour_cart_store']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tour_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['item']->value['tour_id_z']);?>
						<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value));?>
						<?php $_smarty_tpl->_assignInScope('Depart_point', $_smarty_tpl->tpl_vars['clsTour']->value->getDepartureCity($_smarty_tpl->tpl_vars['tour_id']->value));?>
						<?php $_smarty_tpl->_assignInScope('fullTextAddress', $_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value,'full'));?>
						<?php if ($_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value) != '') {?>
							<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['clsTour']->value->getTextdepartureCityEnd($_smarty_tpl->tpl_vars['tour_id']->value));?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['fullTextAddress']->value);?>
						<?php }?>
						<?php $_smarty_tpl->_assignInScope('tour_option', $_smarty_tpl->tpl_vars['clsTourOption']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['tour__class']));?>
						<?php $_smarty_tpl->_assignInScope('lstService', $_smarty_tpl->tpl_vars['clsTour']->value->getListService($_smarty_tpl->tpl_vars['tour_id']->value));?>
						<?php $_smarty_tpl->_assignInScope('promotion_date', strtotime($_smarty_tpl->tpl_vars['item']->value['check_in_book_z']));?>
						<tr>
							<td colspan="4">
							<table class="table_booking_child">
								<thead>
									<tr>
										<th colspan="4">
											<p class="title_product"><?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
:[<?php echo $_smarty_tpl->tpl_vars['Depart_point']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
											<p class="duration_product">(<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['check_in_book_z'],"-","/");?>
 - <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText6($_smarty_tpl->tpl_vars['clsTour']->value->getTextEndDate($_smarty_tpl->tpl_vars['item']->value['check_in_book_z'],$_smarty_tpl->tpl_vars['tour_id']->value));?>
)</p>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['number_adults_z']) {?>
									<tr>
										<td style="text-align: left;width:50%;padding: 10px 20px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Adult");?>
</td>
										<td style="text-align: center;width:10%"><?php echo $_smarty_tpl->tpl_vars['item']->value['number_adults_z'];?>
</td>
										<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price_adults_z'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
										<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['total_price_adults'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
									</tr>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['number_child_z']) {?>
									<tr>
										<td style="text-align: left;width:50%;padding: 10px 20px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Child");?>
</td>
										<td style="text-align: center;width:10%"><?php echo $_smarty_tpl->tpl_vars['item']->value['number_child_z'];?>
</td>
										<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price_child_z'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
										<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['total_price_child'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
									</tr>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['number_infants_z']) {?>
									<tr>
										<td style="text-align: left;width:50%;padding: 10px 20px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Infants");?>
</td>
										<td style="text-align: center;width:10%"><?php echo $_smarty_tpl->tpl_vars['item']->value['number_infants_z'];?>
</td>
										<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price_infants_z'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
										<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['total_price_infants'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
									</tr>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['number_addon']) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['number_addon'], 'item_addon', false, 'k');
$_smarty_tpl->tpl_vars['item_addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item_addon']->value) {
$_smarty_tpl->tpl_vars['item_addon']->do_else = false;
?>
									<?php $_smarty_tpl->_assignInScope('oneService', $_smarty_tpl->tpl_vars['clsAddOnService']->value->getOne($_smarty_tpl->tpl_vars['k']->value,'addonservice_id,title,price'));?>
									<?php echo smarty_function_math(array('assign'=>"price_addon",'equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['item_addon']->value,'y'=>$_smarty_tpl->tpl_vars['oneService']->value['price']),$_smarty_tpl);?>

									<tr>
										<td style="text-align: left;width:50%;padding: 10px 20px"><?php echo $_smarty_tpl->tpl_vars['oneService']->value['title'];?>
</td>
										<td style="text-align: center;width:10%"><?php echo $_smarty_tpl->tpl_vars['item_addon']->value;?>
</td>
										<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['oneService']->value['price'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
										<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['price_addon']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
									</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion_z'] && $_smarty_tpl->tpl_vars['item']->value['promotion_z'] > 0) {?>
										<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == 2) {?>
											<tr class="tr_promotion">
												<td colspan="2" style="text-align: left;width:60%;padding:10px 20px">
													<p><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['discount']->value['title'];?>
</p>
												</td>
												<td style="text-align: right;padding: 0px 10px;width:20%">-<?php echo $_smarty_tpl->tpl_vars['item']->value['promotion_z'];?>
%</td>
												<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price_promotion'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
											</tr>
										<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == 1) {?>
											<tr class="tr_promotion">
												<td colspan="2" style="text-align: left;width:60%;padding:10px 20px">
													<p><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['discount']->value['title'];?>
</p>
												</td>
												<td style="text-align: right;padding: 0px 10px;width:20%">-<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price_promotion'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
												<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price_promotion'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
											</tr>
										<?php }?>
									<?php }?>
								</tbody>
							</table>
						</td>
					</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['hotel_cart_store']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('hotel_id', $_smarty_tpl->tpl_vars['item']->value['hotel_id']);?>
						<?php $_smarty_tpl->_assignInScope('oneItemHotel', $_smarty_tpl->tpl_vars['clsHotel']->value->getOne($_smarty_tpl->tpl_vars['hotel_id']->value,'title,address'));?>
						<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItemHotel']->value));?>
						<?php $_smarty_tpl->_assignInScope('promotion_date', strtotime($_smarty_tpl->tpl_vars['item']->value['check_in']));?>
						<tr>
							<td colspan="4" style="padding: 0">
								<table class="table_booking_child">
									<thead>
										<tr>
											<th colspan="4">
												<p class="title_product"><?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
												<p class="duration_product">(<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText6($_smarty_tpl->tpl_vars['item']->value['check_in']);?>
 - <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText6($_smarty_tpl->tpl_vars['item']->value['check_out']);?>
)</p>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['room'], 'item_room', false, NULL, 'k', array (
));
$_smarty_tpl->tpl_vars['item_room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_room']->value) {
$_smarty_tpl->tpl_vars['item_room']->do_else = false;
?>
										<?php echo smarty_function_math(array('assign'=>"price",'equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['item_room']->value['number_room'],'y'=>$_smarty_tpl->tpl_vars['item_room']->value['totalprice']),$_smarty_tpl);?>

										<tr>
											<td style="text-align: left;width:50%;padding: 10px 20px"><?php echo $_smarty_tpl->tpl_vars['clsHotelRoom']->value->getTitle($_smarty_tpl->tpl_vars['item_room']->value['hotel_room_id']);?>
</td>
											<td style="text-align: center;width:10%"><?php echo $_smarty_tpl->tpl_vars['item_room']->value['number_room'];?>
</td>
											<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item_room']->value['totalprice'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
											<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['price']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
										</tr>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

										<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] && $_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {?>
											<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == 2) {?>
												<tr class="tr_promotion" style="background: #CFF4E0">
													<td colspan="2" style="text-align: left;width:60%; padding:10px 20px">
														<p><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
													</td>
													<td style="text-align: right;padding: 0px 10px;width:20%">-<?php echo $_smarty_tpl->tpl_vars['item']->value['promotion'];?>
%</td>
													<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionHotel'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
												</tr>
											<?php } else { ?>
												<tr class="tr_promotion" style="background: #CFF4E0">
													<td colspan="2" style="text-align: left;width:60%; padding:10px 20px">
														<p><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
													</td>
													<td style="text-align: right;padding: 0px 10px;width:20%">-<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['promotion'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
													<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['promotion'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
												</tr>
											<?php }?>
										<?php }?>
									</tbody>
								</table>
							</td>						
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['cruise_cart_store']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cruise_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('cruise_id', $_smarty_tpl->tpl_vars['item']->value['cruise_id']);?>
						<?php $_smarty_tpl->_assignInScope('oneItemCruise', $_smarty_tpl->tpl_vars['clsCruise']->value->getOne($_smarty_tpl->tpl_vars['cruise_id']->value,'title'));?>
						<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneItemCruise']->value));?>
						<?php $_smarty_tpl->_assignInScope('promotion_date', $_smarty_tpl->tpl_vars['item']->value['departure_date']);?>
						<tr>
							<td colspan="4">
								<table class="table_booking_child">
									<thead>
										<tr>
											<th colspan="4">
												<p class="title_product"><?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
												<p class="duration_product">(<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText6($_smarty_tpl->tpl_vars['item']->value['departure_date']);?>
 - <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText6($_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getTextEndDate($_smarty_tpl->tpl_vars['item']->value['departure_date'],$_smarty_tpl->tpl_vars['item']->value['cruise_itinerary_id']));?>
)</p>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['cabin'], 'item_cabin', false, NULL, 'k', array (
));
$_smarty_tpl->tpl_vars['item_cabin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_cabin']->value) {
$_smarty_tpl->tpl_vars['item_cabin']->do_else = false;
?>
										<tr>
											<td style="text-align:left;width:50%;padding:10px 20px"><?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['item_cabin']->value['cruise_cabin_id']);?>
</td>
											<td style="text-align: center;width:10%"><?php echo $_smarty_tpl->tpl_vars['item_cabin']->value['number_cabin'];?>
</td>
											<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item_cabin']->value['totalprice'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
											<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item_cabin']->value['totalprice'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
										</tr>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										
										<?php if ($_smarty_tpl->tpl_vars['item']->value['promotion'] && $_smarty_tpl->tpl_vars['item']->value['promotion'] > 0) {?>										
											<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == 2) {?>
												<?php echo smarty_function_math(array('assign'=>"pricePromotion",'equation'=>"x * y/100",'x'=>$_smarty_tpl->tpl_vars['item']->value['promotion'],'y'=>$_smarty_tpl->tpl_vars['item']->value['totalpriceCabin']),$_smarty_tpl);?>

												<tr class="tr_promotion">
													<td colspan="2" style="text-align: left;width:60%; padding:10px 20px">
														<p><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
													</td>
													<td style="text-align: right;padding: 0px 10px;width:20%">-<?php echo $_smarty_tpl->tpl_vars['item']->value['promotion'];?>
%</td>
													<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['totalPricePromotionCruise'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
												</tr>
											<?php } else { ?>
												<tr class="tr_promotion">
													<td colspan="2" style="text-align: left;width:60%; padding:10px 20px">
														<p><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
													</td>
													<td style="text-align: right;padding: 0px 10px;width:20%">-<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['promotion'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
													<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['promotion'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
												</tr>
											<?php }?>
										<?php }?>
									</tbody>
								</table>
							</td>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['voucher_cart_store']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['voucher_cart_store']->value, 'item', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('voucher_id', $_smarty_tpl->tpl_vars['item']->value['voucher_id_z']);?>
						<?php $_smarty_tpl->_assignInScope('oneVoucher', $_smarty_tpl->tpl_vars['clsVoucher']->value->getOne($_smarty_tpl->tpl_vars['voucher_id']->value,'title,price'));?>
						<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['oneVoucher']->value['title']);?>		
						<?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['clsISO']->value->parsePriceDecimal($_smarty_tpl->tpl_vars['oneVoucher']->value['price']));?>	
						<?php echo smarty_function_math(array('assign'=>"price_total",'equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['item']->value['voucherGroup_id'],'y'=>$_smarty_tpl->tpl_vars['price']->value),$_smarty_tpl);?>

						<tr>
							<td colspan="4">
								<table class="table_booking_child">
									<thead>
										<tr>
											<th colspan="4">
												<p class="title_product"><?php echo $_smarty_tpl->tpl_vars['voucher_id']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="text-align:left;width:50%;padding: 10px 20px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Voucher");?>
</td>
											<td style="text-align: center;width:10%"><?php echo $_smarty_tpl->tpl_vars['item']->value['voucherGroup_id'];?>
</td>
											<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['price']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
											<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['price_total']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
										</tr>
										<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_value'] && $_smarty_tpl->tpl_vars['item']->value['discount_value'] > 0) {?>
											<?php echo smarty_function_math(array('assign'=>"price_promotion",'equation'=>"x * y* z/100",'x'=>$_smarty_tpl->tpl_vars['item']->value['discount_value'],'y'=>$_smarty_tpl->tpl_vars['item']->value['voucherGroup_id'],'z'=>$_smarty_tpl->tpl_vars['item']->value['voucher_price_z']),$_smarty_tpl);?>

											<?php if ($_smarty_tpl->tpl_vars['item']->value['discount_type'] == 2) {?>
												<tr class="tr_promotion">
													<td colspan="2" style="text-align: left;width:60%;padding:10px 20px">
														<p><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
													</td>
													<td style="text-align: right;padding: 0px 10px;width:20%">-<?php echo $_smarty_tpl->tpl_vars['item']->value['discount_value'];?>
%</td>
													<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['price_promotion']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
												</tr>
											<?php } else { ?>
												<tr class="tr_promotion">
													<td colspan="2" style="text-align: left;width:60%;padding:10px 20px">
														<p><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
													</td>
													<td style="text-align: right;padding: 0px 10px;width:20%">-<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['discount_value'],0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
													<td style="text-align: right;width:20%"><?php echo number_format($_smarty_tpl->tpl_vars['price_promotion']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
												</tr>
											<?php }?>
										<?php }?>
									</tbody>
								</table>
							</td>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>

					<tr>
						<td colspan="4">
							<table class="table_price_bill">
								<tbody>
								<tr>
									<td class="text_price_bill" colspan="2" rowspan="5"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</td>
								</tr>
								<tr>
									<td class="lbl_total_price"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price');?>
:</td>
									<td class="price_bill"><?php echo number_format($_smarty_tpl->tpl_vars['totalgrand']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
								</tr>
								<tr>
									<td class="lbl_total_price"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Deposit');?>
:</td>
									<td class="price_bill"><?php echo number_format($_smarty_tpl->tpl_vars['deposit_bill']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
								</tr>
								<tr>
									<td class="lbl_total_price"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Collect more');?>
:</td>
									<td class="price_bill price_collect" style="width: 20%;padding: 6px 10px;text-align: right;font-size: 20px !important;font-weight: 600;"><?php echo number_format($_smarty_tpl->tpl_vars['money']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
								</tr>
								<tr>
									<td class="lbl_total_price"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Final Payment');?>
:</td>
									<td class="price_bill price_final_payment"><?php echo number_format($_smarty_tpl->tpl_vars['balance']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
				</tbody>
			</table>							
			<div class="box_text_bottom">
				<p class="text">(TỔNG KẾT) Bạn phải trả <span class="price_pay"><?php echo number_format($_smarty_tpl->tpl_vars['money']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</span> bằng phương thức <span class="price_pay"><?php echo $_smarty_tpl->tpl_vars['payment_method']->value;?>
</span> cho nhà tổ chức du lịch trước ngày <span class="price_pay"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['payment_term']->value,"%d.%m.%Y");?>
</span>. Số nợ còn lại sau khi hoàn thành thanh toán là <span class="price_subsist"><?php echo number_format($_smarty_tpl->tpl_vars['balance']->value,0,"."," ");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>
</span></p>
			</div>
		</div>
	</div>
<?php }
}
