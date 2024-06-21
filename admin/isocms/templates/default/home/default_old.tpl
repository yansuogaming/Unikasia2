<div style="padding:20px; line-height:20px">
	<h1><i style="color:#ff8721" class="fa fa-home"></i> {$core->get_Lang("Dashboard")}</h1>
    {$core->get_Lang("Welcome to the data management system website")} <strong>{$PAGE_NAME}</strong>.
</div>
{if $message eq 'invalidlicense'}
<div class="errorbox"><strong><span class="title">{$core->get_Lang("Invalid License Module")}</span></strong><br></div>
{/if}
{if $message eq 'modulenotactive'}
<div class="errorbox"><strong><span class="title">{$core->get_Lang("Module is not activated!")}</span></strong><br></div>
{/if}
<div class="container-fluid">
	<div class="wrap">
		{assign var=lstAdminButtonHomeGroup value=$clsAdminButton->getAll('is_group=1 and _type="_HOME" order by order_no asc')}
		{section name=k loop=$lstAdminButtonHomeGroup}
		{assign var=id value=$lstAdminButtonHomeGroup[k].adminbutton_id}
		{assign var=lstAdminButtonHome value=$clsAdminButton->getChild($id)}
		{if $lstAdminButtonHome[0].adminbutton_id ne ''}
		<div class="homewidget" id="system_overview">
			<div class="widget-header">{$core->get_Lang($lstAdminButtonHomeGroup[k].title_page)}</div>
			<div class="widget-content">
				<ul class="rsl-list-buttons" package_id="{$package_id}">
					{section name=i loop=$lstAdminButtonHome}
					{if $clsAdminButton->checkPackage($lstAdminButtonHome[i].adminbutton_id,$package_id)}
					{if $core->checkAccess($lstAdminButtonHome[i].mod_page)}
					<li>
						<a title="{$core->get_Lang($lstAdminButtonHome[i].title)}" href="{$clsAdminButton->getURL($lstAdminButtonHome[i].adminbutton_id)}" >
							<img class="imgIcon"  src="{$lstAdminButtonHome[i].image}" width="32" height="32" />
							<span class="text">{$core->get_Lang($lstAdminButtonHome[i].title_page)}</span>
						</a>
					</li>
					{/if}
					{/if}
					{/section}
				</ul>
			</div>
		</div>
		{/if}
		{/section}
		<div class="homecolumn ui-sortable" id="homecol1">
            {$core->getBlock('blog')}
			{if $core->checkAccess('booking')}
			<div class="homewidget" id="calendar">
				<div class="widget-header">{$core->get_Lang('System overview')}</div>
				<div class="widget-content">
					
					<table class="form" width="100%" cellpadding="2" cellspacing="2">
						<tr>
							{if $clsISO->getCheckActiveModulePackage($package_id,'tour','default','default')}
							<td class="fieldlabel span20 text-right">{$core->get_Lang('tours')}</td>
							<td class="fieldarea">
								<a href="{$PCMS_URL}/index.php?mod=tour">
									<span class="badge badge-info">{$clsISO->countTotal('Tour')}</span>
								</a>
							</td>
							{/if}
							{if $clsISO->getCheckActiveModulePackage($package_id,'hotel','default','default')}
							<td class="fieldlabel span20 text-right">{$core->get_Lang('accommodation')}</td>
							<td class="fieldarea">
								<a href="{$PCMS_URL}/index.php?mod=hotel">
									<span class="badge badge-success">{$clsISO->countTotal('Hotel')}</span>
								</a>
							</td>
							{/if}
						</tr>
					</table>
				</div>
			</div>
			{/if}
			{if $core->checkAccess('feedback')}
			{if $clsISO->getCheckActiveModulePackage($package_id,'feedback','default','default')}
			{if $clsConfiguration->getValue('SiteHasFeedback_Home') eq '1'}
			<div class="homewidget" id="open_invoices">
				<div class="widget-header">{$core->get_Lang('Contact us')}</div>
				<div class="widget-content">
					<table class="tbl-grid" width="100%" cellspacing="1">
						<tbody>
							<tr>
								<td class="gridheader text-left"><strong>{$core->get_Lang('code')}</strong></td>
								<td class="gridheader text-left"><strong>{$core->get_Lang('Fullname')}</strong></td>
								<td class="gridheader text-left"><strong>{$core->get_Lang('E-Mail')}</strong></td>
								<td class="gridheader text-right"><strong>{$core->get_Lang('datetime')}</strong></td>
								<td class="gridheader" width="3%"></td>
							</tr>
							{if $lstFeedback[0].feedback_id ne ''}
							{section name=i loop=$lstFeedback}
							<tr class="{cycle values='row1,row2'}">
								<td><a href="{$PCMS_URL}/index.php?mod=feedback&feedback_id={$core->encryptID($lstFeedback[i].feedback_id)}">{$lstFeedback[i].feedback_code}</a></td>
								<td>{$lstFeedback[i].first_name} {$lstFeedback[i].last_name}</td>
								<td><a href="mailto:{$lstFeedback[i].email}">{$lstFeedback[i].email}</a></td>
								<td class="text-right">{$lstFeedback[i].reg_date|date_format:"%d/%m/%Y %H:%M"}</td>
								<td><a href="{$PCMS_URL}/index.php?mod=feedback&feedback_id={$core->encryptID($lstFeedback[i].feedback_id)}"><img src="{$URL_IMAGES}/v2/edit.gif" /></a></td>
							</tr>
							{/section}
							{else}
							<tr>
								<td colspan="5" class="text-center">{$core->get_Lang('Not any record')}</td>
							</tr>
							{/if}
						</tbody>
					</table>
					<div align="right" style="padding-top:5px; font-size:11px"><a href="{$PCMS_URL}/index.php?mod=feedback">{$core->get_Lang('viewall')} »</a></div>
				</div>
			</div>
			{/if}
			{/if}
			{/if}
		</div>
		<div class="homecolumn ui-sortable" id="homecol2">
			{if $core->checkAccess('feedback') && $clsISO->getCheckActiveModulePackage($package_id,'feedback','default','default')}
			
			<div class="homewidget" id="my_notes">
				<div class="widget-header">
					{$core->get_Lang('Booking Stats')}
				</div>
				<div class="widget-content">
					<div class="demo-container" id="demo-container">
						
					</div>
				</div>
			</div>
			{literal}
			<script type="text/javascript">
				$(function(){
					loadChartBooking();
				});
				function loadChartBooking(){
					vietiso_loading(1);
					$.ajax({
						type: "POST",
						url: path_ajax_script + '/?mod=home&act=ajLoadChartBooking',
						data: {},
						dataType: "html",
						success: function(html){
							vietiso_loading(0);
							$('#demo-container').html(html);
						}
					});
				}
			</script>
			{/literal}
			{/if}
			{if $clsConfiguration->getValue('SiteHasNote_Home') eq '1'}
			<div class="homewidget" id="my_notes">
				<div class="widget-header">{$core->get_Lang('My Notes')}</div>
				<div class="widget-content">
					<div align="center">
						<div id="widgetnotesconfirm" style="display:none;margin:0 0 5px 0;padding:5px 20px;background-color:#DBF3BA;font-weight:bold;color:#6A942C;">Notes Saved Successfully!</div>
						<textarea id="widgetnotesbox" class="textarea full" style="height:60px;" placeholder="Viết ghi chú của bạn...">{$clsUser->getOneField('notes',$_loged_id)}</textarea>
						<div class="clearfix mt5"></div>
						<button  class="iso-button-primary" user_id="{$_loged_id}" id="ClickUpdateNote"><i class="fa fa-check"></i> {$core->get_Lang('save')}</button>
					</div>
				</div>
			</div>
			{literal}
			<script type="text/javascript">
				$(function(){
					setViewTextAreaByClass('textarea');
					$(document).on('click', '#ClickUpdateNote', function(ev){
						var $_this = $(this);
						var adata = {};
						adata['clsTable'] = 'User';
						adata['pkey'] = 'user_id';
						adata['pvalTable'] = $_this.attr('user_id');
						adata['toField'] = 'notes';
						adata['val'] = $('#widgetnotesbox').val();
						adata['allowDuplicate'] = 1;
						vietiso_loading(1);
						$.ajax({
							type: "POST",
							url: path_ajax_script + '/?mod=home&act=saveField',
							data: adata,
							dataType: "html",
							success: function(html) {
								vietiso_loading(0);
								$('#widgetnotesconfirm').fadeIn().delay(2000).fadeOut();
							}
						});
						return false;
					});
				});
			</script>
			{/literal}
			{/if}
			<div class="homewidget" id="sysinfo">
				<div class="widget-header">{$core->get_Lang('System Information')}</div>
				<div class="widget-content">
					<table class="tbl-grid" width="100%">
						<tbody>
							<tr>
								<td width="20%" style="text-align:right;padding-right:5px;">{$core->get_Lang('Registered To')}</td>
								<td width="35%">{$_LICENSE_VALUE.registeredname}</td>
								<td width="15%" style="text-align:right;padding-right:5px;">{$core->get_Lang('Expires')}</td>
								<td>{$core->get_Lang('Never')}</td>
							</tr>
							<tr>
								<td style="text-align:right;padding-right:5px;">{$core->get_Lang('License Type')}</td>
								<td>{$_LICENSE_VALUE.productname}</td>
								<td style="text-align:right;padding-right:5px;">{$core->get_Lang('Version')}</td>
								<td>{$_ISOCMS_VERSION}</td>
							</tr>
							<tr>
								<td style="text-align:right;padding-right:5px;">{$core->get_Lang('validdomain')}</td>
								<td colspan="3">{$_LICENSE_VALUE.validdomain}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
            
		</div>
	</div>
</div>