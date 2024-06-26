<?php
class Reviews extends dbBasic{
	function __construct(){
		global $_LANG_ID;
		$this->pkey = "reviews_id";
		$this->tbl = DB_PREFIX."reviews";
	}
	 function getMaxId() {
		global $_LANG_ID,$dbconn;
		//$res = $this->getAll("1=1 order by reviews_id desc"); 
		$res = $dbconn->getAll("SELECT reviews_id FROM default_reviews WHERE 1=1 order by reviews_id desc");
        return intval($res[0]['reviews_id']) + 1;
    }
	function getMaxOrderNo(){
		$res=$this->getAll("is_trash=0 order by order_no desc limit 0,1");
		return intval($res[0]['order_no'])+1;
	}
	function getRegDate($pvalTable) {
		$one=$this->getOne($pvalTable);
		return date('m/d/Y',$one['reg_date']);
	}
	function getTitle($pvalTable,$one=null){
		if(!isset($one['title'])){
			$one=$this->getOne($pvalTable,'title');	
		}		
		return $one['title'];
	}
	function getContent($pvalTable, $limit = 400, $truncate = true,$one=null) {
        global $dbconn,$core;
		if(!isset($one['content'])){
			$one=$this->getOne($pvalTable,'content');	
		}		
        $string = $one['content'];

        if ($truncate == true) {
            if (strlen($string) < $limit) {
                return html_entity_decode($string);
            } else {
                $html = '<div class="clickSeemore"><div class="c_seemore More">';
                $html .= strip_tags(html_entity_decode($this->truncate($string, $limit)));
                $html .= '<a href="javascript:void(0);" class="semoreClick">'.$core->get_Lang('More').'</a>';
                $html .= '</div>';
                $html .= '<div class="c_seemore Less" style="display:none">';
                $html .= html_entity_decode($string);
                $html .= '<a href="javascript:void(0);" class="LessClick">'.$core->get_Lang('Less').'</a>';
                $html .= '</div></div>';
                return $html;
            }
        } else {
            return $string;   
        }
    }
	function truncate($string, $width, $etc = ' ..') {
        $wrapped = explode('$trun$', wordwrap($string, $width, '$trun$', false), 2);
        return $wrapped[0] . (isset($wrapped[1]) ? $etc : '');
    }
	function getFullName($pvalTable,$one=null){
		if(!isset($one['fullname'])){
			$one=$this->getOne($pvalTable,'fullname');	
		}		
		return $one['fullname'];
	}
	function getEmail($pvalTable){
		$one=$this->getOne($pvalTable,'email');
		return $one['email'];
	}
		function getReview_date($pvalTable){
		$one=$this->getOne($pvalTable,'review_date');
		return $one['review_date'];
	}
	function getRates($pvalTable,$one=null){
		if(!isset($one['rates'])){
			$one=$this->getOne($pvalTable,'rates');
		}
		return $one['rates'];
	}
	function getRatesStar($pvalTable='',$one=null) {
		if(!isset($one['rates'])){
			$one = $this->getOne($pvalTable,'rates');	
		}        
		$rates=$one['rates'];
		return '<span style="width: '.($rates*20).'%;"></span>';
    }
	function getNewRates($pvalTable,$one=null){
		global $core;
		if(!isset($one['rates'])){
			$one=$this->getOne($pvalTable,'rates');
		}
		return number_format($one['rates'],1).' - '.$this->getTextRateOne($pvalTable);
	}
	function getTextRateOne($pvalTable,$one=null) {
        global $core;
		if(!isset($one['rates'])){
        	$one= $this->getOne($pvalTable,'rates');
		}
		$rateScore=$one['rates'];
        if ($rateScore >= 5)
            return $core->get_Lang("Excellent");
        if ($rateScore >= 4 && $rateScore < 5)
            return $core->get_Lang("Very good");
        if ($rateScore >= 3 && $rateScore < 4)
            return $core->get_Lang("Good");
        if ($rateScore >= 2 && $rateScore < 3)
            return $core->get_Lang("Average");
        if ($rateScore >= 2 && $rateScore < 1)
            return $core->get_Lang("Poor");
        if ($rateScore >= 1 && $rateScore > 0)
            return $core->get_Lang("Terrible");
        if ($rateScore <= 0)
            return $core->get_Lang("No reviews");
    }
	function getRateProcess($rate,$table_id,$mod) {
        global $core;
		$totalReview=$this->getToTalReview($table_id,$mod);
		$totalReviewOneRate=$this->getToTalReviewByRate($rate,$table_id,$mod);
		$rateProcess=($totalReviewOneRate/$totalReview)*100;
		return number_format($rateProcess,0);
    }
	
