<?php
/* Smarty version 3.1.38, created on 2024-04-08 17:09:52
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/service/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613c270ad8849_61088139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baa6a01d9e8a58b6ec64a1b31070c49b5cce281b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/service/default.tpl',
      1 => 1704356381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613c270ad8849_61088139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('title_service_cat', $_smarty_tpl->tpl_vars['clsServiceCategory']->value->getTitle($_smarty_tpl->tpl_vars['servicecat_id']->value));?>
<div class="page_container">
	<nav class="breadcrumb-main breadcrumb-default bg_fff">
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
					<a  itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('service');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel services');?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel services');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
				<?php if ($_smarty_tpl->tpl_vars['show']->value == 'cat') {?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_service_cat']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_service_cat']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
				<?php }?>
            </ol>
        </div>
    </nav>
    <div class="servicePage pageServiceDefault bg_f1f1f1">
		<div class="container">
			<article>
			<?php if ($_smarty_tpl->tpl_vars['show']->value == 'cat') {?>
			<?php $_smarty_tpl->_assignInScope('intro_service_cat', $_smarty_tpl->tpl_vars['clsServiceCategory']->value->getIntro($_smarty_tpl->tpl_vars['servicecat_id']->value));?>
			<h1 class="title32 color_333 mb20"><?php echo $_smarty_tpl->tpl_vars['title_service_cat']->value;?>
</h1>
			<?php if ($_smarty_tpl->tpl_vars['intro_service_cat']->value) {?>
			<div class="intro mb40"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['intro_service_cat']->value);?>
</div>  
			<?php } else { ?>
			<div class="clearfix mb20"></div>
			<?php }?>
			<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('intro_mod_service', $_smarty_tpl->tpl_vars['clsISO']->value->getModIntro('service'));?>
			<h1 class="title32 color_333 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel services');?>
</h1>
			<?php if ($_smarty_tpl->tpl_vars['intro_mod_service']->value) {?>
			<div class="intro mb40"><?php echo $_smarty_tpl->tpl_vars['intro_mod_service']->value;?>
</div>  
			<?php } else { ?>
			<div class="clearfix mb20"></div>
			<?php }?>
			<?php }?>
			</article>
			<div class="row">
				<div class="col-lg-9 serviceLeft">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listService']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('_title', $_smarty_tpl->tpl_vars['listService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
					<?php $_smarty_tpl->_assignInScope('_link', $_smarty_tpl->tpl_vars['clsService']->value->getLink($_smarty_tpl->tpl_vars['listService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['service_id']));?>
					<?php $_smarty_tpl->_assignInScope('_service_id', $_smarty_tpl->tpl_vars['listService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['service_id']);?>
					<article class="serviceItem">
						<div class="service__box">
							<div class="service__img">
								<div class="service__container">
									<a href="<?php echo $_smarty_tpl->tpl_vars['_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
">
										<img class="width100 heightAuto img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsService']->value->getImage($_smarty_tpl->tpl_vars['_service_id']->value,280,255);?>
"/>
									</a>
								</div>	
							</div>
							<div class="service__body">
								<h3><a href="<?php echo $_smarty_tpl->tpl_vars['_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</a></h3>
								<p class="time hidden"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText($_smarty_tpl->tpl_vars['listService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date']);?>
</p>
								<p class="intro"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['clsService']->value->getIntro($_smarty_tpl->tpl_vars['_service_id']->value))),250);?>
</p>
								<p class="text-right"> 
									<a class="sevicer__readmore btn_main" href="<?php echo $_smarty_tpl->tpl_vars['_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Read more');?>
</a>
								</p>
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
				<div class="col-lg-3 rightService">
                    <div class="sticky_fix">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('l_boxcolService');?>

                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
