<div class="container_booking" style="height: 100%">
	<div class="content_head">
		<a href="{$DOMAIN_NAME}/admin/index.php?mod=booking&act={$action}" class="d-flex align-items-center">
			<div class="text_booking">
				<p class="booking_name">{$oneItem.booking_code}</p>
				<span class="status">{$core->get_Lang("Still unconfirmed service")}</span>
			</div>
		</a>
		{if $action ne "booking_tailor"}
			{if $oneItem.status_pay ne '3'}
			<button class="btn_cancel" id="cancelBooking">{$core->get_Lang('Cancel Booking')}</button>
			{else}
			<button class="btn_cancel">{$core->get_Lang('Canceled')}</button>
			{/if}
		{else}
			<a href="{$PCMS_URL}/?mod={$mod}&act=print&action={$action}&booking_id={$core->encryptID($pvalTable)}" class="btn-print fr">
				<i class="fa fa-print"></i> {$core->get_Lang('print')}
			</a>
		{/if}
		
	</div>
	<div id="bookingTab" class="booking_tabs">
		<ul>
			{if $action ne "booking_tailor"}
				<li><a href="javascript:void();">{$core->get_Lang('Booking')}</a></li>
				<li><a href="javascript:void();">{$core->get_Lang('Payments')}</a></li>
				{if $tour_cart_store}<li><a href="javascript:void();">{$core->get_Lang('Group List')}</a></li>{/if}
			{/if}
			<li><a href="javascript:void();">{$core->get_Lang('Confirmation Email')}</a></li>
		</ul>
	</div>
	<div id="tab_content">
		{if $action ne "booking_tailor"}
			<div class="tabbox">
				<div class="wrap">
					<div class="content_left">
						<div class="box_info info_booking">
							<p class="booking_name">{$oneItem.booking_code}</p>
							<p class="booking_item"><label class="bold600" for="">{$core->get_Lang('Total Price')}: </label> 
							<span class="bold600 price_booking">{$oneItem.totalgrand|number_format:0:".":" "} {$clsISO->getShortRateText()}</span></p>
							<p class="booking_item"><label class="bold600" for="">{$core->get_Lang('Cashback')}: </label> 
							<span class="bold600 price_booking">{$total_cashback|number_format:0:".":" "} {$clsISO->getShortRateText()}</span></p>
							<p class="booking_item"><label class="bold600" for="">{$core->get_Lang('Payment status')}: </label> 
							<span class="deposit_booking"> 
							{if $deposit_bill_complete gt 0}
								{if $deposit_bill_complete eq $oneItem.totalgrand}
									{$core->get_Lang('Pay off')}
								{else}
									{$core->get_Lang('Deposit')}
									{$deposit_bill_complete|number_format:0:".":" "} {$clsISO->getShortRateText()}
								{/if}
							{else}
								{$core->get_Lang('Unpaid')}
							{/if}
							</span>
							</p>	

							{math assign="balance" equation="x-y-z-a" x=$oneItem.totalgrand y=$oneItem.totalcancel z=$total_cashback a=$deposit_bill_complete}					
							<p class="booking_item"><label class="bold600" for="">{$core->get_Lang('Balance')}: </label> 
							<span class="bold600 price_booking">{if $balance lt 0}{$core->get_Lang('Return customers')} {math assign="balance_return" equation="abs(x)" x=$balance} {$balance_return|number_format:0:".":" "}{else}{$balance|number_format:0:".":" "}{/if} {$clsISO->getShortRateText()}</span></p>
							<p class="booking_item"><label class="bold600" for="">{$core->get_Lang('Booking date')}: </label> <span class="">{$oneItem.reg_date|date_format:"%d/%m/%Y - %H:%m"}</span></p>
						</div>
						<label for="" class="lbl_info_booking bold600">{$core->get_Lang("Main Contact")}</label>
						<div class="box_info">
							<p class="booking_item"><label for="">{$core->get_Lang('Fullname')}: </label> <span class="bold600">{$oneItem.full_name}</span></p>
							<p class="booking_item"><label for="">{$core->get_Lang('Birthday')}: </label> <span class="">{if $booking_store.birthday}{$booking_store.birthday}{else}{$booking_store.birthday_.day}/{$booking_store.birthday_.month}/{$booking_store.birthday_.year}{/if}</span></p>
							<p class="booking_item"><label for="">{$core->get_Lang('Email')}: </label> <span class="bold600">{$oneItem.email}</span></p>
							<p class="booking_item"><label for="">{$core->get_Lang('Phone')}: </label> <span class="bold600"></span>{$oneItem.phone}</p>
							<p class="booking_item"><label for="">{$core->get_Lang('Country')}: </label> <span class="">{if $booking_store.country_id == 0}Việt Nam{else}{$clsCountry->getTitle($booking_store.country_id)}{/if}</span></p>
							<p class="contact_edit bgf9f9f9"><button class="btn_edit_contact" data-toggle="modal" data-target="#mdContact">{$core->get_Lang('Edit')}</button></p>
							<div id="mdContact" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close close_modal_booking" data-dismiss="modal">&times;</button>
											<input type="hidden" value="{$pvalTable}" name="booking_id">
											<h4 class="modal-title">{$core->get_Lang("Main Contact")}</h4>
										</div>
										<div class="modal-body">
											<p class="error" style="color: red;display: none"></p>
											<div class="form-group">
												<label class="col-form-label text-bold">{$core->get_Lang('Full name')}<span class="text-red">*</span></label>
												<input type="text" class="form-control required" value="{$oneItem.full_name}" name="full_name" placeholder="">
											</div>
											<div class="form-group">
												<label class="col-form-label text-bold">{$core->get_Lang('Birth day')}</label>
												<input type="text" class="form-control birthday" value="{$booking_store.birthday}" name="birthday" placeholder="">
											</div>
											<div class="form-group">
												<label class="col-form-label text-bold">{$core->get_Lang('Email')}<span class="text-red">*</span></label>
												<input type="email" class="form-control required" value="{$oneItem.email}" name="email" placeholder="">
											</div>
											<div class="form-group">
												<label class="col-form-label text-bold">{$core->get_Lang('Phone')}<span class="text-red">*</span></label>
												<input type="text" class="form-control required" value="{$oneItem.phone}" name="phone" placeholder="">
											</div>
										</div>
										<div class="modal-footer version-xs">
											<button type="button" class="btn btn-default close_modal_booking" data-dismiss="modal">{$core->get_Lang('Close')}</button>
											<button type="button" class="btn btn-success submitContact" onClick="editContactBooking('contact')">{$core->get_Lang('Update')}</button>
										</div>
									</div>

								</div>
							</div>
						</div>
						<label for="" class="lbl_info_booking bold600">{$core->get_Lang("Notes")}</label>
						<div class="box_info">
							<div class="desp">{$oneItem.note}</div>
							<p class="contact_edit bgf9f9f9"><button class="btn_edit_note" data-toggle="modal" data-target="#mdNote">{$core->get_Lang('Edit')}</button></p>
						</div>
						<div id="mdNote" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close close_modal_booking" data-dismiss="modal">&times;</button>
											<input type="hidden" value="{$pvalTable}" name="booking_id">
											<h4 class="modal-title">{$core->get_Lang("Notes")}</h4>
										</div>
										<div class="modal-body">
											<p class="error" style="color: red;display: none"></p	>
											<div class="form-group">
												<label class="col-form-label text-bold">{$core->get_Lang('Note')}<span class="text-red">*</span></label>
												<textarea name="note" id="" cols="30" rows="10" class="form-control">{$oneItem.note}</textarea>
											</div>
										</div>
										<div class="modal-footer version-xs">
											<button type="button" class="btn btn-default close_modal_booking" data-dismiss="modal">{$core->get_Lang('Close')}</button>
											<button type="button" class="btn btn-success submitContact" onClick="editContactBooking('note')">{$core->get_Lang('Update')}</button>
										</div>
									</div>

								</div>
							</div>
					</div>
					<div class="content_right">
						{if $tour_cart_store}
						{foreach from=$tour_cart_store item=item name=i}
							{assign var=tour_id 		value=$item.tour_id_z}
							{assign var=title 			value=$clsTour->getTitle($tour_id)}
							{assign var=Depart_point 	value=$clsTour->getDepartureCity($tour_id)}
							{assign var=fullTextAddress value=$clsTour->getTextdepartureCityEnd($tour_id,'full')}
							{if $clsTour->getTextdepartureCityEnd($tour_id) != ''}
								{assign var=address 		value=$clsTour->getTextdepartureCityEnd($tour_id)}
							{else}
								{assign var=address 		value=$fullTextAddress}
							{/if}
							{assign var=tour_option  	value=$clsTourOption->getTitle($item.tour__class)}
							{assign var=lstService  	value=$item.number_addon}
							<div class="item_tour">
								<a class="dropdown-toggle bgf9f9f9" data-toggle="collapse"  data-target="#collapse{$tour_id}">[{$core->get_Lang('Travel tour')}] {$tour_id}:[{$Depart_point}-{$address}] {$title} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<div class="collapse" id="collapse{$tour_id}">
									<div class="info-item">
										<div class="info_room">
											<div class="room_item">
												<label class="departure bold600">{$core->get_Lang('Departure')}</label>
												<div class="text_room">
													<p class="address_room">{$clsTour->getListDeparturePoint($tour_id)}</p>
													<span class="time_room">{$clsISO->converTimeToText7($item.check_in_book_z)}</span>
												</div>
											</div>
											<div class="room_item">
												<label class="departure bold600">{$core->get_Lang('End')}</label>
												<div class="text_room">
													<p class="address_room">{$fullTextAddress}</p>
													<span class="time_room">{$clsISO->converTimeToText5($clsTour->getTextEndDate($item.check_in_book_z,$tour_id))}</span>
												</div>
											</div>
											<div class="room_item">
												<label class="deprture bold600">{$core->get_Lang('Tour option')}</label>
												<div class="text_room">
													<p class="address_room">{$tour_option}</p>
												</div>
											</div>
											<div class="room_item">
												<label class=" bold600">{$core->get_Lang('Tourer')}</label>
												<div class="text_room">
													<p class="address_room">
													{if $item.number_adults_z}{$item.number_adults_z} x {$core->get_Lang('Adult')}<br>{/if} 
													{if $item.number_child_z}{$item.number_child_z} x {$core->get_Lang('Children')}<br>{/if}
													{if $item.number_infants_z}{$item.number_infants_z} x {$core->get_Lang('Infants')}{/if} </p>
												</div>
											</div>
											<div class="room_item">
												<label class=" bold600">{$core->get_Lang('Services bonus')}</label>
												<div class="text_room">
													<p class="address_room">
													{if $lstService}
														{foreach from=$lstService item=itemService key=k name=i}
															{$clsAddOnService->getTitle($k)}</br>
														{/foreach}
													{/if}
													</p>
												</div>
											</div>
										</div>
										<div class="status_room">
											<div class="box_switch" title1="{$core->get_Lang('Confirm')}" title2="{$core->get_Lang('Refuse')}">
												<div class="switch3 update_status" data-type_id="{$tour_id}" data-type="TOUR">
													<input type="radio" name="status_tour_{$tour_id}" value="2" class="status status_off" {if $item.status eq 2}checked{/if} {if $item.status eq 2}disabled{/if}>
													<input type="radio" name="status_tour_{$tour_id}" value="0" class="status status_na" disabled {if !$item.status || $item.status eq 0}checked{/if}>
													<input type="radio" name="status_tour_{$tour_id}" value="1" class="status status_on" {if $item.status eq 1}checked{/if} {if $item.status eq 2 || $item.status eq 1}disabled{/if}>
													<a></a>
												</div>
											</div>									
										</div>
									</div>

								</div>
								{*<p class="end_date bgf9f9f9">{$core->get_Lang('Payment Due Date')}: {$clsISO->converTimeBefore($item.check_in_book_z,1)}</p>*}
							</div>
						{/foreach}
						{/if}
						{if $hotel_cart_store}
						{foreach from=$hotel_cart_store item=item name=i}
							{assign var=hotel_id 		value=$item.hotel_id}
							{assign var=oneItemHotel 		value=$clsHotel->getOne($hotel_id,'title,address')}
							{assign var=title 			value=$clsHotel->getTitle($hotel_id,$oneItemHotel)}

							<div class="item_tour">
								<a class="dropdown-toggle bgf9f9f9" data-toggle="collapse"  data-target="#collapseHotel_{$hotel_id}">[{$core->get_Lang('Hotel')}] {$hotel_id}:{$title} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<div class="collapse" id="collapseHotel_{$hotel_id}">
									<div class="info-item">
										<div class="info_room">
											<div class="room_item">
												<label class="departure bold600">{$core->get_Lang('Address')}</label>
												<div class="text_room">
													<span class="address_room">{$clsHotel->getAddress($hotel_id,$oneItemHotel)}</span>
												</div>
											</div>
											<div class="room_item">
												<label class="departure bold600">{$core->get_Lang('Check in')}</label>
												<div class="text_room">
													<span class="time_room">{$clsISO->converTimeToText5($item.check_in)}</span>
												</div>
											</div>
											<div class="room_item">
												<label class="departure bold600">{$core->get_Lang('Check out')}</label>
												<div class="text_room">
													<span class="time_room">{$clsISO->converTimeToText5($item.check_out)}</span>
												</div>
											</div>
											<div class="room_item">
												<label class=" bold600">{$core->get_Lang('Room')}</label>
												<div class="text_room">
													<p class="address_room">
														{foreach from=$item.room item=room name=i}
															<div class="item_room">
																<p class="item_text_room">{$clsHotelRoom->getTitle($room.hotel_room_id)}</p>

																<p class="item_text_room">{if $room.number_room gt 0}<span class="time_room">{$room.number_room} {$core->get_Lang('room')}</span>{/if} {if $room.number_adult gt 0}<span class="time_room">{$room.number_adult} {$core->get_Lang('adult')}</span>{/if} {if $room.number_child gt 0}<span class="time_room">{$room.number_child} {$core->get_Lang('child')}</span>{/if}</p>
															</div>
														{/foreach}
													</p>
												</div>
											</div>
										</div>
										<div class="status_room">
											<div class="box_switch" title1="{$core->get_Lang('Confirm')}" title2="{$core->get_Lang('Refuse')}">
												<div class="switch3 update_status" data-type_id="{$hotel_id}" data-type="HOTEL">
													<input type="radio" name="status_hotel_{$hotel_id}" value="2" class="status status_off" {if $item.status eq 2}checked{/if} {if $item.status eq 2}disabled{/if}>
													<input type="radio" name="status_hotel_{$hotel_id}" value="0" class="status status_na" disabled {if !$item.status || $item.status eq 0}checked{/if}>
													<input type="radio" name="status_hotel_{$hotel_id}" value="1" class="status status_on" {if $item.status eq 1}checked{/if} {if $item.status eq 2}disabled{/if}>
													<a></a>
												</div>
											</div>	
										</div>
									</div>

								</div>
								{*<p class="end_date bgf9f9f9">{$core->get_Lang('Payment Due Date')}: {$clsISO->converTimeBefore2($item.check_in,1)}</p>*}
							</div>
						{/foreach}
						{/if}
						{if $cruise_cart_store}
						{foreach from=$cruise_cart_store item=item name=i}
							{assign var=cruise_id 		value=$item.cruise_id}
							{if $cruise_id}
								{assign var=oneItemCruise 		value=$clsCruise->getOne($cruise_id,'title')}
								{assign var=title 			value=$clsCruise->getTitle($cruise_id,$oneItemCruise)}

								<div class="item_tour">
									<a class="dropdown-toggle bgf9f9f9" data-toggle="collapse"  data-target="#collapseCruise_{$cruise_id}">[{$core->get_Lang('Cruise')}] {$cruise_id}:{$title} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<div class="collapse" id="collapseCruise_{$cruise_id}">
										<div class="info-item">
											<div class="info_room">
												<div class="room_item">
													<label class="departure bold600">{$core->get_Lang('Itinerary')}</label>
													<div class="text_room">
														<span class="address_room">{$clsCruiseItinerary->getTitleDay($item.cruise_itinerary_id)}</span>
													</div>
												</div>
												<div class="room_item">
													<label class="departure bold600">{$core->get_Lang('Departure')}</label>
													<div class="text_room">
														<span class="time_room">{$clsISO->converTimeToText5($item.departure_date)}</span>
													</div>
												</div>
												<div class="room_item">
													<label class="departure bold600">{$core->get_Lang('Duration')}</label>
													<div class="text_room">
														<span class="time_room">{$clsCruiseItinerary->makeSelectTripDurationNew($item.cruise_itinerary_id)}</span>
													</div>
												</div>
												<div class="room_item">
													<label class=" bold600">{$core->get_Lang('Cruise cabin')}</label>
													<div class="text_room">
														<p class="address_room">
															{foreach from=$item.cabin item=cabin name=i}
																<div class="item_room">
																	<p class="item_text_room">{$clsCruiseCabin->getTitle($cabin.cruise_cabin_id)}</p>
																	<p class="item_text_room">{if $cabin.number_cabin gt 0}<span class="time_room">{$cabin.number_cabin} {$core->get_Lang('cabin')}</span>{/if} {if $cabin.number_adult gt 0}<span class="time_room">{$cabin.number_adult} {$core->get_Lang('adult')}</span>{/if} {if $cabin.number_child gt 0}<span class="time_room">{$cabin.number_child} {$core->get_Lang('child')}</span>{/if}</p>
																</div>
															{/foreach}
														</p>
													</div>
												</div>
											</div>
											<div class="status_room">
												<div class="box_switch" title1="{$core->get_Lang('Confirm')}" title2="{$core->get_Lang('Refuse')}">
													<div class="switch3 update_status" data-type_id="{$item.cruise_itinerary_id}" data-type="CRUISE">
														<input type="radio" name="status_cruise_{$item.cruise_itinerary_id}" value="2" class="status status_off" {if $item.status eq 2}checked{/if} {if $item.status eq 2}disabled{/if}>
														<input type="radio" name="status_cruise_{$item.cruise_itinerary_id}" value="0" class="status status_na" disabled {if !$item.status || $item.status eq 0}checked{/if}>
														<input type="radio" name="status_cruise_{$item.cruise_itinerary_id}" value="1" class="status status_on" {if $item.status eq 1}checked{/if} {if $item.status eq 2}disabled{/if}><a></a>
													</div>
												</div>	
											</div>
										</div>

									</div>
									{*<p class="end_date bgf9f9f9">{$core->get_Lang('Payment Due Date')}: {$clsISO->converTimeBefore2($item.departure_date,1)}</p>*}
								</div>
							{/if}
						{/foreach}
						{/if}
						{if $voucher_cart_store}

						{foreach from=$voucher_cart_store item=item name=i}
							{assign var=voucher_id 		value=$item.voucher_id}
							{assign var=title 			value=$clsVoucher->getTitle($voucher_id)}						
							<div class="item_tour item_voucher">
								<a class="dropdown-toggle bgf9f9f9" data-toggle="collapse"  data-target="#collapseVoucher_{$voucher_id}">[{$core->get_Lang('Voucher')}] {$voucher_id}:{$title} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<div class="collapse" id="collapseVoucher_{$voucher_id}">
									<div class="info-item info-item-full">
										<div class="info_room">
											<div class="room_item">
												<label class="departure bold600">{$core->get_Lang('Ticket')}</label>
												<div class="text_room">
													<span class="address_room">{$item.number_voucher} {$core->get_Lang('ticket')}</span>
												</div>
											</div>
										</div>
										{*<div class="status_room">
											<div class="box_switch" title1="{$core->get_Lang('Confirm')}" title2="{$core->get_Lang('Refuse')}">
												<div class="switch3 update_status" data-type_id="{$voucher_id}" data-type="VOUCHER">
													<input type="radio" name="status_voucher_{$voucher_id}" value="2" class="status status_off" {if $item.status eq 2}checked{/if} {if $item.status eq 2}disabled{/if}>
													<input type="radio" name="status_voucher_{$voucher_id}" value="0" class="status status_na" disabled {if !$item.status || $item.status eq 0}checked{/if}>
													<input type="radio" name="status_voucher_{$voucher_id}" value="1" class="status status_on" {if $item.status eq 1}checked{/if} {if $item.status eq 2}disabled{/if}>
													<a></a>
												</div>
											</div>	
										</div>*}
									</div>

								</div>
								{*<p class="end_date bgf9f9f9">{$core->get_Lang('Payment Due Date')}: {$clsISO->converTimeToText6($oneItem.reg_date)}</p>*}
							</div>
						{/foreach}
						{/if}
					</div>
				</div>
			</div>
			<div class="tabbox" style="display: none">
				<div class="wrap">
					<div class="pay_booking_top {if !($money_balance gt 0) } {if $oneItem.status_pay eq 3}btn_cancel{else}pay_booking_top_complete{/if}{/if}">
						{if $money_balance gt 0 }
						<p class="text_status">{$core->get_Lang('Booking has not completed payment')}</p>
						<div class="box_balance">
							<p class="balance">{$core->get_Lang('Balance')} 
							<span class="price_balance">{$money_balance|number_format:0:".":" "} {$clsISO->getShortRateText()}</span></p>
							<button class="btn_pay_booking" type="button" >{$core->get_Lang('Payment')}</button>
						</div>
						{elseif $oneItem.status_pay eq 3}
							<p class="text_status">{$core->get_Lang('Booking has been canceled')}</p>
						{else}
							<p class="text_status">{$core->get_Lang('Booking has completed payment')}</p>
						{/if}
					</div>
					<div class="content_pay_booking">
						<div class="content_pay_left">
							<table class="tbl_content_pay">
								<thead>
									<tr class="item_tbl title_tbl">
										<th class="id_pay">#{$core->get_Lang('ID')}</th>
										<th class="time_create_pay">{$core->get_Lang('Created by')}</th>
										<th class="time_create_pay">{$core->get_Lang('Payment term')}</th>
										<th class="payments_pay">{$core->get_Lang('Payments')}</th>
										<th class="money_pay">{$core->get_Lang('Amount Money')}</th>
										<th class="status_pay">{$core->get_Lang('Bill type')}</th>
										<th class="status_pay"></th>
										<th class="view_pay"></th>
									</tr>
								</thead>
								<tbody>
									{section name=i loop=$lstBillingHistory}
									<tr class="item_tbl">
										<td class="id_pay"><span class="label_mobile">#{$core->get_Lang('ID')}: </span>#{$lstBillingHistory[i].billing_history_id}</td>
										<td class="time_create_pay">
											<span class="label_mobile">{$core->get_Lang('Created by')}: </span>{if $lstBillingHistory[i].user_id gt 0}
												{$clsUser->getOneField('first_name',$lstBillingHistory[i].user_id)} {$clsUser->getOneField('last_name',$lstBillingHistory[i].user_id)}
											{/if}
											{if $lstBillingHistory[i].reg_date gt 0}
												<p class="time_create">{$lstBillingHistory[i].reg_date|date_format:"%d/%m/%Y - %H:%M"}</p>
											{/if}
										</td>
										<td class="time_create_pay"><span class="label_mobile">{$core->get_Lang('Payment term')}: </span>{if $lstBillingHistory[i].payment_term gt 0}{$lstBillingHistory[i].payment_term|date_format:"%d/%m/%Y"}{/if}</td>
										<td class="payments_pay">
											{if $lstBillingHistory[i].payment_method eq '1'}
												{assign var = SitePay_CashName value = SitePay_CashName_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($SitePay_CashName)}
											{elseif $lstBillingHistory[i].payment_method eq '2'}
												{assign var = SitePay_BankName value = SitePay_BankName_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($SitePay_BankName)}
											{elseif $lstBillingHistory[i].payment_method eq '3'}
												{assign var = ONEPAY_Name value = ONEPAY_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($ONEPAY_Name)}
											{elseif $lstBillingHistory[i].payment_method eq '4'}
												{assign var = ONEPAY_Visa_Name value = ONEPAY_Visa_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($ONEPAY_Visa_Name)}
											{elseif $lstBillingHistory[i].payment_method eq '5'}
												{assign var = Paypal_Name value = Paypal_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($Paypal_Name)}
											{elseif $lstBillingHistory[i].payment_method eq '6'}
												{assign var = ONEPAY_Visa_Name value = ONEPAY_Visa_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($ONEPAY_Visa_Name)}
											{elseif $lstBillingHistory[i].payment_method eq '7'}
												{$core->get_Lang('QR code')}
											{/if}

										</td>
										<td class="money_pay"><span class="label_mobile">{$core->get_Lang('Amount Money')}: </span> {$lstBillingHistory[i].bill_money|number_format:0:".":" "} {$clsISO->getShortRateText()}</td>
										<td class="status_pay">
											{if $lstBillingHistory[i].bill_type eq 'PAYMENT'}
												{$core->get_Lang('Payment')}
											{else}
												{$core->get_Lang('Cashback')}											
											{/if}
										</td>
										<td class="status_pay">
											<p class="{if $lstBillingHistory[i].status eq 1}complete_payment{else}waiting_payment{/if}">
												{if $lstBillingHistory[i].status eq 1}
													{$core->get_Lang('Completly payment')}
												{else}
													{$core->get_Lang('Waiting Payment')}											
												{/if}
											</p>
										</td>
										<td class="view_pay">{if $lstBillingHistory[i].bill_type eq 'PAYMENT'}<button class="view_detail" type="button" data-billing_id="{$lstBillingHistory[i].billing_history_id}" data-billEncryt="{$core->encryptID($lstBillingHistory[i].billing_history_id)}"><img src="{$URL_IMAGES}/icon/view_form.png" alt=""></button>{/if}</td>
									</tr>
									{/section}

								</tbody>

							</table>
						</div>
						<div class="content_pay_right mgb15" id="collapse">
							<p class="add_payment" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">{$core->get_Lang('Add Payment')}</p>
							{if $money_max gt 0 || $checkBillingHistory}
							<div class="box_pay box_add_pay mgb15 collapse in" id="collapse1" data-parent="#collapse" aria-expanded="true">
								{if $checkBillingHistory}
									<p class="bill_id">{$core->get_Lang('Invoice waiting for confirmation')}: <span>#{$checkBillingHistory.billing_history_id}</span></p>
									<p class="info-bill">{$core->get_Lang('Date_created')}: {$checkBillingHistory.reg_date|date_format:"%d/%m/%Y - %H:%M"}</p>
									<p class="info-bill">{$core->get_Lang('Payments term')}: {$checkBillingHistory.payment_term|date_format:"%d/%m/%Y"}</p>
									<p class="info-bill">{$core->get_Lang('Amount Money')}: {$checkBillingHistory.bill_money|number_format:0:".":" "} {$clsISO->getShortRate()}</p>
									<p class="info-bill">{$core->get_Lang('Payments')}: 
											{if $checkBillingHistory.payment_method eq '1'}
												{assign var = SitePay_CashName value = SitePay_CashName_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($SitePay_CashName)}
											{elseif $checkBillingHistory.payment_method eq '2'}
												{assign var = SitePay_BankName value = SitePay_BankName_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($SitePay_BankName)}
											{elseif $checkBillingHistory.payment_method eq '3'}
												{assign var = ONEPAY_Name value = ONEPAY_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($ONEPAY_Name)}
											{elseif $checkBillingHistory.payment_method eq '4'}
												{assign var = ONEPAY_Visa_Name value = ONEPAY_Visa_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($ONEPAY_Visa_Name)}
											{elseif $checkBillingHistory.payment_method eq '5'}
												{assign var = Paypal_Name value = Paypal_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($Paypal_Name)}
											{elseif $checkBillingHistory.payment_method eq '6'}
												{assign var = ONEPAY_Visa_Name value = ONEPAY_Visa_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($ONEPAY_Visa_Name)}
											{elseif $checkBillingHistory.payment_method eq '7'}
												{$core->get_Lang('QR code')}
											{/if}</p>
									<p class="info-bill">{$core->get_Lang('Note')}: {$checkBillingHistory.note}</p>
									<button id="success_bill" class="btn_success_bill" type="button" data-billing_id="{$checkBillingHistory.billing_history_id}" value="SUCCESS">{$core->get_Lang('Payment')}</button>
								{else}
								<p class="title_add_pay">{$core->get_Lang('Add Payment')}</p>
								<p class="error" style="color: red;display: none;margin-bottom: 10px;"></p>
								<div class="box_add_money">
									<p class="title_item">{$core->get_Lang('Amount Money')}</label>
									<p class="title_text mgb15">{$core->get_Lang('Pay the amount you want')}</p>
									<div class="mgb15 d-flex align-items-center">
										<input type="radio" name="choose_payment" value="0" checked> 
										<input type="hidden" value="{$pvalTable}" name="booking_id">
										<label for="" class="lbl_title">{$money_max|number_format:0:".":" "} {$clsISO->getShortRateText()} ({$core->get_Lang('Pay off')})</label>
										<input type="hidden" name="money_min" value="{$money_max}" data-min="{$money_min|number_format:0:".":" "} {$clsISO->getShortRateText()}" data-max="{$money_max|number_format:0:".":" "} {$clsISO->getShortRateText()}"> 
									</div>
									<p class="title_text">{$core->get_Lang('or another number')}</p>
									<div class=" d-flex align-items-center">
										<input type="radio" name="choose_payment" value="1"> 
										<div class="box_input">
											<input class="price_tour" type="text" name="money" value="0" min="{$money_min}" max="{$money_max}">
											<span class="rate">{$clsISO->getRate()}</span>
										</div>
									</div>
								</div>
								<div class="box_add_money">
									<p class="title_item">{$core->get_Lang('Payments term')}</label>
									<div class="box_input_date">
										<input class="text full datepicker" name="payment_term" value="" type="text" placeholder="dd/mm/yyyy"/>
									</div>

								</div>
								<div class="box_add_money">
									<p class="title_item">{$core->get_Lang('Payments')}</label>
									<select name="payment_method" id="" class="slt_payment">
										{if $clsConfiguration->getValue('SitePay_CashStatus_Mode')}
										{assign var = SitePay_CashName value = SitePay_CashName_|cat:$_LANG_ID}
										{assign var = SitePay_CashDesc value = SitePay_CashDesc_|cat:$_LANG_ID}
										<option value="1">{$clsConfiguration->getValue($SitePay_CashName)}</option>
										{/if}
										{if $clsConfiguration->getValue('SitePay_Bank_Mode')}
										{assign var = SitePay_BankName value = SitePay_BankName_|cat:$_LANG_ID}
										<option value="2">{$clsConfiguration->getValue($SitePay_BankName)}</option>
										{/if}
										<!-- Onepay ATM -->                           
										{if $clsConfiguration->getValue('ONEPAY_Status_Mode')}
										{assign var = ONEPAY_Name value = ONEPAY_Name_|cat:$_LANG_ID}
										<option value="3">{$clsConfiguration->getValue($ONEPAY_Name)}</option>
										{/if}
										<!-- Onepay Visa -->
										{if $clsConfiguration->getValue('ONEPAY_Visa_Status_Mode')}
										{assign var = ONEPAY_Visa_Name value = ONEPAY_Visa_Name_|cat:$_LANG_ID}
										<option value="4">{$clsConfiguration->getValue($ONEPAY_Visa_Name)}</option>
										{/if}
										{if $clsConfiguration->getValue('ONEPAY_Visa_Status_Mode')}
										{assign var = ONEPAY_Visa_Name value = ONEPAY_Visa_Name_|cat:$_LANG_ID}
										<option value="6">{$clsConfiguration->getValue($ONEPAY_Visa_Name)}</option>
										{/if}
										<!-- Paypal -->
										{if $clsConfiguration->getValue('Paypal_Status_Mode')}
										{assign var = Paypal_Name value = Paypal_Name_|cat:$_LANG_ID}
										<option value="5">{$clsConfiguration->getValue($Paypal_Name)}</option>
										{/if}
									</select>
								</div>
								<div class="box_add_money mgb15">
									<p class="title_item">{$core->get_Lang('Notes')}</label>
									<textarea name="note" id="" cols="30" rows="10" class="note"></textarea>
								</div>
								<div class="box_footer_payment">
									<button class="btn_preview" data-send="" onClick="billing_booking(this)" value="PREVIEW">{$core->get_Lang('Preview')}</button>
									<div class="box_button">
										<button class="btn_save" id="cancel" type="reset">{$core->get_Lang('Cancel')}</button>
										<button class="btn_pay" data-send="" onClick="billing_booking(this)" value="PREVIEW">{$core->get_Lang('Send')}</button>
									</div>
								</div>						

	<!--							<button class="btn_pay" data-toggle="modal" data-target="#billAdd">{$core->get_Lang('Payment')}</button>-->				{/if}
							</div>
							{/if}


							{math assign="max_cashback" equation="x-y-z" x=$oneItem.totalgrand y=$oneItem.totalcancel z=$total_cashback}
							<p class="add_payment back_money collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">{$core->get_Lang('Extra cashback')}</p>
							{if $max_cashback gt 0 || $checkBillingHistoryCashback}
							<div class="box_pay box_cashback mgb15 collapse" id="collapse2" data-parent="#collapse">
								{if $checkBillingHistoryCashback}
									<p class="bill_id">{$core->get_Lang('Invoice waiting for confirmation')}: <span>#{$checkBillingHistoryCashback.billing_history_id}</span></p>
									<p class="info-bill">{$core->get_Lang('Date_created')}: {$checkBillingHistoryCashback.reg_date|date_format:"%d/%m/%Y - %H:%M"}</p>
									<p class="info-bill">{$core->get_Lang('Amount Money')}: {$checkBillingHistoryCashback.bill_money|number_format:0:".":" "} {$clsISO->getShortRate()}</p>
									<p class="info-bill">{$core->get_Lang('Payments')}: 
											{if $checkBillingHistoryCashback.payment_method eq '1'}
												{assign var = SitePay_CashName value = SitePay_CashName_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($SitePay_CashName)}
											{elseif $checkBillingHistoryCashback.payment_method eq '2'}
												{assign var = SitePay_BankName value = SitePay_BankName_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($SitePay_BankName)}
											{elseif $checkBillingHistoryCashback.payment_method eq '3'}
												{assign var = ONEPAY_Name value = ONEPAY_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($ONEPAY_Name)}
											{elseif $checkBillingHistoryCashback.payment_method eq '4'}
												{assign var = ONEPAY_Visa_Name value = ONEPAY_Visa_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($ONEPAY_Visa_Name)}
											{elseif $checkBillingHistoryCashback.payment_method eq '5'}
												{assign var = Paypal_Name value = Paypal_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($Paypal_Name)}
											{elseif $checkBillingHistoryCashback.payment_method eq '6'}
												{assign var = ONEPAY_Visa_Name value = ONEPAY_Visa_Name_|cat:$_LANG_ID}
												{$clsConfiguration->getValue($ONEPAY_Visa_Name)}
											{elseif $checkBillingHistoryCashback.payment_method eq '7'}
												{$core->get_Lang('QR code')}
											{/if}</p>
									<p class="info-bill">{$core->get_Lang('Note')}: {$checkBillingHistoryCashback.note}</p>
									<button id="success_bill_cashback" class="btn_success_bill" type="button" data-billing_id="{$checkBillingHistoryCashback.billing_history_id}" value="SUCCESS">{$core->get_Lang('Payment')}</button>
								{else}
								<p class="title_add_pay">{$core->get_Lang('Extra cashback')}</p>
								<p class="error" style="color: red;display: none;margin-bottom: 10px;"></p>
								<div class="box_add_money">
									<p class="title_item">{$core->get_Lang('Amount Money')}</label>
									<div class=" d-flex align-items-center">
										<div class="box_input">
											<input class="price_tour" type="text" name="money" value="0" max="{$max_cashback}" >
											<span class="rate">{$clsISO->getRate()}</span>
										</div>
									</div>
								</div>
								<div class="box_add_money mgb15">
									<p class="title_item">{$core->get_Lang('Notes')}</label>
									<textarea name="note" id="" cols="30" rows="10" class="note"></textarea>
								</div>
								<div class="box_footer_payment justify-content-end">
									<button class="btn_save mr5" id="cancel" type="reset">{$core->get_Lang('Cancel')}</button>
									<button class="btn_pay" data-send="" onClick="billing_cashback(this)" value="CASHBACK">{$core->get_Lang('Send')}</button>
								</div>
								{/if}
							</div>
							{/if}
						</div>
					</div>
				</div>
				<!--modal bill-->
					<div class="modal fade" id="billAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
								</div>
								<div class="modal-footer">
									<div class="box_footer_modal">									
										<div class="footer_modal_left">
											<a href="" class="download" id="download_bill" target="_blank" style="display: none"><i class="fa fa-download" aria-hidden="true"></i>{$core->get_Lang('Download bill')}</a>
											<a href="javascript:void(0)" class="copy" id="copy_bill" style="display: none"><i class="fa fa-clone" aria-hidden="true"></i>{$core->get_Lang('Copy')}</a>
											<input type="hidden" id="billing_id" value="{$lstBillingHistory[i].billing_history_id}">
										</div>
										<div class="footer_modal_right">
											<button type="button" class="btn btn-default close_modal_booking" data-dismiss="modal">{$core->get_Lang('Close')}</button>
											<button type="button" class="btn btn-main btn_comfirm_bill" data-send="" id="btn_comfirm_bill" value="SAVE">{$core->get_Lang('Confirm')}</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--end modal bill-->
			</div>
			{if $tour_cart_store}
			<div class="tabbox" style="display: none">
				<div class="wrap">
					<div class="box_button mb20"><button type="button" class="btn_add_group_list" data-booking_id="{$pvalTable}">+ {$core->get_Lang("Add new")} / {$core->get_Lang('Edit')}</button>
					</div>
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead>
							<tr>
								<th class="gridheader name_responsive text-left" style="width: 200px;"><strong>{$core->get_Lang('Full name')}</strong></th>
								<th class="gridheader hiden_responsive text-left" style="width: 200px"><strong>{$core->get_Lang('Email')}</strong></th>
								<th class="gridheader hiden_responsive text-left" style="width: 200px"><strong>{$core->get_Lang('Birthday')}</strong></th>
								<th class="gridheader hiden_responsive text-left" style="width: 200px"><strong>{$core->get_Lang('Phone')}</strong></th>
								<th class="gridheader hiden_responsive text-left" style="width:130px"><strong>{$core->get_Lang('Country')}</strong></th>	
								<th class="gridheader hiden_responsive text-left"><strong>{$core->get_Lang('Address')}</strong></th>
							</tr>
						</thead>
						<tbody id="SortAble">
						{if $arr_customer}
							{foreach from=$arr_customer item=item name=i}
								<tr class="row1">	
									<td style="text-align: left" class="text-left name_service">
										<span class="title" title="{$core->get_Lang('Full name')}">{$item.full_name}</span>
									</td>
									<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('Email')}">{$item.email}</td>
									<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('Email')}">{$item.birthday}</td>
									<td class="block_responsive border_top_responsive" style="white-space:nowrap" data-title="{$core->get_Lang('Phone')}">{$item.phone}</td>

									<td class="block_responsive border_top_responsive" style="white-space:nowrap" data-title="{$core->get_Lang('Country')}">{$clsCountry->getTitle($item.country)}</td>
									<td class="block_responsive border_top_responsive" style="" data-title="{$core->get_Lang('Address')}">{$item.address}</td>
								</tr>
							{/foreach}
						{else}
							<tr class="row1">	
									<td class="text-center name_service" colspan="6">
										{$core->get_Lang('nodata')}
									</td>
								</tr>
						{/if}
						</tbody>							
					</table>
					<div class="modal right fade" id="addGroupList" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">	
								<div class="box_section box_contact">
									<a class="btn btn-primary btn_title" type="button">{$core->get_Lang('Add new')} / {$core->get_Lang('Edit')} {$core->get_Lang('group list')}</a>
									<div class="box_form">
										<form action="" method="" id="frmAddGroupList" onsubmit="return false">
											<div class="box_customer_tour">
											</div>
											<div class="row">
												<div class="col-lg-12 text-right">
													<button class="btn_cancel close_modal_booking" data-dismiss="modal">{$core->get_Lang('Cancel')}</button>
													<button class="btn_submit btn-main btnClickToSubmitAddGroupList" data-booking_id="{$pvalTable}">{$core->get_Lang('Submit')}</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{/if}
		{/if}
		<div class="tabbox" style="display: none">
			<div class="wrap">				
				<div class="page-title">
					<p class="title_box_email bold600">{$core->get_Lang('Email confirm')}</p>
					<p class="text_email">({$core->get_Lang('Email automatically sent to customers when confirming the service')})</p>
				</div>
				<div class="clearfix"></div>
				<form id="newitem" method="post" action="" enctype="multipart/form-data" class="validate-form">
					<div class="row-field">
						<div style="width: 100%;padding: 15px 22px 18px 20px;font-family: 'Segoe UI';background: #F1F1F1;font-weight: 400;color: #222222;">
							<center style="width: 100%;height: 70px;background: #101A36;">
								<div style="width: 100%;height: 100%;max-width: 650px;display: flex;justify-content: space-between;align-items:center;padding:0px 5px">
									<a href="{$DOMAIN_NAME}{$extLang}" title="IsoCMS.com"><img width="109" height="54" src="{$URL_IMAGES}/logo_isocms_mail.png" alt="IsoCMS.com"></a>
									<div style="text-align: right;color: #fff;">
										<p style="margin: 0;font-weight: 400;font-size: 14px;line-height: 19px; color: #FFFFFF;">{$core->get_Lang('Booking Code')}: {$oneItem.booking_code}</p>
										<p style="margin: 0;font-weight: 400;font-size: 14px;line-height: 19px; color: #FFFFFF;">{$core->get_Lang('Verification code')}: 12321321</p>
									</div>
								</div>
							</center>
							<!--<table style="width: 100%;max-width: 650px;">
								<tr>
									<td style="padding: 0">
										<div style="background:#fff;border-top: 5px solid #32A923;border-radius: 5px 5px 0px 0px;text-align:center;margin-top: 30px;">
											<div style="padding: 30px 30px 0px;">
												<img width="35" height="35" src="{$URL_IMAGES}/icon/icon_tick_email.png" alt="tick" style="margin-bottom: 19px">
												<h1 style="font-weight: 700;font-size: 21px;line-height: 28px;color: #32A923;margin-bottom: 34px;">{$core->get_Lang('Your service has been confirmed')}</h1>
												<div style="text-align: left;">
													<p style="font-size: 16px;line-height: 21px;margin-bottom: 17px;display: flow-root">{$core->get_Lang('Dear')} {$oneItem.full_name},</p>
													{foreach from=$tour_cart_store item=item name=i}
														{assign var=tour_id 		value=$item.tour_id_z}
														{assign var=title 			value=$clsTour->getTitle($tour_id)}
														{assign var=Depart_point 	value=$clsTour->getDepartureCity($tour_id)}
														{if $clsTour->getTextdepartureCityEnd($tour_id) != ''}
															{assign var=address 		value=$clsTour->getTextdepartureCityEnd($tour_id)}
														{else}
															{assign var=address 		value=$fullTextAddress}
														{/if}
														<p style="font-size: 16px;line-height: 21px;margin-bottom: 17px;display: flow-root"><img src="{$URL_IMAGES}/icon/icon_tick.png" alt="tick" style="margin-right: 16px;margin-right: 16px;float: left;margin-top: 6px;"><span style=" width: calc(100% - 29px); float: left; "><b>{$tour_id}: [{$Depart_point}-{$address}] {$title}</b> {$core->get_Lang('is departed from')} <b>{$Depart_point}</b> {$core->get_Lang('days')} <b>{$clsISO->converTimeToText7($item.check_in_book_z)}</b></span></p>
														<p style="font-size: 16px;line-height: 21px;margin-bottom: 17px;display: flow-root"><img src="{$URL_IMAGES}/icon/icon_tick.png" alt="tick" style="margin-right: 16px;margin-right: 16px;float: left;margin-top: 6px;"><span style=" width: calc(100% - 29px); float: left; "><b>{$core->get_Lang('Payment')}</b> {$core->get_Lang('yours will be handled by')} isoCMS. {$core->get_Lang('The')} "<b>{$core->get_Lang('Contact Information')}</b>" {$core->get_Lang('section below will give you more information')}</span></p>
														<p style="font-size: 16px;line-height: 21px;margin-bottom: 48px;display: flow-root"><img src="{$URL_IMAGES}/icon/icon_tick.png" alt="tick" style="margin-right: 16px;margin-right: 16px;float: left;margin-top: 6px;"><span style=" width: calc(100% - 29px); float: left; ">{$core->get_Lang('You can cancel for FREE until')} <b>{$clsISO->converTimeToText8($item.check_in_book_z,7,'')}</b></span></p>
													{/foreach}
												</div>
											</div>
											<div style="padding: 20px;background: rgba(245, 131, 33, 0.1);border-radius: 0px 0px 5px 5px;">
												<p style="font-size: 13px;line-height: 18px;color: #666666;width: 100%;max-width: 400px;margin: auto;">{$core->get_Lang('To view, cancel, or modify your booking, use our easy self-service')}.</p>
											</div>
										</div>
									</td>
								</tr>
								{foreach from=$tour_cart_store item=item name=i}
									{assign var=tour_id 		value=$item.tour_id_z}
									{assign var=title 			value=$clsTour->getTitle($tour_id)}
									{assign var=Depart_point 	value=$clsTour->getDepartureCity($tour_id)}
									{assign var=fullTextAddress value=$clsTour->getTextdepartureCityEnd($tour_id,'full')}
									{assign var=tour_option  	value=$clsTourOption->getTitle($item.tour__class)}
									{assign var=lstService  	value=$clsTour->getListService($tour_id)}
									{if $clsTour->getTextdepartureCityEnd($tour_id) != ''}
										{assign var=address 		value=$clsTour->getTextdepartureCityEnd($tour_id)}
									{else}
										{assign var=address 		value=$fullTextAddress}
									{/if}
									{if $item.price_deposit}
										{assign var=price_deposit  	value=$item.price_deposit}
									{else}
										{assign var=price_deposit  	value=0}
									{/if}
									{math assign="balance" equation="x-y" x=$item.total_price_z y=$price_deposit}
									
									<tr>
										<td style="padding: 0">
											<div style="background:#fff;border-radius: 5px;margin-top: 20px;padding: 30px 30px 24px;">
												<div style="padding-bottom: 20px;clear: both;height: 100%;display: flow-root;border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
													<a href="{$clsTour->getLink($tour_id)}" title="{$title}"><img width="128" height="85" src="{$clsTour->getImage($tour_id,128,85)}" alt="{$title}" style="margin-right: 20px;width: 20%;height: auto; max-width: 128px;float: left">
													<h3 style=" overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; font-weight: 700; font-size: 18px; line-height: 24px; color: #222222; width: calc(80% - 20px);float:left">{$tour_id}: [{$Depart_point}-{$address}] {$title}</h3></a>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<div style=" width: 50%; border-right: 1px solid rgba(0, 0, 0, 0.1); ">
														<p style=" font-weight: 600; margin-bottom: 10px; ">{$core->get_Lang('Departure')}</p>
														<p style=" margin-bottom: 5px; ">{$clsTour->getListDeparturePoint($tour_id)}</p>
														<p style=" margin: 0; ">{$clsISO->converTimeToText7($item.check_in_book_z)}</p>
													</div>
													<div style="text-align: right;width:50%">
														<p style=" margin-bottom: 10px; font-weight: 600; ">{$core->get_Lang('End')}</p>
														<p style=" margin-bottom: 5px; ">{$fullTextAddress}</p>
														<p style=" margin: 0; ">{$clsISO->converTimeToText5($clsTour->getTextEndDate($item.check_in_book_z,$tour_id))}</p>
													</div>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<p style=" margin: 0; ">{$core->get_Lang('Tour option')}</p>
													<p style=" margin: 0; ">{$tour_option}</p>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<p style=" margin: 0; ">{$core->get_Lang('Duration')}</p>
													<p style=" margin: 0; ">{$clsTour->getTripDuration($tour_id)}</p>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<div>
														<p style=" margin: 0; ">{$core->get_Lang('Tourer')}</p>
													</div>
													<div>
														{if $item.number_infants}<p style=" margin-bottom: 5px; ">{$item.number_infants} x {$core->get_Lang('Infants')}</p>{/if}
														{if $item.number_child_z}<p style=" margin: 0; ">{$item.number_child_z} x {$core->get_Lang('Children')}</p>{/if}
											
													</div>
												</div>
												<div style=" padding: 20px 0px; border-bottom: 1px solid rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<div>
														<p style=" margin: 0; ">{$core->get_Lang('Services bonus')}</p>
													</div>
													<div>
														<p style=" margin: 0; ">
															{if $lstService}
																{foreach from=$lstService item=itemService name=i}
																	{$clsAddOnService->getTitle($itemService)}</br>
																{/foreach}
															{/if}
														</p>
													</div>
												</div>
												<div style=" padding-top: 20px; display: flex; justify-content: space-between; font-size: 14px; line-height: 19px; ">
													<div>
														<p style=" margin: 0; ">{$core->get_Lang('Customer Contact')}</p>
													</div>
													<div style="text-align: right">
														<p style=" font-weight: 600; margin-bottom: 10px; ">{$oneItem.full_name}</p>
														<p style=" font-weight: 600; margin-bottom: 10px; ">{$oneItem.email}</p>
														<p style=" font-weight: 600; margin-bottom: 0px;">{$oneItem.phone}</p>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding: 0">
											<h2 style=" font-weight: 700; font-size: 16px; line-height: 21px; color: #222222; margin-top: 20px; ">{$core->get_Lang('Payment Details')}</h2>
											<div style="background:#fff;border-radius: 5px;text-align:center;margin-top: 18px;">
												<div style="padding: 30px">
													<p style="margin-bottom: 13px; display: flex; justify-content: space-between; font-size: 16px; line-height: 21px; ">
														<span style=" margin: 0; ">{$core->get_Lang('Total price service')}</span>
														<span style=" margin: 0; ">{$item.total_price_z|number_format:0:".":" "} đ</span>
													</p>
													<p style="margin-bottom: 13px; display: flex; justify-content: space-between; font-size: 16px; line-height: 21px; ">
														<span style=" margin: 0; ">{$core->get_Lang('Deposit')} ({if $item.deposit}{$item.deposit}{else}0{/if}%)</span>
														<span style=" margin: 0; ">{$item.price_deposit|number_format:0:".":" "} đ</span>
													</p>
													<p style="margin-bottom: 13px; display: flex; justify-content: space-between; font-size: 16px; line-height: 21px; ">
														<span style=" margin: 0; ">{$core->get_Lang('Balance')}</span>
														<span style=" margin: 0; ">{$balance|number_format:0:".":" "} đ</span>
													</p>
													<p style="margin-bottom: 13px; display: flex; justify-content: space-between; font-size: 16px; line-height: 21px; ">
														<span style=" margin: 0; font-weight: 600">{$core->get_Lang('Total payment')}</span>
														<span style=" margin: 0; font-weight: 600 ">{$item.price_deposit|number_format:0:".":" "} đ</span>
													</p>
												</div>
												<div style="padding: 18px;background: #FFE62E;border-radius: 0px 0px 5px 5px;">
													<p style="width: 100%;max-width: 440px;margin: auto;font-size: 14px;line-height: 20px;text-align: center;color: #222222;">{$core->get_Lang('You must pay')} <span style=" font-weight: 600; color: rgba(255, 0, 0, 1); ">{$balance|number_format:0:".":" "} đ</span> {$core->get_Lang('to us 1 day before departure')} ({$clsISO->converTimeToText8($item.check_in_book_z)})</p>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding: 0">
											<div style="background:#fff;border-radius: 5px;margin-top: 18px;padding: 30px;">
												<h2 style=" font-weight: 700; font-size: 18px; line-height: 24px; color: #222222; margin-bottom: 20px; ">{$core->get_Lang('Customer support')}</h2>
												<p style=" font-size: 15px; line-height: 24px; color: #222222; margin: 0; ">{$core->get_Lang('Using our convenient support mode, travelers can take action to resend confirmation, make a request, cancel a room or modify contact information')}.</p>
												<div style=" display: flex; flex-wrap: wrap; justify-content: space-between; text-align: center; ">
													<div style="min-width: 163px; width: 50%; margin-top: 33px; ">
														<div style="width: 53px;height: 53px;margin: auto;margin-bottom: 10px;background: #FFE62E;border-radius: 50%;display: flex;align-items: center;justify-content: center;"><img src="{$URL_IMAGES}/icon/icon_mail_send.png" alt=""></div>
														<p style=" width: 100%; max-width: 160px; margin: auto; font-weight: 600; font-size: 16px; line-height: 24px; text-align: center; color: #2B439F; margin-bottom: 10px; ">{$core->get_Lang('Share confirmation')}</p>
														<p style=" width: 100%; max-width: 164px; margin: auto; font-size: 14px; line-height: 20px; text-align: center; color: #222222; ">{$core->get_Lang('Resend service confirmations to yourself or others')}</p>
													</div>
													<div style="min-width: 163px; width: 50%; margin-top: 33px; ">
														<div style="width: 53px;height: 53px;margin: auto;margin-bottom: 10px;background: #FFE62E;border-radius: 50%;display: flex;align-items: center;justify-content: center;"><img src="{$URL_IMAGES}/icon/icon_story.png" alt=""></div>
														<p style=" width: 100%; max-width: 160px; margin: auto; font-weight: 600; font-size: 16px; line-height: 24px; text-align: center; color: #2B439F; margin-bottom: 10px; ">{$core->get_Lang('Special requirements')}</p>
														<p style=" width: 100%; max-width: 164px; margin: auto; font-size: 14px; line-height: 20px; text-align: center; color: #222222; ">{$core->get_Lang('Add some special requests for the best trip')}</p>
													</div>
													<div style="min-width: 163px; width: 50%; margin-top: 33px; ">
														<div style="width: 53px;height: 53px;margin: auto;margin-bottom: 10px;background: #FFE62E;border-radius: 50%;display: flex;align-items: center;justify-content: center;"><img src="{$URL_IMAGES}/icon/icon_cancel_file.png" alt=""></div>
														<p style=" width: 100%; max-width: 160px; margin: auto; font-weight: 600; font-size: 16px; line-height: 24px; text-align: center; color: #2B439F; margin-bottom: 10px; ">{$core->get_Lang('Cancel service')}</p>
														<p style=" width: 100%; max-width: 164px; margin: auto; font-size: 14px; line-height: 20px; text-align: center; color: #222222; ">{$core->get_Lang('Cancel online service easily before')} {$clsISO->converTimeToText8($item.check_in_book_z,7,'')}</p>
													</div>
													<div style="min-width: 163px; width: 50%; margin-top: 33px; ">
														<div style="width: 53px;height: 53px;margin: auto;margin-bottom: 10px;background: #FFE62E;border-radius: 50%;display: flex;align-items: center;justify-content: center;"><img src="{$URL_IMAGES}/icon/icon_contact_book.png" alt=""></div>
														<p style=" width: 100%; max-width: 160px; margin: auto; font-weight: 600; font-size: 16px; line-height: 24px; text-align: center; color: #2B439F; margin-bottom: 10px; ">{$core->get_Lang('Contact Information')}</p>
														<p style=" width: 100%; max-width: 164px; margin: auto; font-size: 14px; line-height: 20px; text-align: center; color: #222222; ">{$core->get_Lang('Change some contact information')}</p>
													</div>
												</div>
											</div>
										</td>
									</tr>
								{/foreach}
								<tr>
									<td style="padding: 0">
									{assign var=CompanyAddress value=CompanyAddress_|cat:$_LANG_ID}
										<div style="background:#fff;border-radius: 5px;margin-top: 18px;padding: 30px 30px 34px;">
											<h2 style=" font-weight: 700; font-size: 18px; line-height: 24px; color: #222222; margin-bottom: 20px; ">{$core->get_Lang('Need more support information')}?</h2>
											<p style=" font-size: 15px; line-height: 24px; color: #222222; margin-bottom: 20px; ">{$core->get_Lang('Let your hotline')} <b>{$clsConfiguration->getValue('CompanyHotline')}</b> {$core->get_Lang('always be within reach')}. {$core->get_Lang('You will need it if you want to contact our customer support')}.</p> 
											<p style=" font-size: 15px; line-height: 24px; color: #222222; margin-bottom: 20px; ">{$core->get_Lang('Quickly learn the “how” in our content diverse FAQ library')}.</p>
											<div style=" height: 46px; line-height: 46px; background: rgba(255, 230, 46, 0.2); border: 1px solid #FFE62E; text-align: center; ">
												<a href="{$clsISO->getLink('faqs')}" title="{$core->get_Lang('Faqs')}" style=" font-weight: 600; font-size: 16px;color: #000000; ">{$core->get_Lang('Questions frequently')}</a>
											</div>
											
										</div>
									</td>
								</tr>
								<tr>
									<td style="padding: 0">
										<div style="border-radius: 5px;padding: 30px 30px 34px;">
											<p style=" font-weight: 600; font-size: 14px; line-height: 19px; color: #555555; text-transform: uppercase; text-align: center; margin-bottom: 10px; ">{$core->get_Lang('Online tourism business plan')} - ISOCMS</p>
											<div style=" font-weight: 400; font-size: 14px; line-height: 19px; text-align: center; color: #555555; ">
												<p style=" margin-bottom: 5px; ">{$core->get_Lang('Phone')}: {$clsConfiguration->getValue('CompanyHotline')}</p>
												<p style=" margin-bottom: 5px; ">{$core->get_Lang('Address')}: {$clsConfiguration->getValue($CompanyAddress)}</p>
												<p style=" margin-bottom: 5px; ">{$core->get_Lang('Email')}: <a href="mailto:{$clsConfiguration->getValue('CompanyEmail')}" title="{$clsConfiguration->getValue('CompanyEmail')}">{$clsConfiguration->getValue('CompanyEmail')}</a></p>
												<p style=" margin-bottom: 20px; ">{$core->get_Lang('Website')}: <a href="https://isocms.com" title="vietiso.com">https://isocms.com</a></p>
											</div>
											<div style=" text-align: center; ">
												<a href="http://www.facebook.com/{$clsConfiguration->getValue('SiteFacebookLink')}" title="{$core->get_Lang('Facebook')}" style=" margin-right: 10px; "><img src="{$URL_IMAGES}/icon/icon_fb.png" alt="facebook"></a>
												<a href="http://www.twitter.com/{$clsConfiguration->getValue('SiteTwitterLink')}" title="{$core->get_Lang('Twitter')}" style=" margin-right: 10px; "><img src="{$URL_IMAGES}/icon/icon_twiter.png" alt="twiter"></a>
												<a href="http://www.youtube.com/{$clsConfiguration->getValue('SiteYoutubeLink')}" title="{$core->get_Lang('Youtube')}" style=" margin-right: 10px; "><img src="{$URL_IMAGES}/icon/icon_youtube.png" alt="{$core->get_Lang('Youtube')}"></a>
											</div>
										</div>
									</td>
								</tr>
							</table>-->
							{$oneItem.booking_html|html_entity_decode}
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
var text_price_min_error = "{$core->get_Lang('Price min')}";
var text_price_max_error = "{$core->get_Lang('Price max')}";
var text_price_error = "{$core->get_Lang('Amount must be greater than 0')}";
var text_payment_term_error = "{$core->get_Lang('Payment term is required')}";
var $booking_id = 	"{$pvalTable}";
var comfirm_cancel_booking="{$core->get_Lang('Are you sure cancel booking?')}";
</script>
{literal}
<style type="text/css">
.table-mce{margin:0 auto}
td{ font-size:13px !important}
.hidden { display:none !important}
</style>
<script>
	if($("#bookingTab").length>0){
		makeBookingTabs();
	}
	if($("#bookingtab").length>0){
		makeSystemBookingTab();
	}
	$('.item_tour .dropdown-toggle').click(function(){
		$(this).find('i.fa').toggleClass('fa-angle-up');
		$(this).find('i.fa').toggleClass('fa-angle-down');
	});
	$(document).on("click",'.content_pay_right .add_payment',function(){
		$(".content_pay_right .collapse").collapse('hide');
		if($(this).hasClass("collapsed")){
			$(this).next().collapse('show');
		}
	});
	$(document).on("click","#success_bill,#success_bill_cashback",function(e){
		$_this = $(this);
		var value = $_this.val();
		if(value == "SUCCESS"){
			$.ajax({
				type: "POST",
				data: {
					billing_id 		: $(this).data("billing_id"),
					status		:	1
				},
				async:false,
				url: path_ajax_script+"/index.php?mod=booking&act=ajupdateComfirmBilling",
				success: function(result){
					vietiso_loading(0);
					if(result){
						alertify.success('Success !');
						location.reload();
					}else{
						alertify.success('Error !');
						location.reload();
					}
					setTimeout(function() { 
						$_this.val("SUCCESS");
					}, 5000);
				},
				beforeSend: function (){
					$_this.val("SENDING");
					vietiso_loading(1);
				}
			});
		}
		
	});
	$(document).on('click','#cancel',function(){
		$("input[name='money']").val(0);
		$("input[name='payment_term']").val('');
		$("select[name='payment_method']").val('');
		$("textarea[name='note']").val('');
	});
	$(document).on('click','#btn_comfirm_bill',function(){
		var box_info = $("#billAdd").find("#info_customer");
		var elm_customer_name = box_info.find("input[name='name_customer']");
		var elm_customer_email = box_info.find("input[name='email_customer']");
		var elm_customer_phone = box_info.find("input[name='phone_customer']");
		var check = 0;
		console.log(elm_customer_name.val());
		if(elm_customer_name.val() == ''){
			elm_customer_name.addClass('error');
			elm_customer_name.focus();
			check = 1;
			return false;
		}else{
			elm_customer_name.removeClass('error');
		}
		if(elm_customer_email.val() == ''){
			elm_customer_email.addClass('error');
			elm_customer_email.focus();
			check = 1;
			return false;
		}else{
			if(checkValidEmail(elm_customer_email.val())==false){
				elm_customer_email.addClass('error');
				elm_customer_email.focus();
				check = 1;
				return false;
			}else{
				elm_customer_email.removeClass('error');
			}			
		}
		if(elm_customer_phone.val() == ''){
			elm_customer_phone.addClass('error');
			elm_customer_phone.focus();
			check = 1;
			return false;
		}else{
			elm_customer_phone.removeClass('error');
		}
		if(check == 0){
			billing_booking($(this))	
		}
		
	});
	$(document).on('click','.view_detail',function(){
		var billing_id = $(this).data('billing_id');
		$("#download_bill").attr("href",path_ajax_script+"/index.php?mod=booking&act=downloadPDF&billing_id="+billing_id);
		var billing_encryt = $(this).data("billencryt");
		$("#billing_id").val(DOMAIN_NAME+"/bill-"+billing_encryt);
		console.log(billing_id);
		$.ajax({
			type: "POST",
			data: {
				billing_id 		: billing_id,
			},
			dataType:"json",
			async:false,
			url: path_ajax_script+"/index.php?mod=booking&act=ajPaymentsBookingDetail",
			success: function(json){
				vietiso_loading(0);
				if(json.result){
					$("#billAdd").find('.modal-body').html(json.html);
					$("#billAdd").modal('show');
					$("#billAdd").data("billing_id",billing_id);
					$("#billAdd").data("billing_type",'PREVIEW');
					$("#download_bill,#copy_bill").show();
					$(".btn_comfirm_bill").hide();
				}
				
			},
			beforeSend:function(){
				vietiso_loading(1);
			}
		});
	});
	$(document).on('click','.close_modal_booking',function(){
		var billing_type = $("#billAdd").data('billing_type');
		if(billing_type == "SUCCESS"){
			location.reload();
		}
	});
	$(document).on('click','#copy_bill',function(){
		console.log($("#billing_id").val());
		var copyText = document.getElementById("billing_id");
		copyText.select();
		navigator.clipboard.writeText(copyText.value);
	});
