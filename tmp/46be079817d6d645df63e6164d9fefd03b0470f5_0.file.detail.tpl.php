<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:43:23
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/voucher/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613ae2bab8f94_15853873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46be079817d6d645df63e6164d9fefd03b0470f5' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/voucher/detail.tpl',
      1 => 1710562580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613ae2bab8f94_15853873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('TitleItem', $_smarty_tpl->tpl_vars['clsVoucher']->value->getTitle($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));
$_smarty_tpl->_assignInScope('_discountInfo', $_smarty_tpl->tpl_vars['clsVoucher']->value->checkIsPromotion($_smarty_tpl->tpl_vars['voucher_id']->value,1));
$_smarty_tpl->_assignInScope('discount_id', $_smarty_tpl->tpl_vars['_discountInfo']->value['discount_info']['discount_id']);
$_smarty_tpl->_assignInScope('is_discount', $_smarty_tpl->tpl_vars['_discountInfo']->value['is_discount']);
$_smarty_tpl->_assignInScope('is_due_date', $_smarty_tpl->tpl_vars['_discountInfo']->value['discount_info']['is_due_date']);
$_smarty_tpl->_assignInScope('discount_value', $_smarty_tpl->tpl_vars['_discountInfo']->value['discount_info']['discount_value']);
$_smarty_tpl->_assignInScope('discount_type', $_smarty_tpl->tpl_vars['_discountInfo']->value['discount_info']['discount_type']);
$_smarty_tpl->_assignInScope('due_date', $_smarty_tpl->tpl_vars['_discountInfo']->value['discount_info']['due_date']);
$_smarty_tpl->_assignInScope('TotalStock', $_smarty_tpl->tpl_vars['clsStock']->value->getTotal($_smarty_tpl->tpl_vars['voucher_id']->value));
$_smarty_tpl->_assignInScope('have_bought', $_smarty_tpl->tpl_vars['clsStock']->value->getTotalOut($_smarty_tpl->tpl_vars['voucher_id']->value));?>
 <?php $_smarty_tpl->_assignInScope('ListDestination', $_smarty_tpl->tpl_vars['clsVoucherDestination']->value->getByVoucher($_smarty_tpl->tpl_vars['voucher_id']->value));?>
 <section class="page_container bg_f9f9f9">
	 <nav class="breadcrumb-main breadcrumb-<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
">
      <div class="container">
         <ol class="breadcrumb hidden-xs bg_f9f9f9 mt0" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
               <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trang chủ');?>
</span></a>
               <meta itemprop="position" content="1" />
            </li>
             <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('voucher');?>
">
               <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</span></a>
               <meta itemprop="position" content="2" />
            </li>
              <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
">
               <span itemprop="name" class="reb"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['TitleItem']->value,40);?>
</span></a>
               <meta itemprop="position" content="3" />
            </li>
         </ol>
      </div>
   </nav>
	<div class="contentVoucher">
		<div class="container">
			<div class="topDetailVoucher">
				<div class="row">
					<div class="col-md-7">
						<div class="sliderImage owl-carousel">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstImage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_0_iteration === $__section_i_0_total);
?>
								<img class="Item" src="<?php echo $_smarty_tpl->tpl_vars['clsImage']->value->getImage($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image_id'],714,467,$_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" width="714" height="467" alt="<?php echo $_smarty_tpl->tpl_vars['clsImage']->value->getTitle($_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image_id'],$_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
">
							<?php
}
}
?>
						</div>
					</div>
					<div class="col-md-5">
						<div class="contentRight">
							<div class="box_title_voucher_detail">
								<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['TitleItem']->value;?>
</h1>
                                <?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
								<div class="icon_share">
									<i class="ic ic_share"></i>
									<div class="share_box">
										<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.sharer.js?v=<?php echo $_smarty_tpl->tpl_vars['up_version']->value;?>
"><?php echo '</script'; ?>
>
										<?php $_smarty_tpl->_assignInScope('link_share', $_smarty_tpl->tpl_vars['curl']->value);?>
										<?php $_smarty_tpl->_assignInScope('title_share', $_smarty_tpl->tpl_vars['TitleItem']->value);?>
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_share',array("link_share"=>$_smarty_tpl->tpl_vars['link_share']->value,"title_share"=>$_smarty_tpl->tpl_vars['title_share']->value));?>

									</div>
								</div>
                                <?php }?>
							</div>
							<div class="number_people_bought">
								<i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 22px"></i>
								<p><?php echo $_smarty_tpl->tpl_vars['have_bought']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('have bought');?>
