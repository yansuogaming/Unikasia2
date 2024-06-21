$(function(){
	$('input[readonly]').on('focus', function(ev) {
		$(this).trigger('blur');
	});

	var datet = date_range;
	var tips = ['', ''];
	var arrayable = list_start_date;
	$('#departure_date').datepicker({
		dateFormat: 'DD, dd/mm/yy',
		minDate: "+1d",
		maxDate: "+1Y",
		prevText: "Trước",
		nextText: "Sau",
		currentText: "Hôm nay",
		firstDay:1,
		monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
		dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
		beforeShowDay: function (date) {

			var datestring = jQuery.datepicker.formatDate('dd/mm/yy', date);
			var hindex = $.inArray(datestring, datet);

			var aindex = $.inArray(datestring, arrayable);
			var CheckArray = $.inArray(datet, arrayable);
			setTimeout(function(){
				if($check_tour_promotion == 1){
					appendPromotion();
				}
				if($check_tour_start_date==1){
					appendSeat();
				}
			}, 10);
			if(arrayable[0] != ''){
				if (aindex == -1) return [false, 'disable_day', Departure_date_invalid];
				if (CheckArray != -1){
					return [false, 'disable_day', Departure_date_invalid];
				}else {
					if (hindex > -1) {
						return [true, 'highlight', tips[hindex]];
					}
				}
				return [true];
			}else {
				if (hindex > -1) {
					return [true, 'highlight', tips[hindex]];
				}
				return [aindex == -1]
			}
		},
		onSelect: function(date) {
			loadTextDayCheckIn($(this).val());
			loadTextDayItinerary($(this).val(),$tour_id);
			var date = $(this).datepicker('getDate');
			var fomatDate= $.datepicker.formatDate("DD, dd/mm/yy", date);
			$('input[name=check_in_book]').val(fomatDate);
			$('#departure_date').attr('now_next_departure',fomatDate);
		}
	});
	function appendPromotion() {
		var parElem = $("#ui-datepicker-div");
		if(!$('.note_promotion', parElem).length){
			parElem.append("<div class='note_promotion inline-block size14'><span class='color_fb1111'>%</span> <span>{/literal}{$core->get_Lang('Promotions')}{literal} </span></div>");
		}
	}
	function appendSeat() {
		var parElem = $("#ui-datepicker-div");
		if(!$('.note_seat', parElem).length){
			parElem.append("<div class='note_seat inline-block size14'><span class='note_seat_child'></span> <span>{/literal}{$core->get_Lang('Available')}{literal}</span></div>");
		}
		if(!$('.note_seat_disable', parElem).length){
			parElem.append("<div class='note_seat_disable inline-block size14'><span class='note_seat_disable_child'></span> <span>{/literal}{$core->get_Lang('Not Available')}{literal}</span></div>");
		}
	}
});

