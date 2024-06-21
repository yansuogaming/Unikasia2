<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:10:17
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tour/place_inbound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613a669a42f82_67901971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '712122010ac703f32abc0f05060197d3925c271a' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tour/place_inbound.tpl',
      1 => 1710755960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613a669a42f82_67901971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['itemCity']->value['title']);?>
<section class="page_container">
   <div class="bg_banner">
	<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
	<img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getBanner($_smarty_tpl->tpl_vars['city_id']->value,480,320,$_smarty_tpl->tpl_vars['itemCity']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
	<?php } else { ?>
	<img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getBanner($_smarty_tpl->tpl_vars['city_id']->value,1920,400,$_smarty_tpl->tpl_vars['itemCity']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
	<?php }?>
   </div>
   <nav class="breadcrumb-main breadcrumb-<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
 bg_fff">
      <div class="container">
         <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
               <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trang chủ');?>
</span></a>
               <meta itemprop="position" content="1" />
            </li>
             <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
">
               <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Domestic tours');?>
</span></a>
               <meta itemprop="position" content="2" />
            </li>
			 <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				 <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
">
					 <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></a>
				 <meta itemprop="position" content="3" />
			 </li>
         </ol>
      </div>
   </nav>
   <main class="maincontent pd50_0">
      <section class="introPage">
         <div class="container">
            <div class="introbox mb30">
               <h1 class="title h2 text_center text_normal upcase"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <?php if ($_smarty_tpl->tpl_vars['clsCity']->value->getIntro($_smarty_tpl->tpl_vars['city_id']->value,'',false,$_smarty_tpl->tpl_vars['itemCity']->value)) {?>
               <div class="intro text_center">
				   <?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getIntro($_smarty_tpl->tpl_vars['city_id']->value,'',false,$_smarty_tpl->tpl_vars['itemCity']->value);?>

				   <div class="content"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getContent($_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['itemCity']->value);?>
</div>
				</div>
              
               <a class="seemore seeclick text_center" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tìm hiểu thêm');?>
" style="display: none"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tìm hiểu thêm');?>
</a>
               <a class="seeless seeclick text_center" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Thu gọn');?>
" style="display: none"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Thu gọn');?>
</a>
               <?php }?>
               
               <?php echo '<script'; ?>
>
				$('.introbox .intro').each(function(){
					var $_this = $(this);
					if($_this.height()>69){
						$_this.css("height","69px");
						$_this.closest(".introbox").find(".seemore").show();
					}else{
						$_this.closest(".introbox").find(".seeless").hide();
					}
				});
               <?php echo '</script'; ?>
>
               
            </div>
         </div>
      </section>
      <?php if ($_smarty_tpl->tpl_vars['lstGuide']->value && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'guide','default','default')) {?>
	  <section class="postTravelonPage">
		  <div class="container">
			  <h2 class="titlebox h2 bold upcase"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Những điều thú vị tại");?>
 <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
			  <div class="owl-carousel slide">
				  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstGuideCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					  <?php $_smarty_tpl->_assignInScope('titleCat', $_smarty_tpl->tpl_vars['clsGuideCat']->value->getTitle($_smarty_tpl->tpl_vars['lstGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'],$_smarty_tpl->tpl_vars['lstGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					  <?php $_smarty_tpl->_assignInScope('guidecat__id', $_smarty_tpl->tpl_vars['lstGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
					  <?php if ($_smarty_tpl->tpl_vars['clsGuideCat']->value->countNumberGuide2($_smarty_tpl->tpl_vars['guidecat__id']->value,$_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value) > '0') {?>
						  <div class="Item" guidecat_id="<?php echo $_smarty_tpl->tpl_vars['lstGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'];?>
"
							   style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getImage($_smarty_tpl->tpl_vars['lstGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'],625,320,$_smarty_tpl->tpl_vars['lstGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
')">
							  <div class="body">
								  <h3><a href="<?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getLink($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['city_id']->value,$_smarty_tpl->tpl_vars['guidecat__id']->value);?>
"
										 title="<?php echo $_smarty_tpl->tpl_vars['titleCat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titleCat']->value;?>
</a></h3>
								  <div class="intro"><?php echo $_smarty_tpl->tpl_vars['clsGuideCat']->value->getIntro($_smarty_tpl->tpl_vars['lstGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'],'',false,$_smarty_tpl->tpl_vars['lstGuideCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</div>
							  </div>
							  <div class="box-shadow"></div>
							  <?php if ($_smarty_tpl->tpl_vars['lstGuide']->value) {?>
								  <div class="tringle"></div>
							  <?php }?>
						  </div>
					  <?php }?>
				  <?php
}
}
?>
			  </div>
			  <?php if ($_smarty_tpl->tpl_vars['lstGuide']->value) {?>
				  <div class="ListGuide">
					  <div class="row">
						  <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstGuide']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							  <?php $_smarty_tpl->_assignInScope('linkGuide', $_smarty_tpl->tpl_vars['clsGuide']->value->getLink($_smarty_tpl->tpl_vars['lstGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id'],$_smarty_tpl->tpl_vars['lstGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
							  <?php $_smarty_tpl->_assignInScope('titleGuide', $_smarty_tpl->tpl_vars['clsGuide']->value->getTitle($_smarty_tpl->tpl_vars['lstGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id'],$_smarty_tpl->tpl_vars['lstGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
							  <div class="col-md-3 col-sm-6">
								  <div class="ItemGuide">
									  <a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['linkGuide']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['titleGuide']->value;?>
">
										  <img class="img100"
											   src="<?php echo $_smarty_tpl->tpl_vars['clsGuide']->value->getImage($_smarty_tpl->tpl_vars['lstGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id'],298,182);?>
"
											   alt="<?php echo $_smarty_tpl->tpl_vars['titleGuide']->value;?>
">
									  </a>
									  <div class="body">
										  <h3 class="title limit_2line">
											  <a href="<?php echo $_smarty_tpl->tpl_vars['linkGuide']->value;?>
"
												 title="<?php echo $_smarty_tpl->tpl_vars['titleGuide']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titleGuide']->value;?>
</a>
										  </h3>
										  <span class="regdate"><?php echo $_smarty_tpl->tpl_vars['clsGuide']->value->getPublishDate($_smarty_tpl->tpl_vars['lstGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guide_id'],$_smarty_tpl->tpl_vars['lstGuide']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</span>
										  									  </div>
								  </div>
							  </div>
						  <?php
}
}
?>
					  </div>
					  <?php if ($_smarty_tpl->tpl_vars['totalguide']->value > '4') {?>
						  <a class="seemore seeclick text_center ViewmoreGuide btn_main" href="javascript:void(0);"
							 title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Xem thêm');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Xem thêm');?>
</a>
						  <a class="seeless seeclick text_center ViewmoreGuide btn_main" href="javascript:void(0);"
							 title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ẩn bớt');?>
"
							 style="display: none"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ẩn bớt');?>
</a>
					  <?php }?>
				  </div>
			  <?php }?>
		  </div>
	  </section>
      <?php }?>
	   <?php if (($_smarty_tpl->tpl_vars['lstTour']->value && $_smarty_tpl->tpl_vars['action']->value == '') || $_smarty_tpl->tpl_vars['action']->value == 'search') {?>
       <section class="tourTravelonPage">
           <div class="container">
               <h2 class="titlebox h2 bold upcase"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("tour du lịch");?>
 <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
               <div class="contentListTravel">
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
                           <div class="listTourItem">
                               <div class="row">
                                   <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                       <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                           <?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['lstTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
                                           <?php $_smarty_tpl->_assignInScope('oneTour', $_smarty_tpl->tpl_vars['lstTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
                                           <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_item_tour_mobile',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value,"oneTour"=>$_smarty_tpl->tpl_vars['oneTour']->value));?>

                                       </div>
                                   <?php
}
}
?>
                               </div>
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
       <section class="regionTravelonPage">
           <div class="container">
               <h3 class=" h3 bold upcase text_center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("a-z tourism destinations in");?>
 <?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['country_id']->value);?>
</h3>
               <div class="destinationAZ">
                   <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                       <?php $_smarty_tpl->_assignInScope('lstCityRegion', $_smarty_tpl->tpl_vars['clsCity']->value->getListCityByRegion($_smarty_tpl->tpl_vars['lstRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id'],$_smarty_tpl->tpl_vars['city_id']->value));?>
                       <h4 class="titleRegion  bg_main">
                           <?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->getTitle($_smarty_tpl->tpl_vars['lstRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['region_id']);?>

                       </h4>
                       <div class="listCity">
                           <div class="row">
                               <?php
$__section_j_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstCityRegion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_4_total = $__section_j_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_4_total !== 0) {
for ($__section_j_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_4_iteration <= $__section_j_4_total; $__section_j_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
							   <?php $_smarty_tpl->_assignInScope('totalTourCity', $_smarty_tpl->tpl_vars['clsTour']->value->countTourByCity($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']));?>
							   <div class="col-md-2 col-sm-4 col-xs-6">
								   <h5 class="title">
									   <a  <?php echo $_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'];?>
 <?php if ($_smarty_tpl->tpl_vars['country_id']->value != '4') {?> href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLinkOutbound($_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id']);?>
" <?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getLink($_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],'',false,$_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>
 <?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>
">
										   <?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['city_id'],$_smarty_tpl->tpl_vars['lstCityRegion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>
 <?php if ($_smarty_tpl->tpl_vars['totalTourCity']->value) {?><span>(<?php echo $_smarty_tpl->tpl_vars['totalTourCity']->value;?>
)</span> <?php }?>
									   </a>
								   </h5>
							   </div>
                               <?php
}
}
?>
                           </div>
                       </div>
                   <?php
}
}
?>
               </div>
           </div>
       </section>
   </main>
</section>
<?php echo '<script'; ?>
 >
   var country_id ='<?php echo $_smarty_tpl->tpl_vars['country_id']->value;?>
';
   var city_id ='<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
'
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
   var owl = $('.owl-carousel').owlCarousel({
	   nav:true,
	   dots:false,
	   loop:false, 
	   margin:5,
	   responsiveClass:true,
	   responsive: {
		0: {
			items: 1,
			nav:false,
		},
		768: {
			items: 1
		},
		1000: {
			items: 3,
		}
	   }
   });
   owl.on('change.owl.carousel', function(el){
	   console.log(el);
	   var number = el.item.index;
       setTimeout(function(){
           $('.owl-item').removeClass('firstActiveItem');
           $('.owl-item').eq(number+1).addClass('firstActiveItem');
          
           }, 1000
       ); var guidecat_id= $(".owl-item.firstActiveItem .Item").attr('guidecat_id');
	   	loadlistGuideByCat(guidecat_id);
   });
	
    var total = $('.owl-carousel .owl-stage .owl-item.active').length;
	$('.owl-carousel .owl-stage .owl-item.active').each(function(index){ // nested class from activator class
		if (index === 0) {
			// this is the first one
			$(this).addClass('firstActiveItem'); // add class in first item

		}
	});
	
	// Hover Item //
	$(".owl-item").mouseenter(function(el){
		var id= $(this).attr('data-index');
	    $(".owl-item").removeClass('firstActiveItem');
        $(this).addClass('firstActiveItem');
	    var guidecat_id= $(".owl-item.firstActiveItem .Item").attr('guidecat_id');
	   	loadlistGuideByCat(guidecat_id);
	}); 
   function loadlistGuideByCat(guidecat_id){
	   $.ajax({  
		type:'POST',
		url:path_ajax_script+'/index.php?mod=tour&act=listGuide&lang='+LANG_ID, 
		data:{
			"cat_id":guidecat_id,
			"country_id":country_id,
			"city_id":city_id,
		},
		dataType:'html',
		success:function(html){
            $('.ListGuide').html( html );
		}
	   });
   }
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
$('.seemore').on('click',function () {
   var $this= $(this);
   $this.closest('.introbox').find('.intro').css('height','100%');
   $this.closest('.introbox').find('.seeless').show();
   $this.closest('.ListGuide').find('.row').css('height','100%');
   $this.closest('.ListGuide').find('.seeless').show();
   $this.hide();
});
$('.seeless').on('click',function () {
   var $this= $(this);
   $this.closest('.introbox').find('.intro').css('height','69px');
   $this.closest('.introbox').find('.seemore').show();
   $this.closest('.ListGuide').find('.row').removeAttr('style');
   $this.closest('.ListGuide').find('.seemore').show();
   $this.hide();
});
<?php echo '</script'; ?>
>
<?php }
}
