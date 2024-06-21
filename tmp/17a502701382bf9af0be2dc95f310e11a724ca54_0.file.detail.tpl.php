<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:06:47
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/hotel/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661397870b9797_24389362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a502701382bf9af0be2dc95f310e11a724ca54' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/hotel/detail.tpl',
      1 => 1709800578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661397870b9797_24389362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('title_hotel', $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));
$_smarty_tpl->_assignInScope('hotel__id', $_smarty_tpl->tpl_vars['hotel_id']->value);
$_smarty_tpl->_assignInScope('intro_hotel', $_smarty_tpl->tpl_vars['oneItem']->value['intro']);
$_smarty_tpl->_assignInScope('overview_hotel', $_smarty_tpl->tpl_vars['oneItem']->value['overview']);
$_smarty_tpl->_assignInScope('bookingPolicy_hotel', $_smarty_tpl->tpl_vars['clsHotel']->value->getHotelBookingPolicy($_smarty_tpl->tpl_vars['hotel_id']->value,'oneItem'));?>

<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
    <?php $_smarty_tpl->_assignInScope('ratingValue', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['hotel__id']->value,'hotel'));?>
    <?php $_smarty_tpl->_assignInScope('bestRating', $_smarty_tpl->tpl_vars['clsReviews']->value->getBestRate($_smarty_tpl->tpl_vars['hotel__id']->value,'hotel'));?>
    <?php $_smarty_tpl->_assignInScope('ratingCount', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['hotel__id']->value,'hotel'));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('ratingValue', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['hotel__id']->value,'hotel'));?>
    <?php $_smarty_tpl->_assignInScope('bestRating', $_smarty_tpl->tpl_vars['clsReviews']->value->getBestRate($_smarty_tpl->tpl_vars['hotel__id']->value,'hotel'));?>
    <?php $_smarty_tpl->_assignInScope('ratingCount', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['hotel__id']->value,'hotel'));
}
echo smarty_function_math(array('equation'=>'x'*2,'assign'=>"rating_value_of_10",'x'=>$_smarty_tpl->tpl_vars['ratingValue']->value),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('textRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getTextRateAvg($_smarty_tpl->tpl_vars['hotel__id']->value,'hotel'));?>

<?php echo '<script'; ?>
 type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Hotel",
    "name": "<?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
",
    "description": "<?php echo preg_replace('!<[^>]*?>!', ' ', smarty_modifier_replace(html_entity_decode($_smarty_tpl->tpl_vars['intro_hotel']->value),'"','\"'));?>
",
    "address": {
        "@type": "PostalAddress",
        "addressCountry": "<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
",
        "addressLocality": "",
        "addressRegion": "<?php echo $_smarty_tpl->tpl_vars['district_name']->value;?>
",
        "postalCode": "",
        "streetAddress": "<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddress($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value);?>
"
    },
    "telephone": "<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phone'];?>
",
    "photo": [				
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listImage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['listImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
",
        <?php
}
}
?>
        "<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
"
    ]
}
<?php echo '</script'; ?>
>

<div class="page_container bg_fff">
    <nav class="breadcrumb-main  breadcrumb-cruise bg-default breadcrumb-more bg_fff">
        <div class="container">
            <ol class="breadcrumb hidden-xs mt0 bg_fff" itemscope itemtype="https://schema.org/BreadcrumbList">
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
">
					   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span></a>
					<meta itemprop="position" content="1" />
				</li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				   <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('hotel');?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
">
					   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
</span></a>
					<meta itemprop="position" content="2" />
				</li>
              	<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['country_id']) {?>
              	
					<?php $_smarty_tpl->_assignInScope('title_country', $_smarty_tpl->tpl_vars['clsCountryEx']->value->getTitle($_smarty_tpl->tpl_vars['oneItem']->value['country_id']));?>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					   <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['clsCountryEx']->value->getLink($_smarty_tpl->tpl_vars['oneItem']->value['country_id'],'Hotel');?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
">
						   <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_country']->value;?>
</span></a>
						<meta itemprop="position" content="3" />
					</li>
            		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					  <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
">
						  <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
</span></a>
					   <meta itemprop="position" content="4" />
					</li>
             	<?php } else { ?>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					  <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
">
						  <span itemprop="name" class="reb"><?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
</span></a>
					   <meta itemprop="position" content="3" />
					</li>
              	<?php }?>
               
            </ol>
        </div>
    </nav>
    <div id="contentPage" class="content hotelPageDetail mt05">
        <div class="hotelDetail">
            <div class="container">
				<section class="section_box_image_top">
					<div class="row">
						<div class="col-lg-8">
							<div class="big_image">
                                <img class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getImage($_smarty_tpl->tpl_vars['hotel_id']->value,850,391,$_smarty_tpl->tpl_vars['oneItem']->value);?>
