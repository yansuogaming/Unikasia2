<?php
/* Smarty version 3.1.38, created on 2024-05-06 09:36:02
  from '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/blocks/quick_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_663842120c0aa5_16923338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9865409a97a60f028cddf3bc335535d58d8ceae' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/private_html/admin/isocms/templates/default/blocks/quick_menu.tpl',
      1 => 1714822399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663842120c0aa5_16923338 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function(){
		/*$.lockfixed("#sidebar_elements", {offset: {top:0, bottom:61}});*/
		$(document).on('click', '.dropdown-toggle', function(ev){
			var $_this = $(this);
			var $_sub = $_this.parent().find('.submenu');
			if($_sub.is(':visible')){
				$_sub.stop(false,true).slideUp();
				$_this.find('.arrow').removeClass('fa-angle-up').addClass('fa-angle-down');
				$_this.parent().removeClass('active');
			}else{
				$('.submenu:visible').stop(false,true).slideUp();
				$('.arrow').removeClass('fa-angle-up').addClass('fa-angle-down');
				$_sub.stop(false,true).slideDown();
				$_this.find('.arrow').removeClass('fa-angle-down').addClass('fa-angle-up');
				$_this.parent().addClass('active');
				
			}
			return false;
		});
		var $ww = $(window).width(),
			stickyOffset = $('#sidebar').offset().top;
		$(window).scroll(function(){
			var sticky = $('#sidebar');
			scroll = $(window).scrollTop();
			if (scroll >= stickyOffset || scroll >= 35){
				sticky.addClass('fixed');
			} else{
				sticky.removeClass('fixed');
			}
		});
	});
<?php echo '</script'; ?>
>

<ul id="sidebar-nav" class="nav nav-list">
	<li class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'home') {?> active<?php }?>">
		<a class="nav-header" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
">
			<div class="ico"><i class="fa fa-home"></i></div>
			<span class="menu-text bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Dashboard');?>
</span>
		</a>
	</li>
	<?php $_smarty_tpl->_assignInScope('lstAdminButtonLeft', $_smarty_tpl->tpl_vars['clsAdminButton']->value->getAll('is_active=1 and parent_id=0 and _type="_LEFT" order by order_no asc'));?>
	<?php
$__section_k_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_1_total = $__section_k_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_1_total !== 0) {
for ($__section_k_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_1_iteration <= $__section_k_1_total; $__section_k_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
	<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['adminbutton_id']);?>
	<?php $_smarty_tpl->_assignInScope('lstAdminButtonLeftChild', $_smarty_tpl->tpl_vars['clsAdminButton']->value->getChild($_smarty_tpl->tpl_vars['id']->value));?>
	<?php if ($_smarty_tpl->tpl_vars['clsAdminButton']->value->checkPackage($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['package_id']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['core']->value->checkAccess($_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['mod_page'])) {?>
	<li class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == $_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['mod_page'] || $_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['mod_page'] == 'tour') {?>active<?php }?>" package_id="<?php echo $_smarty_tpl->tpl_vars['package_id']->value;?>
">
		<a data-toggle="ripple" <?php if ($_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value) {?>href="javascript:void(0);" class="nav-header dropdown-toggle <?php echo $_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['class_page'];?>
"<?php } else { ?>class="nav-header" href="<?php echo $_smarty_tpl->tpl_vars['clsAdminButton']->value->getURL($_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['adminbutton_id']);?>
"<?php }?>>
			<div class="ico"><i class="<?php echo $_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['class_iconpage'];?>
"></i></div>
			<span class="menu-text"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['title_page']);?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value) {?><b class="arrow fa fa-angle-down"></b><?php }?>
		</a>
		<div class="submenu" <?php if ($_smarty_tpl->tpl_vars['mod']->value == $_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['mod_page'] || $_smarty_tpl->tpl_vars['lstAdminButtonLeft']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['mod_page'] == 'tour') {?>style="display:block;"<?php } else { ?>style="display:none;"<?php }?>>
			<ul class="nav-list sublist">
				<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php $_smarty_tpl->_assignInScope('sub_id', $_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adminbutton_id']);?>
				<?php if ($_smarty_tpl->tpl_vars['clsAdminButton']->value->checkPackage($_smarty_tpl->tpl_vars['sub_id']->value,$_smarty_tpl->tpl_vars['package_id']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['core']->value->checkAccess($_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page']) && $_smarty_tpl->tpl_vars['clsAdminButton']->value->checkConfiguration($_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adminbutton_id'])) {?>
				<li class="<?php echo $_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['class_page'];?>
" <?php echo $_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page'];?>
>
					<a data-toggle="ripple" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title_page']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['clsAdminButton']->value->getURL($_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adminbutton_id']);?>
"><span><i class="fa fa-angle-right"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang($_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title_page']);?>
 <?php if ($_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page'] == 'cruise' || $_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page'] == 'discount' || $_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page'] == 'hotel' || $_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page'] == 'voucher' || ($_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mod_page'] == 'tour_exhautive' && $_smarty_tpl->tpl_vars['lstAdminButtonLeftChild']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['act_page'] == 'store')) {?><span class="badge s_pro label-warning">Pro</span><?php }?></span>
					</a>
				</li>
				<?php }?>
				<?php }?>
				<?php
}
}
?>
			</ul>
		</div>
	</li>
	<?php }?>
	<?php }?>
	<?php
}
}
?>
</ul><?php }
}
