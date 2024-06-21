<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:17:45
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_blogHomePagepro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138c09c77bc2_96606563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c50190952642e4ea3b3aaa7f04f3461ecdc982' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_blogHomePagepro.tpl',
      1 => 1698304040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138c09c77bc2_96606563 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstTopBlog']->value) {?>
	<section class="travel__inspiration bg_fff">
		<div class="container">
			<div class="travel__inspiration--header header__content">
				<?php $_smarty_tpl->_assignInScope('TitleTravelInspiration', ('TitleTravelInspiration_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
				<?php $_smarty_tpl->_assignInScope('IntroTravelInspiration', ('IntroTravelInspiration_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
				<div class="container plr_mb-20">
					<h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleTravelInspiration']->value);?>
</h2>
					<div class="section_box-intro">
						<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroTravelInspiration']->value));?>

					</div>
				</div>
			</div>
			<div class="travel__inspiration--content">
				<div class="container plr_mb-20">
					<div class="row box_col  owl-carousel" id="list__blog">
						<?php
$__section_i_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTopBlog']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_9_total = $__section_i_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_9_total !== 0) {
for ($__section_i_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_9_iteration <= $__section_i_9_total; $__section_i_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('getTitle_Blog', $_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
						<?php $_smarty_tpl->_assignInScope('getLink_Blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
							<div class="box mb20">
								<a href="<?php echo $_smarty_tpl->tpl_vars['getLink_Blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_Blog']->value;?>
" class="item">
									<img class="lazy img100" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',3,2);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getImage($_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],295,185,$_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="295" height="185" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle_Blog']->value;?>
"/>
									<div class="blog_body">
										<h3 class="limit_2line"><?php echo $_smarty_tpl->tpl_vars['getTitle_Blog']->value;?>
</h3>
										<time class="time"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText4($_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['publish_date']);?>
</time>
										<div class="intro limit_3line">
											<?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['intro']));?>

										</div>
									</div>
								</a>
							</div>
						<?php
}
}
?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<?php echo '<script'; ?>
>
		$(function(){
			$('#list__blog').owlCarousel({
				loop:true,
				responsiveClass:true,
				dots:false,
				responsive:{
					0:{
						items:2,
						nav:true,
						center: true,
						margin:14,
					},
					600:{
						items:2,
						nav:false,
						center: true,
						margin:20,
					},
					1000:{
						items:4,
						nav:true,
						loop:false,
						margin:30,
					}
				}
			})
		});
	<?php echo '</script'; ?>
>
	
<?php }
}
}
