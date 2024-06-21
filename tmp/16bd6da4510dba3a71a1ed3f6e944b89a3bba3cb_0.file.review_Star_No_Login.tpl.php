<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:13:35
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/review_Star_No_Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613a72fb075b1_32435017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16bd6da4510dba3a71a1ed3f6e944b89a3bba3cb' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/review_Star_No_Login.tpl',
      1 => 1709947116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613a72fb075b1_32435017 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="stories bg_f7f7f7" id="stories">
	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getBrowser() == 'phone_') {?>
		<?php if (empty($_smarty_tpl->tpl_vars['lstReview']->value)) {?>
		<div class="full-width inline-block mb20"><a class="btn_write_review full-width inline-block btn_write_review_no_login d-block mt0" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
</a></div>
				
		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getBrowser() != 'phone') {?>
	<div id="writeTourReview" style="display:none">
		<form action="" class="simple_form new_review" enctype="multipart/form-data" id="frmCommentCrx" method="post">
			<div class="rating_block">
				<div class="rating-body">
					<div class="rate">
						<span class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your Rating');?>
: </span><div class="rate_row"></div>
					</div>
					<div class="details">
						<div class="control-group text optional review_content mt10">
							<div class="controls mb10">
								<input class="full-width required" name="fullname" id="fullname" value="" maxlength="255" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter Full Name');?>
"/>
							</div>
							<div class="controls mb10">
								<input class="full-width email" name="email_reviews" id="email" maxlength="255" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter Email');?>
"/>
							</div>
							<div class="controls mb10">
								<select name="country_id" id="country_id" class="form-control required">
									<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getSelectByCountry($_smarty_tpl->tpl_vars['country_id']->value);?>

								</select>
							</div>
							<div class="controls">
								<textarea class="text optional textarea full-width"  name="message" id="message" minlength="100" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please write at least 100 characters about your experience at this destination');?>
." rows="10" data-validate="true"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="media-preview" id="media-preview"></div>
				<div class="bottom">
					<div class="right">
						<button type="button" id="btnClick" class="btn_green btn_main"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Publish Review');?>
</button>
						<input type="hidden" value="Review" name="Review"> 
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" id="member_id" name="member_id"> 
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
" id="table_id" name="table_id"> 
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" id="type" name="type">
					</div>
				</div>
			</div>
		</form>
	</div>
	<?php }?>
	<div class="read_stories">
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'tour' || $_smarty_tpl->tpl_vars['mod']->value == 'tour_new' || $_smarty_tpl->tpl_vars['mod']->value == 'voucher' || $_smarty_tpl->tpl_vars['mod']->value == 'hotel' || $_smarty_tpl->tpl_vars['mod']->value == 'cruise') {?>
		<div class="bg_f7f7f7 <?php if ($_smarty_tpl->tpl_vars['lstReview']->value) {?>mb40<?php } else { ?>mb40<?php }?> totlalReview">
			<h3 class="title_review_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Overall rating');?>
</h3>
			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getBrowser() == 'phone') {?>
				<div class="overall__rating d-flex <?php if ($_smarty_tpl->tpl_vars['lstReview']->value) {?>mb40<?php } else { ?>mb40<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['lstReview']->value) {?>
					<div class="box__left">
						<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'voucher') {?>
						<span class="review_text"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher');?>
</span>

						<label class="rate-2019 rate_star_big block mb05"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher');?>
</label>
						<?php } else { ?>
						<span class="review_text"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour');?>
</span>
						<label class="rate-2019 rate_star_big block mb05"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour');?>
</label>
						<?php }?>
						<span class="total__reviews"><?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</span>
						<a class="btn_write_review btn_write_review_no_login" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
