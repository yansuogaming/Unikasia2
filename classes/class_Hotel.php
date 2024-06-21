<?php
class Hotel extends dbBasic
{
	function __construct()
	{
		$this->pkey = "hotel_id";
		$this->tbl = DB_PREFIX . "hotel";
	}
	function getTitle($hotel_id, $one = null)
	{
		if (!isset($one['title'])) {
			$one = $this->getOne($hotel_id, 'title');
		}

		return $one['title'];
	}


	function getHotelCode($hotel_id)
	{
		$one = $this->getOne($hotel_id, 'hotel_code');
		return $one['hotel_code'];
	}
	function checkOnlineBySlug($hotel_id, $slug)
	{
		$item = $this->getAll("is_trash=0 and is_online=1 and hotel_id='$hotel_id' and slug='$slug'", $this->pkey);
		if (empty($item))
			return 0;
		return 1;
	}
	function getSlug($hotel_id, $one = null)
	{
		if (!isset($one['slug'])) {
			$one = $this->getOne($hotel_id, 'slug');
		}
		return $one['slug'];
	}
	function getBySlug($slug)
	{
		$all = $this->getAll("is_trash=0 and is_online=1 and slug='$slug' limit 0,1", $this->pkey);
		return $all[0][$this->pkey];
	}
	function checkExitsId($hotel_id)
	{
		$res = $this->getAll("hotel_id = '$hotel_id' LIMIT 0,1");
		return !empty($res) ? 1 : 0;
	}
	function countNumberImages($hotel_id, $type = '')
	{
		$clsHotelImage = new HotelImage();
		return $clsHotelImage->getAll("is_trash=0 and table_id = '$hotel_id'") ? count($clsHotelImage->getAll("is_trash=0 and table_id = '$hotel_id'")) : 0;
	}
	function countHotelCityArea($area_city_id = 0)
	{
		$where = "is_trash=0 and is_online=1 and area_city_id='$area_city_id'";
		return $this->getAll($where) ? count($this->getAll($where)) : 0;
	}
	function countHotelByRegion($country_id, $region_id = 0)
	{
		$where = "is_trash=0 and is_online=1 and city_id IN (SELECT city_id FROM " . DB_PREFIX . "citystore WHERE country_id='$country_id' and region_id='$region_id')";
		return $this->getAll($where) ? count($this->getAll($where)) : 0;
	}
	function countHotelGolobal($country_id = 0, $city_id = 0, $area_city_id = 0, $star_id = 0, $hotel_price_range_id = 0)
	{
		$where = "is_trash=0 and is_online=1";
		if (intval($country_id) > 0) {
			$where .= " and country_id ='$country_id'";
		}
		if (intval($city_id) > 0) {
			$where .= " and city_id ='$city_id'";
		}
		if (intval($area_city_id) > 0) {
			$where .= " and area_city_id ='$area_city_id'";
		}
		if (intval($star_id) > 0) {
			$where .= " and star_id ='$star_id'";
		}
		if (intval($hotel_price_range_id) > 0) {
			$clsHotelPriceRange = new HotelPriceRange();
			$oneTmp = $clsHotelPriceRange->getOne($hotel_price_range_id);
			$min_rate = intval($oneTmp['min_rate']);
			$max_rate = ($oneTmp['max_rate']);

			if ($min_rate == 0 && $max_rate > 0) {
				$where .= " and price_avg <= '$max_rate'";
			} elseif ($min_rate > 0 && $max_rate == 0) {
				$where .= " and price_avg >= " . $min_rate;
			} else {
				$where .= " and price_avg >= '$min_rate' and price_avg <= '$max_rate'";
			}
		}
		return $this->getAll($where) ? count($this->getAll($where)) : 0;
	}
	function countHotelGlobal($country_id = 0, $city_id = 0, $area_city_id = 0, $star_id = 0, $hotel_price_range_id = 0)
	{
		$where = "is_trash=0 and is_online=1";
		if (intval($country_id) > 0) {
			$where .= " and country_id ='$country_id'";
		}
		if (intval($city_id) > 0) {
			$where .= " and city_id ='$city_id'";
		}
		if (intval($area_city_id) > 0) {
			$where .= " and area_city_id ='$area_city_id'";
		}
		if (intval($star_id) > 0) {
			$where .= " and star_id ='$star_id'";
		}
		if (intval($hotel_price_range_id) > 0) {
			$clsHotelPriceRange = new HotelPriceRange();
			$oneTmp = $clsHotelPriceRange->getOne($hotel_price_range_id);
			$min_rate = intval($oneTmp['min_rate']);
			$max_rate = ($oneTmp['max_rate']);

			if ($min_rate == 0 && $max_rate > 0) {
				$where .= " and price_avg <= '$max_rate'";
			} elseif ($min_rate > 0 && $max_rate == 0) {
				$where .= " and price_avg >= " . $min_rate;
			} else {
				$where .= " and price_avg >= '$min_rate' and price_avg <= '$max_rate'";
			}
		}
		return $this->getAll($where) ? count($this->getAll($where)) : 0;
	}
	function _countHotelGolobal($country_id = 0, $city_id = 0, $area_city_id = 0, $star_id = 0, $min_rate = 0, $max_rate = 0)
	{

		$where = "is_trash=0 and is_online=1";
		if (intval($country_id) > 0) {
			$where .= " and country_id ='$country_id'";
		}
		if (intval($city_id) > 0) {
			$where .= " and city_id ='$city_id'";
		}
		if (intval($area_city_id) > 0) {
			$where .= " and area_city_id ='$area_city_id'";
		}
		if (intval($star_id) > 0) {
			$where .= " and star_id ='$star_id'";
		}
		if ($min_rate == 0 && $max_rate > 0) {
			$where .= " and price_avg < '$max_rate'";
		} elseif ($min_rate > 0 && $max_rate > 0) {
			$where .= " and price_avg > '$min_rate' and price_avg < '$max_rate'";
		} elseif ($min_rate > 0 && $max_rate == 0) {
			$where .= " and price_avg > '$min_rate'";
		}
		return $this->getAll($where) ? count($this->getAll($where)) : 0;
	}
	function getHotelCountry($county_id)
	{
		$listHotel = $this->getAll("is_trash=0 and is_online=1 and country_id='$county_id'", $this->pkey);
		if (empty($listHotel)) {
			return 0;
		} else {
			return 1;
		}
	}
	function countRoomHotel($hotel_id)
	{
		$clsHotelRoom = new HotelRoom();
		$res = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$hotel_id' order by order_no desc");
		echo count($res);
		die;
		if (!empty($res)) {
			$tmp = array();
			for ($i = 0; $i < count($res); $i++) {
				if ($res[$i]['hotel_id'] != '' && $res[$i]['hotel_id'] != '0' && !in_array($res[$i]['hotel_id'], $tmp))
					$tmp[] = $res[$i]['hotel_id'];
			}
			return count($tmp);
		}
		return 0;
	}
	function getRoomHotel($hotel_id)
	{
		$clsHotelRoom = new HotelRoom();
		$res = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$hotel_id' order by order_no asc", $clsHotelRoom->pkey);
		return $res;
	}
	function getNumberRoom($hotel_id)
	{
		global $core, $dbconn;
		$SQL = "SELECT SUM(number_room) FROM " . DB_PREFIX . "hotel_room WHERE hotel_id='$hotel_id'";
		return $dbconn->GetAll($SQL);
	}
	function getLink($pvalTable, $one = null)
	{
		global $extLang, $_LANG_ID;
		return $extLang . '/h' . $pvalTable . '-' . $this->getSlug($pvalTable, $one) . '.html';
	}
	function getLinkMap($hotel_id, $type = '')
	{
		global $extLang, $_LANG_ID;
		$clsCountry = new Country();
		$one = $this->getOne($hotel_id, 'country_id');
		switch ($type) {
			case 'Photo':
				if ($_LANG_ID == 'en')
					return '/stay/' . $this->getSlug($hotel_id) . '-h' . $hotel_id . '/photos/#galleryID';
				return $extLang . '/stay/' . $this->getSlug($hotel_id) . '-h' . $hotel_id . '/photos/#galleryID';
				break;
			default:
				if ($_LANG_ID == 'en')
					return '/stay/' . $this->getSlug($hotel_id) . '-h' . $hotel_id . '-bando.html';
				return $extLang . '/' . $clsCountry->getSlug($one['country_id']) . '-stay/' . $this->getSlug($hotel_id) . '-h' . $hotel_id . '-maps.html';
		}
	}
	function getLinkPro($hotel_id, $type = '')
	{
		#new way
		return $this->getLink($hotel_id, $type);
		#old way
		global $extLang, $_LANG_ID;
		switch ($type) {
			case 'Photo':
				return ($_LANG_ID == 'en') ? '/khach-san-pro/' : $extLang . '/hotelpro/' . $this->getSlug($hotel_id) . '-h' . $hotel_id . '/photos/#galleryID';
				break;
			default:
				return ($_LANG_ID == 'en') ? '/khach-san-pro/' : $extLang . '/hotelpro/' . $this->getSlug($hotel_id) . '-h' . $hotel_id . '.html';
		}
	}
	function getLinkBook($hotel_id)
	{
		global $_LANG_ID, $extLang;
		if ($_LANG_ID == 'en')
			return $extLang . '/khach-san/' . $this->getSlug($hotel_id) . '/booking.html';
		return $extLang . '/stay/' . $this->getSlug($hotel_id) . '/booking.html';
	}

