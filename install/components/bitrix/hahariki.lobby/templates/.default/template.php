<?php

use Bitrix\Main\UI\Extension;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

Extension::load(['hahariki.project-modifier', 'ui.hint', 'ui.notification']);

/** @var $APPLICATION CMain */

$bodyClass = $APPLICATION->GetPageProperty('BodyClass');

$APPLICATION->SetPageProperty(
	'BodyClass', ($bodyClass ? $bodyClass . ' ' : '')
	. 'no-all-paddings'
);
?>

<div class="scrum-tools__project-modifier-container">
	<div class="scrum-tools__notifications" id="scrum-tools-notifications"></div>
	<div class="scrum-tools__project-modifier-form" id="project-modifier-form"></div>
</div>

<script>
	BX.ready(function() {
		const mainPage = new BX.Hahariki.MainPage({
			container: document.getElementById('project-modifier-form'),
			notificationContainer: document.getElementById('scrum-tools-notifications')
		});

        mainPage.showForm();
	});
</script>
