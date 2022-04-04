<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="deliveryInfo lnPage">
    <div class="bgText smallText">news news</div>
    <div class="contentWrapper iFlex">
        <div>
            <div class="contentTitle2 news">GE использует технологии<br> Dell для упрощения своих<br> глобальных ИТ-операций</div>
            <p>3 Сентября, 2021</p>
        </div>
        <div class="imgWrapper">
            <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arResult['PREVIEW_PICTURE']['ALT']?>">
        </div>
    </div>
</section>
<section class="newsContent articleWrapper">
    <div class="contentWrapper">
        <?=$arResult['PREVIEW_TEXT']?>
        <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>">
        <?=$arResult['DETAIL_TEXT']?>
    </div>
</section>
