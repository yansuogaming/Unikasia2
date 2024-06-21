<?php
/* Smarty version 3.1.38, created on 2024-05-06 11:55:35
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/l_rightblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_663862c7d2eb79_77856589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eab0c7fb46064250e004908bc9b6d07a50a3b3bb' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/l_rightblog.tpl',
      1 => 1714822355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663862c7d2eb79_77856589 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sticky_fix">
	<div class="sidebar">
		<?php if ($_smarty_tpl->tpl_vars['show']->value != 'Region' && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'blog','category','default') && $_smarty_tpl->tpl_vars['lstCategory']->value) {?>
		<div class="linkDestination">
			<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Categories');?>
</h2>
			<ul>
				<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCategory']->value) ? count($_loop) : max(0, (int) $_loop));
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array('total' => $__section_i_4_loop));
if ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['total'] !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']);
?>
				<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
				<li class="category-link <?php if ($_smarty_tpl->tpl_vars['cat_id']->value == $_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blogcat_id']) {?>active<?php }?>"><a data-abc="<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blogcat_id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsBlogCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blogcat_id'],$_smarty_tpl->tpl_vars['lstCategory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
				<?php
}
}
?>
			</ul>
		</div>
		<div class="mb30"></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['lstTourExtension']->value && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'blog','blog_tour_related','customize')) {?>
		<div class="tour_extension_box">
			<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Related');?>
</h2>
			<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTourExtension']->value) ? count($_loop) : max(0, (int) $_loop));
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array('total' => min(($__section_i_5_loop - 0), 3)));
if ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['total'] !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']);
?>
			<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['lstTourExtension']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
			<?php $_smarty_tpl->_assignInScope('oneTour', $_smarty_tpl->tpl_vars['clsTour']->value->getOne($_smarty_tpl->tpl_vars['tour_id']->value,'slug,title,image'));?>
			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tour_mobile',array("oneTour"=>$_smarty_tpl->tpl_vars['oneTour']->value,"tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value));?>

			<?php
}
}
?>
		</div>
		<div class="clearfix mb30"></div>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['lstHotelExtension']->value && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'blog','blog_hotel_related','customize')) {?>
		<div class="hotel_extension_box">
			<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel Related');?>
</h2>
			<?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstHotelExtension']->value) ? count($_loop) : max(0, (int) $_loop));
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array('total' => min(($__section_i_6_loop - 0), 5)));
if ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['total'] !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']);
?>
			<?php $_smarty_tpl->_assignInScope('hotel_id', $_smarty_tpl->tpl_vars['lstHotelExtension']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_id']);?>
			<?php $_smarty_tpl->_assignInScope('itemHotel', $_smarty_tpl->tpl_vars['clsHotel']->value->getOne($_smarty_tpl->tpl_vars['hotel_id']->value,'title,slug,star_id,image,price_avg'));?>
			<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['itemHotel']->value['title']);?>
			<?php $_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['lstHotelExtension']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_id'],$_smarty_tpl->tpl_vars['itemHotel']->value));?>
			<?php $_smarty_tpl->_assignInScope('getImageStar', $_smarty_tpl->tpl_vars['clsHotel']->value->getHotelStar($_smarty_tpl->tpl_vars['lstHotelExtension']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_id'],$_smarty_tpl->tpl_vars['itemHotel']->value));?>
			<div class="item itemHotel2 cruise-relate" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null) > 3) {?> style="display:none" <?php }?>>
				<div class="photo">
					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" data-data="<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" class="cl-img clickviewedHotel"> 
						<img class="img-responsive img100" src="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getImage($_smarty_tpl->tpl_vars['hotel_id']->value,263,175,$_smarty_tpl->tpl_vars['itemHotel']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
					</a> 
				</div>
				<div class="body">
				<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a> <img class="star" height="13" src="<?php echo $_smarty_tpl->tpl_vars['getImageStar']->value;?>
" alt="star" /></h3>
					<div class="price text-right">
						<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getPrice($_smarty_tpl->tpl_vars['hotel_id']->value,'',false,$_smarty_tpl->tpl_vars['itemHotel']->value);?>

					</div>
				</div>
			</div>
			<?php
}
}
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total'] : null) > 3 && (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
			<a href="javascript:void(0)" class="view-more-tour-relate">
				<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
 <i class="fa fa-angle-double-down" aria-hidden="true"></i>
			</a>
			<?php }?>
		</div>
		<div class="mb30"></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['lstPopularBlog']->value) {?>
		<div class="blogPopular">
			<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Popular Blogs');?>
</h2>
			<ul class="listBlog">
				<?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstPopularBlog']->value) ? count($_loop) : max(0, (int) $_loop));
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array('total' => $__section_i_7_loop));
if ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['total'] !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']);
?>
				<?php $_smarty_tpl->_assignInScope('titleBlog', $_smarty_tpl->tpl_vars['clsBlog']->value->getTitle($_smarty_tpl->tpl_vars['lstPopularBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstPopularBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['lstPopularBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstPopularBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['titleBlog']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titleBlog']->value;?>
</a></li>
				<?php
}
}
?>
			</ul>
		</div>
		<div class="mb30"></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'blog' && $_smarty_tpl->tpl_vars['act']->value == 'detail' && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'blog','tag','customize')) {?>
		<?php $_smarty_tpl->_assignInScope('listTagBlog', $_smarty_tpl->tpl_vars['clsBlog']->value->getListTag($_smarty_tpl->tpl_vars['blog_id']->value,$_smarty_tpl->tpl_vars['blogItem']->value));?>
		<?php if ($_smarty_tpl->tpl_vars['listTagBlog']->value != '') {?>
		<div class="blogTag mb20">
			<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tags');?>
</h2>
			<ul class="d2-blog-tags">
			<?php echo $_smarty_tpl->tpl_vars['listTagBlog']->value;?>

			</ul>
		</div>
		<div class="mb30"></div>
		<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show']->value != 'Default') {?>
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'blog' && $_smarty_tpl->tpl_vars['act']->value == 'default') {?>
		<?php if ($_smarty_tpl->tpl_vars['listGuideCat']->value || $_smarty_tpl->tpl_vars['listHotelPlace']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Country') {?>
				<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['oneItemCountry']->value));?>
				<?php $_smarty_tpl->_assignInScope('linkHotel', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,'Hotel',$_smarty_tpl->tpl_vars['oneItemCountry']->value));?>
				<?php $_smarty_tpl->_assignInScope('linkDestination', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,'',$_smarty_tpl->tpl_vars['oneItemCountry']->value));?>
			<?php } elseif ($_smarty_tpl->tpl_vars['show']->value == 'City') {?>
				<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['oneItemCity']->value));?>
				<?php $_smarty_tpl->_assignInScope('linkHotel', $_smarty_tpl->tpl_vars['clsCity']->value->getLink($_smarty_tpl->tpl_vars['city_id']->value,'Hotel',false,$_smarty_tpl->tpl_vars['oneItemCity']->value));?>
				<?php $_smarty_tpl->_assignInScope('linkDestination', $_smarty_tpl->tpl_vars['clsCity']->value->getLink($_smarty_tpl->tpl_vars['city_id']->value,'',false,$_smarty_tpl->tpl_vars['oneItemCity']->value));?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsRegion']->value->getTitle($_smarty_tpl->tpl_vars['region_id']->value,$_smarty_tpl->tpl_vars['oneItemRegion']->value));?>
				<?php $_smarty_tpl->_assignInScope('linkHotel', $_smarty_tpl->tpl_vars['clsRegion']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['region_id']->value,'Hotel',false,$_smarty_tpl->tpl_vars['oneItemRegion']->value));?>
				<?php $_smarty_tpl->_assignInScope('linkDestination', $_smarty_tpl->tpl_vars['clsRegion']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['region_id']->value,false,$_smarty_tpl->tpl_vars['oneItemRegion']->value));?>
			<?php }?>
		<div class="blogLink">
			<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>	
			<ul class="view-content">
				<?php if ($_smarty_tpl->tpl_vars['listHotelPlace']->value && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'hotel','default','default')) {?>
					<li><a class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'hotel' && $_smarty_tpl->tpl_vars['act']->value == 'place') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['linkHotel']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
</a></li>
				<?php }?>
				<li>
					<a class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'destination' && $_smarty_tpl->tpl_vars['act']->value == 'place') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['linkDestination']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
</a>
				</li>
				
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'guide','cat','default')) {?>
				<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Region') {?>
					<?php
$__section_i_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGuideCat']->value) ? count($_loop) : max(0, (int) $_loop));
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array('total' => $__section_i_8_loop));
if ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['total'] !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']);
?>
					<?php if ($_smarty_tpl->tpl_vars['clsGuide']->value->countGuideByRegion($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['region_id']->value,$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']) > 0) {?>
					<li <?php if ($_smarty_tpl->tpl_vars['guidecat_id']->value == $_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLinkRegion($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['region_id']->value,$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
</a></li>
					<?php }?>
					<?php
}
}
?>
				<?php } else { ?>
					<?php
$__section_i_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGuideCat']->value) ? count($_loop) : max(0, (int) $_loop));
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array('total' => $__section_i_9_loop));
if ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['total'] !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']);
?>
					<?php if ($_smarty_tpl->tpl_vars['clsGuide']->value->countGuideGlobal($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']) > 0) {?>
					<li class="views-row views-row-1 views-row-odd views-row-first mb08">
						<a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'],$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'],$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"><?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'],$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</a>
					</li>
					<?php }?>
					<?php
}
}
?>
				<?php }?>
				<?php }?>
			</ul>
			<div class="mb30"></div>
		</div>
		<?php }?>
		<?php }?>
		<?php }?>

		<div class="blogPopular" style="display:none">
			<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Popular Blogs');?>
</h2>
			<ul class="listBlog">
				<?php
$__section_i_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstPopularBlog']->value) ? count($_loop) : max(0, (int) $_loop));
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array('total' => $__section_i_10_loop));
if ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['total'] !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_section_i']->value['total']);
?>
				<?php $_smarty_tpl->_assignInScope('titlePopularBlog', $_smarty_tpl->tpl_vars['clsBlog']->value->getTitle($_smarty_tpl->tpl_vars['lstPopularBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstPopularBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsBlog']->value->getLink($_smarty_tpl->tpl_vars['lstPopularBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'],$_smarty_tpl->tpl_vars['lstPopularBlog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['titlePopularBlog']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titlePopularBlog']->value;?>
</a></li>
				<?php
}
}
?>
			</ul>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
$(function () {
	$(document).on("click",".view-more-tour-relate",function(){
		$(".box_blog_tour_relate:hidden").show();
		$(this).hide();	
	});
	$(document).on("click",".view-more-cruise-relate",function(){
		$(".cruise-relate:hidden").show();
		$(this).hide();	
	}); 
});
<?php echo '</script'; ?>
>
<?php }
}
