<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(empty($arResult["ITEMS"])) return;
?>

<section class="structure">
    <div class="container">
        <div class="structure__inner">
            <div class="structure__title">
                Структура компании
            </div>
            <div class="structure__items">

                <? foreach($arResult["ITEMS"] as $arItem): ?>
                        <a href="#" class="structure__item">

                            <!-- проверка на существование картинки-->
                            <? if(isset($arItem["PREVIEW_PICTURE"])): ?>
                                <div class="structure__item-img">
                                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                </div>
                            <? endif ?>



                            <div class="structure__item-info">
                                <!-- проверка на существование иконки-->
                                <? if(isset($arItem["PROPERTIES"]["ICON"]["VALUE"])): ?>

                                    <? $arIcon = CFile::GetFileArray($arItem["PROPERTIES"]["ICON"]["VALUE"]); ?>

                                    <div class="structure__item-info-icon icon-circle icon-circle1">
                                        <img src="<?=$arIcon["SRC"]?>" alt=""
                                             class="structure__item-info-icon-img1 icon-circle-img">
                                    </div>

                                <? endif ?>

                                <div class="structure__item-info-subtitle">
                                    <?=$arItem["SUB_TITLE"]?>
                                </div>

                                <div class="structure__item-info-title">
                                    <?=$arItem["NAME"]?>
                                </div>

                                <!-- проверка на существование описания-->
                                <? if(isset($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"])): ?>
                                    <div class="structure__item-info-text">
                                        <?=$arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]?>
                                    </div>
                                <? endif ?>
                                <div class="structure__item-info-btn btn-black">
                                </div>
                            </div>

                        </a>
                <?endforeach;?>

            </div>
        </div>
    </div>
</section>





