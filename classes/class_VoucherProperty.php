<?php 

	class VoucherProperty extends dbBasic {

		function __construct() {

			$this->pkey = "voucher_property_id";

			$this->tbl = DB_PREFIX."voucher_property";

		}

		function getTitle($pval) {

			return $this->getOneField('title', $pval);

		}

		function getSlug($pval) {

			return $this->getOneField('slug', $pval);

		}

		function getBySlug($slug, $type) {

			$res = $this->getAll("is_trash=0 and type='$type' and slug='$slug'");

			return $res[0]['voucher_property_id'];

		}

		function getMinRate($pval) {

			return $this->getOneField('min_rate', $pval);

		}

		function getMaxRate($pval) {

			return $this->getOneField('max_rate', $pval);

		}

		function getOrder($pval) {

			return $this->getOneField('order_no', $pval);

		}

		function getContent($pval) {

			return $this->getOneField('content', $pval);

		}

		function getIntro($pval) {

			return $this->getOneField('intro', $pval);

		}

		function getListType() {

			global $core;

			$listType = array();

			$listType['PriceRange'] = $core->get_Lang('pricerange');

			return $listType;

		}

		function getTextByType($selected = '') {

			$lstType = $this->getListType();

			return $lstType[$selected];

		}

		function getSelectByType($selected = '') {

			global $core;

			#

			$lstType = $this->getListType();

			$html = '<option value="">-- ' . $core->get_Lang('select') . ' --</option>';

			foreach ($lstType as $key => $val) {

				$selected_index = ($selected == $key) ? 'selected="selected"' : '';

				$html .= '<option value="' . $key . '" ' . $selected_index . '>' . $val . '</option>';

			}

			return $html;

		}

		function getImageUrl($pvalTable) {

			$one = $this->getOne($pvalTable);

			return $one['image'];

		}

		function getSelectByProperty($type, $selected = '', $is_multiple=false) {

			global $core, $clsISO;

			#

			$all = $this->getAll("is_trash=0 and type='$type' order by order_no desc");

			$html = '<option value="">-- ' . $core->get_Lang('select') . ' --</option>';

			if(!empty($all)) {

				foreach($all as $k=>$v){

					if(!$is_multiple){

						$selected_index = ($selected == $v[$this->pkey]) ? 'selected="selected"' : '';

						$html.='<option value="'.$v[$this->pkey].'" ' . $selected_index . '>'.$this->getTitle($v[$this->pkey]).'</option>';

					} else {

						$_array = $this->getArray($selected);

						$html .= '<option value="'.$v[$this->pkey].'" '.($clsISO->checkItemInArray($v[$this->pkey],$_array)?'selected="selected"':'').'>-- '.$this->getTitle($v[$this->pkey]).'</option>';

					}

				}

			}

			return $html;

		}

		function makeOption($cat_id = 0, $type = '', $selectedid = "", $level = 0, &$arrHtml) {

			global $dbconn;

			$cond = "is_trash=0 and parent_id='" . $cat_id . "'";

			if ($type != '') {

				$cond .= " and type='$type'";

			}

			$arrListCat = $this->getAll($cond);

			if (is_array($arrListCat)) {

				foreach ($arrListCat as $k => $v) {

					$selected = ($v[$this->pkey] == $selectedid) ? "selected" : "";

					$value = $v[$this->pkey];

					$option = str_repeat("|---- ", $level) . $this->getTitle($v[$this->pkey]);

					$arrHtml[$value] = $option;

					$this->makeOption($v[$this->pkey], $type, $selectedid, $level + 1, $arrHtml);

				}

				return "";

			} else {

				return "";

			}

		}

		function getListOption($selected = '') {

			global $core;

			#

			$arrOptionsCategory = array();

			$this->makeOption(0, "", "", 0, $arrOptionsCategory);

			$html = '<option value=""> << ' . $core->get_Lang('select') . ' >> </option>';

			foreach ($arrOptionsCategory as $k => $v) {

				$selected_index = ($k == $selected) ? 'selected="selected"' : '';

				$oneItem = $this->getOne($k);

				$html .= '<option value="' . $k . '" ' . $selected_index . '>' . $v . '</option>';

			}

			return $html;

		}

		function getArray($string){

			if($string=='' || $string=='|'){ return array();}

			$string = str_replace('||','|',$string);

			$string = str_replace(',','|',$string);

			$string = str_replace(':','|',$string);

			$string = str_replace(';','|',$string);

			$string = ltrim($string, '|');

			$string = rtrim($string, '|');

			return explode('|',$string);

		}

		function checkContain($haystack, $needle) {

			$pos = strpos($haystack, $needle);



			if ($pos === false) {

				return 0;

			} else {

				return 1;

			}

		}

	}

?>