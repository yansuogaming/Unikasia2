<div class="page-tour_setting page_container">
	{$core->getBlock('header_title_tour_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
		{$core->getBlock('menu_tour_exhautive_setting')}
		<div class="content_setting_box">	
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2>{$core->get_Lang('Travel Style list')} </h2>
					<p>{$core->get_Lang('Chức năng quản lý danh sách các danh mục tour phục vụ cho việc phân loại tour du lịch trong hệ thống isoCMS')}</p>
				<p>{$core->get_Lang('This function is intended to manage Travel Styles in isoCMS system')}</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew btnCreateToursCategory" href="javascript:void(0);" title="{$core->get_Lang('Add new')}">{$core->get_Lang('Add new')}</a>
				</div>
			</div>
			<div class="clearfix"></div>			
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
						<div class="form-group form-keyword">
							<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}">
						</div>
{*						{if $SiteHasGroup_Tours}*}
{*							<div class="form-group">*}
{*								<select class="slb form-control" data-width="100%"  onchange="_reload()" name="tour_group_id">*}
{*								{$clsTourGroup->makeSelectboxOption($tour_group_id)}*}
{*								</select>*}
{*							</div>*}
{*						{/if}*}
						<div class="form-group form-button">
							<button type="submit" class="btn btn-main" id="findtBtn">{$core->get_Lang('Search')}</button>
							<input type="hidden" name="filter" value="filter">
						</div>
						<div class="form-group form-button">
							<a class="btn btn-delete-all " id="btn_delete" clstable="TourCategory" style="display: none;">
								Xóa
							</a>
						</div>
				</form>
				<div class="group_buttons fr">
					<a href="{$PCMS_URL}/index.php?mod=tour_exhautive" class="btn btn-warning btnNew">
						<i class="icon-list icon-white"></i> <span>{$core->get_Lang('listtours')}</span>
					</a>
				</div>
			</div>
			
			<div class="clearfix"></div>
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left">&nbsp;</td>
						<td width="50%" align="right">
							{$core->get_Lang('Record/page')}:
							<select name="recordperpage" onchange="window.location = this.options[this.selectedIndex].value">
								<option {if $recordPerPage eq '20'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=20">20</option>
								{if $totalRecord gt '20'}
								<option {if $recordPerPage eq '50'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=50">50</option>
								{if $totalRecord gt '50'}
								<option {if $recordPerPage eq '100'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=100">100</option>
								{if $totalRecord gt '100'}
								<option {if $recordPerPage eq '200'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage=200">200</option>
								{if $totalRecord gt '200'}
								<option {if $recordPerPage eq '{$totalRecord}'}selected="selected"{/if} value="{$PCMS_URL}/?mod={$mod}&act={$act}&recordperpage={$totalRecord}">{$core->get_Lang('All')}</option>
								{/if}
								{/if}
								{/if}
								{/if}
							</select>
						</td>
					</tr>
				</table>
			</div>
			<div class="hastable">
				<table cellspacing="0" class="table table-striped tbl-grid table_responsive" width="100%">
                   <thead>
						<tr>
							<th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
							<th class="gridheader hiden767" style="width:80px"><strong>ID</strong></th>
							<th class="gridheader name_responsive" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></th>
{*							{if $SiteHasGroup_Tours}*}
{*							<th class="gridheader text-left hiden_responsive" width="16%"><strong>{$core->get_Lang('tourgroup')}</strong></th>*}
{*							{/if}*}
							{if $clsConfiguration->getValue('SiteHasTourCat_slide')}<th class="gridheader hiden_responsive"></th>{/if}
							<th class="gridheader hiden_responsive"><strong>{$core->get_Lang('status')}</strong></th>
							<th class="gridheader text-left hiden_responsive" width="6%"><strong>{$core->get_Lang('update')}</strong></th>
							<th class="gridheader text-center hiden_responsive" width="74px"></th>
						</tr>
					</thead>
					{if $allItem[0].tourcat_id ne ''}
					<tbody id="SortAble">
						{section name=i loop=$allItem}
						<tr style="cursor:move" id="order_{$allItem[i].tourcat_id}" >
							<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="{$allItem[i].tourcat_id}" /></td>
							<td class="index hiden767" data-title="ID"><span>{$allItem[i].tourcat_id}</span></td>
							<td class="text-left name_service">
								<span  class="title">{$allItem[i].title}</span>
								{if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
								<button type="button" class="toggle-row inline_block767" style="display:none">
									<i class="fa fa-caret fa-caret-down"></i>
								</button>
							</td>
{*							{if $SiteHasGroup_Tours}*}
{*							<td class="block_responsive" data-title="{$core->get_Lang('tourgroup')}">*}
{*								<a href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}&tour_group_id={$allItem[i].tour_group_id}"><img src="{$URL_IMAGES}/v2/node-select-child.png" align="absmiddle" /> {$clsTourGroup->getTitle($allItem[i].tour_group_id)}</a>*}
{*							</td>*}
{*							{/if}*}
							{if $clsConfiguration->getValue('SiteHasTourCat_slide')}
							<td class="block_responsive">
								<a href="{$PCMS_URL}/index.php?mod=slide&mod_page={$mod}&act_page={$act}&target_id={$allItem[i].tourcat_id}&clsTable=TourCategory" title="{$core->get_Lang('listslide')}">
								<i class="fa fa-folder-open"></i>  {$core->get_Lang('listslide')} <strong style="color:#c00000;">({$clsISO->countTotalSlide($mod,$act,$allItem[i].tourcat_id)})</strong>
								</a>
							</td>
							{/if}
							<td style="text-align:center">
                                <a href="javascript:void(0);" class="SiteClickPublic" clsTable="TourCategory" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
                                    {if $clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable) eq '1'}
                                    <i class="fa fa-check-circle green"></i>
                                    {else}
                                    <i class="fa fa-minus-circle red"></i>
                                    {/if}
                                </a>
                            </td>
							<td class="block_responsive" style="text-align:center" data-title="{$core->get_Lang('update')}">
								{$clsClassTable->getOneField('upd_date',$allItem[i].tourcat_id)|date_format:"%m-%d-%Y %H:%M"}
							</td>
							<td class="block_responsive text-center" style="white-space:nowrap;" data-title="{$core->get_Lang('func')}">
								<div class="btn-group">
									<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu">
										{if $allItem[i].is_trash eq '1'}
										<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Restore&tourcat_id={$core->encryptID($allItem[i].tourcat_id)}{$pUrl}"><i class="icon-refresh"></i><span>{$core->get_Lang('restore')}</span></a></li>
										<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Delete&tourcat_id={$core->encryptID($allItem[i].tourcat_id)}{$pUrl}"><i class="icon-remove"></i><span>{$core->get_Lang('delete')}</span></a></li>
										{else}
										<li><a title="{$core->get_Lang('edit')}" class="btnEditToursCategory" href="javascript:void(0)" data="{$allItem[i].tourcat_id}"><i class="icon-edit"></i><span>{$core->get_Lang('edit')}</span></a></li>
										{if $allItem[i].tourcat_id ne 10 && $allItem[i].tourcat_id ne 20}<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act={$act}&action=Trash&tourcat_id={$core->encryptID($allItem[i].tourcat_id)}{$pUrl}"><i class="icon-trash"></i><span>{$core->get_Lang('trash')}</span></a></li>{/if}
										{/if}
									</ul>
								</div>
							</td>
						</tr>
						{/section}
					</tbody>
					
					{/if}
				</table>  
				<div class="clearfix"></div>
				<div class="statistical mb5">
					<table width="100%" border="0" cellpadding="3" cellspacing="0">
						<tr>
							<td width="50%" align="left">{$core->get_Lang('statistical')} <strong>{$totalRecord}</strong> {$core->get_Lang('records')}/<strong>{$totalPage}</strong> {$core->get_Lang('page')}. {$core->get_Lang('youareonpagenumber')} <strong>{$currentPage}</strong></td>
							{if $totalPage gt '1'}
							<td width="50%" align="right">
								{$core->get_Lang('gotopage')}:
								<select name="page" onchange="window.location = this.options[this.selectedIndex].value">
									{section name=i loop=$listPageNumber}
									<option {if $listPageNumber[i] eq $currentPage}selected="selected"{/if} value="{$PCMS_URL}/{$link_page_current}&page={$listPageNumber[i]}">{$listPageNumber[i]}</option>
									{/section}
								</select>

							</td>
							{/if}
						</tr>
					</table>
				</div>
			</div>
			{*<div class="wrap mt20">
				<form method="post" action="" enctype="multipart/form-data">
					<div class="page-title bold">{$core->get_Lang('OnPage description')}</div>
					<table class="form" cellpadding="3" cellspacing="3">
						{if $_DEV}
						<tr>
							<td class="fieldlabel" style="width:40px">{$core->get_Lang('link')}</td>
							<td class="fieldarea">
								{assign var=site_tours_link value=site_tours_link_|cat:$_LANG_ID}
								<input class="text full required" name="iso-{$site_tours_link}" value="{$clsConfiguration->getValue($site_tours_link)}" maxlength="255" type="text" />
							</td>
						</tr>
						{/if}
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td class="fieldarea" colspan="2">
								{assign var=site_tour_intro value=site_tour_intro_|cat:$_LANG_ID}
								<textarea id="textarea_intro_editor{$now}" class="textarea_intro_editor" name="iso-{$site_tour_intro}" style="width:100%">{$clsConfiguration->getValue($site_tour_intro)}</textarea>
							</td>
						</tr>
					</table>
					<div class="clearfix mt10"></div>
					<fieldset class="submit-buttons">
						{$saveBtn}
						<input value="UpdateConfiguration" name="submit" type="hidden">
					</fieldset>
				</form>
			</div>*}
		</div>
	</div>
</div>
<script type="text/javascript">
	var $SiteHasGroup_Tours = '{$clsConfiguration->getValue("SiteHasGroup_Tours")}';
	var $SiteHasSubCat_Tours = '{$clsConfiguration->getValue("SiteHasSubCat_Tours")}';
	var $tour_group_id = '{$tour_group_id}';
</script>
{literal}
<script type="text/javascript">
$(document).ready(function(){
	$(document).on('click', '.btnCreateToursCategory', function(ev){
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=SiteTourCategory',
			data : {'tour_group_id' : $tour_group_id, 'tp' : 'F'},
			dataType:'html',
			success:function(html){
				vietiso_loading(0);
				makepopupnotresize('55%', 'auto', html, 'box_TourCategory');
				$('#box_TourCategory').css('top','50px');
				var $editorID = $('.textarea_tour_intro_editor').attr('id');
				var $editorbannerID = $('.textarea_tour_intro_banner_editor').attr('id');
				$('#'+$editorID).isoTextAreaFix();
				$('#'+$editorbannerID).isoTextAreaFix();
			}
		});
		return false;
	});
	$(document).on('click', '.btnEditToursCategory', function(ev){
		var $_this = $(this);
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=SiteTourCategory',
			data : {'tourcat_id' : $_this.attr('data'), 'tp' : 'F'},
			dataType:'html',
			success:function(html){
				vietiso_loading(0);
				makepopupnotresize('55%', 'auto', html, 'box_TourCategory');
				$('#box_TourCategory').css('top','50px');
				var $editorID = $('.textarea_tour_intro_editor').attr('id');
				var $editorbannerID = $('.textarea_tour_intro_banner_editor').attr('id');
				$('#'+$editorID).isoTextAreaFix();
				$('#'+$editorbannerID).isoTextAreaFix();
			}
		});
		return false;
	});
	$(document).on('click', '.btnClickToSubmitCategory', function(ev){
		var $_this = $(this);
		var $_form = $_this.closest('.frmPop');
		var $title = $_form.find('input[name=title]');
		var $editorID = $('.textarea_tour_intro_editor').attr('id');
		var $editorbannerID = $('.textarea_tour_intro_banner_editor').attr('id');
		
		var $image = $('#isoman_url_image').val();
		var $image_banner = $('#isoman_url_image_banner').val();
		var $video_teaser = $('#isoman_url_video_teaser').val();
		var $background = $('input[name=iso-background]').val();
		var $link_banner = $('input[name=iso-link_banner]').val();
		
		if($title.val()==''){
			$title.addClass('error').focus();
			alertify.error(field_is_required);
			return false;
		}
		$tour_group_id = 0;
		if($SiteHasGroup_Tours){
			var $slb_TourGroup = $('#slb_TourGroup');
			if(parseInt($slb_TourGroup.val())==0){
				$slb_TourGroup.focus();
				setSelectOpen($slb_TourGroup);
				alertify.error(field_is_required);
				return false;
			}
			$tour_group_id = $slb_TourGroup.val();
		}
		var $parent_ID = 0;
		if($SiteHasSubCat_Tours){
			var $slb_TourCategory = $('#slb_TourCategory');
			$parent_ID = $('#slb_TourCategory').val();
		}
		
		var intro = tinyMCE.get($editorID).getContent();

		var _async = true;
		let frag = document.createElement('div');
		frag.innerHTML = intro;
		let itemsBase64 = [...frag.querySelectorAll('img')]
	  .filter(img => img.getAttribute('src').startsWith('data'))
	  .map(img => img.getAttribute('src'));
		console.log(itemsBase64);
		if(itemsBase64.length){
			_async = false;
			$.ajax({
				type: "POST",
				url: PCMS_URL + '/index.php?mod=ajax&act=convertBase64toImage',
				data: {
					intro : intro
				},
				async:false,
				dataType : 'json',
				success: function (res) {
					intro = res.intro;
				}
			});
		}
		console.log(intro);

		var adata = {
			'title' 		: 	$title.val(),
			'intro'	  		: 	intro,
			'link_banner'	  		: 	$link_banner,
			'background'	  		: 	$background,
			'image'	  		: 	$image,
			'image_banner'	: 	$image_banner,
			'video_teaser'	: 	$video_teaser,
			'parent_id'		: 	$parent_ID,
			'tour_group_id'	: 	$tour_group_id,
			'tourcat_id' 	: 	$_this.attr('tourcat_id'),
			'tp' 			: 	'S'
		};
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=SiteTourCategory',
			data:adata,
			dataType:'html',
			success:function(html){
				if(html.indexOf('_SUCCESS') >= 0){
					window.location.reload(true);
				}
				if(html.indexOf('_ERROR') >= 0){
					alertify.error(insert_error);
				}
				if(html.indexOf('_EXIST') >= 0){
					alertify.error(insert_error_exist);
				}
				vietiso_loading(0);
			}
		});
	});
});
</script>
{/literal}
<script type="text/javascript">
	var $recordPerPage = '{$recordPerPage}';
	var $currentPage = '{$currentPage}';
</script>
{literal}
<script type="text/javascript">
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
			$.post(path_ajax_script+"/index.php?mod=tour&act=ajUpdPosSortTourCategory", order, 
			
			function(html){
				vietiso_loading(0);
			});
		}
	});
</script>
{/literal}