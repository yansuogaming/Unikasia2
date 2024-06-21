<?php
/* Smarty version 3.1.38, created on 2023-10-27 14:00:34
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/home/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_653b60120964c3_67308505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f080367bea0b0fc0ac02dfb0e4c9ea2354b8720' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/home/default.tpl',
      1 => 1697085031,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 20,
),true)) {
function content_653b60120964c3_67308505 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dashboard"> <div class="dashboard_header_box"> <div class="title_box"> <h1>Dashboard</h1> <p>Chào mừng bạn đến với hệ thống quản trị dữ liệu website isoCMS.</p> </div> <div class="nav_booking"> <div class="nav_booking_item item1"> <p class="text">Booking đặt dịch vụ</p> <p class="number"><a href="https://isocms.com/admin/index.php?mod=booking&act=booking_tour">31</a></p> </div> <div class="nav_booking_item item2"> <p class="text">Tailor made tour</p> <p class="number"><a href="https://isocms.com/admin/index.php?mod=booking&act=booking_tailor">9</a></p> </div> <div class="nav_booking_item item3"> <p class="text">Liên hệ</p> <p class="number"><a href="https://isocms.com/admin/index.php?mod=feedback">109</a></p> </div> </div> </div> <div class="home_box quick_access_box mb-4"> <h2 class="title_box slideToggle">Truy cập nhanh</h2> <div class="quick_access_list"> <div class="quick_access_item item_add"> <a href="javascript:void(0);" title="Add Task" onClick="manager_tasks(this); return false;"> <i class="fa fa-plus " aria-hidden="true"></i> <span class="text">Add Task</span> </a> </div> </div> </div> <div class="home_box performance_box"> <div class="header_box"> <h2 class="title_box">Performance</h2> <p class="text">Last 7 Days</p> </div> <div class="performance_list"> <div class="performance_item item_down"> <p class="text">Number of Orders</p> <p class="number">8</p> <p class="number2"><i class="fa fa-caret-down" aria-hidden="true"></i> 4</p> </div> <div class="performance_item item_down"> <p class="text">Value of Orders</p> <p class="number">24.721.500 VND</p> <p class="number2"><i class="fa fa-caret-down" aria-hidden="true"></i> 247.080.512 VND</p> </div> <div class="performance_item item_down"> <p class="text">Total Paid</p> <p class="number">18.124.640 VND</p> <p class="number2"><i class="fa fa-caret-down" aria-hidden="true"></i> 137.690.720 VND</p> </div> <div class="performance_item"> <p class="text">Total Refund</p> <p class="number">0</p> <p class="number2">$0.00</p> </div> <div class="performance_item item_down"> <p class="text">Total Discount</p> <p class="number">9.657.900 VND</p> <p class="number2"><i class="fa fa-caret-down" aria-hidden="true"></i> 25.297.700 VND</p> </div> <div class="performance_item item_down"> <p class="text">Balance Owed</p> <p class="number">6.596.860 VND</p> <p class="number2"><i class="fa fa-caret-down" aria-hidden="true"></i> 109.389.792 VND</p> </div> <div class="performance_item item_up"> <p class="text">Direct Sales</p> <p class="number">4.268.580đ</p> <p class="number2"><i class="fa fa-caret-up" aria-hidden="true"></i> 2.125.004đ</p> </div> <div class="performance_item item_up"> <p class="text">Marketplace Sales</p> <p class="number">3.478.500đ</p> <p class="number2"><i class="fa fa-caret-up" aria-hidden="true"></i> 2.125.004đ</p> </div> </div> </div> <div class="chart_booking"> <div class="home_box chart_booking_box"> <div class="top_chart_booking"> <div class="letf_top_chart_booking"> <h2 class="title_box">Chart Booking</h2> <div class="input_year"> <select class="form-control year_chart_booking" name="" id=""> <option value="1970" >1970</option> <option value="1971" >1971</option> <option value="1972" >1972</option> <option value="1973" >1973</option> <option value="1974" >1974</option> <option value="1975" >1975</option> <option value="1976" >1976</option> <option value="1977" >1977</option> <option value="1978" >1978</option> <option value="1979" >1979</option> <option value="1980" >1980</option> <option value="1981" >1981</option> <option value="1982" >1982</option> <option value="1983" >1983</option> <option value="1984" >1984</option> <option value="1985" >1985</option> <option value="1986" >1986</option> <option value="1987" >1987</option> <option value="1988" >1988</option> <option value="1989" >1989</option> <option value="1990" >1990</option> <option value="1991" >1991</option> <option value="1992" >1992</option> <option value="1993" >1993</option> <option value="1994" >1994</option> <option value="1995" >1995</option> <option value="1996" >1996</option> <option value="1997" >1997</option> <option value="1998" >1998</option> <option value="1999" >1999</option> <option value="2000" >2000</option> <option value="2001" >2001</option> <option value="2002" >2002</option> <option value="2003" >2003</option> <option value="2004" >2004</option> <option value="2005" >2005</option> <option value="2006" >2006</option> <option value="2007" >2007</option> <option value="2008" >2008</option> <option value="2009" >2009</option> <option value="2010" >2010</option> <option value="2011" >2011</option> <option value="2012" >2012</option> <option value="2013" >2013</option> <option value="2014" >2014</option> <option value="2015" >2015</option> <option value="2016" >2016</option> <option value="2017" >2017</option> <option value="2018" >2018</option> <option value="2019" >2019</option> <option value="2020" >2020</option> <option value="2021" >2021</option> <option value="2022" >2022</option> <option value="2023" selected>2023</option> </select> </div> </div> <div class="right_chart_booking"> <label class="lbl_checkbox"> <input type="radio" class="check_all" name="booking_cat" value="all" checked="checked"> <span class="checkmark">Tất cả</span> </label> <label class="lbl_checkbox"> <input type="radio" class="check_one" name="booking_cat" value="Tour"> <span class="checkmark">Tour, voucher</span> </label> <label class="lbl_checkbox"> <input type="radio" class="check_one" name="booking_cat" value="Hotel"> <span class="checkmark">Khách sạn</span> </label> <label class="lbl_checkbox"> <input type="radio" class="check_one" name="booking_cat" value="Cruise"> <span class="checkmark">Du thuyền</span> </label> <label class="lbl_checkbox"> <input type="radio" class="check_one" name="booking_cat" value="Tailor"> <span class="checkmark">Tailor made tour</span> </label> </div> </div> <script src="https://isocms.com/admin/isocms/templates/default/skin/js/highchart/highcharts.js?v=1698390033"></script> <script src="https://isocms.com/admin/isocms/templates/default/skin/js/highchart/exporting.js?v=1698390033"></script> <script src="https://isocms.com/admin/isocms/templates/default/skin/js/highchart/export-data.js?v=1698390033"></script> <script src="https://isocms.com/admin/isocms/templates/default/skin/js/highchart/accessibility.js?v=1698390033"></script> <div id="booking_chart"></div> <style>
.datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-top {
    right: auto;
    left: 305px !important;
}
</style> <script>
	$(document).ready(function(){
		fillter_chart('all');
		$('.year_chart_booking').change(function(){
			var cat = $('.right_chart_booking input[type=radio]:checked').val();
			fillter_chart(cat);
		});
		$('.right_chart_booking .checkmark').click(function(){
			var cat = $(this).prev().val();
			fillter_chart(cat);
		});
	});

	
	function fillter_chart(cat){
		var year = $('.year_chart_booking').val();
		
		$.ajax({
			type: "POST",
			data: {year:year,cat:cat},
			dataType:'json',
			async:false,
			url: path_ajax_script+"/index.php?mod=home&act=ajaxChartBooking",
			success: function(json){
				setTimeout(function () {
					var width_booking_chart=$(".performance_box").width() - 438;
					Highcharts.chart('booking_chart', {
						chart: {
							type: 'area',
							 width: width_booking_chart,
						},
						accessibility: {
							description: 'Booking'
						},
						title: {
							text: ''
						},
						subtitle: {
							text: ''
						},
						xAxis: {
							allowDecimals: false,
							labels: {
								formatter: function () {
									return this.value; // clean, unformatted number for year
								}
							},
							accessibility: {
								rangeDescription: 'Range: 1 to 12.'
							}
						},
						yAxis: {
							title: {
								text: ''
							},
							labels: {
								formatter: function () {
									return this.value;
								}
							}
						},
						tooltip: {
							pointFormat: '{series.name} <b>{point.y:,.0f}</b>'
						},
						plotOptions: {
							area: {
								pointStart: 1,
								marker: {
									enabled: false,
									symbol: 'circle',
									states: {
										hover: {
											enabled: false
										}
									}
								}
							}
						},
						series: [{
							name: 'Booking thành công',
							color: 'rgba(116, 174, 118, 1)',
							data: json.itemSuccess,
						}, {
							name: 'Booking đã hủy',
							color: 'rgba(246, 164, 118, 1)',
							data: json.itemFail,
						}],
						legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'bottom',
							symbolRadius: 0 
							
						  },
						exporting: {
							enabled: false
						},
						credits: {
							 enabled: false
						},
					});
					}, 2000);

			},
		});
		
	}

</script> <style>
.highcharts-container{
  width: 100% !important;
}

.highcharts-root{
  width: 100% !important;
}
</style> </div> <div class="ads_travelmaster"> <a href="" title=""><img src="https://isocms.com/admin/isocms/templates/default/skin/images/img_travelmaster.jpg" /></a> </div> </div> <div class="home_box actions_required_box"> <div class="header_box"> <h2 class="title_box">Actions Required</h2> </div> <table class="booking_list_table"> <tbody> <tr> <td class="date_booking"> <p class="text1">Thứ Tư</p> <p class="text2">25.10.2023</p> </td> <td class="customer_booking"> <p class="text1">Tiep</p> <p class="text2">Saturday, 28.10.2023 | Tour du lịch Thái Lan [PHUKET – ĐẢO PHI PHI – VỊNH PHANG NGA]</p> <span class="booking_code">#DTOT-42</span> </td> <td class="pay_booking"> <p class="text1">18.457.200đ</p> <p class="text2">Đã thanh toán</p> </td> </tr> <tr> <td class="date_booking"> <p class="text1">Thứ Tư</p> <p class="text2">25.10.2023</p> </td> <td class="customer_booking"> <p class="text1">Tiep</p> <p class="text2">Sunday, 29.10.2023 | Tour Hà Nội - Mộc Châu 2N1Đ </p> <span class="booking_code">#DTOT-41</span> </td> <td class="pay_booking"> <p class="text1">2.658.600đ</p> <p class="text2">Đã thanh toán</p> </td> </tr> <tr> <td class="date_booking"> <p class="text1">Thứ Hai</p> <p class="text2">23.10.2023</p> </td> <td class="customer_booking"> <p class="text1">Test</p> <p class="text2">25.10.2023 | Tour Hà Nội - Mộc Châu 2N1Đ </p> <span class="booking_code">#DTOT-38</span> </td> <td class="pay_booking"> <p class="text1">1.539.300đ</p> <p class="text2">Đã thanh toán</p> </td> </tr> <tr> <td class="date_booking"> <p class="text1">Thứ Hai</p> <p class="text2">23.10.2023</p> </td> <td class="customer_booking"> <p class="text1">Tiep</p> <p class="text2"></p> <span class="booking_code">#DTOT-37</span> </td> <td class="pay_booking"> <p class="text1">0đ</p> <p class="text2">Đã thanh toán</p> </td> </tr> </tbody> </table> </div> </div> <script type="text/javascript">
	function manager_tasks(){
		$.post(path_ajax_script+'/index.php?mod=home&act=load_quick_access', {
			'holderG' : '_modal'
		}, function(html){
			$Core.popup.open('auto','auto', html, 'add_task');
			loadHtmlQuickAccess();
		});
	}
	function loadHtmlQuickAccess(){
		$.post(path_ajax_script+'/index.php?mod=home&act=load_quick_access', {
			'holderG' : '_list'
		}, function(html){
			$('.quick_access_html').html(html);
		});
	}
	$(function(){
		$_document.on('click', ".remove_item_quick_access,.add_item_quick_access", function(ev) {
			ev.preventDefault();
			var $_this = $(this),
				holderG = $_this.data('tp'),
				adminbutton_id = $_this.data('adminbutton_id');
			$.ajax({  
				type:'POST',
				url:path_ajax_script+'/index.php?mod=home&act=load_quick_access', 
				data:{"holderG":holderG,"adminbutton_id":adminbutton_id},
				dataType:'html',
				success:function(html){
					loadHtmlQuickAccess();
				}
			});
			return false;
		});
	});
</script>
<?php }
}