	function getRateProcessNoLogin($rate,$table_id,$mod) {
        global $core;
		$totalReview=$this->getToTalReviewNoLogin($table_id,$mod);
		$totalReviewOneRate=$this->getToTalReviewByRateNoLogin($rate,$table_id,$mod);
		$rateProcess=($totalReviewOneRate/$totalReview)*100;
		return number_format($rateProcess,0);
    }
	
	function getTextRate($cruise_id) {
        global $core;
        $rateScore = $this->getRateAvg($cruise_id);
        if ($rateScore >= 5)
            return $core->get_Lang("Excellent");
        if ($rateScore >= 4 && $rateScore < 5)
            return $core->get_Lang("Very good");
        if ($rateScore >= 3 && $rateScore < 4)
            return $core->get_Lang("Good");
        if ($rateScore >= 2 && $rateScore < 3)
            return $core->get_Lang("Average");
        if ($rateScore >= 2 && $rateScore < 1)
            return $core->get_Lang("Poor");
        if ($rateScore >= 1 && $rateScore > 0)
            return $core->get_Lang("Terrible");
        if ($rateScore <= 0)
            return $core->get_Lang("No reviews");
    }
	
	
	function getTextRateAvg($table_id,$type='') {
        global $core;
        $rateScore = $this->getRateAvg($table_id,$type);
        if ($rateScore >= 5)
            return $core->get_Lang("Excellent");
        if ($rateScore >= 4 && $rateScore < 5)
            return $core->get_Lang("Very good");
        if ($rateScore >= 3 && $rateScore < 4)
            return $core->get_Lang("Good");
        if ($rateScore >= 2 && $rateScore < 3)
            return $core->get_Lang("Average");
        if ($rateScore >= 2 && $rateScore < 1)
            return $core->get_Lang("Poor");
        if ($rateScore >= 1 && $rateScore > 0)
            return $core->get_Lang("Terrible");
        if ($rateScore <= 0)
            return $core->get_Lang("No reviews");
    }
	function getRecommend($table_id,$type='') {
        global $core;
        $rateScore = $this->getRateAvg($table_id,$type);
		$recommend=$rateScore*20;
		if($recommend > 0){
			return number_format($recommend,0);
		}else{
			return 100;
		}
	}
	function getToTalReviewByTable($table_id='',$type='',$avgs){
		if($avgs == 'Excellent'){
			$avgsCheck =' >= 5'; 
		}elseif($avgs == 'Very good'){
			$avgsCheck =' >= 4 and rates < 5';
		}elseif($avgs == 'Good'){
			$avgsCheck =' >= 3 and rates < 4';
		}elseif($avgs == 'Average'){
			$avgsCheck =' >= 2 and rates < 3';
		}elseif($avgs == 'Poor'){
			$avgsCheck =' >= 1 and rates < 2';
		}elseif($avgs == 'Terrible'){
			$avgsCheck =' >= 0.1 and rates < 1';
		}else{
			$avgsCheck ='  = 0';
		}
		if(_ISOCMS_CLIENT_LOGIN==1){
			return  $this->countItem("is_trash=0 and is_online = 1 and profile_id >0 and table_id='$table_id' and type='$type' and rates  $avgsCheck");
		}else{
			return  $this->countItem("is_trash=0 and is_online = 1 and profile_id=0 and table_id='$table_id' and type='$type' and rates  $avgsCheck");
		}
		
		
	}
	
