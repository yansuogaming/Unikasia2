<?php
/* Smarty version 3.1.38, created on 2024-05-06 15:56:44
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blog/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66389b4cc29f07_61104002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8fdef9a0d6735f22524971c55487de7b48d936' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blog/detail.tpl',
      1 => 1714822357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66389b4cc29f07_61104002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/unikasia/domains/unikasia.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('title_blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getTitle($_smarty_tpl->tpl_vars['blog_id']->value,$_smarty_tpl->tpl_vars['blogItem']->value));
$_smarty_tpl->_assignInScope('publish_date', smarty_modifier_date_format($_smarty_tpl->tpl_vars['blogItem']->value['publish_date'],"%Y-%m-%d"));
$_smarty_tpl->_assignInScope('upd_date', smarty_modifier_date_format($_smarty_tpl->tpl_vars['blogItem']->value['upd_date'],"%Y-%m-%d"));
$_smarty_tpl->_assignInScope('author', $_smarty_tpl->tpl_vars['blogItem']->value['author']);
$_smarty_tpl->_assignInScope('imgBlog', $_smarty_tpl->tpl_vars['clsBlog']->value->getImage($_smarty_tpl->tpl_vars['blog_id']->value,800,535,$_smarty_tpl->tpl_vars['blogItem']->value));
$_smarty_tpl->_assignInScope('listTag', $_smarty_tpl->tpl_vars['clsBlog']->value->getArrayTag($_smarty_tpl->tpl_vars['blog_id']->value,$_smarty_tpl->tpl_vars['blogItem']->value));?>

<?php echo '<script'; ?>
 type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "BlogPosting",
    "@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['curl']->value;?>
#BlogPosting",
    "mainEntityOfPage": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['curl']->value;?>
",
    "headline": "<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
",
    "name": "<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
",
    "description": "<?php echo $_smarty_tpl->tpl_vars['description_page']->value;?>
",
    "datePublished": "<?php echo $_smarty_tpl->tpl_vars['publish_date']->value;?>
",
    "dateModified": "<?php echo $_smarty_tpl->tpl_vars['upd_date']->value;?>
",
    "author": {
		"@type": "Person",
		"name": "<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
"
	},
    "publisher": {
		"@type": "Organization",
		"@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
",
		"name": "VietISO Company",
		"logo": {
			"@type": "ImageObject",
			"@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/uploads/logo/logo_footer_new.png",
			"url": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/uploads/logo/logo_footer_new.png",
			"width": "98",
			"height": "47"
		}
	},
    "image": {
        "@type": "ImageObject",
        "@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['imgBlog']->value;?>
",
		"url": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['imgBlog']->value;?>
",
        "height": "535",
        "width": "800"
    },
    "url": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['curl']->value;?>
",
    "isPartOf": {
        "@type" : "Blog",
         "@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('blog');?>
",
         "name": "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
",
         "publisher": {
             "@type": "Organization",
             "@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
",
             "name": "VietISO Company"
         }
     }
    <?php if ($_smarty_tpl->tpl_vars['listTag']->value) {?>,"keywords": <?php echo json_encode($_smarty_tpl->tpl_vars['listTag']->value);
}?>
}
<?php echo '</script'; ?>
>

<div class="page_container">
	<nav class="breadcrumb-main breadcrumb-<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
 bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span>
					</a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
</span>
					</a>
					<meta itemprop="position" content="2" />
				</li>
				<?php if ($_smarty_tpl->tpl_vars['cat_id']->value > 0 && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'blog','category','default')) {?>
               <?php $_smarty_tpl->_assignInScope('itemCat', $_smarty_tpl->tpl_vars['clsBlogCategory']->value->getOne($_smarty_tpl->tpl_vars['cat_id']->value,'title,slug'));?>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsBlogCategory']->value->getLink($_smarty_tpl->tpl_vars['cat_id']->value,$_smarty_tpl->tpl_vars['itemCat']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['title'];?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['title'];?>
</span></a>
					<meta itemprop="position" content="3" />
				</li> 
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
</span></a>
					<meta itemprop="position" content="4" />
				</li> 
				<?php } else { ?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
                <?php }?>
            </ol>
        </div>
    </nav>
    <div id="contentPage" class="blogPage pageBlogDefault bg_f1f1f1">
		<div class="container">
			<h1 class="title32 color_333 mb50"><?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
</h1>
			<div class="row">
				<div class="col-lg-8 blogLeft mb768_30">
					<div class="blogContent">
						<div class="tinymce_Content">
							<div class="submitted"> 
								<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['blogItem']->value['publish_date']);?>

								<?php $_smarty_tpl->_assignInScope('getAuthor', $_smarty_tpl->tpl_vars['blogItem']->value['author']);?> 
								<?php if ($_smarty_tpl->tpl_vars['getAuthor']->value != '') {?> 
								&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['getAuthor']->value;?>
 
								<?php }?>
								<!--<div class="sharethis-inline-share-buttons" data-image="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsISO']->value->getPageImageShare($_smarty_tpl->tpl_vars['blog_id']->value,'Blog',$_smarty_tpl->tpl_vars['blogItem']->value);?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['curl']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
"></div>-->
								<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.sharer.js?v=<?php echo $_smarty_tpl->tpl_vars['up_version']->value;?>
"><?php echo '</script'; ?>
>
								<?php $_smarty_tpl->_assignInScope('link_share', $_smarty_tpl->tpl_vars['curl']->value);?>
								<?php $_smarty_tpl->_assignInScope('title_share', $_smarty_tpl->tpl_vars['title_blog']->value);?>
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_share',array("link_share"=>$_smarty_tpl->tpl_vars['link_share']->value,"title_share"=>$_smarty_tpl->tpl_vars['title_share']->value));?>

							</div>
							<div class="content">
								<div class="field-items maxWidthImage">
									<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getIntro($_smarty_tpl->tpl_vars['blog_id']->value,$_smarty_tpl->tpl_vars['blogItem']->value);?>

									<div class="clearfix mb40"></div>
									<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getContent($_smarty_tpl->tpl_vars['blog_id']->value,$_smarty_tpl->tpl_vars['blogItem']->value);?>

								</div>
							</div>
						</div>
						
						<div class="comment_box mtm mt30 w-100">
                            <div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;
echo $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['blog_id']->value,$_smarty_tpl->tpl_vars['blogItem']->value);?>
" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
                        </div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['lstRelated']->value) {?>
					<div class="cleafix mb30"></div>
					<div class="relateBlog mb30">
						<h2 class="title24 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Related Blogs');?>
</h2>
						<ul class="listBlog">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRelated']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('title_blog_relate', $_smarty_tpl->tpl_vars['clsBlog']->value->getTitle($_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
							<li><a class="clickviewtopnews" data-data="<?php echo $_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog_relate']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_blog_relate']->value;?>
</a></li>
							<?php
}
}
?>
						</ul>
					</div>
					<?php }?>
				</div>
				<aside class="col-lg-4 sidebar rightBlog">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('l_rightblog');?>

				</aside>
			</div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
$('.tinymce_Content img').each(function(i) {
    var self = $(this);
	self.attr('data-action', 'zoom');
});
<?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/zoom/zoom.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/zoom/zoom.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
