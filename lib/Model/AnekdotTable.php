<?php
namespace Bitrix\Hahariki\Model;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\Relations\OneToMany;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Fields\Validators\LengthValidator;
use Bitrix\Main\ORM\Query\Join;

/**
 * Class AnekdotTable
 *
 * Fields:
 * <ul>
 * <li> ID int optional
 * <li> SESSION_ID int optional
 * <li> CATEGORY string(100) optional
 * </ul>
 *
 * @package Bitrix\Hahariki\Model
 *
 * DO NOT WRITE ANYTHING BELOW THIS
 *
 * <<< ORMENTITYANNOTATION
 * @method static EO_Anekdot_Query query()
 * @method static EO_Anekdot_Result getByPrimary($primary, array $parameters = [])
 * @method static EO_Anekdot_Result getById($id)
 * @method static EO_Anekdot_Result getList(array $parameters = [])
 * @method static EO_Anekdot_Entity getEntity()
 * @method static \Bitrix\Hahariki\Model\EO_Anekdot createObject($setDefaultValues = true)
 * @method static \Bitrix\Hahariki\Model\EO_Anekdot_Collection createCollection()
 * @method static \Bitrix\Hahariki\Model\EO_Anekdot wakeUpObject($row)
 * @method static \Bitrix\Hahariki\Model\EO_Anekdot_Collection wakeUpCollection($rows)
 */

class AnekdotTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'b_hahariki_anekdot';
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
			))->configureTitle(Loc::getMessage('ANEKDOT_ENTITY_ID_FIELD'))
				->configurePrimary(true)
				->configureAutocomplete(true)
			,
			(new IntegerField('SESSION_ID',
							  []
			))->configureTitle(Loc::getMessage('ANEKDOT_ENTITY_SESSION_ID_FIELD'))
			,
			(new Reference(
				'SESSION',
				SessionTable::class,
				Join::on('this.SESSION_ID', 'ref.ID')))
			,
			(new StringField('CATEGORY',
							 [
								 'validation' => function()
								 {
									 return[
										 new LengthValidator(null, 100),
									 ];
								 },
							 ]
			))->configureTitle(Loc::getMessage('ANEKDOT_ENTITY_CATEGORY_FIELD'))
			,
			(new OneToMany('ANEKDOT_PART', AnekdotPartTable::class, 'ANEKDOT'))
		];
	}
}