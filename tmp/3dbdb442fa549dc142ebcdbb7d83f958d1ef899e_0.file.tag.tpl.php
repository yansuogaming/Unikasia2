<?php
/* Smarty version 3.1.38, created on 2024-04-08 23:15:14
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blog/tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66141812c106e3_77774819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dbdb442fa549dc142ebcdbb7d83f958d1ef899e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blog/tag.tpl',
      1 => 1676885559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66141812c106e3_77774819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('title_tag_blog', $_smarty_tpl->tpl_vars['clsTag']->value->getTitle($_smarty_tpl->tpl_vars['tag_id']->value));?>
<div class="page_container">
	<nav class="breadcrumb-main breadcrumb-<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
 bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog Tag');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog Tag');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>  				
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> 
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_tag_blog']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_tag_blog']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
            </ol>
        </div>
    </nav>
    <section id="contentPage" class="blogPage pageBlogTag bg_f1f1f1">
		<div class="container">
			<h1 class="title32 color_333 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog listing by tag');?>
 <?php echo $_smarty_tpl->tpl_vars['title_tag_blog']->value;?>
 </h1>
			<div class="row">
				<div class="col-lg-8 blogLeft mb768_30">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBlogs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php $_smarty_tpl->_assignInScope('title_blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getTitle($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']));?>
                    <?php $_smarty_tpl->_assignInScope('link_blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']));?>
                    <article class="blogItem">
                        <h3 class="title24 color_333 mb10"><a class="fontSize24 color_333" href="<?php echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
</a></h3>
                        <div class="submitted">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date']);?>
 <?php if ($_smarty_tpl->tpl_vars['clsBlog']->value->getAuthor($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']) != '') {?>&nbsp;<i class="fa fa-user" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getAuthor($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']);?>
 <?php }?>
                            <div class="sharethis-buttons mt0">
                                <div class="sharethis-wrapper">
                                    <div class="addthis_toolbox addthis_default_style" addthis:media="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsBlog']->value->getImage($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],400,300);?>
" addthis:url="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
" addthis:title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                    </div>
                                    <?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=thiembv"><?php echo '</script'; ?>
>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="photo">
                                <img class="trek-blog-gallery lazy" src="<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getImage($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],730,487);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
" width="100%" height="auto" draggable="false"/>
                            </div>
                            <div class="bodyBlog textjustify992">
                                <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsBlog']->value->getIntro($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'])),250);?>

                                <a class="linkBlog" href="<?php echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
" rel="tag" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Read more');?>
</a>
                            </div>
                        </div>
                </article>
				<?php
}
}
?>
				<?php if ($_smarty_tpl->tpl_vars['totalPage']->value > '1') {?>
				<div class="text-center">
					<div class="item-list">
						<div class="pagination pager">
							<?php echo $_smarty_tpl->tpl_vars['page_view']->value;?>

						</div>
					</div>
				</div>
				<?php }?>
				</div>
				<aside class="col-lg-4 sidebar rightBlog">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('l_rightblog');?>

				</aside>  
			</div>
		</div>                
    </section>
</div><?php }
}
