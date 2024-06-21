<?php
/* Smarty version 3.1.38, created on 2024-04-10 16:52:34
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_member_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66166162a62b99_12702112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb84580f38b2191a6ae83536ed9e71bb6076643d' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_member_link.tpl',
      1 => 1642165437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66166162a62b99_12702112 (Smarty_Internal_Template $_smarty_tpl) {
?><aside class="col-lg-3 col-xs-12 tabControl">
	<ul  class="clienttabs">
		<li>
			<a <?php if ($_smarty_tpl->tpl_vars['act']->value == 'my_profile') {?> class="current"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('my_profile');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Profile');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Profile');?>
</a>
		</li>
		<li>
			<a <?php if ($_smarty_tpl->tpl_vars['act']->value == 'my_booking') {?> class="current"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('my_booking');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Booking');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Booking');?>
</a>
		</li>
		 <li>
			<a <?php if ($_smarty_tpl->tpl_vars['act']->value == 'my_review') {?> class="current"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('my_review');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Tour Reviews');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Tour Reviews');?>
</a>
		 </li>
		 <li>
			<a <?php if ($_smarty_tpl->tpl_vars['act']->value == 'my_offer') {?> class="current"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('my_offer');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Offers &amp; Discounts');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('My Offers &amp; Discounts');?>
</a>
		 </li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getLink('logout');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Logout');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Logout');?>
</a></li>
	</ul>
</aside><?php }
}
