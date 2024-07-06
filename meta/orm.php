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