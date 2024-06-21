<?php
/* Smarty version 3.1.38, created on 2024-04-11 09:30:58
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_related_tours.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66174b6230af92_67609761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb05e67c010c99ab321055ff119abc96124070cc' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_tour_related_tours.tpl',
      1 => 1701163805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66174b6230af92_67609761 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="row d-flex full-height">
		<div class="col-md-9">
			<div class="fill_data_box">
				<h3 class="title_box mb05"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Related Tours');?>

				<?php $_smarty_tpl->_assignInScope('related_tour', 'related_tour');?>
				<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
				<button data-key="<?php echo $_smarty_tpl->tpl_vars['related_tour']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Related Tours');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
				<?php }?>
				</h3>
				<p class="intro_box mb40"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('infotourextension');?>
</p>
				<div class="form_option_tour">
					<div class="inpt_tour">
						<div class="filterbox border_0">
							<div class="wrap">
								<div class="searchbox searchbox_new">
									<input id="searchkey" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('searchtour');?>
" type="text" class="text" style="width:300px" />
									<div class="autosugget" id="autosugget">
										<ul class="HTML_sugget"></ul>
										<div class="clearfix"></div>
										<a class="close_Div"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('close');?>
</a>
									</div>
								</div>
							</div>
						</div>
						<div class="hastable" style="margin-bottom:10px">
							<table class="tbl-grid full-width table-striped table_responsive" cellspacing="0">
								<thead><tr>
									<th class="gridheader boder_top_none" width="50px"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
									<th class="gridheader name_responsive text-left boder_top_none"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameoftrips');?>
</strong></th>
									<th class="gridheader text-left hiden_responsive boder_top_none"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('duration');?>
</strong></th>
									<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCat_Tours')) {?>
									<th class="gridheader text-left hiden_responsive boder_top_none" width="200px">
										<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('travelstyles');?>
</strong></th>
									<?php }?>
									<th class="gridheader hiden_responsive boder_top_none" width="50px"></th>
								</tr></thead>
								<tbody id="tblTourExtension"></tbody>
							</table>
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
					<p class="mb0"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['related_tour']->value));?>
</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		$("#searchkey").on('keyup', function(e) {
			e.preventDefault();
			var $_this = $(this),
				$_val = $_this.val();
			if ($.trim($_val)){
				clearTimeout(aj_search);
				search_tour();
			} else {
				$("#autosugget").stop(false, true).slideUp();
			}
		});
		loadTourExtension(tour_id);
	});
<?php echo '</script'; ?>
>
<?php }
}
