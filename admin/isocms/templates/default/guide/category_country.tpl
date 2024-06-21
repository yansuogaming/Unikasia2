<div class="page_container">
    <div class="page-title d-flex">
        <div class="title">
            <h2>{$core->get_Lang('Travel Guide Category list')}: {$core->get_Lang('Content list')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các {$core->get_Lang('Travel Guide Category list')}: {$core->get_Lang('Content list')} trong hệ thống isoCMS">i</div>
            </h2>
            <p>{$number_all} {$core->get_Lang('Content list')}</p>
        </div>
        <div class="button_right">
            <a class="btn btn-main btn-addnew add_new_guide" type="trvg_country" title="{$core->get_Lang('Add Guide Category')}">{$core->get_Lang('Add Guide Category Country')}</a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="wrap">
            <div class="filter_box">
                <form id="forums" method="post" class="filterForm" action="">
                    <div class="form-group form-keyword">
                        <input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
                    </div>
                    <div class="form-group form-category">
                        <select onchange="_reload()" name="country_id" class="form-control">
                            {$clsCountry->makeSelectboxOption($country_id)}
                        </select>
                    </div>
                    <div class="form-group form-button">
                        <button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
                        <input type="hidden" name="filter" value="filter" />
                    </div>
                    <div class="form-group form-button">
                        <a class="btn btn-delete-all" id="btn_delete" clsTable="GuideCatStore" style="display:none">
                            {$core->get_Lang('Delete')}
                        </a>
                    </div>
                    <div class="group_buttons fr mt10_767">
                        <a href="{$PCMS_URL}/?mod={$mod}" class="btn btn-danger btnNew" title="{$core->get_Lang('travelguide')}"><i class="fa fa-reply"></i> <span>{$core->get_Lang('travelguide')}</span> </a>
                    </div>
                </form>
            </div>
            <div class="statistical mb5">
                <table width="100%" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                        <td width="50%" align="left">&nbsp;</td>
                        <td width="50%" align="right">
                            {$core->get_Lang('Record/page')}:
                            {$clsISO->getRecordPerPage($recordPerPage,$totalRecord,$mod,'','')}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="clearfix"></div>
            <div class="tabbox">
                <div class="hastable">
                    <table cellspacing="0" class="tbl-grid table-striped table_responsive" width="100%">
                        <thead>
                            <tr>
                                <th class="gridheader" style="width:40px"><input id="check_all" type="checkbox" class="el-checkbox" /></th>
                                <th class="gridheader hiden767" style="width:60px">{$core->get_Lang('ID')}</th>
                                <th class="gridheader name_responsive" style="text-align:left">{$core->get_Lang('Name')}</th>
                                <th class="gridheader hiden_responsive" style="text-align:left;width:150px;">{$core->get_Lang('Country')}</th>
                                <th class="gridheader hiden_responsive" style="width:60px; text-align:center">{$core->get_Lang('Status')}</th>
                                <th class="gridheader hiden_responsive" style="width:70px">{$core->get_Lang('func')}</th>
                            </tr>
                        </thead>

                        {if $allItem[0].guidecat_store_id ne ''}
                        <tbody id="SortAble">
                            {section name=i loop=$allItem}
                            {assign var="guidecat_store_id" value=$allItem[i].guidecat_store_id}
                            {assign var="country_id" value=$allItem[i].country_id}
                            {assign var="guidecat_id" value=$allItem[i].guidecat_id}
                            <tr id="order_{$guidecat_store_id}">
                                <td class="check_40 has-checkbox text-center">
                                    <input name="p_key[]" class="chkitem el-checkbox" type="checkbox" value="{$guidecat_store_id}" />
                                </td>
                                <td class="hiden767 text_center">{$guidecat_store_id}</td>
                                <td class="name_service">
                                    <span class="title" title="{if $clsClassTable->getOneField('is_online',$guidecat_store_id) eq 0}{$core->get_Lang('Guide Category PRIVATE')}{/if}">{$clsGuideCat->getTitle($guidecat_id)}</span>
                                    {if $clsClassTable->getOneField('is_online',$guidecat_store_id) eq 0}<span style="color:red;" title="{$core->get_Lang('Guide Category PRIVATE')}">[P]</span>{/if}
                                    {if $allItem[i].is_trash eq '1'}<span class="fr" style="color:#CCC">{$core->get_Lang('intrash')}</span>{/if}
                                    <button type="button" class="toggle-row inline_block767" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
                                </td>
                                <td data-title="{$core->get_Lang('Country')}" class="block_responsive border_top_responsive">
                                    <strong style="font-size:16px;">
                                        {$clsCountry->getTitle($allItem[i].country_id)}
                                    </strong>
                                </td>
                                <td data-title="{$core->get_Lang('status')}" class="block_responsive" style="text-align:center">
                                    <a href="javascript:void(0);" class="SiteClickPublic" clsTable="GuideCatStore" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
                                        {if $clsClassTable->getOneField('is_online',$allItem[i].$pkeyTable) eq '1'}
                                        <i class="fa fa-check-circle green"></i>
                                        {else}
                                        <i class="fa fa-minus-circle red"></i>
                                        {/if}
                                    </a>
                                </td>
                                <td data-title="{$core->get_Lang('func')}" class="block_responsive" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
                                    <div class="btn-group">
                                        <button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu" style="right:0px !important">
                                            {if $allItem[i].is_trash eq '0'}
                                            <li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/guide/category_country/insert/{$guidecat_store_id}/overview"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
                                            {if $clsISO->checkInArray('3,5,15,20',$guidecat_store_id)}
                                            {else}
                                            <li><a title="{$core->get_Lang('trash')}" href="{DOMAIN_NAME}/admin/?mod={$mod}&act=trash3&action=category_country&guidecat_store_id={$core->encryptID($guidecat_store_id)}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
                                            {/if}
                                            {else}
                                            <li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore3&action=category_country&guidecat_store_id={$core->encryptID($guidecat_store_id)}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
                                            <li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete3&action=category_country&guidecat_store_id={$core->encryptID($guidecat_store_id)}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
                                            {/if}
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            {/section}
                        </tbody>
                        {else}
                        <tr>
                            <td colspan="15">{$core->get_Lang('nodata')}!</td>
                        </tr>
                        {/if}
                    </table>
                </div>
            </div>
            <div class="clearfix"></div>
            {$clsISO->getPaginationAdmin($totalRecord,$totalPage,$currentPage,$listPageNumber,$link_page_current,$type)}
        </div>
    </div>
</div>
<script type="text/javascript">
    var $boxID = "";
    var $cat_id = '{$cat_id}';
    var $guidecat_store_id = '{$guidecat_store_id}';
    var $departure_point_id = '{$departure_point_id}';
    var $is_set = '{$is_set}';
    var $recordPerPage = '{$recordPerPage}';
    var $currentPage = '{$currentPage}';
</script>
<script type="text/javascript" src="{$URL_THEMES}/guide/jquery.guide.js?v={$upd_version}"></script>
{literal}
<script type="text/javascript">
    // $("#SortAble").sortable({
    //     opaguide: 0.8,
    //     cursor: 'move',
    //     start: function() {
    //         vietiso_loading(1);
    //     },
    //     stop: function() {
    //         vietiso_loading(0);
    //     },
    //     update: function() {
    //         var recordPerPage = $recordPerPage;
    //         var currentPage = $currentPage;
    //         var order = $(this).sortable("serialize") + '&update=update' + '&recordPerPage=' + recordPerPage + '&currentPage=' + currentPage;
    //         $.post(path_ajax_script + "/index.php?mod=guide&act=ajUpdPosSortGuideCatCountry", order,
    //             function(html) {
    //                 vietiso_loading(0);
    //                 location.href = REQUEST_URI;
    //             });
    //     }
    // });
</script>
{/literal}