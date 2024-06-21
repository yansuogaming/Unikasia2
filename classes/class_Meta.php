<?php
class Meta extends dbBasic {
    function __construct() {
        $this->pkey = "meta_id";
        $this->tbl = DB_PREFIX . "meta";
    }

    function checkExist($pvalTable, $clsTable) {
        $clsClassTable = new $clsTable();
        $cur_link = $clsClassTable->getPermalink($pvalTable);
        $res = $this->getAll("config_value_permalink='$cur_link' limit 0,1");
        return (!empty($res)) ? 1 : 0;
    }

    function getByCurrentLink($pvalTable, $clsTable) {
        $clsClassTable = new $clsTable();
        $cur_link = $clsClassTable->getPermalink($pvalTable);
        $meta_id = $this->getByPermalink($cur_link);
        return $meta_id;
    }

    function replaceTitle($pvalTable, $clsTable) {
        $clsClassTable = new $clsTable();
        $title = $clsClassTable->getTitle($pvalTable);
        return $title;
    }

    function getByPermalink($config_value_permalink) {
        $all = $this->getAll("is_trash=0 and (config_value_permalink='$config_value_permalink') order by " . $this->pkey . " limit 0,1");
        return $all[0][$this->pkey];
    }

    function getValue($link) {
        global $_LANG_ID;
        $one = $this->getAll("config_link='$link'");
        return $one[0];
    }

    function getMetaTitle($meta_id) {
        global $_LANG_ID;
        $one = $this->getOne($meta_id,'config_value_title');
        return $one['config_value_title'];
    }
	function getCountMetaTitle($meta_id) {
		global $_LANG_ID;
		$meta_title=$this->getMetaTitle($meta_id);
		return  str_word_count($meta_title);
    }
	

    function getMetaDescription($meta_id) {
        global $_LANG_ID;
        $one = $this->getOne($meta_id,'config_value_intro');
        return strip_tags(html_entity_decode($one['config_value_intro']));
    }
	
	function getCountMetaDescription($meta_id) {
		global $_LANG_ID;
		$meta_description=$this->getMetaDescription($meta_id);
		return  str_word_count($meta_description);
    }
	
	function getMetaImage($pvalTable, $w, $h,$oneTable=null){
		global $clsISO,$clsConfiguration;
		if(!isset($oneTable['image'])){
			$oneTable = $this->getOne($pvalTable, "image");
		}		
		if($oneTable['image']!=''){
			$image = $oneTable['image'];
			return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($image);
		}else{
			return $clsConfiguration->getValue('ImageShareSocial');
		}
	}
	
    function getMetaKeyword($meta_id) {
        global $_LANG_ID;
        $one = $this->getOne($meta_id,'config_value_keyword');
        return $one['config_value_keyword'];
    }

    function getStatus($field, $pvalTable) {
        if ($field == 'title') {
            $title = $this->getMetaTitle($pvalTable);
            $number = strlen($title);
            if ($number > 70) {
                return '<strong style="color:red">' . $number . '</strong>';
            }
        }
        if ($field == 'description') {
            $description = $this->getMetaDescription($pvalTable);
            $number = strlen($description);
            if ($number > 160) {
                return '<strong style="color:red">' . $number . '</strong>';
            }
            if ($number < 70) {
                return '<strong style="color:#ccc">' . $number . '</strong>';
            }
        }
        if ($field == 'keyword'){
            return '<strong style="color:#0C0">Good</strong>';
        }

        $status_ok = '<strong style="color:#0C0">' . $number . '</strong>';
        $status_failed = '<strong style="color:red">' . $number . '</strong>';
        $status_failed_short = '<strong style="color:red">' . $number . '</strong>';
        return $status_ok;
    }

    function getConfigLink($pvalTable) {
        $one = $this->getOne($pvalTable,'config_link');
        return $one['config_link'];
    }
	function getConfigLinkViewGoogleSearch($pvalTable) {
        $one = $this->getOne($pvalTable,'config_link');
        return str_replace('/',' › ', str_replace('.html','',$one['config_link']));
    }
}

?>