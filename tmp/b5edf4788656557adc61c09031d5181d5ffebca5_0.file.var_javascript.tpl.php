<?php
/* Smarty version 3.1.38, created on 2024-05-06 17:32:57
  from '/home/unikasia/domains/unikasia.com/public_html/isocms/templates/default/blocks/var_javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6638b1d96f22b9_78727650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5edf4788656557adc61c09031d5181d5ffebca5' => 
    array (
      0 => '/home/unikasia/domains/unikasia.com/public_html/isocms/templates/default/blocks/var_javascript.tpl',
      1 => 1714822357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638b1d96f22b9_78727650 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 defer>
	var DOMAIN_NAME='<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
';
	var path_ajax_script='<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
';
	var URL_IMAGES = '<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
';
	var LANG_ID = '<?php echo $_smarty_tpl->tpl_vars['_LANG_ID']->value;?>
';
	var extLang = '<?php echo $_smarty_tpl->tpl_vars['extLang']->value;?>
';
	var mod = '<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
';
	var act = '<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
'; 
	var URL_JS = '<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
';
	var URL_CSS = '<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
';
	var appID = '<?php echo $_smarty_tpl->tpl_vars['appID']->value;?>
';
	var AppSecret = '<?php echo $_smarty_tpl->tpl_vars['AppSecret']->value;?>
';
	var chUrl = '/js/channel.html';
	var loggedIn = '<?php echo $_smarty_tpl->tpl_vars['loggedIn']->value;?>
';
	var return_url = '<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
';
	var REQUEST_URI = '<?php echo $_smarty_tpl->tpl_vars['REQUEST_URI']->value;?>
';
	var OAUTHURL = 'https://accounts.google.com/o/oauth2/auth?';
	var VALIDURL = 'https://www.googleapis.com/oauth2/v1/tokeninfo?access_token=';
	var SCOPE = 'https://www.googleapis.com/auth/userinfo.email';
	var CLIENTID = '<?php echo $_smarty_tpl->tpl_vars['GoogleID']->value;?>
';
	var REDIRECT = DOMAIN_NAME+'/oauth2callback';
	var TYPE = 'token';
	var _url = OAUTHURL + 'scope=' + SCOPE + '&client_id=' + CLIENTID + '&redirect_uri=' + REDIRECT + '&response_type=' + TYPE;
	var acToken;
	var tokenType;
	var expiresIn;
	var user;
	var This_field_is_required = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("This field is required");?>
'; 
	var facebook_plugin_lang = '<?php echo $_smarty_tpl->tpl_vars['facebook_plugin_lang']->value;?>
';
	var Days = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Days");?>
';
	var Hours = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Hours");?>
';
	var Minutes = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Mins");?>
';
	var Seconds = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Secs");?>
';
	var st = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("st");?>
';
	var nd = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("nd");?>
';
	var rd = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("rd");?>
';
	var th = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("th");?>
';
	var st = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("st");?>
';
	
	var Day = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Day");?>
';
	var Month = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Month");?>
';
	var Year = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Year");?>
';
	var January = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("January");?>
'
	var February = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("February");?>
';
	var March = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("March");?>
';
	var April = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("April");?>
';
	var May = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("May");?>
';
	var June = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("June");?>
';
	var July = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("July");?>
';
	var August = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("August");?>
';
	var Septemper = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("September");?>
';
	var September = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("September");?>
';
	var October = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("October");?>
';
	var November = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("November");?>
';
	var December = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("December");?>
';
	var Jan = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Jan");?>
'
	var Feb = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Feb");?>
';
	var Mar = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Mar");?>
';
	var Apr = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Apr");?>
';
	var May = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("May");?>
';
	var Jun = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Jun");?>
';
	var Jul = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Jul");?>
';
	var Aug = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Aug");?>
';
	var Sep = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Sep");?>
';
	var Oct = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Oct");?>
';
	var Nov = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Nov");?>
';
	var Dec = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Dec");?>
';
	
	var Mo = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Mo");?>
'
	var Tu = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Tu");?>
';
	var We = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("We");?>
';
	var Th = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Th");?>
';
	var Fr = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Fr");?>
';
	var Sa = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Sa");?>
';
	var Su = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Su");?>
';
    var Mon = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Mon");?>
'
	var Tue = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Tue");?>
';
	var Wed = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Wed");?>
';
	var Thu = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Thu");?>
';
	var Fri = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Fri");?>
';
	var Sat = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Sat");?>
';
	var Sun = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Sun");?>
';
    
    var Monday = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Monday");?>
'
	var Tuesday = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Tuesday");?>
';
	var Wednesday = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Wednesday");?>
';
	var Thursday = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Thursday");?>
';
	var Friday = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Friday");?>
';
	var Saturday = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Saturday");?>
';
	var Sunday = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Sunday");?>
';
	var Today = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Today");?>
';
	var night = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("night");?>
';
	var nights = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("nights");?>
';
	var Done = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Done");?>
';
	var Prev = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Prev");?>
';
	var Next = '<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang("Next");?>
';
	var dateFormat = "dd/mm/yy";
<?php echo '</script'; ?>
><?php }
}
