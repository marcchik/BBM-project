<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="item">
        <!--проверка на существование картинки-->
        <? if(isset($arItem["PREVIEW_PICTURE"])): ?>
            <div class="bgLine">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['ALT']?>">
            </div>
        <? endif ?>

        <!-- проверка на существование иконки-->
        <? if(isset($arItem["PROPERTIES"]["ICON"]["VALUE"])): ?>

            <? $arIcon = CFile::GetFileArray($arItem["PROPERTIES"]["ICON"]["VALUE"]); ?>

            <div class="icon">
                <img src="<?=$arIcon["SRC"]?>" alt="">
            </div>
        <? endif ?>

        <!--проверка на существование заголовка-->
        <? if(isset($arItem['NAME'])): ?>
            <h3><?=$arItem['NAME']?></h3>
        <? endif ?>

        <!--проверка на существование описания-->
        <? if(isset($arItem['PROPERTIES']['DESCRIPTION']['VALUE'])): ?>
            <div class="textGray">
                <?=$arItem['PROPERTIES']['DESCRIPTION']['VALUE']?>
            </div>
        <? endif ?>
    </div>
<? endforeach; ?>