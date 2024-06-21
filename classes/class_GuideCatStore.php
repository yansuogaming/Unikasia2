<?php

class GuideCatStore extends dbBasic

{

	function __construct()

	{

		$this->pkey = "guidecat_store_id";

		$this->tbl = DB_PREFIX . "guidecat_store";
	}

	function getContent($guidecat_id, $country_id)

	{

		$res = $this->getAll("guidecat_id='$guidecat_id' and country_id='$country_id' LIMIT 0,1");

		if ($res[0][$this->pkey] != '') {

			return html_entity_decode($res[0]['content']);
		}

		return '';
	}

	function getImage($pvalTable, $w, $h)

	{

		global $clsISO;

		#

		$oneTable = $this->getOne($pvalTable, 'image');

		if ($oneTable['image'] != '') {

			$image = $oneTable['image'];

			return $clsISO->tripslashImage($image, $w, $h);
		}

		$noimage = URL_IMAGES . '/noimage.png';

		return '/files/thumb/' . $w . '/' . $h . '/' . $clsISO->parseImageURL($noimage);
	}

	function doDelete($pvalTable)
	{

		$clsISO = new ISO();

		#

		$image = $this->getOneField("image", $pvalTable);

		if (trim($image) != '') {

			if ($clsISO->checkContainer($image, DOMAIN_NAME)) {

				$image = $_SERVER['DOCUMENT_ROOT'] . $clsISO->parseImageURL($image, false);

				$clsISO->deleteFile($image);

				$image = $_SERVER['DOCUMENT_ROOT'] . $clsISO->parseImageURL($image, false);

				$clsISO->deleteFile($image);
			}
		}

		#

		$this->deleteOne($pvalTable);

		return 1;
	}

	function getGuideCatID($pvalTable)
	{
		$one	= 	$this->getOne($pvalTable);
		#
		$guidecat_id	=	'';
		if (!empty($one)) {
			$guidecat_id	.=	$one['guidecat_id'];
		}
		return $guidecat_id;
	}
}
