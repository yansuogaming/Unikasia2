<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:06:47
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/hotelRelateBox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661397873d1b96_98415921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0f0e5c68599ed3ebd40978cbbd6bd18caa203a9' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/blocks/hotelRelateBox.tpl',
      1 => 1710818252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661397873d1b96_98415921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));
$_smarty_tpl->_assignInScope('getImageStar', $_smarty_tpl->tpl_vars['clsHotel']->value->getHotelStar($_smarty_tpl->tpl_vars['hotel_id']->value,$_smarty_tpl->tpl_vars['arrHotel']->value));
if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'member','default','default')) {?>
    <?php $_smarty_tpl->_assignInScope('ratingValue', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvg($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel','10'));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('ratingValue', $_smarty_tpl->tpl_vars['clsReviews']->value->getRateAvgNoLogin($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel','10'));
}
$_smarty_tpl->_assignInScope('textRateAvg', $_smarty_tpl->tpl_vars['clsReviews']->value->getTextRateAvg($_smarty_tpl->tpl_vars['hotel_id']->value,'hotel'));?>
<div class="relate_slide_item">
    <div class="relate_slide_image">
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
            <img class="img-responsive img100" src="<?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getImage($_smarty_tpl->tpl_vars['hotel_id']->value,298,195,$_smarty_tpl->tpl_vars['arrHotel']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
        </a>
    </div>
    <div class="relate_slide_item_body">
        <h3 class="relate_slide_item_title">
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
        </h3>
        <div class="score_number">
            <?php echo $_smarty_tpl->tpl_vars['ratingValue']->value;?>
 <span><?php echo $_smarty_tpl->tpl_vars['textRateAvg']->value;?>
</span>
        </div>
        <div class="price_from">
            <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Only from');?>
 <span><?php echo $_smarty_tpl->tpl_vars['clsHotel']->value->getPriceOnPromotion($_smarty_tpl->tpl_vars['hotel_id']->value);?>
</span>
        </div>
    </div>
</div>
<?php }
}
