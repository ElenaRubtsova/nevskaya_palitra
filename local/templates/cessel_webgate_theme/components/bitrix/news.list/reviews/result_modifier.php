<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true){die();}

if (is_array($arParams["REVIEWS_ID"])) {
//$arResult["REVIEWS"] = true;
    $rews = array();
    $dbres = CIBlockElement::GetList(
        array(),
        array(
            'IBLOCK_ID' => 36,
            'ID' => $arParams["REVIEWS_ID"],
        ),
        false,
        false,
        array(
            'NAME',
            'PREVIEW_PICTURE',
            'PREVIEW_TEXT',
//'DETAIL_PICTURE',
            'DETAIL_TEXT',
        )
    );
    while ($ob = $dbres->GetNext()) {
        $rews[] = $ob;
    }
    $arResult["ITEMS"] = $rews;
}