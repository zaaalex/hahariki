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
	public function createLobbyAction(int $creatorId): array
	{
		if ($this->isLobbyExistByUserId($creatorId))
		{
			return [
				'errors' => [
					'Пользователь уже в лобби!'
				]
			];
		}

		$data = [
			'fields' => [
				'STATUS' => 1,
				'OWNER_ID' => $creatorId->getId(),
				'STAGE' => 0,
			]
		];

		$sessionId = SessionTable::add($data)->getId();
		\Bitrix\Hahariki\Model\SessionUserTable::add([
			'fields' => [
				'USER_ID' => $creatorId->getId(),
				'SESSION_ID' => $sessionId,
			],
		]);

		if (!$sessionId)
		{
			return [
				'errors' => [
					'Пользователь уже в лобби!'
				]
			];
		}

		return [
			'lobbyId' => $sessionId,
			'lobbyHref' => "/hahariki/lobby/${$sessionId}",
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

	private function isLobbyExistByUserId(int $userId): bool
	{
		return false;
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
	public function getPlayersAction(int $sessionId): array
	{
//		$userIds = \Bitrix\Hahariki\Model\SessionUserTable::query()
//			->setSelect(['USER_ID'])
//			->where(['SESSION_ID', $sessionId])
//			->fetchAll();
//
//		$ownerId = SessionTable::getById($sessionId)->fetchObject()?->get('OWNER_ID');
//
//		return [
//			'players' => $userIds,
//			'ownerId' => $ownerId,
//		];

		return [
			'ownerId' => 1,
			'players' => [
				['id' => 1, 'name' => 'test1'],
				['id' => 2, 'name' => 'test2'],
				['id' => 3, 'name' => 'test3'],
				['id' => 4, 'name' => 'test4'],
			],
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