
extern zend_class_entry *vof_session_adapter_libmemcached_ce;

ZEPHIR_INIT_CLASS(Vof_Session_Adapter_Libmemcached);

PHP_METHOD(Vof_Session_Adapter_Libmemcached, getLibmemcached);
PHP_METHOD(Vof_Session_Adapter_Libmemcached, getLifetime);
PHP_METHOD(Vof_Session_Adapter_Libmemcached, __construct);
PHP_METHOD(Vof_Session_Adapter_Libmemcached, open);
PHP_METHOD(Vof_Session_Adapter_Libmemcached, close);
PHP_METHOD(Vof_Session_Adapter_Libmemcached, read);
PHP_METHOD(Vof_Session_Adapter_Libmemcached, write);
PHP_METHOD(Vof_Session_Adapter_Libmemcached, destroy);
PHP_METHOD(Vof_Session_Adapter_Libmemcached, gc);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_libmemcached___construct, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, options, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_libmemcached_read, 0, 0, 1)
	ZEND_ARG_INFO(0, sessionId)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_libmemcached_write, 0, 0, 2)
	ZEND_ARG_INFO(0, sessionId)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_libmemcached_destroy, 0, 0, 0)
	ZEND_ARG_INFO(0, sessionId)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_session_adapter_libmemcached_method_entry) {
	PHP_ME(Vof_Session_Adapter_Libmemcached, getLibmemcached, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Libmemcached, getLifetime, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Libmemcached, __construct, arginfo_vof_session_adapter_libmemcached___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Session_Adapter_Libmemcached, open, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Libmemcached, close, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Libmemcached, read, arginfo_vof_session_adapter_libmemcached_read, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Libmemcached, write, arginfo_vof_session_adapter_libmemcached_write, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Libmemcached, destroy, arginfo_vof_session_adapter_libmemcached_destroy, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Libmemcached, gc, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};