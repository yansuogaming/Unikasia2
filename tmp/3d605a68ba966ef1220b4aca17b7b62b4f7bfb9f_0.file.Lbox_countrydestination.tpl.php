<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:39
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_countrydestination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a23347a58_89547284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d605a68ba966ef1220b4aca17b7b62b4f7bfb9f' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/Lbox_countrydestination.tpl',
      1 => 1698640165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a23347a58_89547284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['listCountryDestination']->value) {?>
<section class="home_box section_box top__destination">
	<?php $_smarty_tpl->_assignInScope('TitleFavoriteDestination', ('TitleFavoriteDestination_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
	<?php $_smarty_tpl->_assignInScope('IntroFavoriteDestination', ('IntroFavoriteDestination_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
	<div class="container">
		<div class="title text_center mb30">
			<h2 class="section_box-title"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleFavoriteDestination']->value);?>
</h2>
			<div class="intro_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroFavoriteDestination']->value));?>
</div>
		</div>
	</div>
	<div class="slide_list_country">
		<div class="container">
			<div class="jcarousel-box owl-carousel" id="listCountryDes">
				<?php
$__section_i_27_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCountryDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_27_total = $__section_i_27_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_27_total !== 0) {
for ($__section_i_27_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_27_iteration <= $__section_i_27_total; $__section_i_27_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('getTitle_Country', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],$_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
				<?php $_smarty_tpl->_assignInScope('getLink_Country', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'',$_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
				<?php $_smarty_tpl->_assignInScope('getIntro_Country', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getIntro($_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],'',false,$_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
				<div class="countryItem">	
					<div class="box_img">
						<a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['getLink_Country']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_Country']->value;?>
">
							<img class="owl-lazy img100" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',263,175);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getImage($_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'],263,175,$_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="263" height="175" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle_Country']->value;?>
"/>
						</a>
					</div>					
					<div class="body">
						<h3 class="title_h3"><a href="<?php echo $_smarty_tpl->tpl_vars['getLink_Country']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle_Country']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['getTitle_Country']->value;?>
</a></h3>
						<div class="intro limit_2line"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['getIntro_Country']->value)),100);?>
</div>
						<div class="bottom">
							<?php $_smarty_tpl->_assignInScope('totalPlace', $_smarty_tpl->tpl_vars['clsCountryEx']->value->countNumberPlaceToGo($_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']));?>
							<?php $_smarty_tpl->_assignInScope('totalTour', $_smarty_tpl->tpl_vars['clsCountryEx']->value->countNumberTour($_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']));?>
							<?php $_smarty_tpl->_assignInScope('totalHotel', $_smarty_tpl->tpl_vars['clsCountryEx']->value->countNumberHotel($_smarty_tpl->tpl_vars['listCountryDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']));?>
							<?php if ($_smarty_tpl->tpl_vars['totalPlace']->value || $_smarty_tpl->tpl_vars['totalTour']->value) {?>
							<p class="icon_place">
							<?php echo $_smarty_tpl->tpl_vars['totalPlace']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Places');?>
 <span class="color_999">&middot;</span> <?php echo $_smarty_tpl->tpl_vars['totalTour']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tours');?>

							</p>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['totalHotel']->value) {?>
							<p class="icon_hotel">
							<?php echo $_smarty_tpl->tpl_vars['totalHotel']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>

							</p>
							<?php }?>
						</div>
					</div>
				</div>
				<?php
}
}
?>
			</div>
		</div>
	</div>
</section>
<?php }
}
}
