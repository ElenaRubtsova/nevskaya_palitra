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
$this->setFrameMode(true);
?>
<style>
    .card-image {
        display: block;
        position: relative;
        height: 270px;
        z-index: 2;
        overflow: hidden;
        background-position: center;
        background-size: cover;
    }
    .card-body {
        position: relative;
        width: 100%;
        padding: 30px 20px 30px;
        z-index: 3;
        text-align: center;
    }
    .card-body a {
        text-decoration: revert;
        font-size: 1.2em;
        line-height: 1.4em;
    }
</style>
<section class="page-section">
    <div class="container">
        <div class="section-inner">

            <div class="section-title about-title">
                <h1>Brands</h1>
            </div>

            <div class="index-catalog observables fade-down">
                <div class="row" style="margin-bottom: 15px; box-sizing: border-box;">

				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
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
                                    <? foreach ($arItem['PROPERTIES']['CATEGORY_BRAND']['VALUE'] as $id) { ?>
                                        <a href="/catalog2022/paints/acrylic/master-class/" style="text-decoration: revert;" data-caption="<?=$arItem['NAME']?>">
                                            <?echo($arResult['ALL_CATEGORIES'][$id]);?>
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
