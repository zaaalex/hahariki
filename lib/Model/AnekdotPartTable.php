<?php
namespace Bitrix\Hahariki\Model;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Fields\Validators\LengthValidator;
use Bitrix\Main\ORM\Query\Join;
use Bitrix\Main\UserTable;

/**
 * Class AnekdotPartTable
 *
 * Fields:
 * <ul>
 * <li> ID int optional
 * <li> TEXT string(200) optional
 * <li> AUTHOR_ID int optional
 * <li> PARENT_ID int optional
 * </ul>
 *
 * @package Bitrix\Hahariki\Model
 **/

class AnekdotPartTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'b_hahariki_anekdot_part';
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
			))->configureTitle(Loc::getMessage('ANEKDOT_PART_ENTITY_ID_FIELD'))
			,
			(new StringField('TEXT',
							 [
								 'validation' => function()
								 {
									 return[
										 new LengthValidator(null, 200),
									 ];
								 },
							 ]
			))->configureTitle(Loc::getMessage('ANEKDOT_PART_ENTITY_TEXT_FIELD'))
			,
			(new IntegerField('AUTHOR_ID',
							  []
			))->configureTitle(Loc::getMessage('ANEKDOT_PART_ENTITY_AUTHOR_ID_FIELD'))
			,
			(new IntegerField('PARENT_ID',
							  []
			))->configureTitle(Loc::getMessage('ANEKDOT_PART_ENTITY_PARENT_ID_FIELD'))
			,
			(new IntegerField('ANEKDOT_ID',
							  []
			))->configureTitle(Loc::getMessage('ANEKDOT_PART_ENTITY_ANEKDOT_ID_FIELD'))
			,
			(new Reference(
							'ANEKDOT',
							AnekdotTable::class,
							Join::on('this.ANEKDOT_ID', 'ref.ID')
			))
			(new Reference(
				'AUTHOR',
				UserTable::class,
				Join::on('this.AUTHOR_ID', 'ref.ID')
			 ))
		];
	}
}