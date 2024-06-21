<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:10:07
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blog/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c27f396814_80463525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '054bdf07d991fbc77ec9a5da2e3351b41843d394' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blog/default.tpl',
      1 => 1705293249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c27f396814_80463525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['show']->value == 'Country') {
$_smarty_tpl->_assignInScope('TD', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['oneItemCountry']->value));
} elseif ($_smarty_tpl->tpl_vars['show']->value == 'City') {
$_smarty_tpl->_assignInScope('TD', $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['oneItemCity']->value));
} else {
$_smarty_tpl->_assignInScope('TD', $_smarty_tpl->tpl_vars['clsRegion']->value->getTitle($_smarty_tpl->tpl_vars['region_id']->value,$_smarty_tpl->tpl_vars['oneItemRegion']->value));
}?>

<?php echo '<script'; ?>
 type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "Blog",
    "@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['curl']->value;?>
",
    "mainEntityOfPage": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['curl']->value;?>
",
    "name": "<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Default') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Our Blog');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog listing by destinations');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;
}?>",
    "description": "<?php echo $_smarty_tpl->tpl_vars['description_page']->value;?>
",
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

<?php if ($_smarty_tpl->tpl_vars['lstBlogs']->value) {?>
    
        "blogPost": [
    
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBlogs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_0_iteration === $__section_i_0_total);
?>
    <?php $_smarty_tpl->_assignInScope('title_blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getTitle($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
    <?php $_smarty_tpl->_assignInScope('link_blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
    <?php $_smarty_tpl->_assignInScope('publish_date', smarty_modifier_date_format($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['publish_date'],"%Y-%m-%d"));?>
    <?php $_smarty_tpl->_assignInScope('upd_date', smarty_modifier_date_format($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['upd_date'],"%Y-%m-%d"));?>
    <?php $_smarty_tpl->_assignInScope('imgBlog', $_smarty_tpl->tpl_vars['clsBlog']->value->getImage($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],828,552,$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
    <?php $_smarty_tpl->_assignInScope('author', $_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['author']);?>
    <?php $_smarty_tpl->_assignInScope('listTag', $_smarty_tpl->tpl_vars['clsBlog']->value->getArrayTag($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
    
        {
            "@type": "BlogPosting",
            "@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
#BlogPosting",
            "mainEntityOfPage": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
",
            "headline": "<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
",
            "name": "<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
",
            "description": "<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsBlog']->value->getIntro($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
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
            "image": {
                "@type": "ImageObject",
                "@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['imgBlog']->value;?>
",
                "url": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['imgBlog']->value;?>
",
                "height": "552",
                "width": "828"
            },
            "url": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
"
            <?php if ($_smarty_tpl->tpl_vars['listTag']->value) {?>,"keywords": <?php echo json_encode($_smarty_tpl->tpl_vars['listTag']->value);
}?>
        }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>,<?php }
}
}
?>
]
<?php }?>

}
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.sharer.js?v=<?php echo $_smarty_tpl->tpl_vars['up_version']->value;?>
"><?php echo '</script'; ?>
>
<div class="page_container">
    <div class="banner">
		<img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('site_blog_banner',1920,400);?>
" width="1920" height="400" alt="<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Default') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Our Blog');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog in');
echo $_smarty_tpl->tpl_vars['TD']->value;
}?>"/>
    </div>
	<nav class="breadcrumb-main bg_fff">
        <div class="container">
            <ol class="breadcrumb bg_fff hidden-xs mt0" itemscope itemtype="https://schema.org/BreadcrumbList">
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
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
				 <?php if ($_smarty_tpl->tpl_vars['show']->value == 'City') {?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLink($_smarty_tpl->tpl_vars['city_id']->value,'Blog',false,$_smarty_tpl->tpl_vars['oneItemCity']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
				<?php } elseif ($_smarty_tpl->tpl_vars['show']->value == 'Country') {?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
				<?php } else { ?>
				<?php }?>
            </ol>
        </div>
    </nav>
    <div id="contentPage" class="pageBlogDefault bg_f1f1f1 pdt50">
		<article class="container">
			<h1 class="title32 color_333 mb20">
			<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Default') {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Our Blog');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog listing by destinations');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;
}?></h1>
			<div class="row">
				<div class="col-lg-8 blogLeft mb991_30">
					<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBlogs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_1_iteration === $__section_i_1_total);
