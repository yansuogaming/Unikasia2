<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:42:40
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/main_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139ff0761376_30087062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed72374d1cc0c081e6c801db30ae20562a37a6c5' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/main_step.tpl',
      1 => 1712135649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139ff0761376_30087062 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex full-height">
			<div class="col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						<?php if ($_smarty_tpl->tpl_vars['currentstep']->value == 'name') {?>
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name and Hotel Rating');?>
</h3>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('title_hotel', 'title_hotel');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['title_hotel']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['title_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<input class="input_text_form input-title required" data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" type="text" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('New title');?>
" onClick="loadHelp(this)">
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['title_hotel']->value));?>
</div>
							</div>
							<div class="inpt_tour">
								<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rating');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('rate_hotel', 'rate_hotel');?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['rate_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rating');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<div class="fieldarea" onClick="loadHelp(this)">
									<label class="radio inline version-xs text_normal"><input type="radio" name="star_id" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['star_id'] == '1' || $_smarty_tpl->tpl_vars['pvalTable']->value == '1') {?>checked="checked"<?php }?> value="1"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Un Rated');?>
</label> 
									<?php
$_smarty_tpl->tpl_vars['__smarty_section_star'] = new Smarty_Variable(array());
if (true) {
for ($__section_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] = 2; $__section_star_0_iteration <= 5; $__section_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']++){
?>
									<label class="radio inline version-xs text_normal"><input type="radio" name="star_id" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['star_id'] == (isset($_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] : null)) {?>checked="checked"<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] : null);?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('star');?>
</label>
									<?php
}
}
?>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['star_cruise']->value));?>
</div>
								</div>
							</div>
							<div class="inpt_tour">
								<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type hotel');?>
</label>
								<select name="type_hotel_id" id="type_hotel_id" class="form-control">
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectPropertyType('TypeHotel',$_smarty_tpl->tpl_vars['oneItem']->value['list_TypeHotel']);?>

								</select>
							</div>
							<div class="inpt_tour">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviewhotel');?>

                           		<?php $_smarty_tpl->_assignInScope('review_hotel', 'review_hotel');?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
								<button data-key="<?php echo $_smarty_tpl->tpl_vars['review_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviewcruise');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
                           </label>
                            <div class="fieldarea" onClick="loadHelp(this)">
                            	<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['review_hotel']->value));?>
</div>
								<div style="width: 100%; margin-right: 20px; float: left;">
									<div class="bold" style="margin:0 0 1.33em"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Score breakdown');?>
</div>
									<div class="row-span"> 
										<div class="fieldlabel span30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Staff');?>
