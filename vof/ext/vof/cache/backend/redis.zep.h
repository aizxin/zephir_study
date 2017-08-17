
extern zend_class_entry *vof_cache_backend_redis_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Backend_Redis);

PHP_METHOD(Vof_Cache_Backend_Redis, __construct);
PHP_METHOD(Vof_Cache_Backend_Redis, _connect);
PHP_METHOD(Vof_Cache_Backend_Redis, get);
PHP_METHOD(Vof_Cache_Backend_Redis, save);
PHP_METHOD(Vof_Cache_Backend_Redis, delete);
PHP_METHOD(Vof_Cache_Backend_Redis, queryKeys);
PHP_METHOD(Vof_Cache_Backend_Redis, exists);
PHP_METHOD(Vof_Cache_Backend_Redis, increment);
PHP_METHOD(Vof_Cache_Backend_Redis, decrement);
PHP_METHOD(Vof_Cache_Backend_Redis, flush);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_redis___construct, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, frontend, Vof\\Cache\\FrontendInterface, 0)
	ZEND_ARG_INFO(0, options)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_redis_get, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_redis_save, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, content)
	ZEND_ARG_INFO(0, lifetime)
	ZEND_ARG_INFO(0, stopBuffer)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_redis_delete, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_redis_querykeys, 0, 0, 0)
	ZEND_ARG_INFO(0, prefix)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_redis_exists, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_redis_increment, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_redis_decrement, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_backend_redis_method_entry) {
	PHP_ME(Vof_Cache_Backend_Redis, __construct, arginfo_vof_cache_backend_redis___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Cache_Backend_Redis, _connect, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Redis, get, arginfo_vof_cache_backend_redis_get, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Redis, save, arginfo_vof_cache_backend_redis_save, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Redis, delete, arginfo_vof_cache_backend_redis_delete, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Redis, queryKeys, arginfo_vof_cache_backend_redis_querykeys, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Redis, exists, arginfo_vof_cache_backend_redis_exists, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Redis, increment, arginfo_vof_cache_backend_redis_increment, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Redis, decrement, arginfo_vof_cache_backend_redis_decrement, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Redis, flush, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
