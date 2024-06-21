<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:39
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/testimonialsHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a2350ac42_97963429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcb2935846bfac7134d61ed78bbb9c1e8d3af485' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/testimonialsHome.tpl',
      1 => 1710990709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a2350ac42_97963429 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstTestimonial']->value) {
$_smarty_tpl->_assignInScope('TitleSiteTestimonial', ('TitleTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));
$_smarty_tpl->_assignInScope('IntroSiteTestimonial', ('IntroTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
<section class="section_box testimonials__box">
    <div class="container">
		<div class="title text_center mb0">
			<h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleSiteTestimonial']->value);?>
</h2>
			<div class="intro_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroSiteTestimonial']->value));?>
</div>
		</div>
	</div>
	<div class="container">
		<div class="list_testimonial">
			<div class="jcarousel-box owl_slide_testimonial owl-carousel">
				<?php
$__section_i_28_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTestimonial']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_28_total = $__section_i_28_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_28_total !== 0) {
for ($__section_i_28_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_28_iteration <= $__section_i_28_total; $__section_i_28_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('title_testimonial', $_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
				<?php $_smarty_tpl->_assignInScope('link_testimonial', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getLink($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
				<div class="tes_item">
					<a class="color_1c1c1c" href="<?php echo $_smarty_tpl->tpl_vars['link_testimonial']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
">
						<h3 class="title size20 text_bold color_1c1c1c mb10 limit_1line"><?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
</h3>
						<div class="item__intro limit_3line mb10"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getIntro($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
 </div>
                        
                        <div class="user d-flex">
                            <div class="avatar">
                                <img class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getName($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getImage($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],45,45,$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="45" height="45" />
                            </div>
                            <div class="user_name">
                                <p class="name"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getName($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
 <span class="country_user text_normal"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getCountry($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</span></p>
                                <p class="rate">
                                <label class="rate-2019 block"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getRatesStar($_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['lstTestimonial']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</label>
                                </p>
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
    <div class="tour_for_ask">
       <div class="container">
            <div class="box_tour">
                <div class="box-left">
                   	<?php $_smarty_tpl->_assignInScope('TitleSufficient', ('TitleSufficient_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                   	<?php $_smarty_tpl->_assignInScope('IntroSufficient', ('IntroSufficient_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
                    <h3 class="title_tour_for_ask"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleSufficient']->value));?>
</h3>
                    <p class="text_tour_for_ask"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroSufficient']->value));?>
</p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('tailor');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
" class="link_tour_for_ask btn_main"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</a>
                </div>
                <div class="box-right">
                    <img width="625" height="401" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',3,2);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/img_isocms/banner_tour_for_ask.png" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
" class="lazy img_banner_tour img100" loading="lazy">
                </div>
            </div>
		</div>
    </div>
</section>
<?php }?> <?php }
}
