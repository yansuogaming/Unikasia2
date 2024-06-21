<?php
class EmailTemplate extends dbBasic{
	function __construct(){
		$this->pkey = "email_template_id";
		$this->tbl = DB_PREFIX."email_template";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by email_template_id desc");
		return intval($res[0]['email_template_id'])+1;
	}
	function getMaxOrderNo(){
		$all=$this->getAll("1=1 order by order_no desc");
		return intval($all[0]['order_no'])+1;
	}
	function getListType(){
		$_array = array();
		$_array['_CONTACT'] = 'Mẫu E-Mail Liên hệ';
		$_array['_NEWSLETTER'] = 'Mẫu E-Mail Nhận bản tin';
		$_array['_CUSTOMIZE_TOUR'] = 'Mẫu E-Mail Customize Tour';
		$_array['_BOOKING_TOUR'] = 'Mẫu E-Mail Booking Tour';
		$_array['_BOOKING_HOTEL'] = 'Mẫu E-Mail Booking Hotel';
		return $_array;
	}
	function getTitle($pvalTable){
		global $_LANG_ID;
        $one = $this->getOne($pvalTable,'email_content_setting');
		$email_content_setting=unserialize($one['email_content_setting']);
        return $email_content_setting[$_LANG_ID]['title']?html_entity_decode($email_content_setting[$_LANG_ID]['title']):html_entity_decode($email_content_setting['en']['title']);
	}
	function getSubject($pvalTable){
		global $_LANG_ID;
        $one = $this->getOne($pvalTable,'email_content_setting');
		$email_content_setting=unserialize($one['email_content_setting']);
        return $email_content_setting[$_LANG_ID]['subject']?html_entity_decode($email_content_setting[$_LANG_ID]['subject']):html_entity_decode($email_content_setting['en']['subject']);
	}
	function getContent($pvalTable){
		global $_LANG_ID;
        $one = $this->getOne($pvalTable,'email_content_setting');
		$email_content_setting=unserialize($one['email_content_setting']);
        return $email_content_setting[$_LANG_ID]['content']?html_entity_decode($email_content_setting[$_LANG_ID]['content']):html_entity_decode($email_content_setting['en']['content']);
	}
    function getHeader($pvalTable){
		global $_LANG_ID;
        $one = $this->getOne($pvalTable,'email_content_setting');
		$email_content_setting=unserialize($one['email_content_setting']);
        return $email_content_setting[$_LANG_ID]['header']?html_entity_decode($email_content_setting[$_LANG_ID]['header']):html_entity_decode($email_content_setting['en']['header']);
	}
    function getFooter($pvalTable){
		global $_LANG_ID;
        $one = $this->getOne($pvalTable,'email_content_setting');
		$email_content_setting=unserialize($one['email_content_setting']);
        return $email_content_setting[$_LANG_ID]['footer']?html_entity_decode($email_content_setting[$_LANG_ID]['footer']):html_entity_decode($email_content_setting['en']['footer']);
	}
	function getFromName($pvalTable){
		global $_LANG_ID;
        $one = $this->getOne($pvalTable,'email_content_setting');
		$email_content_setting=unserialize($one['email_content_setting']);
        return $email_content_setting[$_LANG_ID]['fromname']?html_entity_decode($email_content_setting[$_LANG_ID]['fromname']):html_entity_decode($email_content_setting['en']['fromname']);
	}
	function getFromEmail($pvalTable){
		global $_LANG_ID;
        $one = $this->getOne($pvalTable,'email_content_setting');
		$email_content_setting=unserialize($one['email_content_setting']);
        return $email_content_setting[$_LANG_ID]['fromemail']?html_entity_decode($email_content_setting[$_LANG_ID]['fromemail']):html_entity_decode($email_content_setting['en']['fromemail']);
	}
	function getCopyTo($pvalTable){
		global $_LANG_ID;
        $one = $this->getOne($pvalTable,'email_content_setting');
		$email_content_setting=unserialize($one['email_content_setting']);
        return $email_content_setting[$_LANG_ID]['copyto']?html_entity_decode($email_content_setting[$_LANG_ID]['copyto']):html_entity_decode($email_content_setting['en']['copyto']);
	}
	function getListEmailTemplate($email_template_cat_id) {
		$res = $this->getAll("is_trash=0 and cat_id='{$email_template_cat_id}'");
		return !empty($res) ? $res : false;
	}
	function makeSelectboxOption($selected=''){
		$lstType = $this->getListType();
		$html = '<option value=""><< Lựa chọn >></option>';
		foreach($lstType as $key=>$val){
			$sl = ($key==$selected)?'selected="selected"':'';
			$html.='<option value="'.$key.'" '.$sl.'>'.$val.'</option>';
		}
		return $html;
	}
}
?>