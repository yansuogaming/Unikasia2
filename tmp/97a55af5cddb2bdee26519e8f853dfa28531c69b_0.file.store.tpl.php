<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:16:51
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/store.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661399e31af9b4_47285396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97a55af5cddb2bdee26519e8f853dfa28531c69b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/store.tpl',
      1 => 1684554097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661399e31af9b4_47285396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_tour_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_tour_exhautive_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title">
				<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
 <?php echo $_smarty_tpl->tpl_vars['clsTourStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
</h2>
				<p>Chức năng quản lý danh sách các <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
 <?php echo $_smarty_tpl->tpl_vars['clsTourStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
 trong hệ thống isoCMS</p>
				<p>This function is intended to manage <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour');?>
 <?php echo $_smarty_tpl->tpl_vars['clsTourStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
 in isoCMS system</p>
			</div>
			<div class="wrap">
				<div class="filterbox mt10">
					<div class="wrap">
						<div class="searchbox searchbox_new">
							<input id="searchkey_store" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tour name or tour id');?>
..." type="text" class="text" style="width:285px" />
							<input type="hidden" id="tour_store_id" value="0"/>
							<input type="hidden" id="type_store" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"/>
							<a class="btn btn-add_new" id="add_tour_store" href="javascript:void(0);">
								 <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Thêm vào');?>
</span>
							</a>
							<div class="autosugget" id="autosugget">
								<ul class="HTML_sugget"></ul>
								<div class="clearfix"></div>
								<a class="close_Div"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('close');?>
</a>
							</div>
						</div>
					</div>
				</div>
				<table cellspacing="0" class="table table-striped tbl-grid table_responsive" width="100%">
					<thead>
						<tr>
							<th class="gridheader hiden767" style="width:80px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ID');?>
</strong></th>
							<th class="gridheader name_responsive" style="text-align:left;width:-webkit-fill-available"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</strong></th>
							<th class="gridheader text-left hiden_responsive"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('duration');?>
</strong></th>
							<th class="gridheader text-left hiden_responsive" width="6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricefrom');?>
</strong></th>
							<th class="gridheader text-center hiden_responsive" width="40px"></th>
						</tr>
					</thead>
					<?php if ($_smarty_tpl->tpl_vars['listSelected']->value[0]['tour_id'] != '') {?>
					<tbody id="SortAble">
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listSelected']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id'];?>
"  class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
							<td class="index hiden767" data-title="ID"><span><?php echo $_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id'];?>
</span></td>
							<td class="text-left name_service title_td1">
								<span  class="title"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id']);?>
</span>
								<button type="button" class="toggle-row inline_block767" style="display:none">
									<i class="fa fa-caret fa-caret-down"></i>
								</button>
							</td>
							<td class="text-left block_responsive border_top_responsive" style="white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('duration');?>
">
								<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTripDuration2020($_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id'],'/ ');?>

							</td>
							<td class="block_responsive" style="text-align:right; white-space:nowrap" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricefrom');?>
">
								<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getTripPriceNewPro2020($_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id'],$_smarty_tpl->tpl_vars['now_day']->value,0,'value') > '0') {?>
									<span class="format_price">
									<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTripPriceNewPro2020($_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_id'],$_smarty_tpl->tpl_vars['now_day']->value,0,'value');?>
 <u><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
</u>
									</span>
								<?php } else { ?>
									<span class="format_price">
									0 <u><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getShortRate();?>
<u>
									</span>
								<?php }?>
							</td>
							<td class="block_responsive text-center" style="white-space:nowrap;" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
">
								<div class="btn-group">
									<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu">
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="clkDeleteTourStore"  _tour_store_id="<?php echo $_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tour_store_id'];?>
" href="javascript:void(0);"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
									</ul>
								</div>
							</td>
						</tr>
						<?php
}
}
?>
					</tbody>
					
						<?php } else { ?>
						<tr><td colspan="7" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Data');?>
!</td></tr>
						<?php }?>
					</table>
				</tr>
			</div>
		</div>
	</div>
</div>
<style>.disabled{-moz-opacity:.8;-webkit-opacity:.8;-o-opacity:.8;opacity:.8;filter:anpha(opacity=80)}</style>
<?php echo '<script'; ?>
 type="text/javascript">
var required_country = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You not selected country');?>
";
var required_city = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('You not selected city');?>
";
var type = "<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
";
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	
$().ready(function(){
	var aj_search = '';
	$("#searchkey_store").bind('keyup change', function() {
		var $_this = $(this);
		if ($_this.val() != '') {
			clearTimeout(aj_search);
			search_tour_store();
		} else {
			$("#autosugget").stop(false, true).slideUp();
		}
	});
	$(document).on('click', '.clickChooseTourStore', function(ev) {
		var $_this = $(this);
		var title=$_this.data('title');
		var tour_id=$_this.data('tour_id');
		var href=$_this.data('link');
		$('#searchkey_store').val(title);
		$('#tour_store_id').val(tour_id);
		$('#add_tour_store').attr('href',href);
		search_tour_store('Hidden');
		return false;
		
	});
	$(document).on('click', '.clkDeleteTourStore', function(ev){
		if(confirm(confirm_delete)){
			var $_this = $(this);
			vietiso_loading(1);
			$.ajax({
				type: "POST",
				url:path_ajax_script+'/index.php?mod='+mod+'&act=ajDeleteTourStore',
				data: {'tour_store_id': $_this.attr('_tour_store_id')},
				dataType: "html",
				success: function(html){
					window.location.reload(true);
				}
			});
		}
	});

	$(document).on('click', '.clickToSaveTourStore', function(ev){
		var _this = $(this);
		if($('#list_selected_chkitem').val()==''){
			alertify.error(required_city);
			return false;
		}
		var adata = {
			'list_tour_id' : $('#list_selected_chkitem').val(),
			'type' : _this.attr('_type')
		};
		_this.find('span').text(loading);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/index.php?mod="+mod+"&act=ajSaveStoreForTour",
			data: adata,
			dataType: "html",
			success: function(html){
				_this.find('span').text(save);
				$('#check_all').removeAttr('checked');
				window.location.reload(true);
			}
		});
	});
});
function search_tour_store(check) {
	aj_search = setTimeout(function() {
		$.ajax({
			type: 'POST',
			url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajGetSearchStore',
			data: {
				"keyword": $("#searchkey_store").val(),
				"type": type,
				"check": check,
			},
			dataType: 'html',
			success: function(html) {
				if (html.indexOf('_EMPTY') >= 0) {
					$('#autosugget').hide();
				} else {
					$('#autosugget').stop(false, true).slideDown();
					$('#autosugget').find('.HTML_sugget').html(html);
				}
			}
		});
	}, 500);
}
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
	var $type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';
	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
<?php echo '</script'; ?>
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
			var type = $type;
			var recordPerPage = $recordPerPage;
			var currentPage = $currentPage;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage+'&type='+type;
			$.post(path_ajax_script+"/index.php?mod=tour&act=ajUpdPosSortTourStore", order, 

			function(html){
				vietiso_loading(0);
				window.location.reload(true);
			});
		}
	});
<?php echo '</script'; ?>
>
<?php }
}
