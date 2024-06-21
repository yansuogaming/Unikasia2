<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:39:28
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/home/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139f3074f6c6_05890555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f080367bea0b0fc0ac02dfb0e4c9ea2354b8720' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/home/default.tpl',
      1 => 1704512795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139f3074f6c6_05890555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="dashboard">
	<div class="dashboard_header_box">
		<div class="title_box">
			<h1>Dashboard</h1>
			<p>Chào mừng bạn đến với hệ thống quản trị dữ liệu website isoCMS.</p>
		</div>
		<div class="nav_booking">
			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'booking','booking_tour','default')) {?>
			<div class="nav_booking_item item1">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Booking tour');?>
</p>
				<p class="number"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=booking&act=booking_tour"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->countTotal('Booking',"clsTable='Tour'");?>
</a></p>
			</div>
			<?php }?>
			<div class="nav_booking_item item2">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</p>
				<p class="number"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=booking&act=booking_tailor"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->countTotal('Booking',"clsTable='Tailor'");?>
</a></p>
			</div>
			<div class="nav_booking_item item3">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Contact');?>
</p>
				<p class="number"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=feedback"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->countTotal('Feedback');?>
</a></p>
			</div>
		</div>
	</div>
	<div class="home_box quick_access_box mb-4">
		<h2 class="title_box slideToggle"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Quick Access');?>
</h2>
		<div class="quick_access_list">
			<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listQuickAccessShow']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php $_smarty_tpl->_assignInScope('_adminbutton_id', $_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adminbutton_id']);?>
			<?php if ($_smarty_tpl->tpl_vars['clsAdminButton']->value->checkPackage($_smarty_tpl->tpl_vars['_adminbutton_id']->value,$_smarty_tpl->tpl_vars['package_id']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['core']->value->checkAccess($_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page'])) {?>
			<div class="quick_access_item">
				<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsAdminButton']->value->getURL($_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adminbutton_id']);?>
" >
					<span class="icon"><img class="imgIcon" src="<?php echo $_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" width="28" height="28" /></span>
					<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['listQuickAccessShow']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title_page']);?>
</span>
				</a>
			</div>
			<?php }?>
			<?php }?>
			<?php
}
}
?>
			<div class="quick_access_item item_add">
				<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Task');?>
" onClick="manager_tasks(this); return false;">
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('plus');?>

					<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Task');?>
</span>
				</a>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'booking','booking_tour','default')) {?>
	<div class="home_box performance_box">
		<div class="header_box">
			<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Performance');?>
</h2>
			<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Last 7 Days');?>
</p>
		</div>
		<div class="performance_list">
			<div class="performance_item <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['total_booking'][0] != '') {?>item_<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['total_booking'][0];
}?>">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Number of Orders');?>
</p>
				<p class="number"><?php echo $_smarty_tpl->tpl_vars['nearest1']->value['total_booking'];?>
</p>
				<p class="number2"><i class="fa <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['total_booking'][0] != '') {?>fa-caret-<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['total_booking'][0];
}?>" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['nearest2']->value['total_booking'][1];?>
</p>
			</div>
			<div class="performance_item <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['value_of_order'][0] != '') {?>item_<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['value_of_order'][0];
}?>">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Value of Orders');?>
</p>
				<p class="number"><?php echo $_smarty_tpl->tpl_vars['nearest1']->value['value_of_order'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</p>
				<p class="number2"><i class="fa <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['value_of_order'][0] != '') {?>fa-caret-<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['value_of_order'][0];
}?>" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['nearest2']->value['value_of_order'][1];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</p>
			</div>
			<div class="performance_item <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['total_paid'][0] != '') {?>item_<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['total_paid'][0];
}?>">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Paid');?>
</p>
				<p class="number"><?php echo $_smarty_tpl->tpl_vars['nearest1']->value['total_paid'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</p>
				<p class="number2"><i class="fa <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['total_paid'][0] != '') {?>fa-caret-<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['total_paid'][0];
}?>" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['nearest2']->value['total_paid'][1];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</p>
			</div>
			<div class="performance_item">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Refund');?>
</p>
				<p class="number">0</p>
				<p class="number2">$0.00</p>
			</div>
			<div class="performance_item <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['total_discount'][0] != '') {?>item_<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['total_discount'][0];
}?>">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Total Discount');?>
</p>
				<p class="number"><?php echo $_smarty_tpl->tpl_vars['nearest1']->value['total_discount'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</p>
				<p class="number2"><i class="fa <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['total_discount'][0] != '') {?>fa-caret-<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['total_discount'][0];
}?>" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['nearest2']->value['total_discount'][1];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</p>
			</div>
			<div class="performance_item <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['balance_owed'][0] != '') {?>item_<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['balance_owed'][0];
}?>">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Balance Owed');?>
</p>
				<p class="number"><?php echo $_smarty_tpl->tpl_vars['nearest1']->value['balance_owed'];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</p>
				<p class="number2"><i class="fa <?php if ($_smarty_tpl->tpl_vars['nearest2']->value['balance_owed'][0] != '') {?>fa-caret-<?php echo $_smarty_tpl->tpl_vars['nearest2']->value['balance_owed'][0];
}?>" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['nearest2']->value['balance_owed'][1];?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</p>
			</div>
			<div class="performance_item item_up">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Direct Sales');?>
