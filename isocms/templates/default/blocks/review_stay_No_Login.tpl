<div class="stories" id="stories">
	<div id="writeTourReview" >
		<form action="" class="simple_form new_review" enctype="multipart/form-data" id="frmCommentCrx" method="post">
			<div class="rating_block {$deviceType}">
				<div class="rating-header">
					<div class="rate">
						<span class="title size16 text-bold">* {$core->get_Lang('Your rating is here')}:</span>
						{if $deviceType eq 'phone'}
						<div class="cleafix"></div>
						{/if}
						<div class="rate_row"></div>
					</div>
				</div>
				<div class="rating-body">
					<div class="control-group text optional review_content">
						<div class="form-group mb20">
							<input class="form-control full-width required" name="fullname" id="" value="" maxlength="255" type="text" placeholder="* {$core->get_Lang('Full Name')}"/>
						</div>
						<div class="form-group mb20">
							<input class="form-control full-width required" name="title" id="title" value="" maxlength="255" type="text" placeholder="* {$core->get_Lang('Title of review')}"/>
						</div>
						<!-- <div class="form-group mb20">
							<input class="form-control full-width email" name="email_reviews" id="email" maxlength="255" type="text" placeholder="{$core->get_Lang('Enter Email')}"/>
						</div> -->
						<div class="form-group mb20">
							<textarea class="form-control optional textarea full-width" name="message" id="message" minlength="100" placeholder="* {$core->get_Lang('Your review')}" rows="5" data-validate="true"></textarea>
						</div>
						<div class="form-group">
							<input type="hidden" value="Review" name="Review"> 
							<input type="hidden" value="{$mod}" id="type" name="type">
							<input type="hidden" value="{$table_id}" id="table_id" name="table_id"> 
							<input type="hidden" value="{$profile_id}" id="member_id" name="member_id"> 
							<button type="button" id="btnClick" class="btn_green btn_main">{$core->get_Lang('Submit your review')}</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="read_stories">
		{if !empty($lstReview)}
		<div class="clearfix"></div>
		<div class="review-list">
			<ul class="load_result-review list_style_none" id="commentCrx">
				{foreach name=i from=$lstReview item = _oReview}
				{assign var=rates value=$clsReviews->getRates($_oReview.reviews_id,$_oReview)}
				{assign var=rateStar value=$clsReviews->getRatesStar($_oReview.reviews_id,$_oReview)}
				{assign var=rateOne value=$clsReviews->getTextRateOne($_oReview.reviews_id,$_oReview)}
					<li id="Reviews{$_oReview.reviews_id}" order_no="{$_oReview.order_no}" class="review__item">
						<div class="review__author mb-4 d-flex">
							<div class="review__avatar">
								<img class="img100" src="{$_oReview.avatar}" alt="{$_oReview.fullname}" />
							</div>
							<div class="review__meta">
								<h3>{$_oReview.fullname}</h3>
								<span class="text-muted">{$clsISO->converTimeToTextShort($_oReview.reg_date)}</span>
							</div>
						</div>
						<div class="review__body">
							<div class="review__rate d-flex align-items-center full-width mb-3">
								<span class="review__score inline-block ">{$rates}.0</span>
								<span class="review__text text_bold">{$rateOne}</span>
							</div>
							<div class="cus-desc">
								<h3 class="size16 mb-3 text_main">{$_oReview.title}</h3>
								{if $deviceType eq "phone"}
									<div class="review__content review__content_short">{$clsReviews->getContentMore($_oReview.reviews_id,250,1,$_oReview)}</div>
								{else}
									<div class="review__content review__content_short">{$clsReviews->getContentMore($_oReview.reviews_id,600,1,$_oReview)}</div>
								{/if}
								<div class="review__content review__content_full hidden">{$_oReview.content}<span class="more_venobox less"> {$core->get_Lang('View Less')}</span></div>
							</div>
						</div>
					</li>
				{/foreach}  
			</ul>
			{if $total_page gt '1'}
			<div class="cleafix"></div>
			<div id="exploreWorldLoadMore" class="mt20">
				<button page="2" total_page="{$total_page}" _type="{$type}" table_id="{$table_id}" class="show_more_review btn_yellow btn_main show-loader" id="show-more">
					<span class="text">{$core->get_Lang('View more')}</span>
					<span class="loader hidden"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
				</button>
			</div>  
			{/if}
		</div>
		{/if}
	</div>
