<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:42:58
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/guide/cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613ae1222ed59_09045204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8396739ceb581671b4c0baa68da6dc6f56d53448' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/guide/cat.tpl',
      1 => 1667388703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613ae1222ed59_09045204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('titleGuideCat', $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['guidecat_id']->value));?>
<div class="page_container">
	<div class="banner"> 
		<?php if ($_smarty_tpl->tpl_vars['guide2_id']->value != '') {?> 
		<a href="<?php echo $_smarty_tpl->tpl_vars['clsGuide2']->value->getBannerLink($_smarty_tpl->tpl_vars['guide2_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('in');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
">
		<img class="full-width height-auto" src="<?php echo $_smarty_tpl->tpl_vars['clsGuide2']->value->getBannerImage($_smarty_tpl->tpl_vars['guide2_id']->value,1920,500);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('in');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
" />
		</a>
		<?php } else { ?> 
		<a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getBannerLink($_smarty_tpl->tpl_vars['guidecat_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('in');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
">
		<img class="full-width height-auto" src="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getBannerImage($_smarty_tpl->tpl_vars['guidecat_id']->value,1920,500);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('in');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
"/>
		<?php }?>
	</div>
	<nav class="breadcrumb-main  breadcrumb-cruise bg-default breadcrumb-more bg_fff">
		<div class="container">
			<ol class="breadcrumb bg_fff hidden-xs mt0" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span>
					</a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLinkTour($_smarty_tpl->tpl_vars['city_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['city_id']->value);?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['city_id']->value);?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active"> 
					<a itemprop="item" href="javascript:Void();" title="<?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
"> 
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
</span> </a> 
					<meta itemprop="position" content="3" />
				</li>
			</ol>
		</div>
	</nav>
	<div id="contentPage" class="travelGuidePage bg_f7f7f7 pd40_0">
		<div class="container">
			<div class="row">
				<section class="col-lg-9 mb991_30 floatRight992">
					<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
					<h1 class="title32 color_333 mb20"><?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</h1>
					<?php } else { ?>
					<h1 class="title32 color_333 mb20"><?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
</h1>
					<?php }?>
					<?php $_smarty_tpl->_assignInScope('introGuideCat', $_smarty_tpl->tpl_vars['clsGuideCat']->value->getIntro($_smarty_tpl->tpl_vars['listGuideByCat']->value[0]['guidecat_id']));?>
					<?php $_smarty_tpl->_assignInScope('IntroGuideCat', $_smarty_tpl->tpl_vars['clsGuide2']->value->getIntro($_smarty_tpl->tpl_vars['guide2_id']->value));?>
					<?php $_smarty_tpl->_assignInScope('ContentGuideCat', $_smarty_tpl->tpl_vars['clsGuide2']->value->getContent($_smarty_tpl->tpl_vars['guide2_id']->value));?>
					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'GuideCat' && $_smarty_tpl->tpl_vars['introGuideCat']->value != '') {?>
					<div class="intro14_3 mb30"><?php echo $_smarty_tpl->tpl_vars['introGuideCat']->value;?>
</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['IntroGuideCat']->value != '') {?>
					<div class="intro14_3 mb20"><?php echo $_smarty_tpl->tpl_vars['IntroGuideCat']->value;?>
</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['ContentGuideCat']->value != '') {?>
					<div class="intro14_3 mb30"><?php echo $_smarty_tpl->tpl_vars['ContentGuideCat']->value;?>
</div>
					<?php }?>
					<div>
						<div class="loader"></div>
						<div class="search-results js-search-results" id="home-masonry-container">
							<div class="row"> 
								<?php $_smarty_tpl->_assignInScope('totalGuide', count($_smarty_tpl->tpl_vars['listGuide']->value));?>
								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGuide']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $__section_i_0_total);
?>
								<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsGuide']->value->getTitle($_smarty_tpl->tpl_vars['listGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id']));?>
								<?php $_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsGuide']->value->getLink($_smarty_tpl->tpl_vars['listGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id']));?>
								<article class="box col-xl-4 col-lg-6 col-sm-6 mb10" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null) > '12') {?> style="display:none"<?php }?>>
									<div class="guideItem">
										<div class="image">
											<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><img class="full-width" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsGuide']->value->getImage($_smarty_tpl->tpl_vars['listGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id'],513,342);?>
