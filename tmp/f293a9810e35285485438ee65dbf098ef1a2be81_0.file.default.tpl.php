<?php
/* Smarty version 3.1.38, created on 2024-04-11 08:48:13
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/user/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6617415d9352f3_97892578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f293a9810e35285485438ee65dbf098ef1a2be81' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/user/default.tpl',
      1 => 1710483362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617415d9352f3_97892578 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
:</strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Administrators');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Administrators');?>
</a>
    <a href="javascript:history.back();" class="back fr" style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>
</div>
<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<?php if ($_smarty_tpl->tpl_vars['user_group_id']->value == '0') {?>
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Administrators');?>
</h2>
			<?php } else { ?>
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Administrators');?>
: <?php echo $_smarty_tpl->tpl_vars['oneUserGroup']->value['name'];?>
</h2>
			<?php }?>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("This is where you configure the users which you want to allow to access the admin area.");?>
</p>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_user" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New Administrator');?>
" data-user_group_id="<?php echo $_smarty_tpl->tpl_vars['user_group_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Add New Administrator");?>
</a>
		</div>
    </div>
	<div class="container-fluid">
		<div class="hastable">
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
" />
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
				</form>	
			</div>
			
			<table width="100%" cellspacing="0" class="tbl-grid table-striped table_responsive">
				<thead>
					<tr>
						<th class="gridheader hiden767"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
						<th class="gridheader name_responsive full-w767" style="text-align:left;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
</strong></th>
						<th class="gridheader hiden767" style="text-align:left;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('First Name');?>
</strong></th>
						<th class="gridheader hiden767" style="text-align:left;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Last Name');?>
</strong></th>
						<th class="gridheader hiden767" style="text-align:left;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Administrator Role');?>
</strong></th>
						<th class="gridheader hiden767"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</strong></th>
						<th class="gridheader hiden767"><strong>Action</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
						<td class="index hiden767"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</td>
						<td class="name_service title_td1"><a title="Edit" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/user/insert/<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id'];?>
/overview" class="row-title"><strong><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_name'];?>
</strong></a><button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button></td>
						<td class="posts column-posts num block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('First Name');?>
"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['first_name'];?>
</td>
						<td class="posts column-posts num block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Last Name');?>
"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['last_name'];?>
</td>
						<td class="slug column-slug block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Administrator Role');?>
"><?php echo $_smarty_tpl->tpl_vars['clsUserGroup']->value->getName($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_group_id']);?>
</td>
						<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
" style="text-align:center">
							<a href="javascript:void(0);" class="SiteClickPublic" clsTable="User" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
" toField="is_active" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_active',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
								<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_active',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]) == '1') {?>
								<i class="fa fa-check-circle green"></i>
								<?php } else { ?>
								<i class="fa fa-minus-circle red"></i>
								<?php }?>
							</a>
						</td>
						<td class="block_responsive" data-title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Action');?>
" style="vertical-align: top; width: 30px; text-align: right; white-space: nowrap;">
							<div class="btn-group">
								<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu" style="right:0px !important">
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/user/insert/<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id'];?>
/overview"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
									<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?admin&mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&user_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_id']);?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
								</ul>
							</div>
						</td>
					</tr>	
					<?php
}
}
?>
				</tbody>				
			</table>
			<div class="clearfix" style="height:5px"></div>
				<div class="pagination_box">
				<div class="wrap holderEvent_tbl" id="dataTable_paginate">
				<!-- Ajax Loading pagination -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/user/jquery.user.new.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
><?php }
}
