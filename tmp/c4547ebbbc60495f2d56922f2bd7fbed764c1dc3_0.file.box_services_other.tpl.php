<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:17:45
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_services_other.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138c09be2091_56291379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4547ebbbc60495f2d56922f2bd7fbed764c1dc3' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_services_other.tpl',
      1 => 1709610869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138c09be2091_56291379 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="section_box orther_services">
	<div class="attractive_tour--header header__content">
		<div class="container">
			<h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discover other services');?>
</h2>
		</div>
	</div>				
	<div class="attractive_tour--content">
		<div class="container">
			<div class="list_services owl-carousel">
				<div class="box_services" data-dot="<button>1</button>">
					<div class="box_img">
						<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('hotel');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
" class="link_services"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/img_isocms/img_stay.png" width="405" height="300" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
" class="img_services"></a>
					</div>
					<div class="content_services">
						<div class="content_top">
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('hotel');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
" class="link_services">
								<h3 class="title_serv"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Stay');?>
</h3>
								<p class="desp_serv">Thoải mái bằng sau ngày dài bận rộn, vất vả</p>
							</a>
						</div>
						<div class="desp_bot"><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('hotel');?>
" class="view_detail">Khám phá thêm</a></div>
					</div>
				</div>
				<div class="box_services" data-dot="<button>2</button>">
					<div class="box_img">
						<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('cruise');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
" class="link_services"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/img_isocms/img_cruise.png" width="405" height="300" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
" class="img_services"></a>
					</div>
					<div class="content_services">
						<div class="content_top">
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('cruise');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
" class="link_services">
								<h3 class="title_serv"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</h3>
								<p class="desp_serv">Thoải mái bằng sau ngày dài bận rộn, vất vả</p>
							</a>
						</div>
						<div class="desp_bot"><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('cruise');?>
" class="view_detail">Khám phá thêm</a></div>
					</div>
				</div>
				<div class="box_services" data-dot="<button>3</button>">
					<div class="box_img">
						<a href="<?php echo $_smarty_tpl->tpl_vars['clsIso']->value->getLink('voucher');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
" class="link_services"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/img_isocms/img_voucher.png" width="405" height="300" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
" class="img_services"></a>
					</div>
					<div class="content_services">
						<div class="content_top">
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsIso']->value->getLink('voucher');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
" class="link_services">
								<h3 class="title_serv"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</h3>
								<p class="desp_serv">Thoải mái bằng sau ngày dài bận rộn, vất vả</p>
							</a>
						</div>
						<div class="desp_bot"><a href="<?php echo $_smarty_tpl->tpl_vars['clsIso']->value->getLink('voucher');?>
" class="view_detail">Khám phá thêm</a></div>
					</div>
				</div>
			</div>
		</div>

	   </div>
</section>

	<?php echo '<script'; ?>
>
		$(function(){
			$('.list_services').owlCarousel({
				loop:true,
				responsiveClass:true,
				responsive:{
					0:{
						items:1,
						margin:0,
						dot:true,
						dotsData: true,
					},
					600:{
						items:2,
						margin:20,
						dot:true,
						dotsData: true,
					},
					1000:{
						items:3,
						nav:true,
						loop:false,
						margin:32,
					},
				}
			})
		});
	<?php echo '</script'; ?>
>
<?php }
}
