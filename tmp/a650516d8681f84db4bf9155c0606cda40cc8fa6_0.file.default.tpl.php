<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:30:29
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139d156922f1_51933017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a650516d8681f84db4bf9155c0606cda40cc8fa6' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/default.tpl',
      1 => 1709773624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139d156922f1_51933017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('day', $_smarty_tpl->tpl_vars['core']->value->get_Lang('day'));
$_smarty_tpl->_assignInScope('days', $_smarty_tpl->tpl_vars['core']->value->get_Lang('days'));?>
<div class="page_container page_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
">
	<div class="page-title d-flex flex-wrap justify-content-between" style="background: inherit">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tours');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
)</h2>
			<p>Chức năng quản lý danh sách các tours trong hệ thống isoCMS</p>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This function is intended to manage tours in isoCMS system');?>
</p>
		</div>
		<div class="button_right d-flex flex-wrap" style="gap:5px">
			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkConnTMS()) {?>
				<?php if (0) {?>
				<a class="btn btn-success syncTourAPI" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=syncTourAPI" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPIfromTMS');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPIfromTMS');?>
 <i class="fa fa-reply-all" aria-hidden="true"></i></a>
				<a class="btn btn-primary syncTourAPItoTMS" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=syncTourAPItoTMS" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPItoTMS');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPItoTMS');?>
 <i class="fa fa-share" aria-hidden="true"></i></a>
				<?php }?>
				<a class="btn btn-success btn-addnew open_syncTourAPI" syncTourAPI href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPIfromTMS');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPIfromTMS');?>
 <i class="fa fa-reply-all" aria-hidden="true"></i></a>
				<a class="btn btn-primary btn-addnew open_syncTourtoTMS" syncTourAPItoTMS href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPItoTMS');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPItoTMS');?>
 <i class="fa fa-share" aria-hidden="true"></i></a>
		   	<?php }?>
		   	<?php if ($_smarty_tpl->tpl_vars['package_id']->value == 4) {?>
			<a type="button" class="btn btn-addnew btn-export" id="btn_export">Export <i class="fa fa-arrow-down" aria-hidden="true" style="border-bottom: 2px solid #fff"></i></a>
			<?php }?>
			<a class="btn btn-main btn-addnew <?php if ($_smarty_tpl->tpl_vars['is_day_trip']->value == '1') {?>add_new_day_trip<?php } else { ?>add_new_tour<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('addtours');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('addtours');?>
</a>
			<div class="btn btn-setting"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=setting" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
		</div>
    </div>
	<div class="container-fluid">
		<div class="wrap">
			<div class="statistical mb5">
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
					</div>
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'group ','default') && $_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
					<div class="form-group">
						<select name="tour_group_id" class="form-control iso-selectbox" data-width="100%" tp="ajax" id="slb_TourGroup">
							<?php echo $_smarty_tpl->tpl_vars['clsTourGroup']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['tour_group_id']->value);?>

						</select>
					</div>
					<?php }?>
					<div class="form-group">
						<select name="cat_id" class="form-control iso-selectbox" data-width="100%" id="slb_Category">
							<?php echo $_smarty_tpl->tpl_vars['clsTourCat']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['tour_group_id']->value,$_smarty_tpl->tpl_vars['cat_id']->value,$_smarty_tpl->tpl_vars['is_set']->value);?>

						</select>
					</div>
					<div class="form-group">
						<select name="number_day" class="form-control iso-selectbox" data-width="100%">
							 <option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Itinerary');?>
</option>
							 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectNumber2(30,$_smarty_tpl->tpl_vars['number_day']->value,((string)$_smarty_tpl->tpl_vars['day']->value).",".((string)$_smarty_tpl->tpl_vars['days']->value));?>

						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="Tour" style="display:none">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

						</a>
					</div>
				</form>	
				<div class="record_per_page">
					<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
</label>
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage2($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['pUrl']->value);?>

				</div>
			</div>
			<div class="clearfix"></div>
			<div class="tabbox">
				<div class="hastable">
					<?php $_smarty_tpl->_assignInScope('SiteHasCat_Tours', $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'category ','default'));?>
					<table cellspacing="0" class="table table-striped tbl-grid table_responsive" width="100%">
						<thead><tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
							<th class="gridheader name_responsive" style="text-align:left" colspan="2"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name tour');?>
