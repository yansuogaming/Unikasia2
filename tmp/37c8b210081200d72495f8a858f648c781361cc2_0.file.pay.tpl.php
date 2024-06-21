<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:44:19
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/pay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66149d73c99437_04710431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37c8b210081200d72495f8a858f648c781361cc2' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/pay.tpl',
      1 => 1711595985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66149d73c99437_04710431 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=central" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('System Settings');?>
</a>
    <!-- Back-->
    <a href="javascript:window.history.back();" class="back fr">Quay lại</a>
</div>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment Config');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment Config');?>
 trong hệ thống isoCMS">i</div>
			</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('System management payment config');?>
</p>
		</div>
    </div>
	<div class="container-fluid">
		<div class="panel__container">
			<div class="full_width_767">
				<h4>Thanh toán được chấp nhận</h4>
				<p class="text-muted">Các hình thức thanh toán khi mua hàng</p>
			</div>
			<div class="panel panel-default rightContent full_width_767">
				<div class="panel-body no-space tooltipToggle payment-setting">
					<form action="#" id="form-atm" method="post" class="validate-form">    
						<div class="clearfix payment-header" >
							<div class="col-md-5 " >
								<img class="slideToggle" height="50" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('PAYMENT_METHOD_MUNUAL');?>
">
							</div>
							<div class="col-md-7">
								<p>Bạn có thể cấu hình, hình thức thanh toán bằng tiền mặt trên website</p>
							</div>
						</div>
						<div class="payment-method-setting slidedown-hidden">
							<div class="row">
								<div class="col-md-6"></div>
								<div class="col-md-6">
									<div style="margin-bottom:0;" class="panel panel-default">
										<div class="panel-body paymentType">
											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline"><input type="checkbox" name="SitePay_CashStatus_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SitePay_CashStatus_Mode') == '1') {?>checked<?php }?> value="1" /> <strong>Cho phép thanh toán Tiền mặt tại quầy</strong></label>
												</div>
											</div>
											<?php $_smarty_tpl->_assignInScope('SitePay_CashName', ('SitePay_CashName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
											<?php $_smarty_tpl->_assignInScope('SitePay_CashDesc', ('SitePay_CashDesc_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
</label>
												<div class="controls">
													<input bind="name" class="form-control required" data-val="true"   name="iso-<?php echo $_smarty_tpl->tpl_vars['SitePay_CashName']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashName']->value);?>
" placeholder="Tên phương thức">
												</div>
											</div>
											 <div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Description');?>
</label>
												<div class="controls">
													<textarea id="textarea_<?php echo $_smarty_tpl->tpl_vars['SitePay_CashDesc']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['SitePay_CashDesc']->value;?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashDesc']->value);?>
</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div  class="top21">
							<input type="hidden" name="Hid_Pay1" value="Hid_Pay1" />
							<button type="button" class="btn btn-default pay_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</button>
							<button type="button" class="btn btn-default cancel_setting" name="submit" ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
							<button  type="submit" class="btn btn-default save_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</button>
						</div>
					</form>        
				</div>
				<div class="panel-body no-space tooltipToggle payment-setting">
					<form action="#" id="form-atm" method="post" class="validate-form">    
						<div class="clearfix payment-header" >
							<div class="col-md-5 " >
								<img class="slideToggle" height="50" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('GATEWAY_BANK_TRANFER');?>
">
							</div>
							<div class="col-md-7">
								<p>Bạn có thể cấu hình, hình thức thanh toán bằng tiền mặt trên website</p>
							</div>
						</div>
						<div class="payment-method-setting slidedown-hidden">
							<div class="row">
								<div class="col-md-6"></div>
								<div class="col-md-6">
									<div style="margin-bottom:0;" class="panel panel-default">
										<div class="panel-body paymentType">
											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline"><input type="checkbox" name="SitePay_Bank_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SitePay_Bank_Mode') == '1') {?>checked<?php }?> value="1" /> <strong>Cho phép thanh toán chuyển khoản qua Ngân Hàng</strong></label>
												</div>
											</div>
											<?php $_smarty_tpl->_assignInScope('SitePay_BankName', ('SitePay_BankName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
											<?php $_smarty_tpl->_assignInScope('SitePay_BankDesc', ('SitePay_BankDesc_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
</label>
												<div class="controls">
													<input bind="name" class="form-control required" data-val="true"   name="iso-<?php echo $_smarty_tpl->tpl_vars['SitePay_BankName']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_BankName']->value);?>
" placeholder="Tên phương thức">
												</div>
											</div>
											 <div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Description');?>
</label>
												<div class="controls">
													<textarea id="textarea_<?php echo $_smarty_tpl->tpl_vars['SitePay_BankDesc']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['SitePay_BankDesc']->value;?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_BankDesc']->value);?>
</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div  class="top21">
							<input type="hidden" name="Hid_Pay2" value="Hid_Pay2" />
							<button type="button" class="btn btn-default pay_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</button>
							<button type="button" class="btn btn-default cancel_setting" name="submit" ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
							<button  type="submit" class="btn btn-default save_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</button>
						</div>
					</form>        
				</div>
				<div id="paypal-payment-setting" class="panel-body no-space tooltipToggle payment-setting">
					<form action="#" id="form-atm" method="post" class="validate-form">    
						<div class="clearfix payment-header">
							<div class="col-md-5"><img class="slideToggle" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('IMG_PAYPAL_GATEWAY');?>
"></div>
							<div class="col-md-7">Cửa hàng của bạn đang chấp nhận hình thức thanh toán qua PayPal. Lấy thông tin tài khoản cấu hình thanh toán <a href="https://www.paypal.com/us/cshelp/article/how-do-i-request-an-api-signature-ts1455" target="_blank">xem tại đây</a></div>
						</div>
						<div class="payment-method-setting slidedown-hidden">
							<div class="row">
								<div class="col-md-6"> </div>
								<div class="col-md-6">
									<div style="margin-bottom:0;" class="panel panel-default">
										<div class="panel-body paymentConfig">
											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline"><input type="checkbox" name="Paypal_Status_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_Status_Mode') == '1') {?>checked<?php }?> value="1" /> <strong>Cho phép thanh toán qua Paypal</strong></label>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
</label>
												<div class="controls">
													<?php $_smarty_tpl->_assignInScope('Paypal_Name', ('Paypal_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
													<input bind="name" class="form-control required" name="iso-<?php echo $_smarty_tpl->tpl_vars['Paypal_Name']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Paypal_Name']->value);?>
" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('API Username');?>
</label>
												<div class="controls">
													<input bind="name" class="form-control required" data-val="true" id="Paypal_APIUsername" name="iso-Paypal_APIUsername" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_APIUsername');?>
" placeholder="thtech_api1.vietiso.com"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('API Password');?>
</label>
												<div class="controls">
													<input bind="name" class="form-control required" data-val="true" id="Paypal_APIPassword" name="iso-Paypal_APIPassword" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_APIPassword');?>
" placeholder="42JVX7RNPANV88EU@@" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('API Signature');?>
</label>
												<div class="controls">
													<input bind="name" class="form-control required" data-val="true" id="Paypal_APISignature" name="iso-Paypal_APISignature" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_APISignature');?>
" placeholder="AFcWxV21C7fd0v3bYYYRCpSSRl31ACHo4DNRxD39TTdo1q2jCmq4qyVH" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email received');?>
</label>
												<div class="controls">
													<input bind="name" class="form-control required" data-val="true" id="Paypal_EmailReceived" name="iso-Paypal_EmailReceived" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_EmailReceived');?>
" placeholder="thtech@vietiso.com" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Surcharge');?>
</label>
												<div class="controls">
													<input class="form-control"  placeholder="1.5" name="iso-Paypal_Surcharge" id="Paypal_Surcharge" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_Surcharge');?>
">
												</div>
											</div>
											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline"><input type="checkbox" name="Paypal_Test_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_Test_Mode') == '1') {?>checked<?php }?> value="1" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Test Mode');?>

													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div  class="top21">
							<input type="hidden" name="Hid_Pay3" value="Hid_Pay3" />
							<button type="button" class="btn btn-default pay_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</button>
							<button  type="button" class="btn btn-default cancel_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
							<button type="submit" class="btn btn-default save_setting" name="submitatm" ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</button>
						</div>
					</form>        
				</div>

				<div id="atm-payment-setting" class="panel-body no-space tooltipToggle payment-setting">
					<form action="#" id="form-atm" method="post" class="validate-form">    
						<div class="clearfix payment-header">
							<div class="col-md-5"><img class="slideToggle" height="50" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('GATEWAY_ONEPAY_ATM');?>
"></div>
							<div class="col-md-7">Hệ thống của bạn chưa cấu hình thanh toán online bằng thẻ nội địa (ATM). Để tìm hiểu thêm về OnePay và các thông tin khác vui lòng xem tại <a href="http://onepay.com.vn/" target="_blank">OnePay</a></div>
						</div>
						<div class="payment-method-setting slidedown-hidden">
							<div class="row">
								<div class="col-md-6"> </div>
								<div class="col-md-6">
									<div style="margin-bottom:0;" class="panel panel-default">
										<div class="panel-body paymentConfig">
											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline"><input type="checkbox" name="ONEPAY_Status_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Status_Mode') == '1') {?>checked<?php }?> value="1" /> <strong>Cho phép thanh toán qua OnePay</strong></label>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
</label>
												<div class="controls">
													<?php $_smarty_tpl->_assignInScope('ONEPAY_Name', ('ONEPAY_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
													<input bind="name" class="form-control required" name="iso-<?php echo $_smarty_tpl->tpl_vars['ONEPAY_Name']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Name']->value);?>
" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong">URL Payment</label>
												<div class="controls">
													<input bind="name" class="form-control required" data-val="true" data-val-length="Tên hiển thị tối đa 250 ký tự" data-val-length-max="250" data-val-required="Tên hiển thị không được để trống" id="Name" name="iso-ONEPAY_URL_PAYMENT" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_URL_PAYMENT');?>
" plcaeholder="Thanh toán online qua thẻ nội địa (ATM)">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong">Merchant ID</label>
												<div class="controls">
													<input class="form-control required" data-val="true" placeholder="MerchantId không vượt quá 500 ký tự" id="Setting_MerchantId" name="iso-ONEPAY_Merchant_ID" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Merchant_ID');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hashcode');?>
</label>
												<div class="controls">
													<input class="form-control required" data-val="true"  data-val-length-max="500" placeholder="Hashcode không được để trống" id="Setting_Hashcode" name="iso-ONEPAY_Secure_Hash" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Secure_Hash');?>
">

												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AccessCode');?>
</label>
												<div class="controls">
													<input class="form-control requrired" placeholder="AccessCode không được để trống" id="Setting_AccessCode" name="iso-ONEPAY_Access_Code" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Access_Code');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Surcharge');?>
</label>
												<div class="controls">
													<input class="form-control"  placeholder="1.5" name="iso-ONEPAY_Surcharge" id="ONEPAY_Surcharge" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Surcharge');?>
">
												</div>
											</div>
											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline"><input type="checkbox" name="ONEPAY_Test_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Test_Mode') == '1') {?>checked<?php }?> value="1" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Test Mode');?>

													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div  class="top21">
							<input type="hidden" name="Hid_Pay4" value="Hid_Pay4" />
							<button type="button" class="btn btn-default pay_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</button>
							<button  type="button" class="btn btn-default cancel_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
							<button type="submit" class="btn btn-default save_setting" name="submitatm" ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</button>
						</div>
					</form>        
				</div>
				<div class="clearfix"></div>
				<div id="visa-payment-setting" class="panel-body no-space tooltipToggle payment-setting">
					<form action="#" id="form-visa" method="post" class="validate-form">    
						<div class="clearfix payment-header">
							<div class="col-md-5 " ><img class="slideToggle" height="50" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('GATEWAY_ONEPAY_VISA');?>
"></div>
							<div class="col-md-7">Hệ thống của bạn chưa cấu hình thanh toán online bằng thẻ quốc tế (Visa/MasterCard). Để tìm hiểu thêm về OnePay và các thông tin khác vui lòng xem tại <a href="http://onepay.com.vn/" target="_blank">OnePay</a></div>
						</div>
						<div class="payment-method-setting slidedown-hidden">
							<div class="row">
								<div class="col-md-6"> </div>
								<div class="col-md-6">
									<div style="margin-bottom:0;" class="panel panel-default">
										<div class="panel-body paymentConfig">
											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline">
														<input type="checkbox" name="ONEPAY_Visa_Status_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Status_Mode') == '1') {?>checked<?php }?> value="1" />
														<strong>Cho phép thanh toán qua OnePay</strong>
													</label>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
</label>
												<div class="controls">
													<?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
													<input bind="name" class="form-control required" name="iso-<?php echo $_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['ONEPAY_Visa_Name']->value);?>
" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong">URL Payment</label>
												<div class="controls">
													<input bind="name" class="form-control required" id="ONEPAY_Visa_URL_PAYMENT" name="iso-ONEPAY_Visa_URL_PAYMENT" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_URL_PAYMENT');?>
" plcaeholder="Thanh toán online qua thẻ nội địa (ATM)">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong">Merchant ID</label>
												<div class="controls">
													<input class="form-control required" placeholder="MerchantId không vượt quá 500 ký tự" id="ONEPAY_Visa_Merchant_ID" name="iso-ONEPAY_Visa_Merchant_ID" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Merchant_ID');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hashcode');?>
</label>
												<div class="controls">
													<input class="form-control required" placeholder="Hashcode không được để trống" id="ONEPAY_Visa_Secure_Hash" name="iso-ONEPAY_Visa_Secure_Hash" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Secure_Hash');?>
">

												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AccessCode');?>
</label>
												<div class="controls">
													<input class="form-control required" data-val="true" placeholder="AccessCode không được để trống" name="iso-ONEPAY_Visa_Access_Code" id="ONEPAY_Visa_Access_Code" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Access_Code');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Surcharge');?>
</label>
												<div class="row">
													<div class="col-xs-6">
														<div class="controls">
															<label style="margin-bottom:10px; display:inline-block"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/visa_icon.png" width="auto" height="40" /></label>
															<input class="form-control"  placeholder="1.5" name="iso-ONEPAY_Visa_Surcharge" id="ONEPAY_Visa_Surcharge" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Surcharge');?>
">
														</div>
													</div>
													<div class="col-xs-6">
														<div class="controls">
															<label style="margin-bottom:10px; display:inline-block"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/american_e_icon.png" width="auto" height="40" /></label>
															<input class="form-control"  placeholder="1.5" name="iso-ONEPAY_American_Express_Surcharge" id="ONEPAY_American_Express_Surcharge" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_American_Express_Surcharge');?>
">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline"><input type="checkbox" name="ONEPAY_Visa_Test_Mode" id="ONEPAY_Visa_Test_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Test_Mode') == '1') {?>checked<?php }?> value="1" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Test Mode');?>

													</label>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div  class="top21">
							<input type="hidden" name="Hid_Pay5" value="Hid_Pay5" />
							<button type="button" class="btn btn-default pay_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</button>
							<button type="button" class="btn btn-default cancel_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
							<button type="submit" class="btn btn-default save_setting" name="submitvisa" ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</button>
						</div>
					</form>        
				</div>
                <?php if ($_smarty_tpl->tpl_vars['SERVER_NAME']->value == 'isocms.com') {?>
                <div id="vnpay-payment-setting" class="panel-body no-space tooltipToggle payment-setting">
                    <form action="#" id="form-atm" method="post" class="validate-form">    
                        <div class="clearfix payment-header">
                            <div class="col-md-5"><img class="slideToggle" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('IMG_VNPAY_GATEWAY');?>
"></div>
                            <div class="col-md-7">Cửa hàng của bạn đang chấp nhận hình thức thanh toán qua VNPay. Để tìm hiểu thêm về VNPay và các thông tin khác vui lòng <a href="https://sandbox.vnpayment.vn/apis/docs/gioi-thieu/" target="_blank">xem tại đây</a></div>
                        </div>
                        <div class="payment-method-setting slidedown-hidden">
                            <div class="row">
                                <div class="col-md-6"> </div>
                                <div class="col-md-6">
                                    <div style="margin-bottom:0;" class="panel panel-default">
                                        <div class="panel-body paymentConfig">

                                            <div class="form-group">
                                                <div class="controls">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="VNPay_Status_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VNPay_Status_Mode') == '1') {?>checked<?php }?> value="1" /> <strong>Cho phép thanh toán qua VTC Pay</strong></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
</label>
                                                <div class="controls">
                                                    <?php $_smarty_tpl->_assignInScope('VNPay_Name', ('VNPay_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                                                    <input bind="name" class="form-control required" name="iso-<?php echo $_smarty_tpl->tpl_vars['VNPay_Name']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['VNPay_Name']->value);?>
" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
">
                                                </div>
                                            </div>
                                            <div class="form-group">
												<label class="control-label strong">URL Payment (vnp_Url)</label>
												<div class="controls">
													<input bind="name" class="form-control required" id="VNPAY_URL_PAYMENT" name="iso-VNPAY_URL_PAYMENT" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VNPAY_URL_PAYMENT');?>
" plcaeholder="Url thanh toán">
												</div>
											</div>
                                            <div class="form-group">
                                                <label class="control-label strong">Terminal ID/ Mã Website (vnp_TmnCode)</label>
                                                <div class="controls">
                                                    <input bind="name" class="form-control required" name="iso-VNPay_ID_Website" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VNPay_ID_Website');?>
" plcaeholder="Terminal ID/ Mã Website">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SecretKey');?>
 (vnp_HashSecret)</label>
                                                <div class="controls">
                                                    <input bind="name" class="form-control required" name="iso-VNPay_SecretKey" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VNPay_SecretKey');?>
" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SecretKey');?>
">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group">
                                                <label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Surcharge');?>
</label>
                                                <div class="controls">
                                                    <input class="form-control"  placeholder="1.5" name="iso-VNPay_Surcharge" id="VNPay_Surcharge" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VNPay_Surcharge');?>
">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label class="checkbox-inline"><input type="checkbox" name="VNPay_Test_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VNPay_Test_Mode') == '1') {?>checked<?php }?> value="1" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Test Mode');?>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div  class="top21">
                            <input type="hidden" name="Hid_Pay8" value="Hid_Pay8" />
                            <button type="button" class="btn btn-default pay_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</button>
                            <button  type="button" class="btn btn-default cancel_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
                            <button type="submit" class="btn btn-default save_setting" name="submitatm" ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</button>
                        </div>
                    </form>        
                </div>
				<div id="vtcpay-payment-setting" class="panel-body no-space tooltipToggle payment-setting">
					<form action="#" id="form-atm" method="post" class="validate-form">    
						<div class="clearfix payment-header">
							<div class="col-md-5"><img class="slideToggle" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('IMG_VTCPAY_GATEWAY');?>
"></div>
							<div class="col-md-7">Cửa hàng của bạn đang chấp nhận hình thức thanh toán qua VTC Pay. Để tìm hiểu thêm về VTC Pay và các thông tin khác vui lòng <a href="https://vtcpay.vn/tai-lieu-tich-hop-website" target="_blank">xem tại đây</a></div>
						</div>
						<div class="payment-method-setting slidedown-hidden">
							<div class="row">
								<div class="col-md-6"> </div>
								<div class="col-md-6">
									<div style="margin-bottom:0;" class="panel panel-default">
										<div class="panel-body paymentConfig">

											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline"><input type="checkbox" name="VTCPay_Status_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VTCPay_Status_Mode') == '1') {?>checked<?php }?> value="1" /> <strong>Cho phép thanh toán qua VTC Pay</strong></label>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
</label>
												<div class="controls">
													<?php $_smarty_tpl->_assignInScope('VTCPay_Name', ('VTCPay_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
													<input bind="name" class="form-control required" name="iso-<?php echo $_smarty_tpl->tpl_vars['VTCPay_Name']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['VTCPay_Name']->value);?>
" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name Method');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Mã website tích hợp');?>
</label>
												<div class="controls">
													<input bind="name" class="form-control required" name="iso-VTCPay_ID_Website" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VTCPay_ID_Website');?>
" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Mã website tích hợp');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Số tài khoản VTC Pay');?>
</label>
												<div class="controls">
													<input bind="name" class="form-control required" name="iso-VTCPay_BUSINESS" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VTCPay_BUSINESS');?>
" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Số tài khoản VTC Pay');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SecretKey');?>
</label>
												<div class="controls">
													<input bind="name" class="form-control required" name="iso-VTCPay_SecretKey" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VTCPay_SecretKey');?>
" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SecretKey');?>
">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hướng dẫn thanh toán');?>
 <span>- Hiển thị ở trang thông báo mua hàng thành công và trang thanh toán</span></label>
												<div class="controls">
													<?php $_smarty_tpl->_assignInScope('VTCPay_Description', ('VTCPay_Description_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
													<textarea bind="name" class="form-control required" name="iso-<?php echo $_smarty_tpl->tpl_vars['VTCPay_Description']->value;?>
" type="text" plcaeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hướng dẫn thanh toán');?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['VTCPay_Description']->value);?>
</textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label strong"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Surcharge');?>
</label>
												<div class="controls">
													<input class="form-control"  placeholder="1.5" name="iso-Paypal_Surcharge" id="Paypal_Surcharge" type="text" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_Surcharge');?>
">
												</div>
											</div>
											<div class="form-group">
												<div class="controls">
													<label class="checkbox-inline"><input type="checkbox" name="VTCPay_Test_Mode" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VTCPay_Test_Mode') == '1') {?>checked<?php }?> value="1" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Test Mode');?>

													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div  class="top21">
							<input type="hidden" name="Hid_Pay7" value="Hid_Pay7" />
							<button type="button" class="btn btn-default pay_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</button>
							<button  type="button" class="btn btn-default cancel_setting"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
							<button type="submit" class="btn btn-default save_setting" name="submitatm" ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</button>
						</div>
					</form>        
				</div>
                <?php }?>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		$('.pay_setting').click(function(){
			var $_this = $(this);
			var $_body = $_this.closest('form').find('.payment-method-setting');
			if($('.payment-method-setting:visible').length){
				$('.payment-method-setting:visible').closest('form').find('.cancel_setting').trigger('click');
			}
			$_body.stop(false, true).removeClass('slidedown-hidden').addClass('slidedown-visible');
			$_this.hide();
			$_this.closest('form').find('.cancel_setting,.save_setting').show();
			return false;
		});
	});
	$('.cancel_setting').click(function(){
		var $_this = $(this);
		var $_body = $_this.closest('form').find('.payment-method-setting');
		$_body.stop(false, true).removeClass('slidedown-visible').addClass('slidedown-hidden');
		$_this.hide();
		$_this.closest('form').find('.save_setting').hide();
		$_this.closest('form').find('.pay_setting').show();
		return false;
	});
	
<?php echo '</script'; ?>
>
<style type="text/css">
	.panel__container{
		width:100%;
		clear:both;
	}
	.panel__container:after,
	.panel__container:before{
		display:table;
		clear:both;
		content:"";
	}
	.panel {
		background:none;
		border-radius: 4px;
	}
	.panel-left{
		float:left;
		width:24%;
	}
	.panel-light{
		vertical-align:top;
		float:right;
		width: 75%;;
		margin: 0;
		padding: 0;
	}
	.clearfix::after,
	.clearfix::before {
		content: " ";
		display: table;
	}
	.payment-setting{
		margin-bottom: 10px;
		border: 1px solid #ccc;
		border-radius: 3px;
		padding-bottom:0px;
		padding-left: 0;
		padding-right: 0;
	}
	.payment-setting .payment-header {
		position: relative;
		padding:10px 0px 10px 50px;
	}
	.slidedown-hidden.slidedown-visible {
		-webkit-transition: max-height 1s;
		-moz-transition: max-height 1s;
		transition: max-height 1s;
		max-height: 1500px;
		position: relative;
		visibility: visible;
		overflow: hidden;
	}
	.slidedown-hidden {
		position: absolute;
		visibility: hidden;
		max-height: 0;
		background: #f5f6f7;
		padding: 10px 20px 20px;
	}
	.panel-default {
		border-color: #ddd;
	}
	.panel>.panel-body:last-child {
		border-bottom-right-radius: inherit;
		border-bottom-left-radius: inherit;
	}
	.panel-body:after, .panel-body:before,
	.form-group:after,
	.form-group:before {
		content: " ";
		display: table;
		clear:both;
	}
	.form-group {
		margin-bottom: 15px;
	}
	.form-control {
		height: 32px;
		box-shadow: none;
		padding: 6px 8px;
		background-image: none;
	}
	.btn {
		line-height: 18px;
		padding: 6px 10px;
	}
	.btn-default {
		border-color: #d0d0d0;
	}
	.btn {
		display: inline-block;
		margin-bottom: 0;
		font-weight: 400;
		text-align: center;
		vertical-align: middle;
		cursor: pointer;
		border: 1px solid #DDD;
		white-space: nowrap;
		font-size: 13px;
		border-radius: 4px;
		-ms-user-select: none;
		user-select: none;
		background-image: none;
		color: #479ccf;
	}
	.form-control, output {
		font-size: 13px;
		line-height: 1.428571429;
		color: #555;
		display: block;
	}
	.form-control {
		width: 100%;
		background-color: #fff;
		border: 1px solid #ccc;
		border-radius: 3px;
		-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	}
	.payment-setting .logo {
		border-right: dotted 1px #eaeaea;
		position: absolute;
		width: 60px;
		height: 100%;
		top: 0;
		left: 0;
	}
	.top21 {
		padding: 10px 0px;
		border-top: 1px solid #ebeef0;
		text-align: right;
		margin-right: 20px;
	}
	
	label.strong {
		font-weight: 700;
		margin-bottom: 5px;
		display: block
	}
	.cancel_setting,
	.save_setting{
		display:none;
	}
	.panel .panel-body, .panel-lg .panel-body, .panel-lg .panel-footer, .panel-lg .panel-heading {
		background: #fff;
	}
	.payment-setting .payment-header, .payment-setting .payment-content, .payment-setting .payment-method-setting {
		padding: 20px;
		overflow:hidden;
	}
	.slideToggle,.slideToggle1{
		cursor:pointer;
	}
	@media (min-width: 992px){
		.col-md-5 {
			z-index: 99;
			width: 26.666667%;
			float: left;
			position: relative;
			min-height: 1px;
			padding-left: 15px;
			padding-right: 15px;
		}
		.col-md-6{
			width: 100%;
			float: left;
		}
		.col-md-7{
			width:72.333333%;
			vertical-align:top;
			margin-left:22.666667%;
		}
	}
</style>
<?php }
}
