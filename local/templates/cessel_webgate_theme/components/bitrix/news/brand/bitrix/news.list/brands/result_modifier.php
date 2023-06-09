<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

/*CATEGORIES_OF_BRAND*/
if ($arParams["OUT_CATEGORIES_OF_BRAND"]) {
    $categories = array();
    foreach ($arResult["ITEMS"] as &$brand) {
        $categories = array();
        $dbres = CIBlockSection::GetList(
            array(),
            array(
                'IBLOCK_ID' => 71,
                'NAME' => htmlspecialchars_decode($brand['NAME']),
            ),
            false,
            array(
                'IBLOCK_SECTION_ID',
                'SECTION_PAGE_URL',
            ),
            false
        );
        $parentIds = array();
        while ($ob = $dbres->GetNext()) {
            $categories[] = array('SECTION_URL' => $ob['SECTION_PAGE_URL']);
            $parentIds[] = $ob['IBLOCK_SECTION_ID'];
        }
        if (isset($parentIds[0])) {
            $names = array();
            $dbres = CIBlockSection::GetList(
                array(),
                array(
                    'IBLOCK_ID' => 71,
                    'ID' => $parentIds,
                    'ACTIVE' => 'Y',
                ),
                false,
                array(
                    'NAME',
                ),
                false
            );
            $i = 0;
            while ($ob = $dbres->GetNext()) {
                $categories[$i] = array_merge($categories[$i], array('NAME_SECTION' => $ob['NAME']));
                $i++;
            }
            $brand['CATEGORIES'] = $categories;
        }
    }
}

/*TAGS*/
if ($arParams["SEARCH_PAGE"])
{
	foreach ($arResult["ITEMS"] as &$arItem)
	{
		if ($arItem["FIELDS"] && isset($arItem["FIELDS"]["TAGS"]))
		{
			$tags = array();
			foreach (explode(",", $arItem["FIELDS"]["TAGS"]) as $tag)
			{
				$tag = trim($tag, " \t\n\r");
				if ($tag)
				{
					$url = CHTTP::urlAddParams(
						$arParams["SEARCH_PAGE"],
						array(
							"tags" => $tag,
						),
						array(
							"encode" => true,
						)
					);
					$tags[] = '<a href="'.$url.'">'.$tag.'</a>';
				}
			}
			$arItem["FIELDS"]["TAGS"] = implode(", ", $tags);
		}
	}
	unset($arItem);
}

/*VIDEO & AUDIO*/
$mediaProperty = trim($arParams["MEDIA_PROPERTY"]);
if ($mediaProperty)
{
	if (is_numeric($mediaProperty))
	{
		$propertyFilter = array(
			"ID" => $mediaProperty,
		);
	}
	else
	{
		$propertyFilter = array(
			"CODE" => $mediaProperty,
		);
	}

	$elementIndex = array();
	$elementIds = array();
	foreach ($arResult["ITEMS"] as $i => $arItem)
	{
		$elementIds[$arItem["IBLOCK_ID"]][] = $arItem["ID"];
		$elementIndex[$arItem["ID"]] = array(
			"index" => $i,
			"PROPERTIES" => array(),
		);
	}

	if ($elementIds)
	{
		foreach ($elementIds as $iblockId => $ids)
		{
			CIBlockElement::GetPropertyValuesArray($elementIndex, $iblockId, array(
				"IBLOCK_ID" => $iblockId,
				"ID" => $ids,
			), $propertyFilter);
		}
		
		foreach ($elementIndex as $idx)
		{
			foreach ($idx["PROPERTIES"] as $property)
			{
				$url = '';
				if ($property["MULTIPLE"] == "Y" && $property["VALUE"])
				{
					$url = current($property["VALUE"]);
				}
				if ($property["MULTIPLE"] == "N" && $property["VALUE"])
				{
					$url = $property["VALUE"];
				}

				if (preg_match('/(?:youtube\\.com|youtu\\.be).*?[\\?\\&]v=([^\\?\\&]+)/i', $url, $matches))
				{
					$arResult["ITEMS"][$idx["index"]]["VIDEO"] = 'https://www.youtube.com/embed/'.$matches[1].'/?rel=0&controls=0showinfo=0';
				}
				elseif (preg_match('/(?:vimeo\\.com)\\/([0-9]+)/i', $url, $matches))
				{
					$arResult["ITEMS"][$idx["index"]]["VIDEO"] = 'https://player.vimeo.com/video/'.$matches[1];
				}
				elseif (preg_match('/(?:rutube\\.ru).*?\\/video\\/([0-9a-f]+)/i', $url, $matches))
				{
					$arResult["ITEMS"][$idx["index"]]["VIDEO"] = 'http://rutube.ru/video/embed/'.$matches[1].'?sTitle=false&sAuthor=false';
				}
				elseif (preg_match('/(?:soundcloud\\.com)/i', $url, $matches))
				{
					$arResult["ITEMS"][$idx["index"]]["SOUND_CLOUD"] = $url;
				}
			}
		}
	}
}

