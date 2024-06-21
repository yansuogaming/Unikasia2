<div class="breadcrumb">
    <strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$core->get_Lang('tagscloud')}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('tagscloud')} <a class="btn btn-success btnCreateTags" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a></h2>
        <p>Chức năng quản lý danh sách các tags cloud trong hệ thống isoCMS</p>
		<p>{$core->get_Lang('This function is intended to manage tags cloud in isoCMS system')}</p>
    </div>
    <div class="clearfix"><br /></div>
    <form id="forums" method="post" action="" name="filter" class="filterForm">
        <div class="filterbox filterbox-border" style="width:100%">
            <div class="wrap">
                <div class="searchbox">
                    <input type="text" class="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
                    <a class="btn btn-success" href="javascript:void();" id="searchbtn" style="padding:5px">
                        <i class="icon-search icon-white"></i>
                    </a>
                </div>
                <div class="fr group_buttons">
                    <a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-warning">
                        <i class="icon-folder-open icon-white"></i> <span>{$core->get_Lang('all')} ({$number_all})</span>
                    </a>
                    <a href="{$PCMS_URL}/?mod={$mod}&type_list=Trash" class="btn btn-danger">
                        <i class="icon-warning-sign icon-white"></i> <span>{$core->get_Lang('trash')} ({$number_trash})</span>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-danger btn-delete-all" clsTable="Tag" style="color:#fff; display:none">
                        <i class="icon-remove icon-white"></i> <span>{$core->get_Lang('Delete Options')}</span>
                    </a>
                </div>
            </div>
        </div>
        <input type="hidden" name="filter" value="filter" />
    </form>
    <input id="list_selected_chkitem" style="display:none" value="0" />
    <div class="clearfix"></div>
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
    <table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
        <tr>
            <td class="gridheader"><input id="check_all" type="checkbox" /></td>
            <td class="gridheader" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></td>
            <td class="gridheader"><strong>{$core->get_Lang('func')}</strong></td>
        </tr>
        {section name=i loop=$allItem}
        <tr class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
            <td class="index"><input name="p_key[]" class="chkitem" type="checkbox" value="{$allItem[i].tag_id}" /></td>
            <td><strong class="title">{$clsClassTable->getTitle($allItem[i].tag_id)}</strong>
                {if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">[In Trash]</span>{/if}
            </td>
            <td align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
                <div class="btn-group">
                    <button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
						<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
					</button>
                    <ul class="dropdown-menu" style="right:0px !important">
                        {if $allItem[i].is_trash eq '0'}
                        <li><a class="btnedit_tag" title="{$core->get_Lang('Edit')}" data="{$allItem[i].tag_id}"><i class="icon-edit"></i> <span>{$core->get_Lang('Edit')}</span></a></li>
                        <li><a title="{$core->get_Lang('Trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&tag_id={$core->encryptID($allItem[i].tag_id)}{$pUrl}"><i class="icon-trash"></i> <span>{$core->get_Lang('Trash')}</span></a></li>
                        {else}
                        <li><a title="{$core->get_Lang('Refresh')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&tag_id={$core->encryptID($allItem[i].tag_id)}{$pUrl}"><i class="icon-refresh"></i> <span>{$core->get_Lang('Refresh')}</span></a></li>
                        <li><a title="{$core->get_Lang('Delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&tag_id={$core->encryptID($allItem[i].tag_id)}{$pUrl}"><i class="icon-remove"></i> <span>{$core->get_Lang('Delete')}</span></a></li>
                        {/if}
                    </ul>
                </div>
            </td>
        </tr>
        {/section}
    </table>
    <div class="clearfix"></div>
    {$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
</div>
{literal}
<script type="text/javascript">
$(function(){
	$(document).on('click', '.btnCreateTags', function(ev){
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=ajOpenTags',
			dataType:'html',
			success:function(html){
				vietiso_loading(0);
				makepopupnotresize('24%', 'auto', html, 'pop_Tags');
			}
		});
		return false;
	});
	$(document).on('click', '.btnedit_tag', function(ev){
		var $_this = $(this);
		var $tag_id = $_this.attr('data');
		/**/
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=ajOpenTags',
			data : {'tag_id' : $tag_id},
			dataType:'html',
			success:function(html){
				vietiso_loading(0);
				makepopupnotresize('24%', 'auto', html, 'pop_Tags');
			}
		});
		return false;
	});
	$(document).on('click', '.ClickSubmitTags', function(ev){
		var $_this = $(this);
		var $_form = $_this.closest('.frmPop');
		var $title = $_form.find('input[name=title]');
		if($title.val()==''){
			$title.focus();
			alertify.error(field_is_required);
			return false;
		}
		var adata = {
			'title' 		: 	$title.val(),
			'tag_id' 		: 	$_this.attr('tag_id')
		};
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=ajSubmitTags',
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
		return false;
	});
});
</script>
{/literal}