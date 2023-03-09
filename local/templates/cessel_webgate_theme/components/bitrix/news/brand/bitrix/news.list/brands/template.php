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

                                    <? print_r($arResult['ALL_CATEGORIES']);
                                    /*$dbres = CIBlockSection::GetList(
                                        array(),
                                        array('IBLOCK_ID' => 27),
                                        false,
                                        array('ID', 'NAME'),
                                        false
                                    );//$arDirs = $dbres->Fetch();
                                    while ($arGroup=$dbres->GetNext()) {
                                        print_r($arGroup);
                                    }
                                    //print_r($arDirs);
                                    */?>
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
						<div class="card-wrapper">
							<?/*if($arParams["DISPLAY_PICTURE"]!="N"):?>

								<?
								if ($arItem["VIDEO"])
								{
									?>
									<div class="news-list-item-embed-video embed-responsive embed-responsive-16by9">
										<iframe
											class="embed-responsive-item"
											src="<?echo $arItem["VIDEO"]?>"
											frameborder="0"
											allowfullscreen=""
											></iframe>
									</div>
									<?
								}
								else if ($arItem["SOUND_CLOUD"])
								{
									?>
									<div class="news-list-item-embed-audio embed-responsive embed-responsive-16by9">
										<iframe
											class="embed-responsive-item"
											width="100%"
											scrolling="no"
											frameborder="no"
											src="https://w.soundcloud.com/player/?url=<?echo urlencode($arItem["SOUND_CLOUD"])?>&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"
											></iframe>
									</div>
									<?
								}
								else if ($arItem["SLIDER"] && count($arItem["SLIDER"]) > 1)
								{
									?>
									<div class="news-list-item-embed-slider">
										<div class="news-list-slider-container" style="width: <?
										echo count($arItem["SLIDER"]) * 100 ?>%;left: 0;">
											<?
											foreach ($arItem["SLIDER"] as $file):?>
												<div class="news-list-slider-slide">
													<img src="<?= $file["SRC"] ?>" alt="<?= $file["DESCRIPTION"] ?>">
												</div>
											<?endforeach ?>
										</div>
										<div class="news-list-slider-arrow-container-left">
											<div class="news-list-slider-arrow"><i class="fa fa-angle-left"></i></div>
										</div>
										<div class="news-list-slider-arrow-container-right">
											<div class="news-list-slider-arrow"><i class="fa fa-angle-right"></i></div>
										</div>
										<ul class="news-list-slider-control">
											<?
											foreach ($arItem["SLIDER"] as $i => $file):?>
												<li rel="<?= ($i + 1) ?>" <?
												if (!$i)
													echo 'class="current"' ?>><span></span></li>
											<?endforeach ?>
										</ul>
									</div>
									<script type="text/javascript">
									BX.ready(function () {
										new JCNewsSlider('<?=CUtil::JSEscape($this->GetEditAreaId($arItem['ID']));?>', {
											imagesContainerClassName: 'news-list-slider-container',
											leftArrowClassName: 'news-list-slider-arrow-container-left',
											rightArrowClassName: 'news-list-slider-arrow-container-right',
											controlContainerClassName: 'news-list-slider-control'
										});
									});
								</script>
									<?
								}
								else if ($arItem["SLIDER"])
								{
									?>
									<div class="news-list-item-embed-img">
										<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"]))
										{
											?>
											<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
												<img
													class="card-img-top"
													src="<?= $arItem["SLIDER"][0]["SRC"] ?>"
													width="<?= $arItem["SLIDER"][0]["WIDTH"] ?>"
													height="<?= $arItem["SLIDER"][0]["HEIGHT"] ?>"
													alt="<?= $arItem["SLIDER"][0]["ALT"] ?>"
													title="<?= $arItem["SLIDER"][0]["TITLE"] ?>"
												/>
											</a>
											<?
										}
										else
										{
											?>
											<img
												class="card-img-top"
												src="<?= $arItem["SLIDER"][0]["SRC"] ?>"
												width="<?= $arItem["SLIDER"][0]["WIDTH"] ?>"
												height="<?= $arItem["SLIDER"][0]["HEIGHT"] ?>"
												alt="<?= $arItem["SLIDER"][0]["ALT"] ?>"
												title="<?= $arItem["SLIDER"][0]["TITLE"] ?>"
											/>
											<?
										}
										?>
									</div>
									<?
								}

								?>

							<?endif;*/?>

                            <div class="card card-brand">
                                <?print_r($arItem['PROPERTIES']['CATEGORY_BRAND']['VALUE']);?>
                                <?if($arItem['PROPERTIES']['LOGO_FILE']['VALUE']):
                                    $path = CFile::GetPath($arItem['PROPERTIES']['LOGO_FILE']['VALUE']);?>
                                <div class="card-image" style="background-image: url('<?=$path?>');" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                    <!--img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="olazy loaded" data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="Master Class|Pro"-->
                                </div>
                                <?endif;?>

                                <div class="card-body">
                                    <h3><?=$arItem['NAME']?></h3>
                                    <a href="/catalog2022/paints/acrylic/master-class/">Acrylic</a><br>
                                    <a href="/catalog2022/paints/gouache/master-class/">Gouache</a><br>
                                    <a href="/catalog2022/paints/painting-sets/master-class/">Painting Sets</a><br>
                                </div>

                            </div>
<!--
							<div class="card-body">
								<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
									<h4 class="card-title">
										<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
											<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
										<?else:?>
											<?echo $arItem["NAME"]?>
										<?endif;?>
									</h4>
								<?endif;?>
								<div class="cart-container">
                                    <?if($arItem['PREVIEW_PICTURE']['SRC']):?>
                                    <div class="image">
                                        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" data-src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" data-caption="<?=$arItem['NAME']?>">
                                            <img class="card-img-top" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                                        </a>
                                    </div>
                                    <?endif;?>
								</div>
							</div>-->
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
<script>

</script>
