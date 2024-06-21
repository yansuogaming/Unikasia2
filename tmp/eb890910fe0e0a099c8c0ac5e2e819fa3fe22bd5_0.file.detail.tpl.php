<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:28:33
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/service/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c6d1d606e6_09122074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb890910fe0e0a099c8c0ac5e2e819fa3fe22bd5' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/service/detail.tpl',
      1 => 1704359351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c6d1d606e6_09122074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title_service', $_smarty_tpl->tpl_vars['clsService']->value->getTitle($_smarty_tpl->tpl_vars['service_id']->value));?>
<div class="page_container">
	<div class="breadcrumb-main bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('service');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel services');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel services');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'service','category','default')) {?>
					<?php if ($_smarty_tpl->tpl_vars['clsServiceCategory']->value->getTitle($_smarty_tpl->tpl_vars['servicecat_id']->value)) {?>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsServiceCategory']->value->getLink($_smarty_tpl->tpl_vars['servicecat_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsServiceCategory']->value->getTitle($_smarty_tpl->tpl_vars['servicecat_id']->value);?>
">
								<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['clsServiceCategory']->value->getTitle($_smarty_tpl->tpl_vars['servicecat_id']->value);?>
</span></a>
							<meta itemprop="position" content="3" />
						</li>
					<?php }?>
				 <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_service']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_service']->value;?>
</span></a>
					<meta itemprop="position" content="4" />
				</li>
				<?php } else { ?>
				 <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_service']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_service']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
				<?php }?>
			</ol>
        </div>
    </div>
    <div id="contentPage" class="servicePage pageServiceDefault bg_f1f1f1">
		<div class="container">
			<h1 class="title32 color_333 mb20"><?php echo $_smarty_tpl->tpl_vars['title_service']->value;?>
</h1>
			<div class="row">
				<div class="col-lg-9 serviceLeft mb768_30">
					<div class="serviceContent">
												<div class="content">
							<div class="field-items maxWidthImage tinymce_Content">
								<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsService']->value->getIntro($_smarty_tpl->tpl_vars['service_id']->value));?>

								<div class="clearfix"></div>
								<?php echo $_smarty_tpl->tpl_vars['clsService']->value->getContent($_smarty_tpl->tpl_vars['service_id']->value);?>

							</div>
						</div>
											</div>
					<div class="clearfix mb30"></div>
					<div class="h-form-book-event">
					<fieldset class="bg_fff">
						<legend><?php echo $_smarty_tpl->tpl_vars['title_service']->value;?>
</legend>
						<form action="<?php echo $_smarty_tpl->tpl_vars['clsService']->value->getLink($_smarty_tpl->tpl_vars['service_id']->value);?>
" method="post" id="EventsForm" class="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="hidden" name="service_id" value="<?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>
">
										<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full name');?>
<span style="color:red"> *</span></label>
										<input type="text" name="fullname" class="form-control required" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ex: John Smith');?>
" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
" />
									</div>
									<div class="form-group">
										<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
<span style="color:red"> *</span></label>
										<input type="text" name="address" class="form-control required" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ex');?>
: <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyAddress');?>
" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" />
									</div>
									<div class="form-group">
										<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
<span style="color:red"> *</span></label>
										<input type="text" name="email" class="form-control required" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ex');?>
: <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
									</div>
									<div class="form-group">
										<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone Number');?>
<span style="color:red"> *</span></label>
										<input type="text" name="phone" class="form-control required" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ex');?>
: <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Message');?>
<span style="color:red"> *</span></label>
										<textarea name="message" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter the message here');?>
..." rows="5" class="form-control required"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
									</div>
							 
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getVar('_ISOCMS_CAPTCHA') == 'IMG') {?>
									<div class="form-group">
										<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Secure');?>
 <font color="red">*</font></label>
										<div class="clearfix"></div>
										<input type="text" autocomplete="off" class="form-control inputSecure inline-block" name="security_code" maxlength="5" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Secure');?>
" style="width:150px; vertical-align:top" > <img class="Secure" src="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/captcha.php?sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/captcha.php?'+Math.random()+'&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
'" width="80px" height="34px" alt="Secure" />	  
									</div>
									<?php } else { ?>
									<div class="form-group">
										<div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getVar('reCAPTCHA_KEY');?>
"></div>
										<?php if ($_smarty_tpl->tpl_vars['errMsg']->value != '') {?>
											<div id="error_recaptcha" class="error text_left"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</div>
										<?php } else { ?>
											<div id="error_recaptcha" class="error text_left"></div>
										<?php }?>
									</div>
									<?php }?>
									<div class="form-group mt10">
									  	<button type="submit" class="btn-info h-read-more btn_main" id="SubmitEvents">
											<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Confirm &amp; Submit');?>

										</button>
										<input type="hidden" name="Hid_Events" value="Hid_Events" />
									</div>
								</div>
							</div>
						</form>
					</fieldset>
					</div>
				</div>
				<div class="col-lg-3 sidebar rightService">
                   <div class="sticky_fix">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('l_boxcolService');?>

                    </div>
				</div>
			</div>
        </div>
	</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.validate.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var msg_recapcha = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You must check Recaptcha');?>
";
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(function () {
	$("#EventsForm").validate();
	if(grecaptcha.getResponse() == "") {
		ev.preventDefault();
		$('#error_recaptcha').html(msg_recapcha).fadeIn().delay(3000).fadeOut();
		return false;
	} else {
		$('#EventsForm').submit();
	}
});
<?php echo '</script'; ?>
>
<?php }
}
