<?php

namespace Bitrix\Hahariki\Controller;

use Bitrix\Hahariki\Controller\Filter\CheckLobbyOwner;
use Bitrix\Hahariki\Model\AnekdotPartTable;
use Bitrix\Hahariki\Model\AnekdotTable;
use Bitrix\Hahariki\Model\EO_AnekdotPart;
use Bitrix\Hahariki\Model\SessionTable;
use Bitrix\Hahariki\Model\SessionUserTable;
use Bitrix\Main\Engine\CurrentUser;
use Bitrix\Main\EO_User_Collection;
use Bitrix\Main\UserTable;

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
	public function enterLobbyAction(CurrentUser $user, int $sessionId): array
	{
		$result = SessionUserTable::createObject()
			?->setSessionId($sessionId)
			->setUserId($user->getId())
			->save();

		return [
			'isEntered' => $result->isSuccess()
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

		$users = UserTable::query()
			->setSelect(['NAME', 'LAST_NAME'])
			->whereIn('ID', [$userIds])
			->fetchCollection()
		;

		$players = [];
		foreach ($users as $user)
		{
			$players[] = [
				'id' => $user->getId(),
				'name' => $user->getName(),
				'lastName' => $user->getLastName(),
			];
		}

		$ownerId = SessionTable::getById($sessionId)->fetchObject()?->getOwnerId();

		return [
			'players' => $players,
			'ownerId' => $ownerId,
		];
	}

	/**
	 * @restMethod
	 */
	public function saveCategoryAction(int $anekId, string $category): array
	{
		//TODO: проверка пользователя на то, что он в игре
		$anek = AnekdotTable::getById($anekId)->fetchObject();

		$result = $anek->setCategory($category)->save();

		return [
			'result' => $result->isSuccess(),
		];
	}

	/**
	 * @restMethod
	 */
	public function savePartAction(CurrentUser $currentUser, int $anekId, string $text, int $stage, ?int $parentPartId): array
	{

		$part = new EO_AnekdotPart();
		$part
			->setAnekdotId($anekId)
			->setText($text)
			->setAuthorId($currentUser->getId())
			->setSort($stage)
		;

		if ($stage > 1 && !is_null($parentPartId))
		{
			$part->setParentId($parentPartId);
		}

		$result = $part->save();

		return [
			'result' => $result->isSuccess(),
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