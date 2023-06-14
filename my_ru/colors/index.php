<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Выкраски всех торговых марок «Невской палитры»");
$APPLICATION->SetPageProperty("keywords", "Decola, Белые ночи, Сонет, Ладога, Мастер-класс");
$APPLICATION->SetPageProperty("description", "Ознакомьтесь с выкрасками всех торговых марок, выпускаемых заводом «Невская палитра»: Мастер-класс, Белые ночи, Ладога, Сонет, Decola и другими");
$APPLICATION->SetTitle("Выкраски");
?>


<? $APPLICATION->IncludeComponent(
	"cessel:vikrasi", 
	"vikrasi_main", 
	array(
		"COMPONENT_TEMPLATE" => "vikrasi_main",
		"TEXT_TO_SHOW" => "Выкрасы тут",
		"BRAND_ID" => "0",
		"MAX_ELEMENTS" => "8"
	),
	false
); ?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>