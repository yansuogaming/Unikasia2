<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:48:34
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/loadCabinPriceCheckrate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613af62e64340_11892261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8be8c988bd9f07dc4ef696816910f11bfc471025' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/cruise/loadCabinPriceCheckrate.tpl',
      1 => 1712030850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613af62e64340_11892261 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['lstCruiseCabinID']->value) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstCruiseCabinID']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<?php $_smarty_tpl->_assignInScope('cruise_cabin_id', $_smarty_tpl->tpl_vars['item']->value['cruise_cabin_id']);?>
		<?php $_smarty_tpl->_assignInScope('title_cabin', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cruise_cabin_id']->value));?>
		<?php $_smarty_tpl->_assignInScope('max_adult', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getMaxAdult($_smarty_tpl->tpl_vars['cruise_cabin_id']->value));?>
		<?php $_smarty_tpl->_assignInScope('cabinSize', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getCabinSize($_smarty_tpl->tpl_vars['cruise_cabin_id']->value));?>
		<?php $_smarty_tpl->_assignInScope('bed_size', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getBedOption($_smarty_tpl->tpl_vars['cruise_cabin_id']->value));?>
		<?php $_smarty_tpl->_assignInScope('arr_price_cabin', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getArrayPriceCabinCruise($_smarty_tpl->tpl_vars['cruise_cabin_id']->value,$_smarty_tpl->tpl_vars['arraycheckrateCabin']->value,$_smarty_tpl->tpl_vars['promotion_date']->value,$_smarty_tpl->tpl_vars['cruise_id']->value));?>
		<?php $_smarty_tpl->_assignInScope('intro_cabin', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getIntro($_smarty_tpl->tpl_vars['cruise_cabin_id']->value));?>
		<?php $_smarty_tpl->_assignInScope('facilities_cabin', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getCabinFaci($_smarty_tpl->tpl_vars['cruise_cabin_id']->value,$_smarty_tpl->tpl_vars['item']->value));?>
		<?php $_smarty_tpl->_assignInScope('list_cabin_check', $_smarty_tpl->tpl_vars['item']->value['compare_price']);?>
		<?php $_smarty_tpl->_assignInScope('list_total_price', $_smarty_tpl->tpl_vars['item']->value['total_price']);?>
		<div class="box_item_cabin d-flex flex-wrap">
			<div class="box_right_item_cabin">
				<img src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getImage($_smarty_tpl->tpl_vars['cruise_cabin_id']->value,355,236);?>
" alt="" width="355" height="236">
			</div>
			<div class="box_left_item_cabin d-flex flex-wrap">
				<div class="box_info_cabin">
                    <?php $_smarty_tpl->_assignInScope('total_cabin', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTotalCabin($_smarty_tpl->tpl_vars['cruise_cabin_id']->value));?>
					<h3 class="title_cabin"><?php echo $_smarty_tpl->tpl_vars['title_cabin']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['total_cabin']->value > 0) {?><span class="text_normal size16">(<?php echo $_smarty_tpl->tpl_vars['total_cabin']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
)</span><?php }?></h3>
					<div class="cabin_itinerary">
						<?php if ($_smarty_tpl->tpl_vars['max_adult']->value) {?><p class="item_info_cabin icon_cruise_before number_person"><?php echo $_smarty_tpl->tpl_vars['max_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pax');?>
</p><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['cabinSize']->value) {?><p class="item_info_cabin icon_cruise_before area_cabin"><?php echo $_smarty_tpl->tpl_vars['cabinSize']->value;?>
 m2</p><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['bed_size']->value) {?><p class="item_info_cabin icon_cruise_before bed_cabin"><?php echo $_smarty_tpl->tpl_vars['bed_size']->value;?>
</p><?php }?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['facilities_cabin']->value) {?><p class="item_info_cabin icon_cruise_before meals_cabin"><?php echo $_smarty_tpl->tpl_vars['facilities_cabin']->value;?>
</p><?php }?>
					<p class="item_info_cabin icon_cruise_before promotion_cabin"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Prices include VAT');?>
