<div class="page_container">
	<div class="breadcrumb-main bg_f5f5f5">
        <div class="container">
            <ol class="breadcrumb bg_f5f5f5 hidden-xs mt0" itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemtype="http://schema.org/Thing" itemprop="item" href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Home')}</span></a>
					<meta itemprop="position" content="1" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemtype="http://schema.org/Thing" itemprop="item" href="{$curl}" title="{$core->get_Lang('Travel Agent')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Travel Agent')}</span></a>
					<meta itemprop="position" content="2" />
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemtype="http://schema.org/Thing" itemprop="item" href="{$curl}" title="{$core->get_Lang('Login')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Login')}</span></a>
					<meta itemprop="position" content="3" />
				</li>
            </ol>
        </div>
    </div>
    <div id="contentPage" class="pageAgent pageAgentLogin">
		<div class="container">
			<div class="box_agent_register">
				<h1 class="size35 text-left mb20">{$core->get_Lang('Signin')}</h1>
				<form id="agent_register_form" method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<span class="icon email"><input class="form-control" type="text" name="email" id="email" placeholder="{$core->get_Lang('Enter your Email')}"/></span>
						<div class="error" id="error_email"></div>
					</div>
					<div class="form-group">
						<span class="icon password"><input class="form-control" type="password" name="password" id="password" placeholder="{$core->get_Lang('Enter Password')}"/></span>
						<div class="error" id="error_password"></div>
					</div>
					<p class="text_right"><a href="{$extLang}/travel-agent/forgot-password.html" title="{$core->get_Lang('Forgot password')}?">{$core->get_Lang('Forgot password')}?</a></p>
					<div class="form-group mb20">
						<input class="form-control btn_register btn_login" id="btn_login" type="submit" value="{$core->get_Lang('Signin')}">
						<input type="hidden" name="LOGIN" value="LOGIN">
					</div>
					<div class="bottom-form">
						<p class="text-left">{$core->get_Lang('Don&rsquo;t have an account yet')}? <a href="/travel-agent/signup.html" title="{$core->get_Lang('Signup')}">{$core->get_Lang('Signup')}</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var msg_email_required = "{$core->get_Lang('Your email should not be empty')}!";
	var msg_email_not_valid = "{$core->get_Lang('Please enter a valid email address')}!";
	var msg_password_required = "{$core->get_Lang('Your password should not be empty')}!";
</script>
{literal}
<script type="text/javascript">
	$(function(){
		$("#btn_login").click(function(){
			var $email = $("#email").val();
			var $password = $("#password").val();
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
			
			if($("#password").val()==''){
				$('#error_password').html(msg_password_required).fadeIn().delay(3000).fadeOut();
				$("#password").focus();
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