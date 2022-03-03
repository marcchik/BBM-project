
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(empty($arResult["ITEMS"])) return;
?>


<div class="baner-home__slider">

    <a href="#" class="baner-home__btn btn-link open__modal">Оставить заявку</a>

    <div class="swiper-container baner-home-swiper">
        <div class="swiper-wrapper">

            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <div class="swiper-slide">
                    <div class="baner-home__slider-wrap ">
                        <!-- проверка на существование картинки-->
                        <? if(isset($arItem["PREVIEW_PICTURE"])): ?>
                            <div class="baner-home__slider-wrap-img">
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                            </div>
                        <? endif ?>
                        <div class="baner-home__slider-wrap-text">
                            <?=$arItem["NAME"]?>
                        </div>
                    </div>
                </div>
            <? endforeach ?>

        </div>
    </div>
</div>





