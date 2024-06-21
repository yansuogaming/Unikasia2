<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:31:22
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/about/why.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c77a96e8a5_57919366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce0d384f9e665d1461a613566af2cbea57e11a66' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/about/why.tpl',
      1 => 1667387979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c77a96e8a5_57919366 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
	<nav class="breadcrumb-main breadcrumb-<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
 bg_fff">
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
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="current">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Why travel with us');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Why travel with us');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
			</ol>
		</div>
	</nav>
	<div id="contentPage" class="aboutPage whyPage pd50_0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb992_30">
					<article class="Aboutcontent bg_fff">
						<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Why travel with us');?>
?</h1>
						<dl class="list-group-FAQs">
							<?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstWhy']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] = ($__section_k_0_iteration === 1);
?>
							<dt class="clickFAQ <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] : null)) {?>current<?php }?>"> <a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['clsWhy']->value->getTitle($_smarty_tpl->tpl_vars['lstWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['why_id']);?>
</a> <i class="fa <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] : null)) {?>fa-minus-circle<?php } else { ?>fa-plus-circle<?php }?> pull-right"></i> </dt>
							<?php $_smarty_tpl->_assignInScope('Intro_Why', $_smarty_tpl->tpl_vars['clsWhy']->value->getIntro($_smarty_tpl->tpl_vars['lstWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['why_id']));?>
							<?php if ($_smarty_tpl->tpl_vars['Intro_Why']->value) {?>
							<dd id="FAQ-<?php echo $_smarty_tpl->tpl_vars['lstWhy']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['why_id'];?>
" <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] : null)) {?>style="display:none"<?php }?>>
								<div class="formatTextStandard"> <?php echo $_smarty_tpl->tpl_vars['Intro_Why']->value;?>
 </div>
							</dd>
							<?php }?>
							<?php
}
}
?>
						</dl>
					</article>
				</div>
				<aside class="col-lg-4 AboutRight">
					<div class="sticky_fix">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('aboutRight');?>
											
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('company');?>

					</div>
				</aside>
			</div>
		</div>
	</div>
</div><?php }
}
