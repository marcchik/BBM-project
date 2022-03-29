<?
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Dell");
?><div class="pageContent">
 <section class="bestPrices bgGray main">
	<div class="bpContentWrapper">
		<div class="bgText">
			 dell
		</div>
		<div class="left">
			<div class="owl-carousel introSlider">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"home_slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "home_slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "page_home",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"BIG_HEADER",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
			</div>
		</div>
        <div class="right">
            <div class="messengerLink">
                <div class="icon">
                    <svg class="iconMessage" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.52348 7.17562C5.66465 7.17562 4.96842 7.87185 4.96842 8.73068C4.96842 9.58952 5.66465 10.2857 6.52348 10.2857C7.38232 10.2857 8.07854 9.58952 8.07854 8.73068C8.07854 7.87185 7.38232 7.17562 6.52348 7.17562Z" fill="none"></path>
                        <path d="M11.4997 7.17562C10.6408 7.17562 9.94461 7.87185 9.94461 8.73068C9.94461 9.58952 10.6408 10.2857 11.4997 10.2857C12.3585 10.2857 13.0547 9.58952 13.0547 8.73068C13.0547 7.87185 12.3585 7.17562 11.4997 7.17562Z" fill="none"></path>
                        <path d="M14.9208 8.73068C14.9208 7.87185 15.617 7.17562 16.4759 7.17562C17.3347 7.17562 18.0309 7.87185 18.0309 8.73068C18.0309 9.58952 17.3347 10.2857 16.4759 10.2857C15.617 10.2857 14.9208 9.58952 14.9208 8.73068Z" fill="none"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6012 1.07082C13.2495 0.784987 9.88025 0.768399 6.5259 1.02122L6.28551 1.03933C3.08668 1.28043 0.614258 3.94621 0.614258 7.15411V17.75C0.614258 18.0783 0.786765 18.3824 1.06852 18.5509C1.35027 18.7193 1.69982 18.7273 1.98898 18.5719L6.85419 15.9573C7.0805 15.8356 7.33341 15.772 7.59033 15.772H18.7574C20.1658 15.772 21.3727 14.7651 21.6252 13.3795C22.1368 10.5714 22.1773 7.6977 21.7448 4.87631L21.6173 4.04488C21.3853 2.53119 20.147 1.37321 18.6212 1.24308L16.6012 1.07082ZM6.66615 2.88201C9.92102 2.63669 13.1903 2.65279 16.4426 2.93014L18.4626 3.10241C19.1299 3.15931 19.6714 3.66569 19.7728 4.32761L19.9003 5.15904C20.3013 7.77563 20.2639 10.4407 19.7894 13.045C19.6985 13.5436 19.2642 13.9059 18.7574 13.9059H7.59033C7.02511 13.9059 6.4687 14.046 5.97082 14.3135L2.48033 16.1894V7.15411C2.48033 4.92241 4.20037 3.06785 6.42576 2.90013L6.66615 2.88201Z" fill="none"></path>
                    </svg>

                    <img class="iconCross" src="<?=SITE_TEMPLATE_PATH?>/img/icons/cross.svg" alt="">
                </div>
                <ul class="messangersCol">
                    <li>
                        <a href="">
                            <svg class="iconWeChat" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.3165 13.6922C15.8126 13.0271 16.1531 12.2592 16.3128 11.4449C16.4725 10.6307 16.4473 9.79107 16.2391 8.9879C16.0309 8.18473 15.645 7.43856 15.1099 6.80446C14.5747 6.17035 13.9041 5.66451 13.1473 5.32424C12.9825 4.3759 12.6037 3.47761 12.0397 2.69762C11.4756 1.91764 10.7412 1.27647 9.89227 0.822847C9.04331 0.369223 8.10212 0.115075 7.14021 0.0797148C6.17831 0.0443545 5.221 0.228712 4.34102 0.618779C3.46105 1.00885 2.68156 1.59436 2.06178 2.33083C1.44201 3.0673 0.998253 3.93535 0.764239 4.86903C0.530225 5.8027 0.512108 6.77743 0.711263 7.71916C0.910419 8.66089 1.32161 9.54483 1.91359 10.3038L0.813169 11.3963C0.703319 11.5077 0.628905 11.649 0.599318 11.8026C0.56973 11.9562 0.586293 12.1151 0.646919 12.2592C0.70631 12.4038 0.807166 12.5276 0.936778 12.6149C1.06639 12.7023 1.21896 12.7493 1.37525 12.7501H5.87984C6.32843 13.6958 7.0357 14.4951 7.91976 15.0556C8.80382 15.616 9.82853 15.9146 10.8753 15.9167H15.6253C15.7815 15.916 15.9341 15.8689 16.0637 15.7816C16.1933 15.6942 16.2942 15.5705 16.3536 15.4259C16.4142 15.2817 16.4308 15.1228 16.4012 14.9693C16.3716 14.8157 16.2972 14.6743 16.1873 14.563L15.3165 13.6922ZM5.33359 10.3751C5.33467 10.6402 5.35584 10.9048 5.39692 11.1667H3.28317L3.56025 10.8976C3.63445 10.824 3.69335 10.7364 3.73354 10.6399C3.77373 10.5435 3.79443 10.44 3.79443 10.3355C3.79443 10.231 3.77373 10.1275 3.73354 10.031C3.69335 9.93456 3.63445 9.847 3.56025 9.77341C3.11657 9.33459 2.76483 8.81172 2.52559 8.23537C2.28635 7.65903 2.16442 7.04076 2.16692 6.41674C2.16692 5.15696 2.66736 3.94878 3.55816 3.05798C4.44896 2.16718 5.65714 1.66674 6.91692 1.66674C7.89992 1.66083 8.86006 1.96313 9.66236 2.53113C10.4647 3.09914 11.0688 3.90429 11.3898 4.83341C11.2157 4.83341 11.0494 4.83341 10.8753 4.83341C9.40551 4.83341 7.99597 5.41726 6.9567 6.45652C5.91744 7.49579 5.33359 8.90533 5.33359 10.3751ZM13.6778 14.3334L13.7173 14.373H10.8753C9.95956 14.3714 9.07276 14.0523 8.36592 13.4702C7.65908 12.888 7.17593 12.0789 6.99877 11.1805C6.82162 10.2821 6.96142 9.35005 7.39435 8.54317C7.82729 7.73629 8.52659 7.10447 9.37311 6.75534C10.2196 6.4062 11.161 6.36136 12.0369 6.62845C12.9128 6.89554 13.6689 7.45804 14.1766 8.22012C14.6843 8.98219 14.912 9.89671 14.8211 10.8079C14.7301 11.719 14.3261 12.5705 13.6778 13.2172C13.5286 13.3633 13.4432 13.5625 13.4403 13.7713C13.4407 13.8761 13.4619 13.9797 13.5027 14.0762C13.5434 14.1727 13.603 14.2601 13.6778 14.3334Z" fill="none"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg class="iconWs" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.36724 33.3911L8.76998 33.0004L8.09002 33.2173C7.67666 33.3492 7.12251 33.5214 6.49304 33.717C5.6119 33.9907 4.58316 34.3103 3.5864 34.6295C3.69996 34.2695 3.81574 33.9016 3.92998 33.5356C4.36589 32.139 4.8171 30.656 4.93122 29.9866L5.03554 29.3748L4.67707 28.8681C2.67573 26.0395 1.5 22.5873 1.5 18.856C1.5 9.27056 9.27056 1.5 18.856 1.5C28.4415 1.5 36.212 9.27056 36.212 18.856C36.212 28.4415 28.4415 36.212 18.856 36.212C15.3514 36.212 12.0936 35.1749 9.36724 33.3911Z" stroke="none" stroke-width="3"></path>
                                <path d="M28.2838 24.8242C28.2838 25.1636 28.2082 25.5124 28.0477 25.8518C27.8872 26.1912 27.6795 26.5118 27.4056 26.8135C26.943 27.3226 26.4331 27.6903 25.8571 27.926C25.2906 28.1617 24.6768 28.2842 24.0159 28.2842C23.0528 28.2842 22.0236 28.058 20.9377 27.596C19.8519 27.134 18.766 26.5118 17.6896 25.7293C16.6038 24.9373 15.5746 24.0605 14.5926 23.0894C13.6201 22.1089 12.7419 21.0812 11.9582 20.0065C11.184 18.9317 10.5608 17.8569 10.1076 16.7915C9.65435 15.7167 9.42773 14.6891 9.42773 13.7085C9.42773 13.0674 9.54104 12.4546 9.76765 11.8889C9.99426 11.3138 10.3531 10.7859 10.8535 10.3145C11.4578 9.72049 12.1188 9.42822 12.8175 9.42822C13.0819 9.42822 13.3462 9.48479 13.5823 9.59793C13.8278 9.71106 14.045 9.88077 14.2149 10.1259L16.4055 13.2089C16.5755 13.4446 16.6982 13.6614 16.7832 13.8688C16.8682 14.0668 16.9154 14.2648 16.9154 14.4439C16.9154 14.6702 16.8493 14.8965 16.7171 15.1133C16.5943 15.3302 16.4149 15.5564 16.1883 15.7827L15.4707 16.5275C15.3669 16.6312 15.3197 16.7538 15.3197 16.9046C15.3197 16.9801 15.3291 17.0461 15.348 17.1215C15.3763 17.1969 15.4046 17.2535 15.4235 17.31C15.5935 17.6212 15.8862 18.0266 16.3016 18.5168C16.7265 19.0071 17.1798 19.5068 17.6708 20.0065C18.1806 20.5061 18.6716 20.9681 19.1721 21.3924C19.6631 21.8072 20.0691 22.09 20.3901 22.2597C20.4373 22.2786 20.494 22.3069 20.5601 22.3352C20.6356 22.3635 20.7111 22.3729 20.7961 22.3729C20.9566 22.3729 21.0794 22.3163 21.1832 22.2126L21.9008 21.5055C22.1369 21.2698 22.3635 21.0907 22.5807 20.9775C22.7979 20.8455 23.015 20.7795 23.2511 20.7795C23.4305 20.7795 23.6193 20.8173 23.8271 20.9021C24.0348 20.987 24.252 21.1095 24.488 21.2698L27.6134 23.4854C27.8589 23.6551 28.0288 23.8531 28.1327 24.0888C28.2271 24.3245 28.2838 24.5602 28.2838 24.8242Z" fill="none"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg class="iconPhone" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 13.7475C16 14.0175 15.9399 14.295 15.8122 14.565C15.6845 14.835 15.5193 15.09 15.3015 15.33C14.9334 15.735 14.5278 16.0275 14.0696 16.215C13.6189 16.4025 13.1307 16.5 12.6049 16.5C11.8388 16.5 11.02 16.32 10.1562 15.9525C9.29244 15.585 8.42864 15.09 7.57236 14.4675C6.70856 13.8375 5.88983 13.14 5.10866 12.3675C4.335 11.5875 3.63645 10.77 3.01302 9.915C2.3971 9.06 1.90135 8.205 1.54081 7.3575C1.18027 6.5025 1 5.685 1 4.905C1 4.395 1.09014 3.9075 1.27041 3.4575C1.45068 3 1.7361 2.58 2.1342 2.205C2.61492 1.7325 3.14071 1.5 3.69654 1.5C3.90686 1.5 4.11718 1.545 4.30496 1.635C4.50025 1.725 4.67301 1.86 4.80821 2.055L6.55083 4.5075C6.68603 4.695 6.78368 4.8675 6.85128 5.0325C6.91888 5.19 6.95644 5.3475 6.95644 5.49C6.95644 5.67 6.90386 5.85 6.7987 6.0225C6.70105 6.195 6.55834 6.375 6.37807 6.555L5.80721 7.1475C5.72459 7.23 5.68703 7.3275 5.68703 7.4475C5.68703 7.5075 5.69454 7.56 5.70956 7.62C5.7321 7.68 5.75463 7.725 5.76965 7.77C5.90486 8.0175 6.13771 8.34 6.4682 8.73C6.80621 9.12 7.16675 9.5175 7.55734 9.915C7.96294 10.3125 8.35353 10.68 8.75163 11.0175C9.14221 11.3475 9.4652 11.5725 9.72058 11.7075C9.75814 11.7225 9.8032 11.745 9.85578 11.7675C9.91587 11.79 9.97596 11.7975 10.0436 11.7975C10.1713 11.7975 10.2689 11.7525 10.3515 11.67L10.9224 11.1075C11.1102 10.92 11.2904 10.7775 11.4632 10.6875C11.636 10.5825 11.8087 10.53 11.9965 10.53C12.1392 10.53 12.2894 10.56 12.4547 10.6275C12.6199 10.695 12.7927 10.7925 12.9805 10.92L15.4667 12.6825C15.662 12.8175 15.7972 12.975 15.8798 13.1625C15.9549 13.35 16 13.5375 16 13.7475Z" stroke="none" stroke-width="1.6" stroke-miterlimit="10" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="title">Выгодное предложение<br> от Dell</div>
            <div class="mobShow"><img src="img/transparentImg.png" alt=""></div>
            <div class="more">
                <a href="">
                    <svg class="iconLongArrow" width="106" height="23" viewBox="0 0 106 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M94 1L104.5 11.5M104.5 11.5L94 22M104.5 11.5H0" stroke="none" stroke-width="1.5"></path>
                    </svg>
                </a>
            </div>
        </div>
	</div>
 </section> <section class="catalogShortSection">
	<div class="contentWrapper">
		<div class="catalogShort">
			<div class="item textItem">
				<h2>Каталог<br class="mobHide">
				 товаров<br class="mobShow">
				 от Dell</h2>
				<div class="textGray">
					 Наша компания является<br>
					 зарегистрированным и официальным<br>
					 партнером Dell в России.
				</div>
				<div>
 <a href="#"> <span class="iconBlueButton">→</span>
					В каталог </a>
				</div>
			</div>
			<div class="item imgTopOverflow">
				<div class="itemNum">
					 01
				</div>
				<div class="imgWrapper">
 <img src="/bitrix/templates/main/img/cs1.png" alt="">
				</div>
				<div class="textGray">
					 105 товаров
				</div>
				<div class="category">
 <a href="#">Ноутбуки</a>
				</div>
			</div>
			<div class="item imgTopOverflow">
				<div class="itemNum">
					 02
				</div>
				<div class="imgWrapper">
 <img src="/bitrix/templates/main/img/cs2.png" alt="">
				</div>
				<div class="textGray">
					 65 товаров
				</div>
				<div class="category">
 <a href="#">Персональные компьютеры</a>
				</div>
			</div>
			<div class="item">
				<div class="itemNum">
					 03
				</div>
				<div class="imgWrapper">
 <img src="/bitrix/templates/main/img/cs3.png" alt="">
				</div>
				<div class="textGray">
					 13 товаров
				</div>
				<div class="category">
 <a href="#">Cерверы</a>
				</div>
			</div>
			<div class="item">
				<div class="itemNum">
					 04
				</div>
				<div class="imgWrapper">
 <img src="/bitrix/templates/main/img/cs4.png" alt="">
				</div>
				<div class="textGray">
					 2345 товаров
				</div>
				<div class="category">
 <a href="#">Dell EMC</a>
				</div>
			</div>
			<div class="item">
				<div class="itemNum">
					 05
				</div>
				<div class="imgWrapper">
 <img src="/bitrix/templates/main/img/cs5.png" alt="">
				</div>
				<div class="textGray">
					 195 товаров
				</div>
				<div class="category">
 <a href="#">Запасные части к Dell EMC</a>
				</div>
			</div>
		</div>
	</div>
 </section> <section class="ourAdvantages bgGray">
	<div class="bgText smallText">
		 best<br>
		 quality
	</div>
	<div class="contentWrapper">
		<div class="ourAdvantagesIntro">
			<div class="left">
				<div class="imgWrapper">
 <img src="/bitrix/templates/main/img/preview1.png" alt="">
				</div>
			</div>
			<div class="right">
				<h2>Наши преимущества</h2>
				<div class="textGray">
					 Оптимизация мощностей (расходов, социальных выплат&nbsp;и&nbsp;т.п.) позволили компании на&nbsp;4,7% понизить цены по&nbsp;сравнению с&nbsp;конкурентами
				</div>
				<div>
 <a href="#"> <span class="iconBlueButton">→</span>
					Оставить заявку </a>
				</div>
			</div>
		</div>
		<div class="ourAdvantagesList">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"advantage",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "advantage",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "page_home",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"DESCRIPTION",1=>"BIG_HEADER",2=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
		</div>
	</div>
 </section> <section class="lastNews">
	<div class="contentWrapper lastNewsWrapper">
		<div class="lastNewsHeader">
			<div class="right">
 <a href="#">
				Все новости <span class="iconBlueButton">→</span> </a>
			</div>
			<h2>Последние новости</h2>
			<div class="textGray">
				 Вы можете посмотреть ещё больше интересных новостей и узнать о последних<br>
				 новинках, перейдя по кнопке
			</div>
		</div>
		<div class="newsList">
			<div class="item">
				<div class="newsDate">
					<div class="big">
						 11
					</div>
					<div>
 <span class="mobHide">июля</span><span class="mobShow">ИЮЛ</span>
					</div>
				</div>
				<div class="imgWrap">
 <img src="/bitrix/templates/main/img/news1.png" alt="">
				</div>
				<div class="bgLayout">
 <a href="#" class="iconBlueButton">→</a>
					<div class="linkWrap">
 <a href="#">GE использует технологии Dell</a>
					</div>
					<p>
						 Вы можете посмотреть ещё больше интересных
					</p>
				</div>
			</div>
			<div class="item">
				<div class="newsDate">
					<div class="big">
						 11
					</div>
					<div>
 <span class="mobHide">июля</span><span class="mobShow">ИЮЛ</span>
					</div>
				</div>
				<div class="imgWrap">
 <img src="/bitrix/templates/main/img/news2.png" alt="">
				</div>
				<div class="bgLayout">
 <a href="#" class="iconBlueButton">→</a>
					<div class="linkWrap">
 <a href="#">GE использует технологии Dell</a>
					</div>
					<p>
						 Вы можете посмотреть ещё больше интересных
					</p>
				</div>
			</div>
			<div class="item">
				<div class="newsDate">
					<div class="big">
						 11
					</div>
					<div>
 <span class="mobHide">июля</span><span class="mobShow">ИЮЛ</span>
					</div>
				</div>
				<div class="imgWrap">
 <img src="/bitrix/templates/main/img/news3.png" alt="">
				</div>
				<div class="bgLayout">
 <a href="#" class="iconBlueButton">→</a>
					<div class="linkWrap">
 <a href="#">GE использует технологии Dell</a>
					</div>
					<p>
						 Вы можете посмотреть ещё больше интересных
					</p>
				</div>
			</div>
			<div class="item">
				<div class="newsDate">
					<div class="big">
						 11
					</div>
					<div>
 <span class="mobHide">июля</span><span class="mobShow">ИЮЛ</span>
					</div>
				</div>
				<div class="imgWrap">
 <img src="/bitrix/templates/main/img/news4.png" alt="">
				</div>
				<div class="bgLayout">
 <a href="#" class="iconBlueButton">→</a>
					<div class="linkWrap">
 <a href="#">GE использует технологии Dell</a>
					</div>
					<p>
						 Вы можете посмотреть ещё больше интересных
					</p>
				</div>
			</div>
			<div class="item">
				<div class="newsDate">
					<div class="big">
						 11
					</div>
					<div>
 <span class="mobHide">июля</span><span class="mobShow">ИЮЛ</span>
					</div>
				</div>
				<div class="imgWrap">
 <img src="/bitrix/templates/main/img/news5.png" alt="">
				</div>
				<div class="bgLayout">
 <a href="#" class="iconBlueButton">→</a>
					<div class="linkWrap">
 <a href="#">GE использует технологии Dell</a>
					</div>
					<p>
						 Вы можете посмотреть ещё больше интересных
					</p>
				</div>
			</div>
			<div class="item">
				<div class="newsDate">
					<div class="big">
						 11
					</div>
					<div>
 <span class="mobHide">июля</span><span class="mobShow">ИЮЛ</span>
					</div>
				</div>
				<div class="imgWrap">
 <img src="/bitrix/templates/main/img/news6.png" alt="">
				</div>
				<div class="bgLayout">
 <a href="#" class="iconBlueButton">→</a>
					<div class="linkWrap">
 <a href="#">GE использует технологии Dell</a>
					</div>
					<p>
						 Вы можете посмотреть ещё больше интересных
					</p>
				</div>
			</div>
		</div>
	</div>
 </section> <section class="requestFormSection">
	<div class="requestFormSectionBgLayout">
	</div>
	<div class="bgText smallText mobHide">
		 our<br>
		 contacts
	</div>
	<div class="contentWrapper">
		<div class="requestFormWitchContacts">
			<div class="ourContacts">
				<h2>Наши контакты</h2>
				<div class="textGray">
					 Вы&nbsp;можете связаться с&nbsp;нашим онлайн-консультантом
				</div>
				<div class="bgLayout">
 <img src="/bitrix/templates/main/img/phone.png" alt="">
				</div>
                <ul class="contactsList">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "contacts",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "12",
                            "IBLOCK_TYPE" => "often_used",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "1",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "ITEM",
                                1 => "FIRST_PARAGRAPH",
                                2 => "",
                            ),
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "contacts"
                        ),
                        false
                    ); ?>
                </ul>
                <ul class="socLinks">
                    <li>
                        <a href="#">
                            <svg class="iconFb" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.95184 10.9546L9.44046 7.56788H6.38389V5.37106C6.38389 4.44451 6.81095 3.54038 8.17995 3.54038H9.56961V0.657058C9.56961 0.657058 8.30846 0.428223 7.10262 0.428223C4.58525 0.428223 2.93987 2.05021 2.93987 4.98662V7.56788H0.141602V10.9546H2.93987V19.1419C4.08094 19.3317 5.24282 19.3317 6.38389 19.1419V10.9546H8.95184Z" fill="none"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="noStyle">
                        <a href="#">
                            <svg class="iconWs" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.36724 33.3911L8.76998 33.0004L8.09002 33.2173C7.67666 33.3492 7.12251 33.5214 6.49304 33.717C5.6119 33.9907 4.58316 34.3103 3.5864 34.6295C3.69996 34.2695 3.81574 33.9016 3.92998 33.5356C4.36589 32.139 4.8171 30.656 4.93122 29.9866L5.03554 29.3748L4.67707 28.8681C2.67573 26.0395 1.5 22.5873 1.5 18.856C1.5 9.27056 9.27056 1.5 18.856 1.5C28.4415 1.5 36.212 9.27056 36.212 18.856C36.212 28.4415 28.4415 36.212 18.856 36.212C15.3514 36.212 12.0936 35.1749 9.36724 33.3911Z" stroke="none" stroke-width="3"></path>
                                <path d="M28.2838 24.8242C28.2838 25.1636 28.2082 25.5124 28.0477 25.8518C27.8872 26.1912 27.6795 26.5118 27.4056 26.8135C26.943 27.3226 26.4331 27.6903 25.8571 27.926C25.2906 28.1617 24.6768 28.2842 24.0159 28.2842C23.0528 28.2842 22.0236 28.058 20.9377 27.596C19.8519 27.134 18.766 26.5118 17.6896 25.7293C16.6038 24.9373 15.5746 24.0605 14.5926 23.0894C13.6201 22.1089 12.7419 21.0812 11.9582 20.0065C11.184 18.9317 10.5608 17.8569 10.1076 16.7915C9.65435 15.7167 9.42773 14.6891 9.42773 13.7085C9.42773 13.0674 9.54104 12.4546 9.76765 11.8889C9.99426 11.3138 10.3531 10.7859 10.8535 10.3145C11.4578 9.72049 12.1188 9.42822 12.8175 9.42822C13.0819 9.42822 13.3462 9.48479 13.5823 9.59793C13.8278 9.71106 14.045 9.88077 14.2149 10.1259L16.4055 13.2089C16.5755 13.4446 16.6982 13.6614 16.7832 13.8688C16.8682 14.0668 16.9154 14.2648 16.9154 14.4439C16.9154 14.6702 16.8493 14.8965 16.7171 15.1133C16.5943 15.3302 16.4149 15.5564 16.1883 15.7827L15.4707 16.5275C15.3669 16.6312 15.3197 16.7538 15.3197 16.9046C15.3197 16.9801 15.3291 17.0461 15.348 17.1215C15.3763 17.1969 15.4046 17.2535 15.4235 17.31C15.5935 17.6212 15.8862 18.0266 16.3016 18.5168C16.7265 19.0071 17.1798 19.5068 17.6708 20.0065C18.1806 20.5061 18.6716 20.9681 19.1721 21.3924C19.6631 21.8072 20.0691 22.09 20.3901 22.2597C20.4373 22.2786 20.494 22.3069 20.5601 22.3352C20.6356 22.3635 20.7111 22.3729 20.7961 22.3729C20.9566 22.3729 21.0794 22.3163 21.1832 22.2126L21.9008 21.5055C22.1369 21.2698 22.3635 21.0907 22.5807 20.9775C22.7979 20.8455 23.015 20.7795 23.2511 20.7795C23.4305 20.7795 23.6193 20.8173 23.8271 20.9021C24.0348 20.987 24.252 21.1095 24.488 21.2698L27.6134 23.4854C27.8589 23.6551 28.0288 23.8531 28.1327 24.0888C28.2271 24.3245 28.2838 24.5602 28.2838 24.8242Z" fill="none"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
			</div>
			<div class="requestForm">
				<h2>Оставьте заявку</h2>
				<p>
					 Оставьте свой номер, и мы перезвоним Вам.
				</p>
				<form id="form1">
					<div>
 <label>Ваше имя</label> <input type="text" name="name">
					</div>
					<div>
 <label>Номер телефона</label> <input type="text" name="phone">
					</div>
					<div>
 <label>Комментарий</label> <textarea name="message"></textarea>
					</div>
					<div>
 <a href="" class="js-submitForm" form_id="form1"> <span class="iconBlueButton">→</span>
						Заказать </a>
					</div>
				</form>
			</div>
		</div>
	</div>
 </section>
</div>
 <br><? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>