</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="staff" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsHotel']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'staff'));?>
"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Amenities');?>
</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="amenities" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsHotel']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'amenities'));?>
"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Clean');?>
</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="clean" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsHotel']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'clean'));?>
"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Place');?>
</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="place" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsHotel']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'place'));?>
"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Food/Drink');?>
</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="food_drink" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsHotel']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'food_drink'));?>
"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Worthy');?>
</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="worthy" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['clsReviewsHotel']->value->getValueByField($_smarty_tpl->tpl_vars['pvalTable']->value,'worthy'));?>
"  maxlength="255" type="text" /> %</div>
									</div>
								</div>
							</div>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'location') {?>
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Location');?>
</h3>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Location');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('location_hotel', 'location_hotel');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['location_hotel']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['location_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Location');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<div class="fieldarea" onClick="loadHelp(this)">
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['location_hotel']->value));?>
</div>
                                    <div class="d-flex" style="gap:5px">
                                     <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'continent','default','default') && $_smarty_tpl->tpl_vars['core']->value->checkAccess('continent')) {?>
                                        <select class="slb required" style="font-size:14px;width:150px !important; height: 50px" name="iso-continent_id" continent_id="<?php echo $_smarty_tpl->tpl_vars['continent_id']->value;?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['clsContinent']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['continent_id']);?>

                                        </select>
                                        <select class="slb required" name="iso-country_id" id="slb_Country" style="font-size:14px;min-width:150px; height: 50px">
                                            <option value="0">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectcountry');?>
 --</option>
                                        </select>
                                        
                                        <?php echo '<script'; ?>
 type="text/javascript">
                                        $(function(){
                                            loadCountry(continent_id,country_id);
                                        });
                                        <?php echo '</script'; ?>
>
                                        
                                        <?php } else { ?>
                                        <select class="slb" name="iso-country_id" id="slb_Country" style="font-size:14px;min-width:150px; height: 50px">
                                            <?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['country_id']);?>

                                        </select>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default')) {?>
                                        <select class="slb" name="iso-region_id" id="slb_Region" style="font-size:14px;min-width:150px; height: 50px">
                                            <?php echo $_smarty_tpl->tpl_vars['clsRegion']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['country_id'],$_smarty_tpl->tpl_vars['oneItem']->value['region_id']);?>

                                        </select>
                                        <?php }?>
                                        <div id="slb_city_Id_Container" class="form-group">
                                            <select class="slb required iso-selectbox" name="iso-city_id" id="slb_City" <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['country_id'];?>
 style="font-size:14px;min-width:120px">
                                                <?php echo $_smarty_tpl->tpl_vars['clsCity']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['city_id'],$_smarty_tpl->tpl_vars['oneItem']->value['country_id']);?>

                                            </select>
                                        </div>
                                    </div>
								</div>
							</div>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('address_hotel', 'address_hotel');?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
										<button data-key="<?php echo $_smarty_tpl->tpl_vars['address_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<input class="text mr10 required" name="iso-address" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getAddress($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" style="width:auto; min-width:100%; max-width:500px;" onClick="loadHelp(this)" />
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['address_hotel']->value));?>
</div>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'image') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_image');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'gallery') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_image-gallery');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'seo') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_seotool');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'overview') {?>
							<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Overview hotel');?>

								<?php $_smarty_tpl->_assignInScope('overview_hotel', 'overview_hotel');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['overview_hotel']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['overview_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Overview hotel');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introoverviewhotel');?>
