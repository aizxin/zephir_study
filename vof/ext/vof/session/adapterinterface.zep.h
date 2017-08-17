
extern zend_class_entry *vof_session_adapterinterface_ce;

ZEPHIR_INIT_CLASS(Vof_Session_AdapterInterface);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapterinterface_setoptions, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, options, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapterinterface_get, 0, 0, 1)
	ZEND_ARG_INFO(0, index)
	ZEND_ARG_INFO(0, defaultValue)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapterinterface_set, 0, 0, 2)
	ZEND_ARG_INFO(0, index)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapterinterface_has, 0, 0, 1)
	ZEND_ARG_INFO(0, index)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapterinterface_remove, 0, 0, 1)
	ZEND_ARG_INFO(0, index)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapterinterface_destroy, 0, 0, 0)
	ZEND_ARG_INFO(0, removeData)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapterinterface_regenerateid, 0, 0, 0)
	ZEND_ARG_INFO(0, deleteOldSession)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapterinterface_setname, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_session_adapterinterface_method_entry) {
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, start, NULL)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, setOptions, arginfo_vof_session_adapterinterface_setoptions)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, getOptions, NULL)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, get, arginfo_vof_session_adapterinterface_get)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, set, arginfo_vof_session_adapterinterface_set)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, has, arginfo_vof_session_adapterinterface_has)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, remove, arginfo_vof_session_adapterinterface_remove)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, getId, NULL)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, isStarted, NULL)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, destroy, arginfo_vof_session_adapterinterface_destroy)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, regenerateId, arginfo_vof_session_adapterinterface_regenerateid)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, setName, arginfo_vof_session_adapterinterface_setname)
	PHP_ABSTRACT_ME(Vof_Session_AdapterInterface, getName, NULL)
	PHP_FE_END
};