function makeBookingTabs(){
	if(!$("#bookingTab").hasClass('disabled')){
		console.log('sss');
		$('#bookingTab li').each(function(tbs){
			$(this).attr('id','tab'+tbs).addClass('tab').find('a').attr('data','#bookingtab'+tbs);
		});
		$('.tabbox').each(function(tbs){
			$(this).attr('id','tab'+tbs+'box');
			$(this).attr('data',tbs);
		});
		$(".tabbox").css("display","none");
		var selectedTab;
		$("#bookingTab .tab").live('click',function(){
			if($(this).hasClass('disabled')){return false;}
			if($(this).find('a').attr('isTab')!='0'){
				var elid = $(this).attr("id");
				$(".tab").removeClass("tabselected");
				$("#"+elid).addClass("tabselected");
				if (elid != selectedTab) {
					$(".tabbox").hide();
					$("#"+elid+"box").show();
					selectedTab = elid;
				}
				if($(this).find('a').attr('submit')=='_NOT'){
					$('.submit-buttons').hide();
				}else{
					$('.submit-buttons').show();
				}
				var hs = $(this).find('a').attr('data');
				setTimeout(function(){window.location.hash = hs;},200);
			}
			return false;
		});
		selectedTab = location.hash.substring(1)!=''?location.hash.substring(8):'tab0';
		console.log(location.hash.substring(8));
		if($("#"+selectedTab+'box').length==0) selectedTab = 'tab0';
		$("#"+selectedTab).addClass("tabselected");
		$("#"+selectedTab+"box").css("display","");
		if($('#'+selectedTab).find('a').attr('submit')=='_NOT'){
			$('.submit-buttons').hide();
		}else{
			$('.submit-buttons').show();
		}
		if(location.hash.indexOf('iso')!=-1){
			setTimeout(function(){
				window.location.hash = 'iso'+selectedTab;
			},200);
		}
	}
}
	
