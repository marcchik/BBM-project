<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="pageContent">
    <section class="requestFormSection contactsPage">
        <div class="contentWrapper">
            <div class="requestFormWitchContacts">
                <div class="ourContacts">
                    <h2>Наши контакты</h2>
                    <div class="textGray">Вы можете связаться с нашим онлайн-консультантом</div>
                    <div class="bgLayout"><img src="<?=SITE_TEMPLATE_PATH?>/img/phone.png" alt=""></div>
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
                                "SET_TITLE" => "Y",
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
                                    <path d="M8.95184 10.9546L9.44046 7.56788H6.38389V5.37106C6.38389 4.44451 6.81095 3.54038 8.17995 3.54038H9.56961V0.657058C9.56961 0.657058 8.30846 0.428223 7.10262 0.428223C4.58525 0.428223 2.93987 2.05021 2.93987 4.98662V7.56788H0.141602V10.9546H2.93987V19.1419C4.08094 19.3317 5.24282 19.3317 6.38389 19.1419V10.9546H8.95184Z" fill="none"/>
                                </svg>
                            </a>
                        </li>
                        <li class="noStyle">
                            <a href="#">
                                <svg class="iconWs" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.36724 33.3911L8.76998 33.0004L8.09002 33.2173C7.67666 33.3492 7.12251 33.5214 6.49304 33.717C5.6119 33.9907 4.58316 34.3103 3.5864 34.6295C3.69996 34.2695 3.81574 33.9016 3.92998 33.5356C4.36589 32.139 4.8171 30.656 4.93122 29.9866L5.03554 29.3748L4.67707 28.8681C2.67573 26.0395 1.5 22.5873 1.5 18.856C1.5 9.27056 9.27056 1.5 18.856 1.5C28.4415 1.5 36.212 9.27056 36.212 18.856C36.212 28.4415 28.4415 36.212 18.856 36.212C15.3514 36.212 12.0936 35.1749 9.36724 33.3911Z" stroke="none" stroke-width="3"/>
                                    <path d="M28.2838 24.8242C28.2838 25.1636 28.2082 25.5124 28.0477 25.8518C27.8872 26.1912 27.6795 26.5118 27.4056 26.8135C26.943 27.3226 26.4331 27.6903 25.8571 27.926C25.2906 28.1617 24.6768 28.2842 24.0159 28.2842C23.0528 28.2842 22.0236 28.058 20.9377 27.596C19.8519 27.134 18.766 26.5118 17.6896 25.7293C16.6038 24.9373 15.5746 24.0605 14.5926 23.0894C13.6201 22.1089 12.7419 21.0812 11.9582 20.0065C11.184 18.9317 10.5608 17.8569 10.1076 16.7915C9.65435 15.7167 9.42773 14.6891 9.42773 13.7085C9.42773 13.0674 9.54104 12.4546 9.76765 11.8889C9.99426 11.3138 10.3531 10.7859 10.8535 10.3145C11.4578 9.72049 12.1188 9.42822 12.8175 9.42822C13.0819 9.42822 13.3462 9.48479 13.5823 9.59793C13.8278 9.71106 14.045 9.88077 14.2149 10.1259L16.4055 13.2089C16.5755 13.4446 16.6982 13.6614 16.7832 13.8688C16.8682 14.0668 16.9154 14.2648 16.9154 14.4439C16.9154 14.6702 16.8493 14.8965 16.7171 15.1133C16.5943 15.3302 16.4149 15.5564 16.1883 15.7827L15.4707 16.5275C15.3669 16.6312 15.3197 16.7538 15.3197 16.9046C15.3197 16.9801 15.3291 17.0461 15.348 17.1215C15.3763 17.1969 15.4046 17.2535 15.4235 17.31C15.5935 17.6212 15.8862 18.0266 16.3016 18.5168C16.7265 19.0071 17.1798 19.5068 17.6708 20.0065C18.1806 20.5061 18.6716 20.9681 19.1721 21.3924C19.6631 21.8072 20.0691 22.09 20.3901 22.2597C20.4373 22.2786 20.494 22.3069 20.5601 22.3352C20.6356 22.3635 20.7111 22.3729 20.7961 22.3729C20.9566 22.3729 21.0794 22.3163 21.1832 22.2126L21.9008 21.5055C22.1369 21.2698 22.3635 21.0907 22.5807 20.9775C22.7979 20.8455 23.015 20.7795 23.2511 20.7795C23.4305 20.7795 23.6193 20.8173 23.8271 20.9021C24.0348 20.987 24.252 21.1095 24.488 21.2698L27.6134 23.4854C27.8589 23.6551 28.0288 23.8531 28.1327 24.0888C28.2271 24.3245 28.2838 24.5602 28.2838 24.8242Z" fill="none"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="requestForm">
                    <h2>Оставьте заявку</h2>
                    <p>Оставьте свой номер, и мы перезвоним Вам.</p>
                    <form id="form1">
                        <div>
                            <label>Ваше имя</label>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <label>Номер телефона</label>
                            <input type="text" name="phone">
                        </div>
                        <div>
                            <label>Комментарий</label>
                            <textarea name="message"></textarea>
                        </div>
                        <div>
                            <a href="" class="js-submitForm" form_id="form1">
                                <span class="iconBlueButton">&rarr;</span>
                                <span>Заказать</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="yaMap">
        <div class="yaMapTitle">
            <svg viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.9996 21.264C21.7279 21.264 23.9396 19.0523 23.9396 16.324C23.9396 13.5957 21.7279 11.384 18.9996 11.384C16.2713 11.384 14.0596 13.5957 14.0596 16.324C14.0596 19.0523 16.2713 21.264 18.9996 21.264Z" stroke="white" stroke-width="3"/>
                <path d="M5.73202 13.4426C8.85119 -0.269081 29.1654 -0.253248 32.2687 13.4584C34.0895 21.5017 29.0862 28.3101 24.7004 32.5217C21.5179 35.5934 16.4829 35.5934 13.2845 32.5217C8.91452 28.3101 3.91119 21.4859 5.73202 13.4426Z" stroke="white" stroke-width="3"/>
            </svg>
            <span>Основной Офис: г. Москва, Солнечногорский проезд, д. 11</span>
            <span>Склад:  г. Москва, Солнечногорский проезд, д. 11</span>
        </div>
        <div id="yaMap"></div>
    </section>
    <section class="deliveryInfo lnPage">
        <div class="bgText smallText">delivery</div>
        <? $APPLICATION->IncludeComponent("bitrix:news.list", "delivery", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",    // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
            "DISPLAY_DATE" => "Y",    // Выводить дату элемента
            "DISPLAY_NAME" => "Y",    // Выводить название элемента
            "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
            "FIELD_CODE" => array(    // Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",    // Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "9",    // Код информационного блока
            "IBLOCK_TYPE" => "often_used",    // Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "20",    // Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости",    // Название категорий
            "PARENT_SECTION" => "",    // ID раздела
            "PARENT_SECTION_CODE" => "",    // Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(    // Свойства
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
            "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
            "SHOW_404" => "N",    // Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
        ),
            false
        ); ?>
    </section>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>