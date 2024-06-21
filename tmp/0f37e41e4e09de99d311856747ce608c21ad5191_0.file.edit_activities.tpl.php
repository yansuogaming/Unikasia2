<?php
/* Smarty version 3.1.38, created on 2024-04-11 09:30:03
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/property/edit_activities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66174b2bac5ed8_98007460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f37e41e4e09de99d311856747ce608c21ad5191' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/property/edit_activities.tpl',
      1 => 1710815058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66174b2bac5ed8_98007460 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-tour_setting page_container">
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('header_title_tour_setting');?>

	<div class="container-fluid container-fluid-2 d-flex">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('menu_tour_exhautive_setting');?>

		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2><?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
: <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New Activities');
}?></h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please enter all required fields');?>
</p>
				</div>
			</div>
			<div class="wrap">
				 <form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
                    <div id="tab_content">
                        <div class="tabbox" style="display:block">
                            <div class="fl col_Left full_width_767">
                                <div class="photobox image">
                                    <?php if ($_smarty_tpl->tpl_vars['_isoman_use']->value == '1') {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImage($_smarty_tpl->tpl_vars['pvalTable']->value,300,200);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('images');?>
" id="isoman_show_image" />
                                    <input type="hidden" id="isoman_hidden_image" name="isoman_url_image" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" />
                                    <a href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" class="photobox_edit ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" isoman_name="image"><i class="iso-edit"></i></a>
                                    <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image']) {?>
                                    <a pvalTable="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" clsTable="Activities" href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="photobox_edit deleteItemImage" data-name_input="isoman_url_image" g="imgItem">X</a>
                                    <?php }?>
                                    <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('noimages');?>
" id="imgTour_image" />
                                    <input type="hidden" name="image_src" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" class="hidden_src" id="imgTour_hidden" />
                                    <a href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('change');?>
" class="photobox_edit editInlineImage" g="imgTour">
                                        <i class="iso-edit"></i>
                                    </a> 
                                    <input type="file" style="display:none" id="imgTour_file" g="imgTour" class="editInlineImageFile" name="image" />
                                    <?php }?>
                                </div>
                                <div class="cleafix"></div>
                                <h3 class="mt10 text-left small"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image Size');?>
 (WxH=300x200)</h3>
                            </div>
                            <div class="fl col_Right full_width_767">
                                <div class="span100">
                                    <div class="row-span">
                                         <div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</strong> <span class="requiredMask">*</span> </strong></div>
                                         <div class="fieldarea">
                                            <input class="text_32 full-width border_aaa bold required fontLarge title_capitalize" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text">
                                         </div>
                                    </div>
                                </div>
                                <div class="row-span">
                                    <div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></div>
                                    <div class="fieldarea">
                                        <div class="vietiso_status_button"></div>
                                        <?php echo '<script'; ?>
 type="text/javascript">
                                            var is_online = '<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value);?>
';
                                        <?php echo '</script'; ?>
>
                                        
                                        <?php echo '<script'; ?>
 type="text/javascript">
                                            $(document).ready(function(){
                                                $('.vietiso_status_button').isoswitchvalue({
                                                    _value:is_online,
                                                    _selector:'iso-is_online'
                                                });
                                            });
                                        <?php echo '</script'; ?>
>
                                        
                                        <span class="notice" id="prv_status" <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 1) {?>style="display:none;"<?php }?>>PRIVATE: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This article can only be seen via the link in the admin page');?>
.</span>
                                        <span class="notice" id="pub_status" <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 0) {?>style="display:none;"<?php }?>>PUBLIC: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This article is available online show normal status');?>
.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mt30">
                                <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getBrowser() == 'computer') {?>
                                <div id="v-nav">
                                    <ul>
                                        <li class="tabchildcol first current"><a href="javascript:void(0);"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
</strong></a> <span class="color_r">*</span></li>
                                        <li class="tabchildcol"><a href="javascript:void(0);"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>
</strong></a> <span class="color_r">*</span></li>
                                    </ul>
                                    <div class="tab-content" style="display: block;">
                                        <div class="format-setting-wrap">
                                             <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('intro');?>

                                        </div>
                                    </div>
                                    <div class="tab-content" style="display: none;">
                                        <div class="format-setting-wrap">
                                             <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('content');?>

                                        </div>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div id="v-nav">
                                    <div class="row-span">
                                        <div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
</strong></div>
                                        <div class="fieldarea">
                                             <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('intro');?>

                                        </div>
                                    </div>
                                    <div class="row-span">
                                        <div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>
</strong></div>
                                        <div class="fieldarea">
                                             <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('content');?>

                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br class="clearfix" />
                    <fieldset class="submit-buttons">
                        <?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['saveList']->value;?>

                        <input value="Update" name="submit" type="hidden" />
                    </fieldset>
                </form>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var $recordPerPage = '<?php echo $_smarty_tpl->tpl_vars['recordPerPage']->value;?>
';
	var $currentPage = '<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$("#SortAble").sortable({
		opacity: 0.8,
		cursor: 'move',
		start: function(){
			vietiso_loading(1);
		},
		stop: function(){
			vietiso_loading(0);
		},
		update: function(){
			var recordPerPage = $recordPerPage;
			var currentPage = $currentPage;
			var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage;
			$.post(path_ajax_script+"/index.php?mod=property&act=ajUpdPosSortActivities", order, 
			
			function(html){
				vietiso_loading(0);
				location.href=REQUEST_URI;
			});
		}
	});
<?php echo '</script'; ?>
>


<?php if (1 == 2) {?>

<div class="breadcrumb">
	<strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youarehere');?>
 : </strong>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('home');?>
</a>
    <a>&raquo;</a>
	<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</a>
	<a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Activities');?>
"> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Activities');?>
</a>
	<a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
"> <?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
 #<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');
}?></a>
    <!-- Back-->
    <a href="javascript:window.history.back();" class="back fr"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('back');?>
</a>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="page-title">
        <h2><?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
: <?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);
} else {
echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add New Activities');
}?></h2>
        <p><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Please enter all required fields');?>
</p>
    </div>
    <div class="clearfix"><br /></div>
    <div id="clienttabs">
        <ul>
            <li class="tabchild"><a href="#"><i class="iso-bassic"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('generalinformation');?>
</a></li>
        </ul>
    </div>
    <form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
    	<div id="tab_content">
            <div class="tabbox" style="display:block">
            	<div class="fl col_Left full_width_767">
                    <div class="photobox image">
                        <?php if ($_smarty_tpl->tpl_vars['_isoman_use']->value == '1') {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getImage($_smarty_tpl->tpl_vars['pvalTable']->value,300,200);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('images');?>
" id="isoman_show_image" />
                        <input type="hidden" id="isoman_hidden_image" name="isoman_url_image" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" />
                        <a href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" class="photobox_edit ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" isoman_name="image"><i class="iso-edit"></i></a>
                        <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['image']) {?>
                        <a pvalTable="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" clsTable="Activities" href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="photobox_edit deleteItemImage" data-name_input="isoman_url_image" g="imgItem">X</a>
                        <?php }?>
                        <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('noimages');?>
" id="imgTour_image" />
                        <input type="hidden" name="image_src" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" class="hidden_src" id="imgTour_hidden" />
                        <a href="javascript:void()" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('change');?>
" class="photobox_edit editInlineImage" g="imgTour">
                            <i class="iso-edit"></i>
                        </a> 
                        <input type="file" style="display:none" id="imgTour_file" g="imgTour" class="editInlineImageFile" name="image" />
                        <?php }?>
                    </div>
					<div class="cleafix"></div>
					<h3 class="mt10 text-left small"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image Size');?>
 (WxH=300x200)</h3>
                </div>
                <div class="fl col_Right full_width_767">
                    <div class="span100">
                        <div class="row-span">
							 <div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</strong> <span class="requiredMask">*</span> </strong></div>
							 <div class="fieldarea">
							 	<input class="text_32 full-width border_aaa bold required fontLarge title_capitalize" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text">
							 </div>
                        </div>
                    </div>
					<div class="row-span">
                        <div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></div>
                        <div class="fieldarea">
                        	<div class="vietiso_status_button"></div>
							<?php echo '<script'; ?>
 type="text/javascript">
								var is_online = '<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value);?>
';
							<?php echo '</script'; ?>
>
							
							<?php echo '<script'; ?>
 type="text/javascript">
								$(document).ready(function(){
									$('.vietiso_status_button').isoswitchvalue({
										_value:is_online,
										_selector:'iso-is_online'
									});
								});
							<?php echo '</script'; ?>
>
							
							<span class="notice" id="prv_status" <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 1) {?>style="display:none;"<?php }?>>PRIVATE: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This article can only be seen via the link in the admin page');?>
.</span>
							<span class="notice" id="pub_status" <?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField("is_online",$_smarty_tpl->tpl_vars['pvalTable']->value) == 0) {?>style="display:none;"<?php }?>>PUBLIC: <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This article is available online show normal status');?>
.</span>
                        </div>
                    </div>
                </div>
                <div class="wrap mt30">
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getBrowser() == 'computer') {?>
					<div id="v-nav">
						<ul>
							<li class="tabchildcol first current"><a href="javascript:void(0);"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
</strong></a> <span class="color_r">*</span></li>
							<li class="tabchildcol"><a href="javascript:void(0);"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>
</strong></a> <span class="color_r">*</span></li>
						</ul>
						<div class="tab-content" style="display: block;">
							<div class="format-setting-wrap">
								 <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('intro');?>

							</div>
						</div>
						<div class="tab-content" style="display: none;">
							<div class="format-setting-wrap">
								 <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('content');?>

							</div>
						</div>
					</div>
					<?php } else { ?>
					<div id="v-nav">
						<div class="row-span">
							<div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
</strong></div>
							<div class="fieldarea">
								 <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('intro');?>

							</div>
						</div>
						<div class="row-span">
							<div class="fieldlabel"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>
</strong></div>
							<div class="fieldarea">
								 <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('content');?>

							</div>
						</div>
					</div>
					<?php }?>
            	</div>
			</div>
            <div class="clearfix"></div>
    	</div>
        <br class="clearfix" />
        <fieldset class="submit-buttons">
            <?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['saveList']->value;?>

            <input value="Update" name="submit" type="hidden" />
        </fieldset>
	</form>
</div>
<?php }
}
}
