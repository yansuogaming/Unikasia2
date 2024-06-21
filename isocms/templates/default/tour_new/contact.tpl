<main class="main_contact page_container">
    <section class="section_box section__top text-center">
        <div class="container">
            <h1 class="title">{$core->get_Lang('Contact')}</h1>
            <h2 class="intro_contact size20 mt10">
                {$core->get_Lang('If you have any questions and need support, leave your information and we will get back to you')}
            </h2>
        </div>
    </section>
    <section class="section_box bg_fff">
        <div class="container">
            <div class="supplier__contact">
                <div class="row">
                    <div class="col-sm-4 mb30_mb">
                        <div class="item d-flex">
                            <div class="item_img">
                                <img src="{$URL_IMAGES}/contact_address.jpg"  alt="{$core->get_Lang('Address')}">
                            </div>
                            <div class="item_content">
                                <h3 class="title size18 text_bold mb15">{$core->get_Lang('Address')}</h3>
                                <div class="color_666 size14_mb">
                                    {assign var=CompanyAddress1 value=CompanyAddress1_|cat:$_LANG_ID}
                                    {assign var=CompanyAddress value=CompanyAddress_|cat:$_LANG_ID}
                                    <a target="_blank" class="color_666" href="https://maps.google.it/maps?q={$clsConfiguration->getValue($CompanyAddress1)}" title="{$clsConfiguration->getValue($CompanyAddress)}">{$clsConfiguration->getValue($CompanyAddress)}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb30_mb">
                        <div class="item d-flex pdl_20">
                            <div class="item_img">
                                <img src="{$URL_IMAGES}/contact_phone.jpg"  alt="{$core->get_Lang('Hotline')}">
                            </div>
                            <div class="item_content">
                                <h3 class="title size18 text_bold mb15">{$core->get_Lang('Hotline')}</h3>
                                <div class="color_666">
                                    <a class="color_666" title="{$clsConfiguration->getValue('CompanyHotline')}" href="tel:{$clsConfiguration->getValue('CompanyHotline')}">{$clsConfiguration->getValue('CompanyHotline')}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item d-flex">
                            <div class="item_img">
                                <img src="{$URL_IMAGES}/contact_mail.jpg"  alt="{$core->get_Lang('Email')}">
                            </div>
                            <div class="item_content">
                                <h3 class="title size18 text_bold mb15">{$core->get_Lang('Email')}</h3>
                                <div class="color_666">
                                    <a class="color_666" title="{$clsConfiguration->getValue('CompanyEmail')}" href="mailto:{$clsConfiguration->getValue('CompanyEmail')}">{$clsConfiguration->getValue('CompanyEmail')}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_main">
        <div class="container">
            <form action="" method="post" id="EnquiryForm" class="enquiry_form">
                {if $cartSessionTour}
                {assign var=tour_id value=$cartSessionTour.tour_id_z}
                {assign var=title_tour value=$clsTour->getTitle($tour_id)}
                {assign var=departure_date value=$clsISO->getStrToTime($cartSessionTour.check_in_book_z)}
                {assign var=end_date value=$clsTour->getEndDate($departure_date,$tour_id)}
                {assign var=number_adult value=$cartSessionTour.number_adults_z}
                {assign var=number_child value=$cartSessionTour.number_child_z}
                {assign var=number_infant value=$cartSessionTour.number_infants_z}
                {assign var=tour__class value=$cartSessionTour.tour__class}
                <div class="infor_tour bg_fff relative">
                    <a href="javascript:void(0);" data-type="Tour" class="delete_service" key="{$key}" title="{$core->get_Lang('Delete serivce')}"><i class="fa fa-times"></i></a>
                    <h3 class="title text_bold mb15 size24 size20_mb"><a
                                href="{$clsTour->getLink($tour_id)}" title="{$title_tour}">{$title_tour}</a>
                    </h3>
                    <div class="row d-flex">
                        <div class="col-md-5 col-sm-5">
                            <p class="mb05"><strong>{$core->get_Lang('Departing')}  </strong></p>
                            <p class="departure mb0">{$clsTour->getListDeparturePoint($tour_id)}</p>
                            <p class="departure_date mb0">{$clsISO->converTimeToText5($departure_date)}</p>
                        </div>
                        <div class="col-md-1 col-sm-1 icon_arrow">

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <p class="mb05"><strong>{$core->get_Lang('End')} </strong></p>
                            <p class="departure mb0">{$clsTour->getEndCityAround($tour_id,1)}</p>
                            <p class="departure_date mb0">{$clsISO->converTimeToText5($end_date)}</p>
                        </div>
                    </div>
                    <div class="more_infor">
                        <p>
                            <strong>{$core->get_Lang('Traveler')}</strong>: {$number_adult} {$core->get_Lang('Adult(s)')} {if $number_child},{$number_child} {$core->get_Lang('Child')}{/if} {if $number_infant},{$number_infant} {$core->get_Lang('Infant')}{/if}
                        </p>
                        {if $tour__class} <p>
                            <strong>{$core->get_Lang('Travel Style')}</strong>
                            : {$clsTourOption->getTitle($tour__class)}</p>{/if}
                    </div>
                    <input type="hidden" name="tour_id" value="{$tour_id}"/>
                    <input type="hidden" name="departure_date" value="{$departure_date}"/>
                    <input type="hidden" name="end_date" value="{$end_date}"/>
                    <input type="hidden" name="number_adult" value="{$number_adult}"/>
                    <input type="hidden" name="number_child" value="{$number_child}"/>
                    <input type="hidden" name="number_infant" value="{$number_infant}"/>
                    <input type="hidden" name="tour__class" value="{$tour__class}"/>
                </div>
                {/if}
               {$core->getBlock('cart_hotel_contact_box')}
               {$core->getBlock('cart_cruise_contact_box')}
                
                {if $cartSessionVoucher}
                    {foreach from=$cartSessionVoucher item=item name=item}
                        {assign var=voucher_id value=$item.voucher_id_z}
                        {assign var=title_voucher value=$clsVoucher->getTitle($voucher_id)}
                        <div class="infor_tour bg_fff relative">
                            <h3 class="title text_bold mb15 size24 size20_mb"><a href="{$clsVoucher->getLink($voucher_id)}" title="{$title_voucher}">{$title_voucher}</a></h3>
                            <input type="hidden" name="voucher_id" value="{$voucher_id}" />
                        </div>
                    {/foreach}
                {/if}
                <p class="note size16 mb0">{$core->get_Lang('Please do not ignore the information')}*</p>
                <div class="fill_form bg_fff">
                    <h3 class="text_bold mb15 size24 size20_mb">{$core->get_Lang('Please enter contact information')}</h3>
                    <div class="group_1 box_col">
                        <div class="form-group">
                            <label for="title">{$core->get_Lang('Title')}:<span style="color:red"> *</span>
                            </label>
                            <select id="title" name="title" class="required form-booking_input find_select">
                                {$clsISO->makeSelectTitle($title)}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fullname">{$core->get_Lang('Full name')}:<span style="color:red"> *</span>
                            </label>
                            <input id="fullname" name="fullname" type="text" class="form-booking_input required" value="" autofocus>
                            <div class="clearfix"></div>
                            <div id="error_fullname" class="error text-left"></div>
                        </div>
                    </div>
                    <div class="group_2 box_col">
                        <div class="form-group">
                            <label for="birthday_contact">{$core->get_Lang('Date of Birth')}:<span style="color:red"> *</span>
                            </label>
                            <input type="hidden" name="birthday_contact" id="birthday_contact" class="form-booking_input required">
                            <div class="clearfix"></div>
                            <div id="error_birthday_contact" class="error text-left"></div>
                            {literal}
                                <script>
                                    $(function(){
                                        $("#birthday_contact").dateDropdowns({
                                            submitFieldName: 'birthday',
                                            minAge: 18,
                                            defaultDate: '1980-01-01'
                                        });
                                    });
                                </script>
                            {/literal}
                        </div>
                        <div class="form-group">
                            <label for="country_id">{$core->get_Lang('Country')}:<span style="color:red"> *</span>
                            </label>
                            <select name="country_id" id="country_id" class="form-booking_input find_select required">
                                <option value="0">{$core->get_Lang('Selected')}</option>
								{section name=i loop=$lstCountryRegion}
								<option value="{$lstCountryRegion[i].country_id}">{$lstCountryRegion[i].title}</option>
								{/section}
                            </select>
                            <div class="clearfix"></div>
                            <div id="error_country_id" class="error text-left"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">{$core->get_Lang('Email')}:<span style="color:red"> *</span>
                            </label>
                            <input id="email" name="email" type="text" placeholder="{$clsConfiguration->getValue('CompanyEmail')}" value="" class="form-booking_input required">
                            <div class="clearfix"></div>
                            <div id="error_email" class="error text-left"></div>
                        </div>
                        <div class="form-group">
                            <label for="phone">{$core->get_Lang('Telephone')}:<span id="TelephoneAsterisk" style="color:red"> *</span>
                            </label>
                            <input id="phone" name="phone" type="text" value="" class="form-booking_input required">
                            <div class="clearfix"></div>
                            <div id="error_phone" class="error"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  for="Comments">
                            {$core->get_Lang('Messager')}
                        </label>
                        <textarea class="text_box form-control" id="Comments" name="Comments" rows="2" placeholder="{$core->get_Lang('Enter what you want, ask for')}...."></textarea>
                    </div>
                </div>
                <div class="row box_col">
                    <div class="col-sm-6 col-xs-12">
                        <div class="g-recaptcha" data-sitekey="{$clsISO->getVar('reCAPTCHA_KEY')}"></div>
                        {if $errMsg ne ''}
                            <div id="error_recaptcha" class="error text_left">{$errMsg}</div>
                        {else}
                            <div id="error_recaptcha" class="error text_left"></div>
                        {/if}
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <input type="hidden" name="plantrip" value="plantrip" />
                        <input type="hidden" name="hidden_field" value="" />
                        <button type="submit" class="form-control send_contact btn_main" id="SubmitEnquiry">
                            {$core->get_Lang('Send')}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="faqs bg_fff">
        <div class="container">
            <div class="faqs_panel">
                <h2 class="size24 text_bold text-center mb20">{$core->get_Lang('FAQs')}</h2>
                <div class="accordion" id="accordionFAQs">
                    {section name=k loop=$lstFaqs}
					<div class="card">
						<div class="card-header" id="faqs_{$smarty.section.k.iteration}">
							<h3 class="title">
								<a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefaqs_{$smarty.section.k.iteration}" aria-expanded="false" aria-controls="collapsefaqs_{$smarty.section.k.iteration}">
								{$clsFAQ->getTitle($lstFaqs[k].faq_id,$lstFaqs[k])}
								<i class="fa fa-angle-up pull-right"></i>
								</a>
							</h3>
						</div>
						<div id="collapsefaqs_{$smarty.section.k.iteration}" class="collapse" aria-labelledby="faqs_{$smarty.section.k.iteration}" data-bs-parent="#accordionFAQs">
							<div class="card-body">
								<div class="detail tinymce_Content">
									{$clsFAQ->getContent($lstFaqs[k].faq_id,$lstFaqs[k])}
								</div>
							</div>
						</div>
					</div>
                    {/section}
                </div>
                <a href="{$clsISO->getLink('faqs')}" class="more_faqs mt20 d-block text-center color_5f93e7" target="_blank">{$core->get_Lang('View more')}</a>
            </div>
        </div>
    </section>
