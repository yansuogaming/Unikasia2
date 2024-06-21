<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')}:</strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('Home')}">{$core->get_Lang('Home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$core->get_Lang('Administrators')}">{$core->get_Lang('Administrators')}</a>
    <a href="javascript:history.back();" class="back fr" style="width:50px;">{$core->get_Lang('Back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        {if $user_group_id eq '0'}
        <h2>{$core->get_Lang('Administrators')}</h2>
        {else}
        <h2>{$core->get_Lang('Administrators')}: {$oneUserGroup.name}</h2>
        {/if}
    </div>
    <p>{$core->get_Lang("This is where you configure the users which you want to allow to access the admin area.")}</p>
    <p><b>{$core->get_Lang("Options")}:</b> <a href="{$PCMS_URL}/?mod={$mod}&act=edit{if $user_group_id ne ''}&user_group_id={$user_group_id}{/if}">{$core->get_Lang("Add New Administrator")}</a></p>
    <div class="clearfix"><br class="clear" /></div>
    <div class="hastable">
		<form id="forums" method="post" action="" name="filter" class="filterForm">
			<div class="filterbox filterbox-border" style="width:100%">
				<div class="wrap">
					<div class="searchbox">
						<input type="text" class="text" name="email" value="{$email}" placeholder="{$core->get_Lang('Email')}" />
						<a class="btn btn-success fileinput-button" href="javascript:void();" id="searchbtn" style=" padding:5px">
							<i class="icon-search icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			 <input type="hidden" name="filter" value="filter" />
		</form>
        <table width="100%" cellspacing="0" class="tbl-grid table-striped table_responsive">
        	<tr>
                <td class="gridheader"><strong>{$core->get_Lang('index')}</strong></td>
				<td class="gridheader" style="text-align:left;"><strong>{$core->get_Lang('First Name')}</strong></td>
                <td class="gridheader" style="text-align:left;"><strong>{$core->get_Lang('Last Name')}</strong></td>
                <td class="gridheader" style="text-align:left;"><strong>{$core->get_Lang('Email')}</strong></td>
                <td class="gridheader" style="text-align:left;"><strong>{$core->get_Lang('Administrator Role')}</strong></td>
                <td class="gridheader"><strong>{$core->get_Lang('Status')}</strong></td>
                <td class="gridheader"><strong>Action</strong></td>
            </tr>
            {section name=i loop=$allItem}
            <tr class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}">
                <td class="index">{$smarty.section.i.iteration}</td>
				<td class="posts column-posts num">{$allItem[i].first_name}</td>
                <td class="posts column-posts num">{$allItem[i].last_name}</td>
                <td><a title="Edit" href="{$PCMS_URL}/index.php?admin&mod={$mod}&act=edit&user_id={$core->encryptID($allItem[i].user_id)}" class="row-title"><strong>{$allItem[i].user_name}</strong></a></td>
                <td class="slug column-slug">{$clsUserGroup->getName($allItem[i].user_group_id)}</td>
				<td style="text-align:center">
					<a href="javascript:void(0);" class="SiteClickPublic" clsTable="User" pkey="{$pkeyTable}" toField="is_active" sourse_id="{$allItem[i].$pkeyTable}" rel="{$clsClassTable->getOneField('is_active',$allItem[i].$pkeyTable)}" title="{$core->get_Lang('Click to change status')}">
						{if $clsClassTable->getOneField('is_active',$allItem[i].$pkeyTable) eq '1'}
						<i class="fa fa-check-circle green"></i>
						{else}
						<i class="fa fa-minus-circle red"></i>
						{/if}
					</a>
				</td>
                <td style="vertical-align: top; width: 30px; text-align: right; white-space: nowrap;">
					<div class="btn-group">
						<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
							<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
						</button>
						<ul class="dropdown-menu" style="right:0px !important">
							<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?admin&mod={$mod}&act=edit&user_id={$core->encryptID($allItem[i].user_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
							<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?admin&mod={$mod}&act=delete&user_id={$core->encryptID($allItem[i].user_id)}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
						</ul>
					</div>
                </td>
            </tr>	
            {/section}
        </table>
		<div class="clearfix" style="height:5px"></div>
			<div class="pagination_box">
			<div class="wrap holderEvent_tbl" id="dataTable_paginate">
			<!-- Ajax Loading pagination -->
			</div>
		</div>
    </div>
</div>
