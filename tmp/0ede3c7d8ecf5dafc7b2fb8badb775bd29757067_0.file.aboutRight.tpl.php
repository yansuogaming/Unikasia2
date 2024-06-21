<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:10:54
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/aboutRight.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c2aee61053_75781732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ede3c7d8ecf5dafc7b2fb8badb775bd29757067' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/aboutRight.tpl',
      1 => 1671861289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c2aee61053_75781732 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-panel-inner aboutRight">
    <div class="panel-pane pane-views-panes clearfix no-title">
        <div class="pane-content">
            <p class="h3"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Information');?>
</p>
            <ul class="d2-page">
            	<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstPage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['lstPage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
                <li  class="page-link <?php if ($_smarty_tpl->tpl_vars['page_id']->value == $_smarty_tpl->tpl_vars['lstPage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']) {?> current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['clsPage']->value->getLink($_smarty_tpl->tpl_vars['lstPage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id'],$_smarty_tpl->tpl_vars['lstPage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</div>

<?php }
}
