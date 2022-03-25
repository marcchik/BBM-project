<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <!--проверка на существование первого абзаца-->
        <div class="title">
            <!-- проверка на существование иконки-->
            <? if(isset($arItem["PROPERTIES"]["ICON"]["VALUE"])): ?>

                <? $arIcon = CFile::GetFileArray($arItem["PROPERTIES"]["ICON"]["VALUE"]); ?>

                <div class="icon">
                    <img src="<?=$arIcon["SRC"]?>" alt="<?=$arItem["PROPERTIES"]["ICON"]["NAME"]?>">
                </div>
            <? endif ?>
            <?=$arItem['NAME']?>
        </div>

        <!-- проверка на существование данных-->
        <? if(isset($arItem["PROPERTIES"]["ITEM"]["VALUE"])): ?>
            <? foreach ($arItem["PROPERTIES"]["ITEM"]["VALUE"] as $item) : ?>
                <p>
                    <?=$item?>
                </p>
            <? endforeach; ?>
        <? endif ?>
    </li>
<?endforeach;?>