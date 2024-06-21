<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:20:32
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/news/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138cb0c7b740_36327432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a353f7147c9f06d062d1fcbbcc92fbf1c5e17c76' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/news/detail.tpl',
      1 => 1710562398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138cb0c7b740_36327432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('title_news', $_smarty_tpl->tpl_vars['clsNews']->value->getTitle($_smarty_tpl->tpl_vars['news_id']->value,$_smarty_tpl->tpl_vars['newsItem']->value));
$_smarty_tpl->_assignInScope('reg_date', smarty_modifier_date_format($_smarty_tpl->tpl_vars['newsItem']->value['reg_date'],"%Y-%m-%d"));
$_smarty_tpl->_assignInScope('last_update', smarty_modifier_date_format($_smarty_tpl->tpl_vars['newsItem']->value['last_update'],"%Y-%m-%d"));
$_smarty_tpl->_assignInScope('author', $_smarty_tpl->tpl_vars['newsItem']->value['author']);?>
	
	<?php echo '<script'; ?>
 type="application/ld+json">
	{
		"@graph": [{
			"@context": "http://schema.org",
			"@type": "NewsArticle",
			"mainEntityOfPage": {
				"@type": "WebPage",
				"@id": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['curl']->value;?>
"
			},
			"image": {
			"@type": "ImageObject",
			"url": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['global_image_seo_page']->value;?>
",
			"height": 850,
			"width": 480
			},
			"datePublished": "<?php echo $_smarty_tpl->tpl_vars['reg_date']->value;?>
",
			"dateModified": "<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
",
			"publisher": {
			"@type": "Organization",
			"name": "<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
",
			"logo": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImageValue('HeaderLogo');?>
"},
			"description": "<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
"
			}
		]
	}
	<?php echo '</script'; ?>
>

<div class="page_container">
	<div class="breadcrumb-main bg_fff">
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
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('news');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Experience');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Experience');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li> 
                <?php if ($_smarty_tpl->tpl_vars['newscat_id']->value > 0 && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'news','category','default')) {?>
                <?php $_smarty_tpl->_assignInScope('itemCat', $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getOne($_smarty_tpl->tpl_vars['newscat_id']->value,'title,slug'));?>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getLink($_smarty_tpl->tpl_vars['newscat_id']->value,$_smarty_tpl->tpl_vars['itemCat']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getTitle($_smarty_tpl->tpl_vars['newscat_id']->value,$_smarty_tpl->tpl_vars['itemCat']->value);?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['clsNewsCategory']->value->getTitle($_smarty_tpl->tpl_vars['newscat_id']->value,$_smarty_tpl->tpl_vars['itemCat']->value);?>
</span></a>
					<meta itemprop="position" content="3" />
				</li> 
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
</span></a>
					<meta itemprop="position" content="4" />
				</li>
				<?php } else { ?>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
                <?php }?>
                
            </ol>
        </div>
    </div>
    <div class="newsPage pageNewsDefault bg_f1f1f1">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 newsLeft mb991_30">
					<div class="box_title_top">
						<h1 class="title mb20">
							<?php echo $_smarty_tpl->tpl_vars['title_news']->value;?>

						</h1>
                        <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'computer') {?>
                        <div class="share_box">
						<div class="icon_share">
							<i class="ic ic_share"></i>
						</div>
							<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.sharer.js?v=<?php echo $_smarty_tpl->tpl_vars['up_version']->value;?>
"><?php echo '</script'; ?>
>
							<?php $_smarty_tpl->_assignInScope('link_share', $_smarty_tpl->tpl_vars['curl']->value);?>
							<?php $_smarty_tpl->_assignInScope('title_share', $_smarty_tpl->tpl_vars['title_news']->value);?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_share',array("link_share"=>$_smarty_tpl->tpl_vars['link_share']->value,"title_share"=>$_smarty_tpl->tpl_vars['title_share']->value));?>

						</div>
                        <?php }?>
					</div>
					<div class="NewsContent">
						<div class="submitted">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
								 fill="none">
								<g clip-path="url(#clip0_2953_5834)">
									<path d="M10 1C5.03125 1 1 5.03125 1 10C1 14.9688 5.03125 19 10 19C14.9688 19 19 14.9688 19 10C19 5.03125 14.9688 1 10 1Z"
										  stroke="#0077CC" stroke-miterlimit="10"/>
									<path d="M10 4V11H15" stroke="#0077CC" stroke-linecap="round"
										  stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_2953_5834">
										<rect width="20" height="20" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['newsItem']->value['reg_date']);?>

							<?php if ($_smarty_tpl->tpl_vars['author']->value) {?>
								<span>
								<i class="fa fa-user-o" aria-hidden="true"></i>
								<?php echo $_smarty_tpl->tpl_vars['author']->value;?>

								</span>
							<?php }?>
                            
                             <?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'computer') {?>
                            <div class="share_box">
                                <div class="icon_share">
                                    <i class="ic ic_share"></i>
                                </div>
                            
                                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.sharer.js?v=<?php echo $_smarty_tpl->tpl_vars['up_version']->value;?>
"><?php echo '</script'; ?>
>
                                <?php $_smarty_tpl->_assignInScope('link_share', $_smarty_tpl->tpl_vars['curl']->value);?>
                                <?php $_smarty_tpl->_assignInScope('title_share', $_smarty_tpl->tpl_vars['title_news']->value);?>
                                <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_share',array("link_share"=>$_smarty_tpl->tpl_vars['link_share']->value,"title_share"=>$_smarty_tpl->tpl_vars['title_share']->value));?>

                            </div>
                            <?php }?>
						</div>
						<div class="content">
							<div class="field-items maxWidthImage tinymce_Content">
								<?php echo $_smarty_tpl->tpl_vars['clsNews']->value->getIntro($_smarty_tpl->tpl_vars['news_id']->value,$_smarty_tpl->tpl_vars['newsItem']->value);?>

								<div class="clearfix"></div>
								<?php echo $_smarty_tpl->tpl_vars['clsNews']->value->getContent($_smarty_tpl->tpl_vars['news_id']->value,$_smarty_tpl->tpl_vars['newsItem']->value);?>

							</div>
						</div>
						<div class="cleafix"></div>
						<div class="comment_box mtm mt30">
                                <div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;
echo $_smarty_tpl->tpl_vars['clsNews']->value->getLink($_smarty_tpl->tpl_vars['news_id']->value,$_smarty_tpl->tpl_vars['newsItem']->value);?>
" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
                        </div>
					</div>

				</div>
				<div class="col-lg-3 sidebar rightNews">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('l_boxcolNews');?>

				</div>
			</div>
        </div>
    </div>
</div><?php }
}
