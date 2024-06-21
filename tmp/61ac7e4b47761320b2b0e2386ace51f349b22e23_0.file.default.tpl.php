<?php
/* Smarty version 3.1.38, created on 2024-04-09 09:52:09
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/discount/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614ad59de9053_33891155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61ac7e4b47761320b2b0e2386ace51f349b22e23' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/discount/default.tpl',
      1 => 1705645923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614ad59de9053_33891155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2 class="title-page"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Discount');?>
</h2>
			<?php $_smarty_tpl->_assignInScope('SiteIntroModule', ('SiteIntroModule_discount_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
			<div class="text-multed"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SiteIntroModule']->value));?>
</div>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew" onClick="open_discount(this)" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('addtours');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('plus',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Discount'));?>
</a></a>
		</div>
    </div>
	<div class="container-fluid">
		<div class="wrap">
			<form class="form" method="post">
				<div class="search">
					<div class="form-group has-search">
						<input type="hidden" name="filter" value="filter" />
						<span class="fa fa-search form-control-feedback"></span>
						<input class="form-control input-lg" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="Tìm kiếm tour" type="text">
					</div>
				</div>
				<table class="tbl-grid table-striped table_responsive table-iloocal" width="100%" cellpadding="0" cellspacing="0">
					<thead><tr>
						<th class="text-center" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
						<th class="name_responsive" align="left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Name');?>
</th>
						<th class="hiden_responsive" align="left" width="10%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Code');?>
</th>
						<th class="text-left hiden_responsive"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('State');?>
</th>
						<th class="text-left hiden_responsive" width="200px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Date');?>
</th>
						<th class="text-left hiden_responsive" width="200px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Date');?>
</th>
						<th class="text-center hiden_responsive" width="150px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Used');?>
</th>
						<th class="text-center hiden_responsive"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</th>
						<th class="text-center hiden_responsive" width="60px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tools');?>
</th>
					</tr></thead>
					<tbody id="SortAble">
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
							<th class="index" style="width: 40px"><input name="p_key[]" class="el-checkbox chkitem" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['discount_id'];?>
"/></th>
							<td class="text-left name_service"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>

								<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?>
								<span class="fr" style="color:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span>
								<?php }?>
								<button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
							</td>
							<td class="text-left block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Code');?>
"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['code'];?>
</td>
							<td class="text-left block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('State');?>
"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getStatus($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['discount_id']);?>
</td>
							<td class="text-left px-10 block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking Date');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_date_from']);?>
 
								- <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_date_to']);?>
</td>
							<td class="text-left px-10 block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Date');?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['travel_date_from']);?>
 
								- <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['travel_date_to']);?>
</td>
							<td class="text-center block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Used');?>
"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['total_used'];?>
</td>
							<td class="block_responsive text-center" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('public');?>
">
								<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Discount" pkey="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->pkey;?>
" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'];?>
"><?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == '1') {?>
									<i class="fa fa-check-circle green"></i><?php } else { ?>
									<i class="fa fa-minus-circle red"></i><?php }?>
								</a>
							</td>
							<td class="text-center block_responsive" style="white-space: nowrap;">
								<div class="btn-group">
									<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
										<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
" href="javascript:void(0)" onClick="open_discount(this)" discount_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['discount_id'];?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</span></a></li>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&discount_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['discount_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trash');?>
</span></a>
										</li>
										<?php } else { ?>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Refresh');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&discount_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['discount_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Restore');?>
</span></a></li>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&discount_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['discount_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
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
			</form>
		</div>
	</div>
</div>
<!-- Insert External Script -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-easyui/themes/gray/easyui.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="screen">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-easyui/jquery.easyui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