</main>


<script>
    var msg_fullname_required = "{$core->get_Lang('Your first name should not be empty')}!";
    var msg_phone_required = "{$core->get_Lang('Your telephone should not be empty')}!";
    var msg_email_required = "{$core->get_Lang('Your email should not be empty')}!";
    var msg_email_not_valid = "{$core->get_Lang('Please enter a valid email address')}!";
    var msg_country_id_not_valid = "{$core->get_Lang('Please select country')}!";
    var msg_confirmemail_not_valid = "{$core->get_Lang('Email addresses do not match')}!";
    var showInfo = "{$core->get_Lang('Show more information')}";
    var hideInfo = "{$core->get_Lang('information hidden')}";
    var Day = '{$core->get_lang("Day")}';
    var Month = '{$core->get_lang("Month")}';
    var Year = '{$core->get_lang("Year")}';
    var January = '{$core->get_lang("January")}'
    var February = '{$core->get_lang("February")}';
    var March = '{$core->get_lang("March")}';
    var April = '{$core->get_lang("April")}';
    var May = '{$core->get_lang("May")}';
    var June = '{$core->get_lang("June")}';
    var July = '{$core->get_lang("July")}';
    var August = '{$core->get_lang("August")}';
    var September = '{$core->get_lang("September")}';
    var October = '{$core->get_lang("October")}';
    var November = '{$core->get_lang("November")}';
    var December = '{$core->get_lang("December")}';
    var Jan = '{$core->get_lang("Jan")}'
    var Feb = '{$core->get_lang("Feb")}';
    var Mar = '{$core->get_lang("Mar")}';
    var Apr = '{$core->get_lang("Apr")}';
    var May = '{$core->get_lang("May")}';
    var Jun = '{$core->get_lang("Jun")}';
    var Jul = '{$core->get_lang("Jul")}';
    var Aug = '{$core->get_lang("Aug")}';
    var Sep = '{$core->get_lang("Sep")}';
    var Oct = '{$core->get_lang("Oct")}';
    var Nov = '{$core->get_lang("Nov")}';
    var Dec = '{$core->get_lang("Dec")}';
    var For = '{$core->get_lang("For")}';
    var st = '{$core->get_lang("st")}';
    var nd = '{$core->get_lang("nd")}';
    var rd = '{$core->get_lang("rd")}';
    var th = '{$core->get_lang("th")}';
    var Cancel = '{$core->get_lang("Cancel")}';
    var Confirm = '{$core->get_lang("Confirm")}';
    var delete_text = '{$core->get_lang("Are you sure you want to delete?")}';
    var remove_text = '{$core->get_lang("Are you sure you want to remove?")}';
    var loading = '{$core->get_lang("loading")}';
    var DateofBirth = '{$core->get_lang("Birthday")}';
    var msg_recapcha = "{$core->get_Lang('You must check Recaptcha')}";
