<?php
/* Smarty version 3.1.38, created on 2024-04-09 07:23:42
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/reviews/reviewAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66148a8e17e4a9_89679519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c92b79ce50af4abdb08443fd8e58cb111a39ba7' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/reviews/reviewAll.tpl',
      1 => 1710138082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66148a8e17e4a9_89679519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container page_review page_all_reviews">
    <div class="page-title" style="background: inherit">
        <h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</h2>
        <p>Chức năng quản lý danh sách các reviews trong hệ thống isoCMS</p>
		<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This function is intended to manage reviews in isoCMS system');?>
</p>
    </div>
	<div class="container-fluid">
		<div class="row d-flex flex-wrap">
			<div class="col-lg-4 col-md-6 box-col">
				<div class="box_chart box_white">
					<div class="head_box_chart">
						<h3 class="title_box_chart"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Review");?>
</h3>
					</div>
					<div class="box_body_chart d-flex flex-wrap align-items-center">
						<div class="box_text_chart">
							<div class="item_chart d-flex justify-content-between">
								<label for="" class="lbl_item_chart tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
</label>
								<span class="number_item_review"><?php echo $_smarty_tpl->tpl_vars['totalReviewTour']->value;?>
</span>
							</div>
							<div class="item_chart d-flex justify-content-between">
								<label for="" class="lbl_item_chart cruise"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</label>
								<span class="number_item_review"><?php echo $_smarty_tpl->tpl_vars['totalReviewCruise']->value;?>
</span>
							</div>
							<div class="item_chart d-flex justify-content-between">
								<label for="" class="lbl_item_chart hotel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel');?>
</label>
								<span class="number_item_review"><?php echo $_smarty_tpl->tpl_vars['totalReviewHotel']->value;?>
</span>
							</div>
							<div class="item_chart d-flex justify-content-between">
								<label for="" class="lbl_item_chart voucher"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</label>
								<span class="number_item_review"><?php echo $_smarty_tpl->tpl_vars['totalReviewVoucher']->value;?>
</span>
							</div>
						</div>
						<div class="relative box_right_chart_all">
							<div class="box_chart_all" id="box_chart_all"></div>
							<div class="box_text_total">
								<p class="number_total"><?php echo $_smarty_tpl->tpl_vars['totalReview']->value;?>
</p>
								<span class="txt_total"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviews');?>
</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 box-col">
				<div class="box_chart box_white">
					<div class="head_box_chart d-flex flex-wrap justify-content-between">
						<h3 class="title_box_chart"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Review tour");?>
</h3>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&type=tour" class="view_all" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View all');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View all');?>
</a>
					</div>
					<div class="d-flex flex-wrap justify-content-between align-items-center">
						<div class="box_star">
							<p class="score_star"><?php echo $_smarty_tpl->tpl_vars['totalReviewAvgTour']->value;?>
</p>
							<p class="txt_review"><?php echo $_smarty_tpl->tpl_vars['totalReviewTour']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</p>
							<?php echo smarty_function_math(array('equation'=>"x*100/5",'x'=>$_smarty_tpl->tpl_vars['totalReviewAvgTour']->value,'assign'=>"star_rate_tour"),$_smarty_tpl);?>

							<label class="rate_star block"><span style="width: <?php echo $_smarty_tpl->tpl_vars['star_rate_tour']->value;?>
%;"></span></label>
						</div>
						<div class="box_chart_tour" id="box_chart_tour"></div>
					</div>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-6 box-col">
				<div class="box_chart box_white">
					<div class="head_box_chart d-flex flex-wrap justify-content-between">
						<h3 class="title_box_chart"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Review cruise");?>
</h3>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&type=cruise" class="view_all" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View all');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View all');?>
</a>
					</div>
					<div class="d-flex flex-wrap justify-content-between align-items-center">
						<div class="box_star box_rate">
							<p class="score_star"><?php echo $_smarty_tpl->tpl_vars['totalReviewAvgCruise']->value;?>
</p>
							<p class="txt_review"><?php echo $_smarty_tpl->tpl_vars['totalReviewCruise']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</p>
							<?php echo smarty_function_math(array('equation'=>"x*100/5",'x'=>$_smarty_tpl->tpl_vars['totalReviewAvgCruise']->value,'assign'=>"star_rate_cruise"),$_smarty_tpl);?>

							<label class="rate_star block"><span style="width: <?php echo $_smarty_tpl->tpl_vars['star_rate_cruise']->value;?>
%;"></span></label>
						</div>
						<div class="box_chart_cruise" id="box_chart_cruise"></div>
					</div>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-6 box-col">
				<div class="box_chart box_white">
					<div class="head_box_chart d-flex flex-wrap justify-content-between">
						<h3 class="title_box_chart"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Review hotel");?>
</h3>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&type=hotel" class="view_all" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View all');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View all');?>
</a>
					</div>
					<div class="d-flex flex-wrap justify-content-between align-items-center">
						<div class="box_star box_rate">
							<p class="score_star"><?php echo $_smarty_tpl->tpl_vars['totalReviewAvgHotel']->value;?>
</p>
							<p class="txt_review"><?php echo $_smarty_tpl->tpl_vars['totalReviewHotel']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</p>
							<?php echo smarty_function_math(array('equation'=>"x*100/5",'x'=>$_smarty_tpl->tpl_vars['totalReviewAvgHotel']->value,'assign'=>"star_rate_hotel"),$_smarty_tpl);?>

							<label class="rate_star block"><span style="width: <?php echo $_smarty_tpl->tpl_vars['star_rate_hotel']->value;?>
%;"></span></label>
						</div>
						<div class="box_chart_hotel" id="box_chart_hotel"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 box-col">
				<div class="box_chart box_white">
					<div class="head_box_chart d-flex flex-wrap justify-content-between">
						<h3 class="title_box_chart"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Review voucher");?>
</h3>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&type=voucher" class="view_all" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View all');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View all');?>
</a>
					</div>
					<div class="d-flex flex-wrap justify-content-between align-items-center">
						<div class="box_star">
							<p class="score_star"><?php echo $_smarty_tpl->tpl_vars['totalReviewAvgVoucher']->value;?>
</p>
							<p class="txt_review"><?php echo $_smarty_tpl->tpl_vars['totalReviewVoucher']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('reviews');?>
</p>
							<?php echo smarty_function_math(array('equation'=>"x*100/5",'x'=>$_smarty_tpl->tpl_vars['totalReviewAvgVoucher']->value,'assign'=>"star_rate_voucher"),$_smarty_tpl);?>

							<label class="rate_star block"><span style="width: <?php echo $_smarty_tpl->tpl_vars['star_rate_voucher']->value;?>
%;"></span></label>
						</div>
						<div class="box_chart_voucher" id="box_chart_voucher"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 12px">
			<div class="col-lg-12">
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Recent reviews");?>
</h3>
				<div class="box_table_review box_white">
					<div class="box_head_tab_reviews d-flex justify-content-between align-items-center flex-wrap">
						<div class="box_scroll">
							<ul class="nav_tab_reviews nav nav-tabs" id="myTab" role="tablist">
								<li class="active"><a data-toggle="tab" href="#all" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&act=reviewAll"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All');?>
</a></li>
								<li><a data-toggle="tab" href="#tour" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&type=tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
</a></li>
								<li><a data-toggle="tab" href="#cruise" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&type=cruise"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</a></li>
								<li><a data-toggle="tab" href="#hotel" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&type=hotel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel');?>
</a></li>
								<li><a data-toggle="tab" href="#voucher" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&type=voucher"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Voucher');?>
</a></li>
							</ul>
						</div>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
?mod=reviews&act=reviewAll" class="view_all" id="view_all"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View all');?>
</a>
					</div>
					<div class="tab-content" id="myTabContent">
						<div id="all" class="tab-pane fade in active">
							<div class="wrap">
								<table cellspacing="0" class="table tbl-grid table-striped table_responsive" width="100%">
									<thead>
										<tr>
											<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name services');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:center;width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="width:6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
											<th class="gridheader hiden_responsive"></th> 
										</tr>
									</thead>
									<tbody id="SortAble">
										<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('type_review', $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['type']));?>
											<?php $_smarty_tpl->_assignInScope('nameServices', $_smarty_tpl->tpl_vars['clsClassTable']->value->getNameService($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']));?>
										<tr id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
											<td class="text-left name_service"> 
												<div class="box_name_services">
													<p class="txt_name_services"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
">#<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['nameServices']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['nameServices']->value;
}?></p>
													<p class="txt_info"><span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span> | <span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span></p>
													<p class="txt_info"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Update');?>
: <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['upd_date'],"d/m/Y H:i",0);?>
</p>
												</div>
												<button type="button" class="toggle-row inline_block767" style="display:none"> <i class="fa fa-caret fa-caret-down"></i> </button>
											</td>
											<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type');?>
" class="block_responsive border_top_responsive" style="text-align:center">
												<?php if ($_smarty_tpl->tpl_vars['type_review']->value) {?>
												<span class="type_review <?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['type_review']->value;?>
</span>
												<?php }?>
											</td>
											<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
" class="block_responsive"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getCountry($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</td> 
											<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
" class="block_responsive" style="text-align:center"><p class="rate_table"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rates'];?>
<span>/5.0</span></p></td>
											<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
												<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']) == '1') {?>
												<span class="status_review public"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</span>
												<?php } else { ?>
												<span class="status_review private"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</span>
												<?php }?>
											</td>
											<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
												<div>
													<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" class="icon_action edit_review"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
													<path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" fill="#1756C8"/>
													<path d="M19.3375 9.7875C18.6024 7.88603 17.3262 6.24164 15.6668 5.05755C14.0073 3.87347 12.0372 3.20161 10 3.125C7.96283 3.20161 5.99275 3.87347 4.33326 5.05755C2.67377 6.24164 1.39761 7.88603 0.662509 9.7875C0.612863 9.92482 0.612863 10.0752 0.662509 10.2125C1.39761 12.114 2.67377 13.7584 4.33326 14.9424C5.99275 16.1265 7.96283 16.7984 10 16.875C12.0372 16.7984 14.0073 16.1265 15.6668 14.9424C17.3262 13.7584 18.6024 12.114 19.3375 10.2125C19.3872 10.0752 19.3872 9.92482 19.3375 9.7875ZM10 14.0625C9.19652 14.0625 8.41108 13.8242 7.743 13.3778C7.07493 12.9315 6.55423 12.297 6.24675 11.5547C5.93927 10.8123 5.85882 9.99549 6.01557 9.20745C6.17232 8.4194 6.55924 7.69553 7.12739 7.12738C7.69554 6.55923 8.41941 6.17231 9.20745 6.01556C9.9955 5.85881 10.8123 5.93926 11.5547 6.24674C12.297 6.55422 12.9315 7.07492 13.3779 7.743C13.8242 8.41107 14.0625 9.19651 14.0625 10C14.0609 11.0769 13.6323 12.1093 12.8708 12.8708C12.1093 13.6323 11.0769 14.0608 10 14.0625Z" fill="#1756C8"/>
													</svg></a>
													<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&action=reviewAll&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="icon_action delete_review confirm_delete"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
													<path d="M16.975 7.425L16.1417 8.86667L6.03333 3.03333L6.86667 1.59167L9.4 3.05L10.5333 2.74167L14.1417 4.825L14.45 5.96667L16.975 7.425ZM5 15.8333V5.83333H9.225L15 9.16667V15.8333C15 16.2754 14.8244 16.6993 14.5118 17.0118C14.1993 17.3244 13.7754 17.5 13.3333 17.5H6.66667C6.22464 17.5 5.80072 17.3244 5.48816 17.0118C5.17559 16.6993 5 16.2754 5 15.8333Z" fill="#FF0000"/>
													</svg></a>
												</div>
											</td>
										</tr>
										<?php
}
}
?>
									</tbody>
								</table>
							</div>
						</div>
						<div id="tour" class="tab-pane fade">
							<div class="wrap">
								<table cellspacing="0" class="table tbl-grid table-striped table_responsive" width="100%">
									<thead>
										<tr>
											<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name services');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="width:6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
											<th class="gridheader hiden_responsive"></th> 
										</tr>
									</thead>
									<tbody id="SortAble">
										<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItemTour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('type_review', $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['type']));?>
											<?php $_smarty_tpl->_assignInScope('nameServices', $_smarty_tpl->tpl_vars['clsClassTable']->value->getNameService($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']));?>
											<tr id="order_<?php echo $_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
												<td class="text-left name_service"> 
													<div class="box_name_services">
														<p class="txt_name_services"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
">#<?php echo $_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['nameServices']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['nameServices']->value;
}?></p>
														<p class="txt_info"><span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span> | <span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span></p>
														<p class="txt_info"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Update');?>
: <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['upd_date'],"d/m/Y H:i",0);?>
</p>
													</div>
													<button type="button" class="toggle-row inline_block767" style="display:none"> <i class="fa fa-caret fa-caret-down"></i> </button>
												</td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
" class="block_responsive border_top_responsive"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getCountry($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</td> 
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
" class="block_responsive" style="text-align:center"><p class="rate_table"><?php echo $_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rates'];?>
<span>/5.0</span></p></td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
													<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Reviews" pkey="reviews_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
														<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']) == '1') {?>
														<span class="status_review public"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</span>
														<?php } else { ?>
														<span class="status_review private"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</span>
														<?php }?>
													</a>
												</td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
													<div>
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" class="icon_action edit_review"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
														<path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" fill="#1756C8"/>
														<path d="M19.3375 9.7875C18.6024 7.88603 17.3262 6.24164 15.6668 5.05755C14.0073 3.87347 12.0372 3.20161 10 3.125C7.96283 3.20161 5.99275 3.87347 4.33326 5.05755C2.67377 6.24164 1.39761 7.88603 0.662509 9.7875C0.612863 9.92482 0.612863 10.0752 0.662509 10.2125C1.39761 12.114 2.67377 13.7584 4.33326 14.9424C5.99275 16.1265 7.96283 16.7984 10 16.875C12.0372 16.7984 14.0073 16.1265 15.6668 14.9424C17.3262 13.7584 18.6024 12.114 19.3375 10.2125C19.3872 10.0752 19.3872 9.92482 19.3375 9.7875ZM10 14.0625C9.19652 14.0625 8.41108 13.8242 7.743 13.3778C7.07493 12.9315 6.55423 12.297 6.24675 11.5547C5.93927 10.8123 5.85882 9.99549 6.01557 9.20745C6.17232 8.4194 6.55924 7.69553 7.12739 7.12738C7.69554 6.55923 8.41941 6.17231 9.20745 6.01556C9.9955 5.85881 10.8123 5.93926 11.5547 6.24674C12.297 6.55422 12.9315 7.07492 13.3779 7.743C13.8242 8.41107 14.0625 9.19651 14.0625 10C14.0609 11.0769 13.6323 12.1093 12.8708 12.8708C12.1093 13.6323 11.0769 14.0608 10 14.0625Z" fill="#1756C8"/>
														</svg></a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&action=reviewAll&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemTour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="icon_action delete_review confirm_delete"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
														<path d="M16.975 7.425L16.1417 8.86667L6.03333 3.03333L6.86667 1.59167L9.4 3.05L10.5333 2.74167L14.1417 4.825L14.45 5.96667L16.975 7.425ZM5 15.8333V5.83333H9.225L15 9.16667V15.8333C15 16.2754 14.8244 16.6993 14.5118 17.0118C14.1993 17.3244 13.7754 17.5 13.3333 17.5H6.66667C6.22464 17.5 5.80072 17.3244 5.48816 17.0118C5.17559 16.6993 5 16.2754 5 15.8333Z" fill="#FF0000"/>
														</svg></a>
													</div>
												</td>
											</tr>
										<?php
}
}
?>
									</tbody>
								</table>
							</div>
						</div>
						<div id="cruise" class="tab-pane fade">
							<div class="wrap">
								<table cellspacing="0" class="table tbl-grid table-striped table_responsive" width="100%">
									<thead>
										<tr>
											<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name services');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="width:6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
											<th class="gridheader hiden_responsive"></th> 
										</tr>
									</thead>
									<tbody id="SortAble">
										<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItemCruise']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('type_review', $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['type']));?>
											<?php $_smarty_tpl->_assignInScope('nameServices', $_smarty_tpl->tpl_vars['clsClassTable']->value->getNameService($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']));?>
											<tr id="order_<?php echo $_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
												<td class="text-left name_service"> 
													<div class="box_name_services">
														<p class="txt_name_services"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
">#<?php echo $_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['nameServices']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['nameServices']->value;
}?></p>
														<p class="txt_info"><span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span> | <span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span></p>
														<p class="txt_info"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Update');?>
: <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['upd_date'],"d/m/Y H:i",0);?>
</p>
													</div>
													<button type="button" class="toggle-row inline_block767" style="display:none"> <i class="fa fa-caret fa-caret-down"></i> </button>
												</td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
" class="block_responsive border_top_responsive"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getCountry($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</td> 
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
" class="block_responsive" style="text-align:center"><p class="rate_table"><?php echo $_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rates'];?>
<span>/5.0</span></p></td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
													<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Reviews" pkey="reviews_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
														<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']) == '1') {?>
														<span class="status_review public"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</span>
														<?php } else { ?>
														<span class="status_review private"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</span>
														<?php }?>
													</a>
												</td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
													<div>
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" class="icon_action edit_review"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
														<path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" fill="#1756C8"/>
														<path d="M19.3375 9.7875C18.6024 7.88603 17.3262 6.24164 15.6668 5.05755C14.0073 3.87347 12.0372 3.20161 10 3.125C7.96283 3.20161 5.99275 3.87347 4.33326 5.05755C2.67377 6.24164 1.39761 7.88603 0.662509 9.7875C0.612863 9.92482 0.612863 10.0752 0.662509 10.2125C1.39761 12.114 2.67377 13.7584 4.33326 14.9424C5.99275 16.1265 7.96283 16.7984 10 16.875C12.0372 16.7984 14.0073 16.1265 15.6668 14.9424C17.3262 13.7584 18.6024 12.114 19.3375 10.2125C19.3872 10.0752 19.3872 9.92482 19.3375 9.7875ZM10 14.0625C9.19652 14.0625 8.41108 13.8242 7.743 13.3778C7.07493 12.9315 6.55423 12.297 6.24675 11.5547C5.93927 10.8123 5.85882 9.99549 6.01557 9.20745C6.17232 8.4194 6.55924 7.69553 7.12739 7.12738C7.69554 6.55923 8.41941 6.17231 9.20745 6.01556C9.9955 5.85881 10.8123 5.93926 11.5547 6.24674C12.297 6.55422 12.9315 7.07492 13.3779 7.743C13.8242 8.41107 14.0625 9.19651 14.0625 10C14.0609 11.0769 13.6323 12.1093 12.8708 12.8708C12.1093 13.6323 11.0769 14.0608 10 14.0625Z" fill="#1756C8"/>
														</svg></a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&action=reviewAll&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemCruise']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="icon_action delete_review confirm_delete"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
														<path d="M16.975 7.425L16.1417 8.86667L6.03333 3.03333L6.86667 1.59167L9.4 3.05L10.5333 2.74167L14.1417 4.825L14.45 5.96667L16.975 7.425ZM5 15.8333V5.83333H9.225L15 9.16667V15.8333C15 16.2754 14.8244 16.6993 14.5118 17.0118C14.1993 17.3244 13.7754 17.5 13.3333 17.5H6.66667C6.22464 17.5 5.80072 17.3244 5.48816 17.0118C5.17559 16.6993 5 16.2754 5 15.8333Z" fill="#FF0000"/>
														</svg></a>
													</div>
												</td>
											</tr>
										<?php
}
}
?>
									</tbody>
								</table>
							</div>
						</div>
						<div id="hotel" class="tab-pane fade">
							<div class="wrap">
								<table cellspacing="0" class="table tbl-grid table-striped table_responsive" width="100%">
									<thead>
										<tr>
											<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name services');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="width:6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
											<th class="gridheader hiden_responsive"></th> 
										</tr>
									</thead>
									<tbody id="SortAble">
										<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItemHotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('type_review', $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['type']));?>
											<?php $_smarty_tpl->_assignInScope('nameServices', $_smarty_tpl->tpl_vars['clsClassTable']->value->getNameService($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']));?>
											<tr id="order_<?php echo $_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
												<td class="text-left name_service"> 
													<div class="box_name_services">
														<p class="txt_name_services"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
">#<?php echo $_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['nameServices']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['nameServices']->value;
}?></p>
														<p class="txt_info"><span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span> | <span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span></p>
														<p class="txt_info"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Update');?>
: <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['upd_date'],"d/m/Y H:i",0);?>
</p>
													</div>
													<button type="button" class="toggle-row inline_block767" style="display:none"> <i class="fa fa-caret fa-caret-down"></i> </button>
												</td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
" class="block_responsive border_top_responsive"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getCountry($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</td> 
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
" class="block_responsive" style="text-align:center"><p class="rate_table"><?php echo $_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rates'];?>
<span>/5.0</span></p></td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
													<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Reviews" pkey="reviews_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
														<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']) == '1') {?>
														<span class="status_review public"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</span>
														<?php } else { ?>
														<span class="status_review private"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</span>
														<?php }?>
													</a>
												</td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
													<div>
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" class="icon_action edit_review"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
														<path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" fill="#1756C8"/>
														<path d="M19.3375 9.7875C18.6024 7.88603 17.3262 6.24164 15.6668 5.05755C14.0073 3.87347 12.0372 3.20161 10 3.125C7.96283 3.20161 5.99275 3.87347 4.33326 5.05755C2.67377 6.24164 1.39761 7.88603 0.662509 9.7875C0.612863 9.92482 0.612863 10.0752 0.662509 10.2125C1.39761 12.114 2.67377 13.7584 4.33326 14.9424C5.99275 16.1265 7.96283 16.7984 10 16.875C12.0372 16.7984 14.0073 16.1265 15.6668 14.9424C17.3262 13.7584 18.6024 12.114 19.3375 10.2125C19.3872 10.0752 19.3872 9.92482 19.3375 9.7875ZM10 14.0625C9.19652 14.0625 8.41108 13.8242 7.743 13.3778C7.07493 12.9315 6.55423 12.297 6.24675 11.5547C5.93927 10.8123 5.85882 9.99549 6.01557 9.20745C6.17232 8.4194 6.55924 7.69553 7.12739 7.12738C7.69554 6.55923 8.41941 6.17231 9.20745 6.01556C9.9955 5.85881 10.8123 5.93926 11.5547 6.24674C12.297 6.55422 12.9315 7.07492 13.3779 7.743C13.8242 8.41107 14.0625 9.19651 14.0625 10C14.0609 11.0769 13.6323 12.1093 12.8708 12.8708C12.1093 13.6323 11.0769 14.0608 10 14.0625Z" fill="#1756C8"/>
														</svg></a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&action=reviewAll&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemHotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="icon_action delete_review confirm_delete"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
														<path d="M16.975 7.425L16.1417 8.86667L6.03333 3.03333L6.86667 1.59167L9.4 3.05L10.5333 2.74167L14.1417 4.825L14.45 5.96667L16.975 7.425ZM5 15.8333V5.83333H9.225L15 9.16667V15.8333C15 16.2754 14.8244 16.6993 14.5118 17.0118C14.1993 17.3244 13.7754 17.5 13.3333 17.5H6.66667C6.22464 17.5 5.80072 17.3244 5.48816 17.0118C5.17559 16.6993 5 16.2754 5 15.8333Z" fill="#FF0000"/>
														</svg></a>
													</div>
												</td>
											</tr>
										<?php
}
}
?>
									</tbody>
								</table>
							</div>
						</div>
						<div id="voucher" class="tab-pane fade">
							<div class="wrap">
								<table cellspacing="0" class="table tbl-grid table-striped table_responsive" width="100%">
									<thead>
										<tr>
											<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name services');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
</strong></th>
											<th class="gridheader hiden_responsive" style="width:6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
											<th class="gridheader hiden_responsive"></th> 
										</tr>
									</thead>
									<tbody id="SortAble">
										<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItemVoucher']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('type_review', $_smarty_tpl->tpl_vars['clsClassTable']->value->getTextByType($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['type']));?>
											<?php $_smarty_tpl->_assignInScope('nameServices', $_smarty_tpl->tpl_vars['clsClassTable']->value->getNameService($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']));?>
											<tr id="order_<?php echo $_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
												<td class="text-left name_service"> 
													<div class="box_name_services">
														<p class="txt_name_services"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
">#<?php echo $_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['nameServices']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['nameServices']->value;
}?></p>
														<p class="txt_info"><span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getFullname($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span> | <span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</span></p>
														<p class="txt_info"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Update');?>
: <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['upd_date'],"d/m/Y H:i",0);?>
</p>
													</div>
													<button type="button" class="toggle-row inline_block767" style="display:none"> <i class="fa fa-caret fa-caret-down"></i> </button>
												</td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
" class="block_responsive border_top_responsive"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getCountry($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
</td> 
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ranking');?>
" class="block_responsive" style="text-align:center"><p class="rate_table"><?php echo $_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rates'];?>
<span>/5.0</span></p></td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
													<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Reviews" pkey="reviews_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
														<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']) == '1') {?>
														<span class="status_review public"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</span>
														<?php } else { ?>
														<span class="status_review private"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</span>
														<?php }?>
													</a>
												</td>
												<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
													<div>
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" class="icon_action edit_review"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
														<path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" fill="#1756C8"/>
														<path d="M19.3375 9.7875C18.6024 7.88603 17.3262 6.24164 15.6668 5.05755C14.0073 3.87347 12.0372 3.20161 10 3.125C7.96283 3.20161 5.99275 3.87347 4.33326 5.05755C2.67377 6.24164 1.39761 7.88603 0.662509 9.7875C0.612863 9.92482 0.612863 10.0752 0.662509 10.2125C1.39761 12.114 2.67377 13.7584 4.33326 14.9424C5.99275 16.1265 7.96283 16.7984 10 16.875C12.0372 16.7984 14.0073 16.1265 15.6668 14.9424C17.3262 13.7584 18.6024 12.114 19.3375 10.2125C19.3872 10.0752 19.3872 9.92482 19.3375 9.7875ZM10 14.0625C9.19652 14.0625 8.41108 13.8242 7.743 13.3778C7.07493 12.9315 6.55423 12.297 6.24675 11.5547C5.93927 10.8123 5.85882 9.99549 6.01557 9.20745C6.17232 8.4194 6.55924 7.69553 7.12739 7.12738C7.69554 6.55923 8.41941 6.17231 9.20745 6.01556C9.9955 5.85881 10.8123 5.93926 11.5547 6.24674C12.297 6.55422 12.9315 7.07492 13.3779 7.743C13.8242 8.41107 14.0625 9.19651 14.0625 10C14.0609 11.0769 13.6323 12.1093 12.8708 12.8708C12.1093 13.6323 11.0769 14.0608 10 14.0625Z" fill="#1756C8"/>
														</svg></a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&action=reviewAll&reviews_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItemVoucher']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reviews_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="icon_action delete_review confirm_delete"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
														<path d="M16.975 7.425L16.1417 8.86667L6.03333 3.03333L6.86667 1.59167L9.4 3.05L10.5333 2.74167L14.1417 4.825L14.45 5.96667L16.975 7.425ZM5 15.8333V5.83333H9.225L15 9.16667V15.8333C15 16.2754 14.8244 16.6993 14.5118 17.0118C14.1993 17.3244 13.7754 17.5 13.3333 17.5H6.66667C6.22464 17.5 5.80072 17.3244 5.48816 17.0118C5.17559 16.6993 5 16.2754 5 15.8333Z" fill="#FF0000"/>
														</svg></a>
													</div>
												</td>
											</tr>
										<?php
}
}
?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/reviews.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
">
<?php echo '<script'; ?>
 type="text/javascript">
	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';
	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
	var $title_chart_column = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("innings");?>
';
	var	dataAll = <?php echo $_smarty_tpl->tpl_vars['dataAll']->value;?>
;
	var dataTour = <?php echo $_smarty_tpl->tpl_vars['dataTour']->value;?>
;
	var dataVoucher = <?php echo $_smarty_tpl->tpl_vars['dataVoucher']->value;?>
;
	var dataCruise = <?php echo $_smarty_tpl->tpl_vars['dataCruise']->value;?>
;
	var dataHotel = <?php echo $_smarty_tpl->tpl_vars['dataHotel']->value;?>
;
	/*var dataCruise = [{
			name: 'Du thuyền',
			y: 7.5,
		},
		{
			name: 'Ăn uống',
			y: 8,
		},
		{
			name: 'Cabin',
			y: 7.6,
		},
		{
			name: 'Phục vụ',
			y: 8,
		},
		{
			name: 'Giải trí',
			y: 9,
		},
		{
			name: 'Đáng giá',
			y: 9.8,
		}
 	];
	var dataHotel = [{
			name: 'Staff',
			y: 7.5,
		},
		{
			name: 'Amenities',
			y: 8,
		},
		{
			name: 'Clean',
			y: 7.6,
		},
		{
			name: 'Place',
			y: 8,
		},
		{
			name: 'Food&Drink',
			y: 9,
		},
		{
			name: 'Worthy',
			y: 9.8,
		}
	];*/
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/highchart/highcharts.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/reviews.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(document).ready(function(){
	loadChartReviewAll(dataAll);
	loadChartByColumn({data:dataTour,color:"#FFC43D",title:$title_chart_column},'tour');
	loadChartByColumn({data:dataVoucher,color:"#FFC43D",title:$title_chart_column},'voucher');
	loadChartByColumn({data:dataCruise,color:"#FFC43D",title:$title_chart_column},'cruise');
	loadChartByColumn({data:dataHotel,color:"#FFC43D",title:$title_chart_column},'hotel');
	/*loadChartByLine(dataCruise,'cruise');
	loadChartByLine(dataHotel,'hotel');*/
	
});
<?php echo '</script'; ?>
>
<?php }
}