?>
						<?php $_smarty_tpl->_assignInScope('title_blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getTitle($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
						<?php $_smarty_tpl->_assignInScope('link_blog', $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
						<?php $_smarty_tpl->_assignInScope('author', $_smarty_tpl->tpl_vars['clsBlog']->value->getAuthor($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
						<article class="blogItem">
							<h3 class="title24 color_333 mb10"><a class="fontSize24 color_333" href="<?php echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
</a></h3>
							<div class="submitted">
								<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['publish_date']);?>
 <?php if ($_smarty_tpl->tpl_vars['author']->value != '') {?><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
 <?php }?>
								<!--<div class="sharethis-inline-share-buttons" data-image="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsISO']->value->getPageImageShare($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],'Blog');?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
"></div>-->
								<?php $_smarty_tpl->_assignInScope('link_share', $_smarty_tpl->tpl_vars['link_blog']->value);?>
								<?php $_smarty_tpl->_assignInScope('title_share', $_smarty_tpl->tpl_vars['title_blog']->value);?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_share');?>

							</div>
							<div class="content">
								<a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
">
									<img class="trek-blog-gallery lazy img100" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/pixel.png" data-src="<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getImage($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],828,552,$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
" draggable="false">
								</a>
								<div class="bodyBlog textjustify992">
									<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsBlog']->value->getIntro($_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstBlogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])),250);?>

									<a class="linkBlog" href="<?php echo $_smarty_tpl->tpl_vars['link_blog']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
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
				<aside class="col-lg-4 rightBlog">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('l_rightblog');?>

				</aside  
			></div>
		</article>
		<?php if ($_smarty_tpl->tpl_vars['show']->value != 'Default') {?>
		<div class="pd50_0 bg_fff">
			<div class="container">
				<div class="destinationAZ">
					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'City') {?>
					<h2 class="pane-title mt0 mb30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('A-Z Blogs of Other Destinations');?>
</h2>
					<?php } else { ?>
					<h2 class="pane-title mt0 mb30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('A-Z Blogs of Destinations');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</h2>
					<?php }?>
					<div class="listDestination d-flex flex-wrap">
						<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['letter']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_2_iteration === $__section_i_2_total);
?>
						<?php $_smarty_tpl->_assignInScope('lstCityAZ', $_smarty_tpl->tpl_vars['clsISO']->value->getItemByAlphabetCityBlog($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['letter']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
						<?php if ($_smarty_tpl->tpl_vars['lstCityAZ']->value) {?>
						<ul class="masonry grid-of-blog">
							<h3 class="title"><span><?php echo $_smarty_tpl->tpl_vars['letter']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</span></h3>
							<?php
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCityAZ']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total !== 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
								<?php if ($_smarty_tpl->tpl_vars['clsBlog']->value->countBlogGolobal($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstCityAZ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']) > 0) {?>
								<?php $_smarty_tpl->_assignInScope('itemCity', $_smarty_tpl->tpl_vars['clsCity']->value->getOne($_smarty_tpl->tpl_vars['lstCityAZ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],'title,slug'));?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLink($_smarty_tpl->tpl_vars['lstCityAZ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],'Blog',false,$_smarty_tpl->tpl_vars['itemCity']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityAZ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['itemCity']->value);?>
</a></li>
								<?php }?>
							<?php
}
}
?>
						</ul>
						<?php }?>
						<?php
}
}
?>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
</div><?php }
}
