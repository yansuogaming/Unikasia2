<?php
/* Smarty version 3.1.38, created on 2024-04-09 10:14:24
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cropper/_ajax.cropper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614b290c48e69_69670430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9754c3a7bddbf25cdaa44d941b31eda5654a323' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cropper/_ajax.cropper.tpl',
      1 => 1634807874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614b290c48e69_69670430 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-md modal_crop_image">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Crop image');?>
</h4>
		</div>
		<div class="cropper-indicator" id="cropper-indicator" style="display: none">
			<div class="md-progress-linear">
				<div class="_md-container _md-mode-indeterminate">
					<div class="_md-dashed"></div>
					<div class="_md-bar _md-bar1"></div>
					<div class="_md-bar _md-bar2"></div>
				</div>
			</div>
		</div>
		<form method="post" id="frmItinerary" class="frmform" enctype="multipart/form-data">
			<div class="modal-body">
				<p class="help-block">Để cắt ảnh kéo vùng dưới hoặc nhập kích thước, sau đó nhấp vào “<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
”</p>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-xs-12 col-md-8">
						<div class="cropper-wrap mb10">
							<img id="cropper" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['objectUrl']->value;?>
" />
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<ul class="ui-cropper-tools">
							<li><a class="ui-cropper-tool" data-method="scaleX" data-option="-1" href="javascript:void(0);">
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('undo','&nbsp;','font-16 mr-2');?>

								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('redo','&nbsp;','font-16 mr-2');?>

								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rotate left and right');?>

							</a></li>
							<li><a class="ui-cropper-tool" data-method="scaleY" data-option="-1" href="javascript:void(0);">
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('undo','','font-16 mr-2','style="transform: rotateZ(-110deg);"');?>

								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('undo','','font-16 mr-2','style="transform: rotateZ(110deg);"');?>

								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rotate up bottom');?>

							</a></li>
							<li>
								<a class="ui-cropper-tool" data-method="rotate" data-option="-45" href="javascript:void(0);">
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('rotate_left','&nbsp;','font-16 mr-2');?>
</a>
								<a class="ui-cropper-tool" data-method="rotate" data-option="45" href="javascript:void(0);">
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('rotate_right','&nbsp;','font-16 mr-2');?>
</a>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rotate left right');?>
</li>
							<li>
								<a class="ui-cropper-tool" data-method="move" data-option="-10" data-second-option="0" href="javascript:void(0);">
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('west','&nbsp;','font-16 mr-2');?>
</a>
								<a class="ui-cropper-tool" data-method="move" data-option="10" data-second-option="0" href="javascript:void(0);">
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('east','&nbsp;','font-16 mr-2');?>
</a>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Move left right');?>
</li>
							<li>
								<a class="ui-cropper-tool" data-method="move" data-option="0" data-second-option="-10" href="javascript:void(0);">
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('north','&nbsp;','font-16 mr-2');?>
</a>
								<a class="ui-cropper-tool" data-method="move" data-option="0" data-second-option="10" href="javascript:void(0);">
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIMO('south','&nbsp;','font-16 mr-2');?>
</a>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Move up down');?>
 </li>
							<li>
								<a class="ui-cropper-tool" data-method="zoom" data-option="0.1" href="javascript:void(0);">
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('search-plus','&nbsp;','font-18 mr-2');?>
</a>
								<a class="ui-cropper-tool" data-method="zoom" data-option="-0.1" href="javascript:void(0);">
									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('search-minus','&nbsp;','font-18 mr-2');?>
</a>
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Zoom in out');?>
</li>
							<li>
								<div class="form-grop">
									<div class="row">
										<div class="col-md-6">
											<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Width');?>
</label>
											<input type="text" class="form-control numberonly" id="cropper-width" placeholder="width" value="0" readonly />
										</div>
										<div class="col-md-6">
											<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Height');?>
</label>
											<input type="text" class="form-control numberonly" id="cropper-height" placeholder="height" value="0" readonly />
										</div>
									</div>
								</div>
							</li>
						</ul>
						<?php if ($_smarty_tpl->tpl_vars['openFrom']->value == 'gallery') {?>
						<hr />
						<textarea class="form-control mb10" name="img_title" placeholder="Tên ảnh"></textarea>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="modal-footer version-xs">
				<button type="button" class="btn btn-primary ui-cropper-tool" tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" data-method="getCroppedCanvas">
					<i class="icon-ok icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</span>
				</button>
				<button type="reset" class="btn btn-warning" data-dismiss="modal">
					<i class="icon-retweet icon-white"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span>
				</button>
			</div>
		</form>
	</div>
</div><?php }
}
