<?php
/* Smarty version 3.1.38, created on 2024-04-09 13:54:55
  from '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tour_new/loadTablePrice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614e63fb56a87_70611273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7562e46a2af503f381a4b1044dde693d220267fb' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/isocms/templates/default/tour_new/loadTablePrice.tpl',
      1 => 1706005394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614e63fb56a87_70611273 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form_booking_now" action="" method="post">
    <?php if (empty($_smarty_tpl->tpl_vars['exceeded_seat']->value)) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['total_price']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('total_price_promotion_z', number_format($_smarty_tpl->tpl_vars['total_price_promotion']->value,0,".",","));?>
            <div class="box__price_table" 1>
                <div class="box__price--header d-flex">
                    <div class="box_left">
                        <h4 class="text_bold mt0"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value);?>
</h4>
                        <?php if ($_smarty_tpl->tpl_vars['title_seat']->value) {?>
						<p class="mb0 title_seat"><?php echo $_smarty_tpl->tpl_vars['title_seat']->value;?>
</p>
						<?php } else { ?>
						<p class="color_1fb69a mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Still enough spaces left for you');?>
</p>
                        <?php }?>

                    </div>
					<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
                    <div class="box_right">
                        <p class="color_666 text_bold mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price');?>
</p>
                        <div class="price">
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
                                <del class="mgr05"><?php echo number_format($_smarty_tpl->tpl_vars['total_price']->value,0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</del>
                            <?php }?>
                            <span class="size28 color_fb1111 text_bold"><?php echo $_smarty_tpl->tpl_vars['total_price_promotion_z']->value;?>
 <span class="size20"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></span>
                        </div>
                    </div>
					<?php } else { ?>
					<div class="box_right">
                        <p class="color_666 text_bold mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price');?>
</p>
                        <div class="price">
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
                                <del class="mgr05"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['total_price']->value,0,".",",");?>
</del>
                            <?php }?>
                            <span class="size28 color_fb1111 text_bold"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['total_price_promotion_z']->value;?>
 </span>
                        </div>
                    </div>
					<?php }?>
                </div>
                <div class="box_avaiable_detail d-flex">
                    <div class="box_left">
                        <p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Travel Style');?>
:</p>
                        <select class="select--tour__class" name="tour__class" id="tour__class">
                            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstOption']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['lstOption']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" <?php if ($_smarty_tpl->tpl_vars['tour_class_id']->value == $_smarty_tpl->tpl_vars['lstOption']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['clsTourOption']->value->getTitle($_smarty_tpl->tpl_vars['lstOption']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</option>
                            <?php
}
}
?>
                        </select>
                    </div>
					<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
						<div class="box_right">
							<p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price detail');?>
</p>
							<ul class="list_style_none list_detail_price">
								<li><span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['number_adults']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
</span> <span class="w_120 text_right">x <?php echo number_format($_smarty_tpl->tpl_vars['price_adults']->value,0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span> <span class="price text_right"><?php echo number_format($_smarty_tpl->tpl_vars['total_price_adults']->value,0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></li>
								<?php if ($_smarty_tpl->tpl_vars['number_child']->value) {?>
								<li class="flex-wrap">
									<div class="d-flex flex-wrap w-100 collapseHead collapsed" <?php if (count($_smarty_tpl->tpl_vars['arr_price_child']->value) > 0) {?>data-bs-toggle="collapse" data-bs-target="#collapseChild" aria-expanded="false" aria-controls="collapseChild"<?php }?>>
										<span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
</span>
                                        <?php if ($_smarty_tpl->tpl_vars['check_contact_child']->value == 0 && $_smarty_tpl->tpl_vars['total_price_child']->value != 0) {?>
                                            <span class="w_120 text_right"><?php if (count($_smarty_tpl->tpl_vars['arr_price_child']->value) > 0) {?><i class="fa fa-angle-down" aria-hidden="true"></i><?php }?></span>
                                            <span class="price text_right"><?php echo number_format($_smarty_tpl->tpl_vars['total_price_child']->value,0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
                                        <?php } else { ?>
                                            <span class="w_120 text_right"><?php if (count($_smarty_tpl->tpl_vars['arr_price_child']->value) > 0) {?><i class="fa fa-angle-down" aria-hidden="true"></i><?php }?></span>
                                                <span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</span>
                                        <?php }?>
									</div>
									<div class="w-100 mt10 collapse" id="collapseChild">
										<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_price_child']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<div class="d-flex flex-wrap w-100">
												<span class="w_240 text_left" style="padding-left:15px"><?php echo $_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['text'];?>
)</span> 
												<?php if ($_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'] > 0) {?>
													<span class="w_120 text_right">x <?php echo number_format($_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'],0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span> <span class="price text_right"><?php echo number_format($_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['total_price'],0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
												<?php } else { ?>
													<span class="w_120 text_right"></span>
													<span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</span>
												<?php }?>
											</div>
										<?php
}
}
?>
									</div>								
								</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['number_infants']->value) {?>
									<li class="flex-wrap">
										<div class="d-flex flex-wrap w-100 collapseHead collapsed" <?php if (count($_smarty_tpl->tpl_vars['arr_price_infant']->value) > 0) {?>data-bs-toggle="collapse" data-bs-target="#collapseInfant" aria-expanded="false" aria-controls="collapseInfant"<?php }?>>
											<span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['number_infants']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infants');?>
</span>
                                            <?php if ($_smarty_tpl->tpl_vars['check_contact_infant']->value == 0 && $_smarty_tpl->tpl_vars['total_price_infants']->value != 0) {?>
                                                <span class="w_120 text_right"><?php if (count($_smarty_tpl->tpl_vars['arr_price_infant']->value) > 0) {?><i class="fa fa-angle-down" aria-hidden="true"></i><?php }?></span>
                                                <span class="price text_right"><?php echo number_format($_smarty_tpl->tpl_vars['total_price_infants']->value,0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
                                            <?php } else { ?>
                                               	<span class="w_120 text_right"><?php if (count($_smarty_tpl->tpl_vars['arr_price_infant']->value) > 0) {?><i class="fa fa-angle-down" aria-hidden="true"></i><?php }?></span>
                                                <span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</span>
                                            <?php }?>
										</div>
										<div class="w-100 mt10 collapse" id="collapseInfant">
											<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_price_infant']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
												<div class="d-flex flex-wrap w-100">
													<span class="w_240 text_left" style="padding-left:15px"><?php echo $_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['text'];?>
)</span> 
													<?php if ($_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'] > 0) {?>
														<span class="w_120 text_right">x <?php echo number_format($_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'],0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span> <span class="price text_right"><?php echo number_format($_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['total_price'],0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
													<?php } else { ?>
														<span class="w_120 text_right"></span>
														<span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</span>
													<?php }?>
												</div>
											<?php
}
}
?>
										</div>								
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
									<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '2') {?>
										<li class="promotion color_1fb69a "> <span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
</span> <span class="w_120 text_right">-<?php echo $_smarty_tpl->tpl_vars['promotion']->value;?>
%</span> <span class="price text_right">-<?php echo number_format($_smarty_tpl->tpl_vars['price_promotion']->value,0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></li>
									<?php } else { ?>
										<li class="promotion color_1fb69a "> <span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
</span> <span class="w_120 text_right">-<?php echo number_format($_smarty_tpl->tpl_vars['promotion']->value,0,".",",");?>
  <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span> <span class="price text_right">-<?php echo number_format($_smarty_tpl->tpl_vars['price_promotion']->value,0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></li>
									<?php }?>
								<?php }?>
							</ul>
							<ul class="list_style_none list_detail_price" id="box__price__addon"></ul>
							<ul class="list_style_none list_detail_price">
								<li class="total_price">
									<span class="total size20">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Grand total');?>
:
									</span>
									<span class="price text_right size20 color_fb1111 text_bold" >
										<span id="grand_total" grand_total="<?php echo $_smarty_tpl->tpl_vars['total_price_promotion']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['total_price_promotion_z']->value;?>
</span> <span class="size18"> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span>
									</span>
								</li>
							</ul>
						</div>
					<?php } else { ?>
						<div class="box_right">
							<p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price detail');?>
</p>
							<ul class="list_style_none list_detail_price">
								<li><span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['number_adults']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
</span> <span class="w_120 text_right">x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['price_adults']->value,0,".",",");?>
</span> <span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['total_price_adults']->value,0,".",",");?>
</span></li>
								<?php if ($_smarty_tpl->tpl_vars['number_child']->value) {?>
								<li class="flex-wrap">
									<div class="d-flex flex-wrap w-100 collapseHead collapsed" <?php if (count($_smarty_tpl->tpl_vars['arr_price_child']->value) > 0) {?>data-bs-toggle="collapse" data-bs-target="#collapseChild" aria-expanded="false" aria-controls="collapseChild"<?php }?>>
										<span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
</span>
                                        <?php if ($_smarty_tpl->tpl_vars['check_contact_child']->value == 0 && $_smarty_tpl->tpl_vars['total_price_child']->value != 0) {?>
                                            <span class="w_120 text_right"><?php if (count($_smarty_tpl->tpl_vars['arr_price_child']->value) > 0) {?><i class="fa fa-angle-down" aria-hidden="true"></i><?php }?></span>
                                            <span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['total_price_child']->value,0,".",",");?>
</span>
                                        <?php } else { ?>
                                            <span class="w_120 text_right"><?php if (count($_smarty_tpl->tpl_vars['arr_price_child']->value) > 0) {?><i class="fa fa-angle-down" aria-hidden="true"></i><?php }?></span>
                                                <span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</span>
                                        <?php }?>
									</div>
									<div class="w-100 mt10 collapse" id="collapseChild">
										<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_price_child']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<div class="d-flex flex-wrap w-100">
												<span class="w_240 text_left" style="padding-left:15px"><?php echo $_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['text'];?>
)</span> 
												<?php if ($_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'] > 0) {?>
													<span class="w_120 text_right">x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'],0,".",",");?>
</span> <span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['arr_price_child']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['total_price'],0,".",",");?>
</span>
												<?php } else { ?>
													<span class="w_120 text_right"></span>
													<span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</span>
												<?php }?>
											</div>
										<?php
}
}
?>
									</div>								
								</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['number_infants']->value) {?>
									<li class="flex-wrap">
										<div class="d-flex flex-wrap w-100 collapseHead collapsed" <?php if (count($_smarty_tpl->tpl_vars['arr_price_infant']->value) > 0) {?>data-bs-toggle="collapse" data-bs-target="#collapseInfant" aria-expanded="false" aria-controls="collapseInfant"<?php }?>>
											<span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['number_infants']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infants');?>
</span>
                                            <?php if ($_smarty_tpl->tpl_vars['check_contact_infant']->value == 0 && $_smarty_tpl->tpl_vars['total_price_infants']->value != 0) {?>
                                                <span class="w_120 text_right"><?php if (count($_smarty_tpl->tpl_vars['arr_price_infant']->value) > 0) {?><i class="fa fa-angle-down" aria-hidden="true"></i><?php }?></span>
                                                <span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['total_price_infants']->value,0,".",",");?>
</span>
                                            <?php } else { ?>
                                               	<span class="w_120 text_right"><?php if (count($_smarty_tpl->tpl_vars['arr_price_infant']->value) > 0) {?><i class="fa fa-angle-down" aria-hidden="true"></i><?php }?></span>
                                                <span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</span>
                                            <?php }?>
										</div>
										<div class="w-100 mt10 collapse" id="collapseInfant">
											<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_price_infant']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
												<div class="d-flex flex-wrap w-100">
													<span class="w_240 text_left" style="padding-left:15px"><?php echo $_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['text'];?>
)</span> 
													<?php if ($_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'] > 0) {?>
														<span class="w_120 text_right">x <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'],0,".",",");?>
</span> <span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['arr_price_infant']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['total_price'],0,".",",");?>
</span>
													<?php } else { ?>
														<span class="w_120 text_right"></span>
														<span class="price text_right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</span>
													<?php }?>
												</div>
											<?php
}
}
?>
										</div>								
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
									<?php if ($_smarty_tpl->tpl_vars['discount_type']->value == '2') {?>
										<li class="promotion color_1fb69a "> <span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
</span> <span class="w_120 text_right">-<?php echo $_smarty_tpl->tpl_vars['promotion']->value;?>
%</span> <span class="price text_right">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['price_promotion']->value,0,".",",");?>
</span></li>
									<?php } else { ?>
										<li class="promotion color_1fb69a "> <span class="w_240 text_left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
</span> <span class="w_120 text_right">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['promotion']->value,0,".",",");?>
</span> <span class="price text_right">-<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo number_format($_smarty_tpl->tpl_vars['price_promotion']->value,0,".",",");?>
</span></li>
									<?php }?>
								<?php }?>
							</ul>
							<ul class="list_style_none list_detail_price" id="box__price__addon"></ul>
							<ul class="list_style_none list_detail_price">
								<li class="total_price">
									<span class="total size20">
										<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Grand total');?>
:
									</span>
									<span class="price text_right size20 color_fb1111 text_bold" >
										<span id="grand_total" grand_total="<?php echo $_smarty_tpl->tpl_vars['total_price_promotion']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['total_price_promotion_z']->value;?>
</span>
									</span>
								</li>
							</ul>
						</div>
					<?php }?>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['lstService']->value) {?>
			<div class="addon__box">
				<p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addon services');?>
:</p>
				<ul class="addon__list list_style_none">
					<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstService']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('addonservice_id', $_smarty_tpl->tpl_vars['lstService']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['addonservice_id']);?>
						<?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['clsAddOnService']->value->getPrice($_smarty_tpl->tpl_vars['addonservice_id']->value));?>
						<li class="item d-flex">
							<div class="addon__details">
								<p class="mg0 text_bold"><?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getTitle($_smarty_tpl->tpl_vars['addonservice_id']->value);?>
</p>
								<div class="size14 color_666 intro_addon"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['clsAddOnService']->value->getIntro($_smarty_tpl->tpl_vars['addonservice_id']->value));?>
</div>
							</div>
							<div class="addon__select d-flex">
								<div class="box__left">
									<?php if ($_smarty_tpl->tpl_vars['price']->value) {?>
									<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
										<p class="mg0 color_1fb69a size18 text_bold">+ <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 <span class="size14 text-lowercase"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></p>
									<?php } else { ?>
									<p class="mg0 color_1fb69a size18 text_bold">+ <span class="size14 text-lowercase"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 </p>
									<?php }?>
									<?php } else { ?>
										<p class="mg0 free">-100%</p>
									<?php }?>
									<p class="mg0 color_666 size14 hidden-xs"><?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getNameExtra($_smarty_tpl->tpl_vars['addonservice_id']->value);?>
</p>
								</div>
								<div class="box__right addon__select_val">
									<select class="select_addon" total_price="<?php echo $_smarty_tpl->tpl_vars['total_price_promotion']->value;?>
" addonservice_id="<?php echo $_smarty_tpl->tpl_vars['addonservice_id']->value;?>
"  name="number_addon[<?php echo $_smarty_tpl->tpl_vars['addonservice_id']->value;?>
]" id="">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
							</div>
						</li>
					<?php
}
}
?>
				</ul>
			</div>
            <?php }?>
            <div class="box__booking">
                <input type="hidden" name="tour_id_z" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" />
                <input type="hidden" name="discount_type" value="<?php echo $_smarty_tpl->tpl_vars['discount_type']->value;?>
" />
                <input type="hidden" name="promotion_z" id="promotion_z" value="<?php echo $_smarty_tpl->tpl_vars['promotion']->value;?>
" />
                <input type="hidden" name="price_promotion" value="<?php echo $_smarty_tpl->tpl_vars['price_promotion']->value;?>
" />
                <input type="hidden" name="number_adults_z" id="number_adults_z" value="<?php echo $_smarty_tpl->tpl_vars['number_adults']->value;?>
" />
                <input type="hidden" name="number_child_z" id="number_child_z" value="<?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
" />
                <input type="hidden" name="number_infants_z" id="number_infants_z" value="<?php echo $_smarty_tpl->tpl_vars['number_infants']->value;?>
" />
                <input type="hidden" name="price_adults_z" id="price_adults_z" value="<?php echo $_smarty_tpl->tpl_vars['price_adults']->value;?>
" />
                <input type="hidden" name="price_child_z" id="price_child_z" value="<?php echo $_smarty_tpl->tpl_vars['price_child']->value;?>
" />
                <input type="hidden" name="str_price_child" id="str_price_child" value='<?php echo $_smarty_tpl->tpl_vars['str_price_child']->value;?>
' />
                <input type="hidden" name="str_price_infant" id="str_price_infant" value='<?php echo $_smarty_tpl->tpl_vars['str_price_infant']->value;?>
' />
                <input type="hidden" name="price_infants_z" id="price_infants_z" value="<?php echo $_smarty_tpl->tpl_vars['price_infants']->value;?>
" />
                <input type="hidden" name="total_price_adults" id="total_price_adults" value="<?php echo $_smarty_tpl->tpl_vars['total_price_adults']->value;?>
" />
                <input type="hidden" name="total_price_child" id="total_price_child" value="<?php echo $_smarty_tpl->tpl_vars['total_price_child']->value;?>
" />
                <input type="hidden" name="total_price_infants" id="total_price_infants" value="<?php echo $_smarty_tpl->tpl_vars['total_price_infants']->value;?>
" />
                <input type="hidden" name="check_in_book_z" id="check_in_book_z" value="<?php echo $_smarty_tpl->tpl_vars['check_in_book']->value;?>
" />
                <input type="hidden" name="deposit" id="deposit" value="<?php echo $_smarty_tpl->tpl_vars['deposit']->value;?>
" />
                <input type="hidden" name="price_deposit" id="price_deposit" value="<?php echo $_smarty_tpl->tpl_vars['price_deposit']->value;?>
" />
				<input type="hidden" name="total_price_z" id="total_price_z" value="<?php echo $_smarty_tpl->tpl_vars['total_price_promotion']->value;?>
" />
                <input type="hidden" name="total_addon" id="total_addon" value="<?php echo $_smarty_tpl->tpl_vars['total_addon_z']->value;?>
" />
                <?php if ($_smarty_tpl->tpl_vars['check_contact']->value) {?>
                	<input type="hidden" name="ContactTour" id="ContactTour" value="ContactTour" />
					<button class="contact_now btn_yellow btn_main">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Contact");?>

					</button>
                <?php } else { ?>
					<input type="hidden" name="BookingTour" id="BookingTour" value="BookingTour" />
					<button class="book_now_tour btn_yellow btn_main">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Book now");?>

					</button>
                <?php }?>
            </div>
        <?php } else { ?>
            <div class="box__price_table" 2>
                <div class="box__price--header d-flex">
                    <div class="box_left">
                        <h4 class="text_bold mt0"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value);?>
</h4>
                        <?php if ($_smarty_tpl->tpl_vars['title_seat']->value) {?>
                            <p class="mb0 title_seat"><?php echo $_smarty_tpl->tpl_vars['title_seat']->value;?>
</p>
                        <?php } else { ?>
                            <p class="color_1fb69a mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact us for more information');?>
</p>
                        <?php }?>

                    </div>
                    <div class="box_right">
                        <input type="hidden" name="tour_id_z" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" />
						<input type="hidden" name="promotion_z" id="promotion_z" value="<?php echo $_smarty_tpl->tpl_vars['promotion']->value;?>
" />
						<input type="hidden" name="price_promotion" value="<?php echo $_smarty_tpl->tpl_vars['price_promotion']->value;?>
" />
						<input type="hidden" name="number_adults_z" id="number_adults_z" value="<?php echo $_smarty_tpl->tpl_vars['number_adults']->value;?>
" />
						<input type="hidden" name="number_child_z" id="number_child_z" value="<?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
" />
						<input type="hidden" name="number_infants_z" id="number_infants_z" value="<?php echo $_smarty_tpl->tpl_vars['number_infants']->value;?>
" />
						<input type="hidden" name="price_adults_z" id="price_adults_z" value="<?php echo $_smarty_tpl->tpl_vars['price_adults']->value;?>
" />
						<input type="hidden" name="price_child_z" id="price_child_z" value="<?php echo $_smarty_tpl->tpl_vars['price_child']->value;?>
" />
						<input type="hidden" name="price_infants_z" id="price_infants_z" value="<?php echo $_smarty_tpl->tpl_vars['price_infants']->value;?>
" />
						<input type="hidden" name="total_price_adults" id="total_price_adults" value="<?php echo $_smarty_tpl->tpl_vars['total_price_adults']->value;?>
" />
						<input type="hidden" name="total_price_child" id="total_price_child" value="<?php echo $_smarty_tpl->tpl_vars['total_price_child']->value;?>
" />
						<input type="hidden" name="total_price_infants" id="total_price_infants" value="<?php echo $_smarty_tpl->tpl_vars['total_price_infants']->value;?>
" />
						<input type="hidden" name="check_in_book_z" id="check_in_book_z" value="<?php echo $_smarty_tpl->tpl_vars['check_in_book']->value;?>
" />
						<input type="hidden" name="deposit" id="deposit" value="<?php echo $_smarty_tpl->tpl_vars['deposit']->value;?>
" />
						<input type="hidden" name="price_deposit" id="price_deposit" value="<?php echo $_smarty_tpl->tpl_vars['price_deposit']->value;?>
" />
						<input type="hidden" name="total_price_z" id="total_price_z" value="<?php echo $_smarty_tpl->tpl_vars['total_price_promotion']->value;?>
" />
						<input type="hidden" name="ContactTour" id="ContactTour" value="ContactTour" />
						<button class="contact_now btn_yellow btn_main">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Contact");?>

						</button>
                    </div>
                </div>
                <div class="box_avaiable_detail d-flex">
                    <div class="box_left">
                        <p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Travel Style');?>
:</p>
                        <select class="select--tour__class" name="tour__class" id="tour__class">
                            <?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstOption']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['lstOption']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" <?php if ($_smarty_tpl->tpl_vars['tour_class_id']->value == $_smarty_tpl->tpl_vars['lstOption']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['clsTourOption']->value->getTitle($_smarty_tpl->tpl_vars['lstOption']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</option>
                            <?php
}
}
?>
                        </select>

                    </div>
                    <div class="box_right">
                        <p class="text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price detail');?>
</p>
                        <ul class="list_style_none list_detail_price">
                            <li><span class="w_120"><?php echo $_smarty_tpl->tpl_vars['number_adults']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults');?>
</span></li>
                            <?php if ($_smarty_tpl->tpl_vars['number_child']->value) {?>
                                <li><span class="w_120"><?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children');?>
</span> </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['number_infants']->value) {?>
                                <li><span class="w_120"><?php echo $_smarty_tpl->tpl_vars['number_infants']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Infants');?>
</span></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value && $_smarty_tpl->tpl_vars['price_promotion']->value) {?>
                                <li class="promotion color_1fb69a hidden"> <span class="w_120"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
</span> <span class="w_120">-<?php echo $_smarty_tpl->tpl_vars['promotion']->value;?>
%</span> <span class="price text_right">-<?php echo number_format($_smarty_tpl->tpl_vars['price_promotion']->value,0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="box_avaiable_detail d-flex hidden">
                    <div class="notice">
                        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The system is updating. please contact');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('contact');?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('here');?>
</a>
                            <br><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotline');?>
 <a href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" class=""><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php }?>
    <?php } else { ?>
        <?php if (!empty($_smarty_tpl->tpl_vars['total_price']->value)) {?>
            <div class="box__price_table" 3>
                <div class="box__price--header d-flex">
                    <div class="box_left">
                        <h4 class="text_bold mt0"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value);?>
</h4>
						<?php if ($_smarty_tpl->tpl_vars['title_seat']->value) {?>
                        <p class="mb0 title_seat"><?php echo $_smarty_tpl->tpl_vars['title_seat']->value;?>
</p>
						<?php }?>
                    </div>
                    <div class="box_right">
                        <p class="color_666 text_bold mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price');?>
</p>
                        <div class="price">
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
                                <del class="mgr05"><?php echo number_format($_smarty_tpl->tpl_vars['total_price']->value,0,".",",");?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</del>
                            <?php }?>
                            <span class="size28 color_fb1111 text_bold"><?php echo number_format($_smarty_tpl->tpl_vars['total_price_promotion']->value,0,".",",");?>
 <span class="size20"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</span></span>
                        </div>
                    </div>
                </div>
                <div class="box_avaiable_detail d-flex">
                    <div class="notice">
                        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The number of people exceeded the number of seats left. Please');?>
 <a class="repick_travellers"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('choose again');?>
</a> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('person number or contact');?>
 <a class="trigger_contact" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('here');?>
</a>
                            <br><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotline');?>
 <a href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" class=""><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="box__booking hidden">
                <input type="hidden" name="tour_id_z" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" />
                <input type="hidden" name="promotion_z" id="promotion_z" value="<?php echo $_smarty_tpl->tpl_vars['promotion']->value;?>
" />
                <input type="hidden" name="price_promotion" value="<?php echo $_smarty_tpl->tpl_vars['price_promotion']->value;?>
" />
                <input type="hidden" name="number_adults_z" id="number_adults_z" value="<?php echo $_smarty_tpl->tpl_vars['number_adults']->value;?>
" />
                <input type="hidden" name="number_child_z" id="number_child_z" value="<?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
" />
                <input type="hidden" name="number_infants_z" id="number_infants_z" value="<?php echo $_smarty_tpl->tpl_vars['number_infants']->value;?>
" />
                <input type="hidden" name="price_adults_z" id="price_adults_z" value="<?php echo $_smarty_tpl->tpl_vars['price_adults']->value;?>
" />
                <input type="hidden" name="price_child_z" id="price_child_z" value="<?php echo $_smarty_tpl->tpl_vars['price_child']->value;?>
" />
                <input type="hidden" name="price_infants_z" id="price_infants_z" value="<?php echo $_smarty_tpl->tpl_vars['price_infants']->value;?>
" />
                <input type="hidden" name="total_price_adults" id="total_price_adults" value="<?php echo $_smarty_tpl->tpl_vars['total_price_adults']->value;?>
" />
                <input type="hidden" name="total_price_child" id="total_price_child" value="<?php echo $_smarty_tpl->tpl_vars['total_price_child']->value;?>
" />
                <input type="hidden" name="total_price_infants" id="total_price_infants" value="<?php echo $_smarty_tpl->tpl_vars['total_price_infants']->value;?>
" />
                <input type="hidden" name="check_in_book_z" id="check_in_book_z" value="<?php echo $_smarty_tpl->tpl_vars['check_in_book']->value;?>
" />
                <input type="hidden" name="deposit" id="deposit" value="<?php echo $_smarty_tpl->tpl_vars['deposit']->value;?>
" />
                <input type="hidden" name="price_deposit" id="price_deposit" value="<?php echo $_smarty_tpl->tpl_vars['price_deposit']->value;?>
" />
                <input type="hidden" name="total_price_z" id="total_price_z" value="<?php echo $_smarty_tpl->tpl_vars['total_price_promotion']->value;?>
" />
                <input type="hidden" name="ContactTour" id="ContactTour" value="ContactTour" />
                <button class="contact_now btn_yellow btn_main">
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Contact");?>

                </button>
            </div>
        <?php } else { ?>
            <div class="box__price_table" 4>
                <div class="box__price--header d-flex">
                    <div class="box_left">
                        <h4 class="text_bold mt0"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value);?>
</h4>
						<?php if ($_smarty_tpl->tpl_vars['title_seat']->value) {?>
                        <p class="mb0 title_seat"><?php echo $_smarty_tpl->tpl_vars['title_seat']->value;?>
</p>
						<?php }?>
                    </div>
                    <div class="box_right">
                        <p class="color_666 text_bold mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Price');?>
</p>
                        <div class="price">

                            <span class="size24 color_fb1111 text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Updating');?>
</span>
                        </div>
                    </div>
                </div>
                <div class="box_avaiable_detail d-flex">
                    <div class="notice">
                        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('The number of people exceeded the number of seats left. Please');?>
 <a class="repick_travellers"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('choose again');?>
</a> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('person number or contact');?>
 <a class="trigger_contact" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('here');?>
</a>
                            <br><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotline');?>
 <a href="tel:<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
" class=""><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('CompanyHotline');?>
</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="box__booking hidden">
                <input type="hidden" name="tour_id_z" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" />
                <input type="hidden" name="promotion_z" id="promotion_z" value="<?php echo $_smarty_tpl->tpl_vars['promotion']->value;?>
" />
                <input type="hidden" name="price_promotion" value="<?php echo $_smarty_tpl->tpl_vars['price_promotion']->value;?>
" />
                <input type="hidden" name="number_adults_z" id="number_adults_z" value="<?php echo $_smarty_tpl->tpl_vars['number_adults']->value;?>
" />
                <input type="hidden" name="number_child_z" id="number_child_z" value="<?php echo $_smarty_tpl->tpl_vars['number_child']->value;?>
" />
                <input type="hidden" name="number_infants_z" id="number_infants_z" value="<?php echo $_smarty_tpl->tpl_vars['number_infants']->value;?>
" />
                <input type="hidden" name="price_adults_z" id="price_adults_z" value="<?php echo $_smarty_tpl->tpl_vars['price_adults']->value;?>
" />
                <input type="hidden" name="price_child_z" id="price_child_z" value="<?php echo $_smarty_tpl->tpl_vars['price_child']->value;?>
" />
                <input type="hidden" name="price_infants_z" id="price_infants_z" value="<?php echo $_smarty_tpl->tpl_vars['price_infants']->value;?>
" />
                <input type="hidden" name="total_price_adults" id="total_price_adults" value="<?php echo $_smarty_tpl->tpl_vars['total_price_adults']->value;?>
" />
                <input type="hidden" name="total_price_child" id="total_price_child" value="<?php echo $_smarty_tpl->tpl_vars['total_price_child']->value;?>
" />
                <input type="hidden" name="total_price_infants" id="total_price_infants" value="<?php echo $_smarty_tpl->tpl_vars['total_price_infants']->value;?>
" />
                <input type="hidden" name="check_in_book_z" id="check_in_book_z" value="<?php echo $_smarty_tpl->tpl_vars['check_in_book']->value;?>
" />
                <input type="hidden" name="deposit" id="deposit" value="<?php echo $_smarty_tpl->tpl_vars['deposit']->value;?>
" />
                <input type="hidden" name="price_deposit" id="price_deposit" value="<?php echo $_smarty_tpl->tpl_vars['price_deposit']->value;?>
" />
                <input type="hidden" name="total_price_z" id="total_price_z" value="<?php echo $_smarty_tpl->tpl_vars['total_price_promotion']->value;?>
" />
                <input type="hidden" name="ContactTour" id="ContactTour" value="ContactTour" />
                <button class="contact_now btn_yellow btn_main">
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Contact");?>

                </button>
            </div>
        <?php }?>
    <?php }?>
</form>
<?php if ($_smarty_tpl->tpl_vars['lstService']->value) {?>
    <?php echo '<script'; ?>
>
        var moretext ='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("See more");?>
';
        var lesstext='<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Hide less");?>
';
    <?php echo '</script'; ?>
>
    
        <?php echo '<script'; ?>
>
            var showChar = 100;
            var ellipsestext ="...";
            $('.intro_addon').each(function() {
                var content = $(this).html();
                if(content.length > showChar) {
                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);
                    var html = c +'<span class="moreellipses">' + ellipsestext+'&nbsp;</span><span class="morecontent"><span>' + h +'</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext +'</a></span>';
                    $(this).html(html);
                }
            });
            $(".morelink").click(function(){
                if($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                }else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();

                return false;
            });
        <?php echo '</script'; ?>
>
    
<?php }
}
}
