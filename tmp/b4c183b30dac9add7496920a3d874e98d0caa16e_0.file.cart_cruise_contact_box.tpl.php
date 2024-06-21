<?php
/* Smarty version 3.1.38, created on 2024-05-06 16:20:11
  from '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/cart_cruise_contact_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6638a0cb2c38b4_87044895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4c183b30dac9add7496920a3d874e98d0caa16e' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/isocms/templates/default/blocks/cart_cruise_contact_box.tpl',
      1 => 1714822353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638a0cb2c38b4_87044895 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cartSessionCruise']->value) {
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['cartSessionCruise']->value['cruise_id']));
$_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['clsCruise']->value->getLink($_smarty_tpl->tpl_vars['cartSessionCruise']->value['cruise_id']));
$_smarty_tpl->_assignInScope('end_date', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getTextEndDate($_smarty_tpl->tpl_vars['cartSessionCruise']->value['departure_date'],$_smarty_tpl->tpl_vars['cartSessionCruise']->value['cruise_itinerary_id']));
$_smarty_tpl->_assignInScope('list_cabin_check', $_smarty_tpl->tpl_vars['cartSessionCruise']->value['compare_price']);
$_smarty_tpl->_assignInScope('total_number_service', $_smarty_tpl->tpl_vars['cartSessionCruise']->value['total_number_service']);
$_smarty_tpl->_assignInScope('list_service', $_smarty_tpl->tpl_vars['cartSessionCruise']->value['cruise_service']);?>

<div class="infor_tour bg_fff relative">
    <a href="javascript:void(0);" data-type="Cruise" class="delete_service" key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete serivce');?>
"><i class="fa fa-times"></i></a>
    <h3 class="title text_bold mb15 size24 size20_mb"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h3>
    <p id="<?php echo $_smarty_tpl->tpl_vars['cartSessionCruise']->value['cruise_itinerary_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Itinerary');?>
: <span class="text_bold"><?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getDuration($_smarty_tpl->tpl_vars['cartSessionCruise']->value['cruise_itinerary_id']);?>
</span></p>
    <div class="row d-flex">
		<div class="col-md-5 col-sm-5">
			<p class="mb05"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departing');?>
  </strong></p>
			<p class="departure_date mb0"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['cartSessionCruise']->value['departure_date']);?>
</p>
		</div>
		<div class="col-md-1 col-sm-1 icon_arrow">

		</div>
		<div class="col-md-6 col-sm-6">
			<p class="mb05"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('End');?>
 </strong></p>
			<p class="departure_date mb0"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->converTimeToText5($_smarty_tpl->tpl_vars['end_date']->value);?>
</p>
		</div>
	</div>
   	<div class="more_infor">
        
        

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_bed']->value, 'item', false, 'key', 'item', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']++;
?>
        <div class="box_item_room_cabin">
            <div class="row item_room_cabin d-flex">
                <div class="col-md-6 col-sm-6">
                    <div class="d-flex">
                        <div class="box_left">
                            <label for="" class="lbl_cabin"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['iteration'] : null);?>
:</label>
                        </div>
                        <div class="box_right">
                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['bed_type'];?>
 </span>
                        </div>
                    </div>												
                </div>	
            </div>
            <div class="row item_room_cabin d-flex">
                <div class="col-md-6 col-sm-6">
                    <div class="d-flex">
                        <div class="box_left"></div>
                        <div class="box_right">
                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['number_adult'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adult');?>
</span>
                        </div>						
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <span><?php echo $_smarty_tpl->tpl_vars['item']->value['txt_price_adult'];?>
</span>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['cartSessionCruise']->value['number_child'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_cabin_check']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->lst_child, 'lst_child', false, 'key');
$_smarty_tpl->tpl_vars['lst_child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['lst_child']->value) {
$_smarty_tpl->tpl_vars['lst_child']->do_else = false;
?>
            <div class="row item_room_cabin d-flex">
                <div class="col-md-6 col-sm-1">
                    <div class="d-flex">
                        <div class="box_left"></div>
                        <div class="box_right">
                            <span><?php echo $_smarty_tpl->tpl_vars['lst_child']->value->number_child;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
 (<?php echo $_smarty_tpl->tpl_vars['lst_child']->value->str_age;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('age');?>
)</span>
                        </div>						
                    </div>						
                </div>
                <div class="col-md-6 col-sm-6">
                    <span><?php echo $_smarty_tpl->tpl_vars['lst_child']->value->txt_price_child;?>
</span>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['is_extra_bed'] == 1) {?>
            <div class="row item_room_cabin d-flex">
                <div class="col-md-6 col-sm-6">
                    <div class="d-flex">
                        <div class="box_left"></div>
                        <div class="box_right">
                            <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra Bed');?>
 </span>
                        </div>						
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <span><?php echo $_smarty_tpl->tpl_vars['item']->value['txt_price_extra_bed'];?>
</span>
                </div>
            </div>
            <?php }?>
 
        </div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['total_number_service']->value) {?>
        <div class="box_service">
            <p class="mb05"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addon services');?>
  </strong></p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_service']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class="item_service d-flex justify-content-between">
                <div class="title_service">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
 x <?php echo $_smarty_tpl->tpl_vars['clsCruiseService']->value->getTitle($_smarty_tpl->tpl_vars['item']->value['cruise_service_id']);?>

                </div>	
                <div class="price_service">
                    <?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
                        <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPriceText($_smarty_tpl->tpl_vars['item']->value['price']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPriceText($_smarty_tpl->tpl_vars['item']->value['price']);?>

                    <?php }?> 
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php }?>
	</div>
</div>
<?php }
}
}
