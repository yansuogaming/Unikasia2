<?php
/* Smarty version 3.1.38, created on 2024-04-09 09:04:06
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/ajLoadFormCruisePrice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614a216918ff9_81320989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b60397c17cd0f35cc0826bbddf9a781cf421e00a' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/ajLoadFormCruisePrice.tpl',
      1 => 1712029269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614a216918ff9_81320989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),));
if ($_smarty_tpl->tpl_vars['lstCruiseCabin']->value) {?>
<div class="table-wrapper mb-half radius-3">
	<table class="table table-iloocal table-bordered mb-0 radius-3">
		<tbody>
			<tr class="bg-gray">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['priceByLow']->value == 0) {?>3<?php } else { ?>2<?php }?>" class="text-left bg-gray">
					<div class="d-flex justify-content-between align-items-center">
						<div>
							<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Low season');?>
 (<?php echo $_smarty_tpl->tpl_vars['html_low_season']->value;?>
)</strong>
							<div class="info_module" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Low season');?>
 (<?php echo $_smarty_tpl->tpl_vars['html_low_season']->value;?>
)">i
							</div>
						</div>
						<div class="box_price_by">
							<div class="boxCheckbox"> 
								<input type="radio" class="check_box_price_by" name="price_by_low" value="1" season="low" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['priceByLow']->value == 1) {?>checked<?php }?>> 
								<label class="checkmark">/<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
</label> 
							</div>
							<div class="boxCheckbox"> 
								<input type="radio" class="check_box_price_by" name="price_by_low" value="0" season="low" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['priceByLow']->value == 0) {?>checked<?php }?>> 
								<label class="checkmark">/<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Person');?>
</label> 
							</div>
						</div>
					</div>
				</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['priceByLow']->value == 0) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstCruiseCabin']->value, 'cabin', false, 'k');
$_smarty_tpl->tpl_vars['cabin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cabin']->value) {
$_smarty_tpl->tpl_vars['cabin']->do_else = false;
?>
					<?php $_smarty_tpl->_assignInScope('list_group_size', $_smarty_tpl->tpl_vars['clsISO']->value->makeSlashByArray($_smarty_tpl->tpl_vars['cabin']->value['list_group_size'],'|',','));?>
					<?php $_smarty_tpl->_assignInScope('listGroupCabin', $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getAll((("type='GroupSize' AND cruise_property_id  IN(").($_smarty_tpl->tpl_vars['list_group_size']->value)).(") order by order_no ASC"),'cruise_property_id,title,number_adult,is_extra_bed'));?>
					<?php $_smarty_tpl->_assignInScope('total_group_size', $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getAll((("type='GroupSize' AND cruise_property_id  IN(").($_smarty_tpl->tpl_vars['list_group_size']->value)).(")"),'SUM(number_adult) AS total_group_size'));?>
					<tr>
						<td width="20%" class="text-left" rowspan="<?php echo count($_smarty_tpl->tpl_vars['listGroupCabin']->value)+1;?>
">
						   <strong><?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id']);?>
</strong>
						</td>
					</tr>
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGroupCabin']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php echo smarty_function_math(array('equation'=>"x+1",'x'=>$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_adult'],'assign'=>"total_adult_group_size"),$_smarty_tpl);?>
						
                        <tr>
                            <td width="25%" class="text-left">
                                <span><?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</span>
                            </td>
                            <td width="55%" class="text-left" >
                                <?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_adult']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] <= $__section_j_1_total; $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                <?php $_smarty_tpl->_assignInScope('number_adult', (isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] : null));?>
                                <div class="d-flex justify-content-between price_config price_group_box align-items-cente mb10">
                                    <?php if ($_smarty_tpl->tpl_vars['number_adult']->value > 1) {?>
                                        <span><?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adults');?>
</span>						
                                    <?php } else { ?>			
                                        <span><?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adult');?>
</span>
                                    <?php }?>
                                    <div class="input-group input-group_price d-flex align-items-center">
                                        <input class="text full price-In cruise_season_price fontLarge" cruise_cabin_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'];?>
" group_size_id="<?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" season="low" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_id'];?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsCruiseSeasonPrice']->value->getPriceDefault($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value,$_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'],$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'],'low',$_smarty_tpl->tpl_vars['number_adult']->value);?>
" number_adult="<?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
" type="text">
                                        <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
                                    </div>
                                </div>
                                <?php
}
}
?>
                                <?php if ($_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_extra_bed']) {?>
                                <div class="d-flex justify-content-between mt10">
									<div class="box_left_group">
										<span style="color: var(--main-color);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra Bed');?>
</span>											
									</div>
									<div class="d-flex justify-content-between align-items-center">										
										<div class="input-group input-group_price d-flex align-items-center">
											<input class="text full price-In cruise_season_price_extra_bed fontLarge" cruise_cabin_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'];?>
" group_size_id="<?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" season="low" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_id'];?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsCruiseSeasonPrice']->value->getPriceExtraBedDefault($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value,$_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'],$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'],'low');?>
" number_adult="0" type="text">
											<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
										</div>
									</div>
								</div>
                                <?php }?>
                            </td>
                        </tr>
						<?php
}
}
?>
					
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstCruiseCabin']->value, 'cabin', false, 'k');
$_smarty_tpl->tpl_vars['cabin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cabin']->value) {
$_smarty_tpl->tpl_vars['cabin']->do_else = false;
?>
					<?php $_smarty_tpl->_assignInScope('list_group_size', $_smarty_tpl->tpl_vars['clsISO']->value->makeSlashByArray($_smarty_tpl->tpl_vars['cabin']->value['list_group_size'],'|',','));?>
					<?php $_smarty_tpl->_assignInScope('listGroupCabin', $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getAll((("type='GroupSize' AND cruise_property_id  IN(").($_smarty_tpl->tpl_vars['list_group_size']->value)).(") order by order_no ASC"),'cruise_property_id,title,is_extra_bed'));?>
					<tr>
						<td width="20%" class="text-left" rowspan="<?php echo count($_smarty_tpl->tpl_vars['listGroupCabin']->value)+1;?>
">
						   <strong><?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id']);?>
</strong>
						</td>
					</tr>
					<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGroupCabin']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr>
							<td width="80%" class="text-left">
								<div class="d-flex justify-content-between">
									<div class="box_left_group">
										<span><?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</span>											
									</div>
									<div class="d-flex justify-content-between price_config align-items-center">										
										<div class="input-group input-group_price d-flex align-items-center">
											<input class="text full price-In cruise_season_price fontLarge" cruise_cabin_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'];?>
" group_size_id="<?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" season="low" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_id'];?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsCruiseSeasonPrice']->value->getPriceDefault($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value,$_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'],$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'],'low');?>
" number_adult="0" type="text">
											<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
										</div>
									</div>
								</div>
                                <?php if ($_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_extra_bed']) {?>
                                <div class="d-flex justify-content-between mt10">
									<div class="box_left_group">
										<span style="color: var(--main-color);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra Bed');?>
</span>											
									</div>
									<div class="d-flex justify-content-between align-items-center">										
										<div class="input-group input-group_price d-flex align-items-center">
											<input class="text full price-In cruise_season_price_extra_bed fontLarge" cruise_cabin_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'];?>
" group_size_id="<?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" season="low" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_id'];?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsCruiseSeasonPrice']->value->getPriceExtraBedDefault($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value,$_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'],$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'],'low');?>
" number_adult="0" type="text">
											<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
										</div>
									</div>
								</div>
                                <?php }?>
                                
							</td>
						</tr>
					<?php
}
}
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</tbody>
	</table>
</div>
<div class="table-wrapper mb-half radius-3">
	<table class="table table-iloocal table-bordered mb-0 radius-3">
		<tbody>
			<tr class="bg-gray">
				<td  colspan="<?php if ($_smarty_tpl->tpl_vars['priceByHigh']->value == 0) {?>3<?php } else { ?>2<?php }?>" class="text-left bg-gray">
					<div class="d-flex justify-content-between align-items-center">
						<div>
							<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('High season');?>
 (<?php echo $_smarty_tpl->tpl_vars['html_high_season']->value;?>
)</strong>
							<div class="info_module" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('High season');?>
 (<?php echo $_smarty_tpl->tpl_vars['html_high_season']->value;?>
)">i
							</div>
						</div>
						<div class="box_price_by">
							<div class="boxCheckbox"> 
								<input type="radio" class="check_box_price_by" name="price_by_high" value="1" season="high" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['priceByHigh']->value == 1) {?>checked<?php }?>> 
								<label class="checkmark">/<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>
</label> 
							</div>
							<div class="boxCheckbox"> 
								<input type="radio" class="check_box_price_by" name="price_by_high" value="0" season="high" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cruise_id']->value;?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['priceByHigh']->value == 0) {?>checked<?php }?>> 
								<label class="checkmark">/<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Person');?>
</label> 
							</div>
						</div>
					</div>
				</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['priceByHigh']->value == 0) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstCruiseCabin']->value, 'cabin', false, 'k');
$_smarty_tpl->tpl_vars['cabin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cabin']->value) {
$_smarty_tpl->tpl_vars['cabin']->do_else = false;
?>
					<?php $_smarty_tpl->_assignInScope('list_group_size', $_smarty_tpl->tpl_vars['clsISO']->value->makeSlashByArray($_smarty_tpl->tpl_vars['cabin']->value['list_group_size'],'|',','));?>
					<?php $_smarty_tpl->_assignInScope('listGroupCabin', $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getAll((("type='GroupSize' AND cruise_property_id  IN(").($_smarty_tpl->tpl_vars['list_group_size']->value)).(") order by order_no ASC"),'cruise_property_id,title,number_adult,is_extra_bed'));?>
					<?php $_smarty_tpl->_assignInScope('total_group_size', $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getAll((("type='GroupSize' AND cruise_property_id  IN(").($_smarty_tpl->tpl_vars['list_group_size']->value)).(")"),'SUM(number_adult) AS total_group_size'));?>
					<tr>
						<td width="20%" class="text-left" rowspan="<?php echo count($_smarty_tpl->tpl_vars['listGroupCabin']->value)+1;?>
">
						   <strong><?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id']);?>
</strong>
						</td>
					</tr>
					<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGroupCabin']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php echo smarty_function_math(array('equation'=>"x+1",'x'=>$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_adult'],'assign'=>"total_adult_group_size"),$_smarty_tpl);?>
						
                    <tr>
                        <td width="25%" class="text-left">
                            <span><?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</span>
                        </td>
                        <td width="55%" class="text-left" >
                            <?php
$__section_j_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number_adult']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_4_total = $__section_j_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_4_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] <= $__section_j_4_total; $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                            <?php $_smarty_tpl->_assignInScope('number_adult', (isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['iteration'] : null));?>
                            <div class="d-flex justify-content-between price_config price_group_box align-items-center mb10">
                                <?php if ($_smarty_tpl->tpl_vars['number_adult']->value > 1) {?>
                                    <span><?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adults');?>
</span>						
                                <?php } else { ?>			
                                    <span><?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adult');?>
</span>
                                <?php }?>
                                <div class="input-group input-group_price d-flex align-items-center">
                                    <input class="text full price-In cruise_season_price fontLarge" cruise_cabin_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'];?>
" group_size_id="<?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" season="high" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_id'];?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsCruiseSeasonPrice']->value->getPriceDefault($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value,$_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'],$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'],'high',$_smarty_tpl->tpl_vars['number_adult']->value);?>
" number_adult="<?php echo $_smarty_tpl->tpl_vars['number_adult']->value;?>
" type="text">
                                    <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
                                </div>
                            </div>
                            <?php
}
}
?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_extra_bed']) {?>
                            <div class="d-flex justify-content-between mt10">
                                <div class="box_left_group">
                                    <span style="color: var(--main-color);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra Bed');?>
</span>											
                                </div>
                                <div class="d-flex justify-content-between align-items-center">										
                                    <div class="input-group input-group_price d-flex align-items-center">
                                        <input class="text full price-In cruise_season_price_extra_bed fontLarge" cruise_cabin_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'];?>
" group_size_id="<?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" season="high" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_id'];?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsCruiseSeasonPrice']->value->getPriceExtraBedDefault($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value,$_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'],$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'],'high');?>
" number_adult="0" type="text">
                                        <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </td>
                    </tr>
                    <?php
}
}
?>
					
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstCruiseCabin']->value, 'cabin', false, 'k');
$_smarty_tpl->tpl_vars['cabin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cabin']->value) {
$_smarty_tpl->tpl_vars['cabin']->do_else = false;
?>
					<?php $_smarty_tpl->_assignInScope('list_group_size', $_smarty_tpl->tpl_vars['clsISO']->value->makeSlashByArray($_smarty_tpl->tpl_vars['cabin']->value['list_group_size'],'|',','));?>
					<?php $_smarty_tpl->_assignInScope('listGroupCabin', $_smarty_tpl->tpl_vars['clsCruiseProperty']->value->getAll((("type='GroupSize' AND cruise_property_id  IN(").($_smarty_tpl->tpl_vars['list_group_size']->value)).(") order by order_no ASC"),'cruise_property_id,title,is_extra_bed'));?>
					<tr>
						<td width="20%" class="text-left" rowspan="<?php echo count($_smarty_tpl->tpl_vars['listGroupCabin']->value)+1;?>
">
						   <strong><?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id']);?>
</strong>
						</td>
					</tr>
					<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listGroupCabin']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr>
							<td width="80%" class="text-left">
								<div class="d-flex justify-content-between">
									<div class="box_left_group">
										<span><?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</span>											
									</div>
									<div class="d-flex justify-content-between price_config align-items-center">										
										<div class="input-group input-group_price d-flex align-items-center">
											<input class="text full price-In cruise_season_price fontLarge" cruise_cabin_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'];?>
" group_size_id="<?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" season="high" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_id'];?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsCruiseSeasonPrice']->value->getPriceDefault($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value,$_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'],$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'],'high');?>
" number_adult="0" type="text">
											<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
										</div>
									</div>
                                    
								</div>
                                <?php if ($_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_extra_bed']) {?>
                                <div class="d-flex justify-content-between mt10">
                                    <div class="box_left_group">
                                        <span style="color: var(--main-color);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra Bed');?>
</span>											
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">										
                                        <div class="input-group input-group_price d-flex align-items-center">
                                            <input class="text full price-In cruise_season_price_extra_bed fontLarge" cruise_cabin_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'];?>
" group_size_id="<?php echo $_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'];?>
" season="high" cruise_id="<?php echo $_smarty_tpl->tpl_vars['cabin']->value['cruise_id'];?>
" cruise_itinerary_id="<?php echo $_smarty_tpl->tpl_vars['cruise_itinerary_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsCruiseSeasonPrice']->value->getPriceExtraBedDefault($_smarty_tpl->tpl_vars['cruise_itinerary_id']->value,$_smarty_tpl->tpl_vars['cabin']->value['cruise_cabin_id'],$_smarty_tpl->tpl_vars['listGroupCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_property_id'],'high');?>
" number_adult="0" type="text">
                                            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</span>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
							</td>
						</tr>
					<?php
}
}
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</tbody>
	</table>
</div>
<?php }
}
}
