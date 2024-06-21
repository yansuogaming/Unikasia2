<?php
/* Smarty version 3.1.38, created on 2024-04-11 08:25:18
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/mailconfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66173bfe503fe3_15406917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e0fa79e08e6b7baf75629721535584723b28c54' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/mailconfig.tpl',
      1 => 1698030388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66173bfe503fe3_15406917 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
	#clienttabs > ul > li > a{ padding:0px 10px !important;}
</style>

<div class="breadcrumb">
    <strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
 : </strong>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('mailconfig');?>
</a>
    <!-- Back-->
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2><i class="fa fa-wrench"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('mailconfig');?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('systemmanagementsettings');?>
</p>
    </div>
    <div class="clearfix"></div>
    <form method="post" action="" enctype="multipart/form-data">
        <table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
            <tr>
                <td class="fieldlabel span25"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Mail type');?>
</td>
                <td class="fieldarea">
                    <select class="select slb" name="iso-SiteMailType">
						<option <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteMailType') == 'sendgrid') {?>selected="selected"<?php }?> value="sendgrid"> -- SendGrid -- </option>
                        <option <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteMailType') == 'smtp') {?>selected="selected"<?php }?> value="smtp"> -- SMTP -- </option>
						<option <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteMailType') == 'mail') {?>selected="selected"<?php }?> value="mail"> -- PHP Mail() -- </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Mail Encoding');?>
</td>
                <td class="fieldarea">
                    <select class="select slb" name="iso-SiteMailEncoding">
                        <option <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteMailEncoding') == '8bit') {?>selected="selected"<?php }?> value="8bit"> -- 8bit -- </option>
                        <option <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteMailEncoding') == '7bit') {?>selected="selected"<?php }?> value="7bit"> -- 7bit -- </option>
                        <option <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteMailEncoding') == 'binary') {?>selected="selected"<?php }?> value="binary"> -- binary -- </option>
                        <option <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteMailEncoding') == 'base64') {?>selected="selected"<?php }?> value="base64"> -- base64 -- </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SMTP Port');?>
</td>
                <td class="fieldarea">
                    <input type="number" class="text full span10" name="iso-SiteSmtpPort" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteSmtpPort');?>
" /> 
                    <span class="notice-short"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The port your mail server uses');?>
</span>
                </td>
            </tr>
            <tr>
                <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SMTP Host');?>
</td>
                <td class="fieldarea">
                    <input type="text" class="text full span30" name="iso-SiteSmtpHost" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteSmtpHost');?>
" /> 
                    <span class="notice-full"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The host your mail server uses');?>
 <strong class="color_r">smtp.gmail.com</strong>, <strong class="color_r">mail.yahoo.com</strong></span>
                </td>
            </tr>
            <tr>
                <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SMTP Username');?>
</td>
                <td class="fieldarea">
                    <input type="text" class="text full span20" name="iso-SiteSmtpUsername" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteSmtpUsername');?>
" /> 
                </td>
            </tr>
            <tr>
                <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SMTP Password');?>
</td>
                <td class="fieldarea">
                    <input type="password"  class="text full span20" name="iso-SiteSmtpPassword" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteSmtpPassword');?>
" /> 
                </td>
            </tr>
            <tr>
                <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('SMTP SSL Type');?>
</td>
                <td class="fieldarea">
                    <label><input name="SiteSmtpSSL" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteSmtpSSL') == 'none' || $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteSmtpSSL') == '') {?>checked="checked"<?php }?> type="radio" value="none" /> None</label>
                    <label><input <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteSmtpSSL') == 'ssl') {?>checked="checked"<?php }?> name="SiteSmtpSSL" type="radio" value="ssl" /> SSL</label>
                    <label><input <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteSmtpSSL') == 'tls') {?>checked="checked"<?php }?> name="SiteSmtpSSL" type="radio" value="tls" /> TLS</label>
                </td>
            </tr>
            <tr>
                <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('System Emails From Name');?>
</td>
                <td class="fieldarea">
                    <input style="width:50%;" type="text" name="iso-SiteReplyName" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteReplyName');?>
">
                </td>
            </tr>
            <tr>
                <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('System Emails From Email');?>
</td>
                <td class="fieldarea">
                    <input style="width:50%;" type="text" name="iso-SiteReplyEmail" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteReplyEmail');?>
">
                </td>
            </tr>
            <tr>
                <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Send Test Email');?>
</td>
                <td class="fieldarea">
                    <a href="javascript:void()" class="iso-button-primary SiteSendTest"><i class="fa fa-paper-plane"></i> Send Test Email</a>
                    <p id="testmail" style="display:inline-block">
                        <span class="notice-short"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please check email');?>
 <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
</span>
                    </p>
                </td>
            </tr>
        </table>
        <fieldset class="submit-buttons">
            <?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

            <input value="UpdateConfiguration" name="submit" type="hidden">
        </fieldset>
    </form>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/setting/jquery.setting.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		$('select[name^=iso]').each(function(){
			var $_this = $(this);
			if($_this.val()==1){
				$_this.css({'border-color':'#0C0', 'background':'#e9ffd9'});
			}
		});
	});
  
<?php echo '</script'; ?>
>
<?php }
}
