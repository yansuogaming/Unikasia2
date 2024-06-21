$(function () {
    //Select2
    $(".select2").select2();

    //Tính tổng số ngày, tổng số đêm
    function calcDayNight() {
        let travel_date = $("#travel_date").val();
        let end_date = $("#end_date").val();
        // Chuyển đổi chuỗi ngày tháng sang đối tượng Date
        let startDate = $.datepicker.parseDate("M d, yy", travel_date);
        let parsedEndDate = $.datepicker.parseDate("M d, yy", end_date);

        // Kiểm tra xem ngày nhập vào có hợp lệ không
        if(!startDate || !parsedEndDate || startDate > parsedEndDate) {
            $('.duration').text('');
            return; // Nếu không hợp lệ, không thực hiện tính toán
        }

        // Tính toán số ngày
        let timeDiff = Math.abs(parsedEndDate.getTime() - startDate.getTime());
        let totalDays = Math.ceil(timeDiff / (1000 * 3600 * 24)) + 1;

        // Tính toán số đêm
        let totalNights = totalDays - 1;

        // Tạo chuỗi kết quả
        let txt1 = totalDays === 1 ? '1 day' : `${totalDays} days`;
        let txt2 = totalNights === 1 ? '1 night' : `${totalNights} nights`;

        // Hiển thị kết quả
        $('.duration').text(`${txt1} ${txt2}`);
    }

    // Thiết lập datepicker

    $(".travel_input").datepicker({
        dateFormat: "M d, yy", // Định dạng ngày là "Apr 1, 2024"
        onSelect: function (dateText) {
            $(this).val(dateText); // Hiển thị ngày đã chọn
            let data_class = $(this).attr("data-class");
            $(`.${data_class}`).text(dateText);
            //Xoa loi validate
            $(this).parents('.item_input').find('.errors').remove();
            let days_booking = $('.days_booking').val();
            let originalDate = $(this).datepicker('getDate'); // Lấy ngày đã chọn
            originalDate.setDate(originalDate.getDate() + parseInt(days_booking)); // Tăng thêm số ngày
            let newDateText = $.datepicker.formatDate("M d, yy", originalDate);
            $(".input_end").val(newDateText);
            $('.value_end_date').text(newDateText);
            calcDayNight();
        },
    });

    let originalDate = new Date($(".travel_input").val());
    let days_booking = $('.days_booking').val();
    originalDate.setDate(originalDate.getDate() + parseInt(days_booking));
    let newDateText = $.datepicker.formatDate("M d, yy", originalDate);
    $(".input_end").val(newDateText);
    $('.value_end_date').text(newDateText);

    function eventParticipants(self, value) {

        let class_number = $(self).parents(".number");
        let number_travelers = $(self).parents(".number_travelers");
        class_number.find(".value").text(value);

        let data_class = class_number.attr("data-class");
        let class_parent = number_travelers.attr("data-class");

        if (value > 0) {
            if ($(`.${class_parent}`).find(`.${data_class}`).length > 0) {
                $(`.${data_class}`).text(value);
            } else {
                let title = $(self)
                    .parents(".item_content_booking")
                    .find(".title")
                    .text();
                let text = `<span class="span_item"><span class="${data_class}">${value}</span> x ${title}</span>`;
                $(`.${class_parent}`).append(text);
            }
        } else {
            $(`.${data_class}`).parents(".span_item").remove();
        }
        calculateTotalAmount();
    }

    function placeCaretAtEnd(el) {
        var range = document.createRange();
        var sel = window.getSelection();
        range.selectNodeContents(el);
        range.collapse(false);
        sel.removeAllRanges();
        sel.addRange(range);
        el.focus();
    }

    function calculateTotalAmount(){
        total_booking = parseInt($('#total_price').val());
        let total = 0;
        $('.value').each(function(){
            let quantity = parseInt($(this).text());
            let price = parseFloat($(this).attr('data-price'));
            total += quantity * price;
        })

        $('.total_booking').text(`US $${total_booking + total}`);
        $('.subtotal_booking').text(`${total}`);
        $('.payment_amount').text(`${total}`);
    }

    $(document)
        .on("click", ".plus", function () {
            let value = parseInt($(this).parents(".number").find(".value").text());
            value = value + 1;
            if (value > 0) {
                $(this).parents(".number").find(".minus").addClass("active");
                $(this).parents('.validate_input').find('.errors').remove();
            }
            eventParticipants(this, value);
        })
        .on("click", ".minus", function () {
            let value = parseInt($(this).parents(".number").find(".value").text());
            value = value - 1;
            if (value < 0) value = 0;
            if (value == 0) {
                $(this).parents(".number").find(".minus").removeClass("active");
            }
            eventParticipants(this, value);
        })
        .on("keypress", ".value", function (evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        })
        .on('keyup', '.value', function(){
            let value = parseInt($(this).text());
            eventParticipants(this, value);
            placeCaretAtEnd(this);
        })
        .on("click", ".item_checkbox", function () {
            let calc_distribution = $(this)
                .parents(".item_distribution")
                .find(".calc_distribution");
            if ($(this).find("input").prop("checked")) {
                calc_distribution.addClass("active");
            } else {
                calc_distribution.removeClass("active");
                calc_distribution.find(".value").text(0);
                let data_class = calc_distribution.attr("data-class");
                $(`.${data_class}`).parents(".span_item").remove();
            }
        })
        .on('click', '.item_radio', function(){
            let describe = $(this).parents('.type_payment').find('.describe');

            console.log(`$(this).find('.radio').prop('checked'):`, $(this).find('.radio').prop('checked'))
            if($(this).find('.radio').prop('checked')){
                $('.describe').removeClass('active');
                describe.addClass('active');
            } else{
                describe.removeClass('active');
            }
        })
        .on('change', '.select2-hidden-accessible', function(){
            $(this).valid();
        });

    // Custom method cho số điện thoại Việt Nam
    $.validator.addMethod("phoneVN", function(value, element) {
        return this.optional(element) || /^(0|\+84)(3[2-9]|5[6|8|9]|7[0|6-9]|8[1-5]|9[0-9])[0-9]{7}$/.test(value);
    }, "Please enter a valid phone number");

    $.validator.addMethod("select2-required", function (value, element, params) {
        return value !== null && value !== ""; // or other logic as needed
    }, "This field is required.");

    $.validator.addMethod("date-required", function (value, element, params) {
        return value !== "";
    }, "This field is required.");

    $.validator.addMethod("participants", function(value, element, params) {
        var valid = false;
        $('.value_travelers').each(function() {
            if (parseInt($(this).text().trim()) > 0) {
                valid = true;
                return false;
            }
        });
        return valid;
    }, "At least one field is required");

    $('#formBooking').validate({
        errorPlacement: function (error, element) {
            if (element.hasClass("select2-hidden-accessible")) {
                error.insertAfter(element.next('span.select2'));
            } else if (element.hasClass("datepicker")) {
                error.insertAfter(element.next('span'));
            } else {
                error.appendTo(element.parents(".box_validate"));
                error.wrap("<span class='errors'>");
                element.parents('.box_validate').addClass('validate_input');
            }

            $('.btn_payment').addClass('false');
        },
        highlight: function (element) {
            $(element).parents('.box_validate').addClass('validate_input')
            $(element).addClass('form-control-danger')
        },
        success: function (label, element) {
            $(element).parents('.box_validate').removeClass('validate_input')
            $(element).removeClass('form-control-danger')
            label.parents('.errors').remove();

            // Kiểm tra xem có lỗi validate nào không
            if ($('#formBooking').find('.errors').length === 0) {
                $('.btn_payment').removeClass('false');
            }
        },

        ignore: [],
        debug: false,
        rules:{
            travel_date: {
                "date-required": true
            },
            value_travelers:{
                "participants": true
            },
            checkbox_room: 'required',
            title: {
                "select2-required": true
            },
            full_name: "required",
            nationality: {
                "select2-required": true
            },
            email: "required",
            phone: {
                required: true,
                phoneVN: true
            }
        },
        messages:{
            travel_date: {
                "date-required": "Please select a start date!"
            },
            checkbox_room: 'Please select traveler distribution',
            value_infants:{
                "participants": "Please add the number of travelers to get your trip price!"
            },
            title: {
                "select2-required": "Please select a title!"
            },
            full_name: "Please enter your full name!",
            nationality: "Please select nationality!",
            email: "Please enter your email!",
            phone: {
                required: "Please enter your phone number!",
                phoneVN: "Please enter a valid phone number!"
            }
        },
        submitHandler: function () {
            alert('Success');
        }
    });
});
