<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */
?>

<div class="index-catalog filter-result" data-filter-url="<?=$arResult['SECTION_PAGE_URL']; ?>">
    <div class="row">
        <? $this->setFrameMode(true);
        if (!empty($arResult['ITEMS']) && !empty($arResult['ITEM_ROWS'])) :
        	$areaIds = array();
        	foreach ( $arResult['ITEMS'] as $item ) :
        		$img_url = ($item['PREVIEW_PICTURE'] !== NULL && $item['PREVIEW_PICTURE']['SRC'] != '/bitrix/components/bitrix/catalog.section/templates/.default/images/no_photo.png')? $item['PREVIEW_PICTURE']['SRC'] : SITE_TEMPLATE_PATH.'/images/intro_logo.svg';
        		$add_class = ($item['PREVIEW_PICTURE'] !== NULL && $item['PREVIEW_PICTURE']['SRC'] != '/bitrix/components/bitrix/catalog.section/templates/.default/images/no_photo.png') ? '' :' with-placeholder';
                $is_new = $item['PROPERTY_SHOW_IN_TOP_VALUE'];
                ?>
                <div class="col-4to12 ">
                    <div class="card-wrapper scalabel-hover">
                        <div style="display: none"><?php print_r($item['PROPERTY_SHOW_IN_TOP_VALUE']);?></div>
                        <div class="card">
                            <a href="<?=$item['DETAIL_PAGE_URL']; ?>" class="card-image" target="_blank">
                                <img    class="olazy<?=$add_class; ?>"
										data-src="<?=$img_url; ?>" <?/* tim="/timthumb.php?src=&w=365&h=370&zc=2&cc=fff&q=90" */?> 
                                        src="<?=$img_url; ?>"
                                        alt="<?=$item['NAME']; ?>"
                                    />
                            </a>
                            <div class="card-body">
								<?
								//if(LANGUAGE_ID==='ru')$bid = 25; else $bid = 45;
								$bid = 45;

								$NOTNEW = CIBlockElement::GetProperty($bid, $item['ID'], array(), Array("CODE"=>"NOTNEW"));
								if($NOTNEW = $NOTNEW->GetNext())$NOTNEW = $NOTNEW['VALUE'];

                                if ($item['PROPERTY_SHOW_IN_TOP_VALUE'] && $NOTNEW !== 1) printf(
                                    '<span class="label">%s</span>', 
									//GetMessage("CT_NEW_ITEM")
									//Sait dumaet chto on a ru versii i papka en localizacii ne podrubetsia 
									'New'
                                );
								?>
                                <h3><a href="<?=$item['DETAIL_PAGE_URL']; ?>"><?=$item['NAME']; ?></a></h3>
                                <p><?=$item['PREVIEW_TEXT']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?
        	endforeach;
            if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                <p><?=$arResult["NAV_STRING"]?></p>
            <?endif;
        	foreach ( $arResult['ITEM_ROWS'] as $rowData ) {
        		$rowItems = array_splice( $arResult['ITEMS'], 0, $rowData['COUNT'] );
        	}
        endif; ?>
    </div>
</div>
