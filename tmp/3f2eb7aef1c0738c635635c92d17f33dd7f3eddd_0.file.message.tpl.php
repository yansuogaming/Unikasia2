<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:12:13
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66172add7a3677_90678306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f2eb7aef1c0738c635635c92d17f33dd7f3eddd' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/message.tpl',
      1 => 1700097607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66172add7a3677_90678306 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
:</strong>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('System Settings');?>
</a>
    <!-- Back-->
    <a href="javascript:window.history.back();" class="back fr">Quay lại</a>
</div>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2><i class="fa fa-wrench"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Settings');?>
 &raquo; <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('settingmessage');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('settingmessage');?>
 trong hệ thống isoCMS">i</div>
			</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('System setting');?>
</p>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['_DEV']->value == '1') {?>
		<div class="button_right">
			<a class="btn btn-main btn-addnew btnCreateNewMessage" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Meta Tags');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Meta Tags');?>
</a>
		</div>
  	 	<?php }?>
    </div>
<div class="container-fluid">
    <div class="mt20"></div>
    <form method="post" action="" enctype="multipart/form-data" class="validate-form">
		<div class="accordion smk_accordion acc_with_icon"> 
			<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listMessage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_0_iteration === 1);
?>
			<div class="accordion_in <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>acc_active<?php }?>">
				<div class="acc_head"><div class="acc_icon_expand"></div><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['listMessage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['setting']);?>
</div>
				<div class="acc_content">
					<textarea id="textarea_<?php echo $_smarty_tpl->tpl_vars['listMessage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['setting'];?>
_editor<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor" name="iso-<?php echo $_smarty_tpl->tpl_vars['listMessage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['setting'];?>
" style="width:100%"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['listMessage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['setting']));?>
</textarea>
				</div>
			</div>
			<?php
}
}
?>
            <?php if (1 == 2) {?>
            <div class="accordion_in">
				<div class="acc_head"><div class="acc_icon_expand"></div><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('sitetailorintro');?>
</div>
				<div class="acc_content">
					<?php $_smarty_tpl->_assignInScope('site_tailor_intro', ('site_tailor_intro_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
             <textarea id="textarea_<?php echo $_smarty_tpl->tpl_vars['site_tailor_intro']->value;
echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_tailor_intro']->value;?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_tailor_intro']->value);?>
</textarea>
				</div>
			</div>
            <div class="accordion_in">
				<div class="acc_head"><div class="acc_icon_expand"></div><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('sitetailoridea');?>
</div>
				<div class="acc_content">
					<?php $_smarty_tpl->_assignInScope('site_tailor_idea', ('site_tailor_idea_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                    <textarea id="textarea_<?php echo $_smarty_tpl->tpl_vars['site_tailor_idea']->value;
echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_tailor_idea']->value;?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_tailor_idea']->value);?>
</textarea>
				</div>
			</div>
            <div class="accordion_in">
				<div class="acc_head"><div class="acc_icon_expand"></div><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('sitetailorrecommended');?>
</div>
				<div class="acc_content">
                	<?php $_smarty_tpl->_assignInScope('site_tailor_recommended', ('site_tailor_recommended_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<textarea id="textarea_<?php echo $_smarty_tpl->tpl_vars['site_tailor_recommended']->value;
echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_tailor_recommended']->value;?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_tailor_recommended']->value);?>
</textarea>
				</div>
			</div>
            <div class="accordion_in">
				<div class="acc_head"><div class="acc_icon_expand"></div><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('siteTravelAgent');?>
</div>
				<div class="acc_content">
                	<?php $_smarty_tpl->_assignInScope('site_travel_recommended', ('site_travel_recommended_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<textarea id="textarea_<?php echo $_smarty_tpl->tpl_vars['site_travel_recommended']->value;
echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor" name="iso-<?php echo $_smarty_tpl->tpl_vars['site_travel_recommended']->value;?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_travel_recommended']->value);?>
</textarea>
				</div>
			</div>
            <?php }?>
		</div>
		<fieldset class="submit-buttons">
			<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

			<input value="UpdateConfiguration" name="submit" type="hidden">
		</fieldset>
	</form> 
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/setting/jquery.setting.js"><?php echo '</script'; ?>
><?php }
}
