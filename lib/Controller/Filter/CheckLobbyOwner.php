<?php

namespace Bitrix\Hahariki\Controller\Filter;

use Bitrix\Main\Context;
use Bitrix\Main\Engine\ActionFilter\Base;
use Bitrix\Main\Engine\CurrentUser;
use Bitrix\Main\Error;
use Bitrix\Main\Event;
use Bitrix\Main\EventResult;
use Bitrix\Main\Localization\Loc;

class CheckLobbyOwner extends Base
{
	public const ERROR_ALLOWED_ONLY_LOBBY_OWNER = 'allowed_only_lobby_owner';

	public function onBeforeAction(Event $event)
	{
		$userId = CurrentUser::get()->getId();
		$sessionId = $this->getAction()->getArguments()['sessionId'];

		if (is_null($userId) || is_null($sessionId))
		{
			return $this->getErrorEventResult();
		}

		if (false/*method($sessionId)->getOwnerId() === $userId*/)
		{
			return $this->getErrorEventResult();
		}

		return null;
	}

	protected function getErrorEventResult(): EventResult
	{
		Context::getCurrent()?->getResponse()->setStatus(403);
		$this->addError(new Error(
			Loc::getMessage('HAHARIKI_ACTIONFILTER_ALLOWED_ONLY_LOBBY_OWNER'),
			self::ERROR_ALLOWED_ONLY_LOBBY_OWNER
		));

		return new EventResult(EventResult::ERROR, null, null, $this);
	}
}