<?php
/* Smarty version 3.1.38, created on 2024-04-24 09:01:44
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/guide/insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_662868082a9d40_05994091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'facbd5677571d2bb38de1e104b97718c587eddec' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/guide/insert.tpl',
      1 => 1709889680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662868082a9d40_05994091 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/module.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
">
<div class="box_form_insert_tour_new">
	<div class="box_info_tour_top box_top_opt_set">
		<div class="info_tour">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/?mod=guide" class="back_list" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('guide_list');?>
"><i class="fa fa-angle-left"></i></a>
			 <img class="image_nav_tour isoman_show_image" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImage($_smarty_tpl->tpl_vars['pvalTable']->value,80,59);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" width="80" height="59">
			<div class="body_tour">
				<h3 class="table-title" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
</h3>
				<p class="p_tripcode">
					<a class="go_overview" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/guide/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Go to overview');?>
</a></span> 
				</p>
			</div>
		</div>
		<div class="info_button">
			<div class="toggle_opt btn_online action_tour">
				<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] != 1) {?>
				<a class="online_tour private_tour" data-clstable="Country" data-pkey="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->pkey;?>
" data-val="0" data-sourse_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-text_last="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</a>
				<?php } else { ?>
				<a class="online_tour" data-clstable="Country" data-pkey="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->pkey;?>
" data-val="1" data-sourse_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-text_last="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</a>
				<?php }?>
			</div>
			<div class="action_tour btn_preview">
				<a class="btn_preview_tour preview_tour_ex" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_trash'] == 1) {?>style="pointer-events: none;color: rgb(204, 204, 204);border-color: rgb(204, 204, 204);background-color: rgb(255, 255, 255);cursor: not-allowed;"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Preview');?>
</a>
			</div>
			<div class="action_tour btn_delete" id="is_delete_tour">
				<a class="btn_preview_tour delete_tour_ex" type_btn="delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->pkey;?>
=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['pvalTable']->value);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</a>
			</div>
		</div>

	</div>
	<div class="container-fluid bg_fff" style="padding-top: 0;padding-bottom: 0;">
		<div class="box_content_page">
			<div class="row d-flex flex-wrap">
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 box_left_opt_set">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_step');?>

					
				</div>
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<div class="main_step_box" id="frmMainStep_<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
">

					</div>
				</div>

			</div>
		</div>
	</div>
</div>




<?php echo '<script'; ?>
 type="text/javascript">
    var table_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
    var panel = '<?php echo $_smarty_tpl->tpl_vars['panel']->value;?>
';
    var currentstep = '<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
';
    var nextstep = '<?php echo $_smarty_tpl->tpl_vars['nextstep']->value;?>
';
    var continent_id = "<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['continent_id'];?>
";
	var country_id = "<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['country_id'];?>
";
    var region_id = "<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['region_id'];?>
";
    var city_id = "<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['city_id'];?>
";
	var map_lo="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['map_lo'];?>
";
	var map_la="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['map_la'];?>
";
	var map_zoom = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['map_zoom'];?>
';
	var map_type = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['map_tyle'];?>
';
	var Select = 'Select';
	var $type = '';
	

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
		loadMainFormStep(table_id,currentstep,nextstep);
	});
	
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/guide/jquery.guide.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/jquery.cropper.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/bootstrap/js/bootstrap.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
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
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/cropper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" media="all" />
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/mapbox/leaflet-image.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php }
}
