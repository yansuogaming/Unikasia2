<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:17:45
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_topTourprofessional.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138c09674587_90863500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954c3971b11e20bdc22edd71693c90e3d3c249f2' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_topTourprofessional.tpl',
      1 => 1704362013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138c09674587_90863500 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['listTopTour']->value) {?>
<section class="section_box attractive_tour box_professional_attractive_tour">
	<div class="container-fluid">
		<div class="attractive_tour--header header__content">
			<?php $_smarty_tpl->_assignInScope('TitleAttractiveTour', ('TitleAttractiveTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<?php $_smarty_tpl->_assignInScope('IntroAttractiveTour', ('IntroAttractiveTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<h2 class="section_box-title"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleAttractiveTour']->value));?>
</h2>
			<div class="section_box-intro">
				<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroAttractiveTour']->value));?>

			</div>
		</div>
		<div class="attractive_tour--content">
			<div class="row list_tours">
				<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTopTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['listTopTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
                    <?php $_smarty_tpl->_assignInScope('oneTopTour', $_smarty_tpl->tpl_vars['clsTour']->value->getOne($_smarty_tpl->tpl_vars['tour_id']->value,'title,slug,duration_type,duration_custom,number_day,number_night,list_departure_point_id,image'));?>
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tourprofessional',array("oneTopTour"=>$_smarty_tpl->tpl_vars['oneTopTour']->value,"tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value));?>

				<?php
}
}
?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['totalRecord']->value > $_smarty_tpl->tpl_vars['recordPerPage']->value) {?>
				<div class="view_more">
					<a href="javascript:void(0);" page="1" rel="nofollow" _type="TopTrip" class="show-loader btn_view_more" id="show-more-tour-professional" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
" role=link aria-disabled=true ><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
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
