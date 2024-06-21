<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:20:06
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/l_boxcolNews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138c96b80df1_26182856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9334d61ee1827838a86a64ec584b77e376f8c34f' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/l_boxcolNews.tpl',
      1 => 1701944764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138c96b80df1_26182856 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar">
	<?php if ($_smarty_tpl->tpl_vars['lstCategory']->value && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'news','category','default')) {?>
    <div class="linkNewsCat mb40">
		<h2 class="titleBoxCat"><?php if ($_smarty_tpl->tpl_vars['act']->value == 'cat') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other');?>
 <?php }
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Categories');?>
</h2>
		<ul>
			<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCategory']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getTitle($_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['newscat_id'],$_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
			<li class="category-link <?php if ($_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['newscat_id'] == $_smarty_tpl->tpl_vars['newscat_id']->value) {?> active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['newscat_id'],$_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
			<?php
}
}
?>
		</ul>
    </div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['lstLatestNews']->value) {?>
	<div class="newsPopular mb20">
        <h2 class="titleBoxPopular"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Featured news');?>
</h2>
		<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstLatestNews']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<?php $_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsNews']->value->getLink($_smarty_tpl->tpl_vars['lstLatestNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],$_smarty_tpl->tpl_vars['lstLatestNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
		<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsNews']->value->getTitle($_smarty_tpl->tpl_vars['lstLatestNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],$_smarty_tpl->tpl_vars['lstLatestNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
		<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['clsNews']->value->getImage($_smarty_tpl->tpl_vars['lstLatestNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['news_id'],76,76,$_smarty_tpl->tpl_vars['lstLatestNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
		<div class="list_post">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img class="full-width img100 lazy" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png" data-src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></a>
			<div class="content_recent">
				<h3><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h3>
			</div>
		</div>
		<?php
}
}
?>
    </div>
	<?php }?>
</div><?php }
}