</p>						
					<a class="btn_textCabinDetail collapsed" href="javascript:void(0)" role="button" data-bs-toggle="modal" data-bs-target="#roomModalB<?php echo $_smarty_tpl->tpl_vars['cruise_cabin_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin Detail');?>
 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div>
				<div class="box_price_cruise">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_cabin_check']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<div class="box_item_room_cabin">
							<h4 class="name_room_cabin"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
: <?php echo $_smarty_tpl->tpl_vars['list_cabin_check']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bed_type'];?>
</h4>
							<p class="group_size_room_cabin">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adult');?>
 <?php echo $_smarty_tpl->tpl_vars['list_cabin_check']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_adult'];?>
 x <?php echo $_smarty_tpl->tpl_vars['list_cabin_check']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['txt_price_adult'];?>
</p>
							<?php if ($_smarty_tpl->tpl_vars['number_child']->value > 0) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_cabin_check']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lst_child'], 'lst_child', false, 'key');
$_smarty_tpl->tpl_vars['lst_child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['lst_child']->value) {
$_smarty_tpl->tpl_vars['lst_child']->do_else = false;
?>
									<p class="group_size_room_cabin"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
 <?php echo $_smarty_tpl->tpl_vars['lst_child']->value['number_child'];?>
 (<?php echo $_smarty_tpl->tpl_vars['lst_child']->value['str_age'];?>
) x <?php echo $_smarty_tpl->tpl_vars['lst_child']->value['txt_price_child'];?>
</p>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['list_cabin_check']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_extra_bed'] == 1) {?>
                            <p class="group_size_room_cabin">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra Bed');?>
 <?php echo $_smarty_tpl->tpl_vars['list_cabin_check']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['txt_price_extra_bed'];?>
</p>
                            <?php }?>
						</div>
					<?php
}
}
?>
				</div>
				<div class="box_book_cabin">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['check_contact_total'] == 1) {?>
						<p class="total_price"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</p>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
							<p class="txt_total_price"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Total price");?>
 <?php if ($_smarty_tpl->tpl_vars['list_total_price']->value['promotion'] == 1) {?><del><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['list_total_price']->value['total_price']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</del><?php }?></p>		
							<p class="total_price"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['list_total_price']->value['total_price_promotion']);?>
<span class="price_unit"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span></p>
						<?php } else { ?>
							<p class="txt_total_price"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Total price");?>
 <?php if ($_smarty_tpl->tpl_vars['list_total_price']->value['promotion'] == 1) {?><del> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice2($_smarty_tpl->tpl_vars['list_total_price']->value['total_price'],2);?>
</del><?php }?></p>		
							<p class="total_price"><span class="price_unit"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
 </span><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice2($_smarty_tpl->tpl_vars['list_total_price']->value['total_price_promotion'],2);?>
</p>
						<?php }?>
						<p class="text_vat"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price includes taxes and fees');?>
</p>		
					<?php }?>						
					<button class="btn_book_cabin" type="button"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Book now');?>
</button>
					<p class="txt_contact"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Do you need advice?');?>
 <button class="btn_contact_cabin" type="button"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</button></p>
					<input type="hidden" name="cruise_id" value="<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
">
					<input type="hidden" name="departure_date" value="<?php echo $_smarty_tpl->tpl_vars['departure_date']->value;?>
">
					<input type="hidden" name="cruise_itinerary_id" value="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
">
					<input type="hidden" name="cruise_cabin_id" value="<?php echo $_smarty_tpl->tpl_vars['cruise_cabin_id']->value;?>
">
					<input type="hidden" name="number_adult" value="<?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
">
					<input type="hidden" name="number_child" value="<?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
">
					<input type="hidden" name="number_cabin" value="<?php echo $_smarty_tpl->tpl_vars['number_cabin']->value;?>
">
					<input type="hidden" name="children" value='<?php echo $_smarty_tpl->tpl_vars['str_children']->value;?>
'>
					<input type="hidden" name="str_total_price" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['str_total_price'];?>
'>
					<input type="hidden" name="str_compare_price" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['str_compare_price'];?>