"></a> 
											<?php $_smarty_tpl->_assignInScope('city__id', $_smarty_tpl->tpl_vars['clsGuide']->value->getOneField('city_id',$_smarty_tpl->tpl_vars['listGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id']));?>
											<?php $_smarty_tpl->_assignInScope('country__id', $_smarty_tpl->tpl_vars['clsGuide']->value->getOneField('country_id',$_smarty_tpl->tpl_vars['listGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id']));?>
											<?php $_smarty_tpl->_assignInScope('title_city', $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['city__id']->value));?>
											<?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['country__id']->value));?>
											<div class="figure"><i class="fa fa-map-marker"></i><?php if ($_smarty_tpl->tpl_vars['city__id']->value > '0') {?> <a href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLink($_smarty_tpl->tpl_vars['city__id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_city']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_city']->value;?>
</a>, <?php }?> <a href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['country__id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
</a></div>
										</div>
										<h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h3>
									</div>
								</article>	 
								<?php
}
}
?>
							</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['totalGuide']->value > 12) {?>
						<div id="exploreWorldLoadMore">
							<div id="load_more_collections">
								<div class="loader"></div>
								<a href="javascript:void(0);" rel="nofollow" page="1" class="btn_orance_border show-loader" id="show-more"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('LOAD MORE COLLECTIONS');?>
</a>
							</div>
						</div>
						<?php }?> 
					</div>
				</section>
				<aside class="col-lg-3"> <?php if ($_smarty_tpl->tpl_vars['listGuideCat']->value || $_smarty_tpl->tpl_vars['listHotelPlace']->value || $_smarty_tpl->tpl_vars['listBlogPlace']->value) {?>
					<div class="destinationLink mt20">
						<h3 class="h3_24_Bold mb10"><?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</h3>
						<ul>
							<?php if ($_smarty_tpl->tpl_vars['listHotelPlace']->value && $_smarty_tpl->tpl_vars['_LANG_ID']->value != 'vn') {?>
							<?php if ($_smarty_tpl->tpl_vars['show']->value == 'City') {?>
							<li ><a class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'hotel' && $_smarty_tpl->tpl_vars['act']->value == 'place') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLink($_smarty_tpl->tpl_vars['city_id']->value,'Hotel');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
</a></li>
							<?php } elseif ($_smarty_tpl->tpl_vars['show']->value == 'Country') {?>
							<li ><a class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'hotel' && $_smarty_tpl->tpl_vars['act']->value == 'place') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,'Hotel');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
</a></li>
							<?php } else { ?>
							<li ><a class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'hotel' && $_smarty_tpl->tpl_vars['act']->value == 'place') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['region_id']->value,'Hotel');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
</a></li>
							<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listBlogPlace']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['show']->value == 'City') {?>
							<li ><a class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'blog' && $_smarty_tpl->tpl_vars['act']->value == 'default') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLink($_smarty_tpl->tpl_vars['city_id']->value,'Blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blogs');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blogs');?>
</a></li>
							<?php } elseif ($_smarty_tpl->tpl_vars['show']->value == 'Country') {?>
							<li ><a class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'blog' && $_smarty_tpl->tpl_vars['act']->value == 'default') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,'Blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blogs');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blogs');?>
</a></li>
							<?php } else { ?>
							<li ><a class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'blog' && $_smarty_tpl->tpl_vars['act']->value == 'default') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['region_id']->value,'Blog');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blogs');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blogs');?>
</a></li>
							<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Region') {?>
							<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGuideCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $__section_i_1_total);
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
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGuideCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_2_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $__section_i_2_total);
?>
							<?php if ($_smarty_tpl->tpl_vars['clsGuide']->value->countGuideGlobal($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']) > 0) {?>
							<li <?php if ($_smarty_tpl->tpl_vars['guidecat_id']->value == $_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['listGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
</a></li>
							<?php }?>
							<?php
}
}
?>
							<?php }?>
						</ul>
					</div>
					<?php }?>
				</aside>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['show']->value != 'GuideCat') {?>
	<div class="pd50_0 bg_fff AZDestinationGuide">
		<div class="container"> 
			<?php if ($_smarty_tpl->tpl_vars['lstRegionByCountry']->value) {?>
			<article class="destinationAZ">
				<h2 class="pane-title mb20 xxxxx"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('A-Z');?>
 <?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('of');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</h2>
				<div class="listDestinationByRegion"> 
				<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRegionByCountry']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_3_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $__section_i_3_total);
?>
				<?php $_smarty_tpl->_assignInScope('lstCityGuideCatRegion', $_smarty_tpl->tpl_vars['clsCity']->value->getListCityGuideCatByRegion($_smarty_tpl->tpl_vars['lstRegionByCountry']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id'],$_smarty_tpl->tpl_vars['guidecat_id']->value));?>
				<?php if ($_smarty_tpl->tpl_vars['lstCityGuideCatRegion']->value) {?>
				<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLinkRegion($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstRegionByCountry']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id'],$_smarty_tpl->tpl_vars['guidecat_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['lstRegionByCountry']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['lstRegionByCountry']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</a></h3>
				<ul class="CityRegionItem <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>cleafix<?php }?>"> 
				<?php
$__section_j_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCityGuideCatRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_4_total = $__section_j_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_4_total !== 0) {
for ($__section_j_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_4_iteration <= $__section_j_4_total; $__section_j_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
					<li class="col-md-2 col-sm-4 col-xs-6">
					<a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstCityGuideCatRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['guidecat_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityGuideCatRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']);?>
</a></li>
				<?php
}
}
?>
				</ul>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
				<?php if ($_smarty_tpl->tpl_vars['lstCityRegionOther']->value) {?>
				<h3 class="title"><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other City');?>
</span></h3>
				<ul class="CityRegionItem"> 
					<?php
$__section_k_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCityRegionOther']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_5_total = $__section_k_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_5_total !== 0) {
for ($__section_k_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_5_iteration <= $__section_k_5_total; $__section_k_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
					<li class="col-md-2 col-sm-4 col-xs-6">
					<a href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLink($_smarty_tpl->tpl_vars['lstCityRegionOther']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['city_id'],'Hotel');?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityRegionOther']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['city_id']);?>
</a></li>
					<?php
}
}
?> 
				</ul>
				<?php }?>
				<?php }?>
				<?php
}
}
?> 
				</div>
			</article>
			<?php } else { ?>
			<div class="destinationAZ"> 
				<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Region' && $_smarty_tpl->tpl_vars['letter']->value) {?>
				<h2 class="pane-title mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('A-Z');?>
 <?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('of');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</h2>
				<div class="listDestination"> 
				<?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['letter']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_6_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $__section_i_6_total);