</a>
					</div>
					<?php } else { ?>
					<div class="box__left align-items-center d-flex">
						<a class="btn_write_review btn_write_review_no_login mt50" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
</a>
					</div>
					<?php }?>
					<div class="starReview text_left <?php if (empty($_smarty_tpl->tpl_vars['lstReview']->value)) {?>pd0<?php }?>">
						<p class="inline-block full-width">
							<span class="text_left">5 <i class="fa fa-star color_fec533" aria-hidden="true"></i> </span>
							<span class="pdl_10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Excellent');?>
 (<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Excellent');?>
)</span>
						</p>
						<p class="inline-block full-width">
							<span class="text_left">4 <i class="fa fa-star color_fec533" aria-hidden="true"></i> </span>
							<span class="pdl_10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Very good');?>
 (<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Very good');?>
)</span>
						</p>
						<p class="inline-block full-width">
							<span class="text_left">3 <i class="fa fa-star color_fec533" aria-hidden="true"></i> </span>
							<span class="pdl_10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Good');?>
 (<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Good');?>
)</span>
						</p>
						<p class="inline-block full-width">
							<span class="text_left">2 <i class="fa fa-star color_fec533" aria-hidden="true"></i> </span>
							<span class="pdl_10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Average');?>
 (<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Average');?>
)</span>
						</p>
						<p class="inline-block full-width mb0">
							<span class="text_left">1 <i class="fa fa-star color_fec533" aria-hidden="true"></i> </span>
							<span class="pdl_10"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Poor');?>
 (<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Poor');?>
)</span>
						</p>
					</div>
				</div>
				<div id="writeTourReview" style="display:none">
					<form action="" class="simple_form new_review" enctype="multipart/form-data" id="frmCommentCrx" method="post">
						<div class="rating_block">
							<div class="rating-body">
								<div class="rate">
									<span class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your Rating');?>
: </span><div class="rate_row"></div>
								</div>
								<div class="details">
									<div class="control-group text optional review_content mt10">
										<div class="controls mb10">
											<input class="full-width required" name="fullname" id="fullname" value="" maxlength="255" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter Full Name');?>
"/>
										</div>
										<div class="controls mb10">
											<input class="full-width email" name="email_reviews" id="email" maxlength="255" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter Email');?>
"/>
										</div>
										<div class="controls mb10">
											<select name="country_id" id="country_id" class="form-control required">
												<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getSelectByCountry($_smarty_tpl->tpl_vars['country_id']->value);?>

											</select>
										</div>
										<div class="controls">
											<textarea class="text optional textarea full-width"  name="message" id="message" minlength="100" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please write at least 100 characters about your experience at this destination');?>
." rows="10" data-validate="true"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="media-preview" id="media-preview"></div>
							<div class="bottom">
								<div class="right">
									<button type="button" id="btnClick" class="btn_green btn_main"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Publish Review');?>
</button>
									<input type="hidden" value="Review" name="Review"> 
									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" id="member_id" name="member_id"> 
									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
" id="table_id" name="table_id"> 
									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" id="type" name="type">
								</div>
							</div>
						</div>
					</form>
				</div>
				<?php } else { ?>
				<div class="overall__rating d-flex">
					<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'voucher') {?>
						<div class="box__left">
							<span class="review_text"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher');?>
</span>
							<label class="rate-2019 rate_star_big block mb05"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher');?>
</label>
							<span class="total__reviews"><?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getBrowser() != 'phone') {?>
								<a class="btn_write_review btn_write_review_no_login fr" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Write review');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Write review');?>
