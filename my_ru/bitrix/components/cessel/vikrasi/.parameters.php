<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

CMain::IncludeFile("/dll.php");

CModule::IncludeModule("iblock");

$arFilter = Array(
	"IBLOCK_ID"=>sky_local_iblock("brands")
);
$res = CIBlockElement::GetList(
    Array(),
    $arFilter,
    '',
    '',
    Array(
        "ID",
        "NAME"
    )
);
$brands[0] = 'Все бренды';
while($brands_fields = $res->GetNext())
{
	$brands[$brands_fields["ID"]] = "[".$brands_fields["ID"]."] ".$brands_fields["NAME"];
}

$arComponentParameters = array(
	"GROUPS" => array(),
	"PARAMETERS" => array(
		"MAX_ELEMENTS" => array(
			"NAME" => "Всего элементов для отображения",
			"TYPE" => "STRING",
			"DEFAULT" => '0',
		),
		"BRAND_ID" => array(
			"PARENT" => "BASE",
			"NAME" => "Выберите бренд",
			"TYPE" => "LIST",
			"VALUES" => $brands,
			"REFRESH" => "Y",
		),
		),
);