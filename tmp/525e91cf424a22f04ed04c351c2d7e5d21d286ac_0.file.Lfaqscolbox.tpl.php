<?php
/* Smarty version 3.1.38, created on 2024-05-06 15:00:00
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/Lfaqscolbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66388e00b530a7_17245752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '525e91cf424a22f04ed04c351c2d7e5d21d286ac' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/Lfaqscolbox.tpl',
      1 => 1714822355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66388e00b530a7_17245752 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstFaqs']->value) {?>
<div class="box__Faqs">
    <h2 class="box__Faqs--title title_section text_bold"><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('faqs');?>
" class="color_1c1c1c" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('FAQs');?>
"><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('FAQs');?>
</span></a></h2>
	<ul class="list__Faqs list__item list_style_none">
		<?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstFaqs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<?php $_smarty_tpl->_assignInScope('titleFaq', $_smarty_tpl->tpl_vars['clsFAQ']->value->getTitle($_smarty_tpl->tpl_vars['lstFaqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['lstFaqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
		<li class="item"><a class="color_1c1c1c" title="<?php echo $_smarty_tpl->tpl_vars['titleFaq']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('faqs');?>
#<?php echo $_smarty_tpl->tpl_vars['clsFAQ']->value->getSlug($_smarty_tpl->tpl_vars['lstFaqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faq_id'],$_smarty_tpl->tpl_vars['lstFaqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"><?php echo $_smarty_tpl->tpl_vars['titleFaq']->value;?>
</a></li>
		<?php
}
}
?>
	</ul>
    <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('faqs');?>
" class="more_faqs d-block text-center color_5f93e7" target="_blank"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
</a>
</div>
<?php }
}
}
