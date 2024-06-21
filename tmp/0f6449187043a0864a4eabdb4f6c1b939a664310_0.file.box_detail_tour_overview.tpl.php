<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:26:52
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614995c464048_46957939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f6449187043a0864a4eabdb4f6c1b939a664310' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_overview.tpl',
      1 => 1710751665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614995c464048_46957939 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
    <div class="form_title_and_trip_code">
		<div class="overview_box congratulations">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Congratulations');?>
!</h2>
			<p class="text">Bây giờ bạn có thể bắt đầu bán trải nghiệm của mình</p>
			<div class="toggle_opt btn_online action_tour">
                <div class="box_status_switch" >
					<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] != 1) {?>
						<span class="txt_status_switch private"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</span>
					<?php } else { ?>
						<span class="txt_status_switch public"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</span>
					<?php }?>
					<label class="switch_public switch" data-clstable="Tour" data-pkey="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->pkey;?>
" data-sourse_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
">
					  <input type="checkbox" name="is_online" value="1" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] == 1) {?>checked<?php }?>>
					  <span class="slider round"></span>
					</label>
				</div>
			</div>
		</div>
		<div class="overview_box tour_info_re" id="tour_info_re">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour infomation recommendations');?>
</h2>
			<p class="text">Đề xuất này là tùy chọn và có thể tăng chất lượng trải nghiệm của bạn.</p>
			<div class="box_content_overview link_caution_up in">
				<ul class="list_link"></ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="overview_box_2 tour_info_re" id="tour_info_re">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel style');?>
</h2>
					<div class="body_show">
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel style');?>
</span>
								<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/option-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['lst_travel_style_overview']->value) {?>
							<p class="text">
								<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lst_travel_style_overview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_2_iteration === $__section_i_2_total);
?>
								<?php echo $_smarty_tpl->tpl_vars['clsTourCategory']->value->getTitle($_smarty_tpl->tpl_vars['lst_travel_style_overview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>;<?php }?>
								<?php
}
}
?>
							</ul>
							<?php } else { ?>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Travel style selected');?>
</p>
							<?php }?>
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tag');?>
</span>
								<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/option-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['lst_tag_overview']->value) {?>
							<p class="text">
								<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lst_tag_overview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_3_iteration === $__section_i_3_total);
?>
								<?php echo $_smarty_tpl->tpl_vars['clsTag']->value->getTitle($_smarty_tpl->tpl_vars['lst_tag_overview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>;<?php }?>
								<?php
}
}
?>
							</ul>
							<?php } else { ?>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Tag selected');?>
</p>
							<?php }?>
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure point');?>
</span>
								<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/option-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['lst_departure_point_overview']->value) {?>
							<p class="text">
								<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lst_departure_point_overview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_4_iteration === $__section_i_4_total);
?>
								<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getTitle($_smarty_tpl->tpl_vars['lst_departure_point_overview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>;<?php }?>
								<?php
}
}
?>
							</ul>
							<?php } else { ?>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Departure point selected');?>
</p>
							<?php }?>
						</div>
                        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'property','activities','default')) {?>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Activities tour');?>
</span>
								<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/activities-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['lst_activities_overview']->value) {?>
							<p class="text">
								<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lst_activities_overview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_5_iteration === $__section_i_5_total);
?>
								<?php echo $_smarty_tpl->tpl_vars['clsActivities']->value->getTitle($_smarty_tpl->tpl_vars['lst_activities_overview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>;<?php }?>
								<?php
}
}
?>
							</ul>
							<?php } else { ?>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Activities tour selected');?>
</p>
							<?php }?>
						</div>
                        <?php }?>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Duration');?>
