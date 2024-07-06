<?php

namespace Bitrix\Hahariki\Controller;

use Bitrix\Hahariki\Controller\Filter\CheckLobbyOwner;
use Bitrix\Hahariki\Model\SessionTable;
use Bitrix\Hahariki\Model\SessionUserTable;
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
		if ($this->isLobbyExistByUserId($lobbyOwner->getId()))
		{
			return [
				'errors' => [
					'Пользователь уже в лобби!'
				]
			];
		}
		$session = SessionTable::createObject()
							   ?->setStatus(1)
							   ->setOwnerId($lobbyOwner->getId())
							   ->setStage(0)
		;
		$session->save();
		$sessionId = $session->getId();
		SessionUserTable::createObject()
								   ?->setSessionId($sessionId)
								   ->setUserId($lobbyOwner->getId())
									->save();
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
			'lobbyHref' => "/hahariki/lobby/${sessionId}/",
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
		$userIds = \Bitrix\Hahariki\Model\SessionUserTable::query()
			->setSelect(['USER_ID'])
			->where('SESSION_ID', $sessionId)
			->fetchAll();

		$ownerId = SessionTable::getById($sessionId)->fetchObject()?->get('OWNER_ID');

		return [
			'players' => $userIds,
			'ownerId' => $ownerId,
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