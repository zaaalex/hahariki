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
 *
 * DO NOT WRITE ANYTHING BELOW THIS
 *
 * <<< ORMENTITYANNOTATION
 * @method static EO_AnekdotPart_Query query()
 * @method static EO_AnekdotPart_Result getByPrimary($primary, array $parameters = [])
 * @method static EO_AnekdotPart_Result getById($id)
 * @method static EO_AnekdotPart_Result getList(array $parameters = [])
 * @method static EO_AnekdotPart_Entity getEntity()
 * @method static \Bitrix\Hahariki\Model\EO_AnekdotPart createObject($setDefaultValues = true)
 * @method static \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection createCollection()
 * @method static \Bitrix\Hahariki\Model\EO_AnekdotPart wakeUpObject($row)
 * @method static \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection wakeUpCollection($rows)
 */

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
				->configurePrimary(true)
				->configureAutocomplete(true)
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
			,
			(new Reference(
				'AUTHOR',
				UserTable::class,
				Join::on('this.AUTHOR_ID', 'ref.ID')
			 ))
			,
		];
	}
}