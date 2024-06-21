<?php
/* Smarty version 3.1.38, created on 2024-04-09 09:41:43
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614aae7559fb6_43243815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b9cbbdd2e216b7db4b75b5f6ce83642f0305f6c' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/setting/home.tpl',
      1 => 1710743515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614aae7559fb6_43243815 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
	<strong>Bạn đang ở:</strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="Trang chủ"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" title="Cài đặt"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Installation');?>
</a>
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Come back');?>
</a>
</div>
<div class="page-tour_setting">
	<div class="page-title  d-flex" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?&mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
'">
		<div class="title">
			<h1><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home Config');?>
</h1>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter full fields in the required fields');?>
</p>
		</div>
	</div>
	<div class="container-fluid">
		<form id="forums" method="post" class="filterForm" action="">

			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Attractive tour");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitleAttractiveTour', ('TitleAttractiveTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleAttractiveTour']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitleAttractiveTour']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroAttractiveTour', ('IntroAttractiveTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroAttractiveTour']->value;?>
" id="IntroAttractiveTour" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroAttractiveTour']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
            <?php if ($_smarty_tpl->tpl_vars['package_id']->value != 1) {?>
			<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value != 'vn') {?>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Outstanding Travel Styles");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitleCatTour', ('TitleCatTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleCatTour']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitleCatTour']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroCatTour', ('IntroCatTour_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroCatTour']->value;?>
" id="IntroCatTour" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroCatTour']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			<?php }?>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Favorite destination");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitleFavoriteDestination', ('TitleFavoriteDestination_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleFavoriteDestination']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitleFavoriteDestination']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroFavoriteDestination', ('IntroFavoriteDestination_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroFavoriteDestination']->value;?>
" id="IntroFavoriteDestination" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroFavoriteDestination']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			<?php if ($_smarty_tpl->tpl_vars['_LANG_ID']->value == 'vn') {?>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Tour Inbound");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitleTourInbound', ('TitleTourInbound_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleTourInbound']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitleTourInbound']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroTourInbound', ('IntroTourInbound_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroTourInbound']->value;?>
" id="IntroTourInbound" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroTourInbound']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Tour Outbound");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitleTourOutbound', ('TitleTourOutbound_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleTourOutbound']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitleTourOutbound']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroTourOutbound', ('IntroTourOutbound_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroTourOutbound']->value;?>
" id="IntroTourOutbound" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroTourOutbound']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			<?php }?>
			<?php }?>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Testimonials Box");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitleTestimonialsHome', ('TitleTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleTestimonialsHome']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitleTestimonialsHome']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroTestimonialsHome', ('IntroTestimonialsHome_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroTestimonialsHome']->value;?>
" id="IntroTestimonialsHome" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroTestimonialsHome']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
            <fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Self-sufficient travel");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitleSufficient', ('TitleSufficient_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleSufficient']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitleSufficient']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroSufficient', ('IntroSufficient_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroSufficient']->value;?>
" id="IntroSufficient" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroSufficient']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Travel inspiration");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitleTravelInspiration', ('TitleTravelInspiration_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitleTravelInspiration']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitleTravelInspiration']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroTravelInspiration', ('IntroTravelInspiration_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroTravelInspiration']->value;?>
" id="IntroTravelInspiration" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroTravelInspiration']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Partner");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitlePartner', ('TitlePartner_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitlePartner']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitlePartner']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroPartner', ('IntroPartner_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroPartner']->value;?>
" id="IntroPartner" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroPartner']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Press news");?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</div>
					<?php $_smarty_tpl->_assignInScope('TitlePressNews', ('TitlePressNews_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<input type="text" class="text_32 full-width border_aaa" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['TitlePressNews']->value);?>
" name="iso-<?php echo $_smarty_tpl->tpl_vars['TitlePressNews']->value;?>
"/>
					</div>
				</div>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</div>
					<div class="fieldarea">
						<?php $_smarty_tpl->_assignInScope('IntroPressNews', ('IntroPressNews_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['IntroPressNews']->value;?>
" id="IntroPressNews" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['IntroPressNews']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			
			<fieldset class="submit-buttons">
				<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

				<input value="UpdateConfiguration" name="submit" type="hidden">
			</fieldset>
		</form>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $type = 'WhyUsHomePage';
	var $target_id = '0';
<?php echo '</script'; ?>
><?php }
}
