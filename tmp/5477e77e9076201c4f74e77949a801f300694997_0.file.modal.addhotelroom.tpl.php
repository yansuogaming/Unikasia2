<?php
/* Smarty version 3.1.38, created on 2024-04-12 10:26:33
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/modal.addhotelroom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6618a9e9291a05_23420705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5477e77e9076201c4f74e77949a801f300694997' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/hotel/modal.addhotelroom.tpl',
      1 => 1705572153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6618a9e9291a05_23420705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('Adult', $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adult'));
$_smarty_tpl->_assignInScope('Adults', $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults'));
$_smarty_tpl->_assignInScope('Child', $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child'));?>
<div class="headPop headPop2"> 
	<a href="javascript:void(0);" class="closeEv close_pop"></a> 
	<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AddRoom');?>
</h3>
</div>
<div class="bodyPop">
	<form method="post" action="" class="form_add_hotel_room" id="form_add_hotel_room">
		<div class="row">
			<div class="col-sm-8">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
" name="hotel_id"/>
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value;?>
" name="tp"/>
				<div class="info_room">
					<div class="row mb15">
						<div class="col-sm-5">
							<div class="form-group">
								<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Room Type');?>
<span class="color_r">*</span></label>
								<div class="d-flex">
									<select id="room_stype_id" name="room_stype_id" class="form-control required">
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectPropertyType('TypeRoom',$_smarty_tpl->tpl_vars['oneItem']->value['room_stype_id']);?>

									</select>
									<a class="clickToAddRoomType">+</a>
								</div>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="form-group">
								<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Room Name');?>
<span class="color_r">*</span></label>
								<input class="form-control required" id="title_room" name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsHotelRoom']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5">
							<div class="form-group">
								<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Number Room');?>
<span class="color_r">*</span></label>
								<input type="text" class="text form-control required" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['number_val'];?>
" id="number_val" name="number_val"/>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Room size');?>
<span class="color_r">*</span></label>
								<div class="room_size">
									<input type="text" class="text form-control required" id="footage" name="footage" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['footage'];?>
" />
									<span class="unit">m<sup>2</sup></span>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="info_bed add_room_box">
					<p class="title-box">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Bed option');?>

					</p>
					<div class="form-group" id="repeater">
						<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Phòng này có loại giường nào');?>
?<span class="color_r">*</span></label>
						<table class="table table_bed" id="table_bed">
							<?php if ($_smarty_tpl->tpl_vars['bed_option']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bed_option']->value, 'item', false, NULL, 'item', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index'];
?>
							<tr>
								<td class="name">
									<select name="item_bed[]" class="form-control item_bed_name">
										<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Bed');?>
</option>
										<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listTypeBed']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['listTypeBed']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['listTypeBed']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'] == $_smarty_tpl->tpl_vars['item']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['listTypeBed']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id']);?>
</option>
										<?php
}
}
?>
									</select>
								</td>
								<td class="x_text">x</td>
								<td class="number">
									<select name="item_bed_number[]" class="form-control item_bed_number">
										<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= 6; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<?php $_smarty_tpl->_assignInScope('number', (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null));?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['number']->value == $_smarty_tpl->tpl_vars['item']->value['number']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</option>
										<?php
}
}
?>
									</select>
								</td>
								<td class="td_remove">
									<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['first'] : null)) {?>
									<a href="javascript:void(0);" class="btn_remove remove"><i class="ico ico-remove"></i></a>
									<?php }?>
								</td>
							</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } else { ?>
							<tr>
								<td class="name">
									<select name="item_bed[]" class="form-control item_bed_name">
										<option value="0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Bed');?>
</option>
										<?php echo $_smarty_tpl->tpl_vars['fill_bed_name_select_box']->value;?>

									</select>
								</td>
								<td class="x_text">x</td>
								<td class="number">
									<select name="item_bed_number[]" class="form-control item_bed_number">
										<?php echo $_smarty_tpl->tpl_vars['fill_bed_number_select_box']->value;?>

									</select>
								</td>
								<td class="td_remove"></td>
							</tr>
							<?php }?>
						 </table>
						<div class="btn_add">
							<a href="javascript:void(0);" class="add" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addline');?>
"><i class="fa fa-plus-circle" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addline');?>
</a>
							<a href="javascript:void(0);" class="clickToAddTypeBed" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add other bed');?>
"><i class="fa fa-plus-circle" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add other bed');?>
</a>
						</div>
					</div>
					<div class="form-group mt25">
						<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Max People');?>
</label>
						<div class="row">
							<div class="col-xs-5">
								<select name="number_adult" id="number_adult" class="form-control required">
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectNumber(11,$_smarty_tpl->tpl_vars['number_adult']->value,((string)$_smarty_tpl->tpl_vars['Adult']->value).",".((string)$_smarty_tpl->tpl_vars['Adults']->value));?>

								</select>
							</div>
							<div class="col-xs-5">
								<select name="number_child" id="number_child" class="form-control required">
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeSelectNumber(6,$_smarty_tpl->tpl_vars['number_child']->value,((string)$_smarty_tpl->tpl_vars['Child']->value).",".((string)$_smarty_tpl->tpl_vars['Child']->value));?>

								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="info_price add_room_box">
					<p class="title-box">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Giá cơ bản mỗi đêm');?>

					</p>
					<p class="intro-box">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Đây là giá thấp nhất mà chúng tôi tự động áp dụng đối với phòng này cho tất cả các ngày');?>

					</p>
					<div class="form-group">
						<label class="full-width"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Giá cho 2 người');?>
<span class="color_r">*</span></label>
						<div class="price_box">
							<input type="text" class="text form-control price_format required" id="price" name="price" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price'];?>
" />
							<span class="unit"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
/<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('night');?>
/2 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pax');?>
</span>
						</div>
					</div>
				</div>
				<div class="info_price add_room_box">
					<p class="title-box">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Giá ưu tiên');?>

					</p>
					<p class="intro-box">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Giá được áp dụng trong những ngày nhất định được tạo tại vùng “Cài đặt”.');?>

					</p>
					<div class="form-group">
						<label class="full-width"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cuối tuần');?>
</label>
						<div class="price_box">
							<input type="text" class="text form-control price_format" name="price_weekend" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price_weekend'];?>
" />
							<span class="unit"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
/<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('night');?>
/2<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pax');?>
</span>
						</div>
					</div>
					<div class="form-group">
						<label class="full-width"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Thời gian cao điểm');?>
</label>
						<div class="price_box">
							<input type="text" class="text form-control price_format" name="price_peak_time" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price_peak_time'];?>
" />
							<span class="unit"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
/<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('night');?>
/2<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pax');?>
</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="photobox image">
					<?php if ($_smarty_tpl->tpl_vars['_isoman_use']->value == '1') {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('images');?>
" id="isoman_show_image" />
					<input type="hidden" id="isoman_hidden_image" name="isoman_url_image" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
					<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" isoman_name="image" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('change');?>
"><i class="iso-edit"></i></a>
					<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image']) {?>
					<a pvalTable="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" clsTable="HotelRoom" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="photobox_edit deleteItemImage" data-name_input="isoman_url_image" g="imgItem" style="margin-left:25px;line-height:27px;background:red;color:#fff;text-align:center; text-decoration:none">X</a>
					<?php }?>
					<?php } else { ?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['clsHotelRoom']->value->getImage($_smarty_tpl->tpl_vars['pvalTable']->value,180,156);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('noimages');?>
" id="imgTour_image" />
					<input type="hidden" name="image_src" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" class="hidden_src" id="imgTour_hidden" />
					<a href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('change');?>
" class="photobox_edit editInlineImage" g="imgTour">
						<i class="iso-edit"></i>
					</a> 
					<input type="file" style="display:none" id="imgTour_file" g="imgTour" class="editInlineImageFile" name="image" />
					<?php }?>
				</div>
			</div>
		</div>
		
		
		<div class="btn_group">
			<input type="hidden" name="hotel_room_id" value="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"/>
			<a class="btn btn-cancel close_pop" id="cancel_hotel_room">
				 <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hủy');?>
</span>
			</a>
			<a class="btn btn-add_new" data-tp="<?php echo $_smarty_tpl->tpl_vars['tp']->value;?>
" id="add_hotel_room">
				 <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</span>
			</a>
		</div>
	</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
var type = "TypeRoom";
var table_id = "<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
";
var SelectBed = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Select Bed');?>
";
var fill_bed_name_select_box = '<?php echo $_smarty_tpl->tpl_vars['fill_bed_name_select_box']->value;?>
';
var fill_bed_number_select_box = '<?php echo $_smarty_tpl->tpl_vars['fill_bed_number_select_box']->value;?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$('.add').click(function(){
	var html = '';
	html += '<tr>';
	html += '<td class="name"><select name="item_bed[]" class="form-control item_bed_name"><option value="0">'+SelectBed+'</option>'+fill_bed_name_select_box+'</select></td>';
	html += '<td class="x_text">x</td>';
	html += '<td class="number"><select name="item_bed_number[]" class="form-control item_bed_number">'+fill_bed_number_select_box+'</select></td>';
	html += '<td class="td_remove"><a href="javascript:void(0);" class="btn_remove remove"><i class="ico ico-remove"></i></a></td></tr>';
	$('#table_bed').append(html);
});
$('#table_bed').on('click', '.remove', function() {
	$(this).closest('tr').remove();
});
$('.clickToAddRoomType').click(function(){
	vietiso_loading(1);
	var adata = {
		'type' : 'TypeRoom'
	};
	$.ajax({
		type: "POST",
		url: path_ajax_script+"/?mod=property&act=ajLoadFormAddProperty",
		data: adata,
		dataType: "html",
		success: function(html){
			vietiso_loading(0);
			makepopup('700px','auto',html,'frmAddRoomType','frmPop2');
		}
	});
	return false;
});
$('.clickToAddTypeBed').click(function(){
	vietiso_loading(1);
	var adata = {
		'type' : 'TypeBed'
	};
	$.ajax({
		type: "POST",
		url: path_ajax_script+"/?mod=property&act=ajLoadFormAddProperty",
		data: adata,
		dataType: "html",
		success: function(html){
			vietiso_loading(0);
			makepopup('700px','auto',html,'frmAddTypeBed','frmPop2');
		}
	});
	return false;
});
$('#clickSubmitProperty').live('click',function(e){
	vietiso_loading(1);
	e.preventDefault();
	var _this = $(this);
	var $image = $('#isoman_url_image');
	var type = $('#type');
	if($('#title').val()==''){
		$('#title').addClass('errorInput').focus();
		alertify.error(title_required);
		return false;
	}
	var adata = {
		'title'				: $('#title').val(),
		'image'	  		: 	$image.val(),
		'type'				: type.val(),
		'property_id'		: _this.attr('property_id')
	};
	$.ajax({
		type : "POST",
		url : path_ajax_script+'/index.php?mod=property&act=ajSubmitProperty',
		data: adata,
		dataType: 'html',
		success : function(html){
			window.location.reload();
		}
	});
});
<?php echo '</script'; ?>
>
<?php }
}
