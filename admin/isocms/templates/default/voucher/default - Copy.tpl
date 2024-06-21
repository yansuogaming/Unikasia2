<div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100">{$core->get_Lang('voucher')}</h1>
				<p class="type--subdued">{$core->get_Lang('This system allows you to manage & edit static pages in Systems')}</p>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="{$PCMS_URL}/index.php?mod={$mod}&act=edit{$pUrl}" class="ui-button ui-button--primary ui-title-bar__action">{$core->get_Lang('Addnew')}</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui-layout ui-layout--full-width">
	<div class="ui-layout__sections">
		<div class="ui-layout__section">
			<div class="ui-layout__item">
				<div class="ui-card">
					<div class="next-tab__container">
						<ul class="next-tab__list filter-tab-list">
							<li class="filter-tab-item" data-tab-index="1">
								<a href="{$PCMS_URL}/index.php?mod={$mod}" class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">{$core->get_Lang('AllPages')}</a>
							</li>
						</ul>
					</div>
					<div class="ui-card__section has-bulk-actions pages">
						<form method="post">
							<div class="form-search form-inline">
								<div class="form-group">
									<div class="input-group four-input" style="width:850px">
										<select name="supplier_id" class="iso-selectize required">
											{$clsSupplier->getOpt($supplier_id)}
										</select>
										<input type="text" class="form-control" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}" />
										<div class="input-group-btn">
											<button type="submit" class="btn btn-success">
												<i class="fa fa-search"></i></button>
										</div>
									</div>
								</div>
								<input type="hidden" name="filter" value="filter" />
								<div class="form-group pull-right">
									<a href="{$PCMS_URL}/?mod={$mod}" class="btn text-white btn-warning">
										<i class="icon-folder-open icon-white"></i> 
										<span>{$core->get_Lang('all')} ({$number_all})</span>
									</a>
									<a href="{$PCMS_URL}/?mod={$mod}&type_list=Trash" class="btn text-white btn-danger">
										<i class="icon-warning-sign icon-white"></i> 
										<span>{$core->get_Lang('trash')} ({$number_trash})</span>
									</a>
									<a href="javascript:void(0)" clsTable="Voucher" class="btn btn-danger text-white btn-delete-all" style="display:none"> 
                           				<i class="icon-remove icon-white"></i> 
                           				<span>{$core->get_Lang('Delete')}</span> 
                           			</a>
								</div>
							</div>
							<div class="hastable table-wrapper">
								<table class="table table-vertical table-striped" cellpadding="0" cellspacing="0" >
									<thead><tr>
										<th class="text-center" width="3%">
											<div class="checkbox">
												<input type="checkbox" id="check_all" class="check_all styled" value="1" />
												<label></label>
											</div>
										</th>
										<th class="text-left">{$core->get_Lang('nameofvoucher')}</th>
										<th class="text-left">{$core->get_Lang('category')}</th>
										<th class="text-right">{$core->get_Lang('Price')}</th>
										<th class="text-center" width="5%">{$core->get_Lang('Status')}</th>
										<th class="text-right" width="10%">{$core->get_Lang('update')}</th>
										<th class="text-center" colspan="4" width="4%">{$core->get_Lang('move')}</th>
										<th class="text-center" width="80px">{$core->get_Lang('func')}</th>
									</tr></thead>
									{section name=i loop=$allItem}
									<tr class="{cycle values="row1,row2"}">
										<td class="text-center">
											<div class="checkbox">
												<input type="checkbox" name="p_key[]" class="chkitem styled" value="{$allItem[i].voucher_id}" />
												<label></label>
											</div>
										</td>
										<td class="text-left">
											<a href="{$PCMS_URL}/?mod={$mod}&act=edit&voucher_id={$core->encryptID($allItem[i].voucher_id)}">{$clsClassTable->getTitle($allItem[i].voucher_id)}</a>
											{if $allItem[i].is_trash eq '1'}
											<span class="fr text-red">{$core->get_Lang('intrash')}</span>
											{/if}
										</td>
										<td class="text-left">Cat</td>
										<td class="text-right text-red">{$clsISO->formatPrice($allItem[i].price)}</td>
										<td bgcolor="#f9f9f9" class="text-center">
											<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Voucher" pkey="{$pkeyTable}" sourse_id="{$allItem[i].$pkeyTable}" rel="{$allItem[i].is_online}" title="{$core->get_Lang('Click to change status')}">
												{if $allItem[i].is_online eq '1'}
												<i class="fa fa-check-circle green"></i>
												{else}
													<i class="fa fa-check-circle red"></i>
												{/if}
											</a>
										</td>
										<td class="text-right">{$allItem[i].reg_date|date_format:"%d/%m/%Y %H:%M"}</td>
										<td bgcolor="#f9f9f9" class="text-center">
											{if !$smarty.section.i.first}
											<a title="{$core->get_Lang('movetop')}" href="{$PCMS_URL}/index.php?mod={$mod}&act=move&direct=movetop&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}"><i class="icon-circle-arrow-up"></i></a>
											{/if}
										</td>
										<td bgcolor="#f9f9f9" class="text-center">
											{if !$smarty.section.i.last}
											<a title="{$core->get_Lang('movebottom')}" href="{$PCMS_URL}/index.php?mod={$mod}&act=move&direct=movebottom&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}"><i class="icon-circle-arrow-down"></i></a>
											{/if}
										</td>
										<td bgcolor="#f9f9f9" class="text-center">
											{if !$smarty.section.i.first}
											<a title="{$core->get_Lang('moveup')}" href="{$PCMS_URL}/index.php?mod={$mod}&act=move&direct=moveup&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}"><i class="icon-arrow-up"></i></a>
											{/if}
										</td>
										<td bgcolor="#f9f9f9" class="text-center">
											{if !$smarty.section.i.last}
											<a title="{$core->get_Lang('movedown')}" href="{$PCMS_URL}/index.php?mod={$mod}&act=move&direct=movedown&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}"><i class="icon-arrow-down"></i></a>
											{/if}
										</td>
										<td class="text-center" style="white-space:nowrap;">
											<div class="btn-group">
												<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown">
													<i class="icon-cog"></i> 
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu" style="right:0px !important;left:auto;">
													{if $allItem[i].is_trash eq '0'}
													<li><a href="{$DOMAIN_NAME}{$clsClassTable->getLink($allItem[i].voucher_id)}" target="_blank" title="{$core->get_Lang('view')}"><i class="icon-eye-open"></i> <span>{$core->get_Lang('view')}</span></a></li>
													<li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod={$mod}&act=edit&voucher_id={$core->encryptID($allItem[i].voucher_id)}"><i class="icon-edit"></i> <span>{$core->get_Lang('edit')}</span></a></li>
													<li><a title="{$core->get_Lang('trash')}" href="{$PCMS_URL}/?mod={$mod}&act=trash&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}"><i class="icon-trash"></i> <span>{$core->get_Lang('trash')}</span></a></li>
													{else}
													<li><a title="{$core->get_Lang('restore')}" href="{$PCMS_URL}/?mod={$mod}&act=restore&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}"><i class="icon-refresh"></i> <span>{$core->get_Lang('restore')}</span></a></li>
													<li><a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod={$mod}&act=delete&voucher_id={$core->encryptID($allItem[i].voucher_id)}{$pUrl}"><i class="icon-remove"></i> <span>{$core->get_Lang('delete')}</span></a></li>
													{/if}
												</ul>
											</div>
										</td>
									</tr>
									{/section}
								</table>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>