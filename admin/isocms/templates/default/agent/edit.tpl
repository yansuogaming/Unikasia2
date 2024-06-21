<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')}:</strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang('edit profile')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('profilemanagement')}</h2>
		{assign var = setting value = 'SiteIntroModule_'|cat:$mod|cat:'_'|cat:$_LANG_ID}
		{if $clsConfiguration->getValue($setting) ne ''}
        <p>{$clsConfiguration->getValue($setting)|html_entity_decode}</p>
		{/if}
    </div>
	
	<div id="clienttabs" class="tour_tabs">
        <ul>
            <li><a href="javascript:void();"><i class="iso-bassic"></i> {$core->get_Lang('Profile')}</a></li>
            <li><a href="javascript:void();"><i class="fa fa-map-marker"></i> {$core->get_Lang('Bookings')}</a></li>
			{*<li><a href="javascript:void();"><i class="fa fa-money"></i> {$core->get_Lang('Tour Reviews &amp; Photos')}</a></li>*}
        </ul>
    </div>
	<div id="tab_content" style="width:100%; float: left">
        <div class="tabbox">
			<div class="form-group">
				<label for="last_name" class="form-control-label">{$core->get_Lang('Full Name')}:</label>
				<div class="col-right">
					<input  id="full_name" value="{$oneTable.full_name}" class="form-control w220" placeholder="{$core->get_Lang('Full Name')}" type="text" disabled="disabled">
				</div>
			</div>
			<div class="form-group">
				<label for="last_name" class=" form-control-label">Email:</label>
				<div class="col-right">
					<input id="email" value="{$oneTable.email}" class="form-control w220" type="text" disabled="disabled">
				</div>
			</div>
			<div class="form-group">
				<label for="phone" class=" form-control-label">{$core->get_Lang('Phone Number')}:</label>
				<div class="col-right">
					<input name="iso-phone" id="phone" required value="{$oneTable.phone}" class="form-control fullwidth" placeholder="{$core->get_Lang('Phone Number')}" type="text" disabled="disabled">
				</div>
			</div>
			{if $oneTable.type eq 'AGENT'}
			<div class="form-group">
				<label for="organisation" class=" form-control-label">{$core->get_Lang('Company Name')}:</label>
				<div class="col-right">
					<input id="company_name" value="{$oneTable.company_name}" class="form-control fullwidth" placeholder="{$core->get_Lang('Company Name')}" type="text" disabled="disabled">
				</div>
			</div>
			<div class="form-group">
				<label for="address" class=" form-control-label">{$core->get_Lang('Position')}:</label>
				<div class="col-right">
					<input id="position" value="{$oneTable.position}" class="form-control fullwidth" placeholder="{$core->get_Lang('Position')}" type="text" disabled="disabled">
				</div>
			</div>
			<div class="form-group">
				<label for="last_name" class=" form-control-label">{$core->get_Lang('Tax code')}:</label>
				<div class="col-right">
					<input id="tax_code" value="{$oneTable.tax_code}" type="text" disabled="disabled"/>
				</div>
			</div>
			{else}
			<div class="form-group">
				<label for="last_name" class=" form-control-label">{$core->get_Lang('Chứng minh nhân dân')}:</label>
				<div class="col-right">
					<img src="{$oneTable.identity_card_file}" width="100%" height="auto" />
				</div>
			</div>
			{/if}
			<div class="form-group">
				<label for="last_name" class=" form-control-label">{$core->get_Lang('Kích hoạt tài khoản')}:</label>
				<div class="col-right">
					<select id="active_agent" status="Active" agent_id="{$oneTable.agent_id}" style="width:120px">
						<option value="0">{$core->get_Lang('select')}</option>
						<option {if $oneTable.is_active eq '1'}selected="selected"{/if} value="1">{$core->get_Lang('Active')}</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="last_name" class=" form-control-label">{$core->get_Lang('Khóa tài khoản')}:</label>
				<div class="col-right">
					<select id="block_agent" status="Block" agent_id="{$oneTable.agent_id}"  style="width:120px">
						<option value="0">{$core->get_Lang('select')}</option>
						<option {if $oneTable.is_lock eq '1'}selected="selected"{/if} value="1">{$core->get_Lang('Block')}</option>
					</select>
				</div>
			</div>
			
        </div>

        <div class="tabbox" style="display:none;">
			<div class="col-sm-6">
			{if $totalBooking gt '0'}
			{if $lstBookingHotel}
			<h3>{$core->get_Lang('List Hotels Booking')}</h3>
			{section name=i loop=$lstBookingHotel}
			<div class="bookingItem">
				<div class="bookingTop">
					<div class="row">
						<div class="col-sm-3">
							<div class="pic_hotel">
								<img src="{$clsHotel->getImage($lstBookingHotel[i].target_id,193,129)}" class="static" width="90" height="60" alt="{$clsHotel->getTitle($lstBookingHotel[i].target_id)}" style="height: 60px; width: 90px;">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="detail_hotel_booking">
								<p class="content_blue">
									<b>
										<a class="hotelLinks" href="{$clsHotel->getLink($lstBookingHotel[i].target_id)}" title="{$clsHotel->getTitle($lstBookingHotel[i].target_id)}">{$clsHotel->getTitle($lstBookingHotel[i].target_id)}</a>
									</b>
								</p>
								{if $clsHotel->getAddress($lstBookingHotel[i].target_id) ne ''}
									<p class="address"><i class="fa fa-map-marker"></i> {$clsHotel->getAddress($lstBookingHotel[i].target_id)}</p>
								 {/if}
								<div class="clear">&nbsp;</div>
							</div>
						</div>
					</div>
				</div>
				 <div class="clear"></div>
				<div class="allbox">
					{assign var=Store_Hotel value=$clsBooking->getBookingValue($lstBookingHotel[i].booking_id)}
					<div class="date_hotel_booking mb10">
						<p>
							<span class="date_hotel_on">{$core->get_Lang('Booked on')}</span> 
							<span class="date_hotel">{$clsISO->converTimeToText($clsBooking->getOneField('reg_date',$lstBookingHotel[i].booking_id))}</span>
						</p>
					</div>
					<div class="row">
						<div class="allbox_left col-sm-8">
							<p class="booking_left">
								{$core->get_Lang('Booking ID')}
							</p>
							<p class="booking_right">
								{$clsBooking->getOneField('booking_code',$lstBookingHotel[i].booking_id)}
							</p>
							<div class="clear"></div>
							<p class="booking_left">
								{$core->get_Lang('Check-in')}:
							</p>
							<p class="booking_right">
								
								<span>{$Store_Hotel.checkin}</span>
							</p>
							<div class="clear"></div>
							<p class="booking_left">
								{$core->get_Lang('Check-out')}:
							</p>
							<p class="booking_right">
								<span>{$Store_Hotel.checkout}</span>
							</p>
							<div class="clear"></div>
						</div>
						<div class="allbox_right col-sm-4">
							<p>
								<span class="money_hotel">{$clsHotel->getPrice($lstBookingHotel[i].target_id)}</span>
							</p>
							<div>
								<p class="text_conditions">
								<span title="Any cancellation received within 1 day prior to arrival date will incur the first night charge. Failure to arrive at your hotel will be treated as a No-Show and will incur the first night charge (Hotel policy).">{$core->get_Lang('Booking Conditions')} <i class="ficon ficon-10 ficon-hover-details"></i></span>
								</p>
							</div>
							<a class="fr mt10" href="{$PCMS_URL}/?mod={$mod}&act=viewbooking&booking_id={$core->encryptID($lstBookingHotel[i].booking_id)}" title="{$core->get_Lang('View Booking')}">{$core->get_Lang('View Booking')}</a>
						</div>
					</div>
				</div>
			</div>
			{/section}
			{/if}
			{if $lstBookingTour}
			<div class="cleafix mb30"></div>
	
			<h3>{$core->get_Lang('List Tour Booking')}</h3>
			{section name=i loop=$lstBookingTour}
			<div class="bookingItem">
				<div class="bookingTop">
					<div class="row">
						<div class="col-sm-3">
							<div class="pic_hotel">
								<img src="{$clsTour->getImage($lstBookingTour[i].target_id,193,129)}" class="static" width="90" height="60" alt="{$clsTour->getTitle($lstBookingTour[i].target_id)}" style="height: 60px; width: 90px;">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="detail_hotel_booking">
								<p class="content_blue">
									<b>
										<a class="hotelLinks" href="{$clsTour->getLink($lstBookingTour[i].target_id)}" title="{$clsTour->getTitle($lstBookingTour[i].target_id)}">{$clsTour->getTitle($lstBookingTour[i].target_id)}</a>
									</b>
								</p>
								{if $clsTour->getCityAround($lstBookingTour[i].target_id) ne ''}
									<p class="address"><i class="fa fa-map-marker"></i> {$clsTour->getCityAround($lstBookingTour[i].target_id)}</p>
								 {/if}
								<div class="clear">&nbsp;</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="allbox">
					{assign var=Store_Tour value=$clsBooking->getBookingValue($lstBookingTour[i].booking_id)}
					<div class="date_hotel_booking mb10">
						<p>
							<span class="date_hotel_on">{$core->get_Lang('Booked on')}</span> 
							<span class="date_hotel">{$clsISO->converTimeToText($clsBooking->getOneField('reg_date',$lstBookingTour[i].booking_id))}</span>
						</p>
					</div>
					<div class="row">
						<div class="allbox_left col-sm-8">
							<p class="booking_left">
								{$core->get_Lang('Booking ID')}
							</p>
							<p class="booking_right">
								{$clsBooking->getOneField('booking_code',$lstBookingTour[i].booking_id)}
							</p>
							<div class="clear"></div>
							<p class="booking_left">
								{$core->get_Lang('Check-in')}:
							</p>
							<p class="booking_right">
								<span>{$Store_Tour.departure_date}</span>
							</p>
							<div class="clear"></div>
							<p class="booking_left">
								{$core->get_Lang('Check-out')}:
							</p>
							<p class="booking_right">
								<span>{if $Store_Tour.end_date ne ''}{$Store_Tour.end_date}{else}{$clsBooking->getOneField('check_out',$lstBookingTour[i].booking_id)}&nbsp;{/if}</span>
							</p>
							<div class="clear"></div>
						</div>
						<div class="allbox_right col-sm-4">
							<p>
								<span class="money_hotel">{$clsISO->getRate()} {$Store_Tour.tien1}</span>
							</p>
							<div>
								<p class="text_conditions">
									<span title="Any cancellation received within 1 day prior to arrival date will incur the first night charge. Failure to arrive at your hotel will be treated as a No-Show and will incur the first night charge (Hotel policy).">{$core->get_Lang('Booking Conditions')} <i class="ficon ficon-10 ficon-hover-details"></i></span>
								</p>
							</div>
							<a class="fr mt10" href="{$PCMS_URL}/?mod={$mod}&act=viewbooking&booking_id={$core->encryptID($lstBookingTour[i].booking_id)}" title="{$core->get_Lang('View Booking')}">{$core->get_Lang('View Booking')}</a>
						</div>
					</div>
				</div>
			</div>
			{/section}
			{/if}
			{if $lstBookingCruise}
			<div class="cleafix mb30"></div>
			<h3>{$core->get_Lang('List Cruise Booking')}</h3>
			{section name=i loop=$lstBookingCruise}
			<div class="bookingItem">
				<div class="bookingTop">
					<div class="row">
						<div class="col-sm-3">
							<div class="pic_hotel">
								<img src="{$clsCruise->getImage($lstBookingCruise[i].target_id,193,129)}" class="static" width="90" height="60" alt="{$clsCruise->getTitle($lstBookingCruise[i].target_id)}" style="height: 60px; width: 90px;">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="detail_hotel_booking">
								<p class="content_blue">
									<b>
										<a class="hotelLinks" href="{$clsCruise->getLink($lstBookingCruise[i].target_id)}" title="{$clsCruise->getTitle($lstBookingCruise[i].target_id)}">{$clsCruise->getTitle($lstBookingCruise[i].target_id)}</a>
									</b>
								</p>
								{if $clsCruise->getCityAround($lstBookingCruise[i].target_id) ne ''}
									<p class="address"><i class="fa fa-map-marker"></i> {$clsCruise->getCityAround($lstBookingCruise[i].target_id)}</p>
								 {/if}
								<div class="clear">&nbsp;</div>
							</div>
						</div>
					</div>
				</div>
				 <div class="clear"></div>
				<div class="allbox">
					{assign var=Store_Cruise value=$clsBooking->getBookingValue($lstBookingCruise[i].booking_id)}
					<div class="date_hotel_booking mb10">
						<p>
							<span class="date_hotel_on">{$core->get_Lang('Booked on')}</span> 
							<span class="date_hotel">{$clsISO->converTimeToText($clsBooking->getOneField('reg_date',$lstBookingCruise[i].booking_id))}</span>
						</p>
					</div>
					<div class="row">
						<div class="allbox_left col-sm-8">
							<p class="booking_left">
								{$core->get_Lang('Booking ID')}
							</p>
							<p class="booking_right">
								{$clsBooking->getOneField('booking_code',$lstBookingCruise[i].booking_id)}
							</p>
							<div class="clear"></div>
							<p class="booking_left">
								{$core->get_Lang('Check-in')}:
							</p>
							<p class="booking_right">
								<span>{$Store_Cruise.departure_date}</span>
							</p>
							<div class="clear"></div>
							<p class="booking_left">
								{$core->get_Lang('Check-out')}:
							</p>
							<p class="booking_right">
								<span>{$clsBooking->getOneField('check_out',$lstBookingCruise[i].booking_id)}</span>
							</p>
							<div class="clear"></div>
							<p class="booking_left">
								{$core->get_Lang('Cabin of name')}:
							</p>
							<p class="booking_right">
								{$clsCruiseCabin->getTitle($Store_Cruise.cruise_cabin_id)}
							</p>
							<div class="clear"></div>
							<p class="booking_left">
								{$core->get_Lang('Number of Cabin')}
							</p>
							<p class="booking_right">
								{$Store_Cruise.number_room}
							</p>
							<div class="clear"></div>
						</div>
						<div class="allbox_right col-sm-4">
							<p>
								<span class="money_hotel">{$clsISO->getRate()} {$Store_Cruise.totalGrand}</span>
							</p>
							<div>
								<p class="text_conditions">
									<span title="Any cancellation received within 1 day prior to arrival date will incur the first night charge. Failure to arrive at your hotel will be treated as a No-Show and will incur the first night charge (Hotel policy).">{$core->get_Lang('Booking Conditions')} <i class="ficon ficon-10 ficon-hover-details"></i></span>
								</p>
							</div>
							<a class="fr mt10" href="{$PCMS_URL}/?mod={$mod}&act=viewbooking&booking_id={$core->encryptID($lstBookingCruise[i].booking_id)}" title="{$core->get_Lang('View Booking')}">{$core->get_Lang('View Booking')}</a>
						</div>
					</div>
				</div>
			</div>
			
			{/section}
			{/if}
			{else}
			{$core->get_Lang('No Data!')}
			{/if}
        	</div>
		</div>
        {*<div class="tabbox" style="display:none">
			<div class="col-sm-6">
				{if $totalReviews gt '0'}
				{section name=i loop=$lstReviewsTour}
				<div class="bookingItem">
					<div class="bookingTop">
						<div class="row">
							<div class="col-sm-2">
								<div class="pic_hotel">
									<img src="{$clsTour->getImage($lstReviewsTour[i].table_id,193,129)}" class="static" width="90" height="60" alt="{$clsTour->getTitle($lstReviewsTour[i].table_id)}" style="height: 60px; width: 90px;">
								</div>
							</div>
							<div class="col-sm-8">
								<div class="detail_hotel_booking">
									<h3 class="content_blue">
										<a class="hotelLinks" href="{$clsTour->getLink($lstReviewsTour[i].table_id)}#Reviews{$lstReviewsTour[i].reviews_id}" title="{$clsTour->getTitle($lstReviewsTour[i].table_id)}" target="blank">{$clsTour->getTitle($lstReviewsTour[i].table_id)}</a>
										<label class="rate-1">{$clsReviews->getRatesStar($lstReviewsTour[i].reviews_id)}</label> <span>({$core->get_Lang('Rates')}: {$clsReviews->getRates($lstReviewsTour[i].reviews_id)})</span>
									</h3> 
									<div class="intro">{$clsReviews->getContent($lstReviewsTour[i].reviews_id)|html_entity_decode}</div>
								</div>
							</div>
							<div class="col-sm-2">
							{if $clsReviews->getOneField('is_online',$lstReviewsTour[i].reviews_id) eq 0}
							<p class="text-center color_f00000">{$core->get_Lang('Private')}</p>
							{else}
							<p class="text-center color_66ff00">{$core->get_Lang('Public')}</p>
							{/if}
							</div>
						</div>
					</div>
				</div>
				{/section}
				{section name=i loop=$lstReviewsHotel}
				<div class="bookingItem">
					<div class="bookingTop">
						<div class="row">
							<div class="col-sm-2">
								<div class="pic_hotel">
									<img src="{$clsHotel->getImage($lstReviewsHotel[i].table_id,193,129)}" class="static" width="90" height="60" alt="{$clsHotel->getTitle($lstReviewsHotel[i].table_id)}" style="height: 60px; width: 90px;">
								</div>
							</div>
							<div class="col-sm-8">
								<div class="detail_hotel_booking">
									<h3 class="content_blue">
										<a class="hotelLinks" href="{$clsHotel->getLink($lstReviewsHotel[i].table_id)}#Reviews{$lstReviewsHotel[i].reviews_id}" title="{$clsHotel->getTitle($lstReviewsHotel[i].table_id)}">{$clsHotel->getTitle($lstReviewsHotel[i].table_id)}</a>
										<label class="rate-1">{$clsReviews->getRatesStar($lstReviewsHotel[i].reviews_id)}</label> <span>({$core->get_Lang('Rates')}: {$clsReviews->getRates($lstReviewsHotel[i].reviews_id)})</span>
									</h3> 
									<div class="intro">{$clsReviews->getContent($lstReviewsHotel[i].reviews_id)|html_entity_decode}</div>
								</div>
							</div>
							<div class="col-sm-2">
							{if $clsReviews->getOneField('is_online',$lstReviewsHotel[i].reviews_id) eq 0}
							<p class="text-center color_f00000">{$core->get_Lang('Private')}</p>
							{else}
							<p class="text-center color_66ff00">{$core->get_Lang('Public')}</p>
							{/if}
							</div>
						</div>
					</div>
				</div>
				{/section}
				{section name=i loop=$lstReviewsCruise}
				<div class="bookingItem">
					<div class="bookingTop">
						<div class="row">
							<div class="col-sm-2">
								<div class="pic_hotel">
									<img src="{$clsCruise->getImage($lstReviewsCruise[i].table_id,193,129)}" class="static" width="90" height="60" alt="{$clsCruise->getTitle($lstReviewsCruise[i].table_id)}" style="height: 60px; width: 90px;">
								</div>
							</div>
							<div class="col-sm-8">
								<div class="detail_hotel_booking">
									<h3 class="content_blue">
										<a class="hotelLinks" href="{$clsCruise->getLink($lstReviewsCruise[i].table_id)}#Reviews{$lstReviewsCruise[i].reviews_id}" title="{$clsCruise->getTitle($lstReviewsCruise[i].table_id)}">{$clsCruise->getTitle($lstReviewsCruise[i].table_id)}</a>
										<label class="rate-1">{$clsReviews->getRatesStar($lstReviewsCruise[i].reviews_id)}</label> <span>({$core->get_Lang('Rates')}: {$clsReviews->getRates($lstReviewsCruise[i].reviews_id)})</span>
									</h3> 
									<div class="intro">{$clsReviews->getContent($lstReviewsCruise[i].reviews_id)|html_entity_decode}</div>
								</div>
							</div>
							<div class="col-sm-2">
							{if $clsReviews->getOneField('is_online',$lstReviewsCruise[i].reviews_id) eq 0}
							<p class="text-center color_f00000">{$core->get_Lang('Private')}</p>
							{else}
							<p class="text-center color_66ff00">{$core->get_Lang('Public')}</p>
							{/if}
							</div>
						</div>
					</div>
				</div>
				{/section}
				{else}
				{$core->get_Lang('No Data!')}
				{/if}
        	</div>
		</div>*}
    </div>
