<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:44:43
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/subscription/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6617327be2d511_38893901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50e61c7f0bafca8123671974b099f517395f30d7' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/subscription/default.tpl',
      1 => 1684744985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617327be2d511_38893901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Subscribe management');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Subscribe management');?>
 trong hệ thống isoCMS">i</div></h2>
			<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value) != '') {?>
			<p><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['setting']->value));?>
</p>
			<?php }?>		
		</div>
    </div>
	<div class="container-fluid">
		<div class="filter_box">
			<form id="forums" method="post" action="" name="filter" class="filterForm">				
				<div class="form-group form-keyword">
					<input type="text" class="text form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
				</div>
				<div class="form-group form-button">
					<button type="submit" class="btn btn-main" id="findtBtn"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>
</button>
					<input type="hidden" name="filter" value="filter">
				</div>	
			</form>
			<div class="fr group_buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-warning btnNew">
					<i class="icon-folder-open icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
)</span>
				</a>
				<a href="javascript:void(0)" class="btn btn-success btn-export btnNew">
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/v2/excel.png" style="vertical-align:middle"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Export');?>

				</a>
			</div>
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
" size="15" class="full-width text_32 border_aaa" placeholder="mm/dd/yyyy">
						</div>
					</div>
					<div class="span50 fr">
						<label class="col-md-3 col-sm-4 col-xs-4 control-label title" for="to_date">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('To');?>
 <span class="color_r">*</span>
						</label>
						<div class="col-md-9 col-sm-8 col-xs-8">
							<input name="to_date" autocomplete="off" maxlength="10" id="to_date" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatTimeDate($_smarty_tpl->tpl_vars['now_next']->value);?>
" size="15" class="full-width text_32 border_aaa" placeholder="mm/dd/yyyy">
						</div>
					</div>
				</div>
				<button type="submit" class="buttonExport" id="button_export"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Export');?>
</button>
				<input type="hidden" name="Export" value="Export" />
			</form>
		</div>
		<br class="clear" />
		<?php if ($_smarty_tpl->tpl_vars['allItem']->value[0]['subscribe_id'] != '') {?>
		<table width="100%" cellspacing="0" class="tbl-grid table-striped table_responsive table-layout-fixed">
			<thead>
				<tr>
					<th class="gridheader hiden767" style="width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No.');?>
</strong></th>
					<th class="gridheader text-left name_responsive full-w767" style="min-width: 150px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('E-Mail');?>
</strong></th>
					<th class="gridheader text-right hiden767" style="width:150px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Datetime');?>
</strong></th>
					<th class="gridheader hiden767" style="width:60px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tool');?>
</strong></th>
				</tr>
			</thead>
			<tbody>
				<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
					<td class="index hiden767"> <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
</td>
					<td class="name_service title_td1 td_overflow" style="white-space: nowrap"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('email',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['subscribe_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('email',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['subscribe_id']);?>
</a><button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button></td>
					<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Datetime');?>
" style="text-align:center">
						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDateTime($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date']);?>

					</td>
					<td class="text-center block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tool');?>
" style="white-space: nowrap;">
						<div class="btn-group">
							<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</button>
							<ul class="dropdown-menu" style="right:0px !important">
								<li><a title="Xóa hẳn" class="btn-small btn-danger confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&subscribe_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['subscribe_id']);?>
"><i class="icon-remove icon-white"></i></a></li>
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
		<div class="adminPaging">
			<div class="report">
				<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('statistical');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('records');?>
/<strong><?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('page');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youareonpagenumber');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</strong>
			</div>
			<ul class="lstAdminPaging">
			<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</a></li>
			<?php
}
}
?>
			</ul>
		</div>
		<a class="iso-button-full" onclick="$('#hide-DIV').slideToggle();"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click here to view list email');?>
</a>
		<div id="hide-DIV" class="mt5" style="display:none">
			<textarea style="width:100%; height:60px"><?php echo $_smarty_tpl->tpl_vars['htmlEmail']->value;?>
</textarea>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
$('#from_date').datepicker({
	dateFormat: "mm/dd/yy", 
 
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
	dateFormat: "mm/dd/yy",
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
