<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

CModule::IncludeModule("iblock");

$arResult['BRAND_ID'] = $arParams["BRAND_ID"];
$arResult['MAX_ELEMENTS'] = (intval($arParams["MAX_ELEMENTS"]) !== 0) ? ['nTopCount'=>intval($arParams["MAX_ELEMENTS"])] : '';
$IBLOCK_ID = sky_local_iblock("catalog");
$arFilter["IBLOCK_ID"] = sky_local_iblock("catalog");
$reqFullList = isset($_REQUEST["brand_full_list"]);
$reqCode = isset($_REQUEST["brand_req_code"]) ? $_REQUEST["brand_req_code"] : NULL;

/* if($arResult['BRAND_ID'] != 0) {
	$arFilter["PROPERTY_BRAND"] = $arResult['BRAND_ID'];
	$res = CIBlockElement::GetList(Array(), $arFilter,'',$arResult['MAX_ELEMENTS'],Array("LANG_DIR", "IBLOCK_ID", "ID","NAME","DETAIL_PAGE_URL"));
	$res->NavStart(9999);
	//$goods = $res->arResult;
	while ($good = $res->GetNext()) {
		$vikras_res = CIBlockElement::GetProperty($IBLOCK_ID,$good['ID'],'','',array("CODE" => "VIKRAS_IMG"));
		$vikras_res->NavStart(9999);
		$ob = $vikras_res->arResult;
		$vikras_img = CFile::GetFileArray($ob[0]['VALUE']);
		$good['PICTURE_SRC'] = $vikras_img['SRC'];
		$arResult['GOODS'][] = $good;
	}
} else {
	$arFilter["IBLOCK_ID"] = 26;
	$res = CIBlockElement::GetList(Array(), $arFilter,'','',Array("ID","NAME","PREVIEW_TEXT","DETAIL_TEXT"));
	while($brands_fields = $res->GetNext()) {
		$arFilter["IBLOCK_ID"] = 25;
		$arFilter["PROPERTY_BRAND"] = $brands_fields["ID"];
		$res_goods = CIBlockElement::GetList(Array(), $arFilter,'',$arResult['MAX_ELEMENTS'],Array("LANG_DIR", "IBLOCK_ID", "ID","NAME","DETAIL_PAGE_URL"));
		$res_goods->NavStart(9999);
		//$goods = $res->arResult;
		$arResult['BRANDS'][$brands_fields["ID"]]['NAME'] = $brands_fields['NAME'];
		$arResult['BRANDS'][$brands_fields["ID"]]['PREVIEW_TEXT'] = $brands_fields['PREVIEW_TEXT'];
		$arResult['BRANDS'][$brands_fields["ID"]]['DETAIL_TEXT'] = $brands_fields['DETAIL_TEXT'];
		while ($good = $res_goods->GetNext()) {
			$vikras_res = CIBlockElement::GetProperty($IBLOCK_ID,$good['ID'],'','',array("CODE" => "VIKRAS_IMG"));
			$vikras_res->NavStart(9999);
			$ob = $vikras_res->arResult;
			$vikras_img = CFile::GetFileArray($ob[0]['VALUE']);
			$good['PICTURE_SRC'] = $vikras_img['SRC'];
			$arResult['BRANDS'][$brands_fields["ID"]]['GOODS'][] = $good;
		}
	}
} */
function pp($arr, $name = '') {
    global $USER;
    if ($USER->isAdmin()) {
        echo("<pre>$name "); print_r($arr); echo('</pre>');
    }
}
function unio($arr, $str) : array {
    $result = array_map(function($value) use ($str) {
        return $str . $value;
    }, $arr);
    return $result;
}


