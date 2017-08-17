
extern zend_class_entry *vof_session_adapter_redis_ce;

ZEPHIR_INIT_CLASS(Vof_Session_Adapter_Redis);

PHP_METHOD(Vof_Session_Adapter_Redis, getRedis);
PHP_METHOD(Vof_Session_Adapter_Redis, getLifetime);
PHP_METHOD(Vof_Session_Adapter_Redis, __construct);
PHP_METHOD(Vof_Session_Adapter_Redis, open);
PHP_METHOD(Vof_Session_Adapter_Redis, close);
PHP_METHOD(Vof_Session_Adapter_Redis, read);
PHP_METHOD(Vof_Session_Adapter_Redis, write);
PHP_METHOD(Vof_Session_Adapter_Redis, destroy);
PHP_METHOD(Vof_Session_Adapter_Redis, gc);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_redis___construct, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, options, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_redis_read, 0, 0, 1)
	ZEND_ARG_INFO(0, sessionId)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_redis_write, 0, 0, 2)
	ZEND_ARG_INFO(0, sessionId)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_session_adapter_redis_destroy, 0, 0, 0)
	ZEND_ARG_INFO(0, sessionId)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_session_adapter_redis_method_entry) {
	PHP_ME(Vof_Session_Adapter_Redis, getRedis, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Redis, getLifetime, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Redis, __construct, arginfo_vof_session_adapter_redis___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Session_Adapter_Redis, open, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Redis, close, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Redis, read, arginfo_vof_session_adapter_redis_read, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Redis, write, arginfo_vof_session_adapter_redis_write, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Redis, destroy, arginfo_vof_session_adapter_redis_destroy, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Session_Adapter_Redis, gc, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
