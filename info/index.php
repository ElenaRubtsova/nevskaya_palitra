<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Heritage");
?><section class="page-section club-intro" style="padding: 0 0 30px 0; border-bottom: 1px solid #e5e5e5;">
<div class="container">
	<div class="section-inner">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"artists_club_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "artists_club_menu",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top_submenu",
		"USE_EXT" => "N"
	)
);?>
	</div>
</div>
 </section> <section class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="section-title about-title">
			<h1><br>
			</h1>
		</div>
	</div>
</div>
</section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>