<?php

namespace Bitrix\Hahariki\Controller;

use Bitrix\Hahariki\Controller\Filter\CheckLobbyOwner;
use Bitrix\Hahariki\Model\SessionTable;
use Bitrix\Hahariki\SessionUserTable;
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
	public function createLobbyAction(CurrentUser $lobbyOwner): ?array
	{
		$data = [
			'fields' => [
				'STATUS' => 1,
				'OWNER_ID' => $lobbyOwner->getId(),
				'STAGE' => 0,
			]
		];

		$sessionId = SessionTable::add($data)->getId();
		\Bitrix\Hahariki\Model\SessionUserTable::add([
			'fields' => [
				'USER_ID' => $lobbyOwner->getId(),
				'SESSION_ID' => $sessionId,
			],
		]);

		if (!$sessionId)
		{
			return null;
		}

		return [
			'sessionId' => $sessionId,
		];
	}

	/**
	 * @restMethod
	 */
	public function enterLobbyAction(CurrentUser $lobbyOwner, int $sessionId): array
	{
		return [
			'test' => 'test',
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