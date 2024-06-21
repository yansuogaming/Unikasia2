<?php
/* Smarty version 3.1.38, created on 2024-04-11 16:17:14
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/reviews/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6617aa9ae4f293_62792296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f54390196739eb939b7afd1436ded29985257b9' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/reviews/edit.tpl',
      1 => 1710389595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617aa9ae4f293_62792296 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
:</strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
 <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['type'];?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
"> <?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
 #<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');
}?></a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
</div>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2><?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit Reviews');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New Reviews');
}?></h2>
		</div>
    </div>
	<div class="container-fluid">
		<form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
			<div id="clienttabs">
				<ul>
					<li class="tabchild"><a href="#"><i class="iso-bassic"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('generalinformation');?>
</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div id="tab_content">
				<div class="tabbox" style="display:block">
					<div class="wrap">
						<div class="fl span75 full_width_767">
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
									<input class="text full required" name="iso-fullname" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" disabled="disabled">
								</div>
							</div>
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('email');?>
</div>
								<div class="fieldarea">
									<input class="text full email" name="iso-email" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" disabled="disabled">
								</div>
							</div>
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
									<input class="text full email" name="iso-type" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('type',$_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" disabled="disabled">
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('profile_id',$_smarty_tpl->tpl_vars['pvalTable']->value) > 0) {?>
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('international');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
									<input class="text full country" name="iso-country" value="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getCountry($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('profile_id',$_smarty_tpl->tpl_vars['pvalTable']->value));?>
" maxlength="255" type="text" disabled="disabled">
								</div>
							</div>
							<?php } else { ?>
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('international');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
									<input class="text full country" name="iso-country" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getCountry($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" disabled="disabled">
								</div>
							</div>
							<?php }?>

							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name service');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
									<input class="text full"  value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getNameService($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" disabled="disabled">
								</div>
							</div>
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Link service');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
									<input class="text full"  value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLinkService($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" disabled="disabled">
								</div>
							</div>
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select rate');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
									<select name="iso-rates" class="glSlBox required" style="width:120px">
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectNumber2(6,$_smarty_tpl->tpl_vars['oneItem']->value['rates'],'star,stars');?>

									</select>
								</div>
							</div>
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Review date');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
									<input value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDate($_smarty_tpl->tpl_vars['oneItem']->value['review_date'],'-');?>
" class="ext full required showdate" name="review_date" type="text" autocomplete="off" style="width:120px"/>
									<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/date-icon.gif" style="position:relative;top:6px;z-index:1;left:-25px;"/>
								</div>
							</div>
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
								<div class="checkbox-switch">
									<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 1) {?>
									<input type="checkbox" checked value="1" name="is_online" class="input-checkbox" id="toolbar-active">
									<?php } else { ?>
									<input type="checkbox" value="1" name="is_online" class="input-checkbox" id="toolbar-active">
									<?php }?>
									<div class="checkbox-animate">
										<span class="checkbox-off">PRIVATE</span>
										<span class="checkbox-on">PUBLIC</span>
									</div>
								</div>	
								<span class="notice" id="prv_status" <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 1) {?>style="display:none;"<?php }?>>PRIVATE: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This article can only be seen via the link in the admin page');?>
.</span>
								<span class="notice" id="pub_status" <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 0) {?>style="display:none;"<?php }?>>PUBLIC: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This article is available online show normal status');?>
.</span>
							</div>
							</div>
							<div class="row-span">
								<div class="fieldlabel "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('content');?>
 <span class="requiredMask">*</span></div>
								<div class="fieldarea">
                                    <textarea rows="25" cols="25" class="content" name="content" style="width:100%;height:125px"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->parseBr2nl($_smarty_tpl->tpl_vars['oneItem']->value['content']);?>
</textarea>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"><br /></div>
			<fieldset class="submit-buttons">
				<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;
echo $_smarty_tpl->tpl_vars['saveList']->value;?>

				<input value="Update" name="submit" type="hidden">
			</fieldset>
		</form>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $reviews_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery-ui-timepicker-addon.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery-ui.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery-ui.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">

<?php echo '<script'; ?>
>
$(".showdate").datepicker({dateFormat: "dd-mm-yy",changeMonth: true,changeYear: true});
<?php echo '</script'; ?>
>
<style>
#ui-datepicker-div{z-index:999 !important;}
</style>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/reviews/jquery.reviews.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
