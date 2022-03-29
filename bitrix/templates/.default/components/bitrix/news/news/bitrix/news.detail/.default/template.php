<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="pageContent">
    <section class="deliveryInfo lnPage">
        <div class="bgText smallText">news news</div>
        <div class="contentWrapper iFlex">
            <div>
                <div class="contentTitle2 news">GE использует технологии<br> Dell для упрощения своих<br> глобальных ИТ-операций</div>
                <p>3 Сентября, 2021</p>
            </div>
            <div class="imgWrapper">
                <img src="img/delivery.png" alt="">
            </div>
        </div>
    </section>
    <section class="newsContent articleWrapper">
        <div class="contentWrapper">
            <div class="contentTitle3">Основные моменты:</div>
            <ul class="stList">
                <li>
                    <span>GE выбирает Dell Technologies APEX для согласования ИТ-операций со своей бизнес-стратегией;</span>
                </li>
                <li>
                        <span>Dell Technologies предлагает ИТ как услугу с портфелем APEX, помогая GE использовать и масштабировать
                            ИТ по мере необходимости для повышения автоматизации и экономии;</span>
                </li>
                <li>
                    <span>Эта услуга поможет GE упростить и согласовать свою ИТ-инфраструктуру.</span>
                </li>
            </ul>
            <p>Dell Technologies (DELL) и GE расширяют свои отношения, чтобы помочь высокотехнологичной промышленной компании в управлении ее ИТ-инфраструктурой
                с помощью модели как услуга, что позволяет GE более легко масштабировать свою ИТ-инфраструктуру по всем направлениям. 170 стран.</p>

            <p>Более 125 лет GE выступает катализатором инноваций и стремится использовать свои передовые технологии и глобальный охват для
                предоставления решений, которые сделают мир более эффективным, надежным и безопасным. Его соглашение с Dell является ключом
                к выполнению этого обещания и к созданию более компактных и автономных бизнес-единиц.</p>

            <p>«Когда ваш бизнес столь же разнообразен, как многонациональная компания, такая как GE, простейшие изменения в вашей инфраструктуре могут вызвать эффект домино, влияя на сложную глобальную сеть», - сказал Билл Сканнелл, президент подразделения глобальных продаж и обслуживания клиентов Dell Technologies. «С тех пор, как мы начали работать с GE, нашей целью было помочь им упростить их обширные взаимосвязанные ИТ-ресурсы и предоставить простой способ адаптации к изменениям в бизнес-стратегии. Благодаря индивидуальным решениям APEX компания GE может обеспечить автоматизацию
                и экономию средств в различных сферах деятельности, сохраняя при этом предсказуемость, согласовывая свои расходы с коммерческой ценностью, получаемой от технологии»</p>

            <p>Используя локальное облако от Dell Technologies, GE может удовлетворить потребности бизнеса и стать более гибкой
                за счет быстрого перехода ИТ-ресурсов без серьезной реорганизации своей инфраструктуры. Подход частного облака
                помогает GE создать удобную среду для владельцев приложений с помощью автоматизированных сервисов выделения ресурсов
                и данных, которые ускоряют развертывание приложений и сервисов.
                GE использует портфель Dell Technologies APEX для быстрой перебалансировки рабочих нагрузок в своих бизнес-подразделениях,
                не оказывая значительного влияния на бизнес и расходы. </p>
            <img src="img/newspage1.png" alt="">
            <p>«Мы должны иметь возможность меняться так же быстро, как и мир, независимо от того, производим ли мы новую реактивную турбину в
                Огайо или ультразвуковую технологию на основе искусственного интеллекта в Бангалоре», - сказала Нэнси Андерсон, директор по
                информационным технологиям GE. «Работая с центрами обработки данных по всему миру, мы работаем с Dell над созданием единого
                способа поддержки всех наших бизнес-подразделений, который гарантирует, что нужные ИТ-ресурсы попадают в нужные группы, когда
                они больше всего в них нуждаются».</p>

            <p>Используя утилиту Dell Technologies APEX Data Center Utility, GE может сочетать архитектуру автоматизации и программного обеспечения
                для поддержки растущих рабочих нагрузок - от традиционных ИТ-приложений до анализа данных. Утилита APEX Data Center Utility
                позволяет GE увеличивать или уменьшать масштаб своих центров обработки данных, хранилищ и вычислительных ресурсов по
                запросу, поскольку компания применяет подход, который адаптируется
                к стратегии каждого бизнес-подразделения. Это позволит GE оплачивать то, что она использует, помогая управлять расходами и
                корректировать свои расходы
                в соответствии с изменяющейся динамикой. GE также использует Dell EMC PowerStore и Dell EMC VxRail для поддержки своей
                стратегии трансформации ИТ.</p>
        </div>
    </section>
</div>

<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
        <?pr($arResult);?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>