'>
					<input type="hidden" name="discount_type" value="<?php echo $_smarty_tpl->tpl_vars['discount_type']->value;?>
">
					<input type="hidden" name="discount_value" value="<?php echo $_smarty_tpl->tpl_vars['discount_value']->value;?>
">
					<input type="hidden" name="check_contact_total" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['check_contact_total'];?>
">
				</div>
			</div>
			<div class="modal fade roomModal" id="roomModalB<?php echo $_smarty_tpl->tpl_vars['cruise_cabin_id']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="roomModalLabel" aria-hidden="false">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content" id="container-room-detail">
						<div class="modal-header">
							<button type="button" class="btn-close c6" data-bs-dismiss="modal" aria-label="Close">
							</button>
							<h4 class="modal-title text-uppercase" id="roomModalLabel"><?php echo $_smarty_tpl->tpl_vars['title_cabin']->value;?>
</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<img alt="<?php echo $_smarty_tpl->tpl_vars['title_cabin']->value;?>
" class="img100" src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getImage($_smarty_tpl->tpl_vars['cruise_cabin_id']->value,450,300);?>
" width="450" height="300"/>
									<div class="m-item" style="margin-top:30px">
										<h5><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('DESCRIPTION');?>
</span></h5>
										<div class="m-content">
											<?php $_smarty_tpl->_assignInScope('floor', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getOneField('floor',$_smarty_tpl->tpl_vars['cruise_cabin_id']->value));?>
											<?php if ($_smarty_tpl->tpl_vars['cabinSize']->value) {?><p><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin size');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['cabinSize']->value;?>
 m<sup>2</sup></p><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['bed_size']->value) {?><p><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bed options');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['bed_size']->value;?>
</p><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['max_adult']->value) {?><p><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Max Adults');?>
:</strong>  <?php echo $_smarty_tpl->tpl_vars['max_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pax');?>
</p><?php }?>
											<p><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra Bed');?>
:</strong>  <?php if ($_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getOneField('extra_bed',$_smarty_tpl->tpl_vars['cruise_cabin_id']->value) == 1) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Yes');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No');
}?></p>
											<?php if ($_smarty_tpl->tpl_vars['floor']->value) {?><p><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Floor');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
</p><?php }?>
										</div>
									</div>
								</div>
								<div class="col-md-6">
                                    <?php $_smarty_tpl->_assignInScope('info_cabin', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getIntro($_smarty_tpl->tpl_vars['cruise_cabin_id']->value));?>
                                    <?php $_smarty_tpl->_assignInScope('easy_cancel', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getEasyCancel($_smarty_tpl->tpl_vars['cruise_cabin_id']->value));?>
                                    <?php $_smarty_tpl->_assignInScope('CabinFa', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getCabinFa($_smarty_tpl->tpl_vars['cruise_cabin_id']->value,$_smarty_tpl->tpl_vars['item']->value));?>
                                    <?php if ($_smarty_tpl->tpl_vars['info_cabin']->value) {?>
                                    <div class="m-item-text">
										<h5><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin Infor');?>
</span></h5>
										<div class="m-content-text">
											<?php echo $_smarty_tpl->tpl_vars['info_cabin']->value;?>

										</div>
									</div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['easy_cancel']->value) {?>
                                    <div class="m-item-text">
										<h5><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Easy Cancel');?>
</span></h5>
										<div class="m-content-text">
											<?php echo $_smarty_tpl->tpl_vars['easy_cancel']->value;?>

										</div>
									</div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['CabinFa']->value) {?>
                                    <div class="m-item">
										<h5><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin Facilities');?>
</span></h5>
										<div class="m-content">
											<?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getCabinFa($_smarty_tpl->tpl_vars['cruise_cabin_id']->value,$_smarty_tpl->tpl_vars['item']->value);?>

										</div>
									</div>
                                    <?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
echo '<script'; ?>
>
var itinerary_cruise_id='<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
';
var departure_date='<?php echo $_smarty_tpl->tpl_vars['departure_date']->value;?>
';
var cruise_id='<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
';
<?php echo '</script'; ?>
><?php }
}
