<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:37:18
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139eae603855_36545224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2844ca837503eb3a170ad40b9728ee90a5f0cee' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/detail.tpl',
      1 => 1711594225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139eae603855_36545224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('title_cruise', $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('link_cruise', $_smarty_tpl->tpl_vars['clsCruise']->value->getLink($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));?>

<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {
$_smarty_tpl->_assignInScope('ratingValue', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['cruise_id']->value,'cruise'));
$_smarty_tpl->_assignInScope('bestRating', $_smarty_tpl->tpl_vars['clsReviews']->value->getBestRate($_smarty_tpl->tpl_vars['cruise_id']->value,'cruise'));
$_smarty_tpl->_assignInScope('ratingCount', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['cruise_id']->value,'cruise'));
} else {
$_smarty_tpl->_assignInScope('ratingValue', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['cruise_id']->value,'cruise'));
$_smarty_tpl->_assignInScope('bestRating', $_smarty_tpl->tpl_vars['clsReviews']->value->getBestRate($_smarty_tpl->tpl_vars['cruise_id']->value,'cruise'));
$_smarty_tpl->_assignInScope('ratingCount', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['cruise_id']->value,'cruise'));
}
$_smarty_tpl->_assignInScope('textRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getTextRateAvg($_smarty_tpl->tpl_vars['cruise_id']->value,'cruise',false));
$_smarty_tpl->_assignInScope('getAbout', $_smarty_tpl->tpl_vars['clsCruise']->value->getAbout($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('itemCruiseCat', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getOne($_smarty_tpl->tpl_vars['cruise_cat_id']->value,' title,slug'));
$_smarty_tpl->_assignInScope('title_cat', $_smarty_tpl->tpl_vars['itemCruiseCat']->value['title']);
$_smarty_tpl->_assignInScope('link_cat', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getLink($_smarty_tpl->tpl_vars['cruise_cat_id']->value,$_smarty_tpl->tpl_vars['itemCruiseCat']->value));
$_smarty_tpl->_assignInScope('CruiseFacilities', $_smarty_tpl->tpl_vars['clsCruise']->value->getCruiseFa($_smarty_tpl->tpl_vars['cruise_id']->value,'CruiseFacilities',$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('CruiseServices', $_smarty_tpl->tpl_vars['clsCruise']->value->getCruiseFa($_smarty_tpl->tpl_vars['cruise_id']->value,'CruiseServices',$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('CruiseFaActivities', $_smarty_tpl->tpl_vars['clsCruise']->value->getCruiseFa($_smarty_tpl->tpl_vars['cruise_id']->value,'CruiseFaActivities',$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('Inclusion', $_smarty_tpl->tpl_vars['clsCruise']->value->getInclusion($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('Exclusion', $_smarty_tpl->tpl_vars['clsCruise']->value->getExclusion($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('CruisePolicy', $_smarty_tpl->tpl_vars['clsCruise']->value->getCruisePolicy($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('BookingPolicy', $_smarty_tpl->tpl_vars['clsCruise']->value->getCruiseBookingPolicy($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('getCruiseChildPolicy', $_smarty_tpl->tpl_vars['clsCruise']->value->getCruiseChildPolicy($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));?> 

<?php if ($_smarty_tpl->tpl_vars['show']->value == 'Itinerary') {?>
	<?php $_smarty_tpl->_assignInScope('table_map_id', $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value);?>
	<?php $_smarty_tpl->_assignInScope('checkPriceCruise', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getLTripPriceItinerary($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value,$_smarty_tpl->tpl_vars['now_month']->value,'Value'));?>
	<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getAllCityAround($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('table_map_id', $_smarty_tpl->tpl_vars['cruise_id']->value);?>
	<?php $_smarty_tpl->_assignInScope('checkPriceCruise', $_smarty_tpl->tpl_vars['clsCruise']->value->getLTripPrice($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['now_month']->value,'Value'));?>
	<?php $_smarty_tpl->_assignInScope('address', (($_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure Port')).(': ')).($_smarty_tpl->tpl_vars['clsCruise']->value->getDeparturePort($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value)));
}
$_smarty_tpl->_assignInScope('start_from', $_smarty_tpl->tpl_vars['clsCruise']->value->getStartCityAround($_smarty_tpl->tpl_vars['cruise_id']->value,0,0));
$_smarty_tpl->_assignInScope('destination', $_smarty_tpl->tpl_vars['clsCruise']->value->getLCityAround2($_smarty_tpl->tpl_vars['cruise_id']->value,0,0,' - '));?>
<div class="page_container bg_fff">
	<nav class="breadcrumb-main breadcrumb_page mb0 hidden-xs">
        <div class="container">
			<ol class="breadcrumb mt0" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<?php $_smarty_tpl->_assignInScope('position', 2);?>
				<?php $_smarty_tpl->_assignInScope('arr_parent', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getListParentLevel($_smarty_tpl->tpl_vars['cruise_cat_id']->value));?>
				<?php if ($_smarty_tpl->tpl_vars['arr_parent']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_parent']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('oneCatParent', $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getOne($_smarty_tpl->tpl_vars['item']->value,'title,slug'));?>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getLink($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['oneCatParent']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['oneCatParent']->value['title'];?>
">
								<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['oneCatParent']->value['title'];?>
</span></a>
							<meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
" />
						</li>
						<?php echo smarty_function_math(array('equation'=>"x+1",'x'=>$_smarty_tpl->tpl_vars['position']->value,'assign'=>"position"),$_smarty_tpl);?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['link_cat']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
</span>  
					</a>
					<meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
">
						<span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
</span>  
					</a>
					<meta itemprop="position" content="<?php echo smarty_function_math(array('equation'=>"x+1",'x'=>$_smarty_tpl->tpl_vars['position']->value),$_smarty_tpl);?>
" />
				</li>
				
			</ol>
		</div>
	</nav><!--end breadcrumb-main-->
	<div id="content" class="pageCruiseDetail">
		<section class="section_image">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="big_image">
							<img class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getImage($_smarty_tpl->tpl_vars['cruise_id']->value,733,486,$_smarty_tpl->tpl_vars['oneTable']->value);?>
" width="733" height="486"/>
							<p class="view_all" data-fancybox="gallery" href="<?php echo $_smarty_tpl->tpl_vars['oneTable']->value['image'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View All');?>

							<img src="<?php echo $_smarty_tpl->tpl_vars['oneTable']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
" hidden>
							</p>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="d-flex flex-wrap box_image_left">
							<?php if ($_smarty_tpl->tpl_vars['lstVideoCruise']->value) {?>
                            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstVideoCruise']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <?php if ($_smarty_tpl->tpl_vars['lstVideoCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url'] != '') {?>
                                    <div class="image_small" data-fancybox="gallery" href="<?php echo $_smarty_tpl->tpl_vars['lstVideoCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url'];?>
" hidden>
                                        <img class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['clsCruiseVideo']->value->getTitle($_smarty_tpl->tpl_vars['lstVideoCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_video_id'],$_smarty_tpl->tpl_vars['lstVideoCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseVideo']->value->getImage($_smarty_tpl->tpl_vars['lstVideoCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_video_id'],264,238);?>
" width="264" height="238"/>
                                    </div>
                                <?php }?>
                            <?php
}
}
?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['lstImage']->value[0]) {?>
                            <div class="image_medium" data-fancybox="gallery" href="<?php echo $_smarty_tpl->tpl_vars['lstImage']->value[0]['image'];?>
">
                                <img class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['clsCruiseImage']->value->getTitle($_smarty_tpl->tpl_vars['lstImage']->value[0]['cruise_image_id']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[0]['cruise_image_id'],537,238);?>
" width="537" height="238"/>
                            </div>
							<?php }?>
							<?php if (count($_smarty_tpl->tpl_vars['lstImage']->value) > 1) {?>
                            <div class="box_image_small">
                                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstImage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_start = min(1, $__section_i_1_loop);
$__section_i_1_total = min(($__section_i_1_loop - $__section_i_1_start), $__section_i_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_1_start; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <div class="image_small" data-fancybox="gallery" href="<?php echo $_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) > 2) {?>hidden<?php }?>>
                                    <img class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['clsCruiseImage']->value->getTitle($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_image_id']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_image_id'],264,238);?>
" width="264" height="238"/>
                                </div>
                                <?php
}
}
?>
                            </div>							
							<?php }?>
						</div>						
					</div>
				</div>
			</div>
		</section>
		<div class="box_content_cruise">
			<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>				
            <div class="box_form_contact box_price_detail">
                <?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getLTripPrice1($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['now_month']->value,'');?>

                <form action="" method="post">
                    <input type="hidden" name="cruise_id" value="<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
">
                    <input type="hidden" name="ContactCruise" value="ContactCruise">			
                    <button class="btn_contact" type="submit"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</button>
                </form>	
            </div>
					
			<?php }?>
			<div class="container">
				<div class="box_info_top">
					<div class="box_info_top_left">
						<a href="<?php echo $_smarty_tpl->tpl_vars['link_cat']->value;?>
" class="cruise_cat" title="<?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_cat']->value;?>
</a>
						<div class="box_txt_reviews">
							<span class="rate_cruise"><?php echo $_smarty_tpl->tpl_vars['ratingValue']->value;?>
/5 - <?php echo $_smarty_tpl->tpl_vars['textRateAvg']->value;?>
</span>
							<span class="review_cruise"><?php echo $_smarty_tpl->tpl_vars['ratingCount']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</span>
						</div>						
						<?php if ($_smarty_tpl->tpl_vars['oneTable']->value['cruise_code'] != '') {?><span class="item_cruise_code"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Code');?>
: <span class="cruise_code"><?php echo $_smarty_tpl->tpl_vars['oneTable']->value['cruise_code'];?>
</span></span><?php }?>
					</div>
					<div class="box_share">
						<button class="share_socical collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#share_box" aria-expanded="false" aria-controls="share_box"></button>
						<div class="share_box collapse" id="share_box">
							<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.sharer.js?v=<?php echo $_smarty_tpl->tpl_vars['up_version']->value;?>
"><?php echo '</script'; ?>
>
							<?php $_smarty_tpl->_assignInScope('link_share', $_smarty_tpl->tpl_vars['curl']->value);?>
							<?php $_smarty_tpl->_assignInScope('title_share', $_smarty_tpl->tpl_vars['title_cat']->value);?>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_share',array("link_share"=>$_smarty_tpl->tpl_vars['link_share']->value,"title_share"=>$_smarty_tpl->tpl_vars['title_share']->value));?>

						</div>
					</div>
				</div>
				<h1 class="title_cruise"><?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getStarNew($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value);?>
</h1> 
				<div id="tabsk" class="box__menu d-flex justify-content-between align-items-center tabskTour">
					<ul class="clienttabs list_style_none d-flex">
						<?php if ($_smarty_tpl->tpl_vars['getAbout']->value) {?><li><a id="overview--link" href="javascript:void(0);" class="current" data="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Introduction');?>
</a></li><?php }?>					
						<?php if ($_smarty_tpl->tpl_vars['lstItineraryCruise']->value) {?><li><a id="itinerary--link" href="javascript:void(0);" data="2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Schedule');?>
</a></li><?php }?>	
						<li><a id="notes--link" href="javascript:void(0);" data="2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Things to know');?>
</a></li>							
						<li><a id="review--link" href="javascript:void(0);" data="3"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews, Q&amp;A');?>
</a></li>
					</ul>
					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
					<div class="box_form_contact box_price_detail">
						<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getLTripPrice1($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['now_month']->value,'');?>

						<form action="" method="post">
							<input type="hidden" name="cruise_id" value="<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
">
							<input type="hidden" name="ContactCruise" value="ContactCruise">			
							<button class="btn_contact" type="submit"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</button>
						</form>		
					</div>		
					<?php }?>
				</div>
				<div class="list_tab">
					<section id="overview" class="overview_box section_box">
						<h2 class="title_cruise_box_detail"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About Cruise');?>
</h2>
						<div class="row">
							<div class="col-lg-4">
								<div class="box_info_cruise">
									<?php if ($_smarty_tpl->tpl_vars['oneTable']->value['build']) {?>
									<div class="item_info_cruise item_info_cruise_build">
										<label for="" class="lbl_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Build');?>
</label>
										<span class="value_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['oneTable']->value['build'];?>
</span>
									</div>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['oneTable']->value['material']) {?>
									<div class="item_info_cruise item_info_cruise_material">
										<label for="" class="lbl_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Material');?>
</label>
										<span class="value_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getTitle($_smarty_tpl->tpl_vars['oneTable']->value['material']);?>
</span>
									</div>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['oneTable']->value['total_cabin']) {?>
									<div class="item_info_cruise item_info_cruise_total_cabin">
										<label for="" class="lbl_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
</label>
										<span class="value_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['oneTable']->value['total_cabin'];?>
</span>
									</div>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['oneTable']->value['departure_port']) {?>
									<div class="item_info_cruise item_info_cruise_start">
										<label for="" class="lbl_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure Port');?>
</label>
										<span class="value_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['oneTable']->value['departure_port'];?>
</span>
									</div>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['destination']->value) {?>
									<div class="item_info_cruise item_destination_cruise">
										<label for="" class="lbl_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destinations');?>
</label>
										<span class="value_item_info_cruise"><?php echo $_smarty_tpl->tpl_vars['destination']->value;?>
</span>
									</div>
									<?php }?>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['getAbout']->value) {?>
								<div class="col-lg-8">
									<div class="intro_about">
										<?php echo $_smarty_tpl->tpl_vars['getAbout']->value;?>

									</div>
								</div>
							<?php }?>
						</div>
					</section>
					<?php if ($_smarty_tpl->tpl_vars['lstItineraryCruise']->value) {?>
                    <section id="itinerary" class="itinerary_box section_box">
                        <h2 class="title_cruise_box_detail"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Schedule');?>
</h2>
                        <div class="wapper_itinerary">
                            <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstItineraryCruise']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <?php $_smarty_tpl->_assignInScope('_cruise_itinerary_id', $_smarty_tpl->tpl_vars['lstItineraryCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']);?>
                                <?php $_smarty_tpl->_assignInScope('lstDayItinerary', $_smarty_tpl->tpl_vars['clsCruiseItineraryDay']->value->getAll("is_trash=0 and cruise_itinerary_id='".((string)$_smarty_tpl->tpl_vars['_cruise_itinerary_id']->value)."' order by day ASC"));?>
                                <?php $_smarty_tpl->_assignInScope('number_day', $_smarty_tpl->tpl_vars['lstItineraryCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_day']);?>
                                <?php $_smarty_tpl->_assignInScope('des_itinerary', $_smarty_tpl->tpl_vars['clsCruiseDestination']->value->getDesIti($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['_cruise_itinerary_id']->value));?>
                                <?php $_smarty_tpl->_assignInScope('meal_itinerary', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getListMealItineraryDay($_smarty_tpl->tpl_vars['lstItineraryCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']));?>
                                <?php if ($_smarty_tpl->tpl_vars['lstDayItinerary']->value) {?>
                                    <div class="item-itinerary"> 
                                        <div class="item_header_itinerary d-flex justify-content-between align-items-center <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>collapsed<?php }?>" <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>data-bs-toggle="collapse" href="#collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
"<?php }?>>
                                            <div class="box_title_iti">
                                                <div class="box_day">
                                                    <span class="txt_day"><?php echo $_smarty_tpl->tpl_vars['number_day']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('days');?>

                                                </div>
                                                <div class="title_iti">
                                                    <h3 class="title_itineraty"><?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lstItineraryCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_day'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('days');?>
 <?php if ($_smarty_tpl->tpl_vars['meal_itinerary']->value) {?>(<?php echo $_smarty_tpl->tpl_vars['meal_itinerary']->value;?>
)<?php }?></h3>
                                                    <?php if ($_smarty_tpl->tpl_vars['des_itinerary']->value) {?><p class="destination_iti"><?php echo $_smarty_tpl->tpl_vars['des_itinerary']->value;?>
</p><?php }?>
                                                </div>
                                            </div>
                                            <span class="show_more collapsed <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?> data-bs-toggle="collapse" href="#collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" <?php }?>><?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?><i class="fa fa-angle-down" aria-hidden="true"></i><?php } else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Show more');
}?></span>
                                        </div>
                                        <div id="collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" class="item_body collapse" data-bs-parent="#accordion">
                                            <?php
$__section_k_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number_day']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_3_total = $__section_k_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_3_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] <= $__section_k_3_total; $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                                                <?php $_smarty_tpl->_assignInScope('lst_transport_id', $_smarty_tpl->tpl_vars['clsCruiseItineraryDay']->value->getOneField("transport",$_smarty_tpl->tpl_vars['lstDayItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['cruise_itinerary_day_id']));?>
                                                <?php $_smarty_tpl->_assignInScope('lstItineraryTransport', $_smarty_tpl->tpl_vars['clsTransport']->value->getAll("is_trash=0 and is_online=1 and transport_id in (".((string)$_smarty_tpl->tpl_vars['lst_transport_id']->value).") order by order_no ASC"));?>
                                                <div class="item_day_itinerary">
                                                    <div class="item_header_day collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);
echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null);?>
">
                                                        <span class="title_day"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Day');?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['iteration'] : null);?>
: <?php echo $_smarty_tpl->tpl_vars['clsCruiseItineraryDay']->value->getTitle($_smarty_tpl->tpl_vars['lstDayItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['cruise_itinerary_day_id']);?>
</span>
                                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                    </div>
                                                    <div id="collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);
echo (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null);?>
" class="body_item_day_itinerary collapse tinymce_Content">
                                                        <?php if ($_smarty_tpl->tpl_vars['clsCruiseItineraryDay']->value->checkShowImage($_smarty_tpl->tpl_vars['lstDayItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['cruise_itinerary_day_id'])) {?>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-5 mb15_767">
                                                                    <img class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseItineraryDay']->value->getImage($_smarty_tpl->tpl_vars['lstDayItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['cruise_itinerary_day_id'],384,256);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsCruiseItineraryDay']->value->getTitle($_smarty_tpl->tpl_vars['lstDayItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['cruise_itinerary_day_id']);?>
" width="384" height="256"/>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7">
                                                                    <?php echo $_smarty_tpl->tpl_vars['clsCruiseItineraryDay']->value->getContent($_smarty_tpl->tpl_vars['lstDayItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['cruise_itinerary_day_id']);?>
 
                                                                </div>
                                                            </div>
                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['clsCruiseItineraryDay']->value->getContent($_smarty_tpl->tpl_vars['lstDayItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['cruise_itinerary_day_id']);?>
 
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            <?php
}
}
?>
                                        </div>
                                    </div>	
                                <?php }?>
                            <?php
}
}
?>
                        </div>
                    </section>	
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['oneTable']->value['file_programme'] != '') {?>
                    <div class="box_download_file d-flex flex-wrap align-items-center justify-content-between">
                        <div class="box_download_file_left">
                            <h3 class="title_download_file"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Want to read it later?');?>
</h3>
                            <p class="text_download_file"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Download the PDF document of this tour and start planning your tour offline');?>
</p>
                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['oneTable']->value['file_programme'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Download');?>
" class="btn_download_file" download><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Download');?>
</a>
                    </div>
					<?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('filter_cabin_cruise');?>

					<section id="notes" class="notes_box section_box">
						<h2 class="title_cruise_box_detail"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Things to know');?>
</h2>
						<div class="box_important_notes">
							<div class="nav nav-pills <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>owl-carousel<?php } else { ?> flex-column <?php }?>" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<?php if ($_smarty_tpl->tpl_vars['CruiseFacilities']->value || $_smarty_tpl->tpl_vars['CruiseServices']->value || $_smarty_tpl->tpl_vars['CruiseFaActivities']->value) {?>
									<button class="nav-link <?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {?>active<?php }?>" id="v-pills-facilities-tab" data-bs-toggle="pill" data-bs-target="#v-pills-facilities" type="button" role="tab" aria-controls="v-pills-facilities" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Facilities');?>
</button>
									<?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {
$_smarty_tpl->_assignInScope('checkActive', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Inclusion']->value) {?>
									<button class="nav-link <?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {?>active<?php }?>" id="v-pills-Inclusion-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Inclusion" type="button" role="tab" aria-controls="v-pills-Inclusion" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Included');?>
</button>
									<?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {
$_smarty_tpl->_assignInScope('checkActive', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Exclusion']->value) {?>
									<button class="nav-link <?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {?>active<?php }?>" id="v-pills-Exclusion-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Exclusion" type="button" role="tab" aria-controls="v-pills-Exclusion" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Excluded');?>
</button>
									<?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {
$_smarty_tpl->_assignInScope('checkActive', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['CruisePolicy']->value) {?>
									<button class="nav-link <?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {?>active<?php }?>" id="v-pills-CruisePolicy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-CruisePolicy" type="button" role="tab" aria-controls="v-pills-CruisePolicy" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Cruise Policy');?>
</button>
									<?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {
$_smarty_tpl->_assignInScope('checkActive', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['BookingPolicy']->value) {?>
									<button class="nav-link <?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {?>active<?php }?>" id="v-pills-BookingPolicy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-BookingPolicy" type="button" role="tab" aria-controls="v-pills-BookingPolicy" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Policy');?>
</button>
									<?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {
$_smarty_tpl->_assignInScope('checkActive', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['getCruiseChildPolicy']->value) {?>
									<button class="nav-link <?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {?>active<?php }?>" id="v-pills-ChildPolicy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ChildPolicy" type="button" role="tab" aria-controls="v-pills-ChildPolicy" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child Policy');?>
</button>
									<?php if (!$_smarty_tpl->tpl_vars['checkActive']->value) {
$_smarty_tpl->_assignInScope('checkActive', 1);
}?>
								<?php }?>
							</div>
							<div class="tab-content" id="v-pills-tabContent">
								<?php if ($_smarty_tpl->tpl_vars['CruiseFacilities']->value || $_smarty_tpl->tpl_vars['CruiseServices']->value || $_smarty_tpl->tpl_vars['CruiseFaActivities']->value) {?>
									<div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {?>show active<?php }?>" id="v-pills-facilities" role="tabpanel" aria-labelledby="v-pills-facilities-tab">
										<?php if ($_smarty_tpl->tpl_vars['CruiseFacilities']->value) {?>
										<div class="box_cruise_facilities">
											<label for="" class="lbl_title_facilities"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Facilities');?>
</label>
											<div class="row">
												<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CruiseFacilities']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<div class="col-md-4">
														<div class="item_facilities">
															<?php if ($_smarty_tpl->tpl_vars['CruiseFacilities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'] != '') {?>
																<img src="<?php echo $_smarty_tpl->tpl_vars['CruiseFacilities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" width="20" height="20" alt="<?php echo $_smarty_tpl->tpl_vars['CruiseFacilities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" class="icon_facilities">
															<?php }?>
															<span class="lbl_item_facilities"><?php echo $_smarty_tpl->tpl_vars['CruiseFacilities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</span>
														</div>
													</div>
												<?php
}
}
?>
											</div>
											
										</div>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['CruiseServices']->value) {?>
										<div class="box_cruise_facilities">
											<label for="" class="lbl_title_facilities"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Services');?>
</label>
											<div class="row">
												<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CruiseServices']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<div class="col-md-4">
														<div class="item_facilities">
															<?php if ($_smarty_tpl->tpl_vars['CruiseServices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'] != '') {?>
																<img src="<?php echo $_smarty_tpl->tpl_vars['CruiseServices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" width="20" height="20" alt="<?php echo $_smarty_tpl->tpl_vars['CruiseServices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" class="icon_facilities">
															<?php }?>
															<span class="lbl_item_facilities"><?php echo $_smarty_tpl->tpl_vars['CruiseServices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</span>
														</div>
													</div>
												<?php
}
}
?>
											</div>
										</div>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['CruiseFaActivities']->value) {?>
										<div class="box_cruise_facilities">
											<label for="" class="lbl_title_facilities"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Activities on Board');?>
</label>
											<div class="row">
												<?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['CruiseFaActivities']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                <div class="col-md-4">
                                                    <div class="item_facilities">
                                                        <?php if ($_smarty_tpl->tpl_vars['CruiseFaActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'] != '') {?>
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['CruiseFaActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" width="20" height="20" alt="<?php echo $_smarty_tpl->tpl_vars['CruiseFaActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" class="icon_facilities">
                                                        <?php }?>
                                                        <span class="lbl_item_facilities"><?php echo $_smarty_tpl->tpl_vars['CruiseFaActivities']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</span>
                                                    </div>
                                                </div>
												<?php
}
}
?>
											</div>
										</div>
										<?php }?>
									</div>
									<?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {
$_smarty_tpl->_assignInScope('checkActiveContent', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Inclusion']->value) {?>
									<div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {?>show active<?php }?>" id="v-pills-Inclusion" role="tabpanel" aria-labelledby="v-pills-Inclusion-tab"><?php echo $_smarty_tpl->tpl_vars['Inclusion']->value;?>
</div>
									<?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {
$_smarty_tpl->_assignInScope('checkActiveContent', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Exclusion']->value) {?>
									<div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {?>show active<?php }?>" id="v-pills-Exclusion" role="tabpanel" aria-labelledby="v-pills-Exclusion-tab"><?php echo $_smarty_tpl->tpl_vars['Exclusion']->value;?>
</div>
									<?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {
$_smarty_tpl->_assignInScope('checkActiveContent', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['CruisePolicy']->value) {?>
									<div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {?>show active<?php }?>" id="v-pills-CruisePolicy" role="tabpanel" aria-labelledby="v-pills-CruisePolicy-tab"><?php echo $_smarty_tpl->tpl_vars['CruisePolicy']->value;?>
</div>
									<?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {
$_smarty_tpl->_assignInScope('checkActiveContent', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['BookingPolicy']->value) {?>
									<div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {?>show active<?php }?>" id="v-pills-BookingPolicy" role="tabpanel" aria-labelledby="v-pills-BookingPolicy-tab"><?php echo $_smarty_tpl->tpl_vars['BookingPolicy']->value;?>
</div>
									<?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {
$_smarty_tpl->_assignInScope('checkActiveContent', 1);
}?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['getCruiseChildPolicy']->value) {?>
									<div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {?>show active<?php }?>" id="v-pills-ChildPolicy" role="tabpanel" aria-labelledby="v-pills-ChildPolicy-tab"><?php echo $_smarty_tpl->tpl_vars['getCruiseChildPolicy']->value;?>
</div>
									<?php if (!$_smarty_tpl->tpl_vars['checkActiveContent']->value) {
$_smarty_tpl->_assignInScope('checkActiveContent', 1);
}?>
								<?php }?>
							</div>
						</div>
					</section>
					<section class="reviews_box section_box" id="review">
						<h2 class="title_cruise_box_detail"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customer reviews');?>
</h2>
						<div class="row align-items-center">
							<div class="col-lg-3">
								<div class="box_score">
									<div class="score_number"><?php echo $_smarty_tpl->tpl_vars['ratingValue']->value;?>
</div>
									<div class="score_text">
										<p class="txt_score"><?php echo $_smarty_tpl->tpl_vars['textRateAvg']->value;?>
</p>
										<p class="number_review"><?php echo $_smarty_tpl->tpl_vars['ratingCount']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
 <a class="view_all_review btn_write_review btn_write_review_login" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="box_rate_score">
									<?php if ($_smarty_tpl->tpl_vars['lstReviewCruise']->value['cruise_quality']) {?>
										<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewCruise']->value['cruise_quality'],'assign'=>'cruise_quality'),$_smarty_tpl);?>

									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('cruise_quality', 0);?>
									<?php }?>
									<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise quality');?>
</label>
									<div class="d-flex flex-wrap justify-content-between align-items-center">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['cruise_quality']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewCruise']->value['cruise_quality'];?>
%"></div>
										</div>
										<span><?php echo $_smarty_tpl->tpl_vars['cruise_quality']->value;?>
</span>
									</div>
								</div>
								<div class="box_rate_score">
									<?php if ($_smarty_tpl->tpl_vars['lstReviewCruise']->value['staff_quality']) {?>
										<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewCruise']->value['staff_quality'],'assign'=>'staff_quality'),$_smarty_tpl);?>

									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('staff_quality', 0);?>
									<?php }?>
									<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Staff quality');?>
</label>
									<div class="d-flex flex-wrap justify-content-between align-items-center">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['staff_quality']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewCruise']->value['staff_quality'];?>
%"></div>
										</div>
										<span><?php echo $_smarty_tpl->tpl_vars['staff_quality']->value;?>
</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="box_rate_score">
									<?php if ($_smarty_tpl->tpl_vars['lstReviewCruise']->value['food_drink']) {?>
										<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewCruise']->value['food_drink'],'assign'=>'food_drink'),$_smarty_tpl);?>

									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('food_drink', 0);?>
									<?php }?>
									<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Food/Drink');?>
</label>
									<div class="d-flex flex-wrap justify-content-between align-items-center">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['food_drink']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewCruise']->value['food_drink'];?>
%"></div>
										</div>
										<span><?php echo $_smarty_tpl->tpl_vars['food_drink']->value;?>
</span>
									</div>
								</div>
								<div class="box_rate_score">
									<?php if ($_smarty_tpl->tpl_vars['lstReviewCruise']->value['entertainment']) {?>
										<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewCruise']->value['entertainment'],'assign'=>'entertainment'),$_smarty_tpl);?>

									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('entertainment', 0);?>
									<?php }?>
									<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Entertainment');?>
</label>
									<div class="d-flex flex-wrap justify-content-between align-items-center">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['entertainment']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewCruise']->value['entertainment'];?>
%"></div>
										</div>
										<span><?php echo $_smarty_tpl->tpl_vars['entertainment']->value;?>
</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="box_rate_score">
									<?php if ($_smarty_tpl->tpl_vars['lstReviewCruise']->value['cabin_quality']) {?>
										<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewCruise']->value['cabin_quality'],'assign'=>'cabin_quality'),$_smarty_tpl);?>

									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('cabin_quality', 0);?>
									<?php }?>
									<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin quality');?>
</label>
									<div class="d-flex flex-wrap justify-content-between align-items-center">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['cabin_quality']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewCruise']->value['cabin_quality'];?>
%"></div>
										</div>
										<span><?php echo $_smarty_tpl->tpl_vars['cabin_quality']->value;?>
</span>
									</div>
								</div>
								<div class="box_rate_score">
									<?php if ($_smarty_tpl->tpl_vars['lstReviewCruise']->value['worth_the_money']) {?>
										<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewCruise']->value['worth_the_money'],'assign'=>'worth_the_money'),$_smarty_tpl);?>

									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('worth_the_money', 0);?>
									<?php }?>
									<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Worth the money');?>
</label>
									<div class="d-flex flex-wrap justify-content-between align-items-center">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['worth_the_money']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewCruise']->value['worth_the_money'];?>
%"></div>
										</div>
										<span><?php echo $_smarty_tpl->tpl_vars['worth_the_money']->value;?>
</span>
									</div>
								</div>
							</div>
						</div>
						<div class="box_write_review">
							<div class="clearfix mb20"></div>
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('review_Star');?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('review_Star_No_Login');?>

							<?php }?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['lstReview']->value) {?>
							<div class="box_list_reviews owl-carousel">
								<?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstReview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<?php $_smarty_tpl->_assignInScope('reviews_content', $_smarty_tpl->tpl_vars['clsReviews']->value->getContent($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],400,true,$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
									<div class="review_item">
										<div class="top_item_review">
											<div class="avatar">
												<span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fullname'],1,'',true);?>
</span>
											</div>
											<div class="info">
												<p class="name"><?php echo $_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fullname'];?>
</p>
												<p class="country"><?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
</p>
											</div>
										</div>
										<div class="content_review content_review_short limit_3line">
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsReviews']->value->getContent($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],400,true,$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>

										</div>
										<div class="content_review content_review_full" style="display:none">
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsReviews']->value->getContent($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],400,false,$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>

										</div>
										<a data-bs-toggle="modal" data-bs-target="#mdReview" class="read_more_review"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Read more');?>
</a>
									</div>
								<?php
}
}
?>
							</div>
						<?php }?>
					</section>
				</div>			
			</div>	
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_service_ad');?>

			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('relateCruise');?>

		</div>
	</div>
</div><!--wapper_content-->
<!-- Modal -->
<div class="modal fade" id="mdReview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="box_content"></div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
>
	var $cruise_id = '<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
';
	var txt_showMore = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Show more");?>
';
	var txt_showLess = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Show less");?>
';
	var map_la = '<?php echo $_smarty_tpl->tpl_vars['map_la']->value;?>
';
	var map_lo = '<?php echo $_smarty_tpl->tpl_vars['map_lo']->value;?>
';
	var cruise_id = '<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
';
	var cruise_itinerary_id = '<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
';
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_assignInScope('num_day_price', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getOneField('number_day',$_smarty_tpl->tpl_vars['cruise_id']->value));
$_smarty_tpl->_assignInScope('priceDay', $_smarty_tpl->tpl_vars['clsCruise']->value->getTripPriceDay($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['now_month']->value,$_smarty_tpl->tpl_vars['num_day_price']->value,$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('price', preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsCruise']->value->getLTripPrice($_smarty_tpl->tpl_vars['cruise_id']->value,$_smarty_tpl->tpl_vars['now_month']->value,$_smarty_tpl->tpl_vars['num_day_price']->value)));?>

<?php echo '<script'; ?>
 type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Product",
		"aggregateRating": {
			"@type": "AggregateRating",
			"ratingValue": "<?php echo $_smarty_tpl->tpl_vars['ratingValue']->value;?>
",
			"bestRating": "<?php echo $_smarty_tpl->tpl_vars['bestRating']->value;?>
",
			"reviewCount": "<?php echo $_smarty_tpl->tpl_vars['ratingCount']->value;?>
"
		},
		"description": "<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['getAbout']->value);?>
",
		"name": "<?php echo $_smarty_tpl->tpl_vars['title_cruise']->value;?>
",
		"image": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsCruise']->value->getImage($_smarty_tpl->tpl_vars['cruise_id']->value,700,500,$_smarty_tpl->tpl_vars['oneTable']->value);?>
",
		"offers": {
			"@type": "Offer",
			"priceCurrency": "<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('Currency'));?>
",
			"price": "<?php if ($_smarty_tpl->tpl_vars['priceDay']->value > '0' && $_smarty_tpl->tpl_vars['price']->value > '0') {
echo $_smarty_tpl->tpl_vars['price']->value;
} elseif ($_smarty_tpl->tpl_vars['priceDay']->value > '0' && $_smarty_tpl->tpl_vars['price']->value == '0') {
echo $_smarty_tpl->tpl_vars['priceDay']->value;
} elseif ($_smarty_tpl->tpl_vars['priceDay']->value == '0' && $_smarty_tpl->tpl_vars['price']->value > '0') {
echo $_smarty_tpl->tpl_vars['price']->value;
}?>",
			"itemCondition": "new"
		},
		"review": <?php echo $_smarty_tpl->tpl_vars['jsonReview']->value;?>

	}
	
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquerycruise.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
