<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Login to ISOCMS Administrator</title>
<meta name='robots' content='noindex,nofollow' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/ico" href="{$PCMS_URL}/favicon.ico?v={$upd_version}">
<link rel="stylesheet" href="{$URL_CSS}/admin_login.css?v={$upd_version}" type="text/css" media="all">
<link rel="stylesheet" href="{$URL_CSS}/font-awesome.min.css?v={$upd_version}" type="text/css" media="all">
<link rel="stylesheet" href="{$URL_JS}/bootstrap/css/bootstrap.min.css?v={$upd_version}" type="text/css" media="screen">
<script type="text/javascript" src="{$URL_JS}/jquery-1.11.1.min.js?v={$upd_version}"></script>
<script>var path_ajax_script='{$PCMS_URL}';</script>
	
</head>
<body>
<script type="text/javascript" src="{$URL_JS}/jquery.validate.js?v={$upd_version}"></script>
<div class="page mtl" style="margin-top:70px; padding:20px 0">
	<div class="container">
		<div id="ModalResetPass" class="full-width pd40_0">
			<div class="omniture"> </div>
			<div> <span class="h2 mb10 title">{$core->get_Lang('Enter a New Password')}</span> </div>
			<div class="line mbl">
				<div class="main-narrow unit">
					<div class="line">
						<p class="mtn mhn"> </p>
						<div><span class="strong">{$core->get_Lang('Please note')}:</span> {$core->get_Lang('Passwords are case sensitive and must be 6 characters or longer')}.</div>
						<div id="fieldErrors"></div>
						<form id="frmResetPass" class="form-horizontal" method="post" onsubmit="return validate()">
							<p class="mb10">{$core->get_Lang('This form help you return your password. Please, enter your password, and send request')}</p>
							<p class="message text-center {if $result && $result =='true'}text-success {else}text-danger{/if}"></p>
							<div {if $result && $result =='true'}style="display:none"{/if}>
								<div class="line mb20">
									<label>{$core->get_Lang('Password')}</label>
									<div style="position: relative">
										<input type="password" name="new_password" id="new_password" placeholder="{$core->get_Lang('Password')}" class="isoTxt required input-full"/>
										<span  toggle="#new_password" class="icon_eye toggle-password"><i class="fa fa-eye" aria-hidden="true"></i></span>
									</div>

								</div>
								<div class="line mb20" {if $result && $result =='true'}style="display:none"{/if}>
									<label>{$core->get_Lang('Confirm Password')}</label>
									<div style="position: relative">
										<input type="password" name="renew_password" id="renew_password" placeholder="{$core->get_Lang('Confirm Password')}" class="isoTxt required input-full"/>     
										<span  toggle="#renew_password" class="icon_eye toggle-password"><i class="fa fa-eye" aria-hidden="true"></i></span>  
									</div>

								</div>   
								<div class="line buttonLast">
										<a href="{$link_login}">{$core->get_Lang('Cancel')}</a>
										<button type="submit" id="requestForgot" class="btn-block btn_main">{$core->get_Lang('Submit')}</button> 
										<input type="hidden" name="resetP" value="reset" />
								</div>
							</div>
							 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="{$URL_JS}/bootstrap/js/bootstrap.min.js?v={$upd_version}"></script>
{literal}
<script type="text/javascript">
	$(".toggle-password").click(function() {
		$(this).toggleClass("fa fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});
	function validate(){
		var frm = $('#frmResetPass');
		var newpassword = frm.find("input[name='new_password']");
		var renewpassword = frm.find("input[name='renew_password']");
		flag = true;
		if(newpassword.val() == ''){
			if(newpassword.next().hasClass('error_pass')){
				newpassword.next().text("Đây là trường bắt buộc");
			}else{
				newpassword.parent().append(`<label for="new_password" generated="true" class="error error_pass">Đây là trường bắt buộc</label>`);
			}	
			flag = false;
			
		}if(newpassword.val().length < 6){
			if(newpassword.next().hasClass('error_pass')){
				newpassword.next().text("Mật khẩu phải có 6 ký tự trở lên");
			}else{
				newpassword.parent().append(`<label for="new_password" generated="true" class="error error_pass">Mật khẩu phải có 6 ký tự trở lên</label>`);
			}	
			flag = false;
		}else{
			newpassword.next().remove();
		}
		if(renewpassword.val() == ''){
			if(renewpassword.next().hasClass('error_repass')){
				renewpassword.next().text("Đây là trường bắt buộc");
			}else{
				renewpassword.parent().append(`<label for="renew_password" generated="true" class="error error_repass">Đây là trường bắt buộc</label>`);
			}
			
			flag = false;
		}else if(newpassword.val() != renewpassword.val()){
			if(renewpassword.next().hasClass('error_repass')){
				renewpassword.next().text("Xác nhận mật khẩu không trùng khớp");
				flag = false;
			}else{
				renewpassword.parent().append(`<label for="renew_password" generated="true" class="error error_repass">Xác nhận mật khẩu không trùng khớp</label>`);
				flag = false;
			}
		}else{
			renewpassword.next().remove();
		}
		return flag;
	}
	$(document).ready(function(){
		$('#requestForgot').click(function(){
			if(validate()){
				$('#frmResetPass').submit();
			}else{
				return false;
			}
		});
		var message = $('.message');
		if(message.hasClass('text-success')){
			message.text('Đổi mật khẩu thành công!');
			setTimeout(function(){window.location.href = path_ajax_script+"/index.php?mod=login";}, 3000);			
		}
	});
	
</script>
{/literal}
</html>
