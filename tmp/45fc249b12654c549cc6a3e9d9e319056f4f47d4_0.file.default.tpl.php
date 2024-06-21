<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:10:54
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/testimonial/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c2aee0eaf5_84376100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45fc249b12654c549cc6a3e9d9e319056f4f47d4' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/testimonial/default.tpl',
      1 => 1671861206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c2aee0eaf5_84376100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="page_container">
	<nav class="breadcrumb-main bg_fff">
        <div class="container">
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
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Testimonials');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Testimonials');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
            </ol>
        </div>
	</nav>
	<div class="testimonialPage">
		<div class="container">
			<div class="row">
				<section class="col-lg-8 mb991_30">
					<h1 class="title32 color_333 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Testimonials');?>
</h1>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getModIntro('testimonial')) {?>
					<div class="intro"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getModIntro('testimonial');?>
</div>
					<?php }?> 
					<div class="listTestimonial">
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getTitle($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
						<?php $_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getLink($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
						<div class="item bg_fff">
							<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"> 
								<div class="photo">
									<img class="img-responsive img100 lazy" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png" data-src="<?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getImage($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],260,200,$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"  /> 
								</div>
								<div class="body title">
									<h3 class="testimonials-title"> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
									<div class="introCrx"> <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsTestimonial']->value->getIntro($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])),235);?>
 </div>
									<div class="wrap profilet"> <strong><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getName($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
, <?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getCountry($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</strong> </div>
									<div class="star mt10">
									<label class="rate-2019 block"><?php echo $_smarty_tpl->tpl_vars['clsTestimonial']->value->getRatesStar($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['testimonial_id'],$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
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
					<?php if ($_smarty_tpl->tpl_vars['totalPage']->value > '1') {?>
					<div class="clearfix"></div>
					<div class="pagination pager">
						<?php echo $_smarty_tpl->tpl_vars['page_view']->value;?>

					</div>
					<?php }?>	
				</section>
				<aside class="col-lg-4 testimonialsRight" >
					<div class="sticky_fix">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('aboutRight');?>

						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('company');?>

						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lwhybox');?>

					</div>
				</aside>
			</div>
		</div>
	</div>
</div><?php }
}