$arFilter["IBLOCK_ID"] = sky_local_iblock("brands");
$props = array(
	"ID",
	"NAME",
	"CODE",
	"PREVIEW_TEXT",
	"DETAIL_TEXT", 
	"PREVIEW_PICTURE", 
	"PROPERTY_DOWNLOAD_PALETTE",
	"PROPERTY_DOWNLOAD_PALETTE_NAMES",
    "PROPERTY_LINK_FILE_PALETTE",
    "PROPERTY_LINK_FILE_PALETTE.DESCRIPTION",
    "PROPERTY_LINK_FILE_INSTRUCTIONS",
    "PROPERTY_LINK_FILE_INSTRUCTIONS.DESCRIPTION",
);
$res = CIBlockElement::GetList(Array(), $arFilter,'','', $props);
while($brands_fields = $res->GetNext()) {
	$arFilter["IBLOCK_ID"] = sky_local_iblock("catalog");
	$arFilter["PROPERTY_BRAND"] = $brands_fields["ID"];
	$arFilter["!PROPERTY_VIKRAS_IMG"] = false;

	$arResult['BRANDS'][$brands_fields["ID"]]['NAME'] = $brands_fields['NAME'];
	$arResult['BRANDS'][$brands_fields["ID"]]['CODE'] = $brands_fields['CODE'];
	$arResult['BRANDS'][$brands_fields["ID"]]['PREVIEW_PICTURE'] = $brands_fields['PREVIEW_PICTURE'];
	$arResult['BRANDS'][$brands_fields["ID"]]['PREVIEW_TEXT'] = $brands_fields['PREVIEW_TEXT'];
	$arResult['BRANDS'][$brands_fields["ID"]]['DETAIL_TEXT'] = $brands_fields['DETAIL_TEXT'];
	$arResult['BRANDS'][$brands_fields["ID"]]['DOWNLOAD_PALETTE'] = $brands_fields['PROPERTY_DOWNLOAD_PALETTE_VALUE'];
	$arResult['BRANDS'][$brands_fields["ID"]]['DOWNLOAD_PALETTE_NAMES'] = $brands_fields['PROPERTY_DOWNLOAD_PALETTE_NAMES_VALUE'];
	$arResult['BRANDS'][$brands_fields["ID"]]['LINK_FILE_PALETTE'] = $brands_fields['PROPERTY_LINK_FILE_PALETTE_VALUE'];
	$arResult['BRANDS'][$brands_fields["ID"]]['LINK_FILE_PALETTE_DESCRIPTION'] = $brands_fields['PROPERTY_LINK_FILE_PALETTE_DESCRIPTION'];
	$arResult['BRANDS'][$brands_fields["ID"]]['LINK_FILE_INSTRUCTIONS'] = $brands_fields['PROPERTY_LINK_FILE_INSTRUCTIONS_VALUE'];
	$arResult['BRANDS'][$brands_fields["ID"]]['LINK_FILE_INSTRUCTIONS_DESCRIPTION'] = $brands_fields['PROPERTY_LINK_FILE_INSTRUCTIONS_DESCRIPTION'];

    pp($arResult['BRANDS'][$brands_fields["ID"]]['NAME']);
    pp($brands_fields['PROPERTY_LINK_FILE_PALETTE_VALUE'], 'Выкраски (значения)');
    pp($brands_fields['PROPERTY_LINK_FILE_PALETTE_DESCRIPTION'], 'Выкраски (описания)');
    pp($brands_fields['PROPERTY_LINK_FILE_INSTRUCTIONS_VALUE'], 'Инструкции (значения)');
    pp($brands_fields['PROPERTY_LINK_FILE_INSTRUCTIONS_DESCRIPTION'], 'Инструкции (описания)');
    //pp(unio($arResult['BRANDS'][$brands_fields["ID"]]['LINK_FILE_PALETTE'], '/brands/vukraski/'));
    //pp(unio($arResult['BRANDS'][$brands_fields["ID"]]['LINK_FILE_INSTRUCTIONS'], '/brands/instructions/'));

	if ($reqFullList && $reqCode && $reqCode = $brands_fields['CODE'])
		$arResult['MAX_ELEMENTS'] = -1;

	$res_goods = CIBlockElement::GetList(Array(), $arFilter,'',$arResult['MAX_ELEMENTS'],Array("LANG_DIR", "IBLOCK_ID", "ID","NAME","DETAIL_PAGE_URL"));
	$res_goods->NavStart($arResult['MAX_ELEMENTS']);
	$arResult['BRANDS'][$brands_fields["ID"]]['GOODS_NAV_PAGE_COUNT'] = (int)$res_goods->NavPageCount;
	$res_goods->NavStart(999999999999);
	//$goods = $res->arResult;
	while ($good = $res_goods->GetNext()) {
		$vikras_res = CIBlockElement::GetProperty($IBLOCK_ID,$good['ID'],'','',array("CODE" => "VIKRAS_IMG"));
		$vikras_res->NavStart(999999999999);
		$ob = $vikras_res->arResult;
		$vikras_img = CFile::GetFileArray($ob[0]['VALUE']);
		$good['PICTURE_SRC'] = $vikras_img['SRC'];
		$arResult['BRANDS'][$brands_fields["ID"]]['GOODS'][] = $good;
	}
}
if($arParams["BRAND_ID"] != 0) {
	$arResult_temp['BRANDS'][$arParams["BRAND_ID"]] = $arResult['BRANDS'][$arParams["BRAND_ID"]];
	$arResult = $arResult_temp;
}

$this->IncludeComponentTemplate();