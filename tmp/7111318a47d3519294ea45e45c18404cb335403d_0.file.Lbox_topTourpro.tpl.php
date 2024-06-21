<?php
/* Smarty version 3.1.38, created on 2024-05-06 10:30:01
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/Lbox_topTourpro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66384eb9233839_60171191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7111318a47d3519294ea45e45c18404cb335403d' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/Lbox_topTourpro.tpl',
      1 => 1714822355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66384eb9233839_60171191 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['listTopTour']->value) {?>
<section class="section_box attractive_tour">
	<div class="container">
		<div class="attractive_tour--header header__content">
			<?php $_smarty_tpl->_assignInScope('TitleAttractiveTour', ('TitleAttractiveTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<?php $_smarty_tpl->_assignInScope('IntroAttractiveTour', ('IntroAttractiveTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<h2 class="section_box-title text-left"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleAttractiveTour']->value);?>
</h2>
			<div class="section_box-intro text-left">
				<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroAttractiveTour']->value));?>

			</div>
		</div>
		<div class="attractive_tour--content">
			<div class="row list_tours">
				<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTopTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['listTopTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tourpro',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value));?>

				<?php
}
}
?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['totalRecord']->value > $_smarty_tpl->tpl_vars['recordPerPage']->value) {?>
				<div class="view_more">
					<a href="javascript:void(0);" page="1" rel="nofollow" _type="TopTrip" class="show-loader btn_view_more" id="show-more-top-tour" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
</a>
				</div>
			<?php }?>
		</div>
	</div>
	<?php echo '<script'; ?>
>
		var totalRecord='<?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
';
		var $pageLastest = 1;
		var $_LANG_ID = '<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
';
		var width = $(window).width();
	<?php echo '</script'; ?>
>
</section>
<?php }
}
}
