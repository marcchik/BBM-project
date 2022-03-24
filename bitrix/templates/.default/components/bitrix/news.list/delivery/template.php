<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="contentWrapper iFlex" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div>
            <div class="contentTitle2">
                <?=$arItem['NAME']?>
            </div>
            <p>
                <?=$arItem['PREVIEW_TEXT']?>
            </p>

            <div>
                <a href="#"> <span class="iconBlueButton">→</span>
                    Заказать </a>
            </div>
        </div>

        <!--проверка на существование картинки-->
        <? if(isset($arItem["PREVIEW_PICTURE"]['SRC'])): ?>
            <div class="imgWrapper">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
            </div>
        <? endif ?>
    </div>
<?endforeach;?>