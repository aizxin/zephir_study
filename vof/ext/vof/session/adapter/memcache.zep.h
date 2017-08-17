
extern zend_class_entry *vof_session_adapter_memcache_ce;

ZEPHIR_INIT_CLASS(Vof_Session_Adapter_Memcache);

PHP_METHOD(Vof_Session_Adapter_Memcache, getMemcache);
PHP_METHOD(Vof_Session_Adapter_Memcache, getLifetime);
PHP_METHOD(Vof_Session_Adapter_Memcache, __construct);
PHP_METHOD(Vof_Session_Adapter_Memcache, open);
PHP_METHOD(Vof_Session_Adapter_Memcache, close);
PHP_METHOD(Vof_Session_Adapter_Memcache, read);
PHP_METHOD(Vof_Session_Adapter_Memcache, write);
PHP_METHOD(Vof_Session_Adapter_Memcache, destroy);
PHP_METHOD(Vof_Session_Adapter_Memcache, gc);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_memcache___construct, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, options, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_memcache_read, 0, 0, 1)
	ZEND_ARG_INFO(0, sessionId)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_memcache_write, 0, 0, 2)
	ZEND_ARG_INFO(0, sessionId)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_memcache_destroy, 0, 0, 0)
	ZEND_ARG_INFO(0, sessionId)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_session_adapter_memcache_method_entry) {
	PHP_ME(Vof_Session_Adapter_Memcache, getMemcache, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Memcache, getLifetime, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Memcache, __construct, arginfo_vof_session_adapter_memcache___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Session_Adapter_Memcache, open, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Memcache, close, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Memcache, read, arginfo_vof_session_adapter_memcache_read, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Memcache, write, arginfo_vof_session_adapter_memcache_write, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Memcache, destroy, arginfo_vof_session_adapter_memcache_destroy, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Memcache, gc, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
