<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:38
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_toptourHomePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a22e76b25_78212553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c06bd96e6e28d994701fc7ac37e70ff50e0b44' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_toptourHomePage.tpl',
      1 => 1701921378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a22e76b25_78212553 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['listTopTour']->value) {?>
<section class="section_box attractive_tour">
	<div class="attractive_tour--header header__content">
		<?php $_smarty_tpl->_assignInScope('TitleAttractiveTour', ('TitleAttractiveTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
		<?php $_smarty_tpl->_assignInScope('IntroAttractiveTour', ('IntroAttractiveTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
		<div class="container">
			<h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleAttractiveTour']->value);?>
</h2>
			<div class="section_box-intro">
				<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroAttractiveTour']->value));?>

			</div>
		</div>
	</div>
	<div class="attractive_tour--content">
		<div class="container">
			<div class="row list_tours">
				<?php
$__section_i_24_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTopTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_24_total = $__section_i_24_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_24_total !== 0) {
for ($__section_i_24_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_24_iteration <= $__section_i_24_total; $__section_i_24_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['listTopTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
					<?php $_smarty_tpl->_assignInScope('one_tour', $_smarty_tpl->tpl_vars['clsTour']->value->getOne($_smarty_tpl->tpl_vars['listTopTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id'],'title,slug,image'));?>
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tour_mobile_en',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value));?>

				<?php
}
}
?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['totalRecord']->value > $_smarty_tpl->tpl_vars['recordPerPage']->value) {?>
				<div class="view_more mb30">
					<a href="javascript:void(0);" page="1" rel="nofollow" _type="TopTrip" role="link" class="show-loader btn_view_more btn_main" id="show-more" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
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
	<?php echo '</script'; ?>
>
</section>
<?php }
}
}
