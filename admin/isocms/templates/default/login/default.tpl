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
<div class="wrapper">
    <div class="google-header-bar">
       <div id="logo"><a href="{$PCMS_URL}" title="{$PAGE_NAME}"><img src="data:image/png;base64,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" width="100%" height="auto" /></a></div>
    </div> 
	<div class="main content clearfix">
		<div class="container">
			<div class="sign-in">
				<div class="signin-box">
					<h2>Sign in</h2>
					<span class="signup-button">
					New to {$PAGE_NAME}?
					<a id="link-signup" class=" create" href="https://www.vietiso.com/">Create an account</a>
					</span>
					<form id="gaia_loginform" action="#" method="post">
						<label>
						  <input type="text" name="txtUsername" id="txtUsername" value="{$txtUsername}" />
						</label>
						<label style="position: relative">
							<input  type="password" name="txtPassword" id="txtPassword" value="{$txtPassword}" />
							<span  toggle="#txtPassword" class="icon_eye toggle-password"><i class="fa fa-eye" aria-hidden="true"></i></span>
						</label>
						<div class="form_checkforgot">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Remember account</label>
						  </div>
						<ul>
						<li><a id="link-forgot-passwd" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="fr f_h_main">{$core->get_Lang('Forgot password')}?</a></li>
						
					</ul>
						</div>
						<div>
							<input type="submit" class="g-button g-button-submit" name="signIn" id="signIn" value="Login" />
							<input type="hidden" name="btnLogin" value="btnLogin" />
						</div>
					</form>
					{if $isValid eq 0}<div id="login_error">Login Failed! Please Try Again!<br></div>{/if}
				</div>
			</div>
		
		</div>
	</div>	
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<div class="body page-bg round-bottom pal">
						<h2 class="mt0 mb20">{$core->get_Lang('Password reset')}</h2>
						<div class="note size16">{$core->get_Lang('We will send instruction for creating a new password to the email address associated with your account')}.</div>
						<form novalidate class="ng-pristine ng-valid">
							<div class="mtm mbm">
								<input type="email" class="isoTxt required txt350" placeholder="{$core->get_Lang('Your Email')}" name="user_email" value="" />
								<div id="message_box" class="text-danger mb10 mt05" style="display:none"></div>
							</div>
							<div class="line mt10">
								<button type="button" id="forgotBtn" class=" submitClick">{$core->get_Lang('Reset')} &raquo;</button>
								<input type="hidden" name="forgotVal" value="forgotVal" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="google-footer-bar">
		<div class="footer clearfix">
            <ul>
            	<li>Copyright &copy; {$current_year} VietISO</li>
            	<li><a href="https://www.vietiso.com/ho-tro/dieu-khoan-huong-dan/dieu-khoan-dich-vu.html">Term &amp; Conditions</a></li>
            	<li><a href="https://www.vietiso.com/ho-tro/dieu-khoan-huong-dan/chinh-sach-bao-mat.html">Privacy Policy</a></li>
            	<li><a href="https://www.vietiso.com/contact">Help</a></li>
            </ul>
		</div>
	</div>
   	<div id="ajax_loading" style="display: none;"></div>
    {literal}
        <style>
            .icon_eye {
                position: absolute;
                right: 15px;
                top: 20px;
				cursor:pointer;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                $('input[type=text]:first').focus();
            });
			
			

        </script>
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
			
			$(document).ready(function(){
				$('#forgotBtn').click(function(){
					var val_email = $("input[name='user_email']").val();
					if(val_email == ''){
						$('#message_box').text('Lỗi! Bạn chưa nhập email!');
						$('#message_box').show();
					}else if(!checkValidEmail(val_email)){
						$('#message_box').text('Lỗi! Email không đúng định dạng!');
						$('#message_box').show();
					}else{
						
						$.ajax({
							type: "POST",
							data: {email:val_email},
							dataType:'html',
							url: path_ajax_script+"/index.php?mod=login&act=ajaxForgotPasswordAdmin",
							success: function(html){
								vietiso_loading(0);	
								if(html.indexOf('reset_success')>=0){
									$('#message_box').show();
									$('#message_box').addClass('text-success');
									$('#message_box').removeClass('text-danger');
									$('#message_box').text('Yêu cầu đã được gửi đi. Vui lòng kiểm tra email để đổi mật khẩu!');
//									setTimeout(function(){location.reload()}, 3000);
									
								}else if(html.indexOf('email_not_correct') >= 0){
									$('#message_box').show();
									$('#message_box').text('Email không tồn tại trong hệ thống!');
								}else{
									$('#message_box').show();
									$('#message_box').text('ERROR!');
								}

							},
							beforeSend: function(){
								vietiso_loading(1);	
							}
						});
					}
				});
			});
			function checkValidEmail(email){
				var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				return regex.test(email);
			}
			function vietiso_loading($show){
				if($show==1){ $('#ajax_loading').fadeIn();}
				if($show==0){ $('#ajax_loading').fadeOut(1200);}
				if($show==2){ $('#ajax_loading').fadeOut(100);}
				if($show==5){ $('#ajax_loading').fadeOut(500);}
			}
        </script>
    {/literal}
{*<div id="kayako_sitebadgecontainer" title="Click Here for Live Chat" onclick="javascript:void(window.open('http://help.vietiso.com/live/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" style="background: none repeat scroll 0pt 0pt transparent; bottom: 0pt; cursor: pointer; height: 101px; left: 0pt; line-height: normal; margin: 0pt; padding: 0pt; position: fixed; top: 35% ! important; z-index: 1000;"><div id="kayako_sitebadgeholder" style="z-index: 990;"><div id="kayako_sitebadgeindicator" style="background: url(&quot;https://www.vietiso.com/icon_badge_green.png&quot;) no-repeat scroll 0pt 0pt transparent; width: 30px; height: 30px; line-height: normal; margin: 0pt; padding: 0pt; position: absolute; left: 10px; top: -8px; z-index: 980;"></div><div id="kayako_sitebadgebg" style="background-color: rgb(25, 140, 25); border-color: rgb(95, 175, 95) rgb(18, 98, 18) rgb(18, 98, 18) ! important; background-image: url(&quot;https://www.vietiso.com/badge_livehelp_en_white.png&quot;); background-position: 1px 8px; background-repeat: no-repeat; border-radius: 0pt 1em 1em 0pt ! important; border-style: outset outset outset none ! important; border-width: 1px 1px 1px medium ! important; height: 101px ! important; left: 0pt ! important; margin: 0pt ! important; opacity: 0.9 ! important; padding: 0pt ! important; position: absolute ! important; top: 0pt ! important; width: 30px ! important; z-index: 970;"></div></div></div>*}
</body>
<script type="text/javascript" src="{$URL_JS}/bootstrap/js/bootstrap.min.js?v={$upd_version}"></script>
</html>