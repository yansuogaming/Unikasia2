<?php
/* Smarty version 3.1.38, created on 2023-10-27 14:24:27
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_653b65ab446f89_44251701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '968f297c49e9c80f805037b7ba2185298c9bf35d' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/_header.tpl',
      1 => 1695869968,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 20,
),true)) {
function content_653b65ab446f89_44251701 (Smarty_Internal_Template $_smarty_tpl) {
?><img style="display: none" src="https://isocms.com/setCookie.php?v=1698391466"/> <header id="header" class="header"> <div class="logo" id="logo"> <a href="https://isocms.com/admin" title="isoCMS"> <img height="43px" src="https://isocms.com/admin/isocms/templates/default/skin/images/logo_vietisonew.png" alt="isoCMS" /> </a> </div> <a href="javascript:void(0);" class="sidebar-collapse-click" id="sidebar-collapse-click"> <i class="fa fa-bars" aria-hidden="true"></i> </a> <div class="btn_create_booking"> <a href="https://isocms.com/admin/index.php?mod=booking" title="Tạo booking"> <i class="fa fa-cart-plus " aria-hidden="true"></i> Tạo booking
		</a> </div> <ul class="menu_header"> <li><a href="https://isocms.com/admin">Trang chủ quản trị</a></li> <li class="s">|</li> <li><a href="https://isocms.com" target="_blank">Trang khách hàng</a></li> <li class="s">|</li> <li><a class="ajManageSystemNote">Ghi chú</a></li> <li class="s">|</li> <li><a class="ClickSiteHelp hidden767" href="javascript:void(0);" mod_page="ticket" act_page="home" area_page="">Trợ giúp</a></li> </ul> <div class="header_right"> <div class="lang_menu"> <a class="dropdown-toggle color_333" data-toggle="dropdown"> <i class="flag flag-20 flag-20-vn"></i> vn <i class="fa fa-angle-down" aria-hidden="true"></i> </a> <ul class="dropdown-menu" role="menu"> <li><a title="cn" href="https://isocms.com/admin/index.php?lang=cn"> <i class="flag flag-20 flag-20-cn"></i> Chinese</span> </a> </li> <li><a title="kr" href="https://isocms.com/admin/index.php?lang=kr"> <i class="flag flag-20 flag-20-kr"></i> Korea</span> </a> </li> <li><a title="fr" href="https://isocms.com/admin/index.php?lang=fr"> <i class="flag flag-20 flag-20-fr"></i> French</span> </a> </li> <li><a title="es" href="https://isocms.com/admin/index.php?lang=es"> <i class="flag flag-20 flag-20-es"></i> Spanish</span> </a> </li> <li><a title="en" href="https://isocms.com/admin/index.php?lang=en"> <i class="flag flag-20 flag-20-en"></i> English</span> </a> </li> <li><a title="ru" href="https://isocms.com/admin/index.php?lang=ru"> <i class="flag flag-20 flag-20-ru"></i> Rusian</span> </a> </li> </ul> </div> <div class="user_menu"> <div class="user_right dropdown"> <div class="user_name"> <a class="dropdown-toggle color_333" data-toggle="dropdown"> <span>Nguyen Ngoc Huy</span> <span class="ip">171.224.25.28</span> <i class="fa fa-angle-down" aria-hidden="true"></i> </a> <ul class="dropdown-menu" role="menu"> <li><a href="https://isocms.com/admin/index.php?mod=user&act=edit&user_id=MTAzLVZpZXRJU08=">Tài khoản của tôi</a></li> <li><a href="https://isocms.com/admin/?mod=login&act=logout">Thoát</a></li> </ul> </div> </div> </div> </div> </header> <script type="text/javascript">
		$(function(){
			var $ok = 1;
			if(mod == 'tour_exhautive'||mod == 'combo'||mod == 'hotel' || mod == 'cruise' || mod == 'blog' || mod == 'tour' || mod == 'property'){
				if(!$('#sidebar').hasClass('menu-min')){
					$('#sidebar').addClass('menu-min');
					$('#sidebar-collapse-click').addClass('closed');
					$.post(path_ajax_script+'/index.php?mod=home&act=ajOpenSidebar',{'val': 0},function(html){
						console.log(html);
					});
				}
			}else{
				if($('#sidebar').hasClass('menu-min')){
					$('#sidebar').removeClass('menu-min');
					$('#sidebar-collapse-click').removeClass('closed');
					$.post(path_ajax_script+'/index.php?mod=home&act=ajOpenSidebar',{'val': $ok},function(html){
						console.log(html);
					});
				}
			}
			$('#sidebar-collapse-click').click(function(ev){
				ev.preventDefault();
				var $_this = $(this),
					$_sidebar = $('#'+'sidebar');
				if(!$_sidebar.hasClass('menu-min')){
					$ok = 0;
					$_sidebar.addClass('menu-min');
					$_this.addClass('closed');
				}else{
					$ok = 1;
					$_sidebar.removeClass('menu-min');
					$_this.removeClass('closed');
				}
				$.post(path_ajax_script+'/index.php?mod=home&act=ajOpenSidebar',{
					'val': $ok
				}, function(html){
					// Some code
				});
				return false;
			});
			$(window).on('resize', function(){
				var _www = $(window).width(),
					_sidebar = $('#'+'sidebar');
				if(_www < 576){ // Extra small
					if(!_sidebar.hasClass('menu-min')){
						_sidebar.addClass('menu-min');
						$('#sidebar-collapse-click').addClass('closed');
					}
				}
			});
		});
	</script> <div id="wrapper" class="wrapper"> <div id="page-body" class="page-body"> <div class="sidebar" id="sidebar"> <div id="sidebar_elements"> <script type="text/javascript">
	$(function(){
		/*$.lockfixed("#sidebar_elements", {offset: {top:0, bottom:61}});*/
		$(document).on('click', '.dropdown-toggle', function(ev){
			var $_this = $(this);
			var $_sub = $_this.parent().find('.submenu');
			if($_sub.is(':visible')){
				$_sub.stop(false,true).slideUp();
				$_this.find('.arrow').removeClass('fa-angle-up').addClass('fa-angle-down');
				$_this.parent().removeClass('active');
			}else{
				$('.submenu:visible').stop(false,true).slideUp();
				$('.arrow').removeClass('fa-angle-up').addClass('fa-angle-down');
				$_sub.stop(false,true).slideDown();
				$_this.find('.arrow').removeClass('fa-angle-down').addClass('fa-angle-up');
				$_this.parent().addClass('active');
				
			}
			return false;
		});
		var $ww = $(window).width(),
			stickyOffset = $('#sidebar').offset().top;
		$(window).scroll(function(){
			var sticky = $('#sidebar');
			scroll = $(window).scrollTop();
			if (scroll >= stickyOffset || scroll >= 35){
				sticky.addClass('fixed');
			} else{
				sticky.removeClass('fixed');
			}
		});
	});
