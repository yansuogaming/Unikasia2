<div class="page_container">
	<div class="page-title d-flex">
        <div class="title">
			<h2>{$core->get_Lang('Blog')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các blog trong hệ thống isoCMS">i</div>
			</h2>
			<p>{$number_all} {$core->get_Lang('blog')}</p>
		</div>
		<div class="button_right">
			<a class="btn btn-main btn-addnew add_new_blog" title="{$core->get_Lang('Add blog')}">{$core->get_Lang('Add blog')}</a>
			{if $_user_group_id ne '5'}
				<div class="btn btn-setting"><a href="{$PCMS_URL}/?mod={$mod}&act=setting" title="{$core->get_Lang('Setting')}"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
			{/if}			
		</div>
    </div>
	<div class="container-fluid">
		<div class="wrap">
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="">
					{assign var=blog_category_check value=$clsISO->getCheckActiveModulePackage($package_id,$mod,'category','default')}
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
					</div>
					
					<div class="form-group form-country">
						<select name="blogcat_id" class="form-control" data-width="100%" id="slb_country">
							 {$clsBlogCategory->makeSelectboxOption($blogcat_id)}
						</select>
					</div>
					
						<div class="form-group form-countries">
						<select name="blogcountry_id" class="form-control" data-width="100%" id="slb_countries">
							 {$clsCountryEx->makeSelectboxOption($blogcountry_id)}
						</select>
					</div>
					
					
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
					<div class="form-group form-button">
						<a class="btn btn-delete-all" id="btn_delete" clsTable="Blog" style="display:none">
							{$core->get_Lang('Delete')}
						</a>
					</div>
					<div class="fr group_buttons">
						{if $blog_category_check && $_user_group_id ne 5}
						<a href="{$PCMS_URL}/?mod={$mod}&act=category" class="btn btn-green btnCat btnNew" title="{$core->get_Lang('Category')}"><i class="icon-list icon-white"></i> <span>{$core->get_Lang('Category')}</span> </a>
						{/if}
                        <a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-warning btnNew"><i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span> </a>
                        <a href="{$PCMS_URL}/?mod={$mod}&type_list=Trash" class="btn btn-danger btnNew"> <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span> </a>
                        
                    </div>
				</form>	
			</div>
			<div class="clearfix"></div>
			<input id="list_selected_chkitem" style="display:none" value="0" />
			<div class="statistical mb5">
				<table width="100%" border="0" cellpadding="3" cellspacing="0">
					<tr>
						<td width="50%" align="left">&nbsp;</td>
						<td width="50%" align="right">
							{$core->get_Lang('Record/page')}:
							{$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod)}
						</td>
					</tr>
				</table>
			</div>
        	<div class="clearfix"></div>
			<div class="tabbox">
				<div class="hastable">
					<table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
						<thead><tr>
							<th class="gridheader" style="width:40px"><input id="check_all" class="el-checkbox" type="checkbox" /></th>
							<th class="gridheader hiden767" style="width:60px">{$core->get_Lang('ID')}</th>
							<th class="gridheader name_responsive" style="text-align:left">{$core->get_Lang('Name')}</th>
							{if $blog_category_check}
							<th class="gridheader hiden_responsive" style="text-align:left; width:220px">{$core->get_Lang('Category')}</th>
							{/if}
							
							<th class="gridheader hiden_responsive" style="text-align:left; width:128px">{$core->get_Lang('Country')}</th>

							<th class="gridheader hiden_responsive" style="width:60px" align="right">{$core->get_Lang('viewer')}</th>
							{if $_loged_id eq 1 || $_user_group_id eq 5}
							<th class="gridheader hiden_responsive" style="width:10%">{$core->get_Lang('Approved')}</th>
							{/if}
							<th class="gridheader hiden_responsive" style="width:80px" align="right">{$core->get_Lang('status')}</th>
							<th class="gridheader hiden_responsive" style="width:130px;" align="right">{$core->get_Lang('timeup')}</th>
							<th class="gridheader hiden_responsive" style="width:130px;" align="right">{$core->get_Lang('update')}</th>
							<th class="gridheader hiden_responsive" style="width:70px"></th>


						</tr></thead>
						{if $allItem[0].blog_id ne ''}
						<tbody id="SortAble">
							{section name=i loop=$allItem}
							{assign var = blog_id value = $allItem[i].blog_id}
							<tr style="cursor:move" id="order_{$blog_id}" class="{cycle values="row1,row2"}" >
								<td class="check_40 has-checkbox text-center"><input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="{$allItem[i].blog_id}" /></td></td>
								<td class="index hiden767">{$allItem[i].blog_id}</td>
								<td class="text-left name_service">
									<span class="title" title="{if $clsClassTable->getOneField('is_online',$allItem[i].blog_id) eq 0}{$core->get_Lang('Blog PRIVATE')}{/if}">{$clsClassTable->getTitle($allItem[i].blog_id)}</span>
									{if $allItem[i].is_online eq 0}
									<span class="color_r" title="{$core->get_Lang('Blog PRIVATE')}">[P]</span>{/if}
									{if $allItem[i].is_trash eq '1'}
									<span class="pull-right text-muted">{$core->get_Lang('intrash')}</span>
									{/if}
									<button type="button" class="toggle-row inline_block767" style="display:none">
										<i class="fa fa-caret fa-caret-down"></i>
									</button>
								</td>
								{if $blog_category_check}
								<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('Category')}">
									<a title="{$core->get_Lang('allcategory')}" href="{$PCMS_URL}/index.php?admin&mod={$mod}&blogcat_id={$allItem[i].cat_id}">
									   <i class="fa fa-folder-open"></i>{$clsBlogCategory->getTitle($allItem[i].cat_id)}
									</a>
								</td>
								{/if}
						
								<td class="block_responsive" style="text-align:left" data-title="{$core->get_Lang('country')}">{$clsCountryEx->getTitle($allItem[i].country_id)}</td>
						
								<td class="block_responsive" style="text-align:center" data-title="{$core->get_Lang('viewer')}">{$allItem[i].num_view}</td>
								{if $_loged_id eq 1 || $_user_group_id eq 5}
								<td  class="block_responsive" style="text-align:center" data-title="{$core->get_Lang('Approved')}">
									<a href="javascript:void(0);" {if $_loged_id eq 1}class="SiteClickPublic"{/if} clsTable="Blog" pkey="blog_id" toField="is_approve" sourse_id="{$allItem[i].blog_id}" rel="{$clsClassTable->getOneField('is_approve',$allItem[i].blog_id)}" title="{$core->get_Lang('Click to change status')}"> {if $allItem[i].is_approve eq '1'}<i class="fa fa-check-circle green"></i>{else}<i class="fa fa-minus-circle red"></i>{/if}</a>
								</td>
								{/if}
								<td  class="block_responsive" style="text-align:center" data-title="{$core->get_Lang('status')}">
									<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Blog" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
										{if $clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable) eq '1'}
										<i class="fa fa-check-circle green"></i>
										{else}
										<i class="fa fa-minus-circle red"></i>
										{/if}
									</a>
								</td>
								<td class="block_responsive" style="text-align:right; width: 156px" data-title="{$core->get_Lang('timeup')}">{$allItem[i].reg_date|date_format:"%d/%m/%Y %H:%M"}</td>
								<td class="block_responsive" style="text-align:right; width: 156px" data-title="{$core->get_Lang('update')}">{$allItem[i].upd_date|date_format:"%d/%m/%Y %H:%M"}</td>

								<td class="block_responsive text-center" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;" data-title="{$core->get_Lang('func')}">
									<div class="btn-group">
										<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									</button>
										<ul class="dropdown-menu" style="right:0px !important">
											{if $allItem[i].is_trash eq '0'}
											<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].blog_id)}" target="_blank" title="{$core->get_Lang('View')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('View')}</span></a></li>
											<li><a title="{$core->get_Lang('Edit')}" href="{$PCMS_URL}/blog/insert/{$allItem[i].blog_id}/overview"><i class="icon-edit"></i> <span>{$core->get_Lang('Edit')}</span></a></li>
											<li><a title="{$core->get_Lang('Trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&blog_id={$core->encryptID($allItem[i].blog_id)}{$pUrl}&page={$currentPage}"><i class="icon-trash"></i> <span>{$core->get_Lang('Trash')}</span></a></li>
											{else}
											<li><a title="{$core->get_Lang('Refresh')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&blog_id={$core->encryptID($allItem[i].blog_id)}{$pUrl}&page={$currentPage}"><i class="icon-refresh"></i> <span>{$core->get_Lang('Refresh')}</span></a></li>
											{if $allItem[i].is_approve eq 1 && $_user_group_id eq 5}
											{else}
											<li><a title="{$core->get_Lang('Delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&blog_id={$core->encryptID($allItem[i].blog_id)}{$pUrl}&page={$currentPage}"><i class="icon-remove"></i> <span>{$core->get_Lang('Delete')}</span></a></li>
											{/if}
											{/if}
										</ul>
									</div>
								</td>
							</tr>
							{/section}
						</tbody>
						{else}<tr><td colspan="15">{$core->get_Lang('nodata')}!</td></tr>{/if}
					</table>
				</div>
			</div>
			<div class="clearfix"></div>
			{$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
		</div>
	</div>
	<script type="text/javascript">
		var $boxID = "";
		var $cat_id = '{$cat_id}';
		var $city_id= '{$city_id}';
		var $departure_point_id= '{$departure_point_id}';
		var $is_set= '{$is_set}';
		var $recordPerPage = '{$recordPerPage}';
		var $currentPage = '{$currentPage}';
	</script>
	<script type="text/javascript" src="{$URL_THEMES}/blog/jquery.blog.js?v={$upd_version}"></script>
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
				$.post(path_ajax_script+"/index.php?mod=blog&act=ajUpdPosSortBlog", order,

				function(html){
					vietiso_loading(0);
					location.href = REQUEST_URI;
				});
			}
		});
	</script>
	{/literal}
</div>