<?php
/* Smarty version 3.1.38, created on 2024-04-22 16:02:52
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/ticket/detail_ticket.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_662627bcbb4be5_22081387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61995e9c952fa0c6fffe6d1bad72d8f41e5f8970' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/ticket/detail_ticket.tpl',
      1 => 1701222093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662627bcbb4be5_22081387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container-ticket mb-0">
	<div class="div_information_bar">
		<div class="h_information_bar" data-submenu="sub-menu-information">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="role_session bold font-14"><?php echo __('My ticket');?>
</div>
		<div class="sub-menu-information">
			<ul>
				<li class="py-2 <?php if ($_smarty_tpl->tpl_vars['act']->value == 'home') {?>bg-success<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('ticket');?>
"><?php echo makeIMO('support',__('Help center'),'font-20');?>
</a></li>
				
				<li class="py-2 <?php if ($_smarty_tpl->tpl_vars['act']->value == 'detail_ticket') {?>bg-success<?php }?>"><a class="a_list_ticket" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('list_ticket');?>
"><?php echo makeIMO('format_list_bulleted',__('My ticket'),'font-20');?>
<span class="badge-unread-ticket"></span></a></li>
				<li class="py-2 <?php if ($_smarty_tpl->tpl_vars['act']->value == 'my_ticket') {?>bg-success<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('my_ticket');?>
"><?php echo makeIMO('live_help',__('Request support'),'font-20');?>
</a></li>
			</ul>
		</div>	
	</div>
	<div class="d-flex">
		<div class="ticket-menu-left">
			<ul>
				<li <?php if ($_smarty_tpl->tpl_vars['act']->value == 'home') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('ticket');?>
"><?php echo makeIMO('support',__('Help center'),'font-20');?>
</a></li>
				
				<li <?php if ($_smarty_tpl->tpl_vars['act']->value == 'detail_ticket') {?>class="active"<?php }?>><a class="a_list_ticket" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('list_ticket');?>
"><?php echo makeIMO('format_list_bulleted',__('My ticket'),'font-20');?>
<span class="badge-unread-ticket"></span></a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['act']->value == 'my_ticket') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('my_ticket');?>
"><?php echo makeIMO('live_help',__('Request support'),'font-20');?>
</a></li>
			</ul>
		</div>
		<div class="ticket-content-right detail_ticket">
						<div class="detail_ticket_breadcrumb">
				<div class="d-flex flex-wrap">
					<div class="d-flex" style="align-items: flex-start"><a class="back-list-ticket" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('list_ticket');?>
"><?php echo makeIMO('arrow_back_ios','','mr-2 font-20');?>
 </a><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLabelStatusTicket($_smarty_tpl->tpl_vars['oneTicket']->value['status']);?>
</div>
					<div>
						<p class="mb-2"><span class="color-0479B9 mx-2">#<?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['code'];?>
 [<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getCatNameTicket($_smarty_tpl->tpl_vars['oneTicket']->value['cat'],$_smarty_tpl->tpl_vars['oneTicket']->value);?>
]</span>- <?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['title'];?>
</p>
						<p class="mb-20 font-13 mb-sm-0"><?php echo makeIMO('person','','mr-1','style="transform:translateY(3px)"');
echo $_smarty_tpl->tpl_vars['full_name']->value;
echo makeIMO('date_range','','mr-1 ml-3','style="transform:translateY(3px)"');
echo __('SendDate');?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneTicket']->value['reg_date'],"%d/%m/%Y %H:%M");?>
</p>
					</div>
				</div>
				<div class="text-right d-flex" style="align-items: center;">
					<a href="javascript:void(0)" class="btn btn-primary mr-2 btn-submit-ticket reply-ticket" ticket_id="<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
"><?php echo makeIMO('edit',__('Reply'));?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['oneTicket']->value['status'] != '6closed') {?><a href="javascript:void(0)" class="btn close-ticket" ticket_id="<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
"><?php echo makeIMO('close',__('Close'));?>
</a>
					<?php } else { ?>
										<?php }?>
					
				</div>
			</div>
			<div class="detail_ticket_content">
				<?php if ($_smarty_tpl->tpl_vars['oneTicket']->value['status'] == '6closed') {?><div class="alert alert-warning text-center"><?php echo __('This ticket is closed. You can respond to the ticket to open it.');?>
</div><?php }?>
				<form action="" class="form-reply hide" ticket_id="<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
" enctype="multipart/form-data">
					<div class="row mb-20">
						<div class="col-md-6">
							<input type="text" class="form-control" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['full_name']->value;?>
" readonly placeholder="<?php echo __('Name');?>
">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['oneUser']->value['email'];?>
" readonly placeholder="<?php echo __('Email');?>
">
						</div>
					</div>
					<div class="form-group">
						<label for=""><?php echo __('Content');?>
</label>
						<textarea class="form-control isoTextArea required" id="content_reply" name="content_reply" placeholder="<?php echo __('Please enter your content');?>
"></textarea>
					</div>
					<div class="d-flex" style="align-items: center; justify-content: space-between">
						<div class="cif">
						<input class="input-file" id="AddFileAttach" type="file" name="file_attach">
						<label for="AddFileAttach" class="input-file-trigger" id="FileAttachTrigger"><?php echo __('SelectFileToUpload');?>
...</label>
						<span class="file-return" id="returnFileAttach"><?php echo __('No files have been selected');?>
</span>
						</div>
						<a href="javascript:void(0)" class="btn btn-primary btn-submit-ticket submitReplyTicket" ticket_id="<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
"><?php echo __('Send request');?>
</a>
					</div>
				</form>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_reply']->value, 'oneReply', false, 'reply_id');
$_smarty_tpl->tpl_vars['oneReply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply_id']->value => $_smarty_tpl->tpl_vars['oneReply']->value) {
$_smarty_tpl->tpl_vars['oneReply']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['oneReply']->value['user_id']) {?>
				<div class="box-user_ticket">
					<div class="box-user_ticket_info">
						<div class="d-flex" style="align-items: center;">
							<?php if (!empty($_smarty_tpl->tpl_vars['oneReply']->value['user_avatar'])) {?>
							<div class="d-flex pr-2" style="justify-content: center">
								<div class="m-avatar m-avatar-bg m-avatar-40" style="background: url(<?php echo $_smarty_tpl->tpl_vars['oneReply']->value['user_avatar'];?>
)"></div>
							</div>
							<?php } else { ?>
							<div class="d-flex pr-2" style="justify-content: center">
								<div class="m-avatar m-avatar-bg m-avatar-40 bold font-20" style="background: #D9D9D9"><?php echo substr($_smarty_tpl->tpl_vars['oneReply']->value['user_name'],0,1);?>
</div>
							</div>	
							<?php }?>
							<div class="pt-1">
								<p class="mb-0 font-18"><?php echo $_smarty_tpl->tpl_vars['oneReply']->value['user_name'];?>
</p>
								<p class="mb-1 font-12"><?php echo $_smarty_tpl->tpl_vars['oneReply']->value['user_email'];?>
</p>
							</div>
						</div>
						<div class="info_update_ticket font-12"><span><?php echo __('Update');?>
</span><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneReply']->value['reg_date'],"%d/%m/%Y (%H:%M)");?>
</span></div>
					</div>
					<div class="box-ticket_content box-user_ticket_content">
						<?php echo $_smarty_tpl->tpl_vars['oneReply']->value['content'];?>

						<?php if ($_smarty_tpl->tpl_vars['oneReply']->value['file_attach']) {?>
							<?php $_smarty_tpl->_assignInScope('file_attach_name', end(explode("/",$_smarty_tpl->tpl_vars['oneReply']->value['file_attach'])));?>
						<p class="mt-2"> <a href="<?php echo $_smarty_tpl->tpl_vars['oneReply']->value['file_attach'];?>
"><?php echo makeIMO('attachment',$_smarty_tpl->tpl_vars['file_attach_name']->value);?>
</a></p>
						<?php }?>
					</div>
				</div>
				<?php } else { ?>
				<div class="box-admin_ticket">
					<div class="box-admin_ticket_info">
						<div class="d-flex" style="align-items: center;">
							<?php if (0) {?>
								<?php if (!empty($_smarty_tpl->tpl_vars['oneReply']->value['admin_avatar'])) {?>
								<div class="d-flex pr-2" style="justify-content: center">
									<div class="m-avatar m-avatar-bg m-avatar-40" style="background: url(<?php echo $_smarty_tpl->tpl_vars['oneReply']->value['admin_avatar'];?>
)"></div>
								</div>
								<?php } else { ?>
								<div class="d-flex pr-2" style="justify-content: center">
									<div class="m-avatar m-avatar-bg m-avatar-40 bold font-20" style="background: #D9D9D9"><?php echo substr($_smarty_tpl->tpl_vars['oneReply']->value['admin_name'],0,1);?>
</div>
								</div>	
								<?php }?>
								<div class="pt-1">
									<p class="mb-0 font-18"><?php echo $_smarty_tpl->tpl_vars['oneReply']->value['admin_name'];?>
</p>
									<p class="mb-1 font-12"><?php echo $_smarty_tpl->tpl_vars['oneReply']->value['admin_email'];?>
</p>
								</div>
							<?php }?>
							<div class="d-flex pr-2" style="justify-content: center">
								<div class="m-avatar m-avatar-bg m-avatar-40" style="background: url(<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/ticket/viso-logo.png)"></div>
							</div>
							<div class="pt-1">
								<p class="mb-0 font-18">VietISO Support Team</p>
								<p class="mb-1 font-12">support@vietiso.com</p>
							</div>
						</div>
						<div class="font-12 text-right"><?php echo __('Update');?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneReply']->value['reg_date'],"%d/%m/%Y (%H:%M)");?>
</div>
					</div>
					<div class="box-ticket_content box-admin_ticket_content">
						<?php echo $_smarty_tpl->tpl_vars['oneReply']->value['content'];?>

						<?php if ($_smarty_tpl->tpl_vars['oneReply']->value['file_attach']) {?>
							<?php $_smarty_tpl->_assignInScope('file_attach_name', end(explode("/",$_smarty_tpl->tpl_vars['oneReply']->value['file_attach'])));?>
						<p class="mt-2"> <a href="<?php echo $_smarty_tpl->tpl_vars['oneReply']->value['file_attach'];?>
"><?php echo makeIMO('attachment',$_smarty_tpl->tpl_vars['file_attach_name']->value);?>
</a></p>
						<?php }?>
					</div>
				</div>
				<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['oneTicket']->value['user_id']) {?>
				<div class="box-user_ticket">
					<div class="box-user_ticket_info">
						<div class="d-flex" style="align-items: center;">
							<?php if (!empty($_smarty_tpl->tpl_vars['oneTicket']->value['user_avatar'])) {?>
							<div class="d-flex pr-2" style="justify-content: center">
								<div class="m-avatar m-avatar-bg m-avatar-40" style="background: url(<?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['user_avatar'];?>
)"></div>
							</div>
							<?php } else { ?>
							<div class="d-flex pr-2" style="justify-content: center">
								<div class="m-avatar m-avatar-bg m-avatar-40 bold font-20" style="background: #D9D9D9"><?php echo substr($_smarty_tpl->tpl_vars['oneTicket']->value['user_name'],0,1);?>
</div>
							</div>	
							<?php }?>
							<div class="pt-1">
								<p class="mb-0 font-18"><?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['user_name'];?>
</p>
								<p class="mb-1 font-12"><?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['user_email'];?>
</p>
							</div>
						</div>
						<div class="font-12 text-right"><?php echo __('Update');?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneTicket']->value['reg_date'],"%d/%m/%Y (%H:%M)");?>
</div>
					</div>
					<div class="box-ticket_content box-user_ticket_content">
						<?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['content'];?>

					</div>
				</div>
				<?php } else { ?>
				<div class="box-admin_ticket">
					<div class="box-admin_ticket_info">
						<div class="d-flex" style="align-items: center;">
							<?php if (0) {?>
								<?php if (!empty($_smarty_tpl->tpl_vars['oneTicket']->value['admin_avatar'])) {?>
								<div class="d-flex pr-2" style="justify-content: center">
									<div class="m-avatar m-avatar-bg m-avatar-40" style="background: url(<?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['admin_avatar'];?>
)"></div>
								</div>
								<?php } else { ?>
								<div class="d-flex pr-2" style="justify-content: center">
									<div class="m-avatar m-avatar-bg m-avatar-40 bold font-20" style="background: #D9D9D9"><?php echo substr($_smarty_tpl->tpl_vars['oneTicket']->value['admin_name'],0,1);?>
</div>
								</div>	
								<?php }?>
								<div class="pt-1">
									<p class="mb-0 font-18"><?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['admin_name'];?>
</p>
									<p class="mb-1 font-12"><?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['admin_email'];?>
</p>
								</div>
							<?php }?>
							<div class="d-flex pr-2" style="justify-content: center">
								<div class="m-avatar m-avatar-bg m-avatar-40" style="background: url(<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/ticket/viso-logo.png)"></div>
							</div>
							<div class="pt-1">
								<p class="mb-0 font-18">VietISO Support Team</p>
								<p class="mb-1 font-12">support@vietiso.com</p>
							</div>
						</div>
						<div class="font-12 text-right"><?php echo __('Update');?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneTicket']->value['reg_date'],"%d/%m/%Y (%H:%M)");?>
</div>
					</div>
					<div class="box-ticket_content box-admin_ticket_content">
						<?php echo $_smarty_tpl->tpl_vars['oneTicket']->value['content'];?>

					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		/*custom input file*/
		var AddFileAttach  = document.querySelector( "#AddFileAttach" ),  
			FileAttachTrigger     = document.querySelector( "#FileAttachTrigger" ),
			returnFileAttach = document.querySelector("#returnFileAttach");
			  
		FileAttachTrigger.addEventListener( "keydown", function( event ) {  
			if ( event.keyCode == 13 || event.keyCode == 32 ) {  
				AddFileAttach.focus();  
			}  
		});
		FileAttachTrigger.addEventListener( "click", function( event ) {
			AddFileAttach.focus();
		   return false;
		});  
		AddFileAttach.addEventListener( "change", function( event ) {  
			returnFileAttach.innerHTML = this.value;  
		}); 
	});
<?php echo '</script'; ?>
>
<?php }
}
