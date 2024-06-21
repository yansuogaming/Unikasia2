<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:10:54
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lwhybox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c2aeef2a90_31242533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bd9647f6e2d530bee179a268c8cb783c78833fd' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lwhybox.tpl',
      1 => 1671861450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c2aeef2a90_31242533 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstWhy']->value) {?>
<div class="boxRightCol bg_fff pd1510 mb20">
	<div class="boxWhyCol">
		<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Why book with us');?>
?</h3>
		<ul class="listWhy">
			<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstWhy']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<li><?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getTitle($_smarty_tpl->tpl_vars['lstWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['why_id'],$_smarty_tpl->tpl_vars['lstWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</li>
			<?php
}
}
?>
		</ul>
		<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('why');?>
" target="_blank" class="more color_d19d37" style="float:right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
 >></a>
	</div>
</div>
<?php }?>
  
 <?php echo '<script'; ?>
>
 	$(".widget-tit").click(function(){
		$(this).closest(".widget-book-us").find(".h-w-body").slideToggle();	
	});
 <?php echo '</script'; ?>
>
  <?php }
}
