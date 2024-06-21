<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang('Voucher')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}" title="{$mod}">{$core->get_Lang('settingvoucher')}</a>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('settingvoucher')}</h2>
        <p>{$core->get_Lang('systemmanagementsettingvoucher')}</p>
    </div>
		<form method="post" action="" enctype="multipart/form-data">
			<table class="form" cellpadding="3" cellspacing="3">
				
				<tr>
					<td class="fieldlabel">{$core->get_Lang('intropage')}</td>
					<td class="fieldarea">
						{assign var=site_voucher_intro value=site_voucher_intro_$_LANG_ID}
						<textarea id="textarea_intro_editor{$now}" class="textarea_intro_editor" name="iso-{$site_voucher_intro}" style="width:100%">{$clsConfiguration->getValue($site_voucher_intro)}</textarea>
					</td>
				</tr>
				{if 1 eq 2}
				<tr>
					<td class="fieldlabel">{$core->get_Lang('bannercover')}</td>
					<td class="fieldarea">
						<div class="photobox span98">
							<img src="{$clsConfiguration->getValue('site_cruise_banner')}" id="isoman_show_site_cruise_banner" class="span100" height="156px" style="width:100%;" />
							<input type="hidden" id="isoman_hidden_site_cruise_banner" name="isoman_url_site_cruise_banner" value="{$clsConfiguration->getValue('site_cruise_banner')}" />
							<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_cruise_banner" isoman_val="{$clsConfiguration->getValue('site_cruise_banner')}" isoman_name="site_cruise_banner" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
						</div>
					</td>
				</tr>
				<tr>
					<td class="fieldlabel">{$core->get_Lang('Hight season')}</td>
					<td class="fieldarea">
						<input style="width:50%;" type="text" name="iso-hightseason" value="{$clsConfiguration->getValue('hightseason')}">
					</td>
				</tr>
				{/if}
			</table>
			<div class="clearfix mt10"></div>
			<fieldset class="submit-buttons">
				{$saveBtn}
				<input value="UpdateConfiguration" name="submit" type="hidden">
			</fieldset>
		</form>
	</div>
</div>
{literal}
<script type="text/javascript">
	$(document).ready(function(){
		$(".datepicker").datepicker();
	});
</script>
{/literal}