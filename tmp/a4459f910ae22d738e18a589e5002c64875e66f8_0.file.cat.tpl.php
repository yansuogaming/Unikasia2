<?php
/* Smarty version 3.1.38, created on 2024-05-06 10:11:23
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/tour/cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66384a5b71fda8_40549022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4459f910ae22d738e18a589e5002c64875e66f8' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/tour/cat.tpl',
      1 => 1714822365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66384a5b71fda8_40549022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title_country_cat', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['country_id']->value));?>
<div class="page_container">
	<nav class="breadcrumb-main breadcrumb-<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
 mb30 bg_fff">
		<div class="container">
			<ol class="breadcrumb hidden-xs bg_fff mt0" itemscope itemtype="https://schema.org/BreadcrumbList"> 
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
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel styles');?>
">
					   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel styles');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
			   <?php if ($_smarty_tpl->tpl_vars['show']->value == 'CatCountry') {?>
			   <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_country_cat']->value;?>
">
					   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_country_cat']->value;?>
</span></a>
					<meta itemprop="position" content="3" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
				  <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
">
					  <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
</span></a>
				   <meta itemprop="position" content="4" />
			   </li>
			   <?php } else { ?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
				  <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
">
					  <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
</span></a>
				   <meta itemprop="position" content="3" />
			   </li>
			   <?php }?>
			</ol>
		</div>
	</nav>
	<div id="ContentPage" class="maincontent pd50_0">
		<section class="introPage">
			<div class="container">
			<?php if ($_smarty_tpl->tpl_vars['show']->value == 'CatCountry') {?>
				<?php $_smarty_tpl->_assignInScope('contentMoreCatCountry', $_smarty_tpl->tpl_vars['clsCategory_Country']->value->getContent($_smarty_tpl->tpl_vars['category_country__id']->value,500,true,$_smarty_tpl->tpl_vars['catCountryItem']->value));?>
				<h1><?php echo $_smarty_tpl->tpl_vars['title_country_cat']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
</h1>
				<?php if ($_smarty_tpl->tpl_vars['contentMoreCatCountry']->value) {?>
				<div class="intro_cat mb30">
					<?php echo $_smarty_tpl->tpl_vars['contentMoreCatCountry']->value;?>

				</div>
				<?php }?>
			<?php } else { ?>
				<h1><?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
</h1>
				<?php $_smarty_tpl->_assignInScope('introMoreCat', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getIntroMore($_smarty_tpl->tpl_vars['cat_id']->value,400,true,$_smarty_tpl->tpl_vars['oneItem']->value));?>
				<?php if ($_smarty_tpl->tpl_vars['introMoreCat']->value) {?>
				<div class="intro_cat mb30">
					<?php echo $_smarty_tpl->tpl_vars['introMoreCat']->value;?>

				</div>
				<?php }?>
			<?php }?>
			</div>
		</section>
        <?php if ($_smarty_tpl->tpl_vars['listTour']->value || $_smarty_tpl->tpl_vars['action']->value == 'search') {?>
		<section class="contentPage padding50_0">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
                      	<div class="block991" style="display:none">
							<div class="tag-search">
								<div class="btn_open_modal btn_quick_search bg_main" data-bs-toggle="modal" data-bs-target="#filter_search" >
									<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Filter Trip');?>
</span> <i class="fa fa-sliders" aria-hidden="true"></i>
								</div>
							</div>
						</div> 
						<div class="modal fade" id="filter_search" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="filter_left">
										<div class="modal-header">
											<button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span></button> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>

										</div>
										<div class="modal-body">
											<div class="totalTour mb20">
											   <h2 class="totalTourpage bg_main h3"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Find');?>
 <?php echo $_smarty_tpl->tpl_vars['totalTour']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['totalTour']->value > 1) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tours');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');
}?></h2>
											</div>
											<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('filter_left_trip');?>

										</div>
									</div>
								</div>
							</div>
						</div>
                  	</div>
					<div class="col-lg-9">
						<div class="loader"></div>
                            <?php if ($_smarty_tpl->tpl_vars['show']->value == 'CatCountry') {?>
                            <?php $_smarty_tpl->_assignInScope('lstCountryCat', $_smarty_tpl->tpl_vars['clsCategory_Country']->value->getListCatCountry($_smarty_tpl->tpl_vars['country_id']->value));?>
								<div class="box_scroll">
									<div class="list_tour_cat">
										<?php
$__section_j_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCountryCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_0_total = $__section_j_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_0_total !== 0) {
for ($__section_j_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_0_iteration <= $__section_j_0_total; $__section_j_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('oneCategoryCountry', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getOne($_smarty_tpl->tpl_vars['lstCountryCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['cat_id'],'title,slug'));?>
											<?php $_smarty_tpl->_assignInScope('title_category_country', $_smarty_tpl->tpl_vars['oneCategoryCountry']->value['title']);?>
											<div class="item_tour_cat <?php if ($_smarty_tpl->tpl_vars['lstCountryCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['cat_id'] == $_smarty_tpl->tpl_vars['cat_id']->value) {?>active<?php }?>">
												<a href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLinkCatCountry($_smarty_tpl->tpl_vars['lstCountryCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['cat_id'],$_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['oneCategoryCountry']->value);?>
"
												   title="<?php echo $_smarty_tpl->tpl_vars['title_category_country']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_category_country']->value;?>

												</a>
											</div>
										<?php
}
}
?>
									</div>
								</div>
                            <?php } else { ?>
								<div class="box_scroll">
									<div class="list_tour_cat">
										<?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCatTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('title_category', $_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['title']);?>
											<div class="item_tour_cat <?php if ($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['tourcat_id'] == $_smarty_tpl->tpl_vars['cat_id']->value) {?>active<?php }?>">
												<a title="<?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['tourcat_id'],$_smarty_tpl->tpl_vars['lstCatTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>

												</a>
											</div>
										<?php
}
}
?>
									</div>
								</div>
                            <?php }?>
                        
							<div class="listTour listTourItem search-results js-search-results row">
								<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
								<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['listTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
								<?php $_smarty_tpl->_assignInScope('oneTour', $_smarty_tpl->tpl_vars['listTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tour_mobile',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value,"oneTour"=>$_smarty_tpl->tpl_vars['oneTour']->value));?>

								</div>
								<?php
}
}
?>                        
							</div>
							<?php if ($_smarty_tpl->tpl_vars['totalPage']->value > '1') {?>
							<div class="clearfix"></div>
							<div class="pagination pager">
								<?php echo $_smarty_tpl->tpl_vars['page_view']->value;?>

							</div>
							<?php }?>         
						</div>
					</div>
				</div>
			</div>
		</section>
        <?php }?>
	</div>
</div>


	<?php echo '<script'; ?>
>
		$(document).ready(function (){
			var container = $(".list_tour_cat .item_tour_cat.active");
			$('.box_scroll').animate({
				scrollLeft: container.position().left - 10
			});
		});
	<?php echo '</script'; ?>
>

<?php }
}
