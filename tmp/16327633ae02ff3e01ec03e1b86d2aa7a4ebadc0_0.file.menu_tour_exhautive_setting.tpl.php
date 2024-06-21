<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:16:51
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/menu_tour_exhautive_setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661399e3271054_39274083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16327633ae02ff3e01ec03e1b86d2aa7a4ebadc0' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/menu_tour_exhautive_setting.tpl',
      1 => 1710815111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661399e3271054_39274083 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="menu_setting_box">
	<ul class="ul_menu_setting">
		<?php $_smarty_tpl->_assignInScope('lstTourType', $_smarty_tpl->tpl_vars['clsTourStore']->value->getListType());?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstTourType']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['k']->value) {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=tour_exhautive&act=store&type=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['k']->value);?>
">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['k']->value == 'DEPARTURE') {?><span class="badge s_pro label-warning">Pro</span><?php }?></span>
			</a>
		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'property','service','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'property' && $_smarty_tpl->tpl_vars['act']->value == 'service') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?&mod=property&act=service">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addon Services');?>
</span>
			</a>
		</li>
		<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','category','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'tour_exhautive' && $_smarty_tpl->tpl_vars['act']->value == 'category') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?&mod=tour_exhautive&act=category" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles');?>
</span>
			</a>
		</li>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'property','transport','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'property' && $_smarty_tpl->tpl_vars['act']->value == 'transport') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=property&act=transport" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Transportations');?>
">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Transportations');?>
</span>
			</a>
		</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'property','activities','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'property' && ($_smarty_tpl->tpl_vars['act']->value == 'activities' || $_smarty_tpl->tpl_vars['act']->value == 'edit_activities')) {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=property&act=activities" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type of activity');?>
">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type of activity');?>
</span>
			</a>
		</li>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','category_country','default')) {?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'tour_exhautive' && $_smarty_tpl->tpl_vars['act']->value == 'category_country') {?>current<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?&mod=tour_exhautive&act=category_country" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles by Countries');?>
">
                <span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Travel Styles by Countries');?>
</span>
            </a>
        </li>
		<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','property','default','MEAL')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['type']->value == 'MEAL') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=tour_exhautive&act=property&type=MEAL">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meals');?>
</span>
			</a>
		</li>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','property','default','TOUROPTION')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['type']->value == 'TOUROPTION') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=tour_exhautive&act=property&type=TOUROPTION" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price class');?>
">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price class');?>
</span>
			</a>
		</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','group','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'tour_exhautive' && $_smarty_tpl->tpl_vars['act']->value == 'group') {?>current<?php }?>">
			<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Market');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=tour_exhautive&act=group">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Market');?>
</span>
			</a>
		</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','property','default','VISITORTYPE')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['type']->value == 'VISITORTYPE') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=tour_exhautive&act=property&type=VISITORTYPE">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Adults - Children - Infants type');?>
</span>
			</a>
		</li>
        <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','price_range','default')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'tour_exhautive' && $_smarty_tpl->tpl_vars['act']->value == 'price_range') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=tour_exhautive&act=price_range">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price range');?>
</span>
			</a>
		</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'tour_exhautive','property','default','SIZEGROUP')) {?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['type']->value == 'SIZEGROUP') {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=tour_exhautive&act=property&type=SIZEGROUP" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price for Groups');?>
">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Price for Groups');?>
 <span class="badge s_pro label-warning">Pro</span></span>
			</a>
		</li>
        <?php }?>
	</ul>
</div><?php }
}
