<?php
/* Smarty version 3.1.38, created on 2024-04-15 10:55:10
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/ticket/list_ticket.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661ca51e41c1f2_32295389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20a56d0205cbd3dfc7bed2ab59b8aec328ace9ca' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/ticket/list_ticket.tpl',
      1 => 1698458069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ca51e41c1f2_32295389 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-ticket mb-0">
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
				
				<li class="py-2 <?php if ($_smarty_tpl->tpl_vars['act']->value == 'list_ticket') {?>bg-success<?php }?>"><a class="a_list_ticket" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('list_ticket');?>
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
				
				<li <?php if ($_smarty_tpl->tpl_vars['act']->value == 'list_ticket') {?>class="active"<?php }?>><a class="a_list_ticket" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('list_ticket');?>
"><?php echo makeIMO('format_list_bulleted',__('My ticket'),'font-20');?>
<span class="badge-unread-ticket"></span></a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['act']->value == 'my_ticket') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkTicket('my_ticket');?>
"><?php echo makeIMO('live_help',__('Request support'),'font-20');?>
</a></li>
			</ul>
		</div>
		<div class="ticket-content-right my_ticket">
			<div class="ticket_breadcrumb"><?php echo makeIMO('arrow_back_ios','','mr-2');?>
 <?php echo __('My ticket');?>
</div>
			<div class="box_list_ticket">
				<div class="box-filter-ticket p-2">
					<div class="input-group group-search-keyword">
						<span class="input-group-text bold no-border" style="background: #fff;flex:0 0 20px"><?php echo makeIMO('search','','font-20');?>
</span>
						<input type="text" class="form-control txtSearchISOCMSTicket no-border filterTicket" data-column="keyword" placeholder="<?php echo __('Search');?>
" />
					</div>
					<div class="dropdown mega-dropdown dropdown-toolbar">
						<a class="btn btn-default dropdown-toggle no-border" style="padding:7px 10px; border-left: 1px solid #D7D7D7!important" title="<?php echo __('Advanced search');?>
"><?php echo makeIMO('filter_list','','font-26','');?>
</a>						<ul class="dropdown-menu dropdown-menu-advanced-search min-w-340 p-3">
							<li class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label for="" class="col-form-label"><?php echo __('FromDate');?>
</label>
										<input type="text" value="" class="form-control datepicker filterTicket" data-column="start_date" placeholder="<?php echo __('FromDate');?>
">
									</div>
									<div class="col-md-6">
										<label for="" class="col-form-label"><?php echo __('ToDate');?>
</label>
										<input type="text" value="" class="form-control datepicker filterTicket" data-column="to_date" placeholder="<?php echo __('ToDate');?>
">
									</div>
								</div>
							</li>
							<li class="form-group">
								<?php $_smarty_tpl->_assignInScope('getInfoCatTicket', $_smarty_tpl->tpl_vars['clsISO']->value->getInfoCatTicket());?>
								<select name="cat_ticket" class="form-control filterTicket" data-column="cat">
									<option value=""><?php echo __('Ticket type');?>
</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getInfoCatTicket']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</li>
							<li class="form-group">
								<?php $_smarty_tpl->_assignInScope('getInfoStatusTicket', $_smarty_tpl->tpl_vars['clsISO']->value->getInfoStatusTicket());?>
								<select name="status_ticket" class="form-control filterTicket" data-column="status">
									<option value=""><?php echo __('Status');?>
</option>
									<option value="unread"><?php echo __('UnRead');?>
</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getInfoStatusTicket']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</li>
							<li class="form-group">
								<label for="" class="col-form-label"><?php echo __('Creators');?>
</label>
								<select name="user_id_ticket" class="form-control filterTicket iso-selectbox" data-column="user_id" style="width: 100%">
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectUserOptions(0,__('All'));?>

								</select>
							</li>
						</ul>
					</div>
									</div>
				<div id="holderISOCMSTicketGlobe"></div>
			</div>		
		</div>		
	</div>
</div><?php }
}
