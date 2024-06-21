<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
	<a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
	<a href="{$PCMS_URL}/index.php?mod={$mod}">{$core->get_Lang($mod)}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}&act={$act}" title="{$core->get_Lang('setting')}">{$core->get_Lang('setting')}</a>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('setting')}</h2>
        <p>{$core->get_Lang('systemmanagementsetting')}</p>
    </div>
	<form method="post" action="" enctype="multipart/form-data">
		<div id="tab_content">
			<div class="tabbox">
				<table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
					<tr>
                        <td class="fieldlabel span20">{$core->get_Lang('Meta Title')}</td>
                        <td class="fieldarea">
                            <input type="text" class="text span55" name="iso-SiteMetaTitle" value="{$clsConfiguration->getValue('SiteMetaTitle')}">
                        </td>
                    </tr>
					<tr>
                        <td class="fieldlabel span20">{$core->get_Lang('Meta Description')}</td>
                        <td class="fieldarea">
                            <textarea class="textarea full span55" rows="3" name="iso-SiteMetaDescription">{$clsConfiguration->getValue('SiteMetaDescription')}</textarea>
                        </td>
                    </tr>
					<tr>
						<td class="fieldlabel span20">{$core->get_Lang('Meta Image')}(WxH:500x261)</td>
						<td class="fieldarea">
							<div class="photobox" style="width: 500px; height: 261px;">
                                <img src="{$clsConfiguration->getValue('ImageShareSocial')}" id="isoman_show_ImageShareSocial" class="span100" height="156px" style="width:100%;" />
                                <input type="hidden" id="isoman_hidden_ImageShareSocial" name="iso-ImageShareSocial" value="{$clsConfiguration->getValue('ImageShareSocial')}" />
                                <a href="javascript:void(0);" class="photobox_edit ajOpenDialog" isoman_for_id="ImageShareSocial" isoman_val="{$clsConfiguration->getValue('ImageShareSocial')}" isoman_name="ImageShareSocial" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
                            </div>
							
                        </td>
					</tr>
					<tr>
                        <td class="fieldlabel span20">{$core->get_Lang('twitter:site')}</td>
                        <td class="fieldarea">
                            <input type="text" class="text span55" name="iso-SiteTwitterSite" value="{$clsConfiguration->getValue('SiteTwitterSite')}">
                        </td>
                    </tr>
					<tr>
                        <td class="fieldlabel span20">{$core->get_Lang('twitter:creator')}</td>
                        <td class="fieldarea">
                            <input type="text" class="text span55" name="iso-SiteTwitterCreator" value="{$clsConfiguration->getValue('SiteTwitterCreator')}">
                        </td>
                    </tr>
				</table>
				<div class="clearfix mt10"></div>
				<fieldset class="submit-buttons">
					{$saveBtn}
					<input value="UpdateConfiguration" name="submit" type="hidden">
				</fieldset>
			</div>
		</div>
	</form>
</div>
{literal}
<style>
	.isoman_img_pop{ width:100px; height:35px; border:1px solid #ccc; padding:1px;}
</style>
{/literal}
