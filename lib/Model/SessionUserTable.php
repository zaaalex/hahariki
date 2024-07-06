<?php
namespace Bitrix\Hahariki;

use Bitrix\Main\Entity\ReferenceField;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\Relations\OneToMany;
use Bitrix\Main\ORM\Query\Join;
use Bitrix\Main\UserTable;

/**
 * Class SessionUserTable
 *
 * Fields:
 * <ul>
 * <li> USER_ID int optional
 * <li> SESSION_ID int optional
 * </ul>
 *
 * @package Bitrix\Hahariki
 **/

class SessionUserTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'b_hahariki_session_user';
	}

	/**
	 * Returns entity map definition.
	 *
	 * @return array
	 */
	public static function getMap()
	{
		return [
			(new IntegerField('USER_ID',
							  []
			))->configureTitle(Loc::getMessage('SESSION_USER_ENTITY_USER_ID_FIELD'))
			,
			(new ReferenceField(
				'USER',
				UserTable::class,
				Join::on('this.USER_ID', 'ref.ID')
			))
			(new IntegerField('SESSION_ID',
							  []
			))->configureTitle(Loc::getMessage('SESSION_USER_ENTITY_SESSION_ID_FIELD'))
			,
			(new ReferenceField(
				'SESSION',
				SessionTable::class,
				Join::on('this.SESSION_ID', 'ref.ID')
			))
		];
	}
}