<form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
	<div class="box_main_step_content">
		<div class="row d-flex flex-wrap full-height">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="fill_data_box">
					<div class="form_title_and_table_code">
						{if $currentstep=='image'}
						{assign var= image_detail value='image_cruise'}
						{$core->getBlock('box_detail_image')}
						{elseif $currentstep=='basic'}
						<h3 class="title_box">{$core->get_Lang('Basic')}</h3>
						
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Name Of Cruise')} <span class="required_red">*</span>
							{assign var= name_cruise value='name_cruise'}
							{assign var= help_first value=$name_cruise}
							{if $CHECKHELP eq 1}
							<button data-key="{$name_cruise}" data-label="{$core->get_Lang('Name')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							{/if}
							</label>
							<input class="input_text_form input-title required" data-table_id="{$pvalTable}" name="title" value="{$clsClassTable->getTitle($pvalTable)}" maxlength="255" type="text" onClick="loadHelp(this)" />
							<div class="text_help" hidden="">{$clsConfiguration->getValue($name_cruise)|html_entity_decode}</div>
						</div>
						<div class="inpt_tour">
							{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'cat','default')}
								<label for="title">{$core->get_Lang('Cruise Class')} <span class="required_red">*</span>
								{assign var= class_cruise value='class_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$class_cruise}" data-label="{$core->get_Lang('Cruise Class')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
								</label>
								<div class="fieldarea">
									<select class="glSlBox border_aaa required" name="cruise_cat_id" style="width:250px" onClick="loadHelp(this)">
										{$clsCruiseCat->makeSelectboxOption($oneItem.cruise_cat_id,0,0,'--',0,0)} 
									</select>
									<div class="text_help" hidden="">{$clsConfiguration->getValue($class_cruise)|html_entity_decode}</div>
								</div>
							{/if}
						</div>
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Star')} <span class="required_red">*</span>
								{assign var= star_cruise value='star_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$star_cruise}" data-label="{$core->get_Lang('Star')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<div class="fieldarea" onClick="loadHelp(this)">
								<label class="radio inline version-xs text_normal"><input type="radio" name="star_number" {if $oneItem.star_number eq '0' or $pvalTable eq '0'}checked="checked"{/if} value="0"> {$core->get_Lang('Un Rated')}</label> 
								{section name=star start=1 loop=6 step=1}
								<label class="radio inline version-xs text_normal"><input type="radio" name="star_number" {if $oneItem.star_number eq $smarty.section.star.index}checked="checked"{/if} value="{$smarty.section.star.index}">{$smarty.section.star.index} {$core->get_Lang('star')}</label>
								{/section}
                           		<div class="text_help" hidden="">{$clsConfiguration->getValue($star_cruise)|html_entity_decode}</div>
                            </div>
						</div>
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('No. of Cabins')}
								{assign var= no_of_cabins_cruise value='no_of_cabins_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$no_of_cabins_cruise}" data-label="{$core->get_Lang('No. of Cabins')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
							</label>
							<div class="fieldarea">
								<input class="text_32 border_aaa" id="total_cabin" name="total_cabin" value="{$clsClassTable->getOneField('total_cabin',$pvalTable)}" maxlength="255" type="number" style="width:90px" min="0"  onClick="loadHelp(this)"/> {$core->get_Lang('cabin(s)')}	
                           		<div class="text_help" hidden="">{$clsConfiguration->getValue($no_of_cabins_cruise)|html_entity_decode}</div>							
                            </div>
						</div>
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Build')}
                           		{assign var= build_cruise value='build_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$build_cruise}" data-label="{$core->get_Lang('Build')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
                           </label>
                            <div class="fieldarea">
								<input class="text_32 border_aaa" id="build" name="iso-build" value="{$clsClassTable->getOneField('build',$pvalTable)}" placeholder="2002" maxlength="255" type="number" style="width:90px" onClick="loadHelp(this)" /> {$core->get_Lang('Ex.2017')}	
                           		<div class="text_help" hidden="">{$clsConfiguration->getValue($build_cruise)|html_entity_decode}</div>								
                            </div>
						</div>
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Material')}
                           		{assign var= material_cruise value='material_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$material_cruise}" data-label="{$core->get_Lang('Material')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
                           </label>
                            <div class="fieldarea">
								<input class="text_32 border_aaa span50" id="material" name="iso-material" value="{$clsClassTable->getOneField('material',$pvalTable)}" placeholder="Wooden Junk" maxlength="255" type="text" onClick="loadHelp(this)"/>
                           		<div class="text_help" hidden="">{$clsConfiguration->getValue($material_cruise)|html_entity_decode}</div>	
                            </div>
						</div>
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('Departure Port')}
                           		{assign var= departure_port_cruise value='departure_port_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$departure_port_cruise}" data-label="{$core->get_Lang('Departure Port')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
                           </label>
                            <div class="fieldarea">
								<input class="text_32 border_aaa span50" id="departure_port" name="iso-departure_port" value="{$clsClassTable->getOneField('departure_port',$pvalTable)}" placeholder="{$core->get_Lang('Block 25, Tuan Chau Island, Halong, Vietnam')}"  type="text" onClick="loadHelp(this)"/>
								<div class="text_help" hidden="">{$clsConfiguration->getValue($departure_port_cruise)|html_entity_decode}</div>	
								
                            </div>
						</div>
						{if $clsISO->getCheckActiveModulePackage($package_id,'cruise','property','default','TravelAs')}
							<div class="inpt_tour">
								<label for="title">{$core->get_Lang('Great for group')}
									{assign var= great_for_group_cruise value='great_for_group_cruise'}
									{if $CHECKHELP eq 1}
									<button data-key="{$great_for_group_cruise}" data-label="{$core->get_Lang('Great for group')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									{/if}
								</label>
								<div class="fieldarea" onClick="loadHelp(this)">
									{section name=i loop=$lstCruiseTravel}
									<label class="inline mb5 text_normal" style="display:inline-block"><input type="checkbox" {if $clsISO->checkInArray($oneItem.listTravelAs,$lstCruiseTravel[i].cruise_property_id)}checked="checked"{/if} name="listTravelAs[]" value="{$lstCruiseTravel[i].cruise_property_id}" style="height:16px"> &nbsp;{$clsCruiseProperty->getTitle($lstCruiseTravel[i].cruise_property_id)}</label> <br/>
									{/section}
									<div class="text_help" hidden="">{$clsConfiguration->getValue($great_for_group_cruise)|html_entity_decode}</div>	
								</div>
							</div>
						{/if} 
						<div class="inpt_tour">
							<label for="title">{$core->get_Lang('reviewcruise')}
                           		{assign var= review_cruise value='review_cruise'}
								{if $CHECKHELP eq 1}
								<button data-key="{$review_cruise}" data-label="{$core->get_Lang('reviewcruise')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
                           </label>
                            <div class="fieldarea" onClick="loadHelp(this)">
                            	<div class="text_help" hidden="">{$clsConfiguration->getValue($review_cruise)|html_entity_decode}</div>
								<div style="width: 100%; margin-right: 20px; float: left;">
									<div class="bold" style="margin:0 0 1.33em">{$core->get_Lang('Score breakdown')}</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Cruise quality')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="cruise_quality" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'cruise_quality'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Food/Drink')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="food_drink" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'food_drink'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Cabin quality')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="cabin_quality" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'cabin_quality'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Staff quality')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="staff_quality" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'staff_quality'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Entertainment')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="entertainment" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'entertainment'))}"  maxlength="255" type="text" /> %</div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Worthy')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="worth_the_money" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'worth_the_money'))}"  maxlength="255" type="text" /> %</div>
									</div>
								</div>
								<div style="width: 40%; float: left; display:none;">
									<div class="bold" style="margin:0 0 1.33em">{$core->get_Lang('Score breakdown')}</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Excellent')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="excellent" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'excellent'))}"  maxlength="255" type="text" /></div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Very good')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="very_good" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'very_good'))}"  maxlength="255" type="text" /></div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Good')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="good" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'good'))}"  maxlength="255" type="text" /></div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Average')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="average" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'average'))}"  maxlength="255" type="text" /></div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Poor')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="poor" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'poor'))}"  maxlength="255" type="text" /></div>
									</div>
									<div class="row-span"> 
										<div class="fieldlabel span30">{$core->get_Lang('Terrible')}</div> 
										<div class="fieldarea span50 fl"><input class="text full span90 fontLarge price-In" name="terrible" value="{$clsISO->formatNumberToEasyRead($clsReviewsCruise->getValueByField($pvalTable,'terrible'))}"  maxlength="255" type="text" /></div>
									</div>
								</div>
							</div>
						</div>
						{elseif $currentstep=='cabin'}
						<h3 class="title_box mb0">{$core->get_Lang('Cabin')}
							{assign var= cabin_cruise value='cabin_cruise'}
							{assign var= help_first value=$cabin_cruise}
							{if $CHECKHELP eq 1}
							<button data-key="{$cabin_cruise}" data-label="{$core->get_Lang('Cabin')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							{/if}
						</h3>
							<p class="intro_box mb40"></p>
							<div class="form_option_tour">
								<div class="inpt_tour">
									<div class="hastable">
									<table class="tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th class="gridheader hiden767" style="width:60px"><strong>{$core->get_Lang('ID')}</strong></th>
												<th class="gridheader" style="width:70px"><strong>{$core->get_Lang('images')}</strong></th>
												<th class="gridheader name_responsive name_responsive4" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:80px"><strong>{$core->get_Lang('cabinsize')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:120px"><strong>{$core->get_Lang('bedsize')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:100px"><strong>{$core->get_Lang('extrabed')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:100px"><strong>{$core->get_Lang('status')}</strong></th>
												<th class="gridheader hiden_responsive" style="text-align:center; width:70px"></th>
											</tr>
										</thead>
										<tbody id="SortAble">
											{section name=i loop=$listCabin}
											<tr style="cursor:move" class="{cycle values="row1,row2"}" id="order_cabin-{$listCabin[i].cruise_cabin_id}">
												<td class="index hiden767">{$listCabin[i].cruise_cabin_id}</td>
												<td class="text-left" style="width:70px;padding-left:8px !important"><img src="{$clsCruiseCabin->getImage($listCabin[i].cruise_cabin_id,60,40)}" alt="{$clsCruiseCabin->getTitle($listCabin[i].cruise_cabin_id)}"  width="60px" height="40px"/></td>
												<td class="text-left name_service">
													<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_cabin&cruise_cabin_id={$core->encryptID($listCabin[i].cruise_cabin_id)}&cruise_id={$pvalTable}"><strong style="font-size:15px;">{$clsCruiseCabin->getTitle($listCabin[i].cruise_cabin_id)}</strong></a>
													{if $listCabin[i].is_trash eq '1'}<span style="color:#ccc; float:right">[{$core->get_Lang('In Trash')}]</span>{/if}
													<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
												</td>
												<td class="block_responsive border_top_responsive" data-title="{$core->get_Lang('cabinsize')}" style="text-align:center"><strong>{$clsCruiseCabin->getCabinSize($listCabin[i].cruise_cabin_id)}</strong></td>
												<td class="block_responsive"  data-title="{$core->get_Lang('bedsize')}" style="text-align:center"><strong>{$clsCruiseCabin->getBedOption($listCabin[i].cruise_cabin_id)}</strong></td>
												<td class="block_responsive"  data-title="{$core->get_Lang('extrabed')}" style="text-align:center"><strong>{$clsCruiseCabin->getExtraBed($listCabin[i].cruise_cabin_id)}</strong></td>
												<td class="block_responsive"  data-title="{$core->get_Lang('status')}" style="text-align:center">
													<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseCabin" pkey="cruise_cabin_id" sourse_id="{$listCabin[i].cruise_cabin_id}" rel="{$clsCruiseCabin->getOneField('is_online',$listCabin[i].cruise_cabin_id)}" title="{$core->get_Lang('Click to change status')}">
													{if $clsCruiseCabin->getOneField('is_online',$listCabin[i].cruise_cabin_id) eq '1'}
													<i class="fa fa-check-circle green"></i>
													{else}
													<i class="fa fa-minus-circle red"></i>
													{/if}
													</a>
												</td>
												<td class="block_responsive" data-title="{$core->get_Lang('func')}" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
													<div class="btn-group-ico">
														<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_cabin&cruise_cabin_id={$core->encryptID($listCabin[i].cruise_cabin_id)}&cruise_id={$pvalTable}"><i class="ico ico-edit"></i></a>
														<a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod=cruise&act=delete_cruise_cabin&cruise_cabin_id={$core->encryptID($listCabin[i].cruise_cabin_id)}&cruise_id={$pvalTable}"><i class="ico ico-remove"></i></a>
													</div>
												</td>
											</tr>
										{/section}
										</tbody>
									</table>
									</div>
									<a href="{$PCMS_URL}/?mod=cruise&act=edit_cabin&cruise_id={$pvalTable}" class="btn_additinerary" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>
								</div>								
							</div>							
						{elseif $currentstep=='itinerary'}
							<h3 class="title_box mb0">{$core->get_Lang('itinerary')}
							{assign var= itinerary_cruise value='itinerary_cruise'}
							{assign var= help_first value=$itinerary_cruise}
							{if $CHECKHELP eq 1}
							<button data-key="{$itinerary_cruise}" data-label="{$core->get_Lang('itinerary')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							{/if}
							</h3>
							<p class="intro_box mb40">{$core->get_Lang('infoaddday')}</p>
							<div class="form_option_tour">
								<div class="inpt_tour">
									<div class="hastable">
										<table class="tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th class="gridheader name_responsive name_responsive1" style="text-align:left"><strong>{$core->get_Lang('Days')}</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:60px"><strong>{$core->get_Lang('status')}</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:70px"></th>
												</tr>
											</thead>
											<tbody id="SortAble">
												{section name=i loop=$listCruiseItinerary}
												<tr style="cursor:move" class="{cycle values="row1,row2"}" id="order_{$listCruiseItinerary[i].cruise_itinerary_id}">
													<td class="text-left name_service name_itineerary">
														<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_itinerary&cruise_itinerary_id={$core->encryptID($listCruiseItinerary[i].cruise_itinerary_id)}&cruise_id={$pvalTable}&fromid={$act}"><strong style="font-size:15px;">{$clsCruiseItinerary->getNumberDay($listCruiseItinerary[i].cruise_itinerary_id)}</strong></a>
														{if $listCruiseItinerary[i].is_trash eq '1'}<span style="color:#ccc; float:right">[{$core->get_Lang('In Trash')}]</span>{/if}
														<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
													</td>
													<td class="block_responsive" data-title="{$core->get_Lang('status')}" style="text-align:center">
														<a href="javascript:void(0);" class="SiteClickPublic" clsTable="CruiseItinerary" pkey="cruise_itinerary_id" sourse_id="{$listCruiseItinerary[i].cruise_itinerary_id}" rel="{$clsCruiseItinerary->getOneField('is_online',$listCruiseItinerary[i].cruise_itinerary_id)}" title="{$core->get_Lang('Click to change status')}">
															{if $clsCruiseItinerary->getOneField('is_online',$listCruiseItinerary[i].cruise_itinerary_id) eq '1'}
															<i class="fa fa-check-circle green"></i>
															{else}
															<i class="fa fa-minus-circle red"></i>
															{/if}
														</a>
													</td>
													<td class="block_responsive" align="center" data-title="{$core->get_Lang('func')}" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
														<div class="btn-group-ico">
															<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_itinerary&cruise_itinerary_id={$core->encryptID($listCruiseItinerary[i].cruise_itinerary_id)}&cruise_id={$pvalTable}"><i class="ico ico-edit"></i></a>
															<a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod=cruise&act=delete_cruise_itinerary&cruise_itinerary_id={$core->encryptID($listCruiseItinerary[i].cruise_itinerary_id)}&cruise_id={$pvalTable}"><i class="ico ico-remove"></i></a>
														</div>
													</td>
												</tr>
											{/section}
											</tbody>
										</table>
									</div>
									<a href="{$PCMS_URL}/index.php?mod=cruise&act=edit_itinerary&cruise_id={$pvalTable}" class="btn_additinerary" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>
                                    
                                    {literal}
                                    <script type="text/javascript">
                                        $("#SortAble").sortable({
                                            opacity: 0.8,
                                            cursor: 'move',
                                            start: function(){
                                                vietiso_loading(1);
                                            },
                                            stop: function(){
                                                vietiso_loading(0);
                                            },
                                            update: function(){
                                                var recordPerPage = 1000;
                                                var currentPage = 1;
                                                var order = $(this).sortable("serialize")+'&update=update'+'&recordPerPage='+recordPerPage+'&currentPage='+currentPage;
                                                $.post(path_ajax_script+"/index.php?mod=cruise&act=ajUpdPosSortItineraryCruise", order,

                                                function(html){
                                                    vietiso_loading(0);
                                                    location.href = REQUEST_URI;
                                                });
                                            }
                                        });
                                    </script>
                                    {/literal}
								</div>
							</div>						
						{elseif $currentstep=='faservice'}
							
                            {if $clsISO->getCheckActiveModulePackage($package_id,'cruise','property','default','CruiseFacilities')}
								<div class="service_left" style="margin-top:0px">
									<h3 class="mb10">{$core->get_Lang('Cruise Facilities')}
									{assign var= facilities_cruise value='facilities_cruise'}
									{assign var= help_first value=$facilities_cruise}
									{if $CHECKHELP eq 1}
									<button data-key="{$facilities_cruise}" data-label="{$core->get_Lang('Cruise Facilities')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									{/if}
									</h3>
								</div>
								<div class="service_right ml10">
                                    {if $lstCruiseFa}
									<div class="checkall" style="margin-bottom:10px">
										{$core->get_Lang('Check/Uncheck All')} <input type="checkbox" rel="fa_ge" id="all_check" style="height:16px">
									</div>
									<ul class="list_style_none margin_0" id="list-general" onClick="loadHelp(this)">
										{section name=i loop=$lstCruiseFa}
										<li><label><input class="fa_ge" type="checkbox" {if $clsISO->checkInArray($oneItem.listCruiseFacilities,$lstCruiseFa[i].cruise_property_id)}checked="checked"{/if} name="listCruiseFacilities[]" value="{$lstCruiseFa[i].cruise_property_id}" style="height:16px"> {$clsCruiseProperty->getTitle($lstCruiseFa[i].cruise_property_id)}</label></li>
										{/section}
										<li><a class="color_f00" href="{$PCMS_URL}/?mod=cruise&act=property&type=CruiseFacilities" title="{$core->get_Lang('Add New')}"><i class="fa fa-plus-circle" aria-hidden="true"></i> <label>{$core->get_Lang('Add New')}</label></a></li>
									</ul>
                                    {/if}
									<div class="text_help" hidden="">{$clsConfiguration->getValue($facilities_cruise)|html_entity_decode}</div>
								</div>
								<div class="clearfix mb20"></div>
							{/if}
							
                            {if $clsISO->getCheckActiveModulePackage($package_id,'cruise','property','default','CruiseServices')}
								<div class="service_left">
									<h3 class="mb10">{$core->get_Lang('Cruise Services')}
									{assign var= services_cruise value='services_cruise'}
									{if $CHECKHELP eq 1}
									<button data-key="{$services_cruise}" data-label="{$core->get_Lang('Cruise Services')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									{/if}
									</h3>
								</div>
								<div class="service_right ml10">
                                    {if $lstCruiseService}
									<div class="checkall" style="margin-bottom:10px">
										{$core->get_Lang('Check/Uncheck All')} <input type="checkbox" rel="fa_cs" id="all_check" style="height:16px">
									</div>
									<ul class="list_style_none margin_0" id="list-general" onClick="loadHelp(this)">
										{section name=i loop=$lstCruiseService}
										<li><label><input class="fa_cs" type="checkbox" {if $clsISO->checkInArray($oneItem.listCruiseServices,$lstCruiseService[i].cruise_property_id)}checked="checked"{/if} name="listCruiseServices[]" value="{$lstCruiseService[i].cruise_property_id}" style="height:16px"> {$clsCruiseProperty->getTitle($lstCruiseService[i].cruise_property_id)}</label></li>
										{/section}
										<li><a class="color_f00" href="{$PCMS_URL}/?mod=cruise&act=property&type=CruiseServices" title="{$core->get_Lang('Add New')}"><i class="fa fa-plus-circle" aria-hidden="true"></i> <label>{$core->get_Lang('Add New')}</label></a></li>
									</ul>
                                    {/if}
									<div class="text_help" hidden="">{$clsConfiguration->getValue($services_cruise)|html_entity_decode}</div>
								</div>
								<div class="clearfix mb20"></div>
							{/if}
                            {if $clsISO->getCheckActiveModulePackage($package_id,'cruise','property','default','CruiseFaActivities')}
							
								<div class="service_left">
									<h3 class="mb10">{$core->get_Lang('Activities on Board')}
									{assign var= activities_on_board_cruise value='activities_on_board_cruise'}
									{if $CHECKHELP eq 1}
									<button data-key="{$activities_on_board_cruise}" data-label="{$core->get_Lang('Activities on Board')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
									{/if}
									</h3>
								</div>
								<div class="service_right ml10">
                                     {if $lstCruiseFaActivities}
									<div class="checkall" style="margin-bottom:10px">
										{$core->get_Lang('Check/Uncheck All')} <input type="checkbox" rel="fa_ac" id="all_check" style="height:16px">
									</div>
                                   
									<ul class="list_style_none margin_0" id="list-general" onClick="loadHelp(this)">
										{section name=i loop=$lstCruiseFaActivities}
										<li><label><input class="fa_ac" type="checkbox" {if $clsISO->checkInArray($oneItem.listCruiseFaActivities,$lstCruiseFaActivities[i].cruise_property_id)}checked="checked"{/if} name="listCruiseFaActivities[]" value="{$lstCruiseFaActivities[i].cruise_property_id}" style="height:16px"> {$clsCruiseProperty->getTitle($lstCruiseFaActivities[i].cruise_property_id)}</label></li>
										{/section}
										<li><a class="color_f00" href="{$PCMS_URL}/?mod=cruise&act=property&type=CruiseFaActivities" title="{$core->get_Lang('Add New')}"><i class="fa fa-plus-circle" aria-hidden="true"></i> <label>{$core->get_Lang('Add New')}</label></a></li>
									</ul>
                                    {/if}
									<div class="text_help" hidden="">{$clsConfiguration->getValue($activities_on_board_cruise)|html_entity_decode}</div>
								</div>
							{/if}
						{elseif $currentstep=='libraryimage'}
							{if $clsISO->getCheckActiveModulePackage($package_id,$mod,'cruise_photo_gallery','customize')}
						   		{$core->getBlock('box_detail_cruise_image-gallery')}
							{/if}
						{elseif $currentstep=='video'}
							<h3 class="title_box mb0">{$core->get_Lang('Video')}
							{assign var= video_cruise value='video_cruise'}
							{assign var= help_first value=$video_cruise}
							{if $CHECKHELP eq 1}
							<button data-key="{$video_cruise}" data-label="{$core->get_Lang('Video')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
							{/if}
							</h3>
							<p class="intro_box mb40"></p>
							<div class="form_option_tour">
								<div class="inpt_tour">
									<div class="hastable">
										{if !$listCruiseVideo}
										<div class="contingency_table" style="display: none;">
											<p class="title_contingency_table">Contingency table</p> 
											<a style="vertical-align:middle" href="{$PCMS_URL}/index.php?mod=cruise&act=edit_cruise_video&cruise_id={$pvalTable}" id="clickToAddItinerary_contingency" class="iso-button-primary fl">+ {$core->get_Lang('add new')}</a>
											<table class="tbl-grid table-striped table_responsive" cellspacing="0" width="100%">
												<thead>
													<tr>
														<th class="gridheader" style="width:60px;text-align:center; "><strong>{$core->get_Lang('ID')}</strong></th>
														<th class="gridheader name_responsive name_responsive1" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></th>
														<th class="gridheader hiden_responsive" style="text-align:center; width:70px"></th>
													</tr>
												</thead>
												<tbody id="tblTourItinerary_contingency" class="ui-sortable" style=""> 
													<tr class="ui-sortable-handle" style="">
														<td colspan="12">
															<div class="message" style="text-align:center">Không tìm thấy thông tin nào, vui lòng <a href="{$PCMS_URL}/index.php?mod=cruise&act=edit_itinerary&cruise_id={$pvalTable}" class="btn_additinerary" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										{else}
										<table class="full-width tbl-grid table_responsive" cellspacing="0">
											<thead>
												<tr>
													<th class="gridheader hiden767" style="width:60px;text-align:center; "><strong>{$core->get_Lang('ID')}</strong></th>
													<th class="gridheader name_responsive name_responsive1" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></th>
													<th class="gridheader hiden_responsive" style="text-align:center; width:70px"></th>
												</tr>
											</thead>
											<tbody id="SortAble">
												{section name=i loop=$listCruiseVideo}
												<tr style="cursor:move" class="{if $smarty.section.i.index%2 eq 0}row1{else}row2{/if}" id="order-{$listCruiseVideo[i].cruise_video_id}">
													<td class="index hiden767">{$listCruiseVideo[i].cruise_video_id}</td>
													<td class="text-left name_service name_itineerary">
														<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_cruise_video&cruise_video_id={$listCruiseVideo[i].cruise_video_id}&cruise_id={$pvalTable}">
														   <strong style="font-size:16px;">{$clsCruiseVideo->getTitle($listCruiseVideo[i].cruise_video_id)}</strong>
														</a>
														{if $listCruiseVideo[i].is_trash eq '1'}<span style="color:#ccc;">[In Trash]</span>{/if}
														<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
													</td>
													<td class="block_responsive" data-title="{$core->get_Lang('func')}" style="vertical-align: middle; width: 40px; text-align: right; white-space: nowrap;">
														<div class="btn-group-ico">
															<a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/?mod=cruise&act=edit_cruise_video&cruise_video_id={$core->encryptID($listCruiseVideo[i].cruise_video_id)}&cruise_id={$pvalTable}"><i class="ico ico-edit"></i></a>
															<a title="{$core->get_Lang('delete')}" class="confirm_delete" href="{$PCMS_URL}/?mod=cruise&act=delete_cruise_video&cruise_video_id={$core->encryptID($listCruiseVideo[i].cruise_video_id)}&cruise_id={$pvalTable}"><i class="ico ico-remove"></i></a>
														</div>
													</td>
												</tr>
											{/section}
											</tbody>
											
										</table>
										{/if}
										<a href="{$PCMS_URL}/index.php?mod=cruise&act=edit_cruise_video&cruise_id={$pvalTable}" class="btn_additinerary" title="{$core->get_Lang('add new')}">+ {$core->get_Lang('add new')}</a>
                                        
                                        
                                        
                                        
                                        
									</div>
								</div>
							</div>	
						{elseif $currentstep=='seo'}
							{$core->getBlock('box_detail_cruise_seotool')}
						{elseif $currentstep=='about'}
							<div class="service_left" style="margin-top:0px">
								<h3 class="mb10">{$core->get_Lang('About')}
								{assign var= about_cruise value='about_cruise'}
								{assign var= help_first value=$about_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$about_cruise}" data-label="{$core->get_Lang('About')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" name="iso-about" class="textarea_intro_editor" data-column="iso-{$currentstep}" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.about}</textarea>
							</div>
						{elseif $currentstep=='thingAbout'}
							<div class="service_left" style="margin-top:0px">
								<h3 class="mb10">{$core->get_Lang('Things about')}
								{assign var= thing_about_cruise value='thing_about_cruise'}
								{assign var= help_first value=$thing_about_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$thing_about_cruise}" data-label="{$core->get_Lang('Things about')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}</h3>
							</div>
							<div class="inpt_tour">
								{section name=i loop=$lstThingAbout}
									<label class="col-sm-6 col-md-6 inline mb5" style="font-size:0.9em;display:inline-block"><input type="checkbox" {if $clsISO->checkInArray($clsISO->makeArrayBySlash($oneItem.listThingAbout),$lstThingAbout[i].cruise_property_id)}checked="checked"{/if} name="listThingAbout[]" value="{$lstThingAbout[i].cruise_property_id}" style="height:16px"> &nbsp;{$clsCruiseProperty->getTitle($lstThingAbout[i].cruise_property_id)}</label>
								{/section}
							</div>
						{elseif $currentstep=='importantNotes'}
							<div class="service_left" style="margin-top:0px">
								<h3 class="mb10">{$core->get_Lang('Important Notes')}
								{assign var= important_notes_cruise value='important_notes_cruise'}
								{assign var= help_first value=$important_notes_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$important_notes_cruise}" data-label="{$core->get_Lang('Important Notes')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" name="iso-important_notes" class="textarea_intro_editor" data-column="iso-important_notes" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.important_notes}</textarea>
							</div>
						{elseif $currentstep=='inclusions'}
							<div class="service_left" style="margin-top:0px">
								<h3 class="mb10">{$core->get_Lang('Inclusions')}
								{assign var= inclusions_cruise value='inclusions_cruise'}
								{assign var= help_first value=$inclusions_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$inclusions_cruise}" data-label="{$core->get_Lang('Inclusions')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" name="iso-inclusion" class="textarea_intro_editor" data-column="iso-inclusion" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.inclusion}</textarea>
							</div>
						{elseif $currentstep=='exclusions'}
							<div class="service_left" style="margin-top:0px">
								<h3 class="mb10">{$core->get_Lang('Exclusions')}
								{assign var= exclusions_cruise value='exclusions_cruise'}
								{assign var= help_first value=$exclusions_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$exclusions_cruise}" data-label="{$core->get_Lang('Exclusions')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" name="iso-exclusion" class="textarea_intro_editor" data-column="iso-exclusion" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.exclusion}</textarea>
							</div>	
						{elseif $currentstep=='cruisePolicy'}
							<div class="service_left" style="margin-top:0px">
								<h3 class="mb10">{$core->get_Lang('Cruise Policy')}
								{assign var= cruise_policy_cruise value='cruise_policy_cruise'}
								{assign var= help_first value=$cruise_policy_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$cruise_policy_cruise}" data-label="{$core->get_Lang('Cruise Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" name="iso-cruise_policy" class="textarea_intro_editor" data-column="iso-cruise_policy" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.cruise_policy}</textarea>
							</div>	
						{elseif $currentstep=='bookingPolicy'}
							<div class="service_left" style="margin-top:0px">
								<h3 class="mb10">{$core->get_Lang('Booking Policy')}
								{assign var= booking_policy_cruise value='booking_policy_cruise'}
								{assign var= help_first value=$booking_policy_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$booking_policy_cruise}" data-label="{$core->get_Lang('Booking Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" name="iso-booking_policy" class="textarea_intro_editor" data-column="iso-booking_policy" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.booking_policy}</textarea>
							</div>
						{elseif $currentstep=='childPolicy'}
							<div class="service_left" style="margin-top:0px">
								<h3 class="mb10">{$core->get_Lang('Child Policy')}
								{assign var= child_policy_cruise value='child_policy_cruise'}
								{assign var= help_first value=$child_policy_cruise}
								{if $CHECKHELP eq 1}
								<button data-key="{$child_policy_cruise}" data-label="{$core->get_Lang('Child Policy')}" type="button" title="Thêm mô tả" onclick="open_texthelp(this, event)" class="btn btn-xs btn-default"><i class="fa fa-plus-circle"></i></button>
								{/if}
								</h3>
							</div>
							<div class="inpt_tour">
								<textarea style="width:100%" table_id="{$pvalTable}" name="iso-child_policy" class="textarea_intro_editor" data-column="iso-child_policy" id="textarea_intro_editor_overview_{$now}" cols="255" rows="2">{$oneItem.child_policy}</textarea>
							</div>					
						{/if}
						<div class="btn_save_titile_table_code mt30">
							<a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$arrStep[$step].key}" data-prevstep="{$prevstep}" class="back_step js_save_back">{$core->get_Lang('Back')}</a>

							<a data-table_id="{$pvalTable}" data-panel="{$arrStep[$step].panel}" data-currentstep="{$currentstep}" data-next_step="{$nextstep}" class="js_save_continue">{$core->get_Lang('Save &amp; Continue')}</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col_instruction">
				<div class="instruction_fill_data_box">
					<p class="title_box"><i class="fa fa-question-circle text-red " aria-hidden="true"></i> {$core->get_Lang('Instructions')}</p>
					<div class="content_box">{$clsConfiguration->getValue($help_first)|html_entity_decode}</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	var list_check_target = {$list_check_target};
	var pvalTable_ovv = {$pvalTable};
</script>
{literal}
<script>
	if($('.textarea_intro_editor').length > 0){
		$('.textarea_intro_editor').each(function(){
			var $_this = $(this);
			var $editorID = $_this.attr('id');
			$('#'+$editorID).isoTextArea();
		});
	}
	$('.toggle-row').click(function(){
		$(this).closest('tr').toggleClass('open_tr');
	});
	$.each( list_check_target, function( i, val ) {
		if(val.status == 1){
			$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_success");
		}else{
			$('#step_'+val.key).closest('li').removeAttr('class').addClass("check_caution");
		}
	});
</script>
{/literal}