</div>
<script type="text/javascript">
var agent_id ='{$oneTable.agent_id}';
</script>
{literal}
<script type="text/javascript">
$(document).on('change', '#active_agent', function(ev) {
	var $_this = $(this);
	var status = $_this.attr('status');
	updateAgent($_this.val(),status);
});
$(document).on('change', '#block_agent', function(ev) {
	var $_this = $(this);
	var status = $_this.attr('status');
	updateAgent($_this.val(),status);
});
function updateAgent(val,status) {
    var adata = {};
    adata['agent_id'] = agent_id;
    adata['val'] = val;
	adata['status'] = status;
    $.ajax({
        type: 'POST',
        url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajUpdateAgent&lang='+LANG_ID,
        data: adata,
        dataType: 'html',
        success: function(html) {
			 window.location.reload();
        }
    });
}
</script>
<style type="text/css">
.form-group{margin-bottom:10px;}
.form-group label{width:180px; text-align:right; display: inline-block; line-height:32px; vertical-align:top}
.form-group .col-right{width:400px;display: inline-block}
.form-group input{width:100%; padding:0 10px; line-height:32px}
.bookingItem {
    width: 100%;
    margin-top: 20px;
    position: relative;
}
.bookingItem .col-sm-3{width:25%;float:left}
.bookingItem .col-sm-9{width:75%;float:left}
#tab_content .col-sm-9{width:75%;float:left}
.bookingItem .col-sm-2{width:16.6%; display:inline-block; float:left}
.bookingItem .col-sm-4{width:33.3%; display:inline-block; float:left}
#tab_content .col-sm-6{width:50%;float:left}
.bookingItem .col-sm-8{width:66.6%; display:inline-block; float:left}
.col-sm-8{width:66.6%; display:inline-block; float:left}
.allbox_right {
    text-align: right;
    position: relative;
}
.money_hotel {
    font-size: 16px;
    color: #000;
    font-weight: 700;
}
.date_hotel_booking{text-align:right}
.allbox {
    width: 100%;
    padding: 12px 12px 16px;
    margin-top: 10px;
    background-color: #fcfcfc;
	border: 1px solid #ebebeb;
    height: auto;
}
.allbox p, .detail_hotel_booking p {
    margin-bottom: 0;
    margin-top: 0;
}
.address {
    font-size: 13px;
    color: #666;
}
.booking_left {
    text-align: right;
    width: 40%;
    margin-top: 5px;
    font-weight: 700;
    color: #000;
}
.booking_right {
    text-align: left;
    width: 55%;
    margin-left: 4%;
    color: #666;
}
.booking_left,
.booking_right {
    position: relative;
    float: left;
    font-size: 13px;
	white-space: normal;
}
.text_conditions, .text_conditions span {
    font-size: 11px;
    color: #36B66F;
}
.allbox .manage_booking, .buttonconnect, .css3button, .css3button1 {
    border: 1px solid #2ca4fb;
    background-color: #2ca4fb;
}
.allbox .manage_booking, .button_loginemail, .buttonconnect, .css3button, .css3button1, .css3buttoncancel, .submit_reviews {
    color: #fff;
    cursor: pointer;
    text-align: center;
}
.allbox .manage_booking, .allbox .submit_reviews, .button_loginemail, .buttonconnect, .css3button, .css3button1, .css3buttoncancel {
    border-radius: 7px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
}
.allbox .manage_booking {
    padding: 5px 15px;
}
.rate-1{padding:0}
.rate-1, .rate-1 span {
    display: inline-block;
    width: 77px;
    height: 13px;
    background: url(/isocms/templates/default/skin/images/rate-1.png) repeat-x 0 -13px;
}
.rate-1 span {
    display: inline-block;
    background-position: 0 0;
}
</style>
{/literal}