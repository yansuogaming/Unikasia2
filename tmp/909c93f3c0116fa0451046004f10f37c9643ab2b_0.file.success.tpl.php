<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:56:35
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/about/success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e6a33bbd09_34259686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '909c93f3c0116fa0451046004f10f37c9643ab2b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/about/success.tpl',
      1 => 1710820676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e6a33bbd09_34259686 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="booking_header_box">
	<div class="container">
		<div class="header-main">
			<div class="logo_booking"><a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
"  title ="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
">  <img class="full-width height-auto" alt="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImageValue('HeaderLogo');?>
" /></a></div>
			<div class="box_phone_booking">
				<a class="phone_booking" href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Call');?>
"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Question Call');?>
: <?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyPhone');?>
</a>
			</div>
		</div>
	</div>
</div>	
<div class=" mb100">
<?php if ($_smarty_tpl->tpl_vars['show']->value != 'bookTour') {?>
	<nav class="breadcrumb-main breadcrumb-more bg_fff">
		<div class="container">
			<ol class="breadcrumb hidden-xs bg_fff mt0" itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemtype="http://schema.org/Thing" itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="hidden-xs"> 
					<a itemtype="http://schema.org/Thing" itemprop="item" <?php if ($_smarty_tpl->tpl_vars['show']->value == 'Feedback') {?>href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('contact');?>
"<?php }?>  title="<?php if ($_smarty_tpl->tpl_vars['show']->value == 'registerAgent') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Register');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Agent');
}
if ($_smarty_tpl->tpl_vars['show']->value == 'registerCTV') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Register');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cộng tác viên');
}
if ($_smarty_tpl->tpl_vars['show']->value == 'ResetPassSuccess') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Password reset');
}
if ($_smarty_tpl->tpl_vars['show']->value == 'Feedback') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact Us');
}
if ($_smarty_tpl->tpl_vars['show']->value == 'bookTour' || $_smarty_tpl->tpl_vars['show']->value == 'bookHotel' || $_smarty_tpl->tpl_vars['show']->value == 'bookTailor' || $_smarty_tpl->tpl_vars['show']->value == 'bookCruise') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking');
}?>"> 
						<span itemprop="name" class="reb"><?php if ($_smarty_tpl->tpl_vars['show']->value == 'Feedback') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact Us');
}?>
				<?php if ($_smarty_tpl->tpl_vars['show']->value == 'registerAgent') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Register');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Agent');
}?>
				<?php if ($_smarty_tpl->tpl_vars['show']->value == 'registerCTV') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Register');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cộng tác viên');
}?>
				<?php if ($_smarty_tpl->tpl_vars['show']->value == 'ResetPassSuccess') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Password reset');
}?>
				<?php if ($_smarty_tpl->tpl_vars['show']->value == 'bookTour' || $_smarty_tpl->tpl_vars['show']->value == 'bookHotel' || $_smarty_tpl->tpl_vars['show']->value == 'bookTailor' || $_smarty_tpl->tpl_vars['show']->value == 'bookCruise' || $_smarty_tpl->tpl_vars['show']->value == 'Bookingservices') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking');
}?></span> </a> 
					<meta itemprop="position" content="2" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"> 
					<a itemtype="http://schema.org/Thing" itemprop="item" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Success');?>
"> 
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Success');?>
</span> </a> 
					<meta itemprop="position" content="3" />
				</li>
			</ol>
		</div>
	</nav>
<?php }?>
	<section id="contentPage" class="successPage pd20_0">
		<div class="container">
			<section class="bore-right bg_fff">
								<div class="formatTextStandard"> 
					
					<?php $_smarty_tpl->_assignInScope('SiteMsg_ResetPassSuccess', ('SiteMsg_ResetPassSuccess_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'bookTour') {?>
						<?php echo html_entity_decode($_smarty_tpl->tpl_vars['SiteMsgTourSuccess']->value);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Feedback') {?>
						<?php echo html_entity_decode($_smarty_tpl->tpl_vars['messageFeedbackSuccess']->value);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'bookCruise') {?>
						<?php echo html_entity_decode($_smarty_tpl->tpl_vars['SiteMsgCruiseSuccess']->value);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'bookHotel') {?>
						<?php echo html_entity_decode($_smarty_tpl->tpl_vars['SiteMsgHotelSuccess']->value);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'bookTailor') {?>
						<?php echo html_entity_decode($_smarty_tpl->tpl_vars['SiteMsgTailorSuccess']->value);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Bookingservices') {?>
						<?php echo html_entity_decode($_smarty_tpl->tpl_vars['SiteMsgServiceSuccess']->value);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'ResetPassSuccess') {
echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValueAutoInfo($_smarty_tpl->tpl_vars['SiteMsg_ResetPassSuccess']->value));
}?>
				</div>
			</section>
		</div>
	</section>
</div>
<footer id="footer" class="footer text-center success" show="<?php echo $_smarty_tpl->tpl_vars['show']->value;?>
">
	<div class="copy__right">
		<div class="container">
			<div class="copy__right--content">
				<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getCopyRight();?>

				<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel website design');?>
" href="https://www.vietiso.com/thiet-ke-website-du-lich.html" class=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel website design');?>
</a>  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('by');?>
 <a class="" href="https://www.vietiso.com" title="VIETISO">VIET<span class="color_f58220">ISO</span></a>
			</div>
		</div>
	</div>
</footer><?php }
}
