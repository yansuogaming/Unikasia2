<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:26:52
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/load_step_form_tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614995c3a3811_20701139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9687c2424cc22d4c5a573edbcdc9634d7e8ee08' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/tour_exhautive/load_step_form_tour.tpl',
      1 => 1702259137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614995c3a3811_20701139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/isocms/domains/isocms.com/public_html/inc/smarty3138/plugins/function.math.php','function'=>'smarty_function_math',),));
if ($_smarty_tpl->tpl_vars['run_ajax']->value == 'overview') {?>
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_tour_overview');?>

<?php } elseif ($_smarty_tpl->tpl_vars['run_ajax']->value == 'setting_menu') {?>
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_tour_setting_menu');?>

<?php } else { ?>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_menu_tour']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] = $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] - 1;
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] + 1;
?>
        <?php $_smarty_tpl->_assignInScope('child_cat_menu', $_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['child']);?>
        <?php $_smarty_tpl->_assignInScope('child_cat_menu_prev', $_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] : null)]['child']);?>
        <?php $_smarty_tpl->_assignInScope('child_cat_menu_next', $_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null)]['child']);?>
        
        <?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['child_cat_menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev'] = $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] - 1;
$_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] + 1;
?>
            <?php echo smarty_function_math(array('assign'=>'count_child_cat_menu_prev','equation'=>'x-y','x'=>count($_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] : null)]['child']),'y'=>1),$_smarty_tpl);?>

            <?php $_smarty_tpl->_assignInScope('list_cat_menu_prev', $_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_prev'] : null)]['cat_menu']);?>
            <?php $_smarty_tpl->_assignInScope('list_cat_menu_next', $_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null)]['cat_menu']);?>
            <?php $_smarty_tpl->_assignInScope('blk', ('box_detail_tour_').($_smarty_tpl->tpl_vars['run_ajax']->value));?>
            <?php if ($_smarty_tpl->tpl_vars['run_ajax']->value == $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)] && $_smarty_tpl->tpl_vars['run_ajax']->value != 'overview') {?>
				<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="type_post" value="<?php echo $_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
">
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getBlock($_smarty_tpl->tpl_vars['blk']->value,array("child_cat_menu"=>$_smarty_tpl->tpl_vars['child_cat_menu']->value,"count_child_cat_menu_prev"=>$_smarty_tpl->tpl_vars['count_child_cat_menu_prev']->value,"child_cat_menu_prev"=>$_smarty_tpl->tpl_vars['child_cat_menu_prev']->value,"child_cat_menu_next"=>$_smarty_tpl->tpl_vars['child_cat_menu_next']->value,"list_cat_menu_prev"=>$_smarty_tpl->tpl_vars['list_cat_menu_prev']->value,"list_cat_menu_next"=>$_smarty_tpl->tpl_vars['list_cat_menu_next']->value,"child_cat_menu_j"=>$_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)],"child_cat_menu_j_index_prev"=>$_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_prev'] : null)],"child_cat_menu_j_index_next"=>$_smarty_tpl->tpl_vars['child_cat_menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index_next'] : null)],"list_menu_tour_i_index_next"=>$_smarty_tpl->tpl_vars['list_menu_tour']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null)]));?>

				</form>
            <?php }?>
        <?php
}
}
?>
    <?php
}
}
}
echo '<script'; ?>
 type="text/javascript">
	var pcsm_ovv = '<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
';
	var list_check_target = <?php echo $_smarty_tpl->tpl_vars['list_check_target']->value;?>
;
	var pvalTable_ovv = <?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {
		$(".chosen-select").chosen({
			width: '100%',
			/*max_selected_options: 10*/
		});
        if($('.textarea_intro_editor_simple').length > 0){
            $('.textarea_intro_editor_simple').each(function(){
                var $_this = $(this);
                tinyMCE.remove();
                var $editorID = $_this.attr('id');
                $('#'+$editorID).isoTextAreaSimple();

            });
        }
        $.each( list_check_target, function( i, val ) {
            if(val['result'] == 'check_success'){
                $('#'+val['target']).closest('li').addClass(val['result']);
                $('#'+val['target']).html(val['name']);
            }else if(val['result'] == 'check_caution'){
                $('#'+val['target']).closest('li').addClass(val['result']);
                $('#'+val['target']).html(val['name']);
            }
        });
    })
<?php echo '</script'; ?>
>
<?php }
}
