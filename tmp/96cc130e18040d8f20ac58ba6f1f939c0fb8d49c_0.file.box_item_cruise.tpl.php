<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:37:18
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_item_cruise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139eae979466_91961025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96cc130e18040d8f20ac58ba6f1f939c0fb8d49c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_item_cruise.tpl',
      1 => 1709618380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139eae979466_91961025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('_link', $_smarty_tpl->tpl_vars['clsCruise']->value->getLink($_smarty_tpl->tpl_vars['cruise_item_id']->value,'',$_smarty_tpl->tpl_vars['arrCruise']->value));
$_smarty_tpl->_assignInScope('_title', $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['cruise_item_id']->value,$_smarty_tpl->tpl_vars['arrCruise']->value));
$_smarty_tpl->_assignInScope('start_from', $_smarty_tpl->tpl_vars['clsCruise']->value->getStartCityAround($_smarty_tpl->tpl_vars['cruise_item_id']->value,0,0));
$_smarty_tpl->_assignInScope('destination', $_smarty_tpl->tpl_vars['clsCruise']->value->getLCityAround2($_smarty_tpl->tpl_vars['cruise_item_id']->value,0,0));?>
<div class="item_cruise"> 
	<a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
">
		<img class="img100 <?php if ($_smarty_tpl->tpl_vars['act']->value == 'cat' || $_smarty_tpl->tpl_vars['act']->value == 'default') {?>lazy<?php } else { ?>owl-lazy<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',3,2);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getImage($_smarty_tpl->tpl_vars['cruise_item_id']->value,406,269,$_smarty_tpl->tpl_vars['arrCruise']->value);?>
" width="406" height="269"/>	
	</a>
	<div class="cruise_body">
		<h3 class="title_item_cruise"><a href="<?php echo $_smarty_tpl->tpl_vars['_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</a></h3>
		<p class="cruise_star"><?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getStarNew($_smarty_tpl->tpl_vars['cruise_item_id']->value,$_smarty_tpl->tpl_vars['arrCruise']->value);?>
</p>
		<?php if ($_smarty_tpl->tpl_vars['arrCruise']->value['departure_port']) {?><p class="item_info item_info_start"><label for="" class="lbl_item_info"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure Port');?>
:</label> <?php echo $_smarty_tpl->tpl_vars['arrCruise']->value['departure_port'];?>
</p><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['destination']->value) {?><p class="item_info item_info_end"><label for="" class="lbl_item_info"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
:</label> <?php echo $_smarty_tpl->tpl_vars['destination']->value;?>
</p><?php }?>
		<div class="box_info_bottom">
			<div class="price__box">
				<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getLTripPrice1($_smarty_tpl->tpl_vars['cruise_item_id']->value,$_smarty_tpl->tpl_vars['now_month']->value,'list');?>

			</div>
			<div class="btn_booknow">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Detail');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Detail');?>
<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			</div>
		</div>
		
	</div>
</div><?php }
}
