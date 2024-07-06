<?php

use Bitrix\Main\Application;
use Bitrix\Main\FileTable;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class Hahariki extends \CModule
{
	public $MODULE_ID = 'hahariki';
	public $MODULE_VERSION;
	public $MODULE_VERSION_DATE;
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;

	public CMain $APPLICATION;
	public mixed $DB;
	private string $docRoot;

	private array $bitrixDirs = [
		'js' => 'hahariki',
		'components' => 'bitrix',
	];

	public function __construct()
	{
		$arModuleVersion = [];
		include(__DIR__ . '/version.php');

		$this->setDocumentRoot();

		if (
			is_array($arModuleVersion)
			&& array_key_exists('VERSION', $arModuleVersion)
			&& array_key_exists('VERSION_DATE', $arModuleVersion)
		)
		{
			$this->MODULE_VERSION = $arModuleVersion['VERSION'];
			$this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
		}

		$this->MODULE_NAME = Loc::getMessage('SCRUM_TOOLS_MODULE_NAME');
		$this->MODULE_DESCRIPTION = Loc::getMessage('SCRUM_TOOLS_MODULE_DESCRIPTION');

		global $APPLICATION, $DB;
		$this->APPLICATION = $APPLICATION;
		$this->DB = $DB;
	}

	private function setDocumentRoot(): void
	{
		$context = Application::getInstance()->getContext();
		$server = $context->getServer();
		$this->docRoot = $server->getDocumentRoot();
	}

	public function doInstall(): void
	{
		$this->installFiles();
		$this->installDB();

		$this->APPLICATION->includeAdminFile(
			Loc::getMessage('SCRUM_TOOLS_INSTALL_TITLE'),
			$this->docRoot . '/bitrix/modules/hahariki/install/step1.php'
		);
	}

	/**
	 * @throws \Bitrix\Main\ObjectPropertyException
	 * @throws \Bitrix\Main\SystemException
	 * @throws \Bitrix\Main\ArgumentException
	 */
	public function doUninstall(): void
	{
		$step = isset($_GET['step']) ? (int)$_GET['step'] : 1;

		global $USER;
		if(!$USER->IsAdmin())
		{
			return;
		}

		if ($step < 2)
		{
			$this->APPLICATION->includeAdminFile(
				Loc::getMessage('SCRUM_TOOLS_UNINSTALL_TITLE'),
				$this->docRoot . '/bitrix/modules/hahariki/install/unstep1.php'
			);
		}
		elseif ($step === 2)
		{
			$params = [];
			if (isset($_GET['savedata']))
			{
				$params['savedata'] = $_GET['savedata'] === 'Y';
			}

			$this->uninstallDB($params);

			$this->APPLICATION->includeAdminFile(
				Loc::getMessage('SCRUM_TOOLS_UNINSTALL_TITLE'),
				$this->docRoot . '/bitrix/modules/hahariki/install/unstep2.php'
			);
		}
	}

	public function installDB(): bool
	{
		registerModule($this->MODULE_ID);

		return true;
	}

	public function installFiles(): bool
	{
		//CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/hahariki/install/admin", $_SERVER["DOCUMENT_ROOT"]."/bitrix/admin", true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/hahariki/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
		//CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/hahariki/install/activities", $_SERVER["DOCUMENT_ROOT"]."/bitrix/activities", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/hahariki/install/js", $_SERVER["DOCUMENT_ROOT"]."/bitrix/js", true, true);
		CopyDirFiles($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/hahariki/install/public", $_SERVER['DOCUMENT_ROOT'], true, true);

		return true;
	}

	/**
	 * @throws \Bitrix\Main\ObjectPropertyException
	 * @throws \Bitrix\Main\SystemException
	 * @throws \Bitrix\Main\ArgumentException
	 */
	public function uninstallDB(array $arParams = []): bool
	{
		if (isset($arParams['savedata']) && !$arParams['savedata'])
		{
			$files = FileTable::query()
				->addSelect('ID')
				->addFilter('=MODULE_ID', $this->MODULE_ID)
				->fetchAll()
			;

			if (count($files) > 1)
			{
				foreach ($files as $file)
				{
					\CFile::Delete($file['ID']);
				}
			}

			CAgent::RemoveModuleAgents($this->MODULE_ID);
		}

		unregisterModule($this->MODULE_ID);

		return true;
	}
}
