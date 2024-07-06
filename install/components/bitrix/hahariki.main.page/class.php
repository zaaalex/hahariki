<?php

use Bitrix\Intranet\CurrentUser;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

class HaharikiMainPage extends CBitrixComponent
{
	private CMain $application;

	public function __construct($component = null)
	{
		parent::__construct($component);

		global $APPLICATION;
		$this->application = $APPLICATION;
	}

	/**
	 * @throws \Bitrix\Main\LoaderException
	 */
	public function executeComponent(): void
	{
		$this->application->setTitle(Loc::getMessage('SCRUMTOOLS_PROJECT_MODIFIER_TITLE'));
		$this->arResult['userId'] = CurrentUser::get()->getId();

		if (!Loader::includeModule('hahariki'))
		{
			return;
		}

		$this->includeComponentTemplate();
	}

	/**
	 * @throws \Bitrix\Main\LoaderException
	 */
	private function onAccessDenied(): void
	{
		if (!Loader::includeModule('ui'))
		{
			return;
		}

		$this->application->IncludeComponent(
			'bitrix:ui.info.error',
			'',
			[
				'TITLE' => Loc::getMessage('SCRUMTOOLS_ACCESS_DENIED_TITLE'),
				'DESCRIPTION' => Loc::getMessage('SCRUMTOOLS_ACCESS_DENIED_DESCRIPTION'),
			]
		);
	}
}