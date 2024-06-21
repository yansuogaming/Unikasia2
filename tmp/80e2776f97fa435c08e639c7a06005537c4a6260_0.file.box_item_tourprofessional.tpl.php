<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:17:45
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_item_tourprofessional.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138c096c9d09_16000648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e2776f97fa435c08e639c7a06005537c4a6260' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_item_tourprofessional.tpl',
      1 => 1697799441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138c096c9d09_16000648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('getLink', $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['oneTopTour']->value));
$_smarty_tpl->_assignInScope('getTitle', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['oneTopTour']->value));
if ($_smarty_tpl->tpl_vars['is_mod_member']->value) {
$_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNew($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
} else {
$_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
}?>

<?php $_smarty_tpl->_assignInScope('getPriceTourPromotion', $_smarty_tpl->tpl_vars['clsTour']->value->getTripPriceNewPro2020($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['now_day']->value,$_smarty_tpl->tpl_vars['is_agent']->value));
$_smarty_tpl->_assignInScope('percent_promotion', $_smarty_tpl->tpl_vars['clsISO']->value->getPromotion($_smarty_tpl->tpl_vars['tour_id']->value,'Tour',$_smarty_tpl->tpl_vars['now_day']->value,$_smarty_tpl->tpl_vars['now_day']->value,'info_promotion'));
$_smarty_tpl->_assignInScope('close_sale_date', $_smarty_tpl->tpl_vars['clsTour']->value->getTourStartDate($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['now']->value,'close_sale_date'));
$_smarty_tpl->_assignInScope('Depart_point', $_smarty_tpl->tpl_vars['clsTour']->value->getListDeparturePointLink($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['oneTopTour']->value));?>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 box">
	<div class="itemTrip <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
		<a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
">
			<div class="image relative">
				<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',3,2);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['tour_id']->value,455,305,$_smarty_tpl->tpl_vars['oneTopTour']->value);?>
" width="455" height="305" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'home' || $_smarty_tpl->tpl_vars['act']->value == 'detaildeparture') {?>owl-lazy<?php } else { ?>lazy<?php }?> img100">
				<?php if ($_smarty_tpl->tpl_vars['percent_promotion']->value['discount_value']) {?>
					<span class="percent_promotion">
						<?php if ($_smarty_tpl->tpl_vars['percent_promotion']->value['discount_type'] == 1) {?>
							<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
								-<?php echo $_smarty_tpl->tpl_vars['percent_promotion']->value['discount_value'];
echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();?>

							<?php } else { ?>
								-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRateText();
echo $_smarty_tpl->tpl_vars['percent_promotion']->value['discount_value'];?>

							<?php }?>
						<?php } else { ?>
							-<?php echo $_smarty_tpl->tpl_vars['percent_promotion']->value['discount_value'];?>
%
						<?php }?>
					</span>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['close_sale_date']->value) {?>
				<div class="clock_last_hour" data-date="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['close_sale_date']->value,'%m/%d/%Y %k:%M:%S');?>
"></div>
				<?php }?>
			</div>
			<div class="body body_tour">
				<h3 class="body__title limit_2line"><?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
</h3>
				<div class="body_info_tour">
					<div class="body_review">
						<p class="review_rate"><label class="rate-2019 block"><?php echo $_smarty_tpl->tpl_vars['getStarNew']->value;?>
</label></p>
						<p class="box_review_count"> 
						<span class="rate_avg"> <?php echo $_smarty_tpl->tpl_vars['getRateAvg']->value;?>
/5.0 | </span>
						<span class="review_count"> <?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</span></p>
					</div>
					<div class="body_duration">
						<span class="duration"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTripDuration2020($_smarty_tpl->tpl_vars['tour_id']->value,'',$_smarty_tpl->tpl_vars['oneTopTour']->value);?>
</span>
						<?php if ($_smarty_tpl->tpl_vars['Depart_point']->value && $_smarty_tpl->tpl_vars['is_tour_departure_point']->value) {?>
							<span class="start_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Depart');?>
: <?php echo $_smarty_tpl->tpl_vars['Depart_point']->value;?>
</span>
						<?php }?>
					</div>
					<div class="body_price">
					<?php if ($_smarty_tpl->tpl_vars['getPriceTourPromotion']->value) {?>
						<?php echo $_smarty_tpl->tpl_vars['getPriceTourPromotion']->value;?>

					<?php } else { ?>
						<p class="size18 color_fb1111 text-bold mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</p>
					<?php }?>
					</div>
				</div>
			</div>
		</a>
	</div>
</div><?php }
}
