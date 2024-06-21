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
					<a itemtype="http://schema.org/Thing" itemprop="item" href="{$curl}" title="{$core->get_Lang('Register')}">
						<span itemprop="name" class="reb">{$core->get_Lang('Register')}</span></a>
					<meta itemprop="position" content="3" />
				</li>
            </ol>
        </div>
    </div>
    <div id="contentPage" class="pageAgent pageAgentRegister">
		<div class="container">
			<h1 class="size35 text-center">{$core->get_Lang('Đăng ký cho doanh nghiệp của bạn')}</h1>
			<div class="box_agent_register">
				<p class="title_box_register">{$core->get_Lang('Cung cấp những thông tin cần thiết cho chúng tôi')}</p>
				<form id="agent_register_form" method="post" action="">
					<div class="form-group">
						<label>{$core->get_Lang('Full Name')}</label>
						<span class="icon full_name"><input class="form-control" type="text" name="full-name" id="full-name" placeholder="{$core->get_Lang('Full Name')}"/></span>
						
					</div>
					<div class="form-group">
						<label>{$core->get_Lang('Email')}</label>
						<span class="icon email"><input class="form-control" type="text" name="email" id="email" placeholder="{$core->get_Lang('Enter your Email')}"/></span>
					</div>
					<div class="form-group">
						<label>{$core->get_Lang('Phone')}</label>
						<span class="icon phone"><input class="form-control" type="text" name="phone" id="phone" placeholder="{$core->get_Lang('Enter your Phone')}"/></span>
					</div>
					<div class="form-group">
						<label>{$core->get_Lang('Company')}</label>
						<span class="icon company_name"><input class="form-control" type="text" name="company-name" id="company-name" placeholder="{$core->get_Lang('Enter your Company name')}"/></span>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-7 mb767_30">
								<label>{$core->get_Lang('Position')}</label>
								<span class="icon position"><input class="form-control" type="text" name="position" id="position" placeholder="{$core->get_Lang('Enter your Position')}"/></span>
							</div>
							<div class="col-sm-5">
								<label>{$core->get_Lang('Tax code')}</label>
								<span class="icon code"><input class="form-control" type="text" name="tax-code" id="tax-code" placeholder="{$core->get_Lang('Enter Tax code')}"/></span>
							</div>
						</div>			
					</div>
					<div class="form-group">
						<label>{$core->get_Lang('Password')}</label>
						<span class="icon password"><input class="form-control" type="text" name="password" id="password" placeholder="{$core->get_Lang('Enter Password')}"/></span>
					</div>
					<div class="form-group">
						<label>{$core->get_Lang('Confirm Password')}</label>
						<span class="icon password"><input class="form-control" type="text" name="re-password" id="re-password" placeholder="{$core->get_Lang('Enter Confirm Password')}"/></span>
					</div>
					<div class="form-group mb20">
						<input class="form-control btn_register" type="submit" value="{$core->get_Lang('Next')} >>">
					</div>
					<div class="bottom-form">
						<p class="text-right">{$core->get_Lang('Already have an account')}? <a href="" title="{$core->get_Lang('Signin')}">{$core->get_Lang('Signin')}</a></p>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</div>