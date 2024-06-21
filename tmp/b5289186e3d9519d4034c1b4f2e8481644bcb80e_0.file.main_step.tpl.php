<?php
/* Smarty version 3.1.38, created on 2024-04-24 07:15:47
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blog/main_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66284f33582490_89307684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5289186e3d9519d4034c1b4f2e8481644bcb80e' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blog/main_step.tpl',
      1 => 1709886069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66284f33582490_89307684 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						<?php if ($_smarty_tpl->tpl_vars['currentstep']->value == 'image') {?>
							<?php $_smarty_tpl->_assignInScope('image_detail', 'image_blog');?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_image');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'generalinformation') {?>
							<h3 class="title_box"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('generalinformation');?>
</h3>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('title_blog', 'title_blog');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['title_blog']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['title_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('title');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<input class="input_text_form input-title" data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="title" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" maxlength="255" type="text" onClick="loadHelp(this)" >
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['title_blog']->value));?>
</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,$_smarty_tpl->tpl_vars['mod']->value,'category','default')) {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
 <span class="required_red">*</span>
									<?php $_smarty_tpl->_assignInScope('category_blog', 'category_blog');?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['category_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<div class="fieldarea">
									<select class="glSlBox border_aaa required" name="iso-cat_id" style="width:250px" onClick="loadHelp(this)">
										<?php echo $_smarty_tpl->tpl_vars['clsBlogCategory']->value->makeSelectboxOption($_smarty_tpl->tpl_vars['oneItem']->value['cat_id']);?>

									</select>
									<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['category_blog']->value));?>
</div>
								</div>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'$mod','tag','customize')) {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tags');?>

									<?php $_smarty_tpl->_assignInScope('tag_blog', 'tag_blog');?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['tag_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Tags');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label>
								<input type="text" name="list_tag_id" id="tags-input" value="<?php echo $_smarty_tpl->tpl_vars['clsTag']->value->getTagsListText($_smarty_tpl->tpl_vars['classTable']->value,$_smarty_tpl->tpl_vars['pvalTable']->value);?>
" data-role="tagsinput" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add new tag');?>
" onClick="loadHelp(this)"/>
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['tag_blog']->value));?>
</div>
								
								
								<?php echo '<script'; ?>
 type="text/javascript">
									$('#tags-input').tagsinput({
										allowDuplicates: true,
										confirmKeys: [13, 188]
									});
									$('.bootstrap-tagsinput').click(function(e){
										loadHelp(this);
									});
									$('.bootstrap-tagsinput input[type=text]').keypress(function(e){
										var keyCode = e.which || e.keyCode;
										if (keyCode == '13') {
										  e.preventDefault();
										}
									});
								<?php echo '</script'; ?>
>
								<style>
									.bootstrap-tagsinput{width: 100%;padding: 0 6px;border: 1px solid #aaa!important}
									.bootstrap-tagsinput span{font-size: 14px}
									.fill_data_box .bootstrap-tagsinput input {border: 0}
								</style>
								
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasAuthor_Blogs')) {?>
                            <div class="inpt_tour">
                                <label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Author');?>

                                    <?php $_smarty_tpl->_assignInScope('author_blog', 'author_blog');?>
                                    <?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
                                    <button data-key="<?php echo $_smarty_tpl->tpl_vars['author_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Author');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
                                    <?php }?>
                                </label>
                                <input class="text_32 full-width border_aaa" name="iso-author" value="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getAuthor($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Author');?>
" onClick="loadHelp(this)" >
                                <div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['author_blog']->value));?>
</div>
                            </div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasPublishDate_Blogs')) {?>
                            <div class="inpt_tour">
                                <label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Publish date');?>

                                    <?php $_smarty_tpl->_assignInScope('publish_date_blog', 'publish_date_blog');?>
                                    <?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
                                    <button data-key="<?php echo $_smarty_tpl->tpl_vars['publish_date_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Publish date');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
                                    <?php }?>
                                </label></br>
                                <input value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatTimeMonth($_smarty_tpl->tpl_vars['oneItem']->value['publish_date']);?>
" class="ext full showdate " name="publish_date" type="text" autocomplete="off" style="width:220px" onClick="loadHelp(this),showDatepicker(this)"/>
                                <div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['publish_date_blog']->value));?>
</div>
                                
                                <?php echo '<script'; ?>
>
                                $(".showdate").datepicker({dateFormat: "dd/mm/yy"});
                                <?php echo '</script'; ?>
>
                                
                            </div>
							<?php }?>
							
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'shortText') {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>

									<?php $_smarty_tpl->_assignInScope('short_text_blog', 'short_text_blog');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['short_text_blog']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['short_text_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Short text');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label></br>
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-intro" class="textarea_intro_editor" data-column="iso-intro" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['intro'];?>
</textarea>
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['short_text_blog']->value));?>
</div>
								
								<?php echo '<script'; ?>
>
								$(".showdate").datepicker({dateFormat: "dd/mm/yy"});
								<?php echo '</script'; ?>
>
								
							</div>	
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'longText') {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>

									<?php $_smarty_tpl->_assignInScope('long_text_blog', 'long_text_blog');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['long_text_blog']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['long_text_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Long text');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label></br>
								<textarea style="width:100%" table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="iso-content" class="textarea_intro_editor" data-column="iso-content" id="textarea_intro_editor_overview_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" cols="255" rows="2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</textarea>
								<div class="text_help" hidden=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['long_text_blog']->value));?>
</div>
								
								<?php echo '<script'; ?>
>
								$(".showdate").datepicker({dateFormat: "dd/mm/yy"});
								<?php echo '</script'; ?>
>
								
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'destination') {?>
							<div class="inpt_tour">
								<label for="title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('infodestinationadmin');?>

									<?php $_smarty_tpl->_assignInScope('destination_blog', 'destination_blog');?>
									<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['destination_blog']->value);?>
									<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
									<button data-key="<?php echo $_smarty_tpl->tpl_vars['destination_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('infodestinationadmin');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									<?php }?>
								</label></br>
								<div class="fieldarea">
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'continent','default','default') && $_smarty_tpl->tpl_vars['core']->value->checkAccess('continent')) {?>
										<select class="slb form-control-new mr5" name="chauluc_id" style="width:160px" id="slb_Chauluc" onClick="loadHelp(this)">
											<?php echo $_smarty_tpl->tpl_vars['clsContinent']->value->makeSelectboxOption();?>

										</select>
									<?php }?>
									<select class="slb form-control-new mr5" name="country_id" id="slb_Country" style="width:160px !important;">
										<option value="0">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectcountry');?>
 --</option>
									</select>
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'region','default','default')) {?>
									<select class="slb form-control-new mr5" id="slb_RegionID" name="region_id" style="width:160px !important;">
										<option value="0">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectregion');?>
 --</option>
									</select>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->getCheckActiveModulePackage($_smarty_tpl->tpl_vars['package_id']->value,'city','default','default')) {?>
									<select class="slb form-control-new mr10" id="slb_CityID" name="city_id" style="width:160px !important;">
										<option value="0">-- <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('selectcity');?>
 --</option>
									</select>
									<?php }?>	
									<button class="btn-add ajQuickAddDestination" type="button"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('adddestination');?>
</button>	
									
									<?php echo '<script'; ?>
>loadCountry();<?php echo '</script'; ?>
>
									
								</div>
								<div class="clear"><br></div>
								<div class="row-span">
									<div style="padding-left:10px">
										<ul class="list-group" id="lstDestination" style="width:500px;"></ul>
										<div class="clearfix mt10"></div>
										<span class="notice" style="padding:0;color:#0565c9">(<span class="requiredMask">*</span> ) <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('infoless1destination');?>
</span>
									</div>
								</div>
								<?php echo '<script'; ?>
>
									loadListDestination(<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['blog_id'];?>
);
								<?php echo '</script'; ?>
>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'tourRelated') {?>
							<h3 class="title_box mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TourRelated');?>

							<?php $_smarty_tpl->_assignInScope('tour_related_blog', 'tour_related_blog');?>
							<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['tour_related_blog']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['tour_related_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TourRelated');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</h3>
							<div class="filterbox mt40">
								<div class="wrap">
									<div class="searchbox">
										<input id="searchkeyTour" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('searchTour');?>
" type="text" class="text" style="width:240px" onKeyPress="searchRelateTour(this,'Tour')" onChange="searchRelateTour(this,'Tour')" />
										<a class="btn btn-success btn-main" href="javascript:void();">
											<i class="icon-search icon-white"></i> <span></span>
										</a>
										<div class="autosugget" id="autosuggetTour">
											<ul class="HTML_suggetTour"></ul>
											<div class="clearfix"></div>
											<a class="close_Div"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('close');?>
</a>
										</div>
									</div>
								</div>
							</div>
							<div class="hastable" style="margin-bottom:10px">
								<table class="tbl-grid" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="gridheader"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
                                            <th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameoftrips');?>
</strong></th>
                                            <th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('duration');?>
</strong></th>
                                            <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCat_Tours')) {?>
                                            <th class="gridheader" style="text-align:left; width:12%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('travelstyles');?>
</strong></th>
                                            <?php }?>
                                            <th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('pricefrom');?>
</strong></th>
                                            <th class="gridheader" colspan="4" style="width:4%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</strong></th>
                                            <th class="gridheader" style="width:2%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</strong></th>
                                        </tr>
                                    </thead>
									<tbody id="tblTourExtension"></tbody>
									<?php echo '<script'; ?>
>
										loadTourExtension(<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['blog_id'];?>
);
									<?php echo '</script'; ?>
>
								</table>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'hotelRelated') {?>
							<h3 class="title_box mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('HotelRelated');?>

							<?php $_smarty_tpl->_assignInScope('hotel_related_blog', 'hotel_related_blog');?>
							<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['hotel_related_blog']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['hotel_related_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('HotelRelated');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</h3>
							<div class="filterbox mt40">
								<div class="wrap">
									<div class="searchbox">
										<input id="searchkeyHotel" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('searchHotel');?>
" type="text" class="text" style="width:240px"  onKeyPress="searchRelateTour(this,'Hotel')" onChange="searchRelateTour(this,'Hotel')"/>
										<a class="btn btn-success btn-main" href="javascript:void();">
											<i class="icon-search icon-white"></i> <span></span>
										</a>
										<div class="autosugget" id="autosuggetHotel">
											<ul class="HTML_suggetHotel"></ul>
											<div class="clearfix"></div>
											<a class="close_Div"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('close');?>
</a>
										</div>
									</div>
								</div>
							</div>
							<div class="hastable" style="margin-bottom:10px">
								<table class="tbl-grid" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="gridheader"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
                                            <th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameofhotel');?>
</strong></th>
                                            <th class="gridheader" colspan="4" style="width:4%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</strong></th>
                                            <th class="gridheader" style="width:2%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</strong></th>
                                        </tr>
                                    </thead>
									
									<tbody id="tblHotelExtension"></tbody>
									<?php echo '<script'; ?>
>
										loadHotelExtension(<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['blog_id'];?>
);
									<?php echo '</script'; ?>
>
								</table>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'cruiseRelated') {?>
							<h3 class="title_box mb0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('CruiseRelated');?>

							<?php $_smarty_tpl->_assignInScope('cruise_related_blog', 'cruise_related_blog');?>
							<?php $_smarty_tpl->_assignInScope('help_first', $_smarty_tpl->tpl_vars['cruise_related_blog']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['CHECKHELP']->value == 1) {?>
							<button data-key="<?php echo $_smarty_tpl->tpl_vars['cruise_related_blog']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('CruiseRelated');?>
" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							<?php }?>
							</h3>
							<div class="filterbox mt40">
								<div class="wrap">
									<div class="searchbox">
										<input id="searchkeyCruise" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('searchCruise');?>
" type="text" class="text" style="width:240px" onKeyPress="searchRelateTour(this,'Cruise')" onChange="searchRelateTour(this,'Cruise')" />
										<a class="btn btn-success btn-main" href="javascript:void();">
											<i class="icon-search icon-white"></i> <span></span>
										</a>
										<div class="autosugget" id="autosuggetCruise">
											<ul class="HTML_suggetCruise"></ul>
											<div class="clearfix"></div>
											<a class="close_Div"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('close');?>
</a>
										</div>
									</div>
								</div>
							</div>
							<div class="hastable" style="margin-bottom:10px">
								<table class="tbl-grid" cellspacing="0">
									<thead>
                                        <tr>
                                            <th class="gridheader"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('index');?>
</strong></th>
                                            <th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nameofcruises');?>
</strong></th>
                                            <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasCruisesCategory')) {?>
                                            <th class="gridheader" style="text-align:left; width:12%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('cruisescategory');?>
</strong></th>
                                            <?php }?>
                                            <th class="gridheader" colspan="4" style="width:4%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</strong></th>
                                            <th class="gridheader" style="width:2%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</strong></th>
                                        </tr>
                                    </thead>
									<tbody id="tblCruiseExtension"></tbody>
									<?php echo '<script'; ?>
>
									loadCruiseExtension(<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['blog_id'];?>
);
									<?php echo '</script'; ?>
>
								</table>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['currentstep']->value == 'seo') {?>
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('box_detail_blog_seotool');?>
				
						<?php }?>
						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['key'];?>
" data-prevstep="<?php echo $_smarty_tpl->tpl_vars['prevstep']->value;?>
" class="back_step js_save_back"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Back');?>
</a>

							<a data-table_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" data-panel="<?php echo $_smarty_tpl->tpl_vars['arrStep']->value[$_smarty_tpl->tpl_vars['step']->value]['panel'];?>
" data-currentstep="<?php echo $_smarty_tpl->tpl_vars['currentstep']->value;?>
" data-next_step="<?php echo $_smarty_tpl->tpl_vars['nextstep']->value;?>
" class="js_save_continue"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save &amp; Continue');?>
</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col_instruction">
				<div class="instruction_fill_data_box">
					<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Instructions');?>
</p>
					<div class="content_box"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue($_smarty_tpl->tpl_vars['help_first']->value));?>
</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php echo '<script'; ?>
>
	var blog_id = $blog_id = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['blog_id'];?>
';
	var list_check_target = <?php echo $_smarty_tpl->tpl_vars['list_check_target']->value;?>
;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
if($('.textarea_intro_editor').length > 0){
	$('.textarea_intro_editor').each(function(){
		var $_this = $(this);
		var $editorID = $_this.attr('id');
		$('#'+$editorID).isoTextArea();
	});
}
	$('.toggle-row').click(function(){
		$(this).closest('tr').toggleClass('open_tr');
	});
	$.each( list_check_target, function( i, val ) {
		if(val.status == 1){
			$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_success");
		}else{
			$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_caution");
		}
	});
<?php echo '</script'; ?>
>
<?php }
}
