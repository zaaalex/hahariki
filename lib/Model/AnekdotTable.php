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
 **/

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
			,
			(new IntegerField('SESSION_ID',
							  []
			))->configureTitle(Loc::getMessage('ANEKDOT_ENTITY_SESSION_ID_FIELD'))
			,
			(new Reference(
				'SESSION',
				SessionTable::class,
				Join::on('this.SESSION_ID', 'ref.ID')))
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