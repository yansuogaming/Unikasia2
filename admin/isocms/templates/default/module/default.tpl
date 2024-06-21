<div class="page_container">
	<div class="page-title">
		<h2 class="title">{$core->get_Lang('Admin Modules')} <div class="info_module" data-toggle="tooltip" data-placement="right" title="Chức năng quản lý danh sách các tours trong hệ thống isoCMS">i</div></h2>
		<p class="text-muted">This is where you can activate and manage addon modules in your ISOCMS installation. Older legacy modules will still allow you to activate/deactivate and configure access rights, but will not be able to show any configuration options, version or author information.</p> 
    </div>
	<div class="container-fluid">
		{if $message eq 'sysinvalidtoken'}
		<div class="errorbox"><strong><span class="title">{$core->get_Lang("Invalid Token")}</span></strong><br></div>
		{/if}
		{if $message eq 'sysactivesuccess'}
		<div class="successbox"><strong><span class="title">{$core->get_Lang("Module Activated")}</span></strong><br></div>
		{/if}
		{if $message eq 'sysdeactivatesuccess'}
		<div class="successbox"><strong><span class="title">{$core->get_Lang("Module Deactivated")}</span></strong><br>If successful, you can return a message to show the user here</div>
		{/if}
		<div class="hastable">
			<table width="100%" cellspacing="0" cellpadding="0" class="tbl-grid table-striped table_responsive">
				<thead><tr>
					<th class="gridheader" width="60px">{$core->get_Lang("index")}</th>
					<th class="gridheader text-left">{$core->get_Lang("Module")}</th>
					<th width="100" class="gridheader">{$core->get_Lang("Version")}</th>
					<th width="100" class="gridheader">{$core->get_Lang("Author")}</th>
					<th class="gridheader" width="250">{$core->get_Lang("Action")}</th>
				</tr></thead>
				{section name=i loop=$allItem}
				{assign var=active value= $core->checkActiveModule($allItem[i].name)}
				<tr class="row1">
					<td  class="px-10 text-center">{$smarty.section.i.index+1}</td>
					<td  class="px-10 text-left" style="{if $active eq 1}background-color:#e9ffd9;{/if}">
						<b>{$allItem[i].Display_Name}</b><br>
						{$allItem[i].intro|html_entity_decode}
					</td>
					<td class="px-10 text-center" style="{if $active eq 1}background-color:#e9ffd9;{/if}">{$allItem[i].version}</td>
					<td class="px-10 text-center" style="{if $active eq 1}background-color:#e9ffd9;{/if}">
						{if $allItem[i].author_link ne ''}
							<a href="{$allItem[i].author_link}" targer="_blank">{$allItem[i].author}</a>
						{else}
							{$allItem[i].author}
						{/if}
					</td>
					<td class="px-10 text-center" style="{if $active eq 1}background-color:#e9ffd9;{/if}">
						<div class="d-flex">
							<input type="button" value="{$core->get_Lang('Activate')}" {if $active eq 1}disabled="disabled"{else}onclick="window.location='{$PCMS_URL}/index.php?act=sysactivate&module={$allItem[i].name}&token={$core->gentoken()}'"{/if} class="btn mr-2 {if $active eq 1}btn-default disabled{else}btn-success{/if}"> 
							<input type="button" value="{$core->get_Lang('Deactivate')}" class="btn mr-2 {if $active eq 0}disabled{else}btn-danger{/if}" {if $active eq 0}disabled="disabled"{else}onclick="deactivateMod('{$allItem[i].name}');return false"{/if}> 
							<input type="button" value="{$core->get_Lang('Configure')}" class="btn {if $active eq 0}disabled{else}btn-warning{/if}" {if $active eq 0}disabled="disabled"{else}onclick="showConfig('{$allItem[i].name}')"{/if}>
						</div>
					</td>
				</tr>
				<tr>
					<td id="{$allItem[i].name}" colspan="4" style="display:none;">
						<form method="post" action="">
							<table class="form" width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>
								<tr>
									<td width="25%" class="p-2 text-center">{$core->get_Lang('Description Module')}</td>
									<td class="p-2 text-center">
										{assign var = setting value = 'SiteIntroModule_'|cat:$allItem[i].name|cat:'_'|cat:$_LANG_ID}
										<textarea style="width:100%" name="{$setting}" rows="2" cols="255" class="mceSimple" id="{$clsISO->getUniqid()}">{$clsConfiguration->getValue($setting)}</textarea>
										<div class="mt-half" align="center">
											<input type="hidden" name="submit" value="Update" />
											<input type="hidden" name="modulename" value="{$allItem[i].name}" />
											<input type="submit" name="msave_{$allItem[i].name}" value="Save Changes" class="btn btn-success">
										</div>
									</td>
								</tr>
							</table>
						</form>
					</td>
				 </tr>
				{/section}
			</table>
		</div>
		<script type="text/javascript">
			var token = '{$core->gentoken()}';
		</script>
	</div>
</div>
{literal}
<script type="text/javascript">
	function showConfig(module) {
		var moduleId = $('#'+module);
		moduleId.fadeToggle();
		$('.mceSimple:not(.tinyMCE)', moduleId).each(function(){
			var $editorID = $(this).attr('id');
			$('#'+$editorID).addClass('tinyMCE').isoTextArea();
		});
	}
	function deactivateMod(id) {
		$Core.alert.confirm(__['Message'], 'Are you sure you want to deactivate this module?', function(){
			window.location=path_ajax_script+'/index.php?act=sysdeactivate&module='+id+'&token='+token;
		});
	}
</script>
{/literal}