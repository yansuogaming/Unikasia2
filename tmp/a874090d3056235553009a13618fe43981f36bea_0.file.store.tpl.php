<?php
/* Smarty version 3.1.38, created on 2024-04-22 14:37:16
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/country/store.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_662613accea993_05991480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a874090d3056235553009a13618fe43981f36bea' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/country/store.tpl',
      1 => 1676863665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662613accea993_05991480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="page_container">
<div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
 : </strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsCityStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
</a>    
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
</div>
<div class="container-fluid">
    <div class="page-title">	
        <h2><?php echo $_smarty_tpl->tpl_vars['clsCityStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Top Management departures list system');?>
</p>
    </div>
    <div class="wrap">
		<div class="row">
		<div class="clearfix" style="height:10px"></div>
			<div class="col-xs-12 filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="form-group form-keyword">
						<input type="text" class="form-control m-wrap short" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
..." />
					</div>
					<div class="form-group form-country">
						<select name="country_id" onchange="document.getElementById('forums').submit();" class="form-control select" style="width:240px !important;font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['country_id']->value);?>
</select>
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
				</form>	
			</div>
			<div class="hastable col-md-6">
				<table cellspacing="0" class="tbl-grid full-width" width="100%">
					<tr>
						<th class="gridheader"></th>
						<th class="gridheader hidden1023"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
						<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameofcity');?>
</strong></th>
						<th class="gridheader" style="text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['listItem']->value[0]['city_id'] != '') {?>
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
						<td class="check_40 text_center"><input class="chkitem" name="chkid_city[]" value="<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
" type="checkbox"></td>
						<td class="index hidden1023"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
</td>
						<td><strong style="font-size:18px"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']);?>
</strong></td>
						</td>
						<td style="vertical-align:middle; width:65px; text-align:right; white-space:nowrap;">
							<a class="iso-button-action" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=Add&type=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['type']->value);?>
&city_id=<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
&country_id=<?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country_id'];?>
" title="Thêm địa điểm này"><i class="icon-plus-sign icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add');?>
</a>
						</td>
					</tr>
					<?php
}
}
?>
					<?php } else { ?>
					<tr><td colspan="6" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Data');?>
!</td></tr>
					<?php }?>
				</table>
				<input type="hidden" id="list_selected_chkitem" />
				<div class="clearfix" style="height:10px"></div>
				<div style="width:96%; padding:2%; background: #fff;border:1px solid #ccc">
					<label><input type="checkbox" id="check_all" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectall');?>
</label>
					<a _type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="btn btn-success fileinput-button clickToSaveCityStore"> 
						<i class="icon-plus icon-white"></i> 
						<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</span>
					</a>
				</div>
				<div class="clearfix"></div>
				<div class="adminPaging">
					<ul class="lstAdminPaging">
					<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</a>
						</li>
					<?php
}
}
?>
					</ul>
					<div class="report">
						<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('statistical');?>
</strong>: <strong><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('records');?>
/<strong><?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('page');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youareonpagenumber');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</strong>.
					</div>
				</div>
			</div>
			<div class="hastable col-md-6">
				<div class="fiterbox">
					<div class="wrap">
						<div class="searchbox" style="float:left !important; width:100%">
							<h1 style="font-family:Cambria; font-weight:bold; font-style:italic;"><?php echo $_smarty_tpl->tpl_vars['clsCityStore']->value->getTitle($_smarty_tpl->tpl_vars['type']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selected');?>
</h1>
						</div>
					</div>
				</div>
				<table cellspacing="0" class="tbl-grid full-width">
					<thead>
						<tr>
							<th class="gridheader"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
							<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameofcity');?>
</strong></th>
							<th class="gridheader" style="text-align:center"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></th>
						</tr>
					</thead>
					<?php if ($_smarty_tpl->tpl_vars['listSelected']->value[0]['city_id'] != '') {?>
					<tbody id="SortAble">
						<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listSelected']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr style="cursor:move" id="order_<?php echo $_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
							<td class="index"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
</td>
							<td><strong style="font-size:18px"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city_id']);?>
</strong></td>
							</td>
							<td style="vertical-align: middle; width: 90px; text-align: right; white-space: nowrap;">
								<a class="iso-cancel-action clkDeleteCityStore" _citystore_id="<?php echo $_smarty_tpl->tpl_vars['listSelected']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['citystore_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
" href="javascript:void();"><i class="icon-upload icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cancel');?>
</a>
							</td>
						</tr>
						<?php
}
}
?>
					</tbody>
					<?php } else { ?>
					<tbody><tr><td colspan="7" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Data');?>
!</td></tr></tbody>
					<?php }?>
				</table>
			</div>
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
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$().ready(function(){
	$(document).on('click', '.clkDeleteCityStore', function(ev){
		if(confirm(confirm_delete)){
			var $_this = $(this);
			vietiso_loading(1);
			$.ajax({
				type: "POST",
				url:path_ajax_script+'/index.php?mod='+mod+'&act=ajDeleteCityStore',
				data: {'citystore_id': $_this.attr('_citystore_id')},
				dataType: "html",
				success: function(html){
					window.location.reload(true);
				}
			});
		}
	});
	$(document).on('click', '.ajMoveCityStore', function(ev){
		var $_this = $(this);
		var adata = {
			'citystore_id' : $_this.attr('_citystore_id'),
			'city_id' : $_this.attr('_city_id'),
			'country_id' : $_this.attr('_country_id'),
			'direct' : $_this.attr('direct')
		};
		vietiso_loading(1);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajMoveCityStore",
			data: adata,
			dataType: "html",
			success: function(html){
				window.location.reload(true);
			}
		});
		return false;
	});
	$("input[name='chkid_city[]'],#check_all").change(function(){
		var city_id = '';
		if($("input[name='chkid_city[]']:checked").length > 0){
			city_id += '|';
			$("input[name='chkid_city[]']:checked").each(function(){
				city_id += $(this).val();
				city_id += '|';
			});	
		}
		$('#list_selected_chkitem').val(city_id);
	})
	$(document).on('click', '.clickToSaveCityStore', function(ev){
		var _this = $(this);
		if($('select[name=country_id]').val()==''){
			alertify.error(required_country);
			$('select[name=country_id]').focus();
			return false;
		}
		if($('#list_selected_chkitem').val()==''){
			alertify.error(required_city);
			return false;
		}
		var adata = {
			'country_id': $('select[name=country_id]').val(),
			'list_city_id' : $('#list_selected_chkitem').val(),
			'type' : _this.attr('_type')
		};
		_this.find('span').text(loading);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/index.php?mod="+mod+"&act=ajSaveStoreForCity",
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
		$.post(path_ajax_script+"/index.php?mod=country&act=ajUpdPosSortCityStore", order, 
		
		function(html){
			vietiso_loading(0);
		});
	}
});
<?php echo '</script'; ?>
>
<?php }
}