</div>
<script>
    var msg_fullname_required = "{$core->get_Lang('Your full name should not be empty')}!";
    var msg_email_required = "{$core->get_Lang('Your email should not be empty')}!";
    var msg_title_required = "{$core->get_Lang('Your title should not be empty')}!";
    var msg_message_required = "{$core->get_Lang('Your message should not be empty')}!";
    var msg_login = "{$core->get_Lang('Sign in saved to review')}!";
    var msg_rating = "{$core->get_Lang('Your rating should not be empty')}!";
    var msg_insert_success = "{$core->get_Lang('Your Review is submit success')}!";
    var msg_email_not_valid = "{$core->get_Lang('Your email is not valid')}!";
    var process = "{$core->get_Lang('Processing')}......";
    var Publish_Review = "{$core->get_Lang('Submit your review')}";
    var Completed = "{$core->get_Lang('Completed')}....";

</script>
<script src="{$URL_JS}/jquery.form.js?ver={$upd_version}"></script>

{literal}
    <script>
        $(function () {
            $(document).on('click', '#btnClick', function (ev) {
                var e = $("#email").val(),
                    a = $("#email").val();
                var $_this = $(this);
                if ($.trim($('input[name=fullname]').val()) == '') {
                    alert(msg_fullname_required);
                    $('input[name=fullname]').addClass('error');
                    $('input[name=fullname]').focus();
                    return false;
                }
                if ($.trim($('input[name=title]').val()) == '') {
                    alert(msg_title_required);
                    $('input[name=title]').addClass('error');
                    $('input[name=title]').focus();
                    return false;
                }
                if ($.trim($('textarea[name=message]').val()) == '') {
                    alert(msg_message_required);
                    $('input[name=message]').addClass('error');
                    $('textarea[name=message]').focus();
                    return false;
                }
                if ($.trim($('input[name=rates]').val()) == '') {
                    alert(msg_rating);
                    $('input[name=rates]').focus();
                    return false;
                }
                $_this.closest('form.simple_form').ajaxSubmit({
                    type: "POST",
                    url: path_ajax_script + '/index.php?mod=home&act=ajSaveReviewsNoLogin&lang=' + LANG_ID,
                    beforeSend: function (xhr) {
                        $('button[id^=btnClick]').text(process).prop('disabled', true);
                    },
                    dataType: "html",
                    success: function (html) {
                        $('button[id^=btnClick]')
                            .text(Completed)
                            .delay(2000)
                            .text(Publish_Review)
                            .prop('disabled', false);
                        $_this.closest('form.simple_form').resetForm();
                        $_this.closest('form.simple_form').clearForm();

                        if (html.indexOf("_ERROR") >= 0) {
                            $('#message_box').html(msg_insert_error).show();
                            return false;
                        } else if (html.indexOf('_SUCCESS') >= 0) {
                            alert(msg_insert_success);
                            $('#media-preview').empty().hide();
                            $(".rate_row .rate_star").removeClass('checked');
                            $("#rates").val('');
                            $("#fullname").val('');
                            $("#title").val('');
                            $("#message").val('');
                            $('#commentCrx li:first').fadeIn().delay(10000).fadeOut();
                        }
                    }
                });
                return false;
            });
            var $number_per_page = 3;
            var $page = 1;
            $page_aj = 0;
            var timer = '';
            /*loadPage();*/
            $('#show-more').click(function (e) {
                var $totalRecord = $('#commentCrx .box').size();
                if ($page_aj) {
                    $page = $page_aj + 1;
                    $page_aj = 0;
                } else $page = $page + 1;
                e.preventDefault();
                var $this = $(this);
                clearTimeout(timer);
                $('.loader').show();
                timer = setTimeout(function () {
                    var $start = ($page - 1) * $number_per_page;
                    var $end = $start + $number_per_page;

                    for (var i = $start; i < $end; i++) {
                        $('.box').eq(i).show();
                    }

                    $('.loader').hide();
                    if ($end >= $totalRecord)
                        $('#show-more').hide();
                }, 500);
            });

        });

        function checkValidEmail(e) {
            var a = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return a.test(e)
        }
    </script>
{/literal}
<script type="text/htmlpreview" src="{$URL_JS}/reviewstar/starwarsjs.js?v={$upd_version}"></script>
<script src="{$URL_JS}/reviewstar/htmlpreview.min.js?v={$upd_version}"></script>
<script src="{$URL_JS}/reviewstar/yql?v={$upd_version}"></script>
<link rel="stylesheet" href="{$URL_JS}/reviewstar/style.css?v={$upd_version}">
{literal}
    <script>
        HTMLPreview.replaceAssets();
        $(function () {
            $('.rate_row').starwarsjs({
                stars: 5,
                count: 1
            });
        });
    </script>
{/literal}


