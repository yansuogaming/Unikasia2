<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:20:33
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/testimonial/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138cb182b216_26516510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae7787845bf69b147f36a055e8fc8e0fc6e5e3d9' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/testimonial/detail.tpl',
      1 => 1704362749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138cb182b216_26516510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('title_testimonial', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getTitle($_smarty_tpl->tpl_vars['testimonial_id']->value));?>
<div class="page_container">
	<nav class="breadcrumb-main bg_fff">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
">
							<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
						<meta itemprop="position" content="1" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('testimonial');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Testimonials');?>
">
							<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Testimonials');?>
</span></a>
						<meta itemprop="position" content="2" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="current">
						<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
"> <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
</span></a>
						<meta itemprop="position" content="3" />
					</li>
				</ol>
				</div>
			</div>
		</div>
	</nav>
	<div class="testimonialPage">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<article class="bg_fff">
						<h1 class="size32 title SegoeUILight"><?php echo $_smarty_tpl->tpl_vars['title_testimonial']->value;?>
</h1>
						<p class="country text_bold"><label class="rate-2019 inline-block"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getRatesStar($_smarty_tpl->tpl_vars['testimonial_id']->value);?>
</label> <?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getName($_smarty_tpl->tpl_vars['testimonial_id']->value);?>
, <?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getCountry($_smarty_tpl->tpl_vars['testimonial_id']->value);?>
</p>
						<div class="formatTextStandard"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getIntro($_smarty_tpl->tpl_vars['testimonial_id']->value);?>
</div>
					</article>
					<?php if ($_smarty_tpl->tpl_vars['listItem']->value[0]['testimonial_id'] != '') {?>
					<div class="related_box mt30" id="listTestimonialsView">
						<p class="size24 hd mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('See more');?>
</p>
						<div class="listTestimonial">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getTitle($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id']));?>
							<?php $_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getLink($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id']));?>
							<div class="item bg_fff">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"> 
									<div class="photo">
										<img class="img-responsive img100 lazy" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png" data-src="<?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getImage($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],260,200);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"  /> 
									</div>
									<div class="body title">
										<h3 class="testimonials-title"> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
										<div class="introCrx"> <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getIntro($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'])),235);?>
 </div>
										<div class="wrap profilet"> <strong><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getName($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id']);?>
, <?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getCountry($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id']);?>
</strong> </div>
										<div class="star mt10">
										<label class="rate-2019 block"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getRatesStar($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id']);?>
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
					<?php }?> 
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