</p>
                                
                                <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
								<div class="icon_share">
									<i class="ic ic_share"></i>
									<div class="share_box">
										<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.sharer.js?v=<?php echo $_smarty_tpl->tpl_vars['up_version']->value;?>
"><?php echo '</script'; ?>
>
										<?php $_smarty_tpl->_assignInScope('link_share', $_smarty_tpl->tpl_vars['curl']->value);?>
										<?php $_smarty_tpl->_assignInScope('title_share', $_smarty_tpl->tpl_vars['TitleItem']->value);?>
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_share',array("link_share"=>$_smarty_tpl->tpl_vars['link_share']->value,"title_share"=>$_smarty_tpl->tpl_vars['title_share']->value));?>

									</div>
								</div>
                                <?php }?>
							</div>
							<div class="PriceDetail">
								<div class="ContentLeft">
                                    <div class="detail_price"><?php echo $_smarty_tpl->tpl_vars['clsVoucher']->value->getPrice($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value,'Detail');?>
</div>
								</div>

                                <?php if ($_smarty_tpl->tpl_vars['TotalStock']->value && $_smarty_tpl->tpl_vars['TotalStock']->value > 0) {?>
                                <form action="" method="post" class="cmxform">
                                    <?php $_smarty_tpl->_assignInScope('ticket', $_smarty_tpl->tpl_vars['core']->value->get_Lang('ticket'));?>
                                    <?php echo smarty_function_math(array('assign'=>"StockP",'equation'=>"x + 1",'x'=>$_smarty_tpl->tpl_vars['TotalStock']->value),$_smarty_tpl);?>

                                    <div class="count_voucher">
                                        <div class="count_value_text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Số lượng');?>
</div>
                                        <div class="wpcf7-spinner">
                                            <input type="text" class="spinnerExample" name="number_voucher" value="1" min="1" max="<?php echo $_smarty_tpl->tpl_vars['TotalStock']->value;?>
"/>
                                        </div>
                                    </div>
                                    <input type="hidden" name="voucher_id" value="<?php echo $_smarty_tpl->tpl_vars['voucher_id']->value;?>
" />
                                    <input type="hidden" name="BookingVoucher" id="BookingVoucher" value="BookingVoucher" />
                                    <input type="hidden" name="voucher_price_z" value="<?php echo $_smarty_tpl->tpl_vars['clsVoucher']->value->getPricePromotionO($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value);?>
" />
                                    <?php if ($_smarty_tpl->tpl_vars['getPromotion']->value) {?>
                                    <input type="hidden" name="discount_id" value="<?php echo $_smarty_tpl->tpl_vars['getPromotion']->value['discount_id'];?>
">
                                    <input type="hidden" name="discount_value" value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['getPromotion']->value['discount_value'],".",'');?>
">
                                    <input type="hidden" name="discount_type" value="<?php echo $_smarty_tpl->tpl_vars['getPromotion']->value['discount_type'];?>
">
                                    <?php }?>
									<div class="box_button_submit">
										<button type="submit" class="bookVoucher btn_book_now btn_main"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking now');?>