function makeSystemBookingTab(){
	$('#bookingtab li').each(function(tbs){
		$(this).attr('id','isotab'+tbs).addClass('tab').find('a').attr('data','#bookingtab'+tbs);
	});
	$('.isotabbox').each(function(tbs){
		$(this).attr('id','isotab'+tbs+'box');
		$(this).attr('data',tbs);
	});
	$(".isotabbox").css("display","none");
	$_document.on('click', '#bookingtab .tab', function(ev){
		var tabid = $(this).attr("id");
		$("#bookingtab .tab").removeClass("tabselected");
		if($("#"+tabid+"box").is(':visible')){
			$("#"+tabid+"box").hide();
		}else{
			$(".isotabbox").hide();
			$("#"+tabid+"box").show();
			$("#bookingtab #"+tabid).addClass("tabselected");
		}
		return false;
	});
	return true;
}
function checkValidEmail(email){
	var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function editContactBooking(edit){
	var check = true;
	var data = {};
	var booking_id = $("input[name='booking_id']").val();
	if(edit == 'contact'){
		
		var full_name = $("input[name='full_name']").val();
		var birthday = $("input[name='birthday']").val();
		var email = $("input[name='email']").val();
		var phone = $("input[name='phone']").val();
		$('#mdContact').find("input.required").each(function(){
			if($(this).val() == ''){
				$(this).focus();
				check = false;
				$('#mdContact').find('.error').text('Vui lòng không bỏ qua những thông tin *');
				$('#mdContact').find('.error').show();
				return false;
			}
		});
		if(!checkValidEmail(email)){
			$("input[name='email']").focus();
			$('#mdContact').find('.error').text('Email không đúng định dạng');
			$('#mdContact').find('.error').show();
			check = false;	
			return false;
		}
		data = {
				booking_id: booking_id,
				full_name: full_name,
				birthday: birthday,
				email: email,
				phone: phone,
				submit: edit
			};
	}
	if(edit == 'note'){
		check = true;
		data = {
				booking_id: booking_id,
				note: $("textarea[name='note']").val(),
				submit: edit
			};
	}
	
	if(check){
		$('#mdContact').find('.error').text('');
		$('#mdContact').find('.error').hide();
		$.ajax({
			type: "POST",
			data: data,
			async:false,
			url: path_ajax_script+"/index.php?mod=booking&act=ajUpdateContactBooking",
			success: function(result){
				vietiso_loading(0);
				if(result){
					alertify.success('Success !');
					location.reload();
				}else{
					alertify.success('Error !');
					location.reload();
				}
				
			},beforeSend: function(){
				vietiso_loading(1);
			}
		});
	}
	
}
	
	function billing_booking(elm){
		var $_this = $(elm);
		var check = true;
		if($('.box_add_pay').find("input[name='choose_payment']:checked").val() == 0){
			var money = $('.box_add_pay').find("input[name='money_min']").val();
			money = (money !== undefined) ? money.replaceAll(" ","") : 0;
			money = parseInt(money);
		}else{
			var money = $('.box_add_pay').find("input[name='money']").val();
			money = (money !== undefined) ? money.replaceAll(" ","") : 0;
			money = parseInt(money);
		}
		var moneyMin = parseInt($('.box_add_pay').find("input[name='money']").attr('min'));
		var moneyMax = parseInt($('.box_add_pay').find("input[name='money']").attr('max'));
		var textMoneyMin = $('.box_add_pay').find("input[name='money_min']").data('min');
		var textMoneyMax = $('.box_add_pay').find("input[name='money_min']").data('max');
		
		if($('.box_add_pay').find("input[name='choose_payment']:checked").val() == 1 && (money <= 0) || money > moneyMax){
			$('.box_add_pay').find('.error').show();
			$('.box_add_pay').find('.error').html(text_price_min_error+" > 0,"+text_price_max_error+" > "+textMoneyMax);
			check = false;
			$("input[name='money']").focus();
			return false;
		}
		if($('.box_add_pay').find("input[name='payment_term']").val() == ''){
			$('.box_add_pay').find('.error').show();
			$('.box_add_pay').find('.error').text(text_payment_term_error);
			check = false;
			$("input[name='payment_term']").focus();
		}
		if(check){
			var type = $(elm).val();
			$('.box_add_pay').find('.error').hide();
			$('.box_add_pay').find('.error').text("");
			var data = {
					booking_id 		: $('.box_add_pay').find("input[name='booking_id']").val(),
					money 			: money,
					payment_method 	: $('.box_add_pay').find("select[name='payment_method']").val(),
					note 			: $('.box_add_pay').find("textarea[name='note']").val(),
					payment_term 	: $('.box_add_pay').find("input[name='payment_term']").val(),
					type			: type
				};
			if(type == 'SAVE'){
				var box_info = $("#billAdd").find("#info_customer");
				var customer_name = box_info.find("input[name='name_customer']").val();
				var customer_email = box_info.find("input[name='email_customer']").val();
				var customer_phone = box_info.find("input[name='phone_customer']").val();
				data['customer_name'] = customer_name;
				data['customer_email'] = customer_email;
				data['customer_phone'] = customer_phone;
			}
			$.ajax({
			type: "POST",
				data: data,
				dataType:"json",
				async:false,
				url: path_ajax_script+"/index.php?mod=booking&act=ajPaymentsBooking",
				success: function(json){
					$_this.removeClass("sendding");
					vietiso_loading(0);
					if(json.result){
						if(type == 'SAVE'){
							alertify.success('Success !');
							location.reload();
						}else{
							$("#billAdd").find('.modal-body').html(json.html);
							$("#billAdd").modal('show');
							$("#billAdd").data("billing_id",json.billing_id);
							$("#billAdd").data("billing_type",type);	

							$("#download_bill").attr("href",path_ajax_script+"/index.php?mod=booking&act=downloadPDF&billing_id="+json.billing_id);
							$(".btn_comfirm_bill").show();
							$("#download_bill,#copy_bill").hide();
						}

					}else{
						alertify.success('Error !');
						location.reload();
					}

				},
				beforeSend : function(){
					vietiso_loading(1);
					if(type == 'SAVE'){
						$_this.removeAttr("id");
					}
					
				}
			});
		}
		
	}
	function billing_cashback(elm){
		var $_this = $(elm);
		var check = true;
		var parent = $('.box_cashback');
		var input_money = parent.find("input[name='money']");
		var money = input_money.val();
		money = (money !== undefined) ? money.replaceAll(" ","") : 0;
		money = parseInt(money);
		var moneyMax = parseInt(input_money.attr('max'));
		var value = $_this.val();
		if(money > moneyMax){
			parent.find('.error').show();
			parent.find('.error').html(text_price_max_error+" > "+moneyMax);
			check = false;
			input_money.focus();
			return false;
		}
		if(money <= 0){
			parent.find('.error').show();
			parent.find('.error').html(text_price_min_error+" > 0");
			check = false;
			input_money.focus();
			return false;
		}
		if(check && value == "CASHBACK"){
			var type = $(elm).val();
			parent.find('.error').hide();
			parent.find('.error').text("");
			var data = {
					booking_id 		: $booking_id,
					money 			: money,
					note 			: parent.find("textarea[name='note']").val()
				};
			$.ajax({
			type: "POST",
				data: data,
				dataType:"json",
				async:false,
				url: path_ajax_script+"/index.php?mod=booking&act=ajPaymentsCashback",
				success: function(json){
					vietiso_loading(0);
					if(json.result){
						alertify.success('Success !');
						location.reload();

					}else{
						alertify.success('Error !');
						location.reload();
					}
					setTimeout(function() { 
						$_this.val("CASHBACK");
					}, 5000);

				},
				beforeSend : function(){
					vietiso_loading(1);
					$_this.val("SENDING");
					
				}
			});
		}
		
	}
</script>
{/literal}