<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
//$this->setFrameMode(true);
?>

<!--review-popup-->
<div class="overlay" id="popup_about">
    <div class="flex-popup">
        <div class="popup">
            <span class="close_popup" onclick="close_popup()">X</span>
            <div class="image respond">
                <img class="photo"/>
            </div>
<!--    /*  */<h2 class="title"></h2>-->
<!--            <p class="description"></p>-->
        </div>
    </div>
</div>