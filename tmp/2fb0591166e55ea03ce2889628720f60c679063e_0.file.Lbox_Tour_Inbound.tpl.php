<?php
/* Smarty version 3.1.38, created on 2024-05-04 19:01:32
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/Lbox_Tour_Inbound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6636239cb23d26_08060895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fb0591166e55ea03ce2889628720f60c679063e' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/Lbox_Tour_Inbound.tpl',
      1 => 1714822355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6636239cb23d26_08060895 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['listTourInBound']->value) {?>
<section class="section_box tour__inbound">
	<div class="tour__inbound--header header__content">
		<?php $_smarty_tpl->_assignInScope('TitleTourInbound', ('TitleTourInbound_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
		<?php $_smarty_tpl->_assignInScope('IntroTourInbound', ('IntroTourInbound_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
		<div class="container">
			<h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleTourInbound']->value);?>
</h2>
			<div class="section_box-intro">
				<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroTourInbound']->value));?>

			</div>
		</div>
	</div>
	<div class="tour__inbound--content">
		<div class="container">
			<div class="box_slider_tour">
				<div class="owl_carousel_4_item owl-carousel">
					<?php
$__section_i_18_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTourInBound']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_18_total = $__section_i_18_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_18_total !== 0) {
for ($__section_i_18_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_18_iteration <= $__section_i_18_total; $__section_i_18_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['listTourInBound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
						<?php $_smarty_tpl->_assignInScope('oneTour', $_smarty_tpl->tpl_vars['listTourInBound']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
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