$(function(){
	var $ww = $(window).width();
	var $price__BoxAZ = $('.price__Box').offset().top + 50;

	$(document).scroll(function(){
		if($price__BoxAZ <= $(this).scrollTop()) {
			$(".btn_box").addClass('fixed');
		} else {
			$(".btn_box").removeClass('fixed');
		}
	});

	$(document).on("click",".repick_travellers",function() {
	  $('#pick_travellers').trigger('click');
	});
	$('#pick_travellers').click(function(){
		var  $_this=$(this);
		if($_this.hasClass('open')){
			$('#check_number_travellers').hide();
			$_this.closest('.number_travellers').removeClass('open');
			$_this.removeClass('open');
		}else{
			$('#check_number_travellers').show();
			$_this.closest('.number_travellers').addClass('open');
			$_this.addClass('open');
		}
	});
	$(".btn_scroll ").click(function() {
		$('html, body').animate({
			scrollTop: $("#avaiable").offset().top - 111
		}, 600);
	});
	$(document).on('click','.upNum:not(.disabled)',function() {
		var number_person = $(this).val();
		var departure_date = $("input[name=departure_date]").val();

		var traveler_type_id = $(this).attr('traveler_type_id');
		var val = parseInt($("#national_visitor"+traveler_type_id).val());
		var max_number = parseInt($("#national_visitor"+traveler_type_id).attr('max-number'));
		var _type=$(this).attr('_type');
		val = val + 1;
		if (val >= max_number) {
			/*$.alert({
				title: Warning,
				type: 'red',
				typeAnimated: true,
				content: Input_data_is_invalid,
			});*/
			$(this).addClass('disabled');
			val = max_number;
		}
		$(this).closest(".right__inputTraveller").find(".unNum").removeClass("disabled");
		$("#national_visitor"+traveler_type_id).val(val);
		$('#'+_type).val(val);		
		if(_type == 'number_adults'){
			$tour_id=$('#tour_id').val(),
			GetMaxChildInfant($tour_id,val);	
			$('#number_child,#number_infants').val(0);
			$('#box_group_child,#box_group_infant').html("");
		}
		if(_type == 'number_child'){
			$number_child = $('#box_group_child').find(".item_group_size").length;
			for(var i=$number_child; i<val; i++){
				$('#box_group_child').append(`<div class="item_group_size">`+getSelectChild+`</div>`);
			}
		}
		if(_type == 'number_infants'){
			$number_infant = $('#box_group_infant').find(".item_group_size").length;
			for(var i=$number_infant; i<val; i++){
				$('#box_group_infant').append(`<div class="item_group_size">`+getSelectInfant+`</div>`);
			}
		}
		getNumberPerson();
		return false;
	});
	$(document).on('click','.unNum:not(.disabled)',function() {
		var number_person = $(this).val();
		var departure_date = $("input[name=departure_date]").val();
		var traveler_type_id = $(this).attr('traveler_type_id');
		var val = parseInt($("#national_visitor"+traveler_type_id).val());
		var min_number = parseInt($("#national_visitor"+traveler_type_id).attr('min-number'));
		var _type=$(this).attr('_type');
		val = val - 1;
		if (val <= min_number) {
			/*$.alert({
				title: Warning,
				type: 'red',
				typeAnimated: true,
				content: Input_data_is_invalid,
			});*/
			$(this).addClass('disabled');
			val = min_number;
		}
		$(this).closest(".right__inputTraveller").find(".upNum").removeClass("disabled");
		$("#national_visitor"+traveler_type_id).val(val);
		$('#'+_type).val(val);
		if(_type == 'number_adults'){
			$tour_id=$('#tour_id').val(),
			GetMaxChildInfant($tour_id,val);						
			$('#number_child,#number_infants').val(0);
			$('#box_group_child,#box_group_infant').html("");
		}				
		if(_type == 'number_child'){
			$('#box_group_child').find(".item_group_size").each(function(index,element){
				if(index >= val){
					$(element).remove();
				}
			});
		}				
		if(_type == 'number_infants'){				
			$('#box_group_infant').find(".item_group_size").each(function(index,element){
				if(index >= val){
					$(element).remove();
				}
			});
		}
		getNumberPerson();
		return false;
	});
	$('#check_avaiable').click(function () {
		var $_this=$(this),
			$tour_id=$('#tour_id').val(),
			$number_adults=$('#number_adults').val(),
			$number_child=$('#number_child').val(),
			$number_infants=$('#number_infants').val(),
			$check_in_book=$('#check_in_book').val(),
			$departure_date=$('#departure_date').attr('now_next_departure'),
			$check=1;

		$('#check_number_travellers').find(".slt_item_age_child").each(function(index,element){
			if($(element).val() == ""){
				$(element).addClass("error");
				$check = 0;
			}else{
				$(element).removeClass("error");
			}
		});
		if($check == 0){
			$('#check_number_travellers').show();
			$.alert({
				title: Warning,
				type: 'red',
				typeAnimated: true,
				content: Input_data_is_required,
			});
			return false;
		}
		loadTablePrice($tour_id,$number_adults,$number_child,$number_infants,$check_in_book);
		$('#check_number_travellers').hide();
	});
});
$(document).on("change",".slt_item_age_child",function(){
	var $_this = $(this),
		box_parent = $_this.closest(".box_group_child_infant"),
		visitor_type = box_parent.data('visitor_type'),
		type = box_parent.data('type'),
		$tour_id=$('#tour_id').val(),
		$visitor_group = $_this.val(),
		number_group=0;
	if($visitor_group > 0){
		box_parent.find("select").each(function(i,elm){
			if($(elm).val() == $visitor_group || $(elm).val() == ''){
				++number_group;
			}
		});
		$.ajax({
			type		:	"POST",
			dataType	:	"JSON",
			data		:	{
				visitor_type	:	visitor_type,
				type			:	type,
				visitor_group	:	$visitor_group,
				tour_id			:	$tour_id,
				number_group	:	number_group
			},
			url			:	path_ajax_script+'/index.php?mod='+mod+'&act=ajCheckNumberGroup',
			success		:	function(json){
				if(!json.result){
					$_this.val("");
					$.alert({
						title: Warning,
						type: 'red',
						typeAnimated: true,
						content: Input_data_is_invalid,
					});
					$_this.addClass("error");
				}else{
					$_this.removeClass("error");
				}
			}
		});
	}			
});
$(document).on("change",".input_number",function(){
	var number_person = $(this).val();
	var max_person =$(this).attr('max-number');
	var departure_date = $("input[name=departure_date]").val();
	var tour_visitor_type_id = $(this).attr('tour_visitor_type_id');
	var _type=$(this).attr('_type');
	if(!isNaN(parseInt(number_person))){
		if(parseInt(number_person) >= 0 && parseInt(number_person) <= max_person){
			$(this).val(parseInt(number_person));

			if($(this).hasClass('number_adults')){
				$tour_id=$('#tour_id').val(),
				GetMaxChildInfant($tour_id,parseInt(number_person));							
				$('#number_child,#number_infants').val(0);
			}					
			$('#'+_type).val(number_person);
		}else{
			$.alert({
				title: Warning,
				type: 'red',
				typeAnimated: true,
				content: Input_data_is_invalid,
			});
			$(this).val(1);					
			$('#'+_type).val(1);
		}
	}else{
		$.alert({
			title: Warning,
			type: 'red',
			typeAnimated: true,
			content: Input_data_is_invalid,
		});

		$(this).val(1);				
		$('#'+_type).val(1);
	}
	getNumberPerson();
});
$(document).on("change",".select--tour__class",function () {
	var $tour__class= $(this).val();
	$('#tour__class_check').val($tour__class);
	$('#check_avaiable').trigger('click');
});

