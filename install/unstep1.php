<?php
use \Bitrix\Main\Localization\Loc;

/** @var \CMain $APPLICATION */

$MODULE_ID = 'hahariki';
?>

<form action="<?= $APPLICATION->getCurPage()?>">
	<?= bitrix_sessid_post()?>
	<input type="hidden" name="lang" value="<?=LANG?>">
	<input type="hidden" name="id" value="<?=$MODULE_ID?>">
	<input type="hidden" name="uninstall" value="Y">
	<input type="hidden" name="step" value="2">
	<input type="hidden" name="savedata" value="N">
	<p><?= Loc::getMessage('MOD_UNINST_SAVE')?></p>
	<p>
		<input type="checkbox" name="savedata" id="savedata" value="Y" checked>
		<label for="savedata"><?= Loc::getMessage('MOD_UNINST_SAVE_TABLES')?></label>
	</p>
	<input type="submit" name="inst" value="<?= Loc::getMessage('MOD_UNINST_DEL')?>">
</form>
