<?php
/* Smarty version 3.1.38, created on 2024-04-08 13:11:04
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66138a78f1d6b4_85348169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f707f3db7ba546d5ec7d517ea4c5ae5a6b5afeb' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/_footer.tpl',
      1 => 1705456265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66138a78f1d6b4_85348169 (Smarty_Internal_Template $_smarty_tpl) {
?>			</div>
		</div>
	</div>
	<div class="clearfix"></div>
    <div class="page-footer">
        Powered by ISOCMS &copy; 2006-<?php echo date('Y');?>
 <a href="http://www.vietiso.com/">VietISO</a><br />
        Developed by VietISO Technical Team. Email: <a href="mailto:support@vietiso.com">support@vietiso.com</a>.
	</div>
	<?php if ($_smarty_tpl->tpl_vars['update_sitemap']->value) {?>
	<img src="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
/sitemap.php?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" style="display:none" />	
	<?php }?>
</div>
<div id="ajax_loading"></div>
<div class="ticket-now">
	<div class="in-ticket-now" data-total="1"></div>
</div>
<div class="pop-ticket-now">
	<div class="d-flex" style="align-items: center; justify-content: space-between">
	<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/ticket/viso-logo.png" alt="" >
	<span class="close-pop-ticket-now"><?php echo makeIMO('minimize');?>
</span>
	</div>
	<p class="bold font-18 mt-20"><?php echo __('Contact VietISO team');?>
</p>
	<p class="font-14 mb-5"><?php echo __('ticket_now_content');?>
</p>
	<a class="btn btn-warning color-fff w-100" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('my_ticket');?>
" target="_blank"><?php echo __('Send Ticket');?>
</a>
	<p class="mt-20 text-center underline"><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('ticket');?>
" target="_blank"><?php echo __('Access the documentation');?>
</a></p>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(".toggle-row").click(function() {
		var $_this = $(this);
		if($_this.parents("tr").hasClass("open_tr")){
			$_this.closest("tr").removeClass("open_tr");
			$_this.closest("tr").find(".fa-caret").removeClass("fa-caret-up");
		}else{
			$_this.parents("tr").addClass("open_tr");
			$_this.closest("tr").find(".fa-caret").addClass("fa-caret-up");
		}
	});

<?php echo '</script'; ?>
>
<?php }
}
