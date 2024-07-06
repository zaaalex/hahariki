<?php

namespace Bitrix\Hahariki\Controller;

use Bitrix\Hahariki\Controller\BaseController;
use Bitrix\Hahariki\Controller\Filter\CheckLobbyOwner;
use Bitrix\Main\Engine\AutoWire\ExactParameter;
use Bitrix\Main\Engine\CurrentUser;

class Lobby extends BaseController
{
	public function configureActions()
	{
		return [
			'startGame' => [
				'+prefilters' => [
					new CheckLobbyOwner(),
				],
			],
		];
	}

	public function getPrimaryAutoWiredParameter()
	{
//		return new ExactParameter(
//			\Bitrix\Im\V2\Chat::class,
//			'chat',
//			function ($className, $id) {
//				return \Bitrix\Im\V2\Chat::getInstance((int)$id);
//			}
//		);
	}

	/**
	 * @restMethod
	 */
	public function createLobbyAction(int $lobbyOwner): array
	{
		return [
			'lobbyId' => 1,
		];
	}

	/**
	 * @restMethod
	 */
	public function startGameAction(CurrentUser $lobbyOwner, int $sessionId): array
	{
		return [
			'owner' => $lobbyOwner,
			'sessionID' => $sessionId,
		];
	}

	/**
	 * @restMethod
	 */
	public function saveCategoryAction(CurrentUser $currentUser): array
	{
		return [
			'test' => 'test',
		];
	}

	/**
	 * @restMethod
	 */
	public function savePartAction(CurrentUser $currentUser): array
	{
		return [
			'test' => 'test',
		];
	}

	/**
	 * @restMethod
	 */
	public function getDataAction(CurrentUser $currentUser): array
	{
		return [
			'test' => 'test',
		];
	}
}