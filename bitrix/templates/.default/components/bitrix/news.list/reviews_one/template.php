<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if(empty($arResult["ITEMS"])) return;

?>

<?if(!empty($arResult)):?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?if(strlen($arItem["PREVIEW_TEXT"])>2):?>
	<div class="sb_reviewed">

		<!-- проверка на существование картинки-->
		<?if(isset($arItem["PREVIEW_PICTURE"])):?>
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt="<?=$arItem["NAME"]?>">
		<?endif?>

		<span class="sb_rw_name"><?=$arItem["NAME"]?></span>
		<span class="rw_job"><?=$arItem["PROPERTIES"]["POST"]["VALUE"]?></span>
		<span class="rw_job"><?=$arItem["PROPERTIES"]["COMPANY_NAME"]["VALUE"]?></span>

		<!-- проверка на существование описания-->
		<?if(isset($arItem["PREVIEW_TEXT"])):?>
			<p>
				“<?=$arItem["PREVIEW_TEXT"]?>”
			</p>
		<?endif?>

		<a href =" <?=$arItem["DETAIL_PAGE_URL"]?>"><span class="rw_job">Перейти к отзыву</span></a>

			<div class="clearboth"></div>
			<div class="sb_rw_arrow"></div>
	</div>
	<?endif?>
<?endforeach;?>
<?endif?>