/*SLIDER*/
$sliderProperty = trim($arParams["SLIDER_PROPERTY"]);
if ($sliderProperty)
{
	if (is_numeric($sliderProperty))
	{
		$propertyFilter = array(
			"ID" => $sliderProperty,
		);
	}
	else
	{
		$propertyFilter = array(
			"CODE" => $sliderProperty,
		);
	}

	$elementIndex = array();
	$elementIds = array();
	foreach ($arResult["ITEMS"] as $i => $arItem)
	{
		$elementIds[$arItem["IBLOCK_ID"]][] = $arItem["ID"];
		$elementIndex[$arItem["ID"]] = array(
			"index" => $i,
			"PROPERTIES" => array(),
		);
	}

	if ($elementIds)
	{
		foreach ($elementIds as $iblockId => $ids)
		{
			CIBlockElement::GetPropertyValuesArray($elementIndex, $iblockId, array(
				"IBLOCK_ID" => $iblockId,
				"ID" => $ids,
			), $propertyFilter);
		}
		
		foreach ($elementIndex as $idx)
		{
			foreach ($idx["PROPERTIES"] as $property)
			{
				$files = array();
				if ($property["MULTIPLE"] == "Y" && $property["VALUE"])
				{
					$files = $property["VALUE"];
				}
				if ($property["MULTIPLE"] == "N" && $property["VALUE"])
				{
					$files = array($property["VALUE"]);
				}

				if ($files)
				{
					$arResult["ITEMS"][$idx["index"]]["SLIDER"] = array();
					foreach ($files as $fileId)
					{
						$file = CFile::GetFileArray($fileId);
						if ($file && $file["WIDTH"] > 0 && $file["HEIGHT"] > 0)
						{
							$arResult["ITEMS"][$idx["index"]]["SLIDER"][] = $file;
						}
					}
				}
			}
		}
	}
}

/* THEME */
$arParams["TEMPLATE_THEME"] = trim($arParams["TEMPLATE_THEME"]);
$arResult["NAV_PARAM"]["TEMPLATE_THEME"] = $arParams["TEMPLATE_THEME"];

$arResult["NAV_STRING"] = $arResult["NAV_RESULT"]->GetPageNavStringEx(
	$navComponentObject,
	$arParams["PAGER_TITLE"],
	$arParams["PAGER_TEMPLATE"],
	$arParams["PAGER_SHOW_ALWAYS"],
	$this->__component,
	$arResult["NAV_PARAM"]
);


// $user_id=\Bitrix\Main\Engine\CurrentUser::get()->getId();

// $user = \Bitrix\Main\UserTable::getList(array(
    // 'filter' => array(
        // '=ID' => $user_id,
    // ),
    // 'limit'=>1,
    // 'select'=>array('*'),
	// ))->fetch();
	
// \Bitrix\Main\Diag\Debug::dump($user);

$arGroups=\Bitrix\Main\UserTable::getUserGroupIds(\Bitrix\Main\Engine\CurrentUser::get()->getId());
$arResult["ENABLE_VOTE"]=in_array(8, $arGroups);
//echo '<pre>';print_r($arResult["ITEMS"][0]);
foreach ($arResult["ITEMS"] as &$arItem)
	{
		$arVotes=unserialize($arItem["PROPERTIES"]["VOTES"]["~VALUE"]["TEXT"]);
		$count=count($arVotes);
		$voteSum=0;
		foreach ($arVotes as $arVote) {
			$user_id=$arVote["USER_ID"];
			$user = \Bitrix\Main\UserTable::getList(array(
			'filter' => array(
				'=ID' =>$user_id,
			),
			'limit'=>1,
			'select'=>array('*'),
			))->fetch();
			$voteSum+=$arVote["VOTE"];
			$arItem["VOTES_RES"]["USERS"][$user_id]["NAME"]=$user["NAME"].' '.$user["LAST_NAME"];
			$arItem["VOTES_RES"]["USERS"][$user_id]["VOTE"]=$arVote["VOTE"];
			$arItem["VOTES_RES"]["USERS"][$user_id]["DATE"]=$arVote["DATE"];
		}
			$arItem["VOTES_RES"]["AVERAGE"]=intdiv($voteSum, $count);
			
			
		if($arItem["DETAIL_PICTURE"])
		{	
			$arFileTmp = CFile::ResizeImageGet(
				$arItem["DETAIL_PICTURE"],
				array(
				"width" => 460,
				"height" => 350
				),
				BX_RESIZE_IMAGE_PROPORTIONAL,
				true
			);
			
			//$arItem["DETAIL_PICTURE"]=$arItem["PREVIEW_PICTURE"];
			$arItem["DETAIL_PICTURE"]["SRC"]=CFile::GetPath($arItem["DETAIL_PICTURE"]["ID"]);
			
			$arItem["PREVIEW_PICTURE"] = array(
				"SRC" => $arFileTmp["src"],
				"WIDTH" => $arFileTmp["width"],
				"HEIGHT" => $arFileTmp["height"],
			);
		}
			
			
	}	
	 // echo '<pre>'; print_r($arResult["ITEMS"][4]);echo '</pre>';