</script>
<script src="{$URL_JS}/datepicker/jquery.date-dropdowns.js?v={$upd_version}"></script>
<script src="{$URL_JS}/jquery.validate.js?ver={$upd_version}"></script>
<script src="{$URL_JS}/jquery-confirm.min.js?ver={$upd_version}"></script>
{literal}
    <script>
        $(function(){
            $('#EnquiryForm').validate();
            $("#SubmitEnquiry").click(function(ev){
                var $fullname = $("#fullname").val();
                var $country_id = $("#country_id").val();
                var $email = $("#email").val();
                var $phone = $("#phone").val();
                if($("#fullname").val()==''){
                    $('#error_fullname').html(msg_fullname_required).fadeIn().delay(3000).fadeOut();
                    $("#fullname").focus();
                    return false;
                }
                if($country_id == 0){
                    $('#error_country_id').html(msg_country_id_not_valid).fadeIn().delay(3000).fadeOut();
                    $("#country_id").focus();
                    return false;
                }
                if($("#email").val()==''){
                    $('#error_email').html(msg_email_required).fadeIn().delay(3000).fadeOut();
                    $("#email").focus();
                    return false;
                }
                if(checkValidEmail($email)==false){
                    $('#error_email').html(msg_email_not_valid).fadeIn().delay(3000).fadeOut();
                    $("#email").focus();
                    return false;
                }
                if($("#phone").val()==''){
                    $('#error_phone').html(msg_phone_required).fadeIn().delay(3000).fadeOut();
                    $("#phone").focus();
                    return false;
                }
                
                if(grecaptcha.getResponse() == "") {
                    ev.preventDefault();
                    $('#error_recaptcha').html(msg_recapcha).fadeIn().delay(3000).fadeOut();
                    return false;
                } else {
                    $('#EnquiryForm').submit();
                }
            });
            $('.delete_service').click(function (){
                 var type =$(this).data('type');
                $.confirm({
                    title: Confirm,
                    content: remove_text,
                    minHeight: 100,
                    maxHeight: 200,
                    buttons: {
                        Confirm: {
                            text: Confirm,
                            action: function(){
                                $.ajax({
                                    type:'POST',
                                    url: path_ajax_script+'/index.php?mod='+mod+'&act=deleteService&lang='+LANG_ID,
                                    data:{type:type},
                                    dataType:'json',
                                    success: function (res){
                                        if(res.msg == 'ok'){
                                            window.location.reload();
                                        }
                                    }
                                });
                            }
                        },
                        Cancel: {
                            text: Cancel
                        }
                    }
                });

            });
        });
        function checkValidEmail(email){
            var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
    </script>
{/literal}