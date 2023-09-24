<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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

class Element {

    private $arItem;

    public function __construct (array $arItem) {
        $this->arItem = $arItem;
    }

    public function echoTitle() {
        if ($this->arItem['PROPERTIES']['CATALOG_REF']['VALUE'] !== '') {
            $beginatag = '<a href="'.$this->arItem['PROPERTIES']['CATALOG_REF']['VALUE'].'">';
            $endatag = '</a>';
        }?>
        <?=$beginatag;?><h3><?=$this->arItem['NAME'];?></h3><?=$endatag;
    }

    public function echoPreviewImage($width = 300, $height = 300) {
        if ($this->arItem['PREVIEW_PICTURE'] != '') {
            if ($this->arItem['PROPERTIES']['PICTURE_ANONCE_WIDTH']['VALUE'] != '') {
                $width = (int)$this->arItem['PROPERTIES']['PICTURE_ANONCE_WIDTH']['VALUE'];
            }
            if ($this->arItem['PROPERTIES']['PICTURE_ANONCE_HEIGHT']['VALUE'] != '') {
                $height = (int)$this->arItem['PROPERTIES']['PICTURE_ANONCE_HEIGHT']['VALUE'];
            }
            $file = CFile::ResizeImageGet(
                $this->arItem['PREVIEW_PICTURE'],
                array('width' => $width, 'height' => $height),
                BX_RESIZE_PROPORTIONAL,
                true
            );?>
            <div class="image respond"><?=CFile::ShowImage($file['src']);?></div> <?
        }
    }

    public function echoFormsImages($width = 300, $height = 300) {
        if ($this->arItem['PROPERTIES']['FORMS'] != '') {
            if ($this->arItem['PROPERTIES']['PICTURE_ANONCE_WIDTH']['VALUE'] != '')
                $width = (int)$this->arItem['PROPERTIES']['PICTURE_ANONCE_WIDTH']['VALUE'];

            if ($this->arItem['PROPERTIES']['PICTURE_ANONCE_HEIGHT']['VALUE'] != '')
                $height = (int)$this->arItem['PROPERTIES']['PICTURE_ANONCE_HEIGHT']['VALUE'];

            foreach ($this->arItem['PROPERTIES']['FORMS']['VALUE'] as $photo) :
                $file = CFile::ResizeImageGet(
                    $photo,
                    array('width' => $width, 'height' => $height),
                    BX_RESIZE_PROPORTIONAL,
                    true
                );?>
            <div class="image respond">
                <?=CFile::ShowImage($file['src']);?>
                </div>
            <? endforeach;
        }
    }

    public function echoButton_arrow ($url) {
        if ($url != '') {
            if ($this->arItem['PROPERTIES']['BUTTON_AREA']['VALUE_XML_ID'] !== '') {
                echo $this->arItem['PROPERTIES']['BUTTON_AREA']['VALUE_XML_ID'];
            }
            ?>
            <a style="position: absolute; top: 30px;right: 30px;"
            href="<?=$url;?>" class="btn btn-small bg-red badge-download">
                <svg width="20" height="35">
                    <use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_right"></use>
                </svg>
            </a>
        <?}
    }

    public function echoButton ($url) {
        if ($url != '') {?>
        <!--<div style="padding-bottom: 100px;"></div>-->
        <div class="button_wrap">
        <button class="btn btn-wide bg-red centered" onclick="document.location='<?=$url;?>'">
        <div class="btn-text">Show in catalog</div></button></div>
        <?}
    }

    public function echoImages() {

    }
}
//if($USER->isAdmin()) {echo('<pre>');print_r($arResult["ITEMS"][0]);echo('</pre>');}
//print_r($arResult["ITEMS"][0]['NAME']);
//print_r($arResult["ITEMS"][0]['DETAIL_TEXT']);
//print_r($arResult["ITEMS"][0]['PREVIEW_PICTURE']);
//$file = CFile::ResizeImageGet($arResult["ITEMS"][0]['PREVIEW_PICTURE'],
//array('width' => 300, 'height' => 300), BX_RESIZE_IMAGE_EXACT, true);
/*echo ("<img src=".$file['src'].
    " width=".$file['width'].
    " height=".$file['height'].
    " alt=".$arResult["ITEMS"][0]['PREVIEW_PICTURE']['ALT'].">");*/
