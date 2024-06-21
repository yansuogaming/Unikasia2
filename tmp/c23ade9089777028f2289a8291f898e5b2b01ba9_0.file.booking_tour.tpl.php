<?php
/* Smarty version 3.1.38, created on 2024-04-09 14:53:51
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/booking_tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614f40f993b07_39860749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c23ade9089777028f2289a8291f898e5b2b01ba9' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/booking/booking_tour.tpl',
      1 => 1706062222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614f40f993b07_39860749 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2>
				<?php if ($_smarty_tpl->tpl_vars['status']->value != '') {?>
					<?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Booking Reminding List');
}?>
					<?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Booking Offered List');
}?>
					<?php if ($_smarty_tpl->tpl_vars['status']->value == 2) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Booking Reviewed List');
}?>
				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour Booking List');?>

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

				<div class="form-group form-country">
					<select name="status" class="form-control" data-width="100%" id="slb_country">
						<option value=""  <?php if ($_smarty_tpl->tpl_vars['status']->value == '') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select status');?>
</option>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value == '0') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Processed');?>
</option>
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value == '1') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Open');?>
</option>
						<option value="2" <?php if ($_smarty_tpl->tpl_vars['status']->value == '2') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Canceled');?>
</option>
						<option value="3" <?php if ($_smarty_tpl->tpl_vars['status']->value == '3') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Failed');?>
</option>
						<option value="4" <?php if ($_smarty_tpl->tpl_vars['status']->value == '4') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Declined');?>
</option>
						<option value="5" <?php if ($_smarty_tpl->tpl_vars['status']->value == '5') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Backordered');?>
</option>
					</select>
				</div>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
					<input type="hidden" name="filter" value="filter" />
				</div>
				<div class="form-group form-button">
					<a class="btn btn-delete-all" id="btn_delete" clsTable="Booking" style="display:none">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>

					</a>
				</div>
				<div class="fr group_buttons">
					<a href="javascript:void(0)" class="btn btn-success btn-export btnNew">
						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/v2/excel.png" style="vertical-align:middle"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Export');?>

					</a>
					<?php if (1 == 2) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=booking_tour" class="btn btn-warning btnNew">
							<i class="icon-folder-open icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['totalItem']->value;?>
)</span>
						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=booking_tour&status=1" class="btn btn-success btnNew" style="background:#06C;border-color:#06C">
							<i class="icon-folder-open icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Offered');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_process']->value;?>
)</span>
						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=booking_tour&status=2" class="btn btn-success btnNew" style="background:#c00000;border-color:#c00000">
							<i class="icon-warning-sign icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviewed');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_reviewed']->value;?>
)</span>
						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=booking_tour&status=0" class="btn btn-success btnNew" style="background:#FC0;border-color:#FC0">
							<i class="icon-warning-sign icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reminding');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_unprocess']->value;?>
)</span>
						</a>
					<?php }?>
				</div>
			</form>	
		</div>
		<div class="dateExport dateExport2" style="display:none">
		<form class="form-export" method="post" action="">
			<div class="form-group inline-block">
				<div class="span50 fl">
					<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="from_date">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From');?>
 <span class="color_r">*</span>
					</label>
					<div class="col-md-9 col-sm-8 col-xs-8">
						<input name="from_date" autocomplete="off" maxlength="10" id="from_date" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatTimeDate($_smarty_tpl->tpl_vars['now_day']->value);?>
" size="15" class="full-width text_32 border_aaa" placeholder="dd/mm/yyyy">
					</div>
				</div>
				<div class="span50 fr">
					<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="to_date">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('To');?>
 <span class="color_r">*</span>
					</label>
					<div class="col-md-9 col-sm-8 col-xs-8">
						<input name="to_date" autocomplete="off" maxlength="10" id="to_date" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatTimeDate($_smarty_tpl->tpl_vars['now_next']->value);?>
" size="15" class="full-width text_32 border_aaa" placeholder="dd/mm/yyyy">
					</div>
				</div>
			</div>
			<button type="submit" class="buttonExport" id="button_export"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Export');?>
</button>
			<input type="hidden" name="Export" value="Export" />
		</form>
		</div>
		<div class="hastable">
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
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
							<th class="gridheader text-left" style="min-width:150px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Customer's Contact");?>
</strong></th>
							<th class="gridheader text-left" style="width:120px; white-space:nowrap"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Date');?>
</strong></th> 
							<th class="gridheader" style="width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
							<th class="gridheader" style="width:80px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('action');?>
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
							<td class="index"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id'];?>
</td>
							<td class="td_overflow" style="white-space:nowrap">
								<strong><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getContactName($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
 </strong>
								<br />
								<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getEmail($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</a>
								<br/>
								<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getPhone($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getPhone($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getPhone($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</a>
								<br />
								<i class="fa fa-globe" aria-hidden="true"></i> <span><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getCountry($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</span>
							</td>

							<td style="white-space:nowrap" class="text-left td_overflow"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDate($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date']);?>
</td>
							<?php $_smarty_tpl->_assignInScope('status', $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('status',$_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']));?>
							<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getBookingStatus($_smarty_tpl->tpl_vars['status']->value);?>
</td>
							<td style="text-align: center; white-space: nowrap; width:5%"> 
								<div class="btn-group">
									<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="icon-cog"></i> <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
										<?php if (_ISOCMS_CLIENT_LOGIN == '111') {?>
									   <li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=member&act=viewbooking&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</a></li>
									   <?php } else { ?>
									   <li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=booking&act=edit&action=booking_tour&booking_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</a></li>
									   <?php }?>
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
</div>



<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
$('#from_date').datepicker({
	dateFormat: "dd/mm/yy", 
 
	maxDate: "+1Y",
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showOtherMonths: true,
	onSelect: function(dateStr) { 
		var date = $(this).datepicker('getDate'); 
		if(date){ 
			date.setDate(date.getDate() + 30); 
		} 
		$('#to_date').datepicker('option').datepicker('setDate', date); 
	},
	onClose: function(dateText, inst) {
		$('#to_date').focus();
	}
});
$("#to_date").datepicker( { 
	dateFormat: "dd/mm/yy", 
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showOtherMonths: true
});	
});
<?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery-ui.css?ver=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/jquery-ui.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