</span>
								<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/duration-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['number_day'] > 0 || $_smarty_tpl->tpl_vars['oneItem']->value['number_night'] > 0 || $_smarty_tpl->tpl_vars['oneItem']->value['dra_hours'] > 0 || $_smarty_tpl->tpl_vars['oneItem']->value['dra_min'] > 0) {?>
								<p class="text"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['number_day'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('days');?>
 <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['number_night'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nights');?>
 <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['dra_hours'] > 0) {
echo $_smarty_tpl->tpl_vars['oneItem']->value['dra_hours'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hours');
}?> <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['dra_min'] > 0) {
echo $_smarty_tpl->tpl_vars['oneItem']->value['dra_min'];?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Minutes');
}?></p>
							<?php } else { ?>
								<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Duration selected');?>
</p>
							<?php }?>
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour related');?>
</span>
								<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/configuration/related_tours">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['count_relate']->value > 0) {?>
								<p class="text"><?php echo $_smarty_tpl->tpl_vars['count_relate']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('tour related for this tour');?>
</p>
							<?php } else { ?>
								<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No tour related selected');?>
</p>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="overview_box_2 tour_itinerary" id="tour_itinerary">
					<h2 class="headeing d-flex justify-content-between align-items-center">
						<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Intinerary');?>
</span>
						<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/itinerary/itinerary">
							<i class="ico-black-view_link"></i>
						</a> 
					</h2>
					<div class="body_show">
                    <?php if ($_smarty_tpl->tpl_vars['lstItemIti']->value) {?>
                        <table class="table_inti">
                            <thead><tr>
                                <th class="text_bold text_center" style="width:60px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Day');?>
</th>
                                <th class="text_left text_bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</th>
                            </tr> </thead>
                            <tbody>
                            <?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstItemIti']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_6_iteration === $__section_i_6_total);
?>
                                <tr>
									<td class="text_center"><?php echo $_smarty_tpl->tpl_vars['clsTourItinerary']->value->getTripDay($_smarty_tpl->tpl_vars['lstItemIti']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_itinerary_id']);?>
</td>
                                    <td class="text_left"><?php echo $_smarty_tpl->tpl_vars['clsTourItinerary']->value->getTitle($_smarty_tpl->tpl_vars['lstItemIti']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_itinerary_id']);?>
</td>
                                </tr>
                            <?php
}
}
?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <p class="text_caution_option text_bold m-0 t_red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data');?>
</p>
                    <?php }?>
                	</div>
				</div>
				<div class="overview_box_2 tour_destination">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Destination');?>
</h2>
					<div class="body_show">
						<ul class="list-group" id="lstDestination">
							<li><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Loading');?>
...</li>
						</ul>
						<div class="box_map mt-half" style="height:205px;">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('Lbox_map_tour_new');?>

						</div>
                	</div>
				</div>
                <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'property','service','default')) {?>
				<div class="overview_box_2 tour_destination" id="tour_destination">
					<h2 class="headeing d-flex justify-content-between align-items-center">
						<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Service');?>
</span>
						<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/configuration/add-on-services">
							<i class="ico-black-view_link"></i>
						</a> 
					</h2>
					<div class="body_show">
						<p class="intro_content_overview"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All service select in this tour');?>
</p>
						<?php if ($_smarty_tpl->tpl_vars['lst_service_overview']->value) {?>
						<table class="table_inti">
							<thead><tr>
								<td class="text_bold" style="width: calc(100% - 70px);"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Service name');?>
</td>
								<td class="text_center text_bold" style="width: 70px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('price');?>
</td>
							</tr></thead>
							<tbody>
								<?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lst_service_overview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_7_iteration === $__section_i_7_total);
?>
								<tr>
									<td style="width:calc(100% - 70px);"><?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getTitle($_smarty_tpl->tpl_vars['lst_service_overview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</td>
									<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'en') {?>
									<td class="text_center" style="width:70px"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();
echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getPrice($_smarty_tpl->tpl_vars['lst_service_overview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</td>
									<?php } elseif ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
									<td class="text_center" style="width:70px"><?php echo $_smarty_tpl->tpl_vars['clsAddOnService']->value->getPrice($_smarty_tpl->tpl_vars['lst_service_overview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);
echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</td>
									<?php }?>
								</tr>
							<?php
}
}
?>
							</tbody>
						</table>
						<?php } else { ?>
							<p class="text_caution_option text_bold m-0 t_red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No service selected');?>
</p>
						<?php }?>
					</div>
				</div>
                <?php }?>
			</div>
			<div class="col-md-6">
				<div class="overview_box_2 media_info" id="media_info">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Media');?>
</h2>
					<div class="body_show">
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
</span>
								<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/image-file-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image']) {?>
							<div class="photo">
								<img src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImage($_smarty_tpl->tpl_vars['oneItem']->value['tour_id'],253,168);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['oneItem']->value['tour_id']);?>
" width="253" height="168">
							</div>
							<?php } else { ?>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cannot display images');?>
</p>
							<?php }?>
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('File download program');?>
</span>
								<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/image-file-tour">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['file_programme']) {?>
								<p class="text"><a href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['file_programme'];?>
"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['file_programme'];?>
</a></p>
							<?php } else { ?>
								<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No files selected');?>
</p>
							<?php }?>
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Gallery');?>
</span>
								<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/configuration/image-gallery">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['lstItemGalleryn']->value) {?>
								<div class="row">
									<?php