$(document).on("change",".select_addon",function () {
	var adata = [];
	var $total_price_z= $('#grand_total').attr('grand_total');
	var $deposit = $('#deposit').val();
	var check_in_book = $('#check_in_book').val();
	var tour_id = $('#tour_id').val();
	$('.select_addon').each(function () {
		var $number_addon= $(this).val(),
			$addonservice_id=$(this).attr('addonservice_id');
		if($(this).val()>0){
			var data = {
				'number_addon':$number_addon,
				'addonservice_id':$addonservice_id,
			};
			adata.push(data);
		}
	});
	$.ajax({
		type: 'POST',
		url: path_ajax_script+'/index.php?mod='+mod+'&act=loadSelectAddon&lang='+LANG_ID,
		data: {'addons':adata,'total_price_z':$total_price_z,'deposit':$deposit,'check_in_book':check_in_book,'tour_id':tour_id},
		dataType: 'json',
		success: function (res) {
			$('#box__price__addon').html(res.html);
			$('#grand_total').html(res.grand_total);
			$('#price_deposit').val(res.price_deposit);
			$('#total_price_z').val(res.grand_total_z);
			$('#total_addon').val(res.total_addons);
		}
	});
});
$(document).mouseup(function(e) {
	var container = $("#check_number_travellers");
	var jconfirm_box = $(".jconfirm-open");
	var pick_travellers  = $("#pick_travellers");
	if (!container.is(e.target) && container.has(e.target).length === 0 && !jconfirm_box.is(e.target) && jconfirm_box.has(e.target).length === 0 && !pick_travellers.is(e.target) && pick_travellers.has(e.target).length === 0)
	{
		container.hide();
		$('.number_travellers').removeClass('open');
		$('.pick_travellers').removeClass('open');
	}
});
	
