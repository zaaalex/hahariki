<?php

use Bitrix\Main\UI\Extension;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

Extension::load(['hahariki.main-page', 'ui.hint', 'ui.notification']);

/** @var $APPLICATION CMain */

$bodyClass = $APPLICATION->GetPageProperty('BodyClass');

$APPLICATION->SetPageProperty(
	'BodyClass', ($bodyClass ? $bodyClass . ' ' : '')
	. 'no-all-paddings'
);

/**
 * @var array $arResult
 */

$userId = $arResult['userId'];

?>

<div class="scrum-tools__project-modifier-container">
	<div class="hahariki__game_create" id="hahariki-game-create"></div>
</div>

<script>
	BX.ready(function() {
		const mainPage = new BX.Hahariki.MainPage({
			container: document.getElementById('hahariki-game-create'),
			userId: <?=$userId?>
		});

        mainPage.show();
	});
</script>
