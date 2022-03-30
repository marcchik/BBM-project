<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="newsDate">
            <div class="big">11</div>
            <div>
                <span class="mobHide">июля</span><span class="mobShow">ИЮЛ</span>
            </div>
        </div>
        <div class="imgWrap">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/news1.png" alt="">
        </div>
        <div class="bgLayout">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="iconBlueButton">&rarr;</a>
            <div class="linkWrap">
                <a href="#"><?=$arItem['NAME']?></a>
            </div>
            <p>Вы можете посмотреть ещё больше интересных</p>
        </div>
    </div>
<?endforeach;?>