$__section_i_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstItemGalleryn']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_8_total = $__section_i_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_8_total !== 0) {
for ($__section_i_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_8_iteration <= $__section_i_8_total; $__section_i_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_8_iteration === $__section_i_8_total);
?>
										<div class="col-sm-3" style=" /*padding-left: 10px;padding-right: 10px;*/padding-bottom: 15px">
											<img class="image_gallery" src="<?php echo $_smarty_tpl->tpl_vars['clsTourImage']->value->getImage($_smarty_tpl->tpl_vars['lstItemGalleryn']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_image_id'],146,97);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lstItemGalleryn']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" width="100%" height="97">
										</div>
									<?php
}
}
?>
								</div>
							<?php } else { ?>
								<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No files selected');?>
</p>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="overview_box_2 description_tour" id="description_tour">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Description Tour');?>
</h2>
					<div class="body_show">
						<div class="panel-group" id="description">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['overview'] != '') {?>class="success"<?php }?> data-toggle="collapse" data-parent="#description" href="#overview"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Highlight');?>
</a>
										<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/overview-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse in" id="overview" aria-expanded="true">
									<div class="panel-body">
										<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['overview']);?>

									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['inclusion'] != '') {?>class="success"<?php }?> data-toggle="collapse" data-parent="#description" href="#inclusion"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Inclusions');?>
</a>
										<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/inclusion-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="inclusion" aria-expanded="false">
									<div class="panel-body">
										<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['inclusion']);?>

									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['exclusion'] != '') {?>class="success"<?php }?> data-toggle="collapse" data-parent="#description" href="#exclusion"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Exclusion');?>
</a>
										<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/exclusion-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="exclusion" aria-expanded="false">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['exclusion']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['exclusion']);?>

										<?php } else { ?>
											<p class="text_caution_option text_bold m-0 t_red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data');?>
</p>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['exclusion'] != '') {?>class="success"<?php }?> data-toggle="collapse" data-parent="#description" href="#thing_to_carry"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('What\'s to carry');?>
</a>
										<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/whatcarry-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="thing_to_carry" aria-expanded="false">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['thing_to_carry']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['thing_to_carry']);?>

										<?php } else { ?>
											<p class="text_caution_option text_bold m-0 t_red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data');?>
</p>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['exclusion'] != '') {?>class="success"<?php }?> data-toggle="collapse" data-parent="#description" href="#cancellation_policy"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancellation policy');?>
</a>
										<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/cancellation_policy-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="cancellation_policy" aria-expanded="false">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['cancellation_policy']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['cancellation_policy']);?>

										<?php } else { ?>
											<p class="text_caution_option text_bold m-0 t_red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data');?>
</p>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['exclusion'] != '') {?>class="success"<?php }?> data-toggle="collapse" data-parent="#description" href="#refund_policy"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Refund');?>
</a>
										<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/refund-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="refund_policy" aria-expanded="false">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['refund_policy']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['refund_policy']);?>

										<?php } else { ?>
											<p class="text_caution_option text_bold m-0 t_red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data');?>
</p>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['exclusion'] != '') {?>class="success"<?php }?> data-toggle="collapse" data-parent="#description" href="#confirmation_policy"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Confirmation Policy');?>
</a>
										<a class="link_open" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/basic/confirmation-policy-tour"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="confirmation_policy" aria-expanded="false">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['confirmation_policy']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['confirmation_policy']);?>

										<?php } else { ?>
											<p class="text_caution_option text_bold m-0 t_red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data');?>
</p>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var pcsm_ovv = '<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
';
	var pvalTable_ovv = <?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
;
	var list_check_target = <?php echo $_smarty_tpl->tpl_vars['list_check_target']->value;?>
;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
		loadListDestination(<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
,"overview");
        $("#tour_info_re").hide();
        jQuery.each( list_check_target, function( i, val ) {
            if(val['result'] == 'check_success'){}
			else if(val['result'] == 'check_caution'){
			console.log(val);
				if(val['target'] == 'promotion'){
					$(".link_caution_up .list_link").append('<li><a href="'+pcsm_ovv+'/admin/?mod=discount" data-type="promotion">'+val['name']+' <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>');
				}else{
					$(".link_caution_up .list_link").append('<li><a href="'+pcsm_ovv+'/admin/tour/edit/'+pvalTable_ovv+'/'+val['cat']+'/'+val['target']+'">'+val['name']+' <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>');
				}
                
                $("#tour_info_re").show();
            }else{
                $("#tour_info_re").hide();
            }
        });
        $(document).on('click', '.extend', function (ev) {
            var _this = $(this);
            _this.addClass('unextend').removeClass('extend').find('.fa-plus').addClass('fa-minus').removeClass('fa-plus');
            _this.closest('.box_notice').find('.box_title_action').addClass('open');
            _this.closest('.box_notice').find('.box_content_overview').addClass('in');
        });
        $(document).on('click', '.unextend', function (ev) {
            var _this = $(this);
            _this.addClass('extend').removeClass('unextend').find('.fa-minus').addClass('fa-plus').removeClass('fa-minus');
            _this.closest('.box_notice').find('.box_title_action').removeClass('open');
            _this.closest('.box_notice').find('.box_content_overview').removeClass('in');
        })
    })

<?php echo '</script'; ?>
>
<?php }
}
