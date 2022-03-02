<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(empty($arResult["ITEMS"])) return;
?>

<section class="services">
    <div class="container">
        <div class="services__inner">
            <div class="services__header">
                <div class="services__header-title">Наши основные услуги</div>
                <a href="#" class="services__header-btn btn-link open__modal">Оставить заявку</a>
            </div>
            <div class="services__items">

                    <? foreach($arResult["ITEMS"] as $arItem): ?>
                            <a href="#" class="services__item">

                                <!-- проверка на существование картинки-->
                                <? if(isset($arItem["PREVIEW_PICTURE"])): ?>
                                    <div class="services__item-img">
                                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                    </div>
                                <? endif ?>

                                <div class="services__item-info">


                                    <!-- проверка на существование иконки-->
                                    <? if(isset($arItem["PROPERTIES"]["ICON"]["VALUE"])): ?>

                                        <? $arIcon = CFile::GetFileArray($arItem["PROPERTIES"]["ICON"]["VALUE"]); ?>

                                        <div class="services__item-info-icon icon-circle">
                                            <img src="<?=$arIcon["SRC"]?>" alt="" class="services__item-info-icon-img1 icon-circle-img">
                                        </div>
                                    <? endif ?>

                                    <div class="services__item-info-subtitle"><?=$arItem["NAME"]?></div>

                                    <!-- проверка на существование описания-->
                                    <? if(isset($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"])): ?>
                                        <div class="services__item-info-title"><?=$arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]?></div>
                                    <? endif ?>

                                    <div class="services__item-info-btn btn-black"></div>
                                </div>

                            </a>
                    <?endforeach;?>

            </div>
        </div>
    </div>
</section>




