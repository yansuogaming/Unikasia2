<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:39
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_blogHomePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a235f5691_35598203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c91b567ae15638775a541ba49c9d300e90381f4a' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_blogHomePage.tpl',
      1 => 1698643165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a235f5691_35598203 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstTopBlog']->value) {?>
	<section class="travel__inspiration bg_fff">
		<div class="travel__inspiration--header header__content">
			<?php $_smarty_tpl->_assignInScope('TitleTravelInspiration', ('TitleTravelInspiration_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<?php $_smarty_tpl->_assignInScope('IntroTravelInspiration', ('IntroTravelInspiration_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<div class="container">
				<h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleTravelInspiration']->value);?>
</h2>
				<div class="section_box-intro">
					<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroTravelInspiration']->value));?>

				</div>
			</div>
		</div>
		<div class="travel__inspiration--content">
			<div class="container">
				<div class="row box_col" id="list__blog">
					<?php
$__section_i_29_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTopBlog']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_29_total = $__section_i_29_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_29_total !== 0) {
for ($__section_i_29_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_29_iteration <= $__section_i_29_total; $__section_i_29_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('getTitle_Blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getTitle($_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<?php $_smarty_tpl->_assignInScope('getLink_Blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="box">
							<a href="<?php echo $_smarty_tpl->tpl_vars['getLink_Blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_Blog']->value;?>
" class="item">
								<div class="box_img">
									<img class="lazy img100" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',296,184);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getImage($_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],296,184,$_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="296" height="184" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle_Blog']->value;?>
"/>
								</div>
								<div class="blog_body">
									<h3 class="limit_2line size18 color_1c1c1c"><?php echo $_smarty_tpl->tpl_vars['getTitle_Blog']->value;?>
</h3>
									<time class="time"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText4($_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['publish_date']);?>
</time>
									<div class="intro color_333 limit_3line">
										<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsBlog']->value->getIntro($_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstTopBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>

									</div>
								</div>
							</a>
						</div>
					</div>
					<?php
}
}
?>
				</div>
				<div class="view_more mt30">
					<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('blog');?>
" page="1" rel="nofollow" class="show-loader btn_view_more btn_main" id="__show-more-blog" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
</a>
				</div>
			</div>
		</div>
	</section>
<?php }
}
}
