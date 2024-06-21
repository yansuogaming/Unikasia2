<?php
/* Smarty version 3.1.38, created on 2024-04-12 09:14:20
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/home/load_quick_access.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661898fc06ba82_65771238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cde8839f0ad5a0d53ac5087bf91272f240331a7' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/home/load_quick_access.tpl',
      1 => 1658391797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661898fc06ba82_65771238 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['holderG']->value == '_modal') {?>
<div class="modal-dialog home" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit quick access');?>
</h5>
		<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Completed');?>
</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</button>
	  </div>
	  <div class="modal-body">
		  <div class="quick_access_html">
			<div class="loader text-center">
				...
			</div>
		  </div>
	  </div>
	</div>
  </div>
<?php } else { ?>
<div class="quick_access_show quick_access_show_top">
	<p class="title text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Show');?>
</p>
	<div class="quick_access_list">
		<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listQuickAccessShow']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<?php $_smarty_tpl->_assignInScope('admin_id', $_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adminbutton_id']);?>
		<?php if ($_smarty_tpl->tpl_vars['clsAdminButton']->value->checkPackage($_smarty_tpl->tpl_vars['admin_id']->value,$_smarty_tpl->tpl_vars['package_id']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['core']->value->checkAccess($_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page'])) {?>
		<div class="quick_access_item">
			<span class="remove_item_quick_access" data-tp="remove" data-adminbutton_id="<?php echo $_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adminbutton_id'];?>
">x</span>
			<span class="icon"><img class="imgIcon" src="<?php echo $_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" width="28" height="28" /></span>
			<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title_page']);?>
</span>
		</div>
		<?php }?>
		<?php }?>
		<?php
}
}
?>
	</div>
</div>
<div class="quick_access_show">
	<p class="title text-bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add to quick access');?>
</p>
	<div class="quick_access_list">
		<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listQuickAccess']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<?php $_smarty_tpl->_assignInScope('admin__id', $_smarty_tpl->tpl_vars['listQuickAccess']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adminbutton_id']);?>
		<?php if ($_smarty_tpl->tpl_vars['clsAdminButton']->value->checkPackage($_smarty_tpl->tpl_vars['admin__id']->value,$_smarty_tpl->tpl_vars['package_id']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['core']->value->checkAccess($_smarty_tpl->tpl_vars['listQuickAccess']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page'])) {?>
		<div class="quick_access_item add_item_quick_access" data-tp="add" data-adminbutton_id="<?php echo $_smarty_tpl->tpl_vars['listQuickAccess']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adminbutton_id'];?>
">
			<span class="icon"><img class="imgIcon"  src="<?php echo $_smarty_tpl->tpl_vars['listQuickAccess']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" width="28" height="28" /></span>
			<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['listQuickAccess']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title_page']);?>
</span>
		</div>
		<?php }?>
		<?php }?>
		<?php
}
}
?>
	</div>
</div>
<?php }
}
}
