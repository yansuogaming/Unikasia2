<?php
/* Smarty version 3.1.38, created on 2024-04-12 10:12:00
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_country_banner_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6618a680a96a98_47254851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95bdd0880f8092f9e7631c63b174707c0909334f' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/box_detail_country_banner_video.tpl',
      1 => 1702432805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6618a680a96a98_47254851 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box_title_trip_code">
	<div class="full-height">
        <div class="form-group inpt_tour">
            <label class="col-form-label" for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner');?>
 <span class="required_red">*</span>
                <?php $_smarty_tpl->_assignInScope('banner_Country', 'banner_Country');?>
                <?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['banner_Country']->value);?>
                <?php if (CHECKHELP == 1) {?>
                <button data-key="<?php echo $_smarty_tpl->tpl_vars['banner_Country']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Banner');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
                <?php }?>
            </label>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="drop_gallery" onClick="loadHelp(this)">
                        <div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_banner" data-options='{"openFrom":"banner","clsTable":"Country", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toId":"isoman_show_banner" }' ondragover="return false">
                            <h3><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Drop files to upload');?>
</h3>
                             <p>Kích thước (WxH=1920x400)<br />
                            Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
                            <button type="button" class="btn btn-upload"><?php if ($_smarty_tpl->tpl_vars['oneItem']->value['banner']) {?>Thay ảnh<?php } else { ?>Tải ảnh lên<?php }?></button>
                        </div>
                        <input class="hidden" id="selectFile" type="file" data-options='{"openFrom":"banner","clsTable":"Country", "table_id":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"banner","toId":"isoman_show_banner","aspectRatio":"(1920/600)"}' name="banner">

                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['banner'];?>
" name="banner" id="banner" />
                        <a table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" isoman_multiple="0" isoman_callback='isoman_callback({"openFrom":"banner", "clsTable":"Country", "pvalTable":"<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
","toField":"banner","toId":"isoman_show_banner"})' class="btn-upload-2 ajOpenDialog" isoman_for_id="banner" isoman_name="banner"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('From library'));?>
</a>
                        <div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['banner_Country']->value));?>
</div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img class="img-responsive radius-3" id="isoman_show_banner" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['banner'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/none_image.png'" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('banner');?>
" style="width:100%; height:auto"  />
                </div>
            </div>
        </div>
        <hr class="clearfix" />
        <div class="form-group">
            <label class="col-form-label bold" for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Video Teaser');?>
 <span class="required_red">*</span>
            <?php $_smarty_tpl->_assignInScope('Video_Teaser_Country', 'Video_Teaser_Country');?>
                    <?php if (CHECKHELP == 1) {?>
                    <button data-key="<?php echo $_smarty_tpl->tpl_vars['Video_Teaser_Country']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Video Teaser');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
                    <?php }?>
            </label>
            <div class="fieldarea" onClick="loadHelp(this)">
                <input type="hidden" id="isoman_hidden_video" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['video_teaser'];?>
">
                <input type="text" id="isoman_url_video" name="iso-video_teaser" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['video_teaser'];?>
" class="text_32 border_aaa" style="width:calc(100% - 45px) !important; display:inline-block !important; float:left"><a style="float:left; margin-left:4px; margin-top:-4px;" href="#" class="ajOpenDialog" isoman_for_id="video" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['video_teaser'];?>
" isoman_name="video"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/general/folder-32.png" border="0" title="Open" alt="Open"></a>
                <div class="clearfix"></div>
                <span style="display:block; margin-top:5px; font-size:12px">
                (<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('ex: file.mp4, file.ogg, file.m4v..., frame width:&gt;=1600px, frame height:&lt;=500px');?>
)
                </span>
                <div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['Video_Teaser_Country']->value));?>
</div>
            </div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var clsTable = 'Country';
	var table_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
<?php echo '</script'; ?>
><?php }
}
