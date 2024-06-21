<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:15:40
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blog/cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c3ccbf0f04_67328436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24d6fedfbc0c15db6b05cbe93d78b00d63c809fe' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blog/cat.tpl',
      1 => 1704275969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c3ccbf0f04_67328436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.sharer.js?v=<?php echo $_smarty_tpl->tpl_vars['up_version']->value;?>
"><?php echo '</script'; ?>
>
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
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog_cat']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_blog_cat']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
            </ol>
        </div>
    </nav>
    <section id="contentPage" class="blogPage pageBlogCat bg_f1f1f1">
		<div class="container">
			<h1 class="title32 color_333 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog listing by');?>
 <?php if ($_smarty_tpl->tpl_vars['show']->value == 'Cat') {?> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
 <?php echo $_smarty_tpl->tpl_vars['title_blog_cat']->value;
} else { ?> <?php echo $_smarty_tpl->tpl_vars['title_blog_cat']->value;?>
 of <?php if ($_smarty_tpl->tpl_vars['show']->value == 'Country') {?> <?php echo $_smarty_tpl->tpl_vars['title_country_blog']->value;?>
 <?php } else {
echo $_smarty_tpl->tpl_vars['title_city_blog']->value;
}?> <?php }?></h1>
			<div class="row">
				<div class="col-lg-8 blogLeft mb991_30">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBlogs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php $_smarty_tpl->_assignInScope('title_blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getTitle($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                    <?php $_smarty_tpl->_assignInScope('link_blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                    <article class="blogItem">
                        <h3 class="title24 color_333 mb10"><a class="fontSize24 color_333" href="<?php echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
</a></h3>
                        <div class="submitted">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['publish_date']);?>
 <?php if ($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['author'] != '') {?>&nbsp;<i class="fa fa-user" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['author'];?>
 <?php }?>
                            <?php $_smarty_tpl->_assignInScope('link_share', $_smarty_tpl->tpl_vars['link_blog']->value);?>
							<?php $_smarty_tpl->_assignInScope('title_share', $_smarty_tpl->tpl_vars['title_blog']->value);?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_share',array("link_share"=>$_smarty_tpl->tpl_vars['link_share']->value,"title_share"=>$_smarty_tpl->tpl_vars['title_share']->value));?>

                        </div>
                        <div class="content">
                            <a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
" rel="tag" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
">
                                <img class="trek-blog-gallery lazy img100" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png" data-src="<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getImage($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],730,487,$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
"  draggable="false">
                            </a>
                            <div class="bodyBlog textjustify992">
                                <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsBlog']->value->getIntro($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])),250);?>

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
                    <div class="clearfix"></div>
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