	function getToTalReviewByTableNoLogin($table_id='',$type='',$avgs){
		if($avgs == 'Excellent'){
			$avgsCheck =' >= 5'; 
		}elseif($avgs == 'Very good'){
			$avgsCheck =' >= 4 and rates < 5';
		}elseif($avgs == 'Good'){
			$avgsCheck =' >= 3 and rates < 4';
		}elseif($avgs == 'Average'){
			$avgsCheck =' >= 2 and rates < 3';
		}elseif($avgs == 'Poor'){
			$avgsCheck =' >= 1 and rates < 2';
		}elseif($avgs == 'Terrible'){
			$avgsCheck =' >= 0.1 and rates < 1';
		}else{
			$avgsCheck ='  = 0';
		}
		
		$allReviews=$this->getAll("is_trash=0 and is_online = 1 and profile_id=0 and table_id='$table_id' and type='$type' and rates  $avgsCheck",$this->pkey);
		return $allReviews?count($allReviews):0;
	}
	
	function getStarNew($pvalTable='',$type){
		$avgStar = $this->getRateAvg($pvalTable,$type);
		$avg = ($avgStar/5)*100;
		return '<span style="width: '.$avg.'%;"></span>';
	}
	function getStarNewNoLogin($pvalTable='',$type){
		$avgStar = $this->getRateAvgNoLogin($pvalTable,$type);
		$avg = ($avgStar/5)*100;
		return '<span style="width: '.$avg.'%;"></span>';
	}
	function getStarCatNew($tourcat_id,$type){
		$avgStar = $this->getRateCatAvg($tourcat_id,$type);
		$avg = ($avgStar/5)*100;
		return '<span style="width: '.$avg.'%;"></span>';
	}
	function getStarGroupNew($tour_group_id,$type){
		$avgStar = $this->getRateGroupAvg($tour_group_id,$type);
		$avg = ($avgStar/5)*100;
		return '<span style="width: '.$avg.'%;"></span>';
	}
	function getStarCountryNew($country_id,$type){
		$avgStar = $this->getRateCountryAvg($country_id,$type);
		$avg = ($avgStar/5)*100;
		return '<span style="width: '.$avg.'%;"></span>';
	}
	function getStarCityNew($city_id,$type){
		$avgStar = $this->getRateCityAvg($city_id,$type);
		$avg = ($avgStar/5)*100;
		return '<span style="width: '.$avg.'%;"></span>';
	}
	
