<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:17:45
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_TopDestination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138c098ea544_24217565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34719f1291694a6bb282f59fa448f8345043dc85' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_TopDestination.tpl',
      1 => 1698292953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138c098ea544_24217565 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['listTopDestination']->value) {?>
<section class="section_box top__destination">
	<div class="top__destination--header header__content">
		<?php $_smarty_tpl->_assignInScope('TitleFavoriteDestination', ('TitleFavoriteDestination_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
		<?php $_smarty_tpl->_assignInScope('IntroFavoriteDestination', ('IntroFavoriteDestination_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
		<div class="container">
			<h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleFavoriteDestination']->value);?>
</h2>
			<div class="section_box-intro">
				<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroFavoriteDestination']->value));?>

			</div>
		</div>
	</div>
	<div class="top__destination--content">
		<div class="container">
			<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
			<div class="box_slider_top_des">
				<div class="owl_carousel_4_item owl-carousel">
					<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTopDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('city_top_id', $_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']);?>
					<?php $_smarty_tpl->_assignInScope('getTitle_City', $_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
					<?php $_smarty_tpl->_assignInScope('getLink_City', $_smarty_tpl->tpl_vars['clsCity']->value->getLinkTour($_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<div class="item relative">
						<a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['getLink_City']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getImage($_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'],289,165,$_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
" class="img100" width="289" height="165" />
						</a>
						<h3 class="title text_bold size22"><a class="color_fff" href="<?php echo $_smarty_tpl->tpl_vars['getLink_City']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
</a></h3>
					</div>
					<?php
}
}
?>
				</div>
			</div>
			<?php } else { ?>
			<div class="row row_flex">
				<?php $_smarty_tpl->_assignInScope('city_top_id', $_smarty_tpl->tpl_vars['listTopDestination']->value[0]['city_id']);?>
                <?php $_smarty_tpl->_assignInScope('getTitle_City', $_smarty_tpl->tpl_vars['listTopDestination']->value[0]['title']);?>
				<?php $_smarty_tpl->_assignInScope('getLink_City', $_smarty_tpl->tpl_vars['clsCity']->value->getLinkTour($_smarty_tpl->tpl_vars['listTopDestination']->value[0]['city_id'],$_smarty_tpl->tpl_vars['listTopDestination']->value[0]));?>
				<div class="col-xl-3 col-lg-4 item item_highlight mb991_20 mb767_20">
					<div class="item__box relative">
						<a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['getLink_City']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',1,1);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getImage($_smarty_tpl->tpl_vars['listTopDestination']->value[0]['city_id'],324,360,$_smarty_tpl->tpl_vars['listTopDestination']->value[0]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
" class="lazy img100"/>
						</a>
						<h3 class="title text_bold size22"><a class="color_fff" href="<?php echo $_smarty_tpl->tpl_vars['getLink_City']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
</a></h3>
					</div>
				</div>
				<div class="col-xl-9 col-lg-8 list_item">
					<div class="row">
						<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTopDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_start = (int)@"1" < 0 ? max(0, (int)@"1" + $__section_i_5_loop) : min((int)@"1", $__section_i_5_loop);
$__section_i_5_total = min(($__section_i_5_loop - $__section_i_5_start), $__section_i_5_loop);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_5_start; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('city_top_id', $_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']);?>
							<?php $_smarty_tpl->_assignInScope('getTitle_City', $_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
							<?php $_smarty_tpl->_assignInScope('getLink_City', $_smarty_tpl->tpl_vars['clsCity']->value->getLinkTour($_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
							<div class="col-lg-4 col-md-6 col-sm-6 item mb991_20 mb767_20">
								<div class="item__box relative">
									<a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['getLink_City']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',3,2);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getImage($_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'],289,165,$_smarty_tpl->tpl_vars['listTopDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
" class="lazy img100"/>
									</a>
									<h3 class="title text_bold size22"><a class="color_fff" href="<?php echo $_smarty_tpl->tpl_vars['getLink_City']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['getTitle_City']->value;?>
</a></h3>
								</div>
							</div>
						<?php
}
}
?>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</section>
<?php }
}
}