function getNumberPerson(){
	var $totalAdult = 0;
	$('.number_adults').each(function() {
		$totalAdult += parseInt($(this).val());
	});
	var $totalChild = 0;
	$('.number_child').each(function() {
		$totalChild += parseInt($(this).val());
	});
	var $totalInfants = 0;
	$('.number_infants').each(function() {
		$totalInfants += parseInt($(this).val());
	});
	if($totalChild==0 && $totalInfants==0) {
		$('#pick_travellers').val( Adults + ' x ' +$totalAdult);
	}else if($totalChild==0 && $totalInfants!=0){
		$('#pick_travellers').val( Adults + ' x ' +$totalAdult+', ' +Infants+' x '+$totalInfants);
	}else if($totalChild!=0 && $totalInfants==0){
		$('#pick_travellers').val( Adults + ' x ' +$totalAdult+', ' +Children+' x '+$totalChild);
	}else {
		$('#pick_travellers').val( Adults + ' x ' +$totalAdult+', ' +Children+' x '+$totalChild+', ' +Infants+' x '+$totalInfants);
	}
}

function loadTextDayCheckIn(date){
	$.ajax({
		'type': 'POST',
		'url' : path_ajax_script+'/index.php?mod='+mod+'&act=loadTextDay&lang='+LANG_ID,
		'data' : {"date":date},
		'dataType': 'html',
		'success':function(html){
			$("#departure_date").val(html);
			/*$("#departure_date").html(html);*/
		}
	});
}
function loadTextDayItinerary(date,tour_id){
	$.ajax({
		type: 'POST',
		url : path_ajax_script+'/index.php?mod='+mod+'&act=loadTextDayItinerary&lang='+LANG_ID,
		data : {"date":date,"tour_id":tour_id},
		dataType: 'json',
		success:function(res){
			$('.day_Itinerary').each(function () {
				var $itinerary_id=$(this).attr('itinerary_id');
				$(this).html(res.list_itinerary[$itinerary_id]);
			});
		}
	});
}
function loadTablePrice($tour_id,$number_adults,$number_child,$number_infants,$check_in_book){
	$('#TablePrice').html('<div class="lazy_loading"><img src="{/literal}{$URL_IMAGES}/icon/lazy_load_100.svg{literal}" alt=""></div>');
	var $_adata = {
		'tour_id': $tour_id,
		'number_adults': $number_adults,
		'number_child' : $number_child,
		'number_infants': $number_infants,
		'check_in_book' : $check_in_book,
	};
	$.ajax({
		type: 'POST',
		url: path_ajax_script+'/index.php?mod='+mod+'&act=loadTablePrice&lang='+LANG_ID,
		data : $('#form__avaiable').serialize(),
		dataType:'html',
		success: function(html){
			$('#TablePrice').html(html);
		}
	});
}
$tour_id=$('#tour_id').val(),
GetMaxChildInfant($tour_id,1);
function GetMaxChildInfant($tour_id,$number_adults){
	var tour_property_id = $('#li_adult').data('tour_property_id');
	$.ajax({
		type: 'POST',
		url: path_ajax_script+'/index.php?mod=tour_new&act=ajGetMaxChildInfant',
		data : {"tour_id":$tour_id,"number_adults":$number_adults,"tour_property_id":tour_property_id},
		dataType:'json',
		success: function(json){
			$(".number_child.input_number").attr('max-number',json.max_child);
			$(".number_infants.input_number").attr('max-number',json.max_infant);
			$(".number_child.input_number,.number_infants.input_number").val(0);

			$(".number_infants.input_number,#number_infants").val(0);
			$(".number_infants.input_number").closest(".right__inputTraveller").find(".unNum").addClass("disabled");

			let max_child = $(".number_child.input_number").attr("max-number");
			let max_infant = $(".number_infants.input_number").attr("max-number");
			$(".number_child.input_number,.number_infants.input_number").closest(".right__inputTraveller").find(".unNum").addClass("disabled");
			if(max_child > 0){
				$(".number_child.input_number").closest(".right__inputTraveller").find(".upNum").removeClass("disabled");
			}else{
				$(".number_child.input_number").closest(".right__inputTraveller").find(".upNum").addClass("disabled");
			}
			if(max_infant > 0){
				$(".number_infants.input_number").closest(".right__inputTraveller").find(".upNum").removeClass("disabled");
			}else{
				$(".number_infants.input_number").closest(".right__inputTraveller").find(".upNum").addClass("disabled");
			}
			getNumberPerson();
		}
	});
}