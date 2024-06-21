<div class="page_container bg_fff">
	<div class="nav_agent">
		<div class="container">
			<ul class="nav_ul_agent">
				<li><a class="current" href="{$curl}" title="{$core->get_Lang('My Profile')}">{$core->get_Lang('My Profile')}</a></li>
				<li><a href="/travel-agent/booking.html" title="{$core->get_Lang('Tour Booking')}">{$core->get_Lang('Tour Booking')}</a></li>
				<li><a href="/travel-agent/reviews-and-photo.html" title="{$core->get_Lang('Reviews and photo')}">{$core->get_Lang('Reviews and photo')}</a></li>
			</ul>
		</div>
	</div>
    <div id="contentPage" class="pageAgent pageAgentRegister pdt0">
		<div class="container">
			<div class="col_Left">
				<ul class="ul_nav_agent2">
					<li><a class="current" href="{$curl}" title="{$core->get_Lang('Edit Information')}">{$core->get_Lang('Edit Information')}</a></li>
					<li><a href="/travel-agent/change-password.html" title="{$core->get_Lang('Change Password')}">{$core->get_Lang('Change Password')}</a></li>
				</ul>
			</div>
			<div class="col_Right">
				<h1 class="size25 text-left mb10">{$core->get_Lang('My Profile')}</h1>
				<p class="mb0">{$core->get_Lang('Thông tin này không bao giờ được chia sẻ công khai. Chúng tôi sẽ chỉ sử dụng thông tin bên dưới để liên hệ với bạn về tài khoản của bạn hoặc về các đặt chỗ được thực hiện trực tiếp với Three Kings')}.</p>
				<div class="box_agent_register">
					<form id="agent_register_form" method="post" action="/agent/update_profile.html" enctype="multipart/form-data">
						<div class="col_Left_profile">
						<input class="inputfile" type="file" name="avatar" id="avatar" style="width:300px; display:none" value="{$oneAgent.avatar}"/>
						<span id="text_file" class="block"></span>
						<input type="hidden" name="avatar_post" id="avatar_post" style="width:300px; display:none" value="{$oneAgent.avatar}"/>
						<label class="avatar_label" for="avatar">
							<img class="avatar_photo" src="{$clsAgent->getImageAvatar($agent_id,80,80)}" alt="{$oneAgent.full_name}" width="100%" height="auto"/>
						</label>
						<label class="text_label" for="avatar">{$core->get_Lang('Change Avatar')}</label>
						<span class="text_hidden">{if $oneAgent.avatar eq ''} Chưa file nào được chọn{/if}</span>
						
						{if $oneAgent.avatar ne ''}
						<a class="delete_avatar block" id="delete_avatar" title="{$core->get_Lang('Xóa ảnh')}" href="javascript:void(0);">{$core->get_Lang('Xóa ảnh')}</a>
						{/if}
						</div>
						<div class="col_Right_profile">
							<div class="form-group">
								<label>{$core->get_Lang('Full Name')}</label>
								<span class="icon full_name"><input class="form-control" type="text" name="full_name" id="full_name" value="{$oneAgent.full_name}" placeholder="Nhập tên của bạn"/></span>
								<div class="error" id="error_full_name"></div>
							</div>
							<div class="form-group">
								<label>{$core->get_Lang('Email')}</label>
								<span class="icon email"><input class="form-control" type="text" name="email" id="email" value="{$oneAgent.email}" placeholder="Nhập email của bạn" disabled="disabled"/></span>
								<div class="error" id="error_email"></div>
							</div>
							<div class="form-group">
								<label>{$core->get_Lang('Phone')}</label>
								<span class="icon phone"><input class="form-control" type="text" name="phone" id="phone" value="{$oneAgent.phone}" placeholder="Nhập số điện thoại của bạn"/></span>
								<div class="error" id="error_phone"></div>
							</div>
							{if $oneAgent.type eq 'AGENT'}
							<div class="form-group">
								<label>{$core->get_Lang('Company')}</label>
								<span class="icon company_name"><input class="form-control" type="text" name="company_name" value="{$oneAgent.company_name}" id="company_name" placeholder="Nhập tên công ty của bạn"/></span>
								<div class="error" id="error_company_name"></div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-7 mb767_30">
										<label>{$core->get_Lang('Position')}</label>
										<span class="icon position"><input class="form-control" type="text" name="position" value="{$oneAgent.position}" id="position" placeholder="Nhập chức vụ của bạn"/></span>
										<div class="error" id="error_position"></div>
									</div>
									<div class="col-sm-5">
										<label>{$core->get_Lang('Tax code')}</label>
										<span class="icon code"><input class="form-control" type="text" name="tax_code" id="tax_code" value="{$oneAgent.tax_code}" placeholder="Nhập mã số thuế"/></span>
										<div class="error" id="error_tax_code"></div>
									</div>
								</div>			
							</div>
							{/if}
							<div class="error" id="agent_update_error_msg"></div>
							<div class="success" id="agent_update_success_msg"></div>
							<div class="form-group mb20">
								<input class="form-control btn_register" id="btn_register" type="submit" value="{$core->get_Lang('Update Information')}">
								<input type="hidden" name="type" value="{$oneAgent.type}">
								<input type="hidden" name="UPDATE" value="PROFILE">
								<input type="hidden" name="agent_id" value="{$oneAgent.agent_id}">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var msg_fullname_required = "{$core->get_Lang('Your full name should not be empty')}!";
	var msg_email_required = "{$core->get_Lang('Your email should not be empty')}!";
	var msg_email_not_valid = "{$core->get_Lang('Please enter a valid email address')}!";
	var msg_phone_required = "{$core->get_Lang('Your telephone should not be empty')}!";
	var msg_company_name_required = "{$core->get_Lang('Your company name should not be empty')}!";
	var msg_position_required = "{$core->get_Lang('Your position should not be empty')}!";
	var msg_tax_code_required = "{$core->get_Lang('Your tax code should not be empty')}!";
	var msg_password_required = "{$core->get_Lang('Your password should not be empty')}!";
	var msg_re_password_required = "{$core->get_Lang('Your confirm password should not be empty')}!";
	var msg_confirmpassword_not_valid = "{$core->get_Lang('Please enter the same value again password')}!";
	var msg_success = "{$core->get_Lang('Update profile for agent success')}!";
	var msg_error = "{$core->get_Lang('Update profile for agent not success')}!";
