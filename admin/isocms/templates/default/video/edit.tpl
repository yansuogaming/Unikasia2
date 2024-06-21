<div class="breadcrumb">
    <strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}{if $type eq '_CHILD_SLIDE'}&type=_CHILD_SLIDE{/if}" title="{$mod}">{$mod|capitalize}</a>
    <a>&raquo;</a>
    <a href="{$curl}" title="{$act}">{if $pvalTable}{$core->get_Lang('edit')}#{$pvalTable}{else}{$core->get_Lang('add')}{/if}</a>
    <!-- Back-->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="page-title">
        <h2>
        	{if $pvalTable}{$core->get_Lang('edit')}{else}{$core->get_Lang('add')}{/if} {$core->get_Lang('video HomePage')} 
        	
        </h2>
        <p>{$core->get_Lang('systemmanagementvideo')}</p>
    </div>
    <div class="clearfix"><br /></div>
    <form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
    	<input type="hidden" name="iso-mod_page" value="{$mod_page}" />
        <input type="hidden" name="iso-act_page" value="{$act_page}" />
        <input type="hidden" name="iso-target_id" value="{$target_id}" />
        <div class="wrap">
			<div class="row-span">
				 <div class="fieldlabel"><strong>{$core->get_Lang('Video Title')}</strong> <span class="color_r">*</span></div>
				 <div class="fieldarea">
					<input class="text_32 full-width border_aaa bold required fontLarge title_capitalize" id="title" name="title" value="{$clsClassTable->getTitle($pvalTable)}" maxlength="255" type="text">
				 </div>
			</div>
			<div class="row-span">
				 <div class="fieldlabel"><strong>{$core->get_Lang('Country')}</strong> <span class="color_r">*</span></div>
				 <div class="fieldarea">
					<select class="slb" name="iso-country_id" id="slb_Country" style="font-size:14px;min-width:120px">
					{$clsCountry->makeSelectboxOption($coutry_id)}
					</select>
				</div>
			</div>
			<div class="row-span" style="margin-bottom:10px; padding-bottom:10px;">
				 <div class="fieldlabel"><strong>{$core->get_Lang('Youtube Video Url')}</strong> <span class="color_r">*</span></div>
				 <div class="fieldarea">
					<input class="text_32 full-width border_aaa" id="link" name="iso-link" value="{$clsClassTable->getLink($pvalTable)}" maxlength="255" type="text" placeholder="https://www.youtube.com/watch?v=rAVBCvs1fyQ"/>
				 </div>
			</div>
			<div class="row-span">
				<div class="fieldlabel"><strong>{$core->get_Lang('status')}</strong> <span class="color_r">*</span></div>
				<div class="fieldarea">
					<div class="checkbox-switch">
						{if $clsClassTable->getOneField("is_online",$pvalTable) eq 1}
						<input type="checkbox" checked value="1" name="is_online" class="input-checkbox" id="toolbar-active">
						{else}
						<input type="checkbox" value="1" name="is_online" class="input-checkbox" id="toolbar-active">
						{/if}
						<div class="checkbox-animate">
							<span class="checkbox-off">PRIVATE</span>
							<span class="checkbox-on">PUBLIC</span>
						</div>
					</div>	
					<span class="notice" id="prv_status" {if $clsClassTable->getOneField("is_online",$pvalTable) eq 1}style="display:none;"{/if}>PRIVATE: {$core->get_Lang('This article can only be seen via the link in the admin page')}.</span>
					<span class="notice" id="pub_status" {if $clsClassTable->getOneField("is_online",$pvalTable) eq 0}style="display:none;"{/if}>PUBLIC: {$core->get_Lang('This article is available online show normal status')}.</span>
				</div>       
			</div>
			<div class="row-span">
				 <div class="fieldlabel"><strong>{$core->get_Lang('Background Video')} <span class="small"></span></strong> <span class="color_r">*</span></div>
				 <div class="fieldarea">
					<div class="photobox photoBanner span50">
						{if $_isoman_use eq '1'}
							<img src="{$clsClassTable->getImage($oneTable.video_id,600,400)}" alt="{$core->get_Lang('images')}"  id="isoman_show_image" class="span100" />
							<input type="hidden" id="isoman_hidden_image" name="isoman_url_image" value="{$oneTable.image}" />
							<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="image" isoman_val="{$oneTable.image}" isoman_name="image" title="{$core->get_Lang('edit')}">
								<i class="iso-edit"></i>
							</a>
							{if $oneTable.image}
								<a pvalTable="{$pvalTable}" clsTable="Video" href="javascript:void()" title="{$core->get_Lang('delete')}" class="photobox_edit deleteItemImage" data-name_input="isoman_url_image" g="imgItem">X</a>
							{/if}
						{else}
							<img class="span100" src="{$oneTable.image}" height="156px" id="img_Video_image" />
							<input type="hidden" name="image_src" id="img_Video_hidden" />
							<input type="file" name="image" class="editInlineImageFile" id="img_Video_file" g="img_Video" style="display:none" />
							<a href="javascript:void()" title="{$core->get_Lang('change')}" class="photobox_edit editInlineImage" g="img_Video">
								<i class="iso-edit"></i>
							</a>
						{/if}
					</div>
				 </div>
			</div>
		</div>
        <div class="clearfix"><br /></div>
        <center>
            <div class="submit">
                {$saveBtn} {$saveList}
                <input value="Update" name="submit" type="hidden" />
            </div>
        </center>
    </form>
</div>