</strong></th>
							<th class="gridheader text-left hiden_responsive"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('duration');?>
</strong></th>
							<th class="gridheader hiden_responsive text-right" width="6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('price');?>
</strong></th>
							<th class="gridheader text-center hiden_responsive"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</strong></th>
							<th class="gridheader text-center hiden_responsive" width="100px"></th>
						</tr></thead>
						<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['tour_id'] != '') {?>
						<tbody>
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('tour_id', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
							<?php $_smarty_tpl->_assignInScope('nameServices', $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['tour_id']->value));?>
							<?php $_smarty_tpl->_assignInScope('oneUserCreator', $_smarty_tpl->tpl_vars['clsUser']->value->getOne($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id'],'first_name,last_name'));?>
							<?php $_smarty_tpl->_assignInScope('oneUserUpdate', $_smarty_tpl->tpl_vars['clsUser']->value->getOne($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id_update'],'first_name,last_name'));?>
							<tr id="order_<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" >
								<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" /></td>
								<td class="index hiden767"><img src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImage($_smarty_tpl->tpl_vars['tour_id']->value,105,69);?>
" alt="Image" width="105" height="69" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'"/></td>
								<td class="text-left name_service">
									<div class="box_name_services">
										<p class="txt_name_services"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/tour/edit/<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
/overview" title="<?php echo $_smarty_tpl->tpl_vars['nameServices']->value;?>
"><span class="txt_tour_id">#<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
</span> <?php if ($_smarty_tpl->tpl_vars['nameServices']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['nameServices']->value;
}?></a></p>
										<p class="txt_info"><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Created");?>
: <?php echo $_smarty_tpl->tpl_vars['oneUserCreator']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['oneUserCreator']->value['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],"d/m/Y H:i",0);?>
</span> | <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Update");?>
: <?php echo $_smarty_tpl->tpl_vars['oneUserUpdate']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['oneUserUpdate']->value['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['upd_date'],"d/m/Y H:i",0);?>
</span></p>
										<div>
											<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkConnTMS() && (!empty($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['yield_id']) || !empty($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tms_code']))) {?><span class="btn_connect is_connect_tms"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TravelMaster');?>
</span><?php }?>
											<span class="btn_connect is_connect_itrsm hidden"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('iTourism');?>
</span>
										</div>
									</div>
									<button type="button" class="toggle-row inline_block767" style="display:none">
										<i class="fa fa-caret fa-caret-down"></i>
									</button>
								</td>
								<td class="text-left block_responsive border_top_responsive" style="white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('duration');?>
">
									<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTripDuration2020($_smarty_tpl->tpl_vars['tour_id']->value,'/ ');?>

								</td>
								<td class="block_responsive" style="text-align:right; white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricefrom');?>
">
									<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getTripPriceNewPro2020($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['now_day']->value,0,'value') > '0') {?>
										<span class="format_price_new">
										<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTripPriceNewPro2020($_smarty_tpl->tpl_vars['tour_id']->value,$_smarty_tpl->tpl_vars['now_day']->value,0,'value');?>
 <u><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</u>
										</span>
									<?php } else { ?>
										<span class="format_price_new">
										0 <u><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
<u>
										</span>
									<?php }?>
								</td>
								<td class="block_responsive" style="text-align:center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Tour" pkey="tour_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
										<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == '1') {?>
										<i class="fa fa-check-circle green"></i>
										<?php } else { ?>
										<i class="fa fa-minus-circle red"></i>
										<?php }?>
									</a>
								</td>
								<td class="block_responsive text-center" style="white-space:nowrap;" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
">
									<div class="d-flex align-items-center" style="gap:5px">
										<a data-href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['tour_id']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['nameServices']->value;?>
" class="btn_preview_tour icon_action edit_review" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
										<path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" fill="#1756C8"/>
										<path d="M19.3375 9.7875C18.6024 7.88603 17.3262 6.24164 15.6668 5.05755C14.0073 3.87347 12.0372 3.20161 10 3.125C7.96283 3.20161 5.99275 3.87347 4.33326 5.05755C2.67377 6.24164 1.39761 7.88603 0.662509 9.7875C0.612863 9.92482 0.612863 10.0752 0.662509 10.2125C1.39761 12.114 2.67377 13.7584 4.33326 14.9424C5.99275 16.1265 7.96283 16.7984 10 16.875C12.0372 16.7984 14.0073 16.1265 15.6668 14.9424C17.3262 13.7584 18.6024 12.114 19.3375 10.2125C19.3872 10.0752 19.3872 9.92482 19.3375 9.7875ZM10 14.0625C9.19652 14.0625 8.41108 13.8242 7.743 13.3778C7.07493 12.9315 6.55423 12.297 6.24675 11.5547C5.93927 10.8123 5.85882 9.99549 6.01557 9.20745C6.17232 8.4194 6.55924 7.69553 7.12739 7.12738C7.69554 6.55923 8.41941 6.17231 9.20745 6.01556C9.9955 5.85881 10.8123 5.93926 11.5547 6.24674C12.297 6.55422 12.9315 7.07492 13.3779 7.743C13.8242 8.41107 14.0625 9.19651 14.0625 10C14.0609 11.0769 13.6323 12.1093 12.8708 12.8708C12.1093 13.6323 11.0769 14.0608 10 14.0625Z" fill="#1756C8"/>
										</svg></a>
										<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('duplicate');?>
" class="ajDuplicateTour" data-name_services="<?php echo $_smarty_tpl->tpl_vars['nameServices']->value;?>
" tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
										<div class="btn-group">
											<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu">
												<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
												<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/tour/edit/<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
/overview"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
												<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&tour_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['tour_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
												<?php } else { ?>
												<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/tour/insert/<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
/overview"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
												<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&tour_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['tour_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
												<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&tour_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['tour_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkConnTMS() && (!empty($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['yield_id']) || !empty($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tms_code']))) {?>
												<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPIfromTMS');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=syncOneTourAPI&yield_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['yield_id']);?>
&tour_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
"><i class="icon-share"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPIfromTMS');?>
</span></a></li>
												<?php }?>
											</ul>
										</div>
									</div>
								</td>
							</tr>
							<?php
}
}
?>
						</tbody>
						<?php } else { ?><tr><td colspan="15"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
!</td></tr><?php }?>
					</table>
				</div>
			</div>
			<div class="clearfix"></div>
			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getPaginationAdmin($_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['totalPage']->value,$_smarty_tpl->tpl_vars['currentPage']->value,$_smarty_tpl->tpl_vars['listPageNumber']->value,$_smarty_tpl->tpl_vars['link_page_current']->value,$_smarty_tpl->tpl_vars['type']->value);?>

		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $boxID = "";
	var $tour_group_id = '<?php echo $_smarty_tpl->tpl_vars['tour_group_id']->value;?>
';
	var $tour_type_id = '<?php echo $_smarty_tpl->tpl_vars['tour_type_id']->value;?>
';
	var $cat_id = '<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
';
	var $city_id= '<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
';
	var $departure_point_id= '<?php echo $_smarty_tpl->tpl_vars['departure_point_id']->value;?>
';
	var $is_set= '<?php echo $_smarty_tpl->tpl_vars['is_set']->value;?>
';
	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';
	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
	var $listcatID  = '';
	var confirm_dup  = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Are you sure to duplicate this tour");?>
';
<?php echo '</script'; ?>
>

<style type="text/css">
	.select2-container .select2-selection--single{
		height:50px;
	}
	.select2-container--default .select2-selection--single .select2-selection__rendered{
		line-height:50px;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow{
		width:30px;
		height:50px;
	}
</style>
<?php echo '<script'; ?>
 type="text/javascript">
	$("#SortAble").sortable({
		opacity: 0.8,
		cursor: 'move',
		start: function(){
			vietiso_loading(1);
		},
		stop: function(){
			vietiso_loading(0);
		},
		update: function(){
			var recordPerPage = $recordPerPage;
			var currentPage = $currentPage;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage;
			$.post(path_ajax_script+"/index.php?mod=tour&act=ajUpdPosSortTour", order,
			function(html){
				vietiso_loading(0);
				location.href = REQUEST_URI;
			});
		}
	});
<?php echo '</script'; ?>
>

<?php }
}
