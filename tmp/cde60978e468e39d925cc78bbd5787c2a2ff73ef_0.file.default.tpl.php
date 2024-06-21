<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:39:33
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139f3530f993_96431828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cde60978e468e39d925cc78bbd5787c2a2ff73ef' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/default.tpl',
      1 => 1710815361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139f3530f993_96431828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotels');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các hotels trong hệ thống isoCMS">i</div>
			</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('hotels');?>
</p>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew createNewHotel" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add hotels');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add hotels');?>
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
					
					<div class="form-group form-country">
						<select name="country_id" class="form-control iso-selectbox" data-width="100%" id="slb_country">
							<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['country_id']->value,$_smarty_tpl->tpl_vars['continent_id']->value);?>

						</select>
					</div>
					<div class="form-group form-city">
						<select name="city_id" class="form-control iso-selectbox" data-width="100%" id="slb_city">
							<option value="0"> --<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('City');?>
-- </option>
							<?php echo $_smarty_tpl->tpl_vars['clsCity']->value->getSelectCity($_smarty_tpl->tpl_vars['country_id']->value,0,$_smarty_tpl->tpl_vars['city_id']->value,'title');?>

						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button hidden">
						<button type="button" class="btn btn-export" id="btn_export">Export</button>
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="Hotel" style="display:none">
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
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead><tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
							<th class="gridheader hiden767" style="width:70px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
</th>
							<th class="gridheader hiden767" style="width:80px"><strong>ID</strong></th>
							<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotelname');?>
</strong></th>
							<th class="gridheader text-center hiden_responsive" style="width: 120px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rating');?>
</strong></th>
							<th class="gridheader text-right hiden_responsive" style="width: 130px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricefrom');?>
</strong></th>
							<th class="gridheader text-center hiden_responsive" style="width: 120px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('public');?>
</strong></th>
							<th class="gridheader text-center hiden_responsive" width="40px"></th>
						</tr></thead>
						<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['hotel_id'] != '') {?>
						<tbody id="SortAble">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('hotel_id', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_id']);?>
							<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
" >
								<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" /></td>
								<td class="index hiden767"><img src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImage($_smarty_tpl->tpl_vars['hotel_id']->value,60,40);?>
" alt="Image" width="60"/></td>
								<td class="index hiden767" data-title="ID"><span><?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
</span></td>
								<td class="text-left name_service">
									<span class="title" title="<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['hotel_id']->value) == 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel PRIVATE');
}?>"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['hotel_id']->value);?>
</span>
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == 0) {?>
									<span class="color_r" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel PRIVATE');?>
">[P]</span><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?>
									<span class="pull-right text-muted"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span>
									<?php }?>
									<button type="button" class="toggle-row inline_block767" style="display:none">
										<i class="fa fa-caret fa-caret-down"></i>
									</button>
								</td>
								<td class="block_responsive text-center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rating');?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImageStar($_smarty_tpl->tpl_vars['clsClassTable']->value->getStar($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_id']));?>
" />
								</td>
								<td class="block_responsive" style="text-align:right; white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricefrom');?>
">
									<span class="format_price">
										<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getPrice($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hotel_id']);?>

										</span>
								</td>
								<td class="block_responsive" style="text-align:center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('public');?>
">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Hotel" pkey="hotel_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
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
									<div class="btn-group">
										<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</button>
										<ul class="dropdown-menu">
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['hotel_id']->value);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-eye-open"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/hotel/insert/<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
/overview"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&hotel_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['hotel_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
											<?php } else { ?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/hotel/insert/<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
/overview"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&hotel_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['hotel_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&hotel_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['hotel_id']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
											<?php }?>
										</ul>
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
	<?php echo '<script'; ?>
 type="text/javascript">
		var $boxID = "";
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
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/hotel/jquery.hotel.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
	
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
				$.post(path_ajax_script+"/index.php?mod=hotel&act=ajUpdPosSortHotel", order,

				function(html){
					vietiso_loading(0);
					location.href = REQUEST_URI;
				});
			}
		});
	<?php echo '</script'; ?>
>
	
</div><?php }
}
