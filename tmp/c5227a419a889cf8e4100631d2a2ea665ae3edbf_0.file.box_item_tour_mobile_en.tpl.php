<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:09:38
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_item_tour_mobile_en.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a22ebc412_27758996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5227a419a889cf8e4100631d2a2ea665ae3edbf' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_item_tour_mobile_en.tpl',
      1 => 1709104169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a22ebc412_27758996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('getLCountryAround', $_smarty_tpl->tpl_vars['clsTour']->value->getLCountryAround($_smarty_tpl->tpl_vars['tour_id']->value));
$_smarty_tpl->_assignInScope('getLTripDuration', $_smarty_tpl->tpl_vars['clsTour']->value->getLTripDuration($_smarty_tpl->tpl_vars['tour_id']->value));
$_smarty_tpl->_assignInScope('getLink', $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['one_tour']->value));
$_smarty_tpl->_assignInScope('getTitle', $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['one_tour']->value));
if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {
$_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNew($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
} else {
$_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
$_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour'));
}
$_smarty_tpl->_assignInScope('getPriceTourPromotion', $_smarty_tpl->tpl_vars['clsTour']->value->getTripPriceNewPro2020($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['now_day']->value,$_smarty_tpl->tpl_vars['is_agent']->value));?>
<div class="col-lg-4 col-md-6 box">
	<div class="item__tour <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
		<a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
">
		<div class="image relative">
			<img src="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['tour_id']->value,385,256,$_smarty_tpl->tpl_vars['one_tour']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
" width="385" height="256" class=" img100">
		</div>
		<div class="body">
			<h3 class="body__title limit_2line color_1c1c1c"><?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
</h3>
			
			<div class="body_info_tour">
				<div class="body_review">
					<p class="review_rate"><span class="rate_avg"><?php echo $_smarty_tpl->tpl_vars['getRateAvg']->value;?>
</span> 
						<label class="rate-2023 block"><?php echo $_smarty_tpl->tpl_vars['getStarNew']->value;?>
</label> (<?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
)</p>
				</div>
                <div class="additional_infor">
                    <span class="duration"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTripDuration2020($_smarty_tpl->tpl_vars['tour_id']->value);?>
</span>
                </div>
                <div class="d-flex">
                    <div class="body_price">
                        <?php if ($_smarty_tpl->tpl_vars['getPriceTourPromotion']->value) {?>
                            <?php echo $_smarty_tpl->tpl_vars['getPriceTourPromotion']->value;?>

                        <?php } else { ?>
                            <p class="mb0"></p>
                            <p class="size18 color_fb1111 text-bold mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</p>
                        <?php }?>
                    </div>
                    <div class="view_detail"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Detail');?>
</div>
                
                </div>
				
			</div>
            
		</div>
		</a>
	</div>
</div><?php }
}
