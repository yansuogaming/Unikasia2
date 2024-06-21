<?php
/* Smarty version 3.1.38, created on 2024-04-08 18:27:11
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_hotel_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613d48f36de90_36488546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1c18b4be04916f32a507770aed84eed01a8b4d9' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/box_hotel_item.tpl',
      1 => 1710727503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613d48f36de90_36488546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));
$_smarty_tpl->_assignInScope('getImageStar', $_smarty_tpl->tpl_vars['clsHotel']->value->getHotelStar($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));?>

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
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
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

                            </h3>
            <div class="address">
                <i class="fa fa-map-marker"></i>
                <?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddress($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value);?>

                <a role="link" title="map" data-bs-toggle="modal" data-bs-target="#mapModal<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Show map');?>
</a>
            </div>
        </div>
        <div class="box_right_body">
            <div class="review">
                <p><?php echo $_smarty_tpl->tpl_vars['textRateAvg']->value;?>
 <span><?php echo $_smarty_tpl->tpl_vars['ratingCount']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</span></p>
                <div class="rate"><?php echo number_format($_smarty_tpl->tpl_vars['ratingValue']->value,1);?>
</div>
            </div>
            <div class="box_price">
                <div class="price_from_text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Only from');?>
</div>
                <div class="div_price"><?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getPriceOnPromotion($_smarty_tpl->tpl_vars['hotel_id']->value);?>
</div>
                <div class="btn_view_detail no_phone"><a class="bg_main" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Detail');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Detail');?>
 <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            </div>
            
        </div>
        <div class="btn_view_detail phone"><a class="bg_main" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Detail');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View Detail');?>
 <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
    </div>

    <div class="modal fade mapModal" id="mapModal<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="https://maps.google.it/maps?q=<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getAddressMapView($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value);?>
&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

</div><?php }
}
