<?php
/* Smarty version 3.1.38, created on 2024-04-11 08:11:34
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/member/insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661738c64c5713_73999256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aad3ad96a1d50b5ec361db8ea003d2c6c265947a' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/member/insert.tpl',
      1 => 1676545958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661738c64c5713_73999256 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/module.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
">
<div class="box_form_insert_tour_new">
	<div class="box_info_tour_top box_top_opt_set">
		<div class="info_tour">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/?mod=member" class="back_list" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('member_list');?>
"><i class="fa fa-angle-left"></i></a>
			 <img class="image_nav_tour isoman_show_image" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" src="<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getImageAvatar($_smarty_tpl->tpl_vars['pvalTable']->value,80,59) != '') {
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImageAvatar($_smarty_tpl->tpl_vars['pvalTable']->value,80,59);
} else {
echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/member.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['full_name'];?>
" width="80" height="59">
			<div class="body_tour">
				<h3 class="table-title" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['full_name'];?>
</h3>
				<p class="p_tripcode">
					<a class="go_overview" href="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/admin/member/insert/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/overview"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Go to overview');?>
</a></span> 
				</p>
			</div>
		</div>
		<div class="info_button">
			<div class="toggle_opt btn_online action_tour">
				<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] != 1) {?>
				<a class="online_tour private_tour" data-clstable="Profile" data-pkey="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->pkey;?>
" data-val="0" data-sourse_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-text_last="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
</a>
				<?php } else { ?>
				<a class="online_tour" data-clstable="Profile" data-pkey="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->pkey;?>
" data-val="1" data-sourse_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-text_last="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Private');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Public');?>
</a>
				<?php }?>
			</div>
			<div class="action_tour btn_delete" id="is_delete_tour">
				<a class="btn_preview_tour delete_tour_ex" type_btn="delete" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['full_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</a>
			</div>
		</div>

	</div>
	<div class="container-fluid bg_fff" style="padding-top: 0;padding-bottom: 0;">
		<div class="box_content_page">
			<div class="row d-flex flex-wrap">
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 box_left_opt_set">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_step_member');?>

					
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
/member/jquery.member.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
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
