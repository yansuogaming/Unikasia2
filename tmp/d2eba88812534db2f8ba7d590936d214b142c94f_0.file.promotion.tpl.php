<?php
/* Smarty version 3.1.38, created on 2024-04-10 16:40:09
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/promotion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66165e79b202d7_74015003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2eba88812534db2f8ba7d590936d214b142c94f' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/promotion.tpl',
      1 => 1684729719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66165e79b202d7_74015003 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/bootstrap-combined.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/bootstrap-datetimepicker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
">
<div class="page_container page-tour_setting page-cruise_promotion">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_cruise_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('List Promotion');?>
</h2>
					<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('systemmanagementpromotion');?>
</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew clickInsertPromotion" href="javascript:void(0);" title="Insert promotion">Insert promotion</a>
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

							<a class="btn btn-danger btn-delete-all" clsTable="Promotion" style="display:none">
								<i class="icon-remove icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete Options');?>
</span>
							</a>
						</td>
					</tr>
				</table>
			</div>
			<div class="hastable">
				<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
					<thead>
						<tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" /></th>
							<th class="gridheader hiden767" style="width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('id');?>
</strong></th>
							<th class="gridheader name_responsive" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Flag text');?>
</strong></th>
							<th class="gridheader hiden_responsive" style="text-align:center; width:80px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion code');?>
</strong></th>
							<th class="gridheader hiden_responsive" style="text-align:center; width:120px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From date');?>
</strong></th>
							<th class="gridheader hiden_responsive" style="text-align:center; width:120px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('To date');?>
</strong></th>
							<th class="gridheader hiden_responsive" style="text-align:center; width:120px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel From');?>
</strong></th>
							<th class="gridheader hiden_responsive" style="text-align:center; width:120px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel To');?>
</strong></th>
							<th class="gridheader hiden_responsive" style="text-align:center; width:120px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ticket');?>
</strong></th>
							<th class="gridheader hiden_responsive" style="text-align:center; width:100px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
(%)</strong></th>
							<th class="gridheader hiden_responsive" style="text-align:center; width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</strong></th>
							<th class="gridheader hiden_responsive" style="text-align:center; width:70px "><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
						</tr>
					</thead>
					<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['promotion_id'] != '') {?>
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
						<th class="index" style="width:40px"><input name="p_key[]" class="chkitem" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id'];?>
" /></th>
						<td class="index hiden767"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id'];?>
</td>
						<td class="text-left name_service"><?php echo $_smarty_tpl->tpl_vars['clsPromotion']->value->getFlagText($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id']);?>
<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button></td>
						<td class="text-center block_responsive" style="white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion code');?>
"><?php echo $_smarty_tpl->tpl_vars['clsPromotion']->value->getPromotionCode($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id']);?>
</td>
						<td class="text-center block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From date');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateM($_smarty_tpl->tpl_vars['clsPromotion']->value->getFromDate($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id']));?>
</td>
						<td class="text-center block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('To date');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateM($_smarty_tpl->tpl_vars['clsPromotion']->value->getToDate($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id']));?>
</td>
						<td class="text-center block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel From');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateM($_smarty_tpl->tpl_vars['clsPromotion']->value->getTravelFromDate($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id']));?>
</td>
						<td class="text-center block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel To');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateM($_smarty_tpl->tpl_vars['clsPromotion']->value->getTravelTodate($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id']));?>
</td>
						<td class="text-center block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Ticket');?>
"><?php echo $_smarty_tpl->tpl_vars['clsPromotion']->value->getDiscountValue($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id'],2);?>
</td>

						<td class="text-center block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Promotion');?>
(%)"><?php echo $_smarty_tpl->tpl_vars['clsPromotion']->value->getPromotion($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id']);?>
</td>

						<td class="text-center block_responsive" style="white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
">
						<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Promotion" pkey="promotion_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsPromotion']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
							<?php if ($_smarty_tpl->tpl_vars['clsPromotion']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id']) == 1) {?>
							<i class="fa fa-check-circle green"></i>
							<?php } else { ?>
							<i class="fa fa-minus-circle red"></i>
							<?php }?>
						</a>
						</td>
						<td class="block_responsive" style="vertical-align: middle; width: 40px; text-align: right; white-space: nowrap;" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
">
							<div class="btn-group">
								<button class="btn  btn_dropdown iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown" onClick="parentDropdownToggle(this)"> 
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
																		<li><a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('editPro');?>
" promotion_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id'];?>
" class="clickEditPromotionPro"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit Pro');?>
</span></a></li>
									<li><a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" clsTable="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['clsTable'];?>
" promotion_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['promotion_id'];?>
" target_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['target_id'];?>
" class="clickDeletePromotionAllPro"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
								</ul>
							</div>
						</td>
					</tr>
					<?php
}
}
?>
					<?php } else { ?><tr><td colspan="6"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
</td></tr><?php }?>
				</table>
			</div>
			<div class="clearfix"></div>
			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getPaginationAdmin($_smarty_tpl->tpl_vars['totalRecord']->value,$_smarty_tpl->tpl_vars['totalPage']->value,$_smarty_tpl->tpl_vars['currentPage']->value,$_smarty_tpl->tpl_vars['listPageNumber']->value,$_smarty_tpl->tpl_vars['link_page_current']->value,$_smarty_tpl->tpl_vars['type']->value);?>

		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/bootstrap.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/bootstrap-datetimepicker.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"> <?php echo '</script'; ?>
><?php }
}
