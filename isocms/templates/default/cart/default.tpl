<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /><div class="unika_booking">
	<div class="head_booking">
		<div class="head d-flex justify-content-between align-items-center flex-wrap">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<a href="/" class="unika_logo_booking div_img">
						<img src="{$URL_IMAGES}/booking/logo.png" alt="Logo">
					</a>
					<div class="unika_contact d-flex  flex-wrap">
						<div class="email d-flex align-items-center ">
							<div class="div_img">
								<img src="{$URL_IMAGES}/booking/mail.svg" alt="Icon">
							</div>
							<span class=" SF-Pro-Medium">info@hanoivoyage.com</span>
						</div>
						<div class="phone d-flex align-items-center ">
							<div class="div_img">
								<img src="{$URL_IMAGES}/booking/phone.svg" alt="Icon">
							</div>
							<span class=" SF-Pro-Medium">Whapsapp: 0983033966</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="booking">
			<div class="container">
				<div class="d-flex justify-content-center align-items-center">
					<div class="item_booking d-flex flex-column justify-content-start align-items-center ">
						<div class="div_img">
							<img src="{$URL_IMAGES}/booking/choose_booking.svg" alt="Icon">
						</div>
						<span class=" text_booking">
                                Choose booking
						</span>
					</div>
					<div class="line1_booking"></div>
					<div class="item_booking d-flex flex-column justify-content-start align-items-center ">
						<div class="enter_info"></div>
						<span class=" text_booking ">
                                Enter info
                            </span>
					</div>
					<div class="line2_booking"></div>
					<div class="item_booking d-flex flex-column justify-content-start align-items-center ">
						<div class="payment"></div>
						<span class=" text_booking text_booking_payment">
                                Payment
                            </span>
					</div>
				</div>
			</div>
		</div>
	</div>
	{if $cartSessionService}
	{foreach from=$cartSessionService item=item name=item}
		{assign var=tour_id value=$item.tour_id_z}
		{if $tour_id}
		{assign var=departure_date value=$clsISO->getStrToTime($item.check_in_book_z)}
		{assign var=end_date value=$clsTour->getEndDate($departure_date,$tour_id)}
		{assign var=title_package value=$clsTour->getTitle($item.tour_id_z)}
		{assign var=link_package value=$clsTour->getLink($item.tour_id_z)}
		{assign var=number_adults_z value=$item.number_adults_z|default:0}
		{assign var=number_child_z value=$item.number_child_z|default:0}
		{assign var=number_infants_z value=$item.number_infants_z|default:0}
	<div class="container">
		<div class="d-flex justify-content-center main-container">
			<form class="booking_content d-flex  justify-content-between" method="POST" id="formBooking">
				<div class="booking_left d-flex flex-column align-items-center ">
					<div class="information_services item_booking_content">
						<div class="title_booking ">
							Information Services
						</div>
						<div class="content d-flex flex-column ">
							<div class="unika_travel d-flex justify-content-between align-items-start  flex-wrap">
								<div class="item_input d-flex flex-column  box_validate">
									<label for="travel_date">Travel date*</label>
									<input type="text" id="travel_date" name="travel_date" class="travel_input input_start"
										   data-class="value_travel_date" value="{$clsISO->converTimeToText5($departure_date)}">
									{assign var="numberOfDays" value=$clsTour->getNumberDay($item.tour_id_z)}
									<input type="hidden" class="days_booking" value="{$numberOfDays - 1}">
								</div>
								<div class="item_input d-flex flex-column ">
									<label for="end_date">End Date</label>
									<input type="text" id="end_date" class="input_end" data-class="value_end_date" disabled>
								</div>
							</div>
							<div class="number_travelers d-flex flex-column  box_validate" data-class="participants">
                                    <span class="title_content">
                                        Add the number of travelers to get the price of your trip
                                    </span>
								<div class="unika_number_travel d-flex align-items-center justify-content-between flex-wrap ">
									<div class="item_travelers item_content_booking d-flex  align-items-center">
										<span class="title">Adults</span>
										<div class="number d-flex " data-class="amount_adults">
											<div class="minus item_calc cursor div_img">
												<img src="{$URL_IMAGES}/booking/icon_minus.svg" alt="Icon">
											</div>
											<span
													class="d-flex align-items-center value value_travelers justify-content-center"
													name="value_travelers" onpaste="return false" contenteditable="true"
													data-price="{$item.price_adults_z}">{$number_adults_z}</span>
											<div class="plus item_calc active cursor div_img">
												<img src="{$URL_IMAGES}/booking/icon_plus.svg" alt="Icon">
											</div>
										</div>
									</div>
									<div class="item_travelers item_content_booking d-flex ">
										<div class="title d-flex flex-column">
											<span>Children</span>
											<span class="unika_travel_span">(5-10 age)</span>
										</div>
										<div class="number d-flex " data-class="amount_children">
											<div class="minus item_calc cursor div_img">
												<img src="{$URL_IMAGES}/booking/icon_minus.svg" alt="Icon">
											</div>
											<span
													class="d-flex align-items-center value value_travelers justify-content-center"
													name="value_travelers" onpaste="return false" contenteditable="true"
													data-price="2">{$number_child_z}</span>
											<div class="plus item_calc active cursor div_img">
												<img src="{$URL_IMAGES}/booking/icon_plus.svg" alt="Icon">
											</div>
										</div>
									</div>
									<div class="item_travelers item_content_booking d-flex ">
										<div class="title d-flex flex-column">
											<span>Infants</span>
											<span class="unika_travel_span">(0-4 age)</span>
										</div>
										<div class="number d-flex " data-class="amount_infants">
											<div class="minus item_calc cursor div_img">
												<img src="{$URL_IMAGES}/booking/icon_minus.svg" alt="Icon">
											</div>
											<span
													class="d-flex align-items-center value value_travelers justify-content-center"
													name="value_travelers" onpaste="return false" contenteditable="true"
													data-price="3">{$number_infants_z}</span>
											<div class="plus item_calc active cursor div_img">
												<img src="{$URL_IMAGES}/booking/icon_plus.svg" alt="Icon">
											</div>
										</div>
									</div>
								</div>
							</div>
							{if $lstRoom}
							<div class="distribution number_travelers d-flex flex-column  box_validate" data-class="room">
                                    <span class="title_content">
                                        Distribution of travelers
                                    </span>
								<div class="d-flex flex-column ">
									{section name=i loop=$lstRoom}
									<div
											class="item_distribution item_content_booking d-flex justify-content-between align-items-start  flex-wrap">
										<label class="item_checkbox">
											<div class="d-flex flex-column">
												<span class="item_checkbox_title title">{$lstRoom[i].title}</span>
												<div class="item_checkbox_money">US <span>${$clsTourPriceGroup->getPrice($tour_id,$lstRoom[i].tour_property_id,0,0,0,'TourRoom')}</span></div>
											</div>
											<input type="checkbox" name="checkbox_room" {if $clsISO->checkInArray($list_room_id,$lstRoom[i].tour_property_id)} checked {/if}>
											<span class="checkmark"></span>
										</label>
										<div class="calc_distribution number align-items-center "
											 data-class="amount_double_room">
											<div class="minus item_calc_dis cursor"></div>
											<span contenteditable="true" class="value value_distribution"
												  name="value_distribution" onpaste="return false" data-price="4">0</span>
											<div class="plus item_calc_dis cursor active"></div>
										</div>
									</div>
									{/section}
								</div>
							</div>
							{/if}
						</div>
					</div>
					<div class="other_services item_booking_content number_travelers" data-class="other-services">
						<div class="title_booking ">
							Other Services
						</div>
						<div class="content d-flex flex-column ">
							<div class="distribution d-flex flex-column ">
								{section name=i loop=$lstAddOnService}
								<div
										class="item_distribution item_content_booking d-flex justify-content-between align-items-start  flex-wrap">
									<label class="item_checkbox">
										<div class="d-flex flex-column">
											<span class="item_checkbox_title title">{$lstAddOnService[i].title}</span>
											<div class="item_checkbox_money">US <span>${$lstAddOnService[i].price}</span></div>
										</div>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
									<div class="calc_distribution number align-items-center "
										 data-class="amount_other_{$lstAddOnService[i].price}">
										<div class="minus item_calc_dis cursor"></div>
										<span contenteditable="true" class="value" onpaste="return false"
											  data-price="{$lstAddOnService[i].price}">0</span>
										<div class="plus item_calc_dis cursor active"></div>
									</div>
								</div>
								{/section}
							</div>
						</div>
					</div>
					<div class="contact_information item_booking_content">
						<div class="title_booking ">
							Contact information
						</div>
						<div class="content d-flex flex-wrap align-items-start justify-content-start flex-wrap ">
							<div class="d-flex flex-column information-3  box_validate">
								<label for="title">Title*</label>
								<select class="select2" name="title" id="title">
									<option value="">-- Please Select --</option>
									<option value="1">Option 1</option>
								</select>
							</div>
							<div class="d-flex flex-column information-7  box_validate">
								<label for="title">Full name*</label>
								<input type="text" name="full_name" class="information_input" placeholder="Enter your name">
							</div>
							<div class="d-flex flex-column information-3  box_validate">
								<label for="nationality">Nationality*</label>
								<select class="select2" name="nationality" id="nationality">
									<option value="">-- Please Select --</option>
									<option value="1">Option 1</option>
								</select>
							</div>
							<div class="d-flex flex-column information-3  box_validate">
								<label for="title">Email*</label>
								<input type="email" name="email" class="information_input" placeholder="Enter your email">
							</div>
							<div class="d-flex flex-column information-3  box_validate">
								<label for="title">Phone number*</label>
								<input type="text" name="phone" class="information_input" placeholder="Enter your phone">
							</div>
							<div class="d-flex flex-column information-3 ">
								<label for="city">City</label>
								<select class="select2" name="city" id="city">
									<option value="">-- Please Select --</option>
									<option value="1">Option 1</option>
								</select>
							</div>
							<div class="d-flex flex-column information-7 ">
								<label for="title">Address</label>
								<input type="text" name="address" class="information_input"
									   placeholder="Enter your address">
							</div>
							<label class="item_checkbox ">
								I am participating in the trip
								<input type="checkbox" name="checkbox_trip">
								<span class="checkmark"></span>
							</label>
						</div>
					</div>
					<div class="payment_methods item_booking_content">
						<div class="title_booking ">
							Payment methods
						</div>
						<div class="content d-flex flex-column ">
							<div class="type_payment d-flex flex-column ">
								<label class="item_radio">Onepay
									<input type="radio" checked name="radio" class="radio">
									<span class="checkmark"></span>
								</label>
								<div class="describe active">
                                        <span>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                            the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                            with desktop publishing software like Aldus PageMaker including versions of Lorem
                                            Ipsum
                                        </span>
								</div>
							</div>
							<div class="type_payment d-flex flex-column ">
								<label class="item_radio">Visa/Napas
									<input type="radio" name="radio" class="radio">
									<span class="checkmark"></span>
								</label>
								<div class="describe">
                                        <span>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                            the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                            with desktop publishing software like Aldus PageMaker including versions of Lorem
                                            Ipsum
                                        </span>
								</div>
							</div>
						</div>
					</div>
					<button class="btn_payment false d-flex align-items-center justify-content-center " type="submit">
						Payment
						<div class="div_img">
							<img src="images/btn_contact.svg" alt="Icon">
						</div>
					</button>
				</div>
				<div class="booking_right d-flex flex-column ">
					<div class="summary d-flex flex-column  justify-content-start">
						<div class="title SF-Pro-Medium">Summary</div>
						<div class="div_img">
							<img src="{$clsTour->getImage($item.tour_id_z, 364, 194)}" alt="Images">
						</div>
						<div class="title_content">
							<a class="title_content" href="{$link_package}" title="{$title_package}">{$title_package}</a>
						</div>
						<div class="booking_right_content d-flex flex-column ">
							<div class="item_content d-flex flex-column ">
								<div class="d-flex justify-content-between align-items-start ">
									<span class=" span_title">Travel Date:</span>
									<span class="span_content value_travel_date">{$clsISO->converTimeToText5($departure_date)}</span>
								</div>
								<div class="d-flex justify-content-between align-items-start ">
									<span class=" span_title">End Date:</span>
									<span class="span_content value_end_date"></span>
								</div>
								<div class="d-flex justify-content-between align-items-start ">
									<span class=" span_title">Duration:</span>
									<span class="span_content duration">{$clsTour->getTripDurationx($tour_id)}</span>
								</div>
							</div>
							<div class="item_content d-flex flex-column ">
								<div class="d-flex justify-content-between align-items-start ">
									<span class=" span_title">Participants:</span>
									<div class="participants span_content d-flex flex-column  align-items-end">

									</div>
								</div>
								<div class="d-flex justify-content-between align-items-start ">
									<span class=" span_title">Room:</span>
									<div class="room span_content d-flex flex-column  align-items-end">
									</div>
								</div>
							</div>
							<div class="item_content d-flex flex-column ">
								<div class="d-flex justify-content-between align-items-start  width-100">
									<span class=" span_title">Other services:</span>
									<div class="span_content d-flex flex-column  align-items-end other-services">
									</div>
								</div>
							</div>
							<div class="d-flex flex-column ">
								<div class="d-flex justify-content-between align-items-start ">
									<span class=" span_title">Total:</span>
									<span class="span_content total_booking">US ${$clsISO->formatPrice($totalGrand)}</span>
								</div>
							</div>
						</div>
					</div>
					<div class="subtotal d-flex flex-column ">
						<div class="d-flex flex-column ">
							<div class="d-flex justify-content-between align-items-start ">
								<span class=" span_title">Deposit:</span>
								<span class="span_content subtotal_booking"></span>
							</div>
						</div>
						<div class="d-flex flex-column ">
							<div class="d-flex justify-content-between align-items-start ">
								<span class="span_title">Remaining:</span>
								<span class="span_content  payment_amount"></span>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" id="total_price" value="{$clsISO->formatPrice($totalGrand)}">
			</form>
		</div>

	</div>
		{/if}
	{/foreach}
		{else}
		<div class="image_cart">
			<img src="{$URL_IMAGES}/cart.png" class="img100">
		</div>
		<div class="text">
			<h2 class="text-bold size35 mb30">{$core->get_Lang('Your cart is empty')}</h2>
			<p>{$core->get_Lang("Looks like you haven't added anything to your cart yet")}.</p>
			<a class="btn_main" href="{$DOMAIN_NAME}{$extLang}" title="{$core->get_Lang('start selection')}">{$core->get_Lang('start selection')}</a>
		</div>
	{/if}
	<div class="unika_social">
		<div class="unika_social_icons">
			<a href="https://www.youtube.com/user/vietiso" class="unika_social_icon">
				<i class="fa-brands fa-youtube" aria-hidden="true"></i>
			</a>
			<a href="https://x.com/vietiso" class="unika_social_icon">
				<i class="fa-brands fa-twitter"></i>
			</a>
			<a href="https://www.instagram.com/unikaisa" class="unika_social_icon">
				<i class="fa-brands fa-instagram" aria-hidden="true"></i>
			</a>
			<a href="https://www.facebook.com/unikasia" class="unika_social_icon">
				<i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<div class="footer_booking d-flex justify-content-center">
		<div class="container">
			<span>© 2024 Unikasia. All rights reserved.</span>
		</div>
	</div>
</div>

<script src="{$URL_JS}/cart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>