</p>
				<p class="number">4.268.580đ</p>
				<p class="number2"><i class="fa fa-caret-up" aria-hidden="true"></i> 2.125.004đ</p>
			</div>
			<div class="performance_item item_up">
				<p class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Marketplace Sales');?>
</p>
				<p class="number">3.478.500đ</p>
				<p class="number2"><i class="fa fa-caret-up" aria-hidden="true"></i> 2.125.004đ</p>
			</div>
		</div>
	</div>
	
	<div class="chart_booking">
		<div class="home_box chart_booking_box">
			<div class="top_chart_booking">
				<div class="letf_top_chart_booking">
					<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Chart Booking");?>
</h2>
					<div class="input_year">
						<select class="form-control year_chart_booking" name="" id="">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rangeDate']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['year']->value == smarty_modifier_date_format(time(),"%Y")) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<!--<input class="form-control year_chart_booking" type="text" min="2000" max="<?php echo smarty_modifier_date_format(time(),"%Y");?>
" step="1" value="<?php echo smarty_modifier_date_format(time(),"%Y");?>
" />
						<i class="fa fa-angle-down" aria-hidden="true"></i>-->
					</div>
				</div>
				<div class="right_chart_booking">
					<label class="lbl_checkbox">
						<input type="radio" class="check_all" name="booking_cat" value="all" checked="checked">
						<span class="checkmark"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All');?>
</span>
					</label>
					<label class="lbl_checkbox">
						<input type="radio" class="check_one" name="booking_cat" value="Tour">
						<span class="checkmark"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
, <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('voucher');?>
</span>
					</label>
					<label class="lbl_checkbox">
						<input type="radio" class="check_one" name="booking_cat" value="Hotel">
						<span class="checkmark"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hotel');?>
</span>
					</label>
					<label class="lbl_checkbox">
						<input type="radio" class="check_one" name="booking_cat" value="Cruise">
						<span class="checkmark"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise');?>
</span>
					</label>
					<label class="lbl_checkbox">
						<input type="radio" class="check_one" name="booking_cat" value="Tailor">
						<span class="checkmark"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tailor made tour');?>
</span>
					</label>
				</div>
			</div>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('chart_booking');?>

		</div>
		<div class="ads_travelmaster">
			<a href="" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/img_travelmaster.jpg"  /></a>
		</div>
	</div>
    <?php }?>
	<div class="home_box actions_required_box">
		<div class="header_box">
			<h2 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Actions Required');?>
</h2>
		</div>
		<table class="booking_list_table">
			<tbody>
				<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstBooking']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<tr>
					<td class="date_booking">
						<p class="text1"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getDayOfWeek($_smarty_tpl->tpl_vars['lstBooking']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date']);?>
</p>
						<p class="text2"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDate($_smarty_tpl->tpl_vars['lstBooking']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],'dot');?>
</p>
					</td>
					<td class="customer_booking">
						<p class="text1"><?php echo $_smarty_tpl->tpl_vars['clsBooking']->value->getContactName($_smarty_tpl->tpl_vars['lstBooking']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</p>
						<p class="text2"><?php echo $_smarty_tpl->tpl_vars['clsBooking']->value->getHTMLService($_smarty_tpl->tpl_vars['lstBooking']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_id']);?>
</p>
						<span class="booking_code"><?php echo $_smarty_tpl->tpl_vars['lstBooking']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['booking_code'];?>
</span>
					</td>
					<td class="pay_booking">
						<p class="text1"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['lstBooking']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['totalgrand']);?>
đ</p>
						<p class="text2">Đã thanh toán</p>
					</td>
				</tr>
				<?php
}
}
?>
			</tbody>
		</table>
	</div>
	
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	function manager_tasks(){
		$.post(path_ajax_script+'/index.php?mod=home&act=load_quick_access', {
			'holderG' : '_modal'
		}, function(html){
			$Core.popup.open('auto','auto', html, 'add_task');
			loadHtmlQuickAccess();
		});
	}
	function loadHtmlQuickAccess(){
		$.post(path_ajax_script+'/index.php?mod=home&act=load_quick_access', {
			'holderG' : '_list'
		}, function(html){
			$('.quick_access_html').html(html);
		});
	}
	$(function(){
		$_document.on('click', ".remove_item_quick_access,.add_item_quick_access", function(ev) {
			ev.preventDefault();
			var $_this = $(this),
				holderG = $_this.data('tp'),
				adminbutton_id = $_this.data('adminbutton_id');
			$.ajax({  
				type:'POST',
				url:path_ajax_script+'/index.php?mod=home&act=load_quick_access', 
				data:{"holderG":holderG,"adminbutton_id":adminbutton_id},
				dataType:'html',
				success:function(html){
					loadHtmlQuickAccess();
				}
			});
			return false;
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
