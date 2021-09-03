<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
  <?$APPLICATION->ShowHead();?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>YUM YUM coffee</title>
	<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/index-page/index-main.css" />
	
  </head>
  <body>
  <div id="panel">
			<?$APPLICATION->ShowPanel();?>
	</div>
    <div class="wrapper">
      <div class="container">
        <header>
          <div class="logo">
            <img src="<?= SITE_TEMPLATE_PATH?>/assets/images/svg/logo.svg" alt="Логотип YUM YUM coffee" />
          </div>
          <div class="contacts">
            <ul class="contact_links">
              <li class="contact_item">
                <a
                  href="https://vk.com/yumcoffee"
                  class="contact_link contact_vk"
                  aria-label="Ссылка на вконтакте"
                  target="blank"
                ></a>
              </li>
              <li class="contact_item">
                <a
                  href="https://www.instagram.com/yumyum_coffee/"
                  class="contact_link contact_ig"
                  aria-label="Ссылка на инстаграм"
                  target="blank"
                ></a>
              </li>
              <li class="contact_item">
                <a
                  href="#"
                  class="contact_link contact_fb"
                  aria-label="Ссылка на фейсбук"
                  target="blank"
                ></a>
              </li>
            </ul>
          </div>
        </header>
		<main>
          <p class="content_text">
            yum-yum - первая
            <span class="content_text_yellow"> эко-кофейня </span> в Ижевске
            <br />
            c уникальной подачей напитков <br />
            в съедобных стаканчиках
          </p>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "index_text", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "1",	// Код информационного блока
		"IBLOCK_TYPE" => "Content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "2",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>


</main>
        <footer></footer>
      </div>
    </div>
  </body>
</html>



<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>