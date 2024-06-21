<form class="form_booking_now" action="" method="post">
    {if empty($exceeded_seat)}
        {if !empty($total_price)}
            {assign var=total_price_promotion_z value=$total_price_promotion|number_format:0:".":","}
            <div class="box__price_table">
                <div class="box__price--header d-flex">
                    <div class="box_left">
                        <h4 class="text_bold mt0">{$clsTour->getTitle($tour_id)}</h4>
                        {if $title_seat}
						<p class="mb0 title_seat">{$title_seat}</p>
						{else}
						<p class="color_1fb69a mb0">{$core->get_Lang('Still enough spaces left for you')}</p>
                        {/if}

                    </div>
					{if $_LANG_ID eq 'vn'}
                    <div class="box_right">
                        <p class="color_666 text_bold mb0">{$core->get_Lang('Total Price')}</p>
                        <div class="price">
                            {if $promotion}
                                <del class="mgr05">{$total_price|number_format:0:".":","} {$clsISO->getShortRate()}</del>
                            {/if}
                            <span class="size28 color_fb1111 text_bold">{$total_price_promotion_z} <span class="size20">{$clsISO->getShortRate()}</span></span>
                        </div>
                    </div>
					{else}
					<div class="box_right">
                        <p class="color_666 text_bold mb0">{$core->get_Lang('Total Price')}</p>
                        <div class="price">
                            {if $promotion}
                                <del class="mgr05"> {$clsISO->getShortRate()}{$total_price|number_format:0:".":","}</del>
                            {/if}
                            <span class="size28 color_fb1111 text_bold"><span class="size20">{$clsISO->getShortRate()}</span>{$total_price_promotion_z} </span>
                        </div>
                    </div>
					{/if}
                </div>
                <div class="box_avaiable_detail d-flex">
                    <div class="box_left">
                        <p class="text_bold">{$core->get_Lang('Select Travel Style')}:</p>
                        <select class="select--tour__class" name="tour__class" id="tour__class">
                            {section name=i loop=$lstOption}
                                <option value="{$lstOption[i]}" {if $tour_class_id eq $lstOption[i]} selected="selected" {/if}>{$clsTourOption->getTitle($lstOption[i])}</option>
                            {/section}
                        </select>
                    </div>
					{if $_LANG_ID eq 'vn'}
                    <div class="box_right">
                        <p class="text_bold">{$core->get_Lang('Price detail')}</p>
                        <ul class="list_style_none list_detail_price">
                            <li><span class="w_240 text_left">{$number_adults} {$core->get_Lang('Adults')}</span> <span class="w_120 text_right">x {$price_adults|number_format:0:".":","} {$clsISO->getShortRate()}</span> <span class="price text_right">{$total_price_adults|number_format:0:".":","} {$clsISO->getShortRate()}</span></li>
                            {if $number_child}
							<li><span class="w_240 text_left">{$number_child} {$core->get_Lang('Children')}</span> <span class="w_120 text_right">x {$price_child|number_format:0:".":","} {$clsISO->getShortRate()}</span> <span class="price text_right">{$total_price_child|number_format:0:".":","} {$clsISO->getShortRate()}</span></li>
                            {/if}
                            {if $number_infants}
							<li><span class="w_240 text_left">{$number_infants} {$core->get_Lang('Infants')}</span> <span class="w_120 text_right">x {$price_infants|number_format:0:".":","} {$clsISO->getShortRate()}</span> <span class="price text_right">{$total_price_infants|number_format:0:".":","} {$clsISO->getShortRate()}</span></li>
                            {/if}
                            {if $promotion}
								{if $discount_type eq '2'}
									<li class="promotion color_1fb69a "> <span class="w_240 text_left">{$core->get_Lang('Promotion')}</span> <span class="w_120 text_right">-{$promotion}%</span> <span class="price text_right">-{$price_promotion|number_format:0:".":","} {$clsISO->getShortRate()}</span></li>
								{else}
									<li class="promotion color_1fb69a "> <span class="w_240 text_left">{$core->get_Lang('Promotion')}</span> <span class="w_120 text_right">-{$promotion|number_format:0:".":","}  {$clsISO->getShortRate()}</span> <span class="price text_right">-{$price_promotion|number_format:0:".":","} {$clsISO->getShortRate()}</span></li>
								{/if}
                            {/if}
                        </ul>
                        <ul class="list_style_none list_detail_price" id="box__price__addon"></ul>
                        <ul class="list_style_none list_detail_price">
                            <li class="total_price">
                                <span class="total size20">
                                    {$core->get_Lang('Grand total')}:
                                </span>
                                <span class="price text_right size20 color_fb1111 text_bold" >
                                    <span id="grand_total" grand_total="{$total_price_promotion}">{$total_price_promotion_z}</span> <span class="size18"> {$clsISO->getShortRate()}</span>
                                </span>
                            </li>
                        </ul>
                    </div>
					{else}
					<div class="box_right">
                        <p class="text_bold">{$core->get_Lang('Price detail')}</p>
                        <ul class="list_style_none list_detail_price">
                            <li><span class="w_240 text_left">{$number_adults} {$core->get_Lang('Adults')}</span> <span class="w_120 text_right">x {$clsISO->getShortRate()}{$price_adults|number_format:0:".":","} </span> <span class="price text_right">{$clsISO->getShortRate()}{$total_price_adults|number_format:0:".":","}</span></li>
                            {if $number_child}
                                <li><span class="w_240 text_left">{$number_child} {$core->get_Lang('Children')}</span> <span class="w_120 text_right">x {$clsISO->getShortRate()}{$price_child|number_format:0:".":","} </span> <span class="price text_right">{$clsISO->getShortRate()}{$total_price_child|number_format:0:".":","} </span></li>
                            {/if}
                            {if $number_infants}
                                <li><span class="w_240 text_left">{$number_infants} {$core->get_Lang('Infants')}</span> <span class="w_120 text_right">x {$clsISO->getShortRate()}{$price_infants|number_format:0:".":","} </span> <span class="price text_right">{$clsISO->getShortRate()}{$total_price_infants|number_format:0:".":","} </span></li>
                            {/if}
                            {if $promotion && $price_promotion}
                                <li class="promotion color_1fb69a "> <span class="w_240 text_left">{$core->get_Lang('Promotion')}</span> <span class="w_120 text_right">-{$promotion}%</span> <span class="price text_right">-{$clsISO->getShortRate()}{$price_promotion|number_format:0:".":","} </span></li>
                            {/if}
                        </ul>
                        <ul class="list_style_none list_detail_price" id="box__price__addon"></ul>
                        <ul class="list_style_none list_detail_price">
                            <li class="total_price">
                                <span class="total size20">
                                    {$core->get_Lang('Grand total')}:
                                </span>
                                <span class="price text_right size20 color_fb1111 text_bold" >
                                    <span class="size18"> {$clsISO->getShortRate()}</span><span id="grand_total" grand_total="{$total_price_promotion}">{$total_price_promotion_z}</span> 
                                </span>
                            </li>
                        </ul>
                    </div>
					{/if}
                </div>
            </div>
            {if $lstService}
			<div class="addon__box">
				<p class="text_bold">{$core->get_Lang('Addon services')}:</p>
				<ul class="addon__list list_style_none">
					{section name=i loop=$lstService}
						{assign var=addonservice_id value=$lstService[i].addonservice_id}
						{assign var=price value=$clsAddOnService->getPrice($addonservice_id)}
						<li class="item d-flex">
							<div class="addon__details">
								<p class="mg0 text_bold">{$clsAddOnService->getTitle($addonservice_id)}</p>
								<div class="size14 color_666 intro_addon">{$clsAddOnService->getIntro($addonservice_id)|strip_tags}</div>
							</div>
							<div class="addon__select d-flex">
								<div class="box__left">
									{if $price}
									{if $_LANG_ID eq 'vn'}
										<p class="mg0 color_1fb69a size18 text_bold">+ {$price} <span class="size14 text-lowercase">{$clsISO->getShortRate()}</span></p>
									{else}
									<p class="mg0 color_1fb69a size18 text_bold">+ <span class="size14 text-lowercase">{$clsISO->getShortRate()}</span>{$price} </p>
									{/if}
									{else}
										<p class="mg0 free">-100%</p>
									{/if}
									<p class="mg0 color_666 size14 hidden-xs">{$clsAddOnService->getNameExtra($addonservice_id)}</p>
								</div>
								<div class="box__right addon__select_val">
									<select class="select_addon" total_price="{$total_price_promotion}" addonservice_id="{$addonservice_id}"  name="number_addon[{$addonservice_id}]" id="">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
							</div>
						</li>
					{/section}
				</ul>
			</div>
            {/if}
            <div class="box__booking">
                <input type="hidden" name="tour_id_z" value="{$tour_id}" />
                <input type="hidden" name="discount_type" value="{$discount_type}" />
                <input type="hidden" name="promotion_z" id="promotion_z" value="{$promotion}" />
                <input type="hidden" name="price_promotion" value="{$price_promotion}" />
                <input type="hidden" name="number_adults_z" id="number_adults_z" value="{$number_adults}" />
                <input type="hidden" name="number_child_z" id="number_child_z" value="{$number_child}" />
                <input type="hidden" name="number_infants_z" id="number_infants_z" value="{$number_infants}" />
                <input type="hidden" name="price_adults_z" id="price_adults_z" value="{$price_adults}" />
                <input type="hidden" name="price_child_z" id="price_child_z" value="{$price_child}" />
                <input type="hidden" name="price_infants_z" id="price_infants_z" value="{$price_infants}" />
                <input type="hidden" name="total_price_adults" id="total_price_adults" value="{$total_price_adults}" />
                <input type="hidden" name="total_price_child" id="total_price_child" value="{$total_price_child}" />
                <input type="hidden" name="total_price_infants" id="total_price_infants" value="{$total_price_infants}" />
                <input type="hidden" name="check_in_book_z" id="check_in_book_z" value="{$check_in_book}" />
                <input type="hidden" name="deposit" id="deposit" value="{$deposit}" />
                <input type="hidden" name="price_deposit" id="price_deposit" value="{$price_deposit}" />
				<input type="hidden" name="total_price_z" id="total_price_z" value="{$total_price_promotion}" />
                <input type="hidden" name="total_addon" id="total_addon" value="{$total_addon_z}" />
                <input type="hidden" name="BookingTour" id="BookingTour" value="BookingTour" />
                <button class="book_now_tour btn_yellow btn_main">
                    {$core->get_Lang("Book now")}
                </button>
            </div>
        {else}
            <div class="box__price_table">
                <div class="box__price--header d-flex">
                    <div class="box_left">
                        <h4 class="text_bold mt0">{$clsTour->getTitle($tour_id)}</h4>
                        {if $title_seat}
                            <p class="mb0 title_seat">{$title_seat}</p>
                        {else}
                            <p class="color_1fb69a mb0">{$core->get_Lang('Contact us for more information')}</p>
                        {/if}

                    </div>
                    <div class="box_right">
                        <input type="hidden" name="tour_id_z" value="{$tour_id}" />
						<input type="hidden" name="promotion_z" id="promotion_z" value="{$promotion}" />
						<input type="hidden" name="price_promotion" value="{$price_promotion}" />
						<input type="hidden" name="number_adults_z" id="number_adults_z" value="{$number_adults}" />
						<input type="hidden" name="number_child_z" id="number_child_z" value="{$number_child}" />
						<input type="hidden" name="number_infants_z" id="number_infants_z" value="{$number_infants}" />
						<input type="hidden" name="price_adults_z" id="price_adults_z" value="{$price_adults}" />
						<input type="hidden" name="price_child_z" id="price_child_z" value="{$price_child}" />
						<input type="hidden" name="price_infants_z" id="price_infants_z" value="{$price_infants}" />
						<input type="hidden" name="total_price_adults" id="total_price_adults" value="{$total_price_adults}" />
						<input type="hidden" name="total_price_child" id="total_price_child" value="{$total_price_child}" />
						<input type="hidden" name="total_price_infants" id="total_price_infants" value="{$total_price_infants}" />
						<input type="hidden" name="check_in_book_z" id="check_in_book_z" value="{$check_in_book}" />
						<input type="hidden" name="deposit" id="deposit" value="{$deposit}" />
						<input type="hidden" name="price_deposit" id="price_deposit" value="{$price_deposit}" />
						<input type="hidden" name="total_price_z" id="total_price_z" value="{$total_price_promotion}" />
						<input type="hidden" name="ContactTour" id="ContactTour" value="ContactTour" />
						<button class="contact_now btn_yellow btn_main">
							{$core->get_Lang("Contact")}
						</button>
                    </div>
                </div>
                <div class="box_avaiable_detail d-flex">
                    <div class="box_left">
                        <p class="text_bold">{$core->get_Lang('Select Travel Style')}:</p>
                        <select class="select--tour__class" name="tour__class" id="tour__class">
                            {section name=i loop=$lstOption}
                                <option value="{$lstOption[i]}" {if $tour_class_id eq $lstOption[i]} selected="selected" {/if}>{$clsTourOption->getTitle($lstOption[i])}</option>
                            {/section}
                        </select>

                    </div>
                    <div class="box_right">
                        <p class="text_bold">{$core->get_Lang('Price detail')}</p>
                        <ul class="list_style_none list_detail_price">
                            <li><span class="w_120">{$number_adults} {$core->get_Lang('Adults')}</span></li>
                            {if $number_child}
                                <li><span class="w_120">{$number_child} {$core->get_Lang('Children')}</span> </li>
                            {/if}
                            {if $number_infants}
                                <li><span class="w_120">{$number_infants} {$core->get_Lang('Infants')}</span></li>
                            {/if}
                            {if $promotion && $price_promotion}
                                <li class="promotion color_1fb69a hidden"> <span class="w_120">{$core->get_Lang('Promotion')}</span> <span class="w_120">-{$promotion}%</span> <span class="price text_right">-{$price_promotion|number_format:0:".":","} {$clsISO->getShortRate()}</span></li>
                            {/if}
                        </ul>
                    </div>
                </div>
                <div class="box_avaiable_detail d-flex hidden">
                    <div class="notice">
                        <p>{$core->get_Lang('The system is updating. please contact')} <a href="{$clsISO->getLink('contact')}" target="_blank">{$core->get_Lang('here')}</a>
                            <br>{$core->get_Lang('Hotline')} <a href="tel:{$clsConfiguration->getValue('CompanyHotline')}" title="{$clsConfiguration->getValue('CompanyHotline')}" class="">{$clsConfiguration->getValue('CompanyHotline')}</a>
                        </p>
                    </div>
                </div>
            </div>
        {/if}
    {else}
        {if !empty($total_price)}
            <div class="box__price_table">
                <div class="box__price--header d-flex">
                    <div class="box_left">
                        <h4 class="text_bold mt0">{$clsTour->getTitle($tour_id)}</h4>
						{if $title_seat}
                        <p class="mb0 title_seat">{$title_seat}</p>
						{/if}
                    </div>
                    <div class="box_right">
                        <p class="color_666 text_bold mb0">{$core->get_Lang('Total Price')}</p>
                        <div class="price">
                            {if $promotion}
                                <del class="mgr05">{$total_price|number_format:0:".":","} {$clsISO->getShortRate()}</del>
                            {/if}
                            <span class="size28 color_fb1111 text_bold">{$total_price_promotion|number_format:0:".":","} <span class="size20">{$clsISO->getShortRate()}</span></span>
                        </div>
                    </div>
                </div>
                <div class="box_avaiable_detail d-flex">
                    <div class="notice">
                        <p>{$core->get_Lang('The number of people exceeded the number of seats left. Please')} <a class="repick_travellers">{$core->get_Lang('choose again')}</a> {$core->get_Lang('person number or contact')} <a class="trigger_contact" href="javascript:void(0);">{$core->get_Lang('here')}</a>
                            <br>{$core->get_Lang('Hotline')} <a href="tel:{$clsConfiguration->getValue('CompanyHotline')}" title="{$clsConfiguration->getValue('CompanyHotline')}" class="">{$clsConfiguration->getValue('CompanyHotline')}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="box__booking hidden">
                <input type="hidden" name="tour_id_z" value="{$tour_id}" />
                <input type="hidden" name="promotion_z" id="promotion_z" value="{$promotion}" />
                <input type="hidden" name="price_promotion" value="{$price_promotion}" />
                <input type="hidden" name="number_adults_z" id="number_adults_z" value="{$number_adults}" />
                <input type="hidden" name="number_child_z" id="number_child_z" value="{$number_child}" />
                <input type="hidden" name="number_infants_z" id="number_infants_z" value="{$number_infants}" />
                <input type="hidden" name="price_adults_z" id="price_adults_z" value="{$price_adults}" />
                <input type="hidden" name="price_child_z" id="price_child_z" value="{$price_child}" />
                <input type="hidden" name="price_infants_z" id="price_infants_z" value="{$price_infants}" />
                <input type="hidden" name="total_price_adults" id="total_price_adults" value="{$total_price_adults}" />
                <input type="hidden" name="total_price_child" id="total_price_child" value="{$total_price_child}" />
                <input type="hidden" name="total_price_infants" id="total_price_infants" value="{$total_price_infants}" />
                <input type="hidden" name="check_in_book_z" id="check_in_book_z" value="{$check_in_book}" />
                <input type="hidden" name="deposit" id="deposit" value="{$deposit}" />
                <input type="hidden" name="price_deposit" id="price_deposit" value="{$price_deposit}" />
                <input type="hidden" name="total_price_z" id="total_price_z" value="{$total_price_promotion}" />
                <input type="hidden" name="ContactTour" id="ContactTour" value="ContactTour" />
                <button class="contact_now btn_yellow btn_main">
                    {$core->get_Lang("Contact")}
                </button>
            </div>
        {else}
            <div class="box__price_table">
                <div class="box__price--header d-flex">
                    <div class="box_left">
                        <h4 class="text_bold mt0">{$clsTour->getTitle($tour_id)}</h4>
						{if $title_seat}
                        <p class="mb0 title_seat">{$title_seat}</p>
						{/if}
                    </div>
                    <div class="box_right">
                        <p class="color_666 text_bold mb0">{$core->get_Lang('Total Price')}</p>
                        <div class="price">

                            <span class="size24 color_fb1111 text_bold">{$core->get_Lang('Updating')}</span>
                        </div>
                    </div>
                </div>
                <div class="box_avaiable_detail d-flex">
                    <div class="notice">
                        <p>{$core->get_Lang('The number of people exceeded the number of seats left. Please')} <a class="repick_travellers">{$core->get_Lang('choose again')}</a> {$core->get_Lang('person number or contact')} <a class="trigger_contact" href="javascript:void(0);">{$core->get_Lang('here')}</a>
                            <br>{$core->get_Lang('Hotline')} <a href="tel:{$clsConfiguration->getValue('CompanyHotline')}" title="{$clsConfiguration->getValue('CompanyHotline')}" class="">{$clsConfiguration->getValue('CompanyHotline')}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="box__booking hidden">
                <input type="hidden" name="tour_id_z" value="{$tour_id}" />
                <input type="hidden" name="promotion_z" id="promotion_z" value="{$promotion}" />
                <input type="hidden" name="price_promotion" value="{$price_promotion}" />
                <input type="hidden" name="number_adults_z" id="number_adults_z" value="{$number_adults}" />
                <input type="hidden" name="number_child_z" id="number_child_z" value="{$number_child}" />
                <input type="hidden" name="number_infants_z" id="number_infants_z" value="{$number_infants}" />
                <input type="hidden" name="price_adults_z" id="price_adults_z" value="{$price_adults}" />
                <input type="hidden" name="price_child_z" id="price_child_z" value="{$price_child}" />
                <input type="hidden" name="price_infants_z" id="price_infants_z" value="{$price_infants}" />
                <input type="hidden" name="total_price_adults" id="total_price_adults" value="{$total_price_adults}" />
                <input type="hidden" name="total_price_child" id="total_price_child" value="{$total_price_child}" />
                <input type="hidden" name="total_price_infants" id="total_price_infants" value="{$total_price_infants}" />
                <input type="hidden" name="check_in_book_z" id="check_in_book_z" value="{$check_in_book}" />
                <input type="hidden" name="deposit" id="deposit" value="{$deposit}" />
                <input type="hidden" name="price_deposit" id="price_deposit" value="{$price_deposit}" />
                <input type="hidden" name="total_price_z" id="total_price_z" value="{$total_price_promotion}" />
                <input type="hidden" name="ContactTour" id="ContactTour" value="ContactTour" />
                <button class="contact_now btn_yellow btn_main">
                    {$core->get_Lang("Contact")}
                </button>
            </div>
        {/if}
    {/if}
</form>
{if $lstService}
    <script>
        var moretext ='{$core->get_Lang("See more")}';
        var lesstext='{$core->get_Lang("Hide less")}';
    </script>
    {literal}
        <script>
            var showChar = 100;
            var ellipsestext ="...";
            $('.intro_addon').each(function() {
                var content = $(this).html();
                if(content.length > showChar) {
                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);
                    var html = c +'<span class="moreellipses">' + ellipsestext+'&nbsp;</span><span class="morecontent"><span>' + h +'</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext +'</a></span>';
                    $(this).html(html);
                }
            });
            $(".morelink").click(function(){
                if($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                }else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();

                return false;
            });
        </script>
    {/literal}
{/if}
