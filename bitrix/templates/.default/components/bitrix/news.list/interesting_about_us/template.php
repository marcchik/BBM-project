<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="contentWrapper" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="info">

            <!--проверка на существование большого заголовка-->
            <? if(isset($arItem['NAME'])): ?>
                <div class="title">
                    <?=$arItem['NAME']?>
                </div>
            <? endif ?>

            <!--проверка на существование первого абзаца-->
            <? if(isset($arItem['PROPERTIES']['FIRST_PARAGRAPH']['VALUE'])): ?>
                <p>
                    <?=$arItem['PROPERTIES']['FIRST_PARAGRAPH']['VALUE']?>
                </p>
            <? endif ?>

            <!--проверка на существование первого абзаца-->
            <? if(isset($arItem['PROPERTIES']['SECOND_PARAGRAPH']['VALUE'])): ?>
                <p>
                    <?=$arItem['PROPERTIES']['SECOND_PARAGRAPH']['VALUE']?>
                </p>
            <? endif ?>

            <div>
                <a href=""> <span class="iconBlueButton">→</span>
                    <? if(isset($arItem['PROPERTIES']['TEXT_LINK']['VALUE'])): ?>
                        <?=$arItem['PROPERTIES']['TEXT_LINK']['VALUE']?>
                    <? else: ?>
                        Связаться с нами
                    <? endif ?>
                </a>
            </div>
        </div>
        <!--проверка на существование картинки-->
        <? if(isset($arItem["PREVIEW_PICTURE"]['SRC'])): ?>
            <div class="imgWrap">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
            </div>
        <? endif ?>
    </div>
<? endforeach; ?>
