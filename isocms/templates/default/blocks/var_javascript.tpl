<script defer>
	var DOMAIN_NAME='{$DOMAIN_NAME}';
	var path_ajax_script='{$PCMS_URL}';
	var URL_IMAGES = '{$URL_IMAGES}';
	var LANG_ID = '{$_LANG_ID}';
	var extLang = '{$extLang}';
	var mod = '{$mod}';
	var act = '{$act}'; 
	var URL_JS = '{$URL_JS}';
	var URL_CSS = '{$URL_CSS}';
	var appID = '{$appID}';
	var AppSecret = '{$AppSecret}';
	var chUrl = '/js/channel.html';
	var loggedIn = '{$loggedIn}';
	var return_url = '{$return_url}';
	var REQUEST_URI = '{$REQUEST_URI}';
	var OAUTHURL = 'https://accounts.google.com/o/oauth2/auth?';
	var VALIDURL = 'https://www.googleapis.com/oauth2/v1/tokeninfo?access_token=';
	var SCOPE = 'https://www.googleapis.com/auth/userinfo.email';
	var CLIENTID = '{$GoogleID}';
	var REDIRECT = DOMAIN_NAME+'/oauth2callback';
	var TYPE = 'token';
	var _url = OAUTHURL + 'scope=' + SCOPE + '&client_id=' + CLIENTID + '&redirect_uri=' + REDIRECT + '&response_type=' + TYPE;
	var acToken;
	var tokenType;
	var expiresIn;
	var user;
	var This_field_is_required = '{$core->get_Lang("This field is required")}'; 
	var facebook_plugin_lang = '{$facebook_plugin_lang}';
	var Days = '{$core->get_Lang("Days")}';
	var Hours = '{$core->get_Lang("Hours")}';
	var Minutes = '{$core->get_Lang("Mins")}';
	var Seconds = '{$core->get_Lang("Secs")}';
	var st = '{$core->get_Lang("st")}';
	var nd = '{$core->get_Lang("nd")}';
	var rd = '{$core->get_Lang("rd")}';
	var th = '{$core->get_Lang("th")}';
	var st = '{$core->get_Lang("st")}';
	
	var Day = '{$core->get_Lang("Day")}';
	var Month = '{$core->get_Lang("Month")}';
	var Year = '{$core->get_Lang("Year")}';
	var January = '{$core->get_Lang("January")}'
	var February = '{$core->get_Lang("February")}';
	var March = '{$core->get_Lang("March")}';
	var April = '{$core->get_Lang("April")}';
	var May = '{$core->get_Lang("May")}';
	var June = '{$core->get_Lang("June")}';
	var July = '{$core->get_Lang("July")}';
	var August = '{$core->get_Lang("August")}';
	var Septemper = '{$core->get_Lang("September")}';
	var September = '{$core->get_Lang("September")}';
	var October = '{$core->get_Lang("October")}';
	var November = '{$core->get_Lang("November")}';
	var December = '{$core->get_Lang("December")}';
	var Jan = '{$core->get_Lang("Jan")}'
	var Feb = '{$core->get_Lang("Feb")}';
	var Mar = '{$core->get_Lang("Mar")}';
	var Apr = '{$core->get_Lang("Apr")}';
	var May = '{$core->get_Lang("May")}';
	var Jun = '{$core->get_Lang("Jun")}';
	var Jul = '{$core->get_Lang("Jul")}';
	var Aug = '{$core->get_Lang("Aug")}';
	var Sep = '{$core->get_Lang("Sep")}';
	var Oct = '{$core->get_Lang("Oct")}';
	var Nov = '{$core->get_Lang("Nov")}';
	var Dec = '{$core->get_Lang("Dec")}';
	
	var Mo = '{$core->get_Lang("Mo")}'
	var Tu = '{$core->get_Lang("Tu")}';
	var We = '{$core->get_Lang("We")}';
	var Th = '{$core->get_Lang("Th")}';
	var Fr = '{$core->get_Lang("Fr")}';
	var Sa = '{$core->get_Lang("Sa")}';
	var Su = '{$core->get_Lang("Su")}';
    var Mon = '{$core->get_Lang("Mon")}'
	var Tue = '{$core->get_Lang("Tue")}';
	var Wed = '{$core->get_Lang("Wed")}';
	var Thu = '{$core->get_Lang("Thu")}';
	var Fri = '{$core->get_Lang("Fri")}';
	var Sat = '{$core->get_Lang("Sat")}';
	var Sun = '{$core->get_Lang("Sun")}';
    
    var Monday = '{$core->get_Lang("Monday")}'
	var Tuesday = '{$core->get_Lang("Tuesday")}';
	var Wednesday = '{$core->get_Lang("Wednesday")}';
	var Thursday = '{$core->get_Lang("Thursday")}';
	var Friday = '{$core->get_Lang("Friday")}';
	var Saturday = '{$core->get_Lang("Saturday")}';
	var Sunday = '{$core->get_Lang("Sunday")}';
	var Today = '{$core->get_Lang("Today")}';
	var night = '{$core->get_Lang("night")}';
	var nights = '{$core->get_Lang("nights")}';
	var Done = '{$core->get_Lang("Done")}';
	var Prev = '{$core->get_Lang("Prev")}';
	var Next = '{$core->get_Lang("Next")}';
	var dateFormat = "dd/mm/yy";
</script>