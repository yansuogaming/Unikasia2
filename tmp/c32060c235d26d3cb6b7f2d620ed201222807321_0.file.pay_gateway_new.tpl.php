<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:55:09
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/pay_gateway_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e64d3d1443_97256526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c32060c235d26d3cb6b7f2d620ed201222807321' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/pay_gateway_new.tpl',
      1 => 1698304264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e64d3d1443_97256526 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="billingInfo bg_fff pd20_991 mb20">
	<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'tour') {?>
	<h3 class="size18"><span class="number">3</span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Billing Information');?>
</h3>
	<?php }?>
    <div class="booking_tab">
        <div class="payment-choice">
        	<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SitePay_CashStatus_Mode')) {?>
            <?php $_smarty_tpl->_assignInScope('SitePay_CashName', ('SitePay_CashName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
            <?php $_smarty_tpl->_assignInScope('SitePay_CashDesc', ('SitePay_CashDesc_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
            <label style="cursor:pointer;" class="mb10"><input type="radio" class="chkPayment" name="payment_method" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value == $_smarty_tpl->tpl_vars['PAYMENT_CASH_ID']->value || !(isset($_smarty_tpl->tpl_vars['payment_method']->value))) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_CASH_ID']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashName']->value);?>
</label><br>
               <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashDesc']->value)) {?>
                <div class="SitePay_CashDesc" style="border:1px solid #ddd; padding:10px; margin:5px 0px;margin-bottom: 15px; display:block;">
                    <?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_CashDesc']->value));?>

                </div>
               <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SitePay_Bank_Mode')) {?>
            <?php $_smarty_tpl->_assignInScope('SitePay_BankName', ('SitePay_BankName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
            <?php $_smarty_tpl->_assignInScope('SitePay_BankDesc', ('SitePay_BankDesc_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
            <label style="cursor:pointer;" class="mb10">
                <input type="radio" class="chkPayment" name="payment_method" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value == $_smarty_tpl->tpl_vars['PAYMENT_TRANSFER_ID']->value) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_TRANSFER_ID']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_BankName']->value);?>

            </label><br> 
            <div class="SitePay_BankDesc" style="border:1px solid #ddd; padding:10px; margin:5px 0px;margin-bottom: 15px; display:none">
            	<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SitePay_BankDesc']->value));?>

            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getVar('PAYMENT_ONLINE_GLOBAL')) {?>         
            	<!-- Onepay ATM -->                           
                <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Status_Mode')) {?>
                <?php $_smarty_tpl->_assignInScope('ONEPAY_Name', ('ONEPAY_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                <div id="divATM" >
                  <label style="cursor:pointer;" class="mb10"><input type="radio" class="chkPayment ATMDefault" name="payment_method" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value == $_smarty_tpl->tpl_vars['PAYMENT_ONEPAY_ATM']->value) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_ONEPAY_ATM']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/one-pay.png" alt=""></label><br>
                </div>
                <?php }?>
                <!-- Onepay Visa -->
                <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Status_Mode')) {?>
                <?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                <div id="divATM" >
                  <label style="cursor:pointer;" class="mb10"><input type="radio" class="chkPayment ATMDefault" name="payment_method" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value == $_smarty_tpl->tpl_vars['PAYMENT_ONEPAY_VISA']->value) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_ONEPAY_VISA']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/visa-master.png" alt=""></label><br>
                </div>
                <?php }?>
				<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Status_Mode')) {?>
                <?php $_smarty_tpl->_assignInScope('ONEPAY_Visa_Name', ('ONEPAY_Visa_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                <div id="divATM" >
                  <label style="cursor:pointer;" class="mb10"><input type="radio" class="chkPayment ATMDefault" name="payment_method" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value == 6) {?>checked="checked"<?php }?> value="6"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/american.svg" style="height:32px" alt=""></label><br>
                </div>
                <?php }?>
                <!-- Paypal -->
                <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_Status_Mode')) {?>
                <?php $_smarty_tpl->_assignInScope('Paypal_Name', ('Paypal_Name_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                <div id="divATM" >
                  <label style="cursor:pointer;" class="mb10"><input type="radio" class="chkPayment ATMDefault" name="payment_method" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value == $_smarty_tpl->tpl_vars['PAYMENT_PAYPAL_GATEWAY']->value) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_PAYPAL_GATEWAY']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/paypal.png" alt=""></label><br>
                </div>
                <?php }?>
            
                <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('VNPay_Status_Mode')) {?>
                <div id="divATM" >
                  <label style="cursor:pointer;" class="mb10"><input type="radio" class="chkPayment ATMDefault" name="payment_method" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value == $_smarty_tpl->tpl_vars['PAYMENT_VNPAY_GATEWAY']->value) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PAYMENT_VNPAY_GATEWAY']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/vnpay.png" alt=""></label><br>
                </div>
                <?php }?>
            <?php }?>
			<div class="SitePay_OnePay" style="display:none">
				<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Surcharge') > 0) {?>
				<span class="surharge-ins">Surcharge of <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Surcharge');?>
% on ONEPAY ATM.</span>
				<?php }?>
			</div>
			<div class="SitePay_Visa" style="display:none">
				<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Surcharge') > 0) {?>
				<span class="surharge-ins">Surcharge of <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_Visa_Surcharge');?>
% on Visa & MasterCard is applicable.</span>
				<?php }?>
			</div>
			<div class="SitePay_PayPal" style="display:none">
				<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_Surcharge') > 0) {?>
				<span class="surharge-ins">Paypal surcharge of <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Paypal_Surcharge');?>
% is applicable.</span>
				<?php }?>
			</div>
			<div class="SitePay_AE" style="display:none">
				<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_American_Express_Surcharge') > 0) {?>
				<span class="surharge-ins">Surcharge of <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ONEPAY_American_Express_Surcharge');?>
% on American Express is applicable.</span>
				<?php }?>
			</div>
        </div>
        <label class="size16"><input type="checkbox" name="proviso" id="proviso" checked value="1"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('I agree');?>
 <a class="" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Terms &amp; Conditions');?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('term_condition');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Terms &amp; Conditions');?>
</a> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('and');?>
 <a class="" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('payment_method');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Policy');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Policy');?>
</a> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('of');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
. </label>
    </div>
</div>

<?php echo '<script'; ?>
>
	$(function(){
		$('input[name=payment_method]').change(function(){
			var _val = $(this).val();
			if(_val==2){
				$('.SitePay_BankDesc').show();
			}else{
				$('.SitePay_BankDesc').hide();
			}
			if(_val==1){
				$('.SitePay_CashDesc').show();
			}else{
				$('.SitePay_CashDesc').hide();
			}
			if(_val==3){
				$('.SitePay_OnePay').show();
			}else{
				$('.SitePay_OnePay').hide();
			}
			if(_val==4){
				$('.SitePay_Visa').show();
			}else{
				$('.SitePay_Visa').hide();
			}
			if(_val==5){
				$('.SitePay_PayPal').show();
			}else{
				$('.SitePay_PayPal').hide();
			}
			if(_val==6){
				$('.SitePay_AE').show();
			}else{
				$('.SitePay_AE').hide();
			}
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