//echo CFile::ShowImage($arResult["ITEMS"][0]['PREVIEW_PICTURE']['SRC']);
//$arItem = $arResult["ITEMS"][0];
//$dopItems = array('0' => $arResult["ITEMS"][1], '1' => $arResult["ITEMS"][2]);
?>

<? foreach ($arResult["ITEMS"] as $category => $blocks) : ?>
    <div class="block">
        <!-- osnovnoy-block -->
        <?//print_r($blocks['Y']);?>
        <? if ($blocks['Y'] !== ''): ?>
            <? foreach ($blocks['Y'] as $arItem) : ?>
            <h2 class="title-block" href="#<?=$arItem['PROPERTIES']['TYPE']['VALUE'];?>"><?=$arItem['PROPERTIES']['TYPE']['VALUE'];?></h2>
                <? if ($arItem !== ''): ?><?/*='<pre>';print_r($arItem);echo('</pre>');*/?>
                    <? $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>

                    <div class="card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6to12">
                                <div style="padding-bottom: 30px;"></div>
                                <? $element = new Element($arItem);
                                $element->echoPreviewImage(500,500);
                                ?>
                                </div>
                                <div class="col-6to12">
                                    <h3 class="big"><?=$arItem['NAME'];?></h3>
                                    <div class="desc"><?=$arItem['PREVIEW_TEXT'];?></div>
                                    <div class="image">
                                        <? foreach ($arItem['PROPERTIES']['FORMS']['VALUE'] as $photo) :
                                            $file = CFile::ResizeImageGet(
                                                $photo,
                                                array('width' => 1700, 'height' => 250),
                                                BX_RESIZE_PROPORTIONAL,
                                                true
                                            );?>
                                        <img width="340" src="<?=$file['src']?>">
                                        <? endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <? if ($arItem['PROPERTIES']['VYKRASKA']['VALUE'] !== '') : ?>
                                    <div class="kad col-3to12">
                                        <div class="benefit">
                                            <div class="badge badge-hollow">
                                                <a href="<?=$arItem['PROPERTIES']['VYKRASKA']['VALUE'];?>"
                                                   class="btn btn-small bg-green badge-download">
                                                    <svg width="20" height="35">
                                                        <use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_down"></use>
                                                    </svg>
                                                </a>
                                                <h4 class="badge-title">Colour palette</h4>
                                            </div>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <? if ($arItem['PROPERTIES']['INSTRUCTION']['VALUE'] !== '') : ?>
                                    <div class="kad col-3to12">
                                        <div class="benefit">
                                            <div class="badge badge-hollow">
                                                <a href="<?=$arItem['PROPERTIES']['INSTRUCTION']['VALUE'];?>"
                                                   class="btn btn-small bg-green badge-download">
                                                    <svg width="20" height="35">
                                                        <use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_down"></use>
                                                    </svg>
                                                </a>
                                                <h4 class="badge-title">Instruction</h4>
                                            </div>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <? if ($arItem['PROPERTIES']['CATALOG_REF']['VALUE'] !== '') : ?>
                                    <div class="kad col-3to12">
                                        <div class="benefit">
                                            <div class="badge badge-hollow">
                                                <a href="<?=$arItem['PROPERTIES']['CATALOG_REF']['VALUE'];?>"
                                                   class="btn btn-small bg-green badge-download">
                                                    <svg width="20" height="35">
                                                        <use xlink:href="/local/templates/cessel_webgate_theme/images/icons/sprite.svg#icon_arrow_down"></use>
                                                    </svg>
                                                </a>
                                                <h4 class="badge-title">Catalog</h4>
                                            </div>
                                        </div>
                                    </div>
                                <? endif; ?>
                            </div>
                        </div>
                    </div><br>
                <? endif; ?>
            <? endforeach; ?>
        <? endif; ?>

        <!-- dop-sets -->
        <?//print_r($blocks['N']);?>
        <? if ($blocks['N'] !== ''): ?>
            <div style="padding-bottom: 20px"></div>
            <div class="row">
                <? foreach ($blocks['N'] as $arItem): ?><?/*echo('<pre>');print_r($arItem['ID']);echo('</pre>');*/?>
                    <? if ($arItem !== ''): ?>
                    <? $cl = 'col-3to12';
                    if ($arItem['PROPERTIES']['WIDTH']['VALUE'] != '')
                        $cl = $arItem['PROPERTIES']['WIDTH']['VALUE'];
                    elseif ($arItem['PROPERTIES']['WIDTH_LIST']['VALUE_XML_ID'] != '')
                        $cl = $arItem['PROPERTIES']['WIDTH_LIST']['VALUE_XML_ID'];
                    ?>

                        <div class="pad <?=$cl;?>">
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
                            <?
                            $height_block = $arItem['PROPERTIES']['HEIGHT_BLOCK']['VALUE'];
                            //echo $height_block;
                            if ($height_block) $style = 'height: '. $height_block. 'px;';?>

                            <div class="card" id="<?=$this->GetEditAreaId($arItem['ID']);?>"  style="<?=$style;?>"><?$style='';?>
                                <div class="card-body" <!--style="margin-bottom: 100px; width: 100%;"-->

                                    <? $element = new Element($arItem);
                                    //$element->echoButton_arrow($arItem['PROPERTIES']['CATALOG_REF']['VALUE']);

                                    //echo ('test');print_r($arItem['PROPERTIES']['TYPE_VIEW_LIST']['VALUE_XML_ID']);
                                    if ($arItem['PROPERTIES']['TYPE_VIEW']['VALUE'] === 'text_right' ||
                                    $arItem['PROPERTIES']['TYPE_VIEW_LIST']['VALUE_XML_ID'] == 'text-right') {
                                        $text_right = true;
                                        $a1 = '<div class="row">'; $a2 = '</div>';
                                        $p1 = '<div class="col-6to12">'; $p2 = '</div>';
                                        ?><?
                                    } elseif ($arItem['PROPERTIES']['TYPE_VIEW']['VALUE'] === 'text_left' ||
                                    $arItem['PROPERTIES']['TYPE_VIEW_LIST']['VALUE_XML_ID'] == 'text-left') {
                                        $text_left = true;
                                        $a1 = '<div class="row">'; $a2 = '</div>';
                                        $p1 = '<div class="col-6to12">'; $p2 = '</div>';
                                    } if ($text_left || $text_right)
                                        $isType = true;
                                    ?>
                                    <? if ($isType)
                                        $element->echoTitle();
                                    ?><div style="padding-bottom: 15px"></div><?
                                    ?>
                                    <?=$a1;?>
                                        <?=$p1;?>
                                            <?if ($text_left) {?>
                                                <?=$arItem['PREVIEW_TEXT'];?>
                                            <?} else {?>
                                                <?$element->echoPreviewImage(300, 300);?>
                                                <?$element->echoFormsImages(300, 300);?>
                                            <?}?>
                                        <?=$p2;?>
                                        <?=$p1;?>
                                            <? if(!$isType) {
                                                $element->echoTitle();
                                            }?>
                                            <?if ($text_left) {?>
                                                <?$element->echoPreviewImage(300, 300);?>
                                                <?$element->echoFormsImages(300, 300);?>
                                            <?} else {?>
                                                <?=$arItem['PREVIEW_TEXT'];?>
                                            <?}?>
                                        <?=$p2;?>
                                    <?=$a2;?>
                                    <?$element->echoButton($arItem['PROPERTIES']['CATALOG_REF']['VALUE']);?>
                                </div>
                                <?if ($text_right) {
                                    unset($text_right);
                                    unset($a1); unset($a2);
                                    unset($p1); unset($p2);
                                } elseif ($text_left) {
                                    unset($text_left);
                                    unset($a1); unset($a2);
                                    unset($p1); unset($p2);
                                }
                                ?>
                            </div>
                        </div>
                    <? endif; ?>
                <? endforeach; ?>
            </div>
        <? endif; ?>
    </div>
<? endforeach; ?>