<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:22:40
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_cruise_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613a9503911e4_00561742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3da80de5cad38024a42e215d6920ab4255d186a' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_cruise_overview.tpl',
      1 => 1710560097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613a9503911e4_00561742 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code box_page_overview">
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
					<label class="switch_public switch" data-clstable="Cruise" data-pkey="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->pkey;?>
" data-sourse_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
">
					  <input type="checkbox" name="is_online" value="1" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] == 1) {?>checked<?php }?>>
					  <span class="slider round"></span>
					</label>
				</div>
			</div>
		</div>
		<div class="overview_box tour_info_re infomation_recommendations" id="tour_info_re">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise infomation recommendations');?>
</h2>
			<p class="text">Đề xuất này là tùy chọn và có thể tăng chất lượng trải nghiệm của bạn.</p>
			<div class="box_content_overview link_caution_up in">
				<ul class="list_link d-flex flex-wrap justify-content-between"></ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="overview_box_2 tour_info_re" id="tour_info_re">
					<h2 class="d-flex justify-content-between"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin');?>

						<a class="link_open" data-step="cabin" data-panel="overview" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/cabin/cabin"><i class="ico ico-view_link ico-view_link_head"></i></a>
					</h2>
					<div class="body_show">
						<?php if ($_smarty_tpl->tpl_vars['listCabin']->value) {?>
							<?php
$__section_i_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCabin']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_8_total = $__section_i_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_8_total !== 0) {
for ($__section_i_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_8_iteration <= $__section_i_8_total; $__section_i_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<?php $_smarty_tpl->_assignInScope('title_cabin', $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getTitle($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id']));?>
								<div class="box_item_overview">
									<div class="box_image_cabin">
										<a href="javascript:void()" class="edit_cabin" data-cabin_id="<?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id'];?>
" data-cruise_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cabin']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['clsCruiseCabin']->value->getImage($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id'],68,52);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title_cabin']->value;?>
"  width="68" height="52"/></a>
									</div>
									<div class="box_name_services"> 
										<p class="txt_name_services">
										<a href="javascript:void()" class="edit_cabin" data-cabin_id="<?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id'];?>
" data-cruise_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title_cabin']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_cabin']->value;?>
</a></p> 
										<p class="txt_info">
											<?php $_smarty_tpl->_assignInScope('check_first', 1);?>
											<?php if ($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cabin_size'] > 0) {?>
												<?php $_smarty_tpl->_assignInScope('check_first', 0);?>
												<span><?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cabin_size'];?>
m<sup>2</sup></span> 
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bed_size'] != '') {?>
												<?php if ($_smarty_tpl->tpl_vars['check_first']->value == 0) {?>| <?php }?>
												<span><?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bed_size'];?>
</span> 
												<?php $_smarty_tpl->_assignInScope('check_first', 0);?>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['extra_bed'] == 1) {?>
												<?php if ($_smarty_tpl->tpl_vars['check_first']->value == 0) {?>| <?php }?>
												<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Extra bed available');?>
</span> 
											<?php }?>
										</p> 
									</div>
									<div class="box_statusCabin">
										<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseCabin" pkey="cruise_cabin_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cabin_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
											<?php if ($_smarty_tpl->tpl_vars['listCabin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == '1') {?>
											<i class="fa fa-check-circle green"></i>
											<?php } else { ?>
											<i class="fa fa-minus-circle red"></i>
											<?php }?>
										</a>
									</div>
								</div>
							<?php
}
}
?>
						<?php } else { ?>
							<p class="text_caution_option text_bold m-0 t_red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data');?>
</p>
						<?php }?>
						
					</div>
				</div>
				<div class="overview_box_2 tour_itinerary" id="tour_itinerary">
					<h2 class="headeing d-flex justify-content-between align-items-center">
						<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Intinerary');?>
</span> 
						<a class="link_open" data-step="itinerary" data-panel="itinerary" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/itinerary/itinerary"><i class="ico ico-view_link ico-view_link_head"></i></a>
					</h2>
					<div class="body_show">
						<?php if ($_smarty_tpl->tpl_vars['listCruiseItinerary']->value) {?>
							<?php
$__section_i_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listCruiseItinerary']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_9_total = $__section_i_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_9_total !== 0) {
for ($__section_i_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_9_iteration <= $__section_i_9_total; $__section_i_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<?php $_smarty_tpl->_assignInScope('title_Itinerary', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getNumberDay($_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']));?>
								<?php $_smarty_tpl->_assignInScope('city_Itinerary', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getAllCityAround($_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']));?>
								<div class="box_item_overview">
									<div class="box_name_services"> 
										<p class="txt_name_services">
										<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=cruise&act=edit_itinerary&cruise_itinerary_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']);?>
&cruise_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
&fromid=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['title_Itinerary']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title_Itinerary']->value;?>
</a></p> 
										<p class="txt_info">										
											<?php $_smarty_tpl->_assignInScope('cityAround', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getAllCityAround($_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id'],0,", "));?>
											<?php $_smarty_tpl->_assignInScope('meal', $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getListMealItineraryDay($_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']));?>											
											<?php echo $_smarty_tpl->tpl_vars['cityAround']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['meal']->value != '') {
if ($_smarty_tpl->tpl_vars['cityAround']->value != '') {?> | <?php }
echo $_smarty_tpl->tpl_vars['meal']->value;
}?>
										</p> 
									</div>
									<div class="box_statusCabin">
										<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseItinerary" pkey="cruise_itinerary_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
											<?php if ($_smarty_tpl->tpl_vars['clsCruiseItinerary']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['listCruiseItinerary']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_itinerary_id']) == '1') {?>
											<i class="fa fa-check-circle green"></i>
											<?php } else { ?>
											<i class="fa fa-minus-circle red"></i>
											<?php }?>
										</a>
									</div>
								</div>
							<?php
}
}
?>
						<?php } else { ?>
							<p class="text_caution_option text_bold m-0 t_red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data');?>
</p>
						<?php }?>
                	</div>
				</div>
				<div class="overview_box_2 tour_itinerary" id="tour_itinerary">
					<h2 class="headeing d-flex justify-content-between align-items-center">
						<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviewcruise');?>
</span> 
						<a class="link_open" data-step="basic" data-panel="overview" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview/basic"><i class="ico ico-view_link ico-view_link_head"></i></a>
					</h2>
					<div class="body_show">
						<div class="box_rate_score d-flex justify-content-between align-items-center"> 
							<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Food/Drink');?>
</label> 
							<div class="box_right_rate d-flex flex-wrap justify-content-between align-items-center"> 
								<div class="progress"> <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['food_drink'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['food_drink'];?>
%"></div> </div> 
							<span><?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['food_drink'];?>
%</span> 
							</div> 
               			</div>
						<div class="box_rate_score d-flex justify-content-between align-items-center"> 
							<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise quality');?>
</label> 
							<div class="box_right_rate d-flex flex-wrap justify-content-between align-items-center"> 
								<div class="progress"> <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['cruise_quality'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['cruise_quality'];?>
%"></div> </div> 
							<span><?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['cruise_quality'];?>
%</span> 
							</div> 
               			</div>
						<div class="box_rate_score d-flex justify-content-between align-items-center"> 
							<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cabin quality');?>
</label> 
							<div class="box_right_rate d-flex flex-wrap justify-content-between align-items-center"> 
								<div class="progress"> <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['cabin_quality'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['cabin_quality'];?>
%"></div> </div> 
							<span><?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['cabin_quality'];?>
%</span> 
							</div> 
               			</div>
						<div class="box_rate_score d-flex justify-content-between align-items-center"> 
							<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Staff quality');?>
</label> 
							<div class="box_right_rate d-flex flex-wrap justify-content-between align-items-center"> 
								<div class="progress"> <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['staff_quality'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['staff_quality'];?>
%"></div> </div> 
							<span><?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['staff_quality'];?>
%</span> 
							</div> 
               			</div>
						<div class="box_rate_score d-flex justify-content-between align-items-center"> 
							<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Entertainment');?>
</label> 
							<div class="box_right_rate d-flex flex-wrap justify-content-between align-items-center"> 
								<div class="progress"> <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['entertainment'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['entertainment'];?>
%"></div> </div> 
							<span><?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['entertainment'];?>
%</span> 
							</div> 
               			</div>
						<div class="box_rate_score d-flex justify-content-between align-items-center"> 
							<label for="" class="lbl_rate_score"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Worthy');?>
</label> 
							<div class="box_right_rate d-flex flex-wrap justify-content-between align-items-center"> 
								<div class="progress"> <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['worth_the_money'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['worth_the_money'];?>
%"></div> </div> 
							<span><?php echo $_smarty_tpl->tpl_vars['reviewCruise']->value['worth_the_money'];?>
%</span> 
							</div> 
               			</div>
                	</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="overview_box_2 tour_info_re" id="tour_info_re">
					<h2 class="title_head_dropdown d-flex justify-content-between"><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
 - <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Video');?>
</span>
					<a data-toggle="collapse" data-parent="" href="#image_video"><i class="fa fa-angle-up" aria-hidden="true"></i></a></h2>
					
					<div class="body_show panel-collapse collapse in" id="image_video" aria-expanded="true">
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image cover');?>
</span>
								<a class="link_open" data-panel="overview" data-step="image" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview/image">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image']) {?>
							<div class="photo">
								<img src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImage($_smarty_tpl->tpl_vars['oneItem']->value['cruise_id'],253,168);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['oneItem']->value['cruise_id']);?>
" width="253" height="168">
							</div>
							<?php } else { ?>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cannot display images');?>
</p>
							<?php }?>
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('File cruise');?>
</span>
								<a class="link_open" data-panel="overview" data-step="image" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview/image">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['file_programme'] != '') {?>
							<p class="text">
								<a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['oneItem']->value['file_programme'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
" download><?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
</a>
							</ul>
							<?php } else { ?>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No File selected');?>
</p>
							<?php }?>
						</div>
						<div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Gallery');?>
</span>
								<a class="link_open" data-panel="libraryimage" data-step="libraryimage" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/libraryimage/libraryimage">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<div id="holder_gallery" class="list-unstyled gallery"></div>
						</div>
                        <div class="box-item">
							<h3 class="box-title d-flex justify-content-between align-items-center">
								<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Videos');?>
</span>
								<a class="link_open" data-panel="video" data-step="video" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/video/video">
									<i class="ico ico-view_link"></i>
								</a>
							</h3>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cannot display video');?>
</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="overview_box_2 description_tour" id="description_tour">
					<h2 class="title_head_dropdown d-flex justify-content-between"><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Information/Description');?>
</span>
					<a data-toggle="collapse" data-parent="" href="#InformationDescription"><i class="fa fa-angle-up" aria-hidden="true"></i></a></h2>
					
					<div class="body_show panel-collapse collapse in" id="InformationDescription" aria-expanded="true">
						<div class="panel-group" id="description">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title d-flex justify-content-between align-items-center">
										<a <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['about'] != '') {?>class="success"<?php }?> data-toggle="collapse" data-parent="#description" href="#about"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About');?>
</a>
										<a class="link_open" data-panel="overview" data-step="about" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview/about"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse in" id="about" aria-expanded="true">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['about']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['about']);?>

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
										<a class="collapsed <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['inclusion'] != '') {?>success<?php }?>" data-toggle="collapse" data-parent="#description" href="#inclusion"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Inclusions');?>
</a>
										<a class="link_open" data-panel="overview" data-step="inclusion" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview/inclusion"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="inclusion" aria-expanded="false">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['inclusion']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['inclusion']);?>

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
										<a class="collapsed <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['cruise_policy'] != '') {?>success<?php }?>" data-toggle="collapse" data-parent="#description" href="#cruisePolicy"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Policy');?>
</a>
										<a class="link_open" data-panel="overview" data-step="cruisePolicy" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview/cruisePolicy"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="cruisePolicy" aria-expanded="false">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['cruise_policy']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['cruise_policy']);?>

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
										<a class="collapsed <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['exclusion'] != '') {?>success<?php }?>" data-toggle="collapse" data-parent="#description" href="#exclusion"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Exclusion');?>
</a>
										<a class="link_open" data-panel="overview" data-step="exclusion" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview/exclusion"><i class="ico ico-view_link"></i></a>
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
										<a class="collapsed <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['booking_policy'] != '') {?>success<?php }?>" data-toggle="collapse" data-parent="#description" href="#bookingPolicy"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Policy');?>
</a>
										<a class="link_open" data-panel="overview" data-step="bookingPolicy" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview/bookingPolicy"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="bookingPolicy" aria-expanded="false">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['booking_policy']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['booking_policy']);?>

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
										<a class="collapsed <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['child_policy'] != '') {?>success<?php }?>" data-toggle="collapse" data-parent="#description" href="#childPolicy"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child Policy');?>
</a>
										<a class="link_open" data-panel="overview" data-step="childPolicy" data-route="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview/childPolicy"><i class="ico ico-view_link"></i></a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="childPolicy" aria-expanded="false">
									<div class="panel-body">
										<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['child_policy']) {?>
											<?php echo html_entity_decode($_smarty_tpl->tpl_vars['oneItem']->value['child_policy']);?>

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
	var txtConfigPrice = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Config Price");?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
		loadListDestination(<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
,"overview");
        $("#tour_info_re").hide();
        jQuery.each( list_check_target, function( i, val ) {
							 
			console.log(val);
            if(val['status'] == 1){}
			else if(val['status'] == 0){
				if(val['target'] == 'promotion'){
					$(".link_caution_up .list_link").append('<li><a href="'+pcsm_ovv+'/admin/?mod=discount" data-type="promotion">'+val['name']+' <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>');
				}else{
					if(val['panel'] == 'configprice'){
						$(".link_caution_up .list_link").append('<li><a href="'+pcsm_ovv+'/admin/cruise/insert/'+pvalTable_ovv+'/'+val['panel']+'/'+val['key']+'">'+txtConfigPrice+": "+val['name']+' <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>');
					}else{
						$(".link_caution_up .list_link").append('<li><a href="'+pcsm_ovv+'/admin/cruise/insert/'+pvalTable_ovv+'/'+val['panel']+'/'+val['key']+'">'+val['name']+' <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>');
					}
					
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
        });
		loadGallery(pvalTable_ovv, {"clsTable":"CruiseImage"});
    });
	function loadGallery($table_id, options){
		var $_adata = options || {};
		$_adata['tp'] = 'L';
		$_adata['table_id'] = table_id;
		$.post(path_ajax_script + '/index.php?mod=home&act=ajOpenGallery', $_adata, function(html){
			$('#holder_gallery').html(html);
		});
	}

<?php echo '</script'; ?>
>
<?php }
}