"/>
                                <p class="view_all" data-fancybox="gallery" href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('See all');?>
</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="list_image_small">
                                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listImage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<div class="small_image" data-fancybox="gallery" href="<?php echo $_smarty_tpl->tpl_vars['listImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) > 3) {?>hidden<?php }?>>
                                    <img class="img100" alt="<?php echo $_smarty_tpl->tpl_vars['clsHotelImage']->value->getTitle($_smarty_tpl->tpl_vars['listImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_image_id'],$_smarty_tpl->tpl_vars['listImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsHotelImage']->value->getImage($_smarty_tpl->tpl_vars['listImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_image_id'],202,189,$_smarty_tpl->tpl_vars['listImage']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"/>
								</div>
                                <?php
}
}
?>
							</div>
						</div>
					</div>
				</section>
				
				<div class="row">
					<div class="col-lg-8">
						<section class="hotel_detail_main">
							<div class="info_review_top">
                                <div class="info_review_top_left">
                                    <?php if ($_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['oneItem']->value['list_TypeHotel'])) {?>
                                        <div class="hotel_text_cat">
                                            <?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['oneItem']->value['list_TypeHotel']);?>

                                        </div>
                                    <?php }?>
                                    <div class="rank_level">
                                        <?php echo number_format($_smarty_tpl->tpl_vars['ratingValue']->value,1);?>
/5 - <?php echo $_smarty_tpl->tpl_vars['textRateAvg']->value;?>

                                    </div>
                                    <div class="total_review">
                                        <?php echo $_smarty_tpl->tpl_vars['ratingCount']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>

                                    </div>
                                </div>
                                <div class="icon_share">
                                    <i class="ic ic_share"></i>
                                    <div class="share_box">
                                        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.sharer.js?v=<?php echo $_smarty_tpl->tpl_vars['up_version']->value;?>
"><?php echo '</script'; ?>
>
                                        <?php $_smarty_tpl->_assignInScope('link_share', $_smarty_tpl->tpl_vars['curl']->value);?>
                                        <?php $_smarty_tpl->_assignInScope('title_share', $_smarty_tpl->tpl_vars['title_hotel']->value);?>
                                        <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('box_share',array("link_share"=>$_smarty_tpl->tpl_vars['link_share']->value,"title_share"=>$_smarty_tpl->tpl_vars['title_share']->value));?>

                                    </div>
                                </div>
							</div>
							<div class="box_sec_title">
								<h1 class="sec_title">
                                    <?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>

                                    <?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getStarNew($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value);?>

                                    								</h1>
								<div class="address">
									<i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddress($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value);?>
 -
                                    <a role="link" title="map" data-bs-toggle="modal" data-bs-target="#mapModal<?php echo $_smarty_tpl->tpl_vars['hotel__id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Show map');?>
</a>
                                    <div class="modal fade mapModal" id="mapModal<?php echo $_smarty_tpl->tpl_vars['hotel__id']->value;?>
" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe src="https://maps.google.it/maps?q=<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddressMapView($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value);?>
&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
							<div class="sec_intro">
                                <?php echo html_entity_decode($_smarty_tpl->tpl_vars['overview_hotel']->value);?>

							</div>
                            <?php if ($_smarty_tpl->tpl_vars['lstHotelFacility']->value) {?>
                            <div class="box_facilities">
                                <div class="box_facilities_title">
                                    <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Most popular amenities');?>

                                </div>
                                <div class="list_facilities">
                                    <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstHotelFacility']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                    <div class="facilities_item align-items-center">
                                        <?php if ($_smarty_tpl->tpl_vars['clsProperty']->value->getImage($_smarty_tpl->tpl_vars['lstHotelFacility']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])) {?>
                                        <img width="16" height="16" src="<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getImage($_smarty_tpl->tpl_vars['lstHotelFacility']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['lstHotelFacility']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"/> 
                                        <?php }?>
                                        <div class="facilities_name">
                                            <?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['lstHotelFacility']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>

                                        </div>
                                    </div>
                                    <?php
}
}
?>

                                </div>
                            </div>
                            <?php }?>

						</section>

					</div>
					<div class="col-lg-4">
						<section class="box_right_info_hotel sticky_fix">
							<div class="box_info_right_top">
								<div class="price_from_text">
                                    <?php if ($_smarty_tpl->tpl_vars['clsHotel']->value->getPriceOnPromotion($_smarty_tpl->tpl_vars['hotel_id']->value,'detail')) {?>
                                        <div class="from_text">
                                            <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Only from');?>

                                        </div>
                                        <div class="val_price">
                                            <?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getPriceOnPromotion($_smarty_tpl->tpl_vars['hotel_id']->value,'detail');?>

                                        </div>
                                    <?php }?>
								</div>
                                <form action="" method="post">
                                    <input type="hidden" name="hotel_id" value="<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
">
                                    <input type="hidden" name="ContactHotel" value="ContactHotel">
                                    <button class="departure_day"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</button>
                                </form>
                            </div>
                            <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lfaqscolbox');?>


						</section>
					</div>
				</div>
                <?php $_smarty_tpl->_assignInScope('_CheckInRoom', $_smarty_tpl->tpl_vars['clsHotel']->value->getCheckInRoom($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));?>
                <?php $_smarty_tpl->_assignInScope('_CheckOutRoom', $_smarty_tpl->tpl_vars['clsHotel']->value->getCheckOutRoom($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));?>
                <?php $_smarty_tpl->_assignInScope('_BookingPolicy', $_smarty_tpl->tpl_vars['clsHotel']->value->getBookingPolicy($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));?>
                <?php $_smarty_tpl->_assignInScope('_ChildPolicy', $_smarty_tpl->tpl_vars['clsHotel']->value->getChildPolicy($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));?>
                <?php $_smarty_tpl->_assignInScope('_CancellationPolicy', $_smarty_tpl->tpl_vars['clsHotel']->value->getCancellationPolicy($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));?>
                <?php $_smarty_tpl->_assignInScope('_OtherPolicy', $_smarty_tpl->tpl_vars['clsHotel']->value->getOtherPolicy($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value));?>
                <?php if ($_smarty_tpl->tpl_vars['_CheckInRoom']->value || $_smarty_tpl->tpl_vars['_BookingPolicy']->value || $_smarty_tpl->tpl_vars['_ChildPolicy']->value || $_smarty_tpl->tpl_vars['_CancellationPolicy']->value || $_smarty_tpl->tpl_vars['_OtherPolicy']->value || $_smarty_tpl->tpl_vars['listCustomField']->value) {?>
               <section class="sec_info_hotel">
                   <h2 class="sec_info_title"><?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Informations');?>
</h2>
                   <div class="important_note_box">
                       <?php if ($_smarty_tpl->tpl_vars['_CheckInRoom']->value || $_smarty_tpl->tpl_vars['_CheckOutRoom']->value) {?>
                       <div class="important_note_item">
                           <h3 class="note_title check_in_out"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check-in/check-out time');?>
</h3>
                           <div class="box_right">
                               <p class="box_right_content"><?php echo $_smarty_tpl->tpl_vars['_CheckInRoom']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_CheckOutRoom']->value;?>
</p>
                           </div>
                       </div>
                       <?php }?>

                       <?php if ($_smarty_tpl->tpl_vars['_BookingPolicy']->value != '') {?>
                       <div class="important_note_item">
                           <h3 class="note_title booking_policy"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking policy');?>
</h3>
                           <div class="box_right">
                               <p class="box_right_content"><?php echo $_smarty_tpl->tpl_vars['_BookingPolicy']->value;?>
</p>
                           </div>
                       </div>
                       <?php }?>

                       <?php if ($_smarty_tpl->tpl_vars['_ChildPolicy']->value != '') {?>
                       <div class="important_note_item">
                           <h3 class="note_title bed"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children policy and bed');?>
</h3>
                           <div class="box_right">
                               <p class="box_right_content"><?php echo $_smarty_tpl->tpl_vars['_ChildPolicy']->value;?>
</p>
                           </div>
                       </div>
                       <?php }?>

                       <?php if ($_smarty_tpl->tpl_vars['_CancellationPolicy']->value != '') {?>
                       <div class="important_note_item">
                           <h3 class="note_title cancel_prepay"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancellation/prepayment');?>
</h3>
                           <div class="box_right">
                               <p class="box_right_content"><?php echo $_smarty_tpl->tpl_vars['_CancellationPolicy']->value;?>
</p>
                           </div>
                       </div>
                       <?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['_OtherPolicy']->value != '') {?>
                       <div class="important_note_item">
                           <h3 class="note_title other_regulation"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other regulations');?>
</h3>
                           <div class="box_right">
                               <p class="box_right_content"><?php echo $_smarty_tpl->tpl_vars['_OtherPolicy']->value;?>
</p>
                           </div>
                       </div>
                       <?php }?>

                       <?php if ($_smarty_tpl->tpl_vars['listCustomField']->value) {?>
                           <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCustomField']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                               <?php if ($_smarty_tpl->tpl_vars['listCustomField']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fieldvalue'] != '') {?>
                                   <div class="important_note_item">
                                       <h3 class="note_title"><?php echo $_smarty_tpl->tpl_vars['listCustomField']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fieldname'];?>
</h3>
                                       <div class="box_right">
                                           <p class="box_right_content"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['listCustomField']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fieldvalue']);?>
</p>
                                       </div>
                                   </div>
                               <?php }?>
                           <?php
}
}
?>
                       <?php }?>
                   </div>
               </section>
                <?php }?>

                <section class="customer_reviews">
                    <h2 class="customer_review_title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customer reviews');?>
