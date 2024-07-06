<?php

/**
 * @global  \CMain $APPLICATION
 */

require $_SERVER["DOCUMENT_ROOT"] . '/bitrix/header.php';

$APPLICATION->IncludeComponent(
	"bitrix:hahariki.main.page",'', []
);

require $_SERVER["DOCUMENT_ROOT"] . '/bitrix/footer.php';