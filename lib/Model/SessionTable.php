<?php
namespace Bitrix\Hahariki\Model;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\DatetimeField;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\Relations\OneToMany;

/**
 * Class SessionTable
 *
 * Fields:
 * <ul>
 * <li> ID int primary
 * <li> STATUS int optional
 * <li> OWNER_ID int optional
 * <li> STAGE int optional
 * <li> END_STAGE_TIME datetime optional
 * </ul>
 *
 * @package Bitrix\Hahariki\Model
 **/

class SessionTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'b_hahariki_session';
	}

	/**
	 * Returns entity map definition.
	 *
	 * @return array
	 */
	public static function getMap()
	{
		return [
			(new IntegerField('ID',
							  []
			))->configureTitle(Loc::getMessage('SESSION_ENTITY_ID_FIELD'))
			,
			(new IntegerField('STATUS',
							  []
			))->configureTitle(Loc::getMessage('SESSION_ENTITY_STATUS_FIELD'))
			,
			(new IntegerField('OWNER_ID',
							  []
			))->configureTitle(Loc::getMessage('SESSION_ENTITY_OWNER_ID_FIELD'))
			,
			(new IntegerField('STAGE',
							  []
			))->configureTitle(Loc::getMessage('SESSION_ENTITY_STAGE_FIELD'))
			,
			(new DatetimeField('END_STAGE_TIME',
							   []
			))->configureTitle(Loc::getMessage('SESSION_ENTITY_END_STAGE_TIME_FIELD'))
			,
			(new OneToMany(
				'ANEKDOT',
				AnekdotTable::class,
				'SESSION',
			))

		];
	}
}