</button>
                                        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'setting','cart','customize')) {?>
										<button type="submit" class="btn_add_cart"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add to cart');?>
</button>
                                        <?php }?>
									</div>
                                </form>
                                <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['clsVoucher']->value->getContiOrder($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value) == '1') {?>
                                <form class="form_booking_now" action="" method="post">
                                    <input type="hidden" name="voucher_id" value="<?php echo $_smarty_tpl->tpl_vars['voucher_id']->value;?>
" />
                                    <input type="hidden" name="ContactVoucher" id="ContactVoucher" value="ContactVoucher" />
                                    <button class="bookVoucher contact_now btn_main">
                                        <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Contact");?>

                                    </button>
                                </form>
                                <?php } else { ?>
                                <button type="submit" class="bookVoucher OutVoucher btn_main"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Out of voucher');?>
</button>
                                <?php }?>
                                <?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="contentPage">
				<div class="row">
					<div class="col-md-9">
						<div class="wrap_list_tab bg_fff tinymce_Content">
							<div id="tabsk" class="box__menu">
								<?php $_smarty_tpl->_assignInScope('Intro', $_smarty_tpl->tpl_vars['clsVoucher']->value->getIntro($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));?>
								<?php $_smarty_tpl->_assignInScope('Content', $_smarty_tpl->tpl_vars['clsVoucher']->value->getContent($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));?>
								<?php $_smarty_tpl->_assignInScope('Condition', $_smarty_tpl->tpl_vars['clsVoucher']->value->getLocation($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value));?>
								<ul class="clienttabs list_style_none d-flex">
									<?php if ($_smarty_tpl->tpl_vars['Intro']->value) {?>
									<li><a id="intro--link" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Overview');?>
</a></li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Content']->value) {?>
										<li><a id="overview--link" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Details');?>
</a></li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Condition']->value) {?>
										<li><a id="condition--link" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Conditions apply');?>
</a></li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'reviews','default','default','voucher')) {?>
										<li><a id="reviews--link" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Review');?>
</a></li>
									<?php }?>
								</ul>
							</div>
							<div class="list_tab">
								<?php if ($_smarty_tpl->tpl_vars['Intro']->value) {?>
									<div id="intro" class="intro section__box">
										<h2 class="title_section title_tab"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Overview');?>
</h2>
										<div class="main_intro short_content" data-height="250">
											<?php echo $_smarty_tpl->tpl_vars['Intro']->value;?>

										</div>
									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Content']->value) {?>
									<div id="overview" class="overview section__box">
										<h2 class="title_section title_tab"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Details');?>
</h2>
										<?php echo $_smarty_tpl->tpl_vars['Content']->value;?>

									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Condition']->value) {?>
									<div id="condition" class="condition section__box">
										<h2 class="title_section title_tab"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Conditions apply');?>
</h2>
										<?php echo $_smarty_tpl->tpl_vars['Condition']->value;?>

									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'reviews','default','default','voucher')) {?>
									<div id="reviews" class="review section__box">
										<h2 class="title_section title_tab"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
</h2>
										<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
											<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('review_Star');?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('review_Star_No_Login');?>

										<?php }?>
										<?php if (empty($_smarty_tpl->tpl_vars['numReview']->value)) {?>
											<div class="text_review_bottom">
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Chưa có đánh giá mới nào.');?>
 <a class="btn_write_review_no_login" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Write review');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Write review');?>
</a>
											</div>
										<?php }?>
									</div>
								<?php }?>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="LocationRight">
						  	<div class="contentRight" style="display: none">
							  <p class="titleLocation"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Location');?>
