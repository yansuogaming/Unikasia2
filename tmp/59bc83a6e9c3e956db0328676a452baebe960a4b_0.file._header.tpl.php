<?php
/* Smarty version 3.1.38, created on 2024-05-06 09:36:01
  from '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66384211f372a0_93378561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59bc83a6e9c3e956db0328676a452baebe960a4b' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/_header.tpl',
      1 => 1714822323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66384211f372a0_93378561 (Smarty_Internal_Template $_smarty_tpl) {
?><img style="display: none" src="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/setCookie.php?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>
<?php if ($_smarty_tpl->tpl_vars['message']->value == 'NotPermission' || $_smarty_tpl->tpl_vars['message']->value == 'notPermission') {?>
<div id="message">
	<span class="updated"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adminnotallowaccess');?>
</span>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value == 'insertSuccess') {?>
<div id="message" class="add">
	<span><img align="absmiddle" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_admin/add.png" width="32px" /><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('addnewsuccess');?>
</span>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value == 'RestoreSuccess') {?>
<div id="message" class="restore">
	<span><img align="absmiddle" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_admin/TimeMachine.png" width="32px" /><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restoringsuccess');?>
</span>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value == 'updateSuccess' || $_smarty_tpl->tpl_vars['message']->value == 'UpdateSuccess') {?>
<div id="message" class="update">
	<span><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_admin/iSync.png" width="32px" /><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('updatesuccessful');?>
</span>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value == 'TrashSuccess') {?>
<div id="message" class="trash">
	<span><img align="absmiddle" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_admin/Trash-Full.png" width="32px" /><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movedtotrash');?>
</span>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value == 'DeleteSuccess') {?>
<div id="message" class="del">
	<span><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_admin/Del.png" width="32px" /><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('deletesuccess');?>
</span>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value == 'invalidAccess') {?>
<div id="message" class="del">
	<span><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_admin/Lock.png" width="32px" /><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youdonothavepermission');?>
</span>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value == 'PositionSuccess') {?>
<div id="message" class="pos">
	<span><img align="absmiddle" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_admin/Pos.png" width="32px" /><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('positionhasbeenchanged');?>
</span>
</div>
<?php }?>
<header id="header" class="header">
	<div class="logo" id="logo">
		<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
">
			<img height="43px" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo_vietisonew.png" alt="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
" />
		</a>
	</div>
	<a href="javascript:void(0);" class="sidebar-collapse-click" id="sidebar-collapse-click">
		<i class="fa fa-bars" aria-hidden="true"></i>
			</a>
	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'booking','create_booking','default')) {?>
	<div class="btn_create_booking">
		<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=booking&act=list_booking" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Create Booking');?>
">
			<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('cart-plus',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Create Booking'));?>

		</a>
	</div>
	<?php }?>
	<ul class="menu_header">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Dashboard');?>
</a></li>
		<li class="s">|</li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['extLang']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('clientpage');?>
</a></li>
		<li class="s">|</li>
		<li><a class="ajManageSystemNote"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('notes');?>
</a></li>
		<li class="s">|</li>
		<li><a class="ClickSiteHelp hidden767" href="javascript:void(0);" mod_page="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" act_page="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" area_page=""><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Help');?>
</a></li>
	</ul>
	<div class="header_right">
		<?php $_smarty_tpl->_assignInScope('listLang', $_smarty_tpl->tpl_vars['clsISO']->value->getListLangAdmin());?>
		<div class="lang_menu">
			<a class="dropdown-toggle color_333" data-toggle="dropdown">
				<i class="flag flag-20 flag-20-<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
 <i class="fa fa-angle-down" aria-hidden="true"></i>
			</a>
            <?php if (count($_smarty_tpl->tpl_vars['listLang']->value) > 1) {?>
			<ul class="dropdown-menu" role="menu">
				<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listLang']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php if ($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] != $_smarty_tpl->tpl_vars['_LANG_ID']->value) {?>
				<li><a title="<?php echo $_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" href="<?php if ($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] != $_smarty_tpl->tpl_vars['LANG_DEFAULT']->value) {
echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?lang=<?php echo $_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];
} else {
echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
}?>">
				<i class="flag flag-20 flag-20-<?php echo $_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getFullLanguage($_smarty_tpl->tpl_vars['listLang']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</span> </a> </li>
				<?php }?>
				<?php
}
}
?>
			</ul>
            <?php }?>
		</div>
		<div class="user_menu">
			<div class="user_right dropdown">
				<div class="user_name">
					<a class="dropdown-toggle color_333" data-toggle="dropdown">
						<span><?php echo $_smarty_tpl->tpl_vars['clsUser']->value->getOneField('first_name',$_smarty_tpl->tpl_vars['_loged_id']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['clsUser']->value->getOneField('last_name',$_smarty_tpl->tpl_vars['_loged_id']->value);?>
</span>
						<span class="ip"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRealIP();?>
</span>
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=user&act=edit&user_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['core']->value->_USER['user_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('myacount');?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=login&act=logout"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('logout');?>
</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
	
	<?php echo '<script'; ?>
 type="text/javascript">
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
	<?php echo '</script'; ?>
>
	
<?php } else { ?>
	
	<?php echo '<script'; ?>
 type="text/javascript">
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
	<?php echo '</script'; ?>
>
	
<?php }?>
<div id="wrapper" class="wrapper">
    <div id="page-body" class="page-body">
		<?php $_smarty_tpl->_assignInScope('SIDEBAR_TOGGLE', ('SIDEBAR_TOGGLE_').($_smarty_tpl->tpl_vars['_loged_id']->value));?>
		<div class="sidebar<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> menu-min<?php } else {
if (!$_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SIDEBAR_TOGGLE']->value)) {?> menu-min<?php }
}?>" id="sidebar">
			<div id="sidebar_elements">
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('quick_menu');?>

			</div>	
		</div>
		<div id="page-content" class="page-content"><?php }
}