</a>
							<?php }?>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'tour') {?>
						<?php if ($_smarty_tpl->tpl_vars['lstReview']->value) {?>
							<div class="box__left">
								<span class="review_text"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour');?>
</span>
								<label class="rate-2019 rate_star_big block mb05"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['tour_id']->value,'tour');?>
</label>
								<span class="total__reviews"><?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</span>
							</div>
						<?php }?>
					
					<?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'hotel') {?>
						<?php if ($_smarty_tpl->tpl_vars['lstReview']->value) {?>
							<div class="box__left">
								<span class="review_text"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel');?>
</span>
								<label class="rate-2019 rate_star_big block mb05"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel');?>
</label>
								<span class="total__reviews"><?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</span>
							</div>
						<?php }?>
					
					<?php } elseif ($_smarty_tpl->tpl_vars['mod']->value == 'cruise') {?>
						<?php if ($_smarty_tpl->tpl_vars['lstReview']->value) {?>
							<div class="box__left">
								<span class="review_text"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['cruise_id']->value,'cruise');?>
</span>
								<label class="rate-2019 rate_star_big block mb05"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['cruise_id']->value,'cruise');?>
</label>
								<span class="total__reviews"><?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</span>
							</div>
						<?php }?>
					<?php }?>
					
					<div class="starReview text_left <?php if (empty($_smarty_tpl->tpl_vars['lstReview']->value)) {?>pd_not_Review<?php }?>">
						<p class="inline-block full-width">
							<span class="txt_rate text_left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Excellent');?>
</span>
							<span class="txt_rate text_right"><label class="rate-2019 text_left"><span style="width:100%"></span></label></span>
							<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'voucher') {?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(5,$_smarty_tpl->tpl_vars['table_id']->value,'voucher');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'voucher','Excellent');?>
</span>
							<?php } else { ?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(5,$_smarty_tpl->tpl_vars['table_id']->value,'tour');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Excellent');?>
</span>
							<?php }?>
						</p>
						<p class="inline-block full-width">
							<span class="txt_rate text_left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Very good');?>
</span>
							<span class="txt_rate text_right"><label class="rate-2019 text_left"><span style="width:80%"></span></label></span>
							<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'voucher') {?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(4,$_smarty_tpl->tpl_vars['table_id']->value,'voucher');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'voucher','Very good');?>
</span>
							<?php } else { ?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(4,$_smarty_tpl->tpl_vars['table_id']->value,'tour');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Very good');?>
</span>
							<?php }?>
						</p>
						<p class="inline-block full-width">
							<span class="txt_rate text_left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Good');?>
</span>
							<span class="txt_rate text_right"><label class="rate-2019 text_left"><span style="width:60%"></span></label></span>
							<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'voucher') {?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(3,$_smarty_tpl->tpl_vars['table_id']->value,'voucher');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'voucher','Good');?>
</span>
							<?php } else { ?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(3,$_smarty_tpl->tpl_vars['table_id']->value,'tour');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Good');?>
</span>
							<?php }?>
						</p>
						<p class="inline-block full-width">
							<span class="txt_rate text_left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Average');?>
</span>
							<span class="txt_rate text_right"><label class="rate-2019 text_left"><span style="width:40%"></span></label></span>
							<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'voucher') {?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(2,$_smarty_tpl->tpl_vars['table_id']->value,'voucher');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'voucher','Average');?>
</span>
							<?php } else { ?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(2,$_smarty_tpl->tpl_vars['table_id']->value,'tour');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Average');?>
</span>
							<?php }?>
						</p>
						<p class="inline-block full-width mb0">
							<span class="txt_rate text_left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Poor');?>
</span>
							<span class="txt_rate text_right"><label class="rate-2019 text_left"><span style="width:20%"></span></label></span>
							<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'voucher') {?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(1,$_smarty_tpl->tpl_vars['table_id']->value,'voucher');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'voucher','Poor');?>