</p>
							  <?php $_smarty_tpl->_assignInScope('itemCity', $_smarty_tpl->tpl_vars['clsCity']->value->getOne($_smarty_tpl->tpl_vars['ListDestination']->value[0]['city_id'],'title,map_lo,map_la'));?>
							  <p class="address"><?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['ListDestination']->value[0]['city_id'],$_smarty_tpl->tpl_vars['itemCity']->value);?>
 </p>
							   <?php $_smarty_tpl->_assignInScope('map_la', $_smarty_tpl->tpl_vars['clsCity']->value->getMapLa($_smarty_tpl->tpl_vars['ListDestination']->value[0]['city_id'],$_smarty_tpl->tpl_vars['itemCity']->value));?>
							   <?php $_smarty_tpl->_assignInScope('map_lo', $_smarty_tpl->tpl_vars['clsCity']->value->getMapLo($_smarty_tpl->tpl_vars['ListDestination']->value[0]['city_id'],$_smarty_tpl->tpl_vars['itemCity']->value));?>
							 <div id="map">
								<div id="map_canvas" style="height:235px; float:right;width: 100%"></div>
							</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['lstVoucherRecommend']->value) {?>
							<div class="listVoucherRe">
								<p class="titleBoxVoucher titleLocation"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher interested');?>
</p>
								<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstVoucherRecommend']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_1_iteration === $__section_i_1_total);
?>
									<?php $_smarty_tpl->_assignInScope('voucher_id', $_smarty_tpl->tpl_vars['lstVoucherRecommend']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['voucher_id']);?>
									<?php $_smarty_tpl->_assignInScope('arrVoucher', $_smarty_tpl->tpl_vars['lstVoucherRecommend']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
                                           <?php $_smarty_tpl->_assignInScope('getLink', $_smarty_tpl->tpl_vars['clsVoucher']->value->getLink($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['lstVoucherRecommend']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                                           <?php $_smarty_tpl->_assignInScope('getTitle', $_smarty_tpl->tpl_vars['clsVoucher']->value->getTitle($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['lstVoucherRecommend']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
                                           <?php $_smarty_tpl->_assignInScope('ListDestination', $_smarty_tpl->tpl_vars['clsVoucherDestination']->value->getByVoucher($_smarty_tpl->tpl_vars['voucher_id']->value));?>
                                           <?php $_smarty_tpl->_assignInScope('_discountInfo', $_smarty_tpl->tpl_vars['clsVoucher']->value->checkIsPromotion($_smarty_tpl->tpl_vars['voucher_id']->value,1));?>
											<?php $_smarty_tpl->_assignInScope('is_discount', $_smarty_tpl->tpl_vars['_discountInfo']->value['is_discount']);?>
											<?php $_smarty_tpl->_assignInScope('is_due_date', $_smarty_tpl->tpl_vars['_discountInfo']->value['discount_info']['is_due_date']);?>
											<?php $_smarty_tpl->_assignInScope('due_date', $_smarty_tpl->tpl_vars['_discountInfo']->value['discount_info']['due_date']);?>
                                          <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
											<?php $_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));?>
											<?php $_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));?>
											<?php $_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNew($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));?>
											<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));?>
											<?php $_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));?>
											<?php $_smarty_tpl->_assignInScope('getStarNew', $_smarty_tpl->tpl_vars['clsReviews']->value->getStarNewNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));?>
										  <?php }?>
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('voucherbox',array("voucher_id"=>$_smarty_tpl->tpl_vars['voucher_id']->value,"arrVoucher"=>$_smarty_tpl->tpl_vars['arrVoucher']->value,"getLink"=>$_smarty_tpl->tpl_vars['getLink']->value,"getTitle"=>$_smarty_tpl->tpl_vars['getTitle']->value,"ListDestination"=>$_smarty_tpl->tpl_vars['ListDestination']->value,"_discountInfo"=>$_smarty_tpl->tpl_vars['_discountInfo']->value,"is_discount"=>$_smarty_tpl->tpl_vars['is_discount']->value,"is_due_date"=>$_smarty_tpl->tpl_vars['is_due_date']->value,"due_date"=>$_smarty_tpl->tpl_vars['due_date']->value,"getToTalReview"=>$_smarty_tpl->tpl_vars['getToTalReview']->value,"getRateAvg"=>$_smarty_tpl->tpl_vars['getRateAvg']->value,"getStarNew"=>$_smarty_tpl->tpl_vars['getStarNew']->value));?>

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
		</div>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_service_ad');?>

	</div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
	var map_la = '<?php echo $_smarty_tpl->tpl_vars['map_la']->value;?>
';
	var map_lo = '<?php echo $_smarty_tpl->tpl_vars['map_lo']->value;?>
';
	var $_View_more = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("View more");?>
';
	var $_Less_more = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Less more");?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	function toggleShorted(_this, e){
		e.preventDefault();
		if(!$(_this).hasClass('clicked')){
			$(_this).parent('.short_content')
					.css('height','auto')
					.removeClass('shorted')
					.addClass('lessmore');
			$(_this).addClass('clicked').text($_Less_more);
		} else {
			var max_height = $(_this).attr('max_height');
			$(_this).parent('.short_content')
					.css('height',max_height)
					.addClass('shorted')
					.removeClass('lessmore');
			$(_this).removeClass('clicked').text($_View_more);
		}
		return false;
	}
	$(function(){
		if($('.short_content').length){
			$('.short_content').each((_i, _elem) => {
				var _max_height = $(_elem).data('height'),
						_origin_height = $(_elem).outerHeight(false);
				if(parseInt(_max_height) < _origin_height){
					$(_elem)
							.height(_max_height)
							.addClass('shorted')
							.append('<a class="more" max_height="'+_max_height+'" onClick="toggleShorted(this,event)">'+$_View_more+'</a>');
				}
			});
		}
	});

$(function(){
		var $owl = $('.sliderImage');
		$owl.owlCarousel({
			items: 1,
			margin: 0,
			nav: false,
			dots: false,
			loop: true,
			autoplay:true,
			responsive: {
				0: { 
					nav: true,
				},
				768: { 
					nav: true,
				},
				1200:{
					nav:true
				}
			},
		});
		initialize();
	});
	if($(window).width() > 992){
	 $.lockfixed("#tabsk", {offset: {top:0,bottom:500}});
	}

