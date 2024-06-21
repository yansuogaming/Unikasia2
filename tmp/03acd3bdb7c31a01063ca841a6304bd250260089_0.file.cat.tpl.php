<?php
/* Smarty version 3.1.38, created on 2024-04-08 15:27:07
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/guide/cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613aa5b41e393_20269829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03acd3bdb7c31a01063ca841a6304bd250260089' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/guide/cat.tpl',
      1 => 1675167018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613aa5b41e393_20269829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Guide Category list');?>
: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Content list');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Guide Category list');?>
: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Content list');?>
 trong hệ thống isoCMS">i</div>
			</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Content list');?>
</p>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_guide" type="cat" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Guide Category');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Guide Category');?>
</a>
		</div>
    </div>
	<div class="container-fluid">
		<div class="wrap">
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="GuideCat" style="display:none">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

						</a>
					</div>
                    <div class="group_buttons fr mt10_767">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-danger btnNew" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('travelguide');?>
"><i class="fa fa-reply"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('travelguide');?>
</span> </a>
					</div>
				</form>	
			</div>			
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left">&nbsp;</td>
						<td width="50%" align="right">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
:
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value,'','');?>

						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			<div class="tabbox">
				<div class="hastable">
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead>
							<tr>
								<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox"  class="el-checkbox" /></th>
								<th class="gridheader hiden767" style="width:60px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</th>
								<th class="gridheader name_responsive" style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
</th>
								<th class="gridheader hiden_responsive" style="width:60px; text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</th>
								<th class="gridheader hiden_responsive" style="width:70px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</th>
							</tr>
						</thead>
						
						<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['guidecat_id'] != '') {?>
						<tbody id="SortAble">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('guidecat_id', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
							<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['guidecat_id']->value;?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
" >
								<td class="check_40 has-checkbox text-center">
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray('3,5,15,20',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'])) {?>
									<span style="display:inline-block; width:20px;">&nbsp;</span>
									<?php } else { ?>
									<input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'];?>
" /><?php }?></td>
								<td class="hiden767 text_center"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'];?>
</td>
								<td  class="name_service">
								<span class="title" title="<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']) == 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Guide Category PRIVATE');
}?>"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
</span>
								<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']) == 0) {?><span style="color:red;" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Guide Category PRIVATE');?>
">[P]</span><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr" style="color:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>
								<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
								</td>
								<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="GuideCat" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
										<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]) == '1') {?>
										<i class="fa fa-check-circle green"></i>
										<?php } else { ?>
										<i class="fa fa-minus-circle red"></i>
										<?php }?>
									</a>
								</td>
								<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
									<div class="btn-group">
										<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</button>
										<ul class="dropdown-menu" style="right:0px !important">
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/guide/category/insert/<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'];?>
/overview"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
											<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray('3,5,15,20',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id'])) {?>
											<?php } else { ?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=cat&action=Trash&guidecat_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
											<?php }?>
											<?php } else { ?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=cat&action=Restore&guidecat_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=cat&action=Delete&guidecat_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['guidecat_id']);?>
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
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $boxID = "";
	var $cat_id = '<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
';
	var $guidecat_id= '<?php echo $_smarty_tpl->tpl_vars['guidecat_id']->value;?>
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
/guide/jquery.guide.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$("#SortAble").sortable({
		opaguide: 0.8,
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
			$.post(path_ajax_script+"/index.php?mod=guide&act=ajUpdPosSortGuideCat", order,

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