?>
				<?php $_smarty_tpl->_assignInScope('lstCityAZ', $_smarty_tpl->tpl_vars['clsISO']->value->getItemByAlphabetCityGuide($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['region_id']->value,0,$_smarty_tpl->tpl_vars['guidecat_id']->value,$_smarty_tpl->tpl_vars['letter']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
				<?php if ($_smarty_tpl->tpl_vars['lstCityAZ']->value) {?>
				<ul class="masonry grid-of-blog" id="SiteBlogContainer">
					<h3 class="title"><span><?php echo $_smarty_tpl->tpl_vars['letter']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</span></h3>
					<?php
$__section_j_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCityAZ']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_7_total = $__section_j_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_7_total !== 0) {
for ($__section_j_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_7_iteration <= $__section_j_7_total; $__section_j_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['clsGuide']->value->countGuideByRegion($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['region_id']->value,$_smarty_tpl->tpl_vars['guidecat_id']->value) > 0) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstCityAZ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['guidecat_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityAZ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']);?>
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
				<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['show']->value == 'City') {?>
				<h2 class="pane-title mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('A-Z');?>
 <?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('of');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Destinations');?>
</h2>
				<?php } else { ?>
				<h2 class="pane-title mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('A-Z');?>
 <?php echo $_smarty_tpl->tpl_vars['titleGuideCat']->value;
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('of');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
 <?php echo $_smarty_tpl->tpl_vars['TD']->value;?>
</h2>
				<?php }?>
				<div class="listDestination"> <?php
$__section_i_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['letter']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_8_total = $__section_i_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_8_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_8_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $__section_i_8_total);
?>
				<?php $_smarty_tpl->_assignInScope('lstCityAZ', $_smarty_tpl->tpl_vars['clsISO']->value->getItemByAlphabetCityGuide($_smarty_tpl->tpl_vars['country_id']->value,0,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['guidecat_id']->value,$_smarty_tpl->tpl_vars['letter']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
				<?php if ($_smarty_tpl->tpl_vars['lstCityAZ']->value) {?>
				<ul class="masonry grid-of-blog" id="SiteBlogContainer">
					<h3 class="title"><span><?php echo $_smarty_tpl->tpl_vars['letter']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</span></h3>
					<?php
$__section_j_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCityAZ']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_9_total = $__section_j_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_9_total !== 0) {
for ($__section_j_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_9_iteration <= $__section_j_9_total; $__section_j_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstCityAZ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['guidecat_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityAZ']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']);?>
</a></li>
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
				<?php }?> 
				</div>
			</div>
			<?php }?> 
		</div>
	</div>
<?php }?> 
</div>
<?php echo '<script'; ?>
>
	var cat_id='<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
';
<?php echo '</script'; ?>
> 
 
<?php echo '<script'; ?>
>
$(function(){
	var $number_per_page = 12;
	var $page = 1;
	$page_aj = 0;
	var timer = '';
	$('#show-more').click(function(e) {
		var $totalRecord = $('#home-masonry-container .box').size();
		if($page_aj){
			$page = $page_aj + 1;
			$page_aj=0;	
		}
		else $page = $page + 1;
		e.preventDefault();
		var $this = $(this);
		clearTimeout(timer);
		$('.loader').show();
		timer = setTimeout(function(){
			var $start = ($page-1) * $number_per_page;
			var $end = $start + $number_per_page;

			for(var i = $start; i < $end; i++) {
				$('.box').eq(i).show();
			}

			$('.loader').hide();
			if($end>=$totalRecord)
				$('#show-more').hide();
		}, 500);
	});
});
<?php echo '</script'; ?>
> 
<?php }
}
