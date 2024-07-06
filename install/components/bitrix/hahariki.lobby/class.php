<?php

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

		if (!Loader::includeModule('hahariki'))
		{
			return;
		}

		$this->arResult = $this->getLobbyData();

		$this->includeComponentTemplate();
	}

	private function getLobbyData(): array
	{
		$userId = \Bitrix\Main\Engine\CurrentUser::get()->getId();

		$sessionUserEntity = \Bitrix\Hahariki\Model\SessionUserTable::query()
			->setSelect(['SESSION_ID'])
			->where('USER_ID', $userId)
			->setLimit(1)
			->fetchObject()
		;

		if (is_null($sessionUserEntity))
		{
			return [];
		}

		$sessionId = $sessionUserEntity->getSessionId();

		if (is_null($sessionId))
		{
			return [];
		}

		$session = \Bitrix\Hahariki\Model\SessionTable::getById($sessionId)->fetchObject();

		return [
			'status' => $session->getStatus(),
			'ownerId' => $session->getOwnerId(),
			'sessionId' => $sessionId,
			'stage' => $session->getStage(),
		];
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