</span>
							<?php } else { ?>
							<span class="process_bar"><i style="width:<?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getRateProcessNoLogin(1,$_smarty_tpl->tpl_vars['table_id']->value,'tour');?>
%"></i></span>
							<span class="w145"><?php echo $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewByTableNoLogin($_smarty_tpl->tpl_vars['table_id']->value,'tour','Poor');?>
</span>
							<?php }?>
						</p>
					</div>
				</div>
			<?php }?>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['lstReview']->value) {?>
			<div class="clearfix"></div>
			<div class="cruise-review-tab">
			<div class="review-list">
				<h3 class="title_review_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Review details');?>
</h3>
				<ul class="load_result-review list_style_none" id="commentCrx">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstReview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('rates', $_smarty_tpl->tpl_vars['clsReviews']->value->getRates($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<?php $_smarty_tpl->_assignInScope('full_name', $_smarty_tpl->tpl_vars['clsReviews']->value->getFullName($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<?php $_smarty_tpl->_assignInScope('dateSecond', $_smarty_tpl->tpl_vars['clsISO']->value->formatDateSecond($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['review_date']));?>
					<?php $_smarty_tpl->_assignInScope('timeToText', $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToTextShort($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['review_date']));?>
					<?php $_smarty_tpl->_assignInScope('rateStar', $_smarty_tpl->tpl_vars['clsReviews']->value->getRatesStar($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<?php $_smarty_tpl->_assignInScope('rateOne', $_smarty_tpl->tpl_vars['clsReviews']->value->getTextRateOne($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
					<?php $_smarty_tpl->_assignInScope('content', html_entity_decode($_smarty_tpl->tpl_vars['clsReviews']->value->getContent($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],400,true,$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])));?>
						
                    <li id="Reviews<?php echo $_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" class="box item boder_bottom d-flex" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null) > '3') {?> style="display:none"<?php }?>>
                        <div class="member">
                            <div class="image"><span class="bg_main"><?php echo $_smarty_tpl->tpl_vars['rates']->value;?>
</span>
                            </div>
                        </div>
                        <div class="body">
                            <div class="name mb05">
                                <?php echo $_smarty_tpl->tpl_vars['full_name']->value;?>
 
                                <span class="inline-block color_666 size16 fr" title="<?php echo $_smarty_tpl->tpl_vars['dateSecond']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['timeToText']->value;?>
</span>
                            </div>
                            <p class="inline-block full-width mb10">
                                <span class="rate inline-block "><label class="rate-2019 text_left"><?php echo $_smarty_tpl->tpl_vars['rateStar']->value;?>
</label> &nbsp;<span class="btn_rate text_bold"><?php echo $_smarty_tpl->tpl_vars['rateOne']->value;?>
</span></span>

                            </p>
                            <div class="cus-desc">
                                <div class="review-content">
                                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                                </div>
                            </div>
                        </div>
                    </li>
					<?php
}
}
?>  
				</ul>
			</div>
			<?php if (count($_smarty_tpl->tpl_vars['lstReview']->value) > 3) {?>
            <div class="cleafix"></div>
            <div id="exploreWorldLoadMore" class="mt20">
                <div id="load_more_collections">
                    <div class="loader"></div>
                    <a href="javascript:void(0);" rel="nofollow" page="1" class="d-block color_1c1c1c show_more_review btn_yellow show-loader" id="show-more"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('See more');?>
</a>
                </div>
            </div>  
			<?php }?>
		</div>
		<?php }?>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 >
	var msg_fullname_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your full name should not be empty');?>
!";
	var msg_email_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your email should not be empty');?>
!";
	var msg_message_required = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your message should not be empty');?>
!";
	var msg_login = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sign in saved to review');?>
!";
	var msg_rating = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your rating should not be empty');?>
!";
	var msg_insert_success = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your Review is submit success');?>
!";
	var msg_email_not_valid = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Your email is not valid');?>
!";
	var process = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Processing');?>
......";
	var Publish_Review = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Publish Review');?>
";
	var Completed = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Completed');?>
....";
	
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.form.js?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 >
$(function(){
	$(document).on('click', '#btnClick', function(ev){
		var e = $("#email").val(),
            a = $("#email").val();
		var $_this = $(this);
		if($.trim($('input[name=fullname]').val())==''){
			alert(msg_fullname_required);
			$('input[name=fullname]').addClass('error');
			$('input[name=fullname]').focus();
			return false;
		}
		if($.trim($('input[name=email_reviews]').val())==''){
			alert(msg_email_required);
			$('input[name=email_reviews]').addClass('error');
			$('input[name=email_reviews]').focus();
			return false;
		}
		if (0 == checkValidEmail(a)) {
			alert(msg_email_not_valid);
			$('input[name=email_reviews]').addClass('error');
			$('input[name=email_reviews]').focus();
			return false;
		}
		if($.trim($('textarea[name=message]').val())==''){
			alert(msg_message_required);
			$('input[name=message]').addClass('error');
			$('textarea[name=message]').focus();
			return false;
		}
		if($.trim($('input[name=rates]').val())==''){
			alert(msg_rating);
			$('input[name=rates]').focus();
			return false;
		}
		$_this.closest('form.simple_form').ajaxSubmit({
			type: "POST",
			url: path_ajax_script+'/index.php?mod=home&act=ajSaveReviewsNoLogin&lang='+LANG_ID,
			beforeSend: function(xhr){
				$('button[id^=btnClick]').text(process);
			},
			dataType: "html",
			success: function(html){
				$('button[id^=btnClick]')
					.text(Completed)
					.delay(2000)
					.text(Publish_Review);
				$_this.closest('form.simple_form').resetForm();
				$_this.closest('form.simple_form').clearForm();
				
				if(html.indexOf("_ERROR") >= 0) {
					$('#message_box').html(msg_insert_error).show();
					return false;
				}else if(html.indexOf('_SUCCESS') >=0){
					alert(msg_insert_success);
					$('#media-preview').empty().hide();
					$(".rate_row .rate_star").removeClass('checked');
					$("#rates").val('');
					$("#fullname").val('');
					$("#email").val('');
					$("#message").val('');
					$('#commentCrx li:first').fadeIn().delay(10000).fadeOut();
				}
			}
		});
		return false;
	});
	var $number_per_page = 3;
	var $page = 1;
	$page_aj = 0;
	var timer = '';
	/*loadPage();*/
	$('#show-more').click(function(e) {
		var $totalRecord = $('#commentCrx .box').size();
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
				$('#exploreWorldLoadMore').hide();
		}, 500);
	});
	
});
function checkValidEmail(e) {
    var a = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return a.test(e)
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/htmlpreview" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/reviewstar/starwarsjs.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/reviewstar/htmlpreview.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/reviewstar/yql?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/reviewstar/style.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
">

<?php echo '<script'; ?>
 >
	HTMLPreview.replaceAssets();
	$(function(){
		$('.rate_row').starwarsjs({
			stars : 5,
			count : 1
		});
	});
<?php echo '</script'; ?>
>


<style >
#writeTourReview{margin-bottom:40px}
#writeTourReview .bottom {
    overflow: hidden;
    padding: 10px 0;
}
#writeTourReview .bottom .upload_image {
    float: left;
    margin-top: 0;
    width: 200px;
}
#writeTourReview .bottom .upload_image input {
    display: none;
    position: absolute;
}
#writeTourReview .bottom .upload_image label {
    display: block;
    height: 21px;
    color: #3b444e;
    font-size: 12px;
	line-height:21px;
    text-transform: uppercase;
    font-weight: 400;
    opacity: .8;
    margin: 5px 0 0 0;
}
#writeTourReview .bottom .right {
    float: right;
    width: 310px;
    text-align: right;
}
.btn_green {
    border: 0;
    text-transform: uppercase;
    padding: 8px 15px;
    display: inline-block;
    font-size: 14px;
    line-height: 20px;
    vertical-align: middle;
}
#writeTourReview textarea{padding:10px 15px}
.review_content input,.review_content select{width:100%; max-width:320px; line-height:36px; height:36px; padding:0 10px; border-radius:0; border:1px solid #ccc}
</style>






<?php }
}
