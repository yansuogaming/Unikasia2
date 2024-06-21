<img style="display: none" src="{$DOMAIN_NAME}/setCookie.php?v={$upd_version}"/>
{if $message eq 'NotPermission' or $message eq 'notPermission'}
<div id="message">
	<span class="updated">{$core->get_Lang('adminnotallowaccess')}</span>
</div>
{/if}
{if $message eq 'insertSuccess'}
<div id="message" class="add">
	<span><img align="absmiddle" src="{$URL_IMAGES}/icon_admin/add.png" width="32px" />{$core->get_Lang('addnewsuccess')}</span>
</div>
{/if}
{if $message eq 'RestoreSuccess'}
<div id="message" class="restore">
	<span><img align="absmiddle" src="{$URL_IMAGES}/icon_admin/TimeMachine.png" width="32px" />{$core->get_Lang('restoringsuccess')}</span>
</div>
{/if}
{if $message eq 'updateSuccess' or $message eq 'UpdateSuccess'}
<div id="message" class="update">
	<span><img src="{$URL_IMAGES}/icon_admin/iSync.png" width="32px" />{$core->get_Lang('updatesuccessful')}</span>
</div>
{/if}
{if $message eq 'TrashSuccess'}
<div id="message" class="trash">
	<span><img align="absmiddle" src="{$URL_IMAGES}/icon_admin/Trash-Full.png" width="32px" />{$core->get_Lang('movedtotrash')}</span>
</div>
{/if}
{if $message eq 'DeleteSuccess'}
<div id="message" class="del">
	<span><img src="{$URL_IMAGES}/icon_admin/Del.png" width="32px" />{$core->get_Lang('deletesuccess')}</span>
</div>
{/if}
{if $message eq 'invalidAccess'}
<div id="message" class="del">
	<span><img src="{$URL_IMAGES}/icon_admin/Lock.png" width="32px" />{$core->get_Lang('youdonothavepermission')}</span>
</div>
{/if}
{if $message eq 'PositionSuccess'}
<div id="message" class="pos">
	<span><img align="absmiddle" src="{$URL_IMAGES}/icon_admin/Pos.png" width="32px" />{$core->get_Lang('positionhasbeenchanged')}</span>
