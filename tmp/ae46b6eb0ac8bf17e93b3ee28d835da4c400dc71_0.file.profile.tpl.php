<?php
/* Smarty version 3.1.38, created on 2024-04-12 10:05:43
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6618a507733714_29325087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae46b6eb0ac8bf17e93b3ee28d835da4c400dc71' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/profile.tpl',
      1 => 1709172835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6618a507733714_29325087 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="container-fluid">
    <div class="page-title">
        <h2><i class="fa fa-wrench"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Settings');?>
 &raquo; <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('companyprofile');?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('System setting');?>
</p>
    </div>
    <div class="clearfix"></div>
    <form method="post" action="" enctype="multipart/form-data" class="validate-form">
		<div class="bootstrap">
			<div class="row">
				<div class="col-sm-7 mb10_767">
                	<div class="hd">
						<span class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('General information');?>
</span>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full Company Name');?>

						</div>
						<?php $_smarty_tpl->_assignInScope('CompanyName', ('CompanyName_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-<?php echo $_smarty_tpl->tpl_vars['CompanyName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyName']->value);?>
">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Brief Company Name');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<?php $_smarty_tpl->_assignInScope('CompanyNameBrief', ('CompanyNameBrief_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
							<input class="inputFix" type="text" name="iso-<?php echo $_smarty_tpl->tpl_vars['CompanyNameBrief']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyNameBrief']->value);?>
">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('GPKD/GP-LHQT');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix"type="text" name="iso-GPKD" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('GPKD');?>
">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Founder');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix"type="text" name="iso-Founder" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Founder');?>
">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Official Website');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix url"type="text" name="iso-CompanyWebsite" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyWebsite');?>
">
						</div>
					</div>
                    
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Primary Email');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyEmail" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyEmail');?>
">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Company Phone');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyPhone" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
">
						</div>
					</div>
                    <div class="row-span" style="display:none">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Mobile Phone');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyPhoneMobile" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhoneMobile');?>
">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Company Hotline');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyHotline" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Company Fax');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyFax" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyFax');?>
">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Skype');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanySkype" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanySkype');?>
">
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Opening hours');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyOpeningHours" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyOpeningHours');?>
">
						</div>
					</div>
                    <?php if (1 == 2) {?>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Youtube Video ID');?>

						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">https://www.youtube.com/watch?v=</span>
							<input type="text" name="iso-youtube_link" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyVideoYoutube');?>
">
						</div>
					</div>
                    <?php }?>
                    <div class="row-span">
						<div class="fieldlabel width100_767">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Currency');?>

						</div>
                         <div class="fieldarea inputGroup" style="width:40px !important">
						 	<select name="iso-Currency" style="width:200px;">
								<?php $_smarty_tpl->_assignInScope('currency', $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Currency'));?>
								<?php
$__section_j_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allUnitProperty']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_0_total = $__section_j_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_0_total !== 0) {
for ($__section_j_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_0_iteration <= $__section_j_0_total; $__section_j_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['allUnitProperty']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['property_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['currency']->value == $_smarty_tpl->tpl_vars['allUnitProperty']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['property_id']) {?>selected<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['allUnitProperty']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['property_code'];?>
	(<?php echo $_smarty_tpl->tpl_vars['allUnitProperty']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['aliases'];?>
)			
									</option>
								<?php
}
}
?>
							</select>	
						</div>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('API Google Maps');?>
<a href="//developers.google.com/maps/documentation/javascript/get-api-key" title="Instructions">(Instructions)</a>
						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
							<input class="inputFix" type="text" name="iso-API_GOOGLE_MAPS" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('API_GOOGLE_MAPS');?>
" placeholder="AIzaSyDKi-pt4CB_T4QvI4KD2KdwCIqgtv8QaIQ" />
						</div>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('IP check');?>

						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
							<input class="inputFix" type="text" name="iso-IP_ONLINE" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('IP_ONLINE');?>
" placeholder="116.99.35.172,116.99.35.171" />
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'setting','air_ticket','default')) {?>
					<div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('IBE productKey');?>

						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
							<input class="inputFix" type="text" name="iso-IBEproductKey" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('IBEproductKey');?>
" placeholder="y62e9p4h0qvnaoi" />
						</div>
					</div>
					<?php }?>
                	<div class="hd">
						<span class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('logo');?>
</span>
					</div>
                    <div class="row-span">
						<div class="fieldlabel width100_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Header Logo');?>
</div>
						<div class="fieldarea" style="width:50%">
                        	<span style="display:block">Width x Height: 200 x 50</span>
							<img class="isoman_img_pop" id="isoman_show_image_Fx" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('HeaderLogo');?>
" />
							<input type="hidden" id="isoman_hidden_image_Fx" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('HeaderLogo');?>
">
							<input type="hidden" style="width:70% !important;float:left;margin-left:4px;height:35px" id="isoman_url_image_Fx" name="iso-HeaderLogo" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('HeaderLogo');?>
"><a style="float:left; margin-left:4px; margin-top:4px;" href="#" class="ajOpenDialog" isoman_for_id="image_Fx" isoman_val="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('HeaderLogo');?>
" isoman_name="image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel width100_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Footer Logo');?>
</div>
						<div class="fieldarea" style="width:50%">
                        	<span style="display:block">Width x Height:200 x 50</span>
							<img class="isoman_img_pop" id="isoman_show_image_Fx2" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('FooterLogo');?>
" />
							<input type="hidden" id="isoman_hidden_image_Fx2" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('FooterLogo');?>
">
							<input type="hidden" style="width:70% !important;float:left;margin-left:4px; height:35px" id="isoman_url_image_Fx2" name="iso-FooterLogo" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('FooterLogo');?>
"><a style="float:left; margin-left:4px; margin-top:4px;" href="#" class="ajOpenDialog" isoman_for_id="image_Fx2" isoman_val="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('FooterLogo');?>
" isoman_name="image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'popup','default','default')) {?>
                    <div class="row-span">
						<div class="fieldlabel width100_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Popup Logo');?>
</div>
						<div class="fieldarea" style="width:50%">
                        	<span style="display:block">Width x Height:200 x 50</span>
							<img class="isoman_img_pop" id="isoman_show_image_fx3" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('PopupLogo');?>
" />
							<input type="hidden" id="isoman_hidden_image_fx3" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('PopupLogo');?>
">
							<input type="hidden" style="width:70% !important;float:left;margin-left:4px; height:35px" id="isoman_url_image_fx3" name="iso-PopupLogo" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('PopupLogo');?>
"><a style="float:left; margin-left:4px; margin-top:4px;" href="#" class="ajOpenDialog" isoman_for_id="image_fx3" isoman_val="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('PopupLogo');?>
" isoman_name="image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</div>
					</div>
					<?php }?>
					<div class="row-span">
						<div class="fieldlabel width100_767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image share social default');?>
</div>
						<div class="fieldarea" style="width:50%">
                        	<span style="display:block">Width x Height:500 x 261</span>
							<img class="isoman_img_pop" id="isoman_show_image_Fx3" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ImageShareSocial');?>
" />
							<input type="hidden" id="isoman_hidden_image_Fx3" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ImageShareSocial');?>
">
							<input type="hidden" style="width:70% !important;float:left;margin-left:4px; height:35px" id="isoman_url_image_Fx3" name="iso-ImageShareSocial" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ImageShareSocial');?>
"><a style="float:left; margin-left:4px; margin-top:4px;" href="#" class="ajOpenDialog" isoman_for_id="image_Fx3" isoman_val="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ImageShareSocial');?>
" isoman_name="image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
						</div>
					</div>
					<div class="hd">
						<span class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Business Address');?>
</span>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address 1 [map]');?>

						</div>
						<?php $_smarty_tpl->_assignInScope('CompanyAddress1', ('CompanyAddress1_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" id="search_location" name="iso-<?php echo $_smarty_tpl->tpl_vars['CompanyAddress1']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress1']->value);?>
">
						</div>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address 2');?>

						</div>
						<?php $_smarty_tpl->_assignInScope('CompanyAddress', ('CompanyAddress_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-<?php echo $_smarty_tpl->tpl_vars['CompanyAddress']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress']->value);?>
"> 
						</div>
					</div>
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Longitude');?>

						</div>
						
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyMapLo" id="map_lo" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyMapLo');?>
" placeholder="105.8596236,17" />
						</div>
					</div>
                    
                    <div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Latitude');?>

						</div>
						
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-CompanyMapLa" id="map_la" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyMapLa');?>
" placeholder="20.9950468" />
						</div>
					</div>
                    <div class="row-span" style="display:none">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Postcode/ZIP');?>

						</div>
						<?php $_smarty_tpl->_assignInScope('CompanyPostCode', ('CompanyPostCode_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-<?php echo $_smarty_tpl->tpl_vars['CompanyPostCode']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyPostCode']->value);?>
">
						</div>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Copyright');?>

						</div>
						<?php $_smarty_tpl->_assignInScope('Copyright', ('Copyright_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" name="iso-<?php echo $_smarty_tpl->tpl_vars['Copyright']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Copyright']->value);?>
">
						</div>
					</div>
                    <div class="hd">
						<span class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Social media');?>
</span>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Facebook_Link')) {?>
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon facebook ir" href="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
" target="_blank"></a><span class="hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Facebook Link');?>
</span>
						</div>
						<div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://www.facebook.com/</span>
							<input type="text" name="iso-SiteFacebookLink" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteFacebookLink');?>
">
						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Twitter_Link')) {?>
                     <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon twitter ir" href="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
" target="_blank"></a><span class="hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Twitter Link');?>
</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://www.twitter.com/</span>
							<input type="text" name="iso-SiteTwitterLink" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
">
						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Youtube_Link')) {?>
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon youtube ir" href="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
" target="_blank"></a><span class="hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Youtube Link');?>
</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://www.youtube.com/</span>
							<input type="text" name="iso-SiteYoutubeLink" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteYoutubeLink');?>
">
						</div>
					</div>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Instagram_Link')) {?>
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon instagram ir" href="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
" target="_blank"></a><span class="hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instagram');?>
</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">https://www.instagram.com/</span>
							<input type="text" name="iso-SiteInstagramLink" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteInstagramLink');?>
">
						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Printest_Link')) {?>
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon pinterest ir" href="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
" target="_blank"></a><span class="hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Printest Link');?>
</span>
						</div>
                         <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://pinterest.com/</span>
							<input type="text" name="iso-SitePrintestLink" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SitePrintestLink');?>
">
						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('LinkedIn_Link')) {?>
					<div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon ta-25 ir" href="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('LinkedIn');?>
" target="_blank"></a><span class="hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('LinkedIn');?>
</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">https://www.linkedin.com/</span>
							<input type="text" name="iso-SiteLinkedInLink" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteLinkedInLink');?>
">
						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('TripAdvisor_Link')) {?>
                    <div class="row-span">
						<div class="fieldlabel width25_767">
							<a class="social-icon ta-24 ir" href="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTwitterLink');?>
" target="_blank"></a><span class="hiden767"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TripAdvisor');?>
</span>
						</div>
                        <div class="fieldarea inputGroup" style="width:50%">
                        	<span class="input-group-addon">http://www.tripadvisor.com/</span>
							<input type="text" name="iso-SiteTripAdvisorLink" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTripAdvisorLink');?>
">
						</div>
					</div>
					<?php }?>
					<div class="row-span">
						<a class="fr" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=setting&act=social" target="_blank"><i class="fa fa-cog"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Social Media Setting');?>
</a>
					</div>
					<div class="hd">
						<span class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TMS connect');?>
</span>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TMS Domain');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" id="tms_domain" name="iso-tms_domain" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('tms_domain');?>
">
						</div>
					</div>
					<div class="row-span">
						<div class="fieldlabel">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TMS Token');?>

						</div>
						<div class="fieldarea" style="width:50%">
							<input class="inputFix" type="text" id="tms_token" name="iso-tms_token" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('tms_token');?>
">
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="hd">
						<span class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('location');?>
</span>
					</div>                
                    
					<div style="width:100%; height:500px;" id="map_canvas">
						<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['CompanyAddress1']->value);?>
&output=embed"></iframe>
					</div>
                    				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<fieldset class="submit-buttons fixed">
			<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

			<input value="CompanyProfile" name="submit" type="hidden">
		</fieldset>
	</form> 
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $map_la = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("CompanyMapLa");?>
';
	var $map_lo = '<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue("CompanyMapLo");?>
';
<?php echo '</script'; ?>
>

<style>
	.searchmap .text{ height:28px; line-height:28px;}
	.searchmap .btn{ width:14%;}
	.row-span .fieldlabel{ min-width:28% !important;}
	.row-span .fieldarea{ min-width:70% !important;}
	input, textarea, select{ min-height:26px;}
	.isoman_img_pop{ width:100px; height:35px; border:1px solid #ccc; padding:1px;}
</style>

<?php }
}
