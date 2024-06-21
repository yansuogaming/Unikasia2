<?php
/* Smarty version 3.1.38, created on 2024-05-06 09:36:01
  from '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66384211cefed3_03893254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e7cd8a7dfa0aedd394efff66f1e6ee71f58d8f1' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/index.tpl',
      1 => 1714822323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66384211cefed3_03893254 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['act_image']->value == 'act_image' || $_smarty_tpl->tpl_vars['mod']->value == 'editor' || $_smarty_tpl->tpl_vars['act']->value == 'license') {?>
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getModule($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value);?>

<?php } elseif ($_smarty_tpl->tpl_vars['act']->value == 'print') {?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<title>isoCMS Administrator</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name='robots' content='noindex,nofollow' />
		<!-- Style -->
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/print.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/fonts.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<!-- Script-->
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-1.9.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/ui/jquery-ui-1.11.2.custom.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-migrate-1.4.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>		
	</head>
	<body>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getModule($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value);?>

	</body>
	</html>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['mod']->value != 'login') {?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html ng-app="myapp" xmlns="http://www.w3.org/1999/xhtml"><head>
		<title>isoCMS Administrator</title>
		<!-- META TAG -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name='robots' content='noindex,nofollow' />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="//www.vietiso.com/favicon.ico" type="image/x-icon" />
		
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == "ticket") {?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/bootstrap4.5.2/bootstrap.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="screen">
		<?php } else { ?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/bootstrap/css/bootstrap.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="screen">
		<?php }?>
<!--		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/datepicker/bootstrap-datetimepicker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="screen">-->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/ui/jquery-ui-1.8.18.custom.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/dataTable/dataTables.jqueryui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/alertify/alertify.core.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/utilities.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/switchbutton/ui.switchbutton.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all"> -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/select2/select2.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/chosen.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/animate.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/font-awesome.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/iso.core.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">-->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/layout.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/admin.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
        <?php if ($_smarty_tpl->tpl_vars['mod']->value == "ticket") {?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/ticket.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
        <?php }?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/jquery-confirm.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<?php if ($_smarty_tpl->tpl_vars['use_browser']->value == 'Chrome') {?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/chrome.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all"><?php }?>
		<!-- Scipt CSS File -->
		<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getScript($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value,'css');?>

		<!-- End Scipt CSS File -->
		<!--Style-->
		<?php if (1 == 1) {?>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-1.9.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/ui/jquery-ui-1.11.2.custom.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-migrate-1.4.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/alertify/alertify.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.form.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.validate.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.price_format.1.8.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/switchbutton/jquery.switchbutton.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php } else { ?>
		
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/iso.core.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php }?>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/admin.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php if ($_smarty_tpl->tpl_vars['mod']->value != "ticket") {?>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/bootstrap/js/bootstrap.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php }?>
		<?php echo '<script'; ?>
 type="text/javascript">var $_document = $(document), $Core = {};<?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('var_javascript');?>

		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/store.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/chosen.jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/select2/select2.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_TINYMCE']->value;?>
/tinymce.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/isoTextArea.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/ticket.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.slimscroll.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		
		<!-- Script Language -->
		<?php echo $_smarty_tpl->tpl_vars['scriptlang']->value;?>

		<!-- End Language -->
		
		<?php echo '<script'; ?>
 type="text/javascript">
			$.datepicker.regional['vi'] = {
				closeText: 'Đóng',
				prevText: '&#x3c;Trước',
				nextText: 'Tiếp&#x3e;',
				currentText: 'Hôm nay',
				monthNames: ['Tháng Một', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu',
				'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Mười Hai'],
				monthNamesShort: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',
					'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
				dayNames: ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'],
				dayNamesShort: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
				dayNamesMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
				weekHeader: 'Tu',
				dateFormat: 'mm/dd/yy',
				firstDay: 0,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: ''
			};
			$.datepicker.setDefaults($.datepicker.regional['vi']);
			$(function(){
				if($(".validate-form").length){
					$(".validate-form").each(function(_i, _elem){
						 $(_elem).validate();
					});
				}
				$(document).on('click', '.ClickSiteHelp', function(ev){
					$.popup.show('http://docs.vietiso.com/website',{wposition:'left',wwidth:560,wheight: 700});
				});
				if(mod!='login'){
					loginAgain();
				}
			});
			function loginAgain(){
				$.post(path_ajax_script+"/?mod=home&act=loginAgain", {}, function(){
					setTimeout(() => {
						loginAgain();
					}, 300000);
				}); 
			}
		<?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.core.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == "booking" || $_smarty_tpl->tpl_vars['mod']->value == "ticket") {?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-easyui/themes/gray/easyui.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/toggle-switch.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="screen">
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery-easyui/jquery.easyui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
			<?php if ($_smarty_tpl->tpl_vars['mod']->value == "booking") {?>
			<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.booking.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
			<?php }?>
		<?php }?>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.smartTab.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.promotion.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.global.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<!-- ISOMAN -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/inc/isoman/css/skin.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/inc/isoman/js/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/inc/isoman/js/man.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['API_GOOGLE_MAPS']->value;?>
&libraries=places"><?php echo '</script'; ?>
>
		<?php if ($_smarty_tpl->tpl_vars['mod']->value != 'home') {?>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/dataTable/jquery.dataTables.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/dataTable/dataTables.jqueryui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php }?>
		<!-- Tag -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/bootstrap-tagsinput/src/bootstrap-tagsinput.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" media="all">
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/bootstrap-tagsinput/src/bootstrap-tagsinput.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php if ($_smarty_tpl->tpl_vars['mod']->value == "ticket") {?>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/bootstrap4.5.2/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php }?>
		<!-- End -->
	</head>
	<body class="ltr" id="wrapper">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getHeader($_smarty_tpl->tpl_vars['mod']->value,'_header');?>

		<?php echo $_smarty_tpl->tpl_vars['core']->value->getModule($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value);?>

		<?php echo $_smarty_tpl->tpl_vars['core']->value->getHeader($_smarty_tpl->tpl_vars['mod']->value,'_footer');?>

		<!-- Script JS File -->
		<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getScript($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value,'js');?>

		<!-- End Script -->
		<div id="modal" class="modal fade" style="z-index:5">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="loader pt10 pb10"></div>
					</div>
				</div>
			</div>
		</div>
		
		<?php echo '<script'; ?>
 id="modal-message" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title">{{title}}</h5></div><div class="modal-body"><p>{{message}}</p></div><?php echo '</script'; ?>
>
		
		
		<?php echo '<script'; ?>
 id="modal-success" type="text/template"><div class="modal-body text-center"><div class="big-icon success"><i class="fa fa-thumbs-o-up fa-3x"></i></div><h4>{{title}}</h4><p class="mt20">{{message}}</p></div><?php echo '</script'; ?>
>
		
		
		<?php echo '<script'; ?>
 id="modal-error" type="text/template"><div class="modal-body text-center"><div class="big-icon error"><i class="fa fa-times fa-3x"></i></div><h4>{{title}}</h4><p class="mt20">{{message}}</p></div><?php echo '</script'; ?>
>
		
		
		<?php echo '<script'; ?>
 id="modal-confirm" type="text/template"><div class="modal-header"><h5 class="modal-title">{{title}}</h5></div><div class="modal-body"><p>{{message}}</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Trở lại</button><button type="button" class="btn btn-primary" id="modal-confirm-ok">Xác Nhận</button></div><?php echo '</script'; ?>
>
		
	</body>
	</html>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getModule($_smarty_tpl->tpl_vars['mod']->value,$_smarty_tpl->tpl_vars['act']->value);?>

	<?php }
}
}
}
