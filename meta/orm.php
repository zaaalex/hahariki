<?php

/* ORMENTITYANNOTATION:Bitrix\Hahariki\Model\SessionUserTable:hahariki/lib/Model/SessionUserTable.php */
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_SessionUser
	 * @see \Bitrix\Hahariki\Model\SessionUserTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getUserId()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
	 * @method bool hasUserId()
	 * @method bool isUserIdFilled()
	 * @method bool isUserIdChanged()
	 * @method \Bitrix\Main\EO_User getUser()
	 * @method \Bitrix\Main\EO_User remindActualUser()
	 * @method \Bitrix\Main\EO_User requireUser()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser setUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser resetUser()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser unsetUser()
	 * @method bool hasUser()
	 * @method bool isUserFilled()
	 * @method bool isUserChanged()
	 * @method \Bitrix\Main\EO_User fillUser()
	 * @method \int getSessionId()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser setSessionId(\int|\Bitrix\Main\DB\SqlExpression $sessionId)
	 * @method bool hasSessionId()
	 * @method bool isSessionIdFilled()
	 * @method bool isSessionIdChanged()
	 * @method \Bitrix\Hahariki\Model\EO_Session getSession()
	 * @method \Bitrix\Hahariki\Model\EO_Session remindActualSession()
	 * @method \Bitrix\Hahariki\Model\EO_Session requireSession()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser setSession(\Bitrix\Hahariki\Model\EO_Session $object)
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser resetSession()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser unsetSession()
	 * @method bool hasSession()
	 * @method bool isSessionFilled()
	 * @method bool isSessionChanged()
	 * @method \Bitrix\Hahariki\Model\EO_Session fillSession()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser set($fieldName, $value)
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser reset($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Hahariki\Model\EO_SessionUser wakeUp($data)
	 */
	class EO_SessionUser {
		/* @var \Bitrix\Hahariki\Model\SessionUserTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\SessionUserTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_SessionUser_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getUserIdList()
	 * @method \Bitrix\Main\EO_User[] getUserList()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection getUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillUser()
	 * @method \int[] getSessionIdList()
	 * @method \Bitrix\Hahariki\Model\EO_Session[] getSessionList()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection getSessionCollection()
	 * @method \Bitrix\Hahariki\Model\EO_Session_Collection fillSession()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Hahariki\Model\EO_SessionUser $object)
	 * @method bool has(\Bitrix\Hahariki\Model\EO_SessionUser $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser getByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser[] getAll()
	 * @method bool remove(\Bitrix\Hahariki\Model\EO_SessionUser $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Hahariki\Model\EO_SessionUser_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection merge(?\Bitrix\Hahariki\Model\EO_SessionUser_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_SessionUser_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Hahariki\Model\SessionUserTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\SessionUserTable';
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_SessionUser_Result exec()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_SessionUser_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection fetchCollection()
	 */
	class EO_SessionUser_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser createObject($setDefaultValues = true)
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection createCollection()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser wakeUpObject($row)
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection wakeUpCollection($rows)
	 */
	class EO_SessionUser_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Hahariki\Model\SessionTable:hahariki/lib/Model/SessionTable.php */
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_Session
	 * @see \Bitrix\Hahariki\Model\SessionTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Hahariki\Model\EO_Session setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \int getStatus()
	 * @method \Bitrix\Hahariki\Model\EO_Session setStatus(\int|\Bitrix\Main\DB\SqlExpression $status)
	 * @method bool hasStatus()
	 * @method bool isStatusFilled()
	 * @method bool isStatusChanged()
	 * @method \int remindActualStatus()
	 * @method \int requireStatus()
	 * @method \Bitrix\Hahariki\Model\EO_Session resetStatus()
	 * @method \Bitrix\Hahariki\Model\EO_Session unsetStatus()
	 * @method \int fillStatus()
	 * @method \int getOwnerId()
	 * @method \Bitrix\Hahariki\Model\EO_Session setOwnerId(\int|\Bitrix\Main\DB\SqlExpression $ownerId)
	 * @method bool hasOwnerId()
	 * @method bool isOwnerIdFilled()
	 * @method bool isOwnerIdChanged()
	 * @method \int remindActualOwnerId()
	 * @method \int requireOwnerId()
	 * @method \Bitrix\Hahariki\Model\EO_Session resetOwnerId()
	 * @method \Bitrix\Hahariki\Model\EO_Session unsetOwnerId()
	 * @method \int fillOwnerId()
	 * @method \int getStage()
	 * @method \Bitrix\Hahariki\Model\EO_Session setStage(\int|\Bitrix\Main\DB\SqlExpression $stage)
	 * @method bool hasStage()
	 * @method bool isStageFilled()
	 * @method bool isStageChanged()
	 * @method \int remindActualStage()
	 * @method \int requireStage()
	 * @method \Bitrix\Hahariki\Model\EO_Session resetStage()
	 * @method \Bitrix\Hahariki\Model\EO_Session unsetStage()
	 * @method \int fillStage()
	 * @method \Bitrix\Main\Type\DateTime getEndStageTime()
	 * @method \Bitrix\Hahariki\Model\EO_Session setEndStageTime(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $endStageTime)
	 * @method bool hasEndStageTime()
	 * @method bool isEndStageTimeFilled()
	 * @method bool isEndStageTimeChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualEndStageTime()
	 * @method \Bitrix\Main\Type\DateTime requireEndStageTime()
	 * @method \Bitrix\Hahariki\Model\EO_Session resetEndStageTime()
	 * @method \Bitrix\Hahariki\Model\EO_Session unsetEndStageTime()
	 * @method \Bitrix\Main\Type\DateTime fillEndStageTime()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection getAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection requireAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection fillAnekdot()
	 * @method bool hasAnekdot()
	 * @method bool isAnekdotFilled()
	 * @method bool isAnekdotChanged()
	 * @method void addToAnekdot(\Bitrix\Hahariki\Model\EO_Anekdot $anekdot)
	 * @method void removeFromAnekdot(\Bitrix\Hahariki\Model\EO_Anekdot $anekdot)
	 * @method void removeAllAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_Session resetAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_Session unsetAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection getUser()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection requireUser()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection fillUser()
	 * @method bool hasUser()
	 * @method bool isUserFilled()
	 * @method bool isUserChanged()
	 * @method void addToUser(\Bitrix\Hahariki\Model\EO_SessionUser $sessionUser)
	 * @method void removeFromUser(\Bitrix\Hahariki\Model\EO_SessionUser $sessionUser)
	 * @method void removeAllUser()
	 * @method \Bitrix\Hahariki\Model\EO_Session resetUser()
	 * @method \Bitrix\Hahariki\Model\EO_Session unsetUser()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_Session set($fieldName, $value)
	 * @method \Bitrix\Hahariki\Model\EO_Session reset($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_Session unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Hahariki\Model\EO_Session wakeUp($data)
	 */
	class EO_Session {
		/* @var \Bitrix\Hahariki\Model\SessionTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\SessionTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_Session_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \int[] getStatusList()
	 * @method \int[] fillStatus()
	 * @method \int[] getOwnerIdList()
	 * @method \int[] fillOwnerId()
	 * @method \int[] getStageList()
	 * @method \int[] fillStage()
	 * @method \Bitrix\Main\Type\DateTime[] getEndStageTimeList()
	 * @method \Bitrix\Main\Type\DateTime[] fillEndStageTime()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection[] getAnekdotList()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection getAnekdotCollection()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection fillAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection[] getUserList()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection getUserCollection()
	 * @method \Bitrix\Hahariki\Model\EO_SessionUser_Collection fillUser()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Hahariki\Model\EO_Session $object)
	 * @method bool has(\Bitrix\Hahariki\Model\EO_Session $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_Session getByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_Session[] getAll()
	 * @method bool remove(\Bitrix\Hahariki\Model\EO_Session $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Hahariki\Model\EO_Session_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Hahariki\Model\EO_Session current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Hahariki\Model\EO_Session_Collection merge(?\Bitrix\Hahariki\Model\EO_Session_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_Session_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Hahariki\Model\SessionTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\SessionTable';
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Session_Result exec()
	 * @method \Bitrix\Hahariki\Model\EO_Session fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_Session_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_Session_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_Session fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_Session_Collection fetchCollection()
	 */
	class EO_Session_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_Session createObject($setDefaultValues = true)
	 * @method \Bitrix\Hahariki\Model\EO_Session_Collection createCollection()
	 * @method \Bitrix\Hahariki\Model\EO_Session wakeUpObject($row)
	 * @method \Bitrix\Hahariki\Model\EO_Session_Collection wakeUpCollection($rows)
	 */
	class EO_Session_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Hahariki\Model\SessionStatusTable:hahariki/lib/Model/SessionStatusTable.php */
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_SessionStatus
	 * @see \Bitrix\Hahariki\Model\SessionStatusTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \string getTitle()
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus setTitle(\string|\Bitrix\Main\DB\SqlExpression $title)
	 * @method bool hasTitle()
	 * @method bool isTitleFilled()
	 * @method bool isTitleChanged()
	 * @method \string remindActualTitle()
	 * @method \string requireTitle()
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus resetTitle()
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus unsetTitle()
	 * @method \string fillTitle()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus set($fieldName, $value)
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus reset($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Hahariki\Model\EO_SessionStatus wakeUp($data)
	 */
	class EO_SessionStatus {
		/* @var \Bitrix\Hahariki\Model\SessionStatusTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\SessionStatusTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_SessionStatus_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \string[] getTitleList()
	 * @method \string[] fillTitle()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Hahariki\Model\EO_SessionStatus $object)
	 * @method bool has(\Bitrix\Hahariki\Model\EO_SessionStatus $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus getByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus[] getAll()
	 * @method bool remove(\Bitrix\Hahariki\Model\EO_SessionStatus $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Hahariki\Model\EO_SessionStatus_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus_Collection merge(?\Bitrix\Hahariki\Model\EO_SessionStatus_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_SessionStatus_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Hahariki\Model\SessionStatusTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\SessionStatusTable';
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_SessionStatus_Result exec()
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_SessionStatus_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus_Collection fetchCollection()
	 */
	class EO_SessionStatus_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus createObject($setDefaultValues = true)
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus_Collection createCollection()
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus wakeUpObject($row)
	 * @method \Bitrix\Hahariki\Model\EO_SessionStatus_Collection wakeUpCollection($rows)
	 */
	class EO_SessionStatus_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Hahariki\Model\AnekdotTable:hahariki/lib/Model/AnekdotTable.php */
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_Anekdot
	 * @see \Bitrix\Hahariki\Model\AnekdotTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \int getSessionId()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot setSessionId(\int|\Bitrix\Main\DB\SqlExpression $sessionId)
	 * @method bool hasSessionId()
	 * @method bool isSessionIdFilled()
	 * @method bool isSessionIdChanged()
	 * @method \int remindActualSessionId()
	 * @method \int requireSessionId()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot resetSessionId()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot unsetSessionId()
	 * @method \int fillSessionId()
	 * @method \Bitrix\Hahariki\Model\EO_Session getSession()
	 * @method \Bitrix\Hahariki\Model\EO_Session remindActualSession()
	 * @method \Bitrix\Hahariki\Model\EO_Session requireSession()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot setSession(\Bitrix\Hahariki\Model\EO_Session $object)
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot resetSession()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot unsetSession()
	 * @method bool hasSession()
	 * @method bool isSessionFilled()
	 * @method bool isSessionChanged()
	 * @method \Bitrix\Hahariki\Model\EO_Session fillSession()
	 * @method \string getCategory()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot setCategory(\string|\Bitrix\Main\DB\SqlExpression $category)
	 * @method bool hasCategory()
	 * @method bool isCategoryFilled()
	 * @method bool isCategoryChanged()
	 * @method \string remindActualCategory()
	 * @method \string requireCategory()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot resetCategory()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot unsetCategory()
	 * @method \string fillCategory()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection getAnekdotPart()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection requireAnekdotPart()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection fillAnekdotPart()
	 * @method bool hasAnekdotPart()
	 * @method bool isAnekdotPartFilled()
	 * @method bool isAnekdotPartChanged()
	 * @method void addToAnekdotPart(\Bitrix\Hahariki\Model\EO_AnekdotPart $anekdotPart)
	 * @method void removeFromAnekdotPart(\Bitrix\Hahariki\Model\EO_AnekdotPart $anekdotPart)
	 * @method void removeAllAnekdotPart()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot resetAnekdotPart()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot unsetAnekdotPart()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot set($fieldName, $value)
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot reset($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Hahariki\Model\EO_Anekdot wakeUp($data)
	 */
	class EO_Anekdot {
		/* @var \Bitrix\Hahariki\Model\AnekdotTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\AnekdotTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_Anekdot_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \int[] getSessionIdList()
	 * @method \int[] fillSessionId()
	 * @method \Bitrix\Hahariki\Model\EO_Session[] getSessionList()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection getSessionCollection()
	 * @method \Bitrix\Hahariki\Model\EO_Session_Collection fillSession()
	 * @method \string[] getCategoryList()
	 * @method \string[] fillCategory()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection[] getAnekdotPartList()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection getAnekdotPartCollection()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection fillAnekdotPart()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Hahariki\Model\EO_Anekdot $object)
	 * @method bool has(\Bitrix\Hahariki\Model\EO_Anekdot $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot getByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot[] getAll()
	 * @method bool remove(\Bitrix\Hahariki\Model\EO_Anekdot $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Hahariki\Model\EO_Anekdot_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection merge(?\Bitrix\Hahariki\Model\EO_Anekdot_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_Anekdot_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Hahariki\Model\AnekdotTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\AnekdotTable';
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Anekdot_Result exec()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_Anekdot_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection fetchCollection()
	 */
	class EO_Anekdot_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot createObject($setDefaultValues = true)
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection createCollection()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot wakeUpObject($row)
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection wakeUpCollection($rows)
	 */
	class EO_Anekdot_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Hahariki\Model\AnekdotPartTable:hahariki/lib/Model/AnekdotPartTable.php */
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_AnekdotPart
	 * @see \Bitrix\Hahariki\Model\AnekdotPartTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \string getText()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart setText(\string|\Bitrix\Main\DB\SqlExpression $text)
	 * @method bool hasText()
	 * @method bool isTextFilled()
	 * @method bool isTextChanged()
	 * @method \string remindActualText()
	 * @method \string requireText()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart resetText()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart unsetText()
	 * @method \string fillText()
	 * @method \int getAuthorId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart setAuthorId(\int|\Bitrix\Main\DB\SqlExpression $authorId)
	 * @method bool hasAuthorId()
	 * @method bool isAuthorIdFilled()
	 * @method bool isAuthorIdChanged()
	 * @method \int remindActualAuthorId()
	 * @method \int requireAuthorId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart resetAuthorId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart unsetAuthorId()
	 * @method \int fillAuthorId()
	 * @method \int getParentId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart setParentId(\int|\Bitrix\Main\DB\SqlExpression $parentId)
	 * @method bool hasParentId()
	 * @method bool isParentIdFilled()
	 * @method bool isParentIdChanged()
	 * @method \int remindActualParentId()
	 * @method \int requireParentId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart resetParentId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart unsetParentId()
	 * @method \int fillParentId()
	 * @method \int getAnekdotId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart setAnekdotId(\int|\Bitrix\Main\DB\SqlExpression $anekdotId)
	 * @method bool hasAnekdotId()
	 * @method bool isAnekdotIdFilled()
	 * @method bool isAnekdotIdChanged()
	 * @method \int remindActualAnekdotId()
	 * @method \int requireAnekdotId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart resetAnekdotId()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart unsetAnekdotId()
	 * @method \int fillAnekdotId()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot getAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot remindActualAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot requireAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart setAnekdot(\Bitrix\Hahariki\Model\EO_Anekdot $object)
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart resetAnekdot()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart unsetAnekdot()
	 * @method bool hasAnekdot()
	 * @method bool isAnekdotFilled()
	 * @method bool isAnekdotChanged()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot fillAnekdot()
	 * @method \Bitrix\Main\EO_User getAuthor()
	 * @method \Bitrix\Main\EO_User remindActualAuthor()
	 * @method \Bitrix\Main\EO_User requireAuthor()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart setAuthor(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart resetAuthor()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart unsetAuthor()
	 * @method bool hasAuthor()
	 * @method bool isAuthorFilled()
	 * @method bool isAuthorChanged()
	 * @method \Bitrix\Main\EO_User fillAuthor()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart set($fieldName, $value)
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart reset($fieldName)
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Hahariki\Model\EO_AnekdotPart wakeUp($data)
	 */
	class EO_AnekdotPart {
		/* @var \Bitrix\Hahariki\Model\AnekdotPartTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\AnekdotPartTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * EO_AnekdotPart_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \string[] getTextList()
	 * @method \string[] fillText()
	 * @method \int[] getAuthorIdList()
	 * @method \int[] fillAuthorId()
	 * @method \int[] getParentIdList()
	 * @method \int[] fillParentId()
	 * @method \int[] getAnekdotIdList()
	 * @method \int[] fillAnekdotId()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot[] getAnekdotList()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection getAnekdotCollection()
	 * @method \Bitrix\Hahariki\Model\EO_Anekdot_Collection fillAnekdot()
	 * @method \Bitrix\Main\EO_User[] getAuthorList()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection getAuthorCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillAuthor()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Hahariki\Model\EO_AnekdotPart $object)
	 * @method bool has(\Bitrix\Hahariki\Model\EO_AnekdotPart $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart getByPrimary($primary)
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart[] getAll()
	 * @method bool remove(\Bitrix\Hahariki\Model\EO_AnekdotPart $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection merge(?\Bitrix\Hahariki\Model\EO_AnekdotPart_Collection $collection)
	 * @method bool isEmpty()
	 */
	class EO_AnekdotPart_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Hahariki\Model\AnekdotPartTable */
		static public $dataClass = '\Bitrix\Hahariki\Model\AnekdotPartTable';
	}
}
namespace Bitrix\Hahariki\Model {
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_AnekdotPart_Result exec()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_AnekdotPart_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart fetchObject()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection fetchCollection()
	 */
	class EO_AnekdotPart_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart createObject($setDefaultValues = true)
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection createCollection()
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart wakeUpObject($row)
	 * @method \Bitrix\Hahariki\Model\EO_AnekdotPart_Collection wakeUpCollection($rows)
	 */
	class EO_AnekdotPart_Entity extends \Bitrix\Main\ORM\Entity {}
}