</script>
{literal}
<script type="text/javascript">
var inputs = document.querySelectorAll('.inputfile');
Array.prototype.forEach.call( inputs, function(input)
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		fileName = e.target.value.split( '\\' ).pop();
		if(fileName){
			label.innerHTML = fileName;
			$('.text_hidden').hide();
			$('#avatar_post').val('');
		}else{
			label.innerHTML = labelVal;
			$('.text_hidden').show();
			
		}
	});
});
$("#delete_avatar").click(function(){
	$('.avatar_photo').attr('src','');
	$('#avatar_post').val('');
	$(this).remove();
});

</script>
{/literal}
{literal}
<script type="text/javascript">
	$(function(){
		$("#btn_register").click(function(){
			var $fullname = $("#full_name").val();
			var $email = $("#email").val();
			var $phone = $("#phone").val();
			var $company_name = $("#company_name").val();
			var $position = $("#position").val();
			var $tax_code = $("#tax_code").val();
			
			if($("#full_name").val()==''){
				$('#error_full_name').html(msg_fullname_required).fadeIn().delay(3000).fadeOut();
				$("#full_name").focus();
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
			if($("#company_name").val()==''){
				$('#error_company_name').html(msg_company_name_required).fadeIn().delay(3000).fadeOut();
				$("#company_name").focus();
				return false;
			}
			if($("#position").val()==''){
				$('#error_position').html(msg_position_required).fadeIn().delay(3000).fadeOut();
				$("#position").focus();
				return false;
			}
			if($("#tax_code").val()==''){
				$('#error_tax_code').html(msg_tax_code_required).fadeIn().delay(3000).fadeOut();
				$("#tax_code").focus();
				return false;
			}
		});
	});
	function checkValidEmail(email){
		var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
</script>
{/literal}