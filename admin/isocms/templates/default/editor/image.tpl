<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Images ISOCMS Dialog</title>
    <script type="text/javascript" src="{$PCMS_URL}/editor/jquery/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/tiny_mce_popup.js"></script>
	<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/utils/mctabs.js"></script>
	<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/utils/form_utils.js"></script>
	<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/utils/validate.js"></script>
	<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/utils/editable_selects.js"></script>
	<script type="text/javascript" src="{$PCMS_URL}/editor/tiny_mce/plugins/advimage/js/image.js"></script> 
	<link href="{$PCMS_URL}/editor/tiny_mce/plugins/advimage/css/advimage.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript">var path_ajax = '{$PCMS_URL}'; var path_ajax_script = '{$PCMS_URL}';</script>
    <script type="text/javascript" src="{$URL_JS}/jquery.form.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/inc/isoman/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/inc/isoman/js/man.js"></script>
    <link rel="stylesheet" href="/inc/isoman/css/skin.css" type="text/css" media="all">
    
</head>
<body id="advimage" style="display: none">
    <form id="theForm" name="theForm"> 
		<div class="tabs">
			<ul>
				<li id="general_tab" class="current"><span><a href="javascript:mcTabs.displayTab('general_tab','general_panel');" onmousedown="return false;">General</a></span></li>
				<li id="appearance_tab"><span><a href="javascript:mcTabs.displayTab('appearance_tab','appearance_panel');" onmousedown="return false;">Appearance</a></span></li>
				<li id="advanced_tab"><span><a href="javascript:mcTabs.displayTab('advanced_tab','advanced_panel');" onmousedown="return false;">Advanced</a></span></li>
			</ul>
		</div>

		<div class="panel_wrapper">
			<div id="general_panel" class="panel current">
				<fieldset>
						<legend>General</legend>

						<table class="properties">
                        	<tr id="uploadFileHolder" style="display:none">	
                            	<td class="column1"><label>Upload file</label></td>
                                <td colspan="2">
                                	<input type="file" name="imageFile" id="imageFile" style="float:left; display:block; width:180px;" />
                                    <a style="float:left; display:block; border:1px solid #ccc; padding:3px; background:#F7F7F7; text-decoration:none;" id="UploadFile" onclick="test();" href="#">Upload</a>
                                    <input type="hidden" name="hidImage" value="hidImage" />
                                </td>
                            </tr>
							<tr>
								<td class="column1"><label id="srclabel" for="src">URL</label></td>
								<td colspan="2"><table border="0" cellspacing="0" cellpadding="0">
									<tr> 
									  <td><input name="src" type="text" id="src" value="{$imageFile}" class="mceFocus" onchange="ImageDialog.showPreviewImage(this.value);" /></td>
									  <td style="display:none" id="srcbrowsercontainer">&nbsp;</td>
                                      <td>
                                      	  {if $_isoman_use eq 1}
                                          <a href="#" class="ajOpenDialogIframe" isoman_for_id="src"><img src="/inc/isoman/images/folderopen.gif" border="0" title="Open" alt="Open"></a>                                    
                                          {else}
                                          <a style="float:left; display:block; border:1px solid #ccc; padding:1px; background:#F7F7F7; text-decoration:none; margin-left:10px;" id="UploadFileButton" href="#">Upload File</a>   
                                          {/if}
                                      </td>
									</tr>
								  </table></td>
							</tr>
							<tr>
								<td><label for="src_list">Image List</label></td>
								<td><select id="src_list" name="src_list" onchange="document.getElementById('src').value=this.options[this.selectedIndex].value;document.getElementById('alt').value=this.options[this.selectedIndex].text;document.getElementById('title').value=this.options[this.selectedIndex].text;ImageDialog.showPreviewImage(this.options[this.selectedIndex].value);"><option value=""></option></select></td>
							</tr>
							<tr> 
								<td class="column1"><label id="altlabel" for="alt">Alt Text</label></td> 
								<td colspan="2"><input id="alt" name="alt" type="text" value="" /></td> 
							</tr> 
							<tr> 
								<td class="column1"><label id="titlelabel" for="title">Title</label></td> 
								<td colspan="2"><input id="title" name="title" type="text" value="" /></td> 
							</tr>
						</table>
				</fieldset>

				<fieldset>
					<legend>Preview</legend>
					<div id="prev"></div>
				</fieldset>
			</div>

			<div id="appearance_panel" class="panel">
				<fieldset>
					<legend>Appearance</legend>

					<table border="0" cellpadding="4" cellspacing="0">
						<tr> 
							<td class="column1"><label id="alignlabel" for="align">align</label></td> 
							<td><select id="align" name="align" onchange="ImageDialog.updateStyle('align');ImageDialog.changeAppearance();"> 
									<option value="">not_set</option> 
									<option value="baseline">align_baseline</option>
									<option value="top">align_top</option>
									<option value="middle">align_middle</option>
									<option value="bottom">align_bottom</option>
									<option value="text-top">align_texttop</option>
									<option value="text-bottom">align_textbottom</option>
									<option value="left">align_left</option>
									<option value="right">align_right</option>
								</select> 
							</td>
							<td rowspan="6" valign="top">
								<div class="alignPreview">
									<img id="alignSampleImg" src="img/sample.gif" alt="example_img" />
									Lorem ipsum, Dolor sit amet, consectetuer adipiscing loreum ipsum edipiscing elit, sed diam
									nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Loreum ipsum
									edipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
									erat volutpat.
								</div>
							</td>
						</tr>

						<tr>
							<td class="column1"><label id="widthlabel" for="width">dimensions</label></td>
							<td class="nowrap">
								<input name="width" type="text" id="width" value="" size="5" maxlength="5" class="size" onchange="ImageDialog.changeHeight();" /> x 
								<input name="height" type="text" id="height" value="" size="5" maxlength="5" class="size" onchange="ImageDialog.changeWidth();" /> px
							</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td><table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td><input id="constrain" type="checkbox" name="constrain" class="checkbox" /></td>
										<td><label id="constrainlabel" for="constrain">constrain_proportions</label></td>
									</tr>
								</table></td>
						</tr>

						<tr>
							<td class="column1"><label id="vspacelabel" for="vspace">vspace</label></td> 
							<td><input name="vspace" type="text" id="vspace" value="" size="3" maxlength="3" class="number" onchange="ImageDialog.updateStyle('vspace');ImageDialog.changeAppearance();" onblur="ImageDialog.updateStyle('vspace');ImageDialog.changeAppearance();" />
							</td>
						</tr>

						<tr> 
							<td class="column1"><label id="hspacelabel" for="hspace">hspace</label></td> 
							<td><input name="hspace" type="text" id="hspace" value="" size="3" maxlength="3" class="number" onchange="ImageDialog.updateStyle('hspace');ImageDialog.changeAppearance();" onblur="ImageDialog.updateStyle('hspace');ImageDialog.changeAppearance();" /></td> 
						</tr>

						<tr>
							<td class="column1"><label id="borderlabel" for="border">border</label></td> 
							<td><input id="border" name="border" type="text" value="" size="3" maxlength="3" class="number" onchange="ImageDialog.updateStyle('border');ImageDialog.changeAppearance();" onblur="ImageDialog.updateStyle('border');ImageDialog.changeAppearance();" /></td> 
						</tr>

						<tr>
							<td><label for="class_list">class_name</label></td>
							<td colspan="2"><select id="class_list" name="class_list" class="mceEditableSelect"><option value=""></option></select></td>
						</tr>

						<tr>
							<td class="column1"><label id="stylelabel" for="style">style</label></td> 
							<td colspan="2"><input id="style" name="style" type="text" value="" onchange="ImageDialog.changeAppearance();" /></td> 
						</tr>

						<tr>
							<td class="column1"><label id="classeslabel" for="classes">classes</label></td> 
							<td colspan="2"><input id="classes" name="classes" type="text" value="" onchange="selectByValue(this.form,'classlist',this.value,true);" /></td> 
						</tr> 
					</table>
				</fieldset>
			</div>

			<div id="advanced_panel" class="panel">
				<fieldset>
					<legend>swap_image</legend>

					<input type="checkbox" id="onmousemovecheck" name="onmousemovecheck" class="checkbox" onclick="ImageDialog.setSwapImage(this.checked);" />
					<label id="onmousemovechecklabel" for="onmousemovecheck">alt_image</label>

					<table border="0" cellpadding="4" cellspacing="0" width="100%">
							<tr>
								<td class="column1"><label id="onmouseoversrclabel" for="onmouseoversrc">mouseover</label></td> 
								<td><table border="0" cellspacing="0" cellpadding="0"> 
									<tr> 
									  <td><input id="onmouseoversrc" name="onmouseoversrc" type="text" value="" /></td> 
									  <td id="onmouseoversrccontainer">&nbsp;</td>
									</tr>
								  </table></td>
							</tr>
                            
							<tr>
								<td><label for="over_list">image_list</label></td>
								<td><select id="over_list" name="over_list" onchange="document.getElementById('onmouseoversrc').value=this.options[this.selectedIndex].value;"><option value=""></option></select></td>
							</tr>
							<tr> 
								<td class="column1"><label id="onmouseoutsrclabel" for="onmouseoutsrc">mouseout</label></td> 
								<td class="column2"><table border="0" cellspacing="0" cellpadding="0"> 
									<tr> 
									  <td><input id="onmouseoutsrc" name="onmouseoutsrc" type="text" value="" /></td> 
									  <td id="onmouseoutsrccontainer">&nbsp;</td>
									</tr> 
								  </table></td> 
							</tr>
							<tr>
								<td><label for="out_list">image_list</label></td>
								<td><select id="out_list" name="out_list" onchange="document.getElementById('onmouseoutsrc').value=this.options[this.selectedIndex].value;"><option value=""></option></select></td>
							</tr>
					</table>
				</fieldset>

				<fieldset>
					<legend>misc</legend>

					<table border="0" cellpadding="4" cellspacing="0">
						<tr>
							<td class="column1"><label id="idlabel" for="id">id</label></td> 
							<td><input id="id" name="id" type="text" value="" /></td> 
						</tr>

						<tr>
							<td class="column1"><label id="dirlabel" for="dir">langdir</label></td> 
							<td>
								<select id="dir" name="dir" onchange="ImageDialog.changeAppearance();"> 
										<option value="">not_set</option> 
										<option value="ltr">ltr</option> 
										<option value="rtl">rtl</option> 
								</select>
							</td> 
						</tr>

						<tr>
							<td class="column1"><label id="langlabel" for="lang">langcode</label></td> 
							<td>
								<input id="lang" name="lang" type="text" value="" />
							</td> 
						</tr>

						<tr>
							<td class="column1"><label id="usemaplabel" for="usemap">map</label></td> 
							<td>
								<input id="usemap" name="usemap" type="text" value="" />
							</td> 
						</tr>

						<tr>
							<td class="column1"><label id="longdesclabel" for="longdesc">long_desc</label></td>
							<td><table border="0" cellspacing="0" cellpadding="0">
									<tr>
									  <td><input id="longdesc" name="longdesc" type="text" value="" /></td>
									  <td id="longdesccontainer">&nbsp;</td>
									</tr>
								</table></td> 
						</tr>
					</table>
				</fieldset>
			</div>
		</div>

		<div class="mceActionPanel">
			<input type="button" id="insert" name="insert" value="Update" onclick="ImageDialog.insert();" />
			<input type="button" id="cancel" name="cancel" value="Cancel" onclick="tinyMCEPopup.close();" />
		</div>
    </form>   
    {if $imageFile ne ''}
    <script type="text/javascript">var imageFile='{$imageFile}';</script>
    {literal}
	<script type="text/javascript">
        $(document).ready(function(){
            $('#src').val(imageFile);
			ImageDialog.showPreviewImage(imageFile);
        });
    </script>
    {/literal} 
    {/if}
</body> 
</html> 
