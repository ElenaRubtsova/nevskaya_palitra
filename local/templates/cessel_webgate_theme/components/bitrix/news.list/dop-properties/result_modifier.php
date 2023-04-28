<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true){die();}

$items = array();

foreach ($arResult['ITEMS'] as $item) {
    if ($items[$item['PROPERTIES']['TYPE']['VALUE']] === '')
    $items[$item['PROPERTIES']['TYPE']['VALUE']] = array();
    $items[$item['PROPERTIES']['TYPE']['VALUE']][$item['PROPERTIES']['IS_BASE']['VALUE']][] = $item;
};

$arResult['ITEMS'] = $items;
//echo('<pre>');print_r($arResult["ITEMS"]);echo('</pre>');

?>