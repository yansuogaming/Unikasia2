<?php
/* Smarty version 3.1.38, created on 2024-04-23 15:10:18
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/listcruise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66276ceac6b435_06398093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f6b1a4b8539b1d1891677269db91b6054a405f' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/listcruise.tpl',
      1 => 1704438377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66276ceac6b435_06398093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container page-tour_setting">
	<div class="breadcrumb">
		<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
 : </strong>
		<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
		<a>&raquo;</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cruise');?>
</a>
		<a>&raquo;</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsCruiseStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
</a>  
		<!-- Back-->
		<a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
	</div>
	<div class="container-fluid">
		<div class="wrap">
			<div class="page-title" id="back_list_store">
				<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cruise');?>
 <a style="vertical-align:top" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=liststore&type=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn iso-corner-all btn-warning fileinput-button"> <i class="icon-chevron-left icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['clsCruiseStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
</span></a></h2>
				<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('systemmanagementcruisestore');?>
</p>
			</div>
			
				<?php echo '<script'; ?>
>
					$('#back_list_store').click(function() {
						history.back();
					});
				<?php echo '</script'; ?>
>
			

			<div id="isotabs_content">
				<div class="isotabbox">
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
						</form>	
						<div class="record_per_page">
							<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
</label>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage2($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['pUrl']->value);?>

						</div>
					</div>

				</div>
			</div>
		
		</div>
			<div class="hastable">
				<table cellspacing="0" class="tbl-grid" width="100%">
					<tr>
						<td class="gridheader" style="width:4%;text-align:left; "><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></td>
						<td class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameofcruises');?>
</strong></td>
						<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCruisesCategory')) {?>
						<td class="gridheader" style="text-align:left;width:20%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cruisescategory');?>
</strong></td>
						<?php }?>
						<td class="gridheader" style="text-align:center; "><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['cruise_id'] != '') {?>
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
						<td class="index"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
</td>
						<td>
							<strong class="title" title="<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']) == 0) {?>Cruise này đang ở chế độ PRIVATE<?php }?>"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']);?>
</strong>
							<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id']) == 0) {?><span style="color:red;" title="Cruise đang ở chế độ Private">[P]</span><?php }?>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCruisesCategory')) {?>
						<td>
							<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
" href="javascript:void(0);">
							   <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/v2/zoom_last.png" /> <?php echo $_smarty_tpl->tpl_vars['clsCruiseCat']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_cat_id']);?>

							</a>
						</td>
						<?php }?>
						<td style="vertical-align: middle; width: 40px; text-align: right; white-space: nowrap;">
							<a class="iso-button-action" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Add&cruise_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cruise_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-plus-sign icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
</a>
						</td>
					</tr>
					<?php
}
}
?>
					<?php } else { ?><tr><td colspan="6"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Data');?>
!</td></tr><?php }?>
				</table>
			</div>
			<div class="statistical mt5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('statistical');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('records');?>
/<strong><?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('page');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youareonpagenumber');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</strong></td>
						<td width="50%" align="right">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('gotopage');?>
:
							<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
								<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<option <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</option>
								<?php
}
}
?>
							</select>
						</td>
					</tr>
				</table>
			</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $cat_id = '<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
';
	var $depart_point_id= '<?php echo $_smarty_tpl->tpl_vars['depart_point_id']->value;?>
';
	var $city_id= '<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
';
	var $tour_type_id = 0;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$().ready(function(){
	loadDepartPoint($cat_id,$tour_type_id);
	$('.btn_addselling').click(function(){
		var $_this = $(this);
		var adata = {
			'tour_id': $_this.attr('data'),
			'tp': 'ADD'
		};
		vietiso_loading(1);
		$.ajax({
			type: "POST",
			url:path_ajax_script+'/index.php?mod=show&act=ajaxUpdateTourSelling',
			data: adata,
			dataType: "html",
			success: function(html){
				window.location.reload(true);
			}
		});
	});
});
function loadDepartPoint($cat_id,$tour_type_id){
	var cat_id=$('select[name=cat_id]').val();
	$('select[name=depart_point_id]').html('<option value="">'+loading+'</option>');
	$.ajax({
		type: "POST",
		url: path_ajax_script+'/?mod='+mod+'&act=ajLoadDepartPoint',
		data: {
			"cat_id"	: $cat_id, 
			'depart_point_id': $depart_point_id,
			'tour_type_id': $tour_type_id
		},
		dataType: "html",
		success: function(html){
			$('select[name=depart_point_id]').html(html);
		}
	});
}
<?php echo '</script'; ?>
>

<br />
<?php }
}