<!--
{literal}
<script type="text/javascript">
	$(".more_venobox").click(function(){
		var parrent = $(this).closest(".cus-desc");
		parrent.find(".review__content_full,.review__content_short").toggleClass("hidden");
	});
	function checkValidEmail(e) {
		var a = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return a.test(e)
	}
	HTMLPreview.replaceAssets();
	$(function(){
	
		$('.rate_row').starwarsjs({
			stars : 5,
			count : 1,
			default_stars : 5
		});
		$_document.on('click', '#btnClick', function(ev){
			ev.preventDefault();
			var _this = $(this),
				_form = _this.closest('form'),
				rates = $('input[name=rates]', _form).val(),
				fullname = $('input[name=fullname]', _form).val(),
				/* email_reviews = $('input[name=email_reviews]', _form).val(),*/
				title = $('input[name=title]', _form).val(),
				message = $('textarea[name=message]', _form).val();
			
			var _validated = 0;
			if($.trim(fullname) == ''){
				_validated++;
				swal("Error!", msg_fullname_required, "error");
				$('input[name=fullname]', _form).focus();
				return false;
			}	
			if($.trim(title) == ''){
				_validated++;
				swal("Error!", msg_title_required, "error");
				$('input[name=title]', _form).focus();
				return false;
			}
			/* if($.trim(email_reviews) == ''){
				_validated++;
				swal("Error!", msg_email_required, "error");
				$('input[name=email_reviews]', _form).focus();
				return false;
			} else {
				if(!checkValidEmail(email_reviews)){
					_validated++;
					swal("Error!", msg_email_not_valid, "error");
					$('input[name=email_reviews]', _form).focus();
					_validated++;
				}
			}*/
			if($.trim(message) == ''){
				_validated++;
				swal("Error!", msg_message_required, "error");
				$('textarea[name=message]', _form).focus();
				return false;
			}
			if(_validated == 0){
				_form.ajaxSubmit({
					type: "POST",
					url: path_ajax_script+'/index.php?mod=home&act=ajSaveReviewsNoLogin&lang='+LANG_ID,
					beforeSend: function(xhr){
						$('button[id^=btnClick]').text(process);
					},
					dataType: "html",
					success: function(html){
						$('button[id^=btnClick]')
							.text(Completed)
							.delay(2000)
							.text(Publish_Review);
						if(html.indexOf("_ERROR") >= 0) {
							$('#message_box').html(msg_insert_error).show();
							return false;
						}else if(html.indexOf('_SUCCESS') >=0){
							_form.resetForm();
							_form.clearForm();
							swal("Success!", msg_insert_success, "success");
						}
					}
				});
			}
			return false;
		});
		$_document.on('click', '#show-more', function(ev){
			ev.preventDefault();
			var _this = $(this),
				page = _this.attr('page'),
				type = _this.attr('_type'),
				table_id = _this.attr('table_id'),
				total_page = _this.attr('total_page');
				
			$('.loader', _this).removeClass('hidden');
			$.post(path_ajax_script+'/index.php?mod=home&act=load_more_reviews&lang='+LANG_ID, {
				'type' : type,
				'table_id' : table_id,
				'page' : page
			}, function(html){
				if(html.indexOf('_empty') >= 0){
					_this.parent().remove();
				} else {
					$('.loader', _this).addClass('hidden');
					$('.load_result-review .review__item:last').after(html);
					if(parseInt(total_page) == parseInt(page)){
						_this.parent().remove();
					} else {
						_this.attr('page', parseInt(page)+1);
					}
				}
			});
			return false;
		});
	});
</script>
-->


<style type="text/css">
	#writeTourReview{margin-bottom:32px; display: none}
	#writeTourReview .bottom {
		overflow: hidden;
		padding: 10px 0;
	}
	#writeTourReview .bottom .upload_image {
		float: left;
		margin-top: 0;
		width: 200px;
	}
	#writeTourReview .bottom .upload_image input {
		display: none;
		position: absolute;
	}
	#writeTourReview .bottom .upload_image label {
		display: block;
		height: 21px;
		color: #3b444e;
		font-size: 12px;
		line-height:21px;
		text-transform: uppercase;
		font-weight: 400;
		opacity: .8;
		margin: 5px 0 0 0;
	}
	#writeTourReview .bottom .right {
		float: right;
		width: 310px;
		text-align: right;
	}
	.btn_green {
		border: 0;
		font-weight:bold;
		height: 36px;
		padding: 0px 32px;
		display: inline-block;
		font-size: 16px;
		border-radius:4px;
		-moz-border-radius:4px;
		-webkit-border-radius:4px;
		-khtml-border-radius:4px;
	}
	.review_content input,
	.review_content select{
		height:50px;
		line-height:50px; 
		border:1px solid #ccc
	}
	.show-loader{
		width:141px;
	}
</style>
{/literal}


