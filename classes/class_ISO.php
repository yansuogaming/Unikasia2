<?php

class ISO

{

	function __construct()

	{

		// Some code

	}

	function curl_get_contents($url)

	{

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);

		curl_setopt($ch, CURLOPT_HEADER, 0);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$data = curl_exec($ch);

		curl_close($ch);

		return $data;

	}

	function getRateVCB($CurrencyCode = 'USD', $attr = 'Sell')

	{

		$url_exchangerates = "https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx";

		$xml_exchangerates = $this->curl_get_contents($url_exchangerates);

		$data_exchangerates = simplexml_load_string($xml_exchangerates);

		if (empty($data_exchangerates)) {

			$url_exchangerates = "https://www.vietiso.com/xml_exchange_rate_vcb.xml";

			$xml_exchangerates = $this->curl_get_contents($url_exchangerates);

			$data_exchangerates = simplexml_load_string($xml_exchangerates);

		}

		$exchangerates = $data_exchangerates->Exrate;

		foreach ($exchangerates as $currency) {

			if ($currency['CurrencyCode'] == $CurrencyCode) {

				$exchangerate = $currency['Transfer'];

				$exchangerates = str_replace(',', '', $exchangerate);

				return $exchangerates;

			}

		}

		return false;

	}

	function showExchangeRates($url = '')

	{

		$html = '<table class="table table-hover">

			<thead>

				<tr>

					<th colspan="5"><h2 style="text-align:center">TỶ GIÁ NGOẠI TỆ</h2></th>

				</tr>

				<tr>

					<th>MÃ NGOẠI TỆ</th>

					<th>TÊN NGOẠI TỆ</th>

					<th>MUA TIỀN MẶT</th>

					<th>MUA CHUYỂN KHOẢN</th>

					<th>BÁN</th>

				</tr>

			</thead>

			<tbody>';

		$url = "https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx?b=1";

		$thoi_gian_cap_nhat = "";

		$xml = $this->curl_get_contents($url);

		$data = simplexml_load_string($xml);

		if ($data === false) {

			$html .= '<tr class="danger"><th colspan="5" style="text-align:center"><h5>DỮ LIỆU BỊ LỖI</h5></th></tr>';

		} else {

			$thoi_gian_cap_nhat = $data->DateTime;

			$ty_gia = $data->Exrate;

			$i = 1;

			foreach ($ty_gia as $ngoai_te) {

				$ma = $ngoai_te['CurrencyCode'];

				$ten = $ngoai_te['CurrencyName'];

				$gia_mua = $ngoai_te['Buy'];

				$gia_chuyen_khoan = $ngoai_te['Transfer'];

				$gia_ban = $ngoai_te['Sell'];

				$class_color = "tr_old";

				if ($i % 2 == 0) {

					$class_color = "info";

				}

				$html .= '<tr class="' . $class_color . '">

						<td>' . $ma . '</td>

						<td>' . $ten . '</td>

						<td>' . $gia_mua . '</td>

						<td>' . $gia_chuyen_khoan . '</td>

						<td>' . $gia_ban . '</td>

						</tr>';

				$i++;

			}

		}

		$html .= '</tbody>

			<tfoot>';

		if ($thoi_gian_cap_nhat != "") {

			$thoi_gian_cap_nhat = date_format(date_create($thoi_gian_cap_nhat), 'H:i:s d-m-Y');

			$thoi_gian_cap_nhat = explode(' ', $thoi_gian_cap_nhat);

			$gio = $thoi_gian_cap_nhat[0];

			$ngay = $thoi_gian_cap_nhat[1];

		}

		$html .= '<tr>

					<th colspan="5">Tỷ giá được cập nhật lúc ' . $gio . ' ngày ' . $ngay . ' và chỉ mang tính chất tham khảo.</th>

				</tr>

			</tfoot>

		</table>';

		return $html;

	}

	function showExchangeRatesCode($url = '')

	{

		global $core;

		$html = '';

		$url = "http://www.vietcombank.com.vn/exchangerates/ExrateXML.aspx";

		$thoi_gian_cap_nhat = "";

		if ($this->curl_get_contents($url)) {

			$xml = $this->curl_get_contents($url);

			$data = simplexml_load_string($xml);

			if ($data === false) {

				$html .= '<li class="danger">' . $core->get_Lang('Data Error') . '</li>';

			} else {

				$thoi_gian_cap_nhat = $data->DateTime;

				$ty_gia = $data->Exrate;

				$i = 1;

				foreach ($ty_gia as $ngoai_te) {

					$ma = $ngoai_te['CurrencyCode'];

					$ten = $ngoai_te['CurrencyName'];

					$html .= '<li><a href="javascript:void(0);" data-code="' . $ma . '" class="set_code_rate"><span class="code">' . $ma . '</span>' . $ten . '</a></li>';

					$i++;

				}

			}

		} else {

			$html .= '<li class="danger">' . $core->get_Lang('Not connect Vietcombank') . '</li>';

		}

		return $html;

	}

	function parseBr2nl($txt)

	{

		return str_ireplace(array("<br />", "<br>", "<br/>"), "\r\n", $txt);

	}

	function parseNl2p($string, $line_breaks = true, $xml = true)

	{

		$string = str_ireplace('<p>&nbsp;</p>', '', html_entity_decode(trim($string), ENT_COMPAT, 'UTF-8'));

		$string = str_ireplace(array("<p>&nbsp;</p>", "&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;"), '', trim($string));

		//$string = $this->parseBr2nl($string);

		// It is conceivable that people might still want single line-breaks

		// without breaking into a new paragraph.

		$string = ltrim($string, '<p>');

		$string = rtrim($string, '</p>');

		if ($line_breaks == true) {

			$return = '<p >' . preg_replace(array("/([\n]{2,})/i", "/([^>])\n([^<])/i"), array("</p>\n<p>", '$1<br' . ($xml == true ? ' /' : '') . '>$2'), trim($string)) . '</p>';

			$return = trim($string, '<p></p>');

			return $return;

		} else

			return '<p >' . preg_replace(

				array("/([\n]{2,})/i", "/([\r\n]{3,})/i", "/([^>])\n([^<])/i"),

				array("</p>\n<p>", "</p>\n<p>", '$1</p><p>$2'),

				trim($string)

			) . '</p>';

	}

	function getScript($mod = 'home', $act = 'default', $filetype = 'js')

	{

		$scriptFile = '';

		$filetype = preg_replace('/\./', '', $filetype);

		if (strtolower($filetype) == 'js') {

			if (file_exists(DIR_THEMES . DS . $mod . DS . 'js' . DS . 'jquery.' . $mod . '.js')) {

				$scriptFile = URL_THEMES . DS . $mod . DS . 'js' . DS . 'jquery.' . $mod . '.js';

				echo '<script type="text/javascript" src="' . $scriptFile . '?v=' . time() . '"></script>';

			}

			if (file_exists(DIR_THEMES . DS . $mod . DS . 'js' . DS . 'jquery.' . $mod . '.' . $act . '.js')) {

				$scriptFile = URL_THEMES . DS . $mod . DS . 'js' . DS . 'jquery.' . $mod . '.' . $act . '.js';

				echo '<script type="text/javascript" src="' . $scriptFile . '?v=' . time() . '"></script>';

			}

		} else if (strtolower($filetype) === 'css') {

			if (file_exists(DIR_THEMES . DS . $mod . DS . 'css' . DS . $mod . '.css')) {

				$scriptFile = URL_THEMES . DS . $mod . DS . 'css' . DS . $mod . '.css';

				echo '<link rel="stylesheet" type="text/css" href="' . $scriptFile . '?v=' . time() . '" media="all" />';

			}

			if (file_exists(DIR_THEMES . DS . $mod . DS . 'css' . DS . $mod . '.' . $act . '.css')) {

				$scriptFile = URL_THEMES . DS . $mod . DS . 'css' . DS . $mod . '.' . $act . '.css';

				echo '<link rel="stylesheet" type="text/css" href="' . $scriptFile . '?v=' . time() . '" media="all" />';

			}

		}

	}

	function loadingMessage()

	{

		return '<div class="text-center">

					 <img src="' . URL_IMAGES . '/loading_message.svg" alt="Loading...">

				</div>';

	}

	function build($template_name, $variables = array(), $is_cache = 1)

	{

		global $smarty, $mod, $act, $dbconn, $_LANG_ID, $assign_list;

		#Extension

		$extension = pathinfo($template_name, PATHINFO_EXTENSION);

		if (!$extension) {

			$extension = 'tpl';

		}

		if (!file_exists(DIR_THEMES . DS . $mod . DS . $template_name)) {

			$html = 'Error 404. Not found template #' . $template_name;

		}

		#Output

		$html = '';

		if ($extension == 'php') {

			ob_start();

			extract($this->variables);

			include DIR_MODULES . DS . $mod . DS . $template_name;

			$html = ob_get_clean();

		} else if ($extension == 'tpl' || $extension == 'html' || $extension == 'htm') {

			if (!empty($variables)) {

				$assign_list = array_merge($variables, $assign_list);

			}

			foreach ($assign_list as $key => $val) {

				$smarty->assign($key, $val);

			}

			$cache_id = md5($_SERVER['REQUEST_URI'] . $template_name);

			/*if(empty($is_cache)){

				$smarty->clearCache($template_name,$cache_id);

			}*/

			$html = $smarty->fetch(DIR_THEMES . DS . $mod . DS . $template_name, $cache_id);

		} else {

			$html = 'Error 404. Unsupported file type!';

		}

		return $html;

	}

	function getModule($mod, $sub, $act)

	{

		global $smarty, $assign_list;

		//ini_set( "display_errors", 1);

		$file_block_name = DIR_MODULES . "/$mod/sub_$sub.php";

		$file_block_temp = DIR_THEMES . "/$mod/" . $act . ".tpl";

		if ($sub != 'default') {

			$file_block_temp = DIR_THEMES . "/$mod/$sub/" . $act . ".tpl";

		}

		$html = "";

		if (file_exists($file_block_name)) {

			require_once($file_block_name);

			if (file_exists($file_block_temp)) {

				$html = $smarty->fetch($file_block_temp);

			} else {

				$html = 'Error 404. Not found: #MOD:' . $mod . '|#ACT:' . $act;

			}

		} else {

			$html = 'Error 404. Not found: #' . $mod . '#' . $act;

		}

		return $html;

	}

	function getBlock($block_name = "default", $args = array())

	{

		global $smarty, $assign_list, $clsISO;

		$file_block_name = DIR_MODULES . "/blocks/" . $block_name . ".php";

		$file_block_temp = DIR_THEMES . "/blocks/" . $block_name . ".tpl";

		$html = "";

		if (file_exists($file_block_name)) {

			if (!empty($args)) {

				extract($args);

				foreach ($args as $k => $v) {

					$smarty->assign($k, $v);

				}

			}

			include($file_block_name);

			$html = $smarty->fetch($file_block_temp);

		} else {

			$html = 'Not find block: #' . $block_name;

		}

		return $html;

	}

	function makeIcon($icon, $text = null, $class = '', $attr = '')

	{

		if (empty($text)) {

			return sprintf('<i class="fa fa-%s %s" %s aria-hidden="true"></i>', $icon, $class, $attr);

		} else {

			return sprintf('<i class="fa fa-%s %s" %s aria-hidden="true"></i> %s', $icon, $class, $attr, $text);

		}

	}

	function makeIM($icon, $text = null, $class = '', $attr = '')

	{

		return makeIconMaterial($icon, $text, $class, $attr);

	}

	function makeIMO($icon, $text = null, $class = '', $attr = '')

	{

		return makeIconMaterialOutline($icon, $text, $class, $attr);

	}

	function convertBase64toImage($content)

	{

		global $adminid, $smarty, $PCMS_URL, $clsISO, $core, $clsConfiguration;

		$content = html_entity_decode($content);

		/*data: = nodata...

		([\w=+/]++) = $imgdata

		[a-z]+ = (gif|png|jpeg)*/

		echo json_encode(array(

			"msg"	=> "ok",

			"content"	=> preg_replace_callback('#(<img\s(?>(?!src=)[^>])*?src=")nodata...image/([a-z]+);base64,([\w=+/]++)("[^>]*>)#', "data_upload_image_textarea", $content),

		));

	}

	/*ticket*/

	function getInfoCatTicket()

	{

		return array(

			"error"	=> __('Software error'),

			"instructions"	=> __('Instructions'),

			"improve"	=> __('Improve the experience'),

			"other"	=> __('Other'),

		);

	}

	/*function getInfoCatTicket(){

		return array(

			"improve"	=> __('Improve the experience'),

			"del_data"	=> __('Delete data'),

			"edit_data"	=> __('Edit data'),

			//"add_func"	=> __('Add functions'),

			"func_sale"	=> __('Add functions').'&nbsp;>&nbsp;'.__('Sale'),

			"func_op"	=> __('Add functions').'&nbsp;>&nbsp;'.__('Operating'),

			"func_marketing"	=> __('Add functions').'&nbsp;>&nbsp;'.__('Marketing'),

			"func_acc"	=> __('Add functions').'&nbsp;>&nbsp;'.__('Accountant'),

			"func_manage"	=> __('Add functions').'&nbsp;>&nbsp;'.__('Manage'),

			"func_security"	=> __('Add functions').'&nbsp;>&nbsp;'.__('Security'),

			"func_api_conn"	=> __('Add functions').'&nbsp;>&nbsp;'.__('API connect'),

			"instructions"	=> __('Instructions'),

			"inst_sale"	=> __('Instructions').'&nbsp;>&nbsp;'.__('Sale'),

			"inst_op"	=> __('Instructions').'&nbsp;>&nbsp;'.__('Operating'),

			"inst_acc"	=> __('Instructions').'&nbsp;>&nbsp;'.__('Accountant'),

			"inst_manage"	=> __('Instructions').'&nbsp;>&nbsp;'.__('Manage'),

			"error"	=> __('Software error'),

			"other"	=> __('Other'),

		);

	}*/

	function getInfoStatusTicket()

	{

		return array(

			"1open"	=> array(

				"title"	=> __('Open'),

				"color"	=> "#fff",

				"bgr"	=> "red",

			),

			"2answered"	=> array(

				"title"	=> __('Answered'),

				"color"	=> "#fff",

				"bgr"	=> "#34A853",

			),

			"3cus_rep"	=> array(

				"title"	=> __('Customer Reply'),

				"color"	=> "#8a6d3b",

				"bgr"	=> "#fcf8e3",

			),

			"4on_hold"	=> array(

				"title"	=> __('On Hold'),

				"color"	=> "#31708f",

				"bgr"	=> "#99d8f7",

			),

			"5in_progress"	=> array(

				"title"	=> __('In Progress'),

				"color"	=> "#fff",

				"bgr"	=> "#F58220",

			),

			"6closed"	=> array(

				"title"	=> __('Closed'),

				"color"	=> "#fff",

				"bgr"	=> "#999",

			)

		);

	}

	function getCatNameTicket($cat, $oneTicket = null)

	{

		if ($cat == 'other' && !empty($oneTicket['other_cat'])) {

			return $oneTicket['other_cat'];

		}

		$getInfoCatTicket = $this->getInfoCatTicket();

		return $getInfoCatTicket[$cat];

	}

	function getLabelStatusTicket($status)

	{

		$getInfoStatusTicket = $this->getInfoStatusTicket();

		return '<label class="font-13 px-1 text-center" style="min-width:70px; color:' . $getInfoStatusTicket[$status]['color'] . ';background:' . $getInfoStatusTicket[$status]['bgr'] . '">' . $getInfoStatusTicket[$status]['title'] . '</label>';

	}

	function getISOCMSTicket($ym = '')

	{

		ini_set('memory_limit', '4095M');

		ini_set('max_execution_time', 300);

		if (@file_exists(DIR_INCLUDES . '/json_master/autoload.php')) {

			require_once(DIR_INCLUDES . '/json_master/autoload.php');

		}

		$isocms_ticket = array();

		if (!empty($ym)) {

			if (is_array($ym)) {

				foreach ($ym as $one) {

					$file_cached = DIR_JSON_TICKET . 'isocms_ticket_' . $one . '.json';

					if (@file_exists($file_cached)) {

						$decoder = new Webmozart\Json\JsonDecoder();

						$isocms_ticket_one = $decoder->decodeFile($file_cached);

						$isocms_ticket = array_merge($isocms_ticket, $isocms_ticket_one);

					}

				}

			} else {

				$file_cached = DIR_JSON_TICKET . 'isocms_ticket_' . $ym . '.json';

				if (@file_exists($file_cached)) {

					$decoder = new Webmozart\Json\JsonDecoder();

					$isocms_ticket = $decoder->decodeFile($file_cached);

				}

			}

		} else {

			$dir_php = DIR_JSON_TICKET;

			$lst_file = array();

			if (is_dir($dir_php)) {

				if ($dh = opendir($dir_php)) {

					while (($file = readdir($dh)) !== false) {

						if (substr($file, -4) == 'json') {

							//array_push($lst_file,$file);

							$substr = substr($file, 0, -5);

							$substr = end(explode("_", $substr));

							$lst_file[$substr] = $file;

						}

					}

					closedir($dh);

					ksort($lst_file);

				}

			}

			if (!empty($lst_file)) {

				foreach ($lst_file as $oneFile) {

					$decoder = new Webmozart\Json\JsonDecoder();

					$isocms_ticket_one = $decoder->decodeFile($dir_php . "" . trim($oneFile));

					$isocms_ticket = array_merge($isocms_ticket, $isocms_ticket_one);

				}

			}

		}

		return $isocms_ticket;

	}

	function getLinkTicket($name)

	{

		switch ($name) {

			case "ticket":

				$url = "/admin/ticket/";

				break;

			case "my_ticket":

				$url = "/admin/my_ticket/";

				break;

			case "list_ticket":

				$url = "/admin/list_ticket/";

				break;

			case "detail_ticket":

				$url = "/admin/detail_ticket/";

				break;

			default:

				$url = '/admin/';

		}

		return $url;

	}

	function getSelectUserOptions($user_id = null, $title = null)

	{

		global $core, $_loged_id, $clsISO, $clsUser, $oneUser;

		$title = !is_null($title) ? $title : __('Select');

		$html = '<option value="0">' . ($title) . '</option>';

		$field = "{$clsUser->pkey},full_name,first_name,last_name,email";

		$cond = "is_trash=0 and is_active='1'";

		$lstUser = $clsUser->getAll("{$cond} order by user_id asc", $field);

		if (!empty($lstUser)) {

			foreach ($lstUser as $usr) {

				$full_name = $usr['full_name'];

				if (empty($full_name)) {

					$full_name = $usr['first_name'] . ' ' . $usr['last_name'];

				}

				$sltc = ($user_id == $usr[$clsUser->pkey]) ? 'selected="selected"' : '';

				$html .= '<option value="' . $usr[$clsUser->pkey] . '" ' . $sltc . '>' . $full_name . ' (' . $usr['email'] . ')</option>';

			}

			unset($lstUser);

		}

		return $html;

	}

	function getYmByRangeDate($start_date = null, $end_date = null)

	{

		if (empty($start_date) && empty($end_date)) {

			return '';

		}

		$lstYm = array();

		if (!empty($start_date)) {

			$lstYm[] = $this->getDateCreateFormat($start_date, "Ym");

			if (empty($end_date)) {

				$end_date = date('Y-m-d');

			}

		}

		if (!empty($end_date)) {

			if (empty($start_date)) {

				$start_date = "2023-01-01";

				$lstYm[] = $this->getDateCreateFormat($start_date, "Ym");

			}

		}

		$start_date = $this->convertDateCreateFormat($start_date);

		$end_date = $this->convertDateCreateFormat($end_date);

		$end_date = date('Y-m-d', strtotime($end_date . ' +1 day'));

		//return array("start_date"=>$start_date,"end_date"=>$end_date);

		$range_date = array();

		$period = new DatePeriod(

			new DateTime($start_date),

			new DateInterval('P1D'),

			new DateTime($end_date)

		);

		foreach ($period as $key => $value) {

			//$range_date[] = strtotime($value->format('Y-m-d'));

			$range_date[] = $value->format('Y-m-d');

		}

		foreach ($range_date as $oneDate) {

			$ym = $this->getDateCreateFormat($oneDate, "Ym");

			if (!in_array($ym, $lstYm)) {

				$lstYm[] = $ym;

			}

		}

		return $lstYm;

	}

	function set_attrs($arr)

	{

		if (empty($arr)) return '';

		$attr = "";

		$index = 0;

		foreach ($arr as $k => $v) {

			if (!is_array($v)) {

				$attr .= ($index == 0 ? '' : ' ') . "{$k}=\"{$v}\"";

				++$index;

			}

		}

		return $attr;

	}

	function parseImageInContent($content, $decode = true)

	{

		if ($decode) {

			$content = html_entity_decode(trim($content), ENT_COMPAT, 'utf-8');

		}

		$content = str_replace(DOMAIN_NAME . '/uploads', '/uploads', $content);

		$content = str_replace('/uploads', DOMAIN_NAME . '/uploads', $content);

		return $content;

	}

	function getMessageGolbal($max_width = "620px")

	{

		$message = '<div style="background-color: rgba(245,245,245,1);padding: 30px 0;">';

		$message .= '<div style="max-width: ' . $max_width . ';margin: 0 auto;border-top:6px solid rgba(41,131,178,1);border-bottom: 1px solid rgba(247,247,247,1);background-color: rgba(255,255,255,1);">';

		$message .= '<div style="border-bottom: 1px solid rgba(247,247,247,1);padding: 3px 20px 0;">[%header_email%]</div>';

		$message .= '<div style="padding:20px 20px 0px">[%tem_msg%]</div>';

		$message .= '<div style="padding:30px 20px 15px">[%footer_email%]</div>';

		//$message .= '<div style="padding:0px 20px 15px">[%link_reg%]</div>';

		$message .= '</div></div>';

		return $message;

	}

	function sendEmailCreatTicket($ticket_id, $oneTicket)

	{

		global $_loged_id, $oneUser, $_company_iom_id, $clsISO, $clsUser, $clsConfiguration;

		//$clsEmail = new Email();

		//$oneBrand = $clsISO->getOneBrandUser('',$_frontIsLoggedin_user_id);

		//$oneBrand = $oneBrand['oneBrand'];

		$subject = "[ISOCMS] Ticket mới từ " . $oneTicket['domain_name'];

		$msg = "<p>Bạn có một Ticket mới từ " . $oneTicket['domain_name'] . " với nội dung:</p>";

		//$msg .= '<p>- Mã: <a href="'.$oneTicket['domain_name'].'/detail_ticket/'.$ticket_id.'">#'.$oneTicket['code'].'</a></p>';

		$msg .= '<p>- Mã: <a href="https://okrs.vietiso.com/isocms-ticket/' . $ticket_id . '">#' . $oneTicket['code'] . '</a></p>';

		$msg .= "<p>- Loại: " . $clsISO->getCatNameTicket($oneTicket['cat'], $oneTicket) . "</p>";

		$msg .= "<p>- Tiêu đề: " . $oneTicket['title'] . "</p>";

		$msg .= str_ireplace(array("<img"), array('<img style="max-width:100%"'), $oneTicket['content']);

		#

		$header_email = '<img src="' + URL_IMAGES + '/banner_email_isocms.png" />';

		$footer_email = "";

		/*$info_social = "";

		$info_license = "";

		$link_web_version = '';

		$merge_fields = array(

			'[%info_social%]' => $info_social,

			'[%recipient_email%]' => $to,

			'[%company_address%]' => $oneBrand['CompanyAddress'],

			'[%info_license%]' => $info_license,

			'[%link_web_version%]' => $link_web_version,

			'[%company_website%]' => $oneBrand['website'],

			'[%company_name%]' 	=> $oneBrand['CompanyName'],

			'[%company_phone%]' => $oneBrand['phone'],

			'[%company_email%]' => $oneBrand['email'],

		);

		foreach($merge_fields as $key => $val){

			$footer_email = str_replace($key, $val, $footer_email);

		}*/

		#

		$getMessageGolbal = $this->getMessageGolbal();

		$message_okrs = $getMessageGolbal;

		$merge_fields = array(

			'[%header_email%]' => $header_email,

			'[%tem_msg%]' => $msg,

			'[%footer_email%]' => $footer_email,

			//'[%link_reg%]' => '',

		);

		foreach ($merge_fields as $key => $val) {

			$message_okrs = str_replace($key, $val, $message_okrs);

		}

		$attachments = '';

		$owner = $clsConfiguration->getValue('SiteReplyName'); //CompanyName

		if (!$owner) $owner = PAGE_NAME;

		$from = $clsConfiguration->getValue('SiteReplyEmail');

		$to = "support@vietiso.com";

		$cc = array("ngochuy@vietiso.com", "loi@vietiso.com"); //"bichngoc@vietiso.com",

		// Send okrs

		//$is_send_okrs = $clsEmail->sendEmail($from,$to,$subject,$message_okrs,$owner,$attachments,$cc);

		$is_send_okrs = $clsISO->sendEmail($from, $to, $subject, $message_okrs, $owner);

		if (!empty($cc)) {

			foreach ($cc as $oneCC) {

				$is_send_email = $clsISO->sendEmail($from, $oneCC, $subject, $message_okrs, $owner);

			}

		}

		#send tms

		$subject = "[" . $oneTicket['domain_name'] . "] Bạn vừa tạo một Ticket mới";

		$msg = "<p>Bạn vừa tạo Ticket mới từ " . $oneTicket['domain_name'] . " với nội dung:</p>";

		$msg .= '<p>- Mã: <a href="' . $oneTicket['domain_name'] . '/detail_ticket/' . $ticket_id . '">#' . $oneTicket['code'] . '</a></p>';

		//$msg .= '<p>- Mã: <a href="https://okrs.vietiso.com/tms-ticket/'.$ticket_id.'">#'.$oneTicket['code'].'</a></p>';

		$msg .= "<p>- Loại: " . $clsISO->getCatNameTicket($oneTicket['cat'], $oneTicket) . "</p>";

		$msg .= "<p>- Tiêu đề: " . $oneTicket['title'] . "</p>";

		$msg .= str_ireplace(array("<img"), array('<img style="max-width:100%"'), $oneTicket['content']);

		#

		$message_tms = $getMessageGolbal;

		$merge_fields = array(

			'[%header_email%]' => $header_email,

			'[%tem_msg%]' => $msg,

			'[%footer_email%]' => $footer_email,

			//'[%link_reg%]' => '',

		);

		foreach ($merge_fields as $key => $val) {

			$message_tms = str_replace($key, $val, $message_tms);

		}

		$attachments = '';

		$owner = $clsConfiguration->getValue('SiteReplyName'); //CompanyName

		if (!$owner) $owner = PAGE_NAME;

		$from = $clsConfiguration->getValue('SiteReplyEmail');

		$to = $oneTicket['user_email'];

		// Send tms

		$is_send_email = $clsISO->sendEmail($from, $to, $subject, $message_tms, $owner);

		//return empty($is_send_okrs)?0:1;

		return $is_send_okrs;

	}

	function sendEmailReplyTicket($ticket_id, $oneTicket, $oneReply)

	{

		global $_loged_id, $oneUser, $_company_iom_id, $clsISO, $clsUser, $clsConfiguration;

		//$clsEmail = new Email();

		//$clsConfiguration = new Configuration();

		//$oneBrand = $clsISO->getOneBrandUser('',$_frontIsLoggedin_user_id);

		//$oneBrand = $oneBrand['oneBrand'];

		$subject = "[ISOCMS] Reply Ticket mới từ " . $oneTicket['domain_name'];

		//$msg = '<p>Bạn có một Reply Ticket mới từ '.$oneTicket['domain_name'].' cho Ticket <a href="'.$oneTicket['domain_name'].'/detail_ticket/'.$ticket_id.'">#'.$oneTicket['code'].'</a> với nội dung:</p>';

		$msg = '<p>Bạn có một Reply Ticket mới từ ' . $oneTicket['domain_name'] . ' cho Ticket <a href="https://okrs.vietiso.com/isocms-ticket/' . $ticket_id . '">#' . $oneTicket['code'] . '</a> với nội dung:</p>';

		$msg .= str_ireplace(array("<img"), array('<img style="max-width:100%"'), $oneReply['content']);

		#

		$header_email = '<img src="' + URL_IMAGES + '/banner_email_isocms.png" />';

		$footer_email = "";

		/*$info_social = $clsEmail->getInfoSocial($oneBrand);

		$info_license = $clsEmail->getInfoLicense($oneBrand);

		$link_web_version = '';

		$merge_fields = array(

			'[%info_social%]' => $info_social,

			'[%recipient_email%]' => $to,

			'[%company_address%]' => $oneBrand['CompanyAddress'],

			'[%info_license%]' => $info_license,

			'[%link_web_version%]' => $link_web_version,

			'[%company_website%]' => $oneBrand['website'],

			'[%company_name%]' 	=> $oneBrand['CompanyName'],

			'[%company_phone%]' => $oneBrand['phone'],

			'[%company_email%]' => $oneBrand['email'],

		);

		foreach($merge_fields as $key => $val){

			$footer_email = str_replace($key, $val, $footer_email);

		}*/

		#

		$getMessageGolbal = $this->getMessageGolbal();

		$message_okrs = $getMessageGolbal;

		$merge_fields = array(

			'[%header_email%]' => $header_email,

			'[%tem_msg%]' => $msg,

			'[%footer_email%]' => $footer_email,

			//'[%link_reg%]' => '',

		);

		foreach ($merge_fields as $key => $val) {

			$message_okrs = str_replace($key, $val, $message_okrs);

		}

		//$attachments = !empty($oneReply['file_attach'])?ABSPATH.str_replace(DOMAIN_NAME,'',$oneReply['file_attach']):'';

		$owner = $clsConfiguration->getValue('SiteReplyName'); //CompanyName

		if (!$owner) $owner = PAGE_NAME;

		$from = $clsConfiguration->getValue('SiteReplyEmail');

		$to = "support@vietiso.com";

		$cc = array("ngochuy@vietiso.com", "loi@vietiso.com"); //"bichngoc@vietiso.com",

		// Send okrs

		$is_send_okrs = $clsISO->sendEmail($from, $to, $subject, $message_okrs, $owner);

		if (!empty($cc)) {

			foreach ($cc as $oneCC) {

				$is_send_email = $clsISO->sendEmail($from, $oneCC, $subject, $message_okrs, $owner);

			}

		}

		//send tms

		$subject = "[" . $oneTicket['domain_name'] . "] Bạn vừa Reply Ticket #" . $oneTicket['code'];

		$msg = '<p>Bạn vừa Reply Ticket từ ' . $oneTicket['domain_name'] . ' cho Ticket <a href="' . $oneTicket['domain_name'] . '/detail_ticket/' . $ticket_id . '">#' . $oneTicket['code'] . '</a> với nội dung:</p>';

		$msg .= str_ireplace(array("<img"), array('<img style="max-width:100%"'), $oneReply['content']);

		$message_tms = $getMessageGolbal;

		$merge_fields = array(

			'[%header_email%]' => $header_email,

			'[%tem_msg%]' => $msg,

			'[%footer_email%]' => $footer_email,

			//'[%link_reg%]' => '',

		);

		foreach ($merge_fields as $key => $val) {

			$message_tms = str_replace($key, $val, $message_tms);

		}

		//$attachments = !empty($oneReply['file_attach'])?ABSPATH.str_replace(DOMAIN_NAME,'',$oneReply['file_attach']):'';

		$owner = $clsConfiguration->getValue('SiteReplyName'); //CompanyName

		if (!$owner) $owner = PAGE_NAME;

		$from = $clsConfiguration->getValue('SiteReplyEmail');

		$to = $oneReply['user_email'];

		// Send tms

		//$is_send_tms = $clsEmail->sendEmail($from,$to,$subject,$message_tms,$owner,$attachments);

		$is_send_email = $clsISO->sendEmail($from, $to, $subject, $message_tms, $owner);

		//return empty($is_send_okrs)?0:1;

		return $is_send_okrs;

	}

	/*ticket*/

	function rmkdir($path, $mode = 0777)

	{

		return is_dir($path) || ($this->rmkdir(dirname($path), $mode) && $this->_mkdir($path, $mode));

	}

	function _mkdir($path, $mode = 0777)

	{

		$old = umask(0);

		$res = @mkdir($path, $mode);

		umask($old);

		return $res;

	}

	function is_url_exist($url)

	{

		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_NOBODY, true);

		curl_exec($ch);

		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		if ($code == 200) {

			$status = false;

		} else {

			$status = true;

		}

		curl_close($ch);

		return $status;

	}

	function updateInfoRateECB()

	{

		global $clsConfiguration;

		$info_rateECB = $clsConfiguration->getValue('info_rateECB');

		$is_update = 0;

		$cur_day = strtotime(date("d-m-Y"));

		if (empty($info_rateECB)) {

			$is_update = 1;

		} else {

			$info_rateECB = json_decode($info_rateECB, true);

			if (empty($info_rateECB[$cur_day])) {

				$is_update = 1;

			}

		}

		if ($is_update) {

			$clsVietISOSDK = new VietISOSDK();

			$info_rateECB = array();

			$source = 'https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';

			$getXML = $clsVietISOSDK->file_get_contents_curl($source);

			$xmlData = NULL;

			$p = xml_parser_create();

			xml_parse_into_struct($p, $getXML, $xmlData);

			xml_parser_free($p);

			if (!empty($xmlData)) {

				foreach ($xmlData as $v)

					if (!empty($v['attributes']) && $v['level'] == 4) {

						$attributes = $v['attributes'];

						$attributes['RATE'] = $this->parsePriceDecimal($v['attributes']['RATE']);

						$info_rateECB[$cur_day][] = $attributes;

					}

			}

			if (!empty($info_rateECB))

				$clsConfiguration->updateValue('info_rateECB', json_encode($info_rateECB));

		}

		return;

	}

	function updateInfoRateVCB()

	{

		global $clsConfiguration;

		$info_rateVCB = $clsConfiguration->getValue('info_rateVCB');

		$is_update = 0;

		$cur_day = strtotime(date("d-m-Y"));

		if (empty($info_rateVCB)) {

			$is_update = 1;

		} else {

			$info_rateVCB = json_decode($info_rateVCB, true);

			if (empty($info_rateVCB[$cur_day])) {

				$is_update = 1;

			}

		}

		if ($is_update) {

			$clsVietISOSDK = new VietISOSDK();

			$info_rateVCB = array();

			//$source = 'http://www.vietcombank.com.vn/ExchangeRates/ExrateXML.aspx';

			//$getXML = file_get_contents($source);

			$source = 'https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx?b=1';

			$getXML = $clsVietISOSDK->file_get_contents_curl($source);

			$xmlData = NULL;

			$p = xml_parser_create();

			xml_parse_into_struct($p, $getXML, $xmlData);

			xml_parser_free($p);

			if (!empty($xmlData)) {

				foreach ($xmlData as $v)

					if (!empty($v['attributes'])) {

						$attributes = $v['attributes'];

						$attributes['BUY'] = $this->parsePriceDecimal($v['attributes']['BUY']);

						$attributes['TRANSFER'] = $this->parsePriceDecimal($v['attributes']['TRANSFER']);

						$attributes['SELL'] = $this->parsePriceDecimal($v['attributes']['SELL']);

						$info_rateVCB[$cur_day][] = $attributes;

					}

			}

			if (!empty($info_rateVCB))

				$clsConfiguration->updateValue('info_rateVCB', json_encode($info_rateVCB));

		}

		return;

	}

	function getInfoRateDefault($attr = 'SELL')

	{

		global $core, $clsISO, $clsConfiguration;

		if (!function_exists('array_column')) {

			function array_column(array $input, $columnKey, $indexKey = null)

			{

				$array = array();

				foreach ($input as $value) {

					if (!array_key_exists($columnKey, $value)) {

						trigger_error("Key \"$columnKey\" does not exist in array");

						return false;

					}

					if (is_null($indexKey)) {

						$array[] = $value[$columnKey];

					} else {

						if (!array_key_exists($indexKey, $value)) {

							trigger_error("Key \"$indexKey\" does not exist in array");

							return false;

						}

						if (!is_scalar($value[$indexKey])) {

							trigger_error("Key \"$indexKey\" does not contain scalar value");

							return false;

						}

						$array[$value[$indexKey]] = $value[$columnKey];

					}

				}

				return $array;

			}

		}

		$clsVietISOSDK = new VietISOSDK();

		$clsProperty = new Property();

		$info_rate = array();

		$default_currency = $this->getDefaultCurrency();

		$info_rateVCB = $clsConfiguration->getValue('info_rateVCB'); //tỉ giá tiền VND

		$info_rateVCB = json_decode($info_rateVCB, true);

		$info_rateVCB = array_values($info_rateVCB);

		$info_rateVCB = $info_rateVCB[0];

		$_CURRENCYCODE = array_column($info_rateVCB, 'CURRENCYCODE');

		$where = "";

		$ecb_currency = $_CURRENCYECB = array();

		if ($clsISO->getVar('_MULTI_CURRENCY')) {

			$_JSON_CURRENCY = $clsISO->getVar('_JSON_CURRENCY');

			$_JSON_CURRENCY = json_decode($_JSON_CURRENCY, true);

			if (!empty($_JSON_CURRENCY)) {

				$where .= " and property_code in ('" . implode("','", $_JSON_CURRENCY) . "')";

			}

			#ECB

			$ecb_currency = array_diff($_JSON_CURRENCY, $_CURRENCYCODE, array('VND'));

			if (!empty($ecb_currency)) {

				$info_rateECB = $clsConfiguration->getValue('info_rateECB'); //tỉ giá tiền EUR

				$info_rateECB = json_decode($info_rateECB, true);

				$info_rateECB = array_values($info_rateECB);

				$info_rateECB = $info_rateECB[0];

				$_CURRENCYECB = array_column($info_rateECB, 'CURRENCY');

				#

				$key_rateVCB_EUR = array_search('EUR', $_CURRENCYCODE);

				$rate_exchange_EUR_VND = $info_rateVCB[$key_rateVCB_EUR][$attr];

			}

			#

		}

		$response = $clsVietISOSDK->doInApp('GET', '/api/get_property', json_encode(array('property_type' => '_CRM_CURRENCY', 'where' => $where)));

		$response = json_decode($response, true);

		$listProperty = $response['data']['lstProperty'];

		if ($default_currency == VND_ID) { //perfect

			if (!empty($listProperty)) {

				foreach ($listProperty as $k => $v) {

					$info_rate[$v['property_id']] = array(

						"property_code"	=> $v['property_code'],

						"title"			=> $v['title'],

					);

					if ($v['property_id'] == VND_ID) {

						$info_rate[$v['property_id']]['rate_exchange'] = 1;

					} else {

						$key_rateVCB = array_search($v['property_code'], $_CURRENCYCODE);

						if ($key_rateVCB !== false) {

							$info_rate[$v['property_id']]['rate_exchange'] = $info_rateVCB[$key_rateVCB][$attr];

						} else if (!empty($ecb_currency) && !empty($_CURRENCYECB) && in_array($v['property_code'], $ecb_currency)) { #ECB

							$key_rateECB = array_search($v['property_code'], $_CURRENCYECB);

							if ($key_rateECB !== false) {

								$rate_exchange_ECB = $info_rateECB[$key_rateECB]['RATE']; //EUR->ecb_currency

								$info_rate[$v['property_id']]['rate_exchange'] = $rate_exchange_EUR_VND / $rate_exchange_ECB;

							}

						}

					}

				}

			}

		} else { //other currency

			//$oneCurrencyDefault = $clsProperty->getOne($default_currency,"property_id,property_code,title");

			$oneCurrencyDefault = array();

			if (!empty($listProperty)) {

				foreach ($listProperty as $k => $v) {

					if ($v['property_id'] == $default_currency) {

						$oneCurrencyDefault = $v;

						break;

					}

				}

			}

			$key_rateVCB_default = array_search($oneCurrencyDefault['property_code'], $_CURRENCYCODE);

			if ($key_rateVCB_default !== false) { //currency VCB

				$rate_exchange_VCB = $info_rateVCB[$key_rateVCB_default][$attr]; //vcb_currency->VND

				// default:x(đ)=> usd = 4x, jp = 2x, usd/4=jp/2 => jp = 2usd/4 = usd/2 => logic: jp/usd = rate_jp/rate_usd

				// x/usd = 1/4, x/jp = 1/2 => jp/usd = 1/4 / 1/2 = 1/2

				if (!empty($listProperty)) {

					foreach ($listProperty as $k => $v) {

						$info_rate[$v['property_id']] = array(

							"property_code"	=> $v['property_code'],

							"title"			=> $v['title'],

						);

						if ($v['property_id'] == $default_currency) {

							$info_rate[$v['property_id']]['rate_exchange'] = 1; //perfect

						} else if ($v['property_id'] == VND_ID) {

							$info_rate[$v['property_id']]['rate_exchange'] = 1 / $rate_exchange_VCB; //perfect

						} else {

							$key_rateVCB = array_search($v['property_code'], $_CURRENCYCODE);

							if ($key_rateVCB !== false) {

								$info_rate[$v['property_id']]['rate_exchange'] = $info_rateVCB[$key_rateVCB][$attr] / $rate_exchange_VCB; //perfect

							} else if (!empty($ecb_currency) && !empty($_CURRENCYECB) && in_array($v['property_code'], $ecb_currency)) { #ECB

								$key_rateECB = array_search($v['property_code'], $_CURRENCYECB);

								if ($key_rateECB !== false) {

									$rate_exchange_ECB = $info_rateECB[$key_rateECB]['RATE']; //EUR->ecb_currency

									$key_rateECB_default = array_search($oneCurrencyDefault['property_code'], $_CURRENCYECB);

									if ($key_rateECB_default !== false) {

										$rate_exchange_ECB_default = $info_rateECB[$key_rateECB_default]['RATE'];

										$info_rate[$v['property_id']]['rate_exchange'] = $rate_exchange_ECB_default / $rate_exchange_ECB; //perfect

									} else { //updating....

										//$info_rate[$v['property_id']]['rate_exchange'] = $rate_exchange_EUR_VND/$rate_exchange_VCB/$rate_exchange_ECB;//perfect

										if ($default_currency == EUR_ID) {

											$info_rate[$v['property_id']]['rate_exchange'] = 1 / $rate_exchange_ECB; //perfect

										} else {

											$info_rate[$v['property_id']]['rate_exchange'] = $rate_exchange_EUR_VND / ($rate_exchange_VCB * $rate_exchange_ECB); //perfect

										}

									}

								}

							}

						}

					}

				}

			} else { //currency ECB

				$key_rateECB_default = array_search($oneCurrencyDefault['property_code'], $_CURRENCYECB);

				$rate_exchange_ECB_default = $info_rateECB[$key_rateECB_default]['RATE'];

				if (!empty($listProperty)) {

					foreach ($listProperty as $k => $v) {

						$info_rate[$v['property_id']] = array(

							"property_code"	=> $v['property_code'],

							"title"			=> $v['title'],

						);

						if ($v['property_id'] == $default_currency) {

							$info_rate[$v['property_id']]['rate_exchange'] = 1;

						} else if ($v['property_id'] == VND_ID) {

							$info_rate[$v['property_id']]['rate_exchange'] = $rate_exchange_ECB_default / $rate_exchange_EUR_VND; //perfect

						} else if ($v['property_id'] == EUR_ID) {

							$info_rate[$v['property_id']]['rate_exchange'] = $rate_exchange_ECB_default; //perfect

						} else {

							$key_rateECB = array_search($v['property_code'], $_CURRENCYECB);

							if ($key_rateECB !== false) {

								$info_rate[$v['property_id']]['rate_exchange'] = $rate_exchange_ECB_default / $info_rateECB[$key_rateECB]['RATE']; //perfect

							} else {

								$key_rateVCB = array_search($v['property_code'], $_CURRENCYCODE);

								$info_rate[$v['property_id']]['rate_exchange'] = $rate_exchange_ECB_default * $info_rateVCB[$key_rateVCB][$attr] / $rate_exchange_EUR_VND; //perfect

								//$rate_exchange_ECB_default/$rate_exchange_EUR_VND/$info_rateVCB[$key_rateVCB][$attr]

							}

						}

					}

				}

			}

		}

		//return $clsISO->print_pre($info_rate);

		return $info_rate;

	}

	function convertRateUpgrade($from, $to, $money)

	{

		global $clsConfiguration;

		$money = $this->processSmartNumber($money);

		/*if(doubleval($money) <= 0) return 0;*/

		if (empty($money)) return 0;

		$decimal_money = $clsConfiguration->getValue('decimal_money');

		if (!$decimal_money) $decimal_money = 2;

		$default_currency = $this->getDefaultCurrency();

		if (empty($from)) $from = $default_currency;

		if (empty($to)) $to = $default_currency;

		if ($to == VND_ID) $decimal_money = 0;

		if ($from == $to) {

			return round($money, $decimal_money);

		}

		//$info_rate = $this->getInfoRateData($classTable,$pval);

		$info_rate = $this->getInfoRateDefault();

		if ($from == $default_currency) {

			$ex = $info_rate[$to]['rate_exchange'];

			return round(($money / doubleval($ex)), $decimal_money);

		} else {

			if ($to == $default_currency) {

				$ex = $info_rate[$from]['rate_exchange'];

				return round($money * doubleval($ex), $decimal_money);

			} else {

				$ex = $info_rate[$from]['rate_exchange'] / $info_rate[$to]['rate_exchange'];

				return round($money * doubleval($ex), $decimal_money);

			}

		}

	}

	function gracefulRound($val, $min = 1, $precision = 2)

	{

		if (empty($val)) return 0;

		$result = round($val, $min);

		if ($result == 0) {

			return $this->gracefulRound($val, ++$min);

		} else {

			return array(

				"number"	=> round($val, $min + $precision),

				"pre"		=>	$min + $precision

			);

		}

	}

	function gracefulVND($val)

	{

		if (empty($val)) return 0;

		$val = $val / 1000;

		return round($val) * 1000;

	}

	function formatRateRead($currency_id = 0)

	{

		$default_currency = $this->getDefaultCurrency();

		//$info_rate = $this->getInfoRateData($classTable,$pval);

		$info_rate = $this->getInfoRateDefault();

		/*if(empty($currency_id)){

			$clsClassTable = new $classTable;

			$currency_id = $clsClassTable->getOneField('currency_id',$pval);

		}*/

		if (empty($currency_id)) {

			$currency_id = $default_currency;

		}

		$rate_exchange = $info_rate[$currency_id]['rate_exchange'];

		if ($currency_id == $default_currency) {

			$rate_exchange = 1;

		} elseif ($default_currency == VND_ID) {

			if ($this->getVar('_ECB_CURRENCY')) {

				$currency_code = $this->getRateCode($currency_id);

				$_JSON_ECB_CURRENCY = $this->getVar('_JSON_ECB_CURRENCY');

				$_JSON_ECB_CURRENCY = json_decode($_JSON_ECB_CURRENCY, true);

				if (!empty($_JSON_ECB_CURRENCY)) {

					if (in_array($currency_code, $_JSON_ECB_CURRENCY)) {

						$gracefulRound = $this->gracefulRound($rate_exchange);

						$rate_exchange = sprintf('%.' . $gracefulRound['pre'] . 'f', $gracefulRound['number']);

					} else {

						$rate_exchange = doubleval($rate_exchange);

					}

				} else {

					$rate_exchange = doubleval($rate_exchange);

				}

			} else

				$rate_exchange = doubleval($rate_exchange);

		} else {

			$gracefulRound = $this->gracefulRound($rate_exchange);

			$rate_exchange = sprintf('%.' . $gracefulRound['pre'] . 'f', $gracefulRound['number']);

		}

		return $rate_exchange;

	}

	function roundPrice($price, $currency_id = 0, $is_excel = 0)

	{

		global $clsConfiguration;

		if (empty($price)) return 0;

		$decimal_money = $clsConfiguration->getValue('decimal_money');

		if (!$decimal_money) $decimal_money = 2;

		if (empty($currency_id)) $currency_id = $this->getDefaultCurrency();

		$price = $this->parsePriceDecimal($price);

		if (in_array($currency_id, array(_VND_ID, VND_ID))) {

			//$price = round($price,0);

			//number_format($price,0);

			$price = $this->gracefulVND($price);

		} else {

			//$price = round($price,$decimal_money);

			//number_format($price, $decimal_money, '.', '');

			$gracefulRound = $this->gracefulRound($price, 1, 1);

			$price = sprintf('%.' . $gracefulRound['pre'] . 'f', $gracefulRound['number']);

		}

		if ($is_excel)

			return $price;

		return floatval($price);

	}

	function formatPriceRead($price, $currency_id = 0)

	{

		global $clsConfiguration;

		if (empty($price)) return 0;

		$decimal_money = $clsConfiguration->getValue('decimal_money');

		if (!$decimal_money) $decimal_money = 2;

		if (empty($currency_id)) $currency_id = $this->getDefaultCurrency();

		$price = $this->parsePriceDecimal($price);

		if (in_array($currency_id, array(_VND_ID, VND_ID))) {

			$decimal_money = 0;

			$price = $this->gracefulVND($price);

			if (strpos($price, '.') !== false) {

				if ($price < 0)

					return str_replace('-', '(', number_format($price, $decimal_money, ',', ' ')) . ')';

				return number_format($price, $decimal_money, ',', ' ');

			}

			if ($price < 0)

				return str_replace('-', '(', number_format($price, $decimal_money, ',', ' ')) . ')';

			$price = explode('.', $price);

			return str_replace(',', ' ', number_format($price[0])) . (isset($price[1]) ? ($price[1] == '' || $price[1] == '0' || $price[1] == '00' || $price[1] == '000' ? '' : ',' . $price[1]) : '');

		} else {

			if (strpos($price, '.') !== false) {

				if ($price < 0)

					return str_replace('-', '(', number_format($price, $decimal_money, ',', ' ')) . ')';

				return number_format($price, $decimal_money, ',', ' ');

			} else {

				if ($price < 0)

					return str_replace('-', '(', number_format($price, 0, ',', ' ')) . ')';

				return number_format($price, 0, ',', ' '); //$price.'.00'

			}

			$price = explode('.', $price);

			return str_replace(',', ' ', number_format($price[0])) . (isset($price[1]) ? ($price[1] == '' || $price[1] == '0' || $price[1] == '00' || $price[1] == '000' ? '' : ',' . $price[1]) : '');

		}

		return $price;

	}

	function parsePriceDecimal($price)

	{

		if (empty($price)) return 0;

		$price = preg_replace('/\s+/', '', $price);

		$price = str_replace(';', '', $price);

		$price = str_replace('₫', '', $price);

		$price = str_replace('$', '', $price);

		$price = str_replace(",", ".", $price);

		$price = preg_replace('/\.(?=.*\.)/', '', $price);

		return floatval($price);

	}

	function convertDateCreateFormat($str)

	{ //d.m.Y, d-m-Y, m/d/Y

		$date = date_create($str);

		return date_format($date, "Y-m-d");

	}

	function getDateCreateFormat($str, $obj = "Y")

	{ //d.m.Y, d-m-Y, m/d/Y

		$date = $this->convertDateCreateFormat($str);

		return date($obj, strtotime($date));

	}

	function convertTextToTime($text, $time = "00:00:00")

	{ //30 tháng 08/2013

		global $core;

		if (!empty($text)) {

			$text = str_replace(' ' . $core->get_Lang('month'), '', $text);

			$text = str_replace(' ' . $core->get_Lang('year'), '', $text);

			$text = str_replace('/', ' ', $text);

			$text = explode(' ', $text);

			$time = @str_replace(' : ', ":", $time);

			return strtotime($text[1] . '/' . $text[0] . '/' . $text[2] . ' ' . $time);

		}

		return 0;

	}

	function convertTimeToText($time, $IsFormatDateFull = false)

	{ //30 tháng 08/2013

		if (empty($time)) return;

		if ($IsFormatDateFull)

			return date('d/m/Y H:i A', $time);

		return date('d/m/Y', $time);

	}

	function convertTextToTime2($str, $time = "00:00:00")

	{

		if (empty($str)) return 0;

		$tmp = explode('/', $str);

		$time = preg_replace('/\s+/', '', $time);

		return strtotime($tmp[1] . '/' . $tmp[0] . '/' . $tmp[2] . " {$time}");

	}

	function genIMG($url, $w, $h, $style = "", $class = "thumb-small aspect-ratio__content")

	{

		return '<div class="aspect-ratio aspect-ratio--square aspect-ratio--square--50 aspect-ratio--interactive"><img class="' . $class . '" src="' . $url . '" width="' . $w . '" height="' . $h . '" style="' . $style . '" /></div>';

	}

	function getLang($txt)

	{

		global $core, $_LANG_ID;

		return $core->get_Lang($txt);

	}

	function parseNumber($num)

	{

		return (int) $num < 10 ? '0' . $num : $num;

	}

	function getArrayByText($text)

	{

		if (str_replace(',', '', $text) == $text)

			return explode(',', $text);

		return $this->getArrayByTextSlash($text);

	}

	function getArrayByTextSlash($text)

	{

		$ret = array();

		if (!empty($text) && $text != '|' && $text != '||') {

			$text = ltrim($text, '|');

			$text = rtrim($text, '|');

			$text = str_replace('||', '|', $text);

			$text = str_replace('|', ',', $text);

			$ret = explode(',', $text);

		}

		return $ret;

	}

	function getArrayByTextSlash2($text)

	{

		$text = str_replace('||', ',', $text);

		$text = str_replace('|', '', $text);

		return explode(',', $text);

	}

	function getSelectByPropertyTypeTitle($type, $property_id = 0, $title = '')

	{

		global $core, $adminid, $clsISO, $clsConfiguration;

		$clsProperty = new Property();

		$html = '<option value="0">' . $title . '</option>';

		$listProperty = $clsProperty->getAll("is_trash=0 and type='{$type}' order by order_no ASC", $clsProperty->pkey);

		if (!empty($listProperty)) {

			foreach ($listProperty as $property) {

				$sltc = ($property_id == $property[$clsProperty->pkey]) ? ' selected' : '';

				$html .= '<option value="' . $property[$clsProperty->pkey] . '"' . $sltc . '>' . $clsProperty->getTitle($property[$clsProperty->pkey]) . '</option>';

				$lstChild = $clsProperty->getAll("is_trash=0 and type='{$type}' order by order_no ASC", $clsProperty->pkey);

				if (!empty($lstChild)) {

					foreach ($lstChild as $child) {

						$sltc = ($property_id == $child[$clsProperty->pkey]) ? ' selected' : '';

						$html .= '<option value="' . $child[$clsProperty->pkey] . '"' . $sltc . '>____' . $clsProperty->getTitle($child[$clsProperty->pkey]) . '</option>';

						$lstChildSub = $clsProperty->getAll("is_trash=0 and type='{$type}' order by order_no ASC", $clsProperty->pkey);

						if (!empty($lstChildSub)) {

							foreach ($lstChildSub as $childsub) {

								$sltc = ($property_id == $childsub[$clsProperty->pkey]) ? ' selected' : '';

								$html .= '<option value="' . $childsub[$clsProperty->pkey] . '"' . $sltc . '>____' . $clsProperty->getTitle($childsub[$clsProperty->pkey]) . '</option>';

							}

							unset($lstChildSub);

						}

					}

					unset($lstChild);

				}

			}

			unset($listProperty);

		}

		return $html;

	}

	function toInt($str, $def = 0)

	{

		if (!empty($str))

			return (int) $str;

		return $def;

	}

	function getUniqid($more_entropy = true, $prefix = '')

	{

		return str_replace('.', '', uniqid($prefix, $more_entropy));

	}

	function resizeImage($path, $type = 'thumb_w', $width)

	{

		require_once($_SERVER['DOCUMENT_ROOT'] . '/images/Curl.php');

		$urlResize = 'https://m.oneguide.com.vn/images/service.image.php';

		$paramString = 'type=%s&width=%s&height=%s&filename=%s&im=%s';

		$curl = new \Curl();

		$urlString = $urlResize . '?' . sprintf($paramString, $type, $width, null, $path, 'Kingdom');

		$dataupload = $curl->get($urlString);

		return true;

	}

	function checkAvatarUser($avatar, $width = 240)

	{

		global $assign_list;

		if ($avatar) {

			$path = parse_url($avatar);

			if ($path['host'] != 'm.oneguide.com.vn' && $path['host'] == '') {

				switch ($width) {

					case 400:

						$image = 'https://m.oneguide.com.vn/images/thumb_w/400/' . $avatar;

						break;

					case 600:

						$image = 'https://m.oneguide.com.vn/images/thumb_w/600/' . $avatar;

						break;

					case 'avatar':

						$image = 'https://m.oneguide.com.vn/images/' . $avatar;

						break;

					default:

						$image = 'https://m.oneguide.com.vn/images/thumb_w/240/' . $avatar;

				}

				return @getimagesize($image) ? $image : $assign_list['URL_LAYOUT_IMAGES'] . 'no-avatar.png';

			} elseif ($path['host'] != 'oneguide.vn' && $path['host'] != '') {

				return $avatar;

			} else {

				return file_exists('https://m.oneguide.com.vn/images/thumb_w/240/' . $avatar) ? $assign_list['URL_LAYOUT_IMAGES'] . 'no-avatar.png' : 'https://m.oneguide.com.vn/images/thumb_w/240/' . $avatar;

			}

		} else {

			$avatar = $assign_list['URL_LAYOUT_IMAGES'] . 'no-avatar.png';

		}

		return $avatar;

	}

	function renderHTMLNoDocument($text)

	{

		return '<div class="text-center">

			<img class="mb5" src="' . _IMG_NODOCUMENT . '" width="40px" />

			<p class="type--subdued">' . $text . '</p>

		</div>';

	}

	function makeHtaccess()

	{

		return true;

	}

	function parsePrice($amount, $paid = 2)

	{

		return round($amount, $paid);

	}

	function parseName($name)

	{

		$tmp = preg_split('/\s/', $name);

		$last_name = $tmp[count($tmp) - 1];

		unset($tmp[count($tmp) - 1]);

		$first_name = implode(' ', $tmp);

		return array(

			0 => $first_name,

			1 => $last_name

		);

	}

	function limit_textIso($text, $limit)

	{

		$text = strip_tags($text);

		if (str_word_count($text, 0) > $limit) {

			$words = str_word_count($text, 2);

			$pos = array_keys($words);

			$text = substr($text, 0, $pos[$limit]) . '...';

		}

		return $text;

	}

	function formatPriceText($price, $limit = '0')

	{

		global $_LANG_ID;

		if ($price > 1000) {

			if ($_LANG_ID == 'vn') {

				return $this->formatPrice(round($price / 1000), $limit) . "k";

			} else {

				return $this->formatPrice($price / 1000, $limit) . "k";

			}

		}

		return $this->formatPrice($price, $limit);

	}

	function formatPrice($string, $limit = '0')

	{

		//return number_format($string,$limit,",",".");

		return number_format($string, $limit, ",", ".");

	}

	function formatPrice2($string, $limit = '0')

	{

		//return number_format($string,$limit,",",".");

		return number_format($string, $limit, ".", ",");

	}

	function priceFormat($price)

	{

		return number_format($price, 0, ',', '.');

	}

	function getVar($key = '')

	{

		if (!defined($key)) return false;

		$res = get_defined_constants(false);

		return $res[$key];

	}

	function checkGoogleReCAPTCHA()

	{

		global $dbconn, $core;

		//lấy dữ liệu được post lên

		$site_key_post = $_POST['g-recaptcha-response'];

		//lấy IP của khach

		$remoteip = $this->getRealIP();

		//tạo link kết nối

		$api_url = reCAPTCHA_APIURL . '?secret=' . reCAPTCHA_SECRET . '&response=' . $site_key_post . '&remoteip=' . $remoteip;

		//lấy kết quả trả về từ Google

		$response = FALSE;

		if (function_exists('file_get_contents')) {

			$response = file_get_contents($api_url);

		}

		if ($response === FALSE && function_exists('curl_init')) {

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);

			curl_setopt($ch, CURLOPT_HEADER, 0);

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_URL, $api_url);

			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

			$response = curl_exec($ch);

			curl_close($ch);

		}

		// Json

		if ($response !== FALSE) {

			$response = json_decode($response);

			if (!isset($response->success)) return false;

			if ($response->success === true)

				return true;

			return false;

		}

		return false;

	}

	function UpdateOrderNo($clsTable)

	{

		$clsClassTable = new $clsTable;

		$assign_list["clsClassTable"] = $clsClassTable;

		$listItem = $clsClassTable->getAll("1=1", $clsClassTable->pkey . ",order_no");

		for ($i = 0; $i <= count($listItem); $i++) {

			$order_no = $listItem[$i]['order_no'] + 1;

			$clsClassTable->updateOne($listItem[$i][$clsClassTable->pkey], "order_no='" . $order_no . "'");

		}

	}

	function getBrowser()

	{

		require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/Mobile_Detect.php';

		$detect = new Mobile_Detect;

		$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

		return $deviceType;

	}

	function getTourInHomeByCountry($country_id, $limit = 0)

	{

		$clsTour = new Tour();

		$cond = "is_trash=0 and is_online=1 and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE country_id='$country_id')";

		if (intval($limit) > 0) $cond .= " limit 0,$limit"; //print_r($country_id); die();

		$lstAllTour = $clsTour->getAll($cond);

		return $lstAllTour;

	}

	function print_pre($expression, $wrap = false)

	{

		$css = 'border:1px dashed #06f;padding:1em;text-align:left;';

		if ($wrap) {

			$str = '<p style="' . $css . '"><tt>' . str_replace(

				array('  ', "\n"),

				array('&nbsp; ', '<br />'),

				htmlspecialchars(print_r($expression, true))

			) . '</tt></p>';

		} else {

			$str = '<pre style="' . $css . '">'

				. htmlspecialchars(print_r($expression, true)) . '</pre>';

		}

		echo $str;

	}

	function pre($expression, $wrap = true)

	{

		$css = 'border:1px dashed #06f;padding:1em;text-align:left;';

		if ($wrap) {

			$str = '<p style="' . $css . '"><tt>' . str_replace(

				array('  ', "\n"),

				array('&nbsp; ', '<br />'),

				htmlspecialchars(print_r($expression, true))

			) . '</tt></p>';

		} else {

			$str = '<pre style="' . $css . '">'

				. htmlspecialchars(print_r($expression, true)) . '</pre>';

		}

		echo $str;

	}

	function getCruiseCabinIdSelected($cruise_cabin_id, $cabin_type_id)

	{

		$BOOK_VAL = vnSessionGetVar('BOOK_VAL');

		$cabinSelect = $BOOK_VAL['cabinSelect'];

		return $cabinSelect[$cruise_cabin_id][$cabin_type_id];

	}

	function getHotelRoomId($hotel_id)

	{

		$clsHotelRoom = new HotelRoom();

		$one = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$hotel_id' and is_booking='1' order by price asc limit 0,1", $clsHotelRoom->pkey);

		$hotel_room_id = $one[0]['hotel_room_id'];

		return $hotel_room_id;

	}

	function getTourInHome($city_id, $limit = 0)

	{

		$clsTour = new Tour();

		$cond = "is_trash=0 and is_online=1 and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE city_id='$city_id')";

		if (intval($limit) > 0) $cond .= " limit 0,$limit"; //print_r($country_id); die();

		$lstAll = $clsTour->getAll($cond);

		return $lstAll;

	}

	function getCityByCountry($country_id, $limit = 0)

	{

		$clsCity = new City();

		$cond = "is_trash=0 and is_online=1 and country_id='$country_id'";

		if (intval($limit) > 0)

			$cond .= " limit 0,$limit";

		$lstAll = $clsCity->getAll($cond);

		return $lstAll;

	}

	function getGuideCat($cat_id, $city_id, $limit = 0)

	{

		$clsGuide = new Guide();

		$cond = "is_trash=0 and is_online=1 and cat_id='$cat_id' and city_id='$city_id'";

		if (intval($limit) > 0) $cond .= " limit 0,$limit"; //print_r($country_id); die();

		$lstAll = $clsGuide->getAll($cond);

		return $lstAll;

	}

	function getItemByAlphabet($country_id, $city_id = 0, $charactor)

	{

		$clsCity = new City();

		$charL = strtolower($charactor);

		$charU = strtoupper($charactor);

		$all = $clsCity->getAll("is_trash=0 and is_online=1 and country_id='$country_id' and city_id<>'$city_id' and (slug like '$charL%' or slug like '$charU%')");

		return $all;

	}

	function getPaymentMethod($method_id)

	{

		global $core;

		if ($method_id == 1) {

			return $core->get_Lang('Cash payments');

		} elseif ($method_id == 2) {

			return $core->get_Lang('Bank Transfer');

		} elseif ($method_id == 3) {

			return $core->get_Lang('ONEPAY Inbound');

		} elseif ($method_id == 4) {

			return $core->get_Lang('ONEPAY Outbound');

		} else {

			return $core->get_Lang('Paypal payments');

		}

	}

	function getCityByRegionAlphabet($country_id, $region_id = 0, $charactor)

	{

		$clsCity = new City();

		$charL = strtolower($charactor);

		$charU = strtoupper($charactor);

		$sql = "is_trash=0 and is_online=1 and country_id='$country_id' and region_id='$region_id' and (slug like '$charL%' or slug like '$charU%')";

		$all = $clsCity->getAll("is_trash=0 and is_online=1 and country_id='$country_id' and region_id='$region_id' and (slug like '$charL%' or slug like '$charU%')");

		return $all;

	}

	function getItemByAlphabetCityHotel($country_id, $city_id = 0, $charactor, $region_id = '')

	{

		$clsCity = new City();

		$charL = strtolower($charactor);

		$charU = strtoupper($charactor);

		if ($region_id > 0) {

			$all = $clsCity->getAll("is_trash=0 and is_online=1 and country_id='$country_id' and region_id='$region_id' and city_id<>'$city_id' and (slug like '$charL%' or slug like '$charU%') and city_id IN (SELECT city_id FROM " . DB_PREFIX . "hotel WHERE is_trash=0 and is_online=1)", $clsCity->pkey);

		} else {

			$all = $clsCity->getAll("is_trash=0 and is_online=1 and country_id='$country_id' and city_id<>'$city_id' and (slug like '$charL%' or slug like '$charU%') and city_id IN (SELECT city_id FROM " . DB_PREFIX . "hotel WHERE is_trash=0 and is_online=1)", $clsCity->pkey);

		}

		return $all;

	}

	function getItemByAlphabetCityGuide($country_id = 0, $region_id = 0, $city_id = 0, $cat_id = 0, $charactor)

	{

		$clsCity = new City();

		$charL = strtolower($charactor);

		$charU = strtoupper($charactor);

		if ($region_id > 0) {

			$cond = "is_trash=0 and is_online=1 and country_id='$country_id' and region_id='$region_id' and (slug like '$charL%' or slug like '$charU%') and city_id IN (SELECT city_id FROM " . DB_PREFIX . "guide where (cat_id='$cat_id' or list_cat_id like '%|$cat_id|%'))";

		} else {

			if ($city_id > 0) {

				$cond = "is_trash=0 and is_online=1 and country_id='$country_id' and city_id<>'$city_id' and (slug like '$charL%' or slug like '$charU%') and city_id IN (SELECT city_id FROM " . DB_PREFIX . "guide where (cat_id='$cat_id' or list_cat_id like '%|$cat_id|%'))";

			} else {

				$cond = "is_trash=0 and is_online=1 and country_id='$country_id' and (slug like '$charL%' or slug like '$charU%') and city_id IN (SELECT city_id FROM " . DB_PREFIX . "guide where (cat_id='$cat_id' or list_cat_id like '%|$cat_id|%'))";

			}

		}

		$all = $clsCity->getAll($cond);

		return $all;

	}

	function getItemByAlphabetCityBlog($country_id, $city_id = 0, $charactor)

	{

		$clsCity = new City();

		$charL = strtolower($charactor);

		$charU = strtoupper($charactor);

		$all = $clsCity->getAll("is_trash=0 and is_online=1 and country_id='$country_id' and city_id<>'$city_id' and (slug like '$charL%' or slug like '$charU%') and city_id IN (SELECT city_id FROM " . DB_PREFIX . "blog_destination WHERE country_id='$country_id' and blog_id IN (SELECT blog_id FROM " . DB_PREFIX . "blog where country_id='country_id')) ", $clsCity->pkey);

		return $all;

	}

	function unserializeData($data)

	{

		return unserialize($data);

	}

	function sendEmailUpdate($from, $to, $subject, $message, $owner)

	{

		global $core, $dbconn, $clsISO, $clsConfiguration;

		/** Info E-mail */

		$mail_type = $clsConfiguration->getValue('mail_type');

		$status = 'error';

		$msg = "";

		if ($mail_type == 'smtp') {

			$mail_smtp_username = trim($clsConfiguration->getValue('mail_smtp_username'));

			$mail_smtp_password = trim($clsConfiguration->getValue('mail_smtp_password'));

			$mail_smtp_secure = trim($clsConfiguration->getValue('mail_smtp_secure'));

			$mail_smtp_host = trim($clsConfiguration->getValue('mail_smtp_host'));

			$mail_smtp_port = trim($clsConfiguration->getValue('mail_smtp_port'));

			require_once(DIR_INCLUDES . '/mailer/class.phpmailer.php');

			$mail = new PHPMailer(true);

			try {

				$mail->CharSet = 'utf-8';

				$mail->XMailer = $clsConfiguration->getValue("SiteReplyName");

				$mail->From = $from;

				$mail->FromName = html_entity_decode($owner, ENT_QUOTES);

				$mail->AddAddress(trim($to));

				// SMTP

				$mail->IsSMTP();

				$mail->Hostname = $_SERVER['SERVER_NAME'];

				if (!empty($mail_smtp_host)) $mail->Host = $mail_smtp_host;

				if (!empty($mail_smtp_port)) $mail->Port = $mail_smtp_port;

				if ($mail_smtp_secure != 'none') $mail->SMTPSecure = $mail_smtp_secure;

				// Authenticate

				$mail->SMTPAuth = true;

				$mail->Username = $mail_smtp_username;

				$mail->Password = $mail_smtp_password;

				$mail->Sender = $mail->From;

				// Content

				$mail->isHTML(true);

				$mail->Subject = html_entity_decode($subject, ENT_QUOTES);

				$mail->Body = $message;

				// Send

				if ($mail->Send()) {

					$status = 'success';

					$msg = $core->get_Lang('Send email successfully');

				}

				$mail->ClearAddresses();

			} catch (Exception $e) {

				$status = 'error';

				$msg = $mail->ErrorInfo;

			}

		} else if ($mail_type == 'sendgrid') {

			$mail_sendgrid_api = $clsISO->toInt(trim($clsConfiguration->getValue('mail_sendgrid_api_enable')));

			$mail_sendgrid_api_key = trim($clsConfiguration->getValue('mail_sendgrid_api_key'));

			$mail_sendgrid_api_url = trim($clsConfiguration->getValue('mail_sendgrid_api_url'));

			$mail_sendgrid_username = trim($clsConfiguration->getValue('mail_sendgrid_username'));

			$mail_sendgrid_password = trim($clsConfiguration->getValue('mail_sendgrid_password'));

			if ($mail_sendgrid_api) {

				if (!empty($mail_sendgrid_api_key)) {

					$params = array(

						'personalizations' => array(

							array(

								'subject' => $subject,

								'to' => array(

									array(

										'email'	=> $to,

										'name' => $owner,

									),

								),

							)

						),

						'from' => array(

							"name" => $owner,

							"email" => $from

						),

						'reply_to' => array(

							"name" => $owner,

							"email" => $from

						),

						'content' => array(

							array(

								"type" => 'text/html',

								"value" => html_entity_decode($message)

							),

						)

					);

					// Generate curl request

					$ch = @curl_init($mail_sendgrid_api_url);

					// Tell curl to use HTTP TimeOut

					curl_setopt($ch, CURLOPT_ENCODING, "utf-8");

					curl_setopt($ch, CURLOPT_MAXREDIRS, 30);

					curl_setopt($ch, CURLOPT_TIMEOUT, 60);

					// Tell curl to use HTTP Version

					curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

					// Tell curl not to return headers,but do return the response

					curl_setopt($ch, CURLOPT_HEADER, false);

					// Tell curl to

					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					// Tell curl to use HTTP POST

					curl_setopt($ch, CURLOPT_POST, true);

					// Tell curl that this is the body of the POST

					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

					curl_setopt($ch, CURLOPT_POSTFIELDS, @json_encode($params));

					curl_setopt($ch, CURLOPT_HTTPHEADER, array(

						'Content-Type: application/json',

						'Authorization: Bearer ' . $mail_sendgrid_api_key

					));

					// obtain response

					$response = curl_exec($ch);

					$err = curl_error($ch);

					@curl_close($ch);

					// print everything out

					$status = 'error';

					$msg =  $core->get_Lang('Send test email error');

					if (empty($err)) {

						$status = 'success';

						$msg = $core->get_Lang('Send test email successfully');

					}

				} else {

					//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

					$params = array(

						'api_user' => $mail_sendgrid_username,

						'api_key' => $mail_sendgrid_password,

						'to' => $to,

						'replyto' => $to,

						'subject' => $subject,

						'html' => $message,

						'from' => $from,

						'fromname' => $owner

					);

					// Generate curl request

					$ch = curl_init($mail_sendgrid_api_url);

					// Tell curl to use HTTP POST

					curl_setopt($ch, CURLOPT_POST, true);

					// Tell curl that this is the body of the POST

					curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

					// Tell curl not to return headers,but do return the response

					curl_setopt($ch, CURLOPT_HEADER, false);

					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

					// obtain response

					$response = curl_exec($ch);

					curl_close($ch);

					// print everything out

					$status = 'error';

					$msg =  $core->get_Lang('Send test email error');

					if (strpos($response, 'success') == true) {

						$status = 'success';

						$msg = $core->get_Lang('Send test email successfully');

					}

				}

			} else {

				$url = 'https://go.vietiso.com/modules/servers/sendgrid/password.txt';

				if (function_exists('curl_init')) {

					$curl = curl_init();

					curl_setopt($curl, CURLOPT_URL, $url);

					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

					curl_setopt($curl, CURLOPT_HEADER, false);

					$content = curl_exec($curl);

					curl_close($curl);

				} else {

					$content = file_get_contents($url);

				}

				list($username, $password, $api_key) = explode('|', $content);

				$mail_sendgrid_username = base64_decode($username);

				$mail_sendgrid_password = base64_decode($password);

				$mail_sendgrid_api_key = $api_key;

				$mail_sendgrid_api = 1;

				$mail_sendgrid_api_url = 'https://api.sendgrid.com/v3/mail/send';

				if ($mail_sendgrid_api) {

					if (!empty($mail_sendgrid_api_key)) {

						$params = array(

							'personalizations' => array(

								array(

									'subject' => $subject,

									'to' => array(

										array(

											'email'	=> $to,

											'name' => $owner,

										),

									),

								)

							),

							'from' => array(

								"name" => $owner,

								"email" => $from

							),

							'reply_to' => array(

								"name" => $owner,

								"email" => $from

							),

							'content' => array(

								array(

									"type" => 'text/html',

									"value" => $message

								),

							)

						);

						// Generate curl request

						$ch = @curl_init($mail_sendgrid_api_url);

						// Tell curl to use HTTP TimeOut

						curl_setopt($ch, CURLOPT_ENCODING, "utf-8");

						curl_setopt($ch, CURLOPT_MAXREDIRS, 30);

						curl_setopt($ch, CURLOPT_TIMEOUT, 60);

						// Tell curl to use HTTP Version

						curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

						// Tell curl not to return headers, but do return the response

						curl_setopt($ch, CURLOPT_HEADER, false);

						// Tell curl to

						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

						// Tell curl to use HTTP POST

						curl_setopt($ch, CURLOPT_POST, true);

						// Tell curl that this is the body of the POST

						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

						curl_setopt($ch, CURLOPT_POSTFIELDS, @json_encode($params));

						curl_setopt($ch, CURLOPT_HTTPHEADER, array(

							'Content-Type: application/json',

							'Authorization: Bearer ' . $mail_sendgrid_api_key

						));

						// obtain response

						$response = curl_exec($ch);

						$err = curl_error($ch);

						@curl_close($ch);

						// print everything out

						$status = 'error';

						$msg =  $core->get_Lang('Send email error');

						if (empty($err)) {

							$status = 'success';

							$msg = $core->get_Lang('Send email successfully');

						}

					} else {

						//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

						$params = array(

							'api_user' => $mail_sendgrid_username,

							'api_key' => $mail_sendgrid_password,

							'to' => $to,

							'replyto' => $to,

							'subject' => $subject,

							'html' => $message,

							'from' => $from,

							'fromname' => $owner

						);

						// Generate curl request

						$ch = curl_init($mail_sendgrid_api_url);

						// Tell curl to use HTTP POST

						curl_setopt($ch, CURLOPT_POST, true);

						// Tell curl that this is the body of the POST

						curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

						// Tell curl not to return headers, but do return the response

						curl_setopt($ch, CURLOPT_HEADER, false);

						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

						// obtain response

						$response = curl_exec($ch);

						curl_close($ch);

						// print everything out

						$status = 'error';

						$msg =  $core->get_Lang('Send email error');

						if (strpos($response, 'success') == true) {

							$status = 'success';

							$msg = $core->get_Lang('Send email successfully');

						}

					}

				} else {

					if (!empty($mail_sendgrid_api_key)) {

						require_once(DIR_INCLUDES . '/SendGrid/vendor/autoload.php');

						$email = new \SendGrid\Mail\Mail();

						$email->setFrom($from, $owner);

						$email->setSubject($subject);

						$email->addTo($to, "");

						$email->addContent("text/html", $message);

						$sendgrid = new \SendGrid($mail_sendgrid_api_key);

						try {

							$response = $sendgrid->send($email);

							if ($response->statusCode() == '200' || $response->statusCode() == '202') {

								$status = 'success';

								$msg =  $core->get_Lang('Send email successfully');

							}

						} catch (Exception $e) {

							$status = 'error';

							$msg = $e->getMessage();

						}

					} else {

						require_once(DIR_INCLUDES . '/SendGrid/vendor/autoload.php');

						$sendgrid = new SendGrid(

							$mail_sendgrid_username,

							$mail_sendgrid_password,

							array("turn_off_ssl_verification" => false)

						);

						// Create object

						$mail = new \SendGrid\Email();

						// Param send email

						$mail->addTo($to)

							->setFrom($from)

							->setFromName($owner)

							->setReplyTo($to)

							->setSubject($subject)

							->setHtml($message)

							->addHeader('X-Sent-Using', 'SendGrid-API')

							->addHeader('X-Transport', 'web');

						// obtain response

						$response = $sendgrid->send($mail);

						// Return

						$status = 'error';

						$msg =  $core->get_Lang('Send email error');

						if (

							isset($response->body['message'])

							&& $response->body['message'] == 'success'

						) {

							$status = 'success';

							$msg =  $core->get_Lang('Send email successfully');

						}

					}

				}

			}

			/** End Sendgrid */

		}

		// output

		echo $status . '|||' . $msg;

		die();

	}

	function sendEmail($from, $to, $subject, $message, $owner, $debug = 0)

	{

		global $core, $dbconn, $clsISO, $clsConfiguration;

		/** Info E-mail */

		$mail_type = $clsConfiguration->getValue('SiteMailType');

		$status = 'error';

		$msg = "";

		//if($debug) $mail_type = "smtp";

		if ($mail_type == 'smtp_old') {

			$mail_smtp_username = trim($clsConfiguration->getValue('SiteSmtpUsername'));

			$mail_smtp_password = trim($clsConfiguration->getValue('SiteSmtpPassword'));

			$mail_smtp_secure = trim($clsConfiguration->getValue('SiteSmtpSSL'));

			$mail_smtp_host = trim($clsConfiguration->getValue('SiteSmtpHost'));

			$mail_smtp_port = trim($clsConfiguration->getValue('SiteSmtpPort'));

			require_once(DIR_INCLUDES . '/mailer/class.phpmailer.php');

			$mail = new PHPMailer(true);

			try {

				$mail->CharSet = 'utf-8';

				$mail->XMailer = $clsConfiguration->getValue("SiteReplyName");

				$mail->From = $from;

				$mail->FromName = html_entity_decode($owner, ENT_QUOTES);

				$mail->AddAddress(trim($to));

				// SMTP

				$mail->IsSMTP();

				$mail->Hostname = $_SERVER['SERVER_NAME'];

				if (!empty($mail_smtp_host)) $mail->Host = $mail_smtp_host;

				if (!empty($mail_smtp_port)) $mail->Port = $mail_smtp_port;

				if ($mail_smtp_secure != 'none') $mail->SMTPSecure = $mail_smtp_secure;

				// Authenticate

				$mail->SMTPDebug = $debug;

				$mail->SMTPAuth = true;

				$mail->Username = $mail_smtp_username;

				$mail->Password = $mail_smtp_password;

				$mail->Sender = $mail->From;

				// Content

				$mail->isHTML(true);

				$mail->Subject = html_entity_decode($subject, ENT_QUOTES);

				$mail->Body = $message;

				// Send

				if ($mail->Send()) {

					$status = 'success';

					$msg = $core->get_Lang('Send email successfully');

				}

				$mail->ClearAddresses();

			} catch (Exception $e) {

				$status = 'error';

				$msg = $mail->ErrorInfo;

			}

		} else if ($mail_type == 'smtp') {

			$mail_type = 'phpmailer6.6';

			if ($mail_type == 'phpmailer6.6') {

				$message = str_ireplace(array("<img"), array('<img style="max-width:100%"'), $message);

				$message = $clsISO->parseImageInContent($message, 0);

				$param = array(

					//"debug" => $this->debug,

					"debug" => $debug,

					"host"	=> trim($clsConfiguration->getValue('SiteSmtpHost')),

					"post"	=> $clsConfiguration->getValue('SiteSmtpPort'),

					"content_type"	=> $plaintext ? 'text/plain' : 'text/html',

					"username"	=> trim($clsConfiguration->getValue('SiteSmtpUsername')),

					"password"	=> trim($clsConfiguration->getValue('SiteSmtpPassword')),

					"fromemail"	=> trim($from),

					"fromname"	=> trim($owner),

					"toemail"	=> trim($to),

					"toname"	=> trim(!empty($owner) ? $owner : 'isoCMS'),

					"replyemail"	=> $from,

					"lstcc"		=> $from,

					//"lstbcc"		=> $bcc?$CFG->getValue('BCCMessages'):'',

					"attachments"	=> '',

					"subject"		=> html_entity_decode($subject, ENT_QUOTES),

					"message"		=> $message,

				);

				if ($clsConfiguration->getValue('SiteSmtpSSL') !== 'none') {

					$param['secure'] = $clsConfiguration->getValue('SiteSmtpSSL');

				}

				$clsEmailSMTP = new EmailSMTP($param);

				$is_send_mail = $clsEmailSMTP->senMail();

				return $is_send_mail;

			} else {

				global $mail;

				// (Re)create it, if it's gone missing

				if (!($mail instanceof PHPMailer)) {

					require_once(DIR_INCLUDES . '/mailer/PHPMailer/class.phpmailer.php');

					require_once(DIR_INCLUDES . '/mailer/PHPMailer/class.pop3.php');

					require_once(DIR_INCLUDES . '/mailer/PHPMailer/class.smtp.php');

					$mail = new PHPMailer(true);

				}

				try {

					// Empty out the values that may be set

					$mail->clearAllRecipients();

					$mail->clearAttachments();

					$mail->clearCustomHeaders();

					$mail->clearReplyTos();

					$mail->ClearAddresses();

					//$mail->From = ;

					//$mail->FromName = ;

					$mail->setFrom(trim($from), trim($owner));

					// Set Content-Type and charset

					$content_type = 'text/html';

					if ($plaintext) {

						$content_type = 'text/plain';

					}

					$mail->ContentType = $content_type;

					$mail->CharSet = 'utf-8';

					//$mail->XMailer = $clsConfiguration->getValue("mail_from_name");

					if (empty($owner)) $owner = 'VietISO';

					$mail->AddAddress(trim($to), $owner);

					//$mail->Mailer = 'smtp';

					//Enable SMTP debugging.

					$mail->SMTPDebug = $debug;

					$mail->Priority  = 3;

					$mail->Encoding  = '8bit';

					//$mail->SMTPAutoTLS  = 1;

					//Set PHPMailer to use SMTP.

					$mail->IsSMTP();

					if ('text/html' == $content_type) {

						$mail->IsHTML(true);

					}

					//Set SMTP host name

					$mail->Host = $clsConfiguration->getValue('SiteSmtpHost');

					$mail->Port = $clsConfiguration->getValue('SiteSmtpPort');

					if ($clsConfiguration->getValue('SiteSmtpSSL') !== 'none') {

						$mail->SMTPSecure = $clsConfiguration->getValue('SiteSmtpSSL');

					}

					$mail->SMTPOptions = array(

						'ssl' => array(

							'verify_peer' => false,

							'verify_peer_name' => false,

							'allow_self_signed' => true

						)

					);

					//Provide username and password

					if ($clsConfiguration->getValue('mail_smtp_authentication') == 1) {

						$mail->SMTPAuth = true;

						$mail->Username = trim($clsConfiguration->getValue('SiteSmtpUsername'));

						$mail->Password = trim($clsConfiguration->getValue('SiteSmtpPassword'));

					}

					$mail->Sender = $mail->From;

					if ($fromemail != $clsConfiguration->getValue('SiteSmtpUsername')) {

						$mail->AddReplyTo($from, html_entity_decode($owner, ENT_QUOTES));

					}

					$mail->Subject = html_entity_decode($subject, ENT_QUOTES);

					if ($plaintext) {

						$message = html_entity_decode($message, ENT_QUOTES);

						$mail->Body = strip_tags($message);

					} else {

						$message = str_ireplace(array("<img"), array('<img style="max-width:100%"'), $message);

						$mail->Body = $clsISO->parseImageInContent($message, 0);

						$message_text = str_replace("<p>", "", $message);

						$message_text = str_replace("</p>", "\r\n\r\n", $message_text);

						$message_text = str_replace("<br>", "\r\n", $message_text);

						$message_text = str_replace("<br />", "\r\n", $message_text);

						$message_text = strip_tags($message_text);

						$mail->AltBody = html_entity_decode($message_text, ENT_QUOTES);

					}

					// Add CC

					if (is_array($cc) && !empty($cc)) {

						foreach ($cc as $value) {

							$ccaddress = trim($value);

							if ($ccaddress) {

								$mail->AddCC($ccaddress);

							}

						}

					}

					// Attachments

					if (!empty($attachments)) {

						if (is_array($attachments)) {

							foreach ($attachments as $filename) {

								$mail->AddAttachment($filename);

							}

						} else {

							$mail->AddAttachment($attachments);

						}

					}

					// Send Email

					try {

						$is_send_mail = $mail->send();

					} catch (phpmailerException $e) {

						if ($debug)

							echo 'Caught exception: ' . $e->getMessage() . "\n";

						$is_send_mail = false;

					}

				} catch (Exception $e) {

					if ($debug)

						echo 'Caught exception: ' . $e->getMessage() . "\n";

					$is_send_mail =  false;

				}

				return $is_send_mail;

			}

		} else if ($mail_type == 'sendgrid') {

			$url = 'https://go.vietiso.com/modules/servers/sendgrid/password.txt';

			if (function_exists('curl_init')) {

				$curl = curl_init();

				curl_setopt($curl, CURLOPT_URL, $url);

				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

				curl_setopt($curl, CURLOPT_HEADER, false);

				$content = curl_exec($curl);

				curl_close($curl);

			} else {

				$content = file_get_contents($url);

			}

			//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

			list($username, $password, $api_key) = explode('|', $content);

			$mail_sendgrid_username = base64_decode($username);

			$mail_sendgrid_password = base64_decode($password);

			$mail_sendgrid_api_key = $api_key;

			//$mail_sendgrid_username = 'nguyenvanloi';

			//$mail_sendgrid_password = 'nguyenvanloi';

			//$mail_sendgrid_api_key='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';

			$mail_sendgrid_api = 1;

			$mail_sendgrid_api_url = 'https://api.sendgrid.com/v3/mail/send';

			if ($mail_sendgrid_api) {

				if (!empty($mail_sendgrid_api_key)) {

					$params = array(

						'personalizations' => array(

							array(

								'subject' => $subject,

								'to' => array(

									array(

										'email'	=> $to,

										'name' => $owner,

									),

								),

							)

						),

						'from' => array(

							"name" => $owner,

							"email" => $from

						),

						'reply_to' => array(

							"name" => $owner,

							"email" => $from

						),

						'content' => array(

							array(

								"type" => 'text/html',

								"value" => $message

							),

						)

					);

					// Generate curl request

					$ch = @curl_init($mail_sendgrid_api_url);

					// Tell curl to use HTTP TimeOut

					curl_setopt($ch, CURLOPT_ENCODING, "utf-8");

					curl_setopt($ch, CURLOPT_MAXREDIRS, 30);

					curl_setopt($ch, CURLOPT_TIMEOUT, 60);

					// Tell curl to use HTTP Version

					curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

					// Tell curl not to return headers, but do return the response

					curl_setopt($ch, CURLOPT_HEADER, false);

					// Tell curl to

					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					// Tell curl to use HTTP POST

					curl_setopt($ch, CURLOPT_POST, true);

					// Tell curl that this is the body of the POST

					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

					curl_setopt($ch, CURLOPT_POSTFIELDS, @json_encode($params));

					curl_setopt($ch, CURLOPT_HTTPHEADER, array(

						'Content-Type: application/json',

						'Authorization: Bearer ' . $mail_sendgrid_api_key

					));

					// obtain response

					$response = curl_exec($ch);

					$err = curl_error($ch);

					@curl_close($ch);

					// print everything out

					$status = 'error';

					$msg =  $core->get_Lang('Send email error');

					if ($err) {

						$status = 'success';

						$msg = $core->get_Lang('Send email successfully');

					}

				} else {

					//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

					$params = array(

						'api_user' => $mail_sendgrid_username,

						'api_key' => $mail_sendgrid_password,

						'to' => $to,

						'replyto' => $to,

						'subject' => $subject,

						'html' => $message,

						'from' => $from,

						'fromname' => $owner

					);

					// Generate curl request

					$ch = curl_init($mail_sendgrid_api_url);

					// Tell curl to use HTTP POST

					curl_setopt($ch, CURLOPT_POST, true);

					// Tell curl that this is the body of the POST

					curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

					// Tell curl not to return headers, but do return the response

					curl_setopt($ch, CURLOPT_HEADER, false);

					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

					// obtain response

					$response = curl_exec($ch);

					curl_close($ch);

					// print everything out

					$status = 'error';

					$msg =  $core->get_Lang('Send email error');

					if (strpos($response, 'success') == true) {

						$status = 'success';

						$msg = $core->get_Lang('Send email successfully');

					}

				}

			} else {

				if (!empty($mail_sendgrid_api_key)) {

					require_once(DIR_INCLUDES . '/SendGrid/vendor/autoload.php');

					$email = new \SendGrid\Mail\Mail();

					$email->setFrom($from, $owner);

					$email->setSubject($subject);

					$email->addTo($to, "");

					$email->addContent("text/html", $message);

					$sendgrid = new \SendGrid($mail_sendgrid_api_key);

					try {

						$response = $sendgrid->send($email);

						if ($response->statusCode() == '200' || $response->statusCode() == '202') {

							$status = 'success';

							$msg =  $core->get_Lang('Send email successfully');

						}

					} catch (Exception $e) {

						$status = 'error';

						$msg = $e->getMessage();

					}

				} else {

					require_once(DIR_INCLUDES . '/SendGrid/vendor/autoload.php');

					$sendgrid = new SendGrid(

						$mail_sendgrid_username,

						$mail_sendgrid_password,

						array("turn_off_ssl_verification" => false)

					);

					// Create object

					$mail = new \SendGrid\Email();

					// Param send email

					$mail->addTo($to)

						->setFrom($from)

						->setFromName($owner)

						->setReplyTo($to)

						->setSubject($subject)

						->setHtml($message)

						->addHeader('X-Sent-Using', 'SendGrid-API')

						->addHeader('X-Transport', 'web');

					// obtain response

					$response = $sendgrid->send($mail);

					// Return

					$status = 'error';

					$msg =  $core->get_Lang('Send email error');

					if (

						isset($response->body['message'])

						&& $response->body['message'] == 'success'

					) {

						$status = 'success';

						$msg =  $core->get_Lang('Send email successfully');

					}

				}

			}

			/** End Sendgrid */

		}

		return array(

			'status' => $status,

			'msg'	=> $msg

		);

	}

	function sendEmailOld($from, $to, $subject, $message, $owner)

	{

		return $this->sendEmailAPI($from, $to, $subject, $message, $owner);

		////////////////////////

		global $_LANG_ID;

		$CFG = new Configuration();

		$MailType  = $CFG->getValue('SiteMailType');

		$mailSub = 'curl';

		$is_send_mail = false;

		if ($MailType == 'mail') {

			$headers = 	"MIME-Version: 1.0\r\n" .

				"Content-type: text/html; charset=utf-8\r\n" .

				"From:  " . $owner . "<" . $from . ">\r\n" .

				"Subject: " . $subject . "\r\n";

			$is_send_mail = @mail($to, $subject, $message, $headers);

		} else if ($MailType == 'smtp') {

			// (Re)create it, if it's gone missing

			require_once(DIR_INCLUDES . '/mailer/class.phpmailer.php');

			require_once(DIR_INCLUDES . '/mailer/class.smtp.php');

			require_once(DIR_INCLUDES . '/mailer/class.pop3.php');

			$mail = new PHPMailer();

			try {

				// Empty out the values that may be set

				$mail->clearAllRecipients();

				$mail->clearAttachments();

				$mail->clearCustomHeaders();

				$mail->clearReplyTos();

				$mail->ClearAddresses();

				$mail->isMail();

				$mail->From = trim($from);

				$mail->FromName = trim($owner);

				// Set Content-Type and charset

				$content_type = 'text/html';

				if ($plaintext) {

					$content_type = 'text/plain';

				}

				$mail->ContentType = $content_type;

				$mail->CharSet = 'utf-8';

				$mail->XMailer = $CFG->getValue("CompanyName");

				$mail->AddAddress = trim($to);

				$mail->AddAddress($to);

				if ($MailType == "mail") {

					$mail->Mailer = "mail";

				} else {

					if ($MailType == "smtp") {

						//$mail->Mailer = 'smtp';

						//Enable SMTP debugging.  1 or 2 on

						$mail->SMTPDebug = 0; //off

						$mail->Priority  = 3;

						$mail->Encoding  = $CFG->getValue("SiteMailEncoding");

						//$mail->SMTPAutoTLS  = 1;

						//Set PHPMailer to use SMTP.

						$mail->IsSMTP();

						if ('text/html' == $content_type) {

							$mail->IsHTML(true);

						}

						//Set SMTP host name

						$mail->Host = $CFG->getValue('SiteSmtpHost');

						$mail->Port = $CFG->getValue('SiteSmtpPort');

						if ($CFG->getValue('SiteSmtpSSL') !== 'none') {

							$mail->SMTPSecure = $CFG->getValue('SiteSmtpSSL');

						}

						$mail->SMTPOptions = array(

							'ssl' => array(

								'verify_peer' => false,

								'verify_peer_name' => false,

								'allow_self_signed' => true

							)

						);

						//Provide username and password

						if ($CFG->getValue('SiteSmtpUsername') != '') {

							$mail->SMTPAuth = true;

							$mail->Username = trim($CFG->getValue('SiteSmtpUsername'));

							$mail->Password = trim($CFG->getValue('SiteSmtpPassword'));

						}

						$mail->Sender = $mail->From;

						if ($from != $CFG->getValue('SiteSmtpUsername')) {

							$mail->AddReplyTo($from, html_entity_decode($owner, ENT_QUOTES));

						}

					}

				}

				if (is_array($cc) && !empty($cc)) {

					foreach ($cc as $value) {

						$ccaddress = trim($value);

						if ($ccaddress) {

							$mail->AddCC($ccaddress);

						}

					}

				}

				if ($CFG->getValue('SiteReplyEmail')) {

					$bcc = $CFG->getValue('SiteReplyEmail');

					$bcc = explode(",", $bcc);

					foreach ($bcc as $value) {

						$ccaddress = trim($value);

						if ($ccaddress) {

							$mail->AddBCC($ccaddress);

						}

					}

				}

				$mail->Subject = html_entity_decode($subject, ENT_QUOTES);

				if ($plaintext) {

					$message = html_entity_decode($message, ENT_QUOTES);

					$mail->Body = strip_tags($message);

				} else {

					$mail->Body = $message;

					$message_text = str_replace("<p>", "", $message);

					$message_text = str_replace("</p>", "\r\n\r\n", $message_text);

					$message_text = str_replace("<br>", "\r\n", $message_text);

					$message_text = str_replace("<br />", "\r\n", $message_text);

					$message_text = strip_tags($message_text);

					$mail->AltBody = html_entity_decode($message_text, ENT_QUOTES);

				}

				if (!empty($attachments)) {

					if (is_array($attachments)) {

						foreach ($attachments as $filename) {

							$mail->AddAttachment($filename);

						}

					} else {

						$mail->AddAttachment($attachments);

					}

				}

				// Send

				try {

					$is_send_mail = $mail->send();

				} catch (phpmailerException $e) {

					$is_send_mail = false;

					if ($this->debug) {

						return $e->getMessage();

					}

				}

			} catch (Exception $e) {

				$is_send_mail =  false;

				if ($this->debug) {

					return $e->getMessage();

				}

			}

			return $is_send_mail;

		} else if ($MailType == 'sendgrid') {

			$url = 'https://go.vietiso.com/modules/servers/sendgrid/password.txt';

			if (function_exists('curl_init')) {

				$curl = curl_init();

				curl_setopt($curl, CURLOPT_URL, $url);

				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

				curl_setopt($curl, CURLOPT_HEADER, false);

				$content = curl_exec($curl);

				curl_close($curl);

			} else {

				$content = file_get_contents($url);

			}

			list($username, $password) = explode('|', $content);

			$username = base64_decode($username);

			$password = base64_decode($password);

			if ($mailSub == 'curl') {

				$url = 'https://api.sendgrid.com/';

				$params = array(

					'api_user' => $username,

					'api_key' => $password,

					'to' => $to,

					'replyto' => $from,

					'subject' => $subject,

					'html' => $message,

					'text' => strip_tags($message),

					'from' => $from,

					'fromname' => $owner

				);

				$request = $url . 'api/mail.send.json';

				// Generate curl request

				$session = curl_init($request);

				// Tell curl to use HTTP POST

				curl_setopt($session, CURLOPT_POST, true);

				// Tell curl that this is the body of the POST

				curl_setopt($session, CURLOPT_POSTFIELDS, $params);

				// Tell curl not to return headers, but do return the response

				curl_setopt($session, CURLOPT_HEADER, false);

				curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

				// obtain response

				$response = curl_exec($session);

				curl_close($session);

				// print everything out

				if (strpos($response, 'success') != false)

					$is_send_mail = 1;

				else

					$is_send_mail = 0;

			} else {

				require_once(DIR_INCLUDES . '/SendGrid/vendor/autoload.php');

				$SendGrid = new SendGrid($username, $password, array("turn_off_ssl_verification" => false));

				// Create object

				$email = new SendGrid\Email();

				// Param send email

				$email->addTo($to)

					->setFrom($from)

					->setFromName($owner)

					->setReplyTo($to)

					->setSubject($subject)

					->setHtml($message, ENT_COMPAT)

					->setText(strip_tags($message))

					->addHeader('X-Sent-Using', 'SendGrid-API')

					->addHeader('X-Transport', 'web');

				// obtain response

				$response = @$SendGrid->send($email);

				if ($response->body['message'] == 'success')

					$is_send_mail = 1;

				else

					$is_send_mail = 0;

			}

		} else if ($MailType == 'swiftmailer') {

			//ini_set('display_errors',1);

			//error_reporting(E_ALL);

			$Username = 'no-reply@vietnamtourism.org.vn';

			$Password = 'ufuJNhbhmJ';

			require_once(ABSPATH . "/inc/Swift/lib/swift_required.php");

			// Create the Transport

			$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls')

				->setUsername($Username)

				->setPassword($Password);

			$mail = Swift_Mailer::newInstance($transport);

			// Create a message

			$Swift_Message = Swift_Message::newInstance($subject)

				->setFrom(array($from => $owner))

				->setTo(array($to => ''))

				->setBody($message, 'text/html');

			//print_r($Swift_Message); die();

			// Send the message

			$is_send_mail = @$mail->send($Swift_Message);

		}

		return 1;

	}

	function getRandomNumber($min, $max)

	{

		return mt_rand($min, $max);

	}

	function getRandomString($length = 6)

	{

		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

		$charactersLength = strlen($characters);

		$randomString = '';

		for ($i = 0; $i < $length; $i++) {

			$randomString .= $characters[rand(0, $charactersLength - 1)];

		}

		return $randomString;

	}

	function getArrayFromString($string)

	{

		if ($string == '') {

			return '';

		}

		return unserialize($string);

	}

	function getLinkView($table, $pval)

	{

		$link = '';

		if ($table == 'default_country') {

			$clsCountry = new Country();

			$link = DOMAIN_NAME . $clsCountry->getLinkDestination($pval);

		}

		return $link;

	}

	function deleteFile($path)

	{

		$conn = ftp_connect(ftp_host_info) or die("Could not connect");

		ftp_login($conn, ftp_usr_info, ftp_pwd_info);

		ftp_delete($conn, str_replace(ftp_abs_path_info, '', $this->parseImageURL($path, false)));

		ftp_close($conn);

	}

	function tripslashImage($image, $w, $h)

	{

		$url_image = '/files/thumb/' . $w . '/' . $h . '/' . $this->parseImageURL($image);

		if (strlen(strstr($url_image, '//')) > 0) {

			$url_image = str_replace('//', '/', $url_image);

		}

		return $url_image;

	}

	function tripslashUrl($url)

	{

		if (strlen(strstr($url, '//')) > 0) {

			$url = str_replace('//', '/', $url);

		}

		return $url;

	}

	function tripslashUrlWebp($url)

	{

		$clsWebpImage = new WebpImage();

		if (strlen(strstr($url, '//')) > 0) {

			$url = str_replace('//', '/', $url);

		}

		$url = $clsWebpImage->ConvertWebpImage($url);

		return $url;

	}

	function parseImageURL($url, $allow_full = true)

	{

		$url = str_replace('https://dongtours.com/', '/', $url);

		$url = str_replace('https://www.dongtours.com/', '/', $url);

		$url = str_replace('http://cmsr.vietiso.com/', '/', $url);

		$url = str_replace('http://vietnamtravelcompanion.com/', '/', $url);

		$url = str_replace('http://vietnamlandtour.com/', '/', $url);

		$url = str_replace('http:/vietnamlandtour.com/', '/', $url);

		$url = str_replace('http://vietnamlandtour.vietiso.vn/', '/', $url);

		$url = str_replace('https:/isocms.com/', '/', $url);

		$url = str_replace('https://' . DOMAIN_NAME, '', $url);

		$url = str_replace(PCMS_URL, '/', $url);

		return $url;

		//return '/Webp/'.$url.'.webp';

	}

	function getHotCityByCountry($country_id, $limit)

	{

		$clsCity = new City();

		$sql = "is_trash=0 and is_top=1 and country_id='$country_id' order by order_top DESC LIMIT 0,$limit";

		return $clsCity->getAll($sql);

	}

	function getFirstCharacterList($str)

	{

		$tmp = explode(' ', $str);

		$html = '';

		for ($i = 0; $i < count($tmp); $i++) $html .= strtoupper($tmp[$i][0]);

		return $html;

	}

	function cropImage($file, $crop_width, $crop_height)

	{

		global $core;

		$reg_date = time();

		#

		$host = ftp_host_info;

		$usr = ftp_usr_info;

		$pwd = ftp_pwd_info;

		$abs_path = ftp_abs_path_info;

		/*Get File Extension*/

		$path_parts = pathinfo($file);

		$ext = $path_parts['extension'];

		if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif') {

			$ext = 'jpg';

		}

		/*Connect FTP*/

		$conn_id = ftp_connect($host) or die("Cannot connect to host");

		ftp_login($conn_id, $usr, $pwd) or die("Cannot login");

		/*File Name*/

		$day = date('d', $reg_date);

		$month = date('m', $reg_date);

		$year = date('Y', $reg_date);

		$dirname = 'content';

		#

		$nMn = md5($file);

		$nMn = 'vietiso-' . $crop_width . '-' . $crop_height . '-' . $path_parts['filename'] . '-' . substr($nMn, 0, 10);

		#

		$name = '/' . $dirname . '/' . $nMn . '.' . $ext;

		$res = ftp_size($conn_id, $name);

		//print_r($abs_path.$name);die();

		if ($res != -1) {

			//return 'available';

			return $abs_path . $name;

		} else {

			list($width_orig, $height_orig) = getimagesize($file);

			#

			$temp_file = ftp_temp_file_info;

			if ($ext == "jpg") {

				$image_p = imagecreatetruecolor($crop_width, $crop_height);

				$image = imagecreatefromjpeg($file);

				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $crop_width, $crop_height, $width_orig, $height_orig);

				$temp_file .= $new_name . '.' . $ext;

				imagejpeg($image_p, $temp_file);

			} elseif ($ext == "png") {

				$image_p = imagecreatetruecolor($crop_width, $crop_height);

				$image = imagecreatefrompng($file);

				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $crop_width, $crop_height, $width_orig, $height_orig);

				$temp_file .= $new_name . '.' . $ext;

				imagepng($image_p, $temp_file);

			} elseif ($ext == "gif") {

				$image_p = imagecreatetruecolor($crop_width, $crop_height);

				$image = imagecreatefromgif($file);

				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $crop_width, $crop_height, $width_orig, $height_orig);

				$temp_file .= $new_name . '.' . $ext;

				imagegif($image_p, $temp_file);

			} else {

				return '';

			}

			//===================================================================

			$upload = ftp_put($conn_id, $name, $temp_file, FTP_BINARY);

			//===================================================================

			imagedestroy($image_p);

			unlink($temp_file);

		}

		ftp_close($conn_id);

		return $abs_path . $name;

	}

	function getAssignedAdminUsers($user_group_id)

	{

		$clsUser = new User();

		$lstUser = $clsUser->getAll("user_id<>'1' and user_id<>'36' and user_group_id='$user_group_id' and type<>'OKRS'");

		if (is_array($lstUser) && count($lstUser) > 0) {

			$html = '';

			for ($i = 0; $i < count($lstUser); $i++) {

				$html .=  $clsUser->getOneField('user_name', $lstUser[$i][$clsUser->pkey]);

				$html .= ($i == (count($lstUser) - 1)) ? '' : ', ';

			}

			return $html;

		}

		return '';

	}

	function getListModule()

	{

		global $core;

		return $core->getListAdminModule();

	}

	function checkConnTMS()

	{

		global $clsConfiguration;

		$tms_domain = $clsConfiguration->getValue('tms_domain');

		$tms_token = $clsConfiguration->getValue('tms_token');

		if (empty($tms_domain) || empty($tms_token))

			return 0;

		return 1;

	}

	function getDefaultCurrency()

	{

		global $hasAPI, $clsConfiguration;

		if ($hasAPI) {

			$default_currency = $clsConfiguration->getValue('CurrencyTMS');

			return ($default_currency) ? $default_currency : VND_ID;

		}

		return _USD_ID;

	}

	function getDefaultExchangeRate()

	{

		return _EXCHANGE_RATE;

	}

	function getRateCodeSync($lang_id)

	{

		global $dbconn;

		$clsProperty = new Property();

		if ($lang_id == 'vn') {

			return $clsProperty->getOneField('property_code', 950); //VND

		} elseif ($lang_id == 'en') {

			return $clsProperty->getOneField('property_code', 951); //USD

		} else {

			//$currency = $clsProperty->getByCond("type='_CRM_CURRENCY'");

			$currency = $dbconn->getRow("type='_CRM_CURRENCY' and lang_id='{$lang_id}'");

			if (!empty($currency))

				return $currency['property_code'];

			return $clsProperty->getOneField('property_code', 952); //USD

		}

	}

	function getRate()

	{

		global $_LANG_ID, $clsISO, $clsConfiguration, $hasAPI;

		if ($hasAPI) {

			$clsVietISOSDK = new VietISOSDK();

			$lstCurrency = $clsVietISOSDK->getProperty('_CRM_CURRENCY');

			$default_currency = $this->getDefaultCurrency();

			if (!empty($lstCurrency)) {

				foreach ($lstCurrency as $k => $oneCurrency) {

					if ($oneCurrency['property_id'] == $default_currency)

						return $oneCurrency['property_code'];

				}

			}

			return;

		} else {

			$CurrencyCode = vnSessionGetVar('CurrencyCode');

			//return $CurrencyCode?$CurrencyCode:'USD';

			$clsProperty = new Property();

			if ($_LANG_ID == 'vn') {

				return $clsProperty->getOneField('property_code', 950);

			} elseif ($_LANG_ID == 'en') {

				return $clsProperty->getOneField('property_code', 951);

			} else {

				$currency = $clsProperty->getByCond("type='_CRM_CURRENCY'");

				if (!empty($currency))

					return $currency['property_code'];

				return $clsProperty->getOneField('property_code', 952);

			}

		}

	}

	function getRateSign($rate_id = 0)

	{

		global $_LANG_ID, $clsISO, $clsConfiguration, $hasAPI;

		if ($hasAPI) {

			$clsVietISOSDK = new VietISOSDK();

			$lstCurrency = $clsVietISOSDK->getProperty('_CRM_CURRENCY');

			if (empty($rate_id))

				$rate_id = $this->getDefaultCurrency();

			if (!empty($lstCurrency)) {

				foreach ($lstCurrency as $k => $oneCurrency) {

					if ($oneCurrency['property_id'] == $rate_id)

						return $oneCurrency['property_sign'];

				}

			}

			return;

		} else {

			$clsProperty = new Property();

			return $clsProperty->getOneField('property_code', $clsConfiguration->getValue('Currency'));

		}

	}

	function getRateCode($rate_id = 0)

	{

		global $core, $dbconn;

		$clsVietISOSDK = new VietISOSDK();

		$lstCurrency = $clsVietISOSDK->getProperty('_CRM_CURRENCY');

		if (empty($rate_id))

			$rate_id = $this->getDefaultCurrency();

		if (!empty($lstCurrency)) {

			foreach ($lstCurrency as $k => $oneCurrency) {

				if ($oneCurrency['property_id'] == $rate_id)

					return $oneCurrency['property_code'];

			}

		}

	}

	function getShortCurrency()

	{

		global $_LANG_ID, $clsISO, $clsConfiguration;

		$clsProperty = new Property();

		if ($_LANG_ID == 'vn') {

			return '<span class="currency">' . $clsProperty->getOneField('short', 950) . '</span>';

		} elseif ($_LANG_ID == 'en') {

			return '<span class="currency">' . $clsProperty->getOneField('short', 951) . '</span>';

		} else {

			$currency = $clsProperty->getByCond("type='_CRM_CURRENCY'");

			if (!empty($currency))

				return '<span class="currency">' . $currency['short'] . '</span>';

			return '<span class="currency">' . $clsProperty->getOneField('short', 952) . '</span>';

		}

	}

	function getShortRate()

	{

		global $_LANG_ID, $clsISO, $clsConfiguration;

		$clsProperty = new Property();

		if ($_LANG_ID == 'vn') {

			return '<span class="text-underline size18">' . $clsProperty->getOneField('short', 950) . '</span>';

		} elseif ($_LANG_ID == 'en') {

			return $clsProperty->getOneField('short', 951);

		} else {

			$currency = $clsProperty->getByCond("type='_CRM_CURRENCY'");

			if (!empty($currency))

				return $currency['short'];

			return $clsProperty->getOneField('short', 952);

		}

	}

	function getShortRateText()

	{

		global $_LANG_ID, $clsISO, $clsConfiguration;

		$clsProperty = new Property();

		if ($_LANG_ID == 'vn') {

			return $clsProperty->getOneField('short', 950);

		} elseif ($_LANG_ID == 'en') {

			return $clsProperty->getOneField('short', 951);

		} else {

			$currency = $clsProperty->getByCond("type='_CRM_CURRENCY'");

			if (!empty($currency))

				return $currency['short'];

			return $clsProperty->getOneField('short', 952);

		}

	}

	function getShortRate_()

	{

		global $_LANG_ID, $clsISO, $clsConfiguration;

		$CurrencyCode = vnSessionGetVar('CurrencyCode');

		$str = $CurrencyCode;

		switch ($str) {

			case 'AUD':

				return 'AUD';

				break;

			case 'CAD':

				return 'CAD';

				break;

			case 'CHF':

				return 'CHF';

				break;

			case 'DKK':

				return 'DKK';

				break;

			case 'EUR':

				return '€';

				break;

			case 'GBP':

				return '£';

				break;

			case 'HKD':

				return 'HKD';

				break;

			case 'INR':

				return '<i class="fa fa-inr" aria-hidden="true"></i>';

				break;

			case 'JPY':

				return '¥';

				break;

			case 'KRW':

				return 'KRW';

				break;

			case 'KWD':

				return 'KWD';

				break;

			case 'MYR':

				return 'MYR';

				break;

			case 'NOK':

				return 'NOK';

				break;

			case 'RUB':

				return '<i class="fa fa-rub" aria-hidden="true"></i>';

				break;

			case 'SAR':

				return 'SAR';

				break;

			case 'SEK':

				return 'SEK';

				break;

			case 'SGD':

				return 'SGD';

				break;

			case 'THB':

				return '฿';

				break;

			case 'USD':

				return '$';

				break;

			default:

				return '$';

		}

	}

	function formatNumberToEasyRead($price)

	{

		return str_replace(',', '.', number_format($price));

	}

	function makeSlashListFromArrayRoot($array)

	{

		$html = '';

		for ($i = 0; $i < count($array); $i++) {

			$html .= '|' . $array[$i] . '|';

		}

		return $html;

	}

	function makeSlashListFromArray2($array)

	{

		$html = '';

		if (!empty($array)) {

			for ($i = 0; $i < count($array); $i++) {

				if (!empty($array[$i])) {

					$html .= '|' . $array[$i] . '|';

				}

			}

		}

		return $html;

	}

	function makeSlashListFromArray($array, $paid = '|', $flag = true)

	{

		if ($array[0] == '') {

			return '';

		}

		$html = $flag ? $paid : '';

		if ($array[0] != '') {

			for ($i = 0; $i < count($array); $i++) {

				if ($flag) {

					$html .= $array[$i] . $paid;

				} else {

					$html .= $array[$i] . ($i == count($array) - 1 ? '' : $paid);

				}

			}

		}

		return $html;

	}

	function getFirstItemInArray($arr)

	{

		if (is_array($arr))

			foreach ($arr as $key => $value) {

				return $value;

			}

		return '';

	}

	function myTruncate($string, $length = 80, $etc = '...', $charset = 'UTF-8', $break_words = false, $middle = false)

	{

		if ($length == 0)

			return '';

		if (mb_strlen($string) > $length) {

			$length -= min($length, mb_strlen($etc));

			if (!$break_words && !$middle) {

				$string = preg_replace('/\s+?(\S+)?$/u', '', mb_substr($string, 0, $length + 1, $charset));

			}

			if (!$middle) {

				return mb_substr($string, 0, $length, $charset) . $etc;

			} else {

				return mb_substr($string, 0, $length / 2, $charset) . $etc . mb_substr($string, -$length / 2, (mb_strlen($string) - $length / 2), $charset);

			}

		} else {

			return $string;

		}

	}

	function truncateWord($string, $limit, $pad = "...")

	{

		if ($string == '') return $string;

		if (str_word_count($string) <= $limit) {

			return $string;

		}

		$tmp = explode(' ', $string);

		if (is_array($tmp) && count($tmp) < $limit) {

			return $string;

		} else {

			$string_new = '';

			for ($i = 0; $i < $limit; $i++) {

				$string_new .= $tmp[$i] . ' ';

			}

			return $string_new . $pad;

		}

	}

	function makeSelectStar($selected = '')

	{

		$lstStar = $this->getListStar();

		$html = '<option value="">-- Select -- </option>';

		foreach ($lstStar as $k => $v) {

			$html .= '<option value="' . $k . '" ' . ($selected == $k ? 'selected="selected"' : '') . '>' . $v . '</option>';

		}

		return $html;

		die();

	}

	function getConfigImage($type, $ext)

	{

		$clsConfigImages =  new ConfigImages();

		$res = $clsConfigImages->getAll("is_trash=0 and type='$type' limit 0,1");

		if ($ext == 'size') {

			return '(' . $res[0]['width'] . 'x' . $res[0]['height'] . ')';

		}

		if ($ext == 'dimension') {

			return 'image_size_' . str_replace(':', '_', $res[0]['dimension']);

		}

	}

	function is_valid_email($strEmail)

	{

		if ($strEmail == "" || $strEmail == null) {

			return 0;

		}

		$strRegular = "/^[A-Za-z0-9_\.\-]+@[A-Za-z0-9_\.\-]+\.";

		$strRegular = $strRegular . "[A-Za-z0-9_\-][A-Za-z0-9_\-]+$/";

		if (!preg_match($strRegular, $strEmail)) {

			return 0;

		}

		return 1;

	}

	function getSelect($begin, $end, $selected = '')

	{

		$html = '';

		for ($i = $begin; $i < ($end + 1); $i++) {

			$select = ($selected == $i) ? 'selected="selected"' : '';

			$html .= '<option value="' . $i . '"' . $select . '>' . $i . '</option>';

		}

		return $html;

	}

	function getListTravelDuration()

	{

		global $core;

		#

		$lstTravelDuration = array();

		$lstTravelDuration['1'] = $core->get_Lang('1-6 days');

		$lstTravelDuration['2'] = $core->get_Lang('1 week');

		$lstTravelDuration['3'] = $core->get_Lang('8-13 days');

		$lstTravelDuration['4'] = $core->get_Lang('2 weeks');

		$lstTravelDuration['5'] = $core->get_Lang('15-20 days');

		$lstTravelDuration['6'] = $core->get_Lang('3 weeks');

		$lstTravelDuration['7'] = $core->get_Lang('More than 3 weeks');

		return $lstTravelDuration;

	}

	function getNameTravelDuration($val)

	{

		$lstTravelDuration = $this->getListTravelDuration();

		return $lstTravelDuration[$val];

	}

	function makeSelectTravelDuration($selected = '')

	{

		global $core;

		#

		$lstTravelDuration = $this->getListTravelDuration();

		$html = '';

		$html .= '<option value="0">-- ' . $core->get_Lang('TravelDuration') . ' --</option>';

		foreach ($lstTravelDuration as $k => $v) {

			$html .= '<option value="' . $k . '" ' . ($selected == $k ? 'selected="selected"' : '') . '>' . $v . '</option>';

		}

		return $html;

		die();

	}

	function getListMonth02()

	{

		global $core;

		#

		$lstMonth = array();

		$lstMonth['01'] = $core->get_Lang('January');

		$lstMonth['02'] = $core->get_Lang('February');

		$lstMonth['03'] = $core->get_Lang('March');

		$lstMonth['04'] = $core->get_Lang('April');

		$lstMonth['05'] = $core->get_Lang('May');

		$lstMonth['06'] = $core->get_Lang('June');

		$lstMonth['07'] = $core->get_Lang('July');

		$lstMonth['08'] = $core->get_Lang('August');

		$lstMonth['09'] = $core->get_Lang('September');

		$lstMonth['10'] = $core->get_Lang('October');

		$lstMonth['11'] = $core->get_Lang('November');

		$lstMonth['12'] = $core->get_Lang('December');

		return $lstMonth;

	}

	function getListMonth01()

	{

		global $core;

		#

		$lstMonth = array();

		$lstMonth['01'] = $core->get_Lang('January');

		$lstMonth['2'] = $core->get_Lang('February');

		$lstMonth['3'] = $core->get_Lang('March');

		$lstMonth['4'] = $core->get_Lang('April');

		$lstMonth['5'] = $core->get_Lang('May');

		$lstMonth['6'] = $core->get_Lang('June');

		$lstMonth['7'] = $core->get_Lang('July');

		$lstMonth['8'] = $core->get_Lang('August');

		$lstMonth['9'] = $core->get_Lang('September');

		$lstMonth['10'] = $core->get_Lang('October');

		$lstMonth['11'] = $core->get_Lang('November');

		$lstMonth['12'] = $core->get_Lang('December');

		return $lstMonth;

	}

	function getListMonth()

	{

		global $core;

		#

		$lstMonth = array();

		$lstMonth['1'] = $core->get_Lang('January');

		$lstMonth['2'] = $core->get_Lang('February');

		$lstMonth['3'] = $core->get_Lang('March');

		$lstMonth['4'] = $core->get_Lang('April');

		$lstMonth['5'] = $core->get_Lang('May');

		$lstMonth['6'] = $core->get_Lang('June');

		$lstMonth['7'] = $core->get_Lang('July');

		$lstMonth['8'] = $core->get_Lang('August');

		$lstMonth['9'] = $core->get_Lang('September');

		$lstMonth['10'] = $core->get_Lang('October');

		$lstMonth['11'] = $core->get_Lang('November');

		$lstMonth['12'] = $core->get_Lang('December');

		return $lstMonth;

	}

	function getNameMonth01($val)

	{

		$lstMonth = $this->getListMonth01();

		return $lstMonth[$val];

	}

	function getNameMonth02($val)

	{

		$lstMonth = $this->getListMonth02();

		return $lstMonth[$val];

	}

	function getNameMonth($val)

	{

		$lstMonth = $this->getListMonth();

		return $lstMonth[$val];

	}

	function makeSelectMonth($selected = '')

	{

		global $core;

		#

		$lstMonth = $this->getListMonth();

		$html = '';

		$html .= '<option value="0">-- ' . $core->get_Lang('Month') . ' --</option>';

		foreach ($lstMonth as $k => $v) {

			$html .= '<option value="' . $k . '" ' . ($selected == $k ? 'selected="selected"' : '') . '>' . $v . '</option>';

		}

		return $html;

		die();

	}

	function makeSelectYear($selected = '')

	{

		global $core;

		$y = date('Y', time());

		$html = '';

		$html .= '<option value="0">-- ' . $core->get_Lang('Year') . ' --</option>';

		for ($i = $y; $i <= ($y + 5); $i++) {

			$html .= '<option value="' . $i . '" ' . ($selected == $i ? 'selected="selected"' : '') . '>' . $i . '</option>';

		}

		return $html;

	}

	function makeSelectNumber($limit, $selected, $prefix = "")

	{

		$html = '';

		for ($i = 0; $i < $limit; $i++) {

			$html .= '<option value="' . ($i) . '" ' . ($selected == $i ? ' selected="selected"' : '') . '>';

			if ($prefix != '') {

				$tmp = explode(',', $prefix);

				if ($i == 1 || $i == 0) {

					$html .= $i . ' ' . $tmp[0];

				} else {

					$html .= $i . ' ' . $tmp[1];

				}

			} else {

				$html .= $i;

			}

			$html .= '</option>';

		}

		return $html;

	}

	function makeSelectNumberAgeChild($limit, $prefix = "")

	{

		global $core;

		$html = '';

		$html .= '<option value="" selected="selected">' . $core->get_Lang('Age') . '</option>';

		for ($i = 0; $i <= $limit; $i++) {

			$html .= '<option value="' . ($i) . '">';

			if ($prefix != '') {

				$tmp = explode(',', $prefix);

				if ($i == 1 || $i == 0) {

					$html .= $i . ' ' . $tmp[0];

				} else {

					$html .= $i . ' ' . $tmp[1];

				}

			} else {

				$html .= $i;

			}

			$html .= '</option>';

		}

		return $html;

	}

	function makeSelectNumber2($limit, $selected, $prefix = "")

	{

		$html = '';

		for ($i = 1; $i < $limit; $i++) {

			$html .= '<option value="' . ($i) . '" ' . ($selected == $i ? ' selected="selected"' : '') . '>';

			if ($prefix != '') {

				$tmp = explode(',', $prefix);

				if ($i == 1) {

					$html .= $i . ' ' . $tmp[0];

				} else {

					$html .= $i . ' ' . $tmp[1];

				}

			} else {

				$html .= $i;

			}

			$html .= '</option>';

		}

		return $html;

	}

	function makeSelectNumberStart($limit, $selected = '')

	{

		global $core;

		$html = '';

		for ($i = 1; $i <= $limit; $i++) {

			$html .= '<option value="' . ($i) . '" ' . ($selected == $i ? ' selected="selected"' : '') . '>';

			if ($i == 1) {

				$html .= $i . ' ' . $core->get_Lang('star');

			} else {

				$html .= $i . ' ' . $core->get_Lang('stars');

			}

			$html .= '</option>';

		}

		return $html;

	}

	function listStar($limit)

	{

		global $core;

		$arr = [];

		for ($i = $limit; $i >= 1; $i--) {

			if ($i == 1) {

				$arr[] = ['star_id' => $i, 'title' => $core->get_Lang('No rank')];

			} else {

				$arr[] = ['star_id' => $i, 'title' => $i . ' ' . $core->get_Lang('stars')];

			}

		}

		return $arr;

	}

	function validate_alphanumeric_underscore($str)

	{

		return preg_match('/^\w+$/', $str);

	}

	function size_calculator($size)

	{

		$units = array(' B', ' KB', ' MB', ' GB', ' TB');

		for ($i = 0; $size > 1024; $i++) {

			$size /= 1024;

		}

		return round($size, 2) . $units[$i];

	}

	function processSmartNumber($str)

	{

		$str = preg_replace('/\s+/', '', $str);

		//$str = str_replace(' ','',$str);

		$str = str_replace(',', '', $str);

		$str = str_replace('.', '', $str);

		$str = str_replace(';', '', $str);

		$str = str_replace('₫', '', $str);

		$str = str_replace('$', '', $str);

		//return intval($str);

		return floatval($str);

	}

	function processSmartNumber2($str)

	{

		$str = str_replace(' ', '', $str);

		$str = str_replace(',', '', $str);

		$str = str_replace('.', '', $str);

		$str = str_replace(';', '', $str);

		return intval($str);

	}

	function processFloatNumber($str)

	{

		$str = str_replace(',', '.', $str);

		return floatval($str);

	}

	function getStrToTime($day_text)

	{

		return strtotime($day_text);

	}

	function formatDateTime($time, $format = 'H:i:s d-m-Y', $is_html = true)

	{

		if (!$is_html) {

			return date($format, $time);

		}

		return (!empty($time)) ? '<font style=\'color:red\'>' . date($format, $time) . '</font>' : '';

	}

	function formatDate($time, $type = '')

	{

		global $core, $_LANG_ID;

		//var_dump($type);die();

		if ($type == 'date_coutdown') {

			if ($_LANG_ID == 'vn') {

				return (!empty($time)) ? date('m/d/Y', $time) : '';

			}

			return (!empty($time)) ? date('d-m-Y', $time) : '';

		}

		if ($type == 'dot') {

			return (!empty($time)) ? date('d.m.Y', $time) : '';

		}

		if (!empty($type)) {

			return (!empty($time)) ? date('d' . $type . 'm' . $type . 'Y', $time) : '';

		} else {

			if ($_LANG_ID == 'vn') {

				return (!empty($time)) ? date('d-m-Y', $time) : '';

			} else {

				return (!empty($time)) ? date('m-d-Y', $time) : '';

			}

		}

	}

	function formatDateMText($time)

	{

		return (!empty($time)) ? date('M d, Y', $time) : '';

	}

	function formatDateAPI($time)

	{

		return (!empty($time)) ? date('Y-m-d', $time) : '';

	}

	function formatTimeDate($time)

	{

		global $core, $_LANG_ID;

		if ($_LANG_ID == 'vn') {

			return (!empty($time)) ? date('d/m/Y', $time) : '';

		} else {

			return (!empty($time)) ? date('m/d/Y', $time) : '';

		}

	}

	function formatTimeMonth($time)

	{

		return (!empty($time)) ? date('d/m/Y', $time) : '';

	}

	function formatTimeDateEn($time)

	{

		return (!empty($time)) ? date('m/d/Y', $time) : '';

	}

	function formatDateM($time)

	{

		return (!empty($time)) ? date('m-d-Y', $time) : '';

	}

	function formatDateSecond($time)

	{

		return (!empty($time)) ? date('m-d-Y H:i:s', $time) : '';

	}

	function formatDateMinute($time)

	{

		return (!empty($time)) ? date('M d,Y, H:i', $time) : '';

	}

	function formatDateDMY($time)

	{

		return (!empty($time)) ? date('d/m/Y', $time) : '';

	}

	function formatDateFull($time)

	{

		return 'ngày ' . date('d', $time) . ' tháng ' . date('m', $time) . ' năm ' . date('Y', $time);

	}

	function formatDateDomain($time)

	{

		return '' . date('d', $time) . ' tháng ' . date('m', $time) . '/' . date('Y', $time);

	}

	function formatMonthYear($time)

	{

		return $this->getMonthOfYear($time) . ', ' . date('Y', $time);

	}

	function getDayOfWeek($today)

	{

		global $_LANG_ID, $core;

		$d = date('D', $today);

		if ($d == 'Sun') return $core->get_Lang('Sunday');

		if ($d == 'Mon') return $core->get_Lang('Monday');

		if ($d == 'Tue') return $core->get_Lang('Tuesday');

		if ($d == 'Wed') return $core->get_Lang('Wednesday');

		if ($d == 'Thu') return $core->get_Lang('Thursday');

		if ($d == 'Fri') return $core->get_Lang('Friday');

		if ($d == 'Sat') return $core->get_Lang('Saturday');

		return '';

	}

	function getDayOfWeekShort($today)

	{

		global $_LANG_ID, $core;

		$d = date('D', $today);

		if ($d == 'Sun') return $core->get_Lang('Sun');

		if ($d == 'Mon') return $core->get_Lang('Mon');

		if ($d == 'Tue') return $core->get_Lang('Tue');

		if ($d == 'Wed') return $core->get_Lang('Wed');

		if ($d == 'Thu') return $core->get_Lang('Thu');

		if ($d == 'Fri') return $core->get_Lang('Fri');

		if ($d == 'Sat') return $core->get_Lang('Sat');

		return '';

	}

	function parseTextToTime($string)

	{

		$string = str_replace(',', '', $string);

		$tmp = explode(' ', $string);

		$str_in = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

		$str_out = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");

		$time = $tmp[1] . '/' . $tmp[0] . '/' . $tmp[2];

		return str_replace($str_in, $str_out, $time);

	}

	function countTime($seconds)

	{

		return gmdate('H:i:s', $seconds);

	}

	function getTimeAgo($time)

	{

		global $core, $_LANG_ID;

		$periods = array($core->get_Lang('second'), $core->get_Lang('minute'), $core->get_Lang('hour'), $core->get_Lang('day'), $core->get_Lang('week'), $core->get_Lang('month'), $core->get_Lang('year'), $core->get_Lang('decade'));

		$lengths = array("60", "60", "24", "7", "4.35", "12", "10");

		$now = time();

		$difference    = $now - $time;

		$tense         = $core->get_Lang('ago');

		for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {

			$difference /= $lengths[$j];

		}

		$difference = round($difference);

		if ($difference != 1) {

			if ($_LANG_ID == 'en') {

				$periods[$j] .= "s";

			}

		}

		if ($now - $time > 24 * 60 * 60) {

			return '' . "$difference $periods[$j] " . $tense . ' (' . $this->formatDateTime($time) . ')';

		}

		return '' . "$difference $periods[$j] " . $tense;

	}

	function checkItemInArray($needle, $haystack)

	{

		return in_array($needle, $haystack);

	}

	function getTimerSelect($timerChoice)

	{

		$listOptions = '';

		for ($i = 0; $i < 24; $i++) {

			$hour = $i < 10 ? '0' . $i : $i;

			for ($k = 0; $k < 4; $k++) {

				$min = $k * 15 == 0 ? '00' : $k * 15;

				$time = $hour . ':' . $min;

				$slt = $time == $timerChoice ? 'selected="selected"' : "";

				$listOptions .= '<option value="' . $time . '" ' . $slt . '>' . $time . '</option>';

			}

		}

		return $listOptions;

	}

	function getDayWeekList()

	{

		global $core;

		$listDay = array();

		$listDay[0]['key'] = 1;

		$listDay[0]['val'] = $core->get_Lang('Monday');

		$listDay[0]['val2'] = 'Mon';

		$listDay[1]['key'] = 2;

		$listDay[1]['val'] = $core->get_Lang('Tuesday');

		$listDay[1]['val2'] = 'Tue';

		$listDay[2]['key'] = 3;

		$listDay[2]['val'] = $core->get_Lang('Wednesday');

		$listDay[2]['val2'] = 'Wed';

		$listDay[3]['key'] = 4;

		$listDay[3]['val'] = $core->get_Lang('Thursday');

		$listDay[3]['val2'] = 'Thu';

		$listDay[4]['key'] = 5;

		$listDay[4]['val'] = $core->get_Lang('Friday');

		$listDay[4]['val2'] = 'Fri';

		$listDay[5]['key'] = 6;

		$listDay[5]['val'] = $core->get_Lang('Saturday');

		$listDay[5]['val2'] = 'Sat';

		$listDay[6]['key'] = 7;

		$listDay[6]['val'] = $core->get_Lang('Sunday');

		$listDay[6]['val2'] = 'Sun';

		return $listDay;

	}

	function makeArrayUnique($arr)

	{

		$ret = array();

		for ($i = 0; $i < count($arr); $i++) {

			if (in_array($arr[$i], $ret)) {

			} else {

				$ret[] = $arr[$i];

			}

		}

		return $ret;

	}

	function super_unique($array, $key)

	{

		$temp_array = array();

		foreach ($array as &$v) {

			if (!isset($temp_array[$v[$key]]))

				$temp_array[$v[$key]] = &$v;

		}

		$array = array_values($temp_array);

		return $array;

	}

	function converTimeToText($date)

	{

		global $core, $_LANG_ID;

		$str_in = array(" Jan", " Feb", " Mar", " Apr", " May", " Jun", " Jul", " Aug", " Sep", " Oct", " Nov", " Dec");

		$str_out = array($core->get_Lang("January"), $core->get_Lang("February"), $core->get_Lang("March"), $core->get_Lang("April"), $core->get_Lang("May"), $core->get_Lang("June"), $core->get_Lang("July"), $core->get_Lang("August"), $core->get_Lang("September"), $core->get_Lang("October"), $core->get_Lang("November"), $core->get_Lang("December"));

		$time  = gmdate("d  M, Y", $date + 7 * 3600);

		$time  = str_replace($str_in, $str_out, $time);

		return $time;

	}

	function converTimeToTextNoComma($date)

	{

		global $core, $_LANG_ID;

		$str_in = array(" Jan", " Feb", " Mar", " Apr", " May", " Jun", " Jul", " Aug", " Sep", " Oct", " Nov", " Dec");

		$str_out = array($core->get_Lang("January"), $core->get_Lang("February"), $core->get_Lang("March"), $core->get_Lang("April"), $core->get_Lang("May"), $core->get_Lang("June"), $core->get_Lang("July"), $core->get_Lang("August"), $core->get_Lang("September"), $core->get_Lang("October"), $core->get_Lang("November"), $core->get_Lang("December"));

		if ($_LANG_ID == 'vn') {

			$time  = gmdate("d M Y", $date + 7 * 3600);

		} else {

			$time  = gmdate("M d Y", $date + 7 * 3600);

		}

		$time  = str_replace($str_in, $str_out, $time);

		return $time;

	}

	function converTimeToText2($date)

	{

		$str_in = array(" Jan", " Feb", " Mar", " Apr", " May", " Jun", " Jul", " Aug", " Sep", " Oct", " Nov", " Dec");

		$str_out = array(" January", " February", " March", " April", ' May', " June", " July", " August", " September", " October", " November", " December");

		$time  = gmdate("d M, Y", strtotime($date) + 7 * 3600);

		$time  = str_replace($str_in, $str_out, $time);

		return $time;

	}

	function converTimeToText3($date, $type = '')

	{

		$str_in = array(" Jan", " Feb", " Mar", " Apr", " May", " Jun", "Jul", " Aug", " Sep", " Oct", " Nov", " Dec");

		$str_out = array(" January", " February", " March", " April", ' May', " June", " July", " August", " September", " October", " November", " December");

		if ($type == 'YEAR') {

			return gmdate("M, Y", strtotime($date) + 7 * 3600);

		} else if ($type == 'DAY') {

			return gmdate("d", strtotime($date) + 7 * 3600);

		} else {

			return $this->getDayOfWeek(strtotime($date));

		}

	}

	function converTimeToText4($date)

	{

		$time  = date("m/d/Y", $date + 7 * 3600);

		return $time;

	}

	function converTimeToText5($date)

	{

		global $core, $_LANG_ID;

		$str_in = array("Monday ", "Tuesday ", "Wednesday ", "Thursday ", "Friday ", "Saturday ", "Sunday ");

		$str_out = array($core->get_Lang("Monday"), $core->get_Lang("Tuesday"), $core->get_Lang("Wednesday"), $core->get_Lang("Thursday"), $core->get_Lang("Friday"), $core->get_Lang("Saturday"), $core->get_Lang("Sunday"));

		if ($_LANG_ID == 'vn') {

			$time  = gmdate("l , d/m/Y", $date + 7 * 3600);

			$time  = str_replace($str_in, $str_out, $time);

		} else {

			$time  = gmdate("F d, Y", $date + 7 * 3600);

		}

		return $time;

	}

	function converTimeToText6($date)

	{

		$time  = date("d/m/Y", $date + 7 * 3600);

		return $time;

	}

	function converTimeBefore($date, $numday = 1)

	{

		$time  = date("d/m/Y", strtotime($date) - $numday * 3600);

		return $time;

	}

	function converTimeBefore2($dateInt, $numday = 1)

	{

		$time  = date("d/m/Y", $dateInt - $numday * 3600);

		return $time;

	}

	function converTimeToText7($date)

	{

		global $core, $_LANG_ID;

		$str_in = array("Monday ", "Tuesday ", "Wednesday ", "Thursday ", "Friday ", "Saturday ", "Sunday ");

		$str_out = array($core->get_Lang("Monday"), $core->get_Lang("Tuesday"), $core->get_Lang("Wednesday"), $core->get_Lang("Thursday"), $core->get_Lang("Friday"), $core->get_Lang("Saturday"), $core->get_Lang("Sunday"));

		if ($_LANG_ID == 'vn') {

			$time  = gmdate("l , d/m/Y", strtotime($date) + 7 * 3600);

			$time  = str_replace($str_in, $str_out, $time);

		} else {

			$time  = gmdate("F d, Y", strtotime($date) + 7 * 3600);

		}

		return $time;

	}

	function converTimeToText8($date, $numday = 1, $type = 'fulltext')

	{

		global $core, $_LANG_ID;

		$str_in = array("Monday ", "Tuesday ", "Wednesday ", "Thursday ", "Friday ", "Saturday ", "Sunday ");

		$str_out = array($core->get_Lang("Monday"), $core->get_Lang("Tuesday"), $core->get_Lang("Wednesday"), $core->get_Lang("Thursday"), $core->get_Lang("Friday"), $core->get_Lang("Saturday"), $core->get_Lang("Sunday"));

		if ($_LANG_ID == 'vn') {

			$dayForWeek = gmdate("l", strtotime($date) + $numday * 86400);

			$day = gmdate("d", strtotime($date) - $numday * 86400  + 7 * 3600);

			$d = gmdate("j", strtotime($date) - $numday * 86400 + 7 * 3600);

			$m = gmdate("m", strtotime($date) - $numday * 86400 + 7 * 3600);

			$month = gmdate("F", strtotime($date) - $numday * 86400 + 7 * 3600);

			$year = gmdate("Y", strtotime($date) - $numday * 86400 + 7 * 3600);

			if ($type == "fulltext") {

				$time = $core->get_Lang($dayForWeek) . ', ' . $core->get_Lang('days') . ' ' . $day . ' ' . $core->get_Lang($month) . ' ' . $core->get_Lang("year") . ' ' . $year;

				return ucfirst(strtolower($time));

			} else if ($type == '') {

				$time = $d . ' ' . $core->get_Lang('month') . ' ' . $m . ', ' . $year . ' 23:59';

				return strtolower($time);

			}

		} else {

			if ($type == "fulltext") {

				return gmdate("F d, Y", strtotime($date) - $numday * 86400 + 7 * 3600);

			} else if ($type == '') {

				return gmdate("F d, Y", strtotime($date) - $numday * 86400 + 7 * 3600) . ' 23:59';

			}

		}

	}

	function converTimeToTextShort($date)

	{

		global $core, $_LANG_ID;

		$str_in = array(" Jan", " Feb", " Mar", " Apr", " May", " Jun", " Jul", " Aug", " Sep", " Oct", " Nov", " Dec");

		$str_out = array($core->get_Lang("Jan"), $core->get_Lang("Feb"), $core->get_Lang("Mar"), $core->get_Lang("Apr"), $core->get_Lang("May"), $core->get_Lang("Jun"), $core->get_Lang("Jul"), $core->get_Lang("Aug"), $core->get_Lang("Sep"), $core->get_Lang("Oct"), $core->get_Lang("Nov"), $core->get_Lang("Dec"));

		if ($_LANG_ID == 'vn') {

			$time  = gmdate("d  M, Y", $date + 7 * 3600);

		} else {

			$time  = gmdate("M d, Y", $date + 7 * 3600);

		}

		$time  = str_replace($str_in, $str_out, $time);

		return $time;

	}

	function converTextToText($date)

	{

		$time  = date("d M Y", $date + 7 * 3600);

		return $time;

	}

	function converTextToTextNew($date)

	{

		global $core, $_LANG_ID;

		$time  = date("M d, Y", $date + 7 * 3600);

		return $time;

	}

	function checkInArray($haystack, $needle)

	{

		if (empty($haystack) || $needle == '') {

			return 0;

		}

		#

		if (!is_array($haystack)) {

			$haystack = explode(',', $haystack);

		}

		if (!in_array($needle, $haystack)) {

			return 0;

		}

		return 1;

	}

	function makeArrayBySlash($str)

	{

		$str = ltrim($str, "|");

		$str = rtrim($str, "|");

		return explode("|", $str);

	}

	function makeSlashByArray($str, $char = "|", $replace = ",")

	{

		$str = trim($str, $char);

		return str_replace($char, $replace, $str);

	}

	function makeSlashListFromArrayComma($array)

	{

		$html = '';

		if (is_array($array)) {

			for ($i = 0; $i < count($array); $i++) {

				$html .= ($i == 0 ? '' : ',') . $array[$i];

			}

		}

		return $html;

	}

	function checkContainer2($haystack, $needle)

	{

		$pos = strpos($haystack, '|' . $needle . '|');

		if ($pos === false) {

			return 0;

		} else {

			return 1;

		}

	}

	function checkContainer($haystack, $needle)

	{

		$pos = strpos($haystack, '|' . $needle . '|');

		if ($pos === false) {

			return 0;

		} else {

			return 1;

		}

	}

	function addslash($doc)

	{

		return addslashes($doc);

	}

	function stripslash($doc)

	{

		return stripslashes($doc);

	}

	function removeCharacter($doc)

	{

		$doc = str_replace('"', ' ', $doc);

		$doc = str_replace("'", ' ', $doc);

		$doc = str_replace("<", ' ', $doc);

		$doc = str_replace(">", ' ', $doc);

		$doc = str_replace("(", ' ', $doc);

		$doc = str_replace(")", ' ', $doc);

		$doc = str_replace("{", ' ', $doc);

		$doc = str_replace("}", ' ', $doc);

		return $doc;

	}

	function replaceSpace($doc)

	{

		$str = $this->convertToNormal($doc);

		return strtolower($str);

	}

	function replaceSpacei($str)

	{

		if (!$str) return false;

		$str = str_replace(array('%', "/", "\\", '"', '?', '<', '>', "#", "^", "`", "'", "=", "!", ":", ",,", "..", "*", "&", "__", "▄", ',', '/', '-', "́", "̣", "̀", "̉", "̃", ".", "–", "…", "(", ")"), array('', '', '', '', '', '', '', '', '', "", "", '', '', '', '', '', '', '', '', '', ' ', ' ', '', '', '', '', '', '', '', '', '', '', ''), html_entity_decode(trim($str)));

		$unicode = array(

			'a' => 'ä|à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|Ä|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ',

			'd' => 'Đ|đ',

			'e' => 'è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ',

			'i' => 'ì|í|î|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ',

			'o' => 'ö|ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ö|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ớ',

			'u' => 'ü|ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ü|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ',

			'y' => 'ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ'

		);

		$count = 0;

		foreach ($unicode as $nonUnicode => $uni) {

			$str = preg_replace("/($uni)/i", $nonUnicode, addslashes($str));

			$count++;

		}

		if ($count > 0)

			for ($i = 0; $i < $count; $i++)

				$str = stripslashes($str);

		$str = preg_replace("/&([a-z])[a-z]+;/i", "$1", $str);

		//$str = preg_replace("/\s+/","-",$str);

		$str = preg_replace("/\s+/", "", $str);

		return strtolower($str);

	}

	function url_title($str, $separator = '-', $lowercase = FALSE)

	{

		if ($separator === 'dash') {

			$separator = '-';

		} elseif ($separator === 'underscore') {

			$separator = '_';

		}

		#

		$q_separator = preg_quote($separator, '#');

		$trans = array(

			'&.+?;'			=> '',

			'[^\w\d _-]'		=> '',

			'\s+'			=> $separator,

			'(' . $q_separator . ')+'	=> $separator

		);

		#

		$str = strip_tags($str);

		foreach ($trans as $key => $val) {

			$str = preg_replace('#' . $key . '#i' . (UTF8_ENABLED ? 'u' : ''), $val, $str);

		}

		if ($lowercase === TRUE) {

			$str = strtolower($str);

		}

		return trim(trim($str, $separator));

	}

	function replaceSpace2($str)

	{

		if (!$str) return false;

		$str = $this->url_title(html_entity_decode(trim($str)));

		$unicode = array(

			'a' => 'ä|à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|Ä|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ',

			'd' => 'Đ|đ',

			'e' => 'è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ',

			'i' => 'ì|í|î|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ',

			'o' => 'ö|ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ö|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ớ',

			'u' => 'ü|ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ü|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ',

			'y' => 'ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ'

		);

		$count = 0;

		foreach ($unicode as $nonUnicode => $uni) {

			$str = preg_replace("/($uni)/i", $nonUnicode, addslashes($str));

			$count++;

		}

		if ($count > 0) {

			for ($i = 0; $i < $count; $i++) {

				$str = stripslashes($str);

			}

		}

		$str = preg_replace("/&([a-z])[a-z]+;/i", "$1", $str);

		$str = preg_replace("/\s+/", "-", $str);

		//$str = preg_match("[^A-Za-z0-9\-]", "", $str);

		return strtolower($str);

	}

	function replaceSpaceFolder($doc)

	{

		$doc = str_replace('-&amp;-', '-', $doc);

		$doc = str_replace('&amp;', '-', $doc);

		$str = $this->convertToNormal($doc);

		return $str;

	}

	function convertToNormal($doc)

	{

		$str = $this->addslash(html_entity_decode($doc));

		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);

		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);

		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);

		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);

		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);

		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);

		$str = preg_replace("/(đ)/", 'd', $str);

		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);

		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);

		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);

		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);

		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);

		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);

		$str = preg_replace("/(Đ)/", 'D', $str);

		$str = preg_replace("/( )/", '-', $str);

		$str = preg_replace("/(&#39;)/", '', $str);

		$str = preg_replace("/(')/", '', $str);

		$str = preg_replace("/(&#39;|&nbsp;)/", '-', $str);

		$str = $this->stripslash($str);

		return $str;

	}

	function strISOReplace($str)

	{

		$str = str_replace('&#036;', '', $str);

		$str = str_replace('&#33;', '', $str);

		$str = str_replace('&gt;', '', $str);

		$str = str_replace('&lt;', '', $str);

		$str = str_replace('&#092;', '', $str);

		$str = str_replace('&amp;', '', $str);

		$str = str_replace('&quot;', '', $str);

		$str = str_replace('&#39;', '', $str);

		$str = str_replace('+', '', $str);

		$str = str_replace('@', '', $str);

		$str = str_replace('{', '', $str);

		$str = str_replace('}', '', $str);

		$str = str_replace(']', '', $str);

		$str = str_replace('[', '', $str);

		$str = str_replace(')', '', $str);

		$str = str_replace('(', '', $str);

		$str = str_replace(';', '', $str);

		$str = str_replace(':', '', $str);

		$str = str_replace(',', '', $str);

		$str = str_replace('?', '', $str);

		$str = str_replace('%', '', $str);

		$str = str_replace('^', '', $str);

		$str = str_replace('*', '', $str);

		$str = str_replace('/', '', $str);

		$str = str_replace('#', '', $str);

		return $str;

	}

	function strReplace($str)

	{

		$str = str_replace('&#036;', '', $str);

		$str = str_replace('&#33;', '', $str);

		$str = str_replace('&gt;', '', $str);

		$str = str_replace('&lt;', '', $str);

		$str = str_replace('&#092;', '', $str);

		$str = str_replace('&amp;', '', $str);

		$str = str_replace('&quot;', '', $str);

		$str = str_replace('&#39;', '', $str);

		$str = str_replace('+', '', $str);

		$str = str_replace('@', '', $str);

		$str = str_replace('{', '', $str);

		$str = str_replace('}', '', $str);

		$str = str_replace(']', '', $str);

		$str = str_replace('[', '', $str);

		$str = str_replace(')', '', $str);

		$str = str_replace('(', '', $str);

		$str = str_replace(';', '', $str);

		$str = str_replace(':', '', $str);

		$str = str_replace(',', '', $str);

		$str = str_replace('?', '', $str);

		$str = str_replace('%', '', $str);

		$str = str_replace('^', '', $str);

		$str = str_replace('*', '', $str);

		$str = str_replace('/', '', $str);

		$str = str_replace('#', '', $str);

		return $str;

	}

	function getConfigLinkViewGoogleSearch($pval, $clsTable)

	{

		$link = $clsTable->getLink($pval);

		return str_replace('/', ' › ', str_replace('.html', '', $link));

	}

	function getMetaDescription($pval, $clsTable, $one = null)

	{

		global $core;

		$clsClassTable = new $clsTable();

		$ret = $this->truncateWord($clsClassTable->getMetaDescription($pval, $one), 160);

		$ret = str_replace('"', '', $ret);

		return strip_tags($ret);

	}

	function getPageTitle($pval, $clsTable)

	{

		global $core;

		$clsMeta = new Meta();

		$clsClassTable = new $clsTable();

		#

		$linkMeta = $clsClassTable->getLink($pval);

		$linkMeta = str_replace('http://' . $_SERVER['HTTP_HOST'], '', $linkMeta);

		$allConfig = $clsMeta->getAll("config_link='$linkMeta'", $clsMeta->pkey);

		$one = $clsMeta->getValue($linkMeta);

		$meta_id = $allConfig[0]['meta_id'];

		if ($meta_id != '' && $one['config_value_title'] != '') {

			return $one['config_value_title'];

		}

		$title = $clsClassTable->getTitle($pval);

		return $title . ' | ' . PAGE_NAME;

	}

	function getPageDescription($pval, $clsTable)

	{

		global $core;

		$clsMeta = new Meta();

		$clsClassTable = new $clsTable();

		#

		$linkMeta = $clsClassTable->getLink($pval);

		$linkMeta = str_replace('http://' . $_SERVER['HTTP_HOST'], '', $linkMeta);

		$allConfig = $clsMeta->getAll("config_link='$linkMeta'", $clsMeta->pkey);

		$one = $clsMeta->getValue($linkMeta);

		$meta_id = $allConfig[0]['meta_id'];

		if ($meta_id != '' && $one['config_value_intro'] != '') {

			return $one['config_value_intro'];

		}

		#

		$ret = $this->truncateWord($clsClassTable->getStripIntro($pval), 160);

		$ret = str_replace('"', '', $ret);

		return strip_tags($ret);

	}

	function getCountMetaWord($string_meta_text)

	{

		global $_LANG_ID;

		return  strlen($this->convertToNormal($string_meta_text));

	}

	function getNumberDayOfMonth($year, $month)

	{

		$numberDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);

		return $numberDay;

	}

	function getPageKeyword($pval, $clsTable)

	{

		global $_LANG_ID;

		$clsMeta = new Meta();

		$clsClassTable = new $clsTable();

		#

		$linkMeta = $clsClassTable->getLink($pval);

		$linkMeta = str_replace('http://' . $_SERVER['HTTP_HOST'], '', $linkMeta);

		$allConfig = $clsMeta->getAll("config_link='$linkMeta'");

		$one = $clsMeta->getValue($linkMeta);

		$meta_id = $allConfig[0]['meta_id'];

		if ($meta_id != '' && $one['config_value_keyword'] != '') {

			return $one['config_value_keyword'];

		}

		$ret = $this->getPageTitle($pval, $clsTable);

		$ret = str_replace(' ', ',', $ret);

		return $ret;

	}

	function getPageImageShare($pval, $clsTable, $oneTable = null)

	{

		global $core, $_LANG_ID, $clsConfiguration;

		$clsMeta = new Meta();

		$clsClassTable = new $clsTable();

		#

		$linkMeta = $clsClassTable->getLink($pval, $oneTable);

		$linkMeta = str_replace('http://' . $_SERVER['HTTP_HOST'], '', $linkMeta);

		$allConfig = $clsMeta->getAll("config_link='$linkMeta'", $clsMeta->pkey . ',image');

		$meta_id = $allConfig[0]['meta_id'];

		if ($meta_id != '') {

			return $clsMeta->getMetaImage($meta_id, 500, 261, $allConfig);

		} else {

			if (!isset($oneTable['image'])) {

				$image = $clsClassTable->getOneField('image', $pval);

			} else {

				$image = $oneTable['image'];

			}

			if ($image != '')

				return '/files/thumb/500/261/' . $this->parseImageURL($image);

			return $clsConfiguration->getValue('ImageShareSocial');

		}

	}

	function getListCategory($type)

	{

		$clsCategory = new Category();

		return $clsCategory->getAll("is_trash=0 and _type='$type' order by order_no asc");

	}

	function checkTourHaveCategoryPriceOption($tour_id, $customer_type_id)

	{

		$clsTourPriceCustomerType = new TourPriceCustomerType();

		return $clsTourPriceCustomerType->countItem("tour_id='" . $tour_id . "' and customer_type_id='" . $customer_type_id . "' and is_trash='0'");

	}

	function checkTourHaveCategoryPriceOptionAge($tour_id, $age_type_id)

	{

		$clsTourPriceAgeType = new TourPriceAgeType();

		return $clsTourPriceAgeType->countItem("tour_id='" . $tour_id . "' and age_type_id='" . $age_type_id . "' and is_trash='0'");

	}

	function loadYear($year)

	{

		$html = '<option value="0">Năm</option>';

		for ($i = 0; $i < 2; $i++) {

			$html .= '<option value="' . ($i + date('Y', time())) . '" ' . ($i + date('Y', time()) == $year ? 'selected="selected"' : '') . '>' . ($i + date('Y', time())) . '</option>';

		}

		#

		return ($html);

	}

	function getMonthOfYear($today)

	{

		global $core, $_lang;

		$m = date('m', $today);

		if ($m == '1') return $core->get_Lang('January');

		if ($m == '2') return $core->get_Lang('February');

		if ($m == '3') return $core->get_Lang('March');

		if ($m == '4') return $core->get_Lang('April');

		if ($m == '5') return $core->get_Lang('May');

		if ($m == '6') return $core->get_Lang('June');

		if ($m == '7') return $core->get_Lang('July');

		if ($m == '8') return $core->get_Lang('August');

		if ($m == '9') return $core->get_Lang('September');

		if ($m == '10') return $core->get_Lang('October');

		if ($m == '11') return $core->get_Lang('November');

		if ($m == '12') return $core->get_Lang('December');

		return '';

	}

	function getMonthOfYear2($month)

	{

		global $core, $_lang;

		if ($month == '1') return $core->get_Lang('January');

		if ($month == '2') return $core->get_Lang('February');

		if ($month == '3') return $core->get_Lang('March');

		if ($month == '4') return $core->get_Lang('April');

		if ($month == '5') return $core->get_Lang('May');

		if ($month == '6') return $core->get_Lang('June');

		if ($month == '7') return $core->get_Lang('July');

		if ($month == '8') return $core->get_Lang('August');

		if ($month == '9') return $core->get_Lang('September');

		if ($month == '10') return $core->get_Lang('October');

		if ($month == '11') return $core->get_Lang('November');

		if ($month == '12') return $core->get_Lang('December');

		return '';

	}

	function getMonthOfYearNew($time)

	{

		global $core, $_lang;

		$m = date('m', $time);

		return $m;

	}

	function loadMonth($year, $month)

	{

		$html = '<option value="0">Tháng</option>';

		for ($i = 1; $i < 13; $i++) {

			$html .= '<option value="' . $i . '" ' . ($i == $month ? 'selected="selected"' : '') . '>T' . $i . '</option>';

		}

		#

		return ($html);

	}

	function loadMonthD($year, $month)

	{

		$html = '<option value="0">Tháng</option>';

		for ($i = 1; $i < 13; $i++) {

			$html .= '<option value="' . $i . '" ' . ($i == $month ? 'selected="selected"' : '') . ' data="' . $year . '">T' . $i . '-' . $year . '</option>';

		}

		#

		return ($html);

	}

	function loadDay($year, $month, $day)

	{

		$numberDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);

		$year_current = date('Y', time());

		$month_current = date('m', time());

		$day_current = date('d', time());

		#

		$html = '<option value="0">Ngày</option>';

		for ($i = 0; $i < $numberDay; $i++) {

			$html .= '<option value="' . ($i + 1) . '" ' . (($i + 1) == $day ? 'selected="selected"' : '') . '>' . ($i + 1) . '</option>';

		}

		#

		return ($html);

	}

	function loadHour($hour)

	{

		$html = '<option value="00">Giờ</option>';

		for ($i = 0; $i < 23; $i++) {

			$tmp = $i < 10 ? '0' . $i : $i;

			$html .= '<option value="' . $tmp . '" ' . ($tmp == $hour ? 'selected="selected"' : '') . '>' . $tmp . '</option>';

		}

		#

		return ($html);

	}

	function loadMinute($min)

	{

		$html = '<option value="00">Phút</option>';

		for ($i = 0; $i < 12; $i++) {

			$n = $i * 5;

			$tmp = $n < 10 ? '0' . $n : $n;

			$html .= '<option value="' . $tmp . '" ' . ($tmp == $min ? 'selected="selected"' : '') . '>' . $tmp . '</option>';

		}

		#

		return ($html);

	}

	function getImageThumb($config_images_id, $pvaltable, $type)

	{

		$clsConfigImagesVal = new ConfigImagesVal();

		$all = $clsConfigImagesVal->getAll("config_images_id='$config_images_id' and pvaltable='$pvaltable' and type='$type' limit 0,1");

		return $all[0]['image'];

	}

	function fncConfigImage($type, $pvalTable)

	{

		$ConfigImages = new ConfigImages();

		$lstImageSize = $ConfigImages->getAll("type='$type' order by order_no asc");

		if (!empty($lstImageSize)) {

			$html = '';

			for ($i = 0; $i < count($lstImageSize); $i++) {

				$img = $this->getImageThumb($lstImageSize[$i]['config_images_id'], $pvalTable, $type);

				$html .= '<div style="float:left; float:left; margin:10px; padding:10px; background:#FFC;"><form method="post" action="" enctype="multipart/form-data">

					<strong>' . $lstImageSize[$i]['title'] . '</strong>(' . $lstImageSize[$i]['width'] . 'px/' . $lstImageSize[$i]['height'] . 'px)

					<br style="clear:both" />

					<img id="imgThumb_' . $lstImageSize[$i]['config_images_id'] . '_image" src="' . $img . '" style=" width:' . $lstImageSize[$i]['width'] . 'px; height:' . $lstImageSize[$i]['height'] . 'px; border:1px solid #ccc;" class="imageSrc" />

					<br style="clear:both" />

					<a href="#" config_images_id="' . $lstImageSize[$i]['config_images_id'] . '" t="' . $pvalTable . '" class="ajEditImageThumb" g="imgThumb_' . $lstImageSize[$i]['config_images_id'] . '">Sửa</a> | <a href="#" config_images_id="' . $lstImageSize[$i]['config_images_id'] . '" t="' . $pvalTable . '" class="ajDelImageThumb" g="imgThumb_' . $lstImageSize[$i]['config_images_id'] . '" tp="' . $type . '">Xóa</a>

					<input type="hidden" name="image_src_' . $lstImageSize[$i]['config_images_id'] . '" value="' . $img . '" class="hidden_src" id="imgThumb_' . $lstImageSize[$i]['config_images_id'] . '_hidden" />

					<input type="file" sth="' . $lstImageSize[$i]['width'] . 'x' . $lstImageSize[$i]['height'] . '" style="display:none" id="imgThumb_' . $lstImageSize[$i]['config_images_id'] . '_file" g="imgTour" class="ajEditImageThumbFile" name="image" config_images_id="' . $lstImageSize[$i]['config_images_id'] . '" t="' . $pvalTable . '" tp="' . $type . '" />

				';

				$html .= '<input id="uploadPreview" type="hidden" value="0" /></form>

				</div>';

			}

		}

		return $html;

	}

	function lstLangTMS()

	{

		return array(

			"cn"	=> "zh",

			"en"	=> "en",

			"es"	=> "es",

			"fr"	=> "fr",

			"kr"	=> "ko",

			"vn"	=> "vn",

		);

	}

	function getLangTMS($iso_lang)

	{

		$lstLangTMS = $this->lstLangTMS();

		return $lstLangTMS[$iso_lang];

	}

	function getListLangAdmin()

	{

		$customClsArray = array();

		if (is_dir($_SERVER['DOCUMENT_ROOT'] . '/admin/lang')) {

			if ($dh = opendir($_SERVER['DOCUMENT_ROOT'] . '/admin/lang')) {

				while (($file = readdir($dh)) !== false) {

					if (substr($file, -3) == 'php')

						array_push($customClsArray, str_replace('.php', '', $file));

				}

				closedir($dh);

			}

		}

		return $customClsArray;

	}

	function getListLang()

	{

		$customClsArray = array();

		if (is_dir($_SERVER['DOCUMENT_ROOT'] . '/lang')) {

			if ($dh = opendir($_SERVER['DOCUMENT_ROOT'] . '/lang')) {

				while (($file = readdir($dh)) !== false) {

					if (substr($file, -3) == 'php') {

						$abc = str_replace('.php', '', $file);

						if ($abc != LANG_DEFAULT) {

							array_push($customClsArray, $abc);

						}

					}

				}

				array_unshift($customClsArray, LANG_DEFAULT);

				closedir($dh);

			}

		}

		return $customClsArray;

	}

	function getFullLanguage($_LANG_ID)

	{

		global $core, $_lang;

		if ($_LANG_ID == 'vn') return $core->get_Lang('Vietnamese');

		if ($_LANG_ID == 'en') return $core->get_Lang('English');

		if ($_LANG_ID == 'es') return $core->get_Lang('Spanish');

		if ($_LANG_ID == 'fr') return $core->get_Lang('French');

		if ($_LANG_ID == 'kr') return $core->get_Lang('Korea');

		if ($_LANG_ID == 'cn') return $core->get_Lang('Chinese');

		if ($_LANG_ID == 'ru') return $core->get_Lang('Rusian');

		return '';

	}

	function getRealIP()

	{

		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

			$ip = $_SERVER['HTTP_CLIENT_IP'];

		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

		} else {

			$ip = $_SERVER['REMOTE_ADDR'];

		}

		return $ip;

	}

	/* COUNT */

	function countTotal($clsTable, $cond = '1=1')

	{

		$clsClassTable = new $clsTable();

		return $clsClassTable->countItem($cond);

	}

	function countTotalSlide($mod_page, $act_page, $target_id)

	{

		$clsClassTable = new Slide();

		return $clsClassTable->countItem("mod_page = '$mod_page' and act_page = '$act_page' and target_id = '$target_id'");

	}

	function getTourByCat($cat_id, $limit = 0)

	{

		$clsTour = new Tour();

		$res = $clsTour->getAll("is_trash=0 and cat_id='$cat_id' order by reg_date DESC limit 0,$limit");

		return $res;

	}

	function getHotelByCountry($country_id, $limit = 0)

	{

		$clsHotel = new Hotel();

		$res = $clsHotel->getAll("is_trash=0 and country_id='$country_id' order by order_no DESC limit 0,$limit");

		return $res;

	}

	function getExName($clsTable)

	{

		global $core;

		$clsClassTable = new $clsTable;

		$res = $clsClassTable->getAll("is_trash=0 order by reg_date asc limit 0,1");

		if (!empty($res[0][$clsClassTable->pkey])) {

			return $clsClassTable->getTitle($res[0][$clsClassTable->pkey]);

		} else {

			$core->get_Lang('entertitlehere');

		}

	}

	function getLink($str)

	{

		global $clsConfiguration, $_LANG_ID, $extLang, $oneConfiguration;

		switch ($str) {

			case 'about':

				if ($_LANG_ID == 'vn')

					return $extLang . '/gioi-thieu.html';

				return $extLang . '/about-us.html';

				break;

			case 'signin':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-khoan/dang-nhap.html';

				return $extLang . '/account/signin.html';

				break;

			case 'signup':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-khoan/dang-ky.html';

				return $extLang . '/account/signup.html';

				break;

			case 'forgot_pass':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-khoan/quen-mat-khau.html';

				return $extLang . '/account/forgot-password.html';

				break;

			case 'cart':

				if ($_LANG_ID == 'vn')

					return $extLang . '/shopping-cart';

				return $extLang . '/shopping-cart';

				break;

			case 'my_profile':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-khoan/thong-tin-tai-khoan.html';

				return $extLang . '/account/profile.html';

				break;

			case 'my_booking':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-khoan/booking-cua-toi.html';

				return $extLang . '/account/booking.html';

				break;

			case 'my_wishlist':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-khoan/danh-sach-yeu-thich.html';

				return $extLang . '/account/wishlist.html';

				break;

			case 'contact_info':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-khoan/thong-tin-tai-khoan/thong-tin-lien-he.html';

				return $extLang . '/account/contact-information.html';

				break;

			case 'setting_success':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-khoan/chinh-sua-thong-tin/thanh-cong.html';

				return $extLang . '/account/setting-profile/success.html';

				break;

			case 'logout':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-khoan/dang-xuat.html';

				return $extLang . '/account/logout.html';

				break;

			case 'blog':

				return $extLang . '/blog';

				break;

			case 'service':

				if ($_LANG_ID == 'vn')

					return $extLang . '/dich-vu';

				return $extLang . '/travel-services';

				break;

			case 'news':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tin-tuc';

				return $extLang . '/travel-news';

				break;

			case 'contact':

				if ($_LANG_ID == 'vn')

					return $extLang . '/lien-he.html';

				return $extLang . '/contact-us.html';

				break;

			case 'contacts':

				vnSessionDelVar('cruise_itinerary_contact_id');

				vnSessionDelVar('hotel_contact_id');

				vnSessionDelVar('tour_contact_id');

				vnSessionDelVar('cruise_contact_id');

				if ($_LANG_ID == 'vn')

					return $extLang . '/lien-he.html';

				return $extLang . '/contact-us.html';

				break;

			case 'aboutUs':

				return $extLang . '/about-us.html';

				break;

			case 'contact2':

				return DOMAIN_NAME . $extLang . '/contact-us.html';

				break;

			case 'destination':

				if ($_LANG_ID == 'vn')

					return $extLang . '/diem-den';

				return $extLang . '/destinations';

				break;

			case 'tailor':

				return $extLang . '/customize-tour.html';

				break;

			case 'testimonial':

				if ($_LANG_ID == 'vn')

					return $extLang . '/nhan-xet';

				return $extLang . '/testimonials';

				break;

			case 'voucher':

				if ($_LANG_ID == 'vn')

					return $extLang . '/voucher.html';

				return $extLang . '/voucher.html';

				break;

			case 'promotion':

				return $extLang . '/promotion';

				break;

			case 'faqs':

				if ($_LANG_ID == 'vn')

					return $extLang . '/hoi-dap.html';

				return $extLang . '/faqs.html';

				break;

			case 'payment_method':

				$lang = $_LANG_ID;

				switch ($lang) {

					case 'en':

						return $extLang . '/about/payment-method.html';

						break;

					case 'vn':

						return $extLang . '/thong-tin/chinh-sach-thanh-toan.html';

						break;

					case 'es':

						return $extLang . '/about/metodo-de-pago.html';

						break;

					case 'fr':

						return $extLang . '/about/mode-de-paiement.html';

						break;

					case 'kr':

						return $extLang . '/about/지불-방법.html';

						break;

					case 'cn':

						return $extLang . '/about/付款方法.html';

						break;

				}

				break;

			case 'term_condition':

				$lang = $_LANG_ID;

				switch ($lang) {

					case 'en':

						return $extLang . '/about/terms-conditions.html';

						break;

					case 'vn':

						return $extLang . '/thong-tin/dieu-khoan-chinh-sach.html';

						break;

					case 'es':

						return $extLang . '/about/terminos-y-condiciones.html';

						break;

					case 'fr':

						return $extLang . '/about/termes-et-conditions.html';

						break;

					case 'kr':

						return $extLang . '/about/이용-약관정책.html';

						break;

					case 'cn':

						return $extLang . '/about/条款-和-条件.html';

						break;

				}

				break;

			case 'why':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tai-sao-chon-chung-toi.html';

				return $extLang . '/why-travel-with-us.html';

				break;

			case 'terms_policies':

				if ($_LANG_ID == 'vn')

					return $extLang . '/thong-tin/dieu-khoan-chinh-sach.html';

				return $extLang . '/thong-tin/dieu-khoan-chinh-sach.html';

				break;

			case 'download':

				if ($_LANG_ID == 'vn')

					return $extLang . '/an-pham-quang-cao.html';

				return $extLang . '/brochure.html';

				break;

			case 'search_tour':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tim-kiem-tours/';

				return $extLang . '/search-tours/';

				break;

			case 'search_voucher':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tim-kiem-voucher/';

				return $extLang . '/search-voucher/';

				break;

			case 'search_cruise':

				if ($_LANG == 'vn')

					return $extLang . '/tim-kiem-cruises';

				return $extLang . '/search-cruises/';

				break;

			case 'search_hotel':

				if ($_LANG_ID == 'vn')

					return $extLang . '/tim-kiem-khach-san/';

				return $extLang . '/search-stay/';

				break;

			case 'hotel_admin':

				return '/admin/hotel';

				break;

			case 'combo_admin':

				return '/admin/combo';

				break;

			case 'inbound':

				return $extLang . '/du-lich-trong-nuoc/du-lich-';

				break;

			case 'outbound':

				return $extLang . '/du-lich-nuoc-ngoai/du-lich-';

				break;

			case 'cruise':

				if ($_LANG_ID == 'vn')

					return '/du-thuyen/';

				return $extLang . '/cruise/';

				break;

			case 'hotel':

				if ($_LANG_ID == 'en')

					return '/stay';

				return $extLang . '/stay/';

				break;

			default:

				return $clsConfiguration->getValue('site_' . $str . '_link_' . $_LANG_ID);

		}

	}

	function getLinkAdmin($str)

	{

		global $clsConfiguration, $_LANG_ID, $extLang, $oneConfiguration;

		switch ($str) {

			case 'hotel':

				return '/admin/hotel';

				break;

			case 'cruise':

				return '/admin/cruise';

				break;

			case 'blog':

				return '/admin/blog';

				break;

			case 'voucher':

				return '/admin/voucher';

				break;

			case 'country':

				return '/admin/country';

				break;

			case 'region':

				return '/admin/region';

				break;

			case 'city':

				return '/admin/city';

				break;

			case 'guide':

				return '/admin/guide';

				break;

			case 'guideCat':

				return '/admin/guide/category';

				break;

			case 'guide2':

				return '/admin/guide/compose';

				break;

			case 'testimonial':

				return '/admin/testimonial';

				break;

			case 'page':

				return '/admin/page';

				break;

			case 'news':

				return '/admin/news';

				break;

			case 'combo':

				return '/admin/combo';

				break;

			case 'ads':

				return '/admin/ads';

				break;

			case 'activities':

				return '/admin/property/activities';

				break;

			case 'member':

				return '/admin/member';

				break;

			case 'service':

				return '/admin/service';

				break;

			case 'category_country':

				return '/admin/tour/categorycountry';

				break;

				return $clsConfiguration->getValue('site_' . $str . '_link_' . $_LANG_ID);

		}

	}

	function getLinkCustomize()

	{

		return $this->getLink('tailor');

	}

	function getModIntro($mod)

	{

		global $clsConfiguration, $_LANG_ID;

		return html_entity_decode($clsConfiguration->getValue('site_' . $mod . '_intro_' . $_LANG_ID));

	}

	function getListTitle()

	{

		global $core;

		#

		$lstTitle = array();

		$lstTitle['Mr'] = $core->get_Lang('Mr');

		$lstTitle['Mrs'] = $core->get_Lang('Mrs');

		$lstTitle['Ms'] = $core->get_Lang('Ms');

		//$lstTitle['Miss'] = $core->get_Lang('Miss');

		//$lstTitle['Dr'] = $core->get_Lang('Dr');

		return $lstTitle;

	}

	function getNameTitle($val)

	{

		$lstTitle = $this->getListTitle();

		return $lstTitle[$val];

	}

	function makeSelectTitle($selected = '')

	{

		global $core;

		#

		$lstTitle = $this->getListTitle();

		$html = '';

		// $html .= '<option value="0">--'.$core->get_Lang(Select).'--</option>';

		foreach ($lstTitle as $k => $v) {

			$html .= '<option value="' . $k . '" ' . ($selected == $k ? 'selected="selected"' : '') . '>' . $v . '</option>';

		}

		return $html;

		die();

	}

	function check_is_ajax($script)

	{

		$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) and

			strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

		if (!$isAjax) {

			trigger_error('Access denied - not an AJAX request...' . ' (' . $script . ')', E_USER_ERROR);

		}

	}

	function getTotalHotelInCity($_Id)

	{

		$clsHotel = new Hotel();

		return $clsHotel->countItem("is_trash=0 and is_online=1 and city_id='$_Id'");

	}

	function generateBook()

	{

		$hash = uniqid('Travel_', time());

		return substr($hash, rand(7, 10), 8);

	}

	function generateSQLStructure()

	{

		global $_frontIsLoggedin_user_id, $core, $clsISO, $dbconn;

		#

		$html = '<?

	$' . 'listTableInDb = array();

	';

		#

		$sql = "SHOW TABLES FROM " . DB_NAME;

		$listAllTable = $dbconn->getAll($sql);

		for ($i = 0; $i < count($listAllTable); $i++) {

			$tbl = $listAllTable[$i][0];

			$html .= "

	/*Table " . $tbl . "*/

	$" . "itemTableInDb = array(); $" . "itemTableInDb" . "['tbl']='" . $tbl . "'; $" . "fieldTableInDb = array();

	$" . "itemTableInDb" . "['arr']='" . serialize($listAllTable[$i]) . "';

			";

			$sqlField = "SHOW COLUMNS FROM " . $tbl;

			$listAllTableField = $dbconn->getAll($sqlField);

			//print_r($listAllTableField[0]['Key']); die();

			$pkey = '';

			$sqlCreateBody = '';

			for ($k = 0; $k < count($listAllTableField); $k++) {

				$Field = $listAllTableField[$k]['Field'];

				$Type = $listAllTableField[$k]['Type'];

				$Null = $listAllTableField[$k]['Null'];

				$Key = $listAllTableField[$k]['Key'];

				$Default = $listAllTableField[$k]['Default'];

				$Extra = $listAllTableField[$k]['Extra'];

				$html .= "

	$" . "fieldTableInDb" . "['" . $Field . "'] = \"`" . $Field . "` " . $Type . " " . ($Null == 'NO' ? 'NOT NULL' : '') . " " . ($Default != '' ? "DEFAULT '" . $Default . "'" : '') . " " . ($Key == 'PRI' && ($tbl != 'isosessionhandlertable' && $tbl != 'default_configuration') ? 'AUTO_INCREMENT' : '') . "\";

				";

				if ($Key == 'PRI') {

					$pkey = $Field;

				}

				$sqlCreateBody .= "`" . $Field . "` " . $Type . " " . ($Null == 'NO' ? 'NOT NULL' : '') . " " . ($Default != '' ? "DEFAULT '" . $Default . "'" : '') . " " . ($Key == 'PRI' && ($tbl != 'isosessionhandlertable' && $tbl != 'default_configuration') ? 'AUTO_INCREMENT' : '') . ",

				";

			}

			$sqlCreate = 'CREATE TABLE IF NOT EXISTS `' . $tbl . '` (

	';

			$sqlCreate .= $sqlCreateBody;

			if ($pkey != '') {

				$sqlCreate .= 'PRIMARY KEY (`' . $pkey . '`)

				';

			}

			if ($tbl == 'default_configuration') {

				$sqlCreate .= '  KEY `setting` (`setting`(32))

				';

			}

			$sqlCreate .= ') ENGINE=MyISAM  DEFAULT CHARSET=utf8

			';

			$html .= '

	$' . 'itemTableInDb' . '["pkey"] = "' . $pkey . '";

	$' . 'itemTableInDb' . '["sqlCreate"] = "' . $sqlCreate . '";

	$' . 'itemTableInDb' . '["field"] = $' . 'fieldTableInDb;

	$listTableInDb[] = $itemTableInDb;

	';

		}

		$html .= '

	?>';

		$fp = fopen(PCMS_DIR . '/inc/db.php', 'w');

		if ($fp) {

			fwrite($fp, $html);

		}

		fclose($fp);

		#

		print_r($html);

		die();

	}

	function parseIntVersion($version)

	{

		return str_replace('.', '', $version);

	}

	function sysData($tbl, $field_old, $field)

	{

		global $dbconn, $_LANG_ID;

		$lstAll = $dbconn->getAll("select * from " . $tbl);

		if (!empty($lstAll)) {

			for ($i = 0; $i < count($lstAll); $i++) {

				$_sql = "SHOW INDEX FROM " . $tbl . " WHERE Key_name = 'PRIMARY';";

				$_store = $dbconn->Execute($_sql);

				$_pkey = $_store->fields['Column_name'];

				$sql = "UPDATE $tbl SET $field='" . addslashes($lstAll[$i][$field_old]) . "' WHERE $_pkey='" . $lstAll[$i][$_pkey] . "'";

				$dbconn->Execute($sql);

			}

		}

		return 1;

	}

	function runUpdate()

	{

		global $dbconn, $_LANG_ID;

		$clsConfiguration = new Configuration();

		$ISOCMS_VERSION = $this->parseIntVersion($clsConfiguration->getValue("ISOCMS_VERSION"));

		$ISOCMS_VERSION_IN_FILE = $this->parseIntVersion(ISOCMS_VERSION);

		$ISOCMS_VERSION_BUILD = intval($clsConfiguration->getValue("ISOCMS_VERSION_BUILD"));

		if ($ISOCMS_VERSION < $ISOCMS_VERSION_IN_FILE || $ISOCMS_VERSION_BUILD < ISOCMS_VERSION_BUILD) {

			require(PCMS_DIR . '/inc/db.php');

			for ($i = 0; $i < count($listTableInDb); $i++) {

				$oneTableInDb = $listTableInDb[$i];

				$sqlCheckExistTable = "SHOW TABLES LIKE '" . $oneTableInDb['tbl'] . "'";

				$tmpCheckExistTable = $dbconn->getAll($sqlCheckExistTable);

				if ($tmpCheckExistTable[0][0] == $oneTableInDb['tbl']) {

					// Some code

				} else {

					/*Create Table*/

					$sqlCreate = $oneTableInDb['sqlCreate'];

					$dbconn->execute($sqlCreate);

				}

				#check field

				$list_field = $oneTableInDb['field'];

				foreach ($list_field as $name => $value) {

					$sqlCheckExistTableCOLUMN = "SELECT *

FROM information_schema.COLUMNS

WHERE TABLE_SCHEMA = '" . DB_NAME . "'

AND TABLE_NAME = '" . $oneTableInDb['tbl'] . "'

AND COLUMN_NAME = '" . $name . "'";

					$tmpCheckExistTableCOLUMN = $dbconn->getAll($sqlCheckExistTableCOLUMN);

					if ($tmpCheckExistTableCOLUMN[0]['COLUMN_NAME'] != $name) {

						/*Create Field*/

						$sqlCreateField = "ALTER TABLE " . $oneTableInDb['tbl'] . " ADD " . $value;

						$dbconn->execute($sqlCreateField);

					}

				}

			}

			#edit data

			$sql = "SHOW TABLES FROM " . DB_NAME;

			$listAllTable = $dbconn->getAll($sql);

			for ($i = 0; $i < count($listAllTable); $i++) {

				$tbl = $listAllTable[$i][0];

				#drop all field language from table

				$sufix = '_vn';

				if ($_LANG_ID == 'vn') {

					$sufix = '_en';

				}

				$sqlFieldLang = "SHOW COLUMNS FROM " . $tbl . " LIKE '%" . $sufix . "'";

				$listAllTableFieldLang = $dbconn->getAll($sqlFieldLang);

				if (is_array($listAllTableFieldLang) && count($listAllTableFieldLang) > 0) {

					for ($k = 0; $k < count($listAllTableFieldLang); $k++) {

						$sql = "ALTER TABLE " . $tbl . " drop column " . $listAllTableFieldLang[$k]['Field'];

						//$dbconn->Execute($sql);

					}

				}

				#rename field from table

				$sqlField = "SHOW COLUMNS FROM " . $tbl . " like '%_" . $_LANG_ID . "'";

				$listAllTableField = $dbconn->getAll($sqlField);

				if (is_array($listAllTableField) && count($listAllTableField) > 0) {

					for ($k = 0; $k < count($listAllTableField); $k++) {

						$FieldOld = $listAllTableField[$k]['Field'];

						$Field = str_replace('_' . $_LANG_ID, '', $FieldOld);

						if ($this->sysData($tbl, $FieldOld, $Field)) {

							$sql = "ALTER TABLE " . $tbl . " drop column " . $listAllTableField[$k]['Field'];

							//$dbconn->Execute($sql);

						}

					}

				}

			}

			#

			$clsConfiguration->updateValue("ISOCMS_VERSION", ISOCMS_VERSION);

			$clsConfiguration->updateValue("ISOCMS_VERSION_BUILD", ISOCMS_VERSION_BUILD);

			$clsConfiguration->updateValue("ISOCMS_VERSION_UPDATE", time());

		}

	}

	function getSelectPropertyType($type, $selected = 0)

	{

		global $core;

		$clsProperty = new Property();

		$html = '<option value="0">' . $core->get_Lang('Select') . '</option>';

		$lst = $clsProperty->getAll("is_trash=0 and type='$type' order by order_no ASC");

		if (!empty($lst)) {

			foreach ($lst as $k => $v) {

				$html .= '<option value="' . $v[$clsProperty->pkey] . '" ' . ($selected == $v[$clsProperty->pkey] ? 'selected="selected"' : '') . '>' . $clsProperty->getTitle($v[$clsProperty->pkey]) . '</option>';

			}

			unset($lst);

		}

		return $html;

	}

	function genareateNumberInvoice()

	{

		return date("d_m_Y_His");

	}

	function _parseNumber($num)

	{

		return intval($num) < 10 ? '0' . $num : $num;

	}

	function getWeeksInYear($date = NULL, $flag = false)

	{

		if (empty($date)) {

			$date = date('d/m/Y');

		}

		$tmp = explode('/', $date);

		$month = $tmp[1];

		$year = $tmp[2];

		$dayOfMonth = date("t", mktime(0, 0, 0, $month, 1, $year));

		$weekOfMonth = (int) date('W', strtotime("first thursday of $year-$month"));

		$weeks = array();

		if ($flag == false) {

			//loop through month

			for ($day = 1; $day <= $dayOfMonth; $day++) {

				$week_day = date("w", mktime(0, 0, 0, $month, $day, $year)); //0..6 starting sunday

				$weeks[$weekOfMonth][$week_day] = $this->_parseNumber($day) . '/' . $month . '/' . $year;

				if ($week_day == 6) {

					$weekOfMonth++;

				}

			}

		} else {

			for ($day = 1; $day <= $dayOfMonth; $day++) {

				$week_day = date("w", mktime(0, 0, 0, $month, $day, $year)); //0..6 starting sunday

				$weeks[$weekOfMonth] = $weekOfMonth;

				if ($week_day == 6) {

					$weekOfMonth++;

				}

			}

		}

		return $weeks;

	}

	function getCurrentWeekInYear($ddate = '')

	{

		if ($ddate == '') $ddate = date('Y-m-d', time());

		$date = new DateTime($ddate);

		$week = $date->format("W");

		return $week + 1;

	}

	function getMonthsOfQuarter($quarter)

	{

		switch ($quarter) {

			case 'quarter_1':

				return array('01', '02', '03');

			case 'quarter_2':

				return array('04', '05', '06');

			case 'quarter_3':

				return array('07', '08', '09');

			case 'quarter_4':

				return array('10', '11', '12');

		}

	}

	function get_dates_of_quarter($quarter = 'current', $year = null, $format = null)

	{

		if (!is_int($year)) {

			$year = date('Y');

		}

		switch (strtolower($quarter)) {

			case 'quarter_1':

				$quarter = 1;

				break;

			case 'quarter_2':

				$quarter = 2;

				break;

			case 'quarter_3':

				$quarter = 3;

				break;

			case 'quarter_4':

				$quarter = 4;

				break;

			default:

				$quarter = (!is_int($quarter) || $quarter < 1 || $quarter > 4) ? $current_quarter : $quarter;

				break;

		}

		$start = new DateTime($year . '-' . (3 * $quarter - 2) . '-1 00:00:00');

		$end = new DateTime($year . '-' . (3 * $quarter) . '-' . ($quarter == 1 || $quarter == 4 ? 31 : 30) . ' 23:59:59');

		return array(

			'start_date' => $format ? $start->format($format) : $start,

			'end_date' => $format ? $end->format($format) : $end,

		);

	}

	function getQuarterByMonth($monthNumber)

	{

		return floor(($monthNumber - 1) / 3) + 1;

	}

	function getQuarterDay($monthNumber, $dayNumber, $yearNumber)

	{

		$quarterDayNumber = 0;

		$dayCountByMonth = array();

		$startMonthNumber = ((self::getQuarterByMonth($monthNumber) - 1) * 3) + 1;

		// Calculate the number of days in each month.

		for ($i = 1; $i <= 12; $i++) {

			$dayCountByMonth[$i] = date("t", strtotime($yearNumber . "-" . $i . "-01"));

		}

		for ($i = $startMonthNumber; $i <= $monthNumber - 1; $i++) {

			$quarterDayNumber += $dayCountByMonth[$i];

		}

		$quarterDayNumber += $dayNumber;

		return $quarterDayNumber;

	}

	function getCurrentQuarterDay()

	{

		return self::getQuarterDay(date('n'), date('j'), date('Y'));

	}

	function checkColumnInTable($table_name, $column_name)

	{

		global $dbconn;

		$sql = "SHOW COLUMNS FROM `" . $table_name . "` LIKE '$column_name'";

		$lstTbl = $dbconn->GetAll($sql);

		return !empty($lstTbl) && $lstTbl[0][0] == $column_name ? 1 : 0;

	}

	function renameColumnInTable($table_name, $old_column_name, $new_column_name, $datatype = 'VARCHAR(255)')

	{

		global $dbconn;

		$sql = "ALTER TABLE `" . $table_name . "` CHANGE `" . $old_column_name . "` `" . $new_column_name . "` $datatype";

		$dbconn->Execute($sql);

	}

	function addColumnIntoTable($table_name, $column_name, $after_column_name, $datatype = 'VARCHAR(255)')

	{

		global $dbconn;

		$sql = "ALTER TABLE `" . $table_name . "` ADD `" . $column_name . "` $datatype AFTER `" . $after_column_name . "`";

		$dbconn->Execute($sql);

	}

	function getPost($key = null, $default = null)

	{

		if (null === $key) {

			return $_POST;

		}

		$value = (isset($_POST[$key])) ? $_POST[$key] : $default;

		return $value ? $value : null;

	}

	function getRecordPerPage($recordPerPage, $totalRecord, $mod, $act = '', $type = '')

	{

		global $dbconn, $core;

		$pUrl = 'mod=' . $mod;

		if ($act != '') {

			$pUrl .= '&act=' . $act;

		}

		if ($type != '') {

			$pUrl .= '&type=' . $type;

		}

		$html = '

		<select name="recordperpage" onchange="window.location = this.options[this.selectedIndex].value">

			<option ' . ($recordPerPage == 20 ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=20">20</option>';

		if ($totalRecord > 20) {

			$html .= '<option ' . ($recordPerPage == 50 ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=50">50</option>';

			if ($totalRecord > 50) {

				$html .= '<option ' . ($recordPerPage == 100 ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=100">100</option>';

				if ($totalRecord > 100) {

					$html .= '<option ' . ($recordPerPage == 200 ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=200">200</option>';

					if ($totalRecord > 200) {

						$html .= '<option ' . ($recordPerPage == $totalRecord ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=' . $totalRecord . '">' . $core->get_Lang('All') . '</option>';

					}

				}

			}

		}

		$html .= '</select>';

		return $html;

	}

	function getRecordPerPage2($recordPerPage, $totalRecord, $mod, $Url, $act = '')

	{

		global $dbconn, $core;

		$pUrl = 'mod=' . $mod;

		if ($act != '') {

			$pUrl .= '&act=' . $act;

		}

		if ($Url != '') {

			$pUrl .= $Url;

		}

		$html = '

		<select name="recordperpage" onchange="window.location = this.options[this.selectedIndex].value">

			<option ' . ($recordPerPage == 20 ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=20">20</option>';

		if ($totalRecord > 20) {

			$html .= '<option ' . ($recordPerPage == 50 ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=50">50</option>';

			if ($totalRecord > 50) {

				$html .= '<option ' . ($recordPerPage == 100 ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=100">100</option>';

				if ($totalRecord > 100) {

					$html .= '<option ' . ($recordPerPage == 200 ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=200">200</option>';

					if ($totalRecord > 200) {

						$html .= '<option ' . ($recordPerPage == $totalRecord ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/?' . $pUrl . '&recordperpage=' . $totalRecord . '">' . $core->get_Lang('All') . '</option>';

					}

				}

			}

		}

		$html .= '</select>';

		return $html;

	}

	function getPaginationAdmin($totalRecord, $totalPage, $currentPage, $listPageNumber, $link_page_current, $type)

	{

		global $dbconn, $core;

		$html = '

		<div class="statistical mt5">

			<table width="100%" border="0" cellpadding="3" cellspacing="0">

				<tr>

					<td width="50%" align="left">' . $core->get_Lang('statistical') . ' <strong>' . $totalRecord . '</strong> ' . $core->get_Lang('records') . '/<strong>' . $totalPage . '</strong> ' . $core->get_Lang('page') . '. ' . $core->get_Lang('youareonpagenumber') . ' <strong>' . $currentPage . '</strong></td>';

		if ($totalPage > 1) {

			$html .= '<td width="50%" align="right">

						' . $core->get_Lang('gotopage') . ':

						<select name="page" onchange="window.location = this.options[this.selectedIndex].value">';

			foreach ($listPageNumber as $k => $v) {

				$html .= '<option ' . ($v == $currentPage ? 'selected="selected"' : '') . ' value="' . PCMS_URL . '/' . $link_page_current . '&page=' . $v . '">' . $v . '</option>';

			}

			$html .= '</td>';

		}

		$html .= '</tr>

			</table>

		</div>';

		return $html;

	}

	function checkEmptyArr($array = array())

	{

		foreach ($array as $k => $v) {

			if (!empty($v)) {

				return 1;

			}

		}

		return 0;

	}

	function isoencrypt($string)

	{

		$cc_encryption_hash = 'isoCMS';

		$key = md5(md5($cc_encryption_hash)) . md5($cc_encryption_hash);

		$hash_key = $this->_hash($key);

		$hash_length = strlen($hash_key);

		$iv = $this->_generate_iv();

		$out = "";

		$c = 0;

		while ($c < $hash_length) {

			$out .= chr(ord($iv[$c]) ^ ord($hash_key[$c]));

			++$c;

		}

		$key = $iv;

		$c = 0;

		while ($c < strlen($string)) {

			if ($c != 0 && $c % $hash_length == 0) {

				$key = $this->_hash($key . substr($string, $c - $hash_length, $hash_length));

			}

			$out .= chr(ord($key[$c % $hash_length]) ^ ord($string[$c]));

			++$c;

		}

		$out = base64_encode($out);

		return $out;

	}

	function isodecrypt($string)

	{

		$cc_encryption_hash = 'isoCMS';

		$key = md5(md5($cc_encryption_hash)) . md5($cc_encryption_hash);

		$hash_key = $this->_hash($key);

		$hash_length = strlen($hash_key);

		$string = base64_decode($string);

		$tmp_iv = substr($string, 0, $hash_length);

		$string = substr($string, $hash_length, strlen($string) - $hash_length);

		$iv = $out = "";

		$c = 0;

		while ($c < $hash_length) {

			$iv .= chr(ord($tmp_iv[$c]) ^ ord($hash_key[$c]));

			++$c;

		}

		$key = $iv;

		$c = 0;

		while ($c < strlen($string)) {

			if ($c != 0 && $c % $hash_length == 0) {

				$key = $this->_hash($key . substr($out, $c - $hash_length, $hash_length));

			}

			$out .= chr(ord($key[$c % $hash_length]) ^ ord($string[$c]));

			++$c;

		}

		return $out;

	}

	function _hash($string)

	{

		if (function_exists("sha1")) {

			$hash = sha1($string);

		} else {

			$hash = md5($string);

		}

		$out = "";

		$c = 0;

		while ($c < strlen($hash)) {

			$out .= chr(hexdec($hash[$c] . $hash[$c + 1]));

			$c += 2;

		}

		return $out;

	}

	function _generate_iv()

	{

		$cc_encryption_hash = 'isoCMS';

		srand((float)microtime() * 1000000);

		$iv = md5(strrev(substr($cc_encryption_hash, 13)) . substr($cc_encryption_hash, 0, 13));

		$iv .= rand(0, getrandmax());

		$iv .= serialize(array("key" => md5(md5($cc_encryption_hash)) . md5($cc_encryption_hash)));

		return $this->_hash($iv);

	}

	function logs($tbl, $pkey, $pval, $message, $log_type = '')

	{

		global $_frontIsLoggedin_user_id, $_company_iom_id, $dbconn;

		$clsActionLogs = new ActionLogs();

		$f = "_company_iom_id,user_id,reg_date,tbl,pkey,pval,message,tbl_data,REMOTE_ADDR,_type";

		$oneTable = $dbconn->getRow("select * from " . $tbl . " where " . $pkey . "='" . $pval . "'");

		if ($tbl == 'default_user') { //fix errors

			$oneTable = array_diff_key($oneTable, array('_permiss' => '', '_top_menu' => '', '_right_menu' => '', 'more_information' => '', 'info_commission_rate' => ''));

		}

		$tbl_data = serialize($oneTable);

		$v = "'$_company_iom_id','$_frontIsLoggedin_user_id','" . time() . "','$tbl','$pkey','$pval','" . addslashes($message) . "'

		,'" . addslashes($tbl_data) . "','" . $_SERVER['REMOTE_ADDR'] . "','$log_type'";

		if (intval($_frontIsLoggedin_user_id) > 0) {

			$clsActionLogs->insertOne($f, $v);

		}

		return 1;

	}

	function checkOwned()

	{

		global $core;

		return $core->license_owned;

	}

	function getBrandingFooter()

	{

		if ($this->checkOwned() == 1) {

			return $this->getVar('TMS_VIETISO') ? '<p style="font-size:9px; color:#adadad">' . DOMAIN_SESSION . '</p>' : '';

		}

		$html = '<br><br>---<br>

		<p style="font-size:9px; color:#adadad">

			' . ($this->getVar('TMS_VIETISO') ? DOMAIN_SESSION . ' - ' : '') . 'Created by <a style="font-size:9px; color:#adadad" href="https://www.vietiso.com/thiet-ke-website-du-lich.html">isoCMS</a> - A product of VietISO Company.

		</p>';

		return $html;

	}

	function getListPackage()

	{

		global $core;

		#

		$ListPackage = array();

		$ListPackage['1'] = $core->get_Lang('Essentials');

		$ListPackage['2'] = $core->get_Lang('Professional');

		$ListPackage['3'] = $core->get_Lang('Premium');

		$ListPackage['4'] = $core->get_Lang('Contact Us');

		return $ListPackage;

	}

	function getNamePackage($val)

	{

		$ListPackage = $this->getListPackage();

		return $ListPackage[$val];

	}

	function getCheckActiveModulePackage($package_id, $mod, $act, $type_function, $type = '')

	{

		if ($package_id == 4) {

			return 1;

		}

		$clsFeaturePackage = new FeaturePackage();

		$oneFeaturePackage = $clsFeaturePackage->getAll("mod_page='" . $mod . "' and act_page='" . $act . "' and type='" . $type_function . "' and type_page='" . $type . "' order by order_no ASC limit 0,1");

//				print_r("mod_page='".$mod."' and act_page='".$act."' and type='".$type_function."' and type_page='".$type."' order by order_no ASC limit 0,1");die();

		$feature_package_ckeck_id = $oneFeaturePackage[0][$clsFeaturePackage->pkey];

		$clsPackage = new Package();

		$list_feature_package_id = $clsPackage->getOneField('list_feature_package_id', $package_id);

		$array_list_feature_package_id = unserialize($list_feature_package_id);

		if (in_array($feature_package_ckeck_id, $array_list_feature_package_id)) {

			return 1;

		} else {

			return 0;

		}

	}

	function getPromotion($product_id, $type, $booking_date, $travel_date, $type_check = 'check_is_promotion')

	{

		global $dbconn;

		if (_IS_PROMOTION) {

			$clsDiscount = new Discount();

			$sql = "SELECT discount_id FROM " . DB_PREFIX . "discount_item WHERE is_trash=0 and clsTable='$type' and item_id='$product_id'";

//            print_r($sql);

			$array_discount_id = $dbconn->getAll($sql);

			if (!empty($array_discount_id)) {

				$list_discount_id = array();

				foreach ($array_discount_id as $key => $value) {

					$list_discount_id[] = $value['discount_id'];

				}

				$list_discount_id = implode(',', $list_discount_id);

				$listDiscount = $clsDiscount->getAll("is_trash=0 and is_online=1 and discount_id IN ($list_discount_id) and " . $booking_date . " between booking_date_from and booking_date_to and " . $travel_date . " between travel_date_from and travel_date_to order by travel_date_from ASC limit 0,1", 'more_information');

				$more_information = !empty($listDiscount[0]['more_information'])

					? @json_decode($listDiscount[0]['more_information'], true)

					: array();

				if ($type_check == 'check_is_promotion') {

					return $listDiscount ? 1 : 0;

				} else {

					return $listDiscount ? $more_information : '';

				}

			} else {

				$listDiscount = $clsDiscount->getAll("is_trash=0 and is_online=1 and product_type='all' and " . $booking_date . " between booking_date_from and booking_date_to and " . $travel_date . " between travel_date_from and travel_date_to order by travel_date_from ASC limit 0,1", 'more_information');

				$more_information = !empty($listDiscount[0]['more_information'])

					? @json_decode($listDiscount[0]['more_information'], true)

					: array();

				if ($type_check == 'check_is_promotion') {

					return ($listDiscount && $more_information['product_type'] == "all") ? 1 : 0;

				} else {

					return ($listDiscount && $more_information['product_type'] == "all") ? $more_information : '';

				}

			}

		}

		return 0;

	}

	function decrypt($string)

	{

		$cc_encryption_hash = '5cHJ6icMDZ8RbBnGV9ducfsV5iRMnIbjKISHRUklKi2MKgiwfmQis94nhL0vk1EV';

		$key = md5(md5($cc_encryption_hash)) . md5($cc_encryption_hash);

		$hash_key = $this->_hash($key);

		$hash_length = strlen($hash_key);

		$string = base64_decode($string);

		$tmp_iv = substr($string, 0, $hash_length);

		$string = substr($string, $hash_length, strlen($string) - $hash_length);

		$iv = $out = "";

		$c = 0;

		while ($c < $hash_length) {

			$iv .= chr(ord($tmp_iv[$c]) ^ ord($hash_key[$c]));

			++$c;

		}

		$key = $iv;

		$c = 0;

		while ($c < strlen($string)) {

			if ($c != 0 && $c % $hash_length == 0) {

				$key = $this->_hash($key . substr($out, $c - $hash_length, $hash_length));

			}

			$out .= chr(ord($key[$c % $hash_length]) ^ ord($string[$c]));

			++$c;

		}

		return $out;

	}

	function compress_png($path_to_png_file, $max_quality = 90)

	{

		if (!file_exists($path_to_png_file)) {

			throw new Exception("File does not exist: $path_to_png_file");

		}

		// guarantee that quality won't be worse than that.

		$min_quality = 60;

		// '-' makes it use stdout, required to save to $compressed_png_content variable

		// '<' makes it read from the given file path

		// escapeshellarg() makes this safe to use with any path

		$compressed_png_content = shell_exec("pngquant --quality=$min_quality-$max_quality - < " . escapeshellarg($path_to_png_file));

		if (!$compressed_png_content) {

			throw new Exception("Conversion to compressed PNG failed. Is pngquant 1.8+ installed on the server?");

		}

		return $compressed_png_content;

	}

	function getSelectAgeChild($selected = '', $min_age = 0, $max_age = 0)

	{

		global $core;

		$html = '<select name="children[]" class="slt_item_age_child">';

		$html .= '<option value="">' . $core->get_Lang('Age') . '</option>';

		for ($i = $min_age; $i <= $max_age; $i++) {

			$check = "";

			if ($selected != '') {

				$arr_select = explode(',', $selected);

				$check = (in_array($i, $arr_select)) ? "selected" : "";

			}

			$html .= '<option value="' . $i . '" ' . $check . '>' . $i . ' ' . $core->get_Lang('years old') . '</option>';

		}

		$html .= '</select>';

		return $html;

	}

	function getSelectAgeChildTailor($selected = '', $index = 0)

	{

		global $core;

		$html = '<select name="children[]" class="slt_item_age_child">';

		$html .= '<option value="">Age*</option>';

		for ($i = 0; $i < 17; $i++) {

			$check = "";

			if ($selected != '') {

				$arr_select = explode(',', $selected);

				$check = (in_array($i, $arr_select) && $i == $arr_select[$index]) ? "selected" : "";

			}

			$html .= '<option value="' . $i . '" ' . $check . '>' . $i . ' ' . $core->get_Lang('years old') . '</option>';

		}

		$html .= '</select>';

		return $html;

	}

	/**

	 * Author: 2024-HoangNv

	 * dump()

	 * Dump data to debug at local.

	 * @param mixed $data

	 * @return

	 */

	function dump($data)

	{

		$name       =   "";

		$back_track =   debug_backtrace();

		$caller     =   array_shift($back_track);

		foreach ($GLOBALS as $var_name => $value) {

			if ($value === $data) {

				$name   =   $var_name;

				break;

			}

		}

		echo '<pre style="position: relative;float: left; z-index: 99999; background: black; color: #FFF; width: 100%; max-height: 600px; overflow: auto; padding: 5px; border-top: 3px solid #d31a1a;">';

		echo '<span style="display:block; text-align: center; background: #D6D61F; font-weight: 600; color: #111;">DUMP IN (' . $caller['file'] . ' -- line: ' . $caller['line'] . ')</span>';

		switch (gettype($data)) {

			case "boolean":

			case "object":

				// var_dump($data);

				// break;

				print_r($data);

				break;

			case "array":

				print_r($data);

				break;

			default:

				echo $data;

				break;

		}

		echo '</pre>';

	}

	/**

	 * Author: 2024-HoangNv

	 * dd()

	 * Dump and đie

	 * @param mixed $data

	 * @return void

	 */

	function dd($data)

	{

		self::dump($data);

		exit;

	}

	/**

	 * Author: 2024-HoangNv

	 * setRecentView()

	 * Set recent view by cookie

	 * @param mixed $data

	 */

	function setRecentView($id, $type = 'guide')

	{

		// Cookie tồn tại trong 1 ngày

		$expire	= 	time() + 86400;

		#

		// Thiết lập cookie với ID chi tiết theo từng module

		setcookie($type . "_" . $id, $id, $expire, "/");

	}

	/**

	 * Author: 2024-HoangNv

	 * getRecentView()

	 * Get recent view by cookie

	 * @param mixed $data

	 */

	function getRecentView($type = '', $element_number = 5)

	{

		$recentViews	= 	[];

		if (!empty($type)) {

			// Kiểm tra xem $_COOKIE có tồn tại và không rỗng

			if (isset($_COOKIE) && !empty($_COOKIE)) {

				foreach ($_COOKIE as $key => $value) {

					// Kiểm tra cookie có phải là của loại được chỉ định không

					if (strpos($key, $type . '_') === 0) {

						$recentViews[$key]	= 	$_COOKIE[$key];

					}

				}

				// Kiểm tra xem $recentViews có tồn tại và không rỗng

				if (!empty($recentViews)) {

					// Hàm array_slice có 4 param

					// Param 1: arr,

					// Param 2: 5 phần tử cuối,

					// Param 3: 5 phần tử trong arr,

					// Param 4: giữ nguyên index của arr

					$lastRecentViews	= 	array_slice($recentViews, -$element_number, $element_number, true);

					#

					// Đảo ngược thứ tự của mảng

					$lastRecentViews 	= 	array_reverse($lastRecentViews, true);

				}

			}

		}

		return $lastRecentViews;

	}

}