</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="textarea_intro_editor" data-column="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['overview'];?>
</textarea>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'checkin') {?>
							<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check-in/ Check-out');?>

								<?php $_smarty_tpl->_assignInScope('check_in_out_hotel', 'check_in_out_hotel');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['check_in_out_hotel']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['check_in_out_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Check-in/ Check-out');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introcheckinhotel');?>
</p>
							<div class="inpt_tour">
								<label class="full-width"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Time check in');?>
</label>
								<div class="form-group pick_duration">
									<span class="minus"  data-step="1">-</span>
									<input type="number" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTimeCheckInOut($_smarty_tpl->tpl_vars['pvalTable']->value,'hour_in');?>
" min="0" max="24" class="input_number find_select" name="hour_in">
									<span class="plus"  data-step="1">+</span>
								</div>
								<label class="label_duration "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hours');?>
</label>
								<div class="form-group pick_duration pick_night">
									<span class="minus" data-step="5">-</span>
									<input type="number" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTimeCheckInOut($_smarty_tpl->tpl_vars['pvalTable']->value,'minute_in');?>
" min="0" max="60"  class="input_number find_select" name="minute_in">
									<span class="plus" data-step="5">+</span>
								</div>
								<label class="label_duration"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Minute');?>
</label>
							</div>
							<div class="inpt_tour">
								<label  class="full-width"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Time check out');?>
</label>
								<div class="form-group pick_duration">
									<span class="minus"  data-step="1">-</span>
									<input type="number" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTimeCheckInOut($_smarty_tpl->tpl_vars['pvalTable']->value,'hour_out');?>
" min="0" max="24" class="input_number find_select" name="hour_out">
									<span class="plus"  data-step="1">+</span>
								</div>
								<label class="label_duration "><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hours');?>
</label>
								<div class="form-group pick_duration pick_night">
									<span class="minus"  data-step="5">-</span>
									<input type="number" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTimeCheckInOut($_smarty_tpl->tpl_vars['pvalTable']->value,'minute_out');?>
" min="0" max="60" class="input_number find_select" name="minute_out">
									<span class="plus" data-step="5">+</span>
								</div>
								<label class="label_duration"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Minute');?>
</label>
							</div>
						
							<?php echo '<script'; ?>
>
								$(document).ready(function() {
									$('.minus').click(function () {
										var $input = $(this).parent().find('input');
										var step=parseInt($(this).data('step'));
										var count = parseInt($input.val()) - step;
										count = count < 1 ? 0 : count;
										count = count<10?'0'+count:count;
										$input.val(count);
										$input.change();
										return false;
									});
									$('.plus').click(function () {
										var $input = $(this).parent().find('input');
										var step=parseInt($(this).data('step'));
										var count = parseInt($input.val()) + step;
										count = count > 60 ? 60 : count;
										count = count<10?'0'+count:count;
										$input.val(count);
										$input.change();
										return false;
									});
								});
							<?php echo '</script'; ?>
>
							<style>
								input[type=number]::-webkit-inner-spin-button,
								input[type=number]::-webkit-outer-spin-button {
									-webkit-appearance: none;
								}
							</style>
						
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'booking_policy') {?>
							<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Policy');?>

								<?php $_smarty_tpl->_assignInScope('booking_policy_hotel', 'booking_policy_hotel');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['booking_policy_hotel']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['booking_policy_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Policy');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introhotelbookingpolicy');?>
</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="textarea_intro_editor" data-column="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" id="textarea_intro_editor_booking_policy_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['booking_policy'];?>
</textarea>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'child_policy') {?>
							<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children and bed policy');?>

								<?php $_smarty_tpl->_assignInScope('child_policy_hotel', 'child_policy_hotel');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['child_policy_hotel']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['child_policy_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Children and bed policy');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introchildpolicyhotel');?>
</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="textarea_intro_editor" data-column="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" id="textarea_intro_editor_child_policy_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['child_policy'];?>
</textarea>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'cancellation_policy') {?>
							<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancellation Policy');?>

								<?php $_smarty_tpl->_assignInScope('cancellation_policy_hotel', 'cancellation_policy_hotel');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['cancellation_policy_hotel']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['cancellation_policy_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancellation Policy');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introcancellationpolicyhotel');?>
</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="textarea_intro_editor" data-column="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" id="textarea_intro_editor_cancellation_policy_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['cancellation_policy'];?>
</textarea>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'other_policy') {?>
							<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Rule');?>

								<?php $_smarty_tpl->_assignInScope('other_policy_hotel', 'other_policy_hotel');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['other_policy_hotel']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['other_policy_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Other Rule');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introotherpolicyhotel');?>
</p>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="textarea_intro_editor" data-column="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" id="textarea_intro_editor_other_policy_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['other_policy'];?>
</textarea>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'room') {?>
							<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('List Room');?>

								<?php $_smarty_tpl->_assignInScope('list_room_hotel', 'list_room_hotel');?>
								<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['list_room_hotel']->value);?>
								<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['list_room_hotel']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('List Room');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								<?php }?>
							</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introhotelroom');?>
</p>
							<div class="inpt_tour">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_hotel_room');?>

							</div>
							<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/repeater.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'room_facilities') {?>
							<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Room facilities');?>
</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introroomfacilities');?>
</p>
							<div class="inpt_tour">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_room_facilities');?>

							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'hotel_facilities') {?>
							<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel facilities');?>
</h3>
							<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('introhotelfacilities');?>
</p>
							<div class="inpt_tour">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_hotel_facilities');?>

							</div>
						<?php } else { ?>
						<?php }?>

						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['key'];?>
" data-prevstep="<?php echo $_smarty_tpl->tpl_vars['prevstep']->value;?>
" class="back_step js_save_back"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>

							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" data-next_step="<?php echo $_smarty_tpl->tpl_vars['nextstep']->value;?>
" class="js_save_continue"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col_instruction">
				<div class="instruction_fill_data_box">
					<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
					<div class="content_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['help_first']->value));?>
</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php echo '<script'; ?>
>
	var errorExistRoomName = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Room Name exist');?>
";
	var list_check_target = <?php echo $_smarty_tpl->tpl_vars['list_check_target']->value;?>
;
<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
		if($('.textarea_intro_editor').length > 0){
			$('.textarea_intro_editor').each(function(){
				var $_this = $(this);
				var $editorID = $_this.attr('id');
				$('#'+$editorID).isoTextAreaFull();
			});
		}		
		$.each( list_check_target, function( i, val ) {
			if(val.status == 1){
				$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_success");
			}else{
				$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_caution");
			}
		});
	<?php echo '</script'; ?>
>
<?php }
}
