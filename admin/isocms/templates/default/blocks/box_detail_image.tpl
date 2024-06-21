<h3 class="title_box">{$core->get_Lang('Image')}
	{assign var= help_first value=$image_detail}
	{if $CHECKHELP eq 1}
	<button data-key="{$image_detail}" data-label="{$core->get_Lang('Image')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
	{/if}
</h3>
<div class="form_option_tour">
	<div class="inpt_tour" {$mod} {$image_detail}>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="drop_gallery" onClick="loadHelp(this)">
					<div class="text_help" hidden="">{$clsConfiguration->getValue($image_detail)|html_entity_decode}</div>
					<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_image" data-options='{ldelim}"openFrom":"image","clsTable":"{$clsTable}", "table_id":"{$pvalTable}","toId":"isoman_show_image" {rdelim}' ondragover="return false">
						<h3>{$core->get_Lang('Drop files to upload')}</h3>
						{if $mod=='blog'}
						<p>{$core->get_Lang('Image size')} (WxH=828x552px)<br />
							{elseif $mod=='ads'}
						<p>{$core->get_Lang('Image size')} (WxH=1280x294px)<br />
							{elseif $mod=='testimonial'}
						<p>{$core->get_Lang('Image size')} (WxH=405x326px)<br />
							{elseif $mod=='news'}
						<p>{$core->get_Lang('Image size')} (WxH=850x547px)<br />
							{elseif $mod=='country'}
						<p>{$core->get_Lang('Image size')} (WxH=298x198px)<br />
							{elseif $mod=='hotel'}
						<p>{$core->get_Lang('Image size')} (WxH=353x244px)<br />
							{elseif $mod=='cruise'}
						<p>{$core->get_Lang('Image size')} (WxH=733x486px)<br />
							{elseif $mod=='service'}
						<p>{$core->get_Lang('Image size')} (WxH=280x255px)<br />
							{elseif $mod=='city'}
						<p>{$core->get_Lang('Image size')} (WxH=295x168px)<br />
							{elseif $mod=='voucher'}
						<p>{$core->get_Lang('Image size')} (WxH=297x194px)<br />
							{elseif $mod=='tour_exhautive' && $image_detail eq 'image_category_country'}
						<p>{$core->get_Lang('Image size')} (WxH=294x462px)<br />
							{else}
						<p>{$core->get_Lang('Image size')} (WxH=1034x861px)<br />
							{/if}
							{$core->get_Lang('Supported file types are: .png,.jpg,.jpeg')}</p>
						<button type="button" class="btn btn-upload">{if $oneItem.image}{$core->get_Lang('Change Image')}{else}{$core->get_Lang('Upload Image')}{/if}</button>
					</div>
					<input class="hidden" id="selectFile" type="file" data-options='{ldelim}"openFrom":"image","clsTable":"{$clsTable}", "table_id":"{$pvalTable}","toId":"isoman_show_image"{rdelim}' name="image">

					<input style="display:none" type="file" multiple name="image" id="ajAttachFile" />
					<input type="hidden" value="{$oneItem.image}" name="image" id="image" />
					<a table_id="{$pvalTable}" isoman_multiple="0" isoman_callback='isoman_callback({ldelim}"openFrom":"image", "clsTable":"{$clsTable}", "pvalTable":"{$pvalTable}", "table_id":"{$pvalTable}","toField":"image","toId":"isoman_show_image"{rdelim})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image" isoman_name="image">{$clsISO->makeIcon('folder-o', $core->get_Lang('From library'))}</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="aspect-ratio aspect-ratio--square aspect-ratio--square--full aspect-ratio--interactive">
					{if $mod eq 'tour_exhautive'}
					<img alt="{$oneItem.title}" class="aspect-ratio__content radius-3" id="isoman_show_image" src="{$clsClassTable->getImage($pvalTable,294,462)}" onerror="this.src='{$URL_IMAGES}/none_image.png'" style="width:100%; height:auto" />
					{else}
					<img alt="{$oneItem.title}" class="aspect-ratio__content radius-3" id="isoman_show_image" src="{$clsClassTable->getImage($pvalTable,250,170)}" onerror="this.src='{$URL_IMAGES}/none_image.png'" style="width:100%; height:auto" />
					{/if}

				</div>
			</div>
		</div><!-- /file list -->
	</div>
</div>
{if $mod=='country'}
<h3 class="title_box">{$core->get_Lang('Sub Image')}</h3>
<p>{$core->get_Lang('Kích thước chuẩn')}: 480x698</p>
<div class="form_option_tour">
	<div class="inpt_tour">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="drop_gallery" onClick="loadHelp(this)">
					<!-- <div class="text_help" hidden="">{$clsConfiguration->getValue($image_detail)|html_entity_decode}</div> -->
					<div class="filedrop full" onClick="file_explorer(this,event);" ondrop="file_drop(this,event)" toid="selectFile" toel="isoman_show_image_sub" data-options='{ldelim}"openFrom":"image_sub","clsTable":"{$clsTable}", "table_id":"{$pvalTable}","toId":"isoman_show_image_sub" {rdelim}' ondragover="return false">
						<h3>{$core->get_Lang('Drop files to upload')}</h3>
						<p>{$core->get_Lang('Image size')} (WxH=480x698)<br />
							Các loại tệp được hỗ trợ là: .png,.jpg,.jpeg</p>
						<button type="button" class="btn btn-upload">{if $oneItem.image_sub}{$core->get_Lang('Change Image')}{else}{$core->get_Lang('Upload Image')}{/if}</button>
					</div>
					<input class="hidden" id="selectFile" type="file" data-options='{ldelim}"openFrom":"image_sub","clsTable":"{$clsTable}", "table_id":"{$pvalTable}","toId":"isoman_show_image_sub"{rdelim}' name="image_sub">

					<input style="display:none" type="file" multiple name="image_sub" id="ajAttachFile" />
					<input type="hidden" value="{$oneItem.image_sub}" name="image_sub" id="image_sub" />
					<a table_id="{$pvalTable}" isoman_multiple="0" isoman_callback='isoman_callback({ldelim}"openFrom":"image_sub", "clsTable":"{$clsTable}", "pvalTable":"{$pvalTable}", "table_id":"{$pvalTable}","toField":"image_sub","toId":"isoman_show_image_sub"{rdelim})' class="btn-upload-2 ajOpenDialog" isoman_for_id="image_sub" isoman_name="image_sub">{$clsISO->makeIcon('folder-o', $core->get_Lang('From library'))}</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="aspect-ratio aspect-ratio--square aspect-ratio--square--full aspect-ratio--interactive">
					<img alt="{$oneItem.title}" class="aspect-ratio__content radius-3" id="isoman_show_image_sub" src="{$clsClassTable->getImageSub($pvalTable,480,698)}" onerror="this.src='{$URL_IMAGES}/none_image.png'" style="width:100%; height:auto" />
				</div>
			</div>
		</div><!-- /file list -->
	</div>
</div>
{/if}