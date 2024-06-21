<?php
/* Smarty version 3.1.38, created on 2024-04-08 14:53:33
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/childpolicy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6613a27d52a048_12693868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a8bf7d0163ae9012277ea8f05ab67238c04475d' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/cruise/childpolicy.tpl',
      1 => 1704439548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6613a27d52a048_12693868 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page_container page-tour_setting">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_module_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">	
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_cruise_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child Policies');?>
</h2>
					<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('systemmanagementsettingchildpolicy');?>
</p>
				</div>
			</div>
			<div class="wrap mt10 mb20">
				<div id="tab_content"> 
					<form method="post" action="" enctype="multipart/form-data">
						<table class="full-width tbl-grid" cellspacing="0">
							<tr>
								<td class="gridheader" colspan="2" style="width:500px;text-align:center; "><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Child Age');?>
</strong></td>
								<td class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Cruise Fares');?>
</strong></td>
							</tr>
							<tbody id="childPolicy"> 
								<tr class="row1">
									<td style="width:250px"><input class="text_32 border_aaa bold" type="text" name="iso-InfantTitlePolicy" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('InfantTitlePolicy');?>
"></td>
									<td style="width:250px;">
									<div class="line mb10">
									<label class="width100"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Min Age');?>
</label> 
									<select class="form-control" name="iso-InfantMinAgePolicy" style="width:65px">
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(0,6,$_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('InfantMinAgePolicy'));?>

									</select>

									</div>
									<div class="line">
									<label class="width100"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Max Age');?>
</label> 
									<select class="form-control" name="iso-InfantMaxAgePolicy" style="width:65px">
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(0,6,$_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('InfantMaxAgePolicy'));?>

									</select>
									</div>
									</td>
									<td><input class="text_32 border_aaa bold" type="number" name="iso-InfantFaresPolicy" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('InfantFaresPolicy');?>
" style="width:70px" min="0" max="100"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('% Adult fares');?>
</td>
								</tr>
								<tr class="row2">
									<td>
									<input class="text_32 border_aaa bold" type="text" name="iso-ChildTitlePolicy" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ChildTitlePolicy');?>
"></td>
									<td>
									<div class="line mb10">
									<label class="width100"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Min Age');?>
</label> 
									<select class="form-control" name="iso-ChildMinAgePolicy" style="width:65px">
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(0,12,$_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ChildMinAgePolicy'));?>

									</select>
									</div>
									<div class="line">
									<label class="width100"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Max Age');?>
</label> 
									<select class="form-control" name="iso-ChildMaxAgePolicy" style="width:65px">
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(0,12,$_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ChildMaxAgePolicy'));?>

									</select>
									</div>
									</td>
									<td><input class="text_32 border_aaa bold" type="number" name="iso-ChildFaresPolicy" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('ChildFaresPolicy');?>
" min="0" max="100" style="width:70px"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('% Adult fares');?>
</td>
								</tr>
								<tr class="row1">
									<td colspan="2">
									<input class="text_32 border_aaa bold" type="text" name="iso-AdultTitlePolicy" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('AdultTitlePolicy');?>
"></td>
									<td><input class="text_32 border_aaa bold" type="number"  value="100" style="width:70px" disabled="disabled"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('% Adult fares');?>
</td>
								</tr>
							</tbody>
						</table>
						<fieldset class="submit-buttons">
							<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

							<input value="UpdateConfiguration" name="submit" type="hidden">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/editor/tiny_mce/tiny_mce.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$(".datepicker").datepicker();
	});
<?php echo '</script'; ?>
>
<style type="text/css">
#childPolicy label.width100{display:inline-block; width:100px; }
</style>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_THEMES']->value;?>
/cruise/jquery.cruise.js"><?php echo '</script'; ?>
><?php }
}
