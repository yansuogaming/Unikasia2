<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
{literal}
	<style>
		@page {
			size: A4;
			margin: 20px;
		}
		@media print {
			.bill {
			page-break-inside:avoid;
				width: 100% !important;font-style: normal;line-height: normal;
				font-family: "Times New Roman";
			}
		}
		.bill {
		width: 100% !important;font-style: normal;line-height: normal;
			page-break-after: avoid;
		}
		.box_head_bill{width: 100%;display: inline-block}
		.info_bill{width: 55%;padding: 34px 0px 30px 30px;float: left}
		.info_bill h1{color: #000;font-size: 36px;font-weight: 600;margin-bottom: 10px}
		.info_bill h2{color: #000;font-family: Segoe UI;font-size: 18px;font-style: normal;font-weight: 400;line-height: normal;text-transform: uppercase}
		.info_bill .box_time{
			margin-top: 37px;display: inline-block
		}
		.info_bill .box_time .time{margin-bottom: 10px;width: fit-content;
    float: left;}
		.info_bill .box_time .time:not(:last-child) {
    margin-right: 50px;
}
		.info_bill .box_time .time label{color: #666;font-size: 14px;font-weight: 400;margin-bottom:4px}
		.info_bill .box_time .time p{color: #000;font-size: 18px;font-weight: 600;margin-bottom: 0px}
		.info_bill .box_customer{margin-top: 30px;display: inline-block}
		.info_bill .box_customer label{color: #666;font-size: 14px;font-weight: 400;margin-right: 20px;float: left;}
		.info_bill .box_customer .customer{width: 272px;float: left;}
		.info_bill .box_customer .customer p{color: #000;font-size: 16px;font-weight: 400;padding-bottom: 5px;border-bottom: 1px dashed #00000033;margin-bottom: 8px;}
		.info_bill .box_customer .customer .name{font-weight:600}
		.box_company{/*width: 45%;*/height: 287px;padding: 40px 22px;text-align: right;position: relative;float: right}
		.box_company .box_info_company{width: 206px;float: right;color: #333;text-align: right;font-size: 12px;font-weight: 400}
		.box_company .box_info_company img{margin-bottom: 19px}
		.box_company .box_info_company p:not(:last-child){margin-bottom: 3px}
		.box_infoBooking{width: 100%;padding: 0px 30px}
		.box_infoBooking .table_booking{width: 100%}
		.box_infoBooking .table_booking>thead>tr>th{color: #000;font-size:12px;font-weight: 400;text-transform: uppercase;padding: 10px 0px}
		.box_infoBooking .table_booking>thead>tr>th:first-child{width: 50%;padding: 10px 20px;text-align: left}
		.box_infoBooking .table_booking>thead>tr>th:nth-child(2){width: 10%;padding: 10px 0px;text-align: center}
		.box_infoBooking .table_booking>thead>tr>th:nth-child(3){width: 20%;padding: 10px;text-align: right}
		.box_infoBooking .table_booking>thead>tr>th:last-child{width: 20%;padding: 10px 20px;text-align: right}
		.box_infoBooking .table_booking>tbody>tr>td:last-child{padding:0}
		.box_infoBooking .table_booking .table_booking_child{width: 100%;border-radius: 5px;border: 1px solid #D9D9D9;margin-bottom: 10px}
		.box_infoBooking .table_booking .table_booking_child>thead th{padding: 13px 20px;background: #F7F7F7;border-radius: 5px 5px 5px 0px;text-align: left}
		.box_infoBooking .table_booking .table_booking_child>thead th .title_product{color: #000;font-size: 14px;font-weight: 600;margin-bottom: 5px;line-height: normal}
		.box_infoBooking .table_booking .table_booking_child>thead th .duration_product{color: #000;font-size: 12px;font-weight: 400;line-height: 18px;margin-bottom: 0px}
		.box_infoBooking .table_booking .table_booking_child>tbody td{color: #1C1C1C;font-size: 14px!important;font-weight: 400;line-height: 21px}
		.box_infoBooking .table_booking .table_booking_child>tbody td:first-child{width:50%;padding: 10px 20px;;text-align: left}
		.box_infoBooking .table_booking .table_booking_child>tbody td:nth-child(2){width:10%;padding: 0px 10px;text-align: center}
		.box_infoBooking .table_booking .table_booking_child>tbody td:nth-child(3){width:20%;padding: 10px;text-align: right}
		.box_infoBooking .table_booking .table_booking_child>tbody td:last-child{width:20%;padding: 10px 20px;text-align: right}
		.box_infoBooking .table_booking .table_booking_child .tr_promotion{background: #CFF4E0}
		.box_infoBooking .table_booking .table_booking_child .tr_promotion p {margin-bottom: 0px}
		.table_price_bill .text_price_bill{color: #666;font-size: 14px!important;font-weight: 400;line-height: 21px;vertical-align: top;padding: 6px 0px}
		.table_price_bill .lbl_total_price{width: 20%;text-align: right;color: #1C1C1C;font-size: 14px !important;font-weight: 400;line-height: 21px;padding: 6px 10px}
		.table_price_bill .price_bill{width: 20%;text-align: right;color: #1C1C1C;font-size: 14px !important;line-height: 21px;padding: 6px 10px;font-weight: 600}
		.table_price_bill .price_collect{font-size: 20px !important;}
		.table_price_bill .price_final_payment{color: #F00}
		.box_text_bottom{margin: 40px auto 25px;
			padding: 14px 20px;
			border-radius: 3px;
			background: #f583211a;
			display: inline-block;
			width:100%
		}
		.box_text_bottom img{
    		float: left;margin-right: 19px
		}
		.box_text_bottom .text{color: #333;
			font-size: 14px;
			font-weight: 400;
			line-height: normal;
			margin-bottom: 0px;
			float: left;
			width: calc(100% - 49px);
		}
	</style>
{/literal}
</head>
<body>	
	<div class="bill" style="background: url('{$URL_IMAGES}/bg_bill.png') no-repeat top right">
		<div class="box_head_bill">
			<div class="info_bill">
				<h1>#{$max_id}</h1>
				<h2>{$core->get_Lang('Bill')}</h2>
				<div class="box_time">
					<div class="time">
						<label for="">{$core->get_Lang('Release date')}</label>
						<p>{$smarty.now|date_format:"%d.%m.%Y"}</p>
					</div>
					<div class="time">
						<label for="">{$core->get_Lang('Payments term')}</label>
						<p>{$payment_term|date_format:"%d.%m.%Y"}</p>
					</div>
					<div class="time">
						<label for="">{$core->get_Lang('Code')}</label>
						<p>3434235676</p>
					</div>
				</div>
				<div class="box_customer">
					<label for="">{$core->get_Lang('Recipient')}</label>
					<div class="customer">
						<p class="name">{$oneBooking.full_name}</p>
						<p>{$oneBooking.email}</p>
						<p>{$oneBooking.phone}</p>
					</div>
				</div>
			</div>
			<div class="box_company">
				<div class="box_info_company">
					<img src="https://isocms.com/admin/isocms/templates/default/skin/images/logo_bill.png" alt="">
					{assign var=address value=CompanyAddress_$_LANG_ID}
					<p>{$clsConfiguration->getValue($address)}</p>
					<p>{$clsConfiguration->getValue('CompanyEmail')}</p>
					<p>{$clsConfiguration->getValue('CompanyPhone')}</p>
				</div>
			</div>
		</div>
		<div class="box_infoBooking">
			<table class="table_booking">
				<thead>
					<tr>
						<th>{$core->get_Lang("Service")}</th>
						<th>{$core->get_Lang('Quantily')}</th>
						<th>{$core->get_Lang('Unit price')}</th>
						<th>{$core->get_Lang('Total price')}</th>
					</tr>
				</thead>
				<tbody>
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
						{assign var=lstService  	value=$clsTour->getListService($tour_id)}
						{assign var=promotion_date value=$item.check_in_book_z|strtotime}
						{assign var=discount value=$clsISO->getPromotion($tour_id,'Tour',$oneBooking.reg_date,$promotion_date,'get_more_info')}

						<tr>
							<td colspan="4">
							<table class="table_booking_child">
								<thead>
									<tr>
										<th colspan="4">
											<p class="title_product">{$tour_id}:[{$Depart_point}-{$address}] {$title}</p>
											<p class="duration_product">({$item.check_in_book_z|replace:"-":"/"} - {$clsISO->converTimeToText6($clsTour->getTextEndDate($item.check_in_book_z,$tour_id))})</p>
										</th>
									</tr>
								</thead>
								<tbody>
									{if $item.number_adults_z}
									<tr>
										<td>{$core->get_Lang("Adult")}</td>
										<td>{$item.number_adults_z}</td>
										<td>{$item.price_adults_z|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
										<td>{$item.total_price_adults|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
									</tr>
									{/if}
									{if $item.number_child_z}
									<tr>
										<td>{$core->get_Lang("Child")}</td>
										<td>{$item.number_child_z}</td>
										<td>{$item.price_child_z|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
										<td>{$item.total_price_child|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
									</tr>
									{/if}
									{if $item.number_infants_z}
									<tr>
										<td>{$core->get_Lang("Infants")}</td>
										<td>{$item.number_infants_z}</td>
										<td>{$item.price_infants_z|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
										<td>{$item.total_price_infants|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
									</tr>
									{/if}
									{if $item.price_promotion > 0}
									<tr class="tr_promotion">
										<td>
											<p><span>{$core->get_Lang('Promotion')}:</span> {$discount.title}</p>
										</td>
										<td></td>
										<td>-{$item.promotion_z}%</td>
										<td>{$item.price_promotion|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
									</tr>
									{/if}
								</tbody>
							</table>
						</td>
					</tr>
					{/foreach}
					{/if}
					{if $hotel_cart_store}
					{foreach from=$hotel_cart_store item=item name=i}
						{assign var=hotel_id 		value=$item.hotel_id}
						{assign var=oneItemHotel 		value=$clsHotel->getOne($hotel_id,'title,address')}
						{assign var=title 			value=$clsHotel->getTitle($hotel_id,$oneItemHotel)}
						{assign var=promotion_date value=$item.check_in|strtotime}
						{assign var=discount value=$clsISO->getPromotion($hotel_id,'Hotel',$oneBooking.reg_date,$promotion_date,'info_promotion')}

						<tr>
							<td colspan="4" style="padding: 0">
								<table class="table_booking_child">
									<thead>
										<tr>
											<th colspan="4">
												<p class="title_product">{$hotel_id}:{$title}</p>
												<p class="duration_product">({$clsISO->converTimeToText6($item.check_in)} - {$clsISO->converTimeToText6($item.check_out)})</p>
											</th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$item.room item=item_room name=k}
										{math assign="price" equation="x * y" x=$item_room.number_room y=$item_room.totalprice}
										<tr>
											<td>{$clsHotelRoom->getTitle($item_room.hotel_room_id)}</td>
											<td>{$item_room.number_room}</td>
											<td>{$item_room.totalprice|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
											<td>{$price|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
										</tr>
										{/foreach}

										{if $item.totalPricePromotionHotel > 0}
										<tr class="tr_promotion" style="background: #CFF4E0">
											<td>
												<p><span>{$core->get_Lang('Promotion')}:</span> {$discount.title}</p>
											</td>
											<td></td>
											<td>-{$discount.discount_value}%</td>
											<td>{$item.totalPricePromotionHotel|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
										</tr>
										{/if}
									</tbody>
								</table>
							</td>						
						</tr>
					{/foreach}
					{/if}
					{if $cruise_cart_store}
					{foreach from=$cruise_cart_store item=item name=i}
						{assign var=cruise_id 		value=$item.cruise_id}
						{assign var=oneItemCruise 		value=$clsCruise->getOne($cruise_id,'title')}
						{assign var=title 			value=$clsCruise->getTitle($cruise_id,$oneItemCruise)}
						{assign var=promotion_date value=$item.departure_date}
						{assign var=discount value=$clsISO->getPromotion($cruise_id,'Cruise',$oneBooking.reg_date,$promotion_date,'info_promotion')}
						<tr>
							<td colspan="4">
								<table class="table_booking_child">
									<thead>
										<tr>
											<th colspan="4">
												<p class="title_product">{$cruise_id}:{$title}</p>
												<p class="duration_product">({$clsISO->converTimeToText6($item.departure_date)} - {$clsISO->converTimeToText6($clsCruiseItinerary->getTextEndDate($item.departure_date,$item.cruise_itinerary_id))})</p>
											</th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$item.cabin item=item_cabin name=k}
										<tr>
											<td>{$clsCruiseCabin->getTitle($item_cabin.cruise_cabin_id)}</td>
											<td>{$item_cabin.number_cabin}</td>
											<td>{$item_cabin.totalprice|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
											<td>{$item_cabin.totalprice|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
										</tr>
										{/foreach}

										{if $item.totalPricePromotionCruise > 0}
										<tr class="tr_promotion">
											<td>
												<p><span>{$core->get_Lang('Promotion')}:</span> {$discount.title}</p>
											</td>
											<td></td>
											<td>-{$discount.discount_value}%</td>
											<td>{$item.totalPricePromotionCruise|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
										</tr>
										{/if}
									</tbody>
								</table>
							</td>
						</tr>
					{/foreach}
					{/if}
					{if $voucher_cart_store}
					{foreach from=$voucher_cart_store item=item name=i}
						{assign var=voucher_id 		value=$item.voucher_id_z}
						{assign var=oneVoucher 			value=$clsVoucher->getOne($voucher_id,'title,price')}
						{assign var=title 			value=$oneVoucher.title}		
						{assign var=price 			value = $clsISO->parsePriceDecimal($oneVoucher.price)}	
						{math assign="price_total" equation="x * y" x=$item.voucherGroup_id y=$price}

						{assign var=discount value=$clsISO->getPromotion($voucher_id,'Voucher',$oneBooking.reg_date,$oneBooking.reg_date,'info_promotion')}
						<tr>
							<td colspan="4">
								<table class="table_booking_child">
									<thead>
										<tr>
											<th colspan="4">
												<p class="title_product">{$voucher_id}:{$title}</p>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{$core->get_Lang("Voucher")}</td>
											<td>{$item.voucherGroup_id}</td>
											<td>{$price|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
											<td>{$price_total|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
										</tr>
										{if $price_promotion}
										{math assign="price_promotion" equation="x * y/100" x=$discount.discount_value y=$price_total}
										<tr class="tr_promotion">
											<td>
												<p><span>{$core->get_Lang('Promotion')}:</span> {$discount.title}</p>
											</td>
											<td></td>
											<td>-{$discount.discount_value}%</td>
											<td>{$price_promotion|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
										</tr>
										{/if}
									</tbody>
								</table>
							</td>
						</tr>
					{/foreach}
					{/if}

					<tr>
						<td colspan="4">
							<table class="table_price_bill">
								<tbody><tr>
									<td class="text_price_bill" colspan="2" rowspan="5">Đây là phần ghi chú khi tạo 1 invoice It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</td>
								</tr>
								<tr>
									<td class="lbl_total_price">{$core->get_Lang('Total Price')}:</td>
									<td class="price_bill">{$oneBooking.totalgrand|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
								</tr>
								<tr>
									<td class="lbl_total_price">{$core->get_Lang('Deposit')}:</td>
									<td class="price_bill">{$deposit_bill|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
								</tr>
								<tr>
									<td class="lbl_total_price">{$core->get_Lang('Collect more')}:</td>
									<td class="price_bill price_collect" style="width: 20%;padding: 6px 10px;text-align: right;font-size: 20px !important;font-weight: 600;">{$money|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
								</tr>
								<tr>
									<td class="lbl_total_price">{$core->get_Lang('Final Payment')}:</td>
									<td class="price_bill price_final_payment">{$balance|number_format:0:".":" "} {$clsISO->getShortRate()}</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
				</tbody>
			</table>							
			<div class="box_text_bottom">
				<img src="{$URL_IMAGES}/icon/write.png" width="30" height="30" alt="text">
				<p class="text">(TỔNG KẾT) Bạn phải trả <span class="price_pay">{$money|number_format:0:".":" "} {$clsISO->getShortRate()}</span> bằng phương thức chuyển khoản cho nhà tổ chức du lịch trước ngày {$payment_term|date_format:"%d.%m.%Y"}. Số nợ còn lại sau khi hoàn thành thanh toán là <span class="price_subsist">{$balance|number_format:0:".":" "} {$clsISO->getShortRate()}</span></p>
			</div>
		</div>
	</div>	
</body>
</html>