</h2>
                    <div class="customer_reviews_main">
                        <div class="reviews_box_top">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="box_score">
                                        <div class="score_number"><?php echo $_smarty_tpl->tpl_vars['ratingValue']->value;?>
</div>
                                        <div class="score_text">
                                            <p class="txt_score"><?php echo $_smarty_tpl->tpl_vars['textRateAvg']->value;?>
</p>
                                            <p class="number_review">
                                                <?php echo $_smarty_tpl->tpl_vars['ratingCount']->value;?>
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
										<?php if ($_smarty_tpl->tpl_vars['lstReviewHotel']->value['staff']) {?>
											<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewHotel']->value['staff'],'assign'=>'staff'),$_smarty_tpl);?>

										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('staff', 0);?>
										<?php }?>
										<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Staff');?>
</label>
										<div class="d-flex flex-wrap justify-content-between align-items-center">
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['staff']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewHotel']->value['staff'];?>
%"></div>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['staff']->value;?>
</span>
										</div>
									</div>
                                   	<div class="box_rate_score">
										<?php if ($_smarty_tpl->tpl_vars['lstReviewHotel']->value['place']) {?>
											<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewHotel']->value['place'],'assign'=>'place'),$_smarty_tpl);?>

										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('place', 0);?>
										<?php }?>
										<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Place');?>
</label>
										<div class="d-flex flex-wrap justify-content-between align-items-center">
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['place']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewHotel']->value['place'];?>
%"></div>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['place']->value;?>
</span>
										</div>
									</div>
                                </div>
                                <div class="col-lg-3">
                                   	<div class="box_rate_score">
										<?php if ($_smarty_tpl->tpl_vars['lstReviewHotel']->value['amenities']) {?>
											<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewHotel']->value['amenities'],'assign'=>'amenities'),$_smarty_tpl);?>

										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('amenities', 0);?>
										<?php }?>
										<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amenities');?>
</label>
										<div class="d-flex flex-wrap justify-content-between align-items-center">
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['amenities']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewHotel']->value['amenities'];?>
%"></div>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['amenities']->value;?>
</span>
										</div>
									</div>
                                   	<div class="box_rate_score">
										<?php if ($_smarty_tpl->tpl_vars['lstReviewHotel']->value['food_drink']) {?>
											<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewHotel']->value['food_drink'],'assign'=>'food_drink'),$_smarty_tpl);?>

										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('food_drink', 0);?>
										<?php }?>
										<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Food&amp;Drink');?>
