<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:26:49
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661499599492e9_20252275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5858dc4e369d3bce8acea95504cfe20f8fea9fb' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/edit.tpl',
      1 => 1710751455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661499599492e9_20252275 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar/fullcalendar.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar/moment.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar/fullcalendar.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<div class="box_form_insert_tour_new">
	<div class="box_info_tour_top box_top_opt_set">
		<div class="info_tour">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/?mod=tour_exhautive" class="back_list" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('tour_list');?>
"><i class="fa fa-angle-left"></i></a>
			 <img class="image_nav_tour isoman_show_image" src="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getImage($_smarty_tpl->tpl_vars['pvalTable']->value,80,59);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" width="80" height="59">
			<div class="body_tour">
				<h3 class="tour-title" tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
</h3>
				<p class="p_tripcode">
					<a class="go_overview" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Go to overview');?>
</a> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trip code');?>
: <span class="trip_code" tour_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTripCode($_smarty_tpl->tpl_vars['pvalTable']->value);?>
</span></span> 
				</p>
			</div>
		</div>
		<div class="info_button">
			<div class="toggle_opt btn_online action_tour">
				<div class="box_status_switch" >
					<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] != 1) {?>
						<span class="txt_status_switch private"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</span>
					<?php } else { ?>
						<span class="txt_status_switch public"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</span>
					<?php }?>
					<label class="switch_public switch" data-clstable="Tour" data-pkey="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->pkey;?>
" data-sourse_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
">
					  <input type="checkbox" name="is_online" value="1" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] == 1) {?>checked<?php }?>>
					  <span class="slider round"></span>
					</label>
				</div>
			</div>
			<div class="action_tour btn_preview">
				<a class="btn_preview_tour preview_tour_ex" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_trash'] == 1) {?>style="pointer-events: none;color: rgb(204, 204, 204);border-color: rgb(204, 204, 204);background-color: rgb(255, 255, 255);cursor: not-allowed;"<?php }?> data-href="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getLink($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Preview');?>
</a>
			</div>
			<div class="action_tour btn_delete" id="is_delete_tour">
				<a class="btn_preview_tour delete_tour_ex" type_btn="delete" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['clsTour']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</a>
			</div>
		</div>
	</div>
	<div class="container-fluid bg_fff" style="padding-top: 0;padding-bottom: 0;">
		<div class="box_content_page">
			<div class="row flex-row">
				<div class="col-sm-2 col-md-2 col-lg-2 box_left_opt_set">
					<div class="list_work_step_insert">
						<div class="panel-group" id="accordion">
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_menu_tour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<?php $_smarty_tpl->_assignInScope('icon', $_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icon']);?>
								<?php $_smarty_tpl->_assignInScope('cat_menu', $_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cat_menu']);?>
								<?php $_smarty_tpl->_assignInScope('child_cat_menu', $_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['child']);?>
								<?php if ($_smarty_tpl->tpl_vars['cat_menu']->value == 'promotion') {?>
									<?php if (_IS_PROMOTION == 1) {?>
									<div class="panel panel-default panel-sidebar">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $_smarty_tpl->tpl_vars['cat_menu']->value;?>
_tg" id="<?php echo $_smarty_tpl->tpl_vars['cat_menu']->value;?>
_tg_a" <?php if ($_smarty_tpl->tpl_vars['cat_run']->value != $_smarty_tpl->tpl_vars['cat_menu']->value) {
if ($_smarty_tpl->tpl_vars['run_ajax']->value != 'overview') {?> class="collapsed"<?php }
}?>>
												<h4 class="panel-title"><i class="ico ico-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['cat_menu']->value);?>
 </h4>
											</a>
										</div>
										<div id="<?php echo $_smarty_tpl->tpl_vars['cat_menu']->value;?>
_tg" class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['cat_run']->value == $_smarty_tpl->tpl_vars['cat_menu']->value || $_smarty_tpl->tpl_vars['run_ajax']->value == 'overview') {?>in<?php }?>">
											<div class="panel-body">
												<ul class="stepbar-list">
													<?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_cat_menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
													<li><a class="load-block" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cat_menu']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
" id="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>
</a></li>
													<?php
}
}
?>
												</ul>
											</div>
										</div>
									</div>
									<?php }?>
								<?php } else { ?>
									<div class="panel panel-default panel-sidebar">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $_smarty_tpl->tpl_vars['cat_menu']->value;?>
_tg" id="<?php echo $_smarty_tpl->tpl_vars['cat_menu']->value;?>
_tg_a" <?php if ($_smarty_tpl->tpl_vars['cat_run']->value != $_smarty_tpl->tpl_vars['cat_menu']->value) {?>class="collapsed" <?php }?> >
												<h4 class="panel-title"><i class="ico ico-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i>
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['cat_menu']->value);?>

												</h4>
											</a>
										</div>
										<div id="<?php echo $_smarty_tpl->tpl_vars['cat_menu']->value;?>
