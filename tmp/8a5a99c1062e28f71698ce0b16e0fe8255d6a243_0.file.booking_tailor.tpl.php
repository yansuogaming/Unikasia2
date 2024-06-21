<?php
/* Smarty version 3.1.38, created on 2024-04-09 15:17:10
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/booking_tailor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614f9867c5d65_62671644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5a99c1062e28f71698ce0b16e0fe8255d6a243' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/booking_tailor.tpl',
      1 => 1681961420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614f9867c5d65_62671644 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <style>
        .tbl-grid tr td{
            padding: 2px 2px;
        }
    </style>

<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2>
				<?php if ($_smarty_tpl->tpl_vars['status']->value != '') {?>
					<?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Request Reminding List');
}?>
					<?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Request Offered List');
}?>
					<?php if ($_smarty_tpl->tpl_vars['status']->value == 2) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Request Reviewed List');
}?>
				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Request List');?>

				<?php }?>
			</h2>
			<?php $_smarty_tpl->_assignInScope('setting', ((('SiteIntroModule_').($_smarty_tpl->tpl_vars['mod']->value)).('_')).($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value) != '') {?>
			<p><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value));?>
</p>
			<?php }?>
		</div>
    </div>
	<div class="container-fluid">
		<div class="filter_box">
			<form id="forums" method="post" class="filterForm" action="">
				<?php $_smarty_tpl->_assignInScope('blog_category_check', $_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'category','default'));?>
				<div class="form-group form-keyword">
					<input class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />
				</div>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
					<input type="hidden" name="filter" value="filter" />
				</div>
				<div class="form-group form-button">
					<a class="btn btn-delete-all" id="btn_delete" clsTable="Booking" type="Tailor" style="display:none">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

					</a>
				</div>
				<div class="fr group_buttons">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=booking_tailor" class="btn btn-warning btnNew">
						<i class="icon-folder-open icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['totalItem']->value;?>
)</span>
					</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=booking_tailor&status=1" class="btn btn-success btnNew" style="background:#06C;border-color:#06C">
						<i class="icon-folder-open icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Offered');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_process']->value;?>
)</span>
					</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=booking_tailor&status=2" class="btn btn-success btnNew" style="background:#c00000;border-color:#c00000">
						<i class="icon-warning-sign icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviewed');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_reviewed']->value;?>
)</span>
					</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=booking_tailor&status=0" class="btn btn-success btnNew" style="background:#FC0;border-color:#FC0">
						<i class="icon-warning-sign icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reminding');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_unprocess']->value;?>
)</span>
					</a>
				</div>
			</form>	
		</div>
		<div class="hastable">
			<div class="statistical mb5">
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
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
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
			<div class="table_list_booking">
				<table cellspacing="0" class="tbl-grid table-striped table-layout-fixed" width="100%">
					<thead>
						<tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
							<th class="gridheader" style="width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('id');?>
</strong></th>
							<th class="gridheader" style="text-align:left;width:80px;white-space:nowrap"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Service Code');?>
</strong></th>
							<th class="gridheader text-left" style="width:200px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Customer's Contact");?>
</strong></th>
							<th class="gridheader" style="width:8%;white-space:nowrap;width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('orderdate');?>
</strong></th>
							<th class="gridheader" style="width:8%;white-space:nowrap;width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Departure Date');?>
</strong></th>
							<th class="gridheader text-left" style="white-space:nowrap;min-width: 150px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Special Requests');?>
</strong></th>
							<th class="gridheader" style="width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact By');?>
</strong></th>
							<th class="gridheader" style="width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
							<th class="gridheader" style="width:65px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('action');?>
</strong></th>
						</tr>
					</thead>
					<tbody>
						<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('BOOKINGVALUE', $_smarty_tpl->tpl_vars['clsClassTable']->value->getBookingValue($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
						<tr <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == '0') {?>class="row1"<?php } else { ?>class="row2"<?php }?>>
							<td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id'];?>
" /></td>
							<td class="index td_overflow" style="white-space:nowrap"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id'];?>
</td>
							<td class="td_overflow" style="white-space:nowrap"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_code'];?>
</td>
							<td class="td_overflow" style="white-space:nowrap">
								<strong><?php echo $_smarty_tpl->tpl_vars['BOOKINGVALUE']->value['name'];?>
 </strong>
								<br />
								<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['BOOKINGVALUE']->value['email'];?>
</a>
								<br/>
								<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['phone'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['BOOKINGVALUE']->value['phone'];?>
</a>
								<br />
								<i class="fa fa-globe" aria-hidden="true"></i> <span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getCountryBookingStore($_smarty_tpl->tpl_vars['BOOKINGVALUE']->value['country__id']);?>
</span>
							</td>
							<td class="text-right td_overflow" style="white-space:nowrap"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDate($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date']);?>
</td>
							<td style="white-space:nowrap" class="text-right td_overflow"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getDepartureDate($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</td>
							<td class="td_message" style="width:300px"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getRequest($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</td>
							<td class="td_overflow" style="white-space:nowrap"><?php if ($_smarty_tpl->tpl_vars['BOOKINGVALUE']->value['please'] == 1) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phone');
}?></td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == '0') {?>
								<span class="status_pending"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reminding');?>
</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == '2') {?>
								<span class="status_lock"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviewed');?>
</span>
								<?php } else { ?>
								<span class="status_approved"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Offered');?>
</span>
								<?php }?>
							</td>
							<td style="vertical-align: top; text-align: right; white-space: nowrap; width:5%;text-align: center"> 
								<div class="btn-group">
									<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="icon-cog"></i> <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
									   <li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&action=booking_tailor&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('viewbooking');?>
"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('viewbooking');?>
</a></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=print&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
"><i class="icon-print"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('print');?>
</a></li>
										<li><a class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=delete&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
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
					</tbody>
				</table>
			</div>
			<div class="clearfix"></div>
			<div class="statistical mb5">
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
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
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
</div><?php }
}
