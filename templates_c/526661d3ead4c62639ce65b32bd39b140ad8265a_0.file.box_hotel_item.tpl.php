<?php
/* Smarty version 3.1.38, created on 2024-05-09 16:04:21
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/box_hotel_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_663c9195297527_65603245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '526661d3ead4c62639ce65b32bd39b140ad8265a' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/box_hotel_item.tpl',
      1 => 1715244986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663c9195297527_65603245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));
$_smarty_tpl->_assignInScope('getImageStar', $_smarty_tpl->tpl_vars['clsHotel']->value->getHotelStar($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));
$_smarty_tpl->_assignInScope('hotelFacility', $_smarty_tpl->tpl_vars['clsHotel']->value->getListHotelFacility($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));?>

<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
    <?php $_smarty_tpl->_assignInScope('ratingValue', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel','10'));?>
    <?php $_smarty_tpl->_assignInScope('bestRating', $_smarty_tpl->tpl_vars['clsReviews']->value->getBestRate($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel'));?>
    <?php $_smarty_tpl->_assignInScope('ratingCount', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReview($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel'));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('ratingValue', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel','10'));?>
    <?php $_smarty_tpl->_assignInScope('bestRating', $_smarty_tpl->tpl_vars['clsReviews']->value->getBestRate($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel'));?>
    <?php $_smarty_tpl->_assignInScope('ratingCount', $_smarty_tpl->tpl_vars['clsReviews']->value->getToTalReviewNoLogin($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel'));
}
$_smarty_tpl->_assignInScope('textRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getTextRateAvg($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel'));?>

<div class="box_hotel_item <?php echo $_smarty_tpl->tpl_vars['package_id']->value;?>
">
        <div class="img_hotel">
            <a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
                <img class="img-responsive img100" src="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getImage($_smarty_tpl->tpl_vars['hotel_id']->value,277,181,$_smarty_tpl->tpl_vars['arrHotel']->value);?>
"
                    alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
                <div class="heartIcon">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/hotel/hotel/Heart.svg" alt="error">
                </div>
            </a>
        </div>
        <div class="box_item_body">
            <div class="box_left_body">
                <h3 class="box_body_title">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
                    <?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getStarNew($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value);?>

                    <?php if ($_smarty_tpl->tpl_vars['getImageStar']->value != null) {?><img class="star" height="19" src="<?php echo $_smarty_tpl->tpl_vars['getImageStar']->value;?>
" alt="star"
                        style="width: auto" /><?php }?>
                </h3>
                <div class="box_body-hotel">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/hotel/iconHome.svg" alt="error">
                    <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Apartments');?>
</p>

                </div>
                <div class="address">
                    <div class="box_body_adress">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/hotel/address.svg" alt="error">
                        <p><?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddress($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value);?>
</p>
                    </div>
                    <a role="link" title="map" data-bs-toggle="modal"
                        data-bs-target="#mapModal<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Show map');?>
</a>
                </div>
                <div class="box_body-check">
                    <div class="box_body-meal">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/hotel/iconCheck.svg" alt="error">
                        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Breakfast included');?>
</p>
                    </div>
                    <div class="box_body-meal">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/hotel/iconCheck.svg" alt="error">
                        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No prepayment');?>
</p>
                    </div>
                </div>
                <div class="box_body-service">
                    <?php if ((isset($_smarty_tpl->tpl_vars['hotelFacility']->value)) && $_smarty_tpl->tpl_vars['hotelFacility']->value) {?>
                        <?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['hotelFacility']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <?php if ($_smarty_tpl->tpl_vars['clsProperty']->value->getImage($_smarty_tpl->tpl_vars['hotelFacility']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]) && (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) < 5) {?>
                                <img data-bs-title="<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['hotelFacility']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" data-bs-custom-class="custom-tooltip"
                                    data-bs-toggle="tooltip" data-bs-placement="top" width="16" height="16"
                                    src="<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getImage($_smarty_tpl->tpl_vars['hotelFacility']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"
                                    alt="<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['hotelFacility']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" />
                            <?php }?>
                        <?php
}
}
?>

                        <?php if (count($_smarty_tpl->tpl_vars['hotelFacility']->value) > 5) {?>
                            <a data-bs-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
" data-bs-custom-class="custom-tooltip"
                                data-bs-toggle="tooltip" data-bs-placement="top" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
">
                                <div data-bs-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('More');?>
" data-bs-custom-class="custom-tooltip"
                                    data-bs-toggle="tooltip" data-bs-placement="top" class="box_body-service-item">
                                    +<?php echo count($_smarty_tpl->tpl_vars['hotelFacility']->value)-5;?>
</div>
                            </a>
                        <?php }?>
                    <?php }?>

                </div>
            </div>


            <div class="btn_view_detail phone"><a class="bg_main" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"
                    title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Detail');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Detail');?>
 <i class="fa fa-angle-right"
                        aria-hidden="true"></i></a></div>
        </div>
        <div class="box_right_body">
            <?php if (!(isset($_smarty_tpl->tpl_vars['ratingCount']->value)) || !$_smarty_tpl->tpl_vars['ratingCount']->value) {?>
                <div class="review" style=""></div>
            <?php } else { ?>
                <div class="review">
                    <p><?php echo $_smarty_tpl->tpl_vars['textRateAvg']->value;?>

                        <span>

                            (<?php echo $_smarty_tpl->tpl_vars['ratingCount']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
)

                        </span>
                    </p>
                    <div class="rate"><?php echo number_format($_smarty_tpl->tpl_vars['ratingValue']->value,1);?>
</div>
                </div>
            <?php }?>
            <div class="box_price">
                <div class="price_from_text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Avg price per night');?>
</div>
                <div class="div_price text-end"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('US');?>

                    <span><?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getPriceOnPromotion($_smarty_tpl->tpl_vars['hotel_id']->value);?>
</span></div>
                <div class="box_right-price">
                </div>
                <div class="btn_view_detail no_phone"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"
                        title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Detail');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Detail');?>
 <img
                            style="margin-left: 8px;" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/hotel/ArrowRight.svg" alt="error">
                    </a></div>
            </div>

        </div>


    <div class="modal fade mapModal" id="mapModal<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" tabindex="-1" aria-labelledby="mapModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe
                        src="https://maps.google.it/maps?q=<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddressMapView($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value);?>
&output=embed"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

</div><?php }
}