	function getMapLink($pvalTable)
	{
		$oneItem = $this->getOne($pvalTable, 'map_la,map_lo');
		if ($oneItem['map_la'] != '') {
			return 'http://maps.google.com/maps?q=' . $this->getTitle($pvalTable) . ' ' . strip_tags($this->getAddress($pvalTable)) . '&spn=' . $oneItem['map_lo'] . ',' . $oneItem['map_la'] . '&hl=vi';
		}
		return 'http://maps.google.com/maps?q=' . $this->getTitle($pvalTable) . ' ' . strip_tags($this->getAddress($pvalTable)) . '&spn=' . $oneItem['map_lo'] . ',' . $oneItem['map_la'] . '&hl=en';
		return $this->getLink($pvalTable) . '#map';
	}

	function getLinkContact()
	{
		global $_LANG_ID, $extLang;
		return $extLang . '/stay/enquiry.html';
	}
	function getMapLa($pvalTable)
	{
		global $_LANG_ID;
		$one = $this->getOne($pvalTable, 'map_la');
		return $one['map_la'];
	}

	function getMapLo($pvalTable)
	{
		global $_LANG_ID;
		$one = $this->getOne($pvalTable, 'map_lo');
		return $one['map_lo'];
	}
	function getMapZoom($pvalTable)
	{
		global $_LANG_ID;
		$one = $this->getOne($pvalTable, 'map_zoom');
		return $one['map_zoom'] ? $one['map_zoom'] : 12;
	}
	function getTimeCheckInOut($pvalTable, $item = 'hour_in')
	{
		global $_LANG_ID;
		$one = $this->getOne($pvalTable, 'check_in_out_time');
		$oneValue = json_decode($one['check_in_out_time'], true);
		return $oneValue[$item];
	}
	function getMetaDescription($pvalTable, $one = null)
	{
		global $_LANG_ID;
		if (!isset($one['intro'])) {
			$one = $this->getOne($pvalTable, 'intro');
		}
		return html_entity_decode($one['intro']);
	}
	function getIntro($hotel_id, $one = null)
	{
		global $_LANG_ID;
		if (!isset($one['intro'])) {
			$one = $this->getOne($hotel_id, 'intro');
		}
		return html_entity_decode($one['intro']);
	}
	function getIntroArea($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'intro_area');
		return html_entity_decode($one['intro_area']);
	}
	function getContent($hotel_id, $one = null)
	{
		global $_LANG_ID;
		if (!isset($one['content'])) {
			$one = $this->getOne($hotel_id, 'content');
		}
		return html_entity_decode($one['content']);
	}
	function getMove($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'move');
		return html_entity_decode($one['move']);
	}
	function getSurcharge($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'surcharge');
		return html_entity_decode($one['surcharge']);
	}
	function getInstructions($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'instructions');
		return html_entity_decode($one['instructions']);
	}
	function getStripIntro($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'intro,content');
		if (!empty($one['intro']))
			return strip_tags(html_entity_decode($one['intro']));
		return strip_tags(html_entity_decode($one['content']));
	}
	function getCountryHotel($hotel_id)
	{
		$clsCountryEx = new Country();
		$one = $this->getOne($hotel_id, 'country_id');
		return $clsCountryEx->getTitle($one['country_id']);
	}
	function getCityHotel($hotel_id)
	{
		$clsCity = new City();
		$one = $this->getOne($hotel_id, 'city_id');
		return $clsCity->getTitle($one['city_id']);
	}
	function getHotelStyles($hotel_id)
	{
		$clsHotelProperty = new HotelProperty();
		$one = $this->getOne($hotel_id, 'hotel_rating');
		return $clsHotelProperty->getTitle($one['hotel_rating']);
	}
	function getImage($pvalTable, $w, $h, $oneTable = null)
	{
		global $clsISO;
		if (!isset($oneTable['image'])) {
			$oneTable = $this->getOne($pvalTable, "image");
		}
		if ($oneTable['image'] != '') {
			$image = $oneTable['image'];
			return $clsISO->tripslashImage($image, $w, $h);
		}
		$noimage = URL_IMAGES . '/hotel/no-image.png';
		return $noimage;
	}

	function getUrlImage($pvalTable)
	{
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
	}
	function getImageStar($star_id)
	{
		if ($star_id == 0)
			return '';
		return URL_IMAGES . '/star/find-00' . $star_id . '-star.png';
	}

    function getStarNumber($hotel_id) {
        $max_star = 6;
        $text = '';
        $oneTable = $this->getOne($hotel_id, "star_id");
        for($i=0; $i<$oneTable["star_id"]; $i++) {
            $text .= '<i class="fa-solid fa-star"></i>';
        }
        return $text;
    }

	function getHotelStar($pvalTable, $one = null)
	{
		if (!isset($one['star_id'])) {
			$one = $this->getOne($pvalTable, 'star_id');
		}
		$star_id = $one['star_id'];
		if (!empty($star_id)) {
			return URL_IMAGES . '/star/find-00' . $star_id . '-star.png';
		}
	}

	function getStar($hotel_id)
	{
		$one = $this->getOne($hotel_id, 'star_id');
		return $one['star_id'];
	}
	function getStarNew($pvalTable, $one = null)
	{
		if (!isset($one['star_id'])) {
			$one = $this->getOne($pvalTable, 'star_id');
		}
		$star_id = $one['star_id'];
		$width_star = 20 * $star_id;
		return '<label class="rate-1 rate-2023 mb0" style="width:' . $width_star . 'px">
      		<span style="width: 100%;"></span> 
      	</label>';
	}

	function getImageMapStatic($hotel_id, $w = 1, $h = 1)
	{
		global $clsConfiguration;
		$map_la = $this->getMapLa($hotel_id);
		$map_lo = $this->getMapLo($hotel_id);
		$map_zoom = $this->getMapZoom($hotel_id);
		$map_key = $clsConfiguration->getValue('API_GOOGLE_MAPS');

		$image_map = $this->getOneField('map_static', $hotel_id);
		if (!empty($image_map)) {
			return $image_map;
		} else {
			$Url_map = 'https://maps.googleapis.com/maps/api/staticmap?center=' . $map_la . ',' . $map_lo . '&zoom=' . $map_zoom . '&size=' . $w . 'x' . $h . '&key=' . $map_key;
			$desFolder = '/uploads/images/maps/hotel';
			$imageName = '/google-map_' . $hotel_id . '.png';
			$path_file = $_SERVER['DOCUMENT_ROOT'] . $desFolder . $imageName;
			$content = file_get_contents($Url_map);
			if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $desFolder)) {
				mkdir($_SERVER['DOCUMENT_ROOT'] . $desFolder, 0777, true);
			}
			file_put_contents($path_file, $content);
			$this->updateOne($hotel_id, "map_static='" . $desFolder . $imageName . "'");
			return $desFolder . $imageName;
		}
	}

	function getOverview($hotel_id)
	{
		$one = $this->getOne($hotel_id, "overview");
		return html_entity_decode($one['overview']);
	}
	function getNote($hotel_id)
	{
		$one = $this->getOne($hotel_id, "note");
		return html_entity_decode($one['note']);
	}
	
	function getHotelBookingPolicy($pvalTable, $one = null)
	{
		if (!isset($one['other_policy'])) {
			$one = $this->getOne($pvalTable, 'other_policy');
		}
		return html_entity_decode($one['other_policy']);
	}
	
	function getOtherPolicy($pvalTable, $one = null)
	{
		if (!isset($one['other_policy'])) {
			$one = $this->getOne($pvalTable, 'other_policy');
		}
		return html_entity_decode($one['other_policy']);
	}
	
	function getBookingPolicy($pvalTable, $one = null)
	{
		if (!isset($one['booking_policy'])) {
			$one = $this->getOne($pvalTable, 'booking_policy');
		}
		return html_entity_decode($one['booking_policy']);
	}
	
	function getChildPolicy($pvalTable, $one = null)
	{
		if (!isset($one['child_policy'])) {
			$one = $this->getOne($pvalTable, 'child_policy');
		}
		return html_entity_decode($one['child_policy']);
	}
	function getCancellationPolicy($pvalTable, $one = null)
	{
		if (!isset($one['cancellation_policy'])) {
			$one = $this->getOne($pvalTable, 'cancellation_policy');
		}
		return html_entity_decode($one['cancellation_policy']);
	}
	
	function getExcludesPolicy($pvalTable, $one = null)
	{
		if (!isset($one['exclude_policy'])) {
			$one = $this->getOne($pvalTable, 'exclude_policy');
		}
		return html_entity_decode($one['exclude_policy']);
	}
	
	function getPrice($hotel_id, $addition = '', $is_has = false, $one = null)
	{
		global $core, $extLang, $_LANG_ID;
		#
		$clsISO = new ISO();
		if (!isset($one['price_avg'])) {
			$one = $this->getOne($hotel_id, 'price_avg');
		}
		$price = $one['price_avg'];
		#
		if (!empty($price) && $price > 0) {
			if ($is_has) {
				if (!empty($addition)) {
					switch ($addition) {
						case '/night':
							return '<strong>' . $clsISO->getRate() . ' ' . $clsISO->formatNumberToEasyRead($one['price_avg']) . '</strong> / night';
							break;
						default:
							return '';
					}
				}
			} else {
				if ($_LANG_ID == 'en')
					return $clsISO->formatNumberToEasyRead($one['price_avg']) . ' ' . $clsISO->getRate();
				return $clsISO->getRate() . ' ' . $clsISO->formatNumberToEasyRead($one['price_avg']);
			}
		} else {
			$link = '<a class="contactLink size16" title="' . $core->get_Lang('Contact us') . '" href="' . $clsISO->getLink('contact') . '" target="_blank">' . $core->get_Lang('Contact us') . '</a>';
			return $link;
		}
		return $price;
	}
	function getPriceExport($hotel_id, $addition = '', $is_has = false)
	{
		global $core, $extLang;
		#
		$clsISO = new ISO();
		$one = $this->getOne($hotel_id, 'price_avg');
		$price = $one['price_avg'];


		#
		if (!empty($price) && $price > 0) {
			if ($is_has) {
				if (!empty($addition)) {
					switch ($addition) {
						case '/night':
							return 'USD ' . $clsISO->formatNumberToEasyRead($one['price_avg']) . ' / night';
							break;
						default:
							return '';
					}
				}
			} else {
				return 'USD ' . $clsISO->formatNumberToEasyRead($one['price_avg']);
			}
		} else {
			$link = 'Contact us';
			return $link;
		}
		return $price;
	}
	function getPriceOnPromotion($hotel_id, $page = 'list')
	{
		global $core, $extLang, $_LANG_ID, $now_day;
		#
		$clsISO = new ISO();
		$clsHotelRoom = new HotelRoom();

		$lstHotelRoom = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$hotel_id' and price >0 order by price ASC", $clsHotelRoom->pkey . ",price,number_adult");
		$price = $lstHotelRoom[0]['price'];
		$number_adult = $lstHotelRoom[0]['number_adult'];
		$html = '';
		$discount = $clsISO->getPromotion($hotel_id, 'Hotel', $now_day, $now_day, 'info_promotion');
		$promotion = $discount['discount_value'];
		$promotion = str_replace('.', '', $promotion);

		if ($price > 0) {
			if ($promotion > 0) {
				if ($discount['discount_type'] == 2) {
					$price_promotion = $promotion * $price / 100;
				} else {
					$price_promotion = $promotion;
				}

				$price_new = $price - $price_promotion;
				$html .= '<p class="price"><del class="old_price">' . $clsISO->formatNumberToEasyRead($price) . ' ' . $clsISO->getShortRate() . '</del></p>';
				$html .= '<span class="price">' . $clsISO->formatNumberToEasyRead($price_new) . ' ' . $clsISO->getShortRate() . '</span>';
			} else {
				$html .= '<p class="price">' . $clsISO->getShortRate() . $clsISO->formatNumberToEasyRead($price) . '</p>';

			}

			if ($page == 'detail') {
				$html .= '<p class="price_text">1 ' . $core->get_Lang('night') . '/' . $number_adult . ' ' . $core->get_Lang('adults') . '</p>';
			}
		} else {
			if ($page == 'detail') {
				$html .= '';
			} else {
				$html .= '<a class="contactLink size16" title="' . $core->get_Lang('Contact us') . '" href="' . $clsISO->getLink('contact') . '" target="_blank">' . $core->get_Lang('Contact us') . '</a>';
			}
		}
		return $html;
	}
	function getPriceOnPromotion_Old($hotel_id, $page = 'list')
	{
		global $core, $extLang, $_LANG_ID, $now_day;
		#
		$clsISO = new ISO();
		$clsHotelRoom = new HotelRoom();

		$lstHotelRoom = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$hotel_id' and price >0 order by price ASC", $clsHotelRoom->pkey . ",price,number_adult");
		$price = $lstHotelRoom[0]['price'];
		$number_adult = $lstHotelRoom[0]['number_adult'];
		$html = '';
		$discount = $clsISO->getPromotion($hotel_id, 'Hotel', $now_day, $now_day, 'info_promotion');
		$promotion = $discount['discount_value'];
		$promotion = str_replace('.', '', $promotion);


		if ($price > 0) {
			if ($promotion > 0) {
				if ($discount['discount_type'] == 2) {
					$price_promotion = $promotion * $price / 100;
				} else {
					$price_promotion = $promotion;
				}
				$price_new = $price - $price_promotion;
				$price_new_usd = number_format($price_new, 2) . ' USD';
				$html .= '<p class="price"><del class="old_price">' . $clsISO->formatNumberToEasyRead($price) . ' ' . $clsISO->getShortRate() . '</del>';
				$html .= '<span class="price">' . $price_new_usd . '</span></p>';

				// $html.='<p class="price"><del class="old_price">'.$clsISO->formatNumberToEasyRead($price).' '.$clsISO->getRate().'</del>';
				// $html.='<span class="price">'.$clsISO->formatNumberToEasyRead($price_new).' '.$clsISO->getRate().'</span></p>';
			} else {
				$price_usd = number_format($price, 2) . ' USD';
				$html .= '<p class="price">' . $price_usd . '</p>';

				// $html.='<p class="price">'.$clsISO->formatNumberToEasyRead($price).' '.$clsISO->getRate().'</p>';
			}
			if ($page == 'detail') {
				$html .= '<p class="price_text">1 ' . $core->get_Lang('night') . '/' . $number_adult . ' ' . $core->get_Lang('adults') . '</p>';
			}
		} else {
			if ($page == 'detail') {
				$html .= '';
			} else {
				$html .= '<a class="contactLink size16" title="' . $core->get_Lang('Contact us') . '" href="' . $clsISO->getLink('contact') . '" target="_blank">' . $core->get_Lang('Contact us') . '</a>';
			}
		}
		return $html;
	}
	function getPriceAvg($hotel_id)
	{
		global $core, $_LANG_ID;
		$one = $this->getOne($hotel_id, 'price_avg');
		return $one['price_avg'];
	}
	function getPriceAvg1($hotel_id)
	{
		global $core, $_LANG_ID, $clsISO, $clsConfiguration;
		$clsProperty = new Property();
		$assign_list['clsProperty'] = $clsProperty;
		$one = $this->getOne($hotel_id, 'price_avg');
		$price = $one['price_avg'];
		if (intval($price) > 0) {
			return $clsISO->formatPrice($price, 3);
		}
	}
	function getPriceAvg2($hotel_id)
	{
		global $core, $_LANG_ID, $clsISO, $clsConfiguration;
		$clsProperty = new Property();
		$assign_list['clsProperty'] = $clsProperty;
		$one = $this->getOne($hotel_id, 'price_avg');
		$price = $one['price_avg'];
		if (intval($price) > 0) {
			return $clsISO->formatPrice($price, 3) . '<p>' . $clsProperty->getOneField('property_code', $clsConfiguration->getValue('Currency')) . ' / ' . $core->get_Lang('nights') . '</p>';
		}
	}
	function getTripPrice($pvalTable)
	{
		global $core, $clsISO, $clsConfiguration;
		$clsProperty = new Property();
		$assign_list['clsProperty'] = $clsProperty;
		#
		$one = $this->getOne($pvalTable, 'price,is_booking,is_sendrequest,is_getprice');
		$price = $one['price'];
		$is_booking = $one['is_booking'];
		$is_sendrequest = $one['is_sendrequest'];
		$is_getprice = $one['is_getprice'];
		if (intval($price) > 0 && $is_booking == 1) {
			return $clsISO->formatPrice($price, 3) . '<p>' . $clsProperty->getOneField('property_code', $clsConfiguration->getValue('Currency')) . ' / ' . $core->get_Lang('nights') . '</p>';
		} elseif (intval($price) >= 0 && $is_sendrequest == 1) {
			return '<a class="contactLink" href="' . $clsISO->getLink('feedback') . '">' . $core->get_Lang('Gửi yêu cầu') . '</a>';
		} elseif (intval($price) >= 0 && $is_getprice == 1) {
			return '<a class="contactLink" href="' . $clsISO->getLink('feedback') . '">' . $core->get_Lang('Click để lấy giá') . '</a>';
		} else {
			return '<a class="contactLink" href="' . $clsISO->getLink('feedback') . '">' . $core->get_Lang('Liên hệ để lấy giá tốt') . '</a>';
		}
	}

	function getPriceAvgAdmin($hotel_id)
	{
		global $core, $_LANG_ID, $clsConfiguration;
		$clsProperty = new Property();
		$one = $this->getOne($hotel_id, 'price_avg');
		$price = $one['price_avg'];
		if ($price > 0) {
			if ($_LANG_ID == 'en') {
				return $one['price_avg'] . ' ' . $clsProperty->getOneField('property_code', $clsConfiguration->getValue('Currency'));
			} else {
				return $clsProperty->getOneField('property_code', $clsConfiguration->getValue('Currency')) . ' ' . $one['price_avg'];
			}
		} else {
			return '<a class="contactLink" title="' . $core->get_Lang('Contact us') . '" href="' . DOMAIN_NAME . $extLang . '/lien-he.html" target="_blank">' . $core->get_Lang('Contact us') . '</a>';
		}
	}
	function getAddress($hotel_id, $one = null)
	{
		global $_LANG_ID;
		if (!isset($one['address'])) {
			$one = $this->getOne($hotel_id, 'address');
		}
		return $one['address'];
	}
	function getAddressMapView($hotel_id, $one = null)
	{
		global $_LANG_ID;
		if (!isset($one['address'])) {
			$one = $this->getOne($hotel_id, 'address');
		}
		return $one['address'] ? $one['address'] : '';
	}

	function getPhone($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'phone');
		return $one['phone'];
	}
	function getWebsite($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'website');
		return $one['website'];
	}
	function getMaxAdult($pvalTable)
	{
		global $core, $_LANG_ID;
		$clsHotelRoom = new HotelRoom();
		$lstHotelRoom = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$pvalTable' order by number_adult desc");

		return $lstHotelRoom[0]['number_adult'];
	}
	function getMaxChild($pvalTable)
	{
		global $core, $_LANG_ID;
		$clsHotelRoom = new HotelRoom();
		$lstHotelRoom = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$pvalTable' order by number_children desc");

		return $lstHotelRoom[0]['number_children'];
	}
	function checkProperty($type, $pvalTable, $property_id)
	{
		global $clsISO;
//		$clsISO->pre($type);
//		$clsISO->pre($pvalTable);
//		$clsISO->pre($property_id);
//		die();
		$oneItem = $this->getOne($pvalTable);
//				$clsISO->pre($oneItem);
//		die();
		$str = $oneItem['list_' . $type];
//						$clsISO->pre($str);
//		die();
		$str_array = explode('|', $str);
//			$clsISO->pre($str_array);
//		die();
		for ($i = 0; $i < count($str_array); $i++) {
			if ($str_array[$i] == $property_id) {
				return 1;
			}
			
		}
		return 0;
	}
	
	function checkAttraction($pvalTable, $hotel_attraction_id)
	{
		$oneItem = $this->getOne($pvalTable, 'list_attraction');
		$str = $oneItem['list_attraction'];
		$str_array = explode('|', $str);
		for ($i = 0; $i < count($str_array); $i++) {
			if ($str_array[$i] == $hotel_attraction_id) {
				return 1;
			}
		}
		return 0;
	}
	function getHotelById($hotel_id, $limit)
	{
		$clsHotel = new Hotel();
		$all = $clsHotel->getAll('is_trash=0 limit 0,' . $limit);
		return $all;
	}
	function getHotelFaci($hotel_id)
	{
		$clsHotel = new Hotel();
		$one = $clsHotel->getOne($hotel_id, 'list_HotelFacilities');
		return $one['list_HotelFacilities'];
	}
	function getListHotelFacility($hotel_id)
	{
		$one = $this->getOne($hotel_id, 'list_HotelFacilities');
		$list_HotelFacilities = $one['list_HotelFacilities'];
		if ($list_HotelFacilities != '') {
			$list_HotelFacilities = ltrim($list_HotelFacilities, '|');
			$_array = explode('|', $list_HotelFacilities);
			return $_array;
		}
		return '';
	}
	function getListFacilityTooltip($hotel_id)
	{
		$one = $this->getOne($hotel_id, 'list_HotelFacilities');
		$list_HotelFacilities = $one['list_HotelFacilities'];
		if ($list_HotelFacilities != '') {
			$list_HotelFacilities = ltrim($list_HotelFacilities, '|');
			$_array = explode('|', $list_HotelFacilities);
			return $_array;
		}
		return '';
	}
	function getLocation($hotel_id)
	{
		$clsCountry =  new Country();
		$clsCity =  new City();
		$one = $this->getOne($hotel_id);
		return  $html = $clsCity->getTitle($one['city_id'])  . ", " .  $clsCountry->getTitle($one['country_id']);
	}
	function getRoomFaci($hotel_id)
	{
		$clsHotel = new Hotel();
		$one = $clsHotel->getOne($hotel_id, 'list_RoomFacilities');
		return $one['list_RoomFacilities'];
		
	}
	function getRuler($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'check_in_out_rule');
		return html_entity_decode($one['check_in_out_rule']);
	}
	function getCheckInRoom($hotel_id, $one = null)
	{
		global $_LANG_ID;
		if (!isset($one['check_in_out_time'])) {
			$one = $this->getOne($hotel_id, 'check_in_out_time');
		}
		if (!empty($one['check_in_out_time'])) {
			$time = json_decode($one['check_in_out_time'], true);
			return $time['hour_in'] 
//				. ':' . $time['minute_in']
				;
		}
	}
	function getCheckOutRoom($hotel_id, $one = null)
	{
		global $_LANG_ID;
		if (!isset($one['check_in_out_time'])) {
			$one = $this->getOne($hotel_id, 'check_in_out_time');
		}
		if (!empty($one['check_in_out_time'])) {
			$time = json_decode($one['check_in_out_time'], true);
			return $time['hour_out'] 
//				. ':' . $time['minute_out']
				;
		}
	}
	function getUrlVideo($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'video_url');
		return html_entity_decode($one['video_url']);
	}
	function getDiscount($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'discount_text');
		return html_entity_decode($one['discount_text']);
	}
	function getPermalink($hotel_id)
	{
		global $_LANG_ID;
		$one = $this->getOne($hotel_id, 'permalink,slug');
		if ($one['permalink'] == '')
			return $one['slug'];
		return $one['permalink'];
	}
	function getListTypeAddInformation()
	{
		$_array = array();
		$_array['_NEAR'] = 'Hotel Near by';
		$_array['_ROOM'] = 'Hotel Room Types';
		$_array['_BUSINESS'] = 'Business funtions Meeting Rooms';
		$_array['_FOOD'] = 'Food, Beaverage & Entertaiment';
		$_array['_POLICIES'] = 'Hotel Policies';
		return $_array;
	}
	function makeSelectTypeAddInformation($hotel_id, $seleted = '')
	{
		$clsHotelCustomField = new HotelCustomField();
		$lstCustomField = $clsHotelCustomField->getAll("hotel_id='$hotel_id'", $clsHotelCustomField->pkey);

		$html = '<option value=""><< Select type >></option>';
		$lstType = $this->getListTypeAddInformation();
		foreach ($lstType as $k => $v) {
			if (!$clsHotelCustomField->checkExist($hotel_id, $k)) {
				$html .= '<option' . $disabled . ' value="' . $k . '">__' . strtoupper($v) . '</option>';
			}
		}
		return $html;
		die();
	}
	function getListByItinerary($tour_id, $tour_itinerary_id)
	{
		global $core, $package_id, $dbconn, $lang_sql, $clsISO;
		if ($clsISO->getCheckActiveModulePackage($package_id, 'tour_exhautive', 'hotel', 'customize')) {
			$clsTourHotel = new TourHotel();
			$SQL = "SELECT t1.hotel_id FROM " . $this->tbl . " t1 INNER JOIN " . $clsTourHotel->tbl . " t2 WHERE t1.hotel_id=t2.hotel_id and t1.is_trash=0 and t1.is_online=1 and t2.tour_id='$tour_id' and t2.tour_itinerary_id='$tour_itinerary_id' and t1.lang_id='$lang_sql' order by t2.order_no ASC";
			return $dbconn->GetAll($SQL);
		}
	}
	function updateMinPrice($pvalTable)
	{
		global $dbconn, $adult_type_id;
		$clsHotelRoom = new HotelRoom();

		$sql = "SELECT MIN(price) FROM " . DB_PREFIX . "hotel_room WHERE hotel_id='$pvalTable' and price>0";
		$min_price = $dbconn->GetOne($sql);
		$this->updateOne($pvalTable, "price_avg='" . $min_price . "'");
		return 1;
	}
	function doDelete($hotel_id)
	{
		$clsISO = new ISO();
		// Delete

		$clsDiscountItem = new DiscountItem();
		$clsDiscountItem->deleteByCond("item_id='$hotel_id' and clsTable ='Hotel'");


		if (class_exists('HotelCustomField')) {
			$clsHotelCustomField = new HotelCustomField();
			$clsHotelCustomField->deleteByCond("hotel_id='$hotel_id'");
		}
		if (class_exists('ReviewsHotel')) {
			$clsReviewsHotel = new ReviewsHotel();
			$clsReviewsHotel->deleteByCond("hotel_id='$hotel_id'");
		}

		if (class_exists('HotelImage')) {
			$clsHotelImage = new HotelImage();
			$clsHotelImage->deleteByCond("table_id='$hotel_id'");
		}
		// Delete
		if (class_exists('HotelPriceCol')) {
			$clsHotelPriceCol = new HotelPriceCol();
			$clsHotelPriceCol->deleteByCond("hotel_id='$hotel_id'");
		}
		// Delete 
		if (class_exists('HotelPriceVal')) {
			$clsHotelPriceVal = new HotelPriceVal();
			$clsHotelPriceVal->deleteByCond("hotel_id='$hotel_id'");
		}
		// Delete Hotel_Room TzThiem
		if (class_exists('HotelRoom')) {
			$clsHotelRoom = new HotelRoom();
			$clsHotelRoom->deleteByCond("hotel_id='$hotel_id'");
		}
		// Delete Hotel_Top TzThiem
		if (class_exists('HotelTop')) {
			$clsHotelTop = new HotelTop();
			$clsHotelTop->deleteByCond("hotel_id='$hotel_id'");
		}
		// Delete
		$this->deleteOne($hotel_id);
		return 1;
	}
	function getTypeHotel($pvalTable, $type = 'TypeHotel')
	{
		global $dbconn, $clsISO;
		#
		// $clsISO->dump($pvalTable);
		// $clsISO->dd($type);

		$one = $this->getOne($pvalTable, 'list_TypeHotel');

		if (!empty($one['list_TypeHotel'])) {
			$clsProperty	=	new Property();
			$arr_data 		= 	$clsProperty->getAll("is_trash = 0 and type = '$type' order by order_no ASC", "property_id, title");

			$list_hotel_type	=	[];
			if (!empty($arr_data)) {
				foreach ($arr_data as $row) {
					$list_hotel_type[$row['property_id']]	=	$row['title'];
				}
                
				$list_hotel_type[$one['list_TypeHotel']];
				return $list_hotel_type[$one['list_TypeHotel']];
			}
		} else {
			return '';
		}
	}
}
