<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:44:23
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/page/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6617326730b393_26241233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a45ba15df3407e707340558acf7ecf17261760bd' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/page/default.tpl',
      1 => 1696844235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617326730b393_26241233 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Page');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Page');?>
 trong hệ thống isoCMS">i</div></h2>
			<p>Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Page');?>
 trong hệ thống isoCMS</p>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This function is intended to manage Page in isoCMS system');?>
</p>			
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_page" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Page');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Page');?>
</a>
		</div>
    </div>
	<div class="container-fluid">
		<div class="filter_box">
			<form id="forums" method="post" action="" name="filter" class="filterForm">				
				<div class="form-group form-button">
					<a class="btn btn-delete-all" id="btn_delete" clsTable="Page" style="display:none">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

					</a>
				</div>
			</form>
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
		<div class="hastable">
			<table width="100%" cellspacing="0" class="tbl-grid table-striped table_responsive">
				<thead>
					<tr>
						<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
						<th class="gridheader hiden767"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
						<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
</strong></th>
						<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasChild_slide')) {?><th class="gridheader" style="width:14%"></th><?php }?>
						<th class="gridheader hiden_responsive" style="width:6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
						<th class="gridheader hiden_responsive" style="width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
					</tr>
				</thead>
				<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['page_id'] != '') {?>
				<tbody id="SortAble">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
						<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id'];?>
" /></th>
						<th class="index hiden767"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id'];?>
</th>
						<td class="name_service">
							<strong class="title" title="<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']) == 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('PRIVATE');
}?>"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
</strong>
					<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']) == 0) {?><span style="color:red;" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('PRIVATE');?>
">[P]</span><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr" style="color:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>
							<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasChild_slide')) {?>
						<td data-title"<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Slide Child');?>
" class="block_responsive">
							<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=slide&mod_page=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act_page=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&target_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id'];?>
&clsTable=Page" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('listslide');?>
"><i class="fa fa-folder-open"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('listslide');?>
 <strong style="color:#c00000;">(<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->countTotalSlide($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value,$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
)</strong></a>
						</td>
						<?php }?>
						<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
							<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Page" pkey="page_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
								<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']) == '1') {?>
								<i class="fa fa-check-circle green"></i>
								<?php } else { ?>
								<i class="fa fa-minus-circle red"></i>
								<?php }?>
							</a>
						</td>
						<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
" class="block_responsive" style="vertical-align: middle; width: 40px; text-align: center; white-space: nowrap;">
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-eye-open"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</span></a></li>
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/page/insert/<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id'];?>
/overview"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</a></li>
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_plink'] == '0') {?>
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
									<?php }?>
									<?php } else { ?>
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
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
					<?php } else { ?>
					<tr><td colspan="10" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
</td></tr>
				</tbody>	
				<?php }?>
			</table>
		</div>
		<div class="clearfix"></div>
		<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getPaginationAdmin($_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['totalPage']->value,$_smarty_tpl->tpl_vars['currentPage']->value,$_smarty_tpl->tpl_vars['listPageNumber']->value,$_smarty_tpl->tpl_vars['link_page_current']->value,$_smarty_tpl->tpl_vars['type']->value);?>

	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';
	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/page/jquery.page.new.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
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
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListPage", order, 
			
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
