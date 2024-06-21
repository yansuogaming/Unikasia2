<?php
/* Smarty version 3.1.38, created on 2024-04-11 07:41:22
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/page/about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_661731b2eb5707_71355995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd74131e02474815df604ccea1a0eb21d047b211e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/page/about.tpl',
      1 => 1710915040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661731b2eb5707_71355995 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="page_container">
	<div class="page-title  d-flex">
        <div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About Us Config');?>
 <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('About Us Config');?>
 trong hệ thống isoCMS">i</div></h2>
			<p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Enter full fields in the required fields');?>
</p>		
		</div>
    </div>
	<div class="container-fluid">
		<div class="clearfix"></div>
		<form id="forums" method="post" class="filterForm" action="">
						<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner');?>
</legend>
				
				<div class="row-span">
					<label for="title" class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('image');?>
</label>
					<div class="row">
						<?php $_smarty_tpl->_assignInScope('site_mod_banner', 'site_about_page_banner');?>
						<div class="col-xs-12 col-md-4">
							<div class="drop_gallery">
								<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_image" data-options='{"openFrom":"image","clsTable":"Configuration", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"site_about_page_banner","toId":"isoman_show_image" }' ondragover="return false">
									<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
									<p>Kích thước (WxH:1280x600)</br>Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
									<button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_banner']->value)) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change Image');
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Upload Image');
}?></button>
								</div>
								<input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"image","clsTable":"Configuration", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"site_about_page_banner","toId":"isoman_show_image"}' name="image">

								<input style="display:none" type="file" multiple name="image" id="ajAttachFile" />
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_banner']->value);?>
" name="isoman_url_site_about_page_banner" id="image" />
								<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"image", "clsTable":"Configuration", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"image","toField":"site_about_page_banner","toId":"isoman_show_image"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
							</div>
							
						</div>
						<div class="col-xs-12 col-md-8">
							<img alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" class="aspect-ratio__content radius-3" id="isoman_show_image" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['site_mod_banner']->value);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" style="width:100%; height:250px;object-fit: contain" />
						</div>
					</div>
				</div>
				<div class="row-span">
					<div class="inpt_tour">
						<label for="title" class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Link Youtube');?>
</label>
						<?php $_smarty_tpl->_assignInScope('Link_Youtube_About_Us', ('Link_Youtube_About_Us_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<input type="text" name="iso-<?php echo $_smarty_tpl->tpl_vars['Link_Youtube_About_Us']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Link_Youtube_About_Us']->value);?>
" class="text full" />
					</div>
				</div>
				<div class="row-span">
					<div class="inpt_tour">
						<label for="title" class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Intro banner');?>
</label>
						<?php $_smarty_tpl->_assignInScope('SiteIntroBannerAbout', ('SiteIntroBannerAbout_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['SiteIntroBannerAbout']->value;?>
" id="SiteIntroBannerAbout" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['SiteIntroBannerAbout']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset style="display: none">
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Logo');?>
</legend>
				<div class="row-span">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
</div>
					<div class="fieldarea">
						<div class="photobox span30">
							<img src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('site_about_page_logo');?>
" id="isoman_show_site_about_page_logo" class="span100" height="156px"/>
							<input type="hidden" id="isoman_hidden_site_about_page_logo" name="isoman_url_site_about_page_logo" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('site_about_page_logo');?>
" />
							<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_about_page_logo" isoman_val="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('site_about_page_logo');?>
" isoman_name="site_about_page_logo" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
"><i class="iso-edit"></i></a>
						</div>
					</div>
				</div>
			</fieldset>
            <?php if (1 == 2) {?>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Our Mission');?>
</legend>
				<div class="row-span">
					<div class="inpt_tour">
						<label for="title" class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</label>
						<?php $_smarty_tpl->_assignInScope('Site_Title_Our_Mission', ('Site_Title_Our_Mission_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<input type="text" name="iso-<?php echo $_smarty_tpl->tpl_vars['Site_Title_Our_Mission']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Site_Title_Our_Mission']->value);?>
" class="text full" />
					</div>
				</div>
				<div class="row-span">
					<div class="inpt_tour">
						<label for="title" class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</label>
						<?php $_smarty_tpl->_assignInScope('Site_Intro_Our_Mission', ('Site_Intro_Our_Mission_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['Site_Intro_Our_Mission']->value;?>
" id="Site_Intro_Our_Mission" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Site_Intro_Our_Mission']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Our Vission');?>
</legend>
				<div class="row-span">
					<div class="inpt_tour">
						<label for="title" class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</label>
						<?php $_smarty_tpl->_assignInScope('Site_Title_Our_Vission', ('Site_Title_Our_Vission_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<input type="text" name="iso-<?php echo $_smarty_tpl->tpl_vars['Site_Title_Our_Vission']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Site_Title_Our_Vission']->value);?>
" class="text full" />
					</div>
				</div>
				<div class="row-span">
					<div class="inpt_tour">
						<label for="title" class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</label>
						<?php $_smarty_tpl->_assignInScope('Site_Intro_Our_Vission', ('Site_Intro_Our_Vission_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
						<textarea style="width:100%" class="textarea_intro_editor_simple" name="iso-<?php echo $_smarty_tpl->tpl_vars['Site_Intro_Our_Vission']->value;?>
" id="Site_Intro_Our_Vission" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Site_Intro_Our_Vission']->value);?>
</textarea>
					</div>
				</div>
			</fieldset>
            <?php }?>
			<fieldset  id="REASON">
				<legend> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Content Tab');?>
</legend>
				<fieldset style="border: none; margin: 0; padding:0; background:none !important">
					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listReasons']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<div style="border:1px dashed #F90; padding:10px; background:#FFC; margin-bottom:10px;" id="box_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
">
						<div style="background:#DDD; padding:6px;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tab');?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</div>
						<dl>
							<dt><label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</label></dt>
							<dd>
								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" name="title_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" class="full text required">
							</dd>
						</dl>
                        <?php if (1 == 2) {?>
						<dl>
							<dt><label for="image"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
(WxH:334x220)</label></dt>
							<dd>
								<img id="isoman_show_image_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" style="display:block; width:26px; height:26px; float:left;"  />
								<input type="hidden" id="isoman_hidden_image_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
">
								<input style="width:70% !important;float:left;margin-left:4px;" type="text" id="isoman_url_image_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" class="text full" name="image_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
">
								<a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="image_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" isoman_val="<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" isoman_name="image_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
							</dd>
						</dl>
						<dl>
							<dt><label for="image_icon"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image Icon');?>
 (Max-width=Max-height:35px)</label></dt>
							<dd>
								<img id="isoman_show_image_icon_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icon'];?>
" style="display:block; width:26px; height:26px; float:left;"  />
								<input type="hidden" id="isoman_hidden_image_icon_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icon'];?>
">
								<input style="width:70% !important;float:left;margin-left:4px;" type="text" id="isoman_url_image_icon_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" class="text full" name="image_icon_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icon'];?>
">
								<a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="image_icon_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" isoman_val="<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icon'];?>
" isoman_name="image_icon_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
							</dd>
						</dl>
                        <?php }?>
						<dl>
							<dt><label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</label></dt>
							<dd>
								<textarea class="textarea_intro_editor_simple" id="textarea_intro_editor_simple_r_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" cols="255" rows="3" name="intro_<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['intro'];?>
</textarea>
							</dd>
						</dl>
						<div class="wrap mt5">
							<a class="color_r font11px confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=delete&post_type=REASON&year_journey_id=<?php echo $_smarty_tpl->tpl_vars['listReasons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
"><img align="absmiddle" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/v2/icon_delete.gif" /> Xóa box liên kết này</a>
						</div>
					</div>
					<?php
}
}
?>
					<div class="clearfix"></div>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&post_type=REASON&action=new" class="btn btn-danger"><i class="icon-white icon-plus-sign"></i> Thêm mới một liên kết</a>
				</fieldset>
			</fieldset>
			<fieldset id="YEARJOURNEY">
				<legend> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Block Year Journey');?>
</legend>
				<fieldset style="border: none; margin: 0; padding:0; background:none !important">
					<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listYearJourney']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<div style="border:1px dashed #F90; padding:10px; background:#FFC; margin-bottom:10px;"  id="box_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
">
						<div style="background:#DDD; padding:6px;"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Box');?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</div>
						<dl>
							<dt><label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Year');?>
</label></dt>
							<dd>
								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['business_year'];?>
" name="business_year_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" class="full text required">
							</dd>
						</dl>
						<dl>
							<dt><label for="image"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image Icon');?>
(Max-width=Max-height:75px)</label></dt>
							<dd>
								<img id="isoman_show_image_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" style="display:block; width:26px; height:26px; float:left;"  />
								<input type="hidden" id="isoman_hidden_image_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
">
								<input style="width:70% !important;float:left;margin-left:4px;" type="text" id="isoman_url_image_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" class="text full" name="image_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
">
								<a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="image_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" isoman_val="<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" isoman_name="image_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
							</dd>
						</dl>

						<dl>
							<dt><label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
</label></dt>
							<dd>
								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
" name="title_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
" class="full text required">
							</dd>
						</dl>

						<dl>
							<dt><label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short description');?>
</label></dt>
							<dd>
								<textarea class="textarea_intro_editor_simple" id="textarea_intro_editor_simple_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" cols="255" rows="3" name="intro_<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['intro'];?>
</textarea>
							</dd>
						</dl>
						<div class="wrap mt5">
							<a class="color_r font11px confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&action=delete&post_type=YEARJOURNEY&year_journey_id=<?php echo $_smarty_tpl->tpl_vars['listYearJourney']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_journey_id'];?>
"><img align="absmiddle" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/v2/icon_delete.gif" /> Xóa box liên kết này</a>
						</div>
					</div>
					<?php
}
}
?>
					<div class="clearfix"></div>
					<?php if (count($_smarty_tpl->tpl_vars['listYearJourney']->value) < 9) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
&post_type=YEARJOURNEY&action=new" class="btn btn-danger"><i class="icon-white icon-plus-sign"></i> Thêm mới một liên kết</a>
					<?php }?>
				</fieldset>
			</fieldset>
            <?php if (1 == 2) {?>
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('WE BRING YOU THE BEST SERVICE!');?>
</legend>
				<div class="row-span">
<!--				================-->
					<label for="title" class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Background Image');?>
</label>
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="drop_gallery">
								<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile_banner" toel="isoman_show_banner" data-options='{"openFrom":"image","clsTable":"Configuration", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"site_about_page_bg_download","toId":"isoman_show_banner" }' ondragover="return false">
									<h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
									<p>Kích thước (WxH=750x500)<br />
									Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
									<button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('site_about_page_bg_download')) {?>Thay ảnh<?php } else { ?>Tải ảnh lên<?php }?></button>
								</div>
								<input class="hidden" id="selectFile_banner" type="file" data-options='{"openFrom":"image","clsTable":"Configuration", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"site_about_page_bg_download","toId":"isoman_show_banner"}' name="isoman_url_site_about_page_bg_download">

								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('site_about_page_bg_download');?>
"  name="isoman_url_site_about_page_bg_download" id="banner" />
								
								<a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"image", "clsTable":"Configuration", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"site_about_page_bg_download","toId":"isoman_show_banner"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="banner" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-8">
							<img alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" class="aspect-ratio__content radius-3" id="isoman_show_banner" src="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('site_about_page_bg_download');?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" style="width:100%; height:250px;object-fit: contain" />
						</div>
						
					</div>
<!--				================-->
				</div>
				<div class="row-span" style="display: none">
					<div class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('File');?>
</div>
					<?php $_smarty_tpl->_assignInScope('about_page_file_download', ('about_page_file_download_').($_smarty_tpl->tpl_vars['_LANG_ID']->value));?>
					<div class="fieldarea">
						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_pdf.png" style="display:block; width:26px; height:26px; float:left;"  />
						<input type="hidden" id="isoman_hidden_<?php echo $_smarty_tpl->tpl_vars['about_page_file_download']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['about_page_file_download']->value);?>
">
						<input style="width:70% !important;float:left;margin-left:4px;" type="text" id="isoman_url_<?php echo $_smarty_tpl->tpl_vars['about_page_file_download']->value;?>
" class="text full" name="isoman_url_<?php echo $_smarty_tpl->tpl_vars['about_page_file_download']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['about_page_file_download']->value);?>
">
						<a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="<?php echo $_smarty_tpl->tpl_vars['about_page_file_download']->value;?>
" isoman_val="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['about_page_file_download']->value);?>
" isoman_name="<?php echo $_smarty_tpl->tpl_vars['about_page_file_download']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
					</div>
				</div>
			</fieldset>
            <?php }?>
			<fieldset class="submit-buttons" style="position: fixed;left: 0;right: 0; bottom: 10px;z-index: 2">
				<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>

				<input value="Update" name="submit" type="hidden">
			</fieldset>
		</form>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $type = 'WhyUsHomePage';
	var $target_id = '0';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/jquery.cropper.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/cropper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/cropper/cropper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" media="all" />

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		if($('.textarea_intro_editor_simple').length > 0){
			$('.textarea_intro_editor_simple').each(function(){
				var $_this = $(this);
				var $editorID = $_this.attr('id');
				$('#'+$editorID).isoTextAreaFix();
			});
		}
	});
<?php echo '</script'; ?>
>
<?php }
}
