<?php
/* Smarty version 3.1.38, created on 2024-05-04 19:01:32
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/testimonialsHomepro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6636239cdb4065_25257633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5382a22274d12d38e85173f278300b7a53fd7f82' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/testimonialsHomepro.tpl',
      1 => 1714822356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6636239cdb4065_25257633 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstTestimonial']->value) {
$_smarty_tpl->_assignInScope('TitleSiteTestimonial', ('TitleTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('IntroSiteTestimonial', ('IntroTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
<section class="section_box testimonials__box">
	<div class="container">
		<div class="box_testimonial">
			<h2 class="section_box-title section_box-title_testimonials"><a class="color_2c2c2c" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('testimonial');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleSiteTestimonial']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleSiteTestimonial']->value);?>
</a></h2>
            <div class="intro_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroSiteTestimonial']->value));?>
</div>
			<div class="list_testimonial">
				<div class="jcarousel-box owl_slide_testimonial owl-carousel">
					<?php
$__section_i_20_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTestimonial']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_20_total = $__section_i_20_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_20_total !== 0) {
for ($__section_i_20_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_20_iteration <= $__section_i_20_total; $__section_i_20_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('title_testimonial', $_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
					<?php $_smarty_tpl->_assignInScope('link_testimonial', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getLink($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<div class="tes_item" data-dot="<button><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
</button>">
						<a class="color_444444" href="<?php echo $_smarty_tpl->tpl_vars['link_testimonial']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
">
							<h3 class="title limit_2line"><?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
</h3>
							<div class="item__intro limit_3line"><?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['intro']));?>
 </div>
							<div class="box_customer">
								<img width="45" height="45" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/noimage.png" data-src="<?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getImage($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],45,45,$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
" class="img_customer lazy img100">
								<div class="box_left_customer">
									<p class="item_name"><?php echo $_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</p>
									<label class="rate-2019 block"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getRatesStar($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</label>
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
<?php }?> <?php }
}
