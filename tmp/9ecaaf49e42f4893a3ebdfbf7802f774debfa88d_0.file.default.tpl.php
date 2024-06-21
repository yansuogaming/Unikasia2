<?php
/* Smarty version 3.1.38, created on 2024-04-11 08:11:25
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/member/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661738bd965830_82257535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ecaaf49e42f4893a3ebdfbf7802f774debfa88d' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/member/default.tpl',
      1 => 1709705956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661738bd965830_82257535 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customers');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các khách hàng trong hệ thống isoCMS">i</div></h2>
			<p><?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Customers');?>
</p>
			
		</div>
		<div class="button_right">
						<div class="btn btn-setting"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=setting" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
		</div>
		<?php if (1 == 2) {?>
        <p>Chức năng quản lý danh sách các tours trong hệ thống isoCMS</p>
		<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This function is intended to manage tours in isoCMS system');?>
</p>
		<?php }?>
    </div>
	<div class="container-fluid">
		<div class="filter_box">
			<form id="forums" method="post" class="filterForm" action="">
				<div class="form-group form-keyword">
					<input class="form-control" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
..." />
				</div>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
					<input type="hidden" name="filter" value="filter" />
				</div>
								<div class="form-group form-button">
					<a class="btn btn-delete-all" id="btn_delete" clsTable="Profile" style="display:none">
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
		<div class="hastable">
			<table width="100%" cellspacing="0" class="tbl-grid table-striped table_responsive table-layout-fixed" style="overflow:auto">
				<thead>
					<tr>
						<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
						<th class="gridheader name_responsive name_responsive4" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Member Info');?>
</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:left; width: 200px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:center; width: 160px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
						<th class="gridheader hiden_responsive" style="text-align:center; width:160px"></th>
						<th class="gridheader hiden_responsive" style="text-align:center; width:40px"></th>
					</tr>
				</thead>
				<tbody>
					<?php if ($_smarty_tpl->tpl_vars['listItem']->value) {?>
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php $_smarty_tpl->_assignInScope('nationality', $_smarty_tpl->tpl_vars['clsCountry']->value->getTitle($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id']));?>
					<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
						<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profile_id'];?>
" /></td>
						<td class="text-left name_service td_overflow" style="white-space:nowrap">
							<div class="box_name_services">
								<p class="txt_name_services"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/member/view/<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profile_id'];?>
/overview" title="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['full_name'];?>
"><span class="txt_tour_id">#<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profile_id'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['full_name']) {?>- <?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['full_name'];
}?></a>
								<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_active'] == '0') {?>
								(<span class="status_reminding" style="display: inline-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reminding');?>
</span>)
								<?php } else { ?>
								(<span class="status_reviewed" style="display: inline-block"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviewed');?>
</span>)
								<?php }?>
								</p>
								<p class="txt_info">
								<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email']) {?><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Email");?>
: <?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</span><?php }?>
								</p>
								<p class="txt_info">
								<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['phone']) {?><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Phone");?>
: <?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['phone'];?>
</span><?php }?>
								</p>
								<p class="txt_info">
								<?php if ($_smarty_tpl->tpl_vars['nationality']->value) {?><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Nationality");?>
: <?php echo $_smarty_tpl->tpl_vars['nationality']->value;?>
</span><?php }?>
								</p>
								<p class="txt_info"><span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Created");?>
: <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],"d/m/Y H:i",0);?>
</span> | <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Update");?>
: <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['upd_date'],"d/m/Y H:i",0);?>
</span></p>
							</div>
							<button type="button" class="toggle-row inline_block767" style="display:none">
								<i class="fa fa-caret fa-caret-down"></i>
							</button>
						</td>     
						<td class="block_responsive border_top_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Address');?>
" style="white-space:nowrap"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['address'];?>
</td>

						<td class="block_responsive border_top_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
" align="center" style="text-align:center;" >
							<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Profile" pkey="profile_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profile_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
								<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == '1') {?>
								<i class="fa fa-check-circle green"></i>
								<?php } else { ?>
								<i class="fa fa-minus-circle red"></i>
								<?php }?>
							</a>
						</td>
						<td class="block_responsive border_top_responsive reponsive_td_booking" style="text-align: center;">
							<div class="btn_create_booking btn-main"><a href="" title="Tạo booking">Tạo booking</a></div>
						</div>
						<td class="block_responsive border_top_responsive" style="text-align: center;">							
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/member/view/<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profile_id'];?>
/overview"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</a></li>
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&profile_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profile_id']);?>
"><i class="icon-remove"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</a></li>
								</ul>
							</div>
						</td>
					</tr>	
					<?php
}
}
?>
					<?php } else { ?>
					<tr>
						<td colspan="20" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
		<div class="clearfix" style="height:5px"></div>
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
					<a class="btn btn-danger btn-delete-all" clsTable="Tour" style="display:none">
						<i class="icon-remove icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete Options');?>
</span>
					</a>
				</td>
			</tr>
		</table>
    </div>
</div><?php }
}
