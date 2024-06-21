<?php
/* Smarty version 3.1.38, created on 2024-04-11 09:31:00
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_image-gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66174b64cf32f9_44516301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ba1cd0b454728570d51c6d29fd805f2bec3a0a' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_image-gallery.tpl',
      1 => 1705559217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66174b64cf32f9_44516301 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Photo Gallery');?>

				<?php $_smarty_tpl->_assignInScope('photo_gallery_tour', 'photo_gallery_tour');?>
				<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
				<button data-key="<?php echo $_smarty_tpl->tpl_vars['photo_gallery_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Photo Gallery');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
				<?php }?>
				</h3>
				<div class="form_option_tour">
					<div class="inpt_tour">
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="filedrop-picker">
									<div class="filedrop" onclick="file_explorer(this,event);" ondrop="file_drop(this,event)" toId="selectFile" data-options='{"openFrom":"gallery","table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","clsTableGal":"TourImage"}' ondragover="return false">
										<h3>Kéo ảnh vào đây để tải lên</h3>
										<p>Kích thước (WxH=840x480px)<br>
										Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
										<button type="button" class="btn btn-upload"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From computer');?>
</button>
									</div>
									<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"gallery","clsTableGal":"TourImage","table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"}' name="image">
									<input style="display:none" type="file" multiple name="image[]" id="ajAttachFile">
									<div class="clearfix mt-half"></div>
									<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="1" isoman_callback='isoman_gallery_callback({"openFrom":"gallery","clsTableGal":"TourImage","table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"})' class="btn btn-upload-choice ajOpenDialog" isoman_for_id="image_val" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
								</div>
							</div>
							<div class="col-md-7 col-sm-12">
								<div id="holder_gallery" class="list-unstyled gallery"></div>
							</div>
						</div>
					</div>
					<div class="media-body mb-1 hidden">
						<p class="mb-2">
							<strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
						</p>
						<div class="progress mb-2">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
								 role="progressbar"
								 style="width: 0%"
								 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
					</div>
				</div>
				<div class="btn_save_titile_trip_code">
					<a tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" prev_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu_j_index_prev']->value == '') {
if ($_smarty_tpl->tpl_vars['list_cat_menu_prev']->value == '') {
echo $_smarty_tpl->tpl_vars['child_cat_menu_j']->value;
}
if ($_smarty_tpl->tpl_vars['list_cat_menu_prev']->value != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_prev']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_prev']->value[$_smarty_tpl->tpl_vars['count_child_cat_menu_prev']->value];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu_j_index_prev']->value;
}?>" class="back_step"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>
					<a id="btn-save-img-file"  tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" status="" present_step="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_j']->value;?>
" next_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu_j_index_next']->value == '') {
if ($_smarty_tpl->tpl_vars['list_menu_tour_i_index_next']->value['cat_menu'] == '') {?>SaveAll<?php }
if ($_smarty_tpl->tpl_vars['list_menu_tour_i_index_next']->value['cat_menu'] != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_next']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_next']->value[0];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu_j_index_next']->value;
}?>" class="save_and_continue_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
				<div class="content_box">
					<p class="mb0"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['photo_gallery_tour']->value));?>
</p>
				</div>
			</div>
		</div>
				
				
<?php echo '<script'; ?>
 type="text/javascript">
	var table_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
	var clsTableGal = 'TourImage';
	
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	var options_gallery = {
		"openFrom":'gallery',
		"clsTableGal":clsTableGal,
		"table_id":table_id
	};
	$(function () {
		loadGallery(table_id, {"clsTable":clsTableGal});
	});
	function loadGallery($table_id, options){
		var $_adata = options || {};
		$_adata['tp'] = 'L';
		$_adata['table_id'] = table_id;
		$.post(path_ajax_script + '/index.php?mod=home&act=ajOpenGallery', $_adata, function(html){
			$('#holder_gallery').html(html);
			if($("#holder_gallery").find(".gallery-item").length > 0){
				$('#image-gallery').closest('li').removeAttr('class').addClass('check_success');
			}else{
				$('#image-gallery').closest('li').removeAttr('class').addClass('check_caution');
			}
		});
	}
	function isoman_gallery_callback(options){
		var $_adata = options || {},
			$list_images = isoman_selected_files();
		$_adata['tp'] = '_insert';
		$_adata['list_images'] = $list_images;
		$.post(path_ajax_script+'/?mod=cropper&act=upload_gallery', $_adata, function(res){
			loadGallery(options.table_id, {"clsTable":clsTableGal});
		});
	}
	function delete_gallery(_this){
		var table_id = $(_this).attr('table_id'),
			table_image_id = $(_this).attr('table_image_id');
		$Core.alert.confirm(__['Confirm'], __['Are you sure you want to delete this?'], function(){
			var $_adata = {'table_id':table_id,'clsTable':clsTableGal,'image_id':table_image_id};
			$Core.util.toggleIndicatior(1);
			$.post(path_ajax_script+'/index.php?mod=home&act=ajDeleteGallery',$_adata, function(respJson){
				$Core.util.toggleIndicatior(0);
				if(respJson.result.indexOf('success') >= 0){
					loadGallery(table_id, {"clsTable":clsTableGal});
				}
			}, 'json');
		});
	}
<?php echo '</script'; ?>
>

<?php if (1 == 2) {?>
<div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Photo Gallery');?>
</h3>
				<div class="form_option_tour">
					<div class="inpt_tour">
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="filedrop-picker">
									<div class="filedrop" onclick="file_explorer(this,event);" ondrop="file_drop(this,event)" toId="selectFile" data-options='{"openFrom":"gallery","table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","clsTableGal":"TourImage"}' ondragover="return false">
										<h3>Kéo ảnh vào đây để tải lên</h3>
										<p>Kích thước (WxH=750x500)<br>
										Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
										<button type="button" class="btn btn-upload"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('From computer');?>
</button>
									</div>
									<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"gallery","clsTableGal":"TourImage","table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"}'>
									<div class="clearfix mt-half"></div>
									<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="1" isoman_callback='isoman_gallery_callback({"openFrom":"gallery","clsTableGal":"TourImage","table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"})' class="btn btn-upload-choice ajOpenDialog" isoman_for_id="image_val" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
								</div>
							</div>
							<div class="col-md-7 col-sm-12">
								<div id="holder_gallery" class="list-unstyled gallery"></div>
							</div>
						</div>
					</div>
					<div class="media-body mb-1 hidden">
						<p class="mb-2">
							<strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
						</p>
						<div class="progress mb-2">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
								 role="progressbar"
								 style="width: 0%"
								 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
					</div>
				</div>
				<div class="btn_save_titile_trip_code">
					<a tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" prev_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev'] : null)] == '') {
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] : null)]['cat_menu'] == '') {
echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];
}
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] : null)]['cat_menu'] != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_prev']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_prev']->value[$_smarty_tpl->tpl_vars['count_child_cat_menu_prev']->value];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev'] : null)];
}?>" class="back_step"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>
					<a id="btn-save-img-file"  tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" cat_run="<?php echo $_smarty_tpl->tpl_vars['cat_run']->value;?>
" status="skip" present_step="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
" next_step="<?php if ($_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next'] : null)] == '') {
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null)]['cat_menu'] == '') {?>SaveAll<?php }
if ($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null)]['cat_menu'] != '') {
echo $_smarty_tpl->tpl_vars['list_cat_menu_next']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu_next']->value[0];
}
} else {
echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next'] : null)];
}?>"  class="save_and_continue_tour"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="instruction_fill_data_box">
				<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
				<div class="content_box">
					<p class="mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Photo Gallery');?>
: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('instructionphotogallery');?>
</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var clsTable = 'Tour';
	var table_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
	var clsTableGallery = 'TourImage';
    var count = 1;
    var count_run = 1;
    var rate_progress = 0;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function () {
		loadTourGallery($tour_id, {});
	});
	function loadTourGallery($tour_id, options){
		var $_adata = options || {};
		$_adata['tp'] = 'L';
		$_adata['tour_id'] = $tour_id;
		$.post(path_ajax_script + '/index.php?mod=' + mod + '&act=ajOpenTourGalleryTourNew', $_adata, function(html){
			$('#holder_gallery').html(html);
		});
	}
	function isoman_gallery_callback(options){
		var $_adata = options || {},
			$list_images = isoman_selected_files();
		$_adata['tp'] = '_insert';
		$_adata['list_images'] = $list_images;
		$.post(path_ajax_script+'/?mod=cropper&act=upload_gallery', $_adata, function(res){
			loadTourGallery(options.table_id, {});
		});
	}
	function delete_gallery(_this){
		var table_id = $(_this).attr('table_id'),
			image_id = $(_this).attr('tour_image_id');
		$Core.alert.confirm(__['Confirm'], __['Are you sure you want to delete this?'], function(){
			var $_adata = {'table_id':table_id,'clsTable':'TourImage','image_id':image_id};
			$Core.util.toggleIndicatior(1);
			$.post(path_ajax_script+'/index.php?mod=cropper&act=ajDeleteGalImg',$_adata, function(respJson){
				$Core.util.toggleIndicatior(0);
				if(respJson.result.indexOf('success') >= 0){
					loadTourGallery($tour_id, {});
				}
			}, 'json');
		});
	}
<?php echo '</script'; ?>
>

<?php }
}
}
