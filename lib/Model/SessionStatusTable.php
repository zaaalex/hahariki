<?php
namespace Bitrix\Hahariki\Model;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Fields\Validators\LengthValidator;

/**
 * Class SessionStatusTable
 *
 * Fields:
 * <ul>
 * <li> ID int optional
 * <li> TITLE string(20) optional
 * </ul>
 *
 * @package Bitrix\Hahariki\Model
 *
 * DO NOT WRITE ANYTHING BELOW THIS
 *
 * <<< ORMENTITYANNOTATION
 * @method static EO_SessionStatus_Query query()
 * @method static EO_SessionStatus_Result getByPrimary($primary, array $parameters = [])
 * @method static EO_SessionStatus_Result getById($id)
 * @method static EO_SessionStatus_Result getList(array $parameters = [])
 * @method static EO_SessionStatus_Entity getEntity()
 * @method static \Bitrix\Hahariki\Model\EO_SessionStatus createObject($setDefaultValues = true)
 * @method static \Bitrix\Hahariki\Model\EO_SessionStatus_Collection createCollection()
 * @method static \Bitrix\Hahariki\Model\EO_SessionStatus wakeUpObject($row)
 * @method static \Bitrix\Hahariki\Model\EO_SessionStatus_Collection wakeUpCollection($rows)
 */

class SessionStatusTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'b_hahariki_session_status';
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
			))->configureTitle(Loc::getMessage('SESSION_STATUS_ENTITY_ID_FIELD'))
				->configurePrimary(true)
				->configureAutocomplete(true)
			,
			(new StringField('TITLE',
							 [
								 'validation' => function()
								 {
									 return[
										 new LengthValidator(null, 20),
									 ];
								 },
							 ]
			))->configureTitle(Loc::getMessage('SESSION_STATUS_ENTITY_TITLE_FIELD'))
			,
		];
	}
}