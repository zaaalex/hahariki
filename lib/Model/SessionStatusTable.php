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
 **/

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