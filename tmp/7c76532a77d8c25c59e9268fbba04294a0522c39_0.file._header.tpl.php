<?php
/* Smarty version 3.1.38, created on 2024-04-09 01:13:08
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cart/_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661433b4c79205_56782172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c76532a77d8c25c59e9268fbba04294a0522c39' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cart/_header.tpl',
      1 => 1625122008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661433b4c79205_56782172 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="booking_header_box">
	<div class="container">
		<div class="header-main">
			<div class="logo_booking"><a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
"  title ="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
">  <img class="full-width height-auto" alt="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImageValue('HeaderLogo');?>
" /></a></div>
			<div class="count_step_booking hidden-xs">
				<?php if ($_smarty_tpl->tpl_vars['cartSessionService']->value || $_smarty_tpl->tpl_vars['cartSessionVoucher']->value || $_smarty_tpl->tpl_vars['cartSessionCruise']->value) {?>
				<div class="row">
					<div class="col-sm-4 p-0">
						<p class="text_num_step">1</p>
						<p class="text_step color_1c1c1c <?php if ($_smarty_tpl->tpl_vars['act']->value == 'default') {?>text-bold<?php }?>"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cart');?>
</p>
					</div>
					<div class="col-sm-4 p-0">
						<p class="text_num_step step-2 step-empty">2</p>
						<p class="text_step color_666 <?php if ($_smarty_tpl->tpl_vars['act']->value == 'book') {?>text-bold<?php }?>"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment details');?>
</p>
					</div>
					<div class="col-sm-4 p-0">
						<p class="text_num_step step-3 step-empty">3</p>
						<p class="text_step color_666"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Payment confirmed');?>
</p>
					</div>
				</div>
				<?php }?>
			</div>
			<div class="box_phone_booking">
				<a class="phone_booking" href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Call');?>
"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Question Call');?>
: <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
</a>
			</div>
		</div>
	</div>
</div>	<?php }
}