_tg" class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['cat_run']->value == $_smarty_tpl->tpl_vars['cat_menu']->value) {?>in<?php }?>">
											<div class="panel-body">
												<ul class="stepbar-list">
												<?php
$__section_j_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_cat_menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_2_total = $__section_j_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_2_total !== 0) {
for ($__section_j_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_2_iteration <= $__section_j_2_total; $__section_j_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
													<li <?php echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
><a class="load-block" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/tour/edit/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cat_menu']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
" id="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]);?>

													<?php if (in_array($_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)],$_smarty_tpl->tpl_vars['list_sync']->value) && $_smarty_tpl->tpl_vars['oneItem']->value['yield_id']) {?>
														<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('compress');?>

													<?php }?>
													</a></li>
												<?php
}
}
?>
												</ul>
											</div>
										</div>
									</div>
								<?php }?>
							<?php
}
}
?>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-10 col-lg-10">
					<div class="content_box_insert_tour">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/cropper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar/fullcalendar.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" media="all" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/jquery.cropper.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/html2canvas.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/cropper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar/fullcalendar.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<!-- Map -->
<link href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/mapbox/mapbox.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" rel="stylesheet" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/mapbox/mapbox.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/mapbox/leaflet-heat.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/mapbox/leaflet.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" />
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/mapbox/leaflet-image.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var path_ajax_datepicker = '<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/vietiso_datepicker/js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
';
    var aj_search = 0;
    var tour_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
    var $tour_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
    var tour_group_id = '<?php echo $_smarty_tpl->tpl_vars['tour_group_id']->value;?>
';
    var $tour_type_id = '<?php echo $_smarty_tpl->tpl_vars['tour_type_id']->value;?>
';
    var $listcatID = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['list_cat_id'];?>
';
    var $tourgroup_ID = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['tour_group_id'];?>
';
    var country = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('country');?>
";
    var regions = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('regions');?>
";
    var cities = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cities');?>
";
    var area = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Area');?>
";
    var attractions = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('attractions');?>
";
    var continents = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('continents');?>
";
    var required_country = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('required_country');?>
";
    var identicaltour = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Error. Please enter a different name and try again tour');?>
";
    var existedtour = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This Tour has existed. Please enter a different name and try again tour');?>
";
    var required_client = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This tour is not a client type and age choose to participate. Please choose in the table above');?>
";
    var slug = "<?php echo $_smarty_tpl->tpl_vars['run_ajax']->value;?>
";
    var exist_success_tour_status = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('exist_success_tour_status');?>
";
    var exist_success_tour_trash = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('exist_success_tour_trash');?>
";
    var exist_success_tour_delete = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('exist_success_tour_delete');?>
";
    var exist_success_tour_restore = "<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('exist_success_tour_restore');?>
";

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	$(function () {
		$(window).scroll(function() {
			var sticky = $('.box_top_opt_set'),
				scroll = $(window).scrollTop();
			if (scroll >= 40) {
				sticky.addClass('fixed');
			}else {
				sticky.removeClass('fixed');
			}
		});
	});
	var slug = '<?php echo $_smarty_tpl->tpl_vars['run_ajax']->value;?>
';
	function content() {
		return tinyMCE.editors[$('.textarea_intro_editor_simple').attr('id')].getContent();
	}
	
<?php echo '</script'; ?>
>
<?php }
}
