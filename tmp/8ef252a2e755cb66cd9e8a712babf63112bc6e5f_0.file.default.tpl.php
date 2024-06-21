<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:12:04
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/about/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c2f43f4282_10047577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ef252a2e755cb66cd9e8a712babf63112bc6e5f' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/about/default.tpl',
      1 => 1671861821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c2f43f4282_10047577 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
	<?php $_smarty_tpl->_assignInScope('itemPage', $_smarty_tpl->tpl_vars['clsPage']->value->getOne($_smarty_tpl->tpl_vars['page_id']->value,'title,intro'));?>
	<?php $_smarty_tpl->_assignInScope('titlePage', $_smarty_tpl->tpl_vars['clsPage']->value->getTitle($_smarty_tpl->tpl_vars['page_id']->value,$_smarty_tpl->tpl_vars['itemPage']->value));?>
	<?php $_smarty_tpl->_assignInScope('introPage', $_smarty_tpl->tpl_vars['clsPage']->value->getIntro($_smarty_tpl->tpl_vars['page_id']->value,$_smarty_tpl->tpl_vars['itemPage']->value));?>
	<nav class="breadcrumb-main bg_fff">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
">
								<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
							<meta itemprop="position" content="1" />
						</li>
						<li  itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="current">
							<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
">
								<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</span></a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
				</div>
			</div>
		</div>
	</nav>
 	<section class="aboutPage whyPage">
		<div class="container ">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="Aboutcontent">
						<h1 class="titlePage"><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</h1>
						<div class="tinymce_Content"><?php echo $_smarty_tpl->tpl_vars['introPage']->value;?>
</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div><?php }
}
