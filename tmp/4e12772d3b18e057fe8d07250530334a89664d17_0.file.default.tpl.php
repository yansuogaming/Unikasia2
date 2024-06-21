<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:42:59
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/partner/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661732137b2278_94436845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e12772d3b18e057fe8d07250530334a89664d17' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/partner/default.tpl',
      1 => 1704428778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661732137b2278_94436845 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Partner');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Partner');?>
 trong hệ thống isoCMS">i</div></h2>
			<p>Chức năng quản lý danh sách các Partner trong hệ thống isoCMS</p>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This function is intended to manage Partner in isoCMS system');?>
</p>			
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_partner" type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" cat_id="<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Partner');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Partner');?>
</a>
		</div>
    </div>
	<div class="container-fluid">
   	<div class="filter_box">
		<form id="forums" method="post" action="" name="filter" class="filterForm">
			<div class="form-group form-keyword">
				<input type="text" class="text form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
			</div>
			<div class="form-group form-button">
				<button type="submit" class="btn btn-main" id="findtBtn"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>
</button>
				<input type="hidden" name="filter" value="filter">
			</div>				
			<div class="form-group form-button">
				<a class="btn btn-delete-all" id="btn_delete" clsTable="Partner" style="display:none">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

				</a>
			</div>
		</form>
		<div class="fr group_buttons">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-primary btnNew">
				<i class="icon-folder-open icon-white"></i><span> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All');?>
(<?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
)</span>
			</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type_list=Trash" class="btn btn-warning btnNew">
				<i class="icon-trash icon-white"></i><span> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trash');?>
(<?php echo $_smarty_tpl->tpl_vars['number_trash']->value;?>
)</span>
			</a>
		</div>
	</div>
    
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
    <?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['partner_id'] == '') {?>
    <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No data. Click Add New to continue.');?>

   
    <?php } else { ?>
    <table cellspacing="0" class="tbl-grid full-width table-striped table_responsive">
		<thead>
			<tr>
				<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
				<th class="gridheader hiden767"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
				<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</strong></th>
				<th class="gridheader hiden_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Path Url');?>
</strong></th>
				<th class="gridheader hiden_responsive" style="text-align:left;width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
				<th class="gridheader hiden_responsive" style="width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
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
			<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
				<th class="check_40"><input name="p_key[]" class="chkitem" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id'];?>
" /></th>
				<th class="index hiden767"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id'];?>
</th>
				<td class="name_service">	
					<?php if ($_smarty_tpl->tpl_vars['type']->value == 'BC') {?>
						<a title="Edit" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&type=BC&partner_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id']);?>
">
						   <strong style="font-size:16px;"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</strong>
						</a>
					<?php } else { ?>
						<a title="Edit" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&partner_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id']);?>
">
						   <strong style="font-size:16px;"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</strong>
						</a>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == 1) {?><span style="color:#999">[<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trash');?>
]</span><?php }?>
					<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
				</td>
				<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Path Url');?>
" class="block_responsive border_top_responsive">				
					<a href="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url'];?>
</a>
				</td>
				<td data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" class="block_responsive" style="text-align:center">
					<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Partner" pkey="partner_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
						<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id']) == '1') {?>
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
							<?php $_smarty_tpl->_assignInScope('partner_id', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id']);?>
							<?php if ($_smarty_tpl->tpl_vars['cat_id']->value == '0') {?>
								<?php $_smarty_tpl->_assignInScope('link_edit', ("partner/insert/").($_smarty_tpl->tpl_vars['partner_id']->value));?>
								<?php if ($_smarty_tpl->tpl_vars['type']->value != '') {?>
									<?php $_smarty_tpl->_assignInScope('link_edit', (($_smarty_tpl->tpl_vars['link_edit']->value).("/")).($_smarty_tpl->tpl_vars['type']->value));?>
								<?php }?>
								<?php $_smarty_tpl->_assignInScope('link_edit', ($_smarty_tpl->tpl_vars['link_edit']->value).("/overview"));?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('link_edit', ("partner/insertcat/").($_smarty_tpl->tpl_vars['partner_id']->value));?>
								<?php if ($_smarty_tpl->tpl_vars['type']->value != '') {?>
								<?php $_smarty_tpl->_assignInScope('link_edit', (($_smarty_tpl->tpl_vars['link_edit']->value).("/")).($_smarty_tpl->tpl_vars['type']->value));?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['cat_id']->value > 0) {?>
								<?php $_smarty_tpl->_assignInScope('link_edit', (($_smarty_tpl->tpl_vars['link_edit']->value).("/")).($_smarty_tpl->tpl_vars['cat_id']->value));?>
								<?php }?>
								<?php $_smarty_tpl->_assignInScope('link_edit', ($_smarty_tpl->tpl_vars['link_edit']->value).("/overview"));?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('type_url', '&type=BC');?>
                                <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('type_url', '');?>
                                <?php }?>
							<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
								<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_edit']->value;?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash<?php echo $_smarty_tpl->tpl_vars['type_url']->value;?>
&partner_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>						
							<?php } else { ?>
								<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore<?php echo $_smarty_tpl->tpl_vars['type_url']->value;?>
&partner_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&partner_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['partner_id']);
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
	</table>
    <?php }?>
    <div class="clearfix"><br /></div>
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
/partner/jquery.partner.new.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
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
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=ajUpdPosSortListPartner", order, 
			
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
