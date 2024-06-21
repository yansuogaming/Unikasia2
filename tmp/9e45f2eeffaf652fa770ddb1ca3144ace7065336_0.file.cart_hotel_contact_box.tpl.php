<?php
/* Smarty version 3.1.38, created on 2024-05-06 16:20:11
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/cart_hotel_contact_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6638a0cb292a65_83287699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e45f2eeffaf652fa770ddb1ca3144ace7065336' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/cart_hotel_contact_box.tpl',
      1 => 1714822353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638a0cb292a65_83287699 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cartSessionHotel']->value) {
$_smarty_tpl->_assignInScope('title_hotel', $_smarty_tpl->tpl_vars['clsHotel']->value->getTitle($_smarty_tpl->tpl_vars['cartSessionHotel']->value['hotel_id']));
$_smarty_tpl->_assignInScope('link_hotel', $_smarty_tpl->tpl_vars['clsHotel']->value->getLink($_smarty_tpl->tpl_vars['cartSessionHotel']->value['hotel_id']));?>
<div class="infor_tour bg_fff relative">
    <a href="javascript:void(0);" class="delete_service" data-type="Hotel" key="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete serivce');?>
"><i class="fa fa-times"></i></a>
    <h3 class="title text_bold mb15 size24 size20_mb"><?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
 </h3>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <p class="departure_in4"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check In');?>
  </b></p>
            <p class="departure"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['cartSessionHotel']->value['check_in']);?>
</p>
        </div>
        <div class="col-md-6 col-sm-6">
             <p> <b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check Out');?>
 </b> </p>
             <p class="departure"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['cartSessionHotel']->value['check_out']);?>
</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <p class="departure_in4"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Traveler');?>
  </b></p>
            <p class="departure"><?php echo $_smarty_tpl->tpl_vars['cartSessionHotel']->value['number_adult'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adult(s)');?>
 <?php if ($_smarty_tpl->tpl_vars['cartSessionHotel']->value['number_child']) {?>,<?php echo $_smarty_tpl->tpl_vars['cartSessionHotel']->value['number_child'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child');
}?> </p>
        </div>
    </div>
    <table class="table_booking_price">
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartSessionHotel']->value['room'], 'value', false, 'hotel_room_id', 'room', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_room_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['value']->value['number_room'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('rooms');?>
: <?php echo $_smarty_tpl->tpl_vars['clsHotelRoom']->value->getTitle($_smarty_tpl->tpl_vars['hotel_room_id']->value);?>
</p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php }
}
}
