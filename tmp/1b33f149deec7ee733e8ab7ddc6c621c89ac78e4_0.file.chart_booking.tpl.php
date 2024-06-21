<?php
/* Smarty version 3.1.38, created on 2024-05-06 09:36:02
  from '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/blocks/chart_booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6638421259f585_76755531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b33f149deec7ee733e8ab7ddc6c621c89ac78e4' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/blocks/chart_booking.tpl',
      1 => 1714822398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638421259f585_76755531 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/highchart/highcharts.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/highchart/exporting.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/highchart/export-data.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/highchart/accessibility.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<div id="booking_chart"></div>


<style>
.datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-top {
    right: auto;
    left: 305px !important;
}
</style>
<?php echo '<script'; ?>
>
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

<?php echo '</script'; ?>
>
<style>
.highcharts-container{
  width: 100% !important;
}

.highcharts-root{
  width: 100% !important;
}
</style>
<?php }
}
