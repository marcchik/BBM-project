<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="item">
        <div class="info">
            <a href="" class="verticalButton mobHide">
                <span>Scroll to catalog</span>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/scroll.svg" alt="">
            </a>

            <!--проверка на существование большого заголовка-->
            <? if(isset($arItem['PROPERTIES']['BIG_HEADER']['VALUE'])): ?>
                <div class="title">
                    <?=$arItem['PROPERTIES']['BIG_HEADER']['VALUE']?>
                </div>
            <? endif ?>

            <!--проверка на существование маленького заголовка-->
            <? if(isset($arItem['PROPERTIES']['SMALL_HEADER']['VALUE'])): ?>
                <div class="textGray">
                    <?=$arItem['PROPERTIES']['SMALL_HEADER']['VALUE']?>
                </div>
            <? endif ?>

        </div>
        <div class="imgWrapper">
            <!--проверка на существование картинки-->
            <? if(isset($arItem["PREVIEW_PICTURE"]['SRC'])): ?>
                <div class="imgWrapper">
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="mobHide" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                </div>
            <? endif ?>

        </div>
    </div>
<? endforeach; ?>