</script> <ul id="sidebar-nav" class="nav nav-list"> <li class=""> <a class="nav-header" href="https://isocms.com/admin" title="isoCMS"> <div class="ico"><i class="fa fa-home"></i></div> <span class="menu-text bold">Trang chủ quản trị</span> </a> </li> <li class="active" package_id="4"> <a data-toggle="ripple" href="javascript:void(0);" class="nav-header dropdown-toggle "> <div class="ico"><i class="fa fa-blind"></i></div> <span class="menu-text"> Sản phẩm/Dịch vụ</span> <b class="arrow fa fa-angle-down"></b> </a> <div class="submenu" style="display:block;"> <ul class="nav-list sublist"> <li class=""> <a data-toggle="ripple" title="Tours" href="https://isocms.com/admin/?mod=tour_exhautive"><span><i class="fa fa-angle-right"></i> Tours </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Promo Codes" href="https://isocms.com/admin/?mod=discount"><span><i class="fa fa-angle-right"></i> Promo Codes <span class="badge s_pro label-warning">Pro</span></span> </a> </li> <li class=""> <a data-toggle="ripple" title="Du thuyền" href="https://isocms.com/admin/?mod=cruise"><span><i class="fa fa-angle-right"></i> Du thuyền <span class="badge s_pro label-warning">Pro</span></span> </a> </li> <li class=""> <a data-toggle="ripple" title="Khách sạn" href="https://isocms.com/admin/?mod=hotel"><span><i class="fa fa-angle-right"></i> Khách sạn <span class="badge s_pro label-warning">Pro</span></span> </a> </li> <li class=""> <a data-toggle="ripple" title="Vouchers" href="https://isocms.com/admin/?mod=voucher"><span><i class="fa fa-angle-right"></i> Vouchers <span class="badge s_pro label-warning">Pro</span></span> </a> </li> <li class=""> <a data-toggle="ripple" title="Reviews Tour" href="https://isocms.com/admin/?mod=reviews&amp;type=tour"><span><i class="fa fa-angle-right"></i> Reviews Tour </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Đánh giá cruise" href="https://isocms.com/admin/?mod=reviews&amp;type=cruise"><span><i class="fa fa-angle-right"></i> Đánh giá cruise </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Review Voucher" href="https://isocms.com/admin/?mod=reviews&amp;type=voucher"><span><i class="fa fa-angle-right"></i> Review Voucher </span> </a> </li> </ul> </div> </li> <li class="" package_id="4"> <a data-toggle="ripple" class="nav-header" href="https://isocms.com/admin/?mod=booking&amp;act=list_booking"> <div class="ico"><i class="fa fa-credit-card"></i></div> <span class="menu-text"> Order/Booking</span> </a> <div class="submenu" style="display:none;"> <ul class="nav-list sublist"> </ul> </div> </li> <li class="" package_id="4"> <a data-toggle="ripple" class="nav-header" href="https://isocms.com/admin/?mod=member"> <div class="ico"><i class="fa fa-user-o"></i></div> <span class="menu-text"> Khách hàng</span> </a> <div class="submenu" style="display:none;"> <ul class="nav-list sublist"> </ul> </div> </li> <li class="" package_id="4"> <a data-toggle="ripple" href="javascript:void(0);" class="nav-header dropdown-toggle "> <div class="ico"><i class="fa fa-comments"></i></div> <span class="menu-text"> Điểm đến</span> <b class="arrow fa fa-angle-down"></b> </a> <div class="submenu" style="display:none;"> <ul class="nav-list sublist"> <li class=""> <a data-toggle="ripple" title="Quốc gia" href="https://isocms.com/admin/?mod=country"><span><i class="fa fa-angle-right"></i> Quốc gia </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Vùng miền" href="https://isocms.com/admin/?mod=region"><span><i class="fa fa-angle-right"></i> Vùng miền </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Thành phố" href="https://isocms.com/admin/?mod=city"><span><i class="fa fa-angle-right"></i> Thành phố </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Cẩm nang du lịch" href="https://isocms.com/admin/?mod=guide"><span><i class="fa fa-angle-right"></i> Cẩm nang du lịch </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Top điểm đến" href="https://isocms.com/admin/?mod=country&amp;act=store&amp;type=VE9QLVZpZXRJU08="><span><i class="fa fa-angle-right"></i> Top điểm đến </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Điểm khởi hành" href="https://isocms.com/admin/?mod=country&amp;act=store&amp;type=REVQQVJUVVJFUE9JTlQtVmlldElTTw=="><span><i class="fa fa-angle-right"></i> Điểm khởi hành </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Chọn danh mục" href="https://isocms.com/admin/?mod=guide&amp;act=cat"><span><i class="fa fa-angle-right"></i> Chọn danh mục </span> </a> </li> <li class=""> <a data-toggle="ripple" title="D.mục dulịch theo q.gia" href="https://isocms.com/admin/?mod=guide&amp;act=notitle"><span><i class="fa fa-angle-right"></i> D.mục dulịch theo q.gia </span> </a> </li> </ul> </div> </li> <li class="" package_id="4"> <a data-toggle="ripple" class="nav-header" href="https://isocms.com/admin/?mod=tags"> <div class="ico"><i class="fa fa-list"></i></div> <span class="menu-text"> Tags</span> </a> <div class="submenu" style="display:none;"> <ul class="nav-list sublist"> </ul> </div> </li> <li class="" package_id="4"> <a data-toggle="ripple" href="javascript:void(0);" class="nav-header dropdown-toggle "> <div class="ico"><i class="fa fa-comments"></i></div> <span class="menu-text"> Blog</span> <b class="arrow fa fa-angle-down"></b> </a> <div class="submenu" style="display:none;"> <ul class="nav-list sublist"> <li class=""> <a data-toggle="ripple" title="Danh sách bài blog" href="https://isocms.com/admin/?mod=blog"><span><i class="fa fa-angle-right"></i> Danh sách bài blog </span> </a> </li> </ul> </div> </li> <li class="" package_id="4"> <a data-toggle="ripple" href="javascript:void(0);" class="nav-header dropdown-toggle "> <div class="ico"><i class="fa fa-cogs"></i></div> <span class="menu-text"> Cài đặt</span> <b class="arrow fa fa-angle-down"></b> </a> <div class="submenu" style="display:none;"> <ul class="nav-list sublist"> <li class=""> <a data-toggle="ripple" title="Hồ sơ Công ty" href="https://isocms.com/admin/?mod=setting&amp;act=profile"><span><i class="fa fa-angle-right"></i> Hồ sơ Công ty </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Ngôn ngữ trang chính" href="https://isocms.com/admin/?mod=lang_front"><span><i class="fa fa-angle-right"></i> Ngôn ngữ trang chính </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Ngôn ngữ Admin" href="https://isocms.com/admin/?mod=lang"><span><i class="fa fa-angle-right"></i> Ngôn ngữ Admin </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Mẫu email" href="https://isocms.com/admin/?mod=email_template"><span><i class="fa fa-angle-right"></i> Mẫu email </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Mail Config" href="https://isocms.com/admin/?mod=setting&amp;act=mailconfig"><span><i class="fa fa-angle-right"></i> Mail Config </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Công cụ SEO" href="https://isocms.com/admin/?mod=meta"><span><i class="fa fa-angle-right"></i> Công cụ SEO </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Xác nhận" href="https://isocms.com/admin/?mod=setting&amp;act=message"><span><i class="fa fa-angle-right"></i> Xác nhận </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Cổng thanh toán" href="https://isocms.com/admin/?mod=setting&amp;act=pay"><span><i class="fa fa-angle-right"></i> Cổng thanh toán </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Billing History " href="https://isocms.com/admin/?mod=billing"><span><i class="fa fa-angle-right"></i> Billing History  </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Quản trị viên" href="https://isocms.com/admin/?mod=user"><span><i class="fa fa-angle-right"></i> Quản trị viên </span> </a> </li> <li class=""> <a data-toggle="ripple" title="Vai trò quản trị" href="https://isocms.com/admin/?mod=usergroup"><span><i class="fa fa-angle-right"></i> Vai trò quản trị </span> </a> </li> </ul> </div> </li> </ul> </div> </div> <div id="page-content" class="page-content"><?php }
}
