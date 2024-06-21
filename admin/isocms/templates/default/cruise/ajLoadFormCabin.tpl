<form action="" method="post"  enctype="multipart/form-data" class="validate-form" id="frm_addCabin">
	<div class="box_head_cabin">
		<a href="javscript:void(0);" class="back_list btn_back_list_cabin"><i class="fa fa-angle-left"></i></a>
		<p class="title_add_cabin" data-title_add_cabin="{if $cabin_id}{$core->get_Lang('Edit cabin')}{else}{$core->get_Lang('Add new cabin')}{/if}">{if $cabin_id}{$oneCabin.title}{else}{$core->get_Lang('Add new cabin')}{/if}</p>
	</div>
	<div class="box_body_cabin">
		<div class="row">
			<div class="col-md-9">
				<div class="inpt_tour">
					<label for="title">{$core->get_Lang('Name Of Cabin')} <span class="required_red">*</span></label>
					<input class="input_text_form input-title required" id="title_cabin" name="title" value="{$oneCabin.title}" maxlength="255" type="text" />
				</div>
				<div class="form-group inpt_tour">
					<label for="title">{$core->get_Lang('BedType')} <span class="required_red">*</span></label>
					<div class="admin-toolbar-action">
						<a href="{$PCMS_URL}/?mod=cruise&act=property&type=GroupSize" target="_blank" style="text-decoration: underline">{$core->get_Lang('Change')}</a>
					</div>
					<div>
						<select name="list_group_size[]" id="list_group_size" class="required full-width chosen-select" multiple="multiple" cruise_type="{$oneCruise.cruise_type}">
							{$clsCruiseProperty->getSelectByProperty2('GroupSize',$oneCabin.list_group_size,1,$oneCruise.cruise_type)}
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="d-flex flex-wrap justify-content-center">
					<div class="photobox image">
						{if $_isoman_use eq '1'}
							<img src="{$oneCabin.image}" alt="{$core->get_Lang('images')}" id="isoman_show_image" />
							<input type="hidden" id="isoman_hidden_image" name="isoman_url_image" value="{$oneCabin.image}">
							<a href="javascript:void()" class="photobox_edit ajOpenDialog" isoman_for_id="image" isoman_val="{$oneCabin.image}" isoman_name="image" title="{$core->get_Lang('edit')}"><i class="iso-edit"></i></a>
							{if $oneCabin.image}
								<a pvalTable="{$pvalTable}" clsTable="CruiseCabin" href="javascript:void()" title="{$core->get_Lang('delete')}" class="photobox_edit deleteItemImage" data-name_input="isoman_url_image" g="imgItem">X</a>
							{/if}
						{else}
							<img src="{$oneCabin.image}" alt="{$core->get_Lang('noimages')}" id="imgTour_image" />
							<input type="hidden" name="image_src" value="{$oneCabin.image}" class="hidden_src" id="imgTour_hidden" />
							<a href="javascript:void()" title="{$core->get_Lang('change')}" class="photobox_edit editInlineImage" g="imgTour">
								<i class="iso-edit"></i>
							</a> 
							<input type="file" style="display:none" id="imgTour_file" g="imgTour" class="editInlineImageFile" name="image" />
						{/if}
					</div>
					<div class="wrap mt10 boxShowImages">
						<p class="text-center"><strong>{$core->get_Lang('Image Size')} (WxH=204x134)</strong></p>
						<p class="text-center">
							<label>
								<input type="radio" class="margin_0" name="is_show_image" value="0" {if $oneCabin.is_show_image eq 0}checked{/if} /> OFF
							</label>
							<label>
								<input type="radio" class="margin_0" name="is_show_image" value="1" {if $oneCabin.is_show_image eq 1}checked{/if} /> ON
							</label>
						</p>
					</div>
				</div>
			</div>
		</div>				

		<div class="box_info_cabin">
			<ul class="nav_tab_reviews nav nav-tabs" id="myTab" role="tablist">
				<li class="active"><a data-toggle="tab" href="#info">{$core->get_Lang('Info cabin')}</a></li>
				<li><a data-toggle="tab" href="#easy_cancel">{$core->get_Lang('Easy Cancel')}</a></li>
				<li><a data-toggle="tab" href="#CabinFacilities">{$core->get_Lang('Cabin Facilities')}</a></li>
			</ul>
		</div>
		<div class="tab-content" id="myTabContent">
			<div id="info" class="tab-pane fade in active">
				<div class="row">
					<div class="col-md-3">
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Cabin size')}</label>
							<div class="fieldarea span100 relative">
								<input class="text full fontLarge price-In" name="cabin_size" value="{$oneCabin.cabin_size}" maxlength="255" type="text"><span class="percent">m<sup>2</sup></span>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Quantity')}</label>
							<div class="fieldarea span100">
								<input class="text full fontLarge price-In" name="number_cabin" value="{$oneCabin.number_cabin}" maxlength="255" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Floor')}</label>
							<div class="fieldarea span100">
								<input class="text full fontLarge price-In" name="floor" value="{$oneCabin.floor}" maxlength="255" type="text">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Bed')}</label>
							<div class="fieldarea span100 relative">
								<input class="text full fontLarge" name="bed_size" value="{$oneCabin.bed_size}" maxlength="255" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Ex.Bed')}</label>
							<div class="fieldarea span100">
								<select class="glSlBox" name="extra_bed" style="width:120px"> 
									<option value="0" {if $oneCabin.extra_bed==0}selected=selected{/if}>{$core->get_Lang('No')}</option> 
									<option value="1" {if $oneCabin.extra_bed==1}selected=selected{/if}>{$core->get_Lang('Yes')}</option> 
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="inpt_tour">
					<label for="title">{$core->get_Lang('Short text')}</label>
					<div class="fieldarea span100">
						<textarea style="width:100%" table_id="{$pvalTable}" name="intro" class="textarea_intro_editor" data-column="intro" id="textarea_intro_cabin_editor_overview_{$now}" cols="255" rows="2">{$oneCabin.intro}</textarea>
					</div>
				</div>
			</div>
			<div id="easy_cancel" class="tab-pane fade">
				<div class="inpt_tour">
					<div class="fieldarea span100">
						<textarea style="width:100%" table_id="{$pvalTable}" name="easy_cancel" class="textarea_intro_editor" data-column="easy_cancel" id="textarea_easy_cancel_editor_overview_{$now}" cols="255" rows="2">{$oneCabin.easy_cancel}</textarea>
					</div>
				</div>
			</div>
			<div id="CabinFacilities" class="tab-pane fade">
				<div class="admin-toolbar-action d-flex justify-content-between">
					<a href="{$PCMS_URL}/?mod=cruise&act=property&type=CabinFacilities" target="_blank" style="text-decoration: underline">{$core->get_Lang('Change')}</a>
					<div class="checkall" style="margin-bottom:10px">
					<label for="all_check">Check/Uncheck All</label> <input type="checkbox" rel="CheckCabinFacilities" id="all_check" style="height:16px"> </div>
				</div>
				<div class="row">
					{section name=i loop=$listCabinFacilities}
						{assign var=title_cabin_facilities value=$clsCruiseProperty->getTitle($listCabinFacilities[i].cruise_property_id)}
						<div class="col-md-4" {$oneCabin.list_cabin_facilities}>
							<label class="lbl_checkbox_cabin_facilities">
								<input class="chkitem CheckCabinFacilities" type="checkbox" name="listCabinFacilities[]" value="{$listCabinFacilities[i].cruise_property_id}" {if $clsISO->checkContainer($oneCabin.list_cabin_facilities,$listCabinFacilities[i].cruise_property_id)} checked="checked"{/if}>&nbsp; 
								<img src="{$clsCruiseProperty->getImage($listCabinFacilities[i].cruise_property_id,20,20)}" onerror="this.src='{$URL_IMAGES}/none_image.png'" width="20" height="20" alt="{$title_cabin_facilities}" class="img_cabin_facilities mr-2"> {$title_cabin_facilities}
							</label>
						</div>							
					{/section}

				</div>

			</div>
		</div>
	</div>
	<div class="box_footer_cabin">
		<button type="button" class="btn_back_cabin">{$core->get_Lang('Back')}</button>
		<input type="hidden" name="cabin_id" value="{$cabin_id}">
		<button id="submit_form" type="submit" class="btn_save_cruise_new btn_save_cabin">{$core->get_Lang('Continute')}</button>
	</div>
</form>
