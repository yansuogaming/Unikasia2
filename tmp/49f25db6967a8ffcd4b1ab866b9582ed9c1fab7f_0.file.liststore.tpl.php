<?php
/* Smarty version 3.1.38, created on 2024-04-10 16:40:01
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/liststore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66165e7141d2b9_91291209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49f25db6967a8ffcd4b1ab866b9582ed9c1fab7f' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/liststore.tpl',
      1 => 1709865254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66165e7141d2b9_91291209 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_cruise_setting');?>

		<div class="content_setting_box">
			<div class="wrap">
				<div class="page_detail-title d-flex">
					<div class="title">
						<h2><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
 </h2>
						<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('systemmanagement');?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
</p>
					</div>
					<div class="button_right">
						<a class="btn btn-main btn-addnew btnCreateService" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=listcruise<?php echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
 <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
</a>
					</div>
				</div>
				<div class="statistical mb5">
					<div class="filter_box">
						<form id="forums" method="post" class="filterForm" action="">
							<div class="form-group form-keyword">
								<input class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
							</div>

							<div class="form-group form-country">
								<select name="cruise_cat_id" class="form-control" data-width="100%" id="slb_country">
									<?php echo $_smarty_tpl->tpl_vars['clsCruiseCat']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['cruise_cat_id']->value,0);?>

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
								<a class="btn btn-delete-all" id="btn_delete" clsTable="Cruise" style="display:none">
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
				</div>
			</div>
			
			<div class="clearfix"></div>
			<br class="clearfix" />
			<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
				<thead>
					<tr>
						<th class="gridheader hiden767" style="width:4%;text-align:left; "><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
						<th class="gridheader name_responsive full-w767" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameofcruises');?>
</strong></th>
						<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCruisesCategory')) {?>
						<th class="gridheader hiden_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cruisescategory');?>
</strong></th>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCruisesItinerary')) {?>
						<th class="gridheader hiden_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('itinerary');?>
</strong></th>
						<?php }?>
						<th class="gridheader hiden_responsive" style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricefrom');?>
</strong></th>
						<!--<td class="gridheader" style="width:3%" colspan="4"><b><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</b></td>-->
						<th class="gridheader hiden_responsive" style="text-align:center;width:80px "><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
					</tr>
				</thead>
				<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['cruise_id'] != '') {?>
				<tbody id="SortAble">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_0_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_0_iteration === $__section_i_0_total);
?>
					<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
						<td class="index hiden767"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
</td>
						<td class="name_service title_td1">
							<strong class="title" title="<?php if ($_smarty_tpl->tpl_vars['clsCruise']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']) == 0) {?>Cruise này đang ở chế độ PRIVATE<?php }?>"><?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']);?>
</strong>
							<?php if ($_smarty_tpl->tpl_vars['clsCruise']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']) == 0) {?><span style="color:red;" title="Cruise đang ở chế độ Private">[P]</span><?php }?>
							<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCruisesCategory')) {?>
						<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cruisescategory');?>
">
							<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
" href="javascript:void(0);">
							   <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/v2/zoom_last.png" /> <?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getCatName($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']);?>

							</a>
						</td>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCruisesItinerary')) {?>
						<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('itinerary');?>
">
							<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('allitineraries');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/cruise/insert/<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id'];?>
/itinerary/itinerary">
							   <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/v2/zoom_last.png" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('allitineraries');?>

							</a>
						</td>
						<?php }?>
						<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricefrom');?>
" style="text-align:right; white-space:nowrap">
							<strong class="format_price" style="font-size:13px">
								<?php echo $_smarty_tpl->tpl_vars['clsCruise']->value->getPriceCruiseList($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id'],$_smarty_tpl->tpl_vars['now_month']->value,'Valuedetail');?>

							</strong>
						</td>
						<?php if (1 == 2) {?>
						   <td style="vertical-align:middle;text-align:center">
								<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movetop');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=move&direct=movetop&cruise_store_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_store_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-up"></i></a><?php }?>
							</td>
							<td style="vertical-align: middle;text-align:center">
								<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movebottom');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=move&direct=movebottom&cruise_store_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_store_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-down"></i></a><?php }?>
							</td>
							<td style="vertical-align: middle;text-align:center">
								<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>
								<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('moveup');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=move&direct=moveup&cruise_store_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_store_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-arrow-up"></i></a>
								<?php }?>
							</td>
							<td style="vertical-align: middle;text-align:center">
								<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
								<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movedown');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=move&direct=movedown&cruise_store_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_store_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-arrow-down"></i></a>
								<?php }?>
							</td>
						<?php }?>
						<td class="text-center block_responsive" style="white-space: nowrap;">
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
									<li><a class="confirm_delete" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Delete&cruise_store_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_store_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-upload icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</a</li>
								</ul>
							</div>
						</td>
					</tr>
					<?php
}
}
?>
				<?php } else { ?>
					<tr><td colspan="15"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
</td></tr>

				</tbody>
				<?php }?>
			</table>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';
	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
	var $type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
<?php echo '</script'; ?>
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
			var type = $type;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage+'&type='+type;
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListCruiseStore", order, 
			
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
