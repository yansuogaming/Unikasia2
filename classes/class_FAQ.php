<?php
class FAQ extends dbBasic
{
	function __construct()
	{
		global $_LANG_ID;
		$this->pkey = "faq_id";
		$this->tbl = DB_PREFIX . "faq";
	}
	function getTitle($pvalTable, $one = null)
	{
		if (!isset($one['title'])) {
			$one = $this->getOne($pvalTable, 'title');
		}
		return $one['title'];
	}
	function getSlug($pvalTable, $one = null)
	{
		if (!isset($one['slug'])) {
			$one = $this->getOne($pvalTable, 'slug');
		}
		return $one['slug'];
	}
	function getMetaDescription($pvalTable)
	{
		global $_LANG_ID;
		$one = $this->getOne($pvalTable, 'intro');
		return html_entity_decode($one['intro']);
	}
	function getIntro($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'intro');
		return html_entity_decode($one['intro']);
	}
	function getContent($pvalTable, $one = null)
	{
		if (!isset($one['content'])) {
			$one = $this->getOne($pvalTable, 'content');
		}
		return html_entity_decode($one['content']);
	}
	function getStripIntro($pvalTable)
	{
		$one = $this->getOne($pvalTable, 'intro,content');
		if (!empty($one['intro']))
			return strip_tags(html_entity_decode($one['intro']));
		return strip_tags(html_entity_decode($one['content']));
	}
	function getLink($pvalTable, $allow_full_url = 1)
	{
		global $_LANG_ID, $extLang;
		return $extLang . '/faqs/' . $this->getSlug($pvalTable) . '.html';
	}
	function getListFAQs($faqcat_id)
	{
		$lst = $this->getAll("is_trash=0 and is_online=1 and faqcat_id='$faqcat_id' order by order_no desc");
		return $lst;
	}
	function doDelete($pvalTable)
	{
		// Delete News
		$this->deleteOne($pvalTable);
		return 1;
	}
	function getCountryID($pvalTable, $one = null)
	{
		if (!isset($one['country_id'])) {
			$one = $this->getOne($pvalTable, 'country_id');
		}
		return $one['country_id'];
	}
}
