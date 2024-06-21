<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:31:56
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blog/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66172f7caebc37_89526092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02d88ebb94a02c6720c6700926749d7d62a3bcbf' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blog/default.tpl',
      1 => 1675167785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66172f7caebc37_89526092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các blog trong hệ thống isoCMS">i</div>
			</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('blog');?>
</p>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_blog" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add blog');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add blog');?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['_user_group_id']->value != '5') {?>
				<div class="btn btn-setting"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=setting" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
			<?php }?>			
		</div>
    </div>
	<div class="container-fluid">
		<div class="wrap">
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<?php $_smarty_tpl->_assignInScope('blog_category_check', $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'category','default'));?>
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />
					</div>
					
					<div class="form-group form-country">
						<select name="blogcat_id" class="form-control" data-width="100%" id="slb_country">
							 <?php echo $_smarty_tpl->tpl_vars['clsBlogCategory']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['blogcat_id']->value);?>

						</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="Blog" style="display:none">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

						</a>
					</div>
					<div class="fr group_buttons">
						<?php if ($_smarty_tpl->tpl_vars['blog_category_check']->value && $_smarty_tpl->tpl_vars['_user_group_id']->value != 5) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=category" class="btn btn-green btnCat btnNew" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
"><i class="icon-list icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
</span> </a>
						<?php }?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-warning btnNew"><i class="icon-folder-open icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
)</span> </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type_list=Trash" class="btn btn-danger btnNew"> <i class="icon-warning-sign icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_trash']->value;?>
)</span> </a>
                        
                    </div>
				</form>	
			</div>
			<div class="clearfix"></div>
			<input id="list_selected_chkitem" style="display:none" value="0" />
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left">&nbsp;</td>
						<td width="50%" align="right">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Record/page');?>
:
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRecordPerPage($_smarty_tpl->tpl_vars['recordPerPage']->value,$_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['mod']->value);?>

						</td>
					</tr>
				</table>
			</div>
        	<div class="clearfix"></div>
			<div class="tabbox">
				<div class="hastable">
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead><tr>
							<th class="gridheader" style="width:40px"><input id="check_all" class="el-checkbox" type="checkbox" /></th>
							<th class="gridheader hiden767" style="width:60px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</th>
							<th class="gridheader name_responsive" style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
</th>
							<?php if ($_smarty_tpl->tpl_vars['blog_category_check']->value) {?>
							<th class="gridheader hiden_responsive" style="text-align:left; width:220px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
</th>
							<?php }?>
							<th class="gridheader hiden_responsive" style="width:60px" align="right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('viewer');?>
</th>
							<?php if ($_smarty_tpl->tpl_vars['_loged_id']->value == 1 || $_smarty_tpl->tpl_vars['_user_group_id']->value == 5) {?>
							<th class="gridheader hiden_responsive" style="width:10%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Approved');?>
</th>
							<?php }?>
							<th class="gridheader hiden_responsive" style="width:80px" align="right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</th>
							<th class="gridheader hiden_responsive" style="width:130px;" align="right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('timeup');?>
</th>
							<th class="gridheader hiden_responsive" style="width:130px;" align="right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('update');?>
</th>
							<th class="gridheader hiden_responsive" style="width:70px"></th>
						</tr></thead>
						<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['blog_id'] != '') {?>
						<tbody id="SortAble">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<?php $_smarty_tpl->_assignInScope('blog_id', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']);?>
							<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['blog_id']->value;?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
" >
								<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'];?>
" /></td></td>
								<td class="index hiden767"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'];?>
</td>
								<td class="text-left name_service">
									<span class="title" title="<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']) == 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog PRIVATE');
}?>"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']);?>
</span>
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == 0) {?>
									<span class="color_r" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Blog PRIVATE');?>
">[P]</span><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?>
									<span class="pull-right text-muted"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span>
									<?php }?>
									<button type="button" class="toggle-row inline_block767" style="display:none">
										<i class="fa fa-caret fa-caret-down"></i>
									</button>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['blog_category_check']->value) {?>
								<td class="block_responsive border_top_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
">
									<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('allcategory');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?admin&mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&blogcat_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cat_id'];?>
">
									   <i class="fa fa-folder-open"></i><?php echo $_smarty_tpl->tpl_vars['clsBlogCategory']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cat_id']);?>

									</a>
								</td>
								<?php }?>
								<td  class="block_responsive" style="text-align:center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('viewer');?>
"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['num_view'];?>
</td>
								<?php if ($_smarty_tpl->tpl_vars['_loged_id']->value == 1 || $_smarty_tpl->tpl_vars['_user_group_id']->value == 5) {?>
								<td  class="block_responsive" style="text-align:center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Approved');?>
">
									<a href="javascript:void(0);" <?php if ($_smarty_tpl->tpl_vars['_loged_id']->value == 1) {?>class="SiteClickPublic"<?php }?> clsTable="Blog" pkey="blog_id" toField="is_approve" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_approve',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
"> <?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_approve'] == '1') {?><i class="fa fa-check-circle green"></i><?php } else { ?><i class="fa fa-minus-circle red"></i><?php }?></a>
								</td>
								<?php }?>
								<td  class="block_responsive" style="text-align:center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Blog" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
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
								<td class="block_responsive" style="text-align:right" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('timeup');?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],"%d/%m/%Y %H:%M");?>
</td>
								<td class="block_responsive" style="text-align:right" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('update');?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['upd_date'],"%d/%m/%Y %H:%M");?>
</td>
								<td class="block_responsive text-center" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
">
									<div class="btn-group">
										<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
										<ul class="dropdown-menu" style="right:0px !important">
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View');?>
"><i class="icon-eye-open"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/blog/insert/<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id'];?>
/overview"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</span></a></li>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&blog_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trash');?>
</span></a></li>
											<?php } else { ?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Refresh');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&blog_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Refresh');?>
</span></a></li>
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_approve'] == 1 && $_smarty_tpl->tpl_vars['_user_group_id']->value == 5) {?>
											<?php } else { ?>
											<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&blog_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['blog_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</span></a></li>
											<?php }?>
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
/blog/jquery.blog.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
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
				$.post(path_ajax_script+"/index.php?mod=blog&act=ajUpdPosSortBlog", order,

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
