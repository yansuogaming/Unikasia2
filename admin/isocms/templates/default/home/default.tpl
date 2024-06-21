<div class="dashboard">
	<div class="dashboard_header_box">
		<div class="title_box">
			<h1>Dashboard</h1>
			<p>Chào mừng bạn đến với hệ thống quản trị dữ liệu website isoCMS.</p>
		</div>
		<div class="nav_booking">
			{if $clsISO->getCheckActiveModulePackage($package_id,'booking','booking_tour','default')}
			<div class="nav_booking_item item1">
				<p class="text">{$core->get_Lang('Booking tour')}</p>
				<p class="number"><a href="{$PCMS_URL}/index.php?mod=booking&act=booking_tour">{$clsISO->countTotal('Booking',"clsTable='Tour'")}</a></p>
			</div>
			{/if}
			<div class="nav_booking_item item2">
				<p class="text">{$core->get_Lang('Tailor made tour')}</p>
				<p class="number"><a href="{$PCMS_URL}/index.php?mod=booking&act=booking_tailor">{$clsISO->countTotal('Booking',"clsTable='Tailor'")}</a></p>
			</div>
			<div class="nav_booking_item item3">
				<p class="text">{$core->get_Lang('Contact')}</p>
				<p class="number"><a href="{$PCMS_URL}/index.php?mod=feedback">{$clsISO->countTotal('Feedback')}</a></p>
			</div>
		</div>
	</div>
	<div class="home_box quick_access_box mb-4">
		<h2 class="title_box slideToggle">{$core->get_Lang('Quick Access')}</h2>
		<div class="quick_access_list">
			{section name=i loop=$listQuickAccessShow}
			{assign var=_adminbutton_id value=$listQuickAccessShow[i].adminbutton_id}
			{if $clsAdminButton->checkPackage($_adminbutton_id,$package_id)}
			{if $core->checkAccess($listQuickAccessShow[i].mod_page)}
			<div class="quick_access_item">
				<a title="{$core->get_Lang($listQuickAccessShow[i].title)}" href="{$clsAdminButton->getURL($listQuickAccessShow[i].adminbutton_id)}">
					<span class="icon"><img class="imgIcon" src="{$listQuickAccessShow[i].image}" width="28" height="28" /></span>
					<span class="text">{$core->get_Lang($listQuickAccessShow[i].title_page)}</span>
				</a>
			</div>
			{/if}
			{/if}
			{/section}
			<div class="quick_access_item item_add">
				<a href="javascript:void(0);" title="{$core->get_Lang('Add Task')}" onClick="manager_tasks(this); return false;">
					{$clsISO->makeIcon('plus')}
					<span class="text">{$core->get_Lang('Add Task')}</span>
				</a>
			</div>
		</div>
	</div>
	hello
	{*
	{if $clsISO->getCheckActiveModulePackage($package_id,'booking','booking_tour','default')}
	<div class="home_box performance_box">
		<div class="header_box">
			<h2 class="title_box">{$core->get_Lang('Performance')}</h2>
			<p class="text">{$core->get_Lang('Last 7 Days')}</p>
		</div>
		<div class="performance_list">
			<div class="performance_item {if $nearest2.total_booking[0] != ''}item_{$nearest2.total_booking[0]}{/if}">
				<p class="text">{$core->get_Lang('Number of Orders')}</p>
				<p class="number">{$nearest1.total_booking}</p>
				<p class="number2"><i class="fa {if $nearest2.total_booking[0] != ''}fa-caret-{$nearest2.total_booking[0]}{/if}" aria-hidden="true"></i> {$nearest2.total_booking[1]}</p>
			</div>
			<div class="performance_item {if $nearest2.value_of_order[0] != ''}item_{$nearest2.value_of_order[0]}{/if}">
				<p class="text">{$core->get_Lang('Value of Orders')}</p>
				<p class="number">{$nearest1.value_of_order} {$clsISO->getRate()}</p>
				<p class="number2"><i class="fa {if $nearest2.value_of_order[0] != ''}fa-caret-{$nearest2.value_of_order[0]}{/if}" aria-hidden="true"></i> {$nearest2.value_of_order[1]} {$clsISO->getRate()}</p>
			</div>
			<div class="performance_item {if $nearest2.total_paid[0] != ''}item_{$nearest2.total_paid[0]}{/if}">
				<p class="text">{$core->get_Lang('Total Paid')}</p>
				<p class="number">{$nearest1.total_paid} {$clsISO->getRate()}</p>
				<p class="number2"><i class="fa {if $nearest2.total_paid[0] != ''}fa-caret-{$nearest2.total_paid[0]}{/if}" aria-hidden="true"></i> {$nearest2.total_paid[1]} {$clsISO->getRate()}</p>
			</div>
			<div class="performance_item">
				<p class="text">{$core->get_Lang('Total Refund')}</p>
				<p class="number">0</p>
				<p class="number2">$0.00</p>
			</div>
			<div class="performance_item {if $nearest2.total_discount[0] != ''}item_{$nearest2.total_discount[0]}{/if}">
				<p class="text">{$core->get_Lang('Total Discount')}</p>
				<p class="number">{$nearest1.total_discount} {$clsISO->getRate()}</p>
				<p class="number2"><i class="fa {if $nearest2.total_discount[0] != ''}fa-caret-{$nearest2.total_discount[0]}{/if}" aria-hidden="true"></i> {$nearest2.total_discount[1]} {$clsISO->getRate()}</p>
			</div>
			<div class="performance_item {if $nearest2.balance_owed[0] != ''}item_{$nearest2.balance_owed[0]}{/if}">
				<p class="text">{$core->get_Lang('Balance Owed')}</p>
				<p class="number">{$nearest1.balance_owed} {$clsISO->getRate()}</p>
				<p class="number2"><i class="fa {if $nearest2.balance_owed[0] != ''}fa-caret-{$nearest2.balance_owed[0]}{/if}" aria-hidden="true"></i> {$nearest2.balance_owed[1]} {$clsISO->getRate()}</p>
			</div>
			<div class="performance_item item_up">
				<p class="text">{$core->get_Lang('Direct Sales')}</p>
				<p class="number">4.268.580đ</p>
				<p class="number2"><i class="fa fa-caret-up" aria-hidden="true"></i> 2.125.004đ</p>
			</div>
			<div class="performance_item item_up">
				<p class="text">{$core->get_Lang('Marketplace Sales')}</p>
				<p class="number">3.478.500đ</p>
				<p class="number2"><i class="fa fa-caret-up" aria-hidden="true"></i> 2.125.004đ</p>
			</div>
		</div>
	</div>

	<div class="chart_booking">
		<div class="home_box chart_booking_box">
			<div class="top_chart_booking">
				<div class="letf_top_chart_booking">
					<h2 class="title_box">{$core->get_Lang("Chart Booking")}</h2>
					<div class="input_year">
						<select class="form-control year_chart_booking" name="" id="">
							{foreach from=$rangeDate item=year}
							<option value="{$year}" {if $year==$smarty.now|date_format:"%Y"}selected{/if}>{$year}</option>
							{/foreach}
						</select>
						<!--<input class="form-control year_chart_booking" type="text" min="2000" max="{$smarty.now|date_format:"%Y"}" step="1" value="{$smarty.now|date_format:"%Y"}" />
						<i class="fa fa-angle-down" aria-hidden="true"></i>-->
					</div>
				</div>
				<div class="right_chart_booking">
					<label class="lbl_checkbox">
						<input type="radio" class="check_all" name="booking_cat" value="all" checked="checked">
						<span class="checkmark">{$core->get_Lang('All')}</span>
					</label>
					<label class="lbl_checkbox">
						<input type="radio" class="check_one" name="booking_cat" value="Tour">
						<span class="checkmark">{$core->get_Lang('Tour')}, {$core->get_Lang('voucher')}</span>
					</label>
					<label class="lbl_checkbox">
						<input type="radio" class="check_one" name="booking_cat" value="Hotel">
						<span class="checkmark">{$core->get_Lang('Hotel')}</span>
					</label>
					<label class="lbl_checkbox">
						<input type="radio" class="check_one" name="booking_cat" value="Cruise">
						<span class="checkmark">{$core->get_Lang('Cruise')}</span>
					</label>
					<label class="lbl_checkbox">
						<input type="radio" class="check_one" name="booking_cat" value="Tailor">
						<span class="checkmark">{$core->get_Lang('Tailor made tour')}</span>
					</label>
				</div>
			</div>
			{$core->getBlock('chart_booking')}
		</div>
		<div class="ads_travelmaster">
			<a href="" title=""><img src="{$URL_IMAGES}/img_travelmaster.jpg" /></a>
		</div>
	</div>
	{/if}
	*}
	<div class="home_box actions_required_box">
		<div class="header_box">
			<h2 class="title_box">{$core->get_Lang('Actions Required')}</h2>
		</div>
		<table class="booking_list_table">
			<tbody>
				{section name=i loop=$lstBooking}
				<tr>
					<td class="date_booking">
						<p class="text1">{$clsISO->getDayOfWeek($lstBooking[i].reg_date)}</p>
						<p class="text2">{$clsISO->formatDate($lstBooking[i].reg_date,'dot')}</p>
					</td>
					<td class="customer_booking">
						<p class="text1">{$clsBooking->getContactName($lstBooking[i].booking_id)}</p>
						{* <p class="text2">{$clsBooking->getHTMLService($lstBooking[i].booking_id)}</p>*}
						<span class="booking_code">{$lstBooking[i].booking_code}</span>
					</td>
					<td class="pay_booking">
						<p class="text1">{$clsISO->priceFormat($lstBooking[i].totalgrand)}đ</p>
						<p class="text2">Đã thanh toán</p>
					</td>
				</tr>
				{/section}
			</tbody>
		</table>
	</div>
</div>
{literal}
<script type="text/javascript">
	function manager_tasks() {
		$.post(path_ajax_script + '/index.php?mod=home&act=load_quick_access', {
			'holderG': '_modal'
		}, function(html) {
			$Core.popup.open('auto', 'auto', html, 'add_task');
			loadHtmlQuickAccess();
		});
	}

	function loadHtmlQuickAccess() {
		$.post(path_ajax_script + '/index.php?mod=home&act=load_quick_access', {
			'holderG': '_list'
		}, function(html) {
			$('.quick_access_html').html(html);
		});
	}
	$(function() {
		$_document.on('click', ".remove_item_quick_access,.add_item_quick_access", function(ev) {
			ev.preventDefault();
			var $_this = $(this),
				holderG = $_this.data('tp'),
				adminbutton_id = $_this.data('adminbutton_id');
			$.ajax({
				type: 'POST',
				url: path_ajax_script + '/index.php?mod=home&act=load_quick_access',
				data: {
					"holderG": holderG,
					"adminbutton_id": adminbutton_id
				},
				dataType: 'html',
				success: function(html) {
					loadHtmlQuickAccess();
				}
			});
			return false;
		});
	});
</script>
{/literal}