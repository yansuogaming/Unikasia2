<?php
/* Smarty version 3.1.38, created on 2024-04-16 14:37:58
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/ajOpenSyncTourtoTMS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661e2ad6365132_27773630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b193437e75c764475b606cbcbf34d31a4ef136b' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/ajOpenSyncTourtoTMS.tpl',
      1 => 1699004501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661e2ad6365132_27773630 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/pretty-checkbox.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" rel="stylesheet" />
<div class="headPop">
	<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('syncTourAPItoTMS');?>
</h3>
	<a href="javscript:void(0);" class="close_pop closeEv"></a>
</div>
<div class="modal-body mt-40">
	<span class="help-block">Chọn tour cần đồng bộ</span>
	<div class="form-group form-row">

		<div class="col-xs-12 col-md-8">
			<div class="custom-search-input">
				<input class="form-control input-lg mb-2 iso_search_field" toClass="trTourToTMS" name="keysearch" id="keysearch" maxlength="255" charset="UTF-8" lang="<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
" placeholder="Nhập từ khóa để tìm kiếm" />
				<span class="loading hidden"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('circle-o-notch fa-spin fa-2x fa-fw');?>
</span>
			</div>
			<span class="help-block">Gợi ý: Tên, mã Tour...</span>
		</div>
	</div>
	<div holder-results class="js_scroller holder_tour_to_tms" data-slimScroll-height="450px">
		<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->loadingMessage();?>

	</div>
</div>
<div class="modal-footer">
	<a href="javascript:void(0)" class="btn btn-success syncTourToTMS"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sync');?>
<i class="fa fa-share ml-2" aria-hidden="true"></i></a>
</div><?php }
}