</label>
										<div class="d-flex flex-wrap justify-content-between align-items-center">
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['food_drink']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewHotel']->value['food_drink'];?>
%"></div>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['food_drink']->value;?>
</span>
										</div>
									</div>
                                </div>
                                <div class="col-lg-3">
                                   	<div class="box_rate_score">
										<?php if ($_smarty_tpl->tpl_vars['lstReviewHotel']->value['clean']) {?>
											<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewHotel']->value['clean'],'assign'=>'clean'),$_smarty_tpl);?>

										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('clean', 0);?>
										<?php }?>
										<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Clean');?>
</label>
										<div class="d-flex flex-wrap justify-content-between align-items-center">
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['clean']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewHotel']->value['clean'];?>
%"></div>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['clean']->value;?>
</span>
										</div>
									</div>
                                   	<div class="box_rate_score">
										<?php if ($_smarty_tpl->tpl_vars['lstReviewHotel']->value['worthy']) {?>
											<?php echo smarty_function_math(array('equation'=>'x/10','x'=>$_smarty_tpl->tpl_vars['lstReviewHotel']->value['worthy'],'assign'=>'worthy'),$_smarty_tpl);?>

										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('worthy', 0);?>
										<?php }?>
										<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Worthy');?>
</label>
										<div class="d-flex flex-wrap justify-content-between align-items-center">
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['worthy']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['lstReviewHotel']->value['worthy'];?>
%"></div>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['worthy']->value;?>
</span>
										</div>
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
                        <div class="owl-carousel list_customer_review_items">
                           <?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstReview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<?php $_smarty_tpl->_assignInScope('reviews_content', $_smarty_tpl->tpl_vars['clsReviews']->value->getContent($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'],400,true,$_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]));?>
								<div class="customer_reviews_item review_item">
									<div class="customer_intro">
										<div class="customer_avatar avatar"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fullname'],1,'',true);?>
</div>
										<div class="customer_info">
											<div class="customer_name"><?php echo $_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fullname'];?>
</div>
											<div class="address"><?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']);?>
</div>
										</div>
									</div>
									<div class="customer_reviews_text content_review content_review_short">
										<?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsISO']->value->truncateWord($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['content'],30,$_smarty_tpl->tpl_vars['btn_view_more']->value));?>

									</div>
									<div class="content_review content_review_full" style="display:none">
										<?php echo html_entity_decode($_smarty_tpl->tpl_vars['lstReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['content']);?>

									</div>								

								</div>
                            <?php
}
}
?>
                        </div>
                    </div>
                </section>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_service_ad');?>

            <?php if ($_smarty_tpl->tpl_vars['lstHotelRelated']->value) {?>
            <section class="sec_relate_box">
                <div class="container">
                    <div class="headBox">
                        <h2 class="sec_relate_title text-left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Maybe you are interested');?>
</h2>
                    </div>
                    <div class="owl-carousel related_slides">
                        <?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstHotelRelated']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->_assignInScope('hotel_id', $_smarty_tpl->tpl_vars['lstHotelRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_id']);?>
                        <?php $_smarty_tpl->_assignInScope('arrHotel', $_smarty_tpl->tpl_vars['lstHotelRelated']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
                            <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock('hotelRelateBox',array("hotel_id"=>$_smarty_tpl->tpl_vars['hotel_id']->value,"arrHotel"=>$_smarty_tpl->tpl_vars['arrHotel']->value));?>

                        <?php
}
}
?>
                    </div>
                </div>
            </section>
            <?php }?>

        </div>
    </div>
</div>
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
		$(".read_more_review").click(function(){
			var item_review_clone = $(this).closest('.review_item').clone();
			$("#mdReview").find('.box_content').html(item_review_clone);
			$("#mdReview").find(".content_review_short,.read_more_review").hide();
			$("#mdReview").find(".content_review_full").show();
			var bg_color = $(this).closest('.review_item').find('.avatar').css('background-color');
			$("#mdReview").find(".avatar").css('background-color',bg_color);
		});
        Fancybox.bind("[data-fancybox]", {

        });
        $('.list_customer_review_items').owlCarousel({
            loop:false,
            margin:30,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    margin: 20,
                    items:1
                },
                600:{
                    items:2
                },
                992:{
                    items:3
                },
                1025:{
                    items:3
                }
            }
        });

        $('.related_slides').owlCarousel({
            loop:false,
            margin:30,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    margin: 20,
                    items:1
                },
                600:{
                    items:2
                },
                992:{
                    items:4
                },
                1025:{
                    items:4
                }
            }
        });

    <?php echo '</script'; ?>
>
<?php }
}