function goToByScroll(id) {
   	id = id.replace("--link", "");
   	$('html,body').animate({
   				scrollTop: $("#" + id).offset().top - 140
   			},
   			'slow');
   }
   $("#tabsk > ul li a").click(function (e) {
	   var $_this = $(this);
   	e.preventDefault();
   	goToByScroll($(this).attr("id"));
   });
	
	function initialize() {
		var mapOptions = {
			center: new google.maps.LatLng(map_la,map_lo),
			zoom: 18,
			scaleControl: false,
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}; 
		map = new google.maps.Map(document.getElementById('map_canvas'),mapOptions);
		var marker = new google.maps.Marker({
			map: map,
			position: new google.maps.LatLng(map_la,map_lo),
		});
		var infowindow = new google.maps.InfoWindow({
			map: map,
			position: new google.maps.LatLng(map_la,map_lo),
		});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map, marker);
		});
		setTimeout(function () { infowindow.close(); }, 1000);
	}

<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
	<?php $_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));?>
	<?php $_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('getToTalReview', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));?>
	<?php $_smarty_tpl->_assignInScope('getRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['voucher_id']->value,'voucher'));
}?>

<?php echo '<script'; ?>
 type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?php echo $_smarty_tpl->tpl_vars['getRateAvg']->value;?>
",
    "reviewCount": "<?php echo $_smarty_tpl->tpl_vars['getToTalReview']->value;?>
"
  },
  "description": "<?php echo preg_replace('!<[^>]*?>!', ' ', html_entity_decode($_smarty_tpl->tpl_vars['clsVoucher']->value->getIntro($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value)));?>
",
  "name": "<?php echo $_smarty_tpl->tpl_vars['TitleItem']->value;?>
",
  "image": [
		<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstImage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_2_iteration === $__section_i_2_total);
?>
			"<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['lstImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
"<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>,<?php }?>
		<?php
}
}
?>
  ],
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "<?php echo $_smarty_tpl->tpl_vars['clsVoucher']->value->getPriceSort($_smarty_tpl->tpl_vars['voucher_id']->value,$_smarty_tpl->tpl_vars['oneTable']->value);?>
",
    "priceCurrency": "<?php echo strip_tags($_smarty_tpl->tpl_vars['clsISO']->value->getShortCurrency());?>
"
  },
	"review": [
		<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstReview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_3_iteration === $__section_i_3_total);
?>
			<?php $_smarty_tpl->_assignInScope('oneItemProfile', $_smarty_tpl->tpl_vars['clsProfile']->value->getOne($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profile_id'],'first_name,last_name,full_name,username,avatar,facebook_email,google_email'));?>
			<?php $_smarty_tpl->_assignInScope('full_name', $_smarty_tpl->tpl_vars['clsProfile']->value->getFullname($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profile_id'],$_smarty_tpl->tpl_vars['oneItemProfile']->value));?>
			<?php $_smarty_tpl->_assignInScope('dateSecond', $_smarty_tpl->tpl_vars['clsISO']->value->formatDateSecond($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['review_date']));?>
			<?php $_smarty_tpl->_assignInScope('rateOne', $_smarty_tpl->tpl_vars['clsReviews']->value->getTextRateOne($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
			<?php $_smarty_tpl->_assignInScope('content', html_entity_decode($_smarty_tpl->tpl_vars['clsReviews']->value->getContent($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],400,true,$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])));?>
			{
				"@type": "Review",
				"author": "<?php echo $_smarty_tpl->tpl_vars['full_name']->value;?>
",
				"datePublished": "<?php echo $_smarty_tpl->tpl_vars['dateSecond']->value;?>
",
				"reviewBody": "<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
",
				"name": "",
				"reviewRating": {
					"@type": "Rating",
					"bestRating": "5",
					"ratingValue": "<?php echo $_smarty_tpl->tpl_vars['rateOne']->value;?>
",
					"worstRating": "1"
				}
			}<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>,<?php }?>
		<?php
}
}
?>
	]
}
<?php echo '</script'; ?>
>



	<?php echo '<script'; ?>
 type="text/javascript">
		$(function(){
			$.widget( "ui.spinner", $.ui.spinner, {
				_buttonHtml: function() {
					return "" +
							"<button class='ui-spinner-button ui-spinner-up' type='button'>+</button>" +
							"<button class='ui-spinner-button ui-spinner-down' type='button'>-</button>";
				}
			});
			$('.spinnerExample').spinner({});
			setTimeout(() => {
				if($('.ui-spinner-input').length){
					$('.ui-spinner-input').attr('readonly', true);
				}
			},500);

		});
	<?php echo '</script'; ?>
>
<?php }
}
