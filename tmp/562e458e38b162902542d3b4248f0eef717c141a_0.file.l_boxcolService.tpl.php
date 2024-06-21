<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:09:52
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/l_boxcolService.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c270b51bb2_53168755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '562e458e38b162902542d3b4248f0eef717c141a' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/l_boxcolService.tpl',
      1 => 1607684672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c270b51bb2_53168755 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar">
	<?php if ($_smarty_tpl->tpl_vars['act']->value == 'detail') {?>
	<?php if ($_smarty_tpl->tpl_vars['lstRelated']->value) {?>
    <div class="servicePopular mb20">
        <p class="size20 text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Related Post');?>
</p>
		<ul class="listBlog">
			<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRelated']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsService']->value->getLink($_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['service_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsService']->value->getTitle($_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['service_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsService']->value->getTitle($_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['service_id']);?>
</a></li>
			<?php
}
}
?>
		</ul>
    </div>
	<?php }?>
	<?php } else { ?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['lstServiceCategory']->value && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'service','category','default')) {?>
    <div class="linkDestination mb20">
		<p class="size20 text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Categories');?>
</p>
		<ul>
			<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstServiceCategory']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsServiceCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstServiceCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['servicecat_id']));?>
			<li class="category-link <?php if ($_smarty_tpl->tpl_vars['lstServiceCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['servicecat_id'] == $_smarty_tpl->tpl_vars['servicecat_id']->value) {?> active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['clsServiceCategory']->value->getLink($_smarty_tpl->tpl_vars['lstServiceCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['servicecat_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsServiceCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstServiceCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['servicecat_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
			<?php
}
}
?>
		</ul>
    </div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['act']->value == 'detail') {?>
	<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['lstLatestService']->value) {?>
	<div class="servicePopular mb20">
        <p class="size20 text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Popular Services');?>
</p>
		<ul class="listBlog">
			<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstLatestService']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsService']->value->getLink($_smarty_tpl->tpl_vars['lstLatestService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['service_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsService']->value->getTitle($_smarty_tpl->tpl_vars['lstLatestService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['service_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsService']->value->getTitle($_smarty_tpl->tpl_vars['lstLatestService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['service_id']);?>
</a></li>
			<?php
}
}
?>
		</ul>
    </div>
	<?php }?>
	<?php }?>
</div><?php }
}
