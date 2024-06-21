<?php
/* Smarty version 3.1.38, created on 2024-05-06 10:11:28
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/voucherbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66384a60d2dbf5_47016220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca69e891b2740666b032b1b894063a23c67246e' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/voucherbox.tpl',
      1 => 1714822357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66384a60d2dbf5_47016220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/unikasia/domains/unikasia.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('getLink', $_smarty_tpl->tpl_vars['clsVoucher']->value->getLink($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['arrVoucher']->value));
$_smarty_tpl->_assignInScope('getTitle', $_smarty_tpl->tpl_vars['clsVoucher']->value->getTitle($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['arrVoucher']->value));
$_smarty_tpl->_assignInScope('ListDestination', $_smarty_tpl->tpl_vars['clsVoucherDestination']->value->getByVoucher($_smarty_tpl->tpl_vars['voucher_id']->value));
$_smarty_tpl->_assignInScope('_discountInfo', $_smarty_tpl->tpl_vars['clsVoucher']->value->checkIsPromotion($_smarty_tpl->tpl_vars['voucher_id']->value,1));
$_smarty_tpl->_assignInScope('is_discount', $_smarty_tpl->tpl_vars['_discountInfo']->value['is_discount']);
$_smarty_tpl->_assignInScope('is_due_date', $_smarty_tpl->tpl_vars['_discountInfo']->value['discount_info']['is_due_date']);
$_smarty_tpl->_assignInScope('due_date', $_smarty_tpl->tpl_vars['_discountInfo']->value['discount_info']['due_date']);
$_smarty_tpl->_assignInScope('total_voucher', $_smarty_tpl->tpl_vars['clsStock']->value->getTotal($_smarty_tpl->tpl_vars['voucher_id']->value));?>

<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {
$_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));
$_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));
$_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNew($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));
} else {
$_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));
$_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));
$_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));
}?>
<div class="box__padding">
	<div class="itemTrip <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
		<a href="<?php echo $_smarty_tpl->tpl_vars['getLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
">
			<div class="image relative">
				<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getImage('default_image_pixel',297,194);?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['clsVoucher']->value->getImage($_smarty_tpl->tpl_vars['voucher_id']->value,297,194,$_smarty_tpl->tpl_vars['arrVoucher']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
" class="owl-lazy lazy img100">
				<?php if ($_smarty_tpl->tpl_vars['is_discount']->value && $_smarty_tpl->tpl_vars['is_due_date']->value) {?>
				<div class="countdown bg_main">
				<span id="countdown_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
" data-date="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['due_date']->value,"%Y/%m/%d %H:%M");?>
" class="countdown-timer "></span>
				<span class="icon"></span>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['ListDestination']->value) {?>
				<span class="duration"><i class="fa fa-map-marker" aria-hidden="true"></i>
				 <?php
$__section_k_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ListDestination']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_4_total = $__section_k_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_4_total !== 0) {
for ($__section_k_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_4_iteration <= $__section_k_4_total; $__section_k_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
					<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['ListDestination']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['city_id']);?>
 
				 <?php
}
}
?>
				</span>
				<?php }?>
			</div>
			<div class="body">
				<h3 class="body__title limit_2line color_1c1c1c"><?php echo $_smarty_tpl->tpl_vars['getTitle']->value;?>
</h3>
				<div class="body_info_voucher d-flex">
					<div class="body_review">
						<span class="rate_avg"><?php echo $_smarty_tpl->tpl_vars['getRateAvg']->value;?>
</span><label class="rate-one"><?php echo $_smarty_tpl->tpl_vars['getStarNew']->value;?>
</label><span class="review_count">(<?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
)</span>

					</div>
					<div class="body_price">
					<?php echo $_smarty_tpl->tpl_vars['clsVoucher']->value->getPrice($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['arrVoucher']->value,'List');?>

					</div>
				</div>
			</div>
		</a>
	</div>
</div><?php }
}
