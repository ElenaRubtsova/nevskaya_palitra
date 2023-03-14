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
if ($arParams["SET_BROWSER_TITLE"] === 'Y')
    $APPLICATION->SetTitle($arParams['TITLE']);
$this->setFrameMode(true);
?>
<section class="page-section">
    <div class="container">
        <div class="section-inner">

            <div class="section-title about-title">
                <h1><?=$arParams['TITLE']?></h1>
            </div>

            <div class="index-catalog observables fade-down">
                <div class="row" style="margin-bottom: 15px; box-sizing: border-box;">

				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
                //print_r($arItem['CATEGORIES']);
						$this->AddEditAction(
							$arItem['ID'],
							$arItem['EDIT_LINK'],
							CIBlock::GetArrayByID(
								$arItem["IBLOCK_ID"],
								"ELEMENT_EDIT"
							)
						);
						$this->AddDeleteAction(
							$arItem['ID'],
							$arItem['DELETE_LINK'],
							CIBlock::GetArrayByID(
								$arItem["IBLOCK_ID"],
								"ELEMENT_DELETE"),
							array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
						);
					?>
					<div class="col-3to12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="card-wrapper" style="margin-bottom: 15px">
                            <div class="card card-brand">

                                <?if($arItem['PROPERTIES']['LOGO_FILE']['VALUE']):
                                    $path = CFile::GetPath($arItem['PROPERTIES']['LOGO_FILE']['VALUE']);?>
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem['NAME']?>">
                                    <div class="card-image" style="background-image: url('<?=$path?>');"></div></a>
                                <?endif;?>

                                <div class="card-body">
                                    <h3><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" style="text-decoration: none;"><?=$arItem['NAME']?></a></h3>
                                    <? foreach ($arItem['CATEGORIES'] as $cat) { ?>
                                        <a href="<?echo($cat['SECTION_URL']);?>" style="text-decoration: revert;" data-caption="<?=$arItem['NAME']?>">
                                            <?echo($cat['NAME_SECTION']);?>
                                        </a><br>
                                    <? } ?>
                                </div>

                            </div>
						</div>
					</div>
				<?endforeach;?>

                <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                    <?=$arResult["NAV_STRING"]?>
                <?endif;?>

	            </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
