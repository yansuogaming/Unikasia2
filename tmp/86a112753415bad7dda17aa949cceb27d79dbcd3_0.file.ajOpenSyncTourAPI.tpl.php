<?php
/* Smarty version 3.1.38, created on 2024-04-15 14:40:13
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/ajOpenSyncTourAPI.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661cd9dd8dd4f4_73301155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a112753415bad7dda17aa949cceb27d79dbcd3' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/ajOpenSyncTourAPI.tpl',
      1 => 1699000940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661cd9dd8dd4f4_73301155 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/pretty-checkbox.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" rel="stylesheet" />
<div class="headPop">
	<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPIfromTMS');?>
</h3>
	<a href="javscript:void(0);" class="close_pop closeEv"></a>
</div>
<div class="modal-body mt-40">
	<span class="help-block">Chọn tour cần đồng bộ</span>
	<div class="form-group form-row">

		<div class="col-xs-12 col-md-8">
			<div class="custom-search-input">
				<input class="form-control input-lg mb-2 iso_search_field" toClass="trTourTMS" name="keysearch" id="keysearch" maxlength="255" charset="UTF-8" lang="<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
" placeholder="Nhập từ khóa để tìm kiếm" />
				<span class="loading hidden"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('circle-o-notch fa-spin fa-2x fa-fw');?>
</span>
			</div>
			<span class="help-block">Gợi ý: Tên, mã Tour...</span>
		</div>
	</div>
	<div holder-results class="js_scroller holder_tour_tms" data-slimScroll-height="450px">
		<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->loadingMessage();?>

	</div>
</div>
<div class="modal-footer">
	<a href="javascript:void(0)" class="btn btn-success syncTourTMS"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sync');?>
<i class="fa fa-reply-all ml-2" aria-hidden="true"></i></a>
</div><?php }
}
