<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:12:42
  from '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/partner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614dc5a88ab33_20555135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56c4945d20f27b0cfb3b242c47f4c371065f451' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/unika_templates/default/blocks/partner.tpl',
      1 => 1711076065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc5a88ab33_20555135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('TitlePartner', ('TitlePartner_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('TitlePartner', ('TitlePartner_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>

<div class="partner_box">
    <h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitlePartner']->value);?>
</h3>
        <div class="list_partner_box">
        <?php
$__section_i_23_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstPartner']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_23_total = $__section_i_23_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_23_total !== 0) {
for ($__section_i_23_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_23_iteration <= $__section_i_23_total; $__section_i_23_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <div class="partner_item">
            <a href="<?php echo $_smarty_tpl->tpl_vars['clsPartner']->value->getLink($_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id'],$_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" target="_blank">
                <img src="<?php echo $_smarty_tpl->tpl_vars['clsPartner']->value->getUrlImage($_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id'],$_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsPartner']->value->getTitle($_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id'],$_smarty_tpl->tpl_vars['lstPartner']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="139" height="66">
            </a>
        </div>
        <?php
}
}
?>
    </div>
</div><?php }
}
