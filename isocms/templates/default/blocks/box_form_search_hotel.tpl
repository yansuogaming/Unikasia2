<section class="box_form_banner">
	<div class="container">
		<div class="wrap_form_banner">
			{assign var=site_hotel_intro value=site_hotel_intro_|cat:$_LANG_ID}
			<h1>{$TD}</h1>
			<div class="intro_top short_content wrap_form_banner-txt" data-height="150">
				{$HOTEL_INTRO|html_entity_decode}
			</div>
			<button class="toggle-btn" style="display: none;">View More <i class="fa-solid fa-angle-down"></i></button>
		</div>
	</div>
</section>

<script type="text/javascript">
	var Input_data_is_invalid='{$core->get_Lang("Input data is invalid")}';
	var Adults='{$core->get_Lang("Adults")}';
	var Children='{$core->get_Lang("Children")}';
	var Infants='{$core->get_Lang("Infants")}';
	var Departure_date_invalid='{$core->get_Lang("Departure date is invalid")}';
	var Please_choose_departure_date='{$core->get_Lang("Please choose departure date")}';
	var Warning='{$core->get_Lang("Warning")}';
</script>
{literal}
	<script>
		$( function() {
			$('input[readonly]').on('focus', function(ev) {
				$(this).trigger('blur');
			});
			$("#check_in_date_id").datepicker({
				dateFormat: 'dd/mm/yy',
				minDate: new Date(),
				maxDate: "+1Y",
				prevText: "Trước",
				nextText: "Sau",
				currentText: "Hôm nay",
				firstDay:1,
				monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
				dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
			});
			$('#departure_date_id').datepicker({
				dateFormat: 'dd/mm/yy',
				minDate: "+1d",
				maxDate: "+1Y",
				prevText: "Trước",
				nextText: "Sau",
				currentText: "Hôm nay",
				firstDay:1,
				monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
				dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
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

		$(document).on('click','.upNum',function() {
			var number_person = $(this).val();
			var departure_date = $("input[name=departure_date]").val();
			var traveler_type_id = $(this).attr('traveler_type_id');
			var val = parseInt($("#national_visitor"+traveler_type_id).val());
			var max_number = parseInt($("#national_visitor"+traveler_type_id).attr('max-number'));
			var _type=$(this).attr('_type');
			val = val + 1;
			/*if (val >= max_number) {
				$(this).addClass('disabled');
				val = max_number;
			}*/
			$(this).closest(".right__inputTraveller").find(".unNum").removeClass("disabled");
			$("#national_visitor"+traveler_type_id).val(val);
			$('#'+_type).val(val);
			if(_type == 'number_adults'){
				getNumberPerson();
			}
			if(_type == 'number_child'){
				getNumberPerson();
			}
			if(_type == 'number_room'){
				var value = $('input[name="number_room"]').val();
				$('input[name="number_room"]').val(parseInt(value) + 1);
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
				getNumberPerson();
			}

			if(_type == 'number_child'){
				getNumberPerson();
			}

			if(_type == 'number_room'){
				var value = $('input[name="number_room"]').val();
				if(parseInt(value) > 0){
					$('input[name="number_room"]').val(parseInt(value) - 1);
				}
			}
			getNumberPerson();
			return false;
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

		$(document).on("change",".input_number",function(){
			var number_person = $(this).val();
			var max_person =$(this).attr('max-number');
			var departure_date = $("input[name=departure_date]").val();
			var tour_visitor_type_id = $(this).attr('tour_visitor_type_id');
			var _type=$(this).attr('_type');
			if(!isNaN(parseInt(number_person))){
				if(parseInt(number_person) > 0 && parseInt(number_person) <= max_person){
					$(this).val(parseInt(number_person));

					if($(this).hasClass('number_adults')){
						getNumberPerson();
					}
					
					$(this).closest(".right__inputTraveller").find(".unNum").removeClass("disabled");
				}else{
					if(_type == 'number_adults'){
						$(this).val(1);
					}else{
						$(this).val(0);
					}
					
					getNumberPerson();
					$(this).closest(".right__inputTraveller").find(".unNum").addClass("disabled");
				}
			}else{
				$(this).val(1);
				$(this).closest(".right__inputTraveller").find(".unNum").addClass("disabled");
			}
			$('#'+_type).val(number_person);
			getNumberPerson();
		});
	</script>
{/literal}