<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Images ISOCMS Dialog</title>
    <script type="text/javascript" src="{$PCMS_URL}/editor/jquery/jquery-1.11.0.min.js"></script>
    
    <script type="text/javascript">var path_ajax = '{$PCMS_URL}'; var path_ajax_script = '{$PCMS_URL}';</script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    
    <link rel="stylesheet" href="{$URL_CSS}/v2.css" type="text/css" media="all">
    <link rel="stylesheet" href="/inc/isoman/css/skin.css" type="text/css" media="all">
    <script type="text/javascript" src="/inc/isoman/js/jquery.form.js"></script>
    <script type="text/javascript" src="/inc/isoman/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/inc/isoman/js/man.js"></script>
    
</head>
<body class="frmPop" style="display:block !important; width:800px; height:535px;">
	{literal}
	<script type="text/javascript">
		setTimeout(function(){
			var isoman_for_id = 'src';
			var adata = {
				"for_id":isoman_for_id,
				"isInIframe":1
			};
			$.ajax({
				type: "POST",
				url:path_ajax_script+'/index.php?act=isoman_load_open_dialog',
				data: adata,
				dataType: "html",
				success: function(html){ 
					$("body").html(html);
					isoman_load_folder(isoman_for_id,$("#isoman-current-typelist-"+isoman_for_id).val(),$("#isoman-current-dir-"+isoman_for_id).val(),$("#isoman-current-url-"+isoman_for_id).val());
				}
			});
		},500);
	</script>
    {/literal}
</body> 
</html> 