</div>
{/if}
<header id="header" class="header">
	<div class="logo" id="logo">
		<a href="{$PCMS_URL}" title="{$PAGE_NAME}">
			<img height="43px" src="{$URL_IMAGES}/logo_vietisonew.png" alt="{$PAGE_NAME}" />
		</a>
	</div>
	<a href="javascript:void(0);" class="sidebar-collapse-click" id="sidebar-collapse-click">
		<i class="fa fa-bars" aria-hidden="true"></i>
		{*{if !$clsConfiguration->getValue($SIDEBAR_TOGGLE)}
		<i class="fa fa-bars" aria-hidden="true"></i>{else}
		<i class="fa fa-bars" aria-hidden="true"></i>{/if}*}
	</a>
	{if $clsISO->getCheckActiveModulePackage($package_id,'booking','create_booking','default')}
	<div class="btn_create_booking">
		<a href="{$PCMS_URL}/index.php?mod=booking&act=list_booking" title="{$core->get_Lang('Create Booking')}">
			{$clsISO->makeIcon('cart-plus',$core->get_Lang('Create Booking'))}
		</a>
	</div>
	{/if}
	<ul class="menu_header">
		<li><a href="{$PCMS_URL}">{$core->get_Lang('Dashboard')}</a></li>
		<li class="s">|</li>
		<li><a href="{$DOMAIN_NAME}{$extLang}" target="_blank">{$core->get_Lang('clientpage')}</a></li>
		<li class="s">|</li>
		<li><a class="ajManageSystemNote">{$core->get_Lang('notes')}</a></li>
		<li class="s">|</li>
		<li><a class="ClickSiteHelp hidden767" href="javascript:void(0);" mod_page="{$mod}" act_page="{$act}" area_page="">{$core->get_Lang('Help')}</a></li>
	</ul>
	<div class="header_right">
		{assign var=listLang value=$clsISO->getListLangAdmin()}
		<div class="lang_menu">
			<a class="dropdown-toggle color_333" data-toggle="dropdown">
				<i class="flag flag-20 flag-20-{$_LANG_ID}"></i> {$_LANG_ID} <i class="fa fa-angle-down" aria-hidden="true"></i>
			</a>
            {if $listLang|@count >1}
			<ul class="dropdown-menu" role="menu">
				{section name=i loop=$listLang}
				{if $listLang[i] ne $_LANG_ID}
				<li><a title="{$listLang[i]}" href="{if $listLang[i] ne $LANG_DEFAULT}{$PCMS_URL}/index.php?lang={$listLang[i]}{else}{$DOMAIN_NAME}{/if}">
				<i class="flag flag-20 flag-20-{$listLang[i]}"></i> {$clsISO->getFullLanguage($listLang[i])}</span> </a> </li>
				{/if}
				{/section}
			</ul>
            {/if}
		</div>
		<div class="user_menu">
			<div class="user_right dropdown">
				<div class="user_name">
					<a class="dropdown-toggle color_333" data-toggle="dropdown">
						<span>{$clsUser->getOneField('first_name',$_loged_id)} {$clsUser->getOneField('last_name',$_loged_id)}</span>
						<span class="ip">{$clsISO->getRealIP()}</span>
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{$PCMS_URL}/index.php?mod=user&act=edit&user_id={$core->encryptID($core->_USER.user_id)}">{$core->get_Lang('myacount')}</a></li>
						<li><a href="{$PCMS_URL}/?mod=login&act=logout">{$core->get_Lang('logout')}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
{if $deviceType ne 'phone'}
	{literal}
	<script type="text/javascript">
		$(function(){
			var $ok = 1;
			if(mod == 'tour_exhautive'||mod == 'combo'||mod == 'hotel' || mod == 'cruise' || mod == 'blog' || mod == 'tour' || mod == 'property'){
				if(!$('#sidebar').hasClass('menu-min')){
					/*$('#sidebar').addClass('menu-min');
					$('#sidebar-collapse-click').addClass('closed');
					$.post(path_ajax_script+'/index.php?mod=home&act=ajOpenSidebar',{'val': 0},function(html){
						console.log(html);
					});*/
					$('#sidebar').removeClass('menu-min');
					$('#sidebar-collapse-click').removeClass('closed');
					$.post(path_ajax_script+'/index.php?mod=home&act=ajOpenSidebar',{'val': $ok},function(html){
						console.log(html);
					});
				}
			}else{
				if($('#sidebar').hasClass('menu-min')){
					$('#sidebar').removeClass('menu-min');
					$('#sidebar-collapse-click').removeClass('closed');
					$.post(path_ajax_script+'/index.php?mod=home&act=ajOpenSidebar',{'val': $ok},function(html){
						console.log(html);
					});
				}
			}
			$('#sidebar-collapse-click').click(function(ev){
				ev.preventDefault();
				var $_this = $(this),
					$_sidebar = $('#'+'sidebar');
				if(!$_sidebar.hasClass('menu-min')){
					$ok = 0;
					$_sidebar.addClass('menu-min');
					$_this.addClass('closed');
				}else{
					$ok = 1;
					$_sidebar.removeClass('menu-min');
					$_this.removeClass('closed');
				}
				$.post(path_ajax_script+'/index.php?mod=home&act=ajOpenSidebar',{
					'val': $ok
				}, function(html){
					// Some code
				});
				return false;
			});
			$(window).on('resize', function(){
				var _www = $(window).width(),
					_sidebar = $('#'+'sidebar');
				if(_www < 576){ // Extra small
					if(!_sidebar.hasClass('menu-min')){
						_sidebar.addClass('menu-min');
						$('#sidebar-collapse-click').addClass('closed');
					}
				}
			});
		});
	</script>
	{/literal}
{else}
	{literal}
	<script type="text/javascript">
		$(function(){
			var $ok = 1;
			if(!$('#sidebar').hasClass('menu-min')){
				$('#sidebar').addClass('menu-min');
				$('#sidebar-collapse-click').addClass('closed');
				$.post(path_ajax_script+'/index.php?mod=home&act=ajOpenSidebar',{
					'val': $ok
				},function(html){
					// Some code
				});
			}
			$('#sidebar-collapse-click').click(function(ev){
				ev.preventDefault();
				var $_this = $(this),
					$_sidebar = $('#'+'sidebar');
				if(!$_sidebar.hasClass('menu-min')){
					$ok = 0;
					$_sidebar.addClass('menu-min');
					$_this.addClass('closed');
				}else{
					$ok = 1;
					$_sidebar.removeClass('menu-min');
					$_this.removeClass('closed');
					
				}
				$.post(path_ajax_script+'/index.php?mod=home&act=ajOpenSidebar',{
					'val': $ok
				},function(html){
					// Some code
				});
				return false;
			});
		});
	</script>
	{/literal}
{/if}
<div id="wrapper" class="wrapper">
    <div id="page-body" class="page-body">
		{assign var = SIDEBAR_TOGGLE value = 'SIDEBAR_TOGGLE_'|cat:$_loged_id}
		<div class="sidebar{if $deviceType eq 'phone'} menu-min{else}{if !$clsConfiguration->getValue($SIDEBAR_TOGGLE)} menu-min{/if}{/if}" id="sidebar">
			<div id="sidebar_elements">
				{$core->getBlock('quick_menu')}
			</div>	
		</div>
		<div id="page-content" class="page-content">