<?php
/* Smarty version 3.1.38, created on 2024-04-08 18:27:30
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/slider_DetailTour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613d4a2171e18_52651020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef0f74f3069e41d72810055eef89fbdcd67928b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/slider_DetailTour.tpl',
      1 => 1671713030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613d4a2171e18_52651020 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box__images relative">
    <div class="carousel--one__item owl-carousel" _type="detail__tour">
        <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstImage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <div class="img__tour">
                <img class="img100"  src="<?php echo $_smarty_tpl->tpl_vars['clsTourImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_image_id'],840,420,$_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsTourImage']->value->getTitle($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_image_id'],$_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"/>
            </div>
        <?php
}
}
?>
    </div>
    <div class="blur_bg hidden-xs" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['clsTourImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[0]['tour_image_id'],1280,420,$_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
') "></div>
</div>
<?php }
}
