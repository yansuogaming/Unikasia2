<div class="page_container bg_fff">
	<div class="nav_agent">
		<div class="container">
			<ul class="nav_ul_agent">
				<li><a class="current" href="{$curl}" title="{$core->get_Lang('My Profile')}">{$core->get_Lang('My Profile')}</a></li>
				<li><a href="/travel-agent/booking.html" title="{$core->get_Lang('Tour booking')}">{$core->get_Lang('Tour booking')}</a></li>
				<li><a href="/travel-agent/reviews-and-photo.html" title="{$core->get_Lang('Reviews &amp; Photos')}">{$core->get_Lang('Reviews &amp; Photos')}</a></li>
			</ul>
		</div>
	</div>
    <div id="contentPage" class="pageAgent pageAgentLogin pdt0">
		<div class="container">
			<div class="box_change_pass">
				<div class="col_Left">
					<ul class="ul_nav_agent2">
						<li><a href="/travel-agent/my-profile.html" title="{$core->get_Lang('Edit Information')}">{$core->get_Lang('Edit Information')}</a></li>
						<li><a class="current" href="{$curl}" title="{$core->get_Lang('Password reset')}">{$core->get_Lang('Password reset')}</a></li>
					</ul>
				</div>
				<div class="col_Right">
					<div class="box_agent_register">
						<h1 class="size25 text_left mb10">{$core->get_Lang('Password reset')}</h1>
						<div class="note mb10">{$core->get_Lang('This form help you return your password. Please, enter your password, and send request')}.</div>
						<div class="xsmall note mb20"><span class="strong">{$core->get_Lang('Please note')}:</span> {$core->get_Lang('Passwords are case sensitive and must be 6 characters or longer')}.</div>
						<form id="agent_register_form" method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label>{$core->get_Lang('Password')}</label>
								<span class="icon password"><input class="form-control" type="password" name="password" id="password" placeholder="{$core->get_Lang('Enter your Password')}"/></span>
								<div class="error" id="error_password"></div>
							</div>
							<div class="form-group">
								<label>{$core->get_Lang('Confirm Password')}</label>
								<span class="icon password"><input class="form-control" type="password" name="re_password" id="re_password" placeholder="{$core->get_Lang('Enter Confirm Password')}"/></span>
								<div class="error" id="error_re_password"></div>
							</div>
							<div class="form-group mb20">
								<input class="form-control btn_register" id="btn_reset_pass" type="submit" value="{$core->get_Lang('Reset')}">
								<input type="hidden" name="RESET_PASS" value="RESET_PASS">
								<div class="success" id="send_success_email"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var msg_password_required = "{$core->get_Lang('Your password should not be empty')}!";
	var msg_re_password_required = "{$core->get_Lang('Your confirm password should not be empty')}!";
	var msg_confirmpassword_not_valid = "{$core->get_Lang('Please enter the same value again password')}!";
	var msg_error = "{$core->get_Lang('Reset password not success')}!";
	var msg_success = "{$core->get_Lang('Reset password success')}!";
</script>
{literal}
<script type="text/javascript">
$(function(){
	$("#btn_reset_pass").click(function(){
		var $password = $("#password").val();
		var $confirmpassword = $("#re_password").val();
		
		if($("#password").val()==''){
			$('#error_password').html(msg_password_required).fadeIn().delay(3000).fadeOut();
			$("#password").focus();
			return false;
		}
		if($("#re_password").val()==''){
			$('#error_re_password').html(msg_re_password_required).fadeIn().delay(3000).fadeOut();
			$("#re_password").focus();
			return false;
		}
		
		if($confirmpassword!=$password){
			$('#error_re_password').html(msg_confirmpassword_not_valid).fadeIn().delay(3000).fadeOut();
			$("#re_password").focus();
			return false;
		}
	});
});
</script>
{/literal}