<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:42:38
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/menu_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66139fee633325_09376118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c7f7a19fb031d5be8dccfa5a70387c329473926' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/menu_step.tpl',
      1 => 1710467790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66139fee633325_09376118 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="list_work_step_insert">
	<div class="panel-group" id="accordion">
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['frames']->value, 'frame', false, 'k', 'root', array (
));
$_smarty_tpl->tpl_vars['frame']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['frame']->value) {
$_smarty_tpl->tpl_vars['frame']->do_else = false;
?>
		<?php $_smarty_tpl->_assignInScope('lstStep', $_smarty_tpl->tpl_vars['frame']->value['steps']);?>
		<div class="panel panel-edited panel-default panel--<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" panel="<?php echo $_smarty_tpl->tpl_vars['panel']->value;?>
">
			<div class="panel-heading <?php if ($_smarty_tpl->tpl_vars['panel']->value == $_smarty_tpl->tpl_vars['k']->value) {?> current<?php }?>">
				<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['panel']->value == $_smarty_tpl->tpl_vars['k']->value) {
} else { ?>collapsed<?php }?>">
					<h4 class="panel-title"><i class="ico ico-<?php echo $_smarty_tpl->tpl_vars['frame']->value['icon'];?>
"></i>
					<?php echo $_smarty_tpl->tpl_vars['frame']->value['name'];?>

					</h4>
				</a>
			</div>
			<div id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['panel']->value == $_smarty_tpl->tpl_vars['k']->value) {?>in<?php } else {
}?>">
				<div class="panel-body">
					<ul class="stepbar-list stepbar-list_<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstStep']->value, 'step', false, 'key', 'cdn', array (
));
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
						<li><a href="javascript:void(0);" class="loadYieldStep<?php if ($_smarty_tpl->tpl_vars['currentstep']->value == $_smarty_tpl->tpl_vars['key']->value) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['step']->value['status'] == '1') {?>valid<?php }?>" data-route="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLinkAdmin($_smarty_tpl->tpl_vars['mod']->value);?>
/<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="step_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-step="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" panel="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['step']->value['name'];?>
" data-step_id="<?php echo $_smarty_tpl->tpl_vars['step']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['step']->value['name'];?>
</a></li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div><?php }
}
