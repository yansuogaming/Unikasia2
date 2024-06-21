<?php
/* Smarty version 3.1.38, created on 2024-04-09 01:16:03
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/homepro/promotion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661434639a2e79_82558406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e17cea977c0a6dca6ed9f28d258fd2c10e76de' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/homepro/promotion.tpl',
      1 => 1672047150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661434639a2e79_82558406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<main id="main" class="page_container promotion_container">
	<section class="section_box attractive_tour">
		<div class="container">
			<div class="attractive_tour--header header__content">
				<div class="container">
					<h1 class="title32 color_333 mb20"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
</h2>
				</div>
			</div>
    		<?php if ($_smarty_tpl->tpl_vars['listPromotionId']->value) {?>
				<div class="attractive_tour--content">
					<div class="row list_tours">
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPromotionId']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['listPromotionId']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['item_id']);?>
							<?php $_smarty_tpl->_assignInScope('itemTour', $_smarty_tpl->tpl_vars['clsTour']->value->getOne($_smarty_tpl->tpl_vars['tour_id']->value,'title,slug,image'));?>
							<?php $_smarty_tpl->_assignInScope('getLink', $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['itemTour']->value));?>
							<?php $_smarty_tpl->_assignInScope('getTitle', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['itemTour']->value));?>

							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
								<?php $_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));?>
								<?php $_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));?>
								<?php $_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNew($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));?>
								<?php $_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));?>
								<?php $_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));?>
							<?php }?>
						
							<?php $_smarty_tpl->_assignInScope('getPriceTourPromotion', $_smarty_tpl->tpl_vars['clsTour']->value->getTripPriceNewPro2020($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['now_day']->value,$_smarty_tpl->tpl_vars['is_agent']->value));?>
							<?php $_smarty_tpl->_assignInScope('percent_promotion', $_smarty_tpl->tpl_vars['clsISO']->value->getPromotion($_smarty_tpl->tpl_vars['tour_id']->value,'Tour',$_smarty_tpl->tpl_vars['now_day']->value,$_smarty_tpl->tpl_vars['now_day']->value,'info_promotion'));?>
							<?php $_smarty_tpl->_assignInScope('close_sale_date', $_smarty_tpl->tpl_vars['clsTour']->value->getTourStartDate($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['now']->value,'close_sale_date'));?>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 box">
								<div class="itemTrip <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
									<a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
">
										<div class="image relative">
											<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',296,196);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['tour_id']->value,296,196,$_smarty_tpl->tpl_vars['itemTour']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
" class="lazy img100">
											<span class="percent_promotion">
											<?php echo $_smarty_tpl->tpl_vars['percent_promotion']->value['discount_value'];?>
%
											</span>
											<?php if ($_smarty_tpl->tpl_vars['close_sale_date']->value) {?>
											<div class="clock_last_hour" data-date="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['close_sale_date']->value,'%m/%d/%Y %k:%M:%S');?>
"></div>
											<?php }?>
											<span class="duration"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTripDuration2020($_smarty_tpl->tpl_vars['tour_id']->value);?>
</span>
										</div>
										<div class="body body_tour">
											<h3 class="body__title limit_2line"><?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
</h3>
											<div class="body_info_tour">
												<div class="body_review">
													<p class="review_rate"><span class="rate_avg"><?php echo $_smarty_tpl->tpl_vars['getRateAvg']->value;?>
</span> <label class="rate-2019 block"><?php echo $_smarty_tpl->tpl_vars['getStarNew']->value;?>
</label></p>
													<p class="review_count">(<?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
)</p>
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
							</div>
						<?php
}
}
?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['totalRecord']->value > $_smarty_tpl->tpl_vars['recordPerPage']->value) {?>
						<div class="view_more">
							<a href="javascript:void(0);" page="1" rel="nofollow" _type="TopTrip" class="show-loader btn_view_more" id="show-more-promotion-tour" data-total=<?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
 data-page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
 title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View more');?>
</a>
						</div>
					<?php }?>
				</div>
			<?php }?>
		</div>
	</section>
</main>

<?php echo '<script'; ?>
>
	
$(document).ready(function(){
	setClockLastHourTour();
	$('#show-more-promotion-tour').click(function(){
		var $_this = $(this);
		_Action = 'ajaxLoadMorePromotion';
		$pageLastest = $_this.data('page');
		$totalRecord = $_this.data('total');
		$pageLastest++;
		if($pageLastest * 8 >= $totalRecord){
			$('.view_more').hide();
		}
		$_this.data('page',$pageLastest);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod=homepro&act='+_Action+'&lang='+LANG_ID,
			data:{
				"page":$pageLastest,
			},
			dataType:'html',
			success:function(html){
				$_this.find('.ajax-loader').hide();
				$('.list_tours').append( html );
				$('.lazy').lazy({
					effect: "fadeIn",
					effectTime: 20,
					threshold: 0
				});
				setWidthHeightElement();
				setClockLastHourTour()
			}
		});
	}); 
});
<?php echo '</script'; ?>
>

<?php }
}
