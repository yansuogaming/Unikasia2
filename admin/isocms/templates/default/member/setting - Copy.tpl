<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang('contact')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}" title="{$mod}">{$core->get_Lang('settingcontact')}</a>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('settingcontact')}</h2>
        <p>{$core->get_Lang('systemmanagementsettingcontact')}</p>
    </div>
	<div id="clienttabs">
		<ul>
			<li><a><i class="fa fa-cog"></i> {$core->get_Lang('general')}</a></li>
            <li class="tabchild"><a href="#"><i class="iso-media"></i> {$core->get_Lang('seosdvanced')}</a></li>
		</ul>
	</div>
	<div id="tab_content">
		<div class="tabbox">
			<form method="post" action="" enctype="multipart/form-data">
				<table class="form" cellpadding="3" cellspacing="3">
					<tr>
						<td class="fieldlabel">{$core->get_Lang('box right member intro 1')}</td>
						<td class="fieldarea">
                        	{assign var=site_member_intro value=site_member_intro_$_LANG_ID}
                            <textarea id="textarea_intro_editor{$now}" class="textarea_intro_editor" name="iso-{$site_member_intro}" style="width:100%">{$clsConfiguration->getValue($site_member_intro)}</textarea>
						</td>
					</tr>
					<tr>
						<td class="fieldlabel">{$core->get_Lang('box right member intro 2')}</td>
						<td class="fieldarea">
                        	{assign var=site_member_intro2 value=site_member_intro2_$_LANG_ID}
                            <textarea id="textarea_intro_editor2{$now}" class="textarea_intro_editor" name="iso-{$site_member_intro2}" style="width:100%">{$clsConfiguration->getValue($site_member_intro2)}</textarea>
						</td>
					</tr>
					<tr>
                        <td class="fieldlabel">{$core->get_Lang('background color')}</td>
                        <td class="fieldarea">
                            <div class="photobox span98">
                                <img src="{$clsConfiguration->getValue('site_member_background')}" id="isoman_show_site_member_background" class="span100" height="156px" style="width:100%;" />
                                <input type="hidden" id="isoman_hidden_site_member_background" name="isoman_url_site_member_background" value="{$clsConfiguration->getValue('site_guide_banner')}" />
                                <a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="site_member_background" isoman_val="{$clsConfiguration->getValue('site_member_background')}" isoman_name="site_member_background" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
                            </div>
                        </td>
                    </tr>
				</table>
				<div class="clearfix mt10"></div>
				<fieldset class="submit-buttons">
					{$saveBtn}
					<input value="UpdateConfiguration" name="submit" type="hidden">
				</fieldset>
			</form>
		</div>
        <div class="tabbox" style="display:none">
            {$core->getBlock('meta_box')}
        </div>
	</div>
</div>
<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/tiny_mce.js"></script>
{literal}
<script type="text/javascript">
	$(document).ready(function(){
		$(".datepicker").datepicker();
	});
</script>
{/literal}