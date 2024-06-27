<link rel="stylesheet" href="{$URL_CSS}/tailor_made_tour.css?v={$upd_version}" />
<link href="https://fonts.cdnfonts.com/css/nunito-sans" rel="stylesheet">
<link rel="stylesheet" href="{$URL_CSS}/select2.min.css?v={$upd_version}">
<link rel="preload" href="{$URL_CSS}/select2.min.css?v={$upd_version}">

<section class="listblogdetail_breadcrumb">
    <div class="breadcrumb_list">
        <div class="container">
            <div class="breadcrumb">
                <h2 class="txt_youarehere">You are here:</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{PCMS_URL}" title="{$core->get_Lang('Home')}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tailor made tour</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="plantrip">
    <div class="txt_tripex">
        <div class="container">
            <h2 class="txt_plantrip">{$core->get_Lang('Plan your extraordinary trips with Unikasia')}!</h2>
            <p class="txt_desplantrip">{$core->get_Lang('Please share your preferences for your trip to Vietnam,
                Cambodia, Laos')}...: {$core->get_Lang('dates, itinerary, type of stay, accommodations')}...<br>
                {$core->get_Lang('One of our travel consultant will contact you within 24 hours to create a unique,
                tailor-made program with you')}.</p>
        </div>

    </div>
</section>
<form id="unika_tailor_form" class="unika_tailor_form" method="POST" enctype="multipart/form-data" onsubmit="return false">
    <section class="input_informationtrip">
        <div class="travelinf">
            <div class="container">
                <div class="txt_inftravel">
                    <h3 class="txt_infotravel">{$core->get_Lang('Your Travel Information’s')}</h3>

                    <div class="input_inf">
                        <div class="row">
                            <div class="col-md-4 box_validate">
                                <label for="title" class="txtlabel">{$core->get_Lang('Title')}
                                    <span style="color:black">*</span>
                                </label>
                                <select id="title" name="title"
                                    class="tailor_select2 form-select select-input-inf required">
                                    <option value="" disabled selected hidden>-- Please Select --</option>
                                    {$clsISO->makeSelectTitle($title)}
                                </select>
                            </div>
                            <div class="col-md-8 box_validate">
                                <label for="fullname" class="txtlabel">{$core->get_Lang('Full Name')}
                                    <span style="color:black"> *</span>
                                </label>
                                <input id="fullname" name="fullname" type="text"
                                    class="form-control select-input-inf required" value=""
                                    placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 box_validate">
                                <label for="nationality" class="txtlabel">{$core->get_Lang('Nationality')}
                                    <span style="color:black"> *</span>
                                </label>
                                <select name="country_id" id="nationality"
                                    class="tailor_select2 form-select select-input-inf required">
                                    <option value="" disabled selected hidden>-- {$core->get_Lang('Please Select')} --
                                    </option>
                                    {section name=i loop=$lstCountryRegion}
                                    <option value="{$lstCountryRegion[i].country_id}">{$lstCountryRegion[i].title}
                                    </option>
                                    {/section}
                                </select>
                            </div>
                            <div class="col-md-4 box_validate">
                                <label for="email" class="txtlabel">{$core->get_Lang('Email')}
                                    <span style="color:black"> *</span>
                                </label>
                                <input id="email" name="email" type="text"
                                    class="form-control select-input-inf required" value=""
                                    placeholder="Enter your mail">
                            </div>
                            <div class="col-md-4 box_validate">
                                <label for="phone" class="txtlabel">{$core->get_Lang('Phone Number')}
                                    <span style="color:black"> *</span>
                                </label>
                                <input id="phone" name="phone" type="text"
                                    class="unika_tailor_phone form-control select-input-inf required"
                                    placeholder="Enter your phone">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="socialMedia" class="txtlabel">{$core->get_Lang('Social Media')}</label>
                                <input type="text" class="form-control select-input-inf" id="socialMedia" name="social_media"
                                    placeholder="Facebook, Whatsapp, Zalo,..">
                            </div>
                        </div>
                    </div>

                </div>


            </div>

    </section>

    <section class="input_informationtrip">
        <div class="travelinf">
            <div class="container">
                <div class="txt_inftravel">
                    <h3 class="txt_infotravel">{$core->get_Lang('Your Travel’s Preferences')}</h3>

                    <div class="input_inf">
                        <div class="row">

                            <div class="col-md-4">
                                <label for="traveldate" class="txtlabel">{$core->get_Lang('Travel Date')}</label>
                                <p class="txt_smalltrip">{$core->get_Lang('approximately')}</p>
                                <div class="input-group">
                                    <i class="fa-solid fa-calendar"></i>
                                    <input type="text" class="form-control wpcf7-datepicker" autocomplete="off"
                                        name="arrival_date" id="arrival_date" placeholder="Apr 1, 2024"
                                        value='{$PostVal.arrival_date|date_format:"%b %e, %Y"}' />
                                </div>
                                <div id="error_arrival_date" class="error"></div>
                            </div>


                            <div class="col-md-4">
                                <label for="duration" class="txtlabel">{$core->get_Lang('Duration')}</label>
                                <p class="txt_smalltrip">{$core->get_Lang('in Days')}</p>

                                <input type="duration" name="datution" class="form-control select-input-inf" id="duration"
                                    placeholder="Example: 7 Days">
                            </div>
                            <div class="col-md-4">
                                <label for="bugetperson" class="txtlabel">{$core->get_Lang('Budget per person')}</label>
                                <p class="txt_smalltrip">{$core->get_Lang('excluding international flights')}</p>

                                <input type="text" name="budget" class="form-control select-input-inf" id="bugetperson"
                                    placeholder="Example: 2.000$">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="arrival-airport" class="txtlabel">
                                    {$core->get_Lang('Arrival Airport')}
                                </label>
                                <select class="tailor_select2 form-select select-input-inf" name="arrival_airport" id="arrival-airport">
                                    {$clsTailorProperty->getSelectByProperty('_ARRIVAL_AIRPORT')}
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="tourguide" class="txtlabel ">{$core->get_Lang('Tour guide
                                    preference')}</label>
                                <select class="tailor_select2 form-select select-input-inf" name="tour_guide" id="tourguide">
                                    {$clsTailorProperty->getSelectByProperty('_TOUR_GUIDE')}
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="choose-participants">
                                    <div class="label_box">
                                        <label for="participants" class="txtlabel">
                                            {$core->get_Lang('Participants')}
                                        </label>
                                    </div>
                                    <div class="tailor_participant_txt">
                                        <div>
                                            <i class="fa-regular fa-user-vneck"></i>
                                            <span class="tailor_participant_text">1 Adults</span>
                                        </div>
                                        <i class="fa-light fa-chevron-down"></i>
                                    </div>
                                    <div class="tailor_participants">
                                        <div class="tailor_participant_content">
                                            <div class="tailor_participant_item">
                                                <div class="tailor_participant_item_txt">
                                                    Adults
                                                </div>
                                                <div class="tailor_participant_event">
                                                    <div class="tailor_minus">
                                                        <i class="fa-regular fa-minus"></i>
                                                    </div>
                                                    <input inputmode="numeric" class="unika_inp_participant" pattern="[0-9]*" name="adults" value="0">
                                                    <div class="tailor_plus">
                                                        <i class="fa-regular fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tailor_participant_item">
                                                <div class="tailor_participant_item_txt">
                                                    Children
                                                </div>
                                                <div class="tailor_participant_event">
                                                    <div class="tailor_minus">
                                                        <i class="fa-regular fa-minus"></i>
                                                    </div>
                                                    <input inputmode="numeric" class="unika_inp_participant" pattern="[0-9]*" name="children" value="0">
                                                    <div class="tailor_plus">
                                                        <i class="fa-regular fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tailor_participant_item">
                                                <div class="tailor_participant_item_txt">
                                                    Infants
                                                </div>
                                                <div class="tailor_participant_event">
                                                    <div class="tailor_minus">
                                                        <i class="fa-regular fa-minus"></i>
                                                    </div>
                                                    <input inputmode="numeric" class="unika_inp_participant" pattern="[0-9]*" name="infants" value="0">
                                                    <div class="tailor_plus">
                                                        <i class="fa-regular fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="travelstyles" class="txtlabel ">
                                    {$core->get_Lang('Travel Styles &amp; Activities')}
                                </label>
                                <select class="tailor_select2 form-select select-input-inf" name="travel_style" id="travelstyles">
                                    <option value="">-- Travel Styles --</option>
                                    {section name=i loop=$listTravelStyle}
                                    {assign var=tourcat_id value=$listTravelStyle[i].tourcat_id}
                                    <option value="{$tourcat_id}">
                                        {$clsTourCategory->getTitle($tourcat_id)}
                                    </option>
                                    {/section}

                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="meals" class="txtlabel">{$core->get_Lang('Meals')}</label>
                                <select class="tailor_select2 form-select select-input-inf" id="meals" name="meals">
                                    {$clsTailorProperty->getSelectByProperty('_MEALS')}
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="suitabletime" class="txtlabel">The most suitable time to reach you</label>
                                <input type="text" name="suitable" class="form-control select-input-inf" id="suitabletime"
                                    placeholder="In the morning, the afternoon,... or at a specific time">
                            </div>
                        </div>
                        <hr style="background: #D3DCE1;">

                        <div class="checkbox_destination">
                            <h3 class="txt_destinations">{$core->get_Lang('Destinations')}</h3>
                            <div class="list_checkboxtravel">
                                <div class="mt-3">
                                    <div class="accordion" id="accordionPanelsStayOpenDestiantion">
                                        {section name=i loop=$lstCountry}
                                        <div class="accordion-item">
                                            <div class="accordion-header"
                                                id="panelsStayOpen-heading{$lstCountry[i].country_id}">
                                                <div class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse{$lstCountry[i].country_id}"
                                                    aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapse{$lstCountry[i].country_id}">
                                                    <label class="form-check-label unika_checkbox"
                                                        for="chkAccordion{$lstCountry[i].country_id}All">
                                                        {$lstCountry[i].title}
                                                        <input class="form-check-input chkAll me-2 unika_check_all"
                                                            type="checkbox" value=""
                                                            id="chkAccordion{$lstCountry[i].country_id}All">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="panelsStayOpen-collapse{$lstCountry[i].country_id}"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-heading{$lstCountry[i].country_id}">
                                                <div class="accordion-body d-flex flex-wrap" style="gap:12px">
                                                    {assign var=cities value=$clsCountryEx->getListCity($lstCountry[i].country_id)}
                                                    {section name=t loop=$cities}
                                                    <div class="form-check form-region mr-12">
                                                        <label class="unika_checkbox"
                                                            for="chkAccordion{$lstCountry[i].country_id}Child{$cities[t].city_id}">{$clsCity->getTitle($cities[t].city_id)}
                                                            <input class="form-check-region" name="destinations[{$lstCountry[i].country_id}]['city_id']" type="checkbox" value="{{$cities[t].city_id}}"
                                                                id="chkAccordion{$lstCountry[i].country_id}Child{$cities[t].city_id}">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    {/section}
                                                    <input type="text" name="destinations[{$lstCountry[i].country_id}]['text']" class="unika_city_txt form-control select-input-inf"
                                                        id="input-other" placeholder="Other">
                                                </div>
                                            </div>
                                        </div>
                                        {/section}
                                    </div>
                                </div>
                            </div>
                            <hr style="background: #D3DCE1; margin: 24px 0 24px 0;">
                            <div class="prefence_acco">
                                <h3 class="txt_destinations">Accommodations preference</h3>
                                <div class="select-checkbox-prefer">
                                    <label for="accommodations" class="txtlabel">Accommodations</label>
                                    <select class="tailor_select2 form-select select-input-inf" name="accommodations" id="accommodations">
                                        {$clsTailorProperty->getSelectByProperty('_ACCOMMODATIONS')}
                                    </select>
                                </div>
                                <div class="checkbox_type">
                                    <p class="txt_roomtype" style="margin: 26px 0 8px 0">Type of room you prefer</p>
                                    <div class="checkbox-room">
                                        <div class="accordion-body d-flex flex-wrap">
                                            {assign var=roomClass value=$clsTailorProperty->getListByProperty('_ROOM_CLASS')}
                                            {section name=i loop=$roomClass}
                                            <div class="form-check form-region me-3">
                                                <label class="unika_checkbox"
                                                    for="unika_room_{$roomClass[i].tailor_property_id}">
                                                    {$roomClass[i].title}
                                                    <input class="form-check-region" type="checkbox" name="type_room[]"
                                                        id="unika_room_{$roomClass[i].tailor_property_id}" value="{$roomClass[i].tailor_property_id}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            {/section}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="input_informationtrip">
        <div class="travelinf">
            <div class="container">
                <div class="txt_inftravel">
                    <h3 class="txt_infotravel">Your Special Requirements</h3>

                    <div class="input_inf2">
                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control input_txttravel" name="special" cols="255" rows="5"
                                    placeholder="Any must-see landmarks in your bucket list, desired accommodations, special food requirements, allergies…"
                                    name="notes" style="height: 152px;"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    </section>

    <section class="input_informationtrip">
        <div class="travelinf">
            <div class="container">
                <div class="txt_captcha_btn">
                    <p class="txt_requirement2">
                        *One of our Tailor-Made consultants will be in touch within 24 business hours.
                    </p>
                    <p class="txt_requirement2">
                        If you don't receive ourconfirmation email after 1 working day, please check your spam email. It
                        may
                        go to your spam mailbox.
                    </p>

                    <!-- <div class="g-recaptcha required" data-sitekey="{$clsISO->getVar('reCAPTCHA_KEY')}" data-type="image"></div>
                    {if $errMsg ne ''}
                    <div id="error_recaptcha" class="error text_left">{$errMsg}</div>
                    {else}
                    <div id="error_recaptcha" class="error text_left"></div>
                    {/if} -->

                    <div class="h-captcha mt-2 required" data-sitekey="9e108520-d014-48bc-8322-d6d8c1c20db8" style="text-align: center;"></div>
                    <!-- <div class="g-recaptcha" data-sitekey="6LfH7cMpAAAAAAKENYh7nqX8XErSJ3kQIjNoN5KP" data-type="image"></div>
          </div> -->

                    <div class="btn_rqfQ text-center">
                        <input type="hidden" name="plantrip" value="plantrip" />
                        <input type="hidden" name="hidden_field" value="" />
                        <button type="submit" class="btn btnrq" id="SubmitEnquiry">
                            {$core->get_Lang('Request for Quotation')}
                        </button>
                    </div>

                </div>
            </div>
    </section>
</form>

<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<script src="https://js.hcaptcha.com/1/api.js?hl=en" async defer></script>

<script>
    // Lấy ngôn ngữ của trang web từ thuộc tính lang của thẻ html
    var pageLang = document.documentElement.lang;

    // Tạo URL cho hCaptcha với tham số ngôn ngữ
    var hcaptchaScript = document.createElement('script');
    hcaptchaScript.src = 'https://hcaptcha.com/1/api.js?hl=' + pageLang;
    hcaptchaScript.async = true;
    hcaptchaScript.defer = true;

    // Thêm script vào trang web
    document.head.appendChild(hcaptchaScript);
  </script>



{literal}
<script>
    $(document).ready(function () {
        $('.unika_header').removeClass('unika_header_2');

        $(window).scroll(function () {
            requestAnimationFrame(function () {
                $('.unika_header').removeClass('unika_header_2');
            });
        });
    });


    if ($('.wpcf7-datepicker').length) {
        $('.wpcf7-datepicker').datepicker({
            dateFormat: "MM d, yy",
            minDate: new Date()
        });
    }
</script>
{/literal}

<script>
    var msg_title_required = "{$core->get_Lang('Your title should not be empty')}";
    var msg_fullname_required = "{$core->get_Lang('Your full name should not be empty')}!";
    var msg_phone_required = "{$core->get_Lang('Your telephone should not be empty')}!";
    var msg_email_required = "{$core->get_Lang('Your email should not be empty')}!";
    var msg_email_not_valid = "{$core->get_Lang('Please enter a valid email address')}!";
    var msg_country_id_not_valid = "{$core->get_Lang('Please select country')}!";
    var msg_confirmemail_not_valid = "{$core->get_Lang('Email addresses do not match')}!";
    var showInfo = "{$core->get_Lang('Show more information')}";
    var hideInfo = "{$core->get_Lang('information hidden')}";

    var Cancel = '{$core->get_lang("Cancel")}';
    var Confirm = '{$core->get_lang("Confirm")}';
    var loading = '{$core->get_lang("loading")}';
    var DateofBirth = '{$core->get_lang("Birthday")}';
    var msg_recapcha = "{$core->get_Lang('You must check Recaptcha')}";
</script>

<script src="{$URL_JS}/datepicker/jquery.date-dropdowns.js?v={$upd_version}"></script>
<script src="{$URL_JS}/jquery.validate.js?ver={$upd_version}"></script>
<script src="{$URL_JS}/jquery-confirm.min.js?ver={$upd_version}"></script>
<script src="{$URL_JS}/select2.min.js?v={$upd_version}"></script>
{literal}
<script>
    $(function () {
        $('.tailor_select2').select2();

        // validate form
        $('#unika_tailor_form').validate({
            errorPlacement: function (error, element) {
                error.appendTo(element.parents(".box_validate"));
                error.wrap("<span class='errors'>");
                element.parents('.box_validate').addClass('validate_input');
            },
            highlight: function (element) {
                $(element).parents('.box_validate').addClass('validate_input')
                $(element).addClass('form-control-danger')
            },
            success: function (label, element) {
                $(element).parents('.box_validate').removeClass('validate_input')
                $(element).removeClass('form-control-danger')
                label.parents('.errors').remove();
            },
            ignore: [],
            debug: false,
            rules: {
                title: "required",
                fullname: "required",
                country_id: "required",
                email: {
                    required: true,
                    email: true
                },
                phone: "required",
                recapcha: "required",
            },
            messages: {
                title: msg_title_required,
                fullname: msg_fullname_required,
                country_id: msg_country_id_not_valid,
                email: {
                    required: msg_email_required,
                    email: msg_email_not_valid
                },
                phone: msg_phone_required,
                recapcha: msg_recapcha,
            },
            submitHandler: function () {
                let formData = new FormData();

                $('#unika_tailor_form').find('input, select, textarea').each(function(){
                    let name_val = $(this).attr('name');
                    let value = $(this).val();
                    if(!$(this).hasClass('unika_check_all')){
                        let is_check_parents = $(this).parents('.accordion-item').find('.unika_check_all').prop('checked')
                        if($(this).hasClass('form-check-region')){
                            if($(this).prop('checked') && is_check_parents){
                                formData.append(name_val, value);
                            }
                        }else if($(this).hasClass('unika_city_txt')){
                            if(value != '' && is_check_parents){
                                formData.append(name_val, value);
                            }
                        }else{
                            formData.append(name_val, value);
                        }
                        
                    }
                })

                $.ajax({
                    type: "POST",
                    url: "/index.php?mod="+mod+"&act=ajaxTailorMadeTour",
                    data: formData,
                    processData: false, 
                    beforeSend: function (xhr) {
                        $('.unika_item_submit').val("Processing...").prop('disabled', true);
                    },
                    dataType: "JSON",
                    contentType: false,
                    success: function (res) {
                        $('#download_brochure').val("Submit your review");
                        alert("Successfully! Please check email!");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Lỗi:', textStatus, errorThrown);
                    }
                });
            }
        });

        $(document)
            .on('change', '.select2-hidden-accessible', function () {
                $(this).valid();
            })
            .on('click', '.accordion-button', function () {
                let unika_check_all = $(this).find('.unika_check_all');
                let accordion_collapse = $(this).parents('.accordion-item').find('.accordion-collapse');
                if ($(this).hasClass('collapsed')) {
                    unika_check_all.prop('checked', false);
                    accordion_collapse.find('.unika_city_txt').val('');
                    accordion_collapse.find('.form-region').removeClass('active');
                    accordion_collapse.find('input').prop('checked', false);
                } else {
                    unika_check_all.prop('checked', true);
                }
            })
            .on('click', '.unika_checkbox', function () {
                let form_region = $(this).parents('.form-region');
                if ($(this).find('.form-check-region').prop('checked')) {
                    form_region.addClass('active');
                } else {
                    form_region.removeClass('active');
                }

            })
            .on('click', '.tailor_participant_txt', function () {
                $('.tailor_participants').slideToggle();
            })
            .on('click', function (event) {
                var target = $(event.target);
                if (!target.closest('.tailor_participant_txt').length && $('.tailor_participant_txt').is(":visible") && !target.closest('.tailor_participants').length && $('.tailor_participants').is(":visible")) {
                    $('.tailor_participants').hide();
                }
            })
            .on('click', '.tailor_plus', function () {
                let tailor_input = $(this).parents('.tailor_participant_event').find('input');
                let inp_val = tailor_input.val();
                inp_val = parseInt(inp_val) + 1;
                tailor_input.val(inp_val);
                participantText();
            })
            .on('click', '.tailor_minus', function () {
                let tailor_input = $(this).parents('.tailor_participant_event').find('input');
                let inp_val = tailor_input.val();
                inp_val = parseInt(inp_val) - 1;
                inp_val = inp_val < 0 ? 0 : inp_val;
                tailor_input.val(inp_val);
                participantText();
            })
            .on('keyup', '.tailor_participant_event input', function () {
                let inp_val = $(this).val();
                inp_val = inp_val.replace(/^0+/, '');

                if (!/^\d*$/.test(inp_val)) {
                    inp_val = inp_val.replace(/[^0-9]/g, '').replace(/^0+/, '');
                }

                $(this).val(inp_val);
                if($(this).hasClass('unika_inp_participant ')){
                    participantText();
                }
            })
            .on('keyup', '.unika_tailor_phone', function () {
                let inp_val = $(this).val();
                inp_val = inp_val.replace(/^0+/, '');

                if (!/^\d*$/.test(inp_val)) {
                    inp_val = inp_val.replace(/[^0-9]/g, '');
                }

                $(this).val(inp_val);
            })

        function participantText(){
            let html = '';
            let length = $('.unika_inp_participant').length;

            $('.unika_inp_participant').each(function(index, val){
                let index_new = index + 1;
                let name = $(this).attr('name');
                let value = $(this).val();

                if(value != 0){
                    html += `${value} ${name} ${index_new == length ? '' : ', '} `
                }
            })

            $('.tailor_participant_text').text(html);
        }

        if (hrecaptcha.getResponse(0) === "") {
      $('#error_recaptcha').html(msg_recapcha).fadeIn().delay(3000).fadeOut();
      return false;
    }
    });
</script>
{/literal}