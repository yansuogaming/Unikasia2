<?php
/* Smarty version 3.1.38, created on 2024-04-08 18:27:30
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_tour_detail_mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613d4a2142e30_90541214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9b698eb0e25f2588047c3f671dd56abff9dff2' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_tour_detail_mobile.tpl',
      1 => 1710814048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613d4a2142e30_90541214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title_tour', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value));
$_smarty_tpl->_assignInScope('oneItemCatTour', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getOne($_smarty_tpl->tpl_vars['tourcat_id']->value,'title,slug'));
$_smarty_tpl->_assignInScope('titleCatTour', $_smarty_tpl->tpl_vars['oneItemCatTour']->value['title']);
$_smarty_tpl->_assignInScope('linkCatTour', $_smarty_tpl->tpl_vars['clsTourCategory']->value->getLink($_smarty_tpl->tpl_vars['tourcat_id']->value,$_smarty_tpl->tpl_vars['oneItemCatTour']->value));?>

<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {
$_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNew($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
} else {
$_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNologin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
}
$_smarty_tpl->_assignInScope('_Inclusion', $_smarty_tpl->tpl_vars['clsTour']->value->getInclusion($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));
$_smarty_tpl->_assignInScope('_Exclusion', $_smarty_tpl->tpl_vars['clsTour']->value->getExclusion($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));
$_smarty_tpl->_assignInScope('_ThingToCarry', $_smarty_tpl->tpl_vars['clsTour']->value->getThingToCarry($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));
$_smarty_tpl->_assignInScope('_CancellationPolicy', $_smarty_tpl->tpl_vars['clsTour']->value->getCancellationPolicy($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));
$_smarty_tpl->_assignInScope('_RefundPolicy', $_smarty_tpl->tpl_vars['clsTour']->value->getRefundPolicy($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));
$_smarty_tpl->_assignInScope('_ConfirmationPolicy', $_smarty_tpl->tpl_vars['clsTour']->value->getConfirmationPolicy($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));?>
<div class="page_container page_tour">
	<main class="pageDetail TourDetail bg_fff">
		<div class="tour__header">
			<div class="tour__header--child">
				<div class="container">
					<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['title_tour']->value;?>
</h1>
					<?php if ($_smarty_tpl->tpl_vars['getToTalReview']->value) {?>
					<div class="tour_rate box_col">
						<label class="rate-2019 block mb05"><?php echo $_smarty_tpl->tpl_vars['getStarNew']->value;?>
</label>
						<span class="review_text color_666"><?php echo $_smarty_tpl->tpl_vars['getRateAvg']->value;?>
/5.0</span> <span class="total__reviews text_bold"><?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</span>
					</div>
					<?php }?>
				</div>
			</div>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('slider_DetailTour');?>

		</div>
		<div class="price__Box phone">
			<?php $_smarty_tpl->_assignInScope('date_coutdown', $_smarty_tpl->tpl_vars['clsTourStartDate']->value->getStartDateTour($_smarty_tpl->tpl_vars['lstTourStartDate']->value[0]['tour_start_date_id'],'date_coutdown'));?>
			<?php $_smarty_tpl->_assignInScope('getFlagText', $_smarty_tpl->tpl_vars['clsPromotion']->value->getFlagText($_smarty_tpl->tpl_vars['promotion_id']->value));?>
			<?php $_smarty_tpl->_assignInScope('checkmem', $_smarty_tpl->tpl_vars['clsTour']->value->getCheckMemSet($_smarty_tpl->tpl_vars['tour_id']->value));?>
			<?php $_smarty_tpl->_assignInScope('getPriceTourPromotion', $_smarty_tpl->tpl_vars['clsTour']->value->getTripPriceNewPro2020($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['now_day']->value,$_smarty_tpl->tpl_vars['is_agent']->value,'detail'));?>
			<?php if ($_smarty_tpl->tpl_vars['date_coutdown']->value) {?>
				<div class="container">
					<?php if ($_smarty_tpl->tpl_vars['getFlagText']->value) {?>
					<div class="sale_off"><?php echo $_smarty_tpl->tpl_vars['getFlagText']->value;?>
</div>
					<?php }?>
					<div class="box__price phone <?php if (empty($_smarty_tpl->tpl_vars['getFlagText']->value)) {?>border_top<?php }?>">
						<div class="price">
							<?php if ($_smarty_tpl->tpl_vars['getPriceTourPromotion']->value) {?>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Fromm');?>
 <?php echo $_smarty_tpl->tpl_vars['getPriceTourPromotion']->value;?>

							<?php }?>
						</div>
						<div class="offerDate phone">
							<div class="d-flex offerDate__box">
								<div class="text_bold color_24b89c text_deal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Last minute deal');?>
</div>
								<div class="sale_clock">
									<ul class="clock lastHour" data-date="<?php echo $_smarty_tpl->tpl_vars['date_coutdown']->value;?>
"
										data-promotion_id="<?php echo $_smarty_tpl->tpl_vars['promotion_id']->value;?>
" style="float:left !important">
										<li><span class="days fw600 fs30">00</span>
											<p class="days_text "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Days');?>
</p></li>
										<li><span class="hours fw600 fs30">00</span>
											<p class="hours_text "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hours');?>
</p></li>
										<li><span class="minutes fw600 fs30">00</span>
											<p class="minutes_text "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Mins');?>
</p></li>
										<li><span class="seconds fw600 fs30">00</span>
											<p class="seconds_text "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Secs');?>
</p></li>
									</ul>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['first_start_date']->value) {?>
							<p class="mt10 text_right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Latest departure date');?>
: <?php echo $_smarty_tpl->tpl_vars['first_start_date']->value;?>
</p>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="btn_box">
					<button class="btn_scroll btn_yellow btn_main"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Choose departure date');?>
</button>
				</div>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['getPriceTourPromotion']->value) {?>
				<div class="container">
					<?php if ($_smarty_tpl->tpl_vars['getFlagText']->value) {?><div class="sale_off"><?php echo $_smarty_tpl->tpl_vars['getFlagText']->value;?>
</div><?php }?>
					<div class="box__price phone <?php if ($_smarty_tpl->tpl_vars['getPriceTourPromotion']->value) {?>box_shadow_pro<?php } else { ?>box_shadow<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['getFlagText']->value)) {?>border_top<?php }?>">
						<div class="price">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Fromm');?>

							<?php echo $_smarty_tpl->tpl_vars['getPriceTourPromotion']->value;?>
 
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['first_start_date']->value) {?>
						<div class="offerDate">
							<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Latest departure date');?>
: <?php echo $_smarty_tpl->tpl_vars['first_start_date']->value;?>
</p>
						</div>
					<?php }?>
				</div>
				<div class="btn_box">
					<button class="btn_scroll btn_yellow btn_main"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Choose departure date');?>
</button>
				</div>
				<?php } else { ?>
				<div class="container">
					<div class="hotline">
						<a class="img_phone" title="Call now" href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/telephone.png" alt="">
						</a>
						<div class="infor_contact">
							<span> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotline');?>
 24/7</span>
							<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Call now');?>
" href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</a>
						</div>
					</div>
				</div>
				<div class="btn_box">
					<button class="btn_scroll btn_yellow btn_main"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Choose departure date');?>
</button>
				</div>
				<?php }?>
			<?php }?>
		</div>
		<div class="tour__content">
			<div class="container">
				<div class="list_tab phone tinymce_Content">
					<section id="overview" class="overview section__box">
						<div class="accordion" id="accordionExample">
						  <div class="card">
							<div class="card-header" id="headingOne">
							  <h3 class="title">
								<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
								  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Overviewz');?>

									<i class="fa fa-angle-up pull-right"></i>
								</a>
								  
							  </h3>
							</div>

							<div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							  <div class="card-body">
								<ul class="overview__list list__item list_style_none text_bold">
									<?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['clsTour']->value->getLCityAround2($_smarty_tpl->tpl_vars['tour_id']->value));?>
									<?php $_smarty_tpl->_assignInScope('Depart_point', $_smarty_tpl->tpl_vars['clsTour']->value->getListDeparturePointLink($_smarty_tpl->tpl_vars['tour_id']->value));?>
									<?php $_smarty_tpl->_assignInScope('getTripDuration', $_smarty_tpl->tpl_vars['clsTour']->value->getTripDuration2019($_smarty_tpl->tpl_vars['tour_id']->value));?>
									<?php if ($_smarty_tpl->tpl_vars['getTripDuration']->value) {?><li class="item itinerary"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Itinerary');?>
: <?php echo $_smarty_tpl->tpl_vars['getTripDuration']->value;?>
</li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Depart_point']->value) {?><li class="item departure_point"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Depart from');?>
: <?php echo $_smarty_tpl->tpl_vars['Depart_point']->value;?>
</li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['address']->value) {?><li class="item destintions"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destintions');?>
: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</li><?php }?>
								</ul>
								<div class="intro">
									<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTripOverview($_smarty_tpl->tpl_vars['tour_id']->value);?>

								</div>
							  </div>
							</div>
						  </div>
						<?php if ($_smarty_tpl->tpl_vars['getKeyInfo']->value) {?>
						  <div class="card">
							<div class="card-header" id="headingTwo">
							  <h3 class="title">
								<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
								  <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Key infomation');?>

									<i class="fa fa-angle-up pull-right"></i>
								</a>
							  </h2>
							</div>
							<div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							  <div class="card-body">
								<div class="key__infomation--list">
									<?php echo $_smarty_tpl->tpl_vars['getKeyInfo']->value;?>

								</div>
							  </div>
							</div>
						  </div>
						<?php }?>
						</div>
					</section>
					<section id="avaiable" class="avaiable section__box">
						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock("box_find_tour");?>

					</section>
					<?php if ($_smarty_tpl->tpl_vars['lstItineraryTour']->value) {?>
					<section id="itinerary" class="itinerary section__box">
						
						<div class="accordion" id="accordionItinerary">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstItineraryTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('tourItinerary_id', $_smarty_tpl->tpl_vars['lstItineraryTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_itinerary_id']);?>
							<?php $_smarty_tpl->_assignInScope('lst_transport_id', $_smarty_tpl->tpl_vars['lstItineraryTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['transport']);?>
							<?php $_smarty_tpl->_assignInScope('lstItineraryTransport', $_smarty_tpl->tpl_vars['clsTransport']->value->getAll("is_trash=0 and is_online=1 and transport_id in (".((string)$_smarty_tpl->tpl_vars['lst_transport_id']->value).") order by order_no ASC"));?>
							<?php $_smarty_tpl->_assignInScope('_ItineraryContent', $_smarty_tpl->tpl_vars['lstItineraryTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['content']);?>
							<?php $_smarty_tpl->_assignInScope('_ItineraryImage', $_smarty_tpl->tpl_vars['clsTourItinerary']->value->getImageUrl($_smarty_tpl->tpl_vars['tourItinerary_id']->value));?>
							<div class="card">
								<div class="card-header" id="itinerary_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
									<h3 class="title">
										<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseitinerary_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
" aria-expanded="true" aria-controls="collapseitinerary_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
										<?php echo $_smarty_tpl->tpl_vars['clsTourItinerary']->value->getTitleItineraryNew($_smarty_tpl->tpl_vars['tourItinerary_id']->value);?>

										<i class="fa fa-angle-up pull-right"></i>
										</a>
									</h3>
								</div>
								<div id="collapseitinerary_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
" class="collapse" aria-labelledby="itinerary_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
" data-parent="#accordionItinerary">
									<div class="card-body">
										<div class="detail tinymce_Content">
											<p itinerary_id="<?php echo $_smarty_tpl->tpl_vars['lstItineraryTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_itinerary_id'];?>
" class="day_Itinerary color_999 size16 mb0">
												<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['list_itinerary']->value[$_smarty_tpl->tpl_vars['tourItinerary_id']->value]);?>

											</p>
											<?php if ($_smarty_tpl->tpl_vars['lstItineraryTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_show_image'] == '1' && $_smarty_tpl->tpl_vars['_ItineraryImage']->value != '') {?>
											<div class="photo">
												<img class="photo275 image full-width height-auto"
												src="<?php echo $_smarty_tpl->tpl_vars['_ItineraryImage']->value;?>
" alt=""/>
											</div>
											<div class="introItinerary">
												<?php echo html_entity_decode($_smarty_tpl->tpl_vars['_ItineraryContent']->value);?>

											</div>
											<?php } else { ?>
												<?php echo html_entity_decode($_smarty_tpl->tpl_vars['_ItineraryContent']->value);?>

											<?php }?>
											<?php $_smarty_tpl->_assignInScope('listHotel', $_smarty_tpl->tpl_vars['clsHotel']->value->getListByItinerary($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['tourItinerary_id']->value));?>
											<?php if ($_smarty_tpl->tpl_vars['listHotel']->value) {?>
											<div class="cleafix"></div>
											<div class="HotelTourAcc mtl0">
												<span class="d-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
:</span>
												<ul class="inline-block">
													<?php
$__section_h_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_h_1_total = $__section_h_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_h'] = new Smarty_Variable(array());
if ($__section_h_1_total !== 0) {
for ($__section_h_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] = 0; $__section_h_1_iteration <= $__section_h_1_total; $__section_h_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']++){
?>
														<?php $_smarty_tpl->_assignInScope('_HotelName', $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['listHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] : null)]['hotel_id']));?>
														<?php $_smarty_tpl->_assignInScope('star_id', $_smarty_tpl->tpl_vars['clsHotel']->value->getOneField('star_id',$_smarty_tpl->tpl_vars['listHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] : null)]['hotel_id']));?>
														<li>
															<h4 class="mb5 size16">
																<a target="_blank"
																   href="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['listHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_h']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_h']->value['index'] : null)]['hotel_id']);?>
"
																   title="<?php echo $_smarty_tpl->tpl_vars['_HotelName']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_HotelName']->value;?>
</a>
																<?php if ($_smarty_tpl->tpl_vars['clsHotel']->value->getImageStar($_smarty_tpl->tpl_vars['star_id']->value) != '') {?>
																	<img src="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getImageStar($_smarty_tpl->tpl_vars['star_id']->value);?>
"
																		 alt="<?php echo $_smarty_tpl->tpl_vars['_HotelName']->value;?>
"/>
																<?php }?>
															</h4>
														</li>
													<?php
}
}
?>
												</ul>
											</div>
											<?php }?>
										</div>
									</div>
								</div>
							</div>
							<?php
}
}
?>
						</div>
                         <?php if ($_smarty_tpl->tpl_vars['clsTour']->value->getFileProgram($_smarty_tpl->tpl_vars['tour_id']->value) && $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','tour_program_file','customize')) {?>
                        <div class="itnerary_file">
                            <div class="flex_1">
                                <div class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon/icon_file.svg" /></div>
                                <div class="text">
                                    <p class="bold p_text_1"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Want to read it later');?>
?</p>
                                    <p class="bold p_text_2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Download this tour’s PDF brochure and start tour planning offline');?>
</p>
                                </div>
                            </div>
                            
                            <div class="btn_download">
                                <a class="btn_download_file" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Download Brochure');?>
" download="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getFileProgram($_smarty_tpl->tpl_vars['tour_id']->value);?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getFileProgram($_smarty_tpl->tpl_vars['tour_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Download Brochure');?>
</a></a>
                            </div>
                        </div>
                        <?php }?>
					</section>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['_Inclusion']->value || $_smarty_tpl->tpl_vars['_Exclusion']->value || $_smarty_tpl->tpl_vars['_ThingToCarry']->value || $_smarty_tpl->tpl_vars['_CancellationPolicy']->value || $_smarty_tpl->tpl_vars['_RefundPolicy']->value || $_smarty_tpl->tpl_vars['_ConfirmationPolicy']->value || $_smarty_tpl->tpl_vars['listCustomField']->value) {?>
					<section id="important__noted" class="important__noted  section__box">
						<h2 class="title_section"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Important noted');?>
</h2>
						<div class="accordion important__noted--box" id="accordionImportant">
							<?php if ($_smarty_tpl->tpl_vars['_Inclusion']->value) {?>
							<div class="card">
								<div class="card-header" id="Inclusion">
									<h3 class="title title_inclusion">
										<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseInclusion" aria-expanded="true" aria-controls="collapseInclusion">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trip Inclusion');?>

										<i class="fa fa-angle-up pull-right"></i>
										</a>
									</h3>
								</div>
								<div id="collapseInclusion" class="collapse" aria-labelledby="Inclusion" data-parent="#accordionImportant">
									<div class="card-body">
										<div class="list-check plus"><?php echo $_smarty_tpl->tpl_vars['_Inclusion']->value;?>
</div>
									</div>
								</div>
							</div>
							<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['_Exclusion']->value) {?>
							<div class="card">
								<div class="card-header" id="Exclusion">
									<h3 class="title title_exclusion">
										<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseExclusion" aria-expanded="true" aria-controls="collapseExclusion">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trip Exclusions');?>

										<i class="fa fa-angle-up pull-right"></i>
										</a>
									</h3>
								</div>
								<div id="collapseExclusion" class="collapse" aria-labelledby="Exclusion" data-parent="#accordionImportant">
									<div class="card-body">
										<div class="list-check minus"><?php echo $_smarty_tpl->tpl_vars['_Exclusion']->value;?>
</div>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['_ThingToCarry']->value) {?>
							<div class="card">
								<div class="card-header" id="ThingToCarry">
									<h3 class="title title_thing_to_carry">
										<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThingToCarry" aria-expanded="true" aria-controls="collapseThingToCarry">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Thing To Carry');?>

										<i class="fa fa-angle-up pull-right"></i>
										</a>
									</h3>
								</div>
								<div id="collapseThingToCarry" class="collapse" aria-labelledby="ThingToCarry" data-parent="#accordionImportant">
									<div class="card-body">
										<div class="list-dot"><?php echo $_smarty_tpl->tpl_vars['_ThingToCarry']->value;?>
</div>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['_CancellationPolicy']->value) {?>
							<div class="card">
								<div class="card-header" id="CancellationPolicy">
									<h3 class="title title_cancellationpolicy">
										<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseCancellationPolicy" aria-expanded="true" aria-controls="collapseCancellationPolicy">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancellation Policy');?>

										<i class="fa fa-angle-up pull-right"></i>
										</a>
									</h3>
								</div>
								<div id="collapseCancellationPolicy" class="collapse" aria-labelledby="CancellationPolicy" data-parent="#accordionImportant">
									<div class="card-body">
										<div class="list-dot"><?php echo $_smarty_tpl->tpl_vars['_CancellationPolicy']->value;?>
</div>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['_RefundPolicy']->value) {?>
							<div class="card">
								<div class="card-header" id="RefundPolicy">
									<h3 class="title title_refundpolicy">
										<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseRefundPolicy" aria-expanded="true" aria-controls="collapseRefundPolicy">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Refund Policy');?>

										<i class="fa fa-angle-up pull-right"></i>
										</a>
									</h3>
								</div>
								<div id="collapseRefundPolicy" class="collapse" aria-labelledby="RefundPolicy" data-parent="#accordionImportant">
									<div class="card-body">
										<div class="list-dot"><?php echo $_smarty_tpl->tpl_vars['_RefundPolicy']->value;?>
</div>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['_ConfirmationPolicy']->value) {?>
							<div class="card">
								<div class="card-header" id="ConfirmationPolicy">
									<h3 class="title title_confirmationpolicy">
										<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseConfirmationPolicy" aria-expanded="true" aria-controls="collapseConfirmationPolicy">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Confirmation Policy');?>

										<i class="fa fa-angle-up pull-right"></i>
										</a>
									</h3>
								</div>
								<div id="collapseConfirmationPolicy" class="collapse" aria-labelledby="ConfirmationPolicy" data-parent="#accordionImportant">
									<div class="card-body">
										<div class="list-dot"><?php echo $_smarty_tpl->tpl_vars['_ConfirmationPolicy']->value;?>
</div>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listCustomField']->value) {?>
							<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCustomField']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_2_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<div class="card">
								<div class="card-header" id="listCustomField_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
									<h3 class="title title_customfield">
										<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapselistCustomField_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
" aria-expanded="true" aria-controls="collapselistCustomField_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
">
										<?php echo $_smarty_tpl->tpl_vars['listCustomField']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fieldname'];?>

										<i class="fa fa-angle-up pull-right"></i>
										</a>
									</h3>
								</div>
								<div id="collapselistCustomField_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
" class="collapse" aria-labelledby="listCustomField_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
" data-parent="#accordionImportant">
									<div class="card-body">
										<div class="list-dot"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['listCustomField']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fieldvalue']);?>
</div>
									</div>
								</div>
							</div>
							<?php
}
}
?>
							<?php }?>
						</div>
					</section>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'reviews','default','default','tour')) {?>
					<section id="reviews" class="reviews section__box bg_f7f7f7 phone">
						<h2 class="title_section"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
</h2>
						<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
                        <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('review_Star',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value,"getToTalReview"=>$_smarty_tpl->tpl_vars['getToTalReview']->value));?>

                        <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('review_Star_No_Login',array("tour_id"=>$_smarty_tpl->tpl_vars['tour_id']->value,"getToTalReview"=>$_smarty_tpl->tpl_vars['getToTalReview']->value));?>

                        <?php }?>
					</section>
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lfaqscolbox');?>

				</div>
			</div>
		</div>
        <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_service_ad');?>

		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour','tour_related','customize')) {?>
		<div class="tour___foot">
			<div class="container">
				
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('relatetour');?>

				
			</div>
		</div>
		<div class="cleafix mb30"></div>
		<?php }?>
	</main>
</div>
<?php echo '<script'; ?>
>
    var $tour_id = '<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
';
    var $Loading = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Loading");?>
';
    var selectmonth='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("select month");?>
';
    var Input_data_is_invalid='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Input data is invalid");?>
';
    var Input_data_is_required='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Select data is required");?>
';
    var $_Expand_all = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Expand all");?>
';
    var $_Collapse_all = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Collapse all");?>
';
    var $_LANG_ID = '<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
';
    var Adults='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Adults");?>
';
    var Children='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Children");?>
';
    var Infants='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Infants");?>
';
    var Departure_date_invalid='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Departure date is invalid");?>
';
	var Please_choose_departure_date='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Please choose departure date");?>
';
	var Warning='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Warning");?>
';
    var list_start_date=['<?php echo $_smarty_tpl->tpl_vars['list_start_date']->value;?>
'];
    var $check_tour_promotion='<?php echo $_smarty_tpl->tpl_vars['check_tour_promotion']->value;?>
';
	var $check_tour_start_date='<?php echo $_smarty_tpl->tpl_vars['check_tour_start_date']->value;?>
';
	 
	var getSelectChild 	= `<?php echo $_smarty_tpl->tpl_vars['getSelectChild']->value;?>
`; 
	var getSelectInfant 	= `<?php echo $_smarty_tpl->tpl_vars['getSelectInfant']->value;?>
`; 
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['date_range_js_update']->value;?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.countdown.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-confirm.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>

		$(function(){
			var $ww = $(window).width();
			var $heightFooter = $('#footer').outerHeight();
			var $heightAZ = $('.tour___foot').outerHeight();
			var $price__BoxAZ = $('.price__Box').offset().top + 50;
			if ($ww < 1200 ){
				x = 68;
				}else {
				x = 109;
					
			}
			if($ww >992){
				$.lockfixed(".price__Box", {offset: {top:x, bottom:  $heightFooter + $heightAZ}});
			}
			$(document).scroll(function(){
				if($price__BoxAZ <= $(this).scrollTop()) {
					$(".btn_box").addClass('fixed');
				} else {
					$(".btn_box").removeClass('fixed');
				}
			});

			$(document).on("click",".trigger_contact",function() {
				$('.contact_now').trigger('click');
			});
			$('.close_tb').click(function(){
				var  $_this=$('#pick_travellers');
				if($_this.hasClass('open')){
					$('#che').removeClass('bg-black');
					$('#check_number_travellers').hide();
					$_this.closest('.number_travellers').removeClass('open');
					$_this.removeClass('open');
				}else{
					$('#che').addClass('bg-black');
					$('#check_number_travellers').show();
					$_this.closest('.number_travellers').addClass('open');
					$_this.addClass('open');
				}
			});
			$(".btn_scroll ").click(function() {
				$('html, body').animate({
					scrollTop: $("#avaiable").offset().top - 111
				}, 600);
			});

		});
	<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['mod']->value) > 0) {?>

<?php echo '<script'; ?>
 type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "<?php echo $_smarty_tpl->tpl_vars['title_tour']->value;?>
",
  "url": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['tour_id']->value);?>
",
  "description": "<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsTour']->value->getTripOverview($_smarty_tpl->tpl_vars['tour_id']->value));?>
",
 "image": "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['tour_id']->value,300,200);?>
",
  "brand": {
    "@type": "Thing",
    "name": "Tour"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
	"ratingValue": "<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['mod']->value);?>
",
    "bestRating": "<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getBestRate($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['mod']->value);?>
",
    "ratingCount": "<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['mod']->value);?>
"
  }
}
<?php echo '</script'; ?>
>

<?php }?>

<?php echo '<script'; ?>
>
	$('.clock').each(function () {
		var $_this = $(this);
		var $_date = $_this.data('date');
		var $promotion_id = $_this.data('promotion_id');
		$_this.countdown($_date, function (event) {
			var $this = $(this).html(event.strftime(''
					+ '<li><span class="days">%D</span><p class="days_text">' + Days + '</p></li>'
					+ '<li><span class="hours">%H</span><p class="hours_text">' + Hours + '</p></li>'
					+ '<li><span class="minutes">%M</span><p class="minutes_text">' + Minutes + '</p></li>'
					+ '<li><span class="seconds">%S</span><p class="seconds_text">' + Seconds + '</p></li>'
			));
		});
	});
	function goToByScroll(id) {
		id = id.replace("--link", "");
		$('html,body').animate({
			scrollTop: $("#" + id).offset().top - 120
		},
		'slow');
	}
	$("#tabsk > ul li a").click(function (e) {
		e.preventDefault();
		goToByScroll($(this).attr("id"));
	});
	$(document).ready(function () {
		var $windown_w = $(window).width();
		var scrollOut = $('#footer').offset().top;
		$(window).scroll(function () {
			if ($windown_w > 1200) {
				if ($(this).scrollTop() > <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>240<?php } else { ?>600<?php }?> && $(this).scrollTop() < scrollOut) {
					$('#tabsk').css({
						"position": "fixed",
						"top": "68px",
						"z-index": "999",
						"width": "100%",
					});
					$('#tabsk').addClass('fixed').fadeIn();
				} else {
					$('#tabsk').removeAttr('style').fadeIn();
					$('#tabsk').removeClass('fixed');
				}
			}
		});
	});
<?php echo '</script'; ?>
>
<style type="text/css">
	
</style>

<?php }
}
