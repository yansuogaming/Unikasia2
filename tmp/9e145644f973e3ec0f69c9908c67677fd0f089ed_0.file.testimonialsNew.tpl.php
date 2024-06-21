<?php
/* Smarty version 3.1.38, created on 2024-05-06 10:17:04
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/testimonialsNew.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66384bb02405a8_03399216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e145644f973e3ec0f69c9908c67677fd0f089ed' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/testimonialsNew.tpl',
      1 => 1714822356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66384bb02405a8_03399216 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstTestimonial']->value) {
$_smarty_tpl->_assignInScope('TitleSiteTestimonial', ('TitleTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('IntroSiteTestimonial', ('IntroTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
<section class="section_box testimonials__box">
	<div class="container">
		<div class="box_testimonial">
			<h2 class="title_testimonials"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('What do customers say about us?');?>
</h2>
			<div class="list_testimonial">
				<div class="jcarousel-box owl_slide_testimonial_cruise owl-carousel">
					<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTestimonial']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('title_testimonial', $_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
					<?php $_smarty_tpl->_assignInScope('link_testimonial', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getLink($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<?php $_smarty_tpl->_assignInScope('image_default', ($_smarty_tpl->tpl_vars['URL_IMAGES']->value).("/noimage.png"));?>
					<div class="tes_item" data-dot="<button><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
</button>">
						<a class="" href="<?php echo $_smarty_tpl->tpl_vars['link_testimonial']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
">
							<h3 class="title_test limit_1line"><?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
</h3>
							<div class="item__intro limit_3line"><?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['intro']));?>
 </div>
							<div class="box_customer">
								<div class="box_avt">
									<img width="45" height="45" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->tripslashImage($_smarty_tpl->tpl_vars['image_default']->value,45,45);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getImage($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],45,45,$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
" class="img_customer owl-lazy img100">
								</div>
								<div class="box_left_customer">
									<p class="item_name text1line"><?php echo $_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</p>
									<span class="country_user text_normal"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getCountry($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</span>
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
