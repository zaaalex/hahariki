<?php
namespace Bitrix\Hahariki\Model;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\Relations\Reference;
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
 * @package Bitrix\Hahariki\Model
 *
 * DO NOT WRITE ANYTHING BELOW THIS
 *
 * <<< ORMENTITYANNOTATION
 * @method static EO_SessionUser_Query query()
 * @method static EO_SessionUser_Result getByPrimary($primary, array $parameters = [])
 * @method static EO_SessionUser_Result getById($id)
 * @method static EO_SessionUser_Result getList(array $parameters = [])
 * @method static EO_SessionUser_Entity getEntity()
 * @method static \Bitrix\Hahariki\Model\EO_SessionUser createObject($setDefaultValues = true)
 * @method static \Bitrix\Hahariki\Model\EO_SessionUser_Collection createCollection()
 * @method static \Bitrix\Hahariki\Model\EO_SessionUser wakeUpObject($row)
 * @method static \Bitrix\Hahariki\Model\EO_SessionUser_Collection wakeUpCollection($rows)
 */

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
				->configurePrimary(true)
			,
			(new Reference(
				'USER',
				UserTable::class,
				Join::on('this.USER_ID', 'ref.ID')
			))
			,
			(new IntegerField('SESSION_ID',
							  []
			))->configureTitle(Loc::getMessage('SESSION_USER_ENTITY_SESSION_ID_FIELD'))
				->configurePrimary(true)
			,
			(new Reference(
				'SESSION',
				SessionTable::class,
				Join::on('this.SESSION_ID', 'ref.ID')
			))
			,
		];
	}
}