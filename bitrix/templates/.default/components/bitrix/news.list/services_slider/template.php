<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
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

            <div class="textGray">
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
            </div>
            <div>
                <a href="#"> <span class="iconBlueButton">→</span>
                    <? if(isset($arItem['PROPERTIES']['TEXT_LINK']['VALUE'])): ?>
                        <?=$arItem['PROPERTIES']['TEXT_LINK']['VALUE']?>
                    <? else: ?>
                        Записаться на ремонт
                    <? endif ?>
                </a>
            </div>
        </div>

        <!--проверка на существование картинки-->
        <? if(isset($arItem["PREVIEW_PICTURE"]['SRC'])): ?>
            <div class="imgWrapper">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
            </div>
        <? endif ?>
    </div>
<? endforeach; ?>