	function getCountry_id($pvalTable,$one=null){
		if(!isset($one['country_id'])){
			$one=$this->getOne($pvalTable,'country_id');	
		}		
		return $one['country_id'];
	}
	function getCountry($pvalTable,$one=null){
		global $_LANG_ID;
		$clsCountry = new _Country();
		if(!isset($one['country_id'])){
			$one=$this->getOne($pvalTable,'country_id,title');
		}
		return $clsCountry->getTitle($one['country_id'],$one);
		
	}
	function getListType() {
		global $core,$package_id,$clsISO;
        $listType = array();
		if($clsISO->getCheckActiveModulePackage($package_id,'reviews','default','default','tour')){
        $listType['tour'] = $core->get_Lang('Tours');
		}
		if($clsISO->getCheckActiveModulePackage($package_id,'reviews','default','default','voucher')){
        $listType['voucher'] = $core->get_Lang('Voucher');
		}
		if($clsISO->getCheckActiveModulePackage($package_id,'reviews','default','default','cruise')){
		$listType['cruise'] = $core->get_Lang('Cruises');
		}
		if($clsISO->getCheckActiveModulePackage($package_id,'reviews','default','default','hotel')){
		$listType['hotel'] = $core->get_Lang('Hotels');
		}
        return $listType;
    }
	function getNameService($pvalTable) {
		global $core;
		$clsTour = new Tour();
		$clsCruise = new Cruise();
        $clsVoucher = new Voucher();
        $clsHotel = new Hotel();
		$one=$this->getOne($pvalTable);
		if($one['type']=='tour'){
			return $clsTour->getTitle($one['table_id']);
		}elseif($one['type']=='cruise'){
			return $clsCruise->getTitle($one['table_id']);
        }elseif($one['type']=='voucher'){
            return $clsVoucher->getTitle($one['table_id']);
        }elseif($one['type']=='hotel'){
            return $clsHotel->getTitle($one['table_id']);
        }
    }
    function getLinkService($pvalTable) {
        global $core,$DOMAIN_NAME,$extLang;
        $clsTour = new Tour();
        $clsCruise = new Cruise();
        $clsVoucher = new Voucher();
		$clsHotel = new Hotel();
        $one=$this->getOne($pvalTable);
        if($one['type']=='tour'){
            return DOMAIN_NAME.$clsTour->getLink($one['table_id']);
        }elseif($one['type']=='cruise'){
            return DOMAIN_NAME.$clsCruise->getLink($one['table_id']);
        }elseif($one['type']=='voucher'){
            return DOMAIN_NAME.$clsVoucher->getLink($one['table_id']);
        }elseif($one['type']=='hotel'){
            return DOMAIN_NAME.$clsHotel->getLink($one['table_id']);
        }
    }
	 function getTextByType($selected = '') {
        $lstType = $this->getListType();
        return $lstType[$selected];
    }
    function getSelectByType($selected = '') {
        global $core,$package_id,$clsISO;
        #
        $lstType = $this->getListType();
        $html = '';
        foreach ($lstType as $key => $val) {
            $selected_index = ($selected == $key) ? 'selected="selected"' : '';
            $html .= '<option value="' . $key . '" ' . $selected_index . '>' . $val . '</option>';
        }
        return $html;
    }
	function getSelectRankByType($selected = '',$type='') {
        global $core,$package_id,$clsISO;
        #
        
        $html = '';
		if($type == "tour" || $type =='voucher'){
			for($i = 1; $i <= 5;$i++){
				$selected_index = ($selected == $i) ? 'selected="selected"' : '';
            	$html .= '<option value="' . $i . '" ' . $selected_index . '>' . ($i.' '.$core->get_Lang('star')) . '</option>';
			}
		}else{
			for($i = 1; $i <= 5;$i++){
				$selected_index = ($selected == $i) ? 'selected="selected"' : '';
            	$html .= '<option value="' . $i . '" ' . $selected_index . '>' . ($i.' '.$core->get_Lang('star')) . '</option>';
			}
		}
        return $html;
    }
	function getToTalReviewBackup($cruise_id) {
		$clsReviewsCruise = new ReviewsCruise();
		return $clsReviewsCruise->getToTalReview($cruise_id);
	}
	function getToTalReview($table_id,$type='') {
		if(_ISOCMS_CLIENT_LOGIN==1){
			if($type!='' && $table_id>0){
				return 	$this->countItem("is_trash=0 and is_online=1 and profile_id >0 and table_id = '$table_id' and type='$type'");
			}else{
				return 	$this->countItem("is_trash=0 and is_online=1 and profile_id >0");
			}
		}else{
			if($type!='' && $table_id>0){
				return 	$this->countItem("is_trash=0 and is_online=1 and profile_id = 0 and table_id = '$table_id' and type='$type'");
			}else{
				return 	$this->countItem("is_trash=0 and is_online=1 and profile_id = 0");
			}
		}
		
	}
	function getToTalReviewNoLogin($table_id,$type='') {
		if($type!='' && $table_id>0){
			$allReviews=$this->getAll("is_trash=0 and is_online=1 and profile_id = 0 and table_id = '$table_id' and type='$type'");
			return 	$allReviews?count($allReviews):0;
		}else{
			$allReviews=$this->getAll("is_trash=0 and is_online=1 and profile_id = 0");
			return 	$allReviews?count($allReviews):0;
		}
		
	}
	function getTotalReviewByRate($rate,$table_id,$type='') {
		if(_ISOCMS_CLIENT_LOGIN==1){
			if($type!='' && $table_id>0){
				return 	$this->countItem("is_trash=0 and is_online=1 and profile_id >0 and table_id = '$table_id' and rates='$rate' and type='$type'");
			}else{
				return 	$this->countItem("is_trash=0 and is_online=1 and rates='$rate' and profile_id >0");
			}
		}else{
			if($type!='' && $table_id>0){
				return 	$this->countItem("is_trash=0 and is_online=1 and profile_id = 0 and table_id = '$table_id' and rates='$rate' and type='$type'");
			}else{
				return 	$this->countItem("is_trash=0 and is_online=1 and rates='$rate' and profile_id = 0");
			}
		}
		
	}
	function getTotalReviewByRateNoLogin($rate,$table_id,$type='') {
		
		if($type!='' && $table_id>0){
			$allReviews=$this->getAll("is_trash=0 and is_online=1 and profile_id = 0 and table_id = '$table_id' and rates='$rate' and type='$type'");
			return 	$allReviews?count($allReviews):0;
		}else{
			$allReviews=$this->getAll("is_trash=0 and is_online=1 and rates='$rate' and profile_id = 0");
			return 	$allReviews?count($allReviews):0;
		}
		
	}
	function getToTalReviewCat($cat_id,$type='') {
		if($type=='tour'){
			return 	$this->countItem("is_trash=0 and is_online=1 and table_id IN (SELECT tour_id FROM ".DB_PREFIX."tour where is_trash=0 and is_online=1 and list_cat_id like '%|".$cat_id."|%') and type='$type'");
		}else{
			return 	$this->countItem("is_trash=0 and is_online=1 and table_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise where is_trash=0 and is_online=1 and list_cat_id like '%|".$cat_id."|%') and type='$type'");
		}
	}
	function getToTalReviewByGroup($tour_group_id,$type='') {
		if($type=='tour'){
			$cond="is_trash=0 and is_online=1 and table_id IN (SELECT tour_id FROM ".DB_PREFIX."tour where is_trash=0 and is_online=1 and tour_group_id='$tour_group_id') and type='$type'";
			return 	$this->getAll($cond)?count($this->getAll($cond)):0;
		}else{
			$cond="is_trash=0 and is_online=1 and table_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise where is_trash=0 and is_online=1 and tour_group_id='$tour_group_id') and type='$type'";
			return 	$this->getAll($cond)?count($this->getAll($cond)):0;
		}
	}
	function getToTalReviewByCountry($country_id,$type='') {
		if($type=='tour'){
			$cond="is_trash=0 and is_online=1 and table_id IN (SELECT tour_id FROM ".DB_PREFIX."tour where is_trash=0 and is_online=1) and table_id IN(SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE is_trash=0 and country_id='$country_id') and type='$type'";
			return 	$this->getAll($cond)?count($this->getAll($cond)):0;
		}else{
			$cond="is_trash=0 and is_online=1 and table_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise where is_trash=0 and is_online=1) and table_id IN(SELECT tour_id FROM ".DB_PREFIX."cruise_destination WHERE is_trash=0 and country_id='$country_id') and type='$type'";
			return 	$this->getAll($cond)?count($this->getAll($cond)):0;
		}
	}
	function getToTalReviewByCity($city_id,$type='') {
		if($type=='tour'){
			$cond="is_trash=0 and is_online=1 and table_id IN (SELECT tour_id FROM ".DB_PREFIX."tour where is_trash=0 and is_online=1) and table_id IN(SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE is_trash=0 and city_id='$city_id') and type='$type'";
			return 	$this->getAll($cond)?count($this->getAll($cond)):0;
		}else{
			$cond="is_trash=0 and is_online=1 and table_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise where is_trash=0 and is_online=1) and table_id IN(SELECT tour_id FROM ".DB_PREFIX."cruise_destination WHERE is_trash=0 and city_id='$city_id') and type='$type'";
			return 	$this->getAll($cond)?count($this->getAll($cond)):0;
		}
	}
	function getRateScore($cruise_id) {
		return 	$this->countItem("table_id = '$cruise_id'");
	}
	function getRateAvg($table_id,$type='',$typeScore = '5') {
		global $dbconn;
		if($type!='' && $table_id>0){
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id = '$table_id' and type='$type'");
		}else{
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and profile_id>0");
		}
		if($typeScore == '10'){
			return number_format($res[0]['rates']*2,1);
		}
		return number_format($res[0]['rates'],1);
	}
	function getRateAvgNoLogin($table_id,$type='',$typeScore = 5) {
		global $dbconn;
		if($type!='' && $table_id>0){
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id = '$table_id' and type='$type' and profile_id=0");
		}else{
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and profile_id=0");
		}
		if($typeScore == '10'){
			return number_format($res[0]['rates']*2,1);
		}
		return number_format($res[0]['rates'],1);
	}
	function getBestRate($table_id,$type=''){
		if($type!='' && $table_id>0){
			$one = $this->getAll("is_trash=0 and is_online=1 and table_id='$table_id' and type='$type' order by rates desc limit 0,1",$this->pkey,"rates");
		}else{
			$one = $this->getAll("is_trash=0 and is_online=1 order by rates desc limit 0,1",$this->pkey,"rates");
		}
		return $one[0]['rates'];
	}
	function getRateCatAvg($cat_id,$type=''){
	global $dbconn;
	if($type=='tour'){
		$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id IN (SELECT tour_id FROM ".DB_PREFIX."tour where is_trash=0 and is_online=1 and list_cat_id like '%|".$cat_id."|%') and type='$type'");
	}else{
		$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise where is_trash=0 and is_online=1 and list_cat_id like '%|".$cat_id."|%') and type='$type'");
	}
	return number_format($res[0]['rates'],1);	
	}
	
	function getRateGroupAvg($tour_group_id,$type=''){
		global $dbconn;
		if($type=='tour'){
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id IN (SELECT tour_id FROM ".DB_PREFIX."tour where is_trash=0 and is_online=1 and tour_group_id='$tour_group_id') and type='$type'");
		}else{
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise where is_trash=0 and is_online=1 and tour_group_id='$tour_group_id') and type='$type'");
		}
		return number_format($res[0]['rates'],1);	
	}
	
	function getRateCountryAvg($country_id,$type=''){
		global $dbconn;
		if($type=='tour'){
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id IN (SELECT tour_id FROM ".DB_PREFIX."tour where is_trash=0 and is_online=1) and table_id IN(SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE is_trash=0 and country_id='$country_id') and type='$type'");
		}else{
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise where is_trash=0 and is_online=1) and table_id IN(SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE is_trash=0 and country_id='$country_id') and type='$type'");
		}
		return number_format($res[0]['rates'],1);	
	}
	function getRateCityAvg($city_id,$type=''){
		global $dbconn;
		if($type=='tour'){
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id IN (SELECT tour_id FROM ".DB_PREFIX."tour where is_trash=0 and is_online=1) and table_id IN(SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE is_trash=0 and city_id='$city_id') and type='$type'");
		}else{
			$res = $dbconn->getAll("SELECT AVG(rates) as rates FROM default_reviews WHERE is_online=1 and is_trash=0 and table_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise where is_trash=0 and is_online=1) and table_id IN(SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE is_trash=0 and city_id='$city_id') and type='$type'");
		}
		return number_format($res[0]['rates'],1);	
	}
	
	function getBestRateCat($cat_id,$type=''){
		if($type=='tour'){
			$one = $this->getAll("is_trash=0 and is_online=1 and table_id IN (SELECT tour_id FROM ".DB_PREFIX."tour where is_trash=0 and is_online=1 and list_cat_id like '%|".$cat_id."|%') and type='$type' order by rates desc limit 0,1",$this->pkey,"rates");
		}else{
			$one = $this->getAll("is_trash=0 and is_online=1 and table_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise where is_trash=0 and is_online=1 and list_cat_id like '%|".$cat_id."|%') and type='$type' order by rates desc limit 0,1",$this->pkey,"rates");
		}
		
		return $one[0]['rates'];
	}

	function doDelete($pvalTable){
		// Delete
		$this->deleteOne($pvalTable);
		return 1;
	}
    function sendMail($email,$mes,$type){
        global $core, $clsISO, $clsConfiguration,$_LANG_ID,$email_template_review_tour_id,$email_template_review_cruise_id,$email_template_review_stay_id;
		
        #
        $clsEmailTemplate = new EmailTemplate();


        #
        if($type =='tour'){
            $email_template_id=$email_template_review_tour_id;
			
        }else if($type =='hotel'){
			$email_template_id=$email_template_review_stay_id;
		}
		else{
            $email_template_id=$email_template_review_cruise_id;
        }
        #
        header('Content-Type: text/html; charset=utf-8');
        $message = $clsEmailTemplate->getContent($email_template_id);
        $message = str_replace('[%PAGE_NAME%]',PAGE_NAME,$message);
        $message = str_replace('{URL}','http://'.$_SERVER['HTTP_HOST'],$message);
        $message = str_replace('[%CUSTOMER_EMAIL%]',$email,$message);
        $message = str_replace('[%CUSTOMER_MES%]',$mes,$message);
        $message = str_replace('[%CUSTOMER_FULLNAME%]',$email,$message);
        
        
        $message = str_replace('[%COMPANY_HOTLINE%]',$clsConfiguration->getValue('CompanyHotline'),$message);
        $message = str_replace('[%COMPANY_EMAIL%]',$clsConfiguration->getValue('CompanyEmail'),$message);
		$message = str_replace('[%COMPANY_NAME%]',$clsConfiguration->getValue('CompanyName_'.$_LANG_ID),$message);
		$message = str_replace('[%COMPANY_ADDRESS%]',$clsConfiguration->getValue('CompanyAddress_'.$_LANG_ID),$message); 
		$message = str_replace('[%COMPANY_PHONE%]',$clsConfiguration->getValue('CompanyPhone'),$message);
		$message = str_replace('[%COMPANY_FAX%]',$clsConfiguration->getValue('CompanyFax'),$message);
		$message = str_replace('[%COMPANY_WEBSITE%]',DOMAIN_NAME,$message);
		$message = str_replace('[%info_social%]',$clsConfiguration->getHTMLSocial(),$message);
		$message = str_replace('[%info_license%]',$clsConfiguration->getValue('GPKD'),$message);
		$message = str_replace('[%DOMAIN_NAME%]',DOMAIN_NAME,$message);
		$message = str_replace('[%DATETIME%]',date('Y',time()),$message);
		$message .= $clsEmailTemplate->getFooter($email_template_id);
        
        #

        $from = $clsEmailTemplate->getFromEmail($email_template_id);

        $owner = $clsEmailTemplate->getFromName($email_template_id);
        $to = $email;
        $subject = $clsEmailTemplate->getSubject($email_template_id). ' '.PAGE_NAME;
        $subject = str_replace('[%PAGE_NAME%]','',$subject);


        $is_send_email = $clsISO->sendEmail($from,$to,$subject,$message,$owner);
        
        $to = $clsEmailTemplate->getCopyTo($email_template_id);
        if(!empty($to)){
            $owner = $clsEmailTemplate->getFromName($email_template_id);
            $subject = $clsEmailTemplate->getSubject($email_template_id). ' '.PAGE_NAME;
            $subject = str_replace('[%PAGE_NAME%]','',$subject);
    //		$is_send_email = $clsISO->sendEmail($from,$to,$subject,$message,$owner);
            $lstto = explode(',',$to);
            foreach ($lstto as $it){
                $multi_email = trim($it);
                if($multi_email){
                    $is_send_email = $clsISO->sendEmail($from,$multi_email,$subject,$message,$owner);
                    continue;
                }
            }
        }

        return 1;
    }
    function getReviews($id, $act='', $type='tour') {
        global $dbconn;
        $cond = " is_trash = 0 and is_online = 1";
        $txtReview = ['Bad', 'Average', 'Good', 'Excellent', 'Wonderful'];

        if (!empty($type)) {
            $cond   .=  ' and type = "'.$type.'"';
        }

        $countReview = $this->countItem("$cond and table_id = $id");
        $sqlAverageRate = "SELECT AVG(rates) FROM $this->tbl WHERE $cond and table_id = $id";
        $averageRate = round($dbconn->GetOne($sqlAverageRate), 1);
        $index = round( $averageRate - 1);

        switch ($act) {
            case 'txt_review':
                $rec = $txtReview[$index] ?? 'No review';
                break;
            case 'avg_point':
                $rec = number_format($averageRate,1);
                break;
            default:
                $rec = $countReview;
                break;
        }
        return $rec;
    }
}

?>