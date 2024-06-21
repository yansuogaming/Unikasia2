<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:17:45
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_Tour_Outbound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138c09afd709_13522950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b021a8dd4ef08d56f4c1310b39ef44775ea3ef29' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_Tour_Outbound.tpl',
      1 => 1698307830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138c09afd709_13522950 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['listTourOutBound']->value) {?>
    <section class="section_box tour__outbound">
    <div class="tour__outbound--header header__content">
        <?php $_smarty_tpl->_assignInScope('TitleTourOutbound', ('TitleTourOutbound_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
        <?php $_smarty_tpl->_assignInScope('IntroTourOutbound', ('IntroTourOutbound_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
        <div class="container">
            <h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleTourOutbound']->value);?>
</h2>
            <div class="section_box-intro">
                <?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroTourOutbound']->value));?>

            </div>
        </div>
    </div>
    <div class="tour__outbound--content">
        <div class="container">
            <div class="box_slider_tour">
                <div class="owl_carousel_4_item owl-carousel">
                    <?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTourOutBound']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['listTourOutBound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
						<?php $_smarty_tpl->_assignInScope('oneTour', $_smarty_tpl->tpl_vars['listTourOutBound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
                        <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tour_mobile',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value,"oneTour"=>$_smarty_tpl->tpl_vars['oneTour']->value));?>

                    <?php
}
}
?>
                </div>
            </div>

        </div>
    </div>
</section>
<?php }
}
}
