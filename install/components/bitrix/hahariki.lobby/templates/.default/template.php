<?php

use Bitrix\Main\UI\Extension;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

Extension::load(['hahariki.lobby', 'ui.hint', 'ui.notification']);

/** @var $APPLICATION CMain */

$bodyClass = $APPLICATION->GetPageProperty('BodyClass');

$APPLICATION->SetPageProperty(
	'BodyClass', ($bodyClass ? $bodyClass . ' ' : '')
	. 'no-all-paddings'
);
?>

<div id="hahariki-game-lobby"></div>

<script>
	BX.ready(function() {
		const lobby = new BX.Hahariki.Lobby({
			container: document.getElementById('hahariki-game-lobby'),
			status: 1,
			ownerId: 1,
			stage: 1,
			sessionId: 1,
			timestamp: new Date().getTime(),
		});

        lobby.show(